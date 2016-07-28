<?
$subject_val = "Re: [OMPI users] openMPI on Xgrid";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 15:08:10 2010" -->
<!-- isoreceived="20100329190810" -->
<!-- sent="Mon, 29 Mar 2010 13:07:51 -0600" -->
<!-- isosent="20100329190751" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI on Xgrid" -->
<!-- id="03A42FE0-2899-4A0C-B284-442582F8695A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b66245471003291156y21e97aa1p1769cc74481333af_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI on Xgrid<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 15:07:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12462.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12460.php">Cristobal Navarro: "[OMPI users] openMPI on Xgrid"</a>
<li><strong>In reply to:</strong> <a href="12460.php">Cristobal Navarro: "[OMPI users] openMPI on Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12462.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Reply:</strong> <a href="12462.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Our xgrid support has been broken for some time now due to lack of access to a test environment. So your system is using rsh/ssh instead.
<br>
<p>Until we get someone interested in xgrid, or at least willing to debug it and tell us what needs to be done, I'm afraid our xgrid support will be lacking.
<br>
<p><p>On Mar 29, 2010, at 12:56 PM, Cristobal Navarro wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; i am new on this mailing list!
</span><br>
<span class="quotelev1">&gt; i've read the other messages about configuring openMPI on Xgrid, but i havent solved my problem yet and openMPI keeps running as if Xgrid didnt exist.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i configured xgrid properly, and can send simple C program jobs trough the command line from my client, which is the same as the controller and the same as the agent for the moment.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; xgrid -h localhost -p pass -job run ./helloWorld
</span><br>
<span class="quotelev1">&gt; i also installed xgrid Admin for monitoring.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then,
</span><br>
<span class="quotelev1">&gt;  i compiled openMPI 1.4.1 with these options
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /configure --prefix=/usr/local/openmpi/ --enable-shared --disable-static --with-xgrid
</span><br>
<span class="quotelev1">&gt; sudo make
</span><br>
<span class="quotelev1">&gt; sudo make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and i made a simple helloMPI example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* MPI C Example */
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (argc, argv)
</span><br>
<span class="quotelev1">&gt;   int argc;
</span><br>
<span class="quotelev1">&gt;   char *argv[];
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int rank, size;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Init (&amp;argc, &amp;argv);       /* starts MPI */
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank); /* get current process id */
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size (MPI_COMM_WORLD, &amp;size); /* get number of processes */
</span><br>
<span class="quotelev1">&gt; printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and compiled succesfully
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpicc hellompi.c -o hellompi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the i run it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun -np 2 hellompi
</span><br>
<span class="quotelev1">&gt; I am running on ijorge.local
</span><br>
<span class="quotelev1">&gt; Hello World from process 0 of 2
</span><br>
<span class="quotelev1">&gt; I am running on ijorge.local
</span><br>
<span class="quotelev1">&gt; Hello World from process 1 of 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the results are correct, but when i check Xgrid Admin, i see that the execution didnt go trought Xgrid since there arent any new jobs on the list.
</span><br>
<span class="quotelev1">&gt; in the end, openMPI and Xgrid are not comunicating to each other.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what am i missing??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my enviroment variables are these:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;echo $XGRID_CONTROLLER_HOSTNAME
</span><br>
<span class="quotelev1">&gt; ijorge.local
</span><br>
<span class="quotelev3">&gt; &gt;&gt;echo $XGRID_CONTROLLER_PASSWORD
</span><br>
<span class="quotelev1">&gt; myPassword
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any help is welcome!!
</span><br>
<span class="quotelev1">&gt; thanks in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12461/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12462.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12460.php">Cristobal Navarro: "[OMPI users] openMPI on Xgrid"</a>
<li><strong>In reply to:</strong> <a href="12460.php">Cristobal Navarro: "[OMPI users] openMPI on Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12462.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Reply:</strong> <a href="12462.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
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
