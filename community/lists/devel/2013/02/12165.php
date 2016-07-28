<?
$subject_val = "Re: [OMPI devel] v1.7.0rc7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 26 05:23:03 2013" -->
<!-- isoreceived="20130226102303" -->
<!-- sent="Tue, 26 Feb 2013 11:22:56 +0100" -->
<!-- isosent="20130226102256" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.0rc7" -->
<!-- id="DDA971FF-6B3B-439B-9A48-8089F3A023B3_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="512C2BBF.4090001_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7.0rc7<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-26 05:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12166.php">Siegmar Gross: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Previous message:</strong> <a href="12164.php">marco atzeri: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>In reply to:</strong> <a href="12164.php">marco atzeri: "Re: [OMPI devel] v1.7.0rc7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12169.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These warnings are now fixed (r28106). Thanks for reporting them.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Feb 26, 2013, at 04:27 , marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  CC       to_self.o
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c: In function &#145;create_indexed_constant_gap_ddt&#146;:
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:48:5: warning: &#145;MPI_Type_struct&#146; is deprecated (declared at ../../ompi/include/mpi.h:1579): MPI_Type_struct is superseded by MPI_Type_create_struct in MPI-2.0
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c: In function &#145;create_indexed_gap_ddt&#146;:
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:89:5: warning: &#145;MPI_Address&#146; is deprecated (declared at ../../ompi/include/mpi.h:1057): MPI_Address is superseded by MPI_Get_address in MPI-2.0
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:90:5: warning: &#145;MPI_Address&#146; is deprecated (declared at ../../ompi/include/mpi.h:1057): MPI_Address is superseded by MPI_Get_address in MPI-2.0
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:93:5: warning: &#145;MPI_Type_struct&#146; is deprecated (declared at ../../ompi/include/mpi.h:1579): MPI_Type_struct is superseded by MPI_Type_create_struct in MPI-2.0
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:99:5: warning: &#145;MPI_Address&#146; is deprecated (declared at ../../ompi/include/mpi.h:1057): MPI_Address is superseded by MPI_Get_address in MPI-2.0
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:100:5: warning: &#145;MPI_Address&#146; is deprecated (declared at ../../ompi/include/mpi.h:1057): MPI_Address is superseded by MPI_Get_address in MPI-2.0
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:105:5: warning: &#145;MPI_Type_struct&#146; is deprecated (declared at ../../ompi/include/mpi.h:1579): MPI_Type_struct is superseded by MPI_Type_create_struct in MPI-2.0
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c: In function &#145;create_indexed_gap_optimized_ddt&#146;:
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:139:5: warning: &#145;MPI_Type_struct&#146; is deprecated (declared at ../../ompi/include/mpi.h:1579): MPI_Type_struct is superseded by MPI_Type_create_struct in MPI-2.0
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c: In function &#145;do_test_for_ddt&#146;:
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:307:5: warning: &#145;MPI_Type_extent&#146; is deprecated (declared at ../../ompi/include/mpi.h:1541): MPI_Type_extent is superseded by MPI_Type_get_extent in MPI-2.0
</span><br>
<span class="quotelev1">&gt;  CCLD     to_self.exe
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12166.php">Siegmar Gross: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Previous message:</strong> <a href="12164.php">marco atzeri: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>In reply to:</strong> <a href="12164.php">marco atzeri: "Re: [OMPI devel] v1.7.0rc7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12169.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
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
