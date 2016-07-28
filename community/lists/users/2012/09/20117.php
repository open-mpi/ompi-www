<?
$subject_val = "Re: [OMPI users] problem with rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  4 01:44:16 2012" -->
<!-- isoreceived="20120904054416" -->
<!-- sent="Tue, 4 Sep 2012 07:37:14 +0200 (CEST)" -->
<!-- isosent="20120904053714" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with rankfile" -->
<!-- id="201209040537.q845bESg002770_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problem with rankfile" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with rankfile<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-04 01:37:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20118.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>Previous message:</strong> <a href="20116.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Maybe in reply to:</strong> <a href="20102.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20128.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; Are *all* the machines Sparc? Or just the 3rd one (rs0)?
</span><br>
<p>Yes, both machines are Sparc. I tried first in a homogeneous
<br>
environment.
<br>
<p>tyr fd1026 106 psrinfo -v
<br>
Status of virtual processor 0 as of: 09/04/2012 07:32:14
<br>
&nbsp;&nbsp;on-line since 08/31/2012 15:44:42.
<br>
&nbsp;&nbsp;The sparcv9 processor operates at 1600 MHz,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and has a sparcv9 floating point processor.
<br>
Status of virtual processor 1 as of: 09/04/2012 07:32:14
<br>
&nbsp;&nbsp;on-line since 08/31/2012 15:44:39.
<br>
&nbsp;&nbsp;The sparcv9 processor operates at 1600 MHz,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and has a sparcv9 floating point processor.
<br>
tyr fd1026 107 
<br>
<p>My local machine (tyr) is a dual processor machine and the
<br>
other one is equipped with two quad-core processors each
<br>
capable of running two hardware threads.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev1">&gt; On Sep 3, 2012, at 12:43 PM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; the man page for &quot;mpiexec&quot; shows the following:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;         cat myrankfile
</span><br>
<span class="quotelev2">&gt; &gt;         rank 0=aa slot=1:0-2
</span><br>
<span class="quotelev2">&gt; &gt;         rank 1=bb slot=0:0,1
</span><br>
<span class="quotelev2">&gt; &gt;         rank 2=cc slot=1-2
</span><br>
<span class="quotelev2">&gt; &gt;         mpirun -H aa,bb,cc,dd -rf myrankfile ./a.out So that
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;       Rank 0 runs on node aa, bound to socket 1, cores 0-2.
</span><br>
<span class="quotelev2">&gt; &gt;       Rank 1 runs on node bb, bound to socket 0, cores 0 and 1.
</span><br>
<span class="quotelev2">&gt; &gt;       Rank 2 runs on node cc, bound to cores 1 and 2.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Does it mean that the process with rank 0 should be bound to
</span><br>
<span class="quotelev2">&gt; &gt; core 0, 1, or 2 of socket 1?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I tried to use a rankfile and have a problem. My rankfile contains
</span><br>
<span class="quotelev2">&gt; &gt; the following lines.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=tyr.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev2">&gt; &gt; rank 1=tyr.informatik.hs-fulda.de slot=1:0
</span><br>
<span class="quotelev2">&gt; &gt; #rank 2=rs0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Everything is fine if I use the file with just my local machine
</span><br>
<span class="quotelev2">&gt; &gt; (the first two lines).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 115 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
</span><br>
<span class="quotelev2">&gt; &gt;  odls:default:fork binding child [[9849,1],0] to slot_list 0:0
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
</span><br>
<span class="quotelev2">&gt; &gt;  odls:default:fork binding child [[9849,1],1] to slot_list 1:0
</span><br>
<span class="quotelev2">&gt; &gt; I'm process 0 of 2 available processes running on 
</span><br>
tyr.informatik.hs-fulda.de.
<br>
<span class="quotelev2">&gt; &gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev2">&gt; &gt; I'm process 1 of 2 available processes running on 
</span><br>
tyr.informatik.hs-fulda.de.
<br>
<span class="quotelev2">&gt; &gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 116 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I can also change the socket number and the processes will be attached
</span><br>
<span class="quotelev2">&gt; &gt; to the correct cores. Unfortunately it doesn't work if I add one
</span><br>
<span class="quotelev2">&gt; &gt; other machine (third line).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 112 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; We were unable to successfully process/set the requested processor
</span><br>
<span class="quotelev2">&gt; &gt; affinity settings:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Specified slot list: 0:0
</span><br>
<span class="quotelev2">&gt; &gt; Error: Cross-device link
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This could mean that a non-existent processor was specified, or
</span><br>
<span class="quotelev2">&gt; &gt; that the specification had improper syntax.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev2">&gt; &gt;  odls:default:fork binding child [[10212,1],0] to slot_list 0:0
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev2">&gt; &gt;  odls:default:fork binding child [[10212,1],1] to slot_list 1:0
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:12047] [[10212,0],1]
</span><br>
<span class="quotelev2">&gt; &gt;  odls:default:fork binding child [[10212,1],2] to slot_list 0:0
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev2">&gt; &gt;  ORTE_ERROR_LOG: A message is attempting to be sent to a process
</span><br>
<span class="quotelev2">&gt; &gt;  whose contact information is unknown in file
</span><br>
<span class="quotelev2">&gt; &gt;  ../../../../../openmpi-1.6/orte/mca/rml/oob/rml_oob_send.c at line 145
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0] attempted to send
</span><br>
<span class="quotelev2">&gt; &gt;  to [[10212,1],0]: tag 20
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev2">&gt; &gt;  A message is attempting to be sent to a process whose contact
</span><br>
<span class="quotelev2">&gt; &gt;  information is unknown in file
</span><br>
<span class="quotelev2">&gt; &gt;  ../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev2">&gt; &gt;  at line 2501
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev2">&gt; &gt;  encountered an error:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Error name: Error 0
</span><br>
<span class="quotelev2">&gt; &gt; Node: rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; when attempting to start process rank 2.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 113 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The other machine has two 8 core processors.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 121 ssh rs0 psrinfo -v
</span><br>
<span class="quotelev2">&gt; &gt; Status of virtual processor 0 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev2">&gt; &gt;  on-line since 07/26/2012 15:03:14.
</span><br>
<span class="quotelev2">&gt; &gt;  The sparcv9 processor operates at 2400 MHz,
</span><br>
<span class="quotelev2">&gt; &gt;        and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev2">&gt; &gt; Status of virtual processor 1 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; Status of virtual processor 15 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev2">&gt; &gt;  on-line since 07/26/2012 15:03:16.
</span><br>
<span class="quotelev2">&gt; &gt;  The sparcv9 processor operates at 2400 MHz,
</span><br>
<span class="quotelev2">&gt; &gt;        and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 122 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is it necessary to specify another option on the command line or
</span><br>
<span class="quotelev2">&gt; &gt; is my rankfile faulty? Thank you very much for any suggestions in
</span><br>
<span class="quotelev2">&gt; &gt; advance.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20118.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>Previous message:</strong> <a href="20116.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Maybe in reply to:</strong> <a href="20102.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20128.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
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
