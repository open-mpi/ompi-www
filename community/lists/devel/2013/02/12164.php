<?
$subject_val = "Re: [OMPI devel] v1.7.0rc7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 25 22:28:07 2013" -->
<!-- isoreceived="20130226032807" -->
<!-- sent="Tue, 26 Feb 2013 04:27:59 +0100" -->
<!-- isosent="20130226032759" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.0rc7" -->
<!-- id="512C2BBF.4090001_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F5B7FB_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-25 22:27:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12165.php">George Bosilca: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Previous message:</strong> <a href="12163.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>In reply to:</strong> <a href="12162.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12165.php">George Bosilca: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Reply:</strong> <a href="12165.php">George Bosilca: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Reply:</strong> <a href="12169.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/26/2013 3:37 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Marco --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it just these 2 patches:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r28059 [[BR]]
</span><br>
<span class="quotelev1">&gt; Patch for Cygwin support: use correct DSO/shared library prefix and
</span><br>
<span class="quotelev1">&gt; suffix.  Thanks to Marco Atzeri for reporting the issue and providing
</span><br>
<span class="quotelev1">&gt; an initial patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r28060 [[BR]]
</span><br>
<span class="quotelev1">&gt; Patch for Cygwin support: Use S_IRWXU for shmget() and include
</span><br>
<span class="quotelev1">&gt; &lt;sys/stat.h&gt;.  Thanks to Marco Atzeri for reporting the issue and
</span><br>
<span class="quotelev1">&gt; providing an initial patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>plus the additional ones
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ERROR.patch : ERROR is already defined, so another label
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is needed for &quot;goto ERROR&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;interface.patch : same for interface , it seems a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct somewhere else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;min.patch : min already defined as macro
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(I saw in the source also a MIN macro defined)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpifh.patch : to avoid undefined error
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_mpifh_la_LIBADD needs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/ompi/libmpi.la
<br>
&nbsp;&nbsp;&nbsp;&nbsp;winsock.patch : defense against &lt;winsock2.h&gt; usage
<br>
<p>attached here
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/12/11855.php">http://www.open-mpi.org/community/lists/devel/2012/12/11855.php</a>
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/3437">https://svn.open-mpi.org/trac/ompi/ticket/3437</a>
<br>
<p>All test passed, but I noticed these warnings:
<br>
<p>&nbsp;&nbsp;&nbsp;CC       to_self.o
<br>
/pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c: 
<br>
In function &#145;create_indexed_constant_gap_ddt&#146;:
<br>
/pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:48:5: 
<br>
warning: &#145;MPI_Type_struct&#146; is deprecated (declared at 
<br>
../../ompi/include/mpi.h:1579): MPI_Type_struct is superseded by 
<br>
MPI_Type_create_struct in MPI-2.0
<br>
/pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c: 
<br>
In function &#145;create_indexed_gap_ddt&#146;:
<br>
/pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:89:5: 
<br>
warning: &#145;MPI_Address&#146; is deprecated (declared at 
<br>
../../ompi/include/mpi.h:1057): MPI_Address is superseded by 
<br>
MPI_Get_address in MPI-2.0
<br>
/pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:90:5: 
<br>
warning: &#145;MPI_Address&#146; is deprecated (declared at 
<br>
../../ompi/include/mpi.h:1057): MPI_Address is superseded by 
<br>
MPI_Get_address in MPI-2.0
<br>
/pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:93:5: 
<br>
warning: &#145;MPI_Type_struct&#146; is deprecated (declared at 
<br>
../../ompi/include/mpi.h:1579): MPI_Type_struct is superseded by 
<br>
MPI_Type_create_struct in MPI-2.0
<br>
/pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:99:5: 
<br>
warning: &#145;MPI_Address&#146; is deprecated (declared at 
<br>
../../ompi/include/mpi.h:1057): MPI_Address is superseded by 
<br>
MPI_Get_address in MPI-2.0
<br>
/pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:100:5: 
<br>
warning: &#145;MPI_Address&#146; is deprecated (declared at 
<br>
../../ompi/include/mpi.h:1057): MPI_Address is superseded by 
<br>
MPI_Get_address in MPI-2.0
<br>
/pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:105:5: 
<br>
warning: &#145;MPI_Type_struct&#146; is deprecated (declared at 
<br>
../../ompi/include/mpi.h:1579): MPI_Type_struct is superseded by 
<br>
MPI_Type_create_struct in MPI-2.0
<br>
/pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c: 
<br>
In function &#145;create_indexed_gap_optimized_ddt&#146;:
<br>
/pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:139:5: 
<br>
warning: &#145;MPI_Type_struct&#146; is deprecated (declared at 
<br>
../../ompi/include/mpi.h:1579): MPI_Type_struct is superseded by 
<br>
MPI_Type_create_struct in MPI-2.0
<br>
/pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c: 
<br>
In function &#145;do_test_for_ddt&#146;:
<br>
/pub/devel/openmpi/openmpi-1.7rc7-1/src/openmpi-1.7rc7/test/datatype/to_self.c:307:5: 
<br>
warning: &#145;MPI_Type_extent&#146; is deprecated (declared at 
<br>
../../ompi/include/mpi.h:1541): MPI_Type_extent is superseded by 
<br>
MPI_Type_get_extent in MPI-2.0
<br>
&nbsp;&nbsp;&nbsp;CCLD     to_self.exe
<br>
<p><p>Is it expected ?
<br>
Or should the test updated to MPI-2.0 convention ?
<br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12165.php">George Bosilca: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Previous message:</strong> <a href="12163.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>In reply to:</strong> <a href="12162.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12165.php">George Bosilca: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Reply:</strong> <a href="12165.php">George Bosilca: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Reply:</strong> <a href="12169.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.0rc7"</a>
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
