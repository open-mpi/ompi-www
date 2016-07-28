<?
$subject_val = "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  9 03:32:50 2013" -->
<!-- isoreceived="20130209083250" -->
<!-- sent="Sat, 9 Feb 2013 00:32:42 -0800" -->
<!-- isosent="20130209083242" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]" -->
<!-- id="ADF9D302-14DE-4FE5-AF85-704537EF08A4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5112E06C.2010909_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-09 03:32:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21338.php">Siegmar Gross: "[OMPI users] more information for my problem with rankfiles"</a>
<li><strong>Previous message:</strong> <a href="21336.php">Ralph Castain: "Re: [OMPI users] Hi, I am working on topic &quot;Topology aware mapping of processes in intra node environment&quot;. I need to find the binding of each rank on the local machine. How do I do this? I am using OPENMPI version 1.4.1 Thank You"</a>
<li><strong>In reply to:</strong> <a href="21321.php">Eugene Loh: "[OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21340.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Reply:</strong> <a href="21340.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 6, 2013, at 2:59 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 02/06/13 04:29, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt;&gt; thank you very much for your answer. I have compiled your program
</span><br>
<span class="quotelev2">&gt;&gt; and get different behaviours for openmpi-1.6.4rc3 and openmpi-1.9.
</span><br>
<span class="quotelev2">&gt;&gt; I get the following output for openmpi-1.9 (different outputs !!!).
</span><br>
<span class="quotelev2">&gt;&gt; sunpc1 rankfiles 104 mpirun --report-bindings --rankfile myrankfile ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; [sunpc1:26554] MCW rank 0 bound to socket 0[core 0[hwt 0]],   socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev2">&gt;&gt; unbound
</span><br>
<span class="quotelev2">&gt;&gt; sunpc1 rankfiles 105 mpirun --report-bindings --rankfile myrankfile_0 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; [sunpc1:26557] MCW rank 0 bound to socket 0[core 0[hwt 0]]:   [B/.][./.]
</span><br>
<span class="quotelev2">&gt;&gt; bind to 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think what's happening is that although you specified &quot;0:0&quot; or &quot;0:1&quot; in the rankfile, the string &quot;0,0&quot; or &quot;0,1&quot; is getting passed in (at least in the runs I looked at).  That colon became a comma.  So, it's just by accident that myrankfile_0 is working out all right.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could someone who knows the code better than I do help me narrow this down?  E.g., where is the rankfile parsed?  For what it's worth, by the time mpirun reaches orte_odls_base_default_get_add_procs_data(), orte_job_data already contains the corrupted cpu_bitmap string.
</span><br>
<p>You'll want to look at orte/mca/rmaps/rank_file/rmaps_rank_file.c - the bit map is now computed in mpirun and then sent to the daemons
<br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21338.php">Siegmar Gross: "[OMPI users] more information for my problem with rankfiles"</a>
<li><strong>Previous message:</strong> <a href="21336.php">Ralph Castain: "Re: [OMPI users] Hi, I am working on topic &quot;Topology aware mapping of processes in intra node environment&quot;. I need to find the binding of each rank on the local machine. How do I do this? I am using OPENMPI version 1.4.1 Thank You"</a>
<li><strong>In reply to:</strong> <a href="21321.php">Eugene Loh: "[OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21340.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Reply:</strong> <a href="21340.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
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
