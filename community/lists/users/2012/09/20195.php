<?
$subject_val = "Re: [OMPI users] Ensuring use of real cores";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 08:05:07 2012" -->
<!-- isoreceived="20120912120507" -->
<!-- sent="Wed, 12 Sep 2012 05:05:00 -0700" -->
<!-- isosent="20120912120500" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ensuring use of real cores" -->
<!-- id="BB8A23C2-618C-4F58-B13A-EAA98BB708C9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="505078B0.4050609_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Ensuring use of real cores<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 08:05:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20196.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
<li><strong>Previous message:</strong> <a href="20194.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
<li><strong>In reply to:</strong> <a href="20194.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20196.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
<li><strong>Reply:</strong> <a href="20196.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 12, 2012, at 4:57 AM, &quot;John R. Cary&quot; &lt;cary_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I do want in fact to bind first to one HT of each core
</span><br>
<span class="quotelev1">&gt; before binding to two HTs of one core.  So that will
</span><br>
<span class="quotelev1">&gt; be possible in 1.7?
</span><br>
<p>Yes - you can get a copy of the 1.7 nightly tarball and experiment with it in advance, if you like. You'll want
<br>
<p>mpirun --map-by core --bind-to hwthread ....
<br>
<p>Add --report-bindings to see what happens, but I believe that will do what you want. You'll map one process to each core, and bind it to only the first hwthread on that core.
<br>
<p>Let me know either way - if it doesn't, we have time to adjust it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thx....John
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/11/12 11:19 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Not entirely sure I know what you mean. If you are talking about running without specifying binding, then it makes no difference - we'll run wherever the OS puts us, so you would need to tell the OS not to use the virtual cores (i.e., disable HT).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are talking about binding, then pre-1.7 releases all bind to core at the lowest level. On a hyperthread-enabled machine, that binds you to both HT's of a core. Starting with the upcoming 1.7 release, you can bind to the separate HTs, but that doesn't sound like something you want to do.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 11, 2012, at 6:34 PM, John R. Cary &lt;cary_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our code gets little benefit from using virtual cores (hyperthreading),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so when we run with mpiexec on an 8 real plus 8 virtual machine, we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would like to be certain that it uses only the 8 real cores.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to do this with openmpi?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thx....John
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="20196.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
<li><strong>Previous message:</strong> <a href="20194.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
<li><strong>In reply to:</strong> <a href="20194.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20196.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
<li><strong>Reply:</strong> <a href="20196.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
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
