<?
$subject_val = "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 19 00:31:55 2008" -->
<!-- isoreceived="20080119053155" -->
<!-- sent="Sat, 19 Jan 2008 00:31:45 -0500" -->
<!-- isosent="20080119053145" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug report: single processor MPI_Allgatherv" -->
<!-- id="806C3F8A-436D-447E-9BC2-D8874E29B4D7_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="479120CA.3060401_at_utc.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-19 00:31:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3009.php">Ralf Wildenhues: "Re: [OMPI devel] configure patch"</a>
<li><strong>Previous message:</strong> <a href="3007.php">Jeff Squyres: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>In reply to:</strong> <a href="3002.php">Daniel G. Hyams: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daniel,
<br>
<p>Thanks for the fix. It is indeed the right solution. I'll make sure it  
<br>
gets into the trunk asap.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 18, 2008, at 4:57 PM, Daniel G. Hyams wrote:
<br>
<p><span class="quotelev1">&gt; Sorry to reply to my own mail, but the bug only affects  
</span><br>
<span class="quotelev1">&gt; MPI_Allgatherv.
</span><br>
<span class="quotelev1">&gt; In this changeset:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/16360">https://svn.open-mpi.org/trac/ompi/changeset/16360</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In coll_self_allgatherv.c, the &quot;extent&quot; variable is never used.  So  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; fix is just to multiply
</span><br>
<span class="quotelev1">&gt; &quot;extent&quot; by disps[0], on line 50.  I've verified that this fixes the
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daniel G. Hyams wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I don't think that the displacements (disps) are being handled  
</span><br>
<span class="quotelev2">&gt;&gt; correctly
</span><br>
<span class="quotelev2">&gt;&gt; in MPI_Allgatherv, for a single process case.
</span><br>
<span class="quotelev2">&gt;&gt; The disps are being handled as byte offsets, instead of 'item'
</span><br>
<span class="quotelev2">&gt;&gt; offsets...they need to be multiplied by the size, in bytes,
</span><br>
<span class="quotelev2">&gt;&gt; of the MPI_Datatype being sent.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This bug seems to be closely related this:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/16360">https://svn.open-mpi.org/trac/ompi/changeset/16360</a>
</span><br>
<span class="quotelev2">&gt;&gt; and probably is present in all of the routines listed there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The following code demonstrates the problem; make sure you run it  
</span><br>
<span class="quotelev2">&gt;&gt; as one
</span><br>
<span class="quotelev2">&gt;&gt; process only.  The input and output should
</span><br>
<span class="quotelev2">&gt;&gt; be the same, but that is not the case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; void tcalloc(int **p,int n)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;  *p = (int*)calloc(n,sizeof(int));
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char * argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;  int i;
</span><br>
<span class="quotelev2">&gt;&gt;  int nto_global = 0;
</span><br>
<span class="quotelev2">&gt;&gt;  int np = 1;
</span><br>
<span class="quotelev2">&gt;&gt;  int *propto_global = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;  int *propto = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;  int  nto = 10;
</span><br>
<span class="quotelev2">&gt;&gt;  int counts[1];
</span><br>
<span class="quotelev2">&gt;&gt;  int displs[1];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  tcalloc(&amp;propto,nto+1);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  for (i = 1; i &lt;= nto; i++) propto[i] = i;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  counts[0] = nto;
</span><br>
<span class="quotelev2">&gt;&gt;  displs[0] = 1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  // BUG: if I set displs[0] above to 4, things work as expected.   
</span><br>
<span class="quotelev2">&gt;&gt; But,
</span><br>
<span class="quotelev2">&gt;&gt; the displacements
</span><br>
<span class="quotelev2">&gt;&gt;  // are supposed to be the number of items, not bytes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  for (i = 0; i &lt; np; i++)
</span><br>
<span class="quotelev2">&gt;&gt;    {
</span><br>
<span class="quotelev2">&gt;&gt;      nto_global += counts[i];
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  tcalloc(&amp;propto_global, nto_global+1);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  for (i = 1; i &lt;= nto; i++) printf(&quot;INPUT %d --&gt; %d\n&quot;,i,propto[i]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Allgatherv(propto+1,
</span><br>
<span class="quotelev2">&gt;&gt;                 nto,
</span><br>
<span class="quotelev2">&gt;&gt;                 MPI_INT,
</span><br>
<span class="quotelev2">&gt;&gt;                 propto_global,
</span><br>
<span class="quotelev2">&gt;&gt;                 counts,
</span><br>
<span class="quotelev2">&gt;&gt;                 displs,
</span><br>
<span class="quotelev2">&gt;&gt;                 MPI_INT,
</span><br>
<span class="quotelev2">&gt;&gt;                 MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  for (i = 1; i &lt;= nto_global; i++) printf(&quot;OUTPUT %d --&gt;
</span><br>
<span class="quotelev2">&gt;&gt; %d\n&quot;,i,propto_global[i]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  free(propto_global);
</span><br>
<span class="quotelev2">&gt;&gt;  free(propto);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  return(0);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; =========================================================
</span><br>
<span class="quotelev1">&gt; Daniel G. Hyams
</span><br>
<span class="quotelev1">&gt; Associate Research Professor
</span><br>
<span class="quotelev1">&gt; UT SimCenter at Chattanooga
</span><br>
<span class="quotelev1">&gt; Email: Daniel-Hyams_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Phone: 423-425-5491
</span><br>
<span class="quotelev1">&gt; Fax:   423-425-5517
</span><br>
<span class="quotelev1">&gt; =========================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3008/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3009.php">Ralf Wildenhues: "Re: [OMPI devel] configure patch"</a>
<li><strong>Previous message:</strong> <a href="3007.php">Jeff Squyres: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>In reply to:</strong> <a href="3002.php">Daniel G. Hyams: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
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
