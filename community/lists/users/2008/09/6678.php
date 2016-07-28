<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 18:29:45 2008" -->
<!-- isoreceived="20080922222945" -->
<!-- sent="Mon, 22 Sep 2008 15:21:28 -0700" -->
<!-- isosent="20080922222128" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="A820F6F1-C193-474D-9FF6-8C403F1F0AAC_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="94D2F131-60D5-48C3-9E8B-F0EFA94F9178_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure and Build ok, but mpi module not recognized?<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 18:21:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6679.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6677.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6677.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6679.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6679.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6681.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I think that unless make all depends on make clean and make clean  
<br>
depends on Makefile, you have to manually run make clean and/or  
<br>
manually delete the module files.
<br>
<p>Doug Reeder
<br>
On Sep 22, 2008, at 3:16 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 22, 2008, at 6:08 PM, Brian Harker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the config.log file...now that I look through it more
</span><br>
<span class="quotelev2">&gt;&gt; carefully, I see some errors that I didn't see when watching
</span><br>
<span class="quotelev2">&gt;&gt; ./configure scroll by...still don't know what to do though.  :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not to worry; there are many tests in configure that are designed  
</span><br>
<span class="quotelev1">&gt; to fail.  So it's not a problem to see lots of failures in config.log.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see that it did use ifort for both the F77 and F90 compilers;  
</span><br>
<span class="quotelev1">&gt; that's what I wanted to check with configure output and config.log.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per Doug's comment, if OMPI is not re-compiling the Fortran module  
</span><br>
<span class="quotelev1">&gt; when you reconfigure with a new fortran compiler, that is likely a  
</span><br>
<span class="quotelev1">&gt; bug.  Can you &quot;make clean all install&quot; and see if it works?  If  
</span><br>
<span class="quotelev1">&gt; not, send all the output here (see <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> 
</span><br>
<span class="quotelev1">&gt; community/help/ for instructions; please compress).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="6679.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6677.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6677.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6679.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6679.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6681.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
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
