<?
$subject_val = "[OMPI devel] Deadlock when creating too many communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  5 16:52:59 2009" -->
<!-- isoreceived="20090905205259" -->
<!-- sent="Sat, 5 Sep 2009 15:52:14 -0500" -->
<!-- isosent="20090905205214" -->
<!-- name="Wolfgang Bangerth" -->
<!-- email="bangerth_at_[hidden]" -->
<!-- subject="[OMPI devel] Deadlock when creating too many communicators" -->
<!-- id="200909051552.14912.bangerth_at_math.tamu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Deadlock when creating too many communicators<br>
<strong>From:</strong> Wolfgang Bangerth (<em>bangerth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-05 16:52:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6792.php">Nadia Derbey: "Re: [OMPI devel] version number issues"</a>
<li><strong>Previous message:</strong> <a href="6790.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6841.php">Wolfgang Bangerth: "Re: [OMPI devel] Deadlock when creating too many communicators"</a>
<li><strong>Reply:</strong> <a href="6841.php">Wolfgang Bangerth: "Re: [OMPI devel] Deadlock when creating too many communicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howdy,
<br>
here's a creative way to deadlock a program: create and destroy 65500 and 
<br>
some communicators and send a message on each of them:
<br>
----------------------------------------
<br>
#include &lt;mpi.h&gt;
<br>
<p>#define CHECK(a)				\
<br>
&nbsp;&nbsp;{						\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int err = (a);				\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (err != 0) std::cout &lt;&lt; &quot;Error in line &quot; &lt;&lt; __LINE__ &lt;&lt; std::endl; \
<br>
&nbsp;&nbsp;}
<br>
<p>int main (int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int a=0, b;
<br>
<p>&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;for (int i=0; i&lt;1000000; ++i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (i % 100 == 0) std::cout&lt;&lt; &quot;Duplication event &quot; &lt;&lt; i &lt;&lt; std::endl;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm dup;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHECK(MPI_Comm_dup (MPI_COMM_WORLD, &amp;dup));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHECK(MPI_Allreduce(&amp;a, &amp;b, 1, MPI_INT, MPI_MIN, dup));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHECK(MPI_Comm_free (&amp;dup));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
-------------------------------------------
<br>
If you run this, for example, on two processors with OpenMPI 1.2.6 or 
<br>
1.3.2, you'll see that the program runs until after it produces 65500 as 
<br>
output, and then just hangs -- on my system somewhere in the operating 
<br>
system poll(), running full steam.
<br>
<p>Since I take care of destroying the communicators again, I would have 
<br>
expected this to work. I use creating many communicators basically as a 
<br>
debugging tool: every object gets its own communicator to work on to 
<br>
ensure that different objects don't communicate by accident with each 
<br>
other just because they all use MPI_COMM_WORLD. It would be nice if this 
<br>
mode of using MPI could be made to work.
<br>
<p>Best &amp; thanks in advance!
<br>
&nbsp;Wolfgang
<br>
<p><pre>
-- 
-------------------------------------------------------------------------
Wolfgang Bangerth                email:            bangerth_at_[hidden]
                                 www: <a href="http://www.math.tamu.edu/~bangerth/">http://www.math.tamu.edu/~bangerth/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6792.php">Nadia Derbey: "Re: [OMPI devel] version number issues"</a>
<li><strong>Previous message:</strong> <a href="6790.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6841.php">Wolfgang Bangerth: "Re: [OMPI devel] Deadlock when creating too many communicators"</a>
<li><strong>Reply:</strong> <a href="6841.php">Wolfgang Bangerth: "Re: [OMPI devel] Deadlock when creating too many communicators"</a>
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
