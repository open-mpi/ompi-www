<?
$subject_val = "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 10:47:59 2009" -->
<!-- isoreceived="20090219154759" -->
<!-- sent="Thu, 19 Feb 2009 10:47:51 -0500" -->
<!-- isosent="20090219154751" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bugs and unexpected values in returned errors classes" -->
<!-- id="B0DEE4DC-346C-4EEB-83D6-94EBEE046263_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40902190634v3c0e4f3dk53c2552c662e2565_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 10:47:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5482.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5480.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5477.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5483.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5483.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fail to find anything about this on the MPI Standard. For me passing  
<br>
the NULL error handle to any kind of set handler function should not  
<br>
be an error. It should means that you prefer to not have any error  
<br>
handler triggered on the object.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 19, 2009, at 09:34 , Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Feb 19, 2009 at 10:54 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 16, 2009, at 9:14 AM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After running my testsuite again and next looking at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;ompi/mpi/c/comm_set_errhandler.c&quot;, I noticed that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_set_errhandler() do return MPI_ERR_COMM when invalid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicators are passed. IMHO, for the sake of consistency, you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should fix MPI_Comm_get_errhandler() to behave the same as the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setter.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would this rationale be enough?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like we're a bit all over the map:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - comm_set_errhandler: mpi_err_comm
</span><br>
<span class="quotelev2">&gt;&gt; - comm_get_errhandler: mpi_err_arg
</span><br>
<span class="quotelev2">&gt;&gt; - file_set_errhandler: mpi_err_file
</span><br>
<span class="quotelev2">&gt;&gt; - file_get_errhandler: mpi_err_file
</span><br>
<span class="quotelev2">&gt;&gt; - win_set_errhandler: mpi_err_arg
</span><br>
<span class="quotelev2">&gt;&gt; - win_get_errhandler: mpi_err_arg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree that it would be good to have these all be consistent.   
</span><br>
<span class="quotelev2">&gt;&gt; Just to be
</span><br>
<span class="quotelev2">&gt;&gt; sure: are you saying you'd prefer MPI_ERR_COMM|FILE|WIN for each of  
</span><br>
<span class="quotelev2">&gt;&gt; these
</span><br>
<span class="quotelev2">&gt;&gt; (respectively), vs. all of them returning MPI_ERR_ARG?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I prefer the MPI_ERR_COMM|FILE|WIN if you pass the null handle to
</span><br>
<span class="quotelev1">&gt; the MPI_XXX_{get|set}_errhandler. Of course, remember that for
</span><br>
<span class="quotelev1">&gt; MPI_File, the rules are a bit different: MPI_FILE_NULL have to be
</span><br>
<span class="quotelev1">&gt; special-cased as it is a valid handle for this call...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OTOH, if you have a valid Com/File/Win handle, but you try to set
</span><br>
<span class="quotelev1">&gt; MPI_ERRHANDLER_NULL, then in all cases we should get MPI_ERR_ARG (as
</span><br>
<span class="quotelev1">&gt; MPI does not provide a dedicated error class for signaling invalid
</span><br>
<span class="quotelev1">&gt; Errhandler handles).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5482.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5480.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5477.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5483.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5483.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
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
