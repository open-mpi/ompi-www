<?
$subject_val = "Re: [OMPI devel] orte-dvm / orte-submit race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 16:01:32 2015" -->
<!-- isoreceived="20151014200132" -->
<!-- sent="Wed, 14 Oct 2015 22:01:27 +0200" -->
<!-- isosent="20151014200127" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm / orte-submit race condition" -->
<!-- id="738279FF-B1A8-40CC-912E-F499E7B63E92_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57ocxw3=ARq9Tj1UPe=5KAS40DJe99-wiDAS3bmDiR8Ho3Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-10-14 16:01:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18168.php">Vladimír Fuka: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Previous message:</strong> <a href="18166.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18166.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18169.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18169.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<span class="quotelev1">&gt; On 14 Oct 2015, at 21:50 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I wonder if they might be getting duplicate process names if started quickly enough. Do you get the &quot;job has launched&quot; message (orte-submit outputs a message after orte-dvm responds that the job launched)?
</span><br>
<p>Based on the output below I would say that both columns with IDs are unique.
<br>
<p>Thanks
<br>
<p>Mark
<br>
<p>$ head orte-log.txt 
<br>
[netbook:90327] Job [24532,1] has launched
<br>
[netbook:90326] Job [24532,2] has launched
<br>
[netbook:90331] Job [24532,3] has launched
<br>
[netbook:90330] Job [24532,4] has launched
<br>
[netbook:90332] Job [24532,5] has launched
<br>
[netbook:90328] Job [24532,6] has launched
<br>
[netbook:90329] Job [24532,7] has launched
<br>
[netbook:90325] Job [24532,8] has launched
<br>
[netbook:90335] Job [24532,9] has launched
<br>
[netbook:90333] Job [24532,10] has launched
<br>
<p>$ cat orte-log.txt | cut -f1 -d&quot; &quot;| sort | uniq -c | wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;42
<br>
$ cat orte-log.txt | cut -f3 -d&quot; &quot;| sort | uniq -c | wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;42
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18168.php">Vladimír Fuka: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Previous message:</strong> <a href="18166.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18166.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18169.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18169.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
