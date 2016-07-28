<?
$subject_val = "[OMPI users] Bug when mixing sent types in version 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  8 09:44:06 2012" -->
<!-- isoreceived="20120608134406" -->
<!-- sent="Fri, 8 Jun 2012 15:43:58 +0200" -->
<!-- isosent="20120608134358" -->
<!-- name="BOUVIER Benjamin" -->
<!-- email="benjamin.bouvier_at_[hidden]" -->
<!-- subject="[OMPI users] Bug when mixing sent types in version 1.6" -->
<!-- id="21603_1339163039_4FD2019F_21603_8118_1_49CF97100DDD4B4A9C4DC89905CA59A310187E5E1D_at_THSONEA01CMS07P.one.grp" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Bug when mixing sent types in version 1.6<br>
<strong>From:</strong> BOUVIER Benjamin (<em>benjamin.bouvier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-08 09:43:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19485.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19483.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19485.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types in version 1.6"</a>
<li><strong>Reply:</strong> <a href="19485.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types in version 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>I have currently a bug when launching a very simple MPI program with mpirun, on connected nodes. This happens when I send an INT and then some CHAR strings from a master node to a worker node. 
<br>
Here is the minimal code to reproduce the bug :
<br>
<p><p># include &lt;mpi.h&gt;
<br>
# include &lt;stdio.h&gt;
<br>
# include &lt;string.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank, size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const char someString[] = &quot;Can haz cheezburgerz?&quot;;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank( MPI_COMM_WORLD, &amp; rank );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size( MPI_COMM_WORLD, &amp; size );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if ( rank == 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int len = strlen( someString );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for( i = 1; i &lt; size; ++i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send( &amp;len, 1, MPI_INT, i, 0, MPI_COMM_WORLD );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send( &amp;someString, len+1, MPI_CHAR, i, 0, MPI_COMM_WORLD );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char buffer[ 128 ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int receivedLen;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status stat;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv( &amp;receivedLen, 1, MPI_INT, 0, 0, MPI_COMM_WORLD, &amp;stat );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;[Worker] Length : %d\n&quot;, receivedLen );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv( buffer, receivedLen+1, MPI_CHAR, 0, 0, MPI_COMM_WORLD, &amp;stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;[Worker] String : %s\n&quot;, buffer );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p><p><p>I know that there is a better way to send a string, by giving a maximum buffer size at the second MPI_Recv, but there is no the main topic here.
<br>
The launch works locally (i.e when the 2 processes are launched on one machine), but doesn't work when the 2 processes are dispatched in 2 machines through network (i.e one per host). In this case, the worker correctly reads the INT, and then master and worker block on the next call.
<br>
I have no issue when sending only char strings or only numbers. This only happens when sending char strings then numbers, or in the other order.
<br>
<p>I'm using OpenMPI version 1.6, locally compiled. 
<br>
$ uname -a
<br>
Linux trtp7097 2.6.32-220.13.1.el6.x86_64 #1 SMP Thu Mar 29 11:46:40 EDT 2012 x86_64 x86_64 x86_64 GNU/Linux
<br>
$ cat /etc/redhat-release 
<br>
Red Hat Enterprise Linux Workstation release 6.2 (Santiago)
<br>
<p>Is it a bad use of the framework or could it be a bug ?
<br>
<p>Thank you in advance.
<br>
Benjamin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19485.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19483.php">Siegmar Gross: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19485.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types in version 1.6"</a>
<li><strong>Reply:</strong> <a href="19485.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types in version 1.6"</a>
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
