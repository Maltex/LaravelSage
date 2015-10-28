# Laravel Sage Pay

This package will provide the base functionality for using the Sagepay Server option. It is a work in progress, however it has been
developed with the other Sagepay integrations in mind. It is aimed at Laravel 4.2.

## Installation

Coming Soon!

## Validation

With the nature of the data being managed by this application, validation is a somewhat paramount. All card data is encrypted during communications with Sage however we need to ensure the data being sent is not malformed. Thankfuly, Sage's example PHP integration (http://www.sagepay.co.uk/support/find-an-integration-document/server-integration-documents) provides some robust validation rules that can be applied in your controller code. 

### Validating Billing and Dispatch Addresses

The minimum required details for a UK booking address.

```php
    // set rules billing/dispatch address
    $rules = array(
        'first_name' => array(
            'required',
            'max:20',
            'regex:/^[a-zA-Z\xC0-\xFF0-9\s\\\\\/&\.\']*$/'
        ),
        'last_name'  => array(
            'required',
            'max:20',
            'regex:/^[a-zA-Z\xC0-\xFF0-9\s\\\\\/&\.\']*$/'
        ),
        'b_address_1'  => array(
            'required',
            'max:100',
            'regex:/^[a-zA-Z\xC0-\xFF0-9\s\+\'\\\\\/&:,\.\-()]*$/'
        ),
        'b_address_2'   => array(
            'required',
            'max:100',
            'regex:/^[a-zA-Z\xC0-\xFF0-9\s\+\'\\\\\/&:,\.\-()]*$/'
        ),
        'b_city'       => array(
            'required',
            'max:40',
            'regex:/^[a-zA-Z\xC0-\xFF0-9\s\+\'\\\\\/&:,\.\-()]*$/'
        ),
        'b_county' => array  'required',
            'max:40',
            'regex:/^[a-zA-Z\xC0-\xFF0-9\s\+\'\\\\\/&:,\.\-()]*$/'
        ),
        'b_postcode' => array(
            'required',
            'max:10',
            'regex:/^[a-zA-Z0-9\s-]*$/',
        )
    );
    
    // validate user input
    $validate = Validator::make(Input::all(), $rules);
     
```
Sagepay requires a delivery address to be sent during transaction. If the products on the site don't require delivery, simply use their billing address for the dispatch address details. 

## To Do

- Add View and Controller Code from proprietry into publishable /View and /Controller folders
- Explain in this ReadMe the details of the return notification URL
- Migration table for Sagepay storage of transactions
- Move Status options from controller into config
- Move the registration and listening for notification into the Sagepay class itself to reduce user code
- Move the validation details above into a Customer Validation class which extends a validation interface

## Contributing

Looking for any contributers willing to help develop for the other integration methods, namely: Form and Server-Direct.
This package is being developed alongside a proprietry piece of a software so public controllers and views have not been used -- that's not to say the project couldn't do with them. Contact maltex.dev@gmail.com for access requests.

## License

LaraSage is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

