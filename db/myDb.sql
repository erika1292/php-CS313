CREATE TABLE device (
    deviceName         varchar(80),     --Given name of Device
    deviceType         varchar(80),     -- device Type, choices from typeDevices
    deviceOwner        varchar(80),     -- current owner of device
    sn                 varchar(80),     -- serial number
    installdate            date             -- date installed
);

CREATE TABLE typeDevices(
    laptop            varchar(80),
    computer          varchar(80),
    iPad              varchar(80)
);

INSERT INTO device values ('Ironman','Server','Avengers','ir0nm@n','2019')
INSERT INTO device values ('Marvel','Server','Avengers','Carol1st','2019')
INSERT INTO device values ('Throne','Server','Thanos','Chair@1','2019')
INSERT INTO device values ('Mjolnir','Server','Thor','Thund3r1','2019')

INSERT INTO typeDevices('Lenovo')
INSERT INTO typeDevices('Dell')
INSERT INTO typeDevices('Apple')