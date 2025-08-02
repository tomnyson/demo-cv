FROM ubuntu:20.04

ENV LANG=en_US.UTF-8
ENV TZ=Asia/Ho_Chi_Minh

RUN apt update && apt upgrade -y && \
    apt install -y wget curl sudo locales tzdata && \
    locale-gen en_US.UTF-8 && \
    ln -fs /usr/share/zoneinfo/$TZ /etc/localtime && \
    dpkg-reconfigure --frontend noninteractive tzdata

# Tải và cài đặt aaPanel
RUN wget -O install.sh http://www.aapanel.com/script/install-ubuntu_6.0_en.sh && \
    bash install.sh <<EOF
y
EOF

EXPOSE 80 443 8888

CMD ["/bin/bash"]