<?
$subject_val = "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL	in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 11:28:23 2014" -->
<!-- isoreceived="20140417152823" -->
<!-- sent="Thu, 17 Apr 2014 08:28:21 -0700" -->
<!-- isosent="20140417152821" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible bug with derived datatypes and openib BTL	in trunk" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3601BE3A007_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9B48612A-6C48-4BCD-8718-5B246EFC1D32_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Possible bug with derived datatypes and openib BTL	in trunk<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-17 11:28:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14560.php">Ralph Castain: "[OMPI devel] v1.8.1 release"</a>
<li><strong>Previous message:</strong> <a href="14558.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT has migrated to git"</a>
<li><strong>In reply to:</strong> <a href="14554.php">George Bosilca: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14688.php">George Bosilca: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14688.php">George Bosilca: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I sent this information to George off the mailing list since the attachment was somewhat large.
<br>
Still strange that I guess I am the only one that sees this.
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George
</span><br>
<span class="quotelev1">&gt;Bosilca
</span><br>
<span class="quotelev1">&gt;Sent: Wednesday, April 16, 2014 4:24 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] Possible bug with derived datatypes and openib
</span><br>
<span class="quotelev1">&gt;BTL in trunk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Rolf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I didn't see these on my check run. Can you run the MPI_Isend_ator test with
</span><br>
<span class="quotelev1">&gt;mpi_ddt_pack_debug and mpi_ddt_unpack_debug set to 1. I would be
</span><br>
<span class="quotelev1">&gt;interested in the output you get on your machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Apr 16, 2014, at 14:34 , Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have seen errors when running the intel test suite using the openib BTL
</span><br>
<span class="quotelev1">&gt;when transferring derived datatypes.  I do not see the error with sm or tcp
</span><br>
<span class="quotelev1">&gt;BTLs.  The errors begin after this checkin.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/31370">https://svn.open-mpi.org/trac/ompi/changeset/31370</a>
</span><br>
<span class="quotelev2">&gt;&gt; Timestamp: 04/11/14 16:06:56 (5 days ago)
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Message: Reshape all the packing/unpacking functions to use the same
</span><br>
<span class="quotelev2">&gt;&gt; skeleton. Rewrite the generic_unpacking to take advantage of the same
</span><br>
<span class="quotelev1">&gt;capabilitites.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone else see errors?  Here is an example running with r31370:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [rvandevaart_at_drossetti-ivy1 src]$ mpirun --mca btl self,openib -np 2
</span><br>
<span class="quotelev2">&gt;&gt; -host drossetti-ivy0,drossetti-ivy1 --mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_warn_default_gid_prefix 0 MPI_Isend_ator_c MPITEST error
</span><br>
<span class="quotelev2">&gt;&gt; (1): libmpitest.c:1608 i=117, int32_t value=-1, expected 117 MPITEST
</span><br>
<span class="quotelev2">&gt;&gt; error (1): libmpitest.c:1578 i=195, char value=-1, expected -61
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST error (1): 2 errors in buffer (17,0,12) len 273 commsize 2
</span><br>
<span class="quotelev2">&gt;&gt; commtype -10 data_type 13 root 1 MPITEST error (1): libmpitest.c:1608
</span><br>
<span class="quotelev2">&gt;&gt; i=117, int32_t value=-1, expected 117 MPITEST error (1):
</span><br>
<span class="quotelev2">&gt;&gt; libmpitest.c:1578 i=195, char value=-1, expected -61 MPITEST error
</span><br>
<span class="quotelev2">&gt;&gt; (1): 2 errors in buffer (17,2,12) len 273 commsize 2 commtype -16
</span><br>
<span class="quotelev2">&gt;&gt; data_type 13 root 1 MPITEST info  (0): Starting MPI_Isend_ator: All
</span><br>
<span class="quotelev2">&gt;&gt; Isend TO Root test MPITEST info  (0): Node spec
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST_comm_sizes[6]=2 too large, using 1 MPITEST info  (0): Node
</span><br>
<span class="quotelev2">&gt;&gt; spec MPITEST_comm_sizes[22]=2 too large, using 1 MPITEST info  (0):
</span><br>
<span class="quotelev2">&gt;&gt; Node spec MPITEST_comm_sizes[32]=2 too large, using 1 MPITEST error
</span><br>
<span class="quotelev2">&gt;&gt; (0): libmpitest.c:1608 i=117, int32_t value=-1, expected 118 MPITEST
</span><br>
<span class="quotelev2">&gt;&gt; error (0): libmpitest.c:1578 i=195, char value=-1, expected -60
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST error (0): 2 errors in buffer (17,0,12) len 273 commsize 2
</span><br>
<span class="quotelev2">&gt;&gt; commtype -10 data_type 13 root 0 MPITEST error (0): libmpitest.c:1608
</span><br>
<span class="quotelev2">&gt;&gt; i=117, int32_t value=-1, expected 118 MPITEST error (0):
</span><br>
<span class="quotelev2">&gt;&gt; libmpitest.c:1578 i=195, char value=-1, expected -60 MPITEST error
</span><br>
<span class="quotelev2">&gt;&gt; (0): 2 errors in buffer (17,2,12) len 273 commsize 2 commtype -16
</span><br>
<span class="quotelev2">&gt;&gt; data_type 13 root 0 MPITEST error (1): libmpitest.c:1608 i=117,
</span><br>
<span class="quotelev2">&gt;&gt; int32_t value=-1, expected 117 MPITEST error (1): libmpitest.c:1578
</span><br>
<span class="quotelev2">&gt;&gt; i=195, char value=-1, expected -61 MPITEST error (1): 2 errors in
</span><br>
<span class="quotelev2">&gt;&gt; buffer (17,4,12) len 273 commsize 2 commtype -13 data_type 13 root 1
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST error (0): libmpitest.c:1608 i=117, int32_t value=-1, expected
</span><br>
<span class="quotelev2">&gt;&gt; 118 MPITEST error (0): libmpitest.c:1578 i=195, char value=-1,
</span><br>
<span class="quotelev2">&gt;&gt; expected -60 MPITEST error (0): 2 errors in buffer (17,4,12) len 273
</span><br>
<span class="quotelev2">&gt;&gt; commsize 2 commtype -13 data_type 13 root 0 MPITEST error (1):
</span><br>
<span class="quotelev2">&gt;&gt; libmpitest.c:1608 i=117, int32_t value=-1, expected 117 MPITEST error
</span><br>
<span class="quotelev2">&gt;&gt; (1): libmpitest.c:1578 i=195, char value=-1, expected -61 MPITEST
</span><br>
<span class="quotelev2">&gt;&gt; error (1): 2 errors in buffer (17,6,12) len 273 commsize 2 commtype
</span><br>
<span class="quotelev2">&gt;&gt; -15 data_type 13 root 0 MPITEST error (0): libmpitest.c:1608 i=117,
</span><br>
<span class="quotelev2">&gt;&gt; int32_t value=-1, expected 117 MPITEST error (0): libmpitest.c:1578
</span><br>
<span class="quotelev2">&gt;&gt; i=195, char value=-1, expected -61 MPITEST error (0): 2 errors in
</span><br>
<span class="quotelev2">&gt;&gt; buffer (17,6,12) len 273 commsize 2 commtype -15 data_type 13 root 0
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST_results: MPI_Isend_ator: All Isend TO Root 8 tests FAILED (of
</span><br>
<span class="quotelev2">&gt;&gt; 3744)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned a non-zero
</span><br>
<span class="quotelev2">&gt;&gt; exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ---- mpirun detected that one or more processes exited with non-zero
</span><br>
<span class="quotelev2">&gt;&gt; status, thus causing the job to be terminated. The first process to do
</span><br>
<span class="quotelev2">&gt;&gt; so was:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Process name: [[12363,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;  Exit code:    4
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; [rvandevaart_at_drossetti-ivy1 src]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is an error with the trunk which is slightly different.
</span><br>
<span class="quotelev2">&gt;&gt; [rvandevaart_at_drossetti-ivy1 src]$ mpirun --mca btl self,openib -np 2
</span><br>
<span class="quotelev2">&gt;&gt; -host drossetti-ivy0,drossetti-ivy1 --mca
</span><br>
<span class="quotelev1">&gt;btl_openib_warn_default_gid_prefix 0 MPI_Isend_ator_c [drossetti-
</span><br>
<span class="quotelev1">&gt;ivy1.nvidia.com:22875] ../../../opal/datatype/opal_datatype_position.c:72
</span><br>
<span class="quotelev2">&gt;&gt; 	Pointer 0x1ad414c size 4 is outside [0x1ac1d20,0x1ad1d08] for
</span><br>
<span class="quotelev2">&gt;&gt; 	base ptr 0x1ac1d20 count 273 and data
</span><br>
<span class="quotelev2">&gt;&gt; [drossetti-ivy1.nvidia.com:22875] Datatype 0x1ac0220[] size 104 align
</span><br>
<span class="quotelev2">&gt;&gt; 16 id 0 length 22 used 21 true_lb 0 true_ub 232 (true_extent 232) lb 0
</span><br>
<span class="quotelev2">&gt;&gt; ub 240 (extent 240) nbElems 21 loops 0 flags 1C4 (commited )-c--lu-GD--[---
</span><br>
<span class="quotelev1">&gt;][---]
</span><br>
<span class="quotelev2">&gt;&gt;   contain lb ub OPAL_LB OPAL_UB OPAL_INT1 OPAL_INT2 OPAL_INT4
</span><br>
<span class="quotelev1">&gt;OPAL_INT8 OPAL_UINT1 OPAL_UINT2 OPAL_UINT4 OPAL_UINT8
</span><br>
<span class="quotelev1">&gt;OPAL_FLOAT4 OPAL_FLOAT8 OPAL_FLOAT16
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]      OPAL_INT4 count 1 disp 0x0 (0) extent 4 (size 4)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]      OPAL_INT2 count 1 disp 0x8 (8) extent 2 (size 2)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]      OPAL_INT8 count 1 disp 0x10 (16) extent 8 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]     OPAL_UINT2 count 1 disp 0x20 (32) extent 2 (size 2)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]     OPAL_UINT4 count 1 disp 0x24 (36) extent 4 (size 4)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]     OPAL_UINT8 count 1 disp 0x30 (48) extent 8 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]    OPAL_FLOAT4 count 1 disp 0x40 (64) extent 4 (size 4)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]      OPAL_INT1 count 1 disp 0x48 (72) extent 1 (size 1)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]    OPAL_FLOAT8 count 1 disp 0x50 (80) extent 8 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]     OPAL_UINT1 count 1 disp 0x60 (96) extent 1 (size 1)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]   OPAL_FLOAT16 count 1 disp 0x70 (112) extent 16 (size
</span><br>
<span class="quotelev1">&gt;16)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]      OPAL_INT1 count 1 disp 0x90 (144) extent 1 (size 1)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]     OPAL_UINT1 count 1 disp 0x92 (146) extent 1 (size 1)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]      OPAL_INT2 count 1 disp 0x94 (148) extent 2 (size 2)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]     OPAL_UINT2 count 1 disp 0x98 (152) extent 2 (size 2)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]      OPAL_INT4 count 1 disp 0x9c (156) extent 4 (size 4)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]     OPAL_UINT4 count 1 disp 0xa4 (164) extent 4 (size 4)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]      OPAL_INT8 count 1 disp 0xb0 (176) extent 8 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]     OPAL_UINT8 count 1 disp 0xc0 (192) extent 8 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]      OPAL_INT8 count 1 disp 0xd0 (208) extent 8 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; --C---P-D--[---][---]     OPAL_UINT8 count 1 disp 0xe0 (224) extent 8 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; -------G---[---][---]  OPAL_END_LOOP prev 21 elements first elem
</span><br>
<span class="quotelev2">&gt;&gt; displacement 0 size of data 104 Optimized description
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT4 count 1 disp 0x0 (0) extent 4 (size 4)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT2 count 1 disp 0x8 (8) extent 2 (size 2)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT8 count 1 disp 0x10 (16) extent 8 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT2 count 1 disp 0x20 (32) extent 2 (size 2)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT4 count 1 disp 0x24 (36) extent 4 (size 4)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT8 count 1 disp 0x30 (48) extent 8 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]    OPAL_FLOAT4 count 1 disp 0x40 (64) extent 4 (size 4)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT1 count 1 disp 0x48 (72) extent 1 (size 1)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]    OPAL_FLOAT8 count 1 disp 0x50 (80) extent 8 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 1 disp 0x60 (96) extent 1 (size 1)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]   OPAL_FLOAT16 count 1 disp 0x70 (112) extent 16 (size
</span><br>
<span class="quotelev1">&gt;16)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT1 count 1 disp 0x90 (144) extent 1 (size 1)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 1 disp 0x92 (146) extent 1 (size 1)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT2 count 1 disp 0x94 (148) extent 2 (size 2)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT2 count 1 disp 0x98 (152) extent 2 (size 2)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT4 count 1 disp 0x9c (156) extent 4 (size 4)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT4 count 1 disp 0xa4 (164) extent 4 (size 4)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT8 count 1 disp 0xb0 (176) extent 8 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT8 count 1 disp 0xc0 (192) extent 8 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]      OPAL_INT8 count 1 disp 0xd0 (208) extent 8 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[---][---]     OPAL_UINT8 count 1 disp 0xe0 (224) extent 8 (size 8)
</span><br>
<span class="quotelev2">&gt;&gt; -------G---[---][---]  OPAL_END_LOOP prev 21 elements first elem
</span><br>
<span class="quotelev2">&gt;&gt; displacement 0 size of data 104
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST error (1): libmpitest.c:1578 i=0, char value=-61, expected 0
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST error (1): libmpitest.c:1608 i=0, int32_t value=117, expected
</span><br>
<span class="quotelev2">&gt;&gt; 0 MPITEST error (1): libmpitest.c:1608 i=117, int32_t value=-1,
</span><br>
<span class="quotelev2">&gt;&gt; expected 117 MPITEST error (1): libmpitest.c:1578 i=195, char
</span><br>
<span class="quotelev2">&gt;&gt; value=-1, expected -61 MPITEST error (1): 4 errors in buffer (17,0,12)
</span><br>
<span class="quotelev2">&gt;&gt; len 273 commsize 2 commtype -10 data_type 13 root 1 MPITEST info  (0):
</span><br>
<span class="quotelev2">&gt;&gt; Starting MPI_Isend_ator: All Isend TO Root test MPITEST info  (0):
</span><br>
<span class="quotelev2">&gt;&gt; Node spec MPITEST_comm_sizes[6]=2 too large, using 1 MPITEST info
</span><br>
<span class="quotelev2">&gt;&gt; (0): Node spec MPITEST_comm_sizes[22]=2 too large, using 1 MPITEST
</span><br>
<span class="quotelev2">&gt;&gt; info  (0): Node spec MPITEST_comm_sizes[32]=2 too large, using 1
</span><br>
<span class="quotelev2">&gt;&gt; MPITEST_results: MPI_Isend_ator: All Isend TO Root 1 tests FAILED (of
</span><br>
<span class="quotelev2">&gt;&gt; 3744)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned a non-zero
</span><br>
<span class="quotelev2">&gt;&gt; exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ---- mpirun detected that one or more processes exited with non-zero
</span><br>
<span class="quotelev2">&gt;&gt; status, thus causing the job to be terminated. The first process to do
</span><br>
<span class="quotelev2">&gt;&gt; so was:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Process name: [[12296,1],1]
</span><br>
<span class="quotelev2">&gt;&gt;  Exit code:    1
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; [rvandevaart_at_drossetti-ivy1 src]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------- This email message is for the sole use of the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev2">&gt;&gt; unauthorized review, use, disclosure or distribution is prohibited.
</span><br>
<span class="quotelev2">&gt;&gt; If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev2">&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------- _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14553.php">http://www.open-mpi.org/community/lists/devel/2014/04/14553.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/devel/2014/04/14554.php
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14560.php">Ralph Castain: "[OMPI devel] v1.8.1 release"</a>
<li><strong>Previous message:</strong> <a href="14558.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT has migrated to git"</a>
<li><strong>In reply to:</strong> <a href="14554.php">George Bosilca: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14688.php">George Bosilca: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14688.php">George Bosilca: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
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
