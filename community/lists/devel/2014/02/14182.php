<?
$subject_val = "Re: [OMPI devel] RFC: optimize probe in ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 18 18:56:03 2014" -->
<!-- isoreceived="20140218235603" -->
<!-- sent="Tue, 18 Feb 2014 16:56:01 -0700" -->
<!-- isosent="20140218235601" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: optimize probe in ob1" -->
<!-- id="20140218235601.GS89915_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D7D477DB-8C3D-4409-A47E-4A4D5889ADAB_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2014-02-18 18:56:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14183.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Previous message:</strong> <a href="14181.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>In reply to:</strong> <a href="14087.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14183.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14183.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Feb 11, 2014 at 01:43:37AM +0100, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The class is only usable in the context of a single .c file. As a code protection it makes perfect sense to me.
</span><br>
<p>Ah, yes. So it is. Fixed in the latest patch.
<br>
<p><span class="quotelev1">&gt; It&#226;&#128;&#153;s not yet, and I did not notice an RFC about. The event I was referring to is only generated when the message is first noticed. In the particular instance affected by your patch it has been delayed until the communicator is created locally, but it still have to be generated once. 
</span><br>
<p>The problem is the message is not generated once but twice with
<br>
add_fragment_to_unexpected where it is. One message is generated when
<br>
an out of order packet is processed by the outer loop (it is put into
<br>
the out of order list) then another time when it is processed by the
<br>
inter loop jumping to the add_fragment_to_unexpected. This has no affect
<br>
on the iprobe optimization so I have dropped it from my proposed patch.
<br>
<p><span class="quotelev1">&gt; The size check and the removal from the list is still in the critical path. At some point we were down to few hundreds of nano-sec, enough to get bugged by one extra memory reference.
</span><br>
<p>I modified the patch to only remove procs from the unexpected_procs list
<br>
when matching wildcard receive requests. This way there are no extra
<br>
instructions in the critical path. It will make probe a little slower
<br>
than the previous patch but that is ok. I see no degredation with simple
<br>
pt2pt benchmarks with vader. Please take a look and let me know what you
<br>
think.
<br>
<p>-Nathan
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14182/iprobe_patch_v2.patch">iprobe_patch_v2.patch</a>
</ul>
<!-- attachment="iprobe_patch_v2.patch" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14182/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14183.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Previous message:</strong> <a href="14181.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>In reply to:</strong> <a href="14087.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14183.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14183.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
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
