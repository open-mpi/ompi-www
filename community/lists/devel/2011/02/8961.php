<?
$subject_val = "[OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  7 04:53:51 2011" -->
<!-- isoreceived="20110207095351" -->
<!-- sent="Mon, 7 Feb 2011 10:54:24 +0100" -->
<!-- isosent="20110207095424" -->
<!-- name="Tobias Hilbrich" -->
<!-- email="tobias.hilbrich_at_[hidden]" -->
<!-- subject="[OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel" -->
<!-- id="0D127CC3-EBBE-4A3C-A9F7-F45BFEF365DD_at_zih.tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel<br>
<strong>From:</strong> Tobias Hilbrich (<em>tobias.hilbrich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-07 04:54:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8962.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>Previous message:</strong> <a href="8960.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8962.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>Reply:</strong> <a href="8962.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am with the ZIH developers working on VampirTrace and just discovered a possibly erroneous behavior of OpenMPI (v1.4.3). I am canceling an active persistent request created with MPI_Ssend_init, in a successive MPI_Wait call the process hangs, even though according to the MPI standard this should never happen. 
<br>
<p>The pesudo code is as follows:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Ssend_init (&amp;buf, 1, MPI_INT, 1, 666, MPI_COMM_WORLD, &amp;r);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv_init (&amp;buf, 1, MPI_INT, 0, 666, MPI_COMM_WORLD, &amp;r);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Start
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Start (&amp;r);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Cancel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Cancel (&amp;r);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Wait
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait (&amp;r, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Free
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request_free (&amp;r);
<br>
<p>The full (minimal reproducer) source code along with a dump of ompi_info is attached.
<br>
<p>Either I am missing some passage of the standard mentioning that it is forbidden to cancel an synchronous send or there appears to be an error in OpenMPI's implementation. If it is already fixed, sorry for the spam.
<br>
(Note: changing the Ssend to Send or Bsend removes the hang)
<br>
<p>-Tobias
<br>
&nbsp;
<br>
<p><pre>
--
Dipl.-Inf. Tobias Hilbrich
Wissenschaftlicher Mitarbeiter
Technische Universitaet Dresden
Zentrum fuer Informationsdienste und Hochleistungsrechnen (ZIH)
(Center for Information Services and High Performance Computing (ZIH))
Interdisziplin&#228;re Anwenderunterst&#252;tzung und Koordination
(Interdisciplinary Application Development and Coordination)
01062 Dresden
Tel.: +49 (351) 463-32041
Fax: +49 (351) 463-37773
E-Mail: tobias.hilbrich_at_[hidden]
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8961/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8961/ssend_init_cancel.c">ssend_init_cancel.c</a>
</ul>
<!-- attachment="ssend_init_cancel.c" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8961/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8961/ssend_init_cancel.ompi_info">ssend_init_cancel.ompi_info</a>
</ul>
<!-- attachment="ssend_init_cancel.ompi_info" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8961/05-attachment">attachment</a>
</ul>
<!-- attachment="05-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8962.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>Previous message:</strong> <a href="8960.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8962.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
<li><strong>Reply:</strong> <a href="8962.php">George Bosilca: "Re: [OMPI devel] Hang for MPI_Ssend_init + MPI_Cancel"</a>
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
