<?
$subject_val = "Re: [OMPI users] Problem with getting started [solved]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 12 08:06:17 2008" -->
<!-- isoreceived="20080612120617" -->
<!-- sent="Thu, 12 Jun 2008 14:03:13 +0200" -->
<!-- isosent="20080612120313" -->
<!-- name="Manuel Freiberger" -->
<!-- email="manuel.freiberger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with getting started [solved]" -->
<!-- id="200806121403.13999.manuel.freiberger_at_tugraz.at" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200806111852.52047.manuel.freiberger_at_tugraz.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with getting started [solved]<br>
<strong>From:</strong> Manuel Freiberger (<em>manuel.freiberger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-12 08:03:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5867.php">Arturas Ziemys: "[OMPI users] parallel AMBER &amp; PBS issue"</a>
<li><strong>Previous message:</strong> <a href="5865.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started"</a>
<li><strong>In reply to:</strong> <a href="5861.php">Manuel Freiberger: "[OMPI users] Problem with getting started"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5868.php">Rainer Keller: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>Reply:</strong> <a href="5868.php">Rainer Keller: "Re: [OMPI users] Problem with getting started [solved]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>Ok, I found the problem. I reinstallen OMPI on both PCs but this time only 
<br>
locally in the users home directory. Now, the sample code works perfectly. 
<br>
I'm not sure where the error really was located. It could be that it was a 
<br>
problem with the Gentoo installation because OMPI is still marked unstable in 
<br>
portage (~x86 keyword).
<br>
<p>Best regards,
<br>
Manuel
<br>
<p>On Wednesday 11 June 2008 18:52, Manuel Freiberger wrote:
<br>
<span class="quotelev1">&gt; Hello everybody!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all I wanted to point out that I'm beginner regarding openMPI and
</span><br>
<span class="quotelev1">&gt; all I try to achieve is to get a simple program working on two PCs.
</span><br>
<span class="quotelev1">&gt; So far I've installed openMPI 1.2.6 on two PCs (one running OpenSUSE 10.2,
</span><br>
<span class="quotelev1">&gt; the other one Gentoo).
</span><br>
<span class="quotelev1">&gt; I set up two identical users on both systems and made sure that I can make
</span><br>
<span class="quotelev1">&gt; an SSH connection between them using private/public key authentication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Next I ran the command
</span><br>
<span class="quotelev1">&gt;   mpirun -np 2 --hostfile myhosts uptime
</span><br>
<span class="quotelev1">&gt; which gave the result
</span><br>
<span class="quotelev1">&gt;   6:41pm  up 1 day  5:16,  4 users,  load average: 0.00, 0.07, 0.17
</span><br>
<span class="quotelev1">&gt;  18:43:45 up  7:36,  6 users,  load average: 0.00, 0.02, 0.05
</span><br>
<span class="quotelev1">&gt; so I concluded that MPI should work in principle.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Next I tried the following code which I copied from Boost.MPI:
</span><br>
<span class="quotelev1">&gt; ---- snip
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   int rank;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;   if (rank == 0)
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;     std::cout &lt;&lt; &quot;Rank 0 is going to send&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;     int value = 17;
</span><br>
<span class="quotelev1">&gt;     int result = MPI_Send(&amp;value, 1, MPI_INT, 1, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     if (result == MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;       std::cout &lt;&lt; &quot;Rank 0 OK!&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   else if (rank == 1)
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;     std::cout &lt;&lt; &quot;Rank 1 is waiting for answer&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;     int value;
</span><br>
<span class="quotelev1">&gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt;     int result = MPI_Recv(&amp;value, 1, MPI_INT, 0, 0, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; 			  &amp;status);
</span><br>
<span class="quotelev1">&gt;     if (result == MPI_SUCCESS &amp;&amp; value == 17)
</span><br>
<span class="quotelev1">&gt;       std::cout &lt;&lt; &quot;Rank 1 OK!&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ---- snap
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Starting a parallel job using
</span><br>
<span class="quotelev1">&gt;   mpirun -np 2 --hostfile myhosts mpi-test
</span><br>
<span class="quotelev1">&gt; I get the answer
</span><br>
<span class="quotelev1">&gt;   Rank 0 is going to send
</span><br>
<span class="quotelev1">&gt;   Rank 1 is waiting for answer
</span><br>
<span class="quotelev1">&gt;   Rank 0 OK!
</span><br>
<span class="quotelev1">&gt; and than the program locks. So the strange thing is that obviously the
</span><br>
<span class="quotelev1">&gt; recv()-command is blocking, which is what I do not understand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could anybody provide some hints, where I should start looking for the
</span><br>
<span class="quotelev1">&gt; mistake? Any help is welcome!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Manuel
</span><br>
<p><pre>
-- 
Manuel Freiberger
Institute of Medical Engineering
Graz University of Technology
manuel.freiberger_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5867.php">Arturas Ziemys: "[OMPI users] parallel AMBER &amp; PBS issue"</a>
<li><strong>Previous message:</strong> <a href="5865.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started"</a>
<li><strong>In reply to:</strong> <a href="5861.php">Manuel Freiberger: "[OMPI users] Problem with getting started"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5868.php">Rainer Keller: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>Reply:</strong> <a href="5868.php">Rainer Keller: "Re: [OMPI users] Problem with getting started [solved]"</a>
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
