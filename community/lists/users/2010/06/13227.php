<?
$subject_val = "[OMPI users] Unable to connect to a server using MX MTL with TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  4 19:18:35 2010" -->
<!-- isoreceived="20100604231835" -->
<!-- sent="Fri, 4 Jun 2010 19:18:51 -0400" -->
<!-- isosent="20100604231851" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[OMPI users] Unable to connect to a server using MX MTL with TCP" -->
<!-- id="9D96C3B9C12B4C4A9BD31761B4F824104610D906FF_at_imibou-nt-1-ex.IMI.LOCAL" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9D96C3B9C12B4C4A9BD31761B4F824104610D906FE_at_imibou-nt-1-ex.IMI.LOCAL" -->
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
<strong>Subject:</strong> [OMPI users] Unable to connect to a server using MX MTL with TCP<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-04 19:18:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13228.php">Audet, Martin: "[OMPI users] RE : Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>Previous message:</strong> <a href="13226.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs onthe	samemachine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13228.php">Audet, Martin: "[OMPI users] RE : Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>Reply:</strong> <a href="13228.php">Audet, Martin: "[OMPI users] RE : Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>Reply:</strong> <a href="13229.php">Scott Atchley: "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi OpenMPI_Users and OpenMPI_Developers,
<br>
<p>I'm unable to connect a client application using MPI_Comm_connect() to a server job (the server job calls MPI_Open_port() before calling by MPI_Comm_accept()) when the server job uses MX MTL (although it works without problems when the server uses MX BTL). The server job runs on a cluster connected to a Myrinet 10G network (MX 1.2.11) in addition to an ordinary Ethernet network. The client runs on a different machine, not connected to the Myrinet network but accessible via the Ethernet network.
<br>
<p>Joined to this message are the simple server and client programs (87 lines total) called simpleserver.c and simpleclient.c .
<br>
<p>Note we are using OpenMPI 1.4.2 on x86_64 Linux  (server: Fedora 7 client: Fedora 12).
<br>
<p>Compiling these programs with mpicc on the server front node (fn1) and client workstation (linux15) works well:
<br>
<p>&nbsp;&nbsp;&nbsp;[audet_at_fn1 bench]$ mpicc simpleserver.c -o simpleserver
<br>
<p>&nbsp;&nbsp;&nbsp;[audet_at_linux15 mpi]$ mpicc simpleclient.c -o simpleclient
<br>
<p>Then if we start the server on the cluster (job is started on cluster node cn18) and asking to use MTL :
<br>
<p>&nbsp;&nbsp;&nbsp;[audet_at_fn1 bench]$ mpiexec -x MX_RCACHE=2 -machinefile machinefile_cn18 --mca mtl mx --mca pml cm -n 1 ./simpleserver
<br>
<p>It prints the server port (Note we uses MX_RCACHE=2 to avoid a warning but it doesn't affect the current issue) :
<br>
<p>&nbsp;&nbsp;&nbsp;Server port = '3548905472.0;tcp://172.17.15.20:39517+3548905473.0;tcp://172.17.10.18:47427:300'
<br>
<p>Then starting the client on the workstation with this port number:
<br>
<p>&nbsp;&nbsp;&nbsp;[audet_at_linux15 mpi]$ mpiexec -n 1 ./simpleclient '3548905472.0;tcp://172.17.15.20:39517+3548905473.0;tcp://172.17.10.18:47427:300'
<br>
<p>The server process core dump as follow:
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_accept() sucessful...
<br>
&nbsp;&nbsp;&nbsp;[cn18:24582] *** Process received signal ***
<br>
&nbsp;&nbsp;&nbsp;[cn18:24582] Signal: Segmentation fault (11)
<br>
&nbsp;&nbsp;&nbsp;[cn18:24582] Signal code: Address not mapped (1)
<br>
&nbsp;&nbsp;&nbsp;[cn18:24582] Failing at address: 0x38
<br>
&nbsp;&nbsp;&nbsp;[cn18:24582] [ 0] /lib64/libpthread.so.0 [0x305de0dd20]
<br>
&nbsp;&nbsp;&nbsp;[cn18:24582] [ 1] /usr/local/openmpi-1.4.2/lib/openmpi/mca_mtl_mx.so [0x2aaaad6a7e6d]
<br>
&nbsp;&nbsp;&nbsp;[cn18:24582] [ 2] /usr/local/openmpi-1.4.2/lib/openmpi/mca_pml_cm.so [0x2aaaad4a319d]
<br>
&nbsp;&nbsp;&nbsp;[cn18:24582] [ 3] /usr/local/openmpi/lib/libmpi.so.0(ompi_dpm_base_disconnect_init+0xbf) [0x2aaaaab1403f]
<br>
&nbsp;&nbsp;&nbsp;[cn18:24582] [ 4] /usr/local/openmpi-1.4.2/lib/openmpi/mca_dpm_orte.so [0x2aaaaed0eb19]
<br>
&nbsp;&nbsp;&nbsp;[cn18:24582] [ 5] /usr/local/openmpi/lib/libmpi.so.0(PMPI_Comm_disconnect+0xa0) [0x2aaaaaaf4f20]
<br>
&nbsp;&nbsp;&nbsp;[cn18:24582] [ 6] ./simpleserver(main+0x14c) [0x400d04]
<br>
&nbsp;&nbsp;&nbsp;[cn18:24582] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x305ce1daa4]
<br>
&nbsp;&nbsp;&nbsp;[cn18:24582] [ 8] ./simpleserver [0x400b09]
<br>
&nbsp;&nbsp;&nbsp;[cn18:24582] *** End of error message ***
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;mpiexec noticed that process rank 0 with PID 24582 on node cn18 exited on signal 11 (Segmentation fault).
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;[audet_at_fn1 bench]$
<br>
<p>And the client stops with the following error message:
<br>
<p>&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;At least one pair of MPI processes are unable to reach each other for
<br>
&nbsp;&nbsp;&nbsp;MPI communications.  This means that no Open MPI device has indicated
<br>
&nbsp;&nbsp;&nbsp;that it can be used to communicate between these processes.  This is
<br>
&nbsp;&nbsp;&nbsp;an error; Open MPI requires that all MPI processes be able to reach
<br>
&nbsp;&nbsp;&nbsp;each other.  This error can sometimes be the result of forgetting to
<br>
&nbsp;&nbsp;&nbsp;specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process 1 ([[31386,1],0]) is on host: linux15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process 2 ([[54152,1],0]) is on host: cn18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTLs attempted: self sm tcp
<br>
<p>&nbsp;&nbsp;&nbsp;Your MPI job is now going to abort; sorry.
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_connect() sucessful...
<br>
&nbsp;&nbsp;&nbsp;Error in comm_disconnect_waitall
<br>
&nbsp;&nbsp;&nbsp;[audet_at_linux15 mpi]$
<br>
<p>I really don't understand this message because the client can connect with the server using tcp on Ethernet.
<br>
<p>Moreover if I add MCA options when I start the server to include TCP BTL, the same problems happens (the argument list then becomes: '--mca mtl mx --mca pml cm --mca btl tcp,shared,self' ).
<br>
<p>However if I remove all MCA options when I start the server (e.g. when BTL MX is used), no such problems appears. Everything goes fine also if I start the server with an explicit request to use BTL MX and TCP (e.g. with options '--mca btl mx,tcp,sm,self').
<br>
<p>Four running our server application we really prefer to use MX MTL over MX BTL since it is much faster with MTL (although the usual ping pong test is only slightly faster with MTL).
<br>
<p>Enclosed also the output of ompi_info --all runned on the cluster node (cn18) and the workstation (linux15).
<br>
<p>Please help me. I think my problem is only a question of wrong MCA parameters (which is obscure for me).
<br>
<p>Thanks,
<br>
<p>Martin Audet, Research Officer
<br>
Industrial Material Institute
<br>
National Research Council of Canada
<br>
75 de Mortagne, Boucherville, QC, J4B 6Y4, Canada
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13228.php">Audet, Martin: "[OMPI users] RE : Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>Previous message:</strong> <a href="13226.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs onthe	samemachine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13228.php">Audet, Martin: "[OMPI users] RE : Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>Reply:</strong> <a href="13228.php">Audet, Martin: "[OMPI users] RE : Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>Reply:</strong> <a href="13229.php">Scott Atchley: "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
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
