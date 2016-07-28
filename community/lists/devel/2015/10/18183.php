<?
$subject_val = "Re: [OMPI devel] orte-dvm / orte-submit race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 18:09:08 2015" -->
<!-- isoreceived="20151015220908" -->
<!-- sent="Thu, 15 Oct 2015 15:09:03 -0700" -->
<!-- isosent="20151015220903" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm / orte-submit race condition" -->
<!-- id="CAMD57oenDcjJbcKxf9bPQb1dWF+twDokfVEtYeaeNRn5+VarAQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C9A61912-8B97-4E8D-8DC3-A87AEBDB2A39_at_rutgers.edu" -->
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
<strong>Date:</strong> 2015-10-15 18:09:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18184.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18182.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18182.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18184.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18184.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Help  me out a bit - how many jobs did you actually run?
<br>
<p><p>On Thu, Oct 15, 2015 at 2:33 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 15 Oct 2015, at 17:25 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Interesting - I see why. Please try this version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, that works as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll repeat the results with this version too:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep TERMINATED dvm_output-patched.txt |wc -l
</span><br>
<span class="quotelev1">&gt;       36
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep NOTIFYING dvm_output-patched.txt |wc -l
</span><br>
<span class="quotelev1">&gt;       36
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep &quot;Releasing job data&quot; dvm_output-patched.txt |wc -l
</span><br>
<span class="quotelev1">&gt;       78
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep &quot;sess_dir_finalize&quot; dvm_output-patched.txt |wc -l
</span><br>
<span class="quotelev1">&gt;       49
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep &quot;Releasing job data for.*,&quot; dvm_output-patched.txt|sort -k4 -t&quot;,&quot;
</span><br>
<span class="quotelev1">&gt; -n|wc -l
</span><br>
<span class="quotelev1">&gt;       36
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep &quot;Releasing job data for.*,&quot; dvm_output-patched.txt|sort -k4 -t&quot;,&quot;
</span><br>
<span class="quotelev1">&gt; -n|head
</span><br>
<span class="quotelev1">&gt; [netbook:68939] [[12878,0],0] Releasing job data for [12878,1]
</span><br>
<span class="quotelev1">&gt; [netbook:68939] [[12878,0],0] Releasing job data for [12878,2]
</span><br>
<span class="quotelev1">&gt; [netbook:68939] [[12878,0],0] Releasing job data for [12878,3]
</span><br>
<span class="quotelev1">&gt; [netbook:68939] [[12878,0],0] Releasing job data for [12878,7]
</span><br>
<span class="quotelev1">&gt; [netbook:68939] [[12878,0],0] Releasing job data for [12878,8]
</span><br>
<span class="quotelev1">&gt; [netbook:68939] [[12878,0],0] Releasing job data for [12878,9]
</span><br>
<span class="quotelev1">&gt; [netbook:68939] [[12878,0],0] Releasing job data for [12878,13]
</span><br>
<span class="quotelev1">&gt; [netbook:68939] [[12878,0],0] Releasing job data for [12878,14]
</span><br>
<span class="quotelev1">&gt; [netbook:68939] [[12878,0],0] Releasing job data for [12878,15]
</span><br>
<span class="quotelev1">&gt; [netbook:68939] [[12878,0],0] Releasing job data for [12878,16]
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18182.php">http://www.open-mpi.org/community/lists/devel/2015/10/18182.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18183/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18184.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18182.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>In reply to:</strong> <a href="18182.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18184.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18184.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
