<?
$subject_val = "Re: [OMPI users] spin-wait backoff";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 19:10:19 2010" -->
<!-- isoreceived="20100903231019" -->
<!-- sent="Sat, 04 Sep 2010 09:10:12 +1000" -->
<!-- isosent="20100903231012" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] spin-wait backoff" -->
<!-- id="4C818054.9030100_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="23366_1283515706_4C80E53A_23366_2243_1_C9B2FAA3-F5DA-4B49-89CE-6FB1AF0C7256_at_cisco.com" -->
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
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-03 19:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14177.php">dbbmyx-franzxaver_at_[hidden]: "[OMPI users] Problem with the receive buffer size?"</a>
<li><strong>Previous message:</strong> <a href="14175.php">Reuti: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
<li><strong>Maybe in reply to:</strong> <a href="14165.php">David Singleton: "[OMPI users] spin-wait backoff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14179.php">Ralph Castain: "Re: [OMPI users] spin-wait backoff"</a>
<li><strong>Reply:</strong> <a href="14179.php">Ralph Castain: "Re: [OMPI users] spin-wait backoff"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/03/2010 10:05 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 3, 2010, at 12:16 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Backing off the polling rate requires more application-specific logic like that offered below, so it is a little difficult for us to implement at the MPI library level. Not saying we eventually won't - just not sure anyone quite knows how to do so in a generalized form.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, we've *talked* about this kind of stuff among the developers -- it's at least somewhat similar to the &quot;backoff to blocking communications instead of polling communications&quot; issues.  That work in particular has been discussed for a long time but never implemented.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are your jobs hanging because of deadlock (i.e., application error), or infrastructure error?  If they're hanging because of deadlock, there are some PMPI-based tools that might be able to help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>These are application deadlocks (like the well-known VASP calling MPI_Finalize when
<br>
it should be calling MPI_Abort!).  But I'm asking as a system manager with dozens of
<br>
apps run by dozens of users hanging and not being noticed for a day or two because
<br>
users are not attentive and, from outside the job, everything looks OK. So the problem
<br>
is detection.  Are you suggesting there are PMPI approaches we could apply to every
<br>
production job on the system?
<br>
<p>I now have a hack to opal_progress that seems to do what we want without any impact
<br>
on performance in the &quot;good&quot; case.  It basically involves keeping count of the number
<br>
of contiguous calls to opal_progress with no events completed.  When that hits a large
<br>
number (eg 10^9), sleeping (maybe up to a second) on every, say, 10^3-10^4 passes
<br>
through opal_progress seems to do &quot;the right thing&quot;. (Obviously, any event completion
<br>
resets everything to spinning.)   There are a few magic numbers there that need to
<br>
be overrideable by users.  Please let me know if this idea is blatantly flawed.
<br>
<p>Thanks,
<br>
David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14177.php">dbbmyx-franzxaver_at_[hidden]: "[OMPI users] Problem with the receive buffer size?"</a>
<li><strong>Previous message:</strong> <a href="14175.php">Reuti: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
<li><strong>Maybe in reply to:</strong> <a href="14165.php">David Singleton: "[OMPI users] spin-wait backoff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14179.php">Ralph Castain: "Re: [OMPI users] spin-wait backoff"</a>
<li><strong>Reply:</strong> <a href="14179.php">Ralph Castain: "Re: [OMPI users] spin-wait backoff"</a>
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
