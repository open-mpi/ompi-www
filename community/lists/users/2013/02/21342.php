<?
$subject_val = "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  9 16:04:36 2013" -->
<!-- isoreceived="20130209210436" -->
<!-- sent="Sat, 9 Feb 2013 13:04:27 -0800" -->
<!-- isosent="20130209210427" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]" -->
<!-- id="0D7BAB16-4CD3-4550-8078-B603A0FCA50B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51169899.4050307_at_oracle.com" -->
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
<strong>Date:</strong> 2013-02-09 16:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21343.php">Kranthi Kumar: "[OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Previous message:</strong> <a href="21341.php">Paul Gribelyuk: "[OMPI users] Fwd: an error when running MPI on 2 machines"</a>
<li><strong>In reply to:</strong> <a href="21340.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21324.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me take a look later today on my Linux box.
<br>
<p>On Feb 9, 2013, at 10:42 AM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 02/09/13 00:32, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 6, 2013, at 2:59 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 02/06/13 04:29, Siegmar Gross wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thank you very much for your answer. I have compiled your program
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and get different behaviours for openmpi-1.6.4rc3 and openmpi-1.9.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think what's happening is that although you specified &quot;0:0&quot; or &quot;0:1&quot; in the rankfile, the string &quot;0,0&quot; or &quot;0,1&quot; is getting passed in (at least in the runs I looked at).  That colon became a comma.  So, it's just by accident that myrankfile_0 is working out all right.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could someone who knows the code better than I do help me narrow this down?  E.g., where is the rankfile parsed?  For what it's worth, by the time mpirun reaches orte_odls_base_default_get_add_procs_data(), orte_job_data already contains the corrupted cpu_bitmap string.
</span><br>
<span class="quotelev2">&gt;&gt; You'll want to look at orte/mca/rmaps/rank_file/rmaps_rank_file.c - the bit map is now computed in mpirun and then sent to the daemons
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, I'm getting lost in this code.  Anyhow, I don't think the problem is related to Solaris.  I think it's also on Linux. E.g., I can reproduce the problem with 1.9a1r28035 on Linux using GCC compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar: can you confirm this is a problem also on Linux?  E.g., with OMPI 1.9, on one of your Linux nodes (linpc0?) try
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    % cat myrankfile
</span><br>
<span class="quotelev1">&gt;    rank 0=linpc0 slot=0:1
</span><br>
<span class="quotelev1">&gt;    % mpirun --report-bindings --rankfile myrankfile numactl --show
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For me, the binding I get is not 0:1 but 0,1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could someone else take a look at this?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="21343.php">Kranthi Kumar: "[OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Previous message:</strong> <a href="21341.php">Paul Gribelyuk: "[OMPI users] Fwd: an error when running MPI on 2 machines"</a>
<li><strong>In reply to:</strong> <a href="21340.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21324.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
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
