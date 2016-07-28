<?
$subject_val = "[OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 18:00:14 2013" -->
<!-- isoreceived="20130206230014" -->
<!-- sent="Wed, 06 Feb 2013 14:59:56 -0800" -->
<!-- isosent="20130206225956" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]" -->
<!-- id="5112E06C.2010909_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201302061229.r16CTa5p023255_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-06 17:59:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21322.php">Syed Ahsan Ali: "Re: [OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="21320.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21312.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21323.php">Siegmar Gross: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Maybe reply:</strong> <a href="21323.php">Siegmar Gross: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Reply:</strong> <a href="21337.php">Ralph Castain: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/06/13 04:29, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thank you very much for your answer. I have compiled your program
</span><br>
<span class="quotelev1">&gt; and get different behaviours for openmpi-1.6.4rc3 and openmpi-1.9.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following output for openmpi-1.9 (different outputs !!!).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 rankfiles 104 mpirun --report-bindings --rankfile myrankfile ./a.out
</span><br>
<span class="quotelev1">&gt; [sunpc1:26554] MCW rank 0 bound to socket 0[core 0[hwt 0]],   socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev1">&gt; unbound
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 rankfiles 105 mpirun --report-bindings --rankfile myrankfile_0 ./a.out
</span><br>
<span class="quotelev1">&gt; [sunpc1:26557] MCW rank 0 bound to socket 0[core 0[hwt 0]]:   [B/.][./.]
</span><br>
<span class="quotelev1">&gt; bind to 0
</span><br>
<p>I think what's happening is that although you specified &quot;0:0&quot; or &quot;0:1&quot; in the rankfile, the string &quot;0,0&quot; or &quot;0,1&quot; is getting passed 
<br>
in (at least in the runs I looked at).  That colon became a comma.  So, it's just by accident that myrankfile_0 is working out all 
<br>
right.
<br>
<p>Could someone who knows the code better than I do help me narrow this down?  E.g., where is the rankfile parsed?  For what it's 
<br>
worth, by the time mpirun reaches orte_odls_base_default_get_add_procs_data(), orte_job_data already contains the corrupted 
<br>
cpu_bitmap string.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21322.php">Syed Ahsan Ali: "Re: [OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="21320.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21312.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21323.php">Siegmar Gross: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Maybe reply:</strong> <a href="21323.php">Siegmar Gross: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Reply:</strong> <a href="21337.php">Ralph Castain: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
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
