<?
$subject_val = "[OMPI users] Newbie question";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 19:33:00 2016" -->
<!-- isoreceived="20160403233300" -->
<!-- sent="Sun, 3 Apr 2016 19:32:58 -0400" -->
<!-- isosent="20160403233258" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] Newbie question" -->
<!-- id="CAHXxYDg8ePU-hhZ7E9MYM=g0zzq2W8TT3iK7xjuw-i33F5Agdg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Newbie question<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-03 19:32:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28877.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="28875.php">Marco Atzeri: "Re: [OMPI users] Building on Windows w/o Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15335.php">Siegmar Gross: "Re: [OMPI users] Newbie question"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15335.php">Siegmar Gross: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="28877.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>I don't mean to be competing for the 'silliest question of the year award',
<br>
but I can't figure this out on my own:
<br>
<p>My 'cluster' has 2 machines, bigMPI and smallMPI. They are connected via
<br>
several (types of) networks and the connectivity is OK.
<br>
<p>In this setup, the following program hangs after printing
<br>
<p>Hello world from processor smallMPI, rank 0 out of 2 processors
<br>
Hello world from processor bigMPI, rank 1 out of 2 processors
<br>
smallMPI sent haha!
<br>
<p><p>Obviously it is hanging at MPI_Recv(). But why? My command line is as
<br>
follows, but this happens if I try openib BTL (instead of TCP) as well.
<br>
<p>mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp ./mpitest
<br>
<p>It must be something *really* trivial, but I am drawing a blank right now.
<br>
<p>Please help!
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;string.h&gt;
<br>
<p>int main(int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int world_size, world_rank, name_len;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char hostname[MPI_MAX_PROCESSOR_NAME], buf[8];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(hostname, &amp;name_len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello world from processor %s, rank %d out of %d processors\n&quot;,
<br>
hostname, world_rank, world_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (world_rank == 1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buf, 6, MPI_CHAR, 0, 99, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s received %s\n&quot;, hostname, buf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;strcpy(buf, &quot;haha!&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buf, 6, MPI_CHAR, 1, 99, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s sent %s\n&quot;, hostname, buf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p>We learn from history that we never learn from history.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28876/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28877.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="28875.php">Marco Atzeri: "Re: [OMPI users] Building on Windows w/o Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15335.php">Siegmar Gross: "Re: [OMPI users] Newbie question"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15335.php">Siegmar Gross: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="28877.php">Gilles Gouaillardet: "Re: [OMPI users] Newbie question"</a>
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
