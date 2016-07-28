<?
$subject_val = "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 21:19:24 2012" -->
<!-- isoreceived="20121205021924" -->
<!-- sent="Tue, 4 Dec 2012 18:19:18 -0800" -->
<!-- isosent="20121205021918" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)" -->
<!-- id="CAMD57ofJqm6yLWbp65tNeeVf-fPAz4xuJdsshMqQ2tb6Bk1wPw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E018CDCC-F6DD-4598-8B17-9DFB93916CF2_at_riken.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-04 21:19:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20876.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>Previous message:</strong> <a href="20874.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>In reply to:</strong> <a href="20874.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20876.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Strange - that shouldn't be happening. However, to get thru it, just
<br>
restrict the interfaces OMPI uses. If it's the hardwired Ethernet that is
<br>
causing the problem, then add
<br>
<p>-mca oob_tcp_if_exclude en0 -mca btl_tcp_if_exclude en0
<br>
<p>to your cmd line. If it's the wireless, then substitute en1 for en0 in the
<br>
above.
<br>
<p><p><p>On Tue, Dec 4, 2012 at 5:16 PM, Valentin Clement
<br>
&lt;valentin.clement_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems, the problem is happening if I have two active interfaces on my
</span><br>
<span class="quotelev1">&gt; computer. Is there any configuration to use MPI_Comm_spawn_multiple on a
</span><br>
<span class="quotelev1">&gt; machine with multiple interfaces ?
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
<span class="quotelev1">&gt; On Dec 3, 2012, at 3:00 PM, Valentin Clement &lt;valentin.clement_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using call to MPI_Comm_spawn_multiple in a quite big application. I've
</span><br>
<span class="quotelev1">&gt; seen a deadlock occurred in a very strange situation. If I'm running my
</span><br>
<span class="quotelev1">&gt; application on my Ubuntu 12.10 with OpenMPI 1.6.3 there is absolutely no
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On my Mac OS X 10.8.2 with also OpenMPI 1.6.3, I'm experiencing a dead
</span><br>
<span class="quotelev1">&gt; lock on an intrecommunicator resulting from the MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev1">&gt; only if my ethernet interface is enable. If I disable it, the deadlock is
</span><br>
<span class="quotelev1">&gt; gone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone has an idea of what is happening ? I joined the output of ompi_info
</span><br>
<span class="quotelev1">&gt; on both OS X and Linux.
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 3, 2012, at 3:00 PM, Valentin Clement &lt;valentin.clement_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using call to MPI_Comm_spawn_multiple in a quite big application. I've
</span><br>
<span class="quotelev1">&gt; seen a deadlock occurred in a very strange situation. If I'm running my
</span><br>
<span class="quotelev1">&gt; application on my Ubuntu 12.10 with OpenMPI 1.6.3 there is absolutely no
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On my Mac OS X 10.8.2 with also OpenMPI 1.6.3, I'm experiencing a dead
</span><br>
<span class="quotelev1">&gt; lock on an intrecommunicator resulting from the MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev1">&gt; only if my ethernet interface is enable. If I disable it, the deadlock is
</span><br>
<span class="quotelev1">&gt; gone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone has an idea of what is happening ? I joined the output of ompi_info
</span><br>
<span class="quotelev1">&gt; on both OS X and Linux.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  &lt;ompi_info.tar.bz2&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20875/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20876.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>Previous message:</strong> <a href="20874.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>In reply to:</strong> <a href="20874.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20876.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
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
