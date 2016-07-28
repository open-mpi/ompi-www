<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  8 12:20:23 2011" -->
<!-- isoreceived="20110808162023" -->
<!-- sent="Mon, 8 Aug 2011 16:20:03 +0000" -->
<!-- isosent="20110808162003" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015" -->
<!-- id="CA65678A.6B68%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMHgK352vQe=8EEsDKMLz6XXbnAMROJa1UmYU1g7BBtq8nvyTQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-08-08 12:20:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9626.php">Thomas Herault: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9624.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>In reply to:</strong> <a href="9624.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9626.php">Thomas Herault: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Reply:</strong> <a href="9626.php">Thomas Herault: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Reply:</strong> <a href="9630.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, that makes some sense.  It's a really weird way of doing
<br>
initialization, though.  Some of it is probably how Ralph chose to share
<br>
nidpid map code, so perhaps it's unavoidable.  But since the name isn't
<br>
use in proc_get_epoch() (or, better not be used in there), I'm not
<br>
entirely sure why that made valgrind happy...
<br>
<p>Brian
<br>
<p>On 8/8/11 9:53 AM, &quot;Wesley Bland&quot; &lt;wbland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;It's not just copying the value from one to the other.
</span><br>
<span class="quotelev1">&gt;The value is initialized on the first line. The proc_name is passed into
</span><br>
<span class="quotelev1">&gt;the function where the jobid and vpid are used (not the epoch). The
</span><br>
<span class="quotelev1">&gt;function returns a new (the correct) value for the epoch based on the
</span><br>
<span class="quotelev1">&gt;passed in jobid and vpid which is assigned to the process name.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is the same thing as initializing the value to NULL. We do that all
</span><br>
<span class="quotelev1">&gt;the time to avoid compiler warnings. I just can't do that here because
</span><br>
<span class="quotelev1">&gt;this isn't a pointer. If it would make the code look better I can move
</span><br>
<span class="quotelev1">&gt;the first assignment to the top of the function where the other
</span><br>
<span class="quotelev1">&gt;initializations are.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Mon, Aug 8, 2011 at 11:41 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 8/8/11 9:34 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Aug 8, 2011, at 11:30 AM, Wesley Bland wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The reason is because valgrind was complaining about uninitialized
</span><br>
<span class="quotelev3">&gt;&gt;&gt;values that were passed into proc_get_epoch. I saw the same warnings
</span><br>
<span class="quotelev3">&gt;&gt;&gt;from valgrind when I ran it. I added the code to initialize the values
</span><br>
<span class="quotelev3">&gt;&gt;&gt;to what really should be the default value and the warnings went away.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Since the process_name_t struct isn't an object, it doesn't have an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;initialization function like so many of the other objects in the code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;This is what we have.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Ah, I see -- you are passing peer_name into proc_get_epoch().  I missed
</span><br>
<span class="quotelev2">&gt;&gt;that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     peer_name.vpid   = peer_idx;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    peer_name.epoch  = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm still not convinced this is a rational coding style.  It seems to me
</span><br>
<span class="quotelev1">&gt;that if you're just going to copy the epoch from peer_name to peer_name,
</span><br>
<span class="quotelev1">&gt;just assign the epoch to INVALID and be done with it.  There's no need for
</span><br>
<span class="quotelev1">&gt;both the assignment added in this patch and the line after it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Now, normally I'd say that this is fixing a bug and having to fix other
</span><br>
<span class="quotelev1">&gt;people's bad code shouldn't be your problem.  But since you wrote both
</span><br>
<span class="quotelev1">&gt;lines, fixing it to make sense seems reasonable to me ;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
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
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9626.php">Thomas Herault: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9624.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>In reply to:</strong> <a href="9624.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9626.php">Thomas Herault: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Reply:</strong> <a href="9626.php">Thomas Herault: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Reply:</strong> <a href="9630.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
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
