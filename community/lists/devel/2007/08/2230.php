<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 10:07:44 2007" -->
<!-- isoreceived="20070827140744" -->
<!-- sent="Mon, 27 Aug 2007 10:07:22 -0400" -->
<!-- isosent="20070827140722" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk issue?" -->
<!-- id="3EF3B880-C186-4519-8163-0CC753ACA55F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2F82C57.A952%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 10:07:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2231.php">Josh Hursey: "Re: [OMPI devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Previous message:</strong> <a href="2229.php">Tim Prins: "Re: [OMPI devel] [devel-core]  [RFC] Runtime Services Layer"</a>
<li><strong>In reply to:</strong> <a href="2228.php">Ralph H Castain: "[OMPI devel] Trunk issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2235.php">Ralf Wildenhues: "Re: [OMPI devel] Trunk issue?"</a>
<li><strong>Reply:</strong> <a href="2235.php">Ralf Wildenhues: "Re: [OMPI devel] Trunk issue?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, if you're using --disable-dlopen, then libltdlc should not be  
<br>
linked in (because it [rightfully] won't exist).
<br>
<p>I can reproduce the problem on my MBP.
<br>
<p>Brian -- did something change here recently?
<br>
<p><p>On Aug 27, 2007, at 9:23 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yo folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just checked out a fresh copy of the trunk and tried to build it  
</span><br>
<span class="quotelev1">&gt; using my
</span><br>
<span class="quotelev1">&gt; usual configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/Users/rhc/openmpi --with-devel-headers
</span><br>
<span class="quotelev1">&gt; --disable-shared --enable-static --disable-mpi-f77 --disable-mpi-f90
</span><br>
<span class="quotelev1">&gt; --enable-mem-debug --without-memory-manager --enable-debug
</span><br>
<span class="quotelev1">&gt; --disable-progress-threads --disable-mpi-threads --disable-io-romio
</span><br>
<span class="quotelev1">&gt; --without-threads --disable-dlopen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Got this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in mca/timer/darwin
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; Making all in .
</span><br>
<span class="quotelev1">&gt; make[2]: *** No rule to make target `../opal/libltdl/libltdlc.la',  
</span><br>
<span class="quotelev1">&gt; needed by
</span><br>
<span class="quotelev1">&gt; `libopen-pal.la'.  Stop.
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like some change may have broken one of these options?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2231.php">Josh Hursey: "Re: [OMPI devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Previous message:</strong> <a href="2229.php">Tim Prins: "Re: [OMPI devel] [devel-core]  [RFC] Runtime Services Layer"</a>
<li><strong>In reply to:</strong> <a href="2228.php">Ralph H Castain: "[OMPI devel] Trunk issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2235.php">Ralf Wildenhues: "Re: [OMPI devel] Trunk issue?"</a>
<li><strong>Reply:</strong> <a href="2235.php">Ralf Wildenhues: "Re: [OMPI devel] Trunk issue?"</a>
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
