<?
$subject_val = "[OMPI devel] mca_btl_sm_sendi question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 18:09:20 2009" -->
<!-- isoreceived="20090224230920" -->
<!-- sent="Tue, 24 Feb 2009 15:08:32 -0800" -->
<!-- isosent="20090224230832" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] mca_btl_sm_sendi question" -->
<!-- id="49A47DF0.1020002_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] mca_btl_sm_sendi question<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 18:08:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5526.php">Ralph Castain: "[OMPI devel] opal_value_array"</a>
<li><strong>Previous message:</strong> <a href="5524.php">Wayne Gilmore: "Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5528.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Reply:</strong> <a href="5528.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Probably this message only for George, but I'll toss it out to the 
<br>
alias/archive.)
<br>
<p>I have a question about the sm sendi() function.  What should happen if 
<br>
the sendi() function attempts to write to the FIFO, but the FIFO is full?
<br>
<p>Currently, it appears that the sendi() function returns an error code to 
<br>
the PML, which assumes that the sendi() tried to send the message but 
<br>
failed and so just tried to allocate a descriptor.
<br>
<p>But is that what should happen?  The condition of the FIFO being full is 
<br>
a little misleading since the write is still queued for further progress 
<br>
-- not in the FIFO itself but in the pending-send queue.  This 
<br>
distinction should perhaps not matter to the upper layers.  The upper 
<br>
layers should still view the send as &quot;completed&quot; (buffered by the MPI 
<br>
implementation to be progressed later).  I would think that the sendi() 
<br>
function should return a SUCCESS code.
<br>
<p>Relevent source code is
<br>
<p>PML, line 496
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.c#496">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.c#496</a>
<br>
<p>BTL, line 785
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c#785">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm.c#785</a>
<br>
<p>FIFO write, line 18
<br>
<a href="https://svn.open-mpi.org/opengrok/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm_fifo.h#18">https://svn.open-mpi.org/opengrok/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm_fifo.h#18</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5526.php">Ralph Castain: "[OMPI devel] opal_value_array"</a>
<li><strong>Previous message:</strong> <a href="5524.php">Wayne Gilmore: "Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5528.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Reply:</strong> <a href="5528.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
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
