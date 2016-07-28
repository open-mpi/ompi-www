<?
$subject_val = "Re: [OMPI devel] Remaining MTT errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 13 10:56:51 2015" -->
<!-- isoreceived="20150913145651" -->
<!-- sent="Sun, 13 Sep 2015 23:56:49 +0900" -->
<!-- isosent="20150913145649" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Remaining MTT errors" -->
<!-- id="CAAkFZ5vuAq5AxfrhMETWJzSoAWGY1vOaxES6N4d4AkKLCmAisw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1FCF8127-DC2F-43BF-8742-8F94D79E63EA_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-13 10:56:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18029.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Previous message:</strong> <a href="18027.php">Paul Hargrove: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>In reply to:</strong> <a href="18026.php">Ralph Castain: "Re: [OMPI devel] Remaining MTT errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18029.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Reply:</strong> <a href="18029.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Remaining MTT errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>according to mtt logs (click on the MPI Install button at the top left
<br>
corner), ompi was built in zero seconds ...
<br>
iirc, you do not build ompi under mtt, but you use the mtt &quot;installed&quot;
<br>
module
<br>
so my best bet is mtt logged some garbage since it has no way to figure out
<br>
how ompi was configure'd when built outside mtt.
<br>
<p>as a side note...
<br>
ideally, the configure command line would be available from ompi_info.
<br>
but unfortunately, it seems there is no reliable way to capture the
<br>
configure command line.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sunday, September 13, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don&#226;&#128;&#153;t think Jeff is pulling up the right configure line. I don&#226;&#128;&#153;t have
</span><br>
<span class="quotelev1">&gt; Solaris compilers on this system, I can&#226;&#128;&#153;t find anything remotely resembling
</span><br>
<span class="quotelev1">&gt; the configure line he is quoting, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if MTT is confused because I am using the &#226;&#128;&#156;as provided&#226;&#128;&#157; option
</span><br>
<span class="quotelev1">&gt; for OMPI - i.e., MTT isn&#226;&#128;&#153;t building OMPI and just uses my &#226;&#128;&#156;already
</span><br>
<span class="quotelev1">&gt; installed&#226;&#128;&#157; build?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or else Jeff is just clicking on the wrong button :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either way, I think this is just a red herring
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 12, 2015, at 8:27 AM, Paul Hargrove &lt;phhargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','phhargrove_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case it helps: those &quot;-x...&quot; switches and &quot;%all&quot; syntax are sure signs
</span><br>
<span class="quotelev1">&gt; of the Solaris Studio compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ suncc -xtarget=opteron -xprefetch -xprefetch_level=2 -xvector=simd,lib
</span><br>
<span class="quotelev1">&gt; -xdepend=yes -xbuiltin=%all -xarch=amd64a -xO5 hello.c
</span><br>
<span class="quotelev1">&gt; cc: Warning: -xarch=amd64a is deprecated, use -m64 -xarch=sse2a instead
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Sep 12, 2015 at 8:14 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I have various versions of gcc from 4.4.7 to 5.2 -- I don't have
</span><br>
<span class="quotelev2">&gt;&gt; 4.8.3, but I do have 4.8.1, and I can't get it to recognize the -xO5 switch
</span><br>
<span class="quotelev2">&gt;&gt; that you're using:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; $ gcc --version
</span><br>
<span class="quotelev2">&gt;&gt; gcc (GCC) 4.8.1
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev2">&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR
</span><br>
<span class="quotelev2">&gt;&gt; PURPOSE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ gcc -xO5 hello.c -o hello
</span><br>
<span class="quotelev2">&gt;&gt; gcc: error: language O5 not recognized
</span><br>
<span class="quotelev2">&gt;&gt; gcc: error: language O5 not recognized
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Sep 12, 2015, at 11:09 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sorry; I should have been clear -- the configure line I was specifying
</span><br>
<span class="quotelev2">&gt;&gt; was from building Open MPI itself.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I.e., it's your MTT infrastructure/ini file that is adding those flags.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The config.log you show below looks like it is for one of the test
</span><br>
<span class="quotelev2">&gt;&gt; suites (i.e., it's using the wrappers, which could not have been done for
</span><br>
<span class="quotelev2">&gt;&gt; the main OMPI build itself).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Sep 12, 2015, at 10:59 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I searched around, and I can&#226;&#128;&#153;t for the life of me see where all that
</span><br>
<span class="quotelev2">&gt;&gt; cruft is coming from. Any suggestions?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Here is the top of the config.log from that build:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; This file contains any messages produced by compilers while
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; It was created by ompi-ibm configure 10.0, which was
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; generated by GNU Autoconf 2.69.  Invocation command line was
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; $ ./configure CC=mpicc CXX=mpic++ F77=mpif77
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ## --------- ##
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ## Platform. ##
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ## --------- ##
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; hostname = bend001
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; uname -m = x86_64
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; uname -r = 3.10.0-229.7.2.el7.x86_64
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; uname -s = Linux
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; uname -v = #1 SMP Tue Jun 23 22:06:11 UTC 2015
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Do you want to see the log itself? I&#226;&#128;&#153;m at a loss as to why it would
</span><br>
<span class="quotelev2">&gt;&gt; add that stuff.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; On Sep 12, 2015, at 7:38 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Note that I didn&#226;&#128;&#153;t set any of those flags outside of the CC and
</span><br>
<span class="quotelev2">&gt;&gt; friends - they are being set by our MTT test configure itself. The compiler
</span><br>
<span class="quotelev2">&gt;&gt; is just gcc 4.8.3, and I suspect O5 is asking a bit from it.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; On Sep 12, 2015, at 6:08 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; I notice that your configure line in the MTT tests is this:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; CC=cc CXX=CC FC=f90 F77=f77 --with-wrapper-cflags=&quot;-xtarget=opteron
</span><br>
<span class="quotelev2">&gt;&gt; -xprefetch -xprefetch_level=2
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; -xvector=simd,lib -xdepend=yes -xbuiltin=%all -xarch=amd64a -xO5&quot;
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS=&quot;-xtarget=opteron
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; -xprefetch -xprefetch_level=2 -xvector=simd,lib -xdepend=yes
</span><br>
<span class="quotelev2">&gt;&gt; -xbuiltin=%all -xarch=amd64a -xO5&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; --with-wrapper-cxxflags=&quot;-xtarget=opteron -xprefetch
</span><br>
<span class="quotelev2">&gt;&gt; -xprefetch_level=2 -xvector=simd,lib
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; -xdepend=yes -xbuiltin=%all -xarch=amd64a -xO5&quot;
</span><br>
<span class="quotelev2">&gt;&gt; CXXFLAGS=&quot;-xtarget=opteron -xprefetch
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; -xprefetch_level=2 -xvector=simd,lib -xdepend=yes -xbuiltin=%all
</span><br>
<span class="quotelev2">&gt;&gt; -xarch=amd64a -xO5&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; --with-wrapper-fflags=&quot;-xtarget=opteron -xprefetch
</span><br>
<span class="quotelev2">&gt;&gt; -xprefetch_level=2 -xvector=simd,lib -stackvar
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; -xarch=amd64a -xO5&quot; FFLAGS=&quot;-xtarget=opteron -xprefetch
</span><br>
<span class="quotelev2">&gt;&gt; -xprefetch_level=2 -xvector=simd,lib
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; -stackvar -xarch=amd64a -xO5&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-fcflags=&quot;-xtarget=opteron -xprefetch -xprefetch_level=2
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; -xvector=simd,lib -stackvar -xarch=amd64a -xO5&quot;
</span><br>
<span class="quotelev2">&gt;&gt; FCFLAGS=&quot;-xtarget=opteron -xprefetch
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; -xprefetch_level=2 -xvector=simd,lib -stackvar -xarch=amd64a -xO5&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; What compiler suite is that?  Is -xO5 really safe to use?
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; On Sep 11, 2015, at 8:51 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; I&#226;&#128;&#153;ve closed all the holes I can find in the PMIx integration, and
</span><br>
<span class="quotelev2">&gt;&gt; things look pretty good overall. There are a handful of failures still
</span><br>
<span class="quotelev2">&gt;&gt; being seen - most of them involving what appear to be unrelated code. I&#226;&#128;&#153;m
</span><br>
<span class="quotelev2">&gt;&gt; not entirely sure I understand the source of the errors, and could really
</span><br>
<span class="quotelev2">&gt;&gt; use some help to determine (a) if these are in any way related to PMIx, and
</span><br>
<span class="quotelev2">&gt;&gt; if so (b) how.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; The errors from my MTT run are here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2256">http://mtt.open-mpi.org/index.php?do_redir=2256</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Any help diagnosing these problems would be greatly appreciated
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18013.php">http://www.open-mpi.org/community/lists/devel/2015/09/18013.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18018.php">http://www.open-mpi.org/community/lists/devel/2015/09/18018.php</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18020.php">http://www.open-mpi.org/community/lists/devel/2015/09/18020.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt; jsquyres_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18021.php">http://www.open-mpi.org/community/lists/devel/2015/09/18021.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18022.php">http://www.open-mpi.org/community/lists/devel/2015/09/18022.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','PHHargrove_at_[hidden]');&gt;
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
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18025.php">http://www.open-mpi.org/community/lists/devel/2015/09/18025.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18028/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18029.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Previous message:</strong> <a href="18027.php">Paul Hargrove: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>In reply to:</strong> <a href="18026.php">Ralph Castain: "Re: [OMPI devel] Remaining MTT errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18029.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Reply:</strong> <a href="18029.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Remaining MTT errors"</a>
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
