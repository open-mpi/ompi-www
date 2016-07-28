<?
$subject_val = "Re: [OMPI users] meaning of MPI_THREAD_*";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  6 09:26:46 2010" -->
<!-- isoreceived="20101206142646" -->
<!-- sent="Mon, 06 Dec 2010 09:26:42 -0500" -->
<!-- isosent="20101206142642" -->
<!-- name="Hicham Mouline" -->
<!-- email="hicham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] meaning of MPI_THREAD_*" -->
<!-- id="20101206092642.27229_at_web001.roc2.bluetie.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] meaning of MPI_THREAD_*" -->
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
<strong>Subject:</strong> Re: [OMPI users] meaning of MPI_THREAD_*<br>
<strong>From:</strong> Hicham Mouline (<em>hicham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-06 09:26:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15008.php">Grzegorz Maj: "[OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>Previous message:</strong> <a href="15006.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Maybe in reply to:</strong> <a href="15004.php">Hicham Mouline: "[OMPI users] meaning of MPI_THREAD_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15136.php">Jeff Squyres: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>Reply:</strong> <a href="15136.php">Jeff Squyres: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&#194;&#160;
<br>
&#194;&#160;
<br>
-----Original Message-----
<br>
From: &quot;Tim Prince&quot; [n8tm_at_[hidden]]
<br>
Date: 06/12/2010 01:40 PM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] meaning of MPI_THREAD_*
<br>
<p><span class="quotelev1">&gt;On 12/6/2010 3:16 AM, Hicham Mouline wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. MPI_THREAD_SINGLE: Only one thread will execute.
</span><br>
<span class="quotelev2">&gt;&gt; Does this really mean the process cannot have any other threads at all, even if they doen't deal with MPI at all?
</span><br>
<span class="quotelev2">&gt;&gt; I'm curious as to how this case affects the openmpi implementation?
</span><br>
<span class="quotelev2">&gt;&gt; Essentially, what is the difference between MPI_THREAD_SINGLE and MPI_THREAD_FUNNELED?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. In my case, I'm interested in MPI_THREAD_SERIALIZED. However if it's available, I can use MPI_THREAD_FUNNELED.
</span><br>
<span class="quotelev2">&gt;&gt; What cmake flags do I need to enable to allow this mode?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Assume I assign only 1 thread in my program to deal with MPI. What is the difference between
</span><br>
<span class="quotelev2">&gt;&gt; int MPI::Init_thread(MPI_THREAD_SINGLE)
</span><br>
<span class="quotelev2">&gt;&gt; int MPI::Init_thread(MPI_THREAD_FUNNELED)
</span><br>
<span class="quotelev2">&gt;&gt; int MPI::Init()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;You're question is too broad; perhaps you didn't intend it that way.
</span><br>
<span class="quotelev1">&gt;Are you trying to do something which may work only with a specific
</span><br>
<span class="quotelev1">&gt;version of openmpi, or are you willing to adhere to portable practice?
</span><br>
<span class="quotelev1">&gt;I. tend to believe what it says at
</span><br>
<span class="quotelev1">&gt;<a href="http://www.mcs.anl.gov/research/projects/mpi/mpi-standard/mpi-report-2.0/node165.htm">http://www.mcs.anl.gov/research/projects/mpi/mpi-standard/mpi-report-2.0/node165.htm</a>
</span><br>
<p><span class="quotelev1">&gt;including:
</span><br>
<span class="quotelev1">&gt;A call to MPI_INIT has the same effect as a call to MPI_INIT_THREAD with
</span><br>
<span class="quotelev1">&gt;a required = MPI_THREAD_SINGLE
</span><br>
<p><span class="quotelev1">&gt;You would likely use one of those if all your MPI calls are from a
</span><br>
<span class="quotelev1">&gt;single thread, and you don't perform any threading inside MPI. MPI
</span><br>
<span class="quotelev1">&gt;implementations vary on the extent to which a higher level of threading
</span><br>
<span class="quotelev1">&gt;than what is declared can be used successfully (there's no guarantee of
</span><br>
<span class="quotelev1">&gt;bad results if you exceed what was set by MPI_INIT). There shouldn't
</span><br>
<span class="quotelev1">&gt;be any bad effect from setting a higher level of thread support which
</span><br>
<span class="quotelev1">&gt;you never use.
</span><br>
<p><span class="quotelev1">&gt;I would think your question about cmake flags would apply only once you
</span><br>
<span class="quotelev1">&gt;chose a compiler. I have never seen anyone try mixing
</span><br>
<span class="quotelev1">&gt;auto-parallelization with MPI; that would require MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt;but still appears unpredictable. MPI_THREAD_FUNNELED is used often with
</span><br>
<span class="quotelev1">&gt;OpenMP parallelization inside MPI.
</span><br>
<p><span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Tim Prince
</span><br>
<p>Thanks, it is now clarified that  a call to MPI_INIT has the same effect as a call to MPI_INIT_THREAD with
<br>
a required = MPI_THREAD_SINGLE.  Perhaps it should be added here:
<br>
<a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Init_thread.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI_Init_thread.3.php</a>
<br>
as well.
<br>
I try to remain portable but am using only openmpi at the moment.
<br>
<p>It is still unclear to me the difference between MPI_THREAD_SINGLE and MPI_THREAD_FUNNELED.
<br>
Whether a program is or no multi threaded, if using MPI only from 1 thread (the one that calls MPI_INIT) would have no bearing on the mpi implementation, or?
<br>
<p>regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15008.php">Grzegorz Maj: "[OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>Previous message:</strong> <a href="15006.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Maybe in reply to:</strong> <a href="15004.php">Hicham Mouline: "[OMPI users] meaning of MPI_THREAD_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15136.php">Jeff Squyres: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>Reply:</strong> <a href="15136.php">Jeff Squyres: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
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
