<?
$subject_val = "[OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 17:50:49 2009" -->
<!-- isoreceived="20090715215049" -->
<!-- sent="Wed, 15 Jul 2009 18:50:45 -0300" -->
<!-- isosent="20090715215045" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank" -->
<!-- id="e7ba66e40907151450g27b05b2bn68da8458237e6eb6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 17:50:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6437.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank"</a>
<li><strong>Previous message:</strong> <a href="6435.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6437.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank"</a>
<li><strong>Reply:</strong> <a href="6437.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI 2-1 standard says:
<br>
<p>&quot;MPI_PROC_NULL is a valid target rank in the MPI RMA calls
<br>
MPI_ACCUMULATE, MPI_GET, and MPI_PUT. The effect is the same as for
<br>
MPI_PROC_NULL in MPI point-to-point communication. After any RMA
<br>
operation with rank MPI_PROC_NULL, it is still necessary to finish the
<br>
RMA epoch with the synchronization method that started the epoch.&quot;
<br>
<p><p>Unfortunately, MPI_Accumulate() is not quite the same as
<br>
point-to-point, as a reduction is involved. Suppose you make this call
<br>
(let me abuse and use keyword arguments):
<br>
<p>MPI_Accumulate(..., target_rank=MPI_PROC_NULL,
<br>
target_datatype=MPI_BYTE, op=MPI_SUM, ...)
<br>
<p>IIUC, the call fails (with MPI_ERR_OP) in Open MPI because MPI_BYTE is
<br>
an invalid datatype for MPI_SUM.
<br>
<p>But provided that the target rank is MPI_PROC_NULL, would it make
<br>
sense for the call to success?
<br>
<p><p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6437.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank"</a>
<li><strong>Previous message:</strong> <a href="6435.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6437.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank"</a>
<li><strong>Reply:</strong> <a href="6437.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank"</a>
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
