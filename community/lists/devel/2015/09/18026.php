<?
$subject_val = "Re: [OMPI devel] Remaining MTT errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 12 11:31:19 2015" -->
<!-- isoreceived="20150912153119" -->
<!-- sent="Sat, 12 Sep 2015 08:31:15 -0700" -->
<!-- isosent="20150912153115" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Remaining MTT errors" -->
<!-- id="1FCF8127-DC2F-43BF-8742-8F94D79E63EA_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAvDA16xY5cR8LsGZWwQ1BC5_UyBAJZiLa_oJm7GapAGD6mxJQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Remaining MTT errors<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-12 11:31:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18027.php">Paul Hargrove: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Previous message:</strong> <a href="18025.php">Paul Hargrove: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>In reply to:</strong> <a href="18025.php">Paul Hargrove: "Re: [OMPI devel] Remaining MTT errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18028.php">Gilles Gouaillardet: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Reply:</strong> <a href="18028.php">Gilles Gouaillardet: "Re: [OMPI devel] Remaining MTT errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don&#226;&#128;&#153;t think Jeff is pulling up the right configure line. I don&#226;&#128;&#153;t have Solaris compilers on this system, I can&#226;&#128;&#153;t find anything remotely resembling the configure line he is quoting, etc.
<br>
<p>I wonder if MTT is confused because I am using the &#226;&#128;&#156;as provided&#226;&#128;&#157; option for OMPI - i.e., MTT isn&#226;&#128;&#153;t building OMPI and just uses my &#226;&#128;&#156;already installed&#226;&#128;&#157; build?
<br>
<p>Or else Jeff is just clicking on the wrong button :-)
<br>
<p>Either way, I think this is just a red herring
<br>
<p><p><span class="quotelev1">&gt; On Sep 12, 2015, at 8:27 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In case it helps: those &quot;-x...&quot; switches and &quot;%all&quot; syntax are sure signs of the Solaris Studio compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ suncc -xtarget=opteron -xprefetch -xprefetch_level=2 -xvector=simd,lib -xdepend=yes -xbuiltin=%all -xarch=amd64a -xO5 hello.c
</span><br>
<span class="quotelev1">&gt; cc: Warning: -xarch=amd64a is deprecated, use -m64 -xarch=sse2a instead
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Sep 12, 2015 at 8:14 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; FWIW, I have various versions of gcc from 4.4.7 to 5.2 -- I don't have 4.8.3, but I do have 4.8.1, and I can't get it to recognize the -xO5 switch that you're using:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; $ gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.8.1
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gcc -xO5 hello.c -o hello
</span><br>
<span class="quotelev1">&gt; gcc: error: language O5 not recognized
</span><br>
<span class="quotelev1">&gt; gcc: error: language O5 not recognized
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 12, 2015, at 11:09 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry; I should have been clear -- the configure line I was specifying was from building Open MPI itself.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I.e., it's your MTT infrastructure/ini file that is adding those flags.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The config.log you show below looks like it is for one of the test suites (i.e., it's using the wrappers, which could not have been done for the main OMPI build itself).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Sep 12, 2015, at 10:59 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I searched around, and I can&#226;&#128;&#153;t for the life of me see where all that cruft is coming from. Any suggestions?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is the top of the config.log from that build:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This file contains any messages produced by compilers while
</span><br>
<span class="quotelev3">&gt; &gt;&gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It was created by ompi-ibm configure 10.0, which was
</span><br>
<span class="quotelev3">&gt; &gt;&gt; generated by GNU Autoconf 2.69.  Invocation command line was
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ ./configure CC=mpicc CXX=mpic++ F77=mpif77
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ## --------- ##
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ## Platform. ##
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ## --------- ##
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hostname = bend001
</span><br>
<span class="quotelev3">&gt; &gt;&gt; uname -m = x86_64
</span><br>
<span class="quotelev3">&gt; &gt;&gt; uname -r = 3.10.0-229.7.2.el7.x86_64
</span><br>
<span class="quotelev3">&gt; &gt;&gt; uname -s = Linux
</span><br>
<span class="quotelev3">&gt; &gt;&gt; uname -v = #1 SMP Tue Jun 23 22:06:11 UTC 2015
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Do you want to see the log itself? I&#226;&#128;&#153;m at a loss as to why it would add that stuff.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Sep 12, 2015, at 7:38 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Note that I didn&#226;&#128;&#153;t set any of those flags outside of the CC and friends - they are being set by our MTT test configure itself. The compiler is just gcc 4.8.3, and I suspect O5 is asking a bit from it.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Sep 12, 2015, at 6:08 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I notice that your configure line in the MTT tests is this:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; CC=cc CXX=CC FC=f90 F77=f77 --with-wrapper-cflags=&quot;-xtarget=opteron -xprefetch -xprefetch_level=2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -xvector=simd,lib -xdepend=yes -xbuiltin=%all -xarch=amd64a -xO5&quot; CFLAGS=&quot;-xtarget=opteron
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -xprefetch -xprefetch_level=2 -xvector=simd,lib -xdepend=yes -xbuiltin=%all -xarch=amd64a -xO5&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --with-wrapper-cxxflags=&quot;-xtarget=opteron -xprefetch -xprefetch_level=2 -xvector=simd,lib
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -xdepend=yes -xbuiltin=%all -xarch=amd64a -xO5&quot; CXXFLAGS=&quot;-xtarget=opteron -xprefetch
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -xprefetch_level=2 -xvector=simd,lib -xdepend=yes -xbuiltin=%all -xarch=amd64a -xO5&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --with-wrapper-fflags=&quot;-xtarget=opteron -xprefetch -xprefetch_level=2 -xvector=simd,lib -stackvar
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -xarch=amd64a -xO5&quot; FFLAGS=&quot;-xtarget=opteron -xprefetch -xprefetch_level=2 -xvector=simd,lib
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -stackvar -xarch=amd64a -xO5&quot; --with-wrapper-fcflags=&quot;-xtarget=opteron -xprefetch -xprefetch_level=2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -xvector=simd,lib -stackvar -xarch=amd64a -xO5&quot; FCFLAGS=&quot;-xtarget=opteron -xprefetch
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -xprefetch_level=2 -xvector=simd,lib -stackvar -xarch=amd64a -xO5&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; What compiler suite is that?  Is -xO5 really safe to use?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Sep 11, 2015, at 8:51 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I&#226;&#128;&#153;ve closed all the holes I can find in the PMIx integration, and things look pretty good overall. There are a handful of failures still being seen - most of them involving what appear to be unrelated code. I&#226;&#128;&#153;m not entirely sure I understand the source of the errors, and could really use some help to determine (a) if these are in any way related to PMIx, and if so (b) how.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The errors from my MTT run are here:  <a href="http://mtt.open-mpi.org/index.php?do_redir=2256">http://mtt.open-mpi.org/index.php?do_redir=2256</a> &lt;<a href="http://mtt.open-mpi.org/index.php?do_redir=2256">http://mtt.open-mpi.org/index.php?do_redir=2256</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Any help diagnosing these problems would be greatly appreciated
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18013.php">http://www.open-mpi.org/community/lists/devel/2015/09/18013.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/18013.php">http://www.open-mpi.org/community/lists/devel/2015/09/18013.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18018.php">http://www.open-mpi.org/community/lists/devel/2015/09/18018.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/18018.php">http://www.open-mpi.org/community/lists/devel/2015/09/18018.php</a>&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18020.php">http://www.open-mpi.org/community/lists/devel/2015/09/18020.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/18020.php">http://www.open-mpi.org/community/lists/devel/2015/09/18020.php</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18021.php">http://www.open-mpi.org/community/lists/devel/2015/09/18021.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/18021.php">http://www.open-mpi.org/community/lists/devel/2015/09/18021.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18022.php">http://www.open-mpi.org/community/lists/devel/2015/09/18022.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/18022.php">http://www.open-mpi.org/community/lists/devel/2015/09/18022.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18025.php">http://www.open-mpi.org/community/lists/devel/2015/09/18025.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18026/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18027.php">Paul Hargrove: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Previous message:</strong> <a href="18025.php">Paul Hargrove: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>In reply to:</strong> <a href="18025.php">Paul Hargrove: "Re: [OMPI devel] Remaining MTT errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18028.php">Gilles Gouaillardet: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Reply:</strong> <a href="18028.php">Gilles Gouaillardet: "Re: [OMPI devel] Remaining MTT errors"</a>
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
