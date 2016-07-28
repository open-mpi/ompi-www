<?
$subject_val = "Re: [OMPI devel] Barrier() after Finalize() when a file handle is leaked.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 09:13:30 2010" -->
<!-- isoreceived="20100922131330" -->
<!-- sent="Wed, 22 Sep 2010 09:13:24 -0400" -->
<!-- isosent="20100922131324" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Barrier() after Finalize() when a file handle is leaked." -->
<!-- id="F253ABEB-FBFB-4E5B-89A1-240B5E459EC8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikhdHVeJL6ViQC9fMajCDWfXjy7pD8zdATiVx3Z_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Barrier() after Finalize() when a file handle is leaked.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 09:13:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8524.php">Jeff Squyres: "[OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8522.php">Joshua Hursey: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>In reply to:</strong> <a href="8483.php">Lisandro Dalcin: "[OMPI devel] Barrier() after Finalize() when a file handle is leaked."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Lisandro!
<br>
<p>I filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/2594">https://svn.open-mpi.org/trac/ompi/ticket/2594</a> about this.
<br>
<p><p>On Sep 15, 2010, at 11:28 AM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; I've tested this with (--enable-debug --enable-picky
</span><br>
<span class="quotelev1">&gt; --enable-mem-debug) 1.4.2 and 1.5rc6. Despite being debug builds, a
</span><br>
<span class="quotelev1">&gt; mpi4py user got the same with (likely release) builds in both Ubuntu
</span><br>
<span class="quotelev1">&gt; and OS X.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat open.c
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;  MPI_File f;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_File_open(MPI_COMM_WORLD, &quot;test.plt&quot;, MPI_MODE_RDONLY, MPI_INFO_NULL, &amp;f);
</span><br>
<span class="quotelev1">&gt;  /* MPI_File_close(&amp;f); */
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpicc open.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./a.out
</span><br>
<span class="quotelev1">&gt; *** The MPI_Barrier() function was called after MPI_FINALIZE was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [trantor:15145] Abort after MPI_FINALIZE completed successfully; not
</span><br>
<span class="quotelev1">&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So if you open a file but never close it, a MPI_Barrier() gets called
</span><br>
<span class="quotelev1">&gt; after MPI_Finalize(). Could that come from a finalizer ROMIO callback?
</span><br>
<span class="quotelev1">&gt; However, I do not get this failure with MPICH2, and Open MPI seems to
</span><br>
<span class="quotelev1">&gt; behave just fine regarding MPI_Finalized(), the code below work as
</span><br>
<span class="quotelev1">&gt; expected:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int atexitmpi(MPI_Comm comm, int k, void *v, void *xs) {
</span><br>
<span class="quotelev1">&gt;  int flag;
</span><br>
<span class="quotelev1">&gt;  MPI_Finalized(&amp;flag);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;atexitmpi: finalized=%d\n&quot;, flag);
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;  int keyval = MPI_KEYVAL_INVALID;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_create_keyval(MPI_COMM_NULL_COPY_FN, atexitmpi, &amp;keyval, 0);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_set_attr(MPI_COMM_SELF, keyval, 0);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; CIMEC (INTEC/CONICET-UNL)
</span><br>
<span class="quotelev1">&gt; Predio CONICET-Santa Fe
</span><br>
<span class="quotelev1">&gt; Colectora RN 168 Km 472, Paraje El Pozo
</span><br>
<span class="quotelev1">&gt; Tel: +54-342-4511594 (ext 1011)
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-342-4511169
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8524.php">Jeff Squyres: "[OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8522.php">Joshua Hursey: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>In reply to:</strong> <a href="8483.php">Lisandro Dalcin: "[OMPI devel] Barrier() after Finalize() when a file handle is leaked."</a>
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
