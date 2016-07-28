<?
$subject_val = "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 20:16:42 2012" -->
<!-- isoreceived="20121205011642" -->
<!-- sent="Wed, 5 Dec 2012 10:16:30 +0900" -->
<!-- isosent="20121205011630" -->
<!-- name="Valentin Clement" -->
<!-- email="valentin.clement_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)" -->
<!-- id="E018CDCC-F6DD-4598-8B17-9DFB93916CF2_at_riken.jp" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="30275_1354514620_50BC40BC_30275_58959_1_65EB48C4-19C0-45B2-9917-6928C1B444E4_at_riken.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)<br>
<strong>From:</strong> Valentin Clement (<em>valentin.clement_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-04 20:16:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20875.php">Ralph Castain: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>Previous message:</strong> <a href="20873.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="20853.php">Valentin Clement: "[OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20875.php">Ralph Castain: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>Reply:</strong> <a href="20875.php">Ralph Castain: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>It seems, the problem is happening if I have two active interfaces on my computer. Is there any configuration to use MPI_Comm_spawn_multiple on a machine with multiple interfaces ? 
<br>
<p>Regards, 
<br>
<p>Valentin 
<br>
<p>On Dec 3, 2012, at 3:00 PM, Valentin Clement &lt;valentin.clement_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using call to MPI_Comm_spawn_multiple in a quite big application. I've seen a deadlock occurred in a very strange situation. If I'm running my application on my Ubuntu 12.10 with OpenMPI 1.6.3 there is absolutely no problem. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On my Mac OS X 10.8.2 with also OpenMPI 1.6.3, I'm experiencing a dead lock on an intrecommunicator resulting from the MPI_Comm_spawn_multiple only if my ethernet interface is enable. If I disable it, the deadlock is gone. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone has an idea of what is happening ? I joined the output of ompi_info on both OS X and Linux. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Valentin 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Valentin Clement - Student trainee at RIKEN AICS
</span><br>
<span class="quotelev1">&gt; Programming Environment Research Team
</span><br>
<span class="quotelev1">&gt; valentin.clement_at_[hidden]
</span><br>
<span class="quotelev1">&gt; valentin.clement_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Master thesis project
</span><br>
<span class="quotelev1">&gt; POP-C++ on the K Computer 
</span><br>
<span class="quotelev1">&gt; Project homepage: <a href="https://forge.tic.eia-fr.ch/projects/poponk">https://forge.tic.eia-fr.ch/projects/poponk</a>
</span><br>
<span class="quotelev1">&gt; Project board: <a href="https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki">https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki</a>
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.tar.bz2&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>On Dec 3, 2012, at 3:00 PM, Valentin Clement &lt;valentin.clement_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using call to MPI_Comm_spawn_multiple in a quite big application. I've seen a deadlock occurred in a very strange situation. If I'm running my application on my Ubuntu 12.10 with OpenMPI 1.6.3 there is absolutely no problem. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On my Mac OS X 10.8.2 with also OpenMPI 1.6.3, I'm experiencing a dead lock on an intrecommunicator resulting from the MPI_Comm_spawn_multiple only if my ethernet interface is enable. If I disable it, the deadlock is gone. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone has an idea of what is happening ? I joined the output of ompi_info on both OS X and Linux. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Valentin 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Valentin Clement - Student trainee at RIKEN AICS
</span><br>
<span class="quotelev1">&gt; Programming Environment Research Team
</span><br>
<span class="quotelev1">&gt; valentin.clement_at_[hidden]
</span><br>
<span class="quotelev1">&gt; valentin.clement_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Master thesis project
</span><br>
<span class="quotelev1">&gt; POP-C++ on the K Computer 
</span><br>
<span class="quotelev1">&gt; Project homepage: <a href="https://forge.tic.eia-fr.ch/projects/poponk">https://forge.tic.eia-fr.ch/projects/poponk</a>
</span><br>
<span class="quotelev1">&gt; Project board: <a href="https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki">https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki</a>
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.tar.bz2&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>-----------------------------------------------------------------------------------------
<br>
Valentin Clement - Student trainee at RIKEN AICS
<br>
Programming Environment Research Team
<br>
valentin.clement_at_[hidden]
<br>
valentin.clement_at_[hidden]
<br>
Master thesis project
<br>
POP-C++ on the K Computer 
<br>
Project homepage: <a href="https://forge.tic.eia-fr.ch/projects/poponk">https://forge.tic.eia-fr.ch/projects/poponk</a>
<br>
Project board: <a href="https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki">https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki</a>
<br>
-----------------------------------------------------------------------------------------
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20874/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20874/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20875.php">Ralph Castain: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>Previous message:</strong> <a href="20873.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="20853.php">Valentin Clement: "[OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20875.php">Ralph Castain: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>Reply:</strong> <a href="20875.php">Ralph Castain: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
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
