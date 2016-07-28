<?
$subject_val = "[OMPI devel] Vprotocol build problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 09:56:17 2008" -->
<!-- isoreceived="20080421135617" -->
<!-- sent="Mon, 21 Apr 2008 07:56:08 -0600" -->
<!-- isosent="20080421135608" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Vprotocol build problem" -->
<!-- id="C431F918.D2A3%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Vprotocol build problem<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-21 09:56:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3729.php">Jeff Squyres: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Previous message:</strong> <a href="3727.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3730.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol build problem"</a>
<li><strong>Reply:</strong> <a href="3730.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol build problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am now simply trying some of our vaunted configure system's options to see
<br>
what actually works, and what doesn't.
<br>
<p>Here is one that does NOT work:
<br>
<p>enable_mca_no_build=pml-v
<br>
<p>Generates the following build error:
<br>
<p>configure: error: conditional &quot;OMPI_BUILD_vprotocol_pessimist_DSO&quot; was never
<br>
defined.
<br>
Usually this means the macro was only invoked conditionally.
<br>
<p><p>Could somebody please fix this? Although I know it is &quot;on&quot; by default,
<br>
people should be able to turn it &quot;off&quot; - or we need to tell them &quot;you
<br>
can't&quot;.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3729.php">Jeff Squyres: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Previous message:</strong> <a href="3727.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3730.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol build problem"</a>
<li><strong>Reply:</strong> <a href="3730.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol build problem"</a>
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
