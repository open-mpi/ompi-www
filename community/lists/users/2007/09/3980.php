<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  6 13:46:44 2007" -->
<!-- isoreceived="20070906174644" -->
<!-- sent="Thu, 06 Sep 2007 11:46:19 -0600" -->
<!-- isosent="20070906174619" -->
<!-- name="Thompson, Aidan P." -->
<!-- email="athomps_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files" -->
<!-- id="C305990B.1230A%athomps_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.29.1189094424.31396.users_at_open-mpi.org" -->
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
<strong>From:</strong> Thompson, Aidan P. (<em>athomps_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-06 13:46:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3981.php">Brock Palen: "[OMPI users] mpiio romio etc"</a>
<li><strong>Previous message:</strong> <a href="3979.php">Sven Stork: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Maybe in reply to:</strong> <a href="3976.php">Thompson, Aidan P.: "[OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and Sven,
<br>
<p>Thank you for your helpful responses to my grumpy, uninformed, inquiry. I
<br>
like option 3 best, because while I currently do not require OMPI's C++
<br>
bindings, I might in the future, in which case I would probably spend ours
<br>
trying to figure out why I can't find the C++ headers.
<br>
<p>I added -DOMPI_SKIP_MPICXX to my LAMMPS Makefile, and it dropped the compile
<br>
time by 4x, so it now compiles just as fast as the serial version.
<br>
<p>Very nice.
<br>
<p>Aidan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Thu, 6 Sep 2007 10:56:54 +0200
</span><br>
<span class="quotelev1">&gt; From: Sven Stork &lt;stork_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI compiler is slowed down by
</span><br>
<span class="quotelev1">&gt; including unnecessary header files
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;200709061056.55017.stork_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain;  charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday 06 September 2007 02:29, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, &lt;iostream&gt; is there for a specific reason.  The
</span><br>
<span class="quotelev2">&gt;&gt; MPI::SEEK_* names are problematic because they clash with the
</span><br>
<span class="quotelev2">&gt;&gt; equivalent C constants.  With the tricks that we have to play to make
</span><br>
<span class="quotelev2">&gt;&gt; those constants [at least mostly] work in the MPI C++ namespace, we
</span><br>
<span class="quotelev2">&gt;&gt; *must* include them.  The comment in mpicxx.h explains:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; // We need to include the header files that define SEEK_* or use them
</span><br>
<span class="quotelev2">&gt;&gt; // in ways that require them to be #defines so that if the user
</span><br>
<span class="quotelev2">&gt;&gt; // includes them later, the double inclusion logic in the headers will
</span><br>
<span class="quotelev2">&gt;&gt; // prevent trouble from occuring.
</span><br>
<span class="quotelev2">&gt;&gt; // include so that we can smash SEEK_* properly
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; // include because on Linux, there is one place that assumes SEEK_* is
</span><br>
<span class="quotelev2">&gt;&gt; // a #define (it's used in an enum).
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, much of the C++ MPI bindings are implemented as inline
</span><br>
<span class="quotelev2">&gt;&gt; functions, meaning that, yes, it does add lots of extra code to be
</span><br>
<span class="quotelev2">&gt;&gt; compiled.  Sadly, that's the price we pay for optimization (the fact
</span><br>
<span class="quotelev2">&gt;&gt; that they're inlined allows the cost to be zero -- we used to have a
</span><br>
<span class="quotelev2">&gt;&gt; paper on the LAM/MPI web site showing specific performance numbers to
</span><br>
<span class="quotelev2">&gt;&gt; back up this claim, but I can't find it anymore :-\ [the OMPI C++
</span><br>
<span class="quotelev2">&gt;&gt; bindings were derived from the LAM/MPI C++ bindings]).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You have two options for speeding up C++ builds:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Disable OMPI's MPI C++ bindings altogether with the --disable-mpi-
</span><br>
<span class="quotelev2">&gt;&gt; cxx configure flag.  This means that &lt;mpi.h&gt; won't include any of
</span><br>
<span class="quotelev2">&gt;&gt; those extra C++ header files at all.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. If you're not using the MPI-2 C++ bindings for the IO
</span><br>
<span class="quotelev2">&gt;&gt; functionality, you can disable the SEEK_* macros (and therefore
</span><br>
<span class="quotelev2">&gt;&gt; &lt;stdio.h&gt; and &lt;iostream&gt;) with the --disable-mpi-cxx-seek configure
</span><br>
<span class="quotelev2">&gt;&gt; flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; maybe this could be a third option:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. just add -DOMPI_SKIP_MPICXX to you compilation flags to skip the inclusion
</span><br>
<span class="quotelev1">&gt; of the mpicxx.h.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Sven 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; See &quot;./configure --help&quot; for a full list of configure flags that are
</span><br>
<span class="quotelev2">&gt;&gt; available.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3981.php">Brock Palen: "[OMPI users] mpiio romio etc"</a>
<li><strong>Previous message:</strong> <a href="3979.php">Sven Stork: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Maybe in reply to:</strong> <a href="3976.php">Thompson, Aidan P.: "[OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
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
