<?
$subject_val = "Re: [OMPI devel] Exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 09:31:48 2011" -->
<!-- isoreceived="20110414133148" -->
<!-- sent="14 Apr 2011 14:31:44 +0100" -->
<!-- isosent="20110414133144" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Exit status" -->
<!-- id="Prayer.1.3.3.1104141431440.4613_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5CAF886D-5476-4EB8-B6CF-54385F822D3B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Exit status<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 09:31:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9179.php">Ken Lloyd: "Re: [OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9177.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>In reply to:</strong> <a href="9176.php">Ralph Castain: "Re: [OMPI devel] Exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9179.php">Ken Lloyd: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9179.php">Ken Lloyd: "Re: [OMPI devel] Exit status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14 2011, Ralph Castain wrote:
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...  It's hopeless, and whatever you do will be wrong for many
</span><br>
<span class="quotelev3">&gt;&gt;&gt; people.  ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think that sums it up pretty well.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It does seem a little strange that the scenario you describe somewhat 
</span><br>
<span class="quotelev2">&gt;&gt; implies that one process is calling MPI_Finalize loooong before the 
</span><br>
<span class="quotelev2">&gt;&gt; others do. Specifically, the user is concerned with tying up resources 
</span><br>
<span class="quotelev2">&gt;&gt; after one process has called Finalize -- which implies that the others 
</span><br>
<span class="quotelev2">&gt;&gt; may continue on for a while. It's not invalid, of course, but it is a 
</span><br>
<span class="quotelev2">&gt;&gt; little unusual.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm finding it more common than we thought. Note that I didn't say that 
</span><br>
<span class="quotelev1">&gt; one process called MPI_Finalize before the others. In this case, they 
</span><br>
<span class="quotelev1">&gt; call it fairly close together, but the individual processes continue 
</span><br>
<span class="quotelev1">&gt; running for quite some time, or until they determine that something is 
</span><br>
<span class="quotelev1">&gt; wrong and exit with non-zero status.
</span><br>
<p>Nobody is denying that it is common.  Now, what happens when you encounter
<br>
a language or compiler that uses return codes for mere warnings (e.g.
<br>
ignored IEEE 754 flags, as stated to be desirable by LIA-1)?  Bang!
<br>
<p>Remember that C is not the universe and many languages use MPI via the
<br>
C interface, but do not let C control their model.
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9179.php">Ken Lloyd: "Re: [OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9177.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>In reply to:</strong> <a href="9176.php">Ralph Castain: "Re: [OMPI devel] Exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9179.php">Ken Lloyd: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9179.php">Ken Lloyd: "Re: [OMPI devel] Exit status"</a>
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
