<?
$subject_val = "[OMPI users] Receive operations hanging forever";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 18:58:12 2008" -->
<!-- isoreceived="20080313225812" -->
<!-- sent="Thu, 13 Mar 2008 19:50:08 -0300" -->
<!-- isosent="20080313225008" -->
<!-- name="Giovani" -->
<!-- email="giovanifaccin_at_[hidden]" -->
<!-- subject="[OMPI users] Receive operations hanging forever" -->
<!-- id="47D9AFA0.2090806_at_yahoo.com.br" -->
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
<strong>Subject:</strong> [OMPI users] Receive operations hanging forever<br>
<strong>From:</strong> Giovani (<em>giovanifaccin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-13 18:50:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5195.php">George Bosilca: "Re: [OMPI users] Receive operations hanging forever"</a>
<li><strong>Previous message:</strong> <a href="5193.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5195.php">George Bosilca: "Re: [OMPI users] Receive operations hanging forever"</a>
<li><strong>Reply:</strong> <a href="5195.php">George Bosilca: "Re: [OMPI users] Receive operations hanging forever"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello OpenMPI people!
<br>
<p>I think that my openmpi install is somewhat strange. I'm simply 
<br>
incapable of performing the simplest Recv operations.
<br>
<p>I've installed openmpi using the default gentoo linux package. It 
<br>
compiled without any problems. The version is sys-cluster/openmpi-1.2.5.
<br>
<p>Now let's use the following program as a test:
<br>
<p>///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<br>
#include &lt;iostream&gt;
<br>
#include &quot;mpicxx.h&quot;
<br>
<p>using namespace std;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Init();       
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//If we are process 0:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( MPI::COMM_WORLD.Get_rank() == 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double d = 5;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Starting to send data from node 0...&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Bcast( &amp;d, 1, MPI::DOUBLE, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Finished to send data from node 0...&quot; &lt;&lt; endl;       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//Else:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::Status mpi_status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double d = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Starting to receive data from node 0...&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Recv(&amp;d, 1, MPI::DOUBLE, MPI::ANY_SOURCE, 
<br>
MPI::ANY_TAG, mpi_status );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Finished to receive data from node 0...&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;};
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Barrier();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Finalize();
<br>
}
<br>
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<br>
<p>I'm calling it with this command:
<br>
/usr/bin/mpirun --hostfile mpi-config.txt -np 3  
<br>
/home/gfaccin/desenvolvimento/Eclipse/mpiplay/Debug/mpiplay
<br>
<p>Where the hostfile mpi-config.txt contains the following line:
<br>
localhost slots=1
<br>
<p>The slots thing is just to tell openmpi that I'm running it on a single 
<br>
processor PC with oversubscribed nodes. Running the program without 
<br>
using host files leads to the same results.
<br>
<p><p>Once the program starts, I get this output:
<br>
<p>Starting to send data from node 0...
<br>
Finished to send data from node 0...
<br>
Starting to receive data from node 0...
<br>
Starting to receive data from node 0...
<br>
<p>And that's it. Processor usage goes to 100% and stays like that forever. 
<br>
The output indicates that the Recv functions have hung.
<br>
<p>I've tried to reinstall the package in case something is broken, but 
<br>
nothing changed.
<br>
<p>Would you have any clues on how can I fix this?
<br>
<p>Thank you very much!
<br>
<p>Giovani
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5195.php">George Bosilca: "Re: [OMPI users] Receive operations hanging forever"</a>
<li><strong>Previous message:</strong> <a href="5193.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5195.php">George Bosilca: "Re: [OMPI users] Receive operations hanging forever"</a>
<li><strong>Reply:</strong> <a href="5195.php">George Bosilca: "Re: [OMPI users] Receive operations hanging forever"</a>
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
