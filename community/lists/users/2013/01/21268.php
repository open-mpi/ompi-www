<?
$subject_val = "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 13:21:04 2013" -->
<!-- isoreceived="20130130182104" -->
<!-- sent="Wed, 30 Jan 2013 10:20:57 -0800" -->
<!-- isosent="20130130182057" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3" -->
<!-- id="C3D2B6F4-C31C-4382-9C0C-E2C0B561C807_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201301301009.r0UA8Cat019441_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 13:20:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21269.php">Siegmar Gross: "[OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Previous message:</strong> <a href="21267.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>In reply to:</strong> <a href="21265.php">Siegmar Gross: "[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21276.php">Ralph Castain: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....well, it certainly works for me:
<br>
<p>[rhc_at_odin ~/v1.6]$ cat rf
<br>
rank 0=odin093 slot=0:0-1,1:0-1
<br>
rank 1=odin094 slot=0:0-1
<br>
rank 2=odin094 slot=1:0
<br>
rank 3=odin094 slot=1:1
<br>
<p><p>[rhc_at_odin ~/v1.6]$ mpirun -n 4 -rf ./rf --report-bindings -mca opal_paffinity_alone 0 hostname
<br>
[odin093.cs.indiana.edu:04617] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
odin093.cs.indiana.edu
<br>
odin094.cs.indiana.edu
<br>
[odin094.cs.indiana.edu:04426] MCW rank 1 bound to socket 0[core 0-1]: [B B][. .] (slot list 0:0-1)
<br>
odin094.cs.indiana.edu
<br>
[odin094.cs.indiana.edu:04426] MCW rank 2 bound to socket 1[core 0]: [. .][B .] (slot list 1:0)
<br>
[odin094.cs.indiana.edu:04426] MCW rank 3 bound to socket 1[core 1]: [. .][. B] (slot list 1:1)
<br>
odin094.cs.indiana.edu
<br>
<p>I see one thing of concern to me in your output - your second node appears to be a Sun computer. Is it the same physical architecture? Is it also running Linux? Are you sure it is using the same version of OMPI, built for that environment and hardware?
<br>
<p><p>On Jan 30, 2013, at 2:08 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I applied your patch &quot;rmaps.diff&quot; to openmpi-1.6.4rc3r27923 and
</span><br>
<span class="quotelev1">&gt; it works for my previous rankfile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #3493: Handle the case where rankfile provides the allocation
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------+----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Reporter:  rhc                     |      Owner:  jsquyres
</span><br>
<span class="quotelev2">&gt;&gt;    Type:  changeset move request  |     Status:  new
</span><br>
<span class="quotelev2">&gt;&gt; Priority:  critical                |  Milestone:  Open MPI 1.6.4
</span><br>
<span class="quotelev2">&gt;&gt; Version:  trunk                   |   Keywords:
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------+----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Please apply the attached patch that corrects the rmaps function for
</span><br>
<span class="quotelev2">&gt;&gt; obtaining the available nodes when rankfile is providing the allocation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 129 more rf_linpc1
</span><br>
<span class="quotelev1">&gt; # mpiexec -report-bindings -rf rf_linpc1 hostname
</span><br>
<span class="quotelev1">&gt; rank 0=linpc1 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 130 mpiexec -report-bindings -rf rf_linpc1 hostname
</span><br>
<span class="quotelev1">&gt; [linpc1:31603] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev1">&gt;  socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately I don't get the expected result for the following
</span><br>
<span class="quotelev1">&gt; rankfile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 114 more rf_bsp 
</span><br>
<span class="quotelev1">&gt; # mpiexec -report-bindings -rf rf_bsp hostname
</span><br>
<span class="quotelev1">&gt; rank 0=linpc1 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; rank 1=sunpc1 slot=0:0-1
</span><br>
<span class="quotelev1">&gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev1">&gt; rank 3=sunpc1 slot=1:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would expect that rank 0 gets all four cores from linpc1, rank 1
</span><br>
<span class="quotelev1">&gt; both cores of socket 0 from sunpc1, rank 2 core 0 of socket 1, and
</span><br>
<span class="quotelev1">&gt; rank 3 core 1 of socket 1 from sunpc1. Everything is fine for my
</span><br>
<span class="quotelev1">&gt; processes with rank 0 and 1, but it's wrong for ranks 2 and 3,
</span><br>
<span class="quotelev1">&gt; because they both get all four cores of sunpc1. Is something wrong
</span><br>
<span class="quotelev1">&gt; with my rankfile or with your mapping of processes to cores? I have
</span><br>
<span class="quotelev1">&gt; removed the output from &quot;hostname&quot; and wrapped long lines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 115 mpiexec -report-bindings -rf rf_bsp hostname
</span><br>
<span class="quotelev1">&gt; [linpc1:31092] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev1">&gt; [sunpc1:12916] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev1">&gt; [sunpc1:12916] MCW rank 2 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][B B] (slot list 1:0)
</span><br>
<span class="quotelev1">&gt; [sunpc1:12916] MCW rank 3 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][B B] (slot list 1:1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following output, if I add the options which you mentioned
</span><br>
<span class="quotelev1">&gt; in a previous email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 124 mpiexec -report-bindings -rf rf_bsp \
</span><br>
<span class="quotelev1">&gt;  -display-allocation -mca ras_base_verbose 5 hostname
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:19401] mca:base:select:(  ras)
</span><br>
<span class="quotelev1">&gt;  Querying component [cm]
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:19401] mca:base:select:(  ras)
</span><br>
<span class="quotelev1">&gt;  Skipping component [cm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:19401] mca:base:select:(  ras)
</span><br>
<span class="quotelev1">&gt;  No component selected!
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev1">&gt;  nothing found in module - proceeding to hostfile
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev1">&gt;  parsing default hostfile
</span><br>
<span class="quotelev1">&gt;   /usr/local/openmpi-1.6.4_64_cc/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev1">&gt;  nothing found in hostfiles or dash-host - checking for rankfile
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0]
</span><br>
<span class="quotelev1">&gt;  ras:base:node_insert inserting 2 nodes
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0]
</span><br>
<span class="quotelev1">&gt;  ras:base:node_insert node linpc1
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0]
</span><br>
<span class="quotelev1">&gt;  ras:base:node_insert node sunpc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: tyr.informatik.hs-fulda.de  Num slots: 0  Max slots: 0
</span><br>
<span class="quotelev1">&gt; Data for node: linpc1  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev1">&gt; Data for node: sunpc1  Num slots: 3    Max slots: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; [linpc1:31532] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev1">&gt; [sunpc1:13136] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev1">&gt; [sunpc1:13136] MCW rank 2 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][B B] (slot list 1:0)
</span><br>
<span class="quotelev1">&gt; [sunpc1:13136] MCW rank 3 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][B B] (slot list 1:1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for any suggestions and any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21269.php">Siegmar Gross: "[OMPI users] problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Previous message:</strong> <a href="21267.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>In reply to:</strong> <a href="21265.php">Siegmar Gross: "[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21276.php">Ralph Castain: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
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
