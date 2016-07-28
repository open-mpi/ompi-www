<?
$subject_val = "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 13:53:22 2011" -->
<!-- isoreceived="20110316175322" -->
<!-- sent="Wed, 16 Mar 2011 13:55:00 -0400" -->
<!-- isosent="20110316175500" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c" -->
<!-- id="4D80F974.4000001_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CB44AF0C-B7B9-49E0-A4D0-188EA6739B13_at_cisco.com" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 13:55:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9087.php">Mike Dubman: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Previous message:</strong> <a href="9085.php">Jeff Squyres: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>In reply to:</strong> <a href="9085.php">Jeff Squyres: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9087.php">Mike Dubman: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/16/2011 12:00 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Ya, you're right -- I'm looking at my MTT right now and I see lots of broken installs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it works if I compile manually.  Weird.
</span><br>
So when I saw your MTT results it was not finding a header file as 
<br>
opposed to the problem I was incurring which was a redeclaration issue.  
<br>
So I am wondering if your MTT issue is something different?
<br>
<p>--td
<br>
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
<span class="quotelev2">&gt;&gt; The trunk is indeed broken. The reason is, as Terry pointed out, the inclusion of infiniband/mad.h introduced by r24507 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/24507">https://svn.open-mpi.org/trac/ompi/changeset/24507</a>). As long as OFED 1.4 is available, it will compile independent of the version of the kernel, libpthread, moon position or&lt;name your favorite here&gt;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 16, 2011, at 09:35 , Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 16, 2011, at 6:50 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; K. When Ralph and I removed that code, it was on he educated guess that no one was using it (because it hasn't compiled right in a while). If we were wrong, it can be put back, but someone will need to update it and Ralph and I don't have access to machines to test that behavior.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ok, however, the compilation issue I am running into has nothing to do with your's and Ralph's changes.  I would have expected not to even get as far as compiling the openib btl, right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Right.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What does your configure output say when it is testing for different PIDs for threads?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Research Assistant Professor
</span><br>
<span class="quotelev2">&gt;&gt; Innovative Computing Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; Department of Electrical Engineering and Computer Science
</span><br>
<span class="quotelev2">&gt;&gt; University of Tennessee, Knoxville
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://web.eecs.utk.edu/~bosilca/">http://web.eecs.utk.edu/~bosilca/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9086/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-9086/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9087.php">Mike Dubman: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Previous message:</strong> <a href="9085.php">Jeff Squyres: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>In reply to:</strong> <a href="9085.php">Jeff Squyres: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9087.php">Mike Dubman: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
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
