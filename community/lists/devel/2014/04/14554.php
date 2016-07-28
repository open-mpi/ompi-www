<?
$subject_val = "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 16:23:47 2014" -->
<!-- isoreceived="20140416202347" -->
<!-- sent="Wed, 16 Apr 2014 16:23:41 -0400" -->
<!-- isosent="20140416202341" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk" -->
<!-- id="9B48612A-6C48-4BCD-8718-5B246EFC1D32_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3601B5DD083_at_HQMAIL02.nvidia.com" -->
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
<strong>Date:</strong> 2014-04-16 16:23:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14555.php">Christoph Niethammer: "Re: [OMPI devel] 1-question developer poll"</a>
<li><strong>Previous message:</strong> <a href="14553.php">Rolf vandeVaart: "[OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<li><strong>In reply to:</strong> <a href="14553.php">Rolf vandeVaart: "[OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14559.php">Rolf vandeVaart: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL	in trunk"</a>
<li><strong>Reply:</strong> <a href="14559.php">Rolf vandeVaart: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL	in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>I didn&#146;t see these on my check run. Can you run the MPI_Isend_ator test with mpi_ddt_pack_debug and mpi_ddt_unpack_debug set to 1. I would be interested in the output you get on your machine.
<br>
<p>George.
<br>
<p><p>On Apr 16, 2014, at 14:34 , Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have seen errors when running the intel test suite using the openib BTL when transferring derived datatypes.  I do not see the error with sm or tcp BTLs.  The errors begin after this checkin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/31370">https://svn.open-mpi.org/trac/ompi/changeset/31370</a>
</span><br>
<span class="quotelev1">&gt; Timestamp: 04/11/14 16:06:56 (5 days ago)
</span><br>
<span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Message: Reshape all the packing/unpacking functions to use the same skeleton. Rewrite the
</span><br>
<span class="quotelev1">&gt; generic_unpacking to take advantage of the same capabilitites.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone else see errors?  Here is an example running with r31370:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_drossetti-ivy1 src]$ mpirun --mca btl self,openib -np 2 -host drossetti-ivy0,drossetti-ivy1 --mca btl_openib_warn_default_gid_prefix 0 MPI_Isend_ator_c
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): libmpitest.c:1608 i=117, int32_t value=-1, expected 117
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): libmpitest.c:1578 i=195, char value=-1, expected -61
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): 2 errors in buffer (17,0,12) len 273 commsize 2 commtype -10 data_type 13 root 1
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): libmpitest.c:1608 i=117, int32_t value=-1, expected 117
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): libmpitest.c:1578 i=195, char value=-1, expected -61
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): 2 errors in buffer (17,2,12) len 273 commsize 2 commtype -16 data_type 13 root 1
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): Starting MPI_Isend_ator: All Isend TO Root test
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): Node spec MPITEST_comm_sizes[6]=2 too large, using 1
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): Node spec MPITEST_comm_sizes[22]=2 too large, using 1
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): Node spec MPITEST_comm_sizes[32]=2 too large, using 1
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): libmpitest.c:1608 i=117, int32_t value=-1, expected 118
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): libmpitest.c:1578 i=195, char value=-1, expected -60
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): 2 errors in buffer (17,0,12) len 273 commsize 2 commtype -10 data_type 13 root 0
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): libmpitest.c:1608 i=117, int32_t value=-1, expected 118
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): libmpitest.c:1578 i=195, char value=-1, expected -60
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): 2 errors in buffer (17,2,12) len 273 commsize 2 commtype -16 data_type 13 root 0
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): libmpitest.c:1608 i=117, int32_t value=-1, expected 117
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): libmpitest.c:1578 i=195, char value=-1, expected -61
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): 2 errors in buffer (17,4,12) len 273 commsize 2 commtype -13 data_type 13 root 1
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): libmpitest.c:1608 i=117, int32_t value=-1, expected 118
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): libmpitest.c:1578 i=195, char value=-1, expected -60
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): 2 errors in buffer (17,4,12) len 273 commsize 2 commtype -13 data_type 13 root 0
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): libmpitest.c:1608 i=117, int32_t value=-1, expected 117
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): libmpitest.c:1578 i=195, char value=-1, expected -61
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): 2 errors in buffer (17,6,12) len 273 commsize 2 commtype -15 data_type 13 root 0
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): libmpitest.c:1608 i=117, int32_t value=-1, expected 117
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): libmpitest.c:1578 i=195, char value=-1, expected -61
</span><br>
<span class="quotelev1">&gt; MPITEST error (0): 2 errors in buffer (17,6,12) len 273 commsize 2 commtype -15 data_type 13 root 0
</span><br>
<span class="quotelev1">&gt; MPITEST_results: MPI_Isend_ator: All Isend TO Root 8 tests FAILED (of 3744)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Process name: [[12363,1],0]
</span><br>
<span class="quotelev1">&gt;  Exit code:    4
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_drossetti-ivy1 src]$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is an error with the trunk which is slightly different.
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_drossetti-ivy1 src]$ mpirun --mca btl self,openib -np 2 -host drossetti-ivy0,drossetti-ivy1 --mca btl_openib_warn_default_gid_prefix 0 MPI_Isend_ator_c
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy1.nvidia.com:22875] ../../../opal/datatype/opal_datatype_position.c:72
</span><br>
<span class="quotelev1">&gt; 	Pointer 0x1ad414c size 4 is outside [0x1ac1d20,0x1ad1d08] for
</span><br>
<span class="quotelev1">&gt; 	base ptr 0x1ac1d20 count 273 and data 
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy1.nvidia.com:22875] Datatype 0x1ac0220[] size 104 align 16 id 0 length 22 used 21
</span><br>
<span class="quotelev1">&gt; true_lb 0 true_ub 232 (true_extent 232) lb 0 ub 240 (extent 240)
</span><br>
<span class="quotelev1">&gt; nbElems 21 loops 0 flags 1C4 (commited )-c--lu-GD--[---][---]
</span><br>
<span class="quotelev1">&gt;   contain lb ub OPAL_LB OPAL_UB OPAL_INT1 OPAL_INT2 OPAL_INT4 OPAL_INT8 OPAL_UINT1 OPAL_UINT2 OPAL_UINT4 OPAL_UINT8 OPAL_FLOAT4 OPAL_FLOAT8 OPAL_FLOAT16 
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]      OPAL_INT4 count 1 disp 0x0 (0) extent 4 (size 4)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]      OPAL_INT2 count 1 disp 0x8 (8) extent 2 (size 2)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]      OPAL_INT8 count 1 disp 0x10 (16) extent 8 (size 8)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]     OPAL_UINT2 count 1 disp 0x20 (32) extent 2 (size 2)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]     OPAL_UINT4 count 1 disp 0x24 (36) extent 4 (size 4)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]     OPAL_UINT8 count 1 disp 0x30 (48) extent 8 (size 8)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]    OPAL_FLOAT4 count 1 disp 0x40 (64) extent 4 (size 4)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]      OPAL_INT1 count 1 disp 0x48 (72) extent 1 (size 1)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]    OPAL_FLOAT8 count 1 disp 0x50 (80) extent 8 (size 8)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]     OPAL_UINT1 count 1 disp 0x60 (96) extent 1 (size 1)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]   OPAL_FLOAT16 count 1 disp 0x70 (112) extent 16 (size 16)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]      OPAL_INT1 count 1 disp 0x90 (144) extent 1 (size 1)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]     OPAL_UINT1 count 1 disp 0x92 (146) extent 1 (size 1)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]      OPAL_INT2 count 1 disp 0x94 (148) extent 2 (size 2)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]     OPAL_UINT2 count 1 disp 0x98 (152) extent 2 (size 2)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]      OPAL_INT4 count 1 disp 0x9c (156) extent 4 (size 4)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]     OPAL_UINT4 count 1 disp 0xa4 (164) extent 4 (size 4)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]      OPAL_INT8 count 1 disp 0xb0 (176) extent 8 (size 8)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]     OPAL_UINT8 count 1 disp 0xc0 (192) extent 8 (size 8)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]      OPAL_INT8 count 1 disp 0xd0 (208) extent 8 (size 8)
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]     OPAL_UINT8 count 1 disp 0xe0 (224) extent 8 (size 8)
</span><br>
<span class="quotelev1">&gt; -------G---[---][---]  OPAL_END_LOOP prev 21 elements first elem displacement 0 size of data 104
</span><br>
<span class="quotelev1">&gt; Optimized description 
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]      OPAL_INT4 count 1 disp 0x0 (0) extent 4 (size 4)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]      OPAL_INT2 count 1 disp 0x8 (8) extent 2 (size 2)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]      OPAL_INT8 count 1 disp 0x10 (16) extent 8 (size 8)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]     OPAL_UINT2 count 1 disp 0x20 (32) extent 2 (size 2)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]     OPAL_UINT4 count 1 disp 0x24 (36) extent 4 (size 4)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]     OPAL_UINT8 count 1 disp 0x30 (48) extent 8 (size 8)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]    OPAL_FLOAT4 count 1 disp 0x40 (64) extent 4 (size 4)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]      OPAL_INT1 count 1 disp 0x48 (72) extent 1 (size 1)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]    OPAL_FLOAT8 count 1 disp 0x50 (80) extent 8 (size 8)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 1 disp 0x60 (96) extent 1 (size 1)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]   OPAL_FLOAT16 count 1 disp 0x70 (112) extent 16 (size 16)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]      OPAL_INT1 count 1 disp 0x90 (144) extent 1 (size 1)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]     OPAL_UINT1 count 1 disp 0x92 (146) extent 1 (size 1)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]      OPAL_INT2 count 1 disp 0x94 (148) extent 2 (size 2)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]     OPAL_UINT2 count 1 disp 0x98 (152) extent 2 (size 2)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]      OPAL_INT4 count 1 disp 0x9c (156) extent 4 (size 4)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]     OPAL_UINT4 count 1 disp 0xa4 (164) extent 4 (size 4)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]      OPAL_INT8 count 1 disp 0xb0 (176) extent 8 (size 8)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]     OPAL_UINT8 count 1 disp 0xc0 (192) extent 8 (size 8)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]      OPAL_INT8 count 1 disp 0xd0 (208) extent 8 (size 8)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[---][---]     OPAL_UINT8 count 1 disp 0xe0 (224) extent 8 (size 8)
</span><br>
<span class="quotelev1">&gt; -------G---[---][---]  OPAL_END_LOOP prev 21 elements first elem displacement 0 size of data 104
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): libmpitest.c:1578 i=0, char value=-61, expected 0
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): libmpitest.c:1608 i=0, int32_t value=117, expected 0
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): libmpitest.c:1608 i=117, int32_t value=-1, expected 117
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): libmpitest.c:1578 i=195, char value=-1, expected -61
</span><br>
<span class="quotelev1">&gt; MPITEST error (1): 4 errors in buffer (17,0,12) len 273 commsize 2 commtype -10 data_type 13 root 1
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): Starting MPI_Isend_ator: All Isend TO Root test
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): Node spec MPITEST_comm_sizes[6]=2 too large, using 1
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): Node spec MPITEST_comm_sizes[22]=2 too large, using 1
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): Node spec MPITEST_comm_sizes[32]=2 too large, using 1
</span><br>
<span class="quotelev1">&gt; MPITEST_results: MPI_Isend_ator: All Isend TO Root 1 tests FAILED (of 3744)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Process name: [[12296,1],1]
</span><br>
<span class="quotelev1">&gt;  Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_drossetti-ivy1 src]$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14553.php">http://www.open-mpi.org/community/lists/devel/2014/04/14553.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14555.php">Christoph Niethammer: "Re: [OMPI devel] 1-question developer poll"</a>
<li><strong>Previous message:</strong> <a href="14553.php">Rolf vandeVaart: "[OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<li><strong>In reply to:</strong> <a href="14553.php">Rolf vandeVaart: "[OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14559.php">Rolf vandeVaart: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL	in trunk"</a>
<li><strong>Reply:</strong> <a href="14559.php">Rolf vandeVaart: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL	in trunk"</a>
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
