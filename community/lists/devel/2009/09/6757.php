<?
$subject_val = "Re: [OMPI devel] more bug/comments for current trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 01:19:49 2009" -->
<!-- isoreceived="20090904051949" -->
<!-- sent="Fri, 4 Sep 2009 08:19:44 +0300" -->
<!-- isosent="20090904051944" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] more bug/comments for current trunk" -->
<!-- id="9B85484D-A744-4964-8A53-578F84082204_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40909020938u5bf67f8jdeb8f28c5a77264c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] more bug/comments for current trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 01:19:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6758.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6756.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>In reply to:</strong> <a href="6747.php">Lisandro Dalcin: "[OMPI devel] more bug/comments for current trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed all in <a href="https://svn.open-mpi.org/trac/ompi/changeset/21941">https://svn.open-mpi.org/trac/ompi/changeset/21941</a>.
<br>
<p>Thanks!
<br>
<p><p>On Sep 2, 2009, at 7:38 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; Disclaimer: this is for trunk svn up'ed yesterday.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code below should fail with ERR_COMM, but it succeed...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int *value, flag;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_get_attr(MPI_COMM_NULL, MPI_TAG_UB, &amp;value, &amp;flag);
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, this is really not a bug, but I'll comment about it
</span><br>
<span class="quotelev1">&gt; anyway (I think I've commented about this some time ago)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would expect the two codes below to fail with MPI_ERR_KEYVAL, but
</span><br>
<span class="quotelev1">&gt; they fail with MPI_ERR_OTHER...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int *value, flag;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_KEYVAL_INVALID, &amp;value,  
</span><br>
<span class="quotelev1">&gt; &amp;flag);
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Win win;
</span><br>
<span class="quotelev1">&gt;   int *value, flag;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;   MPI_Win_create(MPI_BOTTOM, 0, 1,
</span><br>
<span class="quotelev1">&gt;                  MPI_INFO_NULL, MPI_COMM_SELF, &amp;win);
</span><br>
<span class="quotelev1">&gt;   MPI_Win_get_attr(win, MPI_KEYVAL_INVALID, &amp;value, &amp;flag);
</span><br>
<span class="quotelev1">&gt;   MPI_Win_free(&amp;win);
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6758.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6756.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>In reply to:</strong> <a href="6747.php">Lisandro Dalcin: "[OMPI devel] more bug/comments for current trunk"</a>
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
