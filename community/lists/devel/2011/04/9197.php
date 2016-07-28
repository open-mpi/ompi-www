<?
$subject_val = "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 17:48:39 2011" -->
<!-- isoreceived="20110414214839" -->
<!-- sent="Thu, 14 Apr 2011 17:48:33 -0400" -->
<!-- isosent="20110414214833" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)" -->
<!-- id="79AAC6FC-526B-4C69-8CEE-90E71E899FE9_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DA70921.3070909_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 17:48:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9198.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r24617"</a>
<li><strong>Previous message:</strong> <a href="9196.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly"</a>
<li><strong>In reply to:</strong> <a href="9183.php">Pascal Deveze: "[OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting, this issue exists in 2 out of 3 functions defined in the ompi_datatype_create_indexed.c file. Based on your patch I create one that fixes all the issues with the indexed type creation. Attached is the patch. I'll push it in the trunk and create CMRs.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>Index: ompi/datatype/ompi_datatype_create_indexed.c
<br>
===================================================================
<br>
--- ompi/datatype/ompi_datatype_create_indexed.c	(revision 24616)
<br>
+++ ompi/datatype/ompi_datatype_create_indexed.c	(working copy)
<br>
@@ -3,7 +3,7 @@
<br>
&nbsp;&nbsp;* Copyright (c) 2004-2006 The Trustees of Indiana University and Indiana
<br>
&nbsp;&nbsp;*                         University Research and Technology
<br>
&nbsp;&nbsp;*                         Corporation.  All rights reserved.
<br>
- * Copyright (c) 2004-2009 The University of Tennessee and The University
<br>
+ * Copyright (c) 2004-2010 The University of Tennessee and The University
<br>
&nbsp;&nbsp;*                         of Tennessee Research Foundation.  All rights
<br>
&nbsp;&nbsp;*                         reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2004-2006 High Performance Computing Center Stuttgart,
<br>
@@ -46,26 +46,21 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dLength = pBlockLength[0];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endat = disp + dLength;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_datatype_type_extent( oldType, &amp;extent );
<br>
-    if( 1 &gt;= count ) {
<br>
-        pdt = ompi_datatype_create( oldType-&gt;super.desc.used + 2 );
<br>
-        /* multiply by count to make it zero if count is zero */
<br>
-        ompi_datatype_add( pdt, oldType, count * dLength, disp * extent, extent );
<br>
-    } else {
<br>
-        pdt = ompi_datatype_create( count * (2 + oldType-&gt;super.desc.used) );
<br>
-        for( i = 1; i &lt; count; i++ ) {
<br>
-            if( endat == pDisp[i] ) {
<br>
-                /* contiguous with the previsious */
<br>
-                dLength += pBlockLength[i];
<br>
-                endat += pBlockLength[i];
<br>
-            } else {
<br>
-                ompi_datatype_add( pdt, oldType, dLength, disp * extent, extent );
<br>
-                disp = pDisp[i];
<br>
-                dLength = pBlockLength[i];
<br>
-                endat = disp + pBlockLength[i];
<br>
-            }
<br>
+
<br>
+    pdt = ompi_datatype_create( count * (2 + oldType-&gt;super.desc.used) );
<br>
+    for( i = 1; i &lt; count; i++ ) {
<br>
+        if( endat == pDisp[i] ) {
<br>
+            /* contiguous with the previsious */
<br>
+            dLength += pBlockLength[i];
<br>
+            endat += pBlockLength[i];
<br>
+        } else {
<br>
+            ompi_datatype_add( pdt, oldType, dLength, disp * extent, extent );
<br>
+            disp = pDisp[i];
<br>
+            dLength = pBlockLength[i];
<br>
+            endat = disp + pBlockLength[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-        ompi_datatype_add( pdt, oldType, dLength, disp * extent, extent );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+    ompi_datatype_add( pdt, oldType, dLength, disp * extent, extent );
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*newType = pdt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
@@ -91,25 +86,20 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dLength = pBlockLength[0];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endat = disp + dLength * extent;
<br>
&nbsp;
<br>
-    if( 1 &gt;= count ) {
<br>
-        pdt = ompi_datatype_create( oldType-&gt;super.desc.used + 2 );
<br>
-        /* multiply by count to make it zero if count is zero */
<br>
-        ompi_datatype_add( pdt, oldType, count * dLength, disp, extent );
<br>
-    } else {
<br>
-        for( i = 1; i &lt; count; i++ ) {
<br>
-            if( endat == pDisp[i] ) {
<br>
-                /* contiguous with the previsious */
<br>
-                dLength += pBlockLength[i];
<br>
-                endat += pBlockLength[i] * extent;
<br>
-            } else {
<br>
-                ompi_datatype_add( pdt, oldType, dLength, disp, extent );
<br>
-                disp = pDisp[i];
<br>
-                dLength = pBlockLength[i];
<br>
-                endat = disp + pBlockLength[i] * extent;
<br>
-            }
<br>
+    for( i = 1; i &lt; count; i++ ) {
<br>
+        if( endat == pDisp[i] ) {
<br>
+            /* contiguous with the previsious */
<br>
+            dLength += pBlockLength[i];
<br>
+            endat += pBlockLength[i] * extent;
<br>
+        } else {
<br>
+            ompi_datatype_add( pdt, oldType, dLength, disp, extent );
<br>
+            disp = pDisp[i];
<br>
+            dLength = pBlockLength[i];
<br>
+            endat = disp + pBlockLength[i] * extent;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-        ompi_datatype_add( pdt, oldType, dLength, disp, extent );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+    ompi_datatype_add( pdt, oldType, dLength, disp, extent );
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*newType = pdt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
<p><p>On Apr 14, 2011, at 10:48 , Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; Calling MPI_Type_create_hindexed(int count, int array_of_blocklengths[],
</span><br>
<span class="quotelev1">&gt;           MPI_Aint array_of_displacements[], MPI_Datatype oldtype,
</span><br>
<span class="quotelev1">&gt;           MPI_Datatype *newtype)
</span><br>
<span class="quotelev1">&gt; with a count parameter of 1 causes a loss of memory detected by valgrind :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==2053== 576 (448 direct, 128 indirect) bytes in 1 blocks are definitely lost in loss record 157 of 182
</span><br>
<span class="quotelev1">&gt; ==2053==    at 0x4C2415D: malloc (vg_replace_malloc.c:195)
</span><br>
<span class="quotelev1">&gt; ==2053==    by 0x4E7CEC7: opal_obj_new (opal_object.h:469)
</span><br>
<span class="quotelev1">&gt; ==2053==    by 0x4E7D134: ompi_datatype_create (ompi_datatype_create.c:71)
</span><br>
<span class="quotelev1">&gt; ==2053==    by 0x4E7D58E: ompi_datatype_create_hindexed (ompi_datatype_create_indexed.c:89)
</span><br>
<span class="quotelev1">&gt; ==2053==    by 0x4EA74D0: PMPI_Type_create_hindexed (ptype_create_hindexed.c:75)
</span><br>
<span class="quotelev1">&gt; ==2053==    by 0x401A5C: main (in /home_nfs/xxx/type_create_hindexed)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This can be reproduced with the following trivial code:
</span><br>
<span class="quotelev1">&gt; =====================================
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Datatype newtype;
</span><br>
<span class="quotelev1">&gt; int lg[3];
</span><br>
<span class="quotelev1">&gt; MPI_Aint disp[3];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   disp[0] = (MPI_Aint)disp;
</span><br>
<span class="quotelev1">&gt;   disp[1] = (MPI_Aint)disp+1;
</span><br>
<span class="quotelev1">&gt;   lg[0] = 5;
</span><br>
<span class="quotelev1">&gt;   lg[1] = 5;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Type_create_hindexed(1, lg, disp, MPI_BYTE, &amp;newtype);
</span><br>
<span class="quotelev1">&gt;   MPI_Type_free(&amp;newtype);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ======================================
</span><br>
<span class="quotelev1">&gt; If MPI_Type_create_hindexed() is called with a count parameter greater 1, valgrind does not detect any lost record.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patch proposed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hg diff ompi/datatype/ompi_datatype_create_indexed.c
</span><br>
<span class="quotelev1">&gt; diff -r a2d94a70f474 ompi/datatype/ompi_datatype_create_indexed.c
</span><br>
<span class="quotelev1">&gt; --- a/ompi/datatype/ompi_datatype_create_indexed.c      Wed Mar 30 18:47:31 2011 +0200
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/datatype/ompi_datatype_create_indexed.c      Thu Apr 14 16:16:08 2011 +0200
</span><br>
<span class="quotelev1">&gt; @@ -91,11 +91,6 @@
</span><br>
<span class="quotelev1">&gt;    dLength = pBlockLength[0];
</span><br>
<span class="quotelev1">&gt;    endat = disp + dLength * extent;
</span><br>
<span class="quotelev1">&gt; -    if( 1 &gt;= count ) {
</span><br>
<span class="quotelev1">&gt; -        pdt = ompi_datatype_create( oldType-&gt;super.desc.used + 2 );
</span><br>
<span class="quotelev1">&gt; -        /* multiply by count to make it zero if count is zero */
</span><br>
<span class="quotelev1">&gt; -        ompi_datatype_add( pdt, oldType, count * dLength, disp, extent );
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt;        for( i = 1; i &lt; count; i++ ) {
</span><br>
<span class="quotelev1">&gt;            if( endat == pDisp[i] ) {
</span><br>
<span class="quotelev1">&gt;                /* contiguous with the previsious */
</span><br>
<span class="quotelev1">&gt; @@ -109,7 +104,6 @@
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;        ompi_datatype_add( pdt, oldType, dLength, disp, extent );
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt;    *newType = pdt;
</span><br>
<span class="quotelev1">&gt;    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Explanation:
</span><br>
<span class="quotelev1">&gt;   The case (0 == count) was resolved before by returning.
</span><br>
<span class="quotelev1">&gt;   The problem is that, in the case ( 1 &gt;= count ), ompi_datatype_create() is called again (it has been just called before).
</span><br>
<span class="quotelev1">&gt;   In fact the case (1 == count) is not different of the case (1 &lt; count), so it is possible to just avoid the if-else statement.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We need a patch for OpenMPI 1.5 branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&quot;I disapprove of what you say, but I will defend to the death your right to say it&quot;
<br>
&nbsp;&nbsp;-- Evelyn Beatrice Hall
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9198.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r24617"</a>
<li><strong>Previous message:</strong> <a href="9196.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly"</a>
<li><strong>In reply to:</strong> <a href="9183.php">Pascal Deveze: "[OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
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
