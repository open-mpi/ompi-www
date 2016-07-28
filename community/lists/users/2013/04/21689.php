<?
$subject_val = "[OMPI users] assert in opal_datatype_is_contiguous_memory_layout";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  5 12:57:54 2013" -->
<!-- isoreceived="20130405165754" -->
<!-- sent="Fri, 05 Apr 2013 12:57:42 -0400" -->
<!-- isosent="20130405165742" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI users] assert in opal_datatype_is_contiguous_memory_layout" -->
<!-- id="515F0286.9030900_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> [OMPI users] assert in opal_datatype_is_contiguous_memory_layout<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-05 12:57:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21690.php">Ralph Castain: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Previous message:</strong> <a href="21688.php">Paul Kapinos: "Re: [OMPI users] cannot build 32-bit openmpi-1.7 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21691.php">Eric Chamberland: "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>Reply:</strong> <a href="21691.php">Eric Chamberland: "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have a well working (large) code which is using openmpi 1.6.3 (see 
<br>
config.log here: 
<br>
<a href="http://www.giref.ulaval.ca/~ericc/bug_openmpi/config.log_nodebug">http://www.giref.ulaval.ca/~ericc/bug_openmpi/config.log_nodebug</a>)
<br>
<p>(I have used it for reading with MPI I/O with success over 1500 procs 
<br>
with very large files)
<br>
<p>However, when I use openmpi compiled with &quot;debug&quot; options:
<br>
<p>./configure --enable-mem-debug --enable-mem-profile --enable-memchecker 
<br>
--with-mpi-param-check --enable-debug --prefix=/opt/openmpi-1.6.3_debug
<br>
(se other config.log here: 
<br>
<a href="http://www.giref.ulaval.ca/~ericc/bug_openmpi/config.log_debug">http://www.giref.ulaval.ca/~ericc/bug_openmpi/config.log_debug</a>) the code 
<br>
is aborting with an assertion on a very small example on 2 processors. 
<br>
(the same very small example is working well without the debug mode)
<br>
<p>Here is the assertion causing an abort:
<br>
<p>===================================
<br>
<p>openmpi-1.6.3/opal/datatype/opal_datatype.h:
<br>
<p>static inline int32_t
<br>
opal_datatype_is_contiguous_memory_layout( const opal_datatype_t* 
<br>
datatype, int32_t count )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( !(datatype-&gt;flags &amp; OPAL_DATATYPE_FLAG_CONTIGUOUS) ) return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( (count == 1) || (datatype-&gt;flags &amp; OPAL_DATATYPE_FLAG_NO_GAPS) 
<br>
) return 1;
<br>
<p><p>/* This is the assertion:  */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert( (OPAL_PTRDIFF_TYPE)datatype-&gt;size != (datatype-&gt;ub - 
<br>
datatype-&gt;lb) );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>===================================
<br>
<p>Does anyone can tell me what does this mean?
<br>
<p>It happens while writing a file with MPI I/O when I am calling for the 
<br>
fourth time a &quot;MPI_File_set_view&quot;... with different types of 
<br>
MPI_Datatype created with &quot;MPI_Type_indexed&quot;.
<br>
<p>I am trying to reproduce the bug with a very small example to be send 
<br>
here, but if anyone has a hint to give me...
<br>
(I would like: this assert is not good! just ignore it ;-) )
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21690.php">Ralph Castain: "Re: [OMPI users] cannot build openmpi-1.9r28290 on Linux/Solaris"</a>
<li><strong>Previous message:</strong> <a href="21688.php">Paul Kapinos: "Re: [OMPI users] cannot build 32-bit openmpi-1.7 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21691.php">Eric Chamberland: "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>Reply:</strong> <a href="21691.php">Eric Chamberland: "Re: [OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
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
