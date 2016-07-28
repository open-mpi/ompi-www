<?
$subject_val = "Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 19:41:05 2012" -->
<!-- isoreceived="20121206004105" -->
<!-- sent="Thu, 6 Dec 2012 09:40:53 +0900" -->
<!-- isosent="20121206004053" -->
<!-- name="Valentin Clement" -->
<!-- email="valentin.clement_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)" -->
<!-- id="7D0D8DD2-21E7-44D7-B2C6-05C9E028F303_at_riken.jp" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3359_1354683925_50BED615_3359_4030_1_CAMD57oehUMveBtxLERNMvVONohdXjUBbAr5DJD2UNo3QtyCEag_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-12-05 19:40:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20884.php">Jeff Squyres: "Re: [OMPI users] Is mpi_igather (non blocking) part of openmpi?"</a>
<li><strong>Previous message:</strong> <a href="20882.php">JR Cary: "[OMPI users] Is mpi_igather (non blocking) part of openmpi?"</a>
<li><strong>Maybe in reply to:</strong> <a href="20853.php">Valentin Clement: "[OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph, this save me a lot of time. 
<br>
<p>Regards, 
<br>
<p>Valentin 
<br>
<p>On Dec 5, 2012, at 2:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Great! If you get tired of putting them on the cmd line, just remember that, like all MCA params, you can instead express them in your environment. For example,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_oob_tcp_if_exclude=en0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for bash. Then you don't have to add them on the cmd line anymore. Just FWIW.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 4, 2012 at 8:32 PM, Valentin Clement &lt;valentin.clement_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, with this the problem is gone. In fact, no interface is posing problem if there is only one of them active. Anyway, using the options to mpiexec are just fine for the moment for me. 
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
<span class="quotelev2">&gt;&gt; Strange - that shouldn't be happening. However, to get thru it, just restrict the interfaces OMPI uses. If it's the hardwired Ethernet that is causing the problem, then add
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -mca oob_tcp_if_exclude en0 -mca btl_tcp_if_exclude en0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; to your cmd line. If it's the wireless, then substitute en1 for en0 in the above.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Dec 4, 2012 at 5:16 PM, Valentin Clement &lt;valentin.clement_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems, the problem is happening if I have two active interfaces on my computer. Is there any configuration to use MPI_Comm_spawn_multiple on a machine with multiple interfaces ? 
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
<span class="quotelev2">&gt;&gt; On Dec 3, 2012, at 3:00 PM, Valentin Clement &lt;valentin.clement_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using call to MPI_Comm_spawn_multiple in a quite big application. I've seen a deadlock occurred in a very strange situation. If I'm running my application on my Ubuntu 12.10 with OpenMPI 1.6.3 there is absolutely no problem. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On my Mac OS X 10.8.2 with also OpenMPI 1.6.3, I'm experiencing a dead lock on an intrecommunicator resulting from the MPI_Comm_spawn_multiple only if my ethernet interface is enable. If I disable it, the deadlock is gone. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyone has an idea of what is happening ? I joined the output of ompi_info on both OS X and Linux. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Valentin 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Valentin Clement - Student trainee at RIKEN AICS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Programming Environment Research Team
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valentin.clement_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valentin.clement_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Master thesis project
</span><br>
<span class="quotelev3">&gt;&gt;&gt; POP-C++ on the K Computer 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Project homepage: <a href="https://forge.tic.eia-fr.ch/projects/poponk">https://forge.tic.eia-fr.ch/projects/poponk</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Project board: <a href="https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki">https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ompi_info.tar.bz2&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 3, 2012, at 3:00 PM, Valentin Clement &lt;valentin.clement_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using call to MPI_Comm_spawn_multiple in a quite big application. I've seen a deadlock occurred in a very strange situation. If I'm running my application on my Ubuntu 12.10 with OpenMPI 1.6.3 there is absolutely no problem. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On my Mac OS X 10.8.2 with also OpenMPI 1.6.3, I'm experiencing a dead lock on an intrecommunicator resulting from the MPI_Comm_spawn_multiple only if my ethernet interface is enable. If I disable it, the deadlock is gone. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyone has an idea of what is happening ? I joined the output of ompi_info on both OS X and Linux. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Valentin 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Valentin Clement - Student trainee at RIKEN AICS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Programming Environment Research Team
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valentin.clement_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valentin.clement_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Master thesis project
</span><br>
<span class="quotelev3">&gt;&gt;&gt; POP-C++ on the K Computer 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Project homepage: <a href="https://forge.tic.eia-fr.ch/projects/poponk">https://forge.tic.eia-fr.ch/projects/poponk</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Project board: <a href="https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki">https://forge.tic.eia-fr.ch/projects/poponk/wiki/Wiki</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ompi_info.tar.bz2&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20883/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20883/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20884.php">Jeff Squyres: "Re: [OMPI users] Is mpi_igather (non blocking) part of openmpi?"</a>
<li><strong>Previous message:</strong> <a href="20882.php">JR Cary: "[OMPI users] Is mpi_igather (non blocking) part of openmpi?"</a>
<li><strong>Maybe in reply to:</strong> <a href="20853.php">Valentin Clement: "[OMPI users] deadlock on intercommunicator after MPI_Comm_spawn_multiple (OS X / Linux)"</a>
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
