<?
$subject_val = "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 16:19:20 2012" -->
<!-- isoreceived="20120302211920" -->
<!-- sent="Fri, 2 Mar 2012 16:19:15 -0500" -->
<!-- isosent="20120302211915" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)" -->
<!-- id="F0766C17-2075-4E2C-9291-1E684F605F98_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F4F264B.3020101_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 16:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10671.php">Eugene Loh: "[OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<li><strong>Previous message:</strong> <a href="10669.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<li><strong>In reply to:</strong> <a href="10648.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yuki,
<br>
<p>r26084 should fixes the issue with the dynamic rules file in the trunk. Thanks for reporting it.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Mar 1, 2012, at 02:33 , Y.MATSUMOTO wrote:
<br>
<p><span class="quotelev1">&gt; But, we found problem when over 2GiB message is written in rulefile as &quot;message size&quot;.
</span><br>
<span class="quotelev1">&gt; (over 2GiB message cannot read correctly.)
</span><br>
<span class="quotelev1">&gt; And we do not fix it.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10671.php">Eugene Loh: "[OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<li><strong>Previous message:</strong> <a href="10669.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<li><strong>In reply to:</strong> <a href="10648.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<!-- nextthread="start" -->
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
