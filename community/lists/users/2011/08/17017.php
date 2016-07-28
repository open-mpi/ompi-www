<?
$subject_val = "Re: [OMPI users] Problems with MPI_Iprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 10:03:04 2011" -->
<!-- isoreceived="20110803140304" -->
<!-- sent="Wed, 3 Aug 2011 10:02:59 -0400" -->
<!-- isosent="20110803140259" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with MPI_Iprobe" -->
<!-- id="8F072858-4BA4-4857-9E87-C7F4B606AB9C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABm3_qr8TKVYgnsZ+gOdkfUMxqUFmy2CCi4__2TOW09UjW+HqA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with MPI_Iprobe<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 10:02:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17018.php">Christopher Jones: "[OMPI users] openmpi 1.2.8 on Xgrid noob issue"</a>
<li><strong>Previous message:</strong> <a href="17016.php">BasitAli  Khan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16978.php">Rodrigo Oliveira: "[OMPI users] Problems with MPI_Iprobe"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like a garden variety race condition -- MCW rank 1 is probably calling MPI_Iprobe before the message has actually been delivered by MCW rank 0.
<br>
<p>Try putting in a sleep(1) (or some other kind of delay) before your MPI_Iprobe, and I'll bet that the first call to MPI_Iprobe will return has_message=1.
<br>
<p>Or just use MPI_Probe -- it blocks, unlike MPI_Iprobe.
<br>
<p><p>On Jul 22, 2011, at 4:29 PM, Rodrigo Oliveira wrote:
<br>
<p><span class="quotelev1">&gt; Hi there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an application in which I need to terminate a process anytime due an external command. In order to maintain the consistence of the processes, I need to receive the messages that were already sent to the terminating process. I used the MPI_Iprobe to check whether there is messages to be received, but I noticed that I have to call this function twice. Otherwise it does not work properly. The code bellow exemplifies what happens. Can anyone help me? Is there another way to do what I need?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt; 	int rank, size, i;
</span><br>
<span class="quotelev1">&gt; 	MPI_Status status;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	if (size &lt; 2) {
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;Please run with two processes.\n&quot;); fflush(stdout);
</span><br>
<span class="quotelev1">&gt; 		MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 		return 0;
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	if (rank == 0) {
</span><br>
<span class="quotelev1">&gt; 		for (i=0; i&lt;10; i++) {
</span><br>
<span class="quotelev1">&gt; 			MPI_Send(&amp;i, 1, MPI_INT, 1, 123, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 		}
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	if (rank == 1) {
</span><br>
<span class="quotelev1">&gt; 		int value, has_message;
</span><br>
<span class="quotelev1">&gt; 		MPI_Status status;
</span><br>
<span class="quotelev1">&gt; 		sleep (2);
</span><br>
<span class="quotelev1">&gt; 		
</span><br>
<span class="quotelev1">&gt; 		// Code bellow does not work properly
</span><br>
<span class="quotelev1">&gt; 		MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
</span><br>
<span class="quotelev1">&gt; 		while (has_message) {
</span><br>
<span class="quotelev1">&gt; 			MPI_Recv(&amp;value, 1, MPI_INT, 0, 123, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt; 			printf(&quot;Process %d received message %d.\n&quot;, rank, value);
</span><br>
<span class="quotelev1">&gt; 			MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
</span><br>
<span class="quotelev1">&gt; 		}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		// Calling MPI_Iprobe twice for each incoming message makes the code work.
</span><br>
<span class="quotelev1">&gt; 		/*
</span><br>
<span class="quotelev1">&gt; 		MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
</span><br>
<span class="quotelev1">&gt; 		MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
</span><br>
<span class="quotelev1">&gt; 		while (has_message) {
</span><br>
<span class="quotelev1">&gt; 			MPI_Recv(&amp;value, 1, MPI_INT, 0, 123, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt; 			printf(&quot;Process %d received message %d.\n&quot;, rank, value);
</span><br>
<span class="quotelev1">&gt; 			MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
</span><br>
<span class="quotelev1">&gt; 			MPI_Iprobe(0, 123, MPI_COMM_WORLD, &amp;has_message, &amp;status);
</span><br>
<span class="quotelev1">&gt; 		}
</span><br>
<span class="quotelev1">&gt; 		*/
</span><br>
<span class="quotelev1">&gt; 		
</span><br>
<span class="quotelev1">&gt; 		fflush(stdout);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 	return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17018.php">Christopher Jones: "[OMPI users] openmpi 1.2.8 on Xgrid noob issue"</a>
<li><strong>Previous message:</strong> <a href="17016.php">BasitAli  Khan: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16978.php">Rodrigo Oliveira: "[OMPI users] Problems with MPI_Iprobe"</a>
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
