<?
$subject_val = "[OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 05:02:08 2014" -->
<!-- isoreceived="20140417090208" -->
<!-- sent="Thu, 17 Apr 2014 18:02:09 +0900" -->
<!-- isosent="20140417090209" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks" -->
<!-- id="534F9891.1040604_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-17 05:02:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14557.php">Josh Hursey: "Re: [OMPI devel] 1-question developer poll"</a>
<li><strong>Previous message:</strong> <a href="14555.php">Christoph Niethammer: "Re: [OMPI devel] 1-question developer poll"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14571.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Reply:</strong> <a href="14571.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers,
<br>
<p>i just created #4531 in order to track this issue :
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/4531">https://svn.open-mpi.org/trac/ompi/ticket/4531</a>
<br>
<p>Basically, the coll/tuned implementation of MPI_Bcast does not work when
<br>
two tasks
<br>
uses datatypes of different sizes.
<br>
for example, if the root send two large vectors of MPI_INT and non root
<br>
receive many MPI_INT, then MPI_Bcast will crash.
<br>
but if the root send many MPI_INT and the non root receive two large
<br>
vectors of MPI_INT, then MPI_Bcast will silently fail.
<br>
(the TRAC ticket has attached test cases)
<br>
<p>i believe this kind of issue could occur on all/most collective of the
<br>
coll/tuned module, so it is not limited to MPI_Bcast.
<br>
<p><p>i am wondering of what could be the best way to solve this.
<br>
<p>one solution i could think of, would be to generate temporary datatypes
<br>
in order to send message whose size is exactly the segment_size.
<br>
<p>an other solution i could think of, would be to have new send/recv
<br>
functions :
<br>
if we consider the send function :
<br>
int mca_pml_ob1_send(void *buf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t count,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_datatype_t * datatype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int dst,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_base_send_mode_t sendmode,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_communicator_t * comm)
<br>
<p>we could imagine to have the xsend function :
<br>
int mca_pml_ob1_xsend(void *buf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t count,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_datatype_t * datatype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t offset,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int dst,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_base_send_mode_t sendmode,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_communicator_t * comm)
<br>
<p>where offset is the number of bytes that should be skipped from the
<br>
beginning of buf
<br>
and size if the (max) number of bytes to be sent (e.g. the message will
<br>
be &quot;truncated&quot;
<br>
to size bytes if (count*size(datatype) - offset) &gt; size
<br>
<p>or we could use a buffer if needed, and send/recv with MPI_PACKED datatype
<br>
(this is less efficient, would it even work on heterogeneous nodes ?)
<br>
<p>or we could simply consider this is just a limitation of coll/tuned
<br>
(coll/basic works fine) and do nothing
<br>
<p>or something else i did not think of ...
<br>
<p><p>thanks in advance for your feedback
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14557.php">Josh Hursey: "Re: [OMPI devel] 1-question developer poll"</a>
<li><strong>Previous message:</strong> <a href="14555.php">Christoph Niethammer: "Re: [OMPI devel] 1-question developer poll"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14571.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Reply:</strong> <a href="14571.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
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
