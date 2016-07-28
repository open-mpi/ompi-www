<?
$subject_val = "[OMPI users] Simple Question regarding MPI Scatterv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 03:43:34 2014" -->
<!-- isoreceived="20140408074334" -->
<!-- sent="Tue, 8 Apr 2014 09:43:33 +0200" -->
<!-- isosent="20140408074333" -->
<!-- name="Hamid Saeed" -->
<!-- email="e.hamidsaeed_at_[hidden]" -->
<!-- subject="[OMPI users] Simple Question regarding MPI Scatterv" -->
<!-- id="CAADBNWwhRJ_uZz7q32Kk2v-xs0NTikbnB1bO9zvzNL82KkULBw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Simple Question regarding MPI Scatterv<br>
<strong>From:</strong> Hamid Saeed (<em>e.hamidsaeed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 03:43:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24104.php">Anthony Alba: "[OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
<li><strong>Previous message:</strong> <a href="24102.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24109.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>Reply:</strong> <a href="24109.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I have a very basic question regarding MPI communication.
<br>
<p>In my Task, what i am doing is..
<br>
Comparing Scatterv and MPIO.
<br>
1) In scatterv, I scatter all the data to the other ranks and SCAN for the
<br>
specific characters.
<br>
MPI_Scatterv (chunk, send_counts, displacements, MPI_CHAR, copychunk,
<br>
smallchunk_size,
<br>
MPI_CHAR, 0,  MPI_COMM_WORLD);
<br>
&amp;
<br>
2) On the other hand using MPIO, I have the data available in the shared
<br>
memory and every rank searches in the specific chunk.
<br>
MPI_File_open(MPI_COMM_WORLD, &quot;170mb.txt&quot;, MPI_MODE_RDONLY, MPI_INFO_NULL,
<br>
&amp;in);
<br>
here i assign every processor to search in a specific &quot;chunk&quot;
<br>
<p><p>My question is..
<br>
<p>Why MPI_Scatterv using 1 processor takes more time then MPI_File_open?
<br>
How does MPI sending and receiving takes place?
<br>
<p>I think using 1 processor does not include physical sending and receiving.
<br>
Then why it consumes more clock?
<br>
<p>In the attachment you can observe the plots in which i performed some tests
<br>
using both algorithms.
<br>
<p>Kindly explain briefly the mpi communication using 1 processor and multiple
<br>
processors.
<br>
<p><p>Thanks in advance.
<br>
<p>Regards
<br>
Hamid
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24103/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-24103/karp_heterogeneous_Mean_MPIO_scatterv_using_170mb.jpg" alt="karp_heterogeneous_Mean_MPIO_scatterv_using_170mb.jpg">
<!-- attachment="karp_heterogeneous_Mean_MPIO_scatterv_using_170mb.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24104.php">Anthony Alba: "[OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
<li><strong>Previous message:</strong> <a href="24102.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24109.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
<li><strong>Reply:</strong> <a href="24109.php">Hamid Saeed: "Re: [OMPI users] Simple Question regarding MPI Scatterv"</a>
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
