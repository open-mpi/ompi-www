<?
$subject_val = "[OMPI users] Execution don't go back to shell after MPI_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 19 11:50:21 2010" -->
<!-- isoreceived="20100519155021" -->
<!-- sent="Wed, 19 May 2010 17:50:08 +0200" -->
<!-- isosent="20100519155008" -->
<!-- name="Yves Caniou" -->
<!-- email="yves.caniou_at_[hidden]" -->
<!-- subject="[OMPI users] Execution don't go back to shell after MPI_Finalize()" -->
<!-- id="201005191750.08444.yves.caniou_at_ens-lyon.fr" -->
<!-- charset="iso 8859-15" -->
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
<strong>Subject:</strong> [OMPI users] Execution don't go back to shell after MPI_Finalize()<br>
<strong>From:</strong> Yves Caniou (<em>yves.caniou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-19 11:50:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13090.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
<li><strong>Previous message:</strong> <a href="13088.php">Christophe Peyret: "Re: [OMPI users] openmpi + share points"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13134.php">Yves Caniou: "[OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="13134.php">Yves Caniou: "[OMPI users] Program does not finish after MPI_Finalize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I use the following code:
<br>
#include &quot;stdlib.h&quot;
<br>
#include &quot;stdio.h&quot;
<br>
#include &quot;mpi.h&quot;
<br>
#include &quot;math.h&quot;
<br>
<p>#include &quot;unistd.h&quot; /* sleep */
<br>
<p>int my_num, mpi_size ;
<br>
<p>int
<br>
main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv) ;
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_num);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;mpi_size);
<br>
&nbsp;&nbsp;printf(&quot;%d calls MPI_Finalize()\n\n\n&quot;, my_num) ;
<br>
<p>&nbsp;&nbsp;MPI_Finalize() ;
<br>
}
<br>
<p>I compile and run the code on two different architectures with their own 
<br>
version/installation of open-mpi, with the command lines:
<br>
$&gt;mpicc -lm --std=c99 basis.c
<br>
$&gt;mpiexec -n 1 a.out
<br>
<p>On numerous runs of the executable, even with a nbproc equal to 1:
<br>
<p>- Using a debian open-mpi v 1.2.7rc2 installation, my code always returns to 
<br>
shell after the call to MPI_Finalize()
<br>
Kernel is 2.6.34 SMP, Intel P9600 2 cores
<br>
<p>- Using a homemade open-mpi v 1.4.2 installation, my code runs as expected, 
<br>
but instead of returning to the shell after the MPI_Finalize(), it can just 
<br>
hangs in Sl+ state.
<br>
Kernel is 2.6.18-53.1.19.el5 SMP (RedHat), Quad-Core AMD Opteron 8356
<br>
<p>I join the ompi_info of the 2 archs. I surely miss something... but what?
<br>
<p>.Yves.
<br>
<p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13089/ompi_info_deb.txt">ompi_info_deb.txt</a>
</ul>
<!-- attachment="ompi_info_deb.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13089/ompi_info_ha8000.txt">ompi_info_ha8000.txt</a>
</ul>
<!-- attachment="ompi_info_ha8000.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13090.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
<li><strong>Previous message:</strong> <a href="13088.php">Christophe Peyret: "Re: [OMPI users] openmpi + share points"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13134.php">Yves Caniou: "[OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="13134.php">Yves Caniou: "[OMPI users] Program does not finish after MPI_Finalize()"</a>
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
