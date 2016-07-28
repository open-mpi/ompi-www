<?
$subject_val = "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 03:01:32 2013" -->
<!-- isoreceived="20130207080132" -->
<!-- sent="Thu, 7 Feb 2013 08:54:21 +0100 (CET)" -->
<!-- isosent="20130207075421" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]" -->
<!-- id="201302070754.r177sKsE024458_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-07 02:54:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21324.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21322.php">Syed Ahsan Ali: "Re: [OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting."</a>
<li><strong>Maybe in reply to:</strong> <a href="21321.php">Eugene Loh: "[OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21337.php">Ralph Castain: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p><span class="quotelev2">&gt; &gt; thank you very much for your answer. I have compiled your program
</span><br>
<span class="quotelev2">&gt; &gt; and get different behaviours for openmpi-1.6.4rc3 and openmpi-1.9.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I get the following output for openmpi-1.9 (different outputs !!!).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1 rankfiles 104 mpirun --report-bindings --rankfile myrankfile
</span><br>
<span class="quotelev2">&gt; &gt;  ./a.out
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:26554] MCW rank 0 bound to socket 0[core 0[hwt 0]], 
</span><br>
<span class="quotelev2">&gt; &gt;   socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev2">&gt; &gt; unbound
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1 rankfiles 105 mpirun --report-bindings --rankfile myrankfile_0
</span><br>
<span class="quotelev2">&gt; &gt;  ./a.out
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:26557] MCW rank 0 bound to socket 0[core 0[hwt 0]]:   [B/.][./.]
</span><br>
<span class="quotelev2">&gt; &gt; bind to 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think what's happening is that although you specified &quot;0:0&quot; or &quot;0:1&quot;
</span><br>
<span class="quotelev1">&gt; in the rankfile, the string &quot;0,0&quot; or &quot;0,1&quot; is getting passed 
</span><br>
<span class="quotelev1">&gt; in (at least in the runs I looked at).  That colon became a comma.
</span><br>
<span class="quotelev1">&gt; So, it's just by accident that myrankfile_0 is working out all 
</span><br>
<span class="quotelev1">&gt; right.
</span><br>
<p>It is working for 0:0 and 1:1 and it isn't working for 0:1 and
<br>
1:0. The machine is a Sun Ultra 40 by the way.
<br>
<p>sunpc1 rankfiles 104 ompi_info | grep &quot;MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r28035
<br>
sunpc1 rankfiles 105 cat myrankfile_*
<br>
rank 0=sunpc1 slot=0:0
<br>
rank 0=sunpc1 slot=0:1
<br>
rank 0=sunpc1 slot=1:0
<br>
rank 0=sunpc1 slot=1:1
<br>
sunpc1 rankfiles 106 cc check.c 
<br>
sunpc1 rankfiles 107 mpirun --report-bindings \
<br>
&nbsp;&nbsp;--rankfile myrankfile_0 ./a.out
<br>
bind to 0
<br>
[sunpc1:26988] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
&nbsp;&nbsp;[B/.][./.]
<br>
<p>sunpc1 rankfiles 108 mpirun --report-bindings \
<br>
&nbsp;&nbsp;--rankfile myrankfile_1 ./a.out
<br>
[sunpc1:26991] MCW rank 0 bound to socket 0[core 0[hwt 0]],
<br>
&nbsp;&nbsp;socket 0[core 1[hwt 0]]: [B/B][./.]
<br>
unbound
<br>
<p>sunpc1 rankfiles 109 mpirun --report-bindings \
<br>
&nbsp;&nbsp;--rankfile myrankfile_2 ./a.out
<br>
[sunpc1:26994] MCW rank 0 bound to socket 1[core 2[hwt 0]],
<br>
&nbsp;&nbsp;socket 1[core 3[hwt 0]]: [./.][B/B]
<br>
unbound
<br>
<p>sunpc1 rankfiles 110 mpirun --report-bindings \
<br>
&nbsp;&nbsp;--rankfile myrankfile_3 ./a.out
<br>
[sunpc1:26997] MCW rank 0 bound to socket 1[core 3[hwt 0]]:
<br>
&nbsp;&nbsp;[./.][./B]
<br>
bind to 3
<br>
sunpc1 rankfiles 111 
<br>
<p><p><span class="quotelev1">&gt; Could someone who knows the code better than I do help me narrow this
</span><br>
<span class="quotelev1">&gt; down?  E.g., where is the rankfile parsed?  For what it's 
</span><br>
<span class="quotelev1">&gt; worth, by the time mpirun reaches
</span><br>
<span class="quotelev1">&gt; orte_odls_base_default_get_add_procs_data(), orte_job_data already
</span><br>
<span class="quotelev1">&gt; contains the corrupted 
</span><br>
<span class="quotelev1">&gt; cpu_bitmap string.
</span><br>
<p><p>Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21324.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Previous message:</strong> <a href="21322.php">Syed Ahsan Ali: "Re: [OMPI users] configure: error: Could not run a simple Fortran 77 program. Aborting."</a>
<li><strong>Maybe in reply to:</strong> <a href="21321.php">Eugene Loh: "[OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21337.php">Ralph Castain: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
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
