<?
$subject_val = "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 12:00:41 2009" -->
<!-- isoreceived="20090219170041" -->
<!-- sent="Thu, 19 Feb 2009 09:00:34 -0800 (PST)" -->
<!-- isosent="20090219170034" -->
<!-- name="Tamara Rogers" -->
<!-- email="talmesha_r_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers" -->
<!-- id="397221.60611.qm_at_web112209.mail.gq1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers" -->
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
<strong>From:</strong> Tamara Rogers (<em>talmesha_r_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 12:00:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8113.php">Jim Kusznir: "[OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Previous message:</strong> <a href="8111.php">Elvedin Trnjanin: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="8084.php">Tamara Rogers: "[OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8132.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Reply:</strong> <a href="8132.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff:
<br>
You're correct. That was the incorrect config file. I've attached the correct one as per the recommendations in the help page.
<br>
&#160;
<br>
Thanks for your help
<br>
<p>--- On Thu, 2/19/09, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers
<br>
To: talmesha_r_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Thursday, February 19, 2009, 8:32 AM
<br>
<p>Your config.log looks incomplete -- it failed saying that your C and C++
<br>
compilers were incompatible with each other.
<br>
<p>This does not seem related to what you described -- are you sure you're
<br>
sending the right config.log?
<br>
<p>Specifically, can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Feb 17, 2009, at 5:10 PM, Tamara Rogers wrote:
<br>
<p><span class="quotelev1">&gt; Hello all:
</span><br>
<span class="quotelev1">&gt; I was unable to compile the latest version (1.3) on my intel 64bit system
</span><br>
with the intel compilers (version 9.0). Configuration goes fine, but I get this
<br>
error when running make:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h(203): error: identifier &quot;ptrdiff_t&quot; is
</span><br>
undefined
<br>
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
able to build openmpi on this exact system using the gcc/g++ compilers, however
<br>
the intel compilers are substantially faster on our system.
<br>
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
<p><p>--Jeff Squyres
<br>
Cisco Systems
<br>
<p><p><p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8112/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8112/openmp-1.3_output.tar.gz">openmp-1.3_output.tar.gz</a>
</ul>
<!-- attachment="openmp-1.3_output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8113.php">Jim Kusznir: "[OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Previous message:</strong> <a href="8111.php">Elvedin Trnjanin: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="8084.php">Tamara Rogers: "[OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8132.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Reply:</strong> <a href="8132.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
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
