<?
$subject_val = "[OMPI users] MPI_CANCEL";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 15:14:10 2008" -->
<!-- isoreceived="20080415191410" -->
<!-- sent="Tue, 15 Apr 2008 21:14:39 +0200" -->
<!-- isosent="20080415191439" -->
<!-- name="slimtimmy_at_[hidden]" -->
<!-- email="slimtimmy_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_CANCEL" -->
<!-- id="4804FE9F.2000105_at_gmx.de" -->
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
<strong>Subject:</strong> [OMPI users] MPI_CANCEL<br>
<strong>From:</strong> <a href="mailto:slimtimmy_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_CANCEL"><em>slimtimmy_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-04-15 15:14:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5397.php">George Bosilca: "Re: [OMPI users] MPI_CANCEL"</a>
<li><strong>Previous message:</strong> <a href="5395.php">Cally K: "[OMPI users] open mpi on smp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5397.php">George Bosilca: "Re: [OMPI users] MPI_CANCEL"</a>
<li><strong>Reply:</strong> <a href="5397.php">George Bosilca: "Re: [OMPI users] MPI_CANCEL"</a>
<li><strong>Reply:</strong> <a href="5398.php">Richard Treumann: "Re: [OMPI users] MPI_CANCEL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I encountered some problems when using MPI_CANCEL. I call
<br>
Request::Cancel followed by Request::Wait to ensure that the request has
<br>
been cancelled. However Request::Wait does not return when I send bigger
<br>
messages. The following code should reproduce this behaviour:
<br>
<p>#include &quot;mpi.h&quot;
<br>
#include &lt;iostream&gt;
<br>
<p>using namespace std;
<br>
<p>enum Tags
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TAG_UNMATCHED1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TAG_UNMATCHED2
<br>
};
<br>
<p>int main()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::Init();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int rank = MPI::COMM_WORLD.Get_rank();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int numProcesses = MPI::COMM_WORLD.Get_size();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int masterRank = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == masterRank)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;master&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int numSlaves = numProcesses - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; numSlaves; ++i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int slaveRank = i + 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int buffer;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Recv(&amp;buffer, 1, MPI::INT, slaveRank,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TAG_UNMATCHED1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;slave &quot; &lt;&lt; rank &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//const int size = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int size = 10000;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int buffer[size];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::Request request = MPI::COMM_WORLD.Isend(buffer, size, 
<br>
MPI::INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;masterRank, TAG_UNMATCHED2);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;slave (&quot;&lt;&lt; rank&lt;&lt;&quot;): sent data&quot; &lt;&lt; endl;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;request.Cancel();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;slave (&quot;&lt;&lt; rank&lt;&lt;&quot;): cancel issued&quot; &lt;&lt; endl;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;request.Wait();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;slave (&quot;&lt;&lt; rank&lt;&lt;&quot;): finished&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>If I set size to 1, everything works as expected, the slave process
<br>
finishes execution. However if I use a bigger buffer (in this case
<br>
10000) the wait blocks forever. That's the output of the program when
<br>
run with two processes:
<br>
<p>master
<br>
slave 1
<br>
slave (1): sent data
<br>
slave (1): cancel issued
<br>
<p><p>Have I misinterpreted the standard? Or does Request::Wait block until
<br>
the message is delievered?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5397.php">George Bosilca: "Re: [OMPI users] MPI_CANCEL"</a>
<li><strong>Previous message:</strong> <a href="5395.php">Cally K: "[OMPI users] open mpi on smp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5397.php">George Bosilca: "Re: [OMPI users] MPI_CANCEL"</a>
<li><strong>Reply:</strong> <a href="5397.php">George Bosilca: "Re: [OMPI users] MPI_CANCEL"</a>
<li><strong>Reply:</strong> <a href="5398.php">Richard Treumann: "Re: [OMPI users] MPI_CANCEL"</a>
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
