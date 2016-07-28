<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 28 07:23:16 2006" -->
<!-- isoreceived="20061128122316" -->
<!-- sent="Tue, 28 Nov 2006 07:23:08 -0500" -->
<!-- isosent="20061128122308" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;amp;'" -->
<!-- id="046D027F-51DA-4B3C-B087-69B423AE47B4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c65e87810611280123x1c7f5ba4jae048d623afd9ba5_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-28 07:23:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1203.php">Anglade Pierre-Matthieu: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>Previous message:</strong> <a href="1201.php">Anglade Pierre-Matthieu: "[OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>In reply to:</strong> <a href="1201.php">Anglade Pierre-Matthieu: "[OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1203.php">Anglade Pierre-Matthieu: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>Reply:</strong> <a href="1203.php">Anglade Pierre-Matthieu: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for the bug report!
<br>
<p>These are typos in the code path for where the size of a C integer is  
<br>
not the same as the size for a Fortran INTEGER.  I have fixed the  
<br>
problems on our development head; they will be included in the next  
<br>
release of Open MPI.
<br>
<p>For the moment, the attached patch should fix the problem for you.
<br>
<p><p>

<br><p>
<p><p>On Nov 28, 2006, at 4:23 AM, Anglade Pierre-Matthieu wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trying to compile open-mpi 1.1.2 I've encounter the error message  
</span><br>
<span class="quotelev1">&gt; used as a title. Please find attached a tar.file cointaining:
</span><br>
<span class="quotelev1">&gt; -the configure output and log
</span><br>
<span class="quotelev1">&gt; -the make output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've try to correct the error and indeed changing line 98-99 in  
</span><br>
<span class="quotelev1">&gt; pfile_read_at_f.c
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; 98   if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;&amp;
</span><br>
<span class="quotelev1">&gt; 99       MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; 98   if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; 99       MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev1">&gt; allow continuing the compilation up to the next file containing  
</span><br>
<span class="quotelev1">&gt; precisely the same 'structure'. So I'm wondering what went wrong  
</span><br>
<span class="quotelev1">&gt; with my build. Can someone help me with that ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Pierre-Matthieu Anglade
</span><br>
<span class="quotelev1">&gt; &lt;build-problem.tar.bz2&gt;
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1202/f77.patch">f77.patch</a>
</ul>
<!-- attachment="f77.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1203.php">Anglade Pierre-Matthieu: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>Previous message:</strong> <a href="1201.php">Anglade Pierre-Matthieu: "[OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>In reply to:</strong> <a href="1201.php">Anglade Pierre-Matthieu: "[OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1203.php">Anglade Pierre-Matthieu: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>Reply:</strong> <a href="1203.php">Anglade Pierre-Matthieu: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
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
