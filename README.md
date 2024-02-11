## Running the Project

* Setup .env
* `php artisan migrate`
* `php artisan db:seed`
* `php artisan serve`


## Guide to Build

### Database

* **Migration**
* **Model**
  * Name Table
  * Fillable
  * Relation `Model -> relation -> Name : Model has Name`
* **Seeder**


### Routing API

### Resource

### Controller

* **Read**

        *Model::with(*relation)->all();
        *Model::take(*)->get();
        *Model::where('*field', $*attr)->first();
        
* **Create**

        $data = $request->validate(); 
        $var = new *Model($data);
        $var->save();
        
* **Update**

        $data = $request->validated(); 
        $var = *Model::where('*field', $*attr)->first();
        $var->fill($data);
        $var->save();
        
* **Delete**

        $var = *Model::where('*field', $*attr)->first();
        $var->delete();

* **Return**

        return *NameResource::collection($data);
        return new NameResource($data);

### Request

* **authorize**()
* **rules**
* **failedValidation**


        protected function failedValidation(Validator $validator)
        {
            throw new HttpResponseException(response([
                "errors" => $validator->getMessageBag()
            ], 400));
        }
