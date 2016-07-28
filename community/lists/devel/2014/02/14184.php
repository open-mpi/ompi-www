<?
$subject_val = "Re: [OMPI devel] RFC: optimize probe in ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 19 11:37:43 2014" -->
<!-- isoreceived="20140219163743" -->
<!-- sent="Wed, 19 Feb 2014 16:37:41 +0000" -->
<!-- isosent="20140219163741" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: optimize probe in ob1" -->
<!-- id="3B228841-7038-4CC5-9BCD-4E5F4B899A0F_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="2D12C9D6-746A-4B6B-B527-A622382157CF_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: optimize probe in ob1<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-19 11:37:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14185.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Previous message:</strong> <a href="14183.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>In reply to:</strong> <a href="14183.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14185.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14185.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14186.php">Paul Hargrove: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 19, 2014, at 6:36 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; There is one minor thing I would suggest to change. In your patch in_unexpected_list is defined as a bool, which translates to an int on most platforms.
</span><br>
<p>This statement isn't true.  sizeof(bool)==1 on my Mac and on our x86_64 Linux cluster at Cisco.  I only mention it because this seems to be a common myth for some reason.
<br>
<p><span class="quotelev1">&gt; You can change it to an uint8_t and move the in_unexpected_list field in the mca_pml_ob1_comm_proc_t to allow the compiler to pack it with the expected_sequence.
</span><br>
<p>However, this is still a reasonable suggestion to ensure that we retain good control of our structure sizes/layouts.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14185.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Previous message:</strong> <a href="14183.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>In reply to:</strong> <a href="14183.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14185.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14185.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14186.php">Paul Hargrove: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
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
