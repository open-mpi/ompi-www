<?
$subject_val = "Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 10:53:26 2010" -->
<!-- isoreceived="20100211155326" -->
<!-- sent="Thu, 11 Feb 2010 10:53:16 -0500" -->
<!-- isosent="20100211155316" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL" -->
<!-- id="302DB554-DD7C-48E5-8AE0-48D1F3AAB107_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="e7ba66e41002110715q7878cd1aw75918a378cef8e75_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 10:53:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<li><strong>Previous message:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7409.php">Lisandro Dalcin: "[OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<li><strong>Reply:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This has been corrected on the trunk (<a href="https://svn.open-mpi.org/trac/ompi/changeset/20537">https://svn.open-mpi.org/trac/ompi/changeset/20537</a>). Unfortunately, the corresponding patch didn't make it into the 1.4.1. I'll create a ticket to push it into the 1.4.2.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Feb 11, 2010, at 10:15 , Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; Why Request_free() and Cancel() do not fail when REQUEST_NULL is
</span><br>
<span class="quotelev1">&gt; passed? Am I missing something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Request req;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  req = MPI_REQUEST_NULL;
</span><br>
<span class="quotelev1">&gt;  MPI_Request_free(&amp;req);
</span><br>
<span class="quotelev1">&gt;  req = MPI_REQUEST_NULL;
</span><br>
<span class="quotelev1">&gt;  MPI_Cancel(&amp;req);
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
<span class="quotelev1">&gt; PS: The code below was tested with 1.4.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<li><strong>Previous message:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7409.php">Lisandro Dalcin: "[OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<li><strong>Reply:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
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
