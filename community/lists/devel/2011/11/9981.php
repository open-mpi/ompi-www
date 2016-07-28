<?
$subject_val = "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 17 09:29:37 2011" -->
<!-- isoreceived="20111117142937" -->
<!-- sent="Thu, 17 Nov 2011 07:29:24 -0700" -->
<!-- isosent="20111117142924" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Rename &amp;quot;vader&amp;quot; BTL to &amp;quot;xpmem&amp;quot;" -->
<!-- id="D79F2E4A-6AD0-4167-9950-CF6B13DBC375_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EC51398.7080609_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-17 09:29:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9982.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Previous message:</strong> <a href="9980.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>In reply to:</strong> <a href="9980.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9982.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Reply:</strong> <a href="9982.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Reply:</strong> <a href="9985.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Frankly, the only vote that counts is Nathan's - it's his btl, and we have never forcibly made someone rename their component. I would suggest we not set that precedent. I'm comfortable with whatever he decides to call it.
<br>
<p><p>On Nov 17, 2011, at 7:00 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Isn't there precedent with the other BTLs to name them based on the messaging protocol they are supporting instead of some movie character (tcp, openib, shmem, portals, ...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/17/2011 8:11 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After having to explain to someone at SC for the umpteenth time this week that the &quot;vader&quot; BTL uses the XPMEM transport under the covers, I'd like to put forth an appeal to rename the &quot;vader&quot; BTL to be &quot;xpmem.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's my rationale for why:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Although we have a history of Star Wars-related names, the &quot;ob1&quot; and &quot;r2&quot; components got their names because they're mainly algorithms that have no obvious name that describes what they do.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. All other components that tie into some back-end system are named reflecting the back-end system (e.g., tcp, mx, portals, ...etc.).  &quot;openib&quot; is the weakest example, but we all know that it was named way back when OFED was named &quot;OpenIB&quot;, and the name has kinda stuck.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. The BTL name &quot;xpmem&quot; follows the law of least astonishment from the user's perspective.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. Cute names rarely seem so after 6 months.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll even volunteer to do the work to rename it (a bunch of file moves and global search-and-replaces).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9981/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9982.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Previous message:</strong> <a href="9980.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>In reply to:</strong> <a href="9980.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9982.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Reply:</strong> <a href="9982.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Reply:</strong> <a href="9985.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
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
