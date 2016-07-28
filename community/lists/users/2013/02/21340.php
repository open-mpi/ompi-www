<?
$subject_val = "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  9 13:42:42 2013" -->
<!-- isoreceived="20130209184242" -->
<!-- sent="Sat, 09 Feb 2013 10:42:33 -0800" -->
<!-- isosent="20130209184233" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]" -->
<!-- id="51169899.4050307_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ADF9D302-14DE-4FE5-AF85-704537EF08A4_at_open-mpi.org" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-09 13:42:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21341.php">Paul Gribelyuk: "[OMPI users] Fwd: an error when running MPI on 2 machines"</a>
<li><strong>Previous message:</strong> <a href="21339.php">Ralph Castain: "Re: [OMPI users] more information for my problem with rankfiles"</a>
<li><strong>In reply to:</strong> <a href="21337.php">Ralph Castain: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21342.php">Ralph Castain: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Reply:</strong> <a href="21342.php">Ralph Castain: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/09/13 00:32, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Feb 6, 2013, at 2:59 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 02/06/13 04:29, Siegmar Gross wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thank you very much for your answer. I have compiled your program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and get different behaviours for openmpi-1.6.4rc3 and openmpi-1.9.
</span><br>
<span class="quotelev2">&gt;&gt; I think what's happening is that although you specified &quot;0:0&quot; or &quot;0:1&quot; in the rankfile, the string &quot;0,0&quot; or &quot;0,1&quot; is getting passed in (at least in the runs I looked at).  That colon became a comma.  So, it's just by accident that myrankfile_0 is working out all right.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could someone who knows the code better than I do help me narrow this down?  E.g., where is the rankfile parsed?  For what it's worth, by the time mpirun reaches orte_odls_base_default_get_add_procs_data(), orte_job_data already contains the corrupted cpu_bitmap string.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You'll want to look at orte/mca/rmaps/rank_file/rmaps_rank_file.c - the bit map is now computed in mpirun and then sent to the daemons
</span><br>
<p>Actually, I'm getting lost in this code.  Anyhow, I don't think the problem is related to Solaris.  I think it's also on Linux. 
<br>
E.g., I can reproduce the problem with 1.9a1r28035 on Linux using GCC compilers.
<br>
<p>Siegmar: can you confirm this is a problem also on Linux?  E.g., with OMPI 1.9, on one of your Linux nodes (linpc0?) try
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% cat myrankfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank 0=linpc0 slot=0:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% mpirun --report-bindings --rankfile myrankfile numactl --show
<br>
<p>For me, the binding I get is not 0:1 but 0,1.
<br>
<p>Could someone else take a look at this?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21341.php">Paul Gribelyuk: "[OMPI users] Fwd: an error when running MPI on 2 machines"</a>
<li><strong>Previous message:</strong> <a href="21339.php">Ralph Castain: "Re: [OMPI users] more information for my problem with rankfiles"</a>
<li><strong>In reply to:</strong> <a href="21337.php">Ralph Castain: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21342.php">Ralph Castain: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Reply:</strong> <a href="21342.php">Ralph Castain: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
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
