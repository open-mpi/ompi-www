<?
$subject_val = "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 18:28:28 2011" -->
<!-- isoreceived="20111221232828" -->
<!-- sent="Wed, 21 Dec 2011 15:28:01 -0800" -->
<!-- isosent="20111221232801" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2" -->
<!-- id="4EF26B81.6060101_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7390612C-F2A1-4B38-A7DE-2160247692FE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 18:28:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10199.php">Pedro Gonnet: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="10197.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.sh generates broken configure onFreeBSD-8.2"</a>
<li><strong>In reply to:</strong> <a href="10197.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.sh generates broken configure onFreeBSD-8.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem I see is because FreeBSD-8.2 provides a NEW autotools suite 
<br>
w/ an intentionally ANCIENT config.guess.
<br>
There is nothing wrong with any of Open MPI's config.foo as packaged in 
<br>
the tarball.
<br>
<p>I can work just fine by re-extracting config.guess and config.sub from 
<br>
the tarball after running autogen.sh:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ ./autogen.sh &amp;&amp; (cd .. &amp;&amp; tar xfj openmpi-1.5.5rc1.tar.bz2 
<br>
'*/config.guess' '*/config.sub')
<br>
So, that is my work-around.
<br>
<p>It is NOT something I want you to fret over, but you should be aware 
<br>
that while autogen.sh does enforce minimum versions on autoconf, 
<br>
automake and libtool, it is NOT doing anything to ensure a 
<br>
correspondingly recent config.guess and config.sub.  I merely wanted to 
<br>
suggest that if it did so then I would have been alerted before the 
<br>
problem occurred.
<br>
<p>Oh, and yes you DO need to re-run autogen after editing a Makefile.am IF 
<br>
your automake is not the same version used by autogen.sh when the 
<br>
tarball was built - a situation most developers don't encounter because 
<br>
you don't start from the tarball as I did.  Otherwise, make sees the 
<br>
changed Makefile.am and tries tries to run &quot;[...]/config/missing --run 
<br>
automake-1.11 [args]&quot; which doesn't work if your automake executable 
<br>
isn't automake-1.11.  Of course you just need to autogen.sh once to 
<br>
&quot;adapt&quot; to the local automake version.  After that initial run, I agree 
<br>
w/ Jeff that Makefile.am edits don't require running autogen.sh.
<br>
<p>-Paul
<br>
<p>On 12/21/2011 7:13 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Don't need to re-run autogen if you edit a make file.am.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To avoid older config.foo files, you might be able to edit configur directly, or upgrade Autotools...?  I am specifically wondering if the config.guess issues you ran into are from te results that we return from our config.foo files or the ones from your Autotools.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 21, 2011, at 8:41 AM, &quot;Paul H. Hargrove&quot;&lt;PHHargrove_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I only ran autogen after I had edited a Makefile.am or a .m4 file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/21/2011 4:58 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you running autogen from the tarballs in your testing?  You probably shouldn't - we have users just run configure and make. We also bootstrap the tarballs w the most recent config.sub and .guess (i.e., more recent than what comes w the most recent Autotools).
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10199.php">Pedro Gonnet: "Re: [OMPI devel] Fwd: Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="10197.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.sh generates broken configure onFreeBSD-8.2"</a>
<li><strong>In reply to:</strong> <a href="10197.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.sh generates broken configure onFreeBSD-8.2"</a>
<!-- nextthread="start" -->
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
