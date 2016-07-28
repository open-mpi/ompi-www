<?
$subject_val = "Re: [OMPI devel] [Fwd:  multi-threaded test]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 11 20:11:25 2011" -->
<!-- isoreceived="20110312011125" -->
<!-- sent="Fri, 11 Mar 2011 20:11:20 -0500" -->
<!-- isosent="20110312011120" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Fwd:  multi-threaded test]" -->
<!-- id="48D1CCA9-97E3-4739-A40E-CE44A12CDF91_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Prayer.1.3.3.1103110854330.22266_at_hermes-1.csi.cam.ac.uk" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-11 20:11:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9060.php">George Bosilca: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Previous message:</strong> <a href="9058.php">Jeff Squyres: "[OMPI devel] 1.5.3rc1 has been posted"</a>
<li><strong>In reply to:</strong> <a href="9057.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9062.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9062.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Removing thread support is _NOT_ an option (<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Hybrid">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Hybrid</a>).
<br>
<p>Unlike the usual claims on this mailing list, MPI_THREAD_MULTIPLE had been fully supported for several BTLs in Open MPI (<a href="http://www.springerlink.com/content/lmh1144p51317313/">http://www.springerlink.com/content/lmh1144p51317313/</a>). The long term goal is to go back to at least the same level of support, and not to totally annihilate the efforts put into this in the past.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Mar 11, 2011, at 03:54 , N.M. Maclaren wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 11 2011, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The idea would be to hardwire support for MPI_THREAD_MULTIPLE to be off, just as we have done for progress threads.  Threads might still be used for other purposes -- e.g., ORTE, openib async thread, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's what I was assuming, too.  Threads used behind the scene are not
</span><br>
<span class="quotelev1">&gt; a problem - IF you can solve the infernal synchronisation and signalling
</span><br>
<span class="quotelev1">&gt; problems and stop them causing trouble in other ways!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Whether this should be done for MPI_THREAD_SERIALIZED, too, is debatable,
</span><br>
<span class="quotelev1">&gt; but it can't be done using a cautious interpretation of any published
</span><br>
<span class="quotelev1">&gt; standards that I know of, and in my experience can't be done reliably.
</span><br>
<span class="quotelev1">&gt; That's not nice, and I don't want to go there :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nick Maclaren.
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
<p>&quot;To preserve the freedom of the human mind then and freedom of the press, every spirit should be ready to devote itself to martyrdom; for as long as we may think as we will, and speak as we think, the condition of man will proceed in improvement.&quot;
<br>
&nbsp;&nbsp;-- Thomas Jefferson, 1799
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9060.php">George Bosilca: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Previous message:</strong> <a href="9058.php">Jeff Squyres: "[OMPI devel] 1.5.3rc1 has been posted"</a>
<li><strong>In reply to:</strong> <a href="9057.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9062.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9062.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
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
