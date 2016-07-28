<?
$subject_val = "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 15:53:53 2014" -->
<!-- isoreceived="20140213205353" -->
<!-- sent="Thu, 13 Feb 2014 15:53:50 -0500" -->
<!-- isosent="20140213205350" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No" -->
<!-- id="991AD345-C6D2-46C7-A331-D1D89E45F38C_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CADsB1iBHZDKmwErf40p6+H_X58xRu3Z0yL0ytnBgmA0yXVyBNw_at_mail.gmail.com" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-13 15:53:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23598.php">Ralph Castain: "Re: [OMPI users] Questions on MPI I/O and ompi_info"</a>
<li><strong>Previous message:</strong> <a href="23596.php">MM: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>In reply to:</strong> <a href="23596.php">MM: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13 f&#233;vr. 2014 &#224; 15:23, MM &lt;finjulhich_at_[hidden]&gt; a &#233;crit :
<br>
<p><span class="quotelev1">&gt; my ompi_info says  (openmpi)
</span><br>
<span class="quotelev1">&gt; Threading support: No 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that mean it's not supported?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Yes, that&#146;s what it means.
<br>
<p><span class="quotelev1">&gt; If so, what to do?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Gently ignore that information. Open MPI works for &#147;serialized&#148; workloads, even when thread support is disabled (not guaranteed to remain like that in future releases, use at your own risk). 
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 13 February 2014 17:00, Matthias Troyer &lt;troyer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev2">&gt;&gt; On 13 February 2014 15:33, Matthias Troyer &lt;troyer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In orders to use MPI in a multi-threaded environment, even when only one thread uses MPI, you need to request the necessary level of thread support in the environment constructor. Then you'd an check whether your MPI implementation supports multi threading. Note that using MPI the way you do need not work even though it seems safe at first sight. One reason is that your MPI implementation might use threads internally to support, e.g. nonblocking calls and those threads might not be compatible with your threads.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Matthias
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So in my case, as I have a main thread that doesn't call MPI, and another purposely created user thread to call MPI  lib, the mode is MPI_THREAD_FUNNELLED ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; as boost 1.54 doesn't have the level in the enviroment ctor, I need to explicitly call the underlying MPI::Init_thread(MPI_THREAD_FUNNELED).
</span><br>
<span class="quotelev2">&gt;&gt; once I move to 1.55, I'll use the env ctor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You need MPI_THREAD_SERIALIZED since it is not the main thread which is doing the MPI communication. Be sure to check whether that level is actually supported.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23597/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23598.php">Ralph Castain: "Re: [OMPI users] Questions on MPI I/O and ompi_info"</a>
<li><strong>Previous message:</strong> <a href="23596.php">MM: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>In reply to:</strong> <a href="23596.php">MM: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
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
