<?
$subject_val = "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 22:39:24 2014" -->
<!-- isoreceived="20140507023924" -->
<!-- sent="Tue, 6 May 2014 22:39:22 -0400" -->
<!-- isosent="20140507023922" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk" -->
<!-- id="CAMJJpkVjXvBc6HX=Wq4Z6DGATDDLuBuiLtpm_kb7ZyRtP0GOFw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3601BE3A007_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-06 22:39:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14689.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Previous message:</strong> <a href="14687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem fixed sized type support"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14559.php">Rolf vandeVaart: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL	in trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I went over the provided trace file and I tried to force the BTLs to
<br>
handle extremely weird (and uncomfortable) lengths, on both Mac OS X
<br>
and Linux 64b. Despite all my efforts I was unable to reproduce this
<br>
error. So I'm giving up until more information become available.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, Apr 17, 2014 at 11:28 AM, Rolf vandeVaart
<br>
&lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I sent this information to George off the mailing list since the attachment was somewhat large.
</span><br>
<span class="quotelev1">&gt; Still strange that I guess I am the only one that sees this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George
</span><br>
<span class="quotelev2">&gt;&gt;Bosilca
</span><br>
<span class="quotelev2">&gt;&gt;Sent: Wednesday, April 16, 2014 4:24 PM
</span><br>
<span class="quotelev2">&gt;&gt;To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt;Subject: Re: [OMPI devel] Possible bug with derived datatypes and openib
</span><br>
<span class="quotelev2">&gt;&gt;BTL in trunk
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Rolf,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I didn't see these on my check run. Can you run the MPI_Isend_ator test with
</span><br>
<span class="quotelev2">&gt;&gt;mpi_ddt_pack_debug and mpi_ddt_unpack_debug set to 1. I would be
</span><br>
<span class="quotelev2">&gt;&gt;interested in the output you get on your machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Apr 16, 2014, at 14:34 , Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have seen errors when running the intel test suite using the openib BTL
</span><br>
<span class="quotelev2">&gt;&gt;when transferring derived datatypes.  I do not see the error with sm or tcp
</span><br>
<span class="quotelev2">&gt;&gt;BTLs.  The errors begin after this checkin.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/31370">https://svn.open-mpi.org/trac/ompi/changeset/31370</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Timestamp: 04/11/14 16:06:56 (5 days ago)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: Reshape all the packing/unpacking functions to use the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; skeleton. Rewrite the generic_unpacking to take advantage of the same
</span><br>
<span class="quotelev2">&gt;&gt;capabilitites.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone else see errors?  Here is an example running with r31370:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rvandevaart_at_drossetti-ivy1 src]$ mpirun --mca btl self,openib -np 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -host drossetti-ivy0,drossetti-ivy1 --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_warn_default_gid_prefix 0 MPI_Isend_ator_c MPITEST error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1): libmpitest.c:1608 i=117, int32_t value=-1, expected 117 MPITEST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error (1): libmpitest.c:1578 i=195, char value=-1, expected -61
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST error (1): 2 errors in buffer (17,0,12) len 273 commsize 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commtype -10 data_type 13 root 1 MPITEST error (1): libmpitest.c:1608
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i=117, int32_t value=-1, expected 117 MPITEST error (1):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpitest.c:1578 i=195, char value=-1, expected -61 MPITEST error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1): 2 errors in buffer (17,2,12) len 273 commsize 2 commtype -16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data_type 13 root 1 MPITEST info  (0): Starting MPI_Isend_ator: All
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Isend TO Root test MPITEST info  (0): Node spec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST_comm_sizes[6]=2 too large, using 1 MPITEST info  (0): Node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spec MPITEST_comm_sizes[22]=2 too large, using 1 MPITEST info  (0):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node spec MPITEST_comm_sizes[32]=2 too large, using 1 MPITEST error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0): libmpitest.c:1608 i=117, int32_t value=-1, expected 118 MPITEST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error (0): libmpitest.c:1578 i=195, char value=-1, expected -60
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST error (0): 2 errors in buffer (17,0,12) len 273 commsize 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commtype -10 data_type 13 root 0 MPITEST error (0): libmpitest.c:1608
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i=117, int32_t value=-1, expected 118 MPITEST error (0):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpitest.c:1578 i=195, char value=-1, expected -60 MPITEST error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0): 2 errors in buffer (17,2,12) len 273 commsize 2 commtype -16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data_type 13 root 0 MPITEST error (1): libmpitest.c:1608 i=117,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int32_t value=-1, expected 117 MPITEST error (1): libmpitest.c:1578
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i=195, char value=-1, expected -61 MPITEST error (1): 2 errors in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffer (17,4,12) len 273 commsize 2 commtype -13 data_type 13 root 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST error (0): libmpitest.c:1608 i=117, int32_t value=-1, expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 118 MPITEST error (0): libmpitest.c:1578 i=195, char value=-1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected -60 MPITEST error (0): 2 errors in buffer (17,4,12) len 273
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commsize 2 commtype -13 data_type 13 root 0 MPITEST error (1):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpitest.c:1608 i=117, int32_t value=-1, expected 117 MPITEST error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1): libmpitest.c:1578 i=195, char value=-1, expected -61 MPITEST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error (1): 2 errors in buffer (17,6,12) len 273 commsize 2 commtype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -15 data_type 13 root 0 MPITEST error (0): libmpitest.c:1608 i=117,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int32_t value=-1, expected 117 MPITEST error (0): libmpitest.c:1578
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i=195, char value=-1, expected -61 MPITEST error (0): 2 errors in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffer (17,6,12) len 273 commsize 2 commtype -15 data_type 13 root 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST_results: MPI_Isend_ator: All Isend TO Root 8 tests FAILED (of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3744)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Primary job  terminated normally, but 1 process returned a non-zero
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---- mpirun detected that one or more processes exited with non-zero
</span><br>
<span class="quotelev3">&gt;&gt;&gt; status, thus causing the job to be terminated. The first process to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Process name: [[12363,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Exit code:    4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rvandevaart_at_drossetti-ivy1 src]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is an error with the trunk which is slightly different.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rvandevaart_at_drossetti-ivy1 src]$ mpirun --mca btl self,openib -np 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -host drossetti-ivy0,drossetti-ivy1 --mca
</span><br>
<span class="quotelev2">&gt;&gt;btl_openib_warn_default_gid_prefix 0 MPI_Isend_ator_c [drossetti-
</span><br>
<span class="quotelev2">&gt;&gt;ivy1.nvidia.com:22875] ../../../opal/datatype/opal_datatype_position.c:72
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Pointer 0x1ad414c size 4 is outside [0x1ac1d20,0x1ad1d08] for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      base ptr 0x1ac1d20 count 273 and data
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [drossetti-ivy1.nvidia.com:22875] Datatype 0x1ac0220[] size 104 align
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16 id 0 length 22 used 21 true_lb 0 true_ub 232 (true_extent 232) lb 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ub 240 (extent 240) nbElems 21 loops 0 flags 1C4 (commited )-c--lu-GD--[---
</span><br>
<span class="quotelev2">&gt;&gt;][---]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   contain lb ub OPAL_LB OPAL_UB OPAL_INT1 OPAL_INT2 OPAL_INT4
</span><br>
<span class="quotelev2">&gt;&gt;OPAL_INT8 OPAL_UINT1 OPAL_UINT2 OPAL_UINT4 OPAL_UINT8
</span><br>
<span class="quotelev2">&gt;&gt;OPAL_FLOAT4 OPAL_FLOAT8 OPAL_FLOAT16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]      OPAL_INT4 count 1 disp 0x0 (0) extent 4 (size 4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]      OPAL_INT2 count 1 disp 0x8 (8) extent 2 (size 2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]      OPAL_INT8 count 1 disp 0x10 (16) extent 8 (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]     OPAL_UINT2 count 1 disp 0x20 (32) extent 2 (size 2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]     OPAL_UINT4 count 1 disp 0x24 (36) extent 4 (size 4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]     OPAL_UINT8 count 1 disp 0x30 (48) extent 8 (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]    OPAL_FLOAT4 count 1 disp 0x40 (64) extent 4 (size 4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]      OPAL_INT1 count 1 disp 0x48 (72) extent 1 (size 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]    OPAL_FLOAT8 count 1 disp 0x50 (80) extent 8 (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]     OPAL_UINT1 count 1 disp 0x60 (96) extent 1 (size 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]   OPAL_FLOAT16 count 1 disp 0x70 (112) extent 16 (size
</span><br>
<span class="quotelev2">&gt;&gt;16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]      OPAL_INT1 count 1 disp 0x90 (144) extent 1 (size 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]     OPAL_UINT1 count 1 disp 0x92 (146) extent 1 (size 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]      OPAL_INT2 count 1 disp 0x94 (148) extent 2 (size 2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]     OPAL_UINT2 count 1 disp 0x98 (152) extent 2 (size 2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]      OPAL_INT4 count 1 disp 0x9c (156) extent 4 (size 4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]     OPAL_UINT4 count 1 disp 0xa4 (164) extent 4 (size 4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]      OPAL_INT8 count 1 disp 0xb0 (176) extent 8 (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]     OPAL_UINT8 count 1 disp 0xc0 (192) extent 8 (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]      OPAL_INT8 count 1 disp 0xd0 (208) extent 8 (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]     OPAL_UINT8 count 1 disp 0xe0 (224) extent 8 (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------G---[---][---]  OPAL_END_LOOP prev 21 elements first elem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; displacement 0 size of data 104 Optimized description
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT4 count 1 disp 0x0 (0) extent 4 (size 4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT2 count 1 disp 0x8 (8) extent 2 (size 2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT8 count 1 disp 0x10 (16) extent 8 (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT2 count 1 disp 0x20 (32) extent 2 (size 2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT4 count 1 disp 0x24 (36) extent 4 (size 4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT8 count 1 disp 0x30 (48) extent 8 (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]    OPAL_FLOAT4 count 1 disp 0x40 (64) extent 4 (size 4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT1 count 1 disp 0x48 (72) extent 1 (size 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]    OPAL_FLOAT8 count 1 disp 0x50 (80) extent 8 (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 1 disp 0x60 (96) extent 1 (size 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]   OPAL_FLOAT16 count 1 disp 0x70 (112) extent 16 (size
</span><br>
<span class="quotelev2">&gt;&gt;16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT1 count 1 disp 0x90 (144) extent 1 (size 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 1 disp 0x92 (146) extent 1 (size 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT2 count 1 disp 0x94 (148) extent 2 (size 2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT2 count 1 disp 0x98 (152) extent 2 (size 2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT4 count 1 disp 0x9c (156) extent 4 (size 4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT4 count 1 disp 0xa4 (164) extent 4 (size 4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT8 count 1 disp 0xb0 (176) extent 8 (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT8 count 1 disp 0xc0 (192) extent 8 (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT8 count 1 disp 0xd0 (208) extent 8 (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT8 count 1 disp 0xe0 (224) extent 8 (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------G---[---][---]  OPAL_END_LOOP prev 21 elements first elem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; displacement 0 size of data 104
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST error (1): libmpitest.c:1578 i=0, char value=-61, expected 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST error (1): libmpitest.c:1608 i=0, int32_t value=117, expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 MPITEST error (1): libmpitest.c:1608 i=117, int32_t value=-1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected 117 MPITEST error (1): libmpitest.c:1578 i=195, char
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value=-1, expected -61 MPITEST error (1): 4 errors in buffer (17,0,12)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; len 273 commsize 2 commtype -10 data_type 13 root 1 MPITEST info  (0):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Starting MPI_Isend_ator: All Isend TO Root test MPITEST info  (0):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node spec MPITEST_comm_sizes[6]=2 too large, using 1 MPITEST info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0): Node spec MPITEST_comm_sizes[22]=2 too large, using 1 MPITEST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; info  (0): Node spec MPITEST_comm_sizes[32]=2 too large, using 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPITEST_results: MPI_Isend_ator: All Isend TO Root 1 tests FAILED (of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3744)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Primary job  terminated normally, but 1 process returned a non-zero
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---- mpirun detected that one or more processes exited with non-zero
</span><br>
<span class="quotelev3">&gt;&gt;&gt; status, thus causing the job to be terminated. The first process to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Process name: [[12296,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Exit code:    1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rvandevaart_at_drossetti-ivy1 src]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------- This email message is for the sole use of the intended
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unauthorized review, use, disclosure or distribution is prohibited.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------- _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14553.php">http://www.open-mpi.org/community/lists/devel/2014/04/14553.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt;mpi.org/community/lists/devel/2014/04/14554.php
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14559.php">http://www.open-mpi.org/community/lists/devel/2014/04/14559.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14689.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Previous message:</strong> <a href="14687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem fixed sized type support"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14559.php">Rolf vandeVaart: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL	in trunk"</a>
<!-- nextthread="start" -->
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
