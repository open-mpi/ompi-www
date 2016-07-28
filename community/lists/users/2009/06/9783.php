<?
$subject_val = "[OMPI users] Network Problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 14:49:55 2009" -->
<!-- isoreceived="20090630184955" -->
<!-- sent="Tue, 30 Jun 2009 14:49:53 -0400" -->
<!-- isosent="20090630184953" -->
<!-- name="David Ronis" -->
<!-- email="David.Ronis_at_[hidden]" -->
<!-- subject="[OMPI users] Network Problem?" -->
<!-- id="1246387793.25367.9.camel_at_ronispc.chem.mcgill.ca" -->
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
<strong>Subject:</strong> [OMPI users] Network Problem?<br>
<strong>From:</strong> David Ronis (<em>David.Ronis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-30 14:49:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9784.php">Jose Gracia: "[OMPI users] btl_openib_connect_oob.c:459:qp_create_one: error creating qp"</a>
<li><strong>Previous message:</strong> <a href="9782.php">Prentice Bisbal: "Re: [OMPI users] Infiniband requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9823.php">Jeff Squyres: "Re: [OMPI users] Network Problem?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9823.php">Jeff Squyres: "Re: [OMPI users] Network Problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(This may be a duplicate.  An earlier post seems to have been lost).
<br>
<p>I'm using openmpi (1.3.2) to run on 3 dual processor machines (running
<br>
linux, slackware-12.1, gcc-4.4.0).  Two are directly on my LAN while
<br>
the 3rd is connected to my LAN via VPN and NAT (I can communicate in
<br>
either direction from any of the machines to the remote machines using
<br>
its NAT address).
<br>
<p>The program I'm trying to run is very simple in terms of MPI.
<br>
Basically it is:
<br>
<p>main()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[snip];
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;myrank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[snip]; 
<br>
<p>&nbsp;&nbsp;if(myrank==0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;i=MPI_Reduce(MPI_IN_PLACE, C, N, MPI_DOUBLE, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;i=MPI_Reduce(C, MPI_IN_PLACE, N, MPI_DOUBLE, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM, 0, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;if(i!=MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;MPI_Reduce (C) fails on processor %d\n&quot;, myrank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[snip];
<br>
<p>}
<br>
<p>I run by invoking:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -v -np ${NPROC} -hostfile ${HOSTFILE} --stdin none $*
<br>
<span class="quotelev1">&gt; /dev/null
</span><br>
<p>If I run on the 4 nodes that are physically on the LAN it works as
<br>
expected.  When I add the nodes on the remote machine things don't
<br>
work properly:
<br>
<p>1.  If I start with NPROC=6 on one of the LAN machines all 6 nodes
<br>
start (as shown by running ps), and all get to the MPI_HARVEST
<br>
calls. At that point things hang (I see no network traffic, which
<br>
given the size of the array I'm trying to reduce is strange).
<br>
<p>2.  If I start on the remote with NPROC=6, the only the mpirun call
<br>
shows up under ps on the remote, while nothing shows up on the other
<br>
nodes.  Killing the process gives messages like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostname - daemon did not report back when launched
<br>
<p>3.  If I start on the remote with NPROC=2, the 2 processes start on
<br>
the remote and finish properly.
<br>
<p>My suspicion is that there's some bad interaction with NAT and
<br>
authentication. 
<br>
<p>Any suggestions?
<br>
<p>David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9784.php">Jose Gracia: "[OMPI users] btl_openib_connect_oob.c:459:qp_create_one: error creating qp"</a>
<li><strong>Previous message:</strong> <a href="9782.php">Prentice Bisbal: "Re: [OMPI users] Infiniband requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9823.php">Jeff Squyres: "Re: [OMPI users] Network Problem?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9823.php">Jeff Squyres: "Re: [OMPI users] Network Problem?"</a>
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
