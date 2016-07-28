<?
$subject_val = "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 11:06:19 2015" -->
<!-- isoreceived="20150507150619" -->
<!-- sent="Thu, 7 May 2015 08:06:14 -0700" -->
<!-- isosent="20150507150614" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error: &amp;quot;all nodes which are allocated for this job are already filled&amp;quot;" -->
<!-- id="FC3FDE45-542B-4DF4-8CE6-1A950BC26FF1_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAEB3Xu4Cy4=vHaCbQSf1Wh9iKfwrODLEm2pziYCe7DjRb8H-7A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-07 11:06:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26848.php">Seth Axen: "[OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>Previous message:</strong> <a href="26846.php">Steven Vancoillie: "Re: [OMPI users] performance issue mpi_init"</a>
<li><strong>In reply to:</strong> <a href="26845.php">Rahul Yadav: "[OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26860.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Reply:</strong> <a href="26860.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try adding &#226;&#128;&#148;mca ras_base_verbose 10 to your cmd line and let&#226;&#128;&#153;s see what it thinks it is doing. Which OMPI version are you using - master?
<br>
<p><p><span class="quotelev1">&gt; On May 6, 2015, at 11:24 PM, Rahul Yadav &lt;roborahul_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have been trying to run MPI jobs (consisting of two different binaries, one each ) in two nodes,  using hostfile option as following
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --allow-run-as-root --mca pml yalla -n 1 --hostfile /root/host1 /root/app2 : -n 1 --hostfile /root/host2 /root/backend
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are doing this in chroot environment. We have set the HPCX env in chroot'ed environment itself. /root/host1 and /root/host2 (inside chroot env) contains IPs of two nodes respectively.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are getting following error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot; all nodes which are allocated for this job are already filled &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However when we use chroot but don't use hostfile option (both processes run in same node) OR we use hostfile option but outside chroot, it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone has any idea if chroot can cause above error and how to solve it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Rahul
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26845.php">http://www.open-mpi.org/community/lists/users/2015/05/26845.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26847/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26848.php">Seth Axen: "[OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>Previous message:</strong> <a href="26846.php">Steven Vancoillie: "Re: [OMPI users] performance issue mpi_init"</a>
<li><strong>In reply to:</strong> <a href="26845.php">Rahul Yadav: "[OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26860.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Reply:</strong> <a href="26860.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
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
