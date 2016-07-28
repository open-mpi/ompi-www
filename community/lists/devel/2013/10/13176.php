<?
$subject_val = "Re: [OMPI devel] oshmem and CFLAGS removal";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 31 16:44:46 2013" -->
<!-- isoreceived="20131031204446" -->
<!-- sent="Thu, 31 Oct 2013 20:44:43 +0000" -->
<!-- isosent="20131031204443" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem and CFLAGS removal" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A37DDFAF9_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem and CFLAGS removal<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-31 16:44:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13177.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  oshmem and CFLAGS removal"</a>
<li><strong>Previous message:</strong> <a href="13175.php">Rolf vandeVaart: "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>In reply to:</strong> <a href="13175.php">Rolf vandeVaart: "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13177.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  oshmem and CFLAGS removal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Submit the ticket, please. I am looking at it now
<br>
<p>Josh
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Rolf vandeVaart
<br>
Sent: Thursday, October 31, 2013 4:43 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] oshmem and CFLAGS removal
<br>
<p><p><p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff 
</span><br>
<span class="quotelev1">&gt;Squyres
</span><br>
<span class="quotelev1">&gt;(jsquyres)
</span><br>
<span class="quotelev1">&gt;Sent: Thursday, October 31, 2013 4:12 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] oshmem and CFLAGS removal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Oct 31, 2013, at 3:46 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Strip off problematic arguments
</span><br>
<span class="quotelev2">&gt;&gt; oshmem_CFLAGS=&quot;`echo $oshmem_CFLAGS | sed 's/-pedantic//g'`&quot;
</span><br>
<span class="quotelev2">&gt;&gt; oshmem_CFLAGS=&quot;`echo $oshmem_CFLAGS | sed 's/-Wundef//g'`&quot;
</span><br>
<span class="quotelev2">&gt;&gt; oshmem_CFLAGS=&quot;`echo $oshmem_CFLAGS | sed 's/-Wno-long-
</span><br>
<span class="quotelev1">&gt;double//g'`&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I think the solution is simple -- delete this line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS=&quot;$oshmem_CFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Nope, it was not that simple.   With that change, the -pedantic and -Wundef end up in the CFLAGS for oshmem and I see all the warnings.
<br>
I will submit a ticket and give it to Joshua Ladd.  
<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13177.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  oshmem and CFLAGS removal"</a>
<li><strong>Previous message:</strong> <a href="13175.php">Rolf vandeVaart: "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>In reply to:</strong> <a href="13175.php">Rolf vandeVaart: "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13177.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  oshmem and CFLAGS removal"</a>
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
