<?
$subject_val = "Re: [OMPI users] valgrind slaves in singleton mode";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 16 19:04:52 2012" -->
<!-- isoreceived="20121117000452" -->
<!-- sent="Fri, 16 Nov 2012 16:04:40 -0800" -->
<!-- isosent="20121117000440" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] valgrind slaves in singleton mode" -->
<!-- id="85183B55-462D-4781-B54A-7087261BCC27_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="456ACF2B9A3D2A42A9319E66979350D10F581C36_at_xmb-rcd-x09.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] valgrind slaves in singleton mode<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-16 19:04:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20731.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>Previous message:</strong> <a href="20729.php">Tom Bryan (tombry): "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>In reply to:</strong> <a href="20729.php">Tom Bryan (tombry): "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20731.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>Reply:</strong> <a href="20731.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Easiest solution: just add valgrind into the cmd line
<br>
<p>mpirun &lt;options&gt; valgrind &lt;valgrind-options&gt; ./my_app
<br>
<p><p>On Nov 16, 2012, at 3:37 PM, &quot;Tom Bryan (tombry)&quot; &lt;tombry_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; If I want to run valgrind on my processes, what steps should be
</span><br>
<span class="quotelev2">&gt;&gt; taken?  I'm currently more interested in running valgrind on the
</span><br>
<span class="quotelev2">&gt;&gt; slave processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've never done it, but have you looked at the following FAQs?
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=debugging">http://www.open-mpi.org/faq/?category=debugging</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---Tom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20731.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>Previous message:</strong> <a href="20729.php">Tom Bryan (tombry): "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>In reply to:</strong> <a href="20729.php">Tom Bryan (tombry): "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20731.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>Reply:</strong> <a href="20731.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
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
