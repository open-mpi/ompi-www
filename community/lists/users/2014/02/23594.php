<?
$subject_val = "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 11:44:07 2014" -->
<!-- isoreceived="20140213164407" -->
<!-- sent="Thu, 13 Feb 2014 16:44:05 +0000" -->
<!-- isosent="20140213164405" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No" -->
<!-- id="CADsB1iCxSjin5AvGzwP3HAcuYXnJM9OhAF7q88V++bnHDr20Mw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6D55C24D-96F6-4C14-9863-EDD21B01F7CE_at_phys.ethz.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-13 11:44:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23595.php">Blosch, Edwin L: "[OMPI users] Questions on MPI I/O and ompi_info"</a>
<li><strong>Previous message:</strong> <a href="23593.php">MM: "Re: [OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23596.php">MM: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>Maybe reply:</strong> <a href="23596.php">MM: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 13 February 2014 15:33, Matthias Troyer &lt;troyer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In orders to use MPI in a multi-threaded environment, even when only one
</span><br>
<span class="quotelev1">&gt; thread uses MPI, you need to request the necessary level of thread support
</span><br>
<span class="quotelev1">&gt; in the environment constructor. Then you'd an check whether your MPI
</span><br>
<span class="quotelev1">&gt; implementation supports multi threading. Note that using MPI the way you do
</span><br>
<span class="quotelev1">&gt; need not work even though it seems safe at first sight. One reason is that
</span><br>
<span class="quotelev1">&gt; your MPI implementation might use threads internally to support, e.g.
</span><br>
<span class="quotelev1">&gt; nonblocking calls and those threads might not be compatible with your
</span><br>
<span class="quotelev1">&gt; threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So in my case, as I have a main thread that doesn't call MPI, and another
</span><br>
purposely created user thread to call MPI  lib, the mode is
<br>
MPI_THREAD_FUNNELLED ?
<br>
<p>as boost 1.54 doesn't have the level in the enviroment ctor, I need to
<br>
explicitly call the underlying MPI::Init_thread(MPI_THREAD_FUNNELED).
<br>
once I move to 1.55, I'll use the env ctor.
<br>
<p>thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23594/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23595.php">Blosch, Edwin L: "[OMPI users] Questions on MPI I/O and ompi_info"</a>
<li><strong>Previous message:</strong> <a href="23593.php">MM: "Re: [OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23596.php">MM: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>Maybe reply:</strong> <a href="23596.php">MM: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
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
