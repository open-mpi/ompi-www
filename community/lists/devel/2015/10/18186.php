<?
$subject_val = "Re: [OMPI devel] orte-dvm / orte-submit race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 18:42:11 2015" -->
<!-- isoreceived="20151015224211" -->
<!-- sent="Fri, 16 Oct 2015 00:42:04 +0200" -->
<!-- isosent="20151015224204" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm / orte-submit race condition" -->
<!-- id="38FCB499-3727-4E83-BFA3-8FA9FFB06553_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57odeWc_U0QngoT+sN786hr3YH3xJD4=u+Mqov8ZVqOOKWQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-15 18:42:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18187.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18185.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18185.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18187.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18187.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On 16 Oct 2015, at 0:23 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Okay, that means that the dvm isn't recognizing that the jobs actually completed.
</span><br>
<p>Ok.
<br>
<p><span class="quotelev1">&gt; So the question is: what is it about those jobs?
</span><br>
<p>They are all the same.
<br>
<p><span class="quotelev1">&gt; Are those 6 jobs very short-lived, and the others are longer-lived?
</span><br>
<p>All very short lived, as thats the easiest to reproduce it.
<br>
<p><span class="quotelev1">&gt; If you look at the nodes (before you kill the dvm), are any of those procs still there?
</span><br>
<p>I originally ran into this on a large machine, but can reproduce it easily on my laptop so the results I've been sending in the last messages are from runs on my laptop.
<br>
<p>The stalled orte-submits are still there obviously, but the actual task process is no longer active.<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18187.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18185.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18185.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18187.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18187.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
