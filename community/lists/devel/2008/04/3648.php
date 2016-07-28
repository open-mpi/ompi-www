<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 11:16:30 2008" -->
<!-- isoreceived="20080403151630" -->
<!-- sent="Thu, 3 Apr 2008 11:16:21 -0400" -->
<!-- isosent="20080403151621" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="73BCD70C-018C-4F52-BD07-574C5D29364B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080403125232.GI3614_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: changes to modex<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 11:16:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3649.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3647.php">Jon Mason: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>In reply to:</strong> <a href="3643.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3649.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3649.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 3, 2008, at 8:52 AM, Gleb Natapov wrote:
<br>
<span class="quotelev2">&gt;&gt; It'll increase it compared to the optimization that we're about to
</span><br>
<span class="quotelev2">&gt;&gt; make.  But it will certainly be a large decrease compared to what
</span><br>
<span class="quotelev2">&gt;&gt; we're doing today
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; May be I don't understand something in what you propose then.  
</span><br>
<span class="quotelev1">&gt; Currently
</span><br>
<span class="quotelev1">&gt; when I run two procs on the same node and each proc uses different HCA
</span><br>
<span class="quotelev1">&gt; each one of them sends message that describes the HCA in use by the
</span><br>
<span class="quotelev1">&gt; proc. The message is of the form &lt;mtu, subnet, lid, apm_lid, cpc&gt;.
</span><br>
<span class="quotelev1">&gt; Each proc send one of those so there are two message total on the  
</span><br>
<span class="quotelev1">&gt; wire.
</span><br>
<span class="quotelev1">&gt; You propose that one of them should send description of both
</span><br>
<span class="quotelev1">&gt; available ports (that is one of them sends two messages of the form
</span><br>
<span class="quotelev1">&gt; above) and then each proc send additional message with the index of  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; HCA that it is going to use. And this is more data on the wire after
</span><br>
<span class="quotelev1">&gt; proposed optimization than we have now.
</span><br>
<p>I guess what I'm trying to address is optimizing the common case.   
<br>
What I perceive the common case to be is:
<br>
<p>- high PPN values (4, 8, 16, ...)
<br>
- PPN is larger than the number of verbs-capable ports
<br>
- homogeneous openfabrics network
<br>
<p>Yes, you will definitely find other cases.  But I'd guess that this  
<br>
is, by far, the most common case (especially at scale).  I don't want  
<br>
to penalize the common case for the sake of some one-off installations.
<br>
<p>I'm basing this optimization on the assumption that PPN's will be  
<br>
larger than the number of available ports, so there will guarantee to  
<br>
be duplication in the modex message.  Removing that duplication is the  
<br>
main goal of this optimization.
<br>
<p><span class="quotelev2">&gt;&gt;                  (see the spreadsheet that I sent last week).
</span><br>
<span class="quotelev1">&gt; I've looked at it but I could not decipher it :( I don't understand
</span><br>
<span class="quotelev1">&gt; where all these numbers a come from.
</span><br>
<p>Why didn't you ask?  :-)
<br>
<p>The size of the openib modex is explained in btl_openib_component.c in  
<br>
the branch.  It's a packed message now; we don't just blindly copy an  
<br>
entire struct.  Here's the comment:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* The message is packed into multiple parts:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* 1. a uint8_t indicating the number of modules (ports) in the  
<br>
message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* 2. for each module:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*    a. the common module data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*    b. a uint8_t indicating how many CPCs follow
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*    c. for each CPC:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*       a. a uint8_t indicating the index of the CPC in the all[]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*          array in btl_openib_connect_base.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*       b. a uint8_t indicating the priority of this CPC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*       c. a uint8_t indicating the length of the blob to follow
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*       d. a blob that is only meaningful to that CPC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
<p>The common module data is what I sent in the other message.
<br>
<p><span class="quotelev2">&gt;&gt; I guess I don't see the problem...?
</span><br>
<span class="quotelev1">&gt; I like things to be simple. KISS principle I guess.
</span><br>
<p>I can see your point that this is getting fairly complicated.  :-\   
<br>
See below.
<br>
<p><span class="quotelev1">&gt; And I do care about
</span><br>
<span class="quotelev1">&gt; heterogeneous include/exclude too.
</span><br>
<p>How much?  I still think we can support it just fine; I just want to  
<br>
make [what I perceive to be] the common case better.
<br>
<p><span class="quotelev1">&gt; I looked at what kind of data we send during openib modex and I  
</span><br>
<span class="quotelev1">&gt; created
</span><br>
<span class="quotelev1">&gt; file with 10000 openib modex messages. mtu, subnet id and cpc list  
</span><br>
<span class="quotelev1">&gt; where
</span><br>
<span class="quotelev1">&gt; the same in each message but lid/apm_lid where different, this is
</span><br>
<span class="quotelev1">&gt; pretty close approximation of the data that is sent from HN to each
</span><br>
<span class="quotelev1">&gt; process. The uncompressed file size is 489K compressed file size is  
</span><br>
<span class="quotelev1">&gt; 43K.
</span><br>
<span class="quotelev1">&gt; More then 10 times smaller.
</span><br>
<p><p>Was this the full modex message, or just the openib part?
<br>
<p>Those are promising sizes (43k), though; how long does it take to  
<br>
compress/uncompress this data in memory?  That also must be factored  
<br>
into the overall time.
<br>
<p>How about a revised and combined proposal:
<br>
<p>- openib: Use a simplified &quot;send all ACTIVE ports&quot; per-host message  
<br>
(i.e., before include/exclude and carto is applied)
<br>
- openib: Send a small bitmap for each proc indicating which ports  
<br>
each btl module will use
<br>
- modex: Compress the result (probably only if it's larger than some  
<br>
threshhold size?) when sending, decompress upon receive
<br>
<p>This keeps it simple -- no special cases for heterogeneous include/ 
<br>
exclude, etc.  And if compression is cheap (can you do some  
<br>
experiments to find out?), perhaps we can link against libz (I see the  
<br>
libz in at least RHEL4 is BSD licensed, so there's no issue there) and  
<br>
de/compress in memory.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3649.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3647.php">Jon Mason: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>In reply to:</strong> <a href="3643.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3649.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3649.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
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
