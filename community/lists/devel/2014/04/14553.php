<?
$subject_val = "[OMPI devel] Possible bug with derived datatypes and openib BTL in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 14:34:11 2014" -->
<!-- isoreceived="20140416183411" -->
<!-- sent="Wed, 16 Apr 2014 11:34:10 -0700" -->
<!-- isosent="20140416183410" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Possible bug with derived datatypes and openib BTL in trunk" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3601B5DD083_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 14:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14554.php">George Bosilca: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<li><strong>Previous message:</strong> <a href="14552.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bug in man page of MPI_Type_create_hindexed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14554.php">George Bosilca: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<li><strong>Reply:</strong> <a href="14554.php">George Bosilca: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have seen errors when running the intel test suite using the openib BTL when transferring derived datatypes.  I do not see the error with sm or tcp BTLs.  The errors begin after this checkin.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/31370">https://svn.open-mpi.org/trac/ompi/changeset/31370</a>
<br>
Timestamp: 04/11/14 16:06:56 (5 days ago)
<br>
Author: bosilca
<br>
Message: Reshape all the packing/unpacking functions to use the same skeleton. Rewrite the
<br>
generic_unpacking to take advantage of the same capabilitites.
<br>
<p>Does anyone else see errors?  Here is an example running with r31370:
<br>
<p>[rvandevaart_at_drossetti-ivy1 src]$ mpirun --mca btl self,openib -np 2 -host drossetti-ivy0,drossetti-ivy1 --mca btl_openib_warn_default_gid_prefix 0 MPI_Isend_ator_c
<br>
MPITEST error (1): libmpitest.c:1608 i=117, int32_t value=-1, expected 117
<br>
MPITEST error (1): libmpitest.c:1578 i=195, char value=-1, expected -61
<br>
MPITEST error (1): 2 errors in buffer (17,0,12) len 273 commsize 2 commtype -10 data_type 13 root 1
<br>
MPITEST error (1): libmpitest.c:1608 i=117, int32_t value=-1, expected 117
<br>
MPITEST error (1): libmpitest.c:1578 i=195, char value=-1, expected -61
<br>
MPITEST error (1): 2 errors in buffer (17,2,12) len 273 commsize 2 commtype -16 data_type 13 root 1
<br>
MPITEST info  (0): Starting MPI_Isend_ator: All Isend TO Root test
<br>
MPITEST info  (0): Node spec MPITEST_comm_sizes[6]=2 too large, using 1
<br>
MPITEST info  (0): Node spec MPITEST_comm_sizes[22]=2 too large, using 1
<br>
MPITEST info  (0): Node spec MPITEST_comm_sizes[32]=2 too large, using 1
<br>
MPITEST error (0): libmpitest.c:1608 i=117, int32_t value=-1, expected 118
<br>
MPITEST error (0): libmpitest.c:1578 i=195, char value=-1, expected -60
<br>
MPITEST error (0): 2 errors in buffer (17,0,12) len 273 commsize 2 commtype -10 data_type 13 root 0
<br>
MPITEST error (0): libmpitest.c:1608 i=117, int32_t value=-1, expected 118
<br>
MPITEST error (0): libmpitest.c:1578 i=195, char value=-1, expected -60
<br>
MPITEST error (0): 2 errors in buffer (17,2,12) len 273 commsize 2 commtype -16 data_type 13 root 0
<br>
MPITEST error (1): libmpitest.c:1608 i=117, int32_t value=-1, expected 117
<br>
MPITEST error (1): libmpitest.c:1578 i=195, char value=-1, expected -61
<br>
MPITEST error (1): 2 errors in buffer (17,4,12) len 273 commsize 2 commtype -13 data_type 13 root 1
<br>
MPITEST error (0): libmpitest.c:1608 i=117, int32_t value=-1, expected 118
<br>
MPITEST error (0): libmpitest.c:1578 i=195, char value=-1, expected -60
<br>
MPITEST error (0): 2 errors in buffer (17,4,12) len 273 commsize 2 commtype -13 data_type 13 root 0
<br>
MPITEST error (1): libmpitest.c:1608 i=117, int32_t value=-1, expected 117
<br>
MPITEST error (1): libmpitest.c:1578 i=195, char value=-1, expected -61
<br>
MPITEST error (1): 2 errors in buffer (17,6,12) len 273 commsize 2 commtype -15 data_type 13 root 0
<br>
MPITEST error (0): libmpitest.c:1608 i=117, int32_t value=-1, expected 117
<br>
MPITEST error (0): libmpitest.c:1578 i=195, char value=-1, expected -61
<br>
MPITEST error (0): 2 errors in buffer (17,6,12) len 273 commsize 2 commtype -15 data_type 13 root 0
<br>
MPITEST_results: MPI_Isend_ator: All Isend TO Root 8 tests FAILED (of 3744)
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[12363,1],0]
<br>
&nbsp;&nbsp;Exit code:    4
<br>
--------------------------------------------------------------------------
<br>
[rvandevaart_at_drossetti-ivy1 src]$ 
<br>
<p><p>Here is an error with the trunk which is slightly different.
<br>
[rvandevaart_at_drossetti-ivy1 src]$ mpirun --mca btl self,openib -np 2 -host drossetti-ivy0,drossetti-ivy1 --mca btl_openib_warn_default_gid_prefix 0 MPI_Isend_ator_c
<br>
[drossetti-ivy1.nvidia.com:22875] ../../../opal/datatype/opal_datatype_position.c:72
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pointer 0x1ad414c size 4 is outside [0x1ac1d20,0x1ad1d08] for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base ptr 0x1ac1d20 count 273 and data 
<br>
[drossetti-ivy1.nvidia.com:22875] Datatype 0x1ac0220[] size 104 align 16 id 0 length 22 used 21
<br>
true_lb 0 true_ub 232 (true_extent 232) lb 0 ub 240 (extent 240)
<br>
nbElems 21 loops 0 flags 1C4 (commited )-c--lu-GD--[---][---]
<br>
&nbsp;&nbsp;&nbsp;contain lb ub OPAL_LB OPAL_UB OPAL_INT1 OPAL_INT2 OPAL_INT4 OPAL_INT8 OPAL_UINT1 OPAL_UINT2 OPAL_UINT4 OPAL_UINT8 OPAL_FLOAT4 OPAL_FLOAT8 OPAL_FLOAT16 
<br>
--C---P-D--[---][---]      OPAL_INT4 count 1 disp 0x0 (0) extent 4 (size 4)
<br>
--C---P-D--[---][---]      OPAL_INT2 count 1 disp 0x8 (8) extent 2 (size 2)
<br>
--C---P-D--[---][---]      OPAL_INT8 count 1 disp 0x10 (16) extent 8 (size 8)
<br>
--C---P-D--[---][---]     OPAL_UINT2 count 1 disp 0x20 (32) extent 2 (size 2)
<br>
--C---P-D--[---][---]     OPAL_UINT4 count 1 disp 0x24 (36) extent 4 (size 4)
<br>
--C---P-D--[---][---]     OPAL_UINT8 count 1 disp 0x30 (48) extent 8 (size 8)
<br>
--C---P-D--[---][---]    OPAL_FLOAT4 count 1 disp 0x40 (64) extent 4 (size 4)
<br>
--C---P-D--[---][---]      OPAL_INT1 count 1 disp 0x48 (72) extent 1 (size 1)
<br>
--C---P-D--[---][---]    OPAL_FLOAT8 count 1 disp 0x50 (80) extent 8 (size 8)
<br>
--C---P-D--[---][---]     OPAL_UINT1 count 1 disp 0x60 (96) extent 1 (size 1)
<br>
--C---P-D--[---][---]   OPAL_FLOAT16 count 1 disp 0x70 (112) extent 16 (size 16)
<br>
--C---P-D--[---][---]      OPAL_INT1 count 1 disp 0x90 (144) extent 1 (size 1)
<br>
--C---P-D--[---][---]     OPAL_UINT1 count 1 disp 0x92 (146) extent 1 (size 1)
<br>
--C---P-D--[---][---]      OPAL_INT2 count 1 disp 0x94 (148) extent 2 (size 2)
<br>
--C---P-D--[---][---]     OPAL_UINT2 count 1 disp 0x98 (152) extent 2 (size 2)
<br>
--C---P-D--[---][---]      OPAL_INT4 count 1 disp 0x9c (156) extent 4 (size 4)
<br>
--C---P-D--[---][---]     OPAL_UINT4 count 1 disp 0xa4 (164) extent 4 (size 4)
<br>
--C---P-D--[---][---]      OPAL_INT8 count 1 disp 0xb0 (176) extent 8 (size 8)
<br>
--C---P-D--[---][---]     OPAL_UINT8 count 1 disp 0xc0 (192) extent 8 (size 8)
<br>
--C---P-D--[---][---]      OPAL_INT8 count 1 disp 0xd0 (208) extent 8 (size 8)
<br>
--C---P-D--[---][---]     OPAL_UINT8 count 1 disp 0xe0 (224) extent 8 (size 8)
<br>
-------G---[---][---]  OPAL_END_LOOP prev 21 elements first elem displacement 0 size of data 104
<br>
Optimized description 
<br>
-cC---P-DB-[---][---]      OPAL_INT4 count 1 disp 0x0 (0) extent 4 (size 4)
<br>
-cC---P-DB-[---][---]      OPAL_INT2 count 1 disp 0x8 (8) extent 2 (size 2)
<br>
-cC---P-DB-[---][---]      OPAL_INT8 count 1 disp 0x10 (16) extent 8 (size 8)
<br>
-cC---P-DB-[---][---]     OPAL_UINT2 count 1 disp 0x20 (32) extent 2 (size 2)
<br>
-cC---P-DB-[---][---]     OPAL_UINT4 count 1 disp 0x24 (36) extent 4 (size 4)
<br>
-cC---P-DB-[---][---]     OPAL_UINT8 count 1 disp 0x30 (48) extent 8 (size 8)
<br>
-cC---P-DB-[---][---]    OPAL_FLOAT4 count 1 disp 0x40 (64) extent 4 (size 4)
<br>
-cC---P-DB-[---][---]      OPAL_INT1 count 1 disp 0x48 (72) extent 1 (size 1)
<br>
-cC---P-DB-[---][---]    OPAL_FLOAT8 count 1 disp 0x50 (80) extent 8 (size 8)
<br>
-cC---P-DB-[---][---]     OPAL_UINT1 count 1 disp 0x60 (96) extent 1 (size 1)
<br>
-cC---P-DB-[---][---]   OPAL_FLOAT16 count 1 disp 0x70 (112) extent 16 (size 16)
<br>
-cC---P-DB-[---][---]      OPAL_INT1 count 1 disp 0x90 (144) extent 1 (size 1)
<br>
-cC---P-DB-[---][---]     OPAL_UINT1 count 1 disp 0x92 (146) extent 1 (size 1)
<br>
-cC---P-DB-[---][---]      OPAL_INT2 count 1 disp 0x94 (148) extent 2 (size 2)
<br>
-cC---P-DB-[---][---]     OPAL_UINT2 count 1 disp 0x98 (152) extent 2 (size 2)
<br>
-cC---P-DB-[---][---]      OPAL_INT4 count 1 disp 0x9c (156) extent 4 (size 4)
<br>
-cC---P-DB-[---][---]     OPAL_UINT4 count 1 disp 0xa4 (164) extent 4 (size 4)
<br>
-cC---P-DB-[---][---]      OPAL_INT8 count 1 disp 0xb0 (176) extent 8 (size 8)
<br>
-cC---P-DB-[---][---]     OPAL_UINT8 count 1 disp 0xc0 (192) extent 8 (size 8)
<br>
-cC---P-DB-[---][---]      OPAL_INT8 count 1 disp 0xd0 (208) extent 8 (size 8)
<br>
-cC---P-DB-[---][---]     OPAL_UINT8 count 1 disp 0xe0 (224) extent 8 (size 8)
<br>
-------G---[---][---]  OPAL_END_LOOP prev 21 elements first elem displacement 0 size of data 104
<br>
<p>MPITEST error (1): libmpitest.c:1578 i=0, char value=-61, expected 0
<br>
MPITEST error (1): libmpitest.c:1608 i=0, int32_t value=117, expected 0
<br>
MPITEST error (1): libmpitest.c:1608 i=117, int32_t value=-1, expected 117
<br>
MPITEST error (1): libmpitest.c:1578 i=195, char value=-1, expected -61
<br>
MPITEST error (1): 4 errors in buffer (17,0,12) len 273 commsize 2 commtype -10 data_type 13 root 1
<br>
MPITEST info  (0): Starting MPI_Isend_ator: All Isend TO Root test
<br>
MPITEST info  (0): Node spec MPITEST_comm_sizes[6]=2 too large, using 1
<br>
MPITEST info  (0): Node spec MPITEST_comm_sizes[22]=2 too large, using 1
<br>
MPITEST info  (0): Node spec MPITEST_comm_sizes[32]=2 too large, using 1
<br>
MPITEST_results: MPI_Isend_ator: All Isend TO Root 1 tests FAILED (of 3744)
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[12296,1],1]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
[rvandevaart_at_drossetti-ivy1 src]$ 
<br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14554.php">George Bosilca: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<li><strong>Previous message:</strong> <a href="14552.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bug in man page of MPI_Type_create_hindexed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14554.php">George Bosilca: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<li><strong>Reply:</strong> <a href="14554.php">George Bosilca: "Re: [OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
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
