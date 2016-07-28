<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  2 19:18:39 2007" -->
<!-- isoreceived="20070402231839" -->
<!-- sent="Mon, 02 Apr 2007 19:15:41 -0400" -->
<!-- isosent="20070402231541" -->
<!-- name="Heywood, Todd" -->
<!-- email="heywood_at_[hidden]" -->
<!-- subject="[OMPI users] btl_tcp_endpoint errors" -->
<!-- id="C23706DD.144E%heywood_at_cshl.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Heywood, Todd (<em>heywood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-02 19:15:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2986.php">Adrian Knoth: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<li><strong>Previous message:</strong> <a href="2984.php">Jeff Stuart: "[OMPI users] problem with MPI_Bcast over ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2986.php">Adrian Knoth: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<li><strong>Reply:</strong> <a href="2986.php">Adrian Knoth: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm testing a couple of applications with OpenMPI v1.2b, using over 1000
<br>
processors, and am getting TCP errors. These apps ran fine for a lesser
<br>
number of processors.
<br>
<p>The errors can be different for different runs. Here's one:
<br>
<p>[blade90][0,1,223][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:572:mc
<br>
a_btl_tcp_endpoint_complete_connect] connect() failed with errno=113
<br>
[blade82][0,1,203][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:572:mc
<br>
a_btl_tcp_endpoint_complete_connect] connect() failed with errno=113
<br>
<p>And I've appended the output from a second type of error, on another trial
<br>
run.
<br>
<p>I only have a single interface, and understand I'm pushing the capacity of
<br>
the single gigE. But I'd like to know what these errors signify.
<br>
<p>Thanks,
<br>
<p>Todd
<br>
<p>-----
<br>
<p><p><p>[blade6][0,1,10][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:mca_
<br>
btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade309:12625] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[blade309:12625] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[blade5][0,1,9][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:mca_b
<br>
tl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade134:12179] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[blade3][0,1,4][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:mca_b
<br>
tl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade484][0,1,1060][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:
<br>
mca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade146][0,1,400][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking]
<br>
[blade157][0,1,444][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking]
<br>
[blade212][0,1,532][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade134:12182] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
recv() failed with errno=104
<br>
recv() failed with errno=104
<br>
[blade146][0,1,402][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade157][0,1,446][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade4][0,1,6][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:mca_b
<br>
tl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade485][0,1,1062][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:
<br>
mca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade214][0,1,534][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade146][0,1,403][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking]
<br>
[blade4][0,1,7][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:mca_b
<br>
tl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade486][0,1,1063][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:
<br>
mca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade157][0,1,447][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking]
<br>
[blade215][0,1,535][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
recv() failed with errno=104
<br>
recv() failed with errno=104
<br>
[blade146][0,1,401][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade157][0,1,445][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade3][0,1,5][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:mca_b
<br>
tl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade485][0,1,1061][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:
<br>
mca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade213][0,1,533][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade62][0,1,124][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:mc
<br>
a_btl_tcp_endpoint_recv_blocking] [blade71:12423] mca_btl_tcp_frag_send:
<br>
writev failed with errno=104
<br>
[blade132][0,1,344][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking]
<br>
[blade389][0,1,872][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
recv() failed with errno=104
<br>
[blade132][0,1,347][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade390][0,1,873][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
recv() failed with errno=104
<br>
[blade62][0,1,125][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:mc
<br>
a_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade62][0,1,127][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:mc
<br>
a_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade72:12411] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
[blade132][0,1,345][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade391][0,1,875][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade390][0,1,874][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade62][0,1,126][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:mc
<br>
a_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
[blade132][0,1,346][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:415:m
<br>
ca_btl_tcp_endpoint_recv_blocking] recv() failed with errno=104
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2986.php">Adrian Knoth: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<li><strong>Previous message:</strong> <a href="2984.php">Jeff Stuart: "[OMPI users] problem with MPI_Bcast over ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2986.php">Adrian Knoth: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<li><strong>Reply:</strong> <a href="2986.php">Adrian Knoth: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
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
