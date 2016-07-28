<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 30 18:34:44 2006" -->
<!-- isoreceived="20060530223444" -->
<!-- sent="Tue, 30 May 2006 18:34:41 -0400 (EDT)" -->
<!-- isosent="20060530223441" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory_malloc_hooks.c and dlclose()" -->
<!-- id="Pine.LNX.4.64.0605301833150.21880_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060522183619.5c8430e3.nludban_at_osc.edu" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-30 18:34:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0904.php">Brian Barrett: "Re: [OMPI devel] some configury update"</a>
<li><strong>Previous message:</strong> <a href="0902.php">Ralf Wildenhues: "[OMPI devel] some configury update"</a>
<li><strong>In reply to:</strong> <a href="0888.php">Neil Ludban: "[OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0912.php">Neil Ludban: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 22 May 2006, Neil Ludban wrote:
<br>
<p><span class="quotelev1">&gt; I'm getting a core dump when using openmpi-1.0.2 with the MPI extensions
</span><br>
<span class="quotelev1">&gt; we're developing for the MATLAB interpreter.  This same build of openmpi
</span><br>
<span class="quotelev1">&gt; is working great with C programs and our extensions for gnu octave.  The
</span><br>
<span class="quotelev1">&gt; machine is AMD64 running Linux:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux kodos 2.6.9-5.ELsmp #1 SMP Wed Jan 5 19:29:47 EST 2005 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe there's a bug in that opal_memory_malloc_hooks_init() links
</span><br>
<span class="quotelev1">&gt; itself into the __free_hook chain during initialization, but then it
</span><br>
<span class="quotelev1">&gt; never unlinks itself at shutdown.  In the interpreter environment,
</span><br>
<span class="quotelev1">&gt; libopal.so is dlclose()d and unmapped from memory long before the
</span><br>
<span class="quotelev1">&gt; interpreter is done with dynamic memory.  A quick check of the nightly
</span><br>
<span class="quotelev1">&gt; trunk snapshot reveals some function name changes, but no new shutdown
</span><br>
<span class="quotelev1">&gt; code.
</span><br>
<p>Can you try the attached patch and see if it solves your problem?  I think 
<br>
it will, but I don't have a great way of testing your exact situation.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Graduate Student, Open Systems Lab, Indiana University
   <a href="http://www.osl.iu.edu/~brbarret/">http://www.osl.iu.edu/~brbarret/</a>

</pre>
<hr>
<ul>
<li>TEXT/PLAIN attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0903/ompi_v10_memhooks.diff">ompi_v10_memhooks.diff</a>
</ul>
<!-- attachment="ompi_v10_memhooks.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0904.php">Brian Barrett: "Re: [OMPI devel] some configury update"</a>
<li><strong>Previous message:</strong> <a href="0902.php">Ralf Wildenhues: "[OMPI devel] some configury update"</a>
<li><strong>In reply to:</strong> <a href="0888.php">Neil Ludban: "[OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0912.php">Neil Ludban: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
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
