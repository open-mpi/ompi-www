<?
$subject_val = "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 09:34:26 2009" -->
<!-- isoreceived="20090219143426" -->
<!-- sent="Thu, 19 Feb 2009 12:34:21 -0200" -->
<!-- isosent="20090219143421" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bugs and unexpected values in returned errors classes" -->
<!-- id="e7ba66e40902190634v3c0e4f3dk53c2552c662e2565_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A6D59DC9-4738-4F82-82A6-340C93879AD4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] possible bugs and unexpected values in returned errors classes<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 09:34:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5478.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5476.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5472.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5481.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5481.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5482.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Feb 19, 2009 at 10:54 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Feb 16, 2009, at 9:14 AM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After running my testsuite again and next looking at
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ompi/mpi/c/comm_set_errhandler.c&quot;, I noticed that
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_set_errhandler() do return MPI_ERR_COMM when invalid
</span><br>
<span class="quotelev2">&gt;&gt; communicators are passed. IMHO, for the sake of consistency, you
</span><br>
<span class="quotelev2">&gt;&gt; should fix MPI_Comm_get_errhandler() to behave the same as the setter.
</span><br>
<span class="quotelev2">&gt;&gt; Would this rationale be enough?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like we're a bit all over the map:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - comm_set_errhandler: mpi_err_comm
</span><br>
<span class="quotelev1">&gt; - comm_get_errhandler: mpi_err_arg
</span><br>
<span class="quotelev1">&gt; - file_set_errhandler: mpi_err_file
</span><br>
<span class="quotelev1">&gt; - file_get_errhandler: mpi_err_file
</span><br>
<span class="quotelev1">&gt; - win_set_errhandler: mpi_err_arg
</span><br>
<span class="quotelev1">&gt; - win_get_errhandler: mpi_err_arg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree that it would be good to have these all be consistent.  Just to be
</span><br>
<span class="quotelev1">&gt; sure: are you saying you'd prefer MPI_ERR_COMM|FILE|WIN for each of these
</span><br>
<span class="quotelev1">&gt; (respectively), vs. all of them returning MPI_ERR_ARG?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, I prefer the MPI_ERR_COMM|FILE|WIN if you pass the null handle to
<br>
the MPI_XXX_{get|set}_errhandler. Of course, remember that for
<br>
MPI_File, the rules are a bit different: MPI_FILE_NULL have to be
<br>
special-cased as it is a valid handle for this call...
<br>
<p>OTOH, if you have a valid Com/File/Win handle, but you try to set
<br>
MPI_ERRHANDLER_NULL, then in all cases we should get MPI_ERR_ARG (as
<br>
MPI does not provide a dedicated error class for signaling invalid
<br>
Errhandler handles).
<br>
<p><p><p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><p><pre>
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
<li><strong>Next message:</strong> <a href="5478.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5476.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5472.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5481.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5481.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5482.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
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
