<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  1 12:50:52 2006" -->
<!-- isoreceived="20060601165052" -->
<!-- sent="Thu, 1 Jun 2006 12:42:41 -0400" -->
<!-- isosent="20060601164241" -->
<!-- name="Neil Ludban" -->
<!-- email="nludban_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory_malloc_hooks.c and dlclose()" -->
<!-- id="20060601124241.05572950.nludban_at_osc.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.3.1149091202.24800.devel_at_open-mpi.org" -->
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
<strong>From:</strong> Neil Ludban (<em>nludban_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-01 12:42:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0913.php">Pak Lui: "[OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/05/0911.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/05/0888.php">Neil Ludban: "[OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Date: Tue, 30 May 2006 18:34:41 -0400 (EDT)
</span><br>
<span class="quotelev1">&gt; From: &quot;Brian W. Barrett&quot; &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] memory_malloc_hooks.c and dlclose()
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;Pine.LNX.4.64.0605301833150.21880_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 22 May 2006, Neil Ludban wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm getting a core dump when using openmpi-1.0.2 with the MPI extensions
</span><br>
<span class="quotelev2">&gt; &gt; we're developing for the MATLAB interpreter.  This same build of openmpi
</span><br>
<span class="quotelev2">&gt; &gt; is working great with C programs and our extensions for gnu octave.  The
</span><br>
<span class="quotelev2">&gt; &gt; machine is AMD64 running Linux:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Linux kodos 2.6.9-5.ELsmp #1 SMP Wed Jan 5 19:29:47 EST 2005 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I believe there's a bug in that opal_memory_malloc_hooks_init() links
</span><br>
<span class="quotelev2">&gt; &gt; itself into the __free_hook chain during initialization, but then it
</span><br>
<span class="quotelev2">&gt; &gt; never unlinks itself at shutdown.  In the interpreter environment,
</span><br>
<span class="quotelev2">&gt; &gt; libopal.so is dlclose()d and unmapped from memory long before the
</span><br>
<span class="quotelev2">&gt; &gt; interpreter is done with dynamic memory.  A quick check of the nightly
</span><br>
<span class="quotelev2">&gt; &gt; trunk snapshot reveals some function name changes, but no new shutdown
</span><br>
<span class="quotelev2">&gt; &gt; code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you try the attached patch and see if it solves your problem?  I think 
</span><br>
<span class="quotelev1">&gt; it will, but I don't have a great way of testing your exact situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Graduate Student, Open Systems Lab, Indiana University
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.osl.iu.edu/~brbarret/">http://www.osl.iu.edu/~brbarret/</a>
</span><br>
<p>Problem solved!
<br>
<p>Thanks-
<br>
<p>-Neil
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0913.php">Pak Lui: "[OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/05/0911.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/05/0888.php">Neil Ludban: "[OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
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
