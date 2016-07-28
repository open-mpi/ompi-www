<?
$subject_val = "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 20:52:01 2009" -->
<!-- isoreceived="20090722005201" -->
<!-- sent="Tue, 21 Jul 2009 20:51:47 -0400" -->
<!-- isosent="20090722005147" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fortran MPI_COMPLEX datatype broken" -->
<!-- id="09AB35E5-CCE2-416F-A358-9E5CA563AA4E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C5030A87-D8DA-4430-A681-B04A905EEDBC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] fortran MPI_COMPLEX datatype broken<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 20:51:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6492.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<li><strong>Previous message:</strong> <a href="6490.php">Jeff Squyres: "[OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<li><strong>In reply to:</strong> <a href="6490.php">Jeff Squyres: "[OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6492.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<li><strong>Reply:</strong> <a href="6492.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 21, 2009, at 8:44 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; The extent for MPI_COMPLEX is returning 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Sorry -- I accidentally hit &quot;send&quot; way before I finished typing.  :-\
<br>
<p>You can reproduce the problem with a trivial program:
<br>
<p>-----
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint extent;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_extent(MPI_COMPLEX, &amp;extent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Got extent: %d\n&quot;, extent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
-----
<br>
<p>This is an OMPI that was compiled with Fortran support.  If I break at  
<br>
MPI_Type_extent in gdb, here's what *type is:
<br>
<p>-----
<br>
(gdb) p *type
<br>
$1 = {super = {super = {obj_magic_id = 16046253926196952813,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj_class = 0x2a95aa0520, obj_reference_count = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cls_init_file_name = 0x2a95626ce0 &quot;ompi_datatype_module.c&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cls_init_lineno = 134}, flags = 63011, id = 0, bdt_used = 0,  
<br>
size = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;true_lb = 0, true_ub = 0, lb = 0, ub = 0, align = 0, nbElems = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name = &quot;OPAL_UNAVAILABLE&quot;, '\0' &lt;repeats 47 times&gt;, desc =  
<br>
{length = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;used = 1, desc = 0x2a95ac4640}, opt_desc = {length = 1, used = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;desc = 0x2a95ac4640}, btypes = {0 &lt;repeats 46 times&gt;}}, id = 25,
<br>
&nbsp;&nbsp;&nbsp;d_f_to_c_index = 18, d_keyhash = 0x0, args = 0x0,  
<br>
packed_description = 0x0,
<br>
&nbsp;&nbsp;&nbsp;name = &quot;MPI_COMPLEX&quot;, '\0' &lt;repeats 52 times&gt;}
<br>
-----
<br>
<p>The OPAL_UNAVAILABLE looks ominous...?  When I do the same thing with  
<br>
MPI_INTEGER, it doesn't say OPAL_UNAVAILABLE:
<br>
<p>-----
<br>
(gdb) p *type
<br>
$2 = {super = {super = {obj_magic_id = 16046253926196952813,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj_class = 0x2a95aa0520, obj_reference_count = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cls_init_file_name = 0x2a95626ce0 &quot;ompi_datatype_module.c&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cls_init_lineno = 131}, flags = 55094, id = 6, bdt_used = 64,  
<br>
size = 4,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;true_lb = 0, true_ub = 4, lb = 0, ub = 4, align = 4, nbElems = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name = &quot;OPAL_INT4&quot;, '\0' &lt;repeats 54 times&gt;, desc = {length = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;used = 1, desc = 0x2a95777920}, opt_desc = {length = 1, used = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;desc = 0x2a95777920}, btypes = {0, 0, 0, 0, 0, 0, 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 &lt;repeats 39 times&gt;}}, id = 22, d_f_to_c_index = 7, d_keyhash  
<br>
= 0x0,
<br>
&nbsp;&nbsp;&nbsp;args = 0x0, packed_description = 0x0,
<br>
&nbsp;&nbsp;&nbsp;name = &quot;MPI_INTEGER&quot;, '\0' &lt;repeats 52 times&gt;}
<br>
-----
<br>
<p>Note that configure was happy with all the COMPLEX datatypes;  
<br>
config.out and config.log attached.  This was with gcc 3.4 on RHEL4.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]

</pre>
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6491/complex-borked.tar.bz2">complex-borked.tar.bz2</a>
</ul>
<!-- attachment="complex-borked.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6492.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<li><strong>Previous message:</strong> <a href="6490.php">Jeff Squyres: "[OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<li><strong>In reply to:</strong> <a href="6490.php">Jeff Squyres: "[OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6492.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<li><strong>Reply:</strong> <a href="6492.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
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
