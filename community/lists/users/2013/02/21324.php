<?
$subject_val = "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 04:12:27 2013" -->
<!-- isoreceived="20130207091227" -->
<!-- sent="Thu, 7 Feb 2013 10:05:47 +0100 (CET)" -->
<!-- isosent="20130207090547" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3" -->
<!-- id="201302070905.r1795l55014351_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3" -->
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
<strong>Subject:</strong> Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-07 04:05:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21325.php">Syed Ahsan Ali: "[OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>Previous message:</strong> <a href="21323.php">Siegmar Gross: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21265.php">Siegmar Gross: "[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21328.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21328.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>thank you very much for your patch. I have applied the patch to
<br>
openmpi-1.6.4rc4.
<br>
<p><span class="quotelev2">&gt; &gt; thank you very much for your answer. I have compiled your program
</span><br>
<span class="quotelev2">&gt; &gt; and get different behaviours for openmpi-1.6.4rc3 and openmpi-1.9.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, something else seems to be going on for 1.9.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For 1.6, try the attached patch.  It works for me, but my machines
</span><br>
<span class="quotelev1">&gt; have flatter (less interesting) topology.  It'd be great if you 
</span><br>
<span class="quotelev1">&gt; could try
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    % mpirun --report-bindings --rankfile myrankfile ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with that check program I sent and with the following rankfiles:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=sunpc1 slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 0=sunpc1 slot=0:1
</span><br>
<span class="quotelev1">&gt; rank 0=sunpc1 slot=0:0-1
</span><br>
<span class="quotelev1">&gt; rank 0=sunpc1 slot=1:0
</span><br>
<span class="quotelev1">&gt; rank 0=sunpc1 slot=1:1
</span><br>
<span class="quotelev1">&gt; rank 0=sunpc1 slot=1:0-1
</span><br>
<span class="quotelev1">&gt; rank 0=sunpc1 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where each line represents a different rankfile.
</span><br>
<p>sunpc1 rankfiles 109 ompi_info | grep &quot;MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.4rc4r28022
<br>
sunpc1 rankfiles 110 cc check.c
<br>
sunpc1 rankfiles 111  mpirun --report-bindings --rankfile rf_0 ./a.out 
<br>
[sunpc1:18167] MCW rank 0 bound to socket 0[core 0]:
<br>
&nbsp;&nbsp;&nbsp;[B .][. .] (slot list 0:0)
<br>
bind to 0
<br>
sunpc1 rankfiles 112 mpirun --report-bindings --rankfile rf_1 ./a.out
<br>
[sunpc1:18170] MCW rank 0 bound to socket 0[core 1]:
<br>
&nbsp;&nbsp;&nbsp;[. B][. .] (slot list 0:1)
<br>
bind to 1
<br>
sunpc1 rankfiles 113 mpirun --report-bindings --rankfile rf_2 ./a.out
<br>
[sunpc1:18173] MCW rank 0 bound to socket 0[core 0-1]:
<br>
&nbsp;&nbsp;&nbsp;[B B][. .] (slot list 0:0-1)
<br>
unbound
<br>
sunpc1 rankfiles 114 mpirun --report-bindings --rankfile rf_3 ./a.out
<br>
[sunpc1:18176] MCW rank 0 bound to socket 1[core 0]:
<br>
&nbsp;&nbsp;&nbsp;[. .][B .] (slot list 1:0)
<br>
bind to 2
<br>
sunpc1 rankfiles 115 mpirun --report-bindings --rankfile rf_4 ./a.out
<br>
[sunpc1:18179] MCW rank 0 bound to socket 1[core 1]:
<br>
&nbsp;&nbsp;&nbsp;[. .][. B] (slot list 1:1)
<br>
bind to 3
<br>
sunpc1 rankfiles 116 mpirun --report-bindings --rankfile rf_5 ./a.out
<br>
[sunpc1:18182] MCW rank 0 bound to socket 1[core 0-1]:
<br>
&nbsp;&nbsp;&nbsp;[. .][B B] (slot list 1:0-1)
<br>
unbound
<br>
sunpc1 rankfiles 117 mpirun --report-bindings --rankfile rf_6 ./a.out
<br>
[sunpc1:18185] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
unbound
<br>
sunpc1 rankfiles 118 
<br>
<p><p>I get the following output for an unpatched openmpi-1.9.
<br>
<p>sunpc1 rankfiles 106 ompi_info | grep &quot;MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r28035
<br>
sunpc1 rankfiles 107 cc check.c
<br>
sunpc1 rankfiles 108 mpirun --report-bindings --rankfile rf_0 ./a.out
<br>
[sunpc1:18260] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
&nbsp;&nbsp;&nbsp;[B/.][./.]
<br>
bind to 0
<br>
sunpc1 rankfiles 109 mpirun --report-bindings --rankfile rf_1 ./a.out
<br>
[sunpc1:18263] MCW rank 0 bound to socket 0[core 0[hwt 0]],
<br>
&nbsp;&nbsp;&nbsp;socket 0[core 1[hwt 0]]: [B/B][./.]
<br>
unbound
<br>
sunpc1 rankfiles 110 mpirun --report-bindings --rankfile rf_2 ./a.out
<br>
[sunpc1:18266] MCW rank 0 bound to socket 0[core 0[hwt 0]],
<br>
&nbsp;&nbsp;&nbsp;socket 0[core 1[hwt 0]]: [B/B][./.]
<br>
unbound
<br>
sunpc1 rankfiles 111 mpirun --report-bindings --rankfile rf_3 ./a.out
<br>
[sunpc1:18269] MCW rank 0 bound to socket 1[core 2[hwt 0]],
<br>
&nbsp;&nbsp;&nbsp;socket 1[core 3[hwt 0]]: [./.][B/B]
<br>
unbound
<br>
sunpc1 rankfiles 112 mpirun --report-bindings --rankfile rf_4 ./a.out
<br>
[sunpc1:18272] MCW rank 0 bound to socket 1[core 3[hwt 0]]:
<br>
&nbsp;&nbsp;&nbsp;[./.][./B]
<br>
bind to 3
<br>
sunpc1 rankfiles 113 mpirun --report-bindings --rankfile rf_5 ./a.out
<br>
[sunpc1:18275] MCW rank 0 bound to socket 1[core 2[hwt 0]],
<br>
&nbsp;&nbsp;&nbsp;socket 1[core 3[hwt 0]]: [./.][B/B]
<br>
unbound
<br>
sunpc1 rankfiles 114 mpirun --report-bindings --rankfile rf_6 ./a.out
<br>
[sunpc1:18278] MCW rank 0 bound to socket 0[core 0[hwt 0]],
<br>
&nbsp;&nbsp;&nbsp;socket 0[core 1[hwt 0]]: [B/B][./.]
<br>
unbound
<br>
sunpc1 rankfiles 115 
<br>
<p><p>Thank you very much for any further help.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21325.php">Syed Ahsan Ali: "[OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>Previous message:</strong> <a href="21323.php">Siegmar Gross: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/01/21265.php">Siegmar Gross: "[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21328.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21328.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
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
