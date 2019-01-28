# Faker adorable avatars

Follow [this](https://github.com/fzaninotto/Faker#faker-internals-understanding-providers) to add `Faker\Provider\Adorable` class
to your Faker providers. After, you'll have access to two new methods:

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