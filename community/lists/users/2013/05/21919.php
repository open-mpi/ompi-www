<?
$subject_val = "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 16 12:21:36 2013" -->
<!-- isoreceived="20130516162136" -->
<!-- sent="Thu, 16 May 2013 09:21:28 -0700" -->
<!-- isosent="20130516162128" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes" -->
<!-- id="81AB32CE-1EB5-45D8-A175-CD7D37D15DFF_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3f0b36de-1c2d-46a4-9a5e-eff467dddc81_at_MAIL.ocf.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-16 12:21:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21920.php">Ralph Castain: "Re: [OMPI users] distributed file system"</a>
<li><strong>Previous message:</strong> <a href="21918.php">Gus Correa: "Re: [OMPI users] distributed file system"</a>
<li><strong>In reply to:</strong> <a href="21917.php">Qamar Nazir: "[OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21921.php">Gus Correa: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>Reply:</strong> <a href="21921.php">Gus Correa: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check the torque error constants - i'm not sure what that value means, but torque is reporting the error. all we do is print out the value they return if it is an error
<br>
<p><p>On May 16, 2013, at 9:09 AM, Qamar Nazir &lt;qnazir_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Support,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are having an issue with our OMPI runs. When we run jobs on &lt;=550 machines (550 x 16 cores) then they work without any problem. As soon as we run them on 600 or more machines we get the &quot;plm:tm: failed to spawn daemon, error code = 17000&quot; Error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are using:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI ver: 1.6.4 (Compiled with GCC v4.4.6) 
</span><br>
<span class="quotelev1">&gt; Torque ver: 2.5.12 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ompi_info's output is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Environment stats have been pasted below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please assist.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; env       envsubst  
</span><br>
<span class="quotelev1">&gt; [ocfacc_at_cyan01 fullrun]$ env
</span><br>
<span class="quotelev1">&gt; MODULE_VERSION_STACK=3.2.10
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mtl=^psm
</span><br>
<span class="quotelev1">&gt; MANPATH=/local/software/openmpi/1.6.4/gcc/share/man:/local/software/moab/6.1.10/man:/usr/local/share/man:/usr/share/man/overrides:/usr/share/man:/local/Modules/default/share/man
</span><br>
<span class="quotelev1">&gt; HOSTNAME=cyan01
</span><br>
<span class="quotelev1">&gt; SHELL=/bin/bash
</span><br>
<span class="quotelev1">&gt; TERM=xterm
</span><br>
<span class="quotelev1">&gt; HISTSIZE=1000
</span><br>
<span class="quotelev1">&gt; QTDIR=/usr/lib64/qt-3.3
</span><br>
<span class="quotelev1">&gt; OLDPWD=/home/ocfacc/hpl/fullrun/results
</span><br>
<span class="quotelev1">&gt; QTINC=/usr/lib64/qt-3.3/include
</span><br>
<span class="quotelev1">&gt; LC_ALL=POSIX
</span><br>
<span class="quotelev1">&gt; USER=ocfacc
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/local/software/openmpi/1.6.4/gcc/lib:/local/software/torque/default/lib
</span><br>
<span class="quotelev1">&gt; LS_COLORS=rs=0:di=01;34:ln=01;36:mh=00:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:mi=01;05;37;41:su=37;41:sg=30;43:ca=30;41:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.lzma=01;31:*.tlz=01;31:*.txz=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.dz=01;31:*.gz=01;31:*.lz=01;31:*.xz=01;31:*.bz2=01;31:*.tbz=01;31:*.tbz2=01;31:*.bz=01;31:*.tz=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.rar=01;31:*.ace=01;31:*.zoo=01;31:*.cpio=01;31:*.7z=01;31:*.rz=01;31:*.jpg=01;35:*.jpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.svg=01;35:*.svgz=01;35:*.mng=01;35:*.pcx=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.m2v=01;35:*.mkv=01;35:*.ogm=01;35:*.mp4=01;35:*.m4v=01;35:*.mp4v=01;35:*.vob=01;35:*.qt=01;35:*.nuv=01;35:*.wmv=01;35:*.asf=01;35:*.rm=01;35:*.rmvb=01;35:*.flc=01;35:*.avi=01;35:*.fli=01;35:*.flv=01;35:*.gl=01;35:*.dl=01;35:*.xcf=01;3 5:*.xwd=01;35:*.yuv=01;35:*.cgm=01;35:*.emf=01;35:*.axv=01;35:*.anx=01;35:*.ogv=01;35:*.ogx=01;35:*.aac=01;36:*.au=01;36:*.flac=01;36:*.mid=01;36:*.midi=01;36:*.mka=01;36:*.mp3=01;36:*.mpc=01;36:*.ogg=01;36:*.ra=01;36:*.wav=01;36:*.axa=01;36:*.oga=01;36:*.spx=01;36:*.xspf=01;36:
</span><br>
<span class="quotelev1">&gt; MPIROOT=/local/software/openmpi/1.6.4/gcc
</span><br>
<span class="quotelev1">&gt; MODULE_VERSION=3.2.10
</span><br>
<span class="quotelev1">&gt; MAIL=/var/spool/mail/ocfacc
</span><br>
<span class="quotelev1">&gt; PATH=/local/software/openmpi/1.6.4/gcc/bin:/usr/lib64/qt-3.3/bin:/local/software/moab/6.1.10/sbin:/local/software/moab/6.1.10/bin:/local/software/torque/default/sbin:/local/software/torque/default/bin:/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/usr/lpp/mmfs/bin:/home/ocfacc/bin:/local/bin:.
</span><br>
<span class="quotelev1">&gt; PWD=/home/ocfacc/hpl/fullrun
</span><br>
<span class="quotelev1">&gt; _LMFILES_=/local/Modules/3.2.10/modulefiles/schedulers/torque/2.5.12:/local/Modules/3.2.10/modulefiles/schedulers/moab/6.1.10:/local/Modules/3.2.10/modulefiles/misc/null:/local/Modules/3.2.10/modulefiles/mpi/openmpi/1.6.4/gcc
</span><br>
<span class="quotelev1">&gt; LANG=en_US.UTF-8
</span><br>
<span class="quotelev1">&gt; KDE_IS_PRELINKED=1
</span><br>
<span class="quotelev1">&gt; MOABHOMEDIR=/local/moab/6.1.10
</span><br>
<span class="quotelev1">&gt; MODULEPATH=/local/Modules/versions:/local/Modules/modulefiles:/local/Modules/3.2.10/modulefiles/misc:/local/Modules/3.2.10/modulefiles/mpi:/local/Modules/3.2.10/modulefiles/libs:/local/Modules/3.2.10/modulefiles/compilers:/local/Modules/3.2.10/modulefiles/apps:/local/Modules/3.2.10/modulefiles/schedulers
</span><br>
<span class="quotelev1">&gt; LOADEDMODULES=torque/2.5.12:moab/6.1.10:null:openmpi/1.6.4/gcc
</span><br>
<span class="quotelev1">&gt; KDEDIRS=/usr
</span><br>
<span class="quotelev1">&gt; PBS_SERVER=blue101,blue102
</span><br>
<span class="quotelev1">&gt; SSH_ASKPASS=/usr/libexec/openssh/gnome-ssh-askpass
</span><br>
<span class="quotelev1">&gt; HISTCONTROL=ignoredups
</span><br>
<span class="quotelev1">&gt; SHLVL=1
</span><br>
<span class="quotelev1">&gt; HOME=/home/ocfacc
</span><br>
<span class="quotelev1">&gt; LOGNAME=ocfacc
</span><br>
<span class="quotelev1">&gt; QTLIB=/usr/lib64/qt-3.3/lib
</span><br>
<span class="quotelev1">&gt; CVS_RSH=ssh
</span><br>
<span class="quotelev1">&gt; LC_CTYPE=POSIX
</span><br>
<span class="quotelev1">&gt; MODULESHOME=/local/Modules/3.2.10
</span><br>
<span class="quotelev1">&gt; LESSOPEN=|/usr/bin/lesspipe.sh %s
</span><br>
<span class="quotelev1">&gt; G_BROKEN_FILENAMES=1
</span><br>
<span class="quotelev1">&gt; module=() {  eval `/local/Modules/$MODULE_VERSION/bin/modulecmd bash $*`
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _=/bin/env
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards, 
</span><br>
<span class="quotelev1">&gt; Qamar Nazir
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HPC Software Engineer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OCF plc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Tel: 0114 257 2200        Twitter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fax: 0114 257 0022       Blog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mob: 07508 033895      Web
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; OCF plc is a company registered in England and Wales.  Registered number 4132533. Registered office address: OCF plc, 5 Rotunda Business Centre, Thorncliffe Park, Chapeltown, Sheffield, S35 2PG
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Please note, any emails relating to an OCF Support request must always be sent to support_at_[hidden] for a ticket number to be generated or existing support ticket to be updated. Should this not be done then OCF cannot be held responsible for requests not dealt with in a timely manner.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This message is private and confidential. If you have received this message in error, please notify us immediately and remove it from your system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.txt.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21919/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21920.php">Ralph Castain: "Re: [OMPI users] distributed file system"</a>
<li><strong>Previous message:</strong> <a href="21918.php">Gus Correa: "Re: [OMPI users] distributed file system"</a>
<li><strong>In reply to:</strong> <a href="21917.php">Qamar Nazir: "[OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21921.php">Gus Correa: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>Reply:</strong> <a href="21921.php">Gus Correa: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
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
