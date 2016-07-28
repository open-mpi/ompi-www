<?
$subject_val = "Re: [OMPI devel] ROMIO update breaks trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 16:14:45 2013" -->
<!-- isoreceived="20131114211445" -->
<!-- sent="Thu, 14 Nov 2013 13:13:46 -0800" -->
<!-- isosent="20131114211346" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ROMIO update breaks trunk" -->
<!-- id="98051FD8-E615-4228-B51F-BEF6E9A60AFC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.01.1311141604380.20941_at_tigger.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ROMIO update breaks trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 16:13:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13272.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13270.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13268.php">Thomas Naughton: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, thanks! Yes indeed
<br>
<p>On Nov 14, 2013, at 1:05 PM, Thomas Naughton &lt;naughtont_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does the version in AM_INIT_AUTOMAKE in configure.ac also need to be
</span><br>
<span class="quotelev1">&gt; increased?  It currently shows 1.11.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --tjn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _________________________________________________________________________
</span><br>
<span class="quotelev1">&gt;  Thomas Naughton                                      naughtont_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Research Associate                                   (865) 576-4184
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 14 Nov 2013, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ha! Jeff points out that our web site says we are at AM 1.12.2 - yet our
</span><br>
<span class="quotelev2">&gt;&gt; HACKING file says 1.11.1  Sadness
</span><br>
<span class="quotelev2">&gt;&gt; I'll leave the romio update alone and update the HACKING file to avoid
</span><br>
<span class="quotelev2">&gt;&gt; future confusion
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 14, 2013, at 12:41 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      Just in case others are encountering this: the recent ROMIO
</span><br>
<span class="quotelev2">&gt;&gt;      update contains a line in its configure.ac that breaks the trunk
</span><br>
<span class="quotelev2">&gt;&gt;      for automake versions less than 1.12:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;I've looked a bit around online for this, and the consensus generally seems
</span><br>
<span class="quotelev2">&gt;&gt; to be that AM_PROG_AR should be added in libtool, not in every configure.ac
</span><br>
<span class="quotelev2">&gt;&gt; script out there. It's especially problematic as AM_PROG_AR doesn't exist i
</span><br>
<span class="quotelev2">&gt;&gt; n automake before 1.12, which means it breaks, among others, with the automa
</span><br>
<span class="quotelev2">&gt;&gt; ke we use to build our distribution tarballs :-)
</span><br>
<span class="quotelev2">&gt;&gt; See e.g. <a href="http://debbugs.gnu.org/cgi/bugreport.cgi?bug=11401">http://debbugs.gnu.org/cgi/bugreport.cgi?bug=11401</a> for a discussion
</span><br>
<span class="quotelev2">&gt;&gt; .&quot;
</span><br>
<span class="quotelev2">&gt;&gt; I'm going to comment that line out in ompi/mca/io/romio/romio/configure.ac s
</span><br>
<span class="quotelev2">&gt;&gt; o the trunk can build until someone figures out (a) if it is really needed, and (b) how to correctly add it
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13272.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13270.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13268.php">Thomas Naughton: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
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
