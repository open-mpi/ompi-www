<?
$subject_val = "Re: [OMPI devel] orte-dvm / orte-submit race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 17:33:18 2015" -->
<!-- isoreceived="20151015213318" -->
<!-- sent="Thu, 15 Oct 2015 23:33:12 +0200" -->
<!-- isosent="20151015213312" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm / orte-submit race condition" -->
<!-- id="C9A61912-8B97-4E8D-8DC3-A87AEBDB2A39_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57od40UAB1Er_FWGbVi5xtECXhWhgX=KYC6iCmve2a=cXPQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-10-15 17:33:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18183.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18181.php">Justin Cinkelj: "[OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>In reply to:</strong> <a href="18180.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18183.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18183.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On 15 Oct 2015, at 17:25 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interesting - I see why. Please try this version.
</span><br>
<p>Ok, that works as expected.
<br>
<p>I'll repeat the results with this version too:
<br>
<p>$ grep TERMINATED dvm_output-patched.txt |wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;36
<br>
<p>$ grep NOTIFYING dvm_output-patched.txt |wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;36
<br>
<p>$ grep &quot;Releasing job data&quot; dvm_output-patched.txt |wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;78
<br>
<p>$ grep &quot;sess_dir_finalize&quot; dvm_output-patched.txt |wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;49
<br>
<p>$ grep &quot;Releasing job data for.*,&quot; dvm_output-patched.txt|sort -k4 -t&quot;,&quot; -n|wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;36
<br>
<p>$ grep &quot;Releasing job data for.*,&quot; dvm_output-patched.txt|sort -k4 -t&quot;,&quot; -n|head
<br>
[netbook:68939] [[12878,0],0] Releasing job data for [12878,1]
<br>
[netbook:68939] [[12878,0],0] Releasing job data for [12878,2]
<br>
[netbook:68939] [[12878,0],0] Releasing job data for [12878,3]
<br>
[netbook:68939] [[12878,0],0] Releasing job data for [12878,7]
<br>
[netbook:68939] [[12878,0],0] Releasing job data for [12878,8]
<br>
[netbook:68939] [[12878,0],0] Releasing job data for [12878,9]
<br>
[netbook:68939] [[12878,0],0] Releasing job data for [12878,13]
<br>
[netbook:68939] [[12878,0],0] Releasing job data for [12878,14]
<br>
[netbook:68939] [[12878,0],0] Releasing job data for [12878,15]
<br>
[netbook:68939] [[12878,0],0] Releasing job data for [12878,16]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18183.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18181.php">Justin Cinkelj: "[OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>In reply to:</strong> <a href="18180.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18183.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18183.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
