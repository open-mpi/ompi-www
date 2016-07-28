<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  1 20:29:48 2006" -->
<!-- isoreceived="20060902002948" -->
<!-- sent="Sat, 02 Sep 2006 09:29:01 +0900" -->
<!-- isosent="20060902002901" -->
<!-- name="Tobias Graf" -->
<!-- email="tgraf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with C++ Binding" -->
<!-- id="44F8D04D.7030203_at_hydra.t.u-tokyo.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C11DA0D0.25249%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Tobias Graf (<em>tgraf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-01 20:29:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1814.php">Eng. A.A. Isola: "[OMPI users] Can Open MPI support SOLARIS OS?"</a>
<li><strong>Previous message:</strong> <a href="1812.php">Brian Barrett: "Re: [OMPI users] question about passing MPI communicator"</a>
<li><strong>In reply to:</strong> <a href="1810.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/1961.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>thank you very much for your reply!
<br>
<p><span class="quotelev1">&gt; I am unfortunately unable to replicate your problem.  :-(
</span><br>
<p>Today I also tried the code by using gcc (V 4.0.2) to compile OpenMPI,
<br>
and with this set up the example is working fine. So I guess there is a
<br>
problem when I use the Intel C++ compiler (V9.1.042).
<br>
<p><span class="quotelev1">&gt; Can you confirm that you're getting the &quot;right&quot; mpi.h?  That's the most
</span><br>
<span class="quotelev1">&gt; obvious problem that I can think of.
</span><br>
<p>Yes, I believe, that the right mpi.h is used (there is actually no other
<br>
mpi.h on my computer).
<br>
<p><span class="quotelev1">&gt; If it seems to be right, can you compile your program with debugging enabled
</span><br>
<span class="quotelev1">&gt; and step through it with a debugger?  A trivial program like this does not
</span><br>
<span class="quotelev1">&gt; need to be started via mpirun -- you should be able to just launch it
</span><br>
<span class="quotelev1">&gt; directly in a debugger (e.g., put a breakpoint in main() and step into
</span><br>
<span class="quotelev1">&gt; MPI::COMM_WORLD.Get_rank()).
</span><br>
<span class="quotelev1">&gt; OMPI's C++ bindings are layered on top of the C bindings, so you should step
</span><br>
<span class="quotelev1">&gt; into an inlined C++ function that calls MPI_Comm_rank(), and see if the
</span><br>
<span class="quotelev1">&gt; communicator that it was invoked with is, indeed, MPI_COMM_WORLD.
</span><br>
<p>I did this and here I found a small problem when the debugger steps into
<br>
(comm_inln.h):
<br>
<p>inline int MPI::Comm::Get_rank() const
<br>
{
<br>
&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;(void)MPI_Comm_rank (mpi_comm, &amp;rank);
<br>
&nbsp;&nbsp;return rank;
<br>
}
<br>
<p>When I check the value for mpi_comm, it is just null (0x0), so I guess
<br>
the communicator is not initialized correctly when the MPI::COMM_WORLD
<br>
object is created. For the case of gcc, the value for mpi_comm seems to
<br>
be correct. I attached 2 postscript files created with ddd, showing the
<br>
MPI::COMM_WORLD object right after MPI::Init (for gcc and for the Intel
<br>
compiler).
<br>
I will try to have a closer look today or tomorrow, maybe I can figure
<br>
out what went wrong (probably just a missing compiler switch).
<br>
<p>Thank you,
<br>
Tobias
<br>
<p><p>

<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1813/dddgraph_intel.ps.gz">dddgraph_intel.ps.gz</a>
</ul>
<!-- attachment="dddgraph_intel.ps.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1813/dddgraph_gcc.ps.gz">dddgraph_gcc.ps.gz</a>
</ul>
<!-- attachment="dddgraph_gcc.ps.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1814.php">Eng. A.A. Isola: "[OMPI users] Can Open MPI support SOLARIS OS?"</a>
<li><strong>Previous message:</strong> <a href="1812.php">Brian Barrett: "Re: [OMPI users] question about passing MPI communicator"</a>
<li><strong>In reply to:</strong> <a href="1810.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/1961.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
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
