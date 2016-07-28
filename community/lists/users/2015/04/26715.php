<?
$subject_val = "[OMPI users] hello world can't run in Ubuntu 12.04";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 09:01:38 2015" -->
<!-- isoreceived="20150414130138" -->
<!-- sent="Tue, 14 Apr 2015 21:01:33 +0800" -->
<!-- isosent="20150414130133" -->
<!-- name="Li Li" -->
<!-- email="fancyerii_at_[hidden]" -->
<!-- subject="[OMPI users] hello world can't run in Ubuntu 12.04" -->
<!-- id="CAFAd71V0pYN6LU6_S70uvP0PDw8N_W1-oDWZFMNpm1ZCtyPXtQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] hello world can't run in Ubuntu 12.04<br>
<strong>From:</strong> Li Li (<em>fancyerii_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-14 09:01:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26716.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26714.php">Chen Sijie: "[OMPI users] A Problem using fftw_mpi_plan_dft_r2c_3d"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26717.php">Ralph Castain: "Re: [OMPI users] hello world can't run in Ubuntu 12.04"</a>
<li><strong>Reply:</strong> <a href="26717.php">Ralph Castain: "Re: [OMPI users] hello world can't run in Ubuntu 12.04"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I am trying to play with openmpi in a ubuntu 12.04 machine.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I am installed openmpi 1.5 and test it with a simple program
<br>
<p>#include &lt;iostream&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int numprocessors, rank, namelen;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char processor_name[MPI_MAX_PROCESSOR_NAME];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocessors);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(processor_name, &amp;namelen);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if ( rank == 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Processor name: &quot; &lt;&lt; processor_name &lt;&lt; &quot;\n&quot;;
<br>
std::cout &lt;&lt; &quot;master (&quot; &lt;&lt; rank &lt;&lt; &quot;/&quot; &lt;&lt; numprocessors &lt;&lt; &quot;)\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;slave  (&quot; &lt;&lt; rank &lt;&lt; &quot;/&quot; &lt;&lt; numprocessors &lt;&lt; &quot;)\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>$mpic++ -W -Wall test.cpp -o test
<br>
$mpirun -np 4 test
<br>
<p>****************************************************************************
<br>
<p>* Hwloc has encountered what looks like an error from the operating system.
<br>
<p>*
<br>
<p>* object intersection without inclusion!
<br>
<p>* Error occurred in topology.c line 594
<br>
<p>*
<br>
<p>* Please report this error message to the hwloc user's mailing list,
<br>
<p>* along with the output from the hwloc-gather-topology.sh script.
<br>
<p>****************************************************************************
<br>
<p>--------------------------------------------------------------------------
<br>
<p>mpirun noticed that the job aborted, but has no info as to the process
<br>
<p>that caused that situation.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26716.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26714.php">Chen Sijie: "[OMPI users] A Problem using fftw_mpi_plan_dft_r2c_3d"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26717.php">Ralph Castain: "Re: [OMPI users] hello world can't run in Ubuntu 12.04"</a>
<li><strong>Reply:</strong> <a href="26717.php">Ralph Castain: "Re: [OMPI users] hello world can't run in Ubuntu 12.04"</a>
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
