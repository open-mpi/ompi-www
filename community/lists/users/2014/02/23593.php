<?
$subject_val = "Re: [OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 10:22:39 2014" -->
<!-- isoreceived="20140213152239" -->
<!-- sent="Thu, 13 Feb 2014 15:22:37 +0000" -->
<!-- isosent="20140213152237" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No" -->
<!-- id="CADsB1iAvf4oMVPryduFPUe2cJuEFXBt_xBEO1kfnN1AsNXe-1Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADsB1iCdYFa2ZYetrY18-MamVV4gW0SftOZ3nA4qd3EhROnoJg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-13 10:22:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23594.php">MM: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>Previous message:</strong> <a href="23592.php">MM: "[OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>In reply to:</strong> <a href="23592.php">MM: "[OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Apologies for the issue,
<br>
<p>I was getting output from the 2 processes, and their threads, and I was
<br>
focused on only 1 process.
<br>
<p>Please ignore,
<br>
<p><p>On 13 February 2014 14:33, MM &lt;finjulhich_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running a MPI application on a single host, with a dual quadcore with
</span><br>
<span class="quotelev1">&gt; hyperthreading on. (16 OS-visible processors), but just in debug mode
</span><br>
<span class="quotelev1">&gt; (msvc2010) 32bit, with 2 mpi processes only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl_tcp_if_exclude lo -np 1 prog1.exe : -np 1 prog2.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; . when progr1.exe has 1 thread (mpi never initialized), everything works
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<span class="quotelev1">&gt; . when progr2.exe has 2 threads (1 thread with no call to mpi functions,
</span><br>
<span class="quotelev1">&gt; and a second thread where mpi is initialized, through a default ctor of
</span><br>
<span class="quotelev1">&gt; boost::mpi::environment, I think thos means just a call to MPI_Initialize()
</span><br>
<span class="quotelev1">&gt; ), ompi_info gives &quot;Threading support: No&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I start prog1, create addition thread boost::thread that handles MPI
</span><br>
<span class="quotelev1">&gt; calls.
</span><br>
<span class="quotelev1">&gt; 2. proceed to a point where both thread1 and threadMPI, not concurrently,
</span><br>
<span class="quotelev1">&gt; call a function f().
</span><br>
<span class="quotelev1">&gt; f() initializes a global const std::string* X=null, to a static, this X is
</span><br>
<span class="quotelev1">&gt; visible from both threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In fact, it appears at a certain point during a boost::mpi::broadcast,
</span><br>
<span class="quotelev1">&gt; within threadMPI, boost::mpi calls MPI_Isend (point_to_point.cpp: 53),
</span><br>
<span class="quotelev1">&gt; during this Isend, a 3rd thread (not threadMPI) is created and causes a
</span><br>
<span class="quotelev1">&gt; call to f() which doesn't see X as !=nullptr.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can see this while debugging with msvc, and stepping into MPI_Isend (i
</span><br>
<span class="quotelev1">&gt; don't have the sources for it). At that moment, suddenly a new thread is
</span><br>
<span class="quotelev1">&gt; created, and a call to f() is made.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This all sounds quite nightmarish.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand I haven't presented any specific code to receive an accurate
</span><br>
<span class="quotelev1">&gt; answer, but any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23593/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23594.php">MM: "Re: [OMPI users] [Boost-mpi] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>Previous message:</strong> <a href="23592.php">MM: "[OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>In reply to:</strong> <a href="23592.php">MM: "[OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
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
