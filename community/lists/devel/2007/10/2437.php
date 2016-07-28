<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 12 08:31:05 2007" -->
<!-- isoreceived="20071012123105" -->
<!-- sent="Fri, 12 Oct 2007 08:30:25 -0400" -->
<!-- isosent="20071012123025" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell	scripts" -->
<!-- id="427F5220-1457-43FD-9D4B-E56E62CC4E15_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="470F66D1.2040600_at_sun.com" -->
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
<strong>Date:</strong> 2007-10-12 08:30:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2438.php">Shipman, Galen M.: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Previous message:</strong> <a href="2436.php">Terry Dontje: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell	scripts"</a>
<li><strong>In reply to:</strong> <a href="2436.php">Terry Dontje: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell	scripts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2439.php">Richard Graham: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shellscripts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 12, 2007, at 8:21 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Will these new scripts be using the same wrapper config files as the
</span><br>
<span class="quotelev1">&gt; binaries were?
</span><br>
<p>I would hope so -- I think that the scripts would pretty much do  
<br>
exactly the same thing as the current .c source.
<br>
<p><span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What:  Change the mpicc/mpicxx/mpif77/mpif90 from being binaries  
</span><br>
<span class="quotelev2">&gt;&gt; to being
</span><br>
<span class="quotelev2">&gt;&gt; shell scripts
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why: Our build environment assumes that wrapper compilers will use  
</span><br>
<span class="quotelev2">&gt;&gt; the same
</span><br>
<span class="quotelev2">&gt;&gt; binary format that the Open MPI libraries do.  In cross-compile  
</span><br>
<span class="quotelev2">&gt;&gt; environment,
</span><br>
<span class="quotelev2">&gt;&gt; the MPI wrapper compilers will run on the front-end and need to  
</span><br>
<span class="quotelev2">&gt;&gt; run on the
</span><br>
<span class="quotelev2">&gt;&gt; front-end, and not the back-end.  Jeff has suggested this as the  
</span><br>
<span class="quotelev2">&gt;&gt; simplest
</span><br>
<span class="quotelev2">&gt;&gt; way to build back-end libraries, and front-end wrapper-compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When: within the next several weeks (for the 1.3 release)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Timeout: 10/19/2007
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rich
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2438.php">Shipman, Galen M.: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Previous message:</strong> <a href="2436.php">Terry Dontje: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell	scripts"</a>
<li><strong>In reply to:</strong> <a href="2436.php">Terry Dontje: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell	scripts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2439.php">Richard Graham: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shellscripts"</a>
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
