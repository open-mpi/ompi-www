<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 14 11:49:15 2012" -->
<!-- isoreceived="20120814154915" -->
<!-- sent="Tue, 14 Aug 2012 11:49:09 -0400" -->
<!-- isosent="20120814154909" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe" -->
<!-- id="0FABED8C-D54D-4F44-B610-F564B6B7ED46_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD2395F931_at_EXMB01.srn.sandia.gov" -->
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
<strong>Date:</strong> 2012-08-14 11:49:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11398.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27035 - trunk/orte/util"</a>
<li><strong>Previous message:</strong> <a href="11396.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="11395.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Noted in <a href="https://svn.open-mpi.org/trac/ompi/ticket/3218#comment:4">https://svn.open-mpi.org/trac/ompi/ticket/3218#comment:4</a>.
<br>
<p>On Aug 14, 2012, at 11:10 AM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; On 8/14/12 8:30 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 14, 2012, at 10:04 AM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's incorrect.  Fortran statuses should never be passed to C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interfaces.  If you look at testany_f.c, for example, a temporary status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is created and then passed to the C binding
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think the issue is that there is a mix of both styles.  Look at
</span><br>
<span class="quotelev2">&gt;&gt; recv_f.c, for example -- in some cases, we pass the Fortran integer array
</span><br>
<span class="quotelev2">&gt;&gt; (if the sizes are equal), and in other cases, we use a temp C MPI_Status.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sounds like a Fortran problem to me ;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (although, in this case, it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would probably be more efficient to pass it directly to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_request_testany(), but that's not important here).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Probably so.  No one has undertaken an effort to have the mpif.h
</span><br>
<span class="quotelev2">&gt;&gt; interfaces directly call the back-end OMPI functions (vs. the MPI
</span><br>
<span class="quotelev2">&gt;&gt; functions).  It might be worthwhile if someone has an intern / student
</span><br>
<span class="quotelev2">&gt;&gt; and wants to come up to speed on OMPI internals -- e.g., they could at
</span><br>
<span class="quotelev2">&gt;&gt; least remove some of the calls to MPI functions from performance-critical
</span><br>
<span class="quotelev2">&gt;&gt; mpif.h functions (e.g., MPI_Send, MPI_Recv, ...etc.).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The part that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; important is that outside of the Fortran interfaces themselves, requests
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are always C requests.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George and Eugene came to similar conclusions on
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/3218">https://svn.open-mpi.org/trac/ompi/ticket/3218</a>.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, there is a downside (as Eugene pointed out): with the C
</span><br>
<span class="quotelev2">&gt;&gt; bindings, we usually (always?) end up copying the status once (from the
</span><br>
<span class="quotelev2">&gt;&gt; back-end request to the user-specified status).  If we go the
</span><br>
<span class="quotelev2">&gt;&gt; use-a-C-MPI_Status route in for the mpif.h bindings, then we'll end up
</span><br>
<span class="quotelev2">&gt;&gt; copying the status twice (back-end request -&gt; temp C MPI_Status -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fortran INTEGER array).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree, although I'd prefer that over a bunch of macros in the MCA code,
</span><br>
<span class="quotelev1">&gt; particularly OB1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="11398.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27035 - trunk/orte/util"</a>
<li><strong>Previous message:</strong> <a href="11396.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>In reply to:</strong> <a href="11395.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
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
