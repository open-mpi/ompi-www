<?
$subject_val = "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 15:23:19 2014" -->
<!-- isoreceived="20140213202319" -->
<!-- sent="Thu, 13 Feb 2014 20:23:17 +0000" -->
<!-- isosent="20140213202317" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No" -->
<!-- id="CADsB1iBHZDKmwErf40p6+H_X58xRu3Z0yL0ytnBgmA0yXVyBNw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E6583940-9B14-4138-ABFD-7F1A15358F32_at_phys.ethz.ch" -->
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
<strong>Date:</strong> 2014-02-13 15:23:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23597.php">Aurélien Bouteiller: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>Previous message:</strong> <a href="23595.php">Blosch, Edwin L: "[OMPI users] Questions on MPI I/O and ompi_info"</a>
<li><strong>Maybe in reply to:</strong> <a href="23594.php">MM: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23597.php">Aurélien Bouteiller: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>Reply:</strong> <a href="23597.php">Aurélien Bouteiller: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
my ompi_info says  (openmpi)
<br>
Threading support: No
<br>
<p>Does that mean it's not supported?
<br>
<p>If so, what to do?
<br>
<p><p>On 13 February 2014 17:00, Matthias Troyer &lt;troyer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 13, 2014, at 17:44, MM &lt;finjulhich_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 13 February 2014 15:33, Matthias Troyer &lt;troyer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In orders to use MPI in a multi-threaded environment, even when only one
</span><br>
<span class="quotelev2">&gt;&gt; thread uses MPI, you need to request the necessary level of thread support
</span><br>
<span class="quotelev2">&gt;&gt; in the environment constructor. Then you'd an check whether your MPI
</span><br>
<span class="quotelev2">&gt;&gt; implementation supports multi threading. Note that using MPI the way you do
</span><br>
<span class="quotelev2">&gt;&gt; need not work even though it seems safe at first sight. One reason is that
</span><br>
<span class="quotelev2">&gt;&gt; your MPI implementation might use threads internally to support, e.g.
</span><br>
<span class="quotelev2">&gt;&gt; nonblocking calls and those threads might not be compatible with your
</span><br>
<span class="quotelev2">&gt;&gt; threads.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Matthias
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So in my case, as I have a main thread that doesn't call MPI, and another
</span><br>
<span class="quotelev1">&gt; purposely created user thread to call MPI  lib, the mode is
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_FUNNELLED ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as boost 1.54 doesn't have the level in the enviroment ctor, I need to
</span><br>
<span class="quotelev1">&gt; explicitly call the underlying MPI::Init_thread(MPI_THREAD_FUNNELED).
</span><br>
<span class="quotelev1">&gt; once I move to 1.55, I'll use the env ctor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need MPI_THREAD_SERIALIZED since it is not the main thread which is
</span><br>
<span class="quotelev1">&gt; doing the MPI communication. Be sure to check whether that level is
</span><br>
<span class="quotelev1">&gt; actually supported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; Boost-mpi mailing list
</span><br>
<span class="quotelev1">&gt; Boost-mpi_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.boost.org/mailman/listinfo.cgi/boost-mpi">http://lists.boost.org/mailman/listinfo.cgi/boost-mpi</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23596/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23597.php">Aurélien Bouteiller: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>Previous message:</strong> <a href="23595.php">Blosch, Edwin L: "[OMPI users] Questions on MPI I/O and ompi_info"</a>
<li><strong>Maybe in reply to:</strong> <a href="23594.php">MM: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23597.php">Aurélien Bouteiller: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>Reply:</strong> <a href="23597.php">Aurélien Bouteiller: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
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
