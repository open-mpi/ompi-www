<?
$subject_val = "Re: [OMPI users] MPI/FORTRAN on a cluster system";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 20 10:02:17 2012" -->
<!-- isoreceived="20120820140217" -->
<!-- sent="Mon, 20 Aug 2012 10:02:12 -0400" -->
<!-- isosent="20120820140212" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI/FORTRAN on a cluster system" -->
<!-- id="93235B7D-9C4B-4978-B330-2FBC83A44441_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="!&amp;amp;!AAAAAAAAAAAYAAAAAAAAACo6WO/PMklHk2zETp/yOVnCgAAAEAAAAMNNTWY6GGJBsPimMOmuj3oBAAAAAA==_at_earthlink.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI/FORTRAN on a cluster system<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-20 10:02:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19964.php">Jeff Squyres: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Previous message:</strong> <a href="19962.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>In reply to:</strong> <a href="19956.php">Bill Mulberry: "[OMPI users] MPI/FORTRAN on a cluster system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19965.php">David Warren: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 19, 2012, at 12:11 PM, Bill Mulberry wrote:
<br>
<p><span class="quotelev1">&gt; I have a large program written in FORTRAN 77 with a couple of routines
</span><br>
<span class="quotelev1">&gt; written in C++.  It has MPI commands built into it to run on a large scale
</span><br>
<span class="quotelev1">&gt; multiprocessor IBM systems.  I am now having the task of transferring this
</span><br>
<span class="quotelev1">&gt; program over to a cluster system.  Both the multiprocessor and cluster
</span><br>
<span class="quotelev1">&gt; system has linux hosted on them.  The Cluster system has GNU FORTRAN and GNU
</span><br>
<span class="quotelev1">&gt; C compilers on it.  I am told the Cluster has openmpi.  I am wondering if
</span><br>
<span class="quotelev1">&gt; anybody out there has had to do the same task and if so what I can expect
</span><br>
<span class="quotelev1">&gt; from this.  Will I be expected to make some big changes, etc.?  Any advice
</span><br>
<span class="quotelev1">&gt; will be appreciated.
</span><br>
<p><p>MPI and Fortran are generally portable, meaning that if you wrote a correct MPI Fortran application, it should be immediately portable to a new system.
<br>
<p>That being said, many applications are accidentally/inadvertently not correct.  For example, when you try to compile your application on a Linux cluster with Open MPI, you'll find that you accidentally used a Fortran construct that was specific to IBM's Fortran compiler and is not portable.  Similarly, when you run the application, you may find that inadvertently you used an implicit assumption for IBM's MPI implementation that isn't true for Open MPI.
<br>
<p>...or you may find that everything just works, and you can raise a toast to the portability gods.
<br>
<p>I expect that your build / compile / link procedure may change a bit from the old system to the new system.  In Open MPI, you should be able to use &quot;mpif77&quot; and/or &quot;mpif90&quot; to compile and link everything.  No further MPI-related flags are necessary (no need to -I to specify where mpif.h is located, no need to -lmpi, ...etc.).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19964.php">Jeff Squyres: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Previous message:</strong> <a href="19962.php">Ralph Castain: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>In reply to:</strong> <a href="19956.php">Bill Mulberry: "[OMPI users] MPI/FORTRAN on a cluster system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19965.php">David Warren: "Re: [OMPI users] MPI/FORTRAN on a cluster system"</a>
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
