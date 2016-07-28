<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 08:52:42 2008" -->
<!-- isoreceived="20080403125242" -->
<!-- sent="Thu, 3 Apr 2008 15:52:33 +0300" -->
<!-- isosent="20080403125233" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="20080403125232.GI3614_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="88E0A434-5F20-43FF-A900-FEAA27B49428_at_cisco.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 08:52:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3644.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3642.php">Ralph Castain: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>In reply to:</strong> <a href="3640.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3644.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3644.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3648.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 02, 2008 at 08:41:14PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev3">&gt; &gt;&gt; that it's the same for all procs on all hosts.  I guess there's a few
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cases:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. homogeneous include/exclude, no carto: send all in node info; no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; proc info
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. homogeneous include/exclude, carto is used: send all ports in node
</span><br>
<span class="quotelev3">&gt; &gt;&gt; info; send index in proc info for which node info port index it  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; will use
</span><br>
<span class="quotelev2">&gt; &gt; This may actually increase modex size. Think about two procs using two
</span><br>
<span class="quotelev2">&gt; &gt; different hcas. We'll send all the data we send today + indexes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It'll increase it compared to the optimization that we're about to  
</span><br>
<span class="quotelev1">&gt; make.  But it will certainly be a large decrease compared to what  
</span><br>
<span class="quotelev1">&gt; we're doing today
</span><br>
<p>May be I don't understand something in what you propose then. Currently
<br>
when I run two procs on the same node and each proc uses different HCA
<br>
each one of them sends message that describes the HCA in use by the
<br>
proc. The message is of the form &lt;mtu, subnet, lid, apm_lid, cpc&gt;.
<br>
Each proc send one of those so there are two message total on the wire.
<br>
You propose that one of them should send description of both
<br>
available ports (that is one of them sends two messages of the form
<br>
above) and then each proc send additional message with the index of the
<br>
HCA that it is going to use. And this is more data on the wire after
<br>
proposed optimization than we have now.
<br>
<p><p><span class="quotelev1">&gt;                   (see the spreadsheet that I sent last week).
</span><br>
I've looked at it but I could not decipher it :( I don't understand
<br>
where all these numbers a come from.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, we can even put in the optimization that if there's only one  
</span><br>
<span class="quotelev1">&gt; process on a host, it can only publish the ports that it will use (and  
</span><br>
<span class="quotelev1">&gt; therefore there's no need for the proc data).
</span><br>
More special cases :(
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3. heterogeneous include/exclude, no cart: need user to tell us that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this situation exists (e.g., use another MCA param), but then is same
</span><br>
<span class="quotelev3">&gt; &gt;&gt; as #2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4. heterogeneous include/exclude, cart is used, same as #3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Right?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Looks like it. FWIW I don't like the idea to code all those special
</span><br>
<span class="quotelev2">&gt; &gt; cases. The way it works now I can be pretty sure that any crazy setup
</span><br>
<span class="quotelev2">&gt; &gt; I'll come up with will work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And so it will with the new scheme.  The only place it won't work is  
</span><br>
<span class="quotelev1">&gt; if the user specifies a heterogeneous include/exclude (i.e., we'll  
</span><br>
<span class="quotelev1">&gt; require that the user tells us when they do that), which nobody does.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess I don't see the problem...?
</span><br>
I like things to be simple. KISS principle I guess. And I do care about
<br>
heterogeneous include/exclude too.
<br>
<p>BTW I looked at how we do modex now on the trunk. For OOB case more
<br>
than half the data we send for each proc is garbage.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; By the way how much data are moved during modex stage? What if modex
</span><br>
<span class="quotelev2">&gt; &gt; will use compression?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The spreadsheet I listed was just the openib part of the modex, and it  
</span><br>
<span class="quotelev1">&gt; was fairly hefty.  I have no idea how well (or not) it would compress.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I looked at what kind of data we send during openib modex and I created
<br>
file with 10000 openib modex messages. mtu, subnet id and cpc list where
<br>
the same in each message but lid/apm_lid where different, this is
<br>
pretty close approximation of the data that is sent from HN to each
<br>
process. The uncompressed file size is 489K compressed file size is 43K.
<br>
More then 10 times smaller.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3644.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3642.php">Ralph Castain: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>In reply to:</strong> <a href="3640.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3644.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3644.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3648.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
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
