<?
$subject_val = "Re: [OMPI devel] orte-dvm / orte-submit race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 04:02:32 2015" -->
<!-- isoreceived="20151015080232" -->
<!-- sent="Thu, 15 Oct 2015 10:02:26 +0200" -->
<!-- isosent="20151015080226" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm / orte-submit race condition" -->
<!-- id="B7E5747B-BDA3-4C93-A3EB-95997D872A1A_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57ofVjh9SxY861JKGgum408xUOBEizo_r9_hW1ZPxPfi8-A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-10-15 04:02:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] fatal error:	openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>Previous message:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18177.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18177.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p><span class="quotelev1">&gt; On 15 Oct 2015, at 4:38 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Okay, please try the attached patch. It will cause two messages to be output for each job: one indicating the job has been marked terminated, and the other reporting that the completion message was sent to the requestor. Let's see what that tells us.
</span><br>
<p>In this run of 42, 6 did not return, therefore 36 completed successfully.
<br>
<p><p>$ grep TERMINATED dvm_output-patched.txt |wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;72
<br>
<p>$ grep NOTIFYING dvm_output-patched.txt |wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;36
<br>
<p>$ grep &quot;Releasing job data&quot; dvm_output-patched.txt |wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;77
<br>
<p>$ grep &quot;sess_dir_finalize&quot; dvm_output-patched.txt |wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;36
<br>
<p>$ grep &quot;Releasing job data for.*,&quot; dvm_output-patched.txt|sort -k4 -t&quot;,&quot; -n|wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;35
<br>
<p>So interestingly this is 35, and not 36.
<br>
<p>$ grep &quot;Releasing job data for.*,&quot; dvm_output-patched.txt|sort -k4 -t&quot;,&quot; -n|head
<br>
[netbook:06716] [[9528,0],0] Releasing job data for [9528,2]
<br>
[netbook:06716] [[9528,0],0] Releasing job data for [9528,8]
<br>
[netbook:06716] [[9528,0],0] Releasing job data for [9528,9]
<br>
[netbook:06716] [[9528,0],0] Releasing job data for [9528,10]
<br>
[netbook:06716] [[9528,0],0] Releasing job data for [9528,12]
<br>
[netbook:06716] [[9528,0],0] Releasing job data for [9528,13]
<br>
[netbook:06716] [[9528,0],0] Releasing job data for [9528,14]
<br>
[netbook:06716] [[9528,0],0] Releasing job data for [9528,15]
<br>
[netbook:06716] [[9528,0],0] Releasing job data for [9528,16]
<br>
[netbook:06716] [[9528,0],0] Releasing job data for [9528,17]
<br>
<p>Which means task 1,3,4,5,6,7,11 didn't return. Which shows a clear bias towards the &quot;early&quot; tasks.
<br>
<p><p>Hopefully this provides you more insight.
<br>
<p>Thanks!
<br>
<p>Mark<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] fatal error:	openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>Previous message:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18177.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18177.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
