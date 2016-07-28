<?
$subject_val = "[OMPI users] Building OpenMPI on Ubuntu";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 28 21:18:37 2011" -->
<!-- isoreceived="20110129021837" -->
<!-- sent="Sat, 29 Jan 2011 03:18:31 +0100" -->
<!-- isosent="20110129021831" -->
<!-- name="Greef, T.F.A. de" -->
<!-- email="t.f.a.d.greef_at_[hidden]" -->
<!-- subject="[OMPI users] Building OpenMPI on Ubuntu" -->
<!-- id="C33253DAA8B7D24E9523B6F1DF162F5A01D40BBD81B8_at_EXCHANGE10.campus.tue.nl" -->
<!-- charset="us-ascii" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] Building OpenMPI on Ubuntu<br>
<strong>From:</strong> Greef, T.F.A. de (<em>t.f.a.d.greef_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-28 21:18:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15449.php">Damien Hocking: "Re: [OMPI users] Building OpenMPI on Ubuntu"</a>
<li><strong>Previous message:</strong> <a href="15447.php">Gabriele Fatigati: "Re: [OMPI users] Argument parsing issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15449.php">Damien Hocking: "Re: [OMPI users] Building OpenMPI on Ubuntu"</a>
<li><strong>Reply:</strong> <a href="15449.php">Damien Hocking: "Re: [OMPI users] Building OpenMPI on Ubuntu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>I try to compile openmpi with intel compilers on ubuntu 10.10
<br>
Everything configures and compiles OK. I used the following configure file:
<br>
<p>The configure file looks like this:
<br>
<p>#!/bin/bash
<br>
CC=icc CXX=icpc F77=ifort FC=ifort ./configure --prefix=/usr/local/OpenMPI-intel --enable-static --enable-shared
<br>
<p><p>However, when doing make install the I recieve the following error:
<br>
<p>libtool: line 7847: icc: command not found
<br>
libtool: install: error: relink `libopen-rte.la' with the above command before installing it
<br>
<p>This was previously reported in another thread (<a href="http://www.open-mpi.org/community/lists/users/2009/05/9452.php">http://www.open-mpi.org/community/lists/users/2009/05/9452.php</a>).
<br>
I made sure that icc is in my path by sourcing the environmental variables in .bashrc
<br>
<p>source /opt/intel/Compiler/11.1/059/bin/ifortvars.sh intel64
<br>
source /opt/intel/Compiler/11.1/073/bin/iccvars.sh intel64
<br>
<p>The output of my printenv is:
<br>
<p>MANPATH=/opt/intel/Compiler/11.1/073/man/en_US:/opt/intel/Compiler/11.1/059/man/en_US:/usr/local/man:/usr/local/share/man:/usr/share/man
<br>
ORBIT_SOCKETDIR=/tmp/orbit-tom
<br>
SSH_AGENT_PID=1778
<br>
INTEL_LICENSE_FILE=/opt/intel/Compiler/11.1/059/licenses:/opt/intel/licenses:/home/tom/intel/licenses:/opt/intel/Compiler/11.1/073/licenses:/opt/intel/licenses:/home/tom/intel/licenses
<br>
TERM=xterm
<br>
SHELL=/bin/bash
<br>
XDG_SESSION_COOKIE=e1fd4608d199162d1943279000000007-1296259084.406953-2001076340
<br>
LIBRARY_PATH=/opt/intel/Compiler/11.1/073/lib/intel64:/opt/intel/Compiler/11.1/059/lib/intel64
<br>
WINDOWID=56833742
<br>
GNOME_KEYRING_CONTROL=/tmp/keyring-3LAaIy
<br>
GTK_MODULES=canberra-gtk-module
<br>
USER=tom
<br>
LD_LIBRARY_PATH=/opt/intel/Compiler/11.1/073/lib/intel64:/opt/intel/Compiler/11.1/059/lib/intel64
<br>
LS_COLORS=rs=0:di=01;34:ln=01;36:mh=00:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:su=37;41:sg=30;43:ca=30;41:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.lzma=01;31:*.tlz=01;31:*.txz=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.dz=01;31:*.gz=01;31:*.lz=01;31:*.xz=01;31:*.bz2=01;31:*.bz=01;31:*.tbz=01;31:*.tbz2=01;31:*.tz=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.rar=01;31:*.ace=01;31:*.zoo=01;31:*.cpio=01;31:*.7z=01;31:*.rz=01;31:*.jpg=01;35:*.jpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.svg=01;35:*.svgz=01;35:*.mng=01;35:*.pcx=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.m2v=01;35:*.mkv=01;35:*.ogm=01;35:*.mp4=01;35:*.m4v=01;35:*.mp4v=01;35:*.vob=01;35:*.qt=01;35:*.nuv=01;35:*.wmv=01;35:*.asf=01;35:*.rm=01;35:*.rmvb=01;35:*.flc=01;35:*.avi=01;35:*.fli=01;35:*.flv=01;35:*.gl=01;35:*.dl=01;35:*.xcf=01;35:*.xwd=01;35:*.yuv=01;35:*.cgm=01;35:*<br>
.emf=01;35:*.axv=01;35:*.anx=01;35:*.ogv=01;35:*.ogx=01;35:*.aac=00;36:*.au=00;36:*.flac=00;36:*.mid=00;36:*.midi=00;36:*.mka=00;36:*.mp3=00;36:*.mpc=00;36:*.ogg=00;36:*.ra=00;36:*.wav=00;36:*.axa=00;36:*.oga=00;36:*.spx=00;36:*.xspf=00;36:
<br>
SSH_AUTH_SOCK=/tmp/keyring-3LAaIy/ssh
<br>
DEFAULTS_PATH=/usr/share/gconf/gnome.default.path
<br>
SESSION_MANAGER=local/tom-MS-7586:@/tmp/.ICE-unix/1742,unix/tom-MS-7586:/tmp/.ICE-unix/1742
<br>
USERNAME=tom
<br>
XDG_CONFIG_DIRS=/etc/xdg/xdg-gnome:/etc/xdg
<br>
NLSPATH=/opt/intel/Compiler/11.1/073/lib/intel64/locale/%l_%t/%N:/opt/intel/Compiler/11.1/073/idb/intel64/locale/%l_%t/%N:/opt/intel/Compiler/11.1/059/lib/intel64/locale/%l_%t/%N:/opt/intel/Compiler/11.1/059/idb/intel64/locale/%l_%t/%N
<br>
DESKTOP_SESSION=gnome
<br>
PATH=/opt/intel/Compiler/11.1/073/bin/intel64:/opt/intel/Compiler/11.1/059/bin/intel64:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games
<br>
PWD=/home/tom
<br>
GDM_KEYBOARD_LAYOUT=us
<br>
LANG=en_US.utf8
<br>
GNOME_KEYRING_PID=1723
<br>
MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
<br>
MANDATORY_PATH=/usr/share/gconf/gnome.mandatory.path
<br>
GDM_LANG=en_US.utf8
<br>
LOADEDMODULES=
<br>
GDMSESSION=gnome
<br>
SHLVL=1
<br>
HOME=/home/tom
<br>
GNOME_DESKTOP_SESSION_ID=this-is-deprecated
<br>
LOGNAME=tom
<br>
XDG_DATA_DIRS=/usr/share/gnome:/usr/local/share/:/usr/share/
<br>
DBUS_SESSION_BUS_ADDRESS=unix:abstract=/tmp/dbus-bRYGCPNoS9,guid=4002f3c04511f4e74a36b27f0000001c
<br>
MODULESHOME=/usr/share/Modules
<br>
LESSOPEN=| /usr/bin/lesspipe %s
<br>
WINDOWPATH=7
<br>
DISPLAY=:0.0
<br>
LESSCLOSE=/usr/bin/lesspipe %s %s
<br>
XAUTHORITY=/var/run/gdm/auth-for-tom-Z65SUo/database
<br>
COLORTERM=gnome-terminal
<br>
module=() {  eval `/usr/bin/modulecmd bash $*`
<br>
}
<br>
<p>In that particular thread it was suggested to use the full path of CC (CC=/usr/local/intel/Compiler/11.0/083/bin/intel64/icc) on the build line but I have no idea where to do this (i.e. which build line).
<br>
I tried to export the CC env. variable using export CC=/usr/local/intel/Compiler/11.0/083/bin/intel64/icc but I got the same error after running make install again.
<br>
I hope that anyone has a suggestion (I am a real beginner to Linux).
<br>
<p>best regards,
<br>
<p>Tom
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15449.php">Damien Hocking: "Re: [OMPI users] Building OpenMPI on Ubuntu"</a>
<li><strong>Previous message:</strong> <a href="15447.php">Gabriele Fatigati: "Re: [OMPI users] Argument parsing issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15449.php">Damien Hocking: "Re: [OMPI users] Building OpenMPI on Ubuntu"</a>
<li><strong>Reply:</strong> <a href="15449.php">Damien Hocking: "Re: [OMPI users] Building OpenMPI on Ubuntu"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
