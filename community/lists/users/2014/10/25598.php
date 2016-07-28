<?
$subject_val = "[OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 03:30:49 2014" -->
<!-- isoreceived="20141027073049" -->
<!-- sent="Mon, 27 Oct 2014 08:30:53 +0100" -->
<!-- isosent="20141027073053" -->
<!-- name="maxinator333" -->
<!-- email="maxinator333_at_[hidden]" -->
<!-- subject="[OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?" -->
<!-- id="544DF4AD.3030108_at_googlemail.com" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?<br>
<strong>From:</strong> maxinator333 (<em>maxinator333_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 03:30:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25599.php">maxinator333: "[OMPI users] MPI_Init seems to hang, but works after a minute or two"</a>
<li><strong>Previous message:</strong> <a href="25597.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Javaforopenmpi-dev-124-g91e9686on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25602.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Reply:</strong> <a href="25602.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I noticed this weird behavior, because after a certain time of more than 
<br>
one minute the transfer rates of MPI_Send and MPI_Recv dropped by a 
<br>
factor of 100+. By chance I saw, that my program did allocate more and 
<br>
more memory. I have the following minimal working example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;cstdlib&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;mpi.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;const uint32_t MSG_LENGTH = 256;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int main(int argc, char* argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;volatile char * msg  = (char*) malloc( sizeof(char) * MSG_LENGTH );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (uint64_t i = 0; i &lt; 1e9; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( rank == 1 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv( const_cast&lt;char*&gt;(msg), MSG_LENGTH, MPI_CHAR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank-1, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send( const_cast&lt;char*&gt;(msg), MSG_LENGTH, MPI_CHAR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank-1, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if ( rank == 0 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send( const_cast&lt;char*&gt;(msg), MSG_LENGTH, MPI_CHAR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank+1, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv( const_cast&lt;char*&gt;(msg), MSG_LENGTH, MPI_CHAR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank+1, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier( MPI_COMM_WORLD );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (uint32_t k = 0; k &lt; MSG_LENGTH; k++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg[k]++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>I run this with mpirun -n 2 ./pingpong_memleak.exe
<br>
<p>The program does nothing more than send a message from rank 0 to rank 1, 
<br>
then from rank 1 to rank 0 and so on in standard blocking mode, not even 
<br>
asynchronous.
<br>
<p>Running the program will allocate roughly 30mb/s (Windows Task Manager) 
<br>
until it stops at around 1.313.180kb. This is when the transfer rates 
<br>
(not being measured in above snippet) drop significantly to maybe a 
<br>
second per send instead of roughly 1&#181;s.
<br>
<p>I use Cygwin with Windows 7 and 16Gb RAM. I haven't tested this minimal 
<br>
working example on other setups.
<br>
<p>I understand, that it's possible for MPI_Send to just store the message 
<br>
in a buffer and then resume the program, even though it's supposed to be 
<br>
blocking. But MPI_Recv should in my understanding be really 100% 
<br>
blocking. This means, that after each MPI_Recv the buffer should be 
<br>
emptied in above code, am I right?
<br>
<p>Well it's not the case, so I inserted the MPI_Barrier. Thinking, that at 
<br>
least now both blocking operations should be 100% finished, but it only 
<br>
dropped the 50mb/s allocation to the mentioned 30mb/s allocation. 
<br>
Although I have to add: in my real code the MPI_Barrier mitigates the 
<br>
problem to maybe 10kb/s, which is acceptable if the program finishes in 
<br>
under 2 days. But it still shouldn't happen.
<br>
<p>I also tried to increase the msg in each step in order to prevent 
<br>
buffering and caching, but it didn't help either.
<br>
<p>What is happening? Can I stop it from happening like with some kind of 
<br>
MPI_Flush()?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25598/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25599.php">maxinator333: "[OMPI users] MPI_Init seems to hang, but works after a minute or two"</a>
<li><strong>Previous message:</strong> <a href="25597.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Javaforopenmpi-dev-124-g91e9686on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25602.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Reply:</strong> <a href="25602.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
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
