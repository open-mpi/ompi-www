<?
$subject_val = "Re: [OMPI users] Shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 08:43:03 2010" -->
<!-- isoreceived="20100924124303" -->
<!-- sent="Fri, 24 Sep 2010 14:42:13 +0200" -->
<!-- isosent="20100924124213" -->
<!-- name="Andrei Fokau" -->
<!-- email="andrei.fokau_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared memory" -->
<!-- id="AANLkTikEx2LafT98fvgFH-Sr_B0Zwe-nHdRZD4hoSO06_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6D7ED295-4576-4C99-A2B1-E5EB4B44347C_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared memory<br>
<strong>From:</strong> Andrei Fokau (<em>andrei.fokau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 08:42:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14322.php">Olivier Riff: "Re: [OMPI users] Display in terminal of error message using throw std::runtime_error on distant node..."</a>
<li><strong>Previous message:</strong> <a href="14320.php">Jeff Squyres: "Re: [OMPI users] How to know which process is running on which core?"</a>
<li><strong>In reply to:</strong> <a href="14315.php">Reuti: "Re: [OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14326.php">Eugene Loh: "Re: [OMPI users] Shared memory"</a>
<li><strong>Reply:</strong> <a href="14326.php">Eugene Loh: "Re: [OMPI users] Shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The data are read from a file and processed before calculations begin, so I
<br>
think that mapping will not work in our case.
<br>
<p>Global Arrays look promising indeed. As I said, we need to put just a part
<br>
of data to the shared section. John, do you (or may be other users) have an
<br>
experience of working with GA?
<br>
<p><a href="http://www.emsl.pnl.gov/docs/global/um/build.html">http://www.emsl.pnl.gov/docs/global/um/build.html</a>
<br>
*When GA runs with MPI:*
<br>
<p>MPI_Init(..)      ! start MPI
<br>
GA_Initialize()   ! start global arrays
<br>
MA_Init(..)       ! start memory allocator
<br>
<p>&nbsp;&nbsp;&nbsp;.... do work
<br>
<p>GA_Terminate()    ! tidy up global arrays
<br>
MPI_Finalize()    ! tidy up MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! exit program
<br>
<p><p><p>On Fri, Sep 24, 2010 at 13:44, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 24.09.2010 um 13:26 schrieb John Hearns:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 24 September 2010 08:46, Andrei Fokau &lt;andrei.fokau_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We use a C-program which consumes a lot of memory per process (up to few
</span><br>
<span class="quotelev3">&gt; &gt;&gt; GB), 99% of the data being the same for each process. So for us it would
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; quite reasonable to put that part of data in a shared memory.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.emsl.pnl.gov/docs/global/">http://www.emsl.pnl.gov/docs/global/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this eny help? Apologies if I'm talking through my hat.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was also thinking of this when I read &quot;data in a shared memory&quot; (besides
</span><br>
<span class="quotelev1">&gt; approaches like <a href="http://www.kerrighed.org/wiki/index.php/Main_Page">http://www.kerrighed.org/wiki/index.php/Main_Page</a>). Wasn't
</span><br>
<span class="quotelev1">&gt; this also one idea behind &quot;High Performance Fortran&quot; - running in parallel
</span><br>
<span class="quotelev1">&gt; across nodes even without knowing that it's across nodes at all while
</span><br>
<span class="quotelev1">&gt; programming and access all data like it's being local.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14321/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14322.php">Olivier Riff: "Re: [OMPI users] Display in terminal of error message using throw std::runtime_error on distant node..."</a>
<li><strong>Previous message:</strong> <a href="14320.php">Jeff Squyres: "Re: [OMPI users] How to know which process is running on which core?"</a>
<li><strong>In reply to:</strong> <a href="14315.php">Reuti: "Re: [OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14326.php">Eugene Loh: "Re: [OMPI users] Shared memory"</a>
<li><strong>Reply:</strong> <a href="14326.php">Eugene Loh: "Re: [OMPI users] Shared memory"</a>
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
