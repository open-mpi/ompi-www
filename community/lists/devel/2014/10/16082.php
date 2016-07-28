<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 05:52:15 2014" -->
<!-- isoreceived="20141023095215" -->
<!-- sent="Thu, 23 Oct 2014 18:52:16 +0900" -->
<!-- isosent="20141023095216" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40" -->
<!-- id="5448CFD0.90509_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="543F3AE0.4020708_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-23 05:52:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<li><strong>Previous message:</strong> <a href="16081.php">Gilles Gouaillardet: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<li><strong>In reply to:</strong> <a href="16051.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and George,
<br>
<p>i just made PR 249 <a href="https://github.com/open-mpi/ompi/pull/249">https://github.com/open-mpi/ompi/pull/249</a>
<br>
this fixes heterogeneous support for the master by moving the jobid,vpid
<br>
from the ORTE down to the OPAL layer.
<br>
<p>this required to add the OPAL_NAME dss type in order to correctly convert
<br>
an opal_process_name_t on an heterogeneous cluster.
<br>
<p>could you please have a look at it when you get a chance ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/10/16 12:26, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; OK, revert done :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; commit b5aea782ce1111c116af095a7e7a7310e9e2a018
</span><br>
<span class="quotelev1">&gt; Author: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Thu Oct 16 12:24:38 2014 +0900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Revert &quot;Fix heterogeneous support&quot;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;     Per the discussion at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16050.php">http://www.open-mpi.org/community/lists/devel/2014/10/16050.php</a>
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;     This reverts commit c9c5d4011bf6ea1ade1a5bd9b6a77f02157dc774.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/10/16 12:13, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 15, 2014, at 8:08 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; let me quickly reply about this one :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/10/16 12:00, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I also don't understand some of the changes in this commit. For example, why did you replace the OPAL_MODEX_SEND_STRING macro with essentially a hard-coded replica of that macro?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_MODEX_SEND_STRING put a key of type OPAL_BYTE_OBJECT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in ompi_proc_complete_init:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                OPAL_MODEX_RECV_VALUE(ret, OPAL_DSTORE_ARCH,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (opal_proc_t*)&amp;proc-&gt;super,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                      (void**)&amp;ui32ptr, OPAL_UINT32);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a key of type OPAL_UINT32 is expected, and an key of type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_BYTE_OBJECT was sent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i chose to &quot;fix&quot; the sender (e.g. send a key of type OPAL_UINT32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should i have &quot;fixed&quot; the receiver instead ?
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...probably the receiver, but let me take a look at it. The two should have mirrored each other, which is why I couldn't understand the change. The problem may be that the recv should be recv_string, but I need to look at the two macros and see why the mirrors weren't used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Would you mind reverting this until we can better understand what is going on, and decide on a path forward?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; based on my previous comment, shall i also revert the change in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/proc/proc.c as well ?
</span><br>
<span class="quotelev2">&gt;&gt; I'd revert the commit as a whole. Let's look at the hetero issue in its entirety and figure out how we want to handle it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16049.php">http://www.open-mpi.org/community/lists/devel/2014/10/16049.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16050.php">http://www.open-mpi.org/community/lists/devel/2014/10/16050.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16051.php">http://www.open-mpi.org/community/lists/devel/2014/10/16051.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<li><strong>Previous message:</strong> <a href="16081.php">Gilles Gouaillardet: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<li><strong>In reply to:</strong> <a href="16051.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
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
