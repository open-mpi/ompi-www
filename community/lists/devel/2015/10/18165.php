<?
$subject_val = "[OMPI devel] orte-dvm / orte-submit race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 15:04:50 2015" -->
<!-- isoreceived="20151014190450" -->
<!-- sent="Wed, 14 Oct 2015 21:04:45 +0200" -->
<!-- isosent="20151014190445" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="[OMPI devel] orte-dvm / orte-submit race condition" -->
<!-- id="5E0CD152-8742-4C89-ADE7-D846966FC508_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] orte-dvm / orte-submit race condition<br>
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-14 15:04:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18166.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18164.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18166.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18166.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>By hammering on a DVM with orte-submit I can reproducibly make orte-submit not return, but hang instead.
<br>
The task is executed correctly though.
<br>
<p>It can be reproduced using the small snippet below.
<br>
Switching from sequential to &quot;concurrent&quot; execution of the orte-submit's triggers the effect.
<br>
<p>Note that when I ctrl-c the orte-submit, I can re-use the DVM, so my hunch would be that its a client-side issue.
<br>
<p>What MCA logging parameters might give more insight of whats happening?
<br>
<p>Thanks!
<br>
<p>Mark
<br>
<p><p><p>$ cat &gt; orte_test.sh
<br>
#!/bin/sh
<br>
<p>for i in $(seq 42):
<br>
do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# GOOD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#orte-submit --hnp file:dvm_uri -np 1 /bin/date
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;# BAD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte-submit --hnp file:dvm_uri -np 1 /bin/date &amp;
<br>
done
<br>
wait
<br>
^D
<br>
$ chmod +x orte_test.sh
<br>
$ orte-dvm --report-uri dvm_uri &amp;
<br>
DVM ready
<br>
$ ./orte_test.sh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18166.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18164.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bad performance (20% bandwidth loss) when compiling with GCC 5.2 instead of 4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18166.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18166.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
