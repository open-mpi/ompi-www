<?
$subject_val = "[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 08:34:36 2013" -->
<!-- isoreceived="20130130133436" -->
<!-- sent="Wed, 30 Jan 2013 11:08:12 +0100 (CET)" -->
<!-- isosent="20130130100812" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3" -->
<!-- id="201301301009.r0UA8Cat019441_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 05:08:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21266.php">Constantinos Makassikis: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Previous message:</strong> <a href="21264.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21268.php">Ralph Castain: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21268.php">Ralph Castain: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Maybe reply:</strong> <a href="21276.php">Ralph Castain: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21297.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21312.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21324.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21332.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I applied your patch &quot;rmaps.diff&quot; to openmpi-1.6.4rc3r27923 and
<br>
it works for my previous rankfile.
<br>
<p><p><span class="quotelev1">&gt; #3493: Handle the case where rankfile provides the allocation
</span><br>
<span class="quotelev1">&gt; -----------------------------------+----------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  rhc                     |      Owner:  jsquyres
</span><br>
<span class="quotelev1">&gt;     Type:  changeset move request  |     Status:  new
</span><br>
<span class="quotelev1">&gt; Priority:  critical                |  Milestone:  Open MPI 1.6.4
</span><br>
<span class="quotelev1">&gt;  Version:  trunk                   |   Keywords:
</span><br>
<span class="quotelev1">&gt; -----------------------------------+----------------------------
</span><br>
<span class="quotelev1">&gt;  Please apply the attached patch that corrects the rmaps function for
</span><br>
<span class="quotelev1">&gt;  obtaining the available nodes when rankfile is providing the allocation.
</span><br>
<p><p>tyr rankfiles 129 more rf_linpc1
<br>
# mpiexec -report-bindings -rf rf_linpc1 hostname
<br>
rank 0=linpc1 slot=0:0-1,1:0-1
<br>
<p>tyr rankfiles 130 mpiexec -report-bindings -rf rf_linpc1 hostname
<br>
[linpc1:31603] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
<p><p><p>Unfortunately I don't get the expected result for the following
<br>
rankfile.
<br>
<p>tyr rankfiles 114 more rf_bsp 
<br>
# mpiexec -report-bindings -rf rf_bsp hostname
<br>
rank 0=linpc1 slot=0:0-1,1:0-1
<br>
rank 1=sunpc1 slot=0:0-1
<br>
rank 2=sunpc1 slot=1:0
<br>
rank 3=sunpc1 slot=1:1
<br>
<p>I would expect that rank 0 gets all four cores from linpc1, rank 1
<br>
both cores of socket 0 from sunpc1, rank 2 core 0 of socket 1, and
<br>
rank 3 core 1 of socket 1 from sunpc1. Everything is fine for my
<br>
processes with rank 0 and 1, but it's wrong for ranks 2 and 3,
<br>
because they both get all four cores of sunpc1. Is something wrong
<br>
with my rankfile or with your mapping of processes to cores? I have
<br>
removed the output from &quot;hostname&quot; and wrapped long lines.
<br>
<p>tyr rankfiles 115 mpiexec -report-bindings -rf rf_bsp hostname
<br>
[linpc1:31092] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]:
<br>
&nbsp;&nbsp;[B B][B B] (slot list 0:0-1,1:0-1)
<br>
[sunpc1:12916] MCW rank 1 bound to socket 0[core 0-1]:
<br>
&nbsp;&nbsp;[B B][. .] (slot list 0:0-1)
<br>
[sunpc1:12916] MCW rank 2 bound to socket 0[core 0-1] socket 1[core 0-1]:
<br>
&nbsp;&nbsp;[B B][B B] (slot list 1:0)
<br>
[sunpc1:12916] MCW rank 3 bound to socket 0[core 0-1] socket 1[core 0-1]:
<br>
&nbsp;&nbsp;[B B][B B] (slot list 1:1)
<br>
<p><p>I get the following output, if I add the options which you mentioned
<br>
in a previous email.
<br>
<p>tyr rankfiles 124 mpiexec -report-bindings -rf rf_bsp \
<br>
&nbsp;&nbsp;-display-allocation -mca ras_base_verbose 5 hostname
<br>
[tyr.informatik.hs-fulda.de:19401] mca:base:select:(  ras)
<br>
&nbsp;&nbsp;Querying component [cm]
<br>
[tyr.informatik.hs-fulda.de:19401] mca:base:select:(  ras)
<br>
&nbsp;&nbsp;Skipping component [cm]. Query failed to return a module
<br>
[tyr.informatik.hs-fulda.de:19401] mca:base:select:(  ras)
<br>
&nbsp;&nbsp;No component selected!
<br>
[tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
<br>
[tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
<br>
&nbsp;&nbsp;nothing found in module - proceeding to hostfile
<br>
[tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
<br>
&nbsp;&nbsp;parsing default hostfile
<br>
&nbsp;&nbsp;&nbsp;/usr/local/openmpi-1.6.4_64_cc/etc/openmpi-default-hostfile
<br>
[tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
<br>
&nbsp;&nbsp;nothing found in hostfiles or dash-host - checking for rankfile
<br>
[tyr.informatik.hs-fulda.de:19401] [[27101,0],0]
<br>
&nbsp;&nbsp;ras:base:node_insert inserting 2 nodes
<br>
[tyr.informatik.hs-fulda.de:19401] [[27101,0],0]
<br>
&nbsp;&nbsp;ras:base:node_insert node linpc1
<br>
[tyr.informatik.hs-fulda.de:19401] [[27101,0],0]
<br>
&nbsp;&nbsp;ras:base:node_insert node sunpc1
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: tyr.informatik.hs-fulda.de  Num slots: 0  Max slots: 0
<br>
&nbsp;Data for node: linpc1  Num slots: 1    Max slots: 0
<br>
&nbsp;Data for node: sunpc1  Num slots: 3    Max slots: 0
<br>
<p>=================================================================
<br>
[linpc1:31532] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]:
<br>
&nbsp;&nbsp;[B B][B B] (slot list 0:0-1,1:0-1)
<br>
[sunpc1:13136] MCW rank 1 bound to socket 0[core 0-1]:
<br>
&nbsp;&nbsp;[B B][. .] (slot list 0:0-1)
<br>
[sunpc1:13136] MCW rank 2 bound to socket 0[core 0-1] socket 1[core 0-1]:
<br>
&nbsp;&nbsp;[B B][B B] (slot list 1:0)
<br>
[sunpc1:13136] MCW rank 3 bound to socket 0[core 0-1] socket 1[core 0-1]:
<br>
&nbsp;&nbsp;[B B][B B] (slot list 1:1)
<br>
<p><p>Thank you very much for any suggestions and any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21266.php">Constantinos Makassikis: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Previous message:</strong> <a href="21264.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21268.php">Ralph Castain: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21268.php">Ralph Castain: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Maybe reply:</strong> <a href="21276.php">Ralph Castain: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21297.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21312.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21324.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/02/21332.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
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
