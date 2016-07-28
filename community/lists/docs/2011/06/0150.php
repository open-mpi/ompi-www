<?
$subject_val = "[OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 20 06:56:56 2011" -->
<!-- isoreceived="20110620105656" -->
<!-- sent="Mon, 20 Jun 2011 12:56:52 +0200" -->
<!-- isosent="20110620105652" -->
<!-- name="Zbigniew Koza" -->
<!-- email="zzkoza_at_[hidden]" -->
<!-- subject="[OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)" -->
<!-- id="BANLkTikxREPoH+Ny6uN-kMnBaN1r3ZNFUQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)<br>
<strong>From:</strong> Zbigniew Koza (<em>zzkoza_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-20 06:56:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0151.php">Jeff Squyres: "Re: [OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)"</a>
<li><strong>Previous message:</strong> <a href="0149.php">Jeff Squyres: "Re: [OMPI docs] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0151.php">Jeff Squyres: "Re: [OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)"</a>
<li><strong>Reply:</strong> <a href="0151.php">Jeff Squyres: "Re: [OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
In virtually all manpages of MPI_Wailtall and related functions,
<br>
including mthe anpages found in open-mpi web site:
<br>
<p><a href="http://www.open-mpi.org/doc/v1.5/man3/MPI_Waitall.3.php">http://www.open-mpi.org/doc/v1.5/man3/MPI_Waitall.3.php</a>
<br>
<p>there's an error in referencing nonexistent constant
<br>
MPI_IGNORE_STATUSES instead of correct MPI_STATUSES_IGNORE.
<br>
This happens for example in section Errors of this man page.
<br>
The same problem refers to related manpages, e.g. MPI_Waitany etc.
<br>
I suggest grepping the sources for  MPI_IGNORE_STATUSES and replacing
<br>
all its instances with MPI_STATUSES_IGNORE.
<br>
<p>This strange error is absolutely common in all versions of MPI man
<br>
pages I found in the Internet, see for example
<br>
<a href="http://www.unix.com/man-page/All/3/MPI_Waitall/">http://www.unix.com/man-page/All/3/MPI_Waitall/</a>
<br>
<p>regards,
<br>
Z Koza
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0151.php">Jeff Squyres: "Re: [OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)"</a>
<li><strong>Previous message:</strong> <a href="0149.php">Jeff Squyres: "Re: [OMPI docs] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0151.php">Jeff Squyres: "Re: [OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)"</a>
<li><strong>Reply:</strong> <a href="0151.php">Jeff Squyres: "Re: [OMPI docs] Error in man pages (MPI_IGNORE_STATUSES)"</a>
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
