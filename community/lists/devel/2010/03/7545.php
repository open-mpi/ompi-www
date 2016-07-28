<?
$subject_val = "[OMPI devel] Adding error/verbose messages to the TCP BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 14:16:50 2010" -->
<!-- isoreceived="20100305191650" -->
<!-- sent="Fri, 5 Mar 2010 14:16:45 -0500" -->
<!-- isosent="20100305191645" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Adding error/verbose messages to the TCP BTL" -->
<!-- id="B536FFCA-7FA2-44C3-8153-3D75E905242E_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Adding error/verbose messages to the TCP BTL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 14:16:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7546.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Previous message:</strong> <a href="7544.php">George Bosilca: "Re: [OMPI devel] Missing Symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7546.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7546.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;From <a href="https://svn.open-mpi.org/trac/ompi/ticket/2045">https://svn.open-mpi.org/trac/ompi/ticket/2045</a>, I have added a lot more diagnostic error and verbose messages to the TCP BTL that detail what endpoints it creates, what IP addresses and ports its trying to connect to, etc.  As part of this, I also added a magic ID string into the TCP BTL socket handshake so that processes can identify if the socket peer is an OMPI process.
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/jsquyres/tcp-debug-printf/">http://bitbucket.org/jsquyres/tcp-debug-printf/</a>
<br>
<p>The initial commit with all the new messages and whatnot is here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/jsquyres/tcp-debug-printf/changeset/9efe756cda30/">http://bitbucket.org/jsquyres/tcp-debug-printf/changeset/9efe756cda30/</a>
<br>
<p>There are now multiple levels of TCP BTL verbosity: 10, 20, and 30.  Each level gives successively more information.
<br>
<p>This ended up in a lot more code addition than I thought it would, so I'm a little uncomfortable just committing it to the trunk.  Can anyone who cares have a look at this before I commit?  If possible, it would be good to get some testing on Solaris and Windows at a minimum before I commit, too -- just to minimize the chance of trunk breakage.
<br>
<p>If I hear nothing back by next Friday (12 March 2010), I'll commit.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7546.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Previous message:</strong> <a href="7544.php">George Bosilca: "Re: [OMPI devel] Missing Symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7546.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7546.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
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
