<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  oshmem and CFLAGS removal";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 31 16:45:13 2013" -->
<!-- isoreceived="20131031204513" -->
<!-- sent="Thu, 31 Oct 2013 20:44:50 +0000" -->
<!-- isosent="20131031204450" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  oshmem and CFLAGS removal" -->
<!-- id="CE981D26.14BDD%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3600803E70C_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:  oshmem and CFLAGS removal<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-31 16:44:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13178.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:  oshmem and CFLAGS removal"</a>
<li><strong>Previous message:</strong> <a href="13176.php">Joshua Ladd: "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>In reply to:</strong> <a href="13175.php">Rolf vandeVaart: "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13178.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:  oshmem and CFLAGS removal"</a>
<li><strong>Reply:</strong> <a href="13178.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:  oshmem and CFLAGS removal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/31/13 2:42 PM, &quot;Rolf vandeVaart&quot; &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;(jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;Sent: Thursday, October 31, 2013 4:12 PM
</span><br>
<span class="quotelev2">&gt;&gt;To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt;Subject: Re: [OMPI devel] oshmem and CFLAGS removal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Oct 31, 2013, at 3:46 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Strip off problematic arguments
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oshmem_CFLAGS=&quot;`echo $oshmem_CFLAGS | sed 's/-pedantic//g'`&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oshmem_CFLAGS=&quot;`echo $oshmem_CFLAGS | sed 's/-Wundef//g'`&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oshmem_CFLAGS=&quot;`echo $oshmem_CFLAGS | sed 's/-Wno-long-
</span><br>
<span class="quotelev2">&gt;&gt;double//g'`&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I think the solution is simple -- delete this line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS=&quot;$oshmem_CFLAGS&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Nope, it was not that simple.   With that change, the -pedantic and
</span><br>
<span class="quotelev1">&gt;-Wundef end up in the CFLAGS for oshmem and I see all the warnings.
</span><br>
<span class="quotelev1">&gt;I will submit a ticket and give it to Joshua Ladd.
</span><br>
<p>Yeah, that's not going to work.  But a bigger question: why aren't
<br>
-pedantic and -Wundef set for SHMEM?  If it's an OMPI project, it has to
<br>
follow all the rules the other OMPI projects follow.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13178.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:  oshmem and CFLAGS removal"</a>
<li><strong>Previous message:</strong> <a href="13176.php">Joshua Ladd: "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>In reply to:</strong> <a href="13175.php">Rolf vandeVaart: "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13178.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:  oshmem and CFLAGS removal"</a>
<li><strong>Reply:</strong> <a href="13178.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re:  oshmem and CFLAGS removal"</a>
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
