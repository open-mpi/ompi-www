<?
$subject_val = "Re: [OMPI users] problem with rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  3 16:17:59 2012" -->
<!-- isoreceived="20120903201759" -->
<!-- sent="Mon, 3 Sep 2012 13:17:51 -0700" -->
<!-- isosent="20120903201751" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with rankfile" -->
<!-- id="7E3FC59A-DA87-47A1-A134-5F970D5F33AB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209031943.q83Jhtve001566_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-03 16:17:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20104.php">Ralph Castain: "Re: [OMPI users] delimiter in appfile"</a>
<li><strong>Previous message:</strong> <a href="20102.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<li><strong>In reply to:</strong> <a href="20102.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20117.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are *all* the machines Sparc? Or just the 3rd one (rs0)?
<br>
<p>On Sep 3, 2012, at 12:43 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the man page for &quot;mpiexec&quot; shows the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         cat myrankfile
</span><br>
<span class="quotelev1">&gt;         rank 0=aa slot=1:0-2
</span><br>
<span class="quotelev1">&gt;         rank 1=bb slot=0:0,1
</span><br>
<span class="quotelev1">&gt;         rank 2=cc slot=1-2
</span><br>
<span class="quotelev1">&gt;         mpirun -H aa,bb,cc,dd -rf myrankfile ./a.out So that
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       Rank 0 runs on node aa, bound to socket 1, cores 0-2.
</span><br>
<span class="quotelev1">&gt;       Rank 1 runs on node bb, bound to socket 0, cores 0 and 1.
</span><br>
<span class="quotelev1">&gt;       Rank 2 runs on node cc, bound to cores 1 and 2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does it mean that the process with rank 0 should be bound to
</span><br>
<span class="quotelev1">&gt; core 0, 1, or 2 of socket 1?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to use a rankfile and have a problem. My rankfile contains
</span><br>
<span class="quotelev1">&gt; the following lines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=tyr.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 1=tyr.informatik.hs-fulda.de slot=1:0
</span><br>
<span class="quotelev1">&gt; #rank 2=rs0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything is fine if I use the file with just my local machine
</span><br>
<span class="quotelev1">&gt; (the first two lines).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 115 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
</span><br>
<span class="quotelev1">&gt;  odls:default:fork binding child [[9849,1],0] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
</span><br>
<span class="quotelev1">&gt;  odls:default:fork binding child [[9849,1],1] to slot_list 1:0
</span><br>
<span class="quotelev1">&gt; I'm process 0 of 2 available processes running on tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev1">&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev1">&gt; I'm process 1 of 2 available processes running on tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev1">&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev1">&gt; tyr small_prog 116 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can also change the socket number and the processes will be attached
</span><br>
<span class="quotelev1">&gt; to the correct cores. Unfortunately it doesn't work if I add one
</span><br>
<span class="quotelev1">&gt; other machine (third line).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 112 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; We were unable to successfully process/set the requested processor
</span><br>
<span class="quotelev1">&gt; affinity settings:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specified slot list: 0:0
</span><br>
<span class="quotelev1">&gt; Error: Cross-device link
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This could mean that a non-existent processor was specified, or
</span><br>
<span class="quotelev1">&gt; that the specification had improper syntax.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev1">&gt;  odls:default:fork binding child [[10212,1],0] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev1">&gt;  odls:default:fork binding child [[10212,1],1] to slot_list 1:0
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:12047] [[10212,0],1]
</span><br>
<span class="quotelev1">&gt;  odls:default:fork binding child [[10212,1],2] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev1">&gt;  ORTE_ERROR_LOG: A message is attempting to be sent to a process
</span><br>
<span class="quotelev1">&gt;  whose contact information is unknown in file
</span><br>
<span class="quotelev1">&gt;  ../../../../../openmpi-1.6/orte/mca/rml/oob/rml_oob_send.c at line 145
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0] attempted to send
</span><br>
<span class="quotelev1">&gt;  to [[10212,1],0]: tag 20
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev1">&gt;  A message is attempting to be sent to a process whose contact
</span><br>
<span class="quotelev1">&gt;  information is unknown in file
</span><br>
<span class="quotelev1">&gt;  ../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev1">&gt;  at line 2501
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev1">&gt;  encountered an error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error name: Error 0
</span><br>
<span class="quotelev1">&gt; Node: rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 2.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; tyr small_prog 113 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The other machine has two 8 core processors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 121 ssh rs0 psrinfo -v
</span><br>
<span class="quotelev1">&gt; Status of virtual processor 0 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev1">&gt;  on-line since 07/26/2012 15:03:14.
</span><br>
<span class="quotelev1">&gt;  The sparcv9 processor operates at 2400 MHz,
</span><br>
<span class="quotelev1">&gt;        and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev1">&gt; Status of virtual processor 1 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Status of virtual processor 15 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev1">&gt;  on-line since 07/26/2012 15:03:16.
</span><br>
<span class="quotelev1">&gt;  The sparcv9 processor operates at 2400 MHz,
</span><br>
<span class="quotelev1">&gt;        and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev1">&gt; tyr small_prog 122 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it necessary to specify another option on the command line or
</span><br>
<span class="quotelev1">&gt; is my rankfile faulty? Thank you very much for any suggestions in
</span><br>
<span class="quotelev1">&gt; advance.
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
<li><strong>Next message:</strong> <a href="20104.php">Ralph Castain: "Re: [OMPI users] delimiter in appfile"</a>
<li><strong>Previous message:</strong> <a href="20102.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<li><strong>In reply to:</strong> <a href="20102.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20117.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
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
