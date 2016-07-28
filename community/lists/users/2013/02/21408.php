<?
$subject_val = "Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler 10.1	error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 15 08:51:44 2013" -->
<!-- isoreceived="20130215135144" -->
<!-- sent="Fri, 15 Feb 2013 13:51:35 +0000" -->
<!-- isosent="20130215135135" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler 10.1	error" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F3F844_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="49097A4A5F4A484CA2F0323DF3256075AC2508FB_at_AD-EXCHMBX2-3.aau.dk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler 10.1	error<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-15 08:51:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21409.php">Kranthi Kumar: "[OMPI users] Core ids not coming properly"</a>
<li><strong>Previous message:</strong> <a href="21407.php">Mads Boye: "Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler 10.1 error"</a>
<li><strong>In reply to:</strong> <a href="21407.php">Mads Boye: "Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler 10.1 error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21420.php">Mads Boye: "Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler	10.1	error"</a>
<li><strong>Reply:</strong> <a href="21420.php">Mads Boye: "Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler	10.1	error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This typically means that your Intel C++ compiler installation is borked.
<br>
<p>Did you look at config.log to see the specific error?  Are you able to compile trivial C++ programs with icpc?
<br>
<p>Please send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Feb 15, 2013, at 4:44 AM, Mads Boye &lt;mb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi.
</span><br>
<span class="quotelev1">&gt; I am trying to compile OpenMPi for an Intel Compiler. This is causing me some issues.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Link for config.txt <a href="http://homes.ist.aau.dk/mb/config.txt">http://homes.ist.aau.dk/mb/config.txt</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The ./configure crashes when aligning bool for the C++ compiler:
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CXX=icpc F77=ifort FC=ifort --prefix=/pack/openmpi-1.6.3-intel
</span><br>
<span class="quotelev1">&gt; &#133;
</span><br>
<span class="quotelev1">&gt; *** C++ compiler and preprocessor
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU C++ compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether icpc accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking dependency style of icpc... gcc3
</span><br>
<span class="quotelev1">&gt; checking how to run the C++ preprocessor... /lib/cpp
</span><br>
<span class="quotelev1">&gt; checking for the C++ compiler vendor... intel
</span><br>
<span class="quotelev1">&gt; checking if icpc supports -finline-functions... yes
</span><br>
<span class="quotelev1">&gt; configure: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev1">&gt; checking if C and C++ are link compatible... yes
</span><br>
<span class="quotelev1">&gt; checking for C++ optimization flags... -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; checking size of bool... 0
</span><br>
<span class="quotelev1">&gt; checking alignment of bool... configure: WARNING: *** Problem running configure test!
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** See config.log for details.
</span><br>
<span class="quotelev1">&gt; configure: error: *** Cannot continue.
</span><br>
<span class="quotelev1">&gt; mb_at_harald:~/openmpi-1.6.3$
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; here is export:
</span><br>
<span class="quotelev1">&gt; mb_at_harald:~/openmpi-1.6.3$ export
</span><br>
<span class="quotelev1">&gt; declare -x CPATH=&quot;/pack/intel_mkl-10.0.4.023/include&quot;
</span><br>
<span class="quotelev1">&gt; declare -x DYLD_LIBRARY_PATH=&quot;/pack/ifort-10.1.018/lib:/pack/icc-10.1.018/lib&quot;
</span><br>
<span class="quotelev1">&gt; declare -x FPATH=&quot;/pack/intel_mkl-10.0.4.023/include&quot;
</span><br>
<span class="quotelev1">&gt; declare -x HOME=&quot;/user/mb&quot;
</span><br>
<span class="quotelev1">&gt; declare -x INCLUDE=&quot;/pack/intel_mkl-10.0.4.023/include&quot;
</span><br>
<span class="quotelev1">&gt; declare -x INTEL_LICENSE_FILE=&quot;/pack/icc-10.1.018/licenses:/opt/intel/licenses:/user/mb/intel/licenses:/Users/Shared/Library/Application Support/Intel/Licenses:/pack/ifort-10.1.018/licenses:/opt/intel/licenses:/user/mb/intel/licenses:/Users/Shared/Library/Application Support/Intel/Licenses&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LANG=&quot;C&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LANGUAGE=&quot;en_US.UTF-8&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LC_ADDRESS=&quot;da_DK.UTF-8&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LC_ALL=&quot;en_US.UTF-8&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LC_IDENTIFICATION=&quot;da_DK.UTF-8&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LC_MEASUREMENT=&quot;da_DK.UTF-8&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LC_MONETARY=&quot;da_DK.UTF-8&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LC_NAME=&quot;da_DK.UTF-8&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LC_NUMERIC=&quot;da_DK.UTF-8&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LC_PAPER=&quot;da_DK.UTF-8&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LC_TELEPHONE=&quot;da_DK.UTF-8&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LC_TIME=&quot;da_DK.UTF-8&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LD_LIBRARY_PATH=&quot;/pack/intel_mkl-10.0.4.023/lib/em64t:/pack/ifort-10.1.018/lib:/pack/icc-10.1.018/lib:/usr/local/lib:/usr/lib:/lib&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LESSCLOSE=&quot;/usr/bin/lesspipe %s %s&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LESSOPEN=&quot;| /usr/bin/lesspipe %s&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LIBRARY_PATH=&quot;/pack/intel_mkl-10.0.4.023/lib/em64t&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LOGNAME=&quot;mb&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LS_COLORS=&quot;rs=0:di=01;34:ln=01;36:mh=00:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:su=37;41:sg=30;43:ca=30;41:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.lzma=01;31:*.tlz=01;31:*.txz=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.dz=01;31:*.gz=01;31:*.lz=01;31:*.xz=01;31:*.bz2=01;31:*.bz=01;31:*.tbz=01;31:*.tbz2=01;31:*.tz=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.war=01;31:*.ear=01;31:*.sar=01;31:*.rar=01;31:*.ace=01;31:*.zoo=01;31:*.cpio=01;31:*.7z=01;31:*.rz=01;31:*.jpg=01;35:*.jpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.svg=01;35:*.svgz=01;35:*.mng=01;35:*.pcx=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.m2v=01;35:*.mkv=01;35:*.webm=01;35:*.ogm=01;35:*.mp4=01;35:*.m4v=01;35:*.mp4v=01;35:*.vob=01;35:*.qt=01;35:*.nuv=01;35:*.wmv=01;35:*.asf=01;35:*.rm=01;35:*.rmvb=01;35:*.flc=01;35:*.avi=01;35:*.fli=01;35:*.flv=01;35:*.gl=01;</span><br>
35:*.dl=01;35:*.xcf=01;35:*.xwd=01;35:*.yuv=01;35:*.cgm=01;35:*.emf=01;35:*.axv=01;35:*.anx=01;35:*.ogv=01;35:*.ogx=01;35:*.aac=00;36:*.au=00;36:*.flac=00;36:*.mid=00;36:*.midi=00;36:*.mka=00;36:*.mp3=00;36:*.mpc=00;36:*.ogg=00;36:*.ra=00;36:*.wav=00;36:*.axa=00;36:*.oga=00;36:*.spx=00;36:*.xspf=00;36:&quot;
<br>
<span class="quotelev1">&gt; declare -x MAIL=&quot;/var/mail/mb&quot;
</span><br>
<span class="quotelev1">&gt; declare -x MANPATH=&quot;/pack/intel_mkl-10.0.4.023/man:/pack/ifort-10.1.018/man:/pack/icc-10.1.018/man:/pack/slurm/share/man:/&quot;
</span><br>
<span class="quotelev1">&gt; declare -x MKLROOT=&quot;/pack/intel_mkl-10.0.4.023&quot;
</span><br>
<span class="quotelev1">&gt; declare -x NLSPATH=&quot;/pack/ifort-10.1.018/lib/locale/en_US/%N:/pack/icc-10.1.018/lib/locale/en_US/%N&quot;
</span><br>
<span class="quotelev1">&gt; declare -x OLDPWD=&quot;/user/mb&quot;
</span><br>
<span class="quotelev1">&gt; declare -x PATH=&quot;/pack/ifort-10.1.018/bin:/pack/icc-10.1.018/bin:/user/mb/bin:/pack/bin/python:/pack/slurm/bin:/pack/openmpi-gnu-ib/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games&quot;
</span><br>
<span class="quotelev1">&gt; declare -x PWD=&quot;/user/mb/openmpi-1.6.3&quot;
</span><br>
<span class="quotelev1">&gt; declare -x SHELL=&quot;/bin/bash&quot;
</span><br>
<span class="quotelev1">&gt; declare -x SHLVL=&quot;1&quot;
</span><br>
<span class="quotelev1">&gt; declare -x SSH_CLIENT=&quot;192.168.2.5 37213 22&quot;
</span><br>
<span class="quotelev1">&gt; declare -x SSH_CONNECTION=&quot;192.168.2.5 37213 192.168.2.6 22&quot;
</span><br>
<span class="quotelev1">&gt; declare -x SSH_TTY=&quot;/dev/pts/4&quot;
</span><br>
<span class="quotelev1">&gt; declare -x TERM=&quot;xterm&quot;
</span><br>
<span class="quotelev1">&gt; declare -x USER=&quot;mb&quot;
</span><br>
<span class="quotelev1">&gt; declare -x XDG_SESSION_COOKIE=&quot;9ee4b1c561dd60184f7777020000034e-1360830861.502044-749903926&quot;
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21409.php">Kranthi Kumar: "[OMPI users] Core ids not coming properly"</a>
<li><strong>Previous message:</strong> <a href="21407.php">Mads Boye: "Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler 10.1 error"</a>
<li><strong>In reply to:</strong> <a href="21407.php">Mads Boye: "Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler 10.1 error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21420.php">Mads Boye: "Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler	10.1	error"</a>
<li><strong>Reply:</strong> <a href="21420.php">Mads Boye: "Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler	10.1	error"</a>
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
