<?
$subject_val = "Re: [OMPI users] problem with rankfile in openmpi-1.6.4rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 22:50:46 2013" -->
<!-- isoreceived="20130125035046" -->
<!-- sent="Thu, 24 Jan 2013 19:50:39 -0800" -->
<!-- isosent="20130125035039" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with rankfile in openmpi-1.6.4rc2" -->
<!-- id="EA34C3CD-7F65-4E64-A79B-F7C97508A3DA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201301190945.r0J9jYaA023240_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with rankfile in openmpi-1.6.4rc2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-24 22:50:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21226.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.6.4rc2"</a>
<li><strong>Previous message:</strong> <a href="21224.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21157.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.6.4rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21226.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.6.4rc2"</a>
<li><strong>Reply:</strong> <a href="21226.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.6.4rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I built the current 1.6 branch (which hasn't seen any changes that would impact this function) and was able to execute it just fine on a single socket machine. I then gave it your slot-list, which of course failed as I don't have two active sockets (one is empty), but it appeared to parse the list just fine.
<br>
<p><span class="quotelev1">&gt;From what I can tell, it looks like your linpc1 is unable to detect a second socket for some reason when given the slot_list argument. I'll have to try again tomorrow when I have access to a dual-socket machine.
</span><br>
<p>On Jan 19, 2013, at 1:45 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed openmpi-1.6.4rc2 and have still a problem with my
</span><br>
<span class="quotelev1">&gt; rankfile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 113 ompi_info | grep &quot;Open MPI:&quot;
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.6.4rc2r27861
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 114 cat rf_linpc1 
</span><br>
<span class="quotelev1">&gt; rank 0=linpc1 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 115 mpiexec -report-bindings -np 1 \
</span><br>
<span class="quotelev1">&gt;  -rf rf_linpc1 hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; We were unable to successfully process/set the requested processor
</span><br>
<span class="quotelev1">&gt; affinity settings:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specified slot list: 0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; Error: Error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This could mean that a non-existent processor was specified, or
</span><br>
<span class="quotelev1">&gt; that the specification had improper syntax.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev1">&gt;  encountered an error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error name: Error
</span><br>
<span class="quotelev1">&gt; Node: linpc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything works fine with the following command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 116 mpiexec -report-bindings -np 1 -cpus-per-proc 4 \
</span><br>
<span class="quotelev1">&gt;  -bycore -bind-to-core hostname
</span><br>
<span class="quotelev1">&gt; [linpc1:20140] MCW rank 0 bound to socket 0[core 0-1]
</span><br>
<span class="quotelev1">&gt;  socket 1[core 0-1]: [B B][B B]
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody could fix the problem. Thank you very
</span><br>
<span class="quotelev1">&gt; much for any help in advance.
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
<li><strong>Next message:</strong> <a href="21226.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.6.4rc2"</a>
<li><strong>Previous message:</strong> <a href="21224.php">Ralph Castain: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2 with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21157.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.6.4rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21226.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.6.4rc2"</a>
<li><strong>Reply:</strong> <a href="21226.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.6.4rc2"</a>
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
