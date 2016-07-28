<?
$subject_val = "Re: [OMPI users] spin-wait backoff";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  4 11:22:43 2010" -->
<!-- isoreceived="20100904152243" -->
<!-- sent="Sat, 4 Sep 2010 09:22:33 -0600" -->
<!-- isosent="20100904152233" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] spin-wait backoff" -->
<!-- id="CB317D02-3D55-4895-ADBC-5D94DF7F06AA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C818054.9030100_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] spin-wait backoff<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-04 11:22:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14180.php">dbbmyx-franzxaver_at_[hidden]: "Re: [OMPI users] Problem with the receive buffer size?"</a>
<li><strong>Previous message:</strong> <a href="14178.php">David Zhang: "Re: [OMPI users] Problem with the receive buffer size?"</a>
<li><strong>In reply to:</strong> <a href="14176.php">David Singleton: "Re: [OMPI users] spin-wait backoff"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 3, 2010, at 5:10 PM, David Singleton wrote:
<br>
<p><span class="quotelev1">&gt; On 09/03/2010 10:05 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 3, 2010, at 12:16 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Backing off the polling rate requires more application-specific logic like that offered below, so it is a little difficult for us to implement at the MPI library level. Not saying we eventually won't - just not sure anyone quite knows how to do so in a generalized form.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, we've *talked* about this kind of stuff among the developers -- it's at least somewhat similar to the &quot;backoff to blocking communications instead of polling communications&quot; issues.  That work in particular has been discussed for a long time but never implemented.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are your jobs hanging because of deadlock (i.e., application error), or infrastructure error?  If they're hanging because of deadlock, there are some PMPI-based tools that might be able to help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are application deadlocks (like the well-known VASP calling MPI_Finalize when
</span><br>
<span class="quotelev1">&gt; it should be calling MPI_Abort!).  But I'm asking as a system manager with dozens of
</span><br>
<span class="quotelev1">&gt; apps run by dozens of users hanging and not being noticed for a day or two because
</span><br>
<span class="quotelev1">&gt; users are not attentive and, from outside the job, everything looks OK. So the problem
</span><br>
<span class="quotelev1">&gt; is detection.  Are you suggesting there are PMPI approaches we could apply to every
</span><br>
<span class="quotelev1">&gt; production job on the system?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I now have a hack to opal_progress that seems to do what we want without any impact
</span><br>
<span class="quotelev1">&gt; on performance in the &quot;good&quot; case.  It basically involves keeping count of the number
</span><br>
<span class="quotelev1">&gt; of contiguous calls to opal_progress with no events completed.  When that hits a large
</span><br>
<span class="quotelev1">&gt; number (eg 10^9), sleeping (maybe up to a second) on every, say, 10^3-10^4 passes
</span><br>
<span class="quotelev1">&gt; through opal_progress seems to do &quot;the right thing&quot;. (Obviously, any event completion
</span><br>
<span class="quotelev1">&gt; resets everything to spinning.)   There are a few magic numbers there that need to
</span><br>
<span class="quotelev1">&gt; be overrideable by users.  Please let me know if this idea is blatantly flawed.
</span><br>
<p>I once implemented something like this to help with debugging. There are a few gotchas, though - here are some off the top of my head based on my prior similar attempt:
<br>
<p>1. some of the MPI transports don't rely on the event library but instead poll on their own thread. So this won't detect those cases.
<br>
<p>2. you have now introduced some overhead into the progress engine, which is in the critical path for those transports that use it, so your latencies will definitely increase. This may or may not be apparent at the application level - depends on the app. It will show up, however, in benchmarks aimed at latency.
<br>
<p>3. the progress engine isn't running in its own thread, so &quot;sleeping&quot; the progress engine &quot;sleeps&quot; the process, thus preventing it from doing anything. So if you are looking for a non-blocking recv, for example, you just put your process to sleep instead of letting it work because the message hasn't arrived yet.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14180.php">dbbmyx-franzxaver_at_[hidden]: "Re: [OMPI users] Problem with the receive buffer size?"</a>
<li><strong>Previous message:</strong> <a href="14178.php">David Zhang: "Re: [OMPI users] Problem with the receive buffer size?"</a>
<li><strong>In reply to:</strong> <a href="14176.php">David Singleton: "Re: [OMPI users] spin-wait backoff"</a>
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
