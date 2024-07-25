# ADS-B stack

## Usage

### Finding USB devices
```bash
docker run --rm -it --device /dev/bus/usb --entrypoint rtl_eeprom ghcr.io/sdr-enthusiasts/docker-adsb-ultrafeeder -s 1090
```

### Finding PPM
```bash
docker run --rm -it --entrypoint /scripts/estimate_rtlsdr_ppm.sh --device /dev/bus/usb ghcr.io/sdr-enthusiasts/docker-readsb-protobuf:latest
```

### change IP
file: ```web/public/index.php```
```php
$baseIp = "10.0.254.31";
```