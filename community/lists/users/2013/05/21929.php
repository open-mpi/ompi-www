<?
$subject_val = "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 17 06:40:08 2013" -->
<!-- isoreceived="20130517104008" -->
<!-- sent="Fri, 17 May 2013 11:40:02 +0100" -->
<!-- isosent="20130517104002" -->
<!-- name="Qamar Nazir" -->
<!-- email="qnazir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes" -->
<!-- id="51960902.70208_at_ocf.co.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51950ECD.1080506_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Qamar Nazir (<em>qnazir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-17 06:40:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21930.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="21928.php">Peter van Hoof: "[OMPI users] opening a file with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="21921.php">Gus Correa: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guys,
<br>
<p>Many thanks for your replies. It has been confirmed by Torque people 
<br>
that the version 2.5.x has this limitation and they are recommending to 
<br>
upgrade it to 4.2.x.
<br>
Qamar Nazir
<br>
<p>Best Regards,
<br>
<p>*Qamar Nazir*
<br>
<p><p>On 05/16/2013 05:52 PM, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Qamar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have a cluster as large as yours,
</span><br>
<span class="quotelev1">&gt; but I know Torque requires special settings for large
</span><br>
<span class="quotelev1">&gt; clusters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.clusterresources.com/torquedocs21/a.flargeclusters.shtml">http://www.clusterresources.com/torquedocs21/a.flargeclusters.shtml</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My tm_.h (Torque 2.4.11) says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define TM_ESYSTEM  17000
</span><br>
<span class="quotelev1">&gt; #define TM_ENOEVENT  17001
</span><br>
<span class="quotelev1">&gt; #define TM_ENOTCONNECTED 17002
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and TM_ESYSTEM may be sent back by pbs_mom (see mom_comm.c)
</span><br>
<span class="quotelev1">&gt; if it cannot start the user process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried to launch a simple &quot;hostname&quot; command with pbsdsh
</span><br>
<span class="quotelev1">&gt; on &gt;600 nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diskless/stateless nodes, if you have them, may present another
</span><br>
<span class="quotelev1">&gt; challenge (say, regarding /tmp):
</span><br>
<span class="quotelev1">&gt; <a href="http://www.supercluster.org/pipermail/torqueusers/2011-March/012453.html">http://www.supercluster.org/pipermail/torqueusers/2011-March/012453.html</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=all#poor-sm-btl-performance">http://www.open-mpi.org/faq/?category=all#poor-sm-btl-performance</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=all#network-vs-local">http://www.open-mpi.org/faq/?category=all#network-vs-local</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/16/2013 12:21 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Check the torque error constants - i'm not sure what that value means,
</span><br>
<span class="quotelev2">&gt;&gt; but torque is reporting the error. all we do is print out the value they
</span><br>
<span class="quotelev2">&gt;&gt; return if it is an error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 16, 2013, at 9:09 AM, Qamar Nazir &lt;qnazir_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:qnazir_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Support,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are having an issue with our OMPI runs. When we run jobs on &lt;=550
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines (550 x 16 cores) then they work without any problem. As soon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as we run them on 600 or more machines we get the &quot;plm:tm: failed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawn daemon, error code = 17000&quot; Error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are using:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI ver: 1.6.4 (Compiled with GCC v4.4.6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Torque ver: 2.5.12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ompi_info's output is attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Environmentstats have been pasted below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please assist.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; env envsubst
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ocfacc_at_cyan01 fullrun]$ env
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MODULE_VERSION_STACK=3.2.10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_mtl=^psm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MANPATH=/local/software/openmpi/1.6.4/gcc/share/man:/local/software/moab/6.1.10/man:/usr/local/share/man:/usr/share/man/overrides:/usr/share/man:/local/Modules/default/share/man
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOSTNAME=cyan01
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SHELL=/bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TERM=xterm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HISTSIZE=1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; QTDIR=/usr/lib64/qt-3.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OLDPWD=/home/ocfacc/hpl/fullrun/results
</span><br>
<span class="quotelev3">&gt;&gt;&gt; QTINC=/usr/lib64/qt-3.3/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LC_ALL=POSIX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; USER=ocfacc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/local/software/openmpi/1.6.4/gcc/lib:/local/software/torque/default/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LS_COLORS=rs=0:di=01;34:ln=01;36:mh=00:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:mi=01;05;37;41:su=37;41:sg=30;43:ca=30;41:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.lzma=01;31:*.tlz=01;31:*.txz=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.dz=01;31:*.gz=01;31:*.lz=01;31:*.xz=01;31:*.bz2=01;31:*.tbz=01;31:*.tbz2=01;31:*.bz=01;31:*.tz=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.rar=01;31:*.ace=01;31:*.zoo=01;31:*.cpio=01;31:*.7z=01;31:*.rz=01;31:*.jpg=01;35:*.jpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.svg=01;35:*.svgz=01;35:*.mng=01;35:*.pcx=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.m2v=01;35:*.mkv=01;35:*.ogm=01;35:*.mp4=01;35:*.m4v=01;35:*.mp4v=01;35:*.vob=01;35:*.qt=01;35:*.nuv=01;35:*.wmv=01;35:*.asf=01;35:*.rm=01;35:*.rmvb=01;35:*.flc=01;35:*.avi=01;35:*.fli=01;35:*.flv=01;35:*.gl=01;35:*.dl=01;!
</span><br>
<span class="quotelev1">&gt;   35:*.xcf=0
</span><br>
<span class="quotelev1">&gt; 1;3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5:*.xwd=01;35:*.yuv=01;35:*.cgm=01;35:*.emf=01;35:*.axv=01;35:*.anx=01;35:*.ogv=01;35:*.ogx=01;35:*.aac=01;36:*.au=01;36:*.flac=01;36:*.mid=01;36:*.midi=01;36:*.mka=01;36:*.mp3=01;36:*.mpc=01;36:*.ogg=01;36:*.ra=01;36:*.wav=01;36:*.axa=01;36:*.oga=01;36:*.spx=01;36:*.xspf=01;36:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPIROOT=/local/software/openmpi/1.6.4/gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MODULE_VERSION=3.2.10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MAIL=/var/spool/mail/ocfacc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PATH=/local/software/openmpi/1.6.4/gcc/bin:/usr/lib64/qt-3.3/bin:/local/software/moab/6.1.10/sbin:/local/software/moab/6.1.10/bin:/local/software/torque/default/sbin:/local/software/torque/default/bin:/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/usr/lpp/mmfs/bin:/home/ocfacc/bin:/local/bin:.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PWD=/home/ocfacc/hpl/fullrun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _LMFILES_=/local/Modules/3.2.10/modulefiles/schedulers/torque/2.5.12:/local/Modules/3.2.10/modulefiles/schedulers/moab/6.1.10:/local/Modules/3.2.10/modulefiles/misc/null:/local/Modules/3.2.10/modulefiles/mpi/openmpi/1.6.4/gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LANG=en_US.UTF-8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; KDE_IS_PRELINKED=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MOABHOMEDIR=/local/moab/6.1.10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MODULEPATH=/local/Modules/versions:/local/Modules/modulefiles:/local/Modules/3.2.10/modulefiles/misc:/local/Modules/3.2.10/modulefiles/mpi:/local/Modules/3.2.10/modulefiles/libs:/local/Modules/3.2.10/modulefiles/compilers:/local/Modules/3.2.10/modulefiles/apps:/local/Modules/3.2.10/modulefiles/schedulers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LOADEDMODULES=torque/2.5.12:moab/6.1.10:null:openmpi/1.6.4/gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; KDEDIRS=/usr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_SERVER=blue101,blue102
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SSH_ASKPASS=/usr/libexec/openssh/gnome-ssh-askpass
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HISTCONTROL=ignoredups
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SHLVL=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOME=/home/ocfacc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LOGNAME=ocfacc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; QTLIB=/usr/lib64/qt-3.3/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CVS_RSH=ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LC_CTYPE=POSIX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MODULESHOME=/local/Modules/3.2.10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LESSOPEN=|/usr/bin/lesspipe.sh %s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; G_BROKEN_FILENAMES=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module=() { eval `/local/Modules/$MODULE_VERSION/bin/modulecmd bash $*`
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _=/bin/env
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Qamar Nazir*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21929/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21930.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="21928.php">Peter van Hoof: "[OMPI users] opening a file with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="21921.php">Gus Correa: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<!-- nextthread="start" -->
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
