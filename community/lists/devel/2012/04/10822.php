<?
$subject_val = "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  4 14:51:07 2012" -->
<!-- isoreceived="20120404185107" -->
<!-- sent="Wed, 4 Apr 2012 14:51:02 -0400" -->
<!-- isosent="20120404185102" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation" -->
<!-- id="3265C32D-6FF3-46D1-8B9A-A6DE538613D5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87fwckxl0d.wl%t-kawashima_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-04 14:51:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10823.php">Kawashima: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its	bridge implementation"</a>
<li><strong>Previous message:</strong> <a href="10821.php">Shamis, Pavel: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>In reply to:</strong> <a href="10814.php">Kawashima: "[OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10823.php">Kawashima: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its	bridge implementation"</a>
<li><strong>Reply:</strong> <a href="10823.php">Kawashima: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its	bridge implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 3, 2012, at 10:56 PM, Kawashima wrote:
<br>
<p><span class="quotelev1">&gt; I and my coworkers checked mpi-f90-interfaces.h against MPI 2.2 standard
</span><br>
<span class="quotelev1">&gt; and found many bugs in it. Attached patches fix them for trunk.
</span><br>
<span class="quotelev1">&gt; Though some of them are trivial, others are not so trivial.
</span><br>
<span class="quotelev1">&gt; So I'll explain them below.
</span><br>
<p>Excellent -- many thanks for these!
<br>
<p>I have some notes on the specific patches, below, but first note the following: Craig Rasmussen and I have been working on revamping the Open MPI Fortran bindings for quite a while.  Here's a quick summary of the changes:
<br>
<p>1. two prototypes of the new MPI-3 mpi_f08 module
<br>
&nbsp;&nbsp;&nbsp;a. Full implementation of all functions, not using F08 descriptors
<br>
&nbsp;&nbsp;&nbsp;b. 6-function MPI using F08 descriptors (showing that it can be done) for ifort
<br>
2. for the existing mpi module:
<br>
&nbsp;&nbsp;&nbsp;a. New implementation using &quot;ignore TKR&quot; directives
<br>
&nbsp;&nbsp;&nbsp;b. If your fortran compiler doesn't support &quot;ignore TKR&quot; directives (e.g., gfortran), fall back and use the old mpi module implementation
<br>
3. wrapper compiler changes
<br>
&nbsp;&nbsp;&nbsp;a. New &quot;mpifort&quot; wrapper compiler; all Fortran interfaces are available
<br>
&nbsp;&nbsp;&nbsp;b. mpif77 and mpif90 are sym links to mpifort (and may disappear someday)
<br>
<p>All of this work is available in a public bitbucket here:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://bitbucket.org/jsquyres/mpi3-fortran">https://bitbucket.org/jsquyres/mpi3-fortran</a>
<br>
<p>There's a linker error in there at the tip at the moment; Craig is working on fixing it.  When that's done, we'll likely put out a final public test tarball, and assuming that goes well, merge all this stuff into the OMPI SVN trunk.  The SVN merge will likely be a little disruptive because the directory structure of the Fortran bindings changed a bit (e.g., all 5 implementations are now under ompi/mpi/fortran).
<br>
<p>The point is that I plan to bring in all your fixes to this bitbucket branch so that all the new stuff and all your fixes come in to the trunk at the same time.
<br>
<p>1.4 is dead; I doubt we'll be applying your fixes there.
<br>
<p>1.5 has transitioned to 1.6 (yesterday); I can look into making a patch for the v1.6 series.  The tricky part is preserving the mpi module ABI between 1.5.5 and 1.6.  We've done this before, though, so I think it'll be do-able.
<br>
<p><span class="quotelev1">&gt; 1. incorrect parameter types
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Two trivial parameter type mismatches.
</span><br>
<span class="quotelev1">&gt;  Fixed in my mpi-f90-interface.type-mismatch.patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Cart_map periods: integer -&gt; logical
</span><br>
<span class="quotelev1">&gt;  MPI_Reduce_scatter recvcounts: missing &quot;dimension(*)&quot;
</span><br>
<p>Applied, and also made corresponding fixes to my ignore TKR mpi module (the f08 module didn't have these issues).
<br>
<p><span class="quotelev1">&gt; 2. incorrect intent against MPI 2.2 standard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  This is a somewhat complex issue.
</span><br>
<span class="quotelev1">&gt;  First, I'll cite MPI 2.2 standard below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  2.3 in MPI 2.2 standard says:
</span><br>
<span class="quotelev1">&gt;    There is one special case - if an argument is a handle to an opaque
</span><br>
<span class="quotelev1">&gt;    object (these terms are defined in Section 2.5.1), and the object is
</span><br>
<span class="quotelev1">&gt;    updated by the procedure call, then the argument is marked INOUT or OUT.
</span><br>
<span class="quotelev1">&gt;    It is marked this way even though the handle itself is not modified -
</span><br>
<span class="quotelev1">&gt;    we use the INOUT or OUT attribute to denote that what the handle
</span><br>
<span class="quotelev1">&gt;    references is updated. Thus, in C++, IN arguments are usually either
</span><br>
<span class="quotelev1">&gt;    references or pointers to const objects.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  2.3 in MPI 2.2 standard also says:
</span><br>
<span class="quotelev1">&gt;    MPI's use of IN, OUT and INOUT is intended to indicate to the user
</span><br>
<span class="quotelev1">&gt;    how an argument is to be used, but does not provide a rigorous
</span><br>
<span class="quotelev1">&gt;    classification that can be translated directly into all language
</span><br>
<span class="quotelev1">&gt;    bindings (e.g., INTENT in Fortran 90 bindings or const in C bindings).
</span><br>
<span class="quotelev1">&gt;    For instance, the &quot;constant&quot; MPI_BOTTOM can usually be passed to
</span><br>
<span class="quotelev1">&gt;    OUT buffer arguments. Similarly, MPI_STATUS_IGNORE can be passed as
</span><br>
<span class="quotelev1">&gt;    the OUT status argument.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  16.2.4 in MPI 2.2 standard says:
</span><br>
<span class="quotelev1">&gt;    Advice to implementors.
</span><br>
<span class="quotelev1">&gt;    The appropriate INTENT may be different from what is given in the
</span><br>
<span class="quotelev1">&gt;    MPI generic interface. Implementations must choose INTENT so that
</span><br>
<span class="quotelev1">&gt;    the function adheres to the MPI standard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Hmm. intent in mpi-f90-interfaces.h does not necessarily match
</span><br>
<span class="quotelev1">&gt;  IN/OUT/INOUT in MPI 2.2, especially regarding opaque objects.
</span><br>
<span class="quotelev1">&gt;  mpi-f90-interfaces.h seems to have consideration of opaque objects
</span><br>
<span class="quotelev1">&gt;  partially, which is handled in r9922 and r23098.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I compared MPI 2.2 (&quot;standard&quot;) and mpi-f90-interfaces.h (&quot;header&quot;)
</span><br>
<span class="quotelev1">&gt;  and classified problematic parameters into four types.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Type A. Trivial error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  These are fixed in my mpi-f90-interface.intent-error-a.patch to match
</span><br>
<span class="quotelev1">&gt;  the standard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         subroutine            |  parameter  | standard | header
</span><br>
<span class="quotelev1">&gt;  -----------------------------+-------------+----------+--------
</span><br>
<span class="quotelev1">&gt;  MPI_Bcast                    | buffer      | inout    | in
</span><br>
<p>Bcast is a little tricky.  I think the real solution is to remove the intent altogether from the buffer argument.  We talked about this issue a LOT in the MPI-3 Fortran WG.  
<br>
<p>Here's the short version:
<br>
<p>- intent(in): obvious
<br>
- intent(out): the compiler is actually allowed to zero the buffer (!), which we clearly don't want
<br>
- intent(inout): ...there is a reason that this is not desirable, but I don't remember what it is :-(
<br>
- no intent at all: this one is safe
<br>
<p>I honestly don't remember why intent(inout) is not good here, but there is very definitely a reason.  
<br>
<p>*** Craig -- do you remember?
<br>
<p>However, I hadn't back-ported the removal of the intent to the mpi modules because we had intended to leave those alone as much as possible when implementing the mpi_f08 and ignore-TKR-style mpi module.  But since you raise this issue, I think you're right -- the fix should be back-ported.  So I did.
<br>
<p><span class="quotelev1">&gt;  MPI_Pack                     | outsize     | in       | out
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_test_inter          | comm        | in       | inout
</span><br>
<span class="quotelev1">&gt;                               | flag        | out      | in
</span><br>
<span class="quotelev1">&gt;  MPI_Add_error_class          | errorclass  | out      | in
</span><br>
<span class="quotelev1">&gt;  MPI_Win_create               | win         | out      | in
</span><br>
<p>Applied all of these.
<br>
<p><span class="quotelev1">&gt;  MPI_Get                      | origin_addr | out      | in
</span><br>
<p>MPI_Get is actually very much like MPI_Irecv -- it asynchronously fills the buffer (it *may* be filled in when you return, but it may not).  So you could make it intent(out), but intent(out) may also make some fortran compilers zero out the buffer first, which we don't want to do.  So just like we did for MPI_Irecv in mpi_f08, I removed the intent here.
<br>
<p>More specifically, we removed the &quot;intent&quot; clause from all OUT choice buffers, and for all asynchronously-filled choice buffers in the mpi_f08 module.  I'm thinking that we should probably do the same for the OMPI's 2 implementations of the mpi module.
<br>
<p><span class="quotelev1">&gt;  Type B. Not match but not error (opaque object).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Though these parameters in the header don't match the standard,
</span><br>
<span class="quotelev1">&gt;  it's OK because these are opaque object and should not be INOUT
</span><br>
<span class="quotelev1">&gt;  for Fortran. Some of these are fixed in r9922 and r23098.
</span><br>
<span class="quotelev1">&gt;  These should not be changed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         subroutine            |  parameter  | standard | header
</span><br>
<span class="quotelev1">&gt;  -----------------------------+-------------+----------+--------
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_set_attr            | comm        | inout    | in
</span><br>
<span class="quotelev1">&gt;  MPI_Win_set_attr             | win         | inout    | in
</span><br>
<span class="quotelev1">&gt;  MPI_Type_set_attr            | type        | inout    | in
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_set_errhandler      | comm        | inout    | in
</span><br>
<span class="quotelev1">&gt;  MPI_Win_set_errhandler       | win         | inout    | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_set_errhandler      | file        | inout    | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_set_view            | fh          | inout    | in
</span><br>
<span class="quotelev1">&gt;  MPI_Attr_put                 | comm        | inout    | in
</span><br>
<span class="quotelev1">&gt;  MPI_Attr_delete              | comm        | inout    | in
</span><br>
<span class="quotelev1">&gt;  MPI_Errhandler_set           | comm        | inout    | in
</span><br>
<p>I agree: these all look ok to me.  No change necessary.
<br>
<p><span class="quotelev1">&gt;  Type C. Not match and yet error (opaque object).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  This parameter is similar to Type B but it should be IN, not OUT.
</span><br>
<span class="quotelev1">&gt;  This is fixed in my mpi-f90-interface.intent-error-c.patch to match
</span><br>
<span class="quotelev1">&gt;  intent that it should be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         subroutine            |  parameter  | standard | header | should be
</span><br>
<span class="quotelev1">&gt;  -----------------------------+-------------+----------+--------+-----------
</span><br>
<span class="quotelev1">&gt;  MPI_Info_delete              | info        | inout    | out    | in
</span><br>
<p>Applied to both the TKR and ignore TKR mpi modules.
<br>
<p><span class="quotelev1">&gt;  Type D. Match but error (opaque object).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Though these parameters in the header match the standard,
</span><br>
<span class="quotelev1">&gt;  they should be IN for Fortran because these are opaque objects and
</span><br>
<span class="quotelev1">&gt;  their handles themselves are not changed.
</span><br>
<span class="quotelev1">&gt;  These are fixed in my mpi-f90-interface.intent-error-d.patch to match
</span><br>
<span class="quotelev1">&gt;  intent that they should be for Fortran.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         subroutine            |  parameter  | standard | header | should be
</span><br>
<span class="quotelev1">&gt;  -----------------------------+-------------+----------+--------+-----------
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_delete_attr         | comm        | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_Win_delete_attr          | win         | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_Type_delete_attr         | type        | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_set_name            | comm        | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_Type_set_name            | type        | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_Win_set_name             | win         | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_Info_set                 | info        | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_Grequest_complete        | request     | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_set_size            | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_preallocate         | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_set_info            | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_write_at            | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_write_at_all        | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_iwrite_at           | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_read                | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_read_all            | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_write               | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_write_all           | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_iread               | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_iwrite              | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_seek                | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_read_shared         | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_write_shared        | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_iread_shared        | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_iwrite_shared       | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_read_ordered        | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_write_ordered       | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_seek_shared         | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_write_at_all_begin  | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_write_at_all_end    | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_read_all_begin      | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_read_all_end        | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_write_all_begin     | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_write_all_end       | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_read_ordered_begin  | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_read_ordered_end    | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_write_ordered_begin | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_write_ordered_end   | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_set_atomicity       | fh          | inout    | inout  | in
</span><br>
<span class="quotelev1">&gt;  MPI_File_sync                | fh          | inout    | inout  | in
</span><br>
<p>Some of patch d failed to apply; I *think* because those interfaces were already updated (but I didn't check -- I only checked that the end result was correct).  I updated the ignore TKR implementation, too.
<br>
<p>The mpi_f08 implementation didn't have this issue; it had the intents correct already.
<br>
<p><span class="quotelev1">&gt; 3. incorrect intent for MPI_IN_PLACE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  5.2.1 in MPI 2.2 standard says:
</span><br>
<span class="quotelev1">&gt;    Advice to users.
</span><br>
<span class="quotelev1">&gt;    By allowing the &quot;in place&quot; option, the receive buffer in many of the
</span><br>
<span class="quotelev1">&gt;    collective calls becomes a send-and-receive buffer. For this reason,
</span><br>
<span class="quotelev1">&gt;    a Fortran binding that includes INTENT must mark these as INOUT,
</span><br>
<span class="quotelev1">&gt;    not OUT. Note that MPI_IN_PLACE is a special kind of value; it has
</span><br>
<span class="quotelev1">&gt;    the same restrictions on its use that MPI_BOTTOM has.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  My mpi-f90-interfaces.intent-inplace.patch adapt intent parameters
</span><br>
<span class="quotelev1">&gt;  to match intent for Fortran regarding MPI_IN_PLACE.
</span><br>
<span class="quotelev1">&gt;  Note that intent of MPI_Scatter(v) should not be changed because
</span><br>
<span class="quotelev1">&gt;  MPI_IN_PLACE can be specified for recvbuf instead of sendbuf and
</span><br>
<span class="quotelev1">&gt;  no data are modified in sendbuf.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         subroutine            | parameter | standard | header | should be
</span><br>
<span class="quotelev1">&gt;  -----------------------------+-----------+----------+--------+-----------
</span><br>
<span class="quotelev1">&gt;  MPI_Gather(v)                | recvbuf   | out      | out    | inout
</span><br>
<span class="quotelev1">&gt;  MPI_Scatter(v)               | sendbuf   | in       | in     | in
</span><br>
<span class="quotelev1">&gt;  MPI_Allgather(v)             | recvbuf   | out      | out    | inout
</span><br>
<span class="quotelev1">&gt;  MPI_Alltoall(v,w)            | recvbuf   | out      | out    | inout
</span><br>
<span class="quotelev1">&gt;  MPI_Reduce                   | recvbuf   | out      | out    | inout
</span><br>
<span class="quotelev1">&gt;  MPI_Allreduce                | recvbuf   | out      | out    | inout
</span><br>
<span class="quotelev1">&gt;  MPI_Reduce_scatter           | recvbuf   | out      | out    | inout
</span><br>
<span class="quotelev1">&gt;  MPI_Scan                     | recvbuf   | out      | out    | inout
</span><br>
<span class="quotelev1">&gt;  MPI_Exscan                   | recvbuf   | out      | out    | inout
</span><br>
<p>Per the above general rule, we should remove the intent for all OUT parameters.  I *think* that the intent(in) should be ok for Scatter(v).
<br>
<p><span class="quotelev1">&gt;  It seems that MPI_Reduce_scatter_block, which appears in MPI 2.2, is not
</span><br>
<span class="quotelev1">&gt;  implemented in trunk yet. So my patch doesn't include modification for it.
</span><br>
<p>Correct; we haven't implemented yet.  We're waiting for ORNL's new collective improvements (which, as I understand it, includes reduce_scatter_block).
<br>
<p><span class="quotelev1">&gt; 4. mismatched interface and bridge
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I compared ompi/mpi/f90/scripts/mpi-f90-interfaces.h (&quot;interface&quot;) and
</span><br>
<span class="quotelev1">&gt;  ompi/mpi/f90/scripts/mpi_*_f90.f90.sh (&quot;bridge&quot;) and found some mismatches
</span><br>
<span class="quotelev1">&gt;  between them. The interfaces (except MPI_Mrecv) seems to be modifed in
</span><br>
<span class="quotelev1">&gt;  r11057 but (I imagine) the bridges are forgotten to be modified at that
</span><br>
<span class="quotelev1">&gt;  time.
</span><br>
<span class="quotelev1">&gt;  These are fixed in my mpi-f90-interfaces.mismatched-bridge.patch to match
</span><br>
<span class="quotelev1">&gt;  the interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         subroutine            | parameter | interface | bridge
</span><br>
<span class="quotelev1">&gt;  -----------------------------+-----------+-----------+--------
</span><br>
<span class="quotelev1">&gt;  MPI_Recv                     | status    | out       | inout
</span><br>
<span class="quotelev1">&gt;  MPI_Sendrecv                 | status    | out       | inout
</span><br>
<span class="quotelev1">&gt;  MPI_Sendrecv_replace         | status    | out       | inout
</span><br>
<span class="quotelev1">&gt;  MPI_Mrecv                    | status    | out       | inout
</span><br>
<p>Per above, I think the real solution is to remove the intent for the OUT params.
<br>
<p>I've pushed all these changes to my bitbucket -- could you double check what I pushed?  I can make you a tarball if that would be easier than grabbing my mercurial tree.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10823.php">Kawashima: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its	bridge implementation"</a>
<li><strong>Previous message:</strong> <a href="10821.php">Shamis, Pavel: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>In reply to:</strong> <a href="10814.php">Kawashima: "[OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10823.php">Kawashima: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its	bridge implementation"</a>
<li><strong>Reply:</strong> <a href="10823.php">Kawashima: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its	bridge implementation"</a>
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
