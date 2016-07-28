<?
$subject_val = "Re: [OMPI users] Problem with running MPI programs on machines withmultiple interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 24 10:40:49 2011" -->
<!-- isoreceived="20110124154049" -->
<!-- sent="Mon, 24 Jan 2011 15:40:41 +0000" -->
<!-- isosent="20110124154041" -->
<!-- name="amalik_at_[hidden]" -->
<!-- email="amalik_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running MPI programs on machines withmultiple interfaces" -->
<!-- id="1396944958-1295883641-cardhu_decombobulator_blackberry.rim.net-1320958681-_at_b1.c18.bise7.blackberry" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="m2oc7672dc.fsf_at_malik.cs.tcd.ie" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running MPI programs on machines withmultiple interfaces<br>
<strong>From:</strong> <a href="mailto:amalik_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problem%20with%20running%20MPI%20programs%20on%20machines%20withmultiple%20interfaces"><em>amalik_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-01-24 10:40:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15409.php">Avinash Malik: "Re: [OMPI users] Problem with running MPI programs on machines with	multiple interfaces"</a>
<li><strong>Previous message:</strong> <a href="15407.php">Avinash Malik: "[OMPI users] Problem with running MPI programs on machines with multiple interfaces"</a>
<li><strong>In reply to:</strong> <a href="15407.php">Avinash Malik: "[OMPI users] Problem with running MPI programs on machines with multiple interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15409.php">Avinash Malik: "Re: [OMPI users] Problem with running MPI programs on machines with	multiple interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forgot to mention that I am running openmpi v-1.5.1.
<br>
<p>Regards,
<br>
Let your email find you with BlackBerry&#174; from Vodafone
<br>
<p>-----Original Message-----
<br>
From: Avinash Malik &lt;amalik_at_[hidden]&gt;
<br>
Sender: users-bounces_at_[hidden]
<br>
Date: Mon, 24 Jan 2011 15:22:39 
<br>
To: Open MPI Users&lt;users_at_[hidden]&gt;
<br>
Reply-To: amalik_at_[hidden], Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: [OMPI users] Problem with running MPI programs on machines with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multiple interfaces
<br>
<p><p>Hello,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have two mahcines each having 3 live interfaces: lo, eth0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(interanet) and usb0 (internet). eth0 cannot access usb0 on the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;other machine (and vice-veras). Now, when I try to run the MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program with these two hosts I cannot get any output, even --mca
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_base_verbose 30 does not give any output. If I set hostfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to have only localhost, then everything runs fine.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I tried out the same code and hostfile with two other machines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with two interfaces: lo and eth1, which can access each
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;other. The program runs fine on these machines.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Next, I setup btl_tcp_if_exclude to lo,usb0 (on the first arch)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and also the ip-address/mask, but this does not work
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;either. When I run the program on one machine and do &quot;ps aux |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;grep mpi&quot; on the other I can see --hnp-uri being set to the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usb0's ip-address, which it should not, because I have set usb0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to be exluded in the btl_tcp_if_exclude list. So, what exactly
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am I doing wrong here? 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I read the otimization FAQ and saw how openmpi builds the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bipartite graphs for connection. But, as I said before, eth0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cannot access usb0's ip and vice-versa, how can I get rid of the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usb0 ip-address showing up in --hnp-uri, because this is the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;only difference between the working and the non-working archs.
<br>
<p>Regards,
<br>
<pre>
-- 
Avinash Malik
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15409.php">Avinash Malik: "Re: [OMPI users] Problem with running MPI programs on machines with	multiple interfaces"</a>
<li><strong>Previous message:</strong> <a href="15407.php">Avinash Malik: "[OMPI users] Problem with running MPI programs on machines with multiple interfaces"</a>
<li><strong>In reply to:</strong> <a href="15407.php">Avinash Malik: "[OMPI users] Problem with running MPI programs on machines with multiple interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15409.php">Avinash Malik: "Re: [OMPI users] Problem with running MPI programs on machines with	multiple interfaces"</a>
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
