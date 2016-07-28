<?
$subject_val = "[OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 10:48:06 2011" -->
<!-- isoreceived="20110414144806" -->
<!-- sent="Thu, 14 Apr 2011 16:48:01 +0200" -->
<!-- isosent="20110414144801" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)" -->
<!-- id="4DA70921.3070909_at_bull.net" -->
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
<strong>Subject:</strong> [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)<br>
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 10:48:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9184.php">Jeff Squyres: "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<li><strong>Previous message:</strong> <a href="9182.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9184.php">Jeff Squyres: "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<li><strong>Reply:</strong> <a href="9184.php">Jeff Squyres: "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<li><strong>Reply:</strong> <a href="9197.php">George Bosilca: "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Calling MPI_Type_create_hindexed(int count, int array_of_blocklengths[],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint array_of_displacements[], MPI_Datatype oldtype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype *newtype)
<br>
with a count parameter of 1 causes a loss of memory detected by valgrind :
<br>
<p>==2053== 576 (448 direct, 128 indirect) bytes in 1 blocks are definitely 
<br>
lost in loss record 157 of 182
<br>
==2053==    at 0x4C2415D: malloc (vg_replace_malloc.c:195)
<br>
==2053==    by 0x4E7CEC7: opal_obj_new (opal_object.h:469)
<br>
==2053==    by 0x4E7D134: ompi_datatype_create (ompi_datatype_create.c:71)
<br>
==2053==    by 0x4E7D58E: ompi_datatype_create_hindexed 
<br>
(ompi_datatype_create_indexed.c:89)
<br>
==2053==    by 0x4EA74D0: PMPI_Type_create_hindexed 
<br>
(ptype_create_hindexed.c:75)
<br>
==2053==    by 0x401A5C: main (in /home_nfs/xxx/type_create_hindexed)
<br>
<p>This can be reproduced with the following trivial code:
<br>
=====================================
<br>
#include &quot;mpi.h&quot;
<br>
<p>MPI_Datatype newtype;
<br>
int lg[3];
<br>
MPI_Aint disp[3];
<br>
<p>int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;disp[0] = (MPI_Aint)disp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;disp[1] = (MPI_Aint)disp+1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lg[0] = 5;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lg[1] = 5;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_create_hindexed(1, lg, disp, MPI_BYTE, &amp;newtype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;newtype);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
======================================
<br>
If MPI_Type_create_hindexed() is called with a count parameter greater 
<br>
1, valgrind does not detect any lost record.
<br>
<p>Patch proposed:
<br>
<p>hg diff ompi/datatype/ompi_datatype_create_indexed.c
<br>
diff -r a2d94a70f474 ompi/datatype/ompi_datatype_create_indexed.c
<br>
--- a/ompi/datatype/ompi_datatype_create_indexed.c      Wed Mar 30 
<br>
18:47:31 2011 +0200
<br>
+++ b/ompi/datatype/ompi_datatype_create_indexed.c      Thu Apr 14 
<br>
16:16:08 2011 +0200
<br>
@@ -91,11 +91,6 @@
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for( i = 1; i &lt; count; i++ ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( endat == pDisp[i] ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* contiguous with the previsious */
<br>
@@ -109,7 +104,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_datatype_add( pdt, oldType, dLength, disp, extent );
<br>
-    }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*newType = pdt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
<p>Explanation:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The case (0 == count) was resolved before by returning.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The problem is that, in the case ( 1 &gt;= count ), 
<br>
ompi_datatype_create() is called again (it has been just called before).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;In fact the case (1 == count) is not different of the case (1 &lt; 
<br>
count), so it is possible to just avoid the if-else statement.
<br>
<p>We need a patch for OpenMPI 1.5 branch.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9184.php">Jeff Squyres: "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<li><strong>Previous message:</strong> <a href="9182.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9184.php">Jeff Squyres: "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<li><strong>Reply:</strong> <a href="9184.php">Jeff Squyres: "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<li><strong>Reply:</strong> <a href="9197.php">George Bosilca: "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
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
