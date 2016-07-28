<?
$subject_val = "Re: [OMPI devel] Datatype initialization bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 17 09:20:59 2013" -->
<!-- isoreceived="20130517132059" -->
<!-- sent="Fri, 17 May 2013 09:20:54 -0400" -->
<!-- isosent="20130517132054" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Datatype initialization bug?" -->
<!-- id="B907765D-886A-41C0-B01F-82C7C0DF659C_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20130517010435.2b70516c2fbbeba75f88a3fc_at_nifty.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Datatype initialization bug?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-17 09:20:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12395.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: dead code removal"</a>
<li><strong>Previous message:</strong> <a href="12393.php">KAWASHIMA Takahiro: "[OMPI devel] Datatype initialization bug?"</a>
<li><strong>In reply to:</strong> <a href="12393.php">KAWASHIMA Takahiro: "[OMPI devel] Datatype initialization bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12398.php">Kawashima, Takahiro: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>Reply:</strong> <a href="12398.php">Kawashima, Takahiro: "Re: [OMPI devel] Datatype initialization bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Takahiro,
<br>
<p>Nice catch, I really wonder how this one survived for soo long. I pushed a patch in r28535 addressing this issue. It is not the best solution, but it provide an easy way to address the issue.
<br>
<p>A little bit of history. A datatype is composed by (let's keep it short) 2 component, a high-level description containing among others the size and the name of the datatype and a low level description (the desc_t part) containing the basic predefined elements in the datatype. As most of the predefined datatypes defined in the MPI layer are synonyms to some basic predefined datatypes (such as the equivalent POSIX types MPI_INT32_T), the design of the datatype allowed for the sharing of the desc_t part between datatypes. This approach allows us to have similar datatypes (MPI_INT and MPI_INT32_T) with different names but with the same backend internal description. However, when we split the datatype engine in two, we duplicate this common description (in OPAL and OMPI). The OMPI desc_t was pointing to OPAL desc_t for almost everything &#133; except the datatypes that were not defined by OPAL such as the Fortran one. This turned the management of the common desc_t into a nightmare &#133; with the effect you noticed few da<br>
ys ago. Too bad for the optimization part. I now duplicate the desc_t between the two layers, and all OMPI datatypes have now their own desc_t.
<br>
<p>Thanks for finding and analyzing so deeply this issue.
<br>
&nbsp;&nbsp;George.
<br>
<p><p><p><p>On May 16, 2013, at 12:04 , KAWASHIMA Takahiro &lt;rivis.kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm reading the datatype code in Open MPI trunk and have a question.
</span><br>
<span class="quotelev1">&gt; A bit long.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See the following program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct opal_datatype_t;
</span><br>
<span class="quotelev1">&gt; extern int opal_init(int *pargc, char ***pargv);
</span><br>
<span class="quotelev1">&gt; extern int opal_finalize(void);
</span><br>
<span class="quotelev1">&gt; extern void opal_datatype_dump(struct opal_datatype_t *type);
</span><br>
<span class="quotelev1">&gt; extern struct opal_datatype_t opal_datatype_int8;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    opal_init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;    opal_datatype_dump(&amp;opal_datatype_int8);
</span><br>
<span class="quotelev1">&gt;    MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;    opal_datatype_dump(&amp;opal_datatype_int8);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    opal_finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All variables/functions declared as 'extern' are defined in OPAL.
</span><br>
<span class="quotelev1">&gt; opal_datatype_dump() function outputs internal data of a datatype.
</span><br>
<span class="quotelev1">&gt; I expect the same output on two opal_datatype_dump() calls.
</span><br>
<span class="quotelev1">&gt; But when I run it on an x86_64 machine, I get the following output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ompi-trunk/opal-datatype-dump &amp;&amp; ompiexec -n 1 ompi-trunk/opal-datatype-dump
</span><br>
<span class="quotelev1">&gt; [ppc.rivis.jp:27886] Datatype 0x600c60[OPAL_INT8] size 8 align 8 id 7 length 1 used 1
</span><br>
<span class="quotelev1">&gt; true_lb 0 true_ub 8 (true_extent 8) lb 0 ub 8 (extent 8)
</span><br>
<span class="quotelev1">&gt; nbElems 1 loops 0 flags 136 (commited contiguous )-cC---P-DB-[---][---]
</span><br>
<span class="quotelev1">&gt;   contain OPAL_INT8
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]      OPAL_INT8 count 1 disp 0x0 (0) extent 8 (size 8)
</span><br>
<span class="quotelev1">&gt; No optimized description
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ppc.rivis.jp:27886] Datatype 0x600c60[OPAL_INT8] size 8 align 8 id 7 length 1 used 1
</span><br>
<span class="quotelev1">&gt; true_lb 0 true_ub 8 (true_extent 8) lb 0 ub 8 (extent 8)
</span><br>
<span class="quotelev1">&gt; nbElems 1 loops 0 flags 136 (commited contiguous )-cC---P-DB-[---][---]
</span><br>
<span class="quotelev1">&gt;   contain OPAL_INT8
</span><br>
<span class="quotelev1">&gt; --C---P-D--[---][---]               count 1 disp 0x0 (0) extent 8 (size 8971008)
</span><br>
<span class="quotelev1">&gt; No optimized description
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The former output is what I expected. But the latter one is not
</span><br>
<span class="quotelev1">&gt; identical to the former one and its content datatype has no name
</span><br>
<span class="quotelev1">&gt; and a very large size.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This line is output in opal_datatype_dump_data_desc() function in
</span><br>
<span class="quotelev1">&gt; opal/datatype/opal_datatype_dump.c file. It refers
</span><br>
<span class="quotelev1">&gt; opal_datatype_basicDatatypes[pDesc-&gt;elem.common.type]-&gt;name and
</span><br>
<span class="quotelev1">&gt; opal_datatype_basicDatatypes[pDesc-&gt;elem.common.type]-&gt;size for
</span><br>
<span class="quotelev1">&gt; the content datatype.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case, pDesc-&gt;elem.common.type is
</span><br>
<span class="quotelev1">&gt; opal_datatype_int8.desc.desc[0].elem.common.type and is initialized to 7
</span><br>
<span class="quotelev1">&gt; in opal_datatype_init() function in opal/datatype/opal_datatype_module.c
</span><br>
<span class="quotelev1">&gt; file, which is called during opal_init() function.
</span><br>
<span class="quotelev1">&gt; opal_datatype_int8.desc.desc points &amp;opal_datatype_predefined_elem_desc[7*2].
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But if we call MPI_Init() function, the value is overwritten.
</span><br>
<span class="quotelev1">&gt; ompi_datatype_init() function in ompi/datatype/ompi_datatype_module.c
</span><br>
<span class="quotelev1">&gt; file, which is called during MPI_Init() function, has similar
</span><br>
<span class="quotelev1">&gt; procedure to initialize OMPI datatypes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On initializing ompi_mpi_aint in it, ompi_mpi_aint.dt.super.desc.desc
</span><br>
<span class="quotelev1">&gt; points &amp;opal_datatype_predefined_elem_desc[7*2], which is also pointed
</span><br>
<span class="quotelev1">&gt; by opal_datatype_int8, because ompi_mpi_aint is defined by
</span><br>
<span class="quotelev1">&gt; OMPI_DATATYPE_INIT_PREDEFINED_BASIC_TYPE macro and it uses
</span><br>
<span class="quotelev1">&gt; OPAL_DATATYPE_INITIALIZER_INT8 macro. So
</span><br>
<span class="quotelev1">&gt; opal_datatype_int8.desc.desc[0].elem.common.type is overwritten
</span><br>
<span class="quotelev1">&gt; to 37.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Therefore in the second opal_datatype_dump() function call in my
</span><br>
<span class="quotelev1">&gt; program, opal_datatype_basicDatatypes[37] is accessed.
</span><br>
<span class="quotelev1">&gt; But the array length of opal_datatype_basicDatatypes is 25.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summarize:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  static initializer:
</span><br>
<span class="quotelev1">&gt;    opal_datatype_predefined_elem_desc[25] = {{0, ...}, ...};
</span><br>
<span class="quotelev1">&gt;    opal_datatype_int8.desc.desc = &amp;opal_datatype_predefined_elem_desc[7*2];
</span><br>
<span class="quotelev1">&gt;    ompi_mpi_aint.dt.super.desc.desc = &amp;opal_datatype_predefined_elem_desc[7*2];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  opal_init:
</span><br>
<span class="quotelev1">&gt;    opal_datatype_int8.desc.desc.elem.common.type = 7;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init:
</span><br>
<span class="quotelev1">&gt;    ompi_mpi_aint.dt.super.desc.desc.elem.common.type = 37;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  opal_datatype_dump:
</span><br>
<span class="quotelev1">&gt;    access to opal_datatype_predefined_elem_desc[37]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While opal_datatype_dump() function might not be called from
</span><br>
<span class="quotelev1">&gt; user's programs, breaking opal_datatype_predefined_elem_desc
</span><br>
<span class="quotelev1">&gt; array in ompi_datatype_init() function is not good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Though the above is described for opal_datatype_int8 and ompi_mpi_aint,
</span><br>
<span class="quotelev1">&gt; the same thing happens to other datatypes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Though I tried to fix this problem, I could not figure out the
</span><br>
<span class="quotelev1">&gt; correct solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - The first loop in ompi_datatype_init() function should be removed?
</span><br>
<span class="quotelev1">&gt;    But OMPI Fortran datatypes should be initialized in it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - All OMPI datatypes should point ompi_datatype_predefined_elem_desc
</span><br>
<span class="quotelev1">&gt;    array? But having same 'type' value in OPAL datatypes and OMPI
</span><br>
<span class="quotelev1">&gt;    datatypes is allowed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; KAWASHIMA Takahiro
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12395.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: dead code removal"</a>
<li><strong>Previous message:</strong> <a href="12393.php">KAWASHIMA Takahiro: "[OMPI devel] Datatype initialization bug?"</a>
<li><strong>In reply to:</strong> <a href="12393.php">KAWASHIMA Takahiro: "[OMPI devel] Datatype initialization bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12398.php">Kawashima, Takahiro: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>Reply:</strong> <a href="12398.php">Kawashima, Takahiro: "Re: [OMPI devel] Datatype initialization bug?"</a>
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
