function receiveMessage(event){
    if(event.origin.indexOf('apis.kompas.com') !== -1){
        var e   = JSON.parse(event.data);
        dataLayer.push({
            'event'                 : 'gtm.'+e.type,
            'gtm.element'           : e.element,
            'gtm.elementClasses'    : e.class || '',
            'gtm.elementId'         : e.id || '',
            'gtm.elementTarget'     : e.target || '',
            'gtm.elementUrl'        : e.url || e.action || ''
        });
    }
}
addEventListener("message", receiveMessage, false);