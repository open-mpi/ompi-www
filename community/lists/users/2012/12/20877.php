<?
$subject_val = "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 00:04:02 2012" -->
<!-- isoreceived="20121205050402" -->
<!-- sent="Tue, 4 Dec 2012 21:03:56 -0800" -->
<!-- isosent="20121205050356" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)" -->
<!-- id="CAMD57oehUMveBtxLERNMvVONohdXjUBbAr5DJD2UNo3QtyCEag_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="594C8D74-A256-45B0-BA3E-EF5A830023BB_at_riken.jp" -->
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
<strong>Date:</strong> 2012-12-05 00:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20878.php">утс║: "Re: [OMPI users] users Digest, Vol 2428, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="20876.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>In reply to:</strong> <a href="20876.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20883.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great! If you get tired of putting them on the cmd line, just remember
<br>
that, like all MCA params, you can instead express them in your
<br>
environment. For example,
<br>
<p>export OMPI_MCA_oob_tcp_if_exclude=en0
<br>
<p>for bash. Then you don't have to add them on the cmd line anymore. Just
<br>
FWIW.
<br>
<p><p>On Tue, Dec 4, 2012 at 8:32 PM, Valentin Clement
<br>
&lt;valentin.clement_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, with this the problem is gone. In fact, no interface is posing
</span><br>
<span class="quotelev1">&gt; problem if there is only one of them active. Anyway, using the options to
</span><br>
<span class="quotelev1">&gt; mpiexec are just fine for the moment for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Valentin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 5, 2012, at 11:19 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Strange - that shouldn't be happening. However, to get thru it, just
</span><br>
<span class="quotelev1">&gt; restrict the interfaces OMPI uses. If it's the hardwired Ethernet that is
</span><br>
<span class="quotelev1">&gt; causing the problem, then add
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca oob_tcp_if_exclude en0 -mca btl_tcp_if_exclude en0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to your cmd line. If it's the wireless, then substitute en1 for en0 in the
</span><br>
<span class="quotelev1">&gt; above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 4, 2012 at 5:16 PM, Valentin Clement &lt;
</span><br>
<span class="quotelev1">&gt; valentin.clement_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems, the problem is happening if I have two active interfaces on my
</span><br>
<span class="quotelev2">&gt;&gt; computer. Is there any configuration to use MPI_Comm_spawn_multiple on a
</span><br>
<span class="quotelev2">&gt;&gt; machine with multiple interfaces ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Valentin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 3, 2012, at 3:00 PM, Valentin Clement &lt;valentin.clement_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using call to MPI_Comm_spawn_multiple in a quite big application.
</span><br>
<span class="quotelev2">&gt;&gt; I've seen a deadlock occurred in a very strange situation. If I'm running
</span><br>
<span class="quotelev2">&gt;&gt; my application on my Ubuntu 12.10 with OpenMPI 1.6.3 there is absolutely no
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On my Mac OS X 10.8.2 with also OpenMPI 1.6.3, I'm experiencing a dead
</span><br>
<span class="quotelev2">&gt;&gt; lock on an intrecommunicator resulting from the MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev2">&gt;&gt; only if my ethernet interface is enable. If I disable it, the deadlock is
</span><br>
<span class="quotelev2">&gt;&gt; gone.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyone has an idea of what is happening ? I joined the output of
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info on both OS X and Linux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Valentin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Valentin Clement - Student trainee at RIKEN AICS
</span><br>
<span class="quotelev2">&gt;&gt; Programming Environment Research Team
</span><br>
<span class="quotelev2">&gt;&gt; valentin.clement_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; valentin.clement_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Master thesis project
</span><br>
<span class="quotelev2">&gt;&gt; POP-C++ on the K Computer
</span><br>
<span class="quotelev2">&gt;&gt; Project homepage: <a href="https://forge.tic.eia-fr.ch/projects/poponk">https://forge.tic.eia-fr.ch/projects/poponk</a>
</span><br>
<span class="quotelev2">&gt;&gt; Project board: <a href="https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki">https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_info.tar.bz2&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 3, 2012, at 3:00 PM, Valentin Clement &lt;valentin.clement_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using call to MPI_Comm_spawn_multiple in a quite big application.
</span><br>
<span class="quotelev2">&gt;&gt; I've seen a deadlock occurred in a very strange situation. If I'm running
</span><br>
<span class="quotelev2">&gt;&gt; my application on my Ubuntu 12.10 with OpenMPI 1.6.3 there is absolutely no
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On my Mac OS X 10.8.2 with also OpenMPI 1.6.3, I'm experiencing a dead
</span><br>
<span class="quotelev2">&gt;&gt; lock on an intrecommunicator resulting from the MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev2">&gt;&gt; only if my ethernet interface is enable. If I disable it, the deadlock is
</span><br>
<span class="quotelev2">&gt;&gt; gone.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyone has an idea of what is happening ? I joined the output of
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info on both OS X and Linux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Valentin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Valentin Clement - Student trainee at RIKEN AICS
</span><br>
<span class="quotelev2">&gt;&gt; Programming Environment Research Team
</span><br>
<span class="quotelev2">&gt;&gt; valentin.clement_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; valentin.clement_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Master thesis project
</span><br>
<span class="quotelev2">&gt;&gt; POP-C++ on the K Computer
</span><br>
<span class="quotelev2">&gt;&gt; Project homepage: <a href="https://forge.tic.eia-fr.ch/projects/poponk">https://forge.tic.eia-fr.ch/projects/poponk</a>
</span><br>
<span class="quotelev2">&gt;&gt; Project board: <a href="https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki">https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;ompi_info.tar.bz2&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Valentin Clement - Student trainee at RIKEN AICS
</span><br>
<span class="quotelev2">&gt;&gt; Programming Environment Research Team
</span><br>
<span class="quotelev2">&gt;&gt; valentin.clement_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; valentin.clement_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Master thesis project
</span><br>
<span class="quotelev2">&gt;&gt; POP-C++ on the K Computer
</span><br>
<span class="quotelev2">&gt;&gt; Project homepage: <a href="https://forge.tic.eia-fr.ch/projects/poponk">https://forge.tic.eia-fr.ch/projects/poponk</a>
</span><br>
<span class="quotelev2">&gt;&gt; Project board: <a href="https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki">https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20877/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20878.php">утс║: "Re: [OMPI users] users Digest, Vol 2428, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="20876.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<li><strong>In reply to:</strong> <a href="20876.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20883.php">Valentin Clement: "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
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
