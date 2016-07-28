<?
$subject_val = "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 23:04:53 2014" -->
<!-- isoreceived="20140422030453" -->
<!-- sent="Mon, 21 Apr 2014 23:04:51 -0400" -->
<!-- isosent="20140422030451" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks" -->
<!-- id="CAMJJpkXm2QZQ=2ofXDGtZ9aSk5Ag7hwus4qB2ch+LUy3QYQpQg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="534F9891.1040604_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-21 23:04:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14572.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.1 release"</a>
<li><strong>Previous message:</strong> <a href="14570.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>In reply to:</strong> <a href="14556.php">Gilles Gouaillardet: "[OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14573.php">Hjelm, Nathan T: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Reply:</strong> <a href="14573.php">Hjelm, Nathan T: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Reply:</strong> <a href="14580.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed there are many potential solutions, but all require too much
<br>
intervention on the code to be generic enough. As we discussed
<br>
privately mid last year, the &quot;flatten datatype&quot; approach seems to me
<br>
to be the most profitable.It is simple to implement and it is also
<br>
generic, a simple change will make all pipelined collective work (not
<br>
only tuned but all the other as well).
<br>
<p>Use a flatten datatype instead of the one provided by the MPI
<br>
application. The flatten datatype will have the same type map as the
<br>
original data, but will be all in a single level. As the MPI standard
<br>
requires all collective to use datatype*count that has the same type
<br>
signature, this flattened datatype will allow all the peers in a
<br>
collective to have a consistent view of the operations to be done, and
<br>
as a result use the same sane pipelining boundaries.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Thu, Apr 17, 2014 at 5:02 AM, Gilles Gouaillardet
<br>
&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i just created #4531 in order to track this issue :
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4531">https://svn.open-mpi.org/trac/ompi/ticket/4531</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Basically, the coll/tuned implementation of MPI_Bcast does not work when
</span><br>
<span class="quotelev1">&gt; two tasks
</span><br>
<span class="quotelev1">&gt; uses datatypes of different sizes.
</span><br>
<span class="quotelev1">&gt; for example, if the root send two large vectors of MPI_INT and non root
</span><br>
<span class="quotelev1">&gt; receive many MPI_INT, then MPI_Bcast will crash.
</span><br>
<span class="quotelev1">&gt; but if the root send many MPI_INT and the non root receive two large
</span><br>
<span class="quotelev1">&gt; vectors of MPI_INT, then MPI_Bcast will silently fail.
</span><br>
<span class="quotelev1">&gt; (the TRAC ticket has attached test cases)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i believe this kind of issue could occur on all/most collective of the
</span><br>
<span class="quotelev1">&gt; coll/tuned module, so it is not limited to MPI_Bcast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am wondering of what could be the best way to solve this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; one solution i could think of, would be to generate temporary datatypes
</span><br>
<span class="quotelev1">&gt; in order to send message whose size is exactly the segment_size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; an other solution i could think of, would be to have new send/recv
</span><br>
<span class="quotelev1">&gt; functions :
</span><br>
<span class="quotelev1">&gt; if we consider the send function :
</span><br>
<span class="quotelev1">&gt; int mca_pml_ob1_send(void *buf,
</span><br>
<span class="quotelev1">&gt;                      size_t count,
</span><br>
<span class="quotelev1">&gt;                      ompi_datatype_t * datatype,
</span><br>
<span class="quotelev1">&gt;                      int dst,
</span><br>
<span class="quotelev1">&gt;                      int tag,
</span><br>
<span class="quotelev1">&gt;                      mca_pml_base_send_mode_t sendmode,
</span><br>
<span class="quotelev1">&gt;                      ompi_communicator_t * comm)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we could imagine to have the xsend function :
</span><br>
<span class="quotelev1">&gt; int mca_pml_ob1_xsend(void *buf,
</span><br>
<span class="quotelev1">&gt;                      size_t count,
</span><br>
<span class="quotelev1">&gt;                      ompi_datatype_t * datatype,
</span><br>
<span class="quotelev1">&gt;                      size_t offset,
</span><br>
<span class="quotelev1">&gt;                      size_t size,
</span><br>
<span class="quotelev1">&gt;                      int dst,
</span><br>
<span class="quotelev1">&gt;                      int tag,
</span><br>
<span class="quotelev1">&gt;                      mca_pml_base_send_mode_t sendmode,
</span><br>
<span class="quotelev1">&gt;                      ompi_communicator_t * comm)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where offset is the number of bytes that should be skipped from the
</span><br>
<span class="quotelev1">&gt; beginning of buf
</span><br>
<span class="quotelev1">&gt; and size if the (max) number of bytes to be sent (e.g. the message will
</span><br>
<span class="quotelev1">&gt; be &quot;truncated&quot;
</span><br>
<span class="quotelev1">&gt; to size bytes if (count*size(datatype) - offset) &gt; size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or we could use a buffer if needed, and send/recv with MPI_PACKED datatype
</span><br>
<span class="quotelev1">&gt; (this is less efficient, would it even work on heterogeneous nodes ?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or we could simply consider this is just a limitation of coll/tuned
</span><br>
<span class="quotelev1">&gt; (coll/basic works fine) and do nothing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or something else i did not think of ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks in advance for your feedback
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14556.php">http://www.open-mpi.org/community/lists/devel/2014/04/14556.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14572.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.1 release"</a>
<li><strong>Previous message:</strong> <a href="14570.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>In reply to:</strong> <a href="14556.php">Gilles Gouaillardet: "[OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14573.php">Hjelm, Nathan T: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Reply:</strong> <a href="14573.php">Hjelm, Nathan T: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Reply:</strong> <a href="14580.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
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
