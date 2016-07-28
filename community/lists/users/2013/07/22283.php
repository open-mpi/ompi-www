<?
$subject_val = "[OMPI users] problem with MPI_Iexscan";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 13:34:29 2013" -->
<!-- isoreceived="20130708173429" -->
<!-- sent="Mon, 8 Jul 2013 19:27:10 +0200 (CEST)" -->
<!-- isosent="20130708172710" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with MPI_Iexscan" -->
<!-- id="201307081727.r68HRArD021120_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with MPI_Iexscan<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 13:27:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22284.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22282.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I installed openmpi-1.9a1r28730 and tried to test MPI_Iexscan()
<br>
on my machine (Solaris 10 sparc, Sun C 5.12). Unfortunately my program
<br>
breaks.
<br>
<p>tyr xxx 105 mpicc iexscan.c 
<br>
tyr xxx 106 mpiexec -np 2 iexscan
<br>
[tyr:21094] *** An error occurred in MPI_Iexscan
<br>
[tyr:21094] *** reported by process [4097966081,0]
<br>
[tyr:21094] *** on communicator MPI_COMM_WORLD
<br>
[tyr:21094] *** MPI_ERR_INTERN: internal error
<br>
[tyr:21094] *** MPI_ERRORS_ARE_FATAL (processes in this communicator
<br>
&nbsp;&nbsp;will now abort,
<br>
[tyr:21094] ***    and potentially your MPI job)
<br>
[tyr.informatik.hs-fulda.de:21092] 1 more process has sent help
<br>
&nbsp;&nbsp;message help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[tyr.informatik.hs-fulda.de:21092] Set MCA parameter
<br>
&nbsp;&nbsp;&quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
tyr xxx 107 
<br>
tyr xxx 107 ompi_info |grep &quot;MPI: &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r28730
<br>
tyr xxx 108 
<br>
<p><p>That's the program I used for my test.
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define MAXLEN 10000
<br>
&nbsp;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int out[MAXLEN], in[MAXLEN], i, j, k;
<br>
&nbsp;&nbsp;&nbsp;int myself, tasks;
<br>
&nbsp;&nbsp;&nbsp;MPI_Request request;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myself);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;tasks);
<br>
<p>&nbsp;&nbsp;&nbsp;for(j = 1; j &lt;= MAXLEN; j *= 10) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i = 0; i &lt; j; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;out[i] = i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Iexscan(out, in, j, MPI_INT, MPI_SUM, MPI_COMM_WORLD, &amp;request);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;request,  MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myself != 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(k = 0; k &lt; j; k++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(in[k] != k * myself) {  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf (stderr, &quot;bad answer (%d) at index %d of %d &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;(should be %d)\n&quot;, in[k], k, j, k*(myself));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>Do you have any ideas what's going wrong? Is the internal MPI error
<br>
a real internal error or is something wrong with my program, which
<br>
results in an internal error? Thank you very much for any help in
<br>
advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22284.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22282.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
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
