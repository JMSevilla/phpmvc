const state = {
  app : 'app/',
  helpers: 'Helpers'
}

const request = {
  create(obj, resolve){
    return $.post(state.app + state.helpers + "/registerHelper.php", obj, (response) => {
      resolve(response);
    })
  }
}

const asynchronous = {
  async step1(obj){
    await Promise.all([this.register(obj)])
  },
  async register(obj){
    const promise = new Promise((resolve) => {
      request.create(obj, resolve);
    })
    //final response
    await promise.then(response => {
      console.log(response);
    })
  }
}

export default asynchronous
