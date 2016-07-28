<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 13 20:20:43 2006" -->
<!-- isoreceived="20060914002043" -->
<!-- sent="Wed, 13 Sep 2006 20:20:28 -0400" -->
<!-- isosent="20060914002028" -->
<!-- name="Wael Sinno" -->
<!-- email="wael.sinno_at_[hidden]" -->
<!-- subject="[OMPI users] Error initializing application linked with UnixODBC" -->
<!-- id="002a01c6d793$9626d710$af01640a_at_BLOXWAEL" -->
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
<strong>From:</strong> Wael Sinno (<em>wael.sinno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-13 20:20:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1864.php">chris.neale_at_[hidden]: "[OMPI users] tcp short settings"</a>
<li><strong>Previous message:</strong> <a href="1862.php">Christian Kauhaus: "Re: [OMPI users] OpenMPI + NAT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have an application that uses the UnixODBC library
<br>
(<a href="http://www.unixodbc.org">http://www.unixodbc.org</a>) and MPI. When trying to run a program linked with
<br>
UnixODBC, I immediately get an error, regardless of the calls in the
<br>
program, i.e. OpenMPI fails during MPI_Init, which is the first call in the
<br>
program.
<br>
<p>I tried a simple experiment using the following program (trivial to
<br>
demonstrate the bug) : 
<br>
<p><p>#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;Initializing MPI&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;MPI Initialized&quot; &lt;&lt; std::endl;
<br>
<p>&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;My rank is : &quot; &lt;&lt; rank &lt;&lt; std::endl;
<br>
<p>&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;Shutting down MPI&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p><p><p>If I compile this normally without UnixODBC, everything is fine:
<br>
<p>[wsinno_at_cluster openmpi_bug]$ mpic++ main.cpp
<br>
[wsinno_at_cluster openmpi_bug]$ mpiexec -n 2 ./a.out
<br>
Initializing MPI
<br>
Initializing MPI
<br>
MPI Initialized
<br>
My rank is : 0
<br>
Shutting down MPI
<br>
MPI Initialized
<br>
My rank is : 1
<br>
Shutting down MPI
<br>
<p><p><p>If I compile and link in UnixODBC, I get the following problem:
<br>
<p>[wsinno_at_cluster openmpi_bug]$ mpic++ main.cpp -L UnixODBC/lib -lodbc
<br>
[wsinno_at_cluster openmpi_bug]$ mpiexec -n 2 ./a.out
<br>
Initializing MPI
<br>
[cluster.logicblox.local:02272] [NO-NAME] ORTE_ERROR_LOG: Not found in file
<br>
runtime/orte_init_stage1.c at line 214
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_sds_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -13 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init_stage1 failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p><p><p>I have tried using iodbc (<a href="http://www.iodbc.org">http://www.iodbc.org</a>) instead, and that seems to
<br>
work fine. Attached are the config.log and ompi_info output.
<br>
<p>Wael.
<br>
<p><p>

<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1863/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1863/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1864.php">chris.neale_at_[hidden]: "[OMPI users] tcp short settings"</a>
<li><strong>Previous message:</strong> <a href="1862.php">Christian Kauhaus: "Re: [OMPI users] OpenMPI + NAT"</a>
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
