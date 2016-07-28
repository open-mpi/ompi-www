<?
$subject_val = "Re: [OMPI users] Ensuring use of real cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 23:19:41 2012" -->
<!-- isoreceived="20120912031941" -->
<!-- sent="Tue, 11 Sep 2012 20:19:31 -0700" -->
<!-- isosent="20120912031931" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ensuring use of real cores" -->
<!-- id="5994D95F-7089-4590-A4FA-19C52819DBCA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="504FE6C0.1030203_at_txcorp.com" -->
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
<strong>Date:</strong> 2012-09-11 23:19:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20194.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
<li><strong>Previous message:</strong> <a href="20192.php">John R. Cary: "[OMPI users] Ensuring use of real cores"</a>
<li><strong>In reply to:</strong> <a href="20192.php">John R. Cary: "[OMPI users] Ensuring use of real cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20194.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
<li><strong>Reply:</strong> <a href="20194.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not entirely sure I know what you mean. If you are talking about running without specifying binding, then it makes no difference - we'll run wherever the OS puts us, so you would need to tell the OS not to use the virtual cores (i.e., disable HT).
<br>
<p>If you are talking about binding, then pre-1.7 releases all bind to core at the lowest level. On a hyperthread-enabled machine, that binds you to both HT's of a core. Starting with the upcoming 1.7 release, you can bind to the separate HTs, but that doesn't sound like something you want to do.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Sep 11, 2012, at 6:34 PM, John R. Cary &lt;cary_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Our code gets little benefit from using virtual cores (hyperthreading),
</span><br>
<span class="quotelev1">&gt; so when we run with mpiexec on an 8 real plus 8 virtual machine, we
</span><br>
<span class="quotelev1">&gt; would like to be certain that it uses only the 8 real cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to do this with openmpi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thx....John
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
<li><strong>Next message:</strong> <a href="20194.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
<li><strong>Previous message:</strong> <a href="20192.php">John R. Cary: "[OMPI users] Ensuring use of real cores"</a>
<li><strong>In reply to:</strong> <a href="20192.php">John R. Cary: "[OMPI users] Ensuring use of real cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20194.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
<li><strong>Reply:</strong> <a href="20194.php">John R. Cary: "Re: [OMPI users] Ensuring use of real cores"</a>
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
