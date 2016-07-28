<?
$subject_val = "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 00:37:17 2014" -->
<!-- isoreceived="20140808043717" -->
<!-- sent="Fri, 8 Aug 2014 00:37:16 -0400" -->
<!-- isosent="20140808043716" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value" -->
<!-- id="CAMJJpkW9vsNDUeh7BmCZHYds_LLu=yGqT9z=opzvizOXXr2c0w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="595C78BF-B966-4B98-BFD5-058CC79D645A_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 00:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15546.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="15544.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>In reply to:</strong> <a href="15524.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15572.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old	value"</a>
<li><strong>Reply:</strong> <a href="15572.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old	value"</a>
<li><strong>Reply:</strong> <a href="15614.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old	value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul's tests identified an small issue with the previous patch (a real
<br>
corner-case for ARM v5). The patch below is fixing all known issues.
<br>
<p>Btw, there is still room for volunteers for the .asm work.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Tue, Aug 5, 2014 at 2:23 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks to Paul help all the inlined atomics have been tested. The new
</span><br>
<span class="quotelev1">&gt; patch is attached below. However, this only fixes the inline atomics, all
</span><br>
<span class="quotelev1">&gt; those generated from the *.asm files have not been updated. Any volunteer?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 1, 2014, at 18:09 , Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have confirmed that George's latest version works on both SPARC ABIs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ARMv7 and three MIPS ABIs still pending...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 1, 2014 at 9:40 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another version of the atomic patch. Paul has tested it on a bunch of
</span><br>
<span class="quotelev2">&gt;&gt; platforms. At this point we have confirmation from all architectures except
</span><br>
<span class="quotelev2">&gt;&gt; SPARC (v8+ and v9).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 31, 2014, at 19:13 , George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; All,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Here is the patch that change the meaning of the atomics to make them
</span><br>
<span class="quotelev2">&gt;&gt; always return the previous value (similar to sync_fetch_and_&lt;*&gt;). I tested
</span><br>
<span class="quotelev2">&gt;&gt; this with the following atomics: OS X, gcc style intrinsics and AMD64.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I did not change the base assembly files used when GCC style assembly
</span><br>
<span class="quotelev2">&gt;&gt; operations are not supported. If someone feels like fixing them, feel free.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Paul, I know you have a pretty diverse range computers. Can you try to
</span><br>
<span class="quotelev2">&gt;&gt; compile and run a &#226;&#128;&#156;make check&#226;&#128;&#157; with the following patch?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  George.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;atomics.patch&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Jul 30, 2014, at 15:21 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; That is what I would prefer. I was trying to not disturb things too
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; much :). Please bring the changes over!
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Wed, Jul 30, 2014 at 03:18:44PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;  Why do you want to add new versions? This will lead to having two,
</span><br>
<span class="quotelev2">&gt;&gt; almost
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;  identical, sets of atomics that are conceptually equivalent but
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;  in terms of code. And we will have to maintained both!
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;  I did a similar change in a fork of OPAL in another project but
</span><br>
<span class="quotelev2">&gt;&gt; instead of
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;  adding another flavor of atomics, I completely replaced the
</span><br>
<span class="quotelev2">&gt;&gt; available ones
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;  with a set returning the old value. I can bring the code over.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    George.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;  On Tue, Jul 29, 2014 at 5:29 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    On Tue, Jul 29, 2014 at 2:10 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;      Is there a reason why the
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;      current implementations of opal atomics (add, cmpset) do not
</span><br>
<span class="quotelev2">&gt;&gt; return
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;      the
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;      old value?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    Because some CPUs don't implement such an atomic instruction?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    On any CPU one *can* certainly synthesize the desired operation
</span><br>
<span class="quotelev2">&gt;&gt; with an
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    added read before the compare-and-swap to return a value that was
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    present at some time before a failed cmpset.  That is almost
</span><br>
<span class="quotelev2">&gt;&gt; certainly
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    sufficient for your purposes.  However, the added load makes it
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    (marginally) more expensive on some CPUs that only have the native
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    equivalent of gcc's __sync_bool_compare_and_swap().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15545/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15545/atomics.patch">atomics.patch</a>
</ul>
<!-- attachment="atomics.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15546.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="15544.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>In reply to:</strong> <a href="15524.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15572.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old	value"</a>
<li><strong>Reply:</strong> <a href="15572.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old	value"</a>
<li><strong>Reply:</strong> <a href="15614.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old	value"</a>
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
