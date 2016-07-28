<?
$subject_val = "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 18 10:41:26 2011" -->
<!-- isoreceived="20110318144126" -->
<!-- sent="Fri, 18 Mar 2011 09:33:17 -0400" -->
<!-- isosent="20110318133317" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c" -->
<!-- id="A6F6E6EF-7742-4B9E-B2F0-1D5F4F11A921_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=NMkDYVQzqurYNS1nQEmOob-hrWefoHN1jQmoA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-18 09:33:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9104.php">Marvin Kant: "[OMPI devel] Invitation to our Open Source Business Model Study"</a>
<li><strong>Previous message:</strong> <a href="9102.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>In reply to:</strong> <a href="9087.php">Mike Dubman: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9080.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Due to over a week of compile failures (see <a href="http://www.open-mpi.org/mtt/index.php?do_redir=1951">http://www.open-mpi.org/mtt/index.php?do_redir=1951</a> for the latest), I've backed out r24533 and r24507.
<br>
<p>Mellanox -- please fix and re-submit when you're ready.
<br>
<p>Thanks.
<br>
<p><p>On Mar 16, 2011, at 2:05 PM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sorry about that, we find a better way to resolve it later.
</span><br>
<span class="quotelev1">&gt; fix commited.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 16, 2011 at 6:00 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ya, you're right -- I'm looking at my MTT right now and I see lots of broken installs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it works if I compile manually.  Weird.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mellanox -- please fix ASAP, or we'll likely back our r24507 so that people can keep working...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 16, 2011, at 11:58 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The trunk is indeed broken. The reason is, as Terry pointed out, the inclusion of infiniband/mad.h introduced by r24507 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/24507">https://svn.open-mpi.org/trac/ompi/changeset/24507</a>). As long as OFED 1.4 is available, it will compile independent of the version of the kernel, libpthread, moon position or &lt;name your favorite here&gt;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 16, 2011, at 09:35 , Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 16, 2011, at 6:50 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; K. When Ralph and I removed that code, it was on he educated guess that no one was using it (because it hasn't compiled right in a while). If we were wrong, it can be put back, but someone will need to update it and Ralph and I don't have access to machines to test that behavior.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ok, however, the compilation issue I am running into has nothing to do with your's and Ralph's changes.  I would have expected not to even get as far as compiling the openib btl, right?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Right.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What does your configure output say when it is testing for different PIDs for threads?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<span class="quotelev2">&gt; &gt; George Bosilca
</span><br>
<span class="quotelev2">&gt; &gt; Research Assistant Professor
</span><br>
<span class="quotelev2">&gt; &gt; Innovative Computing Laboratory
</span><br>
<span class="quotelev2">&gt; &gt; Department of Electrical Engineering and Computer Science
</span><br>
<span class="quotelev2">&gt; &gt; University of Tennessee, Knoxville
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://web.eecs.utk.edu/~bosilca/">http://web.eecs.utk.edu/~bosilca/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="9104.php">Marvin Kant: "[OMPI devel] Invitation to our Open Source Business Model Study"</a>
<li><strong>Previous message:</strong> <a href="9102.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>In reply to:</strong> <a href="9087.php">Mike Dubman: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9080.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
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
