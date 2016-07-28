<?
$subject_val = "[OMPI users] mpiexec seems to be resolving names on server instead of each node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 20:45:15 2009" -->
<!-- isoreceived="20090418004515" -->
<!-- sent="Sat, 18 Apr 2009 03:45:04 +0300" -->
<!-- isosent="20090418004504" -->
<!-- name="Micha Feigin" -->
<!-- email="michf_at_[hidden]" -->
<!-- subject="[OMPI users] mpiexec seems to be resolving names on server instead of each node" -->
<!-- id="20090418034504.017b6f2b_at_vivalunalitshi.luna.local" -->
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
<strong>Subject:</strong> [OMPI users] mpiexec seems to be resolving names on server instead of each node<br>
<strong>From:</strong> Micha Feigin (<em>michf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-17 20:45:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8970.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8968.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9244.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9244.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13714.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having problems running openmpi 1.3 on my claster and I was wondering if
<br>
anyone else is seeing this problem and/or can give hints on how to solve it
<br>
<p>As far as I understand the error, mpiexec resolves host names on the master node
<br>
it is run on instead of an each host seperately. This works in an environment where
<br>
each hostname resolves to the same address on each host (cluster connected via a
<br>
switch) but fails where it resolves to different addresses (ring/star setups for
<br>
example where each computer is connected directly to all/some of the others)
<br>
<p>I'm not 100% sure that this is the problem as I'm seeing success on a single
<br>
case where this should probably fail but it is my best bet from the error message.
<br>
<p>version 1.2.8 worked fine for the same simple program (a simple hellow world that
<br>
just comunicated the computer name for each process)
<br>
<p>An example output:
<br>
<p>mpiexec is run on the master node hubert and is set to run the processes on two nodes
<br>
fry and leela. As is understood from the error messages leela tries to connect to
<br>
fry on address 192.168.1.2 which is it's address on hubert but not leela (where it
<br>
is 192.168.4.1)
<br>
<p>This is a four node claster all interconnected
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;192.168.1.1      192.168.1.2
<br>
hubert ------------------------ fry
<br>
&nbsp;&nbsp;|    \                    /    | 192.168.4.1
<br>
&nbsp;&nbsp;|       \              /       |
<br>
&nbsp;&nbsp;|          \        /          |
<br>
&nbsp;&nbsp;|             \  /             |
<br>
&nbsp;&nbsp;|             /  \             |
<br>
&nbsp;&nbsp;|          /        \          |
<br>
&nbsp;&nbsp;|       /              \       |
<br>
&nbsp;&nbsp;|    /                     \   | 192.168.4.2
<br>
hermes ----------------------- leelas
<br>
<p>=================================================================
<br>
mpiexec -np 8 -H fry,leela test_mpi
<br>
Hello MPI from the server process of 8 on fry!
<br>
[[36620,1],1][../../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:589:mca_btl_tcp_endpoint_start_connect] from leela to: fry Unable to connect to the peer 192.168.1.2 on port 154: Network is unreachable
<br>
<p>[[36620,1],3][../../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:589:mca_btl_tcp_endpoint_start_connect] from leela to: fry Unable to connect to the peer 192.168.1.2 on port 154: Network is unreachable
<br>
<p>[[36620,1],7][../../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:589:mca_btl_tcp_endpoint_start_connect] from leela to: fry Unable to connect to the peer 192.168.1.2 on port 154: Network is unreachable
<br>
<p>[leela:4436] *** An error occurred in MPI_Send
<br>
[leela:4436] *** on communicator MPI_COMM_WORLD
<br>
[leela:4436] *** MPI_ERR_INTERN: internal error
<br>
[leela:4436] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[[36620,1],5][../../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:589:mca_btl_tcp_endpoint_start_connect] from leela to: fry Unable to connect to the peer 192.168.1.2 on port 154: Network is unreachable
<br>
<p>--------------------------------------------------------------------------
<br>
mpiexec has exited due to process rank 1 with PID 4433 on
<br>
node leela exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpiexec (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[hubert:11312] 3 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[hubert:11312] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
=================================================================
<br>
<p>This seems to be a directional issue as running the program -H fry,leela failes
<br>
where -H leela,fry works, same behaviour for all senarious except those that include
<br>
the master node (hubert) where it resolves the external ip (from an external dns) instead
<br>
of the internal ip (from the hosts file). thus one direction fails (no external connection
<br>
at the moment for all but the master) and the other causes a lockup
<br>
<p>I hope that the explenation is not too convoluted
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8970.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8968.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9244.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9244.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13714.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
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
