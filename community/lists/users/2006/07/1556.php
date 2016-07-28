<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  5 16:17:50 2006" -->
<!-- isoreceived="20060705201750" -->
<!-- sent="Wed, 5 Jul 2006 16:17:41 -0400" -->
<!-- isosent="20060705201741" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac OS X, ppc64, opal_if" -->
<!-- id="3434DA82-609A-4A12-9094-4226FFCD62BB_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CCD0BA66-5C60-49CE-A69A-D506B6604F3C_at_erdc.usace.army.mil" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-05 16:17:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1557.php">Eric Thibodeau: "[OMPI users] Dynamic COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="1555.php">Chris Kees: "[OMPI users] Mac OS X, ppc64, opal_if"</a>
<li><strong>In reply to:</strong> <a href="1555.php">Chris Kees: "[OMPI users] Mac OS X, ppc64, opal_if"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Chris,
<br>
<p>I'm doing most of my work on Open MPI on a similar machine (Dual g5  
<br>
64 bits with 4GB of RAM). I'm using several compiler (gcc as well as  
<br>
IBM). Usually, I'm compiling it with the latest unstable version of  
<br>
gcc/gfortran (directly fetched from subversion). I never noticed this  
<br>
problem. Everything runs smoothly for me. However, last time I update  
<br>
my gcc/gfortran was 3 weeks ago. I will try to update to the latest  
<br>
version and see if I notice something weird.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p>On Jul 5, 2006, at 4:04 PM, Chris Kees wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to build a 64 bit version of openmpi on a powerpc  
</span><br>
<span class="quotelev1">&gt; running Mac OS X 10.4.7 and using a recent snapshot of gcc/g++/ 
</span><br>
<span class="quotelev1">&gt; gfortran from the gcc svn repository. The config and build process  
</span><br>
<span class="quotelev1">&gt; goes smoothly but the result doesn't pass all the tests. It hans on  
</span><br>
<span class="quotelev1">&gt; the opal_if test as well as simply running mpirun -np 1 hostname.  
</span><br>
<span class="quotelev1">&gt; The process ramps up the member up to about 3.5G and the machine  
</span><br>
<span class="quotelev1">&gt; becomes very sluggish (it has 8G).  Has anybody seen this before or  
</span><br>
<span class="quotelev1">&gt; had experience building on similar systems?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1557.php">Eric Thibodeau: "[OMPI users] Dynamic COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="1555.php">Chris Kees: "[OMPI users] Mac OS X, ppc64, opal_if"</a>
<li><strong>In reply to:</strong> <a href="1555.php">Chris Kees: "[OMPI users] Mac OS X, ppc64, opal_if"</a>
<!-- nextthread="start" -->
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
