<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  8 19:55:10 2011" -->
<!-- isoreceived="20110808235510" -->
<!-- sent="Mon, 8 Aug 2011 17:55:02 -0600" -->
<!-- isosent="20110808235502" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015" -->
<!-- id="B8BA2846-4063-4293-B926-3ADF1BD1E586_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA65678A.6B68%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-08 19:55:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9631.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9629.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>In reply to:</strong> <a href="9625.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will interject at this point in the thread. IMO, Brian has raised a valid point. We are contorting around with the epoch values, as I commented in a separate thread.
<br>
<p>The problem really stems from something Wes mentioned a while back in a different set of communications. When the epoch code was written, it wasn't entirely clear to him where the data required for supporting the epoch-related functionality should go. It doesn't really fit the ess, it didn't really belong in modex, etc. So he wound up sticking things here and there, trying to disturb the existing APIs as little as possible.
<br>
<p>What we probably should do is (a) try to better understand what Wes is trying to accomplish, and then (b) design the code base to support it. The current functional APIs and nidmap code weren't designed to support the extended name, and so the fit is sometimes wrong. Getting things designed properly would help ease the problem.
<br>
<p>In fairness, remember that Wes and I had already agreed to review a bunch of this (e.g., where epoch info is stored) when we finally get back to dealing with the orte state engine. Hopefully, we can address some or all of these issues then.
<br>
<p>Meantime, what's there is certainly &quot;weird&quot; - but if it works for now, then perhaps we can get things correctly integrated in the near future.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Aug 8, 2011, at 10:20 AM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; Ok, that makes some sense.  It's a really weird way of doing
</span><br>
<span class="quotelev1">&gt; initialization, though.  Some of it is probably how Ralph chose to share
</span><br>
<span class="quotelev1">&gt; nidpid map code, so perhaps it's unavoidable.  But since the name isn't
</span><br>
<span class="quotelev1">&gt; use in proc_get_epoch() (or, better not be used in there), I'm not
</span><br>
<span class="quotelev1">&gt; entirely sure why that made valgrind happy...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/8/11 9:53 AM, &quot;Wesley Bland&quot; &lt;wbland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's not just copying the value from one to the other.
</span><br>
<span class="quotelev2">&gt;&gt; The value is initialized on the first line. The proc_name is passed into
</span><br>
<span class="quotelev2">&gt;&gt; the function where the jobid and vpid are used (not the epoch). The
</span><br>
<span class="quotelev2">&gt;&gt; function returns a new (the correct) value for the epoch based on the
</span><br>
<span class="quotelev2">&gt;&gt; passed in jobid and vpid which is assigned to the process name.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is the same thing as initializing the value to NULL. We do that all
</span><br>
<span class="quotelev2">&gt;&gt; the time to avoid compiler warnings. I just can't do that here because
</span><br>
<span class="quotelev2">&gt;&gt; this isn't a pointer. If it would make the code look better I can move
</span><br>
<span class="quotelev2">&gt;&gt; the first assignment to the top of the function where the other
</span><br>
<span class="quotelev2">&gt;&gt; initializations are.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Aug 8, 2011 at 11:41 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 8/8/11 9:34 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 8, 2011, at 11:30 AM, Wesley Bland wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The reason is because valgrind was complaining about uninitialized
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; values that were passed into proc_get_epoch. I saw the same warnings
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from valgrind when I ran it. I added the code to initialize the values
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to what really should be the default value and the warnings went away.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since the process_name_t struct isn't an object, it doesn't have an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; initialization function like so many of the other objects in the code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is what we have.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah, I see -- you are passing peer_name into proc_get_epoch().  I missed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    peer_name.jobid  = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    peer_name.vpid   = peer_idx;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    peer_name.epoch  = ORTE_EPOCH_INVALID;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    peer_name.epoch  = orte_ess.proc_get_epoch(&amp;peer_name);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm still not convinced this is a rational coding style.  It seems to me
</span><br>
<span class="quotelev2">&gt;&gt; that if you're just going to copy the epoch from peer_name to peer_name,
</span><br>
<span class="quotelev2">&gt;&gt; just assign the epoch to INVALID and be done with it.  There's no need for
</span><br>
<span class="quotelev2">&gt;&gt; both the assignment added in this patch and the line after it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now, normally I'd say that this is fixing a bug and having to fix other
</span><br>
<span class="quotelev2">&gt;&gt; people's bad code shouldn't be your problem.  But since you wrote both
</span><br>
<span class="quotelev2">&gt;&gt; lines, fixing it to make sense seems reasonable to me ;).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9631.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9629.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>In reply to:</strong> <a href="9625.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
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
