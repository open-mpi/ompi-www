<?
$subject_val = "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  6 07:10:04 2012" -->
<!-- isoreceived="20120406111004" -->
<!-- sent="Fri, 06 Apr 2012 20:09:56 +0900" -->
<!-- isosent="20120406110956" -->
<!-- name="Kawashima" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation" -->
<!-- id="87vcldyv3v.wl%t-kawashima_at_jp.fujitsu.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87ehs3nfzv.wl%t-kawashima_at_jp.fujitsu.com" -->
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
<strong>From:</strong> Kawashima (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-06 07:09:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10839.php">Jeffrey Squyres: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<li><strong>Previous message:</strong> <a href="10837.php">TERRY DONTJE: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>In reply to:</strong> <a href="10823.php">Kawashima: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its	bridge implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10839.php">Jeffrey Squyres: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<li><strong>Reply:</strong> <a href="10839.php">Jeffrey Squyres: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I've checked your code in bitbucket. Two types of error are found.
<br>
I've attached the patch.
<br>
<p>First one (ignore-tkr) seems to be an error by manual patching.
<br>
Second one (tkr) seems that patch command could not apply my fixes
<br>
because neighboring lines were modified in your code.
<br>
<p>Regards,
<br>
<p>Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><span class="quotelev1">&gt; Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 3, 2012, at 10:56 PM, Kawashima wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I and my coworkers checked mpi-f90-interfaces.h against MPI 2.2 standard
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and found many bugs in it. Attached patches fix them for trunk.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Though some of them are trivial, others are not so trivial.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So I'll explain them below.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Excellent -- many thanks for these!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have some notes on the specific patches, below, but first note the following: Craig Rasmussen and I have been working on revamping the Open MPI Fortran bindings for quite a while.  Here's a quick summary of the changes:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1. two prototypes of the new MPI-3 mpi_f08 module
</span><br>
<span class="quotelev2">&gt; &gt;    a. Full implementation of all functions, not using F08 descriptors
</span><br>
<span class="quotelev2">&gt; &gt;    b. 6-function MPI using F08 descriptors (showing that it can be done) for ifort
</span><br>
<span class="quotelev2">&gt; &gt; 2. for the existing mpi module:
</span><br>
<span class="quotelev2">&gt; &gt;    a. New implementation using &quot;ignore TKR&quot; directives
</span><br>
<span class="quotelev2">&gt; &gt;    b. If your fortran compiler doesn't support &quot;ignore TKR&quot; directives (e.g., gfortran), fall back and use the old mpi module implementation
</span><br>
<span class="quotelev2">&gt; &gt; 3. wrapper compiler changes
</span><br>
<span class="quotelev2">&gt; &gt;    a. New &quot;mpifort&quot; wrapper compiler; all Fortran interfaces are available
</span><br>
<span class="quotelev2">&gt; &gt;    b. mpif77 and mpif90 are sym links to mpifort (and may disappear someday)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; All of this work is available in a public bitbucket here:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="https://bitbucket.org/jsquyres/mpi3-fortran">https://bitbucket.org/jsquyres/mpi3-fortran</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Great. I'll see it later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; There's a linker error in there at the tip at the moment; Craig is working on fixing it.  When that's done, we'll likely put out a final public test tarball, and assuming that goes well, merge all this stuff into the OMPI SVN trunk.  The SVN merge will likely be a little disruptive because the directory structure of the Fortran bindings changed a bit (e.g., all 5 implementations are now under ompi/mpi/fortran).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The point is that I plan to bring in all your fixes to this bitbucket branch so that all the new stuff and all your fixes come in to the trunk at the same time.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1.4 is dead; I doubt we'll be applying your fixes there.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1.5 has transitioned to 1.6 (yesterday); I can look into making a patch for the v1.6 series.  The tricky part is preserving the mpi module ABI between 1.5.5 and 1.6.  We've done this before, though, so I think it'll be do-able.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your explanation.
</span><br>
<span class="quotelev1">&gt; I know we are preparing v1.6 and v1.4 is not active.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1. incorrect parameter types
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Two trivial parameter type mismatches.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Fixed in my mpi-f90-interface.type-mismatch.patch.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Cart_map periods: integer -&gt; logical
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Reduce_scatter recvcounts: missing &quot;dimension(*)&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Applied, and also made corresponding fixes to my ignore TKR mpi module (the f08 module didn't have these issues).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2. incorrect intent against MPI 2.2 standard
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  This is a somewhat complex issue.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  First, I'll cite MPI 2.2 standard below.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  2.3 in MPI 2.2 standard says:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    There is one special case - if an argument is a handle to an opaque
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    object (these terms are defined in Section 2.5.1), and the object is
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    updated by the procedure call, then the argument is marked INOUT or OUT.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    It is marked this way even though the handle itself is not modified -
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    we use the INOUT or OUT attribute to denote that what the handle
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    references is updated. Thus, in C++, IN arguments are usually either
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    references or pointers to const objects.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  2.3 in MPI 2.2 standard also says:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    MPI's use of IN, OUT and INOUT is intended to indicate to the user
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    how an argument is to be used, but does not provide a rigorous
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    classification that can be translated directly into all language
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    bindings (e.g., INTENT in Fortran 90 bindings or const in C bindings).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    For instance, the &quot;constant&quot; MPI_BOTTOM can usually be passed to
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    OUT buffer arguments. Similarly, MPI_STATUS_IGNORE can be passed as
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    the OUT status argument.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  16.2.4 in MPI 2.2 standard says:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Advice to implementors.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    The appropriate INTENT may be different from what is given in the
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    MPI generic interface. Implementations must choose INTENT so that
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    the function adheres to the MPI standard.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Hmm. intent in mpi-f90-interfaces.h does not necessarily match
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  IN/OUT/INOUT in MPI 2.2, especially regarding opaque objects.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  mpi-f90-interfaces.h seems to have consideration of opaque objects
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  partially, which is handled in r9922 and r23098.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  I compared MPI 2.2 (&quot;standard&quot;) and mpi-f90-interfaces.h (&quot;header&quot;)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  and classified problematic parameters into four types.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Type A. Trivial error.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  These are fixed in my mpi-f90-interface.intent-error-a.patch to match
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  the standard.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         subroutine            |  parameter  | standard | header
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  -----------------------------+-------------+----------+--------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Bcast                    | buffer      | inout    | in
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Bcast is a little tricky.  I think the real solution is to remove the intent altogether from the buffer argument.  We talked about this issue a LOT in the MPI-3 Fortran WG.  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here's the short version:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - intent(in): obvious
</span><br>
<span class="quotelev2">&gt; &gt; - intent(out): the compiler is actually allowed to zero the buffer (!), which we clearly don't want
</span><br>
<span class="quotelev2">&gt; &gt; - intent(inout): ...there is a reason that this is not desirable, but I don't remember what it is :-(
</span><br>
<span class="quotelev2">&gt; &gt; - no intent at all: this one is safe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh, I didn't know intent(out) is so dangerous.
</span><br>
<span class="quotelev1">&gt; Thanks for your explanation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I honestly don't remember why intent(inout) is not good here, but there is very definitely a reason.  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; *** Craig -- do you remember?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; However, I hadn't back-ported the removal of the intent to the mpi modules because we had intended to leave those alone as much as possible when implementing the mpi_f08 and ignore-TKR-style mpi module.  But since you raise this issue, I think you're right -- the fix should be back-ported.  So I did.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Pack                     | outsize     | in       | out
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Comm_test_inter          | comm        | in       | inout
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                               | flag        | out      | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Add_error_class          | errorclass  | out      | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Win_create               | win         | out      | in
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Applied all of these.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Get                      | origin_addr | out      | in
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Get is actually very much like MPI_Irecv -- it asynchronously fills the buffer (it *may* be filled in when you return, but it may not).  So you could make it intent(out), but intent(out) may also make some fortran compilers zero out the buffer first, which we don't want to do.  So just like we did for MPI_Irecv in mpi_f08, I removed the intent here.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; More specifically, we removed the &quot;intent&quot; clause from all OUT choice buffers, and for all asynchronously-filled choice buffers in the mpi_f08 module.  I'm thinking that we should probably do the same for the OMPI's 2 implementations of the mpi module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree. Removing intent seems best for us.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Type B. Not match but not error (opaque object).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Though these parameters in the header don't match the standard,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  it's OK because these are opaque object and should not be INOUT
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  for Fortran. Some of these are fixed in r9922 and r23098.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  These should not be changed.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         subroutine            |  parameter  | standard | header
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  -----------------------------+-------------+----------+--------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Comm_set_attr            | comm        | inout    | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Win_set_attr             | win         | inout    | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Type_set_attr            | type        | inout    | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Comm_set_errhandler      | comm        | inout    | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Win_set_errhandler       | win         | inout    | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_set_errhandler      | file        | inout    | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_set_view            | fh          | inout    | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Attr_put                 | comm        | inout    | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Attr_delete              | comm        | inout    | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Errhandler_set           | comm        | inout    | in
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I agree: these all look ok to me.  No change necessary.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Type C. Not match and yet error (opaque object).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  This parameter is similar to Type B but it should be IN, not OUT.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  This is fixed in my mpi-f90-interface.intent-error-c.patch to match
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  intent that it should be.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         subroutine            |  parameter  | standard | header | should be
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  -----------------------------+-------------+----------+--------+-----------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Info_delete              | info        | inout    | out    | in
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Applied to both the TKR and ignore TKR mpi modules.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Type D. Match but error (opaque object).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Though these parameters in the header match the standard,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  they should be IN for Fortran because these are opaque objects and
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  their handles themselves are not changed.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  These are fixed in my mpi-f90-interface.intent-error-d.patch to match
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  intent that they should be for Fortran.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         subroutine            |  parameter  | standard | header | should be
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  -----------------------------+-------------+----------+--------+-----------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Comm_delete_attr         | comm        | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Win_delete_attr          | win         | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Type_delete_attr         | type        | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Comm_set_name            | comm        | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Type_set_name            | type        | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Win_set_name             | win         | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Info_set                 | info        | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Grequest_complete        | request     | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_set_size            | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_preallocate         | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_set_info            | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_write_at            | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_write_at_all        | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_iwrite_at           | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_read                | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_read_all            | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_write               | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_write_all           | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_iread               | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_iwrite              | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_seek                | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_read_shared         | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_write_shared        | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_iread_shared        | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_iwrite_shared       | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_read_ordered        | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_write_ordered       | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_seek_shared         | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_write_at_all_begin  | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_write_at_all_end    | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_read_all_begin      | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_read_all_end        | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_write_all_begin     | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_write_all_end       | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_read_ordered_begin  | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_read_ordered_end    | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_write_ordered_begin | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_write_ordered_end   | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_set_atomicity       | fh          | inout    | inout  | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_File_sync                | fh          | inout    | inout  | in
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Some of patch d failed to apply; I *think* because those interfaces were already updated (but I didn't check -- I only checked that the end result was correct).  I updated the ignore TKR implementation, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll check it in bitbucket.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The mpi_f08 implementation didn't have this issue; it had the intents correct already.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3. incorrect intent for MPI_IN_PLACE
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  5.2.1 in MPI 2.2 standard says:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Advice to users.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    By allowing the &quot;in place&quot; option, the receive buffer in many of the
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    collective calls becomes a send-and-receive buffer. For this reason,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    a Fortran binding that includes INTENT must mark these as INOUT,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    not OUT. Note that MPI_IN_PLACE is a special kind of value; it has
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    the same restrictions on its use that MPI_BOTTOM has.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  My mpi-f90-interfaces.intent-inplace.patch adapt intent parameters
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  to match intent for Fortran regarding MPI_IN_PLACE.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Note that intent of MPI_Scatter(v) should not be changed because
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_IN_PLACE can be specified for recvbuf instead of sendbuf and
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  no data are modified in sendbuf.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         subroutine            | parameter | standard | header | should be
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  -----------------------------+-----------+----------+--------+-----------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Gather(v)                | recvbuf   | out      | out    | inout
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Scatter(v)               | sendbuf   | in       | in     | in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Allgather(v)             | recvbuf   | out      | out    | inout
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Alltoall(v,w)            | recvbuf   | out      | out    | inout
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Reduce                   | recvbuf   | out      | out    | inout
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Allreduce                | recvbuf   | out      | out    | inout
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Reduce_scatter           | recvbuf   | out      | out    | inout
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Scan                     | recvbuf   | out      | out    | inout
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Exscan                   | recvbuf   | out      | out    | inout
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Per the above general rule, we should remove the intent for all OUT parameters.  I *think* that the intent(in) should be ok for Scatter(v).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  It seems that MPI_Reduce_scatter_block, which appears in MPI 2.2, is not
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  implemented in trunk yet. So my patch doesn't include modification for it.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Correct; we haven't implemented yet.  We're waiting for ORNL's new collective improvements (which, as I understand it, includes reduce_scatter_block).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 4. mismatched interface and bridge
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  I compared ompi/mpi/f90/scripts/mpi-f90-interfaces.h (&quot;interface&quot;) and
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ompi/mpi/f90/scripts/mpi_*_f90.f90.sh (&quot;bridge&quot;) and found some mismatches
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  between them. The interfaces (except MPI_Mrecv) seems to be modifed in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  r11057 but (I imagine) the bridges are forgotten to be modified at that
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  time.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  These are fixed in my mpi-f90-interfaces.mismatched-bridge.patch to match
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  the interface.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         subroutine            | parameter | interface | bridge
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  -----------------------------+-----------+-----------+--------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Recv                     | status    | out       | inout
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Sendrecv                 | status    | out       | inout
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Sendrecv_replace         | status    | out       | inout
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Mrecv                    | status    | out       | inout
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Per above, I think the real solution is to remove the intent for the OUT params.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've pushed all these changes to my bitbucket -- could you double check what I pushed?  I can make you a tarball if that would be easier than grabbing my mercurial tree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, no tarball needed. I'll check them in bitbucket in a few days.
</span><br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10838/mpi3-fortran-interfaces.patch">mpi3-fortran-interfaces.patch</a>
</ul>
<!-- attachment="mpi3-fortran-interfaces.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10839.php">Jeffrey Squyres: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<li><strong>Previous message:</strong> <a href="10837.php">TERRY DONTJE: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>In reply to:</strong> <a href="10823.php">Kawashima: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its	bridge implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10839.php">Jeffrey Squyres: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<li><strong>Reply:</strong> <a href="10839.php">Jeffrey Squyres: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
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
