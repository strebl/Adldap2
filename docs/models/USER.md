## User Model

The user model will be returned when an AD result entry contains the object category: `person`.

### Methods and Attribute Setters / Getters

##### Getting / setting the users' `title` attribute:

```php
$user->getTitle();

$user->setTitle('Manager');
```

##### Getting / setting the users' `department` attribute:

```php
$user->getDepartment();

$user->setDepartment('Accounting');
```

##### Getting / setting the users' `givenName` attribute:

```php
$user->getFirstName();

$user->setFirstName('John');
```

##### Getting / setting the users' `surname` attribute:

```php
$user->getLastName();

$user->setLastName('Doe');
```

##### Getting / setting the users' `telephone` attribute:

```php
$user->getTelephoneNumber();

$user->setTelephoneNumber('555 555-5555');
```

##### Getting / setting the users' `company` attribute:

```php
$user->getCompany();

$user->setCompany('Acme');
```

##### Getting / setting the users' `mail` attribute:

```php
$user->getEmail();

$user->setEmail('jdoe@acme.org');
```

##### Getting / setting the users' `mail` attribute (multiple):

```php
$user->getEmails();

$user->setEmails(['jdoe@acme.org', 'johndoe@otheremail.com']);
```

##### Getting / setting the users' `useraccountcontrol` attribute:

```php
$user->getUserAccountControl();

$user->setUserAccountControl(new AccountControl());
```
    
[More about this here](https://github.com/Adldap2/Adldap2/blob/master/docs/models/user/ACCOUNT-CONTROL.md)

##### Getting the users' `homeMdb` attribute:

```php
$user->getHomeMb();
```

##### Getting the users' `mailnickname` attribute:

```php
$user->getMailNickname();
```

##### Getting the users' `userprincipalname` attribute:

```php
$user->getUserPrincipalName();
```

##### Getting the users' `proxyaddresses` attribute:

```php
$user->getProxyAddresses();
```

##### Getting the users' `scriptpath` attribute:

```php
$user->getScriptPath();
```

##### Getting the users' `badpwdcount` attribute:

```php
$user->getBadPasswordCount();
```

##### Getting the users' `badpasswordtime` attribute:

```php
$user->getBadPasswordTime();
```

##### Getting the users' `pwdlastset` attribute:

```php
$user->getPasswordLastSet();
```

##### Getting the users' `lockouttime` attribute:

```php
$user->getLockoutTime();
```

##### Getting the users' `profilepath` attribute:

```php
$user->getProfilePath();
```

##### Getting the users' `legacyexchangedn` attribute:

```php
$user->getLegacyExchangeDn();
```

##### Getting the users' `accountexpires` attribute:

```php
$user->getAccountExpiry();
```

##### Getting the users' `showinaddressbook` attribute:

```php
$user->getShowInAddressBook();
```
