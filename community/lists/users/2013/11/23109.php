<?
$subject_val = "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 29 12:21:52 2013" -->
<!-- isoreceived="20131129172152" -->
<!-- sent="Fri, 29 Nov 2013 12:21:11 -0500" -->
<!-- isosent="20131129172111" -->
<!-- name="Jean-Francois St-Pierre" -->
<!-- email="jf.stpierre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)" -->
<!-- id="CADRnAS6mwsmCrzXstoRdjhbGA5Y6uRBCUPxLk+TKF43+Gth76g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5298AC1F.5010807_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)<br>
<strong>From:</strong> Jean-Francois St-Pierre (<em>jf.stpierre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-29 12:21:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23110.php">Raiden Hasegawa: "[OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="23108.php">Peter Zaspel: "[OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>In reply to:</strong> <a href="23107.php">Maxime Boissonneault: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Maxim,
<br>
<p>I didn't get any change of behavior using your parameter set, neither
<br>
with --mca btl tcp,sm,self.  It is still dead locked at the barrier.
<br>
<p><pre>
--
Jean-Fran&#231;ois St-Pierre, analyste en calcul scientifique
jf.stpierre_at_[hidden]
bureau S-250, pavillon Roger-Gaudry (principal), Universit&#233; de Montr&#233;al
t&#233;l&#233;phone : 514 343-6111 poste 10024     t&#233;l&#233;copieur : 514 343-2155
Calcul Qu&#233;bec (www.calculquebec.ca)
Calcul Canada (calculcanada.ca)
On Fri, Nov 29, 2013 at 10:00 AM, Maxime Boissonneault
&lt;maxime.boissonneault_at_[hidden]&gt; wrote:
&gt; Hi Jean-Fran&#231;ois ;)
&gt; Do you have the same behavior if you disable openib at run time ? :
&gt;
&gt; --mca btl ^openib
&gt;
&gt; My experience with the OpenIB BTL is that its inner threading is bugged.
&gt;
&gt; Maxime
&gt;
&gt; Le 2013-11-28 19:21, Jean-Francois St-Pierre a &#233;crit :
&gt;
&gt; Hi,
&gt; I've compiled ompi1.6.5 with multi-thread support (using Intel
&gt; compilers 12.0.4.191, but I get the same result with gcc) :
&gt;
&gt; ./configure --with-tm/opt/torque --with-openib
&gt; --enable-mpi-thread-multiple CC=icc CXX=icpc F77=ifort FC=ifort
&gt;
&gt; And i've built a simple sample code that only does the Init and one
&gt; MPI_Barrier. The core of the code is :
&gt;
&gt;   setbuf(stdout, NULL);
&gt;   MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);
&gt;   fprintf(stdout,&quot;%6d: Provided thread support %d &quot;, getpid(), provided);
&gt;   int flag,claimed;
&gt;   MPI_Is_thread_main( &amp;flag );
&gt;   MPI_Query_thread( &amp;claimed );
&gt;
&gt;   fprintf(stdout,&quot;%6d: Before Comm_rank, flag %d, claimed %d \n&quot;,
&gt; getpid(), flag, claimed);
&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;gRank);
&gt;
&gt;   fprintf(stdout,&quot;%6d: Comm_size rank %d\n&quot;,getpid(), gRank);
&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;gNTasks);
&gt;
&gt;   fprintf(stdout,&quot;%6d: Before Barrier\n&quot;, getpid());
&gt;   MPI_Barrier( MPI_COMM_WORLD );
&gt;
&gt;   fprintf(stdout,&quot;%6d: After Barrier\n&quot;, getpid());
&gt;   MPI_Finalize();
&gt;
&gt; When I launch it on 2 nodes (mono-core per node) I get this sample output :
&gt;
&gt; /***  Output
&gt;  mpirun -pernode -np 2 sample_code
&gt;  7356: Provided thread support 3 MPI_THREAD_MULTIPLE
&gt;  7356: Before Comm_rank, flag 1, claimed 3
&gt;  7356: Comm_size rank 0
&gt;  7356: Before Barrier
&gt;  26277: Provided thread support 3 MPI_THREAD_MULTIPLE
&gt;  26277: Before Comm_rank, flag 1, claimed 3
&gt;  26277: Comm_size rank 1
&gt;  26277: Before Barrier
&gt;  ^Cmpirun: killing job...
&gt;  */
&gt;
&gt; The deadlock never gets over the MPI_Barrier when I use
&gt; MPI_THREAD_MULTIPLE, but it runs fine using MPI_THREAD_SERIALIZED .  I
&gt; get the same behavior with ompi 1.7.3. I don't get a deadlock when the
&gt; 2 MPI processes are hosted on the same node.
&gt;
&gt; In attachement, you'll find my config.out, config.log, environment
&gt; variables on the execution node, both make.out, sample code and output
&gt; etc.
&gt;
&gt; Thanks,
&gt;
&gt; Jeff
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt;
&gt; --
&gt; ---------------------------------
&gt; Maxime Boissonneault
&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
&gt; Ph. D. en physique
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23110.php">Raiden Hasegawa: "[OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>Previous message:</strong> <a href="23108.php">Peter Zaspel: "[OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>In reply to:</strong> <a href="23107.php">Maxime Boissonneault: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
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
