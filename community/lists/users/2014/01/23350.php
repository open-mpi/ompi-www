<?
$subject_val = "[OMPI users] Bug in my code or in v1.4.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 05:49:02 2014" -->
<!-- isoreceived="20140110104902" -->
<!-- sent="Fri, 10 Jan 2014 11:49:01 +0100" -->
<!-- isosent="20140110104901" -->
<!-- name="David Froger" -->
<!-- email="david.froger_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in my code or in v1.4.3?" -->
<!-- id="20140110104901.31922.84250_at_fl-58186.rocq.inria.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Bug in my code or in v1.4.3?<br>
<strong>From:</strong> David Froger (<em>david.froger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 05:49:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in my code or in v1.4.3?"</a>
<li><strong>Previous message:</strong> <a href="23349.php">Pradeep Jha: "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in my code or in v1.4.3?"</a>
<li><strong>Reply:</strong> <a href="23351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in my code or in v1.4.3?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>We are migrating a code using OpenMPI from Ubuntu 10.04 to Ubuntu 12.04, and
<br>
encouter some problems.
<br>
<p>Bellow is a test code that work on Ubuntu 10.04, but fails on Ubuntu 12.04
<br>
<p>The question is: is there a bug in the test code, or is it due to a bug in
<br>
OpenMPI?
<br>
<p>Thanks for any help,
<br>
David
<br>
<p>==============================================================================
<br>
OpenMPI versions
<br>
==============================================================================
<br>
<p>We use the default OpenMPI versions on both version of Ubuntu:
<br>
<p>$ apt-cache policy openmpi-bin # On Ubuntu 10.04
<br>
openmpi-bin:
<br>
&nbsp;&nbsp;Installed: 1.4.1-2
<br>
&nbsp;&nbsp;Candidate: 1.4.1-2
<br>
&nbsp;&nbsp;Version table:
<br>
&nbsp;*** 1.4.1-2 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;500 <a href="http://ubuntu.lucid.miroir.rocq.inria.fr/">http://ubuntu.lucid.miroir.rocq.inria.fr/</a> lucid/universe Packages
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100 /var/lib/dpkg/status
<br>
<p>$ apt-cache policy openmpi-bin # On Ubuntu 12.04
<br>
openmpi-bin:
<br>
&nbsp;&nbsp;Installed: 1.4.3-2.1ubuntu3
<br>
&nbsp;&nbsp;Candidate: 1.4.3-2.1ubuntu3
<br>
&nbsp;&nbsp;Version table:
<br>
&nbsp;*** 1.4.3-2.1ubuntu3 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;500 <a href="http://ubuntu.precise.miroir.rocq.inria.fr/">http://ubuntu.precise.miroir.rocq.inria.fr/</a> precise/universe amd64 Packages
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100 /var/lib/dpkg/status
<br>
<p>==============================================================================
<br>
Error messages
<br>
==============================================================================
<br>
<p>The test code given bellow is working on Ubuntu 10.04, but sometimes fails on
<br>
12.04, with the folling output for example:
<br>
<p>--------------------------------------------------------------------------
<br>
MPI_ABORT was invoked on rank 10 in communicator MPI_COMM_WORLD 
<br>
with errorcode 1.
<br>
<p>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
You may or may not see output from other processes, depending on
<br>
exactly when Open MPI kills them.
<br>
--------------------------------------------------------------------------
<br>
Error rank 10 tab[0] = 8
<br>
Error rank 11 tab[0] = 7
<br>
Error rank 12 tab[0] = 6
<br>
Error rank 13 tab[0] = 10
<br>
Error rank 14 tab[2] = 10
<br>
--------------------------------------------------------------------------
<br>
mpiexec has exited due to process rank 10 with PID 10284 on
<br>
node saphene exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpiexec (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[saphene:10273] 4 more processes have sent help message help-mpi-api.txt / mpi-abort
<br>
[saphene:10273] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<p>==============================================================================
<br>
Test code
<br>
==============================================================================
<br>
<p>Here is the code:
<br>
<p>#include &lt;iostream&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>using namespace std;
<br>
<p>int main(int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ierr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ierr = MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(ierr != MPI_SUCCESS){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Error initializing mpi&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, ierr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// get the number of process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int numProcess;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numProcess);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// get the rank of the process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int it=0; it&lt;20; it++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// gather all rank in an array
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *tab = new int[numProcess];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ierr = MPI_Allgather(&amp;rank, 1, MPI_INT, tab, 1, MPI_INT, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(ierr != MPI_SUCCESS){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Error MPI_Allgather rank:&quot; &lt;&lt; rank &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, ierr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// check that everything is ok
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i=0; i&lt;numProcess; i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(tab[i] != i){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Error rank &quot; &lt;&lt; rank &lt;&lt; &quot; tab[&quot; &lt;&lt; i &lt;&lt; &quot;] = &quot; &lt;&lt; tab[i] &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;delete [] tab;	
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Exit normally&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in my code or in v1.4.3?"</a>
<li><strong>Previous message:</strong> <a href="23349.php">Pradeep Jha: "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in my code or in v1.4.3?"</a>
<li><strong>Reply:</strong> <a href="23351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in my code or in v1.4.3?"</a>
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
