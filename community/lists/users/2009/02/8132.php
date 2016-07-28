<?
$subject_val = "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 08:09:24 2009" -->
<!-- isoreceived="20090220130924" -->
<!-- sent="Fri, 20 Feb 2009 08:09:16 -0500" -->
<!-- isosent="20090220130916" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers" -->
<!-- id="D968A993-3C72-4B11-915A-0D14395D5842_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="397221.60611.qm_at_web112209.mail.gq1.yahoo.com" -->
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
<strong>Date:</strong> 2009-02-20 08:09:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8133.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8131.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="8112.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8133.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Reply:</strong> <a href="8133.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send your config.log as well?
<br>
<p>It looks like you forgot to specify FC=ifort on your configure line  
<br>
(i.e., you need to specify F77=ifort for the Fortran 77 *and* FC=ifort  
<br>
for the Fortran 90 compiler -- this is an Autoconf thing; we didn't  
<br>
make it up).
<br>
<p>That shouldn't be the problem here, but I thought I'd mention it.
<br>
<p><p>On Feb 19, 2009, at 12:00 PM, Tamara Rogers wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff:
</span><br>
<span class="quotelev1">&gt; You're correct. That was the incorrect config file. I've attached  
</span><br>
<span class="quotelev1">&gt; the correct one as per the recommendations in the help page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Thu, 2/19/09, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] ptrdiff_t undefined error on intel 64bit  
</span><br>
<span class="quotelev1">&gt; machine with intel compilers
</span><br>
<span class="quotelev1">&gt; To: talmesha_r_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thursday, February 19, 2009, 8:32 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your config.log looks incomplete -- it failed saying that your C and  
</span><br>
<span class="quotelev1">&gt; C++
</span><br>
<span class="quotelev1">&gt; compilers were incompatible with each other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This does not seem related to what you described -- are you sure  
</span><br>
<span class="quotelev1">&gt; you're
</span><br>
<span class="quotelev1">&gt; sending the right config.log?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, can you send all the information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 17, 2009, at 5:10 PM, Tamara Rogers wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello all:
</span><br>
<span class="quotelev2">&gt; &gt; I was unable to compile the latest version (1.3) on my intel 64bit  
</span><br>
<span class="quotelev1">&gt; system
</span><br>
<span class="quotelev1">&gt; with the intel compilers (version 9.0). Configuration goes fine, but  
</span><br>
<span class="quotelev1">&gt; I get this
</span><br>
<span class="quotelev1">&gt; error when running make:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ../../ompi/include/mpi.h(203): error: identifier &quot;ptrdiff_t&quot; is
</span><br>
<span class="quotelev1">&gt; undefined
</span><br>
<span class="quotelev2">&gt; &gt;      typedef OMPI_PTRDIFF_TYPE MPI_Aint;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; compilation aborted for dt_args.c (cod 21)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My config line was:
</span><br>
<span class="quotelev2">&gt; &gt; ./configure CC=icc CXX=icpc F77=ifort FC=ifort --prefix=xxx
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've attached my config.log file. Has anyone encourtered this? I was
</span><br>
<span class="quotelev1">&gt; able to build openmpi on this exact system using the gcc/g++  
</span><br>
<span class="quotelev1">&gt; compilers, however
</span><br>
<span class="quotelev1">&gt; the intel compilers are substantially faster on our system.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;config.log&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; openmp 
</span><br>
<span class="quotelev1">&gt; -1.3_output.tar.gz&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="8133.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8131.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="8112.php">Tamara Rogers: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8133.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Reply:</strong> <a href="8133.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
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
