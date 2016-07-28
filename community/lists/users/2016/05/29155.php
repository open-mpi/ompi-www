<?
$subject_val = "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 11:24:44 2016" -->
<!-- isoreceived="20160510152444" -->
<!-- sent="Tue, 10 May 2016 11:24:39 -0400" -->
<!-- isosent="20160510152439" -->
<!-- name="Llolsten Kaonga" -->
<!-- email="llk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled" -->
<!-- id="001401d1aad0$11f407e0$35dc17a0$_at_soft-forge.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDha74VnR-dBNM2UFOJqNBGyV6URtr1Kxa5H33ALsE4V6A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled<br>
<strong>From:</strong> Llolsten Kaonga (<em>llk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 11:24:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29156.php">lzfneu: "[OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Previous message:</strong> <a href="29154.php">Hjelm, Nathan Thomas: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29144.php">dpchoudh .: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29160.php">Orion Poplawski: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29160.php">Orion Poplawski: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Durga,
<br>
<p>&nbsp;
<br>
<p>These are dedicated servers we use to run Interoperability testing and it is just easier for us to use a privileged user account.
<br>
<p>&nbsp;
<br>
<p>As I mentioned earlier, up to version 1.8.2, we would just disable SELinux and the IPv4 firewall and things run smoothly. It was only when we installed version 1.10.2 (CentOS 7.2) that we run into these troubles. CentOS 7.2 no longer seems to bother with the IPv4 firewall, so you can&#226;&#128;&#153;t do:
<br>
<p>&nbsp;
<br>
<p># service iptables save
<br>
<p># service iptables stop
<br>
<p># chkconfig iptables off
<br>
<p>&nbsp;
<br>
<p>That was our first sign of &#226;&#128;&#156;trouble&#226;&#128;&#157;. (-;
<br>
<p>&nbsp;
<br>
<p>I will try to run the command with the option to specify the port(s) per Gilles&#226;&#128;&#153; suggestion and see what happens.
<br>
<p>&nbsp;
<br>
<p>I thank you.
<br>
<p><pre>
--
Llolsten
 
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of dpchoudh .
Sent: Monday, May 09, 2016 4:44 PM
To: Open MPI Users &lt;users_at_[hidden]&gt;
Subject: Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled
 
Hello Llolsten
Is there a specific reason you run as root? This practice is discouraged, isn't it?
Also, isn't it true that OMPI uses ephemeral (i.e. 'user level, randomly chosen') ports for TCP transport? In that case, how did this ever worked with a firewall enabled?
I have, in the past, have faced similar situations, thus I am curious to know the answer as well.
Thanks
Durga
The surgeon general advises you to eat right, exercise regularly and quit ageing.
 
On Mon, May 9, 2016 at 2:31 PM, Llolsten Kaonga &lt;llk_at_[hidden] &lt;mailto:llk_at_[hidden]&gt; &gt; wrote:
Hello all,
 
We&#226;&#128;&#153;ve been running openmpi for a long time and up to version 1.8.2 and CentOS 6.7 with commands such as the one below:
 
usr/local/bin/mpirun --allow-run-as-root --mca btl openib,self,sm --mca pml ob1 -np 2 -np 8 -hostfile /root/mpi-hosts /usr/local/bin/IMB-MPI1
 
To be able to run the above command, we normally just disabled the IPv4 firewall and SELinux.
 
We recently made the following updates:
 
OS:         CentOS 7.2
IMB:      4.1
OpenMPI: 1.10.2
 
When we tried to execute the above mpirun command, we got a TCP Broken Pipe error. There was no IP assignment conflict and eventually, we narrowed down the problem to the firewall. Disabling the firewalld daemon allows the command to run to completion. We would prefer not to disable the daemon as our servers may sometimes be connected to the rest of our subnet.
 
Are there other options such as perhaps specifying a port (I am guessing, so specific instructions will be greatly appreciated).
 
I thank you.
_______________________________________________
users mailing list
users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29143.php">http://www.open-mpi.org/community/lists/users/2016/05/29143.php</a>
 
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29156.php">lzfneu: "[OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Previous message:</strong> <a href="29154.php">Hjelm, Nathan Thomas: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29144.php">dpchoudh .: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29160.php">Orion Poplawski: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29160.php">Orion Poplawski: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
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
