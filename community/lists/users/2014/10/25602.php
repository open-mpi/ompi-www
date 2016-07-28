<?
$subject_val = "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 05:26:35 2014" -->
<!-- isoreceived="20141027092635" -->
<!-- sent="Mon, 27 Oct 2014 10:26:25 +0100" -->
<!-- isosent="20141027092625" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?" -->
<!-- id="544E0FC1.8010609_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="544DF4AD.3030108_at_googlemail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 05:26:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25603.php">Gilles Gouaillardet: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Previous message:</strong> <a href="25601.php">Marco Atzeri: "Re: [OMPI users] MPI_Init seems to hang, but works after a minute or two"</a>
<li><strong>In reply to:</strong> <a href="25598.php">maxinator333: "[OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25603.php">Gilles Gouaillardet: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Reply:</strong> <a href="25603.php">Gilles Gouaillardet: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/27/2014 8:30 AM, maxinator333 wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I noticed this weird behavior, because after a certain time of more than
</span><br>
<span class="quotelev1">&gt; one minute the transfer rates of MPI_Send and MPI_Recv dropped by a
</span><br>
<span class="quotelev1">&gt; factor of 100+. By chance I saw, that my program did allocate more and
</span><br>
<span class="quotelev1">&gt; more memory. I have the following minimal working example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     #include &lt;cstdlib&gt;
</span><br>
<span class="quotelev1">&gt;     #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     const uint32_t MSG_LENGTH = 256;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev1">&gt;          MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;          int rank;
</span><br>
<span class="quotelev1">&gt;          MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          volatile char * msg  = (char*) malloc( sizeof(char) * MSG_LENGTH );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          for (uint64_t i = 0; i &lt; 1e9; i++) {
</span><br>
<span class="quotelev1">&gt;              if ( rank == 1 ) {
</span><br>
<span class="quotelev1">&gt;                  MPI_Recv( const_cast&lt;char*&gt;(msg), MSG_LENGTH, MPI_CHAR,
</span><br>
<span class="quotelev1">&gt;                            rank-1, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;                  MPI_Send( const_cast&lt;char*&gt;(msg), MSG_LENGTH, MPI_CHAR,
</span><br>
<span class="quotelev1">&gt;                            rank-1, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;              } else if ( rank == 0 ) {
</span><br>
<span class="quotelev1">&gt;                  MPI_Send( const_cast&lt;char*&gt;(msg), MSG_LENGTH, MPI_CHAR,
</span><br>
<span class="quotelev1">&gt;                            rank+1, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;                  MPI_Recv( const_cast&lt;char*&gt;(msg), MSG_LENGTH, MPI_CHAR,
</span><br>
<span class="quotelev1">&gt;                            rank+1, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;              MPI_Barrier( MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt;              for (uint32_t k = 0; k &lt; MSG_LENGTH; k++)
</span><br>
<span class="quotelev1">&gt;                  msg[k]++;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;          return 0;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run this with mpirun -n 2 ./pingpong_memleak.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program does nothing more than send a message from rank 0 to rank 1,
</span><br>
<span class="quotelev1">&gt; then from rank 1 to rank 0 and so on in standard blocking mode, not even
</span><br>
<span class="quotelev1">&gt; asynchronous.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running the program will allocate roughly 30mb/s (Windows Task Manager)
</span><br>
<span class="quotelev1">&gt; until it stops at around 1.313.180kb. This is when the transfer rates
</span><br>
<span class="quotelev1">&gt; (not being measured in above snippet) drop significantly to maybe a
</span><br>
<span class="quotelev1">&gt; second per send instead of roughly 1&#181;s.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use Cygwin with Windows 7 and 16Gb RAM. I haven't tested this minimal
</span><br>
<span class="quotelev1">&gt; working example on other setups.
</span><br>
<p>Can someone test on other platforms and confirm me that is a cygwin
<br>
specific issue ?
<br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25603.php">Gilles Gouaillardet: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Previous message:</strong> <a href="25601.php">Marco Atzeri: "Re: [OMPI users] MPI_Init seems to hang, but works after a minute or two"</a>
<li><strong>In reply to:</strong> <a href="25598.php">maxinator333: "[OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25603.php">Gilles Gouaillardet: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Reply:</strong> <a href="25603.php">Gilles Gouaillardet: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
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
