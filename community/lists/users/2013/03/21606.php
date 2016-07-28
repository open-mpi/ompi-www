<?
$subject_val = "Re: [OMPI users] mpirun trouble through ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 24 19:10:37 2013" -->
<!-- isoreceived="20130324231037" -->
<!-- sent="Sun, 24 Mar 2013 16:10:29 -0700" -->
<!-- isosent="20130324231029" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun trouble through ssh" -->
<!-- id="F3212A38-1E5F-4B39-B381-3C4AD5DD582D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAGEWhg_ODm6aOq3PMs5=YUNP=K6=xzjTWDw8nSB=ThNA2J698Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun trouble through ssh<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-24 19:10:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21607.php">Siegmar Gross: "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<li><strong>Previous message:</strong> <a href="21605.php">Baptiste Robert: "[OMPI users] mpirun trouble through ssh"</a>
<li><strong>In reply to:</strong> <a href="21605.php">Baptiste Robert: "[OMPI users] mpirun trouble through ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21608.php">Baptiste Robert: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Reply:</strong> <a href="21608.php">Baptiste Robert: "Re: [OMPI users] mpirun trouble through ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check if iptables or some other firewall is running. Configure mpirun with --enable-debug and then add &quot;-mca plm_base_verbose 10&quot; to your cmd line to see if the remote daemon is communicating back correctly.
<br>
<p><p>On Mar 24, 2013, at 1:50 PM, Baptiste Robert &lt;baptisterobert38_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi everybody !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's my problem. I've installed openmpi on my two machines running on fedora 17. I've set the path and LD_LIBRARY_PATH correctly, mpirun and mpicc work on the two machines without trouble. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My problem is when I try to run the helloWorld on all node through ssh (already configure with certificate) nothing append, I've to kill mpi to get the prompt back. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I launched this command : mpirun -d -host myRemoteNode -n 2 hello_c
</span><br>
<span class="quotelev1">&gt; And this give me :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [baptiste_at_baptiste RE51]$ mpirun -d -hostfile hosts hello_c 
</span><br>
<span class="quotelev1">&gt; [baptiste.thinkFed:02666] procdir: /tmp/openmpi-sessions-baptiste_at_baptiste.thinkFed_0/53471/0/0
</span><br>
<span class="quotelev1">&gt; [baptiste.thinkFed:02666] jobdir: /tmp/openmpi-sessions-baptiste_at_baptiste.thinkFed_0/53471/0
</span><br>
<span class="quotelev1">&gt; [baptiste.thinkFed:02666] top: openmpi-sessions-baptiste_at_baptiste.thinkFed_0
</span><br>
<span class="quotelev1">&gt; [baptiste.thinkFed:02666] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [roommateServer:01102] procdir: /tmp/openmpi-sessions-baptiste_at_roommateServer_0/53471/0/1
</span><br>
<span class="quotelev1">&gt; [roommateServer:01102] jobdir: /tmp/openmpi-sessions-baptiste_at_roommateServer_0/53471/0
</span><br>
<span class="quotelev1">&gt; [roommateServer:01102] top: openmpi-sessions-baptiste_at_roommateServer_0
</span><br>
<span class="quotelev1">&gt; [roommateServer:01102] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And nothing else. But if I run the hello_c on a single machine, separately, the job is done and work well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If anyone have an idea it would be awesome.. I don't have a clue why it isn't work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21606/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21607.php">Siegmar Gross: "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<li><strong>Previous message:</strong> <a href="21605.php">Baptiste Robert: "[OMPI users] mpirun trouble through ssh"</a>
<li><strong>In reply to:</strong> <a href="21605.php">Baptiste Robert: "[OMPI users] mpirun trouble through ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21608.php">Baptiste Robert: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Reply:</strong> <a href="21608.php">Baptiste Robert: "Re: [OMPI users] mpirun trouble through ssh"</a>
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
