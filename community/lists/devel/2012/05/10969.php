<?
$subject_val = "Re: [OMPI devel] [PATCH] Open MPI on ARMv5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 06:51:24 2012" -->
<!-- isoreceived="20120504105124" -->
<!-- sent="Fri, 4 May 2012 06:51:20 -0400" -->
<!-- isosent="20120504105120" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Open MPI on ARMv5" -->
<!-- id="1B268CDE-A00A-435B-9B1C-01231E1B64BE_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CALQMFq2-7UAq1bQvkOsa+eM85JX6oRM8kSR+y1KGcy7Z+66EbQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Open MPI on ARMv5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 06:51:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10970.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10968.php">Jeff Squyres: "[OMPI devel] Open MPI v1.6rc2 available"</a>
<li><strong>In reply to:</strong> <a href="10962.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10970.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10970.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What I need to know in the immediate future is: does this affect the new patch that we just put in the 1.6rc2 tarball? 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2012/05/10968.php">http://www.open-mpi.org/community/lists/devel/2012/05/10968.php</a>
<br>
<p>Meaning: I want to release 1.6 in the immediate future.  Is this a blocker?  If so, how fast can we get a fix?
<br>
<p><p>On May 2, 2012, at 6:07 PM, Evan Clinton wrote:
<br>
<p><span class="quotelev1">&gt; What I mean to say is that, as far as I can tell, in Open MPI's
</span><br>
<span class="quotelev1">&gt; configure stuff there's a switch based on what it detects the host
</span><br>
<span class="quotelev1">&gt; processor as (and this detection could be overridden by specifying the
</span><br>
<span class="quotelev1">&gt; --host= thing); this is probably not the best way to do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (sorry for the double-post again, dangit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, May 2, 2012 at 5:52 PM, Peter Robinson &lt;pbrobinson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 2, 2012 at 10:38 PM, Evan Clinton &lt;evan.m.clinton_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The Fedora guys are having trouble building the armv5tel variant (well, they did before this patch too, but... :)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://arm.koji.fedoraproject.org/koji/getfile?taskID=790343&amp;name=build.log">http://arm.koji.fedoraproject.org/koji/getfile?taskID=790343&amp;name=build.log</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah, I think the problem is that the build system is not playing nicely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with cross-compiles (which it looks like that's doing (specifically,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in that case, compiling for armv5 on an armv7 box)).  I think an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; immediate workaround would be to do ./configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --host=armv5tel-unknown-linux-gnueabi or similar (in addition to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifying the target -march).  I think you'd need to specify the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --host in a similar manner for any cross-compile of Open MPI?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's not cross compiling, it's native compile although it might be
</span><br>
<span class="quotelev2">&gt;&gt; underlying armv7 device but it's running a armv5tel userspace.
</span><br>
<span class="quotelev2">&gt;&gt; Ultimately for distribution compile platforms it should be paying
</span><br>
<span class="quotelev2">&gt;&gt; attention to what the build system is telling it to compile for not
</span><br>
<span class="quotelev2">&gt;&gt; the underlying device because it's built once and could be run on any
</span><br>
<span class="quotelev2">&gt;&gt; number of devices.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Peter
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10970.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10968.php">Jeff Squyres: "[OMPI devel] Open MPI v1.6rc2 available"</a>
<li><strong>In reply to:</strong> <a href="10962.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10970.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10970.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
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
