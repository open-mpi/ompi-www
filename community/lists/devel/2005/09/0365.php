<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 16 04:01:08 2005" -->
<!-- isoreceived="20050916090108" -->
<!-- sent="Fri, 16 Sep 2005 11:01:05 +0200" -->
<!-- isosent="20050916090105" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  error message on make" -->
<!-- id="20050916090105.GA32725_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="950141a39355389cd84d54fc634994f2_at_open-mpi.org" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-16 04:01:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0366.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0364.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<li><strong>In reply to:</strong> <a href="0356.php">Jeff Squyres: "Re:  error message on make"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, Tim, James,
<br>
<p>* Jeff Squyres wrote on Thu, Sep 15, 2005 at 02:55:26AM CEST:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There appear to be two problems:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I borked up the libnuma configure.m4 such that mpicc (and friends) 
</span><br>
<span class="quotelev1">&gt; don't get the right flags for libnuma when you compile OMPI statically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - James' problem seems to be somewhat different -- he's failing to link 
</span><br>
<span class="quotelev1">&gt; ompi_info in the OMPI build itself, but also because the appropriate -L 
</span><br>
<span class="quotelev1">&gt; and -l are not supplied.  Although I can't get this to happen in any 
</span><br>
<span class="quotelev1">&gt; version that I have (they always get the Right -L and -l to find 
</span><br>
<span class="quotelev1">&gt; libnuma).
</span><br>
<p>I must admit that I still have not understood the root of the problem.
<br>
<p><span class="quotelev1">&gt; James: what command did you use to configure OMPI?
</span><br>
<p>Yes, interesting question.  :)
<br>
<p>More comments below.
<br>
<p><span class="quotelev1">&gt; On Sep 14, 2005, at 7:45 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 14, 2005, at 6:07 PM, Tim S. Woodall wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Seriously, I can see your point, but I don't see an obvious fix -- we
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; don't check for the mode of the target library.  We just check that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;$CC testprogram.c -L/path/to/libnuma -lnuma&quot; works properly 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (actually,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; this is how *all* checks are done in OMPI -- libnuma is somewhat of 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; an
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; anomaly because most other packages/linux distros [depending on the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; packaging] provide either just the .a or both the .a and the .so).
</span><br>
<p><span class="quotelev3">&gt; &gt;&gt; Shouldn't the configure tests use the specified mode (e.g. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; static/dynamic)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes and no.  They're not quite the same thing -- we setup libtool to 
</span><br>
<span class="quotelev2">&gt; &gt; compile things in the desired mode(s), but libtool isn't really ready 
</span><br>
<span class="quotelev2">&gt; &gt; until configure completes.
</span><br>
<p>Two comments:
<br>
First, you don't want to force static vs dynamic mode while testing: for
<br>
the very reason, that when you create a program, it may just be fine for
<br>
you to link against some libraries statically and some dynamically.
<br>
Just don't try to create a shared library that links against a static
<br>
one.
<br>
<p>Second, Jeff, libtool-1.5.x causes the `libtool' script to be output
<br>
right after its tests are done.  libtool-2.x will not do this by
<br>
default, but may be forced to do so by calling the macro LT_INIT after
<br>
LT_INIT (aka AC_PROG_LIBTOOL).  This will be documented, and you will be
<br>
able to maintain portability to both versions by using something like
<br>
&nbsp;&nbsp;m4_ifdef([LT_OUTPUT], [LT_OUTPUT])
<br>
which calls the macro only if it is defined.
<br>
&nbsp;&nbsp;
<br>
Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0366.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0364.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<li><strong>In reply to:</strong> <a href="0356.php">Jeff Squyres: "Re:  error message on make"</a>
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
