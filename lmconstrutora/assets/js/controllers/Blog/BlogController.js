class BlogController extends ConnectionServer{
    /**
     *
     * @param id
     * @returns {Promise<unknown>}
     */
    static delete(id)
    {
        return new Promise(resolve => {
            this.sendRequest('blog/'+id,'DELETE',null,resolve,true)
        })
    }
}
