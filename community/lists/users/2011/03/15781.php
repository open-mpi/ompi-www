<?
$subject_val = "[OMPI users] MPI_File_Read_all and large file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  2 12:02:42 2011" -->
<!-- isoreceived="20110302170242" -->
<!-- sent="Wed, 2 Mar 2011 18:02:36 +0100" -->
<!-- isosent="20110302170236" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_File_Read_all and large file" -->
<!-- id="AANLkTima-YSyo6TMCPn_C1mWSQfwpPakF+MHmieo4P_=_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_File_Read_all and large file<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-02 12:02:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15782.php">Ricardo Reis: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>Previous message:</strong> <a href="15780.php">Eye RCS 51: "Re: [OMPI users] using MPI through Qt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15782.php">Ricardo Reis: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>Reply:</strong> <a href="15782.php">Ricardo Reis: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>Reply:</strong> <a href="15783.php">Massimo Cafaro: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI users and developers,
<br>
<p>i'm using OpenMPI 1.4.3.
<br>
<p>My question is about MPI_FIle_Real_all routine and files larger than 4 GB.
<br>
Is this routine able to manage this case?
<br>
<p>Using the routine with 6 GB file the routine fails, retrieving an allocation
<br>
error. Investigating more in depth with Totalview, the problem appears in a
<br>
line 188 of ompi/mca/io/romio/romio/adio/ad_nfs/ad_nfs_read.c:
<br>
<p>MPI_Type_size(fd-&gt;filetype, &amp;filetype_size);
<br>
<p>here there is an explicit cast to int that can causes the problem.
<br>
<p>Someone can help me?
<br>
<p>Thanks in forward.
<br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15781/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15782.php">Ricardo Reis: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>Previous message:</strong> <a href="15780.php">Eye RCS 51: "Re: [OMPI users] using MPI through Qt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15782.php">Ricardo Reis: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>Reply:</strong> <a href="15782.php">Ricardo Reis: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>Reply:</strong> <a href="15783.php">Massimo Cafaro: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
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
