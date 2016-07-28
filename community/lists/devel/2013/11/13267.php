<?
$subject_val = "Re: [OMPI devel] ROMIO update breaks trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 15:56:09 2013" -->
<!-- isoreceived="20131114205609" -->
<!-- sent="Thu, 14 Nov 2013 12:55:04 -0800" -->
<!-- isosent="20131114205504" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ROMIO update breaks trunk" -->
<!-- id="E8B7115B-1527-44F9-83B6-909E35C03F97_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="72BDFD83-6CE8-4941-A22D-F9C3D7DE7C24_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-11-14 15:55:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13268.php">Thomas Naughton: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>Previous message:</strong> <a href="13266.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13265.php">Ralph Castain: "[OMPI devel] ROMIO update breaks trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13268.php">Thomas Naughton: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>Reply:</strong> <a href="13268.php">Thomas Naughton: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ha! Jeff points out that our web site says we are at AM 1.12.2 - yet our HACKING file says 1.11.1  Sadness
<br>
<p>I'll leave the romio update alone and update the HACKING file to avoid future confusion
<br>
<p><p>On Nov 14, 2013, at 12:41 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Just in case others are encountering this: the recent ROMIO update contains a line in its configure.ac that breaks the trunk for automake versions less than 1.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;I've looked a bit around online for this, and the consensus generally seems to be that AM_PROG_AR should be added in libtool, not in every configure.ac script out there. It's especially problematic as AM_PROG_AR doesn't exist in automake before 1.12, which means it breaks, among others, with the automake we use to build our distribution tarballs :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See e.g. <a href="http://debbugs.gnu.org/cgi/bugreport.cgi?bug=11401">http://debbugs.gnu.org/cgi/bugreport.cgi?bug=11401</a> for a discussion.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm going to comment that line out in ompi/mca/io/romio/romio/configure.ac so the trunk can build until someone figures out (a) if it is really needed, and (b) how to correctly add it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13267/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13268.php">Thomas Naughton: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>Previous message:</strong> <a href="13266.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13265.php">Ralph Castain: "[OMPI devel] ROMIO update breaks trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13268.php">Thomas Naughton: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>Reply:</strong> <a href="13268.php">Thomas Naughton: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
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
