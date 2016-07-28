<?
$subject_val = "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 16:44:05 2016" -->
<!-- isoreceived="20160509204405" -->
<!-- sent="Mon, 9 May 2016 16:44:03 -0400" -->
<!-- isosent="20160509204403" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled" -->
<!-- id="CAHXxYDha74VnR-dBNM2UFOJqNBGyV6URtr1Kxa5H33ALsE4V6A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="002001d1aa20$f17cac10$d4760430$_at_soft-forge.com" -->
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
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 16:44:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29145.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29143.php">Llolsten Kaonga: "[OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29143.php">Llolsten Kaonga: "[OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29155.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29155.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Llolsten
<br>
<p>Is there a specific reason you run as root? This practice is discouraged,
<br>
isn't it?
<br>
<p>Also, isn't it true that OMPI uses ephemeral (i.e. 'user level, randomly
<br>
chosen') ports for TCP transport? In that case, how did this ever worked
<br>
with a firewall enabled?
<br>
<p>I have, in the past, have faced similar situations, thus I am curious to
<br>
know the answer as well.
<br>
<p>Thanks
<br>
Durga
<br>
<p>The surgeon general advises you to eat right, exercise regularly and quit
<br>
ageing.
<br>
<p>On Mon, May 9, 2016 at 2:31 PM, Llolsten Kaonga &lt;llk_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We&#226;&#128;&#153;ve been running openmpi for a long time and up to version 1.8.2 and
</span><br>
<span class="quotelev1">&gt; CentOS 6.7 with commands such as the one below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; usr/local/bin/mpirun --allow-run-as-root --mca btl openib,self,sm --mca
</span><br>
<span class="quotelev1">&gt; pml ob1 -np 2 -np 8 -hostfile /root/mpi-hosts /usr/local/bin/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be able to run the above command, we normally just disabled the IPv4
</span><br>
<span class="quotelev1">&gt; firewall and SELinux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We recently made the following updates:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OS:         CentOS 7.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMB:      4.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI: 1.10.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we tried to execute the above mpirun command, we got a TCP Broken
</span><br>
<span class="quotelev1">&gt; Pipe error. There was no IP assignment conflict and eventually, we narrowed
</span><br>
<span class="quotelev1">&gt; down the problem to the firewall. Disabling the firewalld daemon allows the
</span><br>
<span class="quotelev1">&gt; command to run to completion. We would prefer not to disable the daemon as
</span><br>
<span class="quotelev1">&gt; our servers may sometimes be connected to the rest of our subnet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there other options such as perhaps specifying a port (I am guessing,
</span><br>
<span class="quotelev1">&gt; so specific instructions will be greatly appreciated).
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29143.php">http://www.open-mpi.org/community/lists/users/2016/05/29143.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29144/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29145.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29143.php">Llolsten Kaonga: "[OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29143.php">Llolsten Kaonga: "[OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29155.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29155.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
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
