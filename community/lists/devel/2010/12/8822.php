<?
$subject_val = "Re: [OMPI devel] Some questions about checkpoint/restart (16)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 29 10:47:13 2010" -->
<!-- isoreceived="20101229154713" -->
<!-- sent="Wed, 29 Dec 2010 10:47:07 -0500" -->
<!-- isosent="20101229154707" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Some questions about checkpoint/restart (16)" -->
<!-- id="EC41331D-8173-46C6-91CD-F5FAE19FDE40_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D19496D.9020603_at_np.css.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Some questions about checkpoint/restart (16)<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-29 10:47:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8823.php">Eugene Loh: "[OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Previous message:</strong> <a href="8821.php">Hugo Meyer: "[OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>In reply to:</strong> <a href="8820.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I committed the fix to the Open MPI trunk in r24194. I also asked for it to be brought over to the v1.4 and v1.5 branches (links below to those tickets).
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2671">https://svn.open-mpi.org/trac/ompi/ticket/2671</a>
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2672">https://svn.open-mpi.org/trac/ompi/ticket/2672</a>
<br>
<p>I'll hopefully get to the other bugs you reported in the next couple months. Thanks for your patience.
<br>
<p>Thanks again for the bug report.
<br>
<p>-- Josh
<br>
<p><p>On Dec 27, 2010, at 9:20 PM, Takayuki Seki wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Thanks for the questions. Keep them coming. I hope to have some time after the first of the year to make some progress on some of the others. But for this one, I think you are correct. Does the attached patch (created from the Open MPI trunk r24190) fix this particular issue? If so, I'll go ahead and commit it to the trunk and ask for it to be brought over the to release series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for your answer.
</span><br>
<span class="quotelev1">&gt; I tried correcting this issue in a same way as your patch.
</span><br>
<span class="quotelev1">&gt; Checkpoint was taken by opal_cr_thread_fn in my simple test program as expected.
</span><br>
<span class="quotelev1">&gt; I think that your patch is correct though it tested only by my simple test program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Takayuki Seki.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8823.php">Eugene Loh: "[OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Previous message:</strong> <a href="8821.php">Hugo Meyer: "[OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>In reply to:</strong> <a href="8820.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
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
