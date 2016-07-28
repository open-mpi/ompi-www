<?
$subject_val = "Re: [OMPI devel] orte-dvm / orte-submit race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 18:26:35 2015" -->
<!-- isoreceived="20151014222635" -->
<!-- sent="Wed, 14 Oct 2015 15:26:30 -0700" -->
<!-- isosent="20151014222630" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm / orte-submit race condition" -->
<!-- id="CAMD57oe4L=-_6UQeHqsbhUc4owkFi_xa7wHx2ByYMTK9pKzJuw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="738279FF-B1A8-40CC-912E-F499E7B63E92_at_rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte-dvm / orte-submit race condition<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-14 18:26:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Previous message:</strong> <a href="18168.php">Vladim&#195;&#173;r Fuka: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>In reply to:</strong> <a href="18167.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18171.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18171.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, so each orte-submit is reporting job has launched, which means the
<br>
hang is coming while waiting to hear the job completed. Are you sure that
<br>
orte-dvm believes the job has completed? In other words, when you say that
<br>
you observe the job as completing, are you basing that on some output from
<br>
orte-dvm, or because the procs have exited, or...?
<br>
<p>I can send you a patch tonight that would cause orte-dvm to emit a &quot;job
<br>
completed&quot; message when it determines each job has terminated - might help
<br>
us take the next step. I'm wondering if orte-dvm thinks the job is still
<br>
running, and the race condition is in that area (as opposed to being in
<br>
orte-submit itself)
<br>
<p><p><p>On Wed, Oct 14, 2015 at 1:01 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt; On 14 Oct 2015, at 21:50 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I wonder if they might be getting duplicate process names if started
</span><br>
<span class="quotelev1">&gt; quickly enough. Do you get the &quot;job has launched&quot; message (orte-submit
</span><br>
<span class="quotelev1">&gt; outputs a message after orte-dvm responds that the job launched)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on the output below I would say that both columns with IDs are
</span><br>
<span class="quotelev1">&gt; unique.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ head orte-log.txt
</span><br>
<span class="quotelev1">&gt; [netbook:90327] Job [24532,1] has launched
</span><br>
<span class="quotelev1">&gt; [netbook:90326] Job [24532,2] has launched
</span><br>
<span class="quotelev1">&gt; [netbook:90331] Job [24532,3] has launched
</span><br>
<span class="quotelev1">&gt; [netbook:90330] Job [24532,4] has launched
</span><br>
<span class="quotelev1">&gt; [netbook:90332] Job [24532,5] has launched
</span><br>
<span class="quotelev1">&gt; [netbook:90328] Job [24532,6] has launched
</span><br>
<span class="quotelev1">&gt; [netbook:90329] Job [24532,7] has launched
</span><br>
<span class="quotelev1">&gt; [netbook:90325] Job [24532,8] has launched
</span><br>
<span class="quotelev1">&gt; [netbook:90335] Job [24532,9] has launched
</span><br>
<span class="quotelev1">&gt; [netbook:90333] Job [24532,10] has launched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat orte-log.txt | cut -f1 -d&quot; &quot;| sort | uniq -c | wc -l
</span><br>
<span class="quotelev1">&gt;       42
</span><br>
<span class="quotelev1">&gt; $ cat orte-log.txt | cut -f3 -d&quot; &quot;| sort | uniq -c | wc -l
</span><br>
<span class="quotelev1">&gt;       42
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18167.php">http://www.open-mpi.org/community/lists/devel/2015/10/18167.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18169/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Previous message:</strong> <a href="18168.php">Vladim&#195;&#173;r Fuka: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>In reply to:</strong> <a href="18167.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18171.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18171.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
