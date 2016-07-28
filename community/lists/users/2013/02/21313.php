<?
$subject_val = "Re: [OMPI users] I have still a problem with rankfiles inopenmpi-1.6.4rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 07:52:53 2013" -->
<!-- isoreceived="20130206125253" -->
<!-- sent="Wed, 6 Feb 2013 13:46:00 +0100 (CET)" -->
<!-- isosent="20130206124600" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I have still a problem with rankfiles inopenmpi-1.6.4rc3" -->
<!-- id="201302061246.r16Ck0Z8023269_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] I have still a problem with rankfiles inopenmpi-1.6.4rc3" -->
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
<strong>Subject:</strong> Re: [OMPI users] I have still a problem with rankfiles inopenmpi-1.6.4rc3<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-06 07:46:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21314.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21312.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21319.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles	inopenmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21319.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles	inopenmpi-1.6.4rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p><span class="quotelev1">&gt; We've been talking about this offline.  Can you send us an lstopo
</span><br>
<span class="quotelev1">&gt; output from your Solaris machine?  Send us the text output and
</span><br>
<span class="quotelev1">&gt; the xml output, e.g.:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lstopo &gt; solaris.txt
</span><br>
<span class="quotelev1">&gt; lstopo solaris.xml
</span><br>
<p>I have installed hwloc-1.3.2 and hwloc-1.6.1 and get the following
<br>
output (it's the same for both versions in the text file, but has
<br>
different xml files).
<br>
<p><p>sunpc1 bin 121 lstopo --version
<br>
lstopo 1.3.2
<br>
sunpc1 bin 122 lstopo 
<br>
Machine (8191MB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#1 4095MB) + Socket L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#1 + PU L#1 (P#1)
<br>
&nbsp;&nbsp;NUMANode L#1 (P#2 4096MB) + Socket L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#3 + PU L#3 (P#3)
<br>
<p>sunpc1 bin 123 cd ../../hwloc-1.6.1/bin/
<br>
sunpc1 bin 124 lstopo --version
<br>
lstopo 1.6.1
<br>
sunpc1 bin 125 lstopo
<br>
Machine (8191MB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#1 4095MB) + Socket L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#1 + PU L#1 (P#1)
<br>
&nbsp;&nbsp;NUMANode L#1 (P#2 4096MB) + Socket L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#3 + PU L#3 (P#3)
<br>
sunpc1 bin 126 
<br>
<p><p>I have attached the requested files.
<br>
<p>sunpc1 bin 144 lstopo --version
<br>
lstopo 1.3.2
<br>
sunpc1 bin 145 lstopo &gt; /tmp/sunpc1-hwloc-1.3.2.txt
<br>
sunpc1 bin 146 lstopo --of xml &gt; /tmp/sunpc1-hwloc-1.3.2.xml
<br>
sunpc1 bin 147 cd ../../hwloc-1.6.1/bin/
<br>
sunpc1 bin 148 lstopo --version
<br>
lstopo 1.6.1
<br>
sunpc1 bin 149 lstopo &gt; /tmp/sunpc1-hwloc-1.6.1.txt
<br>
sunpc1 bin 150 lstopo --of xml &gt; /tmp/sunpc1-hwloc-1.6.1.xml
<br>
<p><p>Thank you very much for your help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><p><span class="quotelev1">&gt; On Feb 5, 2013, at 12:30 AM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; now I can use all our machines once more. I have a problem on
</span><br>
<span class="quotelev2">&gt; &gt; Solaris 10 x86_64, because the mapping of processes doesn't
</span><br>
<span class="quotelev2">&gt; &gt; correspond to the rankfile. I removed the output from &quot;hostfile&quot;
</span><br>
<span class="quotelev2">&gt; &gt; and wrapped around long lines.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr rankfiles 114 cat rf_ex_sunpc
</span><br>
<span class="quotelev2">&gt; &gt; # mpiexec -report-bindings -rf rf_ex_sunpc hostname
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=sunpc0 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev2">&gt; &gt; rank 1=sunpc1 slot=0:0-1
</span><br>
<span class="quotelev2">&gt; &gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev2">&gt; &gt; rank 3=sunpc1 slot=1:1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr rankfiles 115 mpiexec -report-bindings -rf rf_ex_sunpc hostname
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc0:17920] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev2">&gt; &gt;  socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:11265] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev2">&gt; &gt;  [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:11265] MCW rank 2 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev2">&gt; &gt;  socket 1[core 0-1]: [B B][B B] (slot list 1:0)
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:11265] MCW rank 3 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev2">&gt; &gt;  socket 1[core 0-1]: [B B][B B] (slot list 1:1)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can I provide any information to solve this problem? My
</span><br>
<span class="quotelev2">&gt; &gt; rankfile works as expected, if I use only Linux machines.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hmmm....well, it certainly works for me:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [rhc_at_odin ~/v1.6]$ cat rf
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rank 0=odin093 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rank 1=odin094 slot=0:0-1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rank 2=odin094 slot=1:0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rank 3=odin094 slot=1:1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [rhc_at_odin ~/v1.6]$ mpirun -n 4 -rf ./rf --report-bindings
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -mca opal_paffinity_alone 0 hostname
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [odin093.cs.indiana.edu:04617] MCW rank 0 bound to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  socket 0[core 0-1] socket 1[core 0-1]: [B B][B B] (slot list 
</span><br>
<span class="quotelev2">&gt; &gt; 0:0-1,1:0-1)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; odin093.cs.indiana.edu
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; odin094.cs.indiana.edu
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [odin094.cs.indiana.edu:04426] MCW rank 1 bound to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  socket 0[core 0-1]: [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; odin094.cs.indiana.edu
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [odin094.cs.indiana.edu:04426] MCW rank 2 bound to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  socket 1[core 0]: [. .][B .] (slot list 1:0)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [odin094.cs.indiana.edu:04426] MCW rank 3 bound to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  socket 1[core 1]: [. .][. B] (slot list 1:1)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; odin094.cs.indiana.edu
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Interesting that it works on your machines.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I see one thing of concern to me in your output - your second node
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; appears to be a Sun computer. Is it the same physical architecture?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is it also running Linux? Are you sure it is using the same version
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; of OMPI, built for that environment and hardware?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Both machines (in fact all four machines: sunpc0, sunpc1, linpc0, and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc1) use the same hardware. &quot;linpc&quot; uses openSUSE 12.1 and &quot;sunpc&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Solaris 10 x86_64. All machines use the same version of Open MPI,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; built for that environment. At the moment I can only use sunpc1 and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linpc1 (&quot;my&quot; developer machines). Next week I will have access to all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; machines so that I can test, if I get a different behaviour when I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; use two machines with the same operating system (although mixed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; operating systems weren't a problem in the past (only machines with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; differnt endians)). I let you know my results.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jan 30, 2013, at 2:08 AM, Siegmar Gross 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I applied your patch &quot;rmaps.diff&quot; to openmpi-1.6.4rc3r27923 and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; it works for my previous rankfile.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; #3493: Handle the case where rankfile provides the allocation
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -----------------------------------+----------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Reporter:  rhc                     |      Owner:  jsquyres
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   Type:  changeset move request  |     Status:  new
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Priority:  critical                |  Milestone:  Open MPI 1.6.4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Version:  trunk                   |   Keywords:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -----------------------------------+----------------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Please apply the attached patch that corrects the rmaps function for
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; obtaining the available nodes when rankfile is providing the 
</span><br>
<span class="quotelev2">&gt; &gt; allocation.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; tyr rankfiles 129 more rf_linpc1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; # mpiexec -report-bindings -rf rf_linpc1 hostname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; rank 0=linpc1 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; tyr rankfiles 130 mpiexec -report-bindings -rf rf_linpc1 hostname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [linpc1:31603] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Unfortunately I don't get the expected result for the following
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; rankfile.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; tyr rankfiles 114 more rf_bsp 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; # mpiexec -report-bindings -rf rf_bsp hostname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; rank 0=linpc1 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; rank 1=sunpc1 slot=0:0-1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; rank 3=sunpc1 slot=1:1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I would expect that rank 0 gets all four cores from linpc1, rank 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; both cores of socket 0 from sunpc1, rank 2 core 0 of socket 1, and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; rank 3 core 1 of socket 1 from sunpc1. Everything is fine for my
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; processes with rank 0 and 1, but it's wrong for ranks 2 and 3,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; because they both get all four cores of sunpc1. Is something wrong
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; with my rankfile or with your mapping of processes to cores? I have
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; removed the output from &quot;hostname&quot; and wrapped long lines.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; tyr rankfiles 115 mpiexec -report-bindings -rf rf_bsp hostname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [linpc1:31092] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 
</span><br>
<span class="quotelev2">&gt; &gt; 0-1]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [sunpc1:12916] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [sunpc1:12916] MCW rank 2 bound to socket 0[core 0-1] socket 1[core 
</span><br>
<span class="quotelev2">&gt; &gt; 0-1]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [B B][B B] (slot list 1:0)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [sunpc1:12916] MCW rank 3 bound to socket 0[core 0-1] socket 1[core 
</span><br>
<span class="quotelev2">&gt; &gt; 0-1]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [B B][B B] (slot list 1:1)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I get the following output, if I add the options which you mentioned
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; in a previous email.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; tyr rankfiles 124 mpiexec -report-bindings -rf rf_bsp \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -display-allocation -mca ras_base_verbose 5 hostname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] mca:base:select:(  ras)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Querying component [cm]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] mca:base:select:(  ras)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Skipping component [cm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] mca:base:select:(  ras)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; No component selected!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; nothing found in module - proceeding to hostfile
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; parsing default hostfile
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  /usr/local/openmpi-1.6.4_64_cc/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0] ras:base:allocate
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; nothing found in hostfiles or dash-host - checking for rankfile
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ras:base:node_insert inserting 2 nodes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ras:base:node_insert node linpc1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:19401] [[27101,0],0]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ras:base:node_insert node sunpc1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Data for node: tyr.informatik.hs-fulda.de  Num slots: 0  Max slots: 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Data for node: linpc1  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Data for node: sunpc1  Num slots: 3    Max slots: 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [linpc1:31532] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 
</span><br>
<span class="quotelev2">&gt; &gt; 0-1]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [sunpc1:13136] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [sunpc1:13136] MCW rank 2 bound to socket 0[core 0-1] socket 1[core 
</span><br>
<span class="quotelev2">&gt; &gt; 0-1]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [B B][B B] (slot list 1:0)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [sunpc1:13136] MCW rank 3 bound to socket 0[core 0-1] socket 1[core 
</span><br>
<span class="quotelev2">&gt; &gt; 0-1]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [B B][B B] (slot list 1:1)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thank you very much for any suggestions and any help in advance.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: 
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>
<p>
Machine (8191MB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#1 4095MB) + Socket L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#1 + PU L#1 (P#1)
<br>
&nbsp;&nbsp;NUMANode L#1 (P#2 4096MB) + Socket L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#3 + PU L#3 (P#3)
<br>
<p>
<br><p>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
<br>
&lt;!DOCTYPE topology SYSTEM &quot;hwloc.dtd&quot;&gt;
<br>
&lt;topology&gt;
<br>
&nbsp;&nbsp;&lt;object type=&quot;Machine&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x0000000f&quot; complete_cpuset=&quot;0x0000000f&quot; online_cpuset=&quot;0x0000000f&quot; allowed_cpuset=&quot;0x0000000f&quot; nodeset=&quot;0x00000006&quot; complete_nodeset=&quot;0x00000006&quot; allowed_nodeset=&quot;0x00000006&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSName&quot; value=&quot;SunOS&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSRelease&quot; value=&quot;5.10&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSVersion&quot; value=&quot;Generic_147441-21&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;HostName&quot; value=&quot;sunpc1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Architecture&quot; value=&quot;i86pc&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000003&quot; complete_cpuset=&quot;0x00000003&quot; online_cpuset=&quot;0x00000003&quot; allowed_cpuset=&quot;0x00000003&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; local_memory=&quot;4293435392&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000003&quot; complete_cpuset=&quot;0x00000003&quot; online_cpuset=&quot;0x00000003&quot; allowed_cpuset=&quot;0x00000003&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;2&quot; cpuset=&quot;0x0000000c&quot; complete_cpuset=&quot;0x0000000c&quot; online_cpuset=&quot;0x0000000c&quot; allowed_cpuset=&quot;0x0000000c&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot; local_memory=&quot;4294967296&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpuset=&quot;0x0000000c&quot; complete_cpuset=&quot;0x0000000c&quot; online_cpuset=&quot;0x0000000c&quot; allowed_cpuset=&quot;0x0000000c&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;2&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;2&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_level=&quot;-1&quot; os_index=&quot;3&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_level=&quot;-1&quot; os_index=&quot;3&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&lt;/object&gt;
<br>
&lt;/topology&gt;
<br>
<p>
<p>
Machine (8191MB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#1 4095MB) + Socket L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#1 + PU L#1 (P#1)
<br>
&nbsp;&nbsp;NUMANode L#1 (P#2 4096MB) + Socket L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#3 + PU L#3 (P#3)
<br>
<p>
<br><p>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
<br>
&lt;!DOCTYPE topology SYSTEM &quot;hwloc.dtd&quot;&gt;
<br>
&lt;topology&gt;
<br>
&nbsp;&nbsp;&lt;object type=&quot;Machine&quot; os_index=&quot;0&quot; cpuset=&quot;0x0000000f&quot; complete_cpuset=&quot;0x0000000f&quot; online_cpuset=&quot;0x0000000f&quot; allowed_cpuset=&quot;0x0000000f&quot; nodeset=&quot;0x00000006&quot; complete_nodeset=&quot;0x00000006&quot; allowed_nodeset=&quot;0x00000006&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Backend&quot; value=&quot;Solaris&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSName&quot; value=&quot;SunOS&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSRelease&quot; value=&quot;5.10&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSVersion&quot; value=&quot;Generic_147441-21&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;HostName&quot; value=&quot;sunpc1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Architecture&quot; value=&quot;i86pc&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000003&quot; complete_cpuset=&quot;0x00000003&quot; online_cpuset=&quot;0x00000003&quot; allowed_cpuset=&quot;0x00000003&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; local_memory=&quot;4293435392&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000003&quot; complete_cpuset=&quot;0x00000003&quot; online_cpuset=&quot;0x00000003&quot; allowed_cpuset=&quot;0x00000003&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUType&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Dual Core AMD Opteron(tm) Processor 280&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;2&quot; cpuset=&quot;0x0000000c&quot; complete_cpuset=&quot;0x0000000c&quot; online_cpuset=&quot;0x0000000c&quot; allowed_cpuset=&quot;0x0000000c&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot; local_memory=&quot;4294967296&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;1&quot; cpuset=&quot;0x0000000c&quot; complete_cpuset=&quot;0x0000000c&quot; online_cpuset=&quot;0x0000000c&quot; allowed_cpuset=&quot;0x0000000c&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUType&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Dual Core AMD Opteron(tm) Processor 280&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;2&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;2&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;3&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;3&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&lt;/object&gt;
<br>
&lt;/topology&gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21314.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21312.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21319.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles	inopenmpi-1.6.4rc3"</a>
<li><strong>Reply:</strong> <a href="21319.php">Jeff Squyres (jsquyres): "Re: [OMPI users] I have still a problem with rankfiles	inopenmpi-1.6.4rc3"</a>
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
