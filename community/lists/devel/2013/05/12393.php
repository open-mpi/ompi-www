<?
$subject_val = "[OMPI devel] Datatype initialization bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 16 12:05:08 2013" -->
<!-- isoreceived="20130516160508" -->
<!-- sent="Fri, 17 May 2013 01:04:35 +0900" -->
<!-- isosent="20130516160435" -->
<!-- name="KAWASHIMA Takahiro" -->
<!-- email="rivis.kawashima_at_[hidden]" -->
<!-- subject="[OMPI devel] Datatype initialization bug?" -->
<!-- id="20130517010435.2b70516c2fbbeba75f88a3fc_at_nifty.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Datatype initialization bug?<br>
<strong>From:</strong> KAWASHIMA Takahiro (<em>rivis.kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-16 12:04:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12394.php">George Bosilca: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>Previous message:</strong> <a href="12392.php">Ralph Castain: "Re: [OMPI devel] RFC: dead code removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12394.php">George Bosilca: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>Reply:</strong> <a href="12394.php">George Bosilca: "Re: [OMPI devel] Datatype initialization bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm reading the datatype code in Open MPI trunk and have a question.
<br>
A bit long.
<br>
<p>See the following program.
<br>
<p>----------------------------------------------------------------
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>struct opal_datatype_t;
<br>
extern int opal_init(int *pargc, char ***pargv);
<br>
extern int opal_finalize(void);
<br>
extern void opal_datatype_dump(struct opal_datatype_t *type);
<br>
extern struct opal_datatype_t opal_datatype_int8;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_init(NULL, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_datatype_dump(&amp;opal_datatype_int8);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_datatype_dump(&amp;opal_datatype_int8);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
----------------------------------------------------------------
<br>
<p>All variables/functions declared as 'extern' are defined in OPAL.
<br>
opal_datatype_dump() function outputs internal data of a datatype.
<br>
I expect the same output on two opal_datatype_dump() calls.
<br>
But when I run it on an x86_64 machine, I get the following output.
<br>
<p>----------------------------------------------------------------
<br>
ompi-trunk/opal-datatype-dump &amp;&amp; ompiexec -n 1 ompi-trunk/opal-datatype-dump
<br>
[ppc.rivis.jp:27886] Datatype 0x600c60[OPAL_INT8] size 8 align 8 id 7 length 1 used 1
<br>
true_lb 0 true_ub 8 (true_extent 8) lb 0 ub 8 (extent 8)
<br>
nbElems 1 loops 0 flags 136 (commited contiguous )-cC---P-DB-[---][---]
<br>
&nbsp;&nbsp;&nbsp;contain OPAL_INT8
<br>
--C---P-D--[---][---]      OPAL_INT8 count 1 disp 0x0 (0) extent 8 (size 8)
<br>
No optimized description
<br>
<p>[ppc.rivis.jp:27886] Datatype 0x600c60[OPAL_INT8] size 8 align 8 id 7 length 1 used 1
<br>
true_lb 0 true_ub 8 (true_extent 8) lb 0 ub 8 (extent 8)
<br>
nbElems 1 loops 0 flags 136 (commited contiguous )-cC---P-DB-[---][---]
<br>
&nbsp;&nbsp;&nbsp;contain OPAL_INT8
<br>
--C---P-D--[---][---]               count 1 disp 0x0 (0) extent 8 (size 8971008)
<br>
No optimized description
<br>
----------------------------------------------------------------
<br>
<p>The former output is what I expected. But the latter one is not
<br>
identical to the former one and its content datatype has no name
<br>
and a very large size.
<br>
<p>This line is output in opal_datatype_dump_data_desc() function in
<br>
opal/datatype/opal_datatype_dump.c file. It refers
<br>
opal_datatype_basicDatatypes[pDesc-&gt;elem.common.type]-&gt;name and
<br>
opal_datatype_basicDatatypes[pDesc-&gt;elem.common.type]-&gt;size for
<br>
the content datatype.
<br>
<p>In this case, pDesc-&gt;elem.common.type is
<br>
opal_datatype_int8.desc.desc[0].elem.common.type and is initialized to 7
<br>
in opal_datatype_init() function in opal/datatype/opal_datatype_module.c
<br>
file, which is called during opal_init() function.
<br>
opal_datatype_int8.desc.desc points &amp;opal_datatype_predefined_elem_desc[7*2].
<br>
<p>But if we call MPI_Init() function, the value is overwritten.
<br>
ompi_datatype_init() function in ompi/datatype/ompi_datatype_module.c
<br>
file, which is called during MPI_Init() function, has similar
<br>
procedure to initialize OMPI datatypes.
<br>
<p>On initializing ompi_mpi_aint in it, ompi_mpi_aint.dt.super.desc.desc
<br>
points &amp;opal_datatype_predefined_elem_desc[7*2], which is also pointed
<br>
by opal_datatype_int8, because ompi_mpi_aint is defined by
<br>
OMPI_DATATYPE_INIT_PREDEFINED_BASIC_TYPE macro and it uses
<br>
OPAL_DATATYPE_INITIALIZER_INT8 macro. So
<br>
opal_datatype_int8.desc.desc[0].elem.common.type is overwritten
<br>
to 37.
<br>
<p>Therefore in the second opal_datatype_dump() function call in my
<br>
program, opal_datatype_basicDatatypes[37] is accessed.
<br>
But the array length of opal_datatype_basicDatatypes is 25.
<br>
<p>Summarize:
<br>
<p>&nbsp;&nbsp;static initializer:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_datatype_predefined_elem_desc[25] = {{0, ...}, ...};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_datatype_int8.desc.desc = &amp;opal_datatype_predefined_elem_desc[7*2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_aint.dt.super.desc.desc = &amp;opal_datatype_predefined_elem_desc[7*2];
<br>
<p>&nbsp;&nbsp;opal_init:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_datatype_int8.desc.desc.elem.common.type = 7;
<br>
<p>&nbsp;&nbsp;MPI_Init:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_aint.dt.super.desc.desc.elem.common.type = 37;
<br>
<p>&nbsp;&nbsp;opal_datatype_dump:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;access to opal_datatype_predefined_elem_desc[37]
<br>
<p>While opal_datatype_dump() function might not be called from
<br>
user's programs, breaking opal_datatype_predefined_elem_desc
<br>
array in ompi_datatype_init() function is not good.
<br>
<p>Though the above is described for opal_datatype_int8 and ompi_mpi_aint,
<br>
the same thing happens to other datatypes.
<br>
<p>Though I tried to fix this problem, I could not figure out the
<br>
correct solution.
<br>
<p>&nbsp;&nbsp;- The first loop in ompi_datatype_init() function should be removed?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;But OMPI Fortran datatypes should be initialized in it?
<br>
<p>&nbsp;&nbsp;- All OMPI datatypes should point ompi_datatype_predefined_elem_desc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;array? But having same 'type' value in OPAL datatypes and OMPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;datatypes is allowed?
<br>
<p>Regards,
<br>
KAWASHIMA Takahiro
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12394.php">George Bosilca: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>Previous message:</strong> <a href="12392.php">Ralph Castain: "Re: [OMPI devel] RFC: dead code removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12394.php">George Bosilca: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>Reply:</strong> <a href="12394.php">George Bosilca: "Re: [OMPI devel] Datatype initialization bug?"</a>
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
