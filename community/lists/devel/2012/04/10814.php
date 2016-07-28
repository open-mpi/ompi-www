<?
$subject_val = "[OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  3 22:57:01 2012" -->
<!-- isoreceived="20120404025701" -->
<!-- sent="Wed, 04 Apr 2012 11:56:34 +0900" -->
<!-- isosent="20120404025634" -->
<!-- name="Kawashima" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="[OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation" -->
<!-- id="87fwckxl0d.wl%t-kawashima_at_jp.fujitsu.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation<br>
<strong>From:</strong> Kawashima (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-03 22:56:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10815.php">Ludovic.Hablot_at_[hidden]: "[OMPI devel] Set alignment for openib internal buffers"</a>
<li><strong>Previous message:</strong> <a href="10813.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Developers Meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10822.php">Jeffrey Squyres: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<li><strong>Reply:</strong> <a href="10822.php">Jeffrey Squyres: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Open MPI developers,
<br>
<p>I and my coworkers checked mpi-f90-interfaces.h against MPI 2.2 standard
<br>
and found many bugs in it. Attached patches fix them for trunk.
<br>
Though some of them are trivial, others are not so trivial.
<br>
So I'll explain them below.
<br>
<p>1. incorrect parameter types
<br>
<p>&nbsp;&nbsp;Two trivial parameter type mismatches.
<br>
&nbsp;&nbsp;Fixed in my mpi-f90-interface.type-mismatch.patch.
<br>
<p>&nbsp;&nbsp;MPI_Cart_map periods: integer -&gt; logical
<br>
&nbsp;&nbsp;MPI_Reduce_scatter recvcounts: missing &quot;dimension(*)&quot;
<br>
<p>2. incorrect intent against MPI 2.2 standard
<br>
<p>&nbsp;&nbsp;This is a somewhat complex issue.
<br>
&nbsp;&nbsp;First, I'll cite MPI 2.2 standard below.
<br>
<p>&nbsp;&nbsp;2.3 in MPI 2.2 standard says:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;There is one special case - if an argument is a handle to an opaque
<br>
&nbsp;&nbsp;&nbsp;&nbsp;object (these terms are defined in Section 2.5.1), and the object is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;updated by the procedure call, then the argument is marked INOUT or OUT.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;It is marked this way even though the handle itself is not modified -
<br>
&nbsp;&nbsp;&nbsp;&nbsp;we use the INOUT or OUT attribute to denote that what the handle
<br>
&nbsp;&nbsp;&nbsp;&nbsp;references is updated. Thus, in C++, IN arguments are usually either
<br>
&nbsp;&nbsp;&nbsp;&nbsp;references or pointers to const objects.
<br>
<p>&nbsp;&nbsp;2.3 in MPI 2.2 standard also says:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI's use of IN, OUT and INOUT is intended to indicate to the user
<br>
&nbsp;&nbsp;&nbsp;&nbsp;how an argument is to be used, but does not provide a rigorous
<br>
&nbsp;&nbsp;&nbsp;&nbsp;classification that can be translated directly into all language
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bindings (e.g., INTENT in Fortran 90 bindings or const in C bindings).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;For instance, the &quot;constant&quot; MPI_BOTTOM can usually be passed to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OUT buffer arguments. Similarly, MPI_STATUS_IGNORE can be passed as
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the OUT status argument.
<br>
<p>&nbsp;&nbsp;16.2.4 in MPI 2.2 standard says:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Advice to implementors.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The appropriate INTENT may be different from what is given in the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI generic interface. Implementations must choose INTENT so that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the function adheres to the MPI standard.
<br>
<p>&nbsp;&nbsp;Hmm. intent in mpi-f90-interfaces.h does not necessarily match
<br>
&nbsp;&nbsp;IN/OUT/INOUT in MPI 2.2, especially regarding opaque objects.
<br>
&nbsp;&nbsp;mpi-f90-interfaces.h seems to have consideration of opaque objects
<br>
&nbsp;&nbsp;partially, which is handled in r9922 and r23098.
<br>
<p>&nbsp;&nbsp;I compared MPI 2.2 (&quot;standard&quot;) and mpi-f90-interfaces.h (&quot;header&quot;)
<br>
&nbsp;&nbsp;and classified problematic parameters into four types.
<br>
<p>&nbsp;&nbsp;Type A. Trivial error.
<br>
<p>&nbsp;&nbsp;These are fixed in my mpi-f90-interface.intent-error-a.patch to match
<br>
&nbsp;&nbsp;the standard.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subroutine            |  parameter  | standard | header
<br>
&nbsp;&nbsp;-----------------------------+-------------+----------+--------
<br>
&nbsp;&nbsp;MPI_Bcast                    | buffer      | inout    | in
<br>
&nbsp;&nbsp;MPI_Pack                     | outsize     | in       | out
<br>
&nbsp;&nbsp;MPI_Comm_test_inter          | comm        | in       | inout
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| flag        | out      | in
<br>
&nbsp;&nbsp;MPI_Add_error_class          | errorclass  | out      | in
<br>
&nbsp;&nbsp;MPI_Win_create               | win         | out      | in
<br>
&nbsp;&nbsp;MPI_Get                      | origin_addr | out      | in
<br>
<p>&nbsp;&nbsp;Type B. Not match but not error (opaque object).
<br>
<p>&nbsp;&nbsp;Though these parameters in the header don't match the standard,
<br>
&nbsp;&nbsp;it's OK because these are opaque object and should not be INOUT
<br>
&nbsp;&nbsp;for Fortran. Some of these are fixed in r9922 and r23098.
<br>
&nbsp;&nbsp;These should not be changed.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subroutine            |  parameter  | standard | header
<br>
&nbsp;&nbsp;-----------------------------+-------------+----------+--------
<br>
&nbsp;&nbsp;MPI_Comm_set_attr            | comm        | inout    | in
<br>
&nbsp;&nbsp;MPI_Win_set_attr             | win         | inout    | in
<br>
&nbsp;&nbsp;MPI_Type_set_attr            | type        | inout    | in
<br>
&nbsp;&nbsp;MPI_Comm_set_errhandler      | comm        | inout    | in
<br>
&nbsp;&nbsp;MPI_Win_set_errhandler       | win         | inout    | in
<br>
&nbsp;&nbsp;MPI_File_set_errhandler      | file        | inout    | in
<br>
&nbsp;&nbsp;MPI_File_set_view            | fh          | inout    | in
<br>
&nbsp;&nbsp;MPI_Attr_put                 | comm        | inout    | in
<br>
&nbsp;&nbsp;MPI_Attr_delete              | comm        | inout    | in
<br>
&nbsp;&nbsp;MPI_Errhandler_set           | comm        | inout    | in
<br>
<p>&nbsp;&nbsp;Type C. Not match and yet error (opaque object).
<br>
<p>&nbsp;&nbsp;This parameter is similar to Type B but it should be IN, not OUT.
<br>
&nbsp;&nbsp;This is fixed in my mpi-f90-interface.intent-error-c.patch to match
<br>
&nbsp;&nbsp;intent that it should be.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subroutine            |  parameter  | standard | header | should be
<br>
&nbsp;&nbsp;-----------------------------+-------------+----------+--------+-----------
<br>
&nbsp;&nbsp;MPI_Info_delete              | info        | inout    | out    | in
<br>
<p>&nbsp;&nbsp;Type D. Match but error (opaque object).
<br>
<p>&nbsp;&nbsp;Though these parameters in the header match the standard,
<br>
&nbsp;&nbsp;they should be IN for Fortran because these are opaque objects and
<br>
&nbsp;&nbsp;their handles themselves are not changed.
<br>
&nbsp;&nbsp;These are fixed in my mpi-f90-interface.intent-error-d.patch to match
<br>
&nbsp;&nbsp;intent that they should be for Fortran.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subroutine            |  parameter  | standard | header | should be
<br>
&nbsp;&nbsp;-----------------------------+-------------+----------+--------+-----------
<br>
&nbsp;&nbsp;MPI_Comm_delete_attr         | comm        | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_Win_delete_attr          | win         | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_Type_delete_attr         | type        | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_Comm_set_name            | comm        | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_Type_set_name            | type        | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_Win_set_name             | win         | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_Info_set                 | info        | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_Grequest_complete        | request     | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_set_size            | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_preallocate         | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_set_info            | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_write_at            | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_write_at_all        | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_iwrite_at           | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_read                | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_read_all            | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_write               | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_write_all           | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_iread               | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_iwrite              | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_seek                | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_read_shared         | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_write_shared        | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_iread_shared        | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_iwrite_shared       | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_read_ordered        | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_write_ordered       | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_seek_shared         | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_write_at_all_begin  | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_write_at_all_end    | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_read_all_begin      | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_read_all_end        | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_write_all_begin     | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_write_all_end       | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_read_ordered_begin  | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_read_ordered_end    | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_write_ordered_begin | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_write_ordered_end   | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_set_atomicity       | fh          | inout    | inout  | in
<br>
&nbsp;&nbsp;MPI_File_sync                | fh          | inout    | inout  | in
<br>
<p>3. incorrect intent for MPI_IN_PLACE
<br>
<p>&nbsp;&nbsp;5.2.1 in MPI 2.2 standard says:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Advice to users.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;By allowing the &quot;in place&quot; option, the receive buffer in many of the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;collective calls becomes a send-and-receive buffer. For this reason,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;a Fortran binding that includes INTENT must mark these as INOUT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;not OUT. Note that MPI_IN_PLACE is a special kind of value; it has
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the same restrictions on its use that MPI_BOTTOM has.
<br>
<p>&nbsp;&nbsp;My mpi-f90-interfaces.intent-inplace.patch adapt intent parameters
<br>
&nbsp;&nbsp;to match intent for Fortran regarding MPI_IN_PLACE.
<br>
&nbsp;&nbsp;Note that intent of MPI_Scatter(v) should not be changed because
<br>
&nbsp;&nbsp;MPI_IN_PLACE can be specified for recvbuf instead of sendbuf and
<br>
&nbsp;&nbsp;no data are modified in sendbuf.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subroutine            | parameter | standard | header | should be
<br>
&nbsp;&nbsp;-----------------------------+-----------+----------+--------+-----------
<br>
&nbsp;&nbsp;MPI_Gather(v)                | recvbuf   | out      | out    | inout
<br>
&nbsp;&nbsp;MPI_Scatter(v)               | sendbuf   | in       | in     | in
<br>
&nbsp;&nbsp;MPI_Allgather(v)             | recvbuf   | out      | out    | inout
<br>
&nbsp;&nbsp;MPI_Alltoall(v,w)            | recvbuf   | out      | out    | inout
<br>
&nbsp;&nbsp;MPI_Reduce                   | recvbuf   | out      | out    | inout
<br>
&nbsp;&nbsp;MPI_Allreduce                | recvbuf   | out      | out    | inout
<br>
&nbsp;&nbsp;MPI_Reduce_scatter           | recvbuf   | out      | out    | inout
<br>
&nbsp;&nbsp;MPI_Scan                     | recvbuf   | out      | out    | inout
<br>
&nbsp;&nbsp;MPI_Exscan                   | recvbuf   | out      | out    | inout
<br>
<p>&nbsp;&nbsp;It seems that MPI_Reduce_scatter_block, which appears in MPI 2.2, is not
<br>
&nbsp;&nbsp;implemented in trunk yet. So my patch doesn't include modification for it.
<br>
<p>&nbsp;&nbsp;If you merge this patch to v1.4 branch, don't merge modification of
<br>
&nbsp;&nbsp;MPI_Alltoall(v,w) and MPI_Exscan. MPI 2.1 doesn't allow to use MPI_IN_PLACE
<br>
&nbsp;&nbsp;for these functions yet.
<br>
<p>&nbsp;&nbsp;This modification is necessary for some compilers. For example, consider
<br>
&nbsp;&nbsp;the following code.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;double, dimension(1) :: buf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf(1) = value
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_allreduce(mpi_in_place, buf, 1, mpi_double, mpi_sum, comm)
<br>
<p>&nbsp;&nbsp;If recvbuf is declared as &quot;intent(out)&quot; in mpi.mod, a compiler may
<br>
&nbsp;&nbsp;remove substitution of value for optimization because it is considered
<br>
&nbsp;&nbsp;not to be read in mpi_allreduce subroutine.
<br>
<p>4. mismatched interface and bridge
<br>
<p>&nbsp;&nbsp;I compared ompi/mpi/f90/scripts/mpi-f90-interfaces.h (&quot;interface&quot;) and
<br>
&nbsp;&nbsp;ompi/mpi/f90/scripts/mpi_*_f90.f90.sh (&quot;bridge&quot;) and found some mismatches
<br>
&nbsp;&nbsp;between them. The interfaces (except MPI_Mrecv) seems to be modifed in
<br>
&nbsp;&nbsp;r11057 but (I imagine) the bridges are forgotten to be modified at that
<br>
&nbsp;&nbsp;time.
<br>
&nbsp;&nbsp;These are fixed in my mpi-f90-interfaces.mismatched-bridge.patch to match
<br>
&nbsp;&nbsp;the interface.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subroutine            | parameter | interface | bridge
<br>
&nbsp;&nbsp;-----------------------------+-----------+-----------+--------
<br>
&nbsp;&nbsp;MPI_Recv                     | status    | out       | inout
<br>
&nbsp;&nbsp;MPI_Sendrecv                 | status    | out       | inout
<br>
&nbsp;&nbsp;MPI_Sendrecv_replace         | status    | out       | inout
<br>
&nbsp;&nbsp;MPI_Mrecv                    | status    | out       | inout
<br>
<p>I also attached a patch mpi-f90-interfaces.all-in-one.patch that includes
<br>
all 6 patches described above.
<br>
<p>Regards,
<br>
<p>Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p>






<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10814/mpi-f90-interfaces.type-mismatch.patch">mpi-f90-interfaces.type-mismatch.patch</a>
</ul>
<!-- attachment="mpi-f90-interfaces.type-mismatch.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10814/mpi-f90-interfaces.intent-error-a.patch">mpi-f90-interfaces.intent-error-a.patch</a>
</ul>
<!-- attachment="mpi-f90-interfaces.intent-error-a.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10814/mpi-f90-interfaces.intent-error-c.patch">mpi-f90-interfaces.intent-error-c.patch</a>
</ul>
<!-- attachment="mpi-f90-interfaces.intent-error-c.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10814/mpi-f90-interfaces.intent-error-d.patch">mpi-f90-interfaces.intent-error-d.patch</a>
</ul>
<!-- attachment="mpi-f90-interfaces.intent-error-d.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10814/mpi-f90-interfaces.intent-inplace.patch">mpi-f90-interfaces.intent-inplace.patch</a>
</ul>
<!-- attachment="mpi-f90-interfaces.intent-inplace.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10814/mpi-f90-interfaces.mismatched-bridge.patch">mpi-f90-interfaces.mismatched-bridge.patch</a>
</ul>
<!-- attachment="mpi-f90-interfaces.mismatched-bridge.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10814/mpi-f90-interfaces.all-in-one.patch">mpi-f90-interfaces.all-in-one.patch</a>
</ul>
<!-- attachment="mpi-f90-interfaces.all-in-one.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10815.php">Ludovic.Hablot_at_[hidden]: "[OMPI devel] Set alignment for openib internal buffers"</a>
<li><strong>Previous message:</strong> <a href="10813.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Developers Meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10822.php">Jeffrey Squyres: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<li><strong>Reply:</strong> <a href="10822.php">Jeffrey Squyres: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
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
