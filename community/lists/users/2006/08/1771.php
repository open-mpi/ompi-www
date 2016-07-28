<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 25 08:48:42 2006" -->
<!-- isoreceived="20060825124842" -->
<!-- sent="Fri, 25 Aug 2006 08:48:37 -0400" -->
<!-- isosent="20060825124837" -->
<!-- name="Caird, Andrew J" -->
<!-- email="acaird_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Jumbo frames" -->
<!-- id="CBA57977CF4A2A4D94031A347F7E011B8EA4_at_ECLUST2-VS2.adsroot.itcs.umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8e6393ac0608242230y2f8edd3j24f903c4f094663_at_mail.gmail.com" -->
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
<strong>From:</strong> Caird, Andrew J (<em>acaird_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-25 08:48:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1772.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "[OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Previous message:</strong> <a href="1770.php">Christine Kreuzer: "[OMPI users] problem with ompi_info"</a>
<li><strong>In reply to:</strong> <a href="1769.php">Massimiliano Fatica: "[OMPI users] Jumbo frames"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Massimiliano,
<br>
<p>It should work automatically, but I have seen instances where switches
<br>
or Ethernet cards can't support the full 9000 bytes per frame, and we've
<br>
had to go as low as 6000 bytes to get consistent performance.  It seems
<br>
like everyone's interpretation of what the 9000 bytes is for is a little
<br>
different.
<br>
<p>Does it work with the defaults 1500byte setting?  You might try
<br>
increasing in smaller steps to see where it stops working.
<br>
<p>Good luck.
<br>
--andrew
<br>
&nbsp;&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Massimiliano Fatica
</span><br>
<span class="quotelev1">&gt; Sent: Friday, August 25, 2006 1:30 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Jumbo frames
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am trying to use Jumbo frames but mpirun will not start the job.
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI v1.1 shipped with the latest Rocks (4.2).
</span><br>
<span class="quotelev1">&gt; Ifconfig is reporting that all the NIC on the cluster are 
</span><br>
<span class="quotelev1">&gt; using an MTU of 9000 and the switch (HP Procurve) should be 
</span><br>
<span class="quotelev1">&gt; able to use Jumbo frames.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any special flag I need to pass to mpirun or a 
</span><br>
<span class="quotelev1">&gt; configuration file I need to edit?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Massimiliano
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1772.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "[OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Previous message:</strong> <a href="1770.php">Christine Kreuzer: "[OMPI users] problem with ompi_info"</a>
<li><strong>In reply to:</strong> <a href="1769.php">Massimiliano Fatica: "[OMPI users] Jumbo frames"</a>
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
