# containers
My personal Docker stacks, containers and Docker compose files

## Table of content
- [containers](#containers)
  - [Table of content](#table-of-content)
  - [Stacks](#stacks)
  - [Repository summary](#repository-summary)
  - [License](#license)

## Stacks
Directory | Stack | Note
--- | --- | ---
ads-b | [sdr-enthusiasts containers](https://github.com/sdr-enthusiasts), [gatus](https://github.com/TwiN/gatus) and [Apache with PHP](https://hub.docker.com/_/php)  | My personalized ADS-B aircraft radar stack. Sending data to FlightAware, FlightRadar, RadarBox, PlaneFinder & ADS-B Exchange. Using one single RTL SDR device.
apt-cacher-ng | [sameersbn/apt-cacher-ng](https://hub.docker.com/r/sameersbn/apt-cacher-ng) | Apt_Cache_ng is A caching proxy. Specialized for package files from Linux distributors, primarily for Debian
cloudflare-ddns | [favonia/cloudflare-ddns](https://hub.docker.com/r/favonia/cloudflare-ddns) | A small, feature-rich, and robust Cloudflare DDNS updater
core-stack | [Portainer agent](https://www.portainer.io/), [Dockge](https://github.com/louislam/dockge), [AutoHeal](https://github.com/willfarrell/docker-autoheal), [cAdvisor](https://github.com/google/cadvisor), [Watchtower](https://containrrr.dev/watchtower/) & [Dozzle](https://dozzle.dev/) | My base core stack for every container host server
core-stack-client | [Portainer](https://www.portainer.io/) + [Dozzle](https://dozzle.dev/) | Client for the Core-Stack services
dns-adguard | [AdGuard Home](https://github.com/AdguardTeam/AdGuardHome) | AD Blocking DNS server in a box
dns-blocky | [spx01/blocky](https://hub.docker.com/r/spx01/blocky) | Fast and lightweight DNS proxy as ad-blocker for local network with many features
dns-pihole | [PiHole](https://pi-hole.net/) DNS server | AD Blocking DNS server in a box
exporter-stack | [PiHole exporter](https://github.com/eko/pihole-exporter), [Speedtest exporter](https://github.com/MiguelNdeCarvalho/speedtest-exporter) and [Exportarr](https://github.com/onedr0p/exportarr) (Lidarr, Sonarr, Radarr, etc.) | Exporters for Prometheus
filebot | [Filebot](https://hub.docker.com/r/rednoah/filebot/) | Manage media files
fileflows | [FileFlows](https://github.com/revenz/FileFlows) | FileFlows is a file processing application that can execute actions against a file in a tree flow structure.
gatus | [gatus](https://github.com/TwiN/gatus) | Automated developer-oriented status page
homebridge | [Homebridge](https://homebridge.io/) | HomeBridge for Apple HomeKit
jenkins | [Jenkins](https://www.jenkins.io/) | CI/CD
jetbrains-datalore | [Jetbrains DataLore](https://www.jetbrains.com/datalore/) | Self-hosted Data Science Platform for Teams
jetbrains-teamcity | [Jetbrains TeamCity](https://www.jetbrains.com/teamcity/) | The Hassle-Free CI/CD Tool by JetBrains
jetbrains-yourtrack | [Jetbrains YourTrack](https://www.jetbrains.com/youtrack/) | Everything in one place. Track tasks, manage projects, maintain a knowledge base, support your customers, collaborate, and deliver great products.
media-stack | [Radarr](https://radarr.video/), [Sonarr](https://sonarr.tv/), [Bazarr](https://www.bazarr.media/), [FlareSolverr](https://github.com/FlareSolverr/FlareSolverr), [Prowlarr](https://prowlarr.com/), [qBittorrent](https://www.qbittorrent.org/) and [Gluetun](https://github.com/qdm12/gluetun) | Media automation for Downloads
media-stack-addons | [Overseerr](https://overseerr.dev/), [Cleanarr](https://github.com/Cleanarr/Cleanarr), [Tautulli](https://tautulli.com/), [taxel/plextraktsync](https://github.com/Taxel/PlexTraktSync), [mcuadros/ofelia](https://github.com/mcuadros/ofelia) and [Kometa](https://kometa.wiki/) | Media stack addons
minecraft | [Docker Minecraft Server](https://github.com/itzg/docker-minecraft-server) | Docker image that provides a Minecraft Server that will automatically download selected version at startup
minio | [MinIO](https://min.io/) | S3 & Kubernetes Native Object Storage
overseerr | [Overseerr](https://overseerr.dev/) | Request management and media discovery tool for the Plex ecosystem
pihole-sync | [pihole-sync](https://github.com/mattwebbio/orbital-sync) | Orbital Sync synchronizes multiple Pi-hole instances for high availability (HA) using the built-in "teleporter"
portainer | [Portainer](https://www.portainer.io/) | Manage docker hosts easy
radiosonde | [radiosonde_auto_rx](https://github.com/projecthorus/radiosonde_auto_rx) | Automatically Track Radiosonde Launches using RTLSDR
sso-stack | [Authentik](https://goauthentik.io/) | Self-hosted, open source identity provider 
statsping-ng | [statsping-ng](https://statping-ng.github.io/) | Monitor your websites, microservices and other servers with an awesome open source application that creates a welcoming status page for your end users.
trakt | [taxel/plextraktsync](https://github.com/Taxel/PlexTraktSync) | Track what you watch and when. Discover what's hot and where you can watch it. Share comments, ratings and recommendations.
unifi | [UniFi](https://docs.linuxserver.io/images/docker-unifi-network-application/) | The UniFi network controller allows you to manage your UniFi network devices from an easy-to-use self-hosted dashboard.
uptime-kuma | [Uptime Kuma](https://github.com/louislam/uptime-kuma) | A fancy self-hosted monitoring tool

## Repository summary

Description | Status
---- | ------
License | ![GitHub](https://img.shields.io/github/license/Bastiaantjuhh/containers)
Commits | ![GitHub commit activity](https://img.shields.io/github/commit-activity/m/Bastiaantjuhh/containers)
Language | ![GitHub top language](https://img.shields.io/github/languages/top/Bastiaantjuhh/containers)
Open issues | ![GitHub issues](https://img.shields.io/github/issues/Bastiaantjuhh/containers)
Closed issues | ![GitHub closed issues](https://img.shields.io/github/issues-closed/Bastiaantjuhh/containers)
Pull requests | ![GitHub pull requests](https://img.shields.io/github/issues-pr-raw/Bastiaantjuhh/containers)
Closed pull requests | ![GitHub closed pull requests](https://img.shields.io/github/issues-pr-closed-raw/Bastiaantjuhh/containers)
Repo Size | ![GitHub repo size](https://img.shields.io/github/repo-size/Bastiaantjuhh/containers)

## License
This project is licensed under the [MIT License](https://github.com/Bastiaantjuhh/containers/blob/master/LICENSE). You are encouraged to embed the project into your other projects, as long as the license permits.

> MIT License
> 
> Copyright (c) 2024 Bastiaan de Hart
> 
> Permission is hereby granted, free of charge, to any person obtaining
> a copy of this software and associated documentation files (the
> "Software"), to deal in the Software without restriction, including
> without limitation the rights to use, copy, modify, merge, publish,
> distribute, sublicense, and/or sell copies of the Software, and to
> permit persons to whom the Software is furnished to do so, subject to
> the following conditions:
> 
> The above copyright notice and this permission notice shall be
> included in all copies or substantial portions of the Software.
> 
> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
> EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
> MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
> IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
> CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
> TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
> SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
