<?
$subject_val = "Re: [OMPI devel] why does --rankfile need hostlist?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 21:09:49 2009" -->
<!-- isoreceived="20090619010949" -->
<!-- sent="Thu, 18 Jun 2009 19:09:43 -0600" -->
<!-- isosent="20090619010943" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] why does --rankfile need hostlist?" -->
<!-- id="71d2d8cc0906181809g7603a542n9bc2049a05f926d9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A3A9B1B.1090804_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] why does --rankfile need hostlist?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-18 21:09:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6278.php">Leo P.: "Re: [OMPI devel] some question about OMPI communicationinfrastructure"</a>
<li><strong>Previous message:</strong> <a href="6276.php">Jeff Squyres: "Re: [OMPI devel] some question about OMPI communicationinfrastructure"</a>
<li><strong>In reply to:</strong> <a href="6274.php">Eugene Loh: "[OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6284.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6284.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The two files have a slightly different format and completely different
<br>
meaning. The hostfile specifies how many slots are on a node. The rankfile
<br>
specifies a rank and what node/slot it is to be mapped onto.
<br>
Rankfiles can use relative node indexing and refer to nodes received from a
<br>
resource manager - i.e., without any hostfile.
<br>
<p>So the files are intentionally quite different. Trying to combine them would
<br>
be rather ugly.
<br>
Ralph
<br>
<p><p>On Thu, Jun 18, 2009 at 1:52 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In order to use &quot;mpirun --rankfile&quot;, I also need to specify hosts/hostlist.
</span><br>
<span class="quotelev1">&gt;  But that information is redundant with what I provide in the rankfile.  So,
</span><br>
<span class="quotelev1">&gt; from a user's point of view, this strikes me as broken.  Yes?  Should I file
</span><br>
<span class="quotelev1">&gt; a ticket, or am I missing something here about this functionality?
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6277/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6278.php">Leo P.: "Re: [OMPI devel] some question about OMPI communicationinfrastructure"</a>
<li><strong>Previous message:</strong> <a href="6276.php">Jeff Squyres: "Re: [OMPI devel] some question about OMPI communicationinfrastructure"</a>
<li><strong>In reply to:</strong> <a href="6274.php">Eugene Loh: "[OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6284.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6284.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
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
