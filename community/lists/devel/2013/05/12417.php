<?
$subject_val = "Re: [OMPI devel] Datatype initialization bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 23 03:34:03 2013" -->
<!-- isoreceived="20130523073403" -->
<!-- sent="Thu, 23 May 2013 07:33:54 +0000" -->
<!-- isosent="20130523073354" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Datatype initialization bug?" -->
<!-- id="DF152F4B8E08AE4AAF80927EA5DC03AC18F0D798_at_G01JPEXMBYT02" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="4A1E7199-ABBE-48B5-9320-0AC52EA10C3B_at_icl.utk.edu" -->
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
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-23 03:33:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
<li><strong>Previous message:</strong> <a href="12416.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>In reply to:</strong> <a href="12413.php">George Bosilca: "Re: [OMPI devel] Datatype initialization bug?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Thanks. My colleague has verified your commit.
<br>
This commit will make datatype code a bit simpler...
<br>
<p>Regards,
<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><span class="quotelev1">&gt; Takahiro,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I used your second patch the one that remove the copy of the description in the OMPI level (r28553). Thanks for your help and your patience in investigating this issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 22, 2013, at 02:05 , &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; George,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your quick response.
</span><br>
<span class="quotelev2">&gt; &gt; Your fix seemed good to me last week, but this week my colleague
</span><br>
<span class="quotelev2">&gt; &gt; found it's not sufficient. There are two issues.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (A) We should update opt_desc too.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    In current ompi_datatype_init, we copy OPAL desc to OMPI desc.
</span><br>
<span class="quotelev2">&gt; &gt;    But opt_desc still points to OPAL desc. We should update
</span><br>
<span class="quotelev2">&gt; &gt;    opt_desc to point copied OMPI desc.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (B) Fortran desc is not properly set.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    See the attached result-before.txt. It is the output of the
</span><br>
<span class="quotelev2">&gt; &gt;    attached show_ompi_datatype.c. Fortran basic datatypes,
</span><br>
<span class="quotelev2">&gt; &gt;    like MPI_CHARACTER, MPI_REAL, MPI_DOUBLE_PRECISION, have
</span><br>
<span class="quotelev2">&gt; &gt;    wrong desc_t.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    It is because these datatypes are statically initialized with
</span><br>
<span class="quotelev2">&gt; &gt;    OMPI_DATATYPE_INIT_PREDEFINED_BASIC_TYPE_FORTRAN macro and
</span><br>
<span class="quotelev2">&gt; &gt;    desc and opt_desc point to one element of
</span><br>
<span class="quotelev2">&gt; &gt;    ompi_datatype_predefined_elem_desc array with an OPAL index.
</span><br>
<span class="quotelev2">&gt; &gt;    For example, desc of ompi_mpi_character points to
</span><br>
<span class="quotelev2">&gt; &gt;    ompi_datatype_predefined_elem_desc[OPAL_DATATYPE_INT1].
</span><br>
<span class="quotelev2">&gt; &gt;    If we use ompi_datatype_predefined_elem_desc, we should use
</span><br>
<span class="quotelev2">&gt; &gt;    an OMPI datatype index (OMPI_DATATYPE_MPI_INT8_T etc.) and not
</span><br>
<span class="quotelev2">&gt; &gt;    an OPAL datatype index (OPAL_DATATYPE_INT1 etc.).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Therefore the condition (pDesc != datatype-&gt;super.desc.desc)
</span><br>
<span class="quotelev2">&gt; &gt;    in ompi_datatype_init becomes true and we copy desc from the
</span><br>
<span class="quotelev2">&gt; &gt;    wrong part currently.
</span><br>
<span class="quotelev2">&gt; &gt;    i.e. copy from ompi_datatype_predefined_elem_desc[OPAL_DATATYPE_INT1]
</span><br>
<span class="quotelev2">&gt; &gt;              to   ompi_datatype_predefined_elem_desc[OMPI_DATATYPE_MPI_CHARACTER].
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The initialization part of ompi_mpi_character in
</span><br>
<span class="quotelev2">&gt; &gt; ompi_datatype_internal.h and ompi_datatype_module.c:
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ompi_predefined_datatype_t ompi_mpi_character =      OMPI_DATATYPE_INIT_PREDEFINED_BASIC_TYPE_FORTRAN (INT, CHARACTER, 1, OPAL_ALIGNMENT_CHAR, 0 );
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #define OMPI_DATATYPE_INITIALIZER_FORTRAN( TYPE, NAME, SIZE, ALIGN, FLAGS )          \
</span><br>
<span class="quotelev2">&gt; &gt;    {                                                                                \
</span><br>
<span class="quotelev2">&gt; &gt;        OPAL_OBJ_STATIC_INIT(opal_datatype_t),                                       \
</span><br>
<span class="quotelev2">&gt; &gt;        OPAL_DATATYPE_FLAG_BASIC |                                                   \
</span><br>
<span class="quotelev2">&gt; &gt;            OMPI_DATATYPE_FLAG_PREDEFINED |                                          \
</span><br>
<span class="quotelev2">&gt; &gt;            OMPI_DATATYPE_FLAG_DATA_FORTRAN | (FLAGS) /*flag*/,                      \
</span><br>
<span class="quotelev2">&gt; &gt;        OPAL_DATATYPE_ ## TYPE ## SIZE /*id*/,                                       \
</span><br>
<span class="quotelev2">&gt; &gt;        (((uint32_t)1)&lt;&lt;(OPAL_DATATYPE_ ## TYPE ## SIZE)) /*bdt_used*/,              \
</span><br>
<span class="quotelev2">&gt; &gt;        SIZE /*size*/,                                                               \
</span><br>
<span class="quotelev2">&gt; &gt;        0 /*true_lb*/, SIZE /*true_ub*/, 0 /*lb*/, SIZE /*ub*/,                      \
</span><br>
<span class="quotelev2">&gt; &gt;        (ALIGN) /*align*/,                                                           \
</span><br>
<span class="quotelev2">&gt; &gt;        1 /*nbElems*/,                                                               \
</span><br>
<span class="quotelev2">&gt; &gt;        OPAL_DATATYPE_INIT_NAME(TYPE ## SIZE) /*name*/,                              \
</span><br>
<span class="quotelev2">&gt; &gt;        OMPI_DATATYPE_INIT_DESC_PREDEFINED(TYPE, SIZE) /*desc*/,                     \
</span><br>
<span class="quotelev2">&gt; &gt;        OMPI_DATATYPE_INIT_DESC_PREDEFINED(TYPE, SIZE) /*opt_desc*/,                 \
</span><br>
<span class="quotelev2">&gt; &gt;        OPAL_DATATYPE_INIT_BTYPES_ARRAY_ ## TYPE ## SIZE /*btypes*/                  \
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #define OMPI_DATATYPE_INIT_DESC_PREDEFINED(TYPE, SIZE)                               \
</span><br>
<span class="quotelev2">&gt; &gt;    {                                                                                \
</span><br>
<span class="quotelev2">&gt; &gt;        1 /*length*/, 1 /*used*/,                                                    \
</span><br>
<span class="quotelev2">&gt; &gt;        &amp;(ompi_datatype_predefined_elem_desc[2 * OPAL_DATATYPE_ ## TYPE ## SIZE]) /*desc*/ \
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; int32_t ompi_datatype_init( void )
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;    int32_t i;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    for( i = 0; i &lt; OMPI_DATATYPE_MPI_MAX_PREDEFINED; i++ ) {
</span><br>
<span class="quotelev2">&gt; &gt;        ompi_datatype_t* datatype = (ompi_datatype_t*)ompi_datatype_basicDatatypes[i];
</span><br>
<span class="quotelev2">&gt; &gt;        dt_elem_desc_t* pDesc;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        if( 0 == datatype-&gt;super.size ) continue;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        /**
</span><br>
<span class="quotelev2">&gt; &gt;         * Most of the OMPI datatypes have been initialized with the basic desc of the
</span><br>
<span class="quotelev2">&gt; &gt;         * OPAL datatypes. Thus don't modify the desc, instead rebase the desc back into
</span><br>
<span class="quotelev2">&gt; &gt;         * the OMPI predefined_elem_desc and update the fields there.
</span><br>
<span class="quotelev2">&gt; &gt;         */
</span><br>
<span class="quotelev2">&gt; &gt;        pDesc = &amp;ompi_datatype_predefined_elem_desc[2 * i];
</span><br>
<span class="quotelev2">&gt; &gt;        if( pDesc != datatype-&gt;super.desc.desc ) {
</span><br>
<span class="quotelev2">&gt; &gt;            memcpy(pDesc, datatype-&gt;super.desc.desc, 2 * sizeof(dt_elem_desc_t));
</span><br>
<span class="quotelev2">&gt; &gt;            datatype-&gt;super.desc.desc = pDesc;
</span><br>
<span class="quotelev2">&gt; &gt;        } else {
</span><br>
<span class="quotelev2">&gt; &gt;            datatype-&gt;super.desc.desc[0].elem.common.flags = OPAL_DATATYPE_FLAG_PREDEFINED |
</span><br>
<span class="quotelev2">&gt; &gt;                                                             OPAL_DATATYPE_FLAG_DATA |
</span><br>
<span class="quotelev2">&gt; &gt;                                                             OPAL_DATATYPE_FLAG_CONTIGUOUS |
</span><br>
<span class="quotelev2">&gt; &gt;                                                             OPAL_DATATYPE_FLAG_NO_GAPS;
</span><br>
<span class="quotelev2">&gt; &gt;            datatype-&gt;super.desc.desc[0].elem.common.type  = i;
</span><br>
<span class="quotelev2">&gt; &gt; ....
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Do you intend to it goes to the else-block in ompi_datatype_init
</span><br>
<span class="quotelev2">&gt; &gt; for Fortran datatypes? If so, we should use an OMPI index in
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_DATATYPE_INIT_DESC_PREDEFINED.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; But in the else-block, desc[0].elem.common.type is set to an OMPI
</span><br>
<span class="quotelev2">&gt; &gt; datatype index. And it seems that this 'type' is treated as an
</span><br>
<span class="quotelev2">&gt; &gt; OPAL datatype index in other parts. 
</span><br>
<span class="quotelev2">&gt; &gt; # OMPI_DATATYPE_MPI_CHARACTER and OPAL_DATATYPE_COMPLEX8 has
</span><br>
<span class="quotelev2">&gt; &gt; # same value (0x13) but how to distinguish them?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I wonder whether Fortran datatypes really need separate desc.
</span><br>
<span class="quotelev2">&gt; &gt; Though OPAL does not have *identical* datatypes, it always has
</span><br>
<span class="quotelev2">&gt; &gt; *corresponding* datatypes. It is obvious because we currently
</span><br>
<span class="quotelev2">&gt; &gt; translate an OMPI Fortran datatype to a corresponding OPAL
</span><br>
<span class="quotelev2">&gt; &gt; datatype index in OMPI_DATATYPE_INIT_DESC_PREDEFINED as
</span><br>
<span class="quotelev2">&gt; &gt; &quot;OPAL_DATATYPE_ ## TYPE ## SIZE&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If Fortran datatypes don't need separate desc, this issue
</span><br>
<span class="quotelev2">&gt; &gt; may be fixed by my attached datatype-init-1.patch.
</span><br>
<span class="quotelev2">&gt; &gt; It also fixes the opt_desc issue described first.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Furthermore, do we need to copy desc for OMPI datatypes?
</span><br>
<span class="quotelev2">&gt; &gt; If not, use my attached datatype-init-2.patch instead.
</span><br>
<span class="quotelev2">&gt; &gt; It don't copy desc and OMPI desc points OPAL desc.
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure this is a correct solution.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The attached result-after.txt is the output of the attached
</span><br>
<span class="quotelev2">&gt; &gt; show_ompi_datatype.c with my patch. I think this output is
</span><br>
<span class="quotelev2">&gt; &gt; correct.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Takahiro Kawashima,
</span><br>
<span class="quotelev2">&gt; &gt; MPI development team,
</span><br>
<span class="quotelev2">&gt; &gt; Fujitsu
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Takahiro,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nice catch, I really wonder how this one survived for soo long. I pushed a patch in r28535 addressing this issue. It is not the best solution, but it provide an easy way to address the issue.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; A little bit of history. A datatype is composed by (let's keep it short) 2 component, a high-level description containing among others the size and the name of the datatype and a low level description (the desc_t part) containing the basic predefined elements in the datatype. As most of the predefined datatypes defined in the MPI layer are synonyms to some basic predefined datatypes (such as the equivalent POSIX types MPI_INT32_T), the design of the datatype allowed for the sharing of the desc_t part between datatypes. This approach allows us to have similar datatypes (MPI_INT and MPI_INT32_T) with different names but with the same backend internal description. However, when we split the datatype engine in two, we duplicate this common description (in OPAL and OMPI). The OMPI desc_t was pointing to OPAL desc_t for almost everything … except the datatypes that were not defined by OPAL such as the Fortran one. This turned the management of the common desc_t into a ni!
</span><br>
<span class="quotelev1">&gt;  ghtmare … with the effect you noticed few days ago. Too bad for the optimization part. I now duplicate the desc_t between the two layers, and all OMPI datatypes have now their own desc_t.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for finding and analyzing so deeply this issue.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  George.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 16, 2013, at 12:04 , KAWASHIMA Takahiro &lt;rivis.kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm reading the datatype code in Open MPI trunk and have a question.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; A bit long.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; See the following program.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; struct opal_datatype_t;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; extern int opal_init(int *pargc, char ***pargv);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; extern int opal_finalize(void);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; extern void opal_datatype_dump(struct opal_datatype_t *type);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; extern struct opal_datatype_t opal_datatype_int8;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   opal_init(NULL, NULL);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   opal_datatype_dump(&amp;opal_datatype_int8);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   opal_datatype_dump(&amp;opal_datatype_int8);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   opal_finalize();
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   return 0;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; All variables/functions declared as 'extern' are defined in OPAL.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal_datatype_dump() function outputs internal data of a datatype.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I expect the same output on two opal_datatype_dump() calls.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But when I run it on an x86_64 machine, I get the following output.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi-trunk/opal-datatype-dump &amp;&amp; ompiexec -n 1 ompi-trunk/opal-datatype-dump
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [ppc.rivis.jp:27886] Datatype 0x600c60[OPAL_INT8] size 8 align 8 id 7 length 1 used 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; true_lb 0 true_ub 8 (true_extent 8) lb 0 ub 8 (extent 8)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; nbElems 1 loops 0 flags 136 (commited contiguous )-cC---P-DB-[---][---]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  contain OPAL_INT8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --C---P-D--[---][---]      OPAL_INT8 count 1 disp 0x0 (0) extent 8 (size 8)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; No optimized description
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [ppc.rivis.jp:27886] Datatype 0x600c60[OPAL_INT8] size 8 align 8 id 7 length 1 used 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; true_lb 0 true_ub 8 (true_extent 8) lb 0 ub 8 (extent 8)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; nbElems 1 loops 0 flags 136 (commited contiguous )-cC---P-DB-[---][---]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  contain OPAL_INT8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --C---P-D--[---][---]               count 1 disp 0x0 (0) extent 8 (size 8971008)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; No optimized description
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The former output is what I expected. But the latter one is not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; identical to the former one and its content datatype has no name
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and a very large size.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This line is output in opal_datatype_dump_data_desc() function in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal/datatype/opal_datatype_dump.c file. It refers
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal_datatype_basicDatatypes[pDesc-&gt;elem.common.type]-&gt;name and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal_datatype_basicDatatypes[pDesc-&gt;elem.common.type]-&gt;size for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the content datatype.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In this case, pDesc-&gt;elem.common.type is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal_datatype_int8.desc.desc[0].elem.common.type and is initialized to 7
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in opal_datatype_init() function in opal/datatype/opal_datatype_module.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; file, which is called during opal_init() function.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal_datatype_int8.desc.desc points &amp;opal_datatype_predefined_elem_desc[7*2].
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But if we call MPI_Init() function, the value is overwritten.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi_datatype_init() function in ompi/datatype/ompi_datatype_module.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; file, which is called during MPI_Init() function, has similar
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; procedure to initialize OMPI datatypes.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On initializing ompi_mpi_aint in it, ompi_mpi_aint.dt.super.desc.desc
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; points &amp;opal_datatype_predefined_elem_desc[7*2], which is also pointed
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; by opal_datatype_int8, because ompi_mpi_aint is defined by
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OMPI_DATATYPE_INIT_PREDEFINED_BASIC_TYPE macro and it uses
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OPAL_DATATYPE_INITIALIZER_INT8 macro. So
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal_datatype_int8.desc.desc[0].elem.common.type is overwritten
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to 37.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Therefore in the second opal_datatype_dump() function call in my
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; program, opal_datatype_basicDatatypes[37] is accessed.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But the array length of opal_datatype_basicDatatypes is 25.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Summarize:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; static initializer:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   opal_datatype_predefined_elem_desc[25] = {{0, ...}, ...};
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   opal_datatype_int8.desc.desc = &amp;opal_datatype_predefined_elem_desc[7*2];
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   ompi_mpi_aint.dt.super.desc.desc = &amp;opal_datatype_predefined_elem_desc[7*2];
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal_init:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   opal_datatype_int8.desc.desc.elem.common.type = 7;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Init:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   ompi_mpi_aint.dt.super.desc.desc.elem.common.type = 37;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal_datatype_dump:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   access to opal_datatype_predefined_elem_desc[37]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; While opal_datatype_dump() function might not be called from
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; user's programs, breaking opal_datatype_predefined_elem_desc
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; array in ompi_datatype_init() function is not good.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Though the above is described for opal_datatype_int8 and ompi_mpi_aint,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the same thing happens to other datatypes.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Though I tried to fix this problem, I could not figure out the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; correct solution.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - The first loop in ompi_datatype_init() function should be removed?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   But OMPI Fortran datatypes should be initialized in it?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - All OMPI datatypes should point ompi_datatype_predefined_elem_desc
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   array? But having same 'type' value in OPAL datatypes and OMPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   datatypes is allowed?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
<li><strong>Previous message:</strong> <a href="12416.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>In reply to:</strong> <a href="12413.php">George Bosilca: "Re: [OMPI devel] Datatype initialization bug?"</a>
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
