<?
$subject_val = "Re: [OMPI devel] orte-dvm / orte-submit race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 15:50:14 2015" -->
<!-- isoreceived="20151014195014" -->
<!-- sent="Wed, 14 Oct 2015 12:50:08 -0700" -->
<!-- isosent="20151014195008" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm / orte-submit race condition" -->
<!-- id="CAMD57ocxw3=ARq9Tj1UPe=5KAS40DJe99-wiDAS3bmDiR8Ho3Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5E0CD152-8742-4C89-ADE7-D846966FC508_at_rutgers.edu" -->
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
<strong>Date:</strong> 2015-10-14 15:50:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18167.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18165.php">Mark Santcroos: "[OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18165.php">Mark Santcroos: "[OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18167.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18167.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wonder if they might be getting duplicate process names if started
<br>
quickly enough. Do you get the &quot;job has launched&quot; message (orte-submit
<br>
outputs a message after orte-dvm responds that the job launched)?
<br>
<p><p><p>On Wed, Oct 14, 2015 at 12:04 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By hammering on a DVM with orte-submit I can reproducibly make orte-submit
</span><br>
<span class="quotelev1">&gt; not return, but hang instead.
</span><br>
<span class="quotelev1">&gt; The task is executed correctly though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It can be reproduced using the small snippet below.
</span><br>
<span class="quotelev1">&gt; Switching from sequential to &quot;concurrent&quot; execution of the orte-submit's
</span><br>
<span class="quotelev1">&gt; triggers the effect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that when I ctrl-c the orte-submit, I can re-use the DVM, so my hunch
</span><br>
<span class="quotelev1">&gt; would be that its a client-side issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What MCA logging parameters might give more insight of whats happening?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat &gt; orte_test.sh
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for i in $(seq 42):
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt;     # GOOD
</span><br>
<span class="quotelev1">&gt;     #orte-submit --hnp file:dvm_uri -np 1 /bin/date
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     # BAD
</span><br>
<span class="quotelev1">&gt;     orte-submit --hnp file:dvm_uri -np 1 /bin/date &amp;
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt; wait
</span><br>
<span class="quotelev1">&gt; ^D
</span><br>
<span class="quotelev1">&gt; $ chmod +x orte_test.sh
</span><br>
<span class="quotelev1">&gt; $ orte-dvm --report-uri dvm_uri &amp;
</span><br>
<span class="quotelev1">&gt; DVM ready
</span><br>
<span class="quotelev1">&gt; $ ./orte_test.sh
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18165.php">http://www.open-mpi.org/community/lists/devel/2015/10/18165.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18166/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18167.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18165.php">Mark Santcroos: "[OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18165.php">Mark Santcroos: "[OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18167.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18167.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
