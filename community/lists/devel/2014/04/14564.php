<?
$subject_val = "[OMPI devel] Issues with MPI_Add_error_class()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 08:46:26 2014" -->
<!-- isoreceived="20140421124626" -->
<!-- sent="Mon, 21 Apr 2014 15:45:55 +0300" -->
<!-- isosent="20140421124555" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Issues with MPI_Add_error_class()" -->
<!-- id="CAEcYPwAfV3UYc4QYnYHsY+KA+--GKHtQbwb-769QfrYBydqD6A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Issues with MPI_Add_error_class()<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-21 08:45:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14565.php">Lisandro Dalcin: "[OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Previous message:</strong> <a href="14563.php">Lisandro Dalcin: "[OMPI devel] MPI_Type_create_hindexed_block() segfaults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14578.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Add_error_class()"</a>
<li><strong>Reply:</strong> <a href="14578.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Add_error_class()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems the implementation of MPI_Add_error_class() is out of sync
<br>
with the definition of MPI_ERR_LASTCODE.
<br>
<p>Please review the list of error classes in mpi.h and the code in this
<br>
file: <a href="https://bitbucket.org/ompiteam/ompi-svn-mirror/src/v1.8/ompi/errhandler/errcode.c">https://bitbucket.org/ompiteam/ompi-svn-mirror/src/v1.8/ompi/errhandler/errcode.c</a>
<br>
<p>BTW, in that file, all the MPI_T_ERR_XXX are not handled. The MPI-3
<br>
standard says they should be treated as other MPI error classes.
<br>
Trying to get an error string out of them (eg. MPI_T_ERR_MEMORY)
<br>
generates an error.
<br>
<p><p><p>[dalcinl_at_kw2060 openmpi]$ cat add_error_class.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int errorclass,*lastused,flag;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Add_error_class(&amp;errorclass);
<br>
&nbsp;&nbsp;MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_LASTUSEDCODE, &amp;lastused, &amp;flag);
<br>
&nbsp;&nbsp;printf(&quot;errorclass:%d lastused:%d MPI_ERR_LASTCODE:%d\n&quot;,
<br>
errorclass, *lastused, MPI_ERR_LASTCODE);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
[dalcinl_at_kw2060 openmpi]$ mpicc add_error_class.c
<br>
[dalcinl_at_kw2060 openmpi]$ ./a.out
<br>
errorclass:54 lastused:54 MPI_ERR_LASTCODE:71
<br>
<p><p>[dalcinl_at_kw2060 openmpi]$ cat error_string.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;char errorstring[MPI_MAX_ERROR_STRING];
<br>
&nbsp;&nbsp;int slen;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Error_string(MPI_T_ERR_MEMORY, errorstring, &amp;slen);
<br>
&nbsp;&nbsp;printf(&quot;errorclass:%d errorstring:%s\n&quot;, MPI_T_ERR_MEMORY, errorstring);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
[dalcinl_at_kw2060 openmpi]$ mpicc error_string.c
<br>
[dalcinl_at_kw2060 openmpi]$ ./a.out
<br>
[kw2060:20883] *** An error occurred in MPI_Error_string
<br>
[kw2060:20883] *** reported by process [140737332576257,0]
<br>
[kw2060:20883] *** on communicator MPI_COMM_WORLD
<br>
[kw2060:20883] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[kw2060:20883] *** MPI_ERRORS_ARE_FATAL (processes in this
<br>
communicator will now abort,
<br>
[kw2060:20883] ***    and potentially your MPI job)
<br>
<p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (UNL/CONICET)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
3000 Santa Fe, Argentina
Tel: +54-342-4511594 (ext 1016)
Tel/Fax: +54-342-4511169
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14565.php">Lisandro Dalcin: "[OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Previous message:</strong> <a href="14563.php">Lisandro Dalcin: "[OMPI devel] MPI_Type_create_hindexed_block() segfaults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14578.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Add_error_class()"</a>
<li><strong>Reply:</strong> <a href="14578.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Add_error_class()"</a>
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
