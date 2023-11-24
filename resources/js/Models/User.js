export default class User {
    constructor(attributes = {}) {
        Object.assign(this, attributes);
    }

    follows() {
        return true;
    }

    is(user) {
        return this.id == user.id;
    }
}
