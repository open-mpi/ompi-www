<?
$subject_val = "[OMPI users] Coding help requested";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 13:25:42 2009" -->
<!-- isoreceived="20091110182542" -->
<!-- sent="Tue, 10 Nov 2009 13:25:38 -0500" -->
<!-- isosent="20091110182538" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="[OMPI users] Coding help requested" -->
<!-- id="428810f20911101025y2d068f09k505bed762218256e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Coding help requested<br>
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 13:25:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11133.php">Blosch, Edwin L: "[OMPI users] How do you get static linkage for Intel compiler libs for the orterun executable?"</a>
<li><strong>Previous message:</strong> <a href="11131.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11134.php">Eugene Loh: "Re: [OMPI users] Coding help requested"</a>
<li><strong>Reply:</strong> <a href="11134.php">Eugene Loh: "Re: [OMPI users] Coding help requested"</a>
<li><strong>Reply:</strong> <a href="11137.php">Glembek Ondřej: "[OMPI users] System hang-up on MPI_Reduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all.
<br>
(sorry for duplication, if it is)
<br>
<p>I have to parallelize a CFD code using domain/grid/mesh partitioning among
<br>
the processes. Before running, we do not know,
<br>
(i) How many processes we will use ( np  is unknown)
<br>
(ii) A process will have how many neighbouring processes (my_nbrs = ?)
<br>
(iii) How many entries a process need to send to a particular neighbouring
<br>
process.
<br>
But when the code run, I calculate all of this info easily.
<br>
<p><p>The problem is to copy a number of entries to an array then send that array
<br>
to a destination process. The same sender has to repeat this work to send
<br>
data to all of its neighbouring processes. Is this following code fine:
<br>
<p>DO i = 1, my_nbrs
<br>
&nbsp;&nbsp;&nbsp;DO j = 1, few_entries_for_this_neighbour
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_array(j)   =    my_array(jth_particular_entry)
<br>
&nbsp;&nbsp;&nbsp;ENDDO
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_ISEND(send_array(1:j),j, MPI_REAL8, dest(i), tag,
<br>
MPI_COMM_WORLD, request1(i), ierr)
<br>
ENDDO
<br>
<p>And the corresponding receives, at each process:
<br>
<p>DO i = 1, my_nbrs
<br>
&nbsp;&nbsp;&nbsp;k = few_entries_from_this_neighbour
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_IRECV(recv_array(1:k),k, MPI_REAL8, source(i), tag,
<br>
MPI_COMM_WORLD, request2(i), ierr)
<br>
&nbsp;&nbsp;&nbsp;DO j = 1, few_from_source(i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;received_data(j)   =    recv_array(j)
<br>
&nbsp;&nbsp;&nbsp;ENDDO
<br>
ENDDO
<br>
<p>After the above MPI_WAITALL.
<br>
<p><p>I think this code will not work. Both for sending and receiving. For the
<br>
non-blocking sends we cannot use send_array to send data to other processes
<br>
like above (as we are not sure for the availability of application buffer
<br>
for reuse). Am I right?
<br>
<p>Similar problem is with recv array; data from multiple processes cannot be
<br>
received in the same array like above. Am I right?
<br>
<p><p>Target is to hide communication behind computation. So need non blocking
<br>
communication. As we do know value of np or values of my_nbrs for each
<br>
process, we cannot decide to create so many arrays. Please suggest solution.
<br>
<p><p>===================
<br>
A more subtle solution that I could assume is following:
<br>
<p>cc = 0
<br>
DO i = 1, my_nbrs
<br>
&nbsp;&nbsp;&nbsp;DO j = 1, few_entries_for_this_neighbour
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_array(cc+j)   =    my_array(jth_particular_entry)
<br>
&nbsp;&nbsp;&nbsp;ENDDO
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_ISEND(send_array(cc:cc+j),j, MPI_REAL8, dest(i), tag,
<br>
MPI_COMM_WORLD, request1(i), ierr)
<br>
&nbsp;&nbsp;&nbsp;cc = cc  + j
<br>
ENDDO
<br>
<p>And the corresponding receives, at each process:
<br>
<p>cc = 0
<br>
DO i = 1, my_nbrs
<br>
&nbsp;&nbsp;&nbsp;k = few_entries_from_this_neighbour
<br>
&nbsp;&nbsp;&nbsp;CALL MPI_IRECV(recv_array(cc+1:cc+k),k, MPI_REAL8, source(i), tag,
<br>
MPI_COMM_WORLD, request2(i), ierr)
<br>
&nbsp;&nbsp;&nbsp;DO j = 1, k
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;received_data(j)   =    recv_array(cc+j)
<br>
&nbsp;&nbsp;&nbsp;ENDDO
<br>
&nbsp;&nbsp;&nbsp;cc = cc + k
<br>
ENDDO
<br>
<p>After the above MPI_WAITALL.
<br>
<p>Means that,
<br>
send_array for all neighbours will have a collected shape:
<br>
send_array = [... entries for nbr 1 ..., ... entries for nbr 1 ..., ..., ...
<br>
entries for last nbr ...]
<br>
And the respective entries will be send to respective neighbours as above.
<br>
<p><p>recv_array for all neighbours will have a collected shape:
<br>
recv_array = [... entries from nbr 1 ..., ... entries from nbr 1 ..., ...,
<br>
... entries from last nbr ...]
<br>
And the entries from the processes will be received at respective
<br>
locations/portion in the recv_array.
<br>
<p><p>Is this scheme is quite fine and correct.
<br>
<p>I am in search of efficient one.
<br>
<p>Request for help.
<br>
<p><p>With best regards,
<br>
Amjad Ali.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11132/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11133.php">Blosch, Edwin L: "[OMPI users] How do you get static linkage for Intel compiler libs for the orterun executable?"</a>
<li><strong>Previous message:</strong> <a href="11131.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11134.php">Eugene Loh: "Re: [OMPI users] Coding help requested"</a>
<li><strong>Reply:</strong> <a href="11134.php">Eugene Loh: "Re: [OMPI users] Coding help requested"</a>
<li><strong>Reply:</strong> <a href="11137.php">Glembek Ondřej: "[OMPI users] System hang-up on MPI_Reduce"</a>
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
