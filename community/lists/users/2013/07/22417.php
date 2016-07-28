<?
$subject_val = "Re: [OMPI users] openmpi+infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 31 11:54:40 2013" -->
<!-- isoreceived="20130731155440" -->
<!-- sent="Wed, 31 Jul 2013 17:54:16 +0200" -->
<!-- isosent="20130731155416" -->
<!-- name="christian schmitt" -->
<!-- email="schmitt_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi+infiniband" -->
<!-- id="51F93328.7020006_at_gsc.tu-darmstadt.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="902F4AAF-B258-4230-8538-F139E87BC3DA_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> christian schmitt (<em>schmitt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-31 11:54:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22418.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Previous message:</strong> <a href="22416.php">Mike Dubman: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>In reply to:</strong> <a href="22411.php">Reuti: "Re: [OMPI users] openmpi+infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for this.
<br>
<p>This was an try and ERROR ERROR Problem.
<br>
It was a mismatch of OFED versions and kernel updates.
<br>
<p>Now I installed a fresh centOS 6.4 (with default kernel NO KENELUPDATE).
<br>
Then installed the official MELLANOX OFED Driver and compiled openMPI
<br>
(without options). And now it works fine.
<br>
<p>Before it was a mismatch of first installing centOS 6.3, then updating
<br>
to 6.4 and maybe some files of the old OFED drivers survived.
<br>
<p>Thank you
<br>
<p>Christian
<br>
<p><p>On 07/30/2013 04:40 PM, Reuti wrote:
<br>
<span class="quotelev1">&gt; Am 30.07.2013 um 15:01 schrieb christian schmitt:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#180;m trying to get openmpi(1.6.5) running with/over infiniband.
</span><br>
<span class="quotelev2">&gt;&gt; My system is a centOS 6.3. I have installed the Mellanox OFED driver
</span><br>
<span class="quotelev2">&gt;&gt; (2.0) and everything seems working. ibhosts shows all hosts and the switch.
</span><br>
<span class="quotelev2">&gt;&gt; A &quot;hca_self_test.ofed&quot; shows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---- Performing Adapter Device Self Test ----
</span><br>
<span class="quotelev2">&gt;&gt; Number of CAs Detected ................. 1
</span><br>
<span class="quotelev2">&gt;&gt; PCI Device Check ....................... PASS
</span><br>
<span class="quotelev2">&gt;&gt; Kernel Arch ............................ x86_64
</span><br>
<span class="quotelev2">&gt;&gt; Host Driver Version .................... MLNX_OFED_LINUX-2.0-2.0.5
</span><br>
<span class="quotelev2">&gt;&gt; (OFED-2.0-2.0.5): 2.6.32-279.el6.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; Host Driver RPM Check .................. PASS
</span><br>
<span class="quotelev2">&gt;&gt; Firmware on CA #0 VPI .................. v2.11.500
</span><br>
<span class="quotelev2">&gt;&gt; Firmware Check on CA #0 (VPI) .......... PASS
</span><br>
<span class="quotelev2">&gt;&gt; Host Driver Initialization ............. PASS&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Number of CA Ports Active .............. 1
</span><br>
<span class="quotelev2">&gt;&gt; Port State of Port #1 on CA #0 (VPI)..... UP 4X QDR (InfiniBand)
</span><br>
<span class="quotelev2">&gt;&gt; Error Counter Check on CA #0 (VPI)...... PASS
</span><br>
<span class="quotelev2">&gt;&gt; Kernel Syslog Check .................... PASS
</span><br>
<span class="quotelev2">&gt;&gt; Node GUID on CA #0 (VPI) ............... 00:02:c9:03:00:1f:a4:e0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A &quot;ompi_info | grep openib&quot; shows:
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: openib (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I now compiled openmpi with the option &quot;--with-openib&quot; and tried to
</span><br>
<span class="quotelev2">&gt;&gt; run the intel MPI test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What's the &quot;intel MPI test&quot; - is this an application from Intel's MPI library which is included as source and you recompiled it with Open MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But it still uses the Ethernet interface to
</span><br>
<span class="quotelev2">&gt;&gt; communicate. Only when I configure ipoib (ib0) and start my job with
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--mca btl ^openib --mca btl_tcp_if_include ib0&quot; it runs with
</span><br>
<span class="quotelev2">&gt;&gt; infiniband. But when I&#180;m right, it should work without the ib0 interface.
</span><br>
<span class="quotelev2">&gt;&gt; I&#180;m quiet new to infiniband so maybe I forgot something.
</span><br>
<span class="quotelev2">&gt;&gt; I'm grateful for any information that help me solving this problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Christian
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22418.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Previous message:</strong> <a href="22416.php">Mike Dubman: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>In reply to:</strong> <a href="22411.php">Reuti: "Re: [OMPI users] openmpi+infiniband"</a>
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
