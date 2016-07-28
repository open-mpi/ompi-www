<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Ubuntu";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 28 21:26:38 2011" -->
<!-- isoreceived="20110129022638" -->
<!-- sent="Fri, 28 Jan 2011 19:26:21 -0700" -->
<!-- isosent="20110129022621" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Ubuntu" -->
<!-- id="4D437ACD.4080101_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C33253DAA8B7D24E9523B6F1DF162F5A01D40BBD81B8_at_EXCHANGE10.campus.tue.nl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building OpenMPI on Ubuntu<br>
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-28 21:26:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15450.php">David Zhang: "Re: [OMPI users] Building OpenMPI on Ubuntu"</a>
<li><strong>Previous message:</strong> <a href="15448.php">Greef, T.F.A. de: "[OMPI users] Building OpenMPI on Ubuntu"</a>
<li><strong>In reply to:</strong> <a href="15448.php">Greef, T.F.A. de: "[OMPI users] Building OpenMPI on Ubuntu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15450.php">David Zhang: "Re: [OMPI users] Building OpenMPI on Ubuntu"</a>
<li><strong>Reply:</strong> <a href="15450.php">David Zhang: "Re: [OMPI users] Building OpenMPI on Ubuntu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tom,
<br>
<p>Changing the path to icc is done in that configure file:
<br>
<p>#!/bin/bash
<br>
CC=icc CXX=icpc F77=ifort FC=ifort ./configure --prefix=/usr/local/OpenMPI-intel --enable-static --enable-shared
<br>
<p>becomes
<br>
<p>#!/bin/bash
<br>
CC=/usr/local/intel/Compiler/11.0/083/bin/intel64/icc CXX=icpc F77=ifort FC=ifort ./configure --prefix=/usr/local/OpenMPI-intel --enable-static --enable-shared
<br>
<p><p>You might have to do the same full path for CXX, F77, FC flags too.
<br>
<p>Damien
<br>
<p>CC=On 28/01/2011 7:18 PM, Greef, T.F.A. de wrote:
<br>
<p><span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I try to compile openmpi with intel compilers on ubuntu 10.10
</span><br>
<span class="quotelev1">&gt; Everything configures and compiles OK. I used the following configure file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure file looks like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; CC=icc CXX=icpc F77=ifort FC=ifort ./configure --prefix=/usr/local/OpenMPI-intel --enable-static --enable-shared
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when doing make install the I recieve the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: line 7847: icc: command not found
</span><br>
<span class="quotelev1">&gt; libtool: install: error: relink `libopen-rte.la' with the above command before installing it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was previously reported in another thread (<a href="http://www.open-mpi.org/community/lists/users/2009/05/9452.php">http://www.open-mpi.org/community/lists/users/2009/05/9452.php</a>).
</span><br>
<span class="quotelev1">&gt; I made sure that icc is in my path by sourcing the environmental variables in .bashrc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; source /opt/intel/Compiler/11.1/059/bin/ifortvars.sh intel64
</span><br>
<span class="quotelev1">&gt; source /opt/intel/Compiler/11.1/073/bin/iccvars.sh intel64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output of my printenv is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MANPATH=/opt/intel/Compiler/11.1/073/man/en_US:/opt/intel/Compiler/11.1/059/man/en_US:/usr/local/man:/usr/local/share/man:/usr/share/man
</span><br>
<span class="quotelev1">&gt; ORBIT_SOCKETDIR=/tmp/orbit-tom
</span><br>
<span class="quotelev1">&gt; SSH_AGENT_PID=1778
</span><br>
<span class="quotelev1">&gt; INTEL_LICENSE_FILE=/opt/intel/Compiler/11.1/059/licenses:/opt/intel/licenses:/home/tom/intel/licenses:/opt/intel/Compiler/11.1/073/licenses:/opt/intel/licenses:/home/tom/intel/licenses
</span><br>
<span class="quotelev1">&gt; TERM=xterm
</span><br>
<span class="quotelev1">&gt; SHELL=/bin/bash
</span><br>
<span class="quotelev1">&gt; XDG_SESSION_COOKIE=e1fd4608d199162d1943279000000007-1296259084.406953-2001076340
</span><br>
<span class="quotelev1">&gt; LIBRARY_PATH=/opt/intel/Compiler/11.1/073/lib/intel64:/opt/intel/Compiler/11.1/059/lib/intel64
</span><br>
<span class="quotelev1">&gt; WINDOWID=56833742
</span><br>
<span class="quotelev1">&gt; GNOME_KEYRING_CONTROL=/tmp/keyring-3LAaIy
</span><br>
<span class="quotelev1">&gt; GTK_MODULES=canberra-gtk-module
</span><br>
<span class="quotelev1">&gt; USER=tom
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/opt/intel/Compiler/11.1/073/lib/intel64:/opt/intel/Compiler/11.1/059/lib/intel64
</span><br>
<span class="quotelev1">&gt; LS_COLORS=rs=0:di=01;34:ln=01;36:mh=00:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:su=37;41:sg=30;43:ca=30;41:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.lzma=01;31:*.tlz=01;31:*.txz=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.dz=01;31:*.gz=01;31:*.lz=01;31:*.xz=01;31:*.bz2=01;31:*.bz=01;31:*.tbz=01;31:*.tbz2=01;31:*.tz=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.rar=01;31:*.ace=01;31:*.zoo=01;31:*.cpio=01;31:*.7z=01;31:*.rz=01;31:*.jpg=01;35:*.jpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.svg=01;35:*.svgz=01;35:*.mng=01;35:*.pcx=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.m2v=01;35:*.mkv=01;35:*.ogm=01;35:*.mp4=01;35:*.m4v=01;35:*.mp4v=01;35:*.vob=01;35:*.qt=01;35:*.nuv=01;35:*.wmv=01;35:*.asf=01;35:*.rm=01;35:*.rmvb=01;35:*.flc=01;35:*.avi=01;35:*.fli=01;35:*.flv=01;35:*.gl=01;35:*.dl=01;35:*.xcf=01;35:*.x!
</span><br>
<span class="quotelev1">&gt;   wd=01;35:*.yuv=01;35:*.cgm=01;35:*.emf=01;35:*.axv=01;35:*.anx=01;35:*.ogv=01;35:*.ogx=01;35:*.aac=00;36:*.au=00;36:*.flac=00;36:*.mid=00;36:*.midi=00;36:*.mka=00;36:*.mp3=00;36:*.mpc=00;36:*.ogg=00;36:*.ra=00;36:*.wav=00;36:*.axa=00;36:*.oga=00;36:*.spx=00;36:*.xspf=00;36:
</span><br>
<span class="quotelev1">&gt; SSH_AUTH_SOCK=/tmp/keyring-3LAaIy/ssh
</span><br>
<span class="quotelev1">&gt; DEFAULTS_PATH=/usr/share/gconf/gnome.default.path
</span><br>
<span class="quotelev1">&gt; SESSION_MANAGER=local/tom-MS-7586:@/tmp/.ICE-unix/1742,unix/tom-MS-7586:/tmp/.ICE-unix/1742
</span><br>
<span class="quotelev1">&gt; USERNAME=tom
</span><br>
<span class="quotelev1">&gt; XDG_CONFIG_DIRS=/etc/xdg/xdg-gnome:/etc/xdg
</span><br>
<span class="quotelev1">&gt; NLSPATH=/opt/intel/Compiler/11.1/073/lib/intel64/locale/%l_%t/%N:/opt/intel/Compiler/11.1/073/idb/intel64/locale/%l_%t/%N:/opt/intel/Compiler/11.1/059/lib/intel64/locale/%l_%t/%N:/opt/intel/Compiler/11.1/059/idb/intel64/locale/%l_%t/%N
</span><br>
<span class="quotelev1">&gt; DESKTOP_SESSION=gnome
</span><br>
<span class="quotelev1">&gt; PATH=/opt/intel/Compiler/11.1/073/bin/intel64:/opt/intel/Compiler/11.1/059/bin/intel64:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games
</span><br>
<span class="quotelev1">&gt; PWD=/home/tom
</span><br>
<span class="quotelev1">&gt; GDM_KEYBOARD_LAYOUT=us
</span><br>
<span class="quotelev1">&gt; LANG=en_US.utf8
</span><br>
<span class="quotelev1">&gt; GNOME_KEYRING_PID=1723
</span><br>
<span class="quotelev1">&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev1">&gt; MANDATORY_PATH=/usr/share/gconf/gnome.mandatory.path
</span><br>
<span class="quotelev1">&gt; GDM_LANG=en_US.utf8
</span><br>
<span class="quotelev1">&gt; LOADEDMODULES=
</span><br>
<span class="quotelev1">&gt; GDMSESSION=gnome
</span><br>
<span class="quotelev1">&gt; SHLVL=1
</span><br>
<span class="quotelev1">&gt; HOME=/home/tom
</span><br>
<span class="quotelev1">&gt; GNOME_DESKTOP_SESSION_ID=this-is-deprecated
</span><br>
<span class="quotelev1">&gt; LOGNAME=tom
</span><br>
<span class="quotelev1">&gt; XDG_DATA_DIRS=/usr/share/gnome:/usr/local/share/:/usr/share/
</span><br>
<span class="quotelev1">&gt; DBUS_SESSION_BUS_ADDRESS=unix:abstract=/tmp/dbus-bRYGCPNoS9,guid=4002f3c04511f4e74a36b27f0000001c
</span><br>
<span class="quotelev1">&gt; MODULESHOME=/usr/share/Modules
</span><br>
<span class="quotelev1">&gt; LESSOPEN=| /usr/bin/lesspipe %s
</span><br>
<span class="quotelev1">&gt; WINDOWPATH=7
</span><br>
<span class="quotelev1">&gt; DISPLAY=:0.0
</span><br>
<span class="quotelev1">&gt; LESSCLOSE=/usr/bin/lesspipe %s %s
</span><br>
<span class="quotelev1">&gt; XAUTHORITY=/var/run/gdm/auth-for-tom-Z65SUo/database
</span><br>
<span class="quotelev1">&gt; COLORTERM=gnome-terminal
</span><br>
<span class="quotelev1">&gt; module=() {  eval `/usr/bin/modulecmd bash $*`
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In that particular thread it was suggested to use the full path of CC (CC=/usr/local/intel/Compiler/11.0/083/bin/intel64/icc) on the build line but I have no idea where to do this (i.e. which build line).
</span><br>
<span class="quotelev1">&gt; I tried to export the CC env. variable using export CC=/usr/local/intel/Compiler/11.0/083/bin/intel64/icc but I got the same error after running make install again.
</span><br>
<span class="quotelev1">&gt; I hope that anyone has a suggestion (I am a real beginner to Linux).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15450.php">David Zhang: "Re: [OMPI users] Building OpenMPI on Ubuntu"</a>
<li><strong>Previous message:</strong> <a href="15448.php">Greef, T.F.A. de: "[OMPI users] Building OpenMPI on Ubuntu"</a>
<li><strong>In reply to:</strong> <a href="15448.php">Greef, T.F.A. de: "[OMPI users] Building OpenMPI on Ubuntu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15450.php">David Zhang: "Re: [OMPI users] Building OpenMPI on Ubuntu"</a>
<li><strong>Reply:</strong> <a href="15450.php">David Zhang: "Re: [OMPI users] Building OpenMPI on Ubuntu"</a>
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
