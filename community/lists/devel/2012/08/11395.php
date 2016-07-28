<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 14 11:11:11 2012" -->
<!-- isoreceived="20120814151111" -->
<!-- sent="Tue, 14 Aug 2012 15:10:29 +0000" -->
<!-- isosent="20120814151029" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD2395F931_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="70E85AAE-FC76-4520-B81F-FD206B1B96A1_at_cisco.com" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-14 11:10:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11396.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="11394.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>In reply to:</strong> <a href="11394.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11397.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="11397.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/14/12 8:30 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;On Aug 14, 2012, at 10:04 AM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's incorrect.  Fortran statuses should never be passed to C
</span><br>
<span class="quotelev2">&gt;&gt; interfaces.  If you look at testany_f.c, for example, a temporary status
</span><br>
<span class="quotelev2">&gt;&gt; is created and then passed to the C binding
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I think the issue is that there is a mix of both styles.  Look at
</span><br>
<span class="quotelev1">&gt;recv_f.c, for example -- in some cases, we pass the Fortran integer array
</span><br>
<span class="quotelev1">&gt;(if the sizes are equal), and in other cases, we use a temp C MPI_Status.
</span><br>
<p>Sounds like a Fortran problem to me ;).
<br>
<p><p><span class="quotelev2">&gt;&gt; (although, in this case, it
</span><br>
<span class="quotelev2">&gt;&gt; would probably be more efficient to pass it directly to
</span><br>
<span class="quotelev2">&gt;&gt; ompi_request_testany(), but that's not important here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Probably so.  No one has undertaken an effort to have the mpif.h
</span><br>
<span class="quotelev1">&gt;interfaces directly call the back-end OMPI functions (vs. the MPI
</span><br>
<span class="quotelev1">&gt;functions).  It might be worthwhile if someone has an intern / student
</span><br>
<span class="quotelev1">&gt;and wants to come up to speed on OMPI internals -- e.g., they could at
</span><br>
<span class="quotelev1">&gt;least remove some of the calls to MPI functions from performance-critical
</span><br>
<span class="quotelev1">&gt;mpif.h functions (e.g., MPI_Send, MPI_Recv, ...etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The part that is
</span><br>
<span class="quotelev2">&gt;&gt; important is that outside of the Fortran interfaces themselves, requests
</span><br>
<span class="quotelev2">&gt;&gt; are always C requests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;George and Eugene came to similar conclusions on
</span><br>
<span class="quotelev1">&gt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3218">https://svn.open-mpi.org/trac/ompi/ticket/3218</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;However, there is a downside (as Eugene pointed out): with the C
</span><br>
<span class="quotelev1">&gt;bindings, we usually (always?) end up copying the status once (from the
</span><br>
<span class="quotelev1">&gt;back-end request to the user-specified status).  If we go the
</span><br>
<span class="quotelev1">&gt;use-a-C-MPI_Status route in for the mpif.h bindings, then we'll end up
</span><br>
<span class="quotelev1">&gt;copying the status twice (back-end request -&gt; temp C MPI_Status -&gt;
</span><br>
<span class="quotelev1">&gt;fortran INTEGER array).
</span><br>
<p>I agree, although I'd prefer that over a bunch of macros in the MCA code,
<br>
particularly OB1.
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11396.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="11394.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>In reply to:</strong> <a href="11394.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11397.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="11397.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
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
