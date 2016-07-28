<?
$subject_val = "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 16 19:33:30 2013" -->
<!-- isoreceived="20130516233330" -->
<!-- sent="Thu, 16 May 2013 16:33:23 -0700" -->
<!-- isosent="20130516233323" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5" -->
<!-- id="5F7003CF-F3EE-4CA5-A011-D75538C77116_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51956868.1000800_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-16 19:33:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21927.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>Previous message:</strong> <a href="21925.php">Gus Correa: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>In reply to:</strong> <a href="21925.php">Gus Correa: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21927.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: my Mac is running 10.8.3 and works fine - though the xcode reqt is quite true.
<br>
<p><p>On May 16, 2013, at 4:14 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Geraldine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't had much luck with OpenMPI 1.6.4 on a Mac OS X.
</span><br>
<span class="quotelev1">&gt; OMPI 1.6.4 built with gcc (no Fortran), but it would have
</span><br>
<span class="quotelev1">&gt; memory problems at runtime.
</span><br>
<span class="quotelev1">&gt; However, my Mac is much older than yours (OS X 10.6.8) and 32 bit,
</span><br>
<span class="quotelev1">&gt; not a good comparison.
</span><br>
<span class="quotelev1">&gt; In any case, take my suggestions with a grain of salt.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) I remember that you need to install X-code beforehand,
</span><br>
<span class="quotelev1">&gt; to have the right Mac development environment, header files, etc.
</span><br>
<span class="quotelev1">&gt; You can get X-code from Apple.
</span><br>
<span class="quotelev1">&gt; Did you install it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) With X-code installed, try to rebuild OMPI from scratch.
</span><br>
<span class="quotelev1">&gt; Do a &quot;make distclean&quot; at least,
</span><br>
<span class="quotelev1">&gt; or maybe untar the OMPI tarball again and start fresh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) There is some information that you can send to the list,
</span><br>
<span class="quotelev1">&gt; which may help the OMPI developers help you.
</span><br>
<span class="quotelev1">&gt; The config.log at least.
</span><br>
<span class="quotelev1">&gt; Check this FAQ:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4) If using the Intel compilers, I would try to keep the same
</span><br>
<span class="quotelev1">&gt; release/version on all of them, not mix 13.X.Y with 12.W.Z.
</span><br>
<span class="quotelev1">&gt; However, the error message you sent seems to have happened
</span><br>
<span class="quotelev1">&gt; very early during the configure step, and the
</span><br>
<span class="quotelev1">&gt; compiler version mix is probably not the reason.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 05/16/2013 02:16 PM, Geraldine Hochman-Klarenberg wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Maybe I should add that my Intel C++ and Fortran compilers are different
</span><br>
<span class="quotelev2">&gt;&gt; versions. C++ is 12.0.2 and Fortran is 13.0.2. Could that be an issue?
</span><br>
<span class="quotelev2">&gt;&gt; Also, when I check for the location of ifort, it seems to be in usr/bin
</span><br>
<span class="quotelev2">&gt;&gt; - which is different than the C compiler (even though I have folders
</span><br>
<span class="quotelev2">&gt;&gt; /opt/intel/composer_xe_2013 and /opt/intel/composer_xe_2013.3.171 etc.).
</span><br>
<span class="quotelev2">&gt;&gt; And I have tried /source /opt/intel/bin/ifortvars.sh intel64/ too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Geraldine
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 16, 2013, at 11:57 AM, Geraldine Hochman-Klarenberg wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am having trouble configuring OpenMPI-1.6.4 with the Intel C/C++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; composer (12.0.2). My OS is OSX 10.7.5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not a computer whizz so I hope I can explain what I did properly:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) In bash, I did /source /opt/intel/bin/compilervars.sh intel64/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and then /echo PATH/ showed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //opt/intel/composerxe-2011.2.142/bin/intel64:/opt/intel/composerxe-2011.2.142/mpirt/bin/intel64:/opt/intel/composerxe-2011.2.142/bin:/Library/Frameworks/EPD64.framework/Versions/Current/bin:/Library/Frameworks/Python.framework/Versions/Current/bin:.:/Library/Frameworks/EPD64.framework/Versions/Current/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin:/usr/X11/bin/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2)/which icc /and /which icpc /showed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //opt/intel/composerxe-2011.2.142/bin/intel64/icc/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //opt/intel/composerxe-2011.2.142/bin/intel64/icpc/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So that all seems okay to me. Still when I do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /./configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/opt/openmpi-1.6.4/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the folder in which the extracted OpenMPI files sit, I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /============================================================================/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /== Configuring Open MPI/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /============================================================================/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*** Startup tests/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /checking build system type... x86_64-apple-darwin11.4.2/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /checking host system type... x86_64-apple-darwin11.4.2/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /checking target system type... x86_64-apple-darwin11.4.2/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /checking for gcc... icc/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /checking whether the C compiler works... no/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /configure: error: in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/Users/geraldinehochman-klarenberg/Projects/openmpi-1.6.4':/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /configure: error: C compiler cannot create executables/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /See `config.log' for more details/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd really appreciate any pointers on how to solve this, because I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running out of ideas on how to solve this (and so seems Google).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Geraldine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="21927.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>Previous message:</strong> <a href="21925.php">Gus Correa: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>In reply to:</strong> <a href="21925.php">Gus Correa: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21927.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
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
