<?
$subject_val = "Re: [OMPI users] performance of MPI_Iallgatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  6 23:12:07 2014" -->
<!-- isoreceived="20140407031207" -->
<!-- sent="Mon, 7 Apr 2014 11:12:06 +0800" -->
<!-- isosent="20140407031206" -->
<!-- name="Zehan Cui" -->
<!-- email="zehan.cui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] performance of MPI_Iallgatherv" -->
<!-- id="CALr9+a51x5vAAkEGkkx-6iAm7kRbNy3zNexbjKWC7thv8LLZwA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHCaCkJjcEuLY1m2SboYPJZCCyODPJwRbikFr9fWXZaPe8aprQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Zehan Cui (<em>zehan.cui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-06 23:12:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24072.php">Kamal: "[OMPI users] Open Mpi execution error"</a>
<li><strong>Previous message:</strong> <a href="24070.php">Chen Bill: "[OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work"</a>
<li><strong>In reply to:</strong> <a href="24068.php">Matthieu Brucher: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24075.php">Nathan Hjelm: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Reply:</strong> <a href="24075.php">Nathan Hjelm: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Reply:</strong> <a href="24107.php">Matthieu Brucher: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Matthieu,
<br>
<p>Thanks for your suggestion. I tried MPI_Waitall(), but the results are
<br>
the same. It seems the communication didn't overlap with computation.
<br>
<p>Regards,
<br>
Zehan
<br>
<p>On 4/5/14, Matthieu Brucher &lt;matthieu.brucher_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try waiting on all gathers at the same time, not one by one (this is
</span><br>
<span class="quotelev1">&gt; what non blocking collectives are made for!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthieu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-04-05 10:35 GMT+01:00 Zehan Cui &lt;zehan.cui_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm testing the non-blocking collective of OpenMPI-1.8.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have two nodes with Infiniband to perform allgather on totally 128MB
</span><br>
<span class="quotelev2">&gt;&gt; data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I split the 128MB data into eight pieces, and perform computation and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Iallgatherv() on one piece of data each iteration, hoping that the
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Iallgatherv() of last iteration can be overlapped with computation of
</span><br>
<span class="quotelev2">&gt;&gt; current iteration. A MPI_Wait() is called at the end of last iteration.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, the total communication time (including the final wait time) is
</span><br>
<span class="quotelev2">&gt;&gt; similar with that of the traditional blocking MPI_Allgatherv, even
</span><br>
<span class="quotelev2">&gt;&gt; slightly
</span><br>
<span class="quotelev2">&gt;&gt; higher.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Following is the test pseudo-code, the source code are attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ===========================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using MPI_Allgatherv:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for( i=0; i&lt;8; i++ )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   // computation
</span><br>
<span class="quotelev2">&gt;&gt;     mytime( t_begin );
</span><br>
<span class="quotelev2">&gt;&gt;     computation;
</span><br>
<span class="quotelev2">&gt;&gt;     mytime( t_end );
</span><br>
<span class="quotelev2">&gt;&gt;     comp_time += (t_end - t_begin);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   // communication
</span><br>
<span class="quotelev2">&gt;&gt;     t_begin = t_end;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Allgatherv();
</span><br>
<span class="quotelev2">&gt;&gt;     mytime( t_end );
</span><br>
<span class="quotelev2">&gt;&gt;     comm_time += (t_end - t_begin);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using MPI_Iallgatherv:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for( i=0; i&lt;8; i++ )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   // computation
</span><br>
<span class="quotelev2">&gt;&gt;     mytime( t_begin );
</span><br>
<span class="quotelev2">&gt;&gt;     computation;
</span><br>
<span class="quotelev2">&gt;&gt;     mytime( t_end );
</span><br>
<span class="quotelev2">&gt;&gt;     comp_time += (t_end - t_begin);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   // communication
</span><br>
<span class="quotelev2">&gt;&gt;     t_begin = t_end;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Iallgatherv();
</span><br>
<span class="quotelev2">&gt;&gt;     mytime( t_end );
</span><br>
<span class="quotelev2">&gt;&gt;     comm_time += (t_end - t_begin);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; // wait for non-blocking allgather to complete
</span><br>
<span class="quotelev2">&gt;&gt; mytime( t_begin );
</span><br>
<span class="quotelev2">&gt;&gt; for( i=0; i&lt;8; i++ )
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Wait;
</span><br>
<span class="quotelev2">&gt;&gt; mytime( t_end );
</span><br>
<span class="quotelev2">&gt;&gt; wait_time = t_end - t_begin;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The results of Allgatherv is:
</span><br>
<span class="quotelev2">&gt;&gt; [cmy_at_gnode102 test_nbc]$ /home3/cmy/czh/opt/ompi-1.8/bin/mpirun -n 2
</span><br>
<span class="quotelev2">&gt;&gt; --host
</span><br>
<span class="quotelev2">&gt;&gt; gnode102,gnode103 ./Allgatherv 128 2 | grep time
</span><br>
<span class="quotelev2">&gt;&gt; Computation time  :     8481279 us
</span><br>
<span class="quotelev2">&gt;&gt; Communication time:     319803 us
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The results of Iallgatherv is:
</span><br>
<span class="quotelev2">&gt;&gt; [cmy_at_gnode102 test_nbc]$ /home3/cmy/czh/opt/ompi-1.8/bin/mpirun -n 2
</span><br>
<span class="quotelev2">&gt;&gt; --host
</span><br>
<span class="quotelev2">&gt;&gt; gnode102,gnode103 ./Iallgatherv 128 2 | grep time
</span><br>
<span class="quotelev2">&gt;&gt; Computation time  :     8479177 us
</span><br>
<span class="quotelev2">&gt;&gt; Communication time:     199046 us
</span><br>
<span class="quotelev2">&gt;&gt; Wait time:              139841 us
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, does this mean that current OpenMPI implementation of MPI_Iallgatherv
</span><br>
<span class="quotelev2">&gt;&gt; doesn't support offloading of collective communication to dedicated cores
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; network interface?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Zehan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev1">&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev1">&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev1">&gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Best Regards
Zehan Cui(&#229;&#180;&#148;&#230;&#179;&#189;&#230;&#177;&#137;)
-----------------------------------------------------------
Institute of Computing Technology, Chinese Academy of Sciences.
No.6 Kexueyuan South Road Zhongguancun,Haidian District Beijing,China
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24072.php">Kamal: "[OMPI users] Open Mpi execution error"</a>
<li><strong>Previous message:</strong> <a href="24070.php">Chen Bill: "[OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work"</a>
<li><strong>In reply to:</strong> <a href="24068.php">Matthieu Brucher: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24075.php">Nathan Hjelm: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Reply:</strong> <a href="24075.php">Nathan Hjelm: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<li><strong>Reply:</strong> <a href="24107.php">Matthieu Brucher: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
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
