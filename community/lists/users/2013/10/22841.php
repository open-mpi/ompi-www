<?
$subject_val = "Re: [OMPI users] ORTE_ERROR_LOG";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 25 05:14:02 2013" -->
<!-- isoreceived="20131025091402" -->
<!-- sent="Fri, 25 Oct 2013 02:13:58 -0700" -->
<!-- isosent="20131025091358" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE_ERROR_LOG" -->
<!-- id="392B66D8-3BBC-4621-9079-9BEC116DE466_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DUB111-W1261073091461BB89485169D40D0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE_ERROR_LOG<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-25 05:13:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22842.php">Mike Dubman: "Re: [OMPI users] Get your Open MPI schwag!"</a>
<li><strong>Previous message:</strong> <a href="22840.php">Osman Khalid: "[OMPI users] Fwd:  need help in this error"</a>
<li><strong>In reply to:</strong> <a href="22838.php">Tommi Laiho: "[OMPI users] ORTE_ERROR_LOG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22844.php">Tommi Laiho: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
<li><strong>Reply:</strong> <a href="22844.php">Tommi Laiho: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
<li><strong>Reply:</strong> <a href="22850.php">Tommi Laiho: "[OMPI users] Odd and long error with OpenMPI and OpenFOAM."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see two &quot;mpirun&quot; cmds on that cmd line - is that a copy/paste error or did you really put two of them on one line?
<br>
<p><p>On Oct 24, 2013, at 10:27 PM, Tommi Laiho &lt;tommilaiho_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to setup a simple two machines home cluster. Later I may increase the number to 4 machines. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a bridged modem so each of my machines has its own ip. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My target is now to calculate a simple OpenFOAM tutorial with two computers and together with 14 cores. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However when I run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun /opt/openmpi-1.6.5/bin/mpirun -hostfile /home/tommi2/Desktop/machinefile -np 14 icofoam cavity -parallel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get this kind of error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [caelinux:31859] [[43391,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file rml_oob_send.c at line 104
</span><br>
<span class="quotelev1">&gt; [caelinux:31859] [[43391,1],0] could not get route to [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; [caelinux:31859] [[43391,1],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file base/plm_base_proxy.c at line 81
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please tell me what to do in order to fix this and thanks in advance. The reason is probably simple cos I am a Linux newbie. 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22841/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22842.php">Mike Dubman: "Re: [OMPI users] Get your Open MPI schwag!"</a>
<li><strong>Previous message:</strong> <a href="22840.php">Osman Khalid: "[OMPI users] Fwd:  need help in this error"</a>
<li><strong>In reply to:</strong> <a href="22838.php">Tommi Laiho: "[OMPI users] ORTE_ERROR_LOG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22844.php">Tommi Laiho: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
<li><strong>Reply:</strong> <a href="22844.php">Tommi Laiho: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
<li><strong>Reply:</strong> <a href="22850.php">Tommi Laiho: "[OMPI users] Odd and long error with OpenMPI and OpenFOAM."</a>
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
