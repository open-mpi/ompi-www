<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  8 11:54:31 2011" -->
<!-- isoreceived="20110808155431" -->
<!-- sent="Mon, 8 Aug 2011 11:53:56 -0400" -->
<!-- isosent="20110808155356" -->
<!-- name="Wesley Bland" -->
<!-- email="wbland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015" -->
<!-- id="CAMHgK352vQe=8EEsDKMLz6XXbnAMROJa1UmYU1g7BBtq8nvyTQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA655F2D.6B60%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> Wesley Bland (<em>wbland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-08 11:53:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9625.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9623.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>In reply to:</strong> <a href="9623.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9625.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Reply:</strong> <a href="9625.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's not just copying the value from one to the other.
<br>
<p>The value is initialized on the first line. The proc_name is passed into the
<br>
function where the jobid and vpid are used (not the epoch). The function
<br>
returns a new (the correct) value for the epoch based on the passed in jobid
<br>
and vpid which is assigned to the process name.
<br>
<p>This is the same thing as initializing the value to NULL. We do that all the
<br>
time to avoid compiler warnings. I just can't do that here because this
<br>
isn't a pointer. If it would make the code look better I can move the first
<br>
assignment to the top of the function where the other initializations are.
<br>
<p>On Mon, Aug 8, 2011 at 11:41 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On 8/8/11 9:34 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Aug 8, 2011, at 11:30 AM, Wesley Bland wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The reason is because valgrind was complaining about uninitialized
</span><br>
<span class="quotelev3">&gt; &gt;&gt;values that were passed into proc_get_epoch. I saw the same warnings
</span><br>
<span class="quotelev3">&gt; &gt;&gt;from valgrind when I ran it. I added the code to initialize the values
</span><br>
<span class="quotelev3">&gt; &gt;&gt;to what really should be the default value and the warnings went away.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Since the process_name_t struct isn't an object, it doesn't have an
</span><br>
<span class="quotelev3">&gt; &gt;&gt;initialization function like so many of the other objects in the code.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;This is what we have.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Ah, I see -- you are passing peer_name into proc_get_epoch().  I missed
</span><br>
<span class="quotelev2">&gt; &gt;that.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     peer_name.vpid   = peer_idx;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    peer_name.epoch  = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm still not convinced this is a rational coding style.  It seems to me
</span><br>
<span class="quotelev1">&gt; that if you're just going to copy the epoch from peer_name to peer_name,
</span><br>
<span class="quotelev1">&gt; just assign the epoch to INVALID and be done with it.  There's no need for
</span><br>
<span class="quotelev1">&gt; both the assignment added in this patch and the line after it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, normally I'd say that this is fixing a bug and having to fix other
</span><br>
<span class="quotelev1">&gt; people's bad code shouldn't be your problem.  But since you wrote both
</span><br>
<span class="quotelev1">&gt; lines, fixing it to make sense seems reasonable to me ;).
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9624/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9625.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9623.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>In reply to:</strong> <a href="9623.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9625.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Reply:</strong> <a href="9625.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
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
