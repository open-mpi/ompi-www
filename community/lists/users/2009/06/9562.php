<?
$subject_val = "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 02:04:30 2009" -->
<!-- isoreceived="20090608060430" -->
<!-- sent="Sun, 7 Jun 2009 23:04:23 -0700 (PDT)" -->
<!-- isosent="20090608060423" -->
<!-- name="shan axida" -->
<!-- email="axida2009_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????" -->
<!-- id="938365.76057.qm_at_web62005.mail.re1.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0322A361-B255-43E0-83DB-0E56DE1E7F93_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????<br>
<strong>From:</strong> shan axida (<em>axida2009_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-08 02:04:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9563.php">François Trahay: "[OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9561.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>In reply to:</strong> <a href="9555.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9463.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Yes, we 2 NICs on the same bus and the other 2 are embeded.
<br>
We did the experiment about netperf in our cluster and we 
<br>
could not get full bandwith using 4 pairs copies on two nodes.
<br>
the bandwidth is increased when the number of NICs changes to 2
<br>
but there is no big increase when it becomes 3, 4.
<br>
<p>Thank you!
<br>
Axida.
<br>
<p><p><p><p><p>________________________________
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Sent: Friday, June 5, 2009 11:19:02 PM
<br>
Subject: Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????
<br>
<p>On Jun 4, 2009, at 3:42 AM, shan axida wrote:
<br>
<p><span class="quotelev1">&gt; We have Dell powerconnect 2724 Gigabit switches to connect the nodes in our cluster.
</span><br>
<span class="quotelev1">&gt; As you said, may be the speed of PCI bus is a bottleneck.
</span><br>
<span class="quotelev1">&gt; How can check it in practical?
</span><br>
<p>Are all your gige nics on the same bus?
<br>
<p>You might want to try running multiple copies of TCP pt2pt benchmarks simultaneously on your machine to see what kind of performance you get.  E.g., run 4 copies of netperf on node A talking to 4 corresponding copies of netper on node B.  Do you get full bandwidth out of all 4 copies?
<br>
<p>--Jeff Squyres
<br>
Cisco Systems
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9562/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9563.php">François Trahay: "[OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9561.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>In reply to:</strong> <a href="9555.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9463.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
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
