<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  8 11:41:52 2011" -->
<!-- isoreceived="20110808154152" -->
<!-- sent="Mon, 8 Aug 2011 15:41:22 +0000" -->
<!-- isosent="20110808154122" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015" -->
<!-- id="CA655F2D.6B60%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EB6ED411-AEF8-454D-B24C-58A22C577E6C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-08 11:41:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9624.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9622.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>In reply to:</strong> <a href="9622.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9624.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Reply:</strong> <a href="9624.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/8/11 9:34 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;On Aug 8, 2011, at 11:30 AM, Wesley Bland wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason is because valgrind was complaining about uninitialized
</span><br>
<span class="quotelev2">&gt;&gt;values that were passed into proc_get_epoch. I saw the same warnings
</span><br>
<span class="quotelev2">&gt;&gt;from valgrind when I ran it. I added the code to initialize the values
</span><br>
<span class="quotelev2">&gt;&gt;to what really should be the default value and the warnings went away.
</span><br>
<span class="quotelev2">&gt;&gt;Since the process_name_t struct isn't an object, it doesn't have an
</span><br>
<span class="quotelev2">&gt;&gt;initialization function like so many of the other objects in the code.
</span><br>
<span class="quotelev2">&gt;&gt;This is what we have.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ah, I see -- you are passing peer_name into proc_get_epoch().  I missed
</span><br>
<span class="quotelev1">&gt;that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt;     peer_name.vpid   = peer_idx;
</span><br>
<span class="quotelev2">&gt;&gt; +    peer_name.epoch  = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev2">&gt;&gt;     peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
</span><br>
<p>I'm still not convinced this is a rational coding style.  It seems to me
<br>
that if you're just going to copy the epoch from peer_name to peer_name,
<br>
just assign the epoch to INVALID and be done with it.  There's no need for
<br>
both the assignment added in this patch and the line after it.
<br>
<p>Now, normally I'd say that this is fixing a bug and having to fix other
<br>
people's bad code shouldn't be your problem.  But since you wrote both
<br>
lines, fixing it to make sense seems reasonable to me ;).
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
<li><strong>Next message:</strong> <a href="9624.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9622.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>In reply to:</strong> <a href="9622.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9624.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Reply:</strong> <a href="9624.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
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
