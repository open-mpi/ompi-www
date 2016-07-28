<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Feb 11 15:45:35 2007" -->
<!-- isoreceived="20070211204535" -->
<!-- sent="Sun, 11 Feb 2007 21:45:29 +0100" -->
<!-- isosent="20070211204529" -->
<!-- name="matteo.guglielmi_at_[hidden]" -->
<!-- email="matteo.guglielmi_at_[hidden]" -->
<!-- subject="[OMPI users] openMPI 1.1.4 - connect() failed with errno=111" -->
<!-- id="1171226729.45cf806971700_at_imapwww.epfl.ch" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> <a href="mailto:matteo.guglielmi_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openMPI%201.1.4%20-%20connect()%20failed%20with%20errno=111"><em>matteo.guglielmi_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-02-11 15:45:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2667.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="2665.php">Jeff Squyres: "Re: [OMPI users] Error using MPI_WAITALL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2667.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="2667.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since I've installed openmpi I cannot submit any job that uses cpus from
<br>
different machines.
<br>
<p>### hostfile ###
<br>
lcbcpc02.epfl.ch slots=4 max-slots=4
<br>
lcbcpc04.epfl.ch slots=4 max-slots=4
<br>
################
<br>
<p>### error message ###
<br>
[matteo_at_lcbcpc02 TEST]$ mpirun --hostfile ~matteo/hostfile -np 8
<br>
/home/matteo/Software/NWChem/5.0/bin/nwchem ./nwchem.nw
<br>
[0,1,5][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
[0,1,6][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=111
<br>
6: lcbcpc04.epfl.ch len=16
<br>
[0,1,4][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=111
<br>
4: lcbcpc04.epfl.ch len=16
<br>
[0,1,7][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=111
<br>
7: lcbcpc04.epfl.ch len=16
<br>
connect() failed with errno=111
<br>
5: lcbcpc04.epfl.ch len=16
<br>
#####################
<br>
<p>I did disable the firewall on both machines but I still get that error message.
<br>
<p>Thanks,
<br>
MG.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2667.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="2665.php">Jeff Squyres: "Re: [OMPI users] Error using MPI_WAITALL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2667.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="2667.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
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
