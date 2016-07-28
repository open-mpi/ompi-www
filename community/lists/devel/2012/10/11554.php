<?
$subject_val = "Re: [OMPI devel] Open-mpi in red hat 7.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 14:54:39 2012" -->
<!-- isoreceived="20121003185439" -->
<!-- sent="Wed, 3 Oct 2012 11:54:34 -0700" -->
<!-- isosent="20121003185434" -->
<!-- name="Sandra Guija" -->
<!-- email="sguija_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-mpi in red hat 7.3" -->
<!-- id="BAY166-W10E5581E40B1377AE4C3A0CC850_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BAY166-W41E4B83FA90FF3D6B74D96CC850_at_phx.gbl" -->
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
<strong>From:</strong> Sandra Guija (<em>sguija_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 14:54:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11555.php">Kawashima, Takahiro: "[OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Previous message:</strong> <a href="11553.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<li><strong>In reply to:</strong> <a href="11553.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11565.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will work on Ralph's suggestion
<br>
Thanks all
<br>
Sandra Guija
<br>
<p>From: sguija_at_[hidden]
<br>
To: devel_at_[hidden]
<br>
Date: Wed, 3 Oct 2012 11:47:33 -0700
<br>
Subject: Re: [OMPI devel] Open-mpi in red hat 7.3
<br>
<p><p><p><p><p>Hi Jeff, I want to setup a message passing programming environment on Simics, a hardware simulation software. Simics have some pre-built target machines, ready to use, unfortunately these targets have old OS version (Fedora 5, Red Hat 7.3).I installed mpich2 on the Red Hat and bump in some many issues, so I want to explore my options with open-mpi.I setup an open-mpi cluster on ubuntu 10, and it works. But it is quiet of complex to use Ubuntu on simics.
<br>
Thanks for replying my email,
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
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11554/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11555.php">Kawashima, Takahiro: "[OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Previous message:</strong> <a href="11553.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<li><strong>In reply to:</strong> <a href="11553.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in red hat 7.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11565.php">Sandra Guija: "Re: [OMPI devel] Open-mpi in Fedora 5"</a>
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
