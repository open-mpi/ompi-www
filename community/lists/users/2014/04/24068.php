<?
$subject_val = "Re: [OMPI users] performance of MPI_Iallgatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  5 05:40:10 2014" -->
<!-- isoreceived="20140405094010" -->
<!-- sent="Sat, 5 Apr 2014 10:40:10 +0100" -->
<!-- isosent="20140405094010" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] performance of MPI_Iallgatherv" -->
<!-- id="CAHCaCkJjcEuLY1m2SboYPJZCCyODPJwRbikFr9fWXZaPe8aprQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALr9+a6A01bZcG+tQdsGsH_DgM_eCeWQT8sb23zvjouw2JVFWA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] performance of MPI_Iallgatherv<br>
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-05 05:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24069.php">Filippo Spiga: "[OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__"</a>
<li><strong>Previous message:</strong> <a href="24067.php">Zehan Cui: "[OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>In reply to:</strong> <a href="24067.php">Zehan Cui: "[OMPI users] performance of MPI_Iallgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24071.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Reply:</strong> <a href="24071.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Try waiting on all gathers at the same time, not one by one (this is
<br>
what non blocking collectives are made for!)
<br>
<p>Cheers,
<br>
<p>Matthieu
<br>
<p>2014-04-05 10:35 GMT+01:00 Zehan Cui &lt;zehan.cui_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm testing the non-blocking collective of OpenMPI-1.8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have two nodes with Infiniband to perform allgather on totally 128MB data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I split the 128MB data into eight pieces, and perform computation and
</span><br>
<span class="quotelev1">&gt; MPI_Iallgatherv() on one piece of data each iteration, hoping that the
</span><br>
<span class="quotelev1">&gt; MPI_Iallgatherv() of last iteration can be overlapped with computation of
</span><br>
<span class="quotelev1">&gt; current iteration. A MPI_Wait() is called at the end of last iteration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the total communication time (including the final wait time) is
</span><br>
<span class="quotelev1">&gt; similar with that of the traditional blocking MPI_Allgatherv, even slightly
</span><br>
<span class="quotelev1">&gt; higher.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Following is the test pseudo-code, the source code are attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using MPI_Allgatherv:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for( i=0; i&lt;8; i++ )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   // computation
</span><br>
<span class="quotelev1">&gt;     mytime( t_begin );
</span><br>
<span class="quotelev1">&gt;     computation;
</span><br>
<span class="quotelev1">&gt;     mytime( t_end );
</span><br>
<span class="quotelev1">&gt;     comp_time += (t_end - t_begin);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   // communication
</span><br>
<span class="quotelev1">&gt;     t_begin = t_end;
</span><br>
<span class="quotelev1">&gt;     MPI_Allgatherv();
</span><br>
<span class="quotelev1">&gt;     mytime( t_end );
</span><br>
<span class="quotelev1">&gt;     comm_time += (t_end - t_begin);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; --------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using MPI_Iallgatherv:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for( i=0; i&lt;8; i++ )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   // computation
</span><br>
<span class="quotelev1">&gt;     mytime( t_begin );
</span><br>
<span class="quotelev1">&gt;     computation;
</span><br>
<span class="quotelev1">&gt;     mytime( t_end );
</span><br>
<span class="quotelev1">&gt;     comp_time += (t_end - t_begin);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   // communication
</span><br>
<span class="quotelev1">&gt;     t_begin = t_end;
</span><br>
<span class="quotelev1">&gt;     MPI_Iallgatherv();
</span><br>
<span class="quotelev1">&gt;     mytime( t_end );
</span><br>
<span class="quotelev1">&gt;     comm_time += (t_end - t_begin);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // wait for non-blocking allgather to complete
</span><br>
<span class="quotelev1">&gt; mytime( t_begin );
</span><br>
<span class="quotelev1">&gt; for( i=0; i&lt;8; i++ )
</span><br>
<span class="quotelev1">&gt;     MPI_Wait;
</span><br>
<span class="quotelev1">&gt; mytime( t_end );
</span><br>
<span class="quotelev1">&gt; wait_time = t_end - t_begin;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The results of Allgatherv is:
</span><br>
<span class="quotelev1">&gt; [cmy_at_gnode102 test_nbc]$ /home3/cmy/czh/opt/ompi-1.8/bin/mpirun -n 2 --host
</span><br>
<span class="quotelev1">&gt; gnode102,gnode103 ./Allgatherv 128 2 | grep time
</span><br>
<span class="quotelev1">&gt; Computation time  :     8481279 us
</span><br>
<span class="quotelev1">&gt; Communication time:     319803 us
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The results of Iallgatherv is:
</span><br>
<span class="quotelev1">&gt; [cmy_at_gnode102 test_nbc]$ /home3/cmy/czh/opt/ompi-1.8/bin/mpirun -n 2 --host
</span><br>
<span class="quotelev1">&gt; gnode102,gnode103 ./Iallgatherv 128 2 | grep time
</span><br>
<span class="quotelev1">&gt; Computation time  :     8479177 us
</span><br>
<span class="quotelev1">&gt; Communication time:     199046 us
</span><br>
<span class="quotelev1">&gt; Wait time:              139841 us
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, does this mean that current OpenMPI implementation of MPI_Iallgatherv
</span><br>
<span class="quotelev1">&gt; doesn't support offloading of collective communication to dedicated cores or
</span><br>
<span class="quotelev1">&gt; network interface?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Zehan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Information System Engineer, Ph.D.
Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24069.php">Filippo Spiga: "[OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__"</a>
<li><strong>Previous message:</strong> <a href="24067.php">Zehan Cui: "[OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>In reply to:</strong> <a href="24067.php">Zehan Cui: "[OMPI users] performance of MPI_Iallgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24071.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Reply:</strong> <a href="24071.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
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
