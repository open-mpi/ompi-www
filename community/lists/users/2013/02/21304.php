<?
$subject_val = "Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 11:14:15 2013" -->
<!-- isoreceived="20130205161415" -->
<!-- sent="Tue, 5 Feb 2013 16:14:09 +0000" -->
<!-- isosent="20130205161409" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC7166_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201302050830.r158UYII010110_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] I have still a problem with rankfiles in	openmpi-1.6.4rc3<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 11:14:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21305.php">John Hearns: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21303.php">Josh Hursey: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>In reply to:</strong> <a href="21297.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21307.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar --
<br>
<p>We've been talking about this offline.  Can you send us an lstopo output from your Solaris machine?  Send us the text output and the xml output, e.g.:
<br>
<p>lstopo &gt; solaris.txt
<br>
lstopo solaris.xml
<br>
<p>Thanks!
<br>
<p><p>On Feb 5, 2013, at 12:30 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; now I can use all our machines once more. I have a problem on
</span><br>
<span class="quotelev1">&gt; Solaris 10 x86_64, because the mapping of processes doesn't
</span><br>
<span class="quotelev1">&gt; correspond to the rankfile. I removed the output from &quot;hostfile&quot;
</span><br>
<span class="quotelev1">&gt; and wrapped around long lines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 114 cat rf_ex_sunpc
</span><br>
<span class="quotelev1">&gt; # mpiexec -report-bindings -rf rf_ex_sunpc hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=sunpc0 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; rank 1=sunpc1 slot=0:0-1
</span><br>
<span class="quotelev1">&gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev1">&gt; rank 3=sunpc1 slot=1:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 115 mpiexec -report-bindings -rf rf_ex_sunpc hostname
</span><br>
<span class="quotelev1">&gt; [sunpc0:17920] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev1">&gt;  socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev1">&gt; [sunpc1:11265] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev1">&gt; [sunpc1:11265] MCW rank 2 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev1">&gt;  socket 1[core 0-1]: [B B][B B] (slot list 1:0)
</span><br>
<span class="quotelev1">&gt; [sunpc1:11265] MCW rank 3 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev1">&gt;  socket 1[core 0-1]: [B B][B B] (slot list 1:1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can I provide any information to solve this problem? My
</span><br>
<span class="quotelev1">&gt; rankfile works as expected, if I use only Linux machines.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm....well, it certainly works for me:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rhc_at_odin ~/v1.6]$ cat rf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=odin093 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=odin094 slot=0:0-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 2=odin094 slot=1:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 3=odin094 slot=1:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rhc_at_odin ~/v1.6]$ mpirun -n 4 -rf ./rf --report-bindings
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca opal_paffinity_alone 0 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [odin093.cs.indiana.edu:04617] MCW rank 0 bound to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  socket 0[core 0-1] socket 1[core 0-1]: [B B][B B] (slot list 
</span><br>
<span class="quotelev1">&gt; 0:0-1,1:0-1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odin093.cs.indiana.edu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odin094.cs.indiana.edu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [odin094.cs.indiana.edu:04426] MCW rank 1 bound to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  socket 0[core 0-1]: [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odin094.cs.indiana.edu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [odin094.cs.indiana.edu:04426] MCW rank 2 bound to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  socket 1[core 0]: [. .][B .] (slot list 1:0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [odin094.cs.indiana.edu:04426] MCW rank 3 bound to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  socket 1[core 1]: [. .][. B] (slot list 1:1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odin094.cs.indiana.edu
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Interesting that it works on your machines.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see one thing of concern to me in your output - your second node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appears to be a Sun computer. Is it the same physical architecture?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it also running Linux? Are you sure it is using the same version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of OMPI, built for that environment and hardware?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Both machines (in fact all four machines: sunpc0, sunpc1, linpc0, and
</span><br>
<span class="quotelev2">&gt;&gt; linpc1) use the same hardware. &quot;linpc&quot; uses openSUSE 12.1 and &quot;sunpc&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Solaris 10 x86_64. All machines use the same version of Open MPI,
</span><br>
<span class="quotelev2">&gt;&gt; built for that environment. At the moment I can only use sunpc1 and
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 (&quot;my&quot; developer machines). Next week I will have access to all
</span><br>
<span class="quotelev2">&gt;&gt; machines so that I can test, if I get a different behaviour when I
</span><br>
<span class="quotelev2">&gt;&gt; use two machines with the same operating system (although mixed
</span><br>
<span class="quotelev2">&gt;&gt; operating systems weren't a problem in the past (only machines with
</span><br>
<span class="quotelev2">&gt;&gt; differnt endians)). I let you know my results.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 30, 2013, at 2:08 AM, Siegmar Gross 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I applied your patch &quot;rmaps.diff&quot; to openmpi-1.6.4rc3r27923 and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it works for my previous rankfile.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #3493: Handle the case where rankfile provides the allocation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------------------------+----------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Reporter:  rhc                     |      Owner:  jsquyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Type:  changeset move request  |     Status:  new
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Priority:  critical                |  Milestone:  Open MPI 1.6.4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Version:  trunk                   |   Keywords:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------------------------+----------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please apply the attached patch that corrects the rmaps function for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; obtaining the available nodes when rankfile is providing the 
</span><br>
<span class="quotelev1">&gt; allocation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr rankfiles 129 more rf_linpc1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # mpiexec -report-bindings -rf rf_linpc1 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 0=linpc1 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr rankfiles 130 mpiexec -report-bindings -rf rf_linpc1 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:31603] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately I don't get the expected result for the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rankfile.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr rankfiles 114 more rf_bsp 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # mpiexec -report-bindings -rf rf_bsp hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 0=linpc1 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 1=sunpc1 slot=0:0-1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 3=sunpc1 slot=1:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would expect that rank 0 gets all four cores from linpc1, rank 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; both cores of socket 0 from sunpc1, rank 2 core 0 of socket 1, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 3 core 1 of socket 1 from sunpc1. Everything is fine for my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes with rank 0 and 1, but it's wrong for ranks 2 and 3,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because they both get all four cores of sunpc1. Is something wrong
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with my rankfile or with your mapping of processes to cores? I have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; removed the output from &quot;hostname&quot; and wrapped long lines.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr rankfiles 115 mpiexec -report-bindings -rf rf_bsp hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:31092] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 
</span><br>
<span class="quotelev1">&gt; 0-1]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:12916] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:12916] MCW rank 2 bound to socket 0[core 0-1] socket 1[core 
</span><br>
<span class="quotelev1">&gt; 0-1]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [B B][B B] (slot list 1:0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:12916] MCW rank 3 bound to socket 0[core 0-1] socket 1[core 
</span><br>
<span class="quotelev1">&gt; 0-1]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [B B][B B] (slot list 1:1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get the following output, if I add the options which you mentioned
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in a previous email.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tyr rankfiles 124 mpiexec -report-bindings -rf rf_bsp \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -display-allocation -mca ras_base_verbose 5 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] mca:base:select:(  ras)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Querying component [cm]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] mca:base:select:(  ras)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Skipping component [cm]. Query failed to return a module
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] mca:base:select:(  ras)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No component selected!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nothing found in module - proceeding to hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parsing default hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /usr/local/openmpi-1.6.4_64_cc/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nothing found in hostfiles or dash-host - checking for rankfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ras:base:node_insert inserting 2 nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ras:base:node_insert node linpc1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ras:base:node_insert node sunpc1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: tyr.informatik.hs-fulda.de  Num slots: 0  Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: linpc1  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: sunpc1  Num slots: 3    Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [linpc1:31532] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 
</span><br>
<span class="quotelev1">&gt; 0-1]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:13136] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:13136] MCW rank 2 bound to socket 0[core 0-1] socket 1[core 
</span><br>
<span class="quotelev1">&gt; 0-1]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [B B][B B] (slot list 1:0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sunpc1:13136] MCW rank 3 bound to socket 0[core 0-1] socket 1[core 
</span><br>
<span class="quotelev1">&gt; 0-1]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [B B][B B] (slot list 1:1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you very much for any suggestions and any help in advance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21305.php">John Hearns: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21303.php">Josh Hursey: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>In reply to:</strong> <a href="21297.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21307.php">Eugene Loh: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
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
