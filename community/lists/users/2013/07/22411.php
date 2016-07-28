<?
$subject_val = "Re: [OMPI users] openmpi+infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 30 10:40:46 2013" -->
<!-- isoreceived="20130730144046" -->
<!-- sent="Tue, 30 Jul 2013 16:40:19 +0200" -->
<!-- isosent="20130730144019" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi+infiniband" -->
<!-- id="902F4AAF-B258-4230-8538-F139E87BC3DA_at_staff.uni-marburg.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51F7B91A.9020306_at_gsc.tu-darmstadt.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi+infiniband<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-30 10:40:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22412.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java	Process Builder"</a>
<li><strong>Previous message:</strong> <a href="22410.php">Gus Correa: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>In reply to:</strong> <a href="22409.php">christian schmitt: "[OMPI users] openmpi+infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22417.php">christian schmitt: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>Reply:</strong> <a href="22417.php">christian schmitt: "Re: [OMPI users] openmpi+infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 30.07.2013 um 15:01 schrieb christian schmitt:
<br>
<p><span class="quotelev1">&gt; I&#180;m trying to get openmpi(1.6.5) running with/over infiniband.
</span><br>
<span class="quotelev1">&gt; My system is a centOS 6.3. I have installed the Mellanox OFED driver
</span><br>
<span class="quotelev1">&gt; (2.0) and everything seems working. ibhosts shows all hosts and the switch.
</span><br>
<span class="quotelev1">&gt; A &quot;hca_self_test.ofed&quot; shows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---- Performing Adapter Device Self Test ----
</span><br>
<span class="quotelev1">&gt; Number of CAs Detected ................. 1
</span><br>
<span class="quotelev1">&gt; PCI Device Check ....................... PASS
</span><br>
<span class="quotelev1">&gt; Kernel Arch ............................ x86_64
</span><br>
<span class="quotelev1">&gt; Host Driver Version .................... MLNX_OFED_LINUX-2.0-2.0.5
</span><br>
<span class="quotelev1">&gt; (OFED-2.0-2.0.5): 2.6.32-279.el6.x86_64
</span><br>
<span class="quotelev1">&gt; Host Driver RPM Check .................. PASS
</span><br>
<span class="quotelev1">&gt; Firmware on CA #0 VPI .................. v2.11.500
</span><br>
<span class="quotelev1">&gt; Firmware Check on CA #0 (VPI) .......... PASS
</span><br>
<span class="quotelev1">&gt; Host Driver Initialization ............. PASS&quot;
</span><br>
<span class="quotelev1">&gt; Number of CA Ports Active .............. 1
</span><br>
<span class="quotelev1">&gt; Port State of Port #1 on CA #0 (VPI)..... UP 4X QDR (InfiniBand)
</span><br>
<span class="quotelev1">&gt; Error Counter Check on CA #0 (VPI)...... PASS
</span><br>
<span class="quotelev1">&gt; Kernel Syslog Check .................... PASS
</span><br>
<span class="quotelev1">&gt; Node GUID on CA #0 (VPI) ............... 00:02:c9:03:00:1f:a4:e0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A &quot;ompi_info | grep openib&quot; shows:
</span><br>
<span class="quotelev1">&gt;                 MCA btl: openib (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I now compiled openmpi with the option &quot;--with-openib&quot; and tried to
</span><br>
<span class="quotelev1">&gt; run the intel MPI test.
</span><br>
<p>What's the &quot;intel MPI test&quot; - is this an application from Intel's MPI library which is included as source and you recompiled it with Open MPI?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; But it still uses the Ethernet interface to
</span><br>
<span class="quotelev1">&gt; communicate. Only when I configure ipoib (ib0) and start my job with
</span><br>
<span class="quotelev1">&gt; &quot;--mca btl ^openib --mca btl_tcp_if_include ib0&quot; it runs with
</span><br>
<span class="quotelev1">&gt; infiniband. But when I&#180;m right, it should work without the ib0 interface.
</span><br>
<span class="quotelev1">&gt; I&#180;m quiet new to infiniband so maybe I forgot something.
</span><br>
<span class="quotelev1">&gt; I'm grateful for any information that help me solving this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christian
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
<li><strong>Next message:</strong> <a href="22412.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java	Process Builder"</a>
<li><strong>Previous message:</strong> <a href="22410.php">Gus Correa: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>In reply to:</strong> <a href="22409.php">christian schmitt: "[OMPI users] openmpi+infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22417.php">christian schmitt: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>Reply:</strong> <a href="22417.php">christian schmitt: "Re: [OMPI users] openmpi+infiniband"</a>
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
