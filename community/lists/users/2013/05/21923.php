<?
$subject_val = "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 16 14:16:25 2013" -->
<!-- isoreceived="20130516181625" -->
<!-- sent="Thu, 16 May 2013 14:16:21 -0400" -->
<!-- isosent="20130516181621" -->
<!-- name="Geraldine Hochman-Klarenberg" -->
<!-- email="ghochman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5" -->
<!-- id="4A742283-3BF6-4A71-A58D-E9D1AD8D7661_at_ufl.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B4D8C773-F7E9-47A3-A642-70A7D3D7BA40_at_ufl.edu" -->
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
<strong>From:</strong> Geraldine Hochman-Klarenberg (<em>ghochman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-16 14:16:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21924.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with64-bit integers"</a>
<li><strong>Previous message:</strong> <a href="21922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] distributed file system"</a>
<li><strong>In reply to:</strong> <a href="21916.php">Geraldine Hochman-Klarenberg: "[OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21925.php">Gus Correa: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>Reply:</strong> <a href="21925.php">Gus Correa: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>Reply:</strong> <a href="21927.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe I should add that my Intel C++ and Fortran compilers are different versions. C++ is 12.0.2 and Fortran is 13.0.2. Could that be an issue? Also, when I check for the location of ifort, it seems to be in usr/bin - which is different than the C compiler (even though I have folders /opt/intel/composer_xe_2013 and /opt/intel/composer_xe_2013.3.171 etc.). And I have tried source /opt/intel/bin/ifortvars.sh intel64 too.
<br>
<p>Geraldine
<br>
<p><p>On May 16, 2013, at 11:57 AM, Geraldine Hochman-Klarenberg wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having trouble configuring OpenMPI-1.6.4 with the Intel C/C++ composer (12.0.2). My OS is OSX 10.7.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not a computer whizz so I hope I can explain what I did properly:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) In bash, I did source /opt/intel/bin/compilervars.sh intel64 
</span><br>
<span class="quotelev1">&gt; and then echo PATH showed: 
</span><br>
<span class="quotelev1">&gt; /opt/intel/composerxe-2011.2.142/bin/intel64:/opt/intel/composerxe-2011.2.142/mpirt/bin/intel64:/opt/intel/composerxe-2011.2.142/bin:/Library/Frameworks/EPD64.framework/Versions/Current/bin:/Library/Frameworks/Python.framework/Versions/Current/bin:.:/Library/Frameworks/EPD64.framework/Versions/Current/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin:/usr/X11/bin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) which icc and which icpc showed:
</span><br>
<span class="quotelev1">&gt; /opt/intel/composerxe-2011.2.142/bin/intel64/icc
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; /opt/intel/composerxe-2011.2.142/bin/intel64/icpc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So that all seems okay to me. Still when I do
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CXX=icpc F77=ifort FC=ifort --prefix=/opt/openmpi-1.6.4
</span><br>
<span class="quotelev1">&gt; from the folder in which the extracted OpenMPI files sit, I get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; == Configuring Open MPI
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Startup tests
</span><br>
<span class="quotelev1">&gt; checking build system type... x86_64-apple-darwin11.4.2
</span><br>
<span class="quotelev1">&gt; checking host system type... x86_64-apple-darwin11.4.2
</span><br>
<span class="quotelev1">&gt; checking target system type... x86_64-apple-darwin11.4.2
</span><br>
<span class="quotelev1">&gt; checking for gcc... icc
</span><br>
<span class="quotelev1">&gt; checking whether the C compiler works... no
</span><br>
<span class="quotelev1">&gt; configure: error: in `/Users/geraldinehochman-klarenberg/Projects/openmpi-1.6.4':
</span><br>
<span class="quotelev1">&gt; configure: error: C compiler cannot create executables
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd really appreciate any pointers on how to solve this, because I'm running out of ideas on how to solve this (and so seems Google).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Geraldine
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21923/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21924.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with64-bit integers"</a>
<li><strong>Previous message:</strong> <a href="21922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] distributed file system"</a>
<li><strong>In reply to:</strong> <a href="21916.php">Geraldine Hochman-Klarenberg: "[OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21925.php">Gus Correa: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>Reply:</strong> <a href="21925.php">Gus Correa: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>Reply:</strong> <a href="21927.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
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
