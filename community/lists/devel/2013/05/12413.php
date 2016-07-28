<?
$subject_val = "Re: [OMPI devel] Datatype initialization bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 22 14:36:56 2013" -->
<!-- isoreceived="20130522183656" -->
<!-- sent="Wed, 22 May 2013 14:36:48 -0400" -->
<!-- isosent="20130522183648" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Datatype initialization bug?" -->
<!-- id="4A1E7199-ABBE-48B5-9320-0AC52EA10C3B_at_icl.utk.edu" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="DF152F4B8E08AE4AAF80927EA5DC03AC18F07324_at_G01JPEXMBYT02" -->
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
<strong>Date:</strong> 2013-05-22 14:36:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12414.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>Previous message:</strong> <a href="12412.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
<li><strong>In reply to:</strong> <a href="12398.php">Kawashima, Takahiro: "Re: [OMPI devel] Datatype initialization bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12417.php">Kawashima, Takahiro: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>Reply:</strong> <a href="12417.php">Kawashima, Takahiro: "Re: [OMPI devel] Datatype initialization bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Takahiro,
<br>
<p>I used your second patch the one that remove the copy of the description in the OMPI level (r28553). Thanks for your help and your patience in investigating this issues.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On May 22, 2013, at 02:05 , &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your quick response.
</span><br>
<span class="quotelev1">&gt; Your fix seemed good to me last week, but this week my colleague
</span><br>
<span class="quotelev1">&gt; found it's not sufficient. There are two issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (A) We should update opt_desc too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    In current ompi_datatype_init, we copy OPAL desc to OMPI desc.
</span><br>
<span class="quotelev1">&gt;    But opt_desc still points to OPAL desc. We should update
</span><br>
<span class="quotelev1">&gt;    opt_desc to point copied OMPI desc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (B) Fortran desc is not properly set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    See the attached result-before.txt. It is the output of the
</span><br>
<span class="quotelev1">&gt;    attached show_ompi_datatype.c. Fortran basic datatypes,
</span><br>
<span class="quotelev1">&gt;    like MPI_CHARACTER, MPI_REAL, MPI_DOUBLE_PRECISION, have
</span><br>
<span class="quotelev1">&gt;    wrong desc_t.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    It is because these datatypes are statically initialized with
</span><br>
<span class="quotelev1">&gt;    OMPI_DATATYPE_INIT_PREDEFINED_BASIC_TYPE_FORTRAN macro and
</span><br>
<span class="quotelev1">&gt;    desc and opt_desc point to one element of
</span><br>
<span class="quotelev1">&gt;    ompi_datatype_predefined_elem_desc array with an OPAL index.
</span><br>
<span class="quotelev1">&gt;    For example, desc of ompi_mpi_character points to
</span><br>
<span class="quotelev1">&gt;    ompi_datatype_predefined_elem_desc[OPAL_DATATYPE_INT1].
</span><br>
<span class="quotelev1">&gt;    If we use ompi_datatype_predefined_elem_desc, we should use
</span><br>
<span class="quotelev1">&gt;    an OMPI datatype index (OMPI_DATATYPE_MPI_INT8_T etc.) and not
</span><br>
<span class="quotelev1">&gt;    an OPAL datatype index (OPAL_DATATYPE_INT1 etc.).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Therefore the condition (pDesc != datatype-&gt;super.desc.desc)
</span><br>
<span class="quotelev1">&gt;    in ompi_datatype_init becomes true and we copy desc from the
</span><br>
<span class="quotelev1">&gt;    wrong part currently.
</span><br>
<span class="quotelev1">&gt;    i.e. copy from ompi_datatype_predefined_elem_desc[OPAL_DATATYPE_INT1]
</span><br>
<span class="quotelev1">&gt;              to   ompi_datatype_predefined_elem_desc[OMPI_DATATYPE_MPI_CHARACTER].
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The initialization part of ompi_mpi_character in
</span><br>
<span class="quotelev1">&gt; ompi_datatype_internal.h and ompi_datatype_module.c:
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ompi_predefined_datatype_t ompi_mpi_character =      OMPI_DATATYPE_INIT_PREDEFINED_BASIC_TYPE_FORTRAN (INT, CHARACTER, 1, OPAL_ALIGNMENT_CHAR, 0 );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define OMPI_DATATYPE_INITIALIZER_FORTRAN( TYPE, NAME, SIZE, ALIGN, FLAGS )          \
</span><br>
<span class="quotelev1">&gt;    {                                                                                \
</span><br>
<span class="quotelev1">&gt;        OPAL_OBJ_STATIC_INIT(opal_datatype_t),                                       \
</span><br>
<span class="quotelev1">&gt;        OPAL_DATATYPE_FLAG_BASIC |                                                   \
</span><br>
<span class="quotelev1">&gt;            OMPI_DATATYPE_FLAG_PREDEFINED |                                          \
</span><br>
<span class="quotelev1">&gt;            OMPI_DATATYPE_FLAG_DATA_FORTRAN | (FLAGS) /*flag*/,                      \
</span><br>
<span class="quotelev1">&gt;        OPAL_DATATYPE_ ## TYPE ## SIZE /*id*/,                                       \
</span><br>
<span class="quotelev1">&gt;        (((uint32_t)1)&lt;&lt;(OPAL_DATATYPE_ ## TYPE ## SIZE)) /*bdt_used*/,              \
</span><br>
<span class="quotelev1">&gt;        SIZE /*size*/,                                                               \
</span><br>
<span class="quotelev1">&gt;        0 /*true_lb*/, SIZE /*true_ub*/, 0 /*lb*/, SIZE /*ub*/,                      \
</span><br>
<span class="quotelev1">&gt;        (ALIGN) /*align*/,                                                           \
</span><br>
<span class="quotelev1">&gt;        1 /*nbElems*/,                                                               \
</span><br>
<span class="quotelev1">&gt;        OPAL_DATATYPE_INIT_NAME(TYPE ## SIZE) /*name*/,                              \
</span><br>
<span class="quotelev1">&gt;        OMPI_DATATYPE_INIT_DESC_PREDEFINED(TYPE, SIZE) /*desc*/,                     \
</span><br>
<span class="quotelev1">&gt;        OMPI_DATATYPE_INIT_DESC_PREDEFINED(TYPE, SIZE) /*opt_desc*/,                 \
</span><br>
<span class="quotelev1">&gt;        OPAL_DATATYPE_INIT_BTYPES_ARRAY_ ## TYPE ## SIZE /*btypes*/                  \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define OMPI_DATATYPE_INIT_DESC_PREDEFINED(TYPE, SIZE)                               \
</span><br>
<span class="quotelev1">&gt;    {                                                                                \
</span><br>
<span class="quotelev1">&gt;        1 /*length*/, 1 /*used*/,                                                    \
</span><br>
<span class="quotelev1">&gt;        &amp;(ompi_datatype_predefined_elem_desc[2 * OPAL_DATATYPE_ ## TYPE ## SIZE]) /*desc*/ \
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int32_t ompi_datatype_init( void )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int32_t i;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    for( i = 0; i &lt; OMPI_DATATYPE_MPI_MAX_PREDEFINED; i++ ) {
</span><br>
<span class="quotelev1">&gt;        ompi_datatype_t* datatype = (ompi_datatype_t*)ompi_datatype_basicDatatypes[i];
</span><br>
<span class="quotelev1">&gt;        dt_elem_desc_t* pDesc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        if( 0 == datatype-&gt;super.size ) continue;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        /**
</span><br>
<span class="quotelev1">&gt;         * Most of the OMPI datatypes have been initialized with the basic desc of the
</span><br>
<span class="quotelev1">&gt;         * OPAL datatypes. Thus don't modify the desc, instead rebase the desc back into
</span><br>
<span class="quotelev1">&gt;         * the OMPI predefined_elem_desc and update the fields there.
</span><br>
<span class="quotelev1">&gt;         */
</span><br>
<span class="quotelev1">&gt;        pDesc = &amp;ompi_datatype_predefined_elem_desc[2 * i];
</span><br>
<span class="quotelev1">&gt;        if( pDesc != datatype-&gt;super.desc.desc ) {
</span><br>
<span class="quotelev1">&gt;            memcpy(pDesc, datatype-&gt;super.desc.desc, 2 * sizeof(dt_elem_desc_t));
</span><br>
<span class="quotelev1">&gt;            datatype-&gt;super.desc.desc = pDesc;
</span><br>
<span class="quotelev1">&gt;        } else {
</span><br>
<span class="quotelev1">&gt;            datatype-&gt;super.desc.desc[0].elem.common.flags = OPAL_DATATYPE_FLAG_PREDEFINED |
</span><br>
<span class="quotelev1">&gt;                                                             OPAL_DATATYPE_FLAG_DATA |
</span><br>
<span class="quotelev1">&gt;                                                             OPAL_DATATYPE_FLAG_CONTIGUOUS |
</span><br>
<span class="quotelev1">&gt;                                                             OPAL_DATATYPE_FLAG_NO_GAPS;
</span><br>
<span class="quotelev1">&gt;            datatype-&gt;super.desc.desc[0].elem.common.type  = i;
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you intend to it goes to the else-block in ompi_datatype_init
</span><br>
<span class="quotelev1">&gt; for Fortran datatypes? If so, we should use an OMPI index in
</span><br>
<span class="quotelev1">&gt; OMPI_DATATYPE_INIT_DESC_PREDEFINED.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But in the else-block, desc[0].elem.common.type is set to an OMPI
</span><br>
<span class="quotelev1">&gt; datatype index. And it seems that this 'type' is treated as an
</span><br>
<span class="quotelev1">&gt; OPAL datatype index in other parts. 
</span><br>
<span class="quotelev1">&gt; # OMPI_DATATYPE_MPI_CHARACTER and OPAL_DATATYPE_COMPLEX8 has
</span><br>
<span class="quotelev1">&gt; # same value (0x13) but how to distinguish them?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder whether Fortran datatypes really need separate desc.
</span><br>
<span class="quotelev1">&gt; Though OPAL does not have *identical* datatypes, it always has
</span><br>
<span class="quotelev1">&gt; *corresponding* datatypes. It is obvious because we currently
</span><br>
<span class="quotelev1">&gt; translate an OMPI Fortran datatype to a corresponding OPAL
</span><br>
<span class="quotelev1">&gt; datatype index in OMPI_DATATYPE_INIT_DESC_PREDEFINED as
</span><br>
<span class="quotelev1">&gt; &quot;OPAL_DATATYPE_ ## TYPE ## SIZE&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If Fortran datatypes don't need separate desc, this issue
</span><br>
<span class="quotelev1">&gt; may be fixed by my attached datatype-init-1.patch.
</span><br>
<span class="quotelev1">&gt; It also fixes the opt_desc issue described first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Furthermore, do we need to copy desc for OMPI datatypes?
</span><br>
<span class="quotelev1">&gt; If not, use my attached datatype-init-2.patch instead.
</span><br>
<span class="quotelev1">&gt; It don't copy desc and OMPI desc points OPAL desc.
</span><br>
<span class="quotelev1">&gt; I'm not sure this is a correct solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached result-after.txt is the output of the attached
</span><br>
<span class="quotelev1">&gt; show_ompi_datatype.c with my patch. I think this output is
</span><br>
<span class="quotelev1">&gt; correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Takahiro,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Nice catch, I really wonder how this one survived for soo long. I pushed a patch in r28535 addressing this issue. It is not the best solution, but it provide an easy way to address the issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A little bit of history. A datatype is composed by (let's keep it short) 2 component, a high-level description containing among others the size and the name of the datatype and a low level description (the desc_t part) containing the basic predefined elements in the datatype. As most of the predefined datatypes defined in the MPI layer are synonyms to some basic predefined datatypes (such as the equivalent POSIX types MPI_INT32_T), the design of the datatype allowed for the sharing of the desc_t part between datatypes. This approach allows us to have similar datatypes (MPI_INT and MPI_INT32_T) with different names but with the same backend internal description. However, when we split the datatype engine in two, we duplicate this common description (in OPAL and OMPI). The OMPI desc_t was pointing to OPAL desc_t for almost everything … except the datatypes that were not defined by OPAL such as the Fortran one. This turned the management of the common desc_t into a nightmare … with the effect y</span><br>
ou noticed few days ago. Too bad for the optimization part. I now duplicate the desc_t between the two layers, and all OMPI datatypes have now their own desc_t.
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for finding and analyzing so deeply this issue.
</span><br>
<span class="quotelev2">&gt;&gt;  George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 16, 2013, at 12:04 , KAWASHIMA Takahiro &lt;rivis.kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm reading the datatype code in Open MPI trunk and have a question.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A bit long.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See the following program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; struct opal_datatype_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extern int opal_init(int *pargc, char ***pargv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extern int opal_finalize(void);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extern void opal_datatype_dump(struct opal_datatype_t *type);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extern struct opal_datatype_t opal_datatype_int8;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   opal_init(NULL, NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   opal_datatype_dump(&amp;opal_datatype_int8);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   opal_datatype_dump(&amp;opal_datatype_int8);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   opal_finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All variables/functions declared as 'extern' are defined in OPAL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_datatype_dump() function outputs internal data of a datatype.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I expect the same output on two opal_datatype_dump() calls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But when I run it on an x86_64 machine, I get the following output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi-trunk/opal-datatype-dump &amp;&amp; ompiexec -n 1 ompi-trunk/opal-datatype-dump
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ppc.rivis.jp:27886] Datatype 0x600c60[OPAL_INT8] size 8 align 8 id 7 length 1 used 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; true_lb 0 true_ub 8 (true_extent 8) lb 0 ub 8 (extent 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nbElems 1 loops 0 flags 136 (commited contiguous )-cC---P-DB-[---][---]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  contain OPAL_INT8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]      OPAL_INT8 count 1 disp 0x0 (0) extent 8 (size 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No optimized description
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ppc.rivis.jp:27886] Datatype 0x600c60[OPAL_INT8] size 8 align 8 id 7 length 1 used 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; true_lb 0 true_ub 8 (true_extent 8) lb 0 ub 8 (extent 8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nbElems 1 loops 0 flags 136 (commited contiguous )-cC---P-DB-[---][---]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  contain OPAL_INT8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --C---P-D--[---][---]               count 1 disp 0x0 (0) extent 8 (size 8971008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No optimized description
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The former output is what I expected. But the latter one is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; identical to the former one and its content datatype has no name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and a very large size.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This line is output in opal_datatype_dump_data_desc() function in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/datatype/opal_datatype_dump.c file. It refers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_datatype_basicDatatypes[pDesc-&gt;elem.common.type]-&gt;name and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_datatype_basicDatatypes[pDesc-&gt;elem.common.type]-&gt;size for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the content datatype.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In this case, pDesc-&gt;elem.common.type is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_datatype_int8.desc.desc[0].elem.common.type and is initialized to 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in opal_datatype_init() function in opal/datatype/opal_datatype_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file, which is called during opal_init() function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_datatype_int8.desc.desc points &amp;opal_datatype_predefined_elem_desc[7*2].
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But if we call MPI_Init() function, the value is overwritten.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_datatype_init() function in ompi/datatype/ompi_datatype_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file, which is called during MPI_Init() function, has similar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procedure to initialize OMPI datatypes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On initializing ompi_mpi_aint in it, ompi_mpi_aint.dt.super.desc.desc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; points &amp;opal_datatype_predefined_elem_desc[7*2], which is also pointed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by opal_datatype_int8, because ompi_mpi_aint is defined by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_DATATYPE_INIT_PREDEFINED_BASIC_TYPE macro and it uses
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_DATATYPE_INITIALIZER_INT8 macro. So
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_datatype_int8.desc.desc[0].elem.common.type is overwritten
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to 37.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Therefore in the second opal_datatype_dump() function call in my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program, opal_datatype_basicDatatypes[37] is accessed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But the array length of opal_datatype_basicDatatypes is 25.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Summarize:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static initializer:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   opal_datatype_predefined_elem_desc[25] = {{0, ...}, ...};
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   opal_datatype_int8.desc.desc = &amp;opal_datatype_predefined_elem_desc[7*2];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi_mpi_aint.dt.super.desc.desc = &amp;opal_datatype_predefined_elem_desc[7*2];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_init:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   opal_datatype_int8.desc.desc.elem.common.type = 7;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi_mpi_aint.dt.super.desc.desc.elem.common.type = 37;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_datatype_dump:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   access to opal_datatype_predefined_elem_desc[37]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While opal_datatype_dump() function might not be called from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user's programs, breaking opal_datatype_predefined_elem_desc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; array in ompi_datatype_init() function is not good.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Though the above is described for opal_datatype_int8 and ompi_mpi_aint,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same thing happens to other datatypes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Though I tried to fix this problem, I could not figure out the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct solution.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - The first loop in ompi_datatype_init() function should be removed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   But OMPI Fortran datatypes should be initialized in it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - All OMPI datatypes should point ompi_datatype_predefined_elem_desc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   array? But having same 'type' value in OPAL datatypes and OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   datatypes is allowed?
</span><br>
<span class="quotelev1">&gt; &lt;result-before.txt&gt;&lt;result-after.txt&gt;&lt;show_ompi_datatype.c&gt;&lt;datatype-init-1.patch&gt;&lt;datatype-init-2.patch&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="12414.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>Previous message:</strong> <a href="12412.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
<li><strong>In reply to:</strong> <a href="12398.php">Kawashima, Takahiro: "Re: [OMPI devel] Datatype initialization bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12417.php">Kawashima, Takahiro: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>Reply:</strong> <a href="12417.php">Kawashima, Takahiro: "Re: [OMPI devel] Datatype initialization bug?"</a>
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
