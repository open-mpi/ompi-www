<?
$subject_val = "Re: [OMPI users] Java bindings failed to load required libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 16:47:31 2012" -->
<!-- isoreceived="20121025204731" -->
<!-- sent="Thu, 25 Oct 2012 16:47:26 -0400" -->
<!-- isosent="20121025204726" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java bindings failed to load required libraries" -->
<!-- id="1A8AD224-1C4B-4BE6-AA54-FAA92385A937_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="a8509b59-db7f-4a22-93f8-888fd84610f0_at_hft-stuttgart.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-25 16:47:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20541.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Previous message:</strong> <a href="20539.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>In reply to:</strong> <a href="20539.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20541.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you do a developer's build like this (i.e., checking our from SVN), you need much newer Autotools.
<br>
<p>See the HACKING file in the OMPI top-level directory.
<br>
<p><p>On Oct 25, 2012, at 4:45 PM, Georg Ruzicka wrote:
<br>
<p><span class="quotelev1">&gt; I have a svn checkout and installed the tools are listed for the trunk.
</span><br>
<span class="quotelev1">&gt; There are an newer version of libtool 1.12.3
</span><br>
<span class="quotelev1">&gt; But i haven't installed yet
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I try it with the newer version...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Urspr&#252;ngliche Mail -----
</span><br>
<span class="quotelev1">&gt; Von: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; An: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Gesendet: Donnerstag, 25. Oktober 2012 20:03:48 GMT +01:00 Amsterdam/Berlin/Bern/Rom/Stockholm/Wien
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [OMPI users] Java bindings failed to load required libraries
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you build from a trunk nightly tarball, or a SVN checkout?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If a SVN checkout, you probably need to upgrade your Libtool.  See this chart:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2012, at 1:06 PM, Georg Ruzicka wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I installed open mpi and try to run the examples.
</span><br>
<span class="quotelev2">&gt;&gt; I used the developer trunk.
</span><br>
<span class="quotelev2">&gt;&gt; C, C++ and Fortran90 examples compiling and running well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When i tried to run the compiled Hello.java class
</span><br>
<span class="quotelev2">&gt;&gt; i get this messages:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; georg_at_ThinkPad-R61:~/ompi-svn/examples$ mpirun java Hello
</span><br>
<span class="quotelev2">&gt;&gt; [ThinkPad-R61:19720] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev2">&gt;&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev2">&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Process name: [[43465,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; Exit code:    1
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I configure with:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/home/georg/ompi-install1 --with-platform=optimized --enable-mpi-java --with-jdk-dir=/opt/jdk1.7.0_09
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I work with ubuntu 10.10.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I added to .bashrc:
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=$PATH:/home/georg/tools/installed/bin:/home/georg/ompi-install1/bin:/opt/jdk1.7.0_09/bin:/opt/jdk1.7.0_09
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=$LB_LIBRARY_PATH:/home/georg/ompi-install1/lib:/home/georg/ompi-install1/lib/openmpi:/home/georg/ompi-install1/lib/pkgconfig 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can compile and run java progs 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Did anyone know the fault?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="20541.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Previous message:</strong> <a href="20539.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>In reply to:</strong> <a href="20539.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20541.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
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
