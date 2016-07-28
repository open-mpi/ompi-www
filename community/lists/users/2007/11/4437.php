<?
$subject_val = "Re: [OMPI users] Job does not quit even when the simulation dies";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 08:54:06 2007" -->
<!-- isoreceived="20071107135406" -->
<!-- sent="Wed, 07 Nov 2007 06:53:55 -0700" -->
<!-- isosent="20071107135355" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Job does not quit even when the simulation dies" -->
<!-- id="C3571183.B4BF%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D148BFA2-4739-4927-AE9F-FEA16075DA60_at_cisco.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 08:53:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4438.php">Karsten Bolding: "Re: [OMPI users] problems compiling svn-version"</a>
<li><strong>Previous message:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
<li><strong>In reply to:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As Jeff indicated, the degree of capability has improved over time - I'm not
<br>
sure which version this represents.
<br>
<p>The type of failure also plays a major role in our ability to respond. If a
<br>
process actually segfaults or dies, we usually pick that up pretty well and
<br>
abort the rest of the job (certainly, that seems to be working pretty well
<br>
in the 1.2 series and beyond).
<br>
<p>If an MPI communication fails, I'm not sure what the MPI layer does - I
<br>
believe it may retry for awhile, but I don't know how robust the error
<br>
handling is in that layer. Perhaps someone else could address that question.
<br>
<p>If an actual node fails, then we don't handle that very well at all, even in
<br>
today's development version. The problem is that we need to rely on the
<br>
daemon on that node to tell us that the local procs died - if the node dies,
<br>
then the daemon can't do that, so we never know it happened.
<br>
<p>We are working on solutions to that problem. Hopefully, we will have at
<br>
least a preliminary version in the next release.
<br>
<p>Ralph
<br>
<p><p><p>On 11/7/07 6:44 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Support for failure scenarios is something that is getting better over
</span><br>
<span class="quotelev1">&gt; time in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like the version you are using either didn't properly catch
</span><br>
<span class="quotelev1">&gt; that there was a failure and/or then cleanly exit all MPI processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 6, 2007, at 9:01 PM, Teng Lin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just realize I have a job run for a long time, while some of the nodes
</span><br>
<span class="quotelev2">&gt;&gt; already die. Is there any way to ask other nodes to quit ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [kyla-0-1.local:09741] mca_btl_tcp_frag_send: writev failed with
</span><br>
<span class="quotelev2">&gt;&gt; errno=104
</span><br>
<span class="quotelev2">&gt;&gt; [kyla-0-1.local:09742] mca_btl_tcp_frag_send: writev failed with
</span><br>
<span class="quotelev2">&gt;&gt; errno=104
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The FAQ does mention it is related  to :
</span><br>
<span class="quotelev2">&gt;&gt;  Connection reset by peer: These types of errors usually occur after
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INIT has completed, and typically indicate that an MPI process has
</span><br>
<span class="quotelev2">&gt;&gt; died unexpectedly (e.g., due to a seg fault). The specific error
</span><br>
<span class="quotelev2">&gt;&gt; message indicates that a peer MPI process tried to write to the now-
</span><br>
<span class="quotelev2">&gt;&gt; dead MPI process and failed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Teng
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4438.php">Karsten Bolding: "Re: [OMPI users] problems compiling svn-version"</a>
<li><strong>Previous message:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
<li><strong>In reply to:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
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
