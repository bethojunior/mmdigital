class SlideController extends ConnectionServer{

    /**
     * @param id
     * @returns {Promise<resolve>}
     */
    static delete(id)
    {
        return new Promise(resolve => {
            this.sendRequest('slide/'+id,'DELETE',null,resolve,true)
        })
    }
}
