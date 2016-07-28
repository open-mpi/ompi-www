<?
$subject_val = "Re: [OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 25 06:46:48 2011" -->
<!-- isoreceived="20110625104648" -->
<!-- sent="Sat, 25 Jun 2011 06:46:37 -0400" -->
<!-- isosent="20110625104637" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)" -->
<!-- id="27399D94-B779-4906-A335-04A9557E8E18_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTikxREPoH+Ny6uN-kMnBaN1r3ZNFUQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-25 06:46:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2011/10/0152.php">Rashid, Z. (Zahid): "[OMPI docs] Open MPI compilation Error"</a>
<li><strong>Previous message:</strong> <a href="0150.php">Zbigniew Koza: "[OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)"</a>
<li><strong>In reply to:</strong> <a href="0150.php">Zbigniew Koza: "[OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying -- thanks for noting this!
<br>
<p>I have fixed the typo in SVN and updated the web pages.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/24818">https://svn.open-mpi.org/trac/ompi/changeset/24818</a>
<br>
<p><p>On Jun 20, 2011, at 6:56 AM, Zbigniew Koza wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; In virtually all manpages of MPI_Wailtall and related functions,
</span><br>
<span class="quotelev1">&gt; including mthe anpages found in open-mpi web site:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/doc/v1.5/man3/MPI_Waitall.3.php">http://www.open-mpi.org/doc/v1.5/man3/MPI_Waitall.3.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there's an error in referencing nonexistent constant
</span><br>
<span class="quotelev1">&gt; MPI_IGNORE_STATUSES instead of correct MPI_STATUSES_IGNORE.
</span><br>
<span class="quotelev1">&gt; This happens for example in section Errors of this man page.
</span><br>
<span class="quotelev1">&gt; The same problem refers to related manpages, e.g. MPI_Waitany etc.
</span><br>
<span class="quotelev1">&gt; I suggest grepping the sources for  MPI_IGNORE_STATUSES and replacing
</span><br>
<span class="quotelev1">&gt; all its instances with MPI_STATUSES_IGNORE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This strange error is absolutely common in all versions of MPI man
</span><br>
<span class="quotelev1">&gt; pages I found in the Internet, see for example
</span><br>
<span class="quotelev1">&gt; <a href="http://www.unix.com/man-page/All/3/MPI_Waitall/">http://www.unix.com/man-page/All/3/MPI_Waitall/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Z Koza
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2011/10/0152.php">Rashid, Z. (Zahid): "[OMPI docs] Open MPI compilation Error"</a>
<li><strong>Previous message:</strong> <a href="0150.php">Zbigniew Koza: "[OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)"</a>
<li><strong>In reply to:</strong> <a href="0150.php">Zbigniew Koza: "[OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)"</a>
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
