<?
$subject_val = "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 08:32:18 2009" -->
<!-- isoreceived="20090219133218" -->
<!-- sent="Thu, 19 Feb 2009 08:32:12 -0500" -->
<!-- isosent="20090219133212" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers" -->
<!-- id="A105EE98-0215-4490-B7CB-4EAE1EB19DDA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="929644.82215.qm_at_web112218.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 08:32:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8105.php">viral.mehta_at_[hidden]: "[OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR"</a>
<li><strong>Previous message:</strong> <a href="8103.php">Jeff Squyres: "Re: [OMPI users] support for gamess us?"</a>
<li><strong>In reply to:</strong> <a href="8084.php">Tamara Rogers: "[OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8112.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your config.log looks incomplete -- it failed saying that your C and C+ 
<br>
+ compilers were incompatible with each other.
<br>
<p>This does not seem related to what you described -- are you sure  
<br>
you're sending the right config.log?
<br>
<p>Specifically, can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Feb 17, 2009, at 5:10 PM, Tamara Rogers wrote:
<br>
<p><span class="quotelev1">&gt; Hello all:
</span><br>
<span class="quotelev1">&gt; I was unable to compile the latest version (1.3) on my intel 64bit  
</span><br>
<span class="quotelev1">&gt; system with the intel compilers (version 9.0). Configuration goes  
</span><br>
<span class="quotelev1">&gt; fine, but I get this error when running make:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h(203): error: identifier &quot;ptrdiff_t&quot; is  
</span><br>
<span class="quotelev1">&gt; undefined
</span><br>
<span class="quotelev1">&gt;      typedef OMPI_PTRDIFF_TYPE MPI_Aint;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compilation aborted for dt_args.c (cod 21)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My config line was:
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CXX=icpc F77=ifort FC=ifort --prefix=xxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached my config.log file. Has anyone encourtered this? I was  
</span><br>
<span class="quotelev1">&gt; able to build openmpi on this exact system using the gcc/g++  
</span><br>
<span class="quotelev1">&gt; compilers, however the intel compilers are substantially faster on  
</span><br>
<span class="quotelev1">&gt; our system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.log&gt;_______________________________________________
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8105.php">viral.mehta_at_[hidden]: "[OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR"</a>
<li><strong>Previous message:</strong> <a href="8103.php">Jeff Squyres: "Re: [OMPI users] support for gamess us?"</a>
<li><strong>In reply to:</strong> <a href="8084.php">Tamara Rogers: "[OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8112.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
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
