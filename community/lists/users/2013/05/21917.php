<?
$subject_val = "[OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 16 12:09:25 2013" -->
<!-- isoreceived="20130516160925" -->
<!-- sent="Thu, 16 May 2013 17:09:19 +0100" -->
<!-- isosent="20130516160919" -->
<!-- name="Qamar Nazir" -->
<!-- email="qnazir_at_[hidden]" -->
<!-- subject="[OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes" -->
<!-- id="3f0b36de-1c2d-46a4-9a5e-eff467dddc81_at_MAIL.ocf.local" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes<br>
<strong>From:</strong> Qamar Nazir (<em>qnazir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-16 12:09:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21918.php">Gus Correa: "Re: [OMPI users] distributed file system"</a>
<li><strong>Previous message:</strong> <a href="21916.php">Geraldine Hochman-Klarenberg: "[OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21919.php">Ralph Castain: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>Reply:</strong> <a href="21919.php">Ralph Castain: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Support,
<br>
<p>We are having an issue with our OMPI runs. When we run jobs on &lt;=550 
<br>
machines (550 x 16 cores) then they work without any problem. As soon as 
<br>
we run them on 600 or more machines we get the &quot;plm:tm: failed to spawn 
<br>
daemon, error code = 17000&quot; Error
<br>
<p>We are using:
<br>
<p>OpenMPI ver: 1.6.4 (Compiled with GCC v4.4.6)
<br>
Torque ver: 2.5.12
<br>
<p>The ompi_info's output is attached.
<br>
<p><p>The Environmentstats have been pasted below.
<br>
<p><p>Please assist.
<br>
<p><p>env       envsubst
<br>
[ocfacc_at_cyan01 fullrun]$ env
<br>
MODULE_VERSION_STACK=3.2.10
<br>
OMPI_MCA_mtl=^psm
<br>
MANPATH=/local/software/openmpi/1.6.4/gcc/share/man:/local/software/moab/6.1.10/man:/usr/local/share/man:/usr/share/man/overrides:/usr/share/man:/local/Modules/default/share/man
<br>
HOSTNAME=cyan01
<br>
SHELL=/bin/bash
<br>
TERM=xterm
<br>
HISTSIZE=1000
<br>
QTDIR=/usr/lib64/qt-3.3
<br>
OLDPWD=/home/ocfacc/hpl/fullrun/results
<br>
QTINC=/usr/lib64/qt-3.3/include
<br>
LC_ALL=POSIX
<br>
USER=ocfacc
<br>
LD_LIBRARY_PATH=/local/software/openmpi/1.6.4/gcc/lib:/local/software/torque/default/lib
<br>
LS_COLORS=rs=0:di=01;34:ln=01;36:mh=00:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:mi=01;05;37;41:su=37;41:sg=30;43:ca=30;41:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.lzma=01;31:*.tlz=01;31:*.txz=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.dz=01;31:*.gz=01;31:*.lz=01;31:*.xz=01;31:*.bz2=01;31:*.tbz=01;31:*.tbz2=01;31:*.bz=01;31:*.tz=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.rar=01;31:*.ace=01;31:*.zoo=01;31:*.cpio=01;31:*.7z=01;31:*.rz=01;31:*.jpg=01;35:*.jpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.svg=01;35:*.svgz=01;35:*.mng=01;35:*.pcx=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.m2v=01;35:*.mkv=01;35:*.ogm=01;35:*.mp4=01;35:*.m4v=01;35:*.mp4v=01;35:*.vob=01;35:*.qt=01;35:*.nuv=01;35:*.wmv=01;35:*.asf=01;35:*.rm=01;35:*.rmvb=01;35:*.flc=01;35:*.avi=01;35:*.fli=01;35:*.flv=01;35:*.gl=01;35:*.dl=01;35:*.xcf=01;35:*.xwd=01;35:*.yuv=01;35:*.cgm=01;35:*.emf=01;35:*.axv=01;35:*.anx=01;35:*.ogv=01;35:*.ogx=01;35:*.aac=01;36:*.au=01;36:*.flac=01;36:*.mid=01;36:*.midi=01;36:*.mka=01;36:*.mp3=01;36:*.mpc=01;36:*.ogg=01;36:*.ra=01;36:*.wav=01;36:*.axa=01;36:*.oga=01;36:*.spx=01;36:*.xspf=01;36:
<br>
MPIROOT=/local/software/openmpi/1.6.4/gcc
<br>
MODULE_VERSION=3.2.10
<br>
MAIL=/var/spool/mail/ocfacc
<br>
PATH=/local/software/openmpi/1.6.4/gcc/bin:/usr/lib64/qt-3.3/bin:/local/software/moab/6.1.10/sbin:/local/software/moab/6.1.10/bin:/local/software/torque/default/sbin:/local/software/torque/default/bin:/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/usr/lpp/mmfs/bin:/home/ocfacc/bin:/local/bin:.
<br>
PWD=/home/ocfacc/hpl/fullrun
<br>
_LMFILES_=/local/Modules/3.2.10/modulefiles/schedulers/torque/2.5.12:/local/Modules/3.2.10/modulefiles/schedulers/moab/6.1.10:/local/Modules/3.2.10/modulefiles/misc/null:/local/Modules/3.2.10/modulefiles/mpi/openmpi/1.6.4/gcc
<br>
LANG=en_US.UTF-8
<br>
KDE_IS_PRELINKED=1
<br>
MOABHOMEDIR=/local/moab/6.1.10
<br>
MODULEPATH=/local/Modules/versions:/local/Modules/modulefiles:/local/Modules/3.2.10/modulefiles/misc:/local/Modules/3.2.10/modulefiles/mpi:/local/Modules/3.2.10/modulefiles/libs:/local/Modules/3.2.10/modulefiles/compilers:/local/Modules/3.2.10/modulefiles/apps:/local/Modules/3.2.10/modulefiles/schedulers
<br>
LOADEDMODULES=torque/2.5.12:moab/6.1.10:null:openmpi/1.6.4/gcc
<br>
KDEDIRS=/usr
<br>
PBS_SERVER=blue101,blue102
<br>
SSH_ASKPASS=/usr/libexec/openssh/gnome-ssh-askpass
<br>
HISTCONTROL=ignoredups
<br>
SHLVL=1
<br>
HOME=/home/ocfacc
<br>
LOGNAME=ocfacc
<br>
QTLIB=/usr/lib64/qt-3.3/lib
<br>
CVS_RSH=ssh
<br>
LC_CTYPE=POSIX
<br>
MODULESHOME=/local/Modules/3.2.10
<br>
LESSOPEN=|/usr/bin/lesspipe.sh %s
<br>
G_BROKEN_FILENAMES=1
<br>
module=() {  eval `/local/Modules/$MODULE_VERSION/bin/modulecmd bash $*`
<br>
}
<br>
_=/bin/env
<br>
<p><p><p><p><p><p><p><p><p><pre>
-- 
Qamar Nazir
Best Regards,
*Qamar Nazir*
HPC Software Engineer
OCF plc
*Tel:*0114 257 2200 Twitter &lt;<a href="http://twitter.com/ocfplc">http://twitter.com/ocfplc</a>&gt;
*Fax:*0114 257 0022 Blog &lt;<a href="http://blog.ocf.co.uk/">http://blog.ocf.co.uk/</a>&gt;
*Mob:*07508 033895 Web &lt;<a href="http://www.ocf.co.uk/">http://www.ocf.co.uk/</a>&gt;
OCF plc is a company registered in England and Wales.  Registered number 
4132533. Registered office address: OCF plc, 5 Rotunda Business Centre, 
Thorncliffe Park, Chapeltown, Sheffield, S35 2PG
Please note, any emails relating to an OCF Support request must always 
be sent to support_at_[hidden] &lt;mailto:support_at_[hidden]&gt;for a ticket 
number to be generated or existing support ticket to be updated. Should 
this not be done then OCF cannot be held responsible for requests not 
dealt with in a timely manner.
This message is private and confidential. If you have received this 
message in error, please notify us immediately and remove it from your 
system.
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21917/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21917/ompi_info.txt.bz2">ompi_info.txt.bz2</a>
</ul>
<!-- attachment="ompi_info.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21918.php">Gus Correa: "Re: [OMPI users] distributed file system"</a>
<li><strong>Previous message:</strong> <a href="21916.php">Geraldine Hochman-Klarenberg: "[OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21919.php">Ralph Castain: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>Reply:</strong> <a href="21919.php">Ralph Castain: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
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
