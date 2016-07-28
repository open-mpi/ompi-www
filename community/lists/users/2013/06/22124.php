<?
$subject_val = "[OMPI users] Trouble with Sending Multiple messages to the Same Machine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 18 13:14:56 2013" -->
<!-- isoreceived="20130618171456" -->
<!-- sent="Tue, 18 Jun 2013 10:14:52 -0700 (PDT)" -->
<!-- isosent="20130618171452" -->
<!-- name="Claire Williams" -->
<!-- email="clairewilliams1994_at_[hidden]" -->
<!-- subject="[OMPI users] Trouble with Sending Multiple messages to the Same Machine" -->
<!-- id="1371575692.17628.YahooMailNeo_at_web161606.mail.bf1.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Trouble with Sending Multiple messages to the Same Machine<br>
<strong>From:</strong> Claire Williams (<em>clairewilliams1994_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-18 13:14:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22125.php">Gus Correa: "Re: [OMPI users] Trouble with Sending Multiple messages to the Same Machine"</a>
<li><strong>Previous message:</strong> <a href="22123.php">Elias Rudberg: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22125.php">Gus Correa: "Re: [OMPI users] Trouble with Sending Multiple messages to the Same Machine"</a>
<li><strong>Reply:</strong> <a href="22125.php">Gus Correa: "Re: [OMPI users] Trouble with Sending Multiple messages to the Same Machine"</a>
<li><strong>Reply:</strong> <a href="22178.php">Iliev, Hristo: "Re: [OMPI users] Trouble with Sending Multiple messages to the Same	Machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys&#194;&#160;&#226;&#152;&#186;!

I'm working with a simple &quot;Hello, World&quot; MPI program that has one master and is sending one message to each worker, receives a message back from each of the workers, and re-sends a new message. This unfortunately is not working :(. When the master only sends one message to each worker, and then receives it, it is working fine, but there are problems with sending more than one message to each worker. When it happens, it prints the error:

[[401,1],0][../../../../../openmpi-1.6.3/ompi/mca/btl/tcp/btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.X.X failed: No route to host (113)

I'm wondering how I can go about fixing this. This program is running across multiple Linux nodes, by the way :).&#194;&#160;

BTW, I'm a girl.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22124/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22125.php">Gus Correa: "Re: [OMPI users] Trouble with Sending Multiple messages to the Same Machine"</a>
<li><strong>Previous message:</strong> <a href="22123.php">Elias Rudberg: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22125.php">Gus Correa: "Re: [OMPI users] Trouble with Sending Multiple messages to the Same Machine"</a>
<li><strong>Reply:</strong> <a href="22125.php">Gus Correa: "Re: [OMPI users] Trouble with Sending Multiple messages to the Same Machine"</a>
<li><strong>Reply:</strong> <a href="22178.php">Iliev, Hristo: "Re: [OMPI users] Trouble with Sending Multiple messages to the Same	Machine"</a>
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
