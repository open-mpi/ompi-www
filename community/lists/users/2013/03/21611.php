<?
$subject_val = "Re: [OMPI users] mpirun trouble through ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 25 10:13:11 2013" -->
<!-- isoreceived="20130325141311" -->
<!-- sent="Mon, 25 Mar 2013 15:13:07 +0100" -->
<!-- isosent="20130325141307" -->
<!-- name="Baptiste Robert" -->
<!-- email="baptisterobert38_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun trouble through ssh" -->
<!-- id="CAGEWhg86F+NsJN5oMVcWDxJ4x4Mwmh0hHiiazcMYtabXtcZjJw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C66E097A-14EB-459B-9A3C-A02BA48C17EC_at_open-mpi.org" -->
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
<strong>From:</strong> Baptiste Robert (<em>baptisterobert38_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-25 10:13:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21612.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Previous message:</strong> <a href="21610.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>In reply to:</strong> <a href="21610.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21612.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Reply:</strong> <a href="21612.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I read that we don't have the choice, we have to disable iptables.
<br>
This information is not crystal clear in the user manual.
<br>
Furthermore this mean that we can't launch mpi on a remote web server in
<br>
total security.
<br>
<p>Thank you for your help, I really appreciate it.
<br>
<p><p>2013/3/25 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 25, 2013, at 3:26 AM, Baptiste Robert &lt;baptisterobert38_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for your answer. I've disabled iptables on both
</span><br>
<span class="quotelev1">&gt; computers and then... work like a charm. But here's come my next question,
</span><br>
<span class="quotelev1">&gt; what are the ports that the daemon use ? Because I haven't set iptables,
</span><br>
<span class="quotelev1">&gt; it's by default and I don't understand why is filtered.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iptables will block all ports other than the specific ones you list in its
</span><br>
<span class="quotelev1">&gt; config file. Since the daemon takes a random port, that means it will be
</span><br>
<span class="quotelev1">&gt; blocked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2013/3/25 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check if iptables or some other firewall is running. Configure mpirun
</span><br>
<span class="quotelev2">&gt;&gt; with --enable-debug and then add &quot;-mca plm_base_verbose 10&quot; to your cmd
</span><br>
<span class="quotelev2">&gt;&gt; line to see if the remote daemon is communicating back correctly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 24, 2013, at 1:50 PM, Baptiste Robert &lt;baptisterobert38_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi everybody !
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's my problem. I've installed openmpi on my two machines running on
</span><br>
<span class="quotelev2">&gt;&gt; fedora 17. I've set the path and LD_LIBRARY_PATH correctly, mpirun and
</span><br>
<span class="quotelev2">&gt;&gt; mpicc work on the two machines without trouble.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My problem is when I try to run the helloWorld on all node through ssh
</span><br>
<span class="quotelev2">&gt;&gt; (already configure with certificate) nothing append, I've to kill mpi to
</span><br>
<span class="quotelev2">&gt;&gt; get the prompt back.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I launched this command : mpirun -d -host myRemoteNode -n 2 hello_c
</span><br>
<span class="quotelev2">&gt;&gt; And this give me :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [baptiste_at_baptiste RE51]$ mpirun -d -hostfile hosts hello_c
</span><br>
<span class="quotelev2">&gt;&gt; [baptiste.thinkFed:02666] procdir: /tmp/openmpi-sessions-baptiste_at_baptiste.thinkFed_0/53471/0/0
</span><br>
<span class="quotelev2">&gt;&gt; [baptiste.thinkFed:02666] jobdir: /tmp/openmpi-sessions-baptiste_at_baptiste.thinkFed_0/53471/0
</span><br>
<span class="quotelev2">&gt;&gt; [baptiste.thinkFed:02666] top: openmpi-sessions-baptiste_at_baptiste.thinkFed_0
</span><br>
<span class="quotelev2">&gt;&gt; [baptiste.thinkFed:02666] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [roommateServer:01102] procdir: /tmp/openmpi-sessions-baptiste_at_roommateServer_0/53471/0/1
</span><br>
<span class="quotelev2">&gt;&gt; [roommateServer:01102] jobdir: /tmp/openmpi-sessions-baptiste_at_roommateServer_0/53471/0
</span><br>
<span class="quotelev2">&gt;&gt; [roommateServer:01102] top: openmpi-sessions-baptiste_at_roommateServer_0
</span><br>
<span class="quotelev2">&gt;&gt; [roommateServer:01102] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And nothing else. But if I run the hello_c on a single machine, separately, the job is done and work well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If anyone have an idea it would be awesome.. I don't have a clue why it isn't work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21611/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21612.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Previous message:</strong> <a href="21610.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>In reply to:</strong> <a href="21610.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21612.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Reply:</strong> <a href="21612.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
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
