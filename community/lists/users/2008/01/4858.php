<?
$subject_val = "Re: [OMPI users] Communications Problems when application distributed over, different nodes (Jeff Squyres)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 19 16:01:34 2008" -->
<!-- isoreceived="20080119210134" -->
<!-- sent="Sat, 19 Jan 2008 22:01:10 +0100" -->
<!-- isosent="20080119210110" -->
<!-- name="Roland Albrecht" -->
<!-- email="r.albrecht_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communications Problems when application distributed over, different nodes (Jeff Squyres)" -->
<!-- id="47926516.3010002_at_physik.uni-saarland.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.23.1200762025.19010.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Communications Problems when application distributed over, different nodes (Jeff Squyres)<br>
<strong>From:</strong> Roland Albrecht (<em>r.albrecht_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-19 16:01:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4859.php">Graham Jenkins: "[OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Previous message:</strong> <a href="4857.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>It has indeed been a problem with the firewall.
<br>
Thanks
<br>
<p>Best regards
<br>
Roland Albrecht
<br>
<p><p><p><span class="quotelev1"> &gt;Do you have the Linux firewall running on either of your machines,
</span><br>
<span class="quotelev1"> &gt;perchance?  This can either block random socket connections between
</span><br>
<span class="quotelev1"> &gt;nodes (which Open MPI's TCP communication will use) or eat the
</span><br>
<span class="quotelev1"> &gt;connection requests in a black-hole fashion such that the connections
</span><br>
<span class="quotelev1"> &gt;will timeout.
</span><br>
<p><p><p>On Jan 16, 2008, at 5:35 AM, Roland Albrecht wrote:
<br>
<p><span class="quotelev2"> &gt; &gt; Hello
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt; I'm running an FDTD programm (meep) using open-mpi on a mini-cluster
</span><br>
<span class="quotelev2"> &gt; &gt; consisting of 2 computers. Since the exchange of the mainbord on the
</span><br>
<span class="quotelev2"> &gt; &gt; node (with an identical one as before) I have a problem. I can't
</span><br>
<span class="quotelev2"> &gt; &gt; find the change in the configurations which is now causing the
</span><br>
<span class="quotelev2"> &gt; &gt; problen.
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt; Here's my problem:
</span><br>
<span class="quotelev2"> &gt; &gt; I can start the meep application by mpi-run on each node
</span><br>
<span class="quotelev2"> &gt; &gt; individually and the program runs without any problems.
</span><br>
<span class="quotelev2"> &gt; &gt; However when I try to run the program distributed over both
</span><br>
<span class="quotelev2"> &gt; &gt; computers I get at some point the following error message:
</span><br>
<span class="quotelev2"> &gt; &gt; ...[0,1,1][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev2"> &gt; &gt; 572:mca_btl_tcp_endpoint_complete_connect] connect() failed with
</span><br>
<span class="quotelev2"> &gt; &gt; errno=110
</span><br>
<span class="quotelev2"> &gt; &gt; Which translates by Perl as: Connection timed out at -e line 1.
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt; However I can't figure out where the problem lies in my network
</span><br>
<span class="quotelev2"> &gt; &gt; configuration. SSH tunnels from one computer to another works. I
</span><br>
<span class="quotelev2"> &gt; &gt; also can reach the internet from the node.
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt; In the attached archive there's the config.log from the top open-mpi
</span><br>
<span class="quotelev2"> &gt; &gt; tree, there's the output of ompi_info --all and there's the network
</span><br>
<span class="quotelev2"> &gt; &gt; configuration of both computers.
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt; I'm really greatfull for any help. Thank you!
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt; Best regards
</span><br>
<span class="quotelev2"> &gt; &gt; Roland Albrecht
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4859.php">Graham Jenkins: "[OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Previous message:</strong> <a href="4857.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
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
