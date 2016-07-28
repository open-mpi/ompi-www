<?
$subject_val = "Re: [OMPI users] performance of MPI_Iallgatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 05:40:58 2014" -->
<!-- isoreceived="20140408094058" -->
<!-- sent="Tue, 8 Apr 2014 10:40:57 +0100" -->
<!-- isosent="20140408094057" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] performance of MPI_Iallgatherv" -->
<!-- id="CAHCaCkLr8nHsEJLWonN3yF-scvN_4qxwnaOL9=Hjp=7=HswhOA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALr9+a51x5vAAkEGkkx-6iAm7kRbNy3zNexbjKWC7thv8LLZwA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-04-08 05:40:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24108.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24106.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>In reply to:</strong> <a href="24071.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24120.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Reply:</strong> <a href="24120.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, usually the MPI libraries don't allow that. You can launch
<br>
another thread for the computation, make calls to MPI_Test during that
<br>
time and join at the end.
<br>
<p>Cheers,
<br>
<p>2014-04-07 4:12 GMT+01:00 Zehan Cui &lt;zehan.cui_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi Matthieu,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your suggestion. I tried MPI_Waitall(), but the results are
</span><br>
<span class="quotelev1">&gt; the same. It seems the communication didn't overlap with computation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Zehan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/5/14, Matthieu Brucher &lt;matthieu.brucher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try waiting on all gathers at the same time, not one by one (this is
</span><br>
<span class="quotelev2">&gt;&gt; what non blocking collectives are made for!)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Matthieu
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2014-04-05 10:35 GMT+01:00 Zehan Cui &lt;zehan.cui_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm testing the non-blocking collective of OpenMPI-1.8.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have two nodes with Infiniband to perform allgather on totally 128MB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I split the 128MB data into eight pieces, and perform computation and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Iallgatherv() on one piece of data each iteration, hoping that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Iallgatherv() of last iteration can be overlapped with computation of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current iteration. A MPI_Wait() is called at the end of last iteration.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, the total communication time (including the final wait time) is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; similar with that of the traditional blocking MPI_Allgatherv, even
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slightly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; higher.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Following is the test pseudo-code, the source code are attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using MPI_Allgatherv:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for( i=0; i&lt;8; i++ )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   // computation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mytime( t_begin );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     computation;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mytime( t_end );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     comp_time += (t_end - t_begin);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   // communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     t_begin = t_end;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Allgatherv();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mytime( t_end );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     comm_time += (t_end - t_begin);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using MPI_Iallgatherv:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for( i=0; i&lt;8; i++ )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   // computation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mytime( t_begin );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     computation;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mytime( t_end );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     comp_time += (t_end - t_begin);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   // communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     t_begin = t_end;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Iallgatherv();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mytime( t_end );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     comm_time += (t_end - t_begin);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // wait for non-blocking allgather to complete
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mytime( t_begin );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for( i=0; i&lt;8; i++ )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Wait;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mytime( t_end );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wait_time = t_end - t_begin;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The results of Allgatherv is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cmy_at_gnode102 test_nbc]$ /home3/cmy/czh/opt/ompi-1.8/bin/mpirun -n 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gnode102,gnode103 ./Allgatherv 128 2 | grep time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computation time  :     8481279 us
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Communication time:     319803 us
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The results of Iallgatherv is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cmy_at_gnode102 test_nbc]$ /home3/cmy/czh/opt/ompi-1.8/bin/mpirun -n 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gnode102,gnode103 ./Iallgatherv 128 2 | grep time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computation time  :     8479177 us
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Communication time:     199046 us
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wait time:              139841 us
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, does this mean that current OpenMPI implementation of MPI_Iallgatherv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't support offloading of collective communication to dedicated cores
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network interface?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Zehan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev2">&gt;&gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt; Zehan Cui(&#229;&#180;&#148;&#230;&#179;&#189;&#230;&#177;&#137;)
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Institute of Computing Technology, Chinese Academy of Sciences.
</span><br>
<span class="quotelev1">&gt; No.6 Kexueyuan South Road Zhongguancun,Haidian District Beijing,China
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
<li><strong>Next message:</strong> <a href="24108.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24106.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>In reply to:</strong> <a href="24071.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24120.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Reply:</strong> <a href="24120.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
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
