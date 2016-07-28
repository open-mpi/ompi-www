<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 14 10:30:11 2012" -->
<!-- isoreceived="20120814143011" -->
<!-- sent="Tue, 14 Aug 2012 10:30:00 -0400" -->
<!-- isosent="20120814143000" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe" -->
<!-- id="70E85AAE-FC76-4520-B81F-FD206B1B96A1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD2395E782_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-14 10:30:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11395.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>Previous message:</strong> <a href="11393.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>In reply to:</strong> <a href="11393.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11395.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="11395.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 14, 2012, at 10:04 AM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; That's incorrect.  Fortran statuses should never be passed to C
</span><br>
<span class="quotelev1">&gt; interfaces.  If you look at testany_f.c, for example, a temporary status
</span><br>
<span class="quotelev1">&gt; is created and then passed to the C binding
</span><br>
<p>I think the issue is that there is a mix of both styles.  Look at recv_f.c, for example -- in some cases, we pass the Fortran integer array (if the sizes are equal), and in other cases, we use a temp C MPI_Status.
<br>
<p><span class="quotelev1">&gt; (although, in this case, it
</span><br>
<span class="quotelev1">&gt; would probably be more efficient to pass it directly to
</span><br>
<span class="quotelev1">&gt; ompi_request_testany(), but that's not important here).  
</span><br>
<p>Probably so.  No one has undertaken an effort to have the mpif.h interfaces directly call the back-end OMPI functions (vs. the MPI functions).  It might be worthwhile if someone has an intern / student and wants to come up to speed on OMPI internals -- e.g., they could at least remove some of the calls to MPI functions from performance-critical mpif.h functions (e.g., MPI_Send, MPI_Recv, ...etc.).
<br>
<p><span class="quotelev1">&gt; The part that is
</span><br>
<span class="quotelev1">&gt; important is that outside of the Fortran interfaces themselves, requests
</span><br>
<span class="quotelev1">&gt; are always C requests.
</span><br>
<p><p>George and Eugene came to similar conclusions on <a href="https://svn.open-mpi.org/trac/ompi/ticket/3218">https://svn.open-mpi.org/trac/ompi/ticket/3218</a>.
<br>
<p>However, there is a downside (as Eugene pointed out): with the C bindings, we usually (always?) end up copying the status once (from the back-end request to the user-specified status).  If we go the use-a-C-MPI_Status route in for the mpif.h bindings, then we'll end up copying the status twice (back-end request -&gt; temp C MPI_Status -&gt; fortran INTEGER array).
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
<li><strong>Next message:</strong> <a href="11395.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>Previous message:</strong> <a href="11393.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>In reply to:</strong> <a href="11393.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11395.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="11395.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
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
