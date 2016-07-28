<?
$subject_val = "Re: [OMPI users] Can not turn off C++ build.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 16:17:44 2012" -->
<!-- isoreceived="20121128211744" -->
<!-- sent="Wed, 28 Nov 2012 16:17:35 -0500" -->
<!-- isosent="20121128211735" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can not turn off C++ build." -->
<!-- id="37F871E4-1A05-45F2-A198-112D05A81695_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50B663A8.30608_at_iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can not turn off C++ build.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-28 16:17:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20797.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Previous message:</strong> <a href="20795.php">Mariana Vargas Magana: "[OMPI users] error with mrmpi and openmpi"</a>
<li><strong>In reply to:</strong> <a href="20794.php">Ray Sheppard: "[OMPI users] Can not turn off C++ build."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20797.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Reply:</strong> <a href="20797.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll bet we're not disabling the C++ test properly when you disable the C++ bindings.  Bummer.  I'll file a bug, but I don't know when that will be fixed.
<br>
<p>However, this kind of error typically only occurs when your C++ compiler fails altogether (e.g., it's broken).  Check the config.log file and see what it says happened for this specific test -- it may well be that your C++ compiler is faulty and needs to be fixed anyway.
<br>
<p><p>On Nov 28, 2012, at 2:19 PM, Ray Sheppard wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;  I am trying to build OpenMPI 1.6.3 on an IBM/Intel RHEL-6 cluster.
</span><br>
<span class="quotelev1">&gt;  I tried building with variations (meaning enable-...=no, disable-,
</span><br>
<span class="quotelev1">&gt; changing switch order, etc.) of this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CFLAGS=&quot;-xT -O2&quot; F77=ifort FFLAGS=&quot;-xT -O2&quot;
</span><br>
<span class="quotelev1">&gt; FC=ifort FCFLAGS=&quot;-xT -O2&quot; --enable-mpi-cxx=no --disable-mpi-cxx-seek
</span><br>
<span class="quotelev1">&gt; --enable-static --disable-shared --with-threads=posix
</span><br>
<span class="quotelev1">&gt; --prefix=/N/soft/rhel6/openmpi/intel/openmpi-1.6.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I first tried using icpc as a CXX compiler but it dies shortly after
</span><br>
<span class="quotelev1">&gt; checking the alignment of bool.  C++ bindings are not that popular so I
</span><br>
<span class="quotelev1">&gt; decided to just turn them off.  Now, it just picks up g++ and tries
</span><br>
<span class="quotelev1">&gt; building the C++ bindings anyway:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ** C++ compiler and preprocessor
</span><br>
<span class="quotelev1">&gt; checking for g++... g++
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU C++ compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether g++ accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking dependency style of g++... gcc3
</span><br>
<span class="quotelev1">&gt; checking how to run the C++ preprocessor... g++ -E
</span><br>
<span class="quotelev1">&gt; checking for the C++ compiler vendor... gnu
</span><br>
<span class="quotelev1">&gt; checking if g++ supports -finline-functions... yes
</span><br>
<span class="quotelev1">&gt; configure: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev1">&gt; checking if C and C++ are link compatible... yes
</span><br>
<span class="quotelev1">&gt; checking for C++ optimization flags... -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; checking size of bool... 0
</span><br>
<span class="quotelev1">&gt; checking alignment of bool... configure: WARNING: *** Problem running
</span><br>
<span class="quotelev1">&gt; configure test!
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** See config.log for details.
</span><br>
<span class="quotelev1">&gt; configure: error: *** Cannot continue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It still errors.  I am happy to just kill C++ but it won't.  What is
</span><br>
<span class="quotelev1">&gt; wrong?  Thanks.
</span><br>
<span class="quotelev1">&gt;                              Ray
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;                         Respectfully,
</span><br>
<span class="quotelev1">&gt;                           Ray Sheppard
</span><br>
<span class="quotelev1">&gt; 			RSheppar_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 			<a href="http://pti.iu.edu/sciapt">http://pti.iu.edu/sciapt</a>
</span><br>
<span class="quotelev1">&gt;                           317-274-0016
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   Principal Analyst
</span><br>
<span class="quotelev1">&gt;                   Scientific Applications and Performance Tuning
</span><br>
<span class="quotelev1">&gt;                   Research Technologies
</span><br>
<span class="quotelev1">&gt;                   University Information Technological Services
</span><br>
<span class="quotelev1">&gt;                   IUPUI campus
</span><br>
<span class="quotelev1">&gt;                   Indiana University
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   My &quot;pithy&quot; saying:  Science is the art of translating the world
</span><br>
<span class="quotelev1">&gt;       into language. Unfortunately, that language is mathematics.
</span><br>
<span class="quotelev1">&gt;   Bumper sticker wisdom: Make it idiot-proof and they will make a
</span><br>
<span class="quotelev1">&gt;       better idiot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="20797.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Previous message:</strong> <a href="20795.php">Mariana Vargas Magana: "[OMPI users] error with mrmpi and openmpi"</a>
<li><strong>In reply to:</strong> <a href="20794.php">Ray Sheppard: "[OMPI users] Can not turn off C++ build."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20797.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Reply:</strong> <a href="20797.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
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
