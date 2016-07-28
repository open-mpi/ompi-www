<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  6 10:45:10 2006" -->
<!-- isoreceived="20061006144510" -->
<!-- sent="Fri, 06 Oct 2006 16:45:07 +0200" -->
<!-- isosent="20061006144507" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bugs in config tests for threads (1.1.2rc3 at	least)" -->
<!-- id="1160145907.8078.199.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="Pine.LNX.4.64.0610061018130.699_at_milliways.osl.iu.edu" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-06 10:45:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1941.php">Maestas, Christopher Daniel: "[OMPI users] A -pernode behavior using torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="1939.php">Brian W. Barrett: "Re: [OMPI users] Bugs in config tests for threads (1.1.2rc3 at least)"</a>
<li><strong>In reply to:</strong> <a href="1939.php">Brian W. Barrett: "Re: [OMPI users] Bugs in config tests for threads (1.1.2rc3 at least)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1962.php">Åke Sandgren: "Re: [OMPI users] Bugs in config tests for threads (1.1.2rc3 at	least)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2006-10-06 at 10:18 -0400, Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; Is there a platform on which this breaks?  It seems to have worked well 
</span><br>
<span class="quotelev1">&gt; for years...  I'll take a closer look early next week.
</span><br>
<p>It should be a general problem as far as i know. It might have &quot;worked
<br>
well for years&quot; but it has never done the &quot;right thing&quot;.
<br>
<p>The changes to ompi_config_pthreads.m4 is just to make sure LIBS have
<br>
the correct value when the checks for OMPI_INTL_POSIX_THREADS_LIBS are
<br>
finished and the PTHREAD_MUTEX_ERRORCHECK_NP test is started.
<br>
Take a look at the code before applying patch and after and you'll see
<br>
what i'm aiming for.
<br>
<p>The ompi_check_pthread_pids.m4 fixes two problems.
<br>
Making sure that CFLAGS (and not only CPPFLAGS) contains -pthread when
<br>
building with gcc (which it didn't and hence the test always failed on
<br>
all gcc builds.)
<br>
And fixing the test-code itself which was incorrect.
<br>
It worked somewhat with old Linux-threads but the new posix correct
<br>
thread implementation is more strict on what can be returned in
<br>
pthread_exit.
<br>
<p>So the patches fixes things that was always broken...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1941.php">Maestas, Christopher Daniel: "[OMPI users] A -pernode behavior using torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="1939.php">Brian W. Barrett: "Re: [OMPI users] Bugs in config tests for threads (1.1.2rc3 at least)"</a>
<li><strong>In reply to:</strong> <a href="1939.php">Brian W. Barrett: "Re: [OMPI users] Bugs in config tests for threads (1.1.2rc3 at least)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1962.php">Åke Sandgren: "Re: [OMPI users] Bugs in config tests for threads (1.1.2rc3 at	least)"</a>
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
