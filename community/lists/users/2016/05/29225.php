<?
$subject_val = "Re: [OMPI users] ORTE has lost communication";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 13:39:40 2016" -->
<!-- isoreceived="20160516173940" -->
<!-- sent="Mon, 16 May 2016 14:39:39 -0300" -->
<!-- isosent="20160516173939" -->
<!-- name="Zabiziz Zaz" -->
<!-- email="zabiziz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE has lost communication" -->
<!-- id="CAJfyiouabVuhS8cU=69ghb=HVxBktjLLFGfPWF7Jz85jZhxSCg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A333FC2D-3DBB-4D0E-83D3-DB8BAF47FBC2_at_open-mpi.org" -->
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
<strong>From:</strong> Zabiziz Zaz (<em>zabiziz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 13:39:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29226.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Previous message:</strong> <a href="29224.php">Xiaolong Cui: "[OMPI users] Eager sending on InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="29220.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29226.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Reply:</strong> <a href="29226.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok.
<br>
Could you please tell me the latest version that is supported?
<br>
<p>Regards,
<br>
Guilherme.
<br>
<p>On Mon, May 16, 2016 at 12:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We used to do so, but don&#226;&#128;&#153;t currently support that model - folks are
</span><br>
<span class="quotelev1">&gt; working on restoring it. No timetable, though I don&#226;&#128;&#153;t think it will be too
</span><br>
<span class="quotelev1">&gt; much longer before it is in master. Can&#226;&#128;&#153;t say when it will hit release
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 16, 2016, at 8:25 AM, Zabiziz Zaz &lt;zabiziz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Llolsten,
</span><br>
<span class="quotelev1">&gt; the problem is not a firewall issue. The simplest way to reproduce the
</span><br>
<span class="quotelev1">&gt; problem is rebooting a node in the middle of the job. It's possible to
</span><br>
<span class="quotelev1">&gt; configure the openmpi to not terminate the job if, in the middle of the
</span><br>
<span class="quotelev1">&gt; job, one node is rebooted?
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
<span class="quotelev1">&gt; On Mon, May 16, 2016 at 12:11 PM, Llolsten Kaonga &lt;llk_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Guilherme,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be off but try running your mpirun command with the option &#226;&#128;&#156;&#226;&#128;&#147;tag-output&#226;&#128;&#157;.
</span><br>
<span class="quotelev2">&gt;&gt; If you see a &#226;&#128;&#156;broken pipe&#226;&#128;&#157;, then your issue may be firewall related. You
</span><br>
<span class="quotelev2">&gt;&gt; could then check the thread &#226;&#128;&#156;*Re: [OMPI users] mpirun command won't run
</span><br>
<span class="quotelev2">&gt;&gt; unless the firewalld daemon is disabled*&#226;&#128;&#157; for how to get around this
</span><br>
<span class="quotelev2">&gt;&gt; from Gilles or Jeff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Llolsten
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *From:* users [mailto:users-bounces_at_[hidden]] *On Behalf Of *Zabiziz
</span><br>
<span class="quotelev2">&gt;&gt; Zaz
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:* Monday, May 16, 2016 10:46 AM
</span><br>
<span class="quotelev2">&gt;&gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* [OMPI users] ORTE has lost communication
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using openmpi-1.10.2 and sometimes I'm receiving the message below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ORTE has lost communication with its daemon located on node:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   hostname:  xxxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is usually due to either a failure of the TCP network
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; connection to the node, or possibly an internal failure of
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the daemon itself. We cannot recover from this failure, and
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; therefore will terminate the job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My applications are fault tolerant and the jobs usually takes weeks to
</span><br>
<span class="quotelev2">&gt;&gt; finish. Sometimes a hardware problem occurs with one node, for example, the
</span><br>
<span class="quotelev2">&gt;&gt; node shutdown. I don't want mpi to terminate the job, my jobs usually have
</span><br>
<span class="quotelev2">&gt;&gt; hundreds of nodes and I don't care if 1 node lost communication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's possible to change this behavior of openmpi? I tried to
</span><br>
<span class="quotelev2">&gt;&gt; set orte_abort_on_non_zero_status to 0 but it didn't work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Guilherme.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29214.php">http://www.open-mpi.org/community/lists/users/2016/05/29214.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29218.php">http://www.open-mpi.org/community/lists/users/2016/05/29218.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29220.php">http://www.open-mpi.org/community/lists/users/2016/05/29220.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29225/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29226.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Previous message:</strong> <a href="29224.php">Xiaolong Cui: "[OMPI users] Eager sending on InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="29220.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29226.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Reply:</strong> <a href="29226.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
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
