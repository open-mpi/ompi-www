<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 15:20:56 2007" -->
<!-- isoreceived="20071212202056" -->
<!-- sent="Wed, 12 Dec 2007 22:20:49 +0200" -->
<!-- isosent="20071212202049" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="20071212202049.GC26644_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="72B45E92-3FB7-4FB9-A0EA-6912A1B1D64D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] matching code rewrite in OB1<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 15:20:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2823.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Previous message:</strong> <a href="2821.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>In reply to:</strong> <a href="2815.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2824.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2824.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2826.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Dec 12, 2007 at 11:57:11AM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Gleb --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about making a tarball with this patch in it that can be thrown at  
</span><br>
<span class="quotelev1">&gt; everyone's MTT? (we can put the tarball on www.open-mpi.org somewhere)
</span><br>
I don't have access to www.open-mpi.org, but I can send you the patch.
<br>
I can send you a tarball too, but I prefer to not abuse email.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 11, 2007, at 4:14 PM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I will re-iterate my concern.  The code that is there now is mostly  
</span><br>
<span class="quotelev2">&gt; &gt; nine
</span><br>
<span class="quotelev2">&gt; &gt; years old (with some mods made when it was brought over to Open  
</span><br>
<span class="quotelev2">&gt; &gt; MPI).  It
</span><br>
<span class="quotelev2">&gt; &gt; took about 2 months of testing on systems with 5-13 way network  
</span><br>
<span class="quotelev2">&gt; &gt; parallelism
</span><br>
<span class="quotelev2">&gt; &gt; to track down all KNOWN race conditions.  This code is at the center  
</span><br>
<span class="quotelev2">&gt; &gt; of MPI
</span><br>
<span class="quotelev2">&gt; &gt; correctness, so I am VERY concerned about changing it w/o some very  
</span><br>
<span class="quotelev2">&gt; &gt; strong
</span><br>
<span class="quotelev2">&gt; &gt; reasons.  Not apposed, just very cautious.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rich
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 12/11/07 11:47 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Dec 11, 2007 at 08:36:42AM -0800, Andrew Friedley wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Possibly, though I have results from a benchmark I've written  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; indicating
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the reordering happens at the sender.  I believe I found it was  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; due to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the QP striping trick I use to get more bandwidth -- if you back  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; down to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; one QP (there's a define in the code you can change), the reordering
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rate drops.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ah, OK. My assumption was just from looking into code, so I may be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrong.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Also I do not make any recursive calls to progress -- at least not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; directly in the BTL; I can't speak for the upper layers.  The  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; reason I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; do many completions at once is that it is a big help in turning  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; around
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; receive buffers, making it harder to run out of buffers and drop  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; frags.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  I want to say there was some performance benefit as well but I  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; can't
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; say for sure.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Currently upper layers of Open MPI may call BTL progress function
</span><br>
<span class="quotelev3">&gt; &gt;&gt; recursively. I hope this will change some day.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Andrew
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Tue, Dec 11, 2007 at 08:03:52AM -0800, Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Try UD, frags are reordered at a very high rate so should be a  
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; good test.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Good Idea I'll try this. BTW I thing the reason for such a high  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; rate of
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; reordering in UD is that it polls for MCA_BTL_UD_NUM_WC completions
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (500) and process them one by one and if progress function is  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; called
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; recursively next 500 completion will be reordered versus previous
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; completions (reordering happens on a receiver, not sender).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Andrew
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Gleb,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;  I would suggest that before this is checked in this be tested  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; on a
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; system
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; that has N-way network parallelism, where N is as large as you  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; can find.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; This is a key bit of code for MPI correctness, and out-of-order  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; operations
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; will break it, so you want to maximize the chance for such  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; operations.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On 12/11/07 10:54 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   I did a rewrite of matching code in OB1. I made it much  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; simpler and 2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; times smaller (which is good, less code - less bugs). I also  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; got rid
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; of huge macros - very helpful if you need to debug something.  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; There
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; is no performance degradation, actually I even see very small  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; performance
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; improvement. I ran MTT with this patch and the result is the  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; same as on
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; trunk. I would like to commit this to the trunk. The patch is  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; attached
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; for everybody to try.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Gleb.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Gleb.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gleb.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2823.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Previous message:</strong> <a href="2821.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>In reply to:</strong> <a href="2815.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2824.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2824.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2826.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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
