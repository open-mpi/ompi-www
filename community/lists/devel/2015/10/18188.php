<?
$subject_val = "Re: [OMPI devel] orte-dvm / orte-submit race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 18:51:04 2015" -->
<!-- isoreceived="20151015225104" -->
<!-- sent="Fri, 16 Oct 2015 00:50:59 +0200" -->
<!-- isosent="20151015225059" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm / orte-submit race condition" -->
<!-- id="3441B151-939E-47E7-9B02-C652D9297AE9_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57ockuR0YE2K2_PE+kku3gc2izp7nD1k0XK9XKc_OVtgpBQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-10-15 18:50:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18189.php">Gilles Gouaillardet: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>Previous message:</strong> <a href="18187.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18187.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18220.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18220.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On 16 Oct 2015, at 0:44 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm....ok. I'll have to look at it this weekend when I return from travel. Can you please send me your test program so I can try to locally reproduce it?
</span><br>
<p>Ok, thanks Ralph.
<br>
<p><p>Start the DVM with: orte-dvm --report-uri dvm_uri --debug-devel
<br>
<p>And then run the following script. The &quot;serial /bin/date&quot; and the &quot;parallel sleep 1&quot; are fine. The &quot;parallel /bin/date&quot; shows the hanging.
<br>
<p><p>#!/bin/sh
<br>
<p>for i in $(seq 42):
<br>
do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# GOOD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#orte-submit --hnp file:dvm_uri -np 1 /bin/date
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#orte-submit --hnp file:dvm_uri -np 1 /bin/sleep 1 &amp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;# BAD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte-submit --hnp file:dvm_uri -np 1 /bin/date &amp;
<br>
done
<br>
wait<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18189.php">Gilles Gouaillardet: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>Previous message:</strong> <a href="18187.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18187.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18220.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18220.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
