<?
$subject_val = "Re: [OMPI users] ORTE has lost communication";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 11:30:11 2016" -->
<!-- isoreceived="20160516153011" -->
<!-- sent="Mon, 16 May 2016 08:30:08 -0700" -->
<!-- isosent="20160516153008" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE has lost communication" -->
<!-- id="A333FC2D-3DBB-4D0E-83D3-DB8BAF47FBC2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJfyiouM6F2dkeJYqt4VtwTMhSSLs23gacR9XY-yBPv2wy+-Vw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE has lost communication<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 11:30:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29221.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Previous message:</strong> <a href="29219.php">Gilles Gouaillardet: "[OMPI users]  ORTE has lost communication"</a>
<li><strong>In reply to:</strong> <a href="29218.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29225.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Reply:</strong> <a href="29225.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We used to do so, but don&#226;&#128;&#153;t currently support that model - folks are working on restoring it. No timetable, though I don&#226;&#128;&#153;t think it will be too much longer before it is in master. Can&#226;&#128;&#153;t say when it will hit release
<br>
<p><span class="quotelev1">&gt; On May 16, 2016, at 8:25 AM, Zabiziz Zaz &lt;zabiziz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Llolsten,
</span><br>
<span class="quotelev1">&gt; the problem is not a firewall issue. The simplest way to reproduce the problem is rebooting a node in the middle of the job. It's possible to configure the openmpi to not terminate the job if, in the middle of the job, one node is rebooted?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Guilherme
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, May 16, 2016 at 12:11 PM, Llolsten Kaonga &lt;llk_at_[hidden] &lt;mailto:llk_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello Guilherme,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be off but try running your mpirun command with the option &#226;&#128;&#156;&#226;&#128;&#147;tag-output&#226;&#128;&#157;. If you see a &#226;&#128;&#156;broken pipe&#226;&#128;&#157;, then your issue may be firewall related. You could then check the thread &#226;&#128;&#156;Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled&#226;&#128;&#157; for how to get around this from Gilles or Jeff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Llolsten
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &lt;&gt;
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Zabiziz Zaz
</span><br>
<span class="quotelev1">&gt; Sent: Monday, May 16, 2016 10:46 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] ORTE has lost communication
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using openmpi-1.10.2 and sometimes I'm receiving the message below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ORTE has lost communication with its daemon located on node:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   hostname:  xxxx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is usually due to either a failure of the TCP network
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; connection to the node, or possibly an internal failure of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the daemon itself. We cannot recover from this failure, and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; therefore will terminate the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My applications are fault tolerant and the jobs usually takes weeks to finish. Sometimes a hardware problem occurs with one node, for example, the node shutdown. I don't want mpi to terminate the job, my jobs usually have hundreds of nodes and I don't care if 1 node lost communication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's possible to change this behavior of openmpi? I tried to set orte_abort_on_non_zero_status to 0 but it didn't work. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guilherme.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29214.php">http://www.open-mpi.org/community/lists/users/2016/05/29214.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/05/29214.php">http://www.open-mpi.org/community/lists/users/2016/05/29214.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29218.php">http://www.open-mpi.org/community/lists/users/2016/05/29218.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29220/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29221.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Previous message:</strong> <a href="29219.php">Gilles Gouaillardet: "[OMPI users]  ORTE has lost communication"</a>
<li><strong>In reply to:</strong> <a href="29218.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29225.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Reply:</strong> <a href="29225.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
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
