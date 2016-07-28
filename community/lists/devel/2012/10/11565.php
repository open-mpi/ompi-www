<?
$subject_val = "Re: [OMPI devel] Open-mpi in Fedora 5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  5 12:23:31 2012" -->
<!-- isoreceived="20121005162331" -->
<!-- sent="Fri, 5 Oct 2012 09:23:25 -0700" -->
<!-- isosent="20121005162325" -->
<!-- name="Sandra Guija" -->
<!-- email="sguija_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-mpi in Fedora 5" -->
<!-- id="BAY166-W36348F22A6E4928C46744DCC8B0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8336077B-347C-4791-9D10-4C11D89B5C6D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-mpi in Fedora 5<br>
<strong>From:</strong> Sandra Guija (<em>sguija_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-05 12:23:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11566.php">Sandra Guija: "[OMPI devel]  Open-mpi in Fedora 5"</a>
<li><strong>Previous message:</strong> <a href="11564.php">researcher researcher: "[OMPI devel] BLCR"</a>
<li><strong>In reply to:</strong> <a href="11552.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11566.php">Sandra Guija: "[OMPI devel]  Open-mpi in Fedora 5"</a>
<li><strong>Reply:</strong> <a href="11566.php">Sandra Guija: "[OMPI devel]  Open-mpi in Fedora 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I decided to use an environment with Fedora 5 and gcc 4.1.0.I tried to installed 1.6.2 and it failed, then tried 1.4.5 and it failed, then 1.2.9 and I did not get any error.
<br>
how I can check if the installation works, prior to configure the clusterAlso, it will be ok if I copy the openmpi-1.2.9  directory to the other nodes? The installation took like almost 3 hours.
<br>
I sent the &quot;ccIVTymL.out&quot; file to the forum but my mail is waiting for moderator approval
<br>
Thanks
<br>
Sandra Guija
<br>
<p><span class="quotelev1">&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Wed, 3 Oct 2012 14:12:03 -0400
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Open-mpi in red hat 7.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Question: why such an old OS?  Can you upgrade it?  Fedora 7.3 (which is what I assume you mean) and gcc 2.96 are pretty ancient, in computer software terms -- gcc 2.96 is *over 12 years old*.  That's an eternity.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additional suggestion: we haven't tested with gcc 2.96 in quite a while, and don't maintain lists of what versions work with (really) old compilers; sorry.  Ralph's suggestion is a good one -- start with the latest Open MPI (1.6.2) and see if that works.  If it doesn't, work backwards in our release series and see which works for you (e.g., if 1.6.2 doesn't work, try the last release in the 1.4.x series -- 1.4.5.  If that doesn't work, try the last release in the 1.2.x series -- 1.2.9.  If that doesn't work, try the last release in the 1.1.x and 1.0.x series).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2012, at 1:30 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Not sure why any of them wouldn't successfully install - so why not grab 1.6.2? Is there some problem you aren't telling us?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 3, 2012, at 10:20 AM, Sandra Guija &lt;sguija_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello, 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Anyone could provide a feedback about the latest version of open-mpi that successfully installs in Red Hat 7.3 gcc 2.96
</span><br>
<span class="quotelev3">&gt; &gt;&gt; thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sandra Guija
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________ devel mailing list devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11565/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11566.php">Sandra Guija: "[OMPI devel]  Open-mpi in Fedora 5"</a>
<li><strong>Previous message:</strong> <a href="11564.php">researcher researcher: "[OMPI devel] BLCR"</a>
<li><strong>In reply to:</strong> <a href="11552.php">Jeff Squyres: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11566.php">Sandra Guija: "[OMPI devel]  Open-mpi in Fedora 5"</a>
<li><strong>Reply:</strong> <a href="11566.php">Sandra Guija: "[OMPI devel]  Open-mpi in Fedora 5"</a>
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
