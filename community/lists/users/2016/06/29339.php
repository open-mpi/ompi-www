<?
$subject_val = "[OMPI users] Firewall settings for MPI communication";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  1 07:35:40 2016" -->
<!-- isoreceived="20160601113540" -->
<!-- sent="Wed, 01 Jun 2016 13:35:38 +0200" -->
<!-- isosent="20160601113538" -->
<!-- name="Ping Wang" -->
<!-- email="ping.wang_at_[hidden]" -->
<!-- subject="[OMPI users] Firewall settings for MPI communication" -->
<!-- id="de9f2b67dfce31488e14d33c1042518b_at_ascssrv" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Firewall settings for MPI communication<br>
<strong>From:</strong> Ping Wang (<em>ping.wang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-01 07:35:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29340.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29338.php">Cihan Altinay: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29340.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29340.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using Open MPI 1.6.5 to run OpenFOAM in parallel on several VMs on a cloud. mpirun hangs without any error messages. I think this is a firewall issue. Because when I open all the TCP ports(1-65535) in the security group of VMs, mpirun works well. However I was suggested to open as less ports as possible. So I have to limit MPI to run on a range of ports. I opened the port range 49990-50010 for MPI communication. And use command
<br>
<p>&nbsp;
<br>
<p>mpirun --mca oob_tcp_dynamic_ports 49990-50010 -np 4 --hostfile machines simpleFoam -parallel. 
<br>
<p>&nbsp;
<br>
<p>But it still hangs. How can I specify a port range that OpenMPI will use? I appreciate any help you can provide.
<br>
<p>&nbsp;
<br>
<p>Best,
<br>
<p>Ping Wang
<br>
<p>&nbsp;
<br>
<p>ascs_logo_300dpi
<br>
<p>------------------------------------------------------
<br>
<p>Ping Wang
<br>
<p>Automotive Simulation Center Stuttgart e.V.
<br>
<p>Nobelstra&#223;e 15
<br>
<p>D-70569 Stuttgart
<br>
<p>Telefon: +49 711 699659-14
<br>
<p>Fax: +49 711 699659-29
<br>
<p>E-Mail:  &lt;mailto:ping.wang_at_[hidden]&gt; ping.wang_at_[hidden]
<br>
<p>Web:  &lt;<a href="http://www.asc-s.de/">http://www.asc-s.de/</a>&gt; <a href="http://www.asc-s.de">http://www.asc-s.de</a>
<br>
<p>Social Media:  &lt;<a href="http://www.facebook.com/asc.stuttgart">http://www.facebook.com/asc.stuttgart</a>&gt; facebook/asc.stuttgart
<br>
<p>------------------------------------------------------
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p><p><p><p>
<p>

<br><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29339/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29339/image001.png" alt="image001.png">
<!-- attachment="image001.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29339/image002.gif" alt="image002.gif">
<!-- attachment="image002.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29340.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29338.php">Cihan Altinay: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29340.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29340.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
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
