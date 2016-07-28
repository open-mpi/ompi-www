<?
$subject_val = "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that workswithMPICH2)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 23:58:53 2009" -->
<!-- isoreceived="20090905035853" -->
<!-- sent="Sat, 5 Sep 2009 06:58:45 +0300" -->
<!-- isosent="20090905035845" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI error in MPI_Cart_create (in code that workswithMPICH2)" -->
<!-- id="7FCE427A-B4A9-49CE-8E4A-8FD63739676B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c615a6650909020727x6a9ad5a4me694e50c7747176_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI error in MPI_Cart_create (in code that workswithMPICH2)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 23:58:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10578.php">St Druid: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Previous message:</strong> <a href="10576.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
<li><strong>In reply to:</strong> <a href="10560.php">Greg Fischer: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 2, 2009, at 5:27 PM, Greg Fischer wrote:
<br>
<p><span class="quotelev1">&gt; OK, I've found the offending code and gotten rid of the fork()  
</span><br>
<span class="quotelev1">&gt; warning.  I'm still left with this:
</span><br>
<p>Sorry for the delay -- I was in Helsinki this past week at the MPI  
<br>
Forum meeting; that was consuming most of my bandwidth.
<br>
<p><span class="quotelev1">&gt; [bl302:26556] *** An error occurred in MPI_Cart_create
</span><br>
<span class="quotelev1">&gt; [bl302:26556] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [bl302:26556] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; [bl302:26556] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<p>It looks like OMPI reports ERR_ARG from Cart_create in the following  
<br>
cases:
<br>
<p>- ndims &lt; 0
<br>
- if (ndims &gt;= 1 &amp;&amp; (NULL == dims || NULL == periods || NULL ==  
<br>
comm_cart))
<br>
- if (dims[0] * dims[1] * ... * dims[ndims-1] &gt; num procs in comm)
<br>
<p>Can you confirm that all of these are false?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10578.php">St Druid: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Previous message:</strong> <a href="10576.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
<li><strong>In reply to:</strong> <a href="10560.php">Greg Fischer: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
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
