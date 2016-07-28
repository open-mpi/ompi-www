<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 09:05:41 2008" -->
<!-- isoreceived="20080403130541" -->
<!-- sent="Thu, 03 Apr 2008 07:05:28 -0600" -->
<!-- isosent="20080403130528" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="C41A3238.CF14%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 09:05:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3645.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3643.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3643.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3645.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3645.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmmm...since I have no control nor involvement in what gets sent, perhaps I
<br>
can be a disinterested third party. ;-)
<br>
<p>Could you perhaps explain this comment:
<br>
<p><span class="quotelev1">&gt; BTW I looked at how we do modex now on the trunk. For OOB case more
</span><br>
<span class="quotelev1">&gt; than half the data we send for each proc is garbage.
</span><br>
<p><p>What &quot;garbage&quot; are you referring to? I am working to remove the stuff
<br>
inserted by proc.c - mostly hostname, hopefully arch, etc. If you are
<br>
running a &quot;debug&quot; version, there will also be type descriptors for each
<br>
entry, but those are eliminated for optimized builds.
<br>
<p>So are you referring to other things?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On 4/3/08 6:52 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Apr 02, 2008 at 08:41:14PM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that it's the same for all procs on all hosts.  I guess there's a few
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cases:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. homogeneous include/exclude, no carto: send all in node info; no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proc info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. homogeneous include/exclude, carto is used: send all ports in node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; info; send index in proc info for which node info port index it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may actually increase modex size. Think about two procs using two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different hcas. We'll send all the data we send today + indexes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It'll increase it compared to the optimization that we're about to
</span><br>
<span class="quotelev2">&gt;&gt; make.  But it will certainly be a large decrease compared to what
</span><br>
<span class="quotelev2">&gt;&gt; we're doing today
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; May be I don't understand something in what you propose then. Currently
</span><br>
<span class="quotelev1">&gt; when I run two procs on the same node and each proc uses different HCA
</span><br>
<span class="quotelev1">&gt; each one of them sends message that describes the HCA in use by the
</span><br>
<span class="quotelev1">&gt; proc. The message is of the form &lt;mtu, subnet, lid, apm_lid, cpc&gt;.
</span><br>
<span class="quotelev1">&gt; Each proc send one of those so there are two message total on the wire.
</span><br>
<span class="quotelev1">&gt; You propose that one of them should send description of both
</span><br>
<span class="quotelev1">&gt; available ports (that is one of them sends two messages of the form
</span><br>
<span class="quotelev1">&gt; above) and then each proc send additional message with the index of the
</span><br>
<span class="quotelev1">&gt; HCA that it is going to use. And this is more data on the wire after
</span><br>
<span class="quotelev1">&gt; proposed optimization than we have now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                   (see the spreadsheet that I sent last week).
</span><br>
<span class="quotelev1">&gt; I've looked at it but I could not decipher it :( I don't understand
</span><br>
<span class="quotelev1">&gt; where all these numbers a come from.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Indeed, we can even put in the optimization that if there's only one
</span><br>
<span class="quotelev2">&gt;&gt; process on a host, it can only publish the ports that it will use (and
</span><br>
<span class="quotelev2">&gt;&gt; therefore there's no need for the proc data).
</span><br>
<span class="quotelev1">&gt; More special cases :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. heterogeneous include/exclude, no cart: need user to tell us that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this situation exists (e.g., use another MCA param), but then is same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as #2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4. heterogeneous include/exclude, cart is used, same as #3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks like it. FWIW I don't like the idea to code all those special
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cases. The way it works now I can be pretty sure that any crazy setup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll come up with will work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And so it will with the new scheme.  The only place it won't work is
</span><br>
<span class="quotelev2">&gt;&gt; if the user specifies a heterogeneous include/exclude (i.e., we'll
</span><br>
<span class="quotelev2">&gt;&gt; require that the user tells us when they do that), which nobody does.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I guess I don't see the problem...?
</span><br>
<span class="quotelev1">&gt; I like things to be simple. KISS principle I guess. And I do care about
</span><br>
<span class="quotelev1">&gt; heterogeneous include/exclude too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW I looked at how we do modex now on the trunk. For OOB case more
</span><br>
<span class="quotelev1">&gt; than half the data we send for each proc is garbage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By the way how much data are moved during modex stage? What if modex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will use compression?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The spreadsheet I listed was just the openib part of the modex, and it
</span><br>
<span class="quotelev2">&gt;&gt; was fairly hefty.  I have no idea how well (or not) it would compress.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; I looked at what kind of data we send during openib modex and I created
</span><br>
<span class="quotelev1">&gt; file with 10000 openib modex messages. mtu, subnet id and cpc list where
</span><br>
<span class="quotelev1">&gt; the same in each message but lid/apm_lid where different, this is
</span><br>
<span class="quotelev1">&gt; pretty close approximation of the data that is sent from HN to each
</span><br>
<span class="quotelev1">&gt; process. The uncompressed file size is 489K compressed file size is 43K.
</span><br>
<span class="quotelev1">&gt; More then 10 times smaller.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gleb.
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
<li><strong>Next message:</strong> <a href="3645.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3643.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3643.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3645.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3645.php">Gleb Natapov: "Re: [OMPI devel] RFC: changes to modex"</a>
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
