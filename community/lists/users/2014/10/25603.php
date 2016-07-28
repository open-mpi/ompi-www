<?
$subject_val = "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 05:30:26 2014" -->
<!-- isoreceived="20141027093026" -->
<!-- sent="Mon, 27 Oct 2014 18:30:23 +0900" -->
<!-- isosent="20141027093023" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?" -->
<!-- id="544E10AF.7040106_at_iferc.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="544E0FC1.8010609_at_gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 05:30:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25604.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Previous message:</strong> <a href="25602.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>In reply to:</strong> <a href="25602.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25604.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Reply:</strong> <a href="25604.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>i tested on a RedHat 6 like linux server and could not observe any
<br>
memory leak.
<br>
<p>BTW, are you running 32 or 64 bits cygwin ? and what is your configure
<br>
command line ?
<br>
<p>Thanks,
<br>
<p>Gilles
<br>
<p>On 2014/10/27 18:26, Marco Atzeri wrote:
<br>
<span class="quotelev1">&gt; On 10/27/2014 8:30 AM, maxinator333 wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I noticed this weird behavior, because after a certain time of more than
</span><br>
<span class="quotelev2">&gt;&gt; one minute the transfer rates of MPI_Send and MPI_Recv dropped by a
</span><br>
<span class="quotelev2">&gt;&gt; factor of 100+. By chance I saw, that my program did allocate more and
</span><br>
<span class="quotelev2">&gt;&gt; more memory. I have the following minimal working example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     #include &lt;cstdlib&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     const uint32_t MSG_LENGTH = 256;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt;          MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;          int rank;
</span><br>
<span class="quotelev2">&gt;&gt;          MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          volatile char * msg  = (char*) malloc( sizeof(char) *
</span><br>
<span class="quotelev2">&gt;&gt; MSG_LENGTH );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          for (uint64_t i = 0; i &lt; 1e9; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;              if ( rank == 1 ) {
</span><br>
<span class="quotelev2">&gt;&gt;                  MPI_Recv( const_cast&lt;char*&gt;(msg), MSG_LENGTH, MPI_CHAR,
</span><br>
<span class="quotelev2">&gt;&gt;                            rank-1, 0, MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;                  MPI_Send( const_cast&lt;char*&gt;(msg), MSG_LENGTH, MPI_CHAR,
</span><br>
<span class="quotelev2">&gt;&gt;                            rank-1, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;              } else if ( rank == 0 ) {
</span><br>
<span class="quotelev2">&gt;&gt;                  MPI_Send( const_cast&lt;char*&gt;(msg), MSG_LENGTH, MPI_CHAR,
</span><br>
<span class="quotelev2">&gt;&gt;                            rank+1, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;                  MPI_Recv( const_cast&lt;char*&gt;(msg), MSG_LENGTH, MPI_CHAR,
</span><br>
<span class="quotelev2">&gt;&gt;                            rank+1, 0, MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;              }
</span><br>
<span class="quotelev2">&gt;&gt;              MPI_Barrier( MPI_COMM_WORLD );
</span><br>
<span class="quotelev2">&gt;&gt;              for (uint32_t k = 0; k &lt; MSG_LENGTH; k++)
</span><br>
<span class="quotelev2">&gt;&gt;                  msg[k]++;
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;          return 0;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I run this with mpirun -n 2 ./pingpong_memleak.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The program does nothing more than send a message from rank 0 to rank 1,
</span><br>
<span class="quotelev2">&gt;&gt; then from rank 1 to rank 0 and so on in standard blocking mode, not even
</span><br>
<span class="quotelev2">&gt;&gt; asynchronous.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running the program will allocate roughly 30mb/s (Windows Task Manager)
</span><br>
<span class="quotelev2">&gt;&gt; until it stops at around 1.313.180kb. This is when the transfer rates
</span><br>
<span class="quotelev2">&gt;&gt; (not being measured in above snippet) drop significantly to maybe a
</span><br>
<span class="quotelev2">&gt;&gt; second per send instead of roughly 1&#181;s.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use Cygwin with Windows 7 and 16Gb RAM. I haven't tested this minimal
</span><br>
<span class="quotelev2">&gt;&gt; working example on other setups.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone test on other platforms and confirm me that is a cygwin
</span><br>
<span class="quotelev1">&gt; specific issue ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25602.php">http://www.open-mpi.org/community/lists/users/2014/10/25602.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25604.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Previous message:</strong> <a href="25602.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>In reply to:</strong> <a href="25602.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25604.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Reply:</strong> <a href="25604.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
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
