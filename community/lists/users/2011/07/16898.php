<?
$subject_val = "[OMPI users] Open MPI job not joining up under TotalView.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 15:12:07 2011" -->
<!-- isoreceived="20110712191207" -->
<!-- sent="Tue, 12 Jul 2011 15:12:01 -0400" -->
<!-- isosent="20110712191201" -->
<!-- name="Peter Thompson" -->
<!-- email="peter.thompson_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI job not joining up under TotalView." -->
<!-- id="4E1C9C81.1020003_at_roguewave.com" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI job not joining up under TotalView.<br>
<strong>From:</strong> Peter Thompson (<em>peter.thompson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 15:12:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16899.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16897.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wonder if someone might have possible ideas to explore as to why this 
<br>
program might not be working correctly under TotalView.  Essentially a 
<br>
user is running a very simple hello world like program that does this:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;int rank, size;
<br>
&nbsp;&nbsp;MPI_Comm_rank( MPI_COMM_WORLD, &amp;rank );
<br>
&nbsp;&nbsp;MPI_Comm_size( MPI_COMM_WORLD, &amp;size );
<br>
&nbsp;&nbsp;printf(&quot;rank = %d, size = %d\n&quot;, rank, size );
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;exit( EXIT_SUCCESS );
<br>
}
<br>
<p><p>When run under
<br>
<p>mpirun -np 8 ./foo
<br>
<p>It spits out 8 lines with ranks 0 through 7 and a size or 8.  But when 
<br>
run under TotalView, he sees 8 lines, all of rank 0, and size of 1.  So 
<br>
it looks like the processes never combine up when on his system under 
<br>
TV.  To make this a bit more interesting, when I run the same program 
<br>
here, I do NOT see this separate behavior.  The processes all join up 
<br>
and everything looks okay.  My machine, as his, is a Mac running the 
<br>
10.6.8 Darwin.  To try and keep this replicable, I just used the native 
<br>
OpenMPI on Darwin.  TotalView is started up with
<br>
<p>totalview foo
<br>
<p>and then Parallel is chosen from the Startup Parameters window, and Open 
<br>
MPI and 8 processes are chosen.   Any thoughts about why I might see one 
<br>
8 process job, and he sees 8 single process jobs?   Are there any hidden 
<br>
debug flags I can use?
<br>
<p>Thanks,
<br>
PeterT
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16899.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16897.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
