<?
$subject_val = "[OMPI users] MPI_Bsend vs. MPI_Ibsend";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 04:43:50 2010" -->
<!-- isoreceived="20100506084350" -->
<!-- sent="Thu, 6 May 2010 10:43:43 +0200" -->
<!-- isosent="20100506084343" -->
<!-- name="Jovana Knezevic" -->
<!-- email="jovana.knezevic.83_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Bsend vs. MPI_Ibsend" -->
<!-- id="r2i9d13e50c1005060143g727553abl1978d85b959dec99_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Bsend vs. MPI_Ibsend<br>
<strong>From:</strong> Jovana Knezevic (<em>jovana.knezevic.83_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 04:43:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12917.php">Paul Kapinos: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Previous message:</strong> <a href="12915.php">Terry Frankcombe: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12922.php">Bill Rankin: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>Reply:</strong> <a href="12922.php">Bill Rankin: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>Could anyone please clarify me the difference between MPI_Bsend and
<br>
MPI_Ibsend? Or, in other words, what exactly is &quot;blocking&quot; in
<br>
MPI_Bsend, when the data is stored in the buffer and we &quot;return&quot;? :-)
<br>
Another, but similar, question:
<br>
<p>What about the data-buffer - when can it be reused in each of the
<br>
cases - simple examples:
<br>
<p>for (i=0; i&lt;NUMBER_OF_SLAVES; i++) {
<br>
<p>MPI_Bsend (&amp;data_buffer[0], ..., slave_id1...);
<br>
<p>}  // Can any problem occur here, since we send the data_buffer several times?
<br>
<p>for (i=0; i&lt;NUMBER_OF_SLAVES; i++) {
<br>
<p>MPI_Ibsend (&amp;data_buffer[0], ..., slave[i]..., &amp;request);
<br>
MPI_Test(&amp;request...)
<br>
<p>}  // Any difference to previous example? Concerning the re-use of data_buffer?
<br>
<p>Thank you a lot in advance.
<br>
<p>Regards,
<br>
Jovana
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12917.php">Paul Kapinos: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Previous message:</strong> <a href="12915.php">Terry Frankcombe: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12922.php">Bill Rankin: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>Reply:</strong> <a href="12922.php">Bill Rankin: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
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
