<?
$subject_val = "Re: [OMPI users] delimiter in appfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  3 16:19:22 2012" -->
<!-- isoreceived="20120903201922" -->
<!-- sent="Mon, 3 Sep 2012 13:19:15 -0700" -->
<!-- isosent="20120903201915" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] delimiter in appfile" -->
<!-- id="6DC2508E-799E-4C46-B83A-97A107529794_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209031942.q83Jgemo001561_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] delimiter in appfile<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-03 16:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20105.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20103.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>In reply to:</strong> <a href="20101.php">Siegmar Gross: "[OMPI users] delimiter in appfile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Possible - yes. Likely to happen immediately - less so as most of us are quite busy right now. I'll add it to the &quot;requested feature&quot; list, but can make no promises on if/when it might happen. Certainly won't be included in anything prior to the upcoming 1.7 series.
<br>
<p><p>On Sep 3, 2012, at 12:42 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get strange results if I use a tab instead of a space as a
</span><br>
<span class="quotelev1">&gt; delimiter in an appfile. Perhaps I've missed something but I
</span><br>
<span class="quotelev1">&gt; can't remember that I read that tabs are not allowed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tab between 2 and -host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -np 2	-host tyr.informatik.hs-fulda.de rank_size
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 144 mpiexec -app app_rank_size.openmpi_fulda
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to launch the specified application as it could
</span><br>
<span class="quotelev1">&gt;  not find an executable:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Executable: tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Node: tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes failed to start
</span><br>
<span class="quotelev1">&gt; tyr small_prog 145 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tab between -host and tyr.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -np 2 -host	tyr.informatik.hs-fulda.de rank_size
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 145 mpiexec -app app_rank_size.openmpi_fulda
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to launch the specified application as it could
</span><br>
<span class="quotelev1">&gt;  not find an executable:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Executable: -o
</span><br>
<span class="quotelev1">&gt; Node: tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes failed to start
</span><br>
<span class="quotelev1">&gt; tyr small_prog 146 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tab before rank_size.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -np 2 -host tyr.informatik.hs-fulda.de	rank_size
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 147 mpiexec -app app_rank_size.openmpi_fulda
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; No executable was specified on the mpiexec command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aborting.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; tyr small_prog 148 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything works fine if I only use spaces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 132 mpiexec -app app_rank_size.openmpi_fulda
</span><br>
<span class="quotelev1">&gt; I'm process 1 of 2 available processes running on tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev1">&gt; I'm process 0 of 2 available processes running on tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev1">&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev1">&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to change the behaviour so that both tab and space
</span><br>
<span class="quotelev1">&gt; can be used as delimiter?
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
<li><strong>Next message:</strong> <a href="20105.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20103.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>In reply to:</strong> <a href="20101.php">Siegmar Gross: "[OMPI users] delimiter in appfile"</a>
<!-- nextthread="start" -->
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
