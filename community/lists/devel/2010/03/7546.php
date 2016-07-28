<?
$subject_val = "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 14:34:26 2010" -->
<!-- isoreceived="20100305193426" -->
<!-- sent="Fri, 5 Mar 2010 14:34:13 -0500" -->
<!-- isosent="20100305193413" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding error/verbose messages to the TCP BTL" -->
<!-- id="D3BB793C-A20E-4353-A743-A0D51C5C20E1_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B536FFCA-7FA2-44C3-8153-3D75E905242E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Adding error/verbose messages to the TCP BTL<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 14:34:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7547.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7545.php">Jeff Squyres: "[OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>In reply to:</strong> <a href="7545.php">Jeff Squyres: "[OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7550.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7550.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Being user friendly is good, being way too user friendly is less (but I guess this is the price we have to pay for a production-quality code isn't it).
<br>
<p>I have few comments:
<br>
<p>- In several places you replaced the BTL_ERROR (which was the way BTLs are supposed to complaints) by a call directly to orte_show_help. This presents several inconveniences: drifting away from something more or less consistent across all BTLs, adding more dependencies between the BTLs and ORTE.
<br>
<p>- There are a lot of places where you just indented the code or split a medium-sized line into several lines. I find the code more difficult to read.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;george.
<br>
<p>On Mar 5, 2010, at 14:16 , Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; From <a href="https://svn.open-mpi.org/trac/ompi/ticket/2045">https://svn.open-mpi.org/trac/ompi/ticket/2045</a>, I have added a lot more diagnostic error and verbose messages to the TCP BTL that detail what endpoints it creates, what IP addresses and ports its trying to connect to, etc.  As part of this, I also added a magic ID string into the TCP BTL socket handshake so that processes can identify if the socket peer is an OMPI process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://bitbucket.org/jsquyres/tcp-debug-printf/">http://bitbucket.org/jsquyres/tcp-debug-printf/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The initial commit with all the new messages and whatnot is here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://bitbucket.org/jsquyres/tcp-debug-printf/changeset/9efe756cda30/">http://bitbucket.org/jsquyres/tcp-debug-printf/changeset/9efe756cda30/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are now multiple levels of TCP BTL verbosity: 10, 20, and 30.  Each level gives successively more information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This ended up in a lot more code addition than I thought it would, so I'm a little uncomfortable just committing it to the trunk.  Can anyone who cares have a look at this before I commit?  If possible, it would be good to get some testing on Solaris and Windows at a minimum before I commit, too -- just to minimize the chance of trunk breakage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I hear nothing back by next Friday (12 March 2010), I'll commit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7547.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7545.php">Jeff Squyres: "[OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>In reply to:</strong> <a href="7545.php">Jeff Squyres: "[OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7550.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7550.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
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
