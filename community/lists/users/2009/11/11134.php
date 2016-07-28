<?
$subject_val = "Re: [OMPI users] Coding help requested";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 15:44:32 2009" -->
<!-- isoreceived="20091110204432" -->
<!-- sent="Tue, 10 Nov 2009 12:45:48 -0800" -->
<!-- isosent="20091110204548" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Coding help requested" -->
<!-- id="4AF9D0FC.3010506_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="428810f20911101025y2d068f09k505bed762218256e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Coding help requested<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 15:45:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11135.php">Qing Pang: "[OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Previous message:</strong> <a href="11133.php">Blosch, Edwin L: "[OMPI users] How do you get static linkage for Intel compiler libs for the orterun executable?"</a>
<li><strong>In reply to:</strong> <a href="11132.php">amjad ali: "[OMPI users] Coding help requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11137.php">Glembek Ondřej: "[OMPI users] System hang-up on MPI_Reduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
amjad ali wrote:
<br>
<p><span class="quotelev1">&gt; Hi all.
</span><br>
<span class="quotelev1">&gt; (sorry for duplication, if it is)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have to parallelize a CFD code using domain/grid/mesh partitioning 
</span><br>
<span class="quotelev1">&gt; among the processes. Before running, we do not know,
</span><br>
<span class="quotelev1">&gt; (i) How many processes we will use ( np  is unknown)
</span><br>
<span class="quotelev1">&gt; (ii) A process will have how many neighbouring processes (my_nbrs = ?)
</span><br>
<span class="quotelev1">&gt; (iii) How many entries a process need to send to a particular 
</span><br>
<span class="quotelev1">&gt; neighbouring process.
</span><br>
<span class="quotelev1">&gt; But when the code run, I calculate all of this info easily.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is to copy a number of entries to an array then send that 
</span><br>
<span class="quotelev1">&gt; array to a destination process. The same sender has to repeat this 
</span><br>
<span class="quotelev1">&gt; work to send data to all of its neighbouring processes. Is this 
</span><br>
<span class="quotelev1">&gt; following code fine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DO i = 1, my_nbrs
</span><br>
<span class="quotelev1">&gt;    DO j = 1, few_entries_for_this_neighbour
</span><br>
<span class="quotelev1">&gt;        send_array(j)   =    my_array(jth_particular_entry)
</span><br>
<span class="quotelev1">&gt;    ENDDO
</span><br>
<span class="quotelev1">&gt;    CALL MPI_ISEND(send_array(1:j),j, MPI_REAL8, dest(i), tag, 
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, request1(i), ierr)
</span><br>
<p>instead of &quot;j&quot; I assume you intended something like 
<br>
&quot;few_entries_for_this_neighbour&quot;
<br>
<p><span class="quotelev1">&gt; ENDDO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the corresponding receives, at each process:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DO i = 1, my_nbrs
</span><br>
<span class="quotelev1">&gt;    k = few_entries_from_this_neighbour
</span><br>
<span class="quotelev1">&gt;    CALL MPI_IRECV(recv_array(1:k),k, MPI_REAL8, source(i), tag, 
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, request2(i), ierr)
</span><br>
<span class="quotelev1">&gt;    DO j = 1, few_from_source(i)
</span><br>
<span class="quotelev1">&gt;        received_data(j)   =    recv_array(j)
</span><br>
<span class="quotelev1">&gt;    ENDDO
</span><br>
<span class="quotelev1">&gt; ENDDO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After the above MPI_WAITALL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this code will not work. Both for sending and receiving. For 
</span><br>
<span class="quotelev1">&gt; the non-blocking sends we cannot use send_array to send data to other 
</span><br>
<span class="quotelev1">&gt; processes like above (as we are not sure for the availability of 
</span><br>
<span class="quotelev1">&gt; application buffer for reuse). Am I right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Similar problem is with recv array; data from multiple processes 
</span><br>
<span class="quotelev1">&gt; cannot be received in the same array like above. Am I right?
</span><br>
<p>Correct for both send and receive.  When you call MPI_Isend, the buffer 
<br>
cannot be written until the MPI_Waitall.  When you use MPI_Irecv, you 
<br>
cannot read the data until MPI_Waitall.  You're reusing both send and 
<br>
receive buffers too often and too soon.
<br>
<p><span class="quotelev1">&gt; Target is to hide communication behind computation. So need non 
</span><br>
<span class="quotelev1">&gt; blocking communication. As we do know value of np or values of my_nbrs 
</span><br>
<span class="quotelev1">&gt; for each process, we cannot decide to create so many arrays. Please 
</span><br>
<span class="quotelev1">&gt; suggest solution.
</span><br>
<p>You can allocate memory dynamically, even in Fortran.
<br>
<p><span class="quotelev1">&gt; A more subtle solution that I could assume is following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cc = 0
</span><br>
<span class="quotelev1">&gt; DO i = 1, my_nbrs
</span><br>
<span class="quotelev1">&gt;    DO j = 1, few_entries_for_this_neighbour
</span><br>
<span class="quotelev1">&gt;        send_array(cc+j)   =    my_array(jth_particular_entry)
</span><br>
<span class="quotelev1">&gt;    ENDDO
</span><br>
<span class="quotelev1">&gt;    CALL MPI_ISEND(send_array(cc:cc+j),j, MPI_REAL8, dest(i), tag, 
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, request1(i), ierr)
</span><br>
<span class="quotelev1">&gt;    cc = cc  + j
</span><br>
<span class="quotelev1">&gt; ENDDO
</span><br>
<p>Same issue with j as before, but yes concatenating the various send 
<br>
buffers in a one-dimensional fashion should work.
<br>
<p><span class="quotelev1">&gt; And the corresponding receives, at each process:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cc = 0
</span><br>
<span class="quotelev1">&gt; DO i = 1, my_nbrs
</span><br>
<span class="quotelev1">&gt;    k = few_entries_from_this_neighbour
</span><br>
<span class="quotelev1">&gt;    CALL MPI_IRECV(recv_array(cc+1:cc+k),k, MPI_REAL8, source(i), tag, 
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, request2(i), ierr)
</span><br>
<span class="quotelev1">&gt;    DO j = 1, k
</span><br>
<span class="quotelev1">&gt;        received_data(j)   =    recv_array(cc+j)
</span><br>
<span class="quotelev1">&gt;    ENDDO
</span><br>
<span class="quotelev1">&gt;    cc = cc + k
</span><br>
<span class="quotelev1">&gt; ENDDO
</span><br>
<p>Okay, but you're still reading the data before the MPI_Waitall call.  If 
<br>
you call MPI_Irecv(buffer,...), you cannot read the buffer's contents 
<br>
until the corresponding MPI_Waitall (or variant).
<br>
<p><span class="quotelev1">&gt; After the above MPI_WAITALL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Means that,
</span><br>
<span class="quotelev1">&gt; send_array for all neighbours will have a collected shape:
</span><br>
<span class="quotelev1">&gt; send_array = [... entries for nbr 1 ..., ... entries for nbr 1 ..., 
</span><br>
<span class="quotelev1">&gt; ..., ... entries for last nbr ...]
</span><br>
<span class="quotelev1">&gt; And the respective entries will be send to respective neighbours as 
</span><br>
<span class="quotelev1">&gt; above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; recv_array for all neighbours will have a collected shape:
</span><br>
<span class="quotelev1">&gt; recv_array = [... entries from nbr 1 ..., ... entries from nbr 1 ..., 
</span><br>
<span class="quotelev1">&gt; ..., ... entries from last nbr ...]
</span><br>
<span class="quotelev1">&gt; And the entries from the processes will be received at respective 
</span><br>
<span class="quotelev1">&gt; locations/portion in the recv_array.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this scheme is quite fine and correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am in search of efficient one.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11135.php">Qing Pang: "[OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Previous message:</strong> <a href="11133.php">Blosch, Edwin L: "[OMPI users] How do you get static linkage for Intel compiler libs for the orterun executable?"</a>
<li><strong>In reply to:</strong> <a href="11132.php">amjad ali: "[OMPI users] Coding help requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11137.php">Glembek Ondřej: "[OMPI users] System hang-up on MPI_Reduce"</a>
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
