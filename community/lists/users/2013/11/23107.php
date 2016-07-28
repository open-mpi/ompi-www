<?
$subject_val = "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 29 10:00:50 2013" -->
<!-- isoreceived="20131129150050" -->
<!-- sent="Fri, 29 Nov 2013 10:00:47 -0500" -->
<!-- isosent="20131129150047" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)" -->
<!-- id="5298AC1F.5010807_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADRnAS5fFkbPVhpGjF=CHTxPs-cREfF14AnVAuLftP6pF7OaRw_at_mail.gmail.com" -->
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
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-29 10:00:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23108.php">Peter Zaspel: "[OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>Previous message:</strong> <a href="23106.php">Jean-Francois St-Pierre: "[OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<li><strong>In reply to:</strong> <a href="23106.php">Jean-Francois St-Pierre: "[OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23109.php">Jean-Francois St-Pierre: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<li><strong>Reply:</strong> <a href="23109.php">Jean-Francois St-Pierre: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jean-Fran&#231;ois ;)
<br>
Do you have the same behavior if you disable openib at run time ? :
<br>
<p>--mca btl ^openib
<br>
<p>My experience with the OpenIB BTL is that its inner threading is bugged.
<br>
<p>Maxime
<br>
<p>Le 2013-11-28 19:21, Jean-Francois St-Pierre a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I've compiled ompi1.6.5 with multi-thread support (using Intel
</span><br>
<span class="quotelev1">&gt; compilers 12.0.4.191, but I get the same result with gcc) :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-tm/opt/torque --with-openib
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And i've built a simple sample code that only does the Init and one
</span><br>
<span class="quotelev1">&gt; MPI_Barrier. The core of the code is :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    setbuf(stdout, NULL);
</span><br>
<span class="quotelev1">&gt;    MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);
</span><br>
<span class="quotelev1">&gt;    fprintf(stdout,&quot;%6d: Provided thread support %d &quot;, getpid(), provided);
</span><br>
<span class="quotelev1">&gt;    int flag,claimed;
</span><br>
<span class="quotelev1">&gt;    MPI_Is_thread_main( &amp;flag );
</span><br>
<span class="quotelev1">&gt;    MPI_Query_thread( &amp;claimed );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    fprintf(stdout,&quot;%6d: Before Comm_rank, flag %d, claimed %d \n&quot;,
</span><br>
<span class="quotelev1">&gt; getpid(), flag, claimed);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;gRank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    fprintf(stdout,&quot;%6d: Comm_size rank %d\n&quot;,getpid(), gRank);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;gNTasks);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    fprintf(stdout,&quot;%6d: Before Barrier\n&quot;, getpid());
</span><br>
<span class="quotelev1">&gt;    MPI_Barrier( MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    fprintf(stdout,&quot;%6d: After Barrier\n&quot;, getpid());
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I launch it on 2 nodes (mono-core per node) I get this sample output :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /***  Output
</span><br>
<span class="quotelev1">&gt;   mpirun -pernode -np 2 sample_code
</span><br>
<span class="quotelev1">&gt;   7356: Provided thread support 3 MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt;   7356: Before Comm_rank, flag 1, claimed 3
</span><br>
<span class="quotelev1">&gt;   7356: Comm_size rank 0
</span><br>
<span class="quotelev1">&gt;   7356: Before Barrier
</span><br>
<span class="quotelev1">&gt;   26277: Provided thread support 3 MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt;   26277: Before Comm_rank, flag 1, claimed 3
</span><br>
<span class="quotelev1">&gt;   26277: Comm_size rank 1
</span><br>
<span class="quotelev1">&gt;   26277: Before Barrier
</span><br>
<span class="quotelev1">&gt;   ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The deadlock never gets over the MPI_Barrier when I use
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE, but it runs fine using MPI_THREAD_SERIALIZED .  I
</span><br>
<span class="quotelev1">&gt; get the same behavior with ompi 1.7.3. I don't get a deadlock when the
</span><br>
<span class="quotelev1">&gt; 2 MPI processes are hosted on the same node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In attachement, you'll find my config.out, config.log, environment
</span><br>
<span class="quotelev1">&gt; variables on the execution node, both make.out, sample code and output
</span><br>
<span class="quotelev1">&gt; etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
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
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23107/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23108.php">Peter Zaspel: "[OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>Previous message:</strong> <a href="23106.php">Jean-Francois St-Pierre: "[OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<li><strong>In reply to:</strong> <a href="23106.php">Jean-Francois St-Pierre: "[OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23109.php">Jean-Francois St-Pierre: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<li><strong>Reply:</strong> <a href="23109.php">Jean-Francois St-Pierre: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
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
