<?
$subject_val = "Re: [OMPI users] Possible (minor) bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 16:28:17 2016" -->
<!-- isoreceived="20160521202817" -->
<!-- sent="Sat, 21 May 2016 13:28:04 -0700" -->
<!-- isosent="20160521202804" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible (minor) bug?" -->
<!-- id="CF4B6DF1-73AF-432D-90C1-18324D6F7A3E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDjAXT42oNrmNhJYCMhk2WM3_Q2XWBhi0iNMMrZgF=szWA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Possible (minor) bug?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-21 16:28:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29269.php">Saliya Ekanayake: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>Previous message:</strong> <a href="29267.php">dpchoudh .: "[OMPI users] Possible (minor) bug?"</a>
<li><strong>In reply to:</strong> <a href="29267.php">dpchoudh .: "[OMPI users] Possible (minor) bug?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just fixed it today - waiting for Nathan to provide one more element before committing
<br>
<p><span class="quotelev1">&gt; On May 21, 2016, at 1:17 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have started noticing this message since yesterday on builds from the master branch. Any simple mpirun command, such as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; generates a warning/error like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Duplicate cmd line entry mca
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The hostfile, in my case, is just this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10.10.10.10 slots=1
</span><br>
<span class="quotelev1">&gt; 10.10.10.11 slots=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29267.php">http://www.open-mpi.org/community/lists/users/2016/05/29267.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29268/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29269.php">Saliya Ekanayake: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>Previous message:</strong> <a href="29267.php">dpchoudh .: "[OMPI users] Possible (minor) bug?"</a>
<li><strong>In reply to:</strong> <a href="29267.php">dpchoudh .: "[OMPI users] Possible (minor) bug?"</a>
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
