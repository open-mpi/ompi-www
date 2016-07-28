<?
$subject_val = "Re: [OMPI users] Java bindings failed to load required libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 16:49:03 2012" -->
<!-- isoreceived="20121025204903" -->
<!-- sent="Thu, 25 Oct 2012 22:47:40 +0200 (CEST)" -->
<!-- isosent="20121025204740" -->
<!-- name="Georg Ruzicka" -->
<!-- email="82ruge1bif_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java bindings failed to load required libraries" -->
<!-- id="ebdf0562-a0c9-4758-a0e2-3dd9bcb677e6_at_hft-stuttgart.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Java bindings failed to load required libraries" -->
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
<strong>Subject:</strong> Re: [OMPI users] Java bindings failed to load required libraries<br>
<strong>From:</strong> Georg Ruzicka (<em>82ruge1bif_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-25 16:47:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20542.php">tmishima_at_[hidden]: "[OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Previous message:</strong> <a href="20540.php">Jeff Squyres: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Maybe in reply to:</strong> <a href="20532.php">Georg Ruzicka: "[OMPI users] Java bindings failed to load required libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20601.php">Ralph Castain: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sry, my fault.
<br>
not libtool 1.12.3
<br>
i mixed it up with automake
<br>
<p><p>----- Urspr&#195;&#188;ngliche Mail -----
<br>
Von: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
An: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Gesendet: Donnerstag, 25. Oktober 2012 20:03:48 GMT +01:00 Amsterdam/Berlin/Bern/Rom/Stockholm/Wien
<br>
Betreff: Re: [OMPI users] Java bindings failed to load required libraries
<br>
<p>Did you build from a trunk nightly tarball, or a SVN checkout?
<br>
<p>If a SVN checkout, you probably need to upgrade your Libtool.  See this chart:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>
<br>
<p><p>On Oct 25, 2012, at 1:06 PM, Georg Ruzicka wrote:
<br>
<p><span class="quotelev1">&gt; Hello.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed open mpi and try to run the examples.
</span><br>
<span class="quotelev1">&gt; I used the developer trunk.
</span><br>
<span class="quotelev1">&gt; C, C++ and Fortran90 examples compiling and running well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When i tried to run the compiled Hello.java class
</span><br>
<span class="quotelev1">&gt; i get this messages:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; georg_at_ThinkPad-R61:~/ompi-svn/examples$ mpirun java Hello
</span><br>
<span class="quotelev1">&gt; [ThinkPad-R61:19720] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev1">&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Process name: [[43465,1],0]
</span><br>
<span class="quotelev1">&gt;  Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configure with:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/georg/ompi-install1 --with-platform=optimized --enable-mpi-java --with-jdk-dir=/opt/jdk1.7.0_09
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I work with ubuntu 10.10.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I added to .bashrc:
</span><br>
<span class="quotelev1">&gt; export PATH=$PATH:/home/georg/tools/installed/bin:/home/georg/ompi-install1/bin:/opt/jdk1.7.0_09/bin:/opt/jdk1.7.0_09
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$LB_LIBRARY_PATH:/home/georg/ompi-install1/lib:/home/georg/ompi-install1/lib/openmpi:/home/georg/ompi-install1/lib/pkgconfig 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can compile and run java progs 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did anyone know the fault?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20542.php">tmishima_at_[hidden]: "[OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Previous message:</strong> <a href="20540.php">Jeff Squyres: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Maybe in reply to:</strong> <a href="20532.php">Georg Ruzicka: "[OMPI users] Java bindings failed to load required libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20601.php">Ralph Castain: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
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
