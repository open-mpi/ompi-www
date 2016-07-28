<?
$subject_val = "Re: [OMPI devel] [PATCH] Open MPI on ARMv5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 07:14:52 2012" -->
<!-- isoreceived="20120504111452" -->
<!-- sent="Fri, 4 May 2012 12:16:06 +0100" -->
<!-- isosent="20120504111606" -->
<!-- name="Leif Lindholm" -->
<!-- email="Leif.Lindholm_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Open MPI on ARMv5" -->
<!-- id="EF1A049ABC19F94A9FC22A9D3BCDE8F9515A172101_at_GEORGE.Emea.Arm.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="1B268CDE-A00A-435B-9B1C-01231E1B64BE_at_cisco.com" -->
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
<strong>From:</strong> Leif Lindholm (<em>Leif.Lindholm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 07:16:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10971.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10969.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10969.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10971.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10971.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It causes no problems on/for the systems supported by trunk before the patch went in - it just means that in some situations it doesn't work on/for the systems enabled by that patch.
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: 04 May 2012 11:51
</span><br>
<span class="quotelev1">&gt; To: Evan Clinton
</span><br>
<span class="quotelev1">&gt; Cc: Peter Robinson; Leif Lindholm; Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [PATCH] Open MPI on ARMv5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I need to know in the immediate future is: does this affect the
</span><br>
<span class="quotelev1">&gt; new patch that we just put in the 1.6rc2 tarball?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2012/05/10968.php">http://www.open-mpi.org/community/lists/devel/2012/05/10968.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Meaning: I want to release 1.6 in the immediate future.  Is this a
</span><br>
<span class="quotelev1">&gt; blocker?  If so, how fast can we get a fix?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 2, 2012, at 6:07 PM, Evan Clinton wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; What I mean to say is that, as far as I can tell, in Open MPI's
</span><br>
<span class="quotelev2">&gt; &gt; configure stuff there's a switch based on what it detects the host
</span><br>
<span class="quotelev2">&gt; &gt; processor as (and this detection could be overridden by specifying
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; --host= thing); this is probably not the best way to do it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (sorry for the double-post again, dangit)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, May 2, 2012 at 5:52 PM, Peter Robinson &lt;pbrobinson_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, May 2, 2012 at 10:38 PM, Evan Clinton
</span><br>
<span class="quotelev1">&gt; &lt;evan.m.clinton_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The Fedora guys are having trouble building the armv5tel variant
</span><br>
<span class="quotelev1">&gt; (well, they did before this patch too, but... :)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://arm.koji.fedoraproject.org/koji/getfile?taskID=790343&amp;name=build">http://arm.koji.fedoraproject.org/koji/getfile?taskID=790343&amp;name=build</a>
</span><br>
<span class="quotelev1">&gt; .log
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ah, I think the problem is that the build system is not playing
</span><br>
<span class="quotelev1">&gt; nicely
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with cross-compiles (which it looks like that's doing
</span><br>
<span class="quotelev1">&gt; (specifically,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in that case, compiling for armv5 on an armv7 box)).  I think an
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; immediate workaround would be to do ./configure
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --host=armv5tel-unknown-linux-gnueabi or similar (in addition to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; specifying the target -march).  I think you'd need to specify the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --host in a similar manner for any cross-compile of Open MPI?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It's not cross compiling, it's native compile although it might be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; underlying armv7 device but it's running a armv5tel userspace.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ultimately for distribution compile platforms it should be paying
</span><br>
<span class="quotelev3">&gt; &gt;&gt; attention to what the build system is telling it to compile for not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the underlying device because it's built once and could be run on
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev3">&gt; &gt;&gt; number of devices.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>-- IMPORTANT NOTICE: The contents of this email and any attachments are confidential and may also be privileged. If you are not the intended recipient, please notify the sender immediately and do not disclose the contents to any other person, use it for any purpose, or store or copy the information in any medium.  Thank you.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10971.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10969.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10969.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10971.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Reply:</strong> <a href="10971.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
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
