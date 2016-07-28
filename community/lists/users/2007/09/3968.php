<?
$subject_val = "[OMPI users] MPI_Read_file and MPI_Write_file fails";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  3 01:48:34 2007" -->
<!-- isoreceived="20070903054834" -->
<!-- sent="Mon, 3 Sep 2007 15:48:30 +1000" -->
<!-- isosent="20070903054830" -->
<!-- name="Corey Putkunz" -->
<!-- email="coreysemail_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Read_file and MPI_Write_file fails" -->
<!-- id="96c562740709022248t4543028as424f9a9c144aaeb0_at_mail.gmail.com" -->
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
<strong>From:</strong> Corey Putkunz (<em>coreysemail_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-03 01:48:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3969.php">Edgar Gabriel: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>Previous message:</strong> <a href="../../2007/08/3967.php">Bernd Schubert: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3969.php">Edgar Gabriel: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>Reply:</strong> <a href="3969.php">Edgar Gabriel: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>An interesting problem I've discovered with MPI_Read_file (part of the
<br>
MPI I/O interface). When trying to read a 256^3 complex array (by
<br>
complex I mean &quot;complex&quot; defined in complex.h) into a single
<br>
dynamically allocated array (whos memory is successfully allocated).
<br>
To read I call:
<br>
<p>MPI_File_read ( file_in, data, S, MPI_2DOUBLE_COMPLEX, &amp;status );
<br>
<p>(where S=256x256x256)     though the call fails and I can't figure out
<br>
why. If I reduce the amount of data MPI_File_read attempts to read the
<br>
call works. I can find this issue anywhere else on the net. Please
<br>
help anyone!
<br>
<p>(System is running on an Intel machine, Fedora 7)
<br>
<p>Thanks. Corey
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3969.php">Edgar Gabriel: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>Previous message:</strong> <a href="../../2007/08/3967.php">Bernd Schubert: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3969.php">Edgar Gabriel: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
<li><strong>Reply:</strong> <a href="3969.php">Edgar Gabriel: "Re: [OMPI users] MPI_Read_file and MPI_Write_file fails"</a>
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
