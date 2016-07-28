<?
$subject_val = "Re: [OMPI devel] RFC: update opal lifo class and add fifo class";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 17:59:11 2014" -->
<!-- isoreceived="20141202225911" -->
<!-- sent="Tue, 2 Dec 2014 15:59:10 -0700" -->
<!-- isosent="20141202225910" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: update opal lifo class and add fifo class" -->
<!-- id="20141202225910.GK14457_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkUE2wtNdkqbJ4DwMfmNGpE0VbVvmrf+r6b_pdLPaC9M6w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: update opal lifo class and add fifo class<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-02 17:59:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16413.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16411.php">George Bosilca: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<li><strong>In reply to:</strong> <a href="16411.php">George Bosilca: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 02, 2014 at 05:54:04PM -0500, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;    The FIFO implementation doesn't look right to me. I don't have time to
</span><br>
<span class="quotelev1">&gt;    look at it right now, but just looking at the push it will not correctly
</span><br>
<span class="quotelev1">&gt;    succeed if two threads are pushing items in same time.
</span><br>
<span class="quotelev1">&gt;    A FIFO is a very sensitive algorithm, and should be treated accordingly.
</span><br>
<span class="quotelev1">&gt;    Moreover, there is no immediate need for it, so I suggest you drop it from
</span><br>
<span class="quotelev1">&gt;    this RFC.
</span><br>
<p>Agreed there is no immediate need for it so I am willing to push it
<br>
off. I included it because it does indeed work (passes the brutal unit
<br>
test included in the pull request). The design is based off of the
<br>
nemesis fifo enhanced to use either a head spin-lock or 128-bit
<br>
compare-and-swap to avoid ABA issues. The nemesis fifo is single-reader
<br>
multiple-writer.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16412/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16413.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16411.php">George Bosilca: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<li><strong>In reply to:</strong> <a href="16411.php">George Bosilca: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
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
