<?
$subject_val = "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 10:51:24 2011" -->
<!-- isoreceived="20110414145124" -->
<!-- sent="Thu, 14 Apr 2011 10:51:18 -0400" -->
<!-- isosent="20110414145118" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)" -->
<!-- id="8A14C0B3-0E91-4E59-8ECD-ACE25EDCCD1F_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 10:51:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9185.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9183.php">Pascal Deveze: "[OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<li><strong>In reply to:</strong> <a href="9183.php">Pascal Deveze: "[OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9197.php">George Bosilca: "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That looks reasonable to me, but I'd also re-indent the body of the else{} (i.e., remove 4 spaces from each).
<br>
<p>George?
<br>
<p><p>On Apr 14, 2011, at 10:48 AM, Pascal Deveze wrote:
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9185.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9183.php">Pascal Deveze: "[OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<li><strong>In reply to:</strong> <a href="9183.php">Pascal Deveze: "[OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9197.php">George Bosilca: "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
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
