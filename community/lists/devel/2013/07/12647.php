<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 10:37:17 2013" -->
<!-- isoreceived="20130718143717" -->
<!-- sent="Thu, 18 Jul 2013 16:37:15 +0200" -->
<!-- isosent="20130718143715" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="C5F030A2-BC89-45BE-ACD3-5EC9133748FF_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A81595BB-8098-4809-B7C7-650807C472F7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_info<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 10:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12648.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12646.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12644.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 18, 2013, at 15:06 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; I think ompi_info has always shown all the variables despite what you have the selection variable set (at least in some cases). We now just display everything in all cases. An additional benefit to the updated code is that if you set a selection variable through the environment (OMPI_MCA_btl=self,sm) it no longer appears as unset in ompi_info. The old code unset all selection variables in order to ensure all parameters got printed (very annoying but necessary).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph comment above is not accurate. Prior to this change (well the one from few weeks ago), explicitly forbidden components did not leave traces in the MCA parameters list. I validate this with the latest stable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: that wasn't my comment
</span><br>
<p>Sorry Ralph I was wrong, the comment was from Nathan. This discussion grew out of hand, it became difficult to follow who said what and when.
<br>
<p>&nbsp;&nbsp;George.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12648.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12646.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12644.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
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
