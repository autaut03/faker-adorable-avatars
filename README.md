# Faker adorable avatars

## Step 1. Register Laravel service provider

If you don't use Laravel, don't worry; it's optional, go to the next step. 
But if you do, and you have auto-discovery enabled (it is by default),
then you can skip Step 2 and go right to step 3. If you don't have auto-discovery on, then register
`AlexWells\FakerAdorableAvatars\FakerAdorableLaravelProvider` provider either in your `config/app.php`'s `providers`
section, or in another service provider.

## Step 2. Add provider to Faker

Follow [this](https://github.com/fzaninotto/Faker#faker-internals-understanding-providers) to add `AlexWells\FakerAdorableAvatars\Adorable` class
to your Faker providers. 

## Step 3. Usage

Generates avatar link. Usually unique, but this is not guaranteed. Optionally, you can provide an ID to use for that
avatar:
```
adorableAvatar(string $id = null, int $size = 300, $pngSuffix = false): string 
// https://api.adorable.io/avatars/100/YXu76qFf3rRODZWWFmoYEnzvxRMGTjKx
```

Generates avatar ID. This is the method used in case no ID is provided to `adorableAvatar` method. Just a simple string
generator. Does not guarantee the string is unique.
```
adorableAvatarId(int $length = 32): string
// YXu76qFf3rRODZWWFmoYEnzvxRMGTjKx
```

More information on those methods is available inside `Adorable` class.