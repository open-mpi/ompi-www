<?
$subject_val = "[OMPI devel] Bug report: single processor MPI_Allgatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 16:45:18 2008" -->
<!-- isoreceived="20080118214518" -->
<!-- sent="Fri, 18 Jan 2008 16:45:01 -0500" -->
<!-- isosent="20080118214501" -->
<!-- name="Daniel G. Hyams" -->
<!-- email="Daniel-Hyams_at_[hidden]" -->
<!-- subject="[OMPI devel] Bug report: single processor MPI_Allgatherv" -->
<!-- id="47911DDD.9090407_at_utc.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Bug report: single processor MPI_Allgatherv<br>
<strong>From:</strong> Daniel G. Hyams (<em>Daniel-Hyams_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 16:45:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3002.php">Daniel G. Hyams: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>Previous message:</strong> <a href="3000.php">Dean Dauger, Ph. D.: "[OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3002.php">Daniel G. Hyams: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>Reply:</strong> <a href="3002.php">Daniel G. Hyams: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think that the displacements (disps) are being handled correctly 
<br>
in MPI_Allgatherv, for a single process case.
<br>
The disps are being handled as byte offsets, instead of 'item' 
<br>
offsets...they need to be multiplied by the size, in bytes,
<br>
of the MPI_Datatype being sent.
<br>
<p>This bug seems to be closely related this: 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/16360">https://svn.open-mpi.org/trac/ompi/changeset/16360</a>
<br>
and probably is present in all of the routines listed there.
<br>
<p>The following code demonstrates the problem; make sure you run it as one 
<br>
process only.  The input and output should
<br>
be the same, but that is not the case.
<br>
<p>==================================================
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>void tcalloc(int **p,int n)
<br>
{
<br>
&nbsp;&nbsp;*p = (int*)calloc(n,sizeof(int));
<br>
}
<br>
<p><p>int main(int argc, char * argv[])
<br>
{
<br>
&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;int nto_global = 0;
<br>
&nbsp;&nbsp;int np = 1;
<br>
&nbsp;&nbsp;int *propto_global = NULL;
<br>
&nbsp;&nbsp;int *propto = NULL;
<br>
&nbsp;&nbsp;int  nto = 10;
<br>
&nbsp;&nbsp;int counts[1];
<br>
&nbsp;&nbsp;int displs[1];
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
<p>&nbsp;&nbsp;tcalloc(&amp;propto,nto+1);
<br>
<p>&nbsp;&nbsp;for (i = 1; i &lt;= nto; i++) propto[i] = i;
<br>
<p>&nbsp;&nbsp;counts[0] = nto;
<br>
&nbsp;&nbsp;displs[0] = 1;
<br>
<p>&nbsp;&nbsp;// BUG: if I set displs[0] above to 4, things work as expected.  But, 
<br>
the displacements
<br>
&nbsp;&nbsp;// are supposed to be the number of items, not bytes.
<br>
<p>&nbsp;&nbsp;for (i = 0; i &lt; np; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nto_global += counts[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>&nbsp;&nbsp;tcalloc(&amp;propto_global, nto_global+1);
<br>
<p>&nbsp;&nbsp;for (i = 1; i &lt;= nto; i++) printf(&quot;INPUT %d --&gt; %d\n&quot;,i,propto[i]);
<br>
<p>&nbsp;&nbsp;MPI_Allgatherv(propto+1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nto,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;propto_global,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;counts,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;displs,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;for (i = 1; i &lt;= nto_global; i++) printf(&quot;OUTPUT %d --&gt; 
<br>
%d\n&quot;,i,propto_global[i]);
<br>
<p>&nbsp;&nbsp;free(propto_global);
<br>
&nbsp;&nbsp;free(propto);
<br>
<p>&nbsp;&nbsp;return(0);
<br>
}
<br>
<p><p><p><pre>
-- 
=========================================================
 Daniel G. Hyams
 Associate Research Professor
 UT SimCenter at Chattanooga
 Email: Daniel-Hyams_at_[hidden]
 Phone: 423-425-5491
 Fax:   423-425-5517
=========================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3002.php">Daniel G. Hyams: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>Previous message:</strong> <a href="3000.php">Dean Dauger, Ph. D.: "[OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3002.php">Daniel G. Hyams: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>Reply:</strong> <a href="3002.php">Daniel G. Hyams: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
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
