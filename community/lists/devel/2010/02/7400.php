<?
$subject_val = "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 13:28:24 2010" -->
<!-- isoreceived="20100210182824" -->
<!-- sent="Wed, 10 Feb 2010 13:28:14 -0500" -->
<!-- isosent="20100210182814" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL" -->
<!-- id="6C1C9E12-267F-4045-9EF9-DCA2446B6EC8_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="e7ba66e41002100950v526b70f1t308af062fc0a1ba9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 13:28:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7401.php">Jeff Squyres: "[OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Previous message:</strong> <a href="7399.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7399.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7396.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In not throwing my $.02 cent on this discussion ;)
<br>
<p>On Feb 10, 2010, at 12:50 , Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; PS: The following question is unrelated to this thread, but my
</span><br>
<span class="quotelev1">&gt; curiosity+laziness cannot resist... Does Open MPI has some MCA
</span><br>
<span class="quotelev1">&gt; parameter to add a synchronization at every collective call?
</span><br>
<p>Yes we do. There is a special collective component, that will activate itself along with the selected one. &quot;ompi_info --param coll sync&quot; will show you the MCA parameters you need to set in order to activate it.
<br>
<p>&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7401.php">Jeff Squyres: "[OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Previous message:</strong> <a href="7399.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7399.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7396.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
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
