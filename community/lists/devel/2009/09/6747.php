<?
$subject_val = "[OMPI devel] more bug/comments for current trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 12:38:34 2009" -->
<!-- isoreceived="20090902163834" -->
<!-- sent="Wed, 2 Sep 2009 13:38:28 -0300" -->
<!-- isosent="20090902163828" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] more bug/comments for current trunk" -->
<!-- id="e7ba66e40909020938u5bf67f8jdeb8f28c5a77264c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] more bug/comments for current trunk<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 12:38:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6748.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6746.php">Jeff Squyres: "Re: [OMPI devel] Cannot Free() a datatype created with Dup() orCreate_resized()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6757.php">Jeff Squyres: "Re: [OMPI devel] more bug/comments for current trunk"</a>
<li><strong>Reply:</strong> <a href="6757.php">Jeff Squyres: "Re: [OMPI devel] more bug/comments for current trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Disclaimer: this is for trunk svn up'ed yesterday.
<br>
<p>The code below should fail with ERR_COMM, but it succeed...
<br>
<p>#include &lt;mpi.h&gt;
<br>
int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;int *value, flag;
<br>
&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;MPI_Comm_get_attr(MPI_COMM_NULL, MPI_TAG_UB, &amp;value, &amp;flag);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>Additionally, this is really not a bug, but I'll comment about it
<br>
anyway (I think I've commented about this some time ago)...
<br>
<p>I would expect the two codes below to fail with MPI_ERR_KEYVAL, but
<br>
they fail with MPI_ERR_OTHER...
<br>
<p>#include &lt;mpi.h&gt;
<br>
int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;int *value, flag;
<br>
&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_KEYVAL_INVALID, &amp;value, &amp;flag);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>#include &lt;mpi.h&gt;
<br>
int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;MPI_Win win;
<br>
&nbsp;&nbsp;int *value, flag;
<br>
&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;MPI_Win_create(MPI_BOTTOM, 0, 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, MPI_COMM_SELF, &amp;win);
<br>
&nbsp;&nbsp;MPI_Win_get_attr(win, MPI_KEYVAL_INVALID, &amp;value, &amp;flag);
<br>
&nbsp;&nbsp;MPI_Win_free(&amp;win);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6748.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6746.php">Jeff Squyres: "Re: [OMPI devel] Cannot Free() a datatype created with Dup() orCreate_resized()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6757.php">Jeff Squyres: "Re: [OMPI devel] more bug/comments for current trunk"</a>
<li><strong>Reply:</strong> <a href="6757.php">Jeff Squyres: "Re: [OMPI devel] more bug/comments for current trunk"</a>
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
