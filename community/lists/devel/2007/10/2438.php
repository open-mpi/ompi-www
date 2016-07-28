<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 12 10:03:14 2007" -->
<!-- isoreceived="20071012140314" -->
<!-- sent="Fri, 12 Oct 2007 10:02:49 -0400" -->
<!-- isosent="20071012140249" -->
<!-- name="Shipman, Galen M." -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts" -->
<!-- id="C334F6C9.4F8%gshipman_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7791581B-291C-4C9E-80C0-C0217E15251D_at_eecs.utk.edu" -->
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
<strong>From:</strong> Shipman, Galen M. (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-12 10:02:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2439.php">Richard Graham: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shellscripts"</a>
<li><strong>Previous message:</strong> <a href="2437.php">Jeff Squyres: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell	scripts"</a>
<li><strong>In reply to:</strong> <a href="2430.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2436.php">Terry Dontje: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell	scripts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I vote for it. 
<br>
<p>- Galen 
<br>
<p><p>On 10/11/07 5:32 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sounds perfect. I'll vote for it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 11, 2007, at 5:23 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 11, 2007, at 5:17 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know that [with few exception] nobody cares about our Windows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support, but we finally have a working Open MPI software stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there and this approach will definitively break our &quot;Unix like&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; friendliness on Windows.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As a temporary solution and until we can figure out how many people
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use mpicc (and friends) on Windows, I suggest we keep around the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; old wrapper compilers, together with the new shell scripts.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sounds reasonable.  It would not be [too] difficult to have the build
</span><br>
<span class="quotelev2">&gt;&gt; system do the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - install the binaries to mpicc.exe (and friends)
</span><br>
<span class="quotelev2">&gt;&gt; - install the shell scripts to mpicc.sh (or mpicc.pl or whatever
</span><br>
<span class="quotelev2">&gt;&gt; suffix is appropriate for the scripting language that is used)
</span><br>
<span class="quotelev2">&gt;&gt; - make sym links from $bindir/mpicc to $bindir/mpicc.sh (as the
</span><br>
<span class="quotelev2">&gt;&gt; default), or $bindir/mpicc to $bindir/mpicc.exe if building or
</span><br>
<span class="quotelev2">&gt;&gt; windows (or explicitly asked for via a configure --with kind of
</span><br>
<span class="quotelev2">&gt;&gt; option)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hence, everyone will see &quot;mpicc&quot;, but the back-end technology may be
</span><br>
<span class="quotelev2">&gt;&gt; different.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 11, 2007, at 3:51 PM, Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What:  Change the mpicc/mpicxx/mpif77/mpif90 from being binaries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to being
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell scripts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Why: Our build environment assumes that wrapper compilers will use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; binary format that the Open MPI libraries do.  In cross-compile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the MPI wrapper compilers will run on the front-end and need to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; front-end, and not the back-end.  Jeff has suggested this as the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; simplest
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; way to build back-end libraries, and front-end wrapper-compilers.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When: within the next several weeks (for the 1.3 release)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Timeout: 10/19/2007
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="2439.php">Richard Graham: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shellscripts"</a>
<li><strong>Previous message:</strong> <a href="2437.php">Jeff Squyres: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell	scripts"</a>
<li><strong>In reply to:</strong> <a href="2430.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2436.php">Terry Dontje: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell	scripts"</a>
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
