<?
$subject_val = "Re: [OMPI users] spin-wait backoff";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 00:16:35 2010" -->
<!-- isoreceived="20100903041635" -->
<!-- sent="Thu, 2 Sep 2010 22:16:25 -0600" -->
<!-- isosent="20100903041625" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] spin-wait backoff" -->
<!-- id="D77AC4F3-C693-4B5D-8033-98F752511116_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100903014627.GA5298_at_sopalepc" -->
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
<strong>Date:</strong> 2010-09-03 00:16:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14168.php">Alexander Kalinin: "[OMPI users] Problems with mpirun"</a>
<li><strong>Previous message:</strong> <a href="14166.php">Douglas Guptill: "Re: [OMPI users] spin-wait backoff"</a>
<li><strong>In reply to:</strong> <a href="14166.php">Douglas Guptill: "Re: [OMPI users] spin-wait backoff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14170.php">Jeff Squyres: "Re: [OMPI users] spin-wait backoff"</a>
<li><strong>Reply:</strong> <a href="14170.php">Jeff Squyres: "Re: [OMPI users] spin-wait backoff"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the upcoming 1.5 series, we will introduce a new &quot;sensor&quot; framework to help resolve such issues. Among other things, it will automatically track (if requested) the size of a sentinel file, cpu usage, and memory footprint and will terminate the job if any exceed user-specified limits (e.g., file doesn't grow fast enough, memory grows too large).
<br>
<p>Backing off the polling rate requires more application-specific logic like that offered below, so it is a little difficult for us to implement at the MPI library level. Not saying we eventually won't - just not sure anyone quite knows how to do so in a generalized form.
<br>
<p><p>On Sep 2, 2010, at 7:46 PM, Douglas Guptill wrote:
<br>
<p><span class="quotelev1">&gt; Hi David:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 03, 2010 at 10:50:02AM +1000, David Singleton wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm sure this has been discussed before but having watched hundreds of
</span><br>
<span class="quotelev2">&gt;&gt; thousands of cpuhrs being wasted by difficult-to-detect hung jobs, I'd
</span><br>
<span class="quotelev2">&gt;&gt; be keen to know why there isn't some sort of &quot;spin-wait backoff&quot; option.
</span><br>
<span class="quotelev2">&gt;&gt; For example, a way to specify spin-wait for x seconds/cycles/iterations
</span><br>
<span class="quotelev2">&gt;&gt; then backoff to lighter and lighter cpu usage.  At least that way, hung
</span><br>
<span class="quotelev2">&gt;&gt; jobs would become self-evident.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maybe there is already some way of doing this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For my solution to this, see
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/community/lists/users/2010/07/13731.php">http://www.open-mpi.org/community/lists/users/2010/07/13731.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH,
</span><br>
<span class="quotelev1">&gt; Douglas.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Douglas Guptill                       voice: 902-461-9749
</span><br>
<span class="quotelev1">&gt;  Research Assistant, LSC 4640          email: douglas.guptill_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Oceanography Department               fax:   902-494-3877
</span><br>
<span class="quotelev1">&gt;  Dalhousie University
</span><br>
<span class="quotelev1">&gt;  Halifax, NS, B3H 4J1, Canada
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="14168.php">Alexander Kalinin: "[OMPI users] Problems with mpirun"</a>
<li><strong>Previous message:</strong> <a href="14166.php">Douglas Guptill: "Re: [OMPI users] spin-wait backoff"</a>
<li><strong>In reply to:</strong> <a href="14166.php">Douglas Guptill: "Re: [OMPI users] spin-wait backoff"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14170.php">Jeff Squyres: "Re: [OMPI users] spin-wait backoff"</a>
<li><strong>Reply:</strong> <a href="14170.php">Jeff Squyres: "Re: [OMPI users] spin-wait backoff"</a>
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
