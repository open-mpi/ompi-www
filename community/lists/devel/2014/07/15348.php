<?
$subject_val = "Re: [OMPI devel] trunk compilation errors in jenkins";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 02:16:25 2014" -->
<!-- isoreceived="20140730061625" -->
<!-- sent="Wed, 30 Jul 2014 15:16:16 +0900" -->
<!-- isosent="20140730061616" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk compilation errors in jenkins" -->
<!-- id="53D88DB0.7030307_at_iferc.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C8BBBF0F-C0AE-4F6D-88D4-195749C2BA91_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk compilation errors in jenkins<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 02:16:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15349.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Previous message:</strong> <a href="15347.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15275.php">George Bosilca: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15354.php">Rolf vandeVaart: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Reply:</strong> <a href="15354.php">Rolf vandeVaart: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>#4815 is indirectly related to the move :
<br>
<p>in bcol/basesmuma, we used to compare ompi_process_name_t, and now we
<br>
(try to)
<br>
compare an ompi_process_name_t and an opal_process_name_t (which causes
<br>
a glory SIGSEGV)
<br>
<p>i proposed a temporary patch which is both broken and unelegant,
<br>
could you please advise a correct solution ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/07/27 7:37, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; If you have any issue with the move, I&#146;ll be happy to help and/or support you on your last move toward a completely generic BTL. To facilitate your work I exposed a minimalistic set of OMPI information at the OPAL level. Take a look at opal/util/proc.h for more info, but please try not to expose more.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15349.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Previous message:</strong> <a href="15347.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15275.php">George Bosilca: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15354.php">Rolf vandeVaart: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Reply:</strong> <a href="15354.php">Rolf vandeVaart: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
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
