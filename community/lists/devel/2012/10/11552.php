<?
$subject_val = "Re: [OMPI devel] Open-mpi in red hat 7.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 14:11:59 2012" -->
<!-- isoreceived="20121003181159" -->
<!-- sent="Wed, 3 Oct 2012 14:12:03 -0400" -->
<!-- isosent="20121003181203" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-mpi in red hat 7.3" -->
<!-- id="8336077B-347C-4791-9D10-4C11D89B5C6D_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2B6A1F31-0952-403D-8B41-9A055FF97337_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-mpi in red hat 7.3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 14:12:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11553.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<li><strong>Previous message:</strong> <a href="11551.php">Ralph Castain: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<li><strong>In reply to:</strong> <a href="11551.php">Ralph Castain: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11553.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<li><strong>Reply:</strong> <a href="11553.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<li><strong>Reply:</strong> <a href="11565.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Question: why such an old OS?  Can you upgrade it?  Fedora 7.3 (which is what I assume you mean) and gcc 2.96 are pretty ancient, in computer software terms -- gcc 2.96 is *over 12 years old*.  That's an eternity.
<br>
<p>Additional suggestion: we haven't tested with gcc 2.96 in quite a while, and don't maintain lists of what versions work with (really) old compilers; sorry.  Ralph's suggestion is a good one -- start with the latest Open MPI (1.6.2) and see if that works.  If it doesn't, work backwards in our release series and see which works for you (e.g., if 1.6.2 doesn't work, try the last release in the 1.4.x series -- 1.4.5.  If that doesn't work, try the last release in the 1.2.x series -- 1.2.9.  If that doesn't work, try the last release in the 1.1.x and 1.0.x series).
<br>
<p><p><p>On Oct 3, 2012, at 1:30 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Not sure why any of them wouldn't successfully install - so why not grab 1.6.2? Is there some problem you aren't telling us?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2012, at 10:20 AM, Sandra Guija &lt;sguija_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello, 
</span><br>
<span class="quotelev2">&gt;&gt; Anyone could provide a feedback about the latest version of open-mpi that successfully installs in Red Hat 7.3 gcc 2.96
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; Sandra Guija
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ devel mailing list devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11553.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<li><strong>Previous message:</strong> <a href="11551.php">Ralph Castain: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<li><strong>In reply to:</strong> <a href="11551.php">Ralph Castain: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11553.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<li><strong>Reply:</strong> <a href="11553.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<li><strong>Reply:</strong> <a href="11565.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
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
