<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 17:23:32 2007" -->
<!-- isoreceived="20071011212332" -->
<!-- sent="Thu, 11 Oct 2007 17:23:11 -0400" -->
<!-- isosent="20071011212311" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts" -->
<!-- id="0742594F-D5FB-49C0-9E94-A9C55EBD7F7D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F26A966C-C064-4149-817D-D86B015FBFAE_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2007-10-11 17:23:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2430.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Previous message:</strong> <a href="2428.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>In reply to:</strong> <a href="2428.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2430.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Reply:</strong> <a href="2430.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 11, 2007, at 5:17 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I know that [with few exception] nobody cares about our Windows  
</span><br>
<span class="quotelev1">&gt; support, but we finally have a working Open MPI software stack  
</span><br>
<span class="quotelev1">&gt; there and this approach will definitively break our &quot;Unix like&quot;  
</span><br>
<span class="quotelev1">&gt; friendliness on Windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a temporary solution and until we can figure out how many people  
</span><br>
<span class="quotelev1">&gt; use mpicc (and friends) on Windows, I suggest we keep around the  
</span><br>
<span class="quotelev1">&gt; old wrapper compilers, together with the new shell scripts.
</span><br>
<p>Sounds reasonable.  It would not be [too] difficult to have the build  
<br>
system do the following:
<br>
<p>- install the binaries to mpicc.exe (and friends)
<br>
- install the shell scripts to mpicc.sh (or mpicc.pl or whatever  
<br>
suffix is appropriate for the scripting language that is used)
<br>
- make sym links from $bindir/mpicc to $bindir/mpicc.sh (as the  
<br>
default), or $bindir/mpicc to $bindir/mpicc.exe if building or  
<br>
windows (or explicitly asked for via a configure --with kind of option)
<br>
<p>Hence, everyone will see &quot;mpicc&quot;, but the back-end technology may be  
<br>
different.
<br>
<p><p><span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 11, 2007, at 3:51 PM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="2430.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Previous message:</strong> <a href="2428.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>In reply to:</strong> <a href="2428.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2430.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Reply:</strong> <a href="2430.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
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
