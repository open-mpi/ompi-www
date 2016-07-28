<?
$subject_val = "[OMPI users] Bug report [?] on spawn processes - blocking when more than one Send/Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 09:55:03 2009" -->
<!-- isoreceived="20090325135503" -->
<!-- sent="Wed, 25 Mar 2009 14:52:18 +0100" -->
<!-- isosent="20090325135218" -->
<!-- name="Lionel Gamet" -->
<!-- email="Lionel.Gamet_at_[hidden]" -->
<!-- subject="[OMPI users] Bug report [?] on spawn processes - blocking when more than one Send/Recv" -->
<!-- id="49CA3712.70800_at_fluorem.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Bug report [?] on spawn processes - blocking when more than one Send/Recv<br>
<strong>From:</strong> Lionel Gamet (<em>Lionel.Gamet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 09:52:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8580.php">Gus Correa: "[OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Previous message:</strong> <a href="8578.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8622.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<li><strong>Reply:</strong> <a href="8622.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear openmpi users and developers,
<br>
<p>I encounter dead-lock problems with spawn processes in openmpi, as
<br>
soon as more than one Send/Recv operation is done.
<br>
<p>The test case I used has been extracted from the MPICH2 examples. It is
<br>
a simple parent/child program. The original version (see attached file
<br>
parent+child_from_MPICH2.tar.gz) works well under openmpi.
<br>
I use commands in run.cmd to compile and execute this example.
<br>
<p>I have tried to add one more communication by duplicating the send/recv
<br>
calls of the original MPICH2 source (see modified files in attached tar
<br>
archive parent+child_with_more_send_recv.tar.gz) and get dead-lock
<br>
problems when executing this modified version ...
<br>
<p>Can anybody reproduce this ? I am using openmpi version 1.3 on a
<br>
Linux CentOS 5.2 (i386), with all updates of the distribution done.
<br>
See also attached file ompi_info.txt.gz (result of the command ompi_info 
<br>
--all).
<br>
<p>Thanks in advance for any hints,
<br>
<p>Best regards
<br>
<p>Lionel
<br>
<p>



<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8579/parent_child_from_MPICH2.tar.gz">parent_child_from_MPICH2.tar.gz</a>
</ul>
<!-- attachment="parent_child_from_MPICH2.tar.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8579/parent_child_with_more_send_recv.tar.gz">parent_child_with_more_send_recv.tar.gz</a>
</ul>
<!-- attachment="parent_child_with_more_send_recv.tar.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8579/ompi_info.txt.gz">ompi_info.txt.gz</a>
</ul>
<!-- attachment="ompi_info.txt.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8580.php">Gus Correa: "[OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Previous message:</strong> <a href="8578.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8622.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<li><strong>Reply:</strong> <a href="8622.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
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
