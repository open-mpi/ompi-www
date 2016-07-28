<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 15 15:26:25 2005" -->
<!-- isoreceived="20050915202625" -->
<!-- sent="Thu, 15 Sep 2005 15:26:17 -0500" -->
<!-- isosent="20050915202617" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component -- linux	(fwd)" -->
<!-- id="185A4690-4153-406C-BEC1-1DD38E10A22F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1126791413.1795.23.camel_at_polylepis.inforead.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-15 15:26:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0359.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Previous message:</strong> <a href="0357.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0357.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0360.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0360.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gah...  The #if 0 and missing header are my bad - I'll fix those  
<br>
tonight.  can you rerun the compiler on the file that errors out, but  
<br>
with the -S option to get the assembly file?  It would be useful to  
<br>
know what is on lines 61, 195, and 292.
<br>
<p>Thanks!
<br>
<p>Brian
<br>
<p><p>On Sep 15, 2005, at 8:36 AM, Ferris McCormick wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 14 Sep 2005, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I committed some code that should fix the timer problems on SPARC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linux.  Can you either svn up and try again (or, if you are using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nightly builds) try tomorrow's tarball and see if it works?  The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tests/util/opal_timer.c should give an indication as to whether
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everything is working ok or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll try it tomorrow (the 15th).  Thanks for the response.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nightly tarball is missing sparcv9/timer.h
</span><br>
<span class="quotelev1">&gt; Current svn checkout will not compile -- fails:
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/include/sys/sparcv9/timer.h:44: error:
</span><br>
<span class="quotelev1">&gt; `opal_timer_t' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; which is true, because it is commented out with '#if 0' brackets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you define it, build fails with
</span><br>
<span class="quotelev1">&gt; {standard input}: Assembler messages:
</span><br>
<span class="quotelev1">&gt; {standard input}:61: Error: Illegal operands
</span><br>
<span class="quotelev1">&gt; {standard input}:195: Error: Illegal operands
</span><br>
<span class="quotelev1">&gt; {standard input}:292: Error: Illegal operands
</span><br>
<span class="quotelev1">&gt; from opal_progress.c --- I don't know why yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ferris McCormick (P44646, MI) &lt;fmccor_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Developer, Gentoo Linux (Sparc, Devrel)
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
<li><strong>Next message:</strong> <a href="0359.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Previous message:</strong> <a href="0357.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>In reply to:</strong> <a href="0357.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0360.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0360.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component --	linux	(fwd)"</a>
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
