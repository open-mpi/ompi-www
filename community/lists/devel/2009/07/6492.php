<?
$subject_val = "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 23:24:28 2009" -->
<!-- isoreceived="20090722032428" -->
<!-- sent="Tue, 21 Jul 2009 23:24:23 -0400" -->
<!-- isosent="20090722032423" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fortran MPI_COMPLEX datatype broken" -->
<!-- id="93C52ABB-C06A-4562-A13B-89923F5F22DA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="09AB35E5-CCE2-416F-A358-9E5CA563AA4E_at_cisco.com" -->
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
<strong>Date:</strong> 2009-07-21 23:24:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6493.php">Bernard Secher - SFME/LGLS: "[OMPI devel] pb with --enable-mpi-threads --enable-progress-threads options"</a>
<li><strong>Previous message:</strong> <a href="6491.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<li><strong>In reply to:</strong> <a href="6491.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A little more data...
<br>
<p>ompi_datatype_module.c:442 says
<br>
<p>#if 0 /* XXX TODO The following may be deleted, both CXX and F77/F90  
<br>
complex types are statically set up */
<br>
...followed by code to initialize ompi_mpi_cplx (i.e., MPI_COMPLEX).
<br>
<p>(another TODO!!)
<br>
<p>But ompi_mpi_cplex is setup with:
<br>
<p>ompi_predefined_datatype_t ompi_mpi_cplex =           
<br>
OMPI_DATATYPE_INIT_DEFER (COMPLEX, OMPI_DATATYPE_FLAG_DATA_FORTRAN |  
<br>
OMPI_DATATYPE_FLAG_DATA_COMPLEX );
<br>
<p>and OMPI_DATATYPE_INIT_DEFER has a comment above it saying:
<br>
<p>/*
<br>
&nbsp;&nbsp;* Initilization for these types is deferred until runtime.
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* Using this macro implies that at this point not all informations  
<br>
needed
<br>
&nbsp;&nbsp;* to fill up the datatype are known. We fill them with zeros and  
<br>
then later
<br>
&nbsp;&nbsp;* when the datatype engine will be initialized we complete with the
<br>
&nbsp;&nbsp;* correct information. This macro should be used for all composed  
<br>
types.
<br>
&nbsp;&nbsp;*/
<br>
<p>So this first thing is clearly wrong.
<br>
<p>Assumedly, ompi_mpi_cplx (and friends) *do* need to be setup  
<br>
dynamically at runtime, and the code must be fixed to do so.
<br>
<p><p><p><p>On Jul 21, 2009, at 8:51 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 21, 2009, at 8:44 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The extent for MPI_COMPLEX is returning 0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry -- I accidentally hit &quot;send&quot; way before I finished typing.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reproduce the problem with a trivial program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;      MPI_Aint extent;
</span><br>
<span class="quotelev1">&gt;      MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;      MPI_Type_extent(MPI_COMPLEX, &amp;extent);
</span><br>
<span class="quotelev1">&gt;      printf(&quot;Got extent: %d\n&quot;, extent);
</span><br>
<span class="quotelev1">&gt;      MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;      return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is an OMPI that was compiled with Fortran support.  If I break at
</span><br>
<span class="quotelev1">&gt; MPI_Type_extent in gdb, here's what *type is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; (gdb) p *type
</span><br>
<span class="quotelev1">&gt; $1 = {super = {super = {obj_magic_id = 16046253926196952813,
</span><br>
<span class="quotelev1">&gt;        obj_class = 0x2a95aa0520, obj_reference_count = 1,
</span><br>
<span class="quotelev1">&gt;        cls_init_file_name = 0x2a95626ce0 &quot;ompi_datatype_module.c&quot;,
</span><br>
<span class="quotelev1">&gt;        cls_init_lineno = 134}, flags = 63011, id = 0, bdt_used = 0,
</span><br>
<span class="quotelev1">&gt; size = 0,
</span><br>
<span class="quotelev1">&gt;      true_lb = 0, true_ub = 0, lb = 0, ub = 0, align = 0, nbElems = 1,
</span><br>
<span class="quotelev1">&gt;      name = &quot;OPAL_UNAVAILABLE&quot;, '\0' &lt;repeats 47 times&gt;, desc =
</span><br>
<span class="quotelev1">&gt; {length = 1,
</span><br>
<span class="quotelev1">&gt;        used = 1, desc = 0x2a95ac4640}, opt_desc = {length = 1, used  
</span><br>
<span class="quotelev1">&gt; = 1,
</span><br>
<span class="quotelev1">&gt;        desc = 0x2a95ac4640}, btypes = {0 &lt;repeats 46 times&gt;}}, id =  
</span><br>
<span class="quotelev1">&gt; 25,
</span><br>
<span class="quotelev1">&gt;    d_f_to_c_index = 18, d_keyhash = 0x0, args = 0x0,
</span><br>
<span class="quotelev1">&gt; packed_description = 0x0,
</span><br>
<span class="quotelev1">&gt;    name = &quot;MPI_COMPLEX&quot;, '\0' &lt;repeats 52 times&gt;}
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The OPAL_UNAVAILABLE looks ominous...?  When I do the same thing with
</span><br>
<span class="quotelev1">&gt; MPI_INTEGER, it doesn't say OPAL_UNAVAILABLE:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; (gdb) p *type
</span><br>
<span class="quotelev1">&gt; $2 = {super = {super = {obj_magic_id = 16046253926196952813,
</span><br>
<span class="quotelev1">&gt;        obj_class = 0x2a95aa0520, obj_reference_count = 1,
</span><br>
<span class="quotelev1">&gt;        cls_init_file_name = 0x2a95626ce0 &quot;ompi_datatype_module.c&quot;,
</span><br>
<span class="quotelev1">&gt;        cls_init_lineno = 131}, flags = 55094, id = 6, bdt_used = 64,
</span><br>
<span class="quotelev1">&gt; size = 4,
</span><br>
<span class="quotelev1">&gt;      true_lb = 0, true_ub = 4, lb = 0, ub = 4, align = 4, nbElems = 1,
</span><br>
<span class="quotelev1">&gt;      name = &quot;OPAL_INT4&quot;, '\0' &lt;repeats 54 times&gt;, desc = {length = 1,
</span><br>
<span class="quotelev1">&gt;        used = 1, desc = 0x2a95777920}, opt_desc = {length = 1, used  
</span><br>
<span class="quotelev1">&gt; = 1,
</span><br>
<span class="quotelev1">&gt;        desc = 0x2a95777920}, btypes = {0, 0, 0, 0, 0, 0, 1,
</span><br>
<span class="quotelev1">&gt;        0 &lt;repeats 39 times&gt;}}, id = 22, d_f_to_c_index = 7, d_keyhash
</span><br>
<span class="quotelev1">&gt; = 0x0,
</span><br>
<span class="quotelev1">&gt;    args = 0x0, packed_description = 0x0,
</span><br>
<span class="quotelev1">&gt;    name = &quot;MPI_INTEGER&quot;, '\0' &lt;repeats 52 times&gt;}
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that configure was happy with all the COMPLEX datatypes;
</span><br>
<span class="quotelev1">&gt; config.out and config.log attached.  This was with gcc 3.4 on RHEL4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;complex-borked.tar.bz2&gt;&lt;ATT7268046.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6493.php">Bernard Secher - SFME/LGLS: "[OMPI devel] pb with --enable-mpi-threads --enable-progress-threads options"</a>
<li><strong>Previous message:</strong> <a href="6491.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<li><strong>In reply to:</strong> <a href="6491.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
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
