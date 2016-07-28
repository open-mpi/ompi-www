<?
$subject_val = "Re: [OMPI devel] Question regarding recently common shared-memory component";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 10:22:33 2010" -->
<!-- isoreceived="20100922142233" -->
<!-- sent="Wed, 22 Sep 2010 10:22:29 -0400" -->
<!-- isosent="20100922142229" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question regarding recently common shared-memory component" -->
<!-- id="26C6344D-725F-4998-9EE6-88ED24635804_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E7086597CF_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question regarding recently common shared-memory component<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 10:22:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8527.php">Kenneth Lloyd: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Previous message:</strong> <a href="8525.php">Pascal Deveze: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>In reply to:</strong> <a href="8516.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 21, 2010, at 12:37 PM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Like I said in my earlier response, I have never tried this option. So I ran these tests on 1.4.2 now and apparently the behavior is same ie; the checkpoint creation time increases when I enable shared memory componentL
</span><br>
<p>I don't have huge experience with the checkpoint/restart stuff, but this is probably not a surprising result because the checkpoint will now need to include the shared memory stuff. Are the checkpoint images larger?  (at least: is one of them noticeably larger?)  That might account for the checkpoint performance difference.
<br>
<p><span class="quotelev1">&gt; Is there any parameter that can be tuned to improve the performance?
</span><br>
<p>My understanding is that there are some inherent bottlenecks in checkpoint / restart, such as the time required to dump out all the process images to disk.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8527.php">Kenneth Lloyd: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Previous message:</strong> <a href="8525.php">Pascal Deveze: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>In reply to:</strong> <a href="8516.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
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
