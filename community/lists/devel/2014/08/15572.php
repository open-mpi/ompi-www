<?
$subject_val = "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old	value";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 21:27:25 2014" -->
<!-- isoreceived="20140809012725" -->
<!-- sent="Sat, 9 Aug 2014 01:27:22 +0000" -->
<!-- isosent="20140809012722" -->
<!-- name="Hjelm, Nathan Thomas" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old	value" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A903991_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CAMJJpkW9vsNDUeh7BmCZHYds_LLu=yGqT9z=opzvizOXXr2c0w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old	value<br>
<strong>From:</strong> Hjelm, Nathan Thomas (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 21:27:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15573.php">Paul Hargrove: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Previous message:</strong> <a href="15571.php">George Bosilca: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>In reply to:</strong> <a href="15545.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15614.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old	value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will try to take a look this week and see what I can do.
<br>
<p>-Nathan
<br>
________________________________________
<br>
From: devel [devel-bounces_at_[hidden]] on behalf of George Bosilca [bosilca_at_[hidden]]
<br>
Sent: Thursday, August 07, 2014 10:37 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old     value
<br>
<p>Paul's tests identified an small issue with the previous patch (a real corner-case for ARM v5). The patch below is fixing all known issues.
<br>
<p>Btw, there is still room for volunteers for the .asm work.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Tue, Aug 5, 2014 at 2:23 PM, George Bosilca &lt;bosilca_at_[hidden]&lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
<br>
Thanks to Paul help all the inlined atomics have been tested. The new patch is attached below. However, this only fixes the inline atomics, all those generated from the *.asm files have not been updated. Any volunteer?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Aug 1, 2014, at 18:09 , Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
<br>
<p>I have confirmed that George's latest version works on both SPARC ABIs.
<br>
<p>ARMv7 and three MIPS ABIs still pending...
<br>
<p>-Paul
<br>
<p><p>On Fri, Aug 1, 2014 at 9:40 AM, George Bosilca &lt;bosilca_at_[hidden]&lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
<br>
Another version of the atomic patch. Paul has tested it on a bunch of platforms. At this point we have confirmation from all architectures except SPARC (v8+ and v9).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Jul 31, 2014, at 19:13 , George Bosilca &lt;bosilca_at_[hidden]&lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the patch that change the meaning of the atomics to make them always return the previous value (similar to sync_fetch_and_&lt;*&gt;). I tested this with the following atomics: OS X, gcc style intrinsics and AMD64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did not change the base assembly files used when GCC style assembly operations are not supported. If someone feels like fixing them, feel free.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul, I know you have a pretty diverse range computers. Can you try to compile and run a &#147;make check&#148; with the following patch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;atomics.patch&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 30, 2014, at 15:21 , Nathan Hjelm &lt;hjelmn_at_[hidden]&lt;mailto:hjelmn_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That is what I would prefer. I was trying to not disturb things too
</span><br>
<span class="quotelev2">&gt;&gt; much :). Please bring the changes over!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 30, 2014 at 03:18:44PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Why do you want to add new versions? This will lead to having two, almost
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  identical, sets of atomics that are conceptually equivalent but different
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  in terms of code. And we will have to maintained both!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I did a similar change in a fork of OPAL in another project but instead of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  adding another flavor of atomics, I completely replaced the available ones
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  with a set returning the old value. I can bring the code over.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On Tue, Jul 29, 2014 at 5:29 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    On Tue, Jul 29, 2014 at 2:10 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&lt;mailto:hjelmn_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Is there a reason why the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      current implementations of opal atomics (add, cmpset) do not return
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      old value?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Because some CPUs don't implement such an atomic instruction?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    On any CPU one *can* certainly synthesize the desired operation with an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    added read before the compare-and-swap to return a value that was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    present at some time before a failed cmpset.  That is almost certainly
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    sufficient for your purposes.  However, the added load makes it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    (marginally) more expensive on some CPUs that only have the native
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    equivalent of gcc's __sync_bool_compare_and_swap().
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15573.php">Paul Hargrove: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>Previous message:</strong> <a href="15571.php">George Bosilca: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>In reply to:</strong> <a href="15545.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15614.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old	value"</a>
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
