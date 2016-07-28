<?
$subject_val = "Re: [OMPI devel] RFC: optimize probe in ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 19 12:07:51 2014" -->
<!-- isoreceived="20140219170751" -->
<!-- sent="Wed, 19 Feb 2014 10:07:50 -0700" -->
<!-- isosent="20140219170750" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: optimize probe in ob1" -->
<!-- id="20140219170750.GA87694_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3B228841-7038-4CC5-9BCD-4E5F4B899A0F_at_cisco.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-19 12:07:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14186.php">Paul Hargrove: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Previous message:</strong> <a href="14184.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>In reply to:</strong> <a href="14184.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14186.php">Paul Hargrove: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 19, 2014 at 04:37:41PM +0000, Dave Goodell (dgoodell) wrote:
<br>
<span class="quotelev1">&gt; On Feb 19, 2014, at 6:36 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; There is one minor thing I would suggest to change. In your patch in_unexpected_list is defined as a bool, which translates to an int on most platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This statement isn't true.  sizeof(bool)==1 on my Mac and on our x86_64 Linux cluster at Cisco.  I only mention it because this seems to be a common myth for some reason.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You can change it to an uint8_t and move the in_unexpected_list field in the mca_pml_ob1_comm_proc_t to allow the compiler to pack it with the expected_sequence.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, this is still a reasonable suggestion to ensure that we retain good control of our structure sizes/layouts.
</span><br>
<p>Agreed. I can create a container class for unexpected procs. Would add
<br>
OBJ_NEW/OBJ_RELEASE calls in the unexpected message path but there is
<br>
already allocation in that path so it shouldn't be an issue. I will work
<br>
on this change and post an updated patch.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14185/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14186.php">Paul Hargrove: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Previous message:</strong> <a href="14184.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>In reply to:</strong> <a href="14184.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14186.php">Paul Hargrove: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
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
