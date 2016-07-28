<?
$subject_val = "Re: [OMPI devel] [Fwd:  multi-threaded test]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 11 03:54:38 2011" -->
<!-- isoreceived="20110311085438" -->
<!-- sent="11 Mar 2011 08:54:33 +0000" -->
<!-- isosent="20110311085433" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Fwd:  multi-threaded test]" -->
<!-- id="Prayer.1.3.3.1103110854330.22266_at_hermes-1.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D79721F.2020703_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Fwd:  multi-threaded test]<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-11 03:54:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9058.php">Jeff Squyres: "[OMPI devel] 1.5.3rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="9056.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>In reply to:</strong> <a href="9052.php">Eugene Loh: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9059.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9059.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 11 2011, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The idea would be to hardwire support for MPI_THREAD_MULTIPLE to be off, 
</span><br>
<span class="quotelev1">&gt;just as we have done for progress threads.  Threads might still be used 
</span><br>
<span class="quotelev1">&gt;for other purposes -- e.g., ORTE, openib async thread, etc.
</span><br>
<p>That's what I was assuming, too.  Threads used behind the scene are not
<br>
a problem - IF you can solve the infernal synchronisation and signalling
<br>
problems and stop them causing trouble in other ways!
<br>
<p>Whether this should be done for MPI_THREAD_SERIALIZED, too, is debatable,
<br>
but it can't be done using a cautious interpretation of any published
<br>
standards that I know of, and in my experience can't be done reliably.
<br>
That's not nice, and I don't want to go there :-(
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9058.php">Jeff Squyres: "[OMPI devel] 1.5.3rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="9056.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>In reply to:</strong> <a href="9052.php">Eugene Loh: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9059.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9059.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
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
