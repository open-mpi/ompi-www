<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 20 14:19:55 2006" -->
<!-- isoreceived="20061120191955" -->
<!-- sent="Mon, 20 Nov 2006 20:19:46 +0100" -->
<!-- isosent="20061120191946" -->
<!-- name="Miquel Dotcom" -->
<!-- email="miquel.dotcom_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_ERR_TRUNCATE" -->
<!-- id="dda319300611201119j872ea61mc6ef4b480951a508_at_mail.gmail.com" -->
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
<strong>From:</strong> Miquel Dotcom (<em>miquel.dotcom_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-20 14:19:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1191.php">Jeff Squyres: "Re: [OMPI devel] MPI_ERR_TRUNCATE"</a>
<li><strong>Previous message:</strong> <a href="1189.php">Resat Umit Payli: "Re: [OMPI devel] Cross-Cluster OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1191.php">Jeff Squyres: "Re: [OMPI devel] MPI_ERR_TRUNCATE"</a>
<li><strong>Reply:</strong> <a href="1191.php">Jeff Squyres: "Re: [OMPI devel] MPI_ERR_TRUNCATE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I'm using openMPI for a paralelization of a fortran90 code. I came accross
<br>
an error - when I try to send a matrix 400x450 of real*8 (double) I get
<br>
following error:
<br>
<p>[masada:05620] *** An error occurred in MPI_Recv
<br>
[masada:05620] *** on communicator MPI_COMM_WORLD
<br>
[masada:05620] *** MPI_ERR_TRUNCATE: message truncated
<br>
[masada:05620] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
<p>I understand that the amount of data that can be send by one MPI_SEND call
<br>
is somehow limited - what is this limitation? can it be somehow augmented?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;best
<br>
regards,
<br>
<p>Michael
<br>
<p><pre>
-- 
Visca Paisos Catalans!
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1190/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1191.php">Jeff Squyres: "Re: [OMPI devel] MPI_ERR_TRUNCATE"</a>
<li><strong>Previous message:</strong> <a href="1189.php">Resat Umit Payli: "Re: [OMPI devel] Cross-Cluster OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1191.php">Jeff Squyres: "Re: [OMPI devel] MPI_ERR_TRUNCATE"</a>
<li><strong>Reply:</strong> <a href="1191.php">Jeff Squyres: "Re: [OMPI devel] MPI_ERR_TRUNCATE"</a>
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
