<?
$subject_val = "Re: [OMPI users] performance of MPI_Iallgatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 11:41:51 2014" -->
<!-- isoreceived="20140407154151" -->
<!-- sent="Mon, 7 Apr 2014 09:41:50 -0600" -->
<!-- isosent="20140407154150" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] performance of MPI_Iallgatherv" -->
<!-- id="20140407154150.GB61432_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 11:41:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24076.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Previous message:</strong> <a href="24074.php">Hamid Saeed: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>In reply to:</strong> <a href="24071.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24107.php">Matthieu Brucher: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no async progress in Open MPI at this time so this is the
<br>
expected behavior. We plan to fix this for the 1.9 release series.
<br>
<p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
<p>On Mon, Apr 07, 2014 at 11:12:06AM +0800, Zehan Cui wrote:
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
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Try waiting on all gathers at the same time, not one by one (this is
</span><br>
<span class="quotelev2">&gt; &gt; what non blocking collectives are made for!)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Matthieu
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2014-04-05 10:35 GMT+01:00 Zehan Cui &lt;zehan.cui_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm testing the non-blocking collective of OpenMPI-1.8.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have two nodes with Infiniband to perform allgather on totally 128MB
</span><br>
<span class="quotelev3">&gt; &gt;&gt; data.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I split the 128MB data into eight pieces, and perform computation and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Iallgatherv() on one piece of data each iteration, hoping that the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Iallgatherv() of last iteration can be overlapped with computation of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; current iteration. A MPI_Wait() is called at the end of last iteration.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, the total communication time (including the final wait time) is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; similar with that of the traditional blocking MPI_Allgatherv, even
</span><br>
<span class="quotelev3">&gt; &gt;&gt; slightly
</span><br>
<span class="quotelev3">&gt; &gt;&gt; higher.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Following is the test pseudo-code, the source code are attached.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===========================
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Using MPI_Allgatherv:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for( i=0; i&lt;8; i++ )
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   // computation
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     mytime( t_begin );
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     computation;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     mytime( t_end );
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     comp_time += (t_end - t_begin);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   // communication
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     t_begin = t_end;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     MPI_Allgatherv();
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     mytime( t_end );
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     comm_time += (t_end - t_begin);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Using MPI_Iallgatherv:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for( i=0; i&lt;8; i++ )
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   // computation
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     mytime( t_begin );
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     computation;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     mytime( t_end );
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     comp_time += (t_end - t_begin);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   // communication
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     t_begin = t_end;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     MPI_Iallgatherv();
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     mytime( t_end );
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     comm_time += (t_end - t_begin);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; // wait for non-blocking allgather to complete
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mytime( t_begin );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for( i=0; i&lt;8; i++ )
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     MPI_Wait;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mytime( t_end );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wait_time = t_end - t_begin;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==============================
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The results of Allgatherv is:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [cmy_at_gnode102 test_nbc]$ /home3/cmy/czh/opt/ompi-1.8/bin/mpirun -n 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --host
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gnode102,gnode103 ./Allgatherv 128 2 | grep time
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Computation time  :     8481279 us
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Communication time:     319803 us
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The results of Iallgatherv is:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [cmy_at_gnode102 test_nbc]$ /home3/cmy/czh/opt/ompi-1.8/bin/mpirun -n 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --host
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gnode102,gnode103 ./Iallgatherv 128 2 | grep time
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Computation time  :     8479177 us
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Communication time:     199046 us
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Wait time:              139841 us
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So, does this mean that current OpenMPI implementation of MPI_Iallgatherv
</span><br>
<span class="quotelev3">&gt; &gt;&gt; doesn't support offloading of collective communication to dedicated cores
</span><br>
<span class="quotelev3">&gt; &gt;&gt; or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; network interface?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Zehan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev2">&gt; &gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev2">&gt; &gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev2">&gt; &gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24075/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24076.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Previous message:</strong> <a href="24074.php">Hamid Saeed: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>In reply to:</strong> <a href="24071.php">Zehan Cui: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24107.php">Matthieu Brucher: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
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
