class HomeController extends ConnectionServer{
    static createSchedule(data)
    {
        return new Promise(resolve => {
            this.sendRequest('schedule','POST',data,resolve,true,false)
        })
    }
}
