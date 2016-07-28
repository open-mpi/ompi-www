<?
$subject_val = "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 16:57:34 2008" -->
<!-- isoreceived="20080118215734" -->
<!-- sent="Fri, 18 Jan 2008 16:57:30 -0500" -->
<!-- isosent="20080118215730" -->
<!-- name="Daniel G. Hyams" -->
<!-- email="Daniel-Hyams_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug report: single processor MPI_Allgatherv" -->
<!-- id="479120CA.3060401_at_utc.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47911DDD.9090407_at_utc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug report: single processor MPI_Allgatherv<br>
<strong>From:</strong> Daniel G. Hyams (<em>Daniel-Hyams_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 16:57:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3003.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Previous message:</strong> <a href="3001.php">Daniel G. Hyams: "[OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>In reply to:</strong> <a href="3001.php">Daniel G. Hyams: "[OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3008.php">George Bosilca: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>Reply:</strong> <a href="3008.php">George Bosilca: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry to reply to my own mail, but the bug only affects MPI_Allgatherv.  
<br>
In this changeset:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/16360">https://svn.open-mpi.org/trac/ompi/changeset/16360</a>
<br>
<p><p>In coll_self_allgatherv.c, the &quot;extent&quot; variable is never used.  So the 
<br>
fix is just to multiply
<br>
&quot;extent&quot; by disps[0], on line 50.  I've verified that this fixes the 
<br>
problem.
<br>
<p><p><p>Daniel G. Hyams wrote:
<br>
<span class="quotelev1">&gt; I don't think that the displacements (disps) are being handled correctly 
</span><br>
<span class="quotelev1">&gt; in MPI_Allgatherv, for a single process case.
</span><br>
<span class="quotelev1">&gt; The disps are being handled as byte offsets, instead of 'item' 
</span><br>
<span class="quotelev1">&gt; offsets...they need to be multiplied by the size, in bytes,
</span><br>
<span class="quotelev1">&gt; of the MPI_Datatype being sent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This bug seems to be closely related this: 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/16360">https://svn.open-mpi.org/trac/ompi/changeset/16360</a>
</span><br>
<span class="quotelev1">&gt; and probably is present in all of the routines listed there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following code demonstrates the problem; make sure you run it as one 
</span><br>
<span class="quotelev1">&gt; process only.  The input and output should
</span><br>
<span class="quotelev1">&gt; be the same, but that is not the case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void tcalloc(int **p,int n)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   *p = (int*)calloc(n,sizeof(int));
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char * argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int i;
</span><br>
<span class="quotelev1">&gt;   int nto_global = 0;
</span><br>
<span class="quotelev1">&gt;   int np = 1;
</span><br>
<span class="quotelev1">&gt;   int *propto_global = NULL;
</span><br>
<span class="quotelev1">&gt;   int *propto = NULL;
</span><br>
<span class="quotelev1">&gt;   int  nto = 10;
</span><br>
<span class="quotelev1">&gt;   int counts[1];
</span><br>
<span class="quotelev1">&gt;   int displs[1];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   tcalloc(&amp;propto,nto+1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   for (i = 1; i &lt;= nto; i++) propto[i] = i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   counts[0] = nto;
</span><br>
<span class="quotelev1">&gt;   displs[0] = 1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   // BUG: if I set displs[0] above to 4, things work as expected.  But, 
</span><br>
<span class="quotelev1">&gt; the displacements
</span><br>
<span class="quotelev1">&gt;   // are supposed to be the number of items, not bytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   for (i = 0; i &lt; np; i++)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;       nto_global += counts[i];
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   tcalloc(&amp;propto_global, nto_global+1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   for (i = 1; i &lt;= nto; i++) printf(&quot;INPUT %d --&gt; %d\n&quot;,i,propto[i]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Allgatherv(propto+1,
</span><br>
<span class="quotelev1">&gt;                  nto,
</span><br>
<span class="quotelev1">&gt;                  MPI_INT,
</span><br>
<span class="quotelev1">&gt;                  propto_global,
</span><br>
<span class="quotelev1">&gt;                  counts,
</span><br>
<span class="quotelev1">&gt;                  displs,
</span><br>
<span class="quotelev1">&gt;                  MPI_INT,
</span><br>
<span class="quotelev1">&gt;                  MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   for (i = 1; i &lt;= nto_global; i++) printf(&quot;OUTPUT %d --&gt; 
</span><br>
<span class="quotelev1">&gt; %d\n&quot;,i,propto_global[i]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   free(propto_global);
</span><br>
<span class="quotelev1">&gt;   free(propto);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   return(0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="3003.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Previous message:</strong> <a href="3001.php">Daniel G. Hyams: "[OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>In reply to:</strong> <a href="3001.php">Daniel G. Hyams: "[OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3008.php">George Bosilca: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>Reply:</strong> <a href="3008.php">George Bosilca: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
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
