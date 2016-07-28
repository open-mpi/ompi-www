<?
$subject_val = "Re: [OMPI devel] Thread safety levels";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 08:49:19 2010" -->
<!-- isoreceived="20100510124919" -->
<!-- sent="10 May 2010 13:49:14 +0100" -->
<!-- isosent="20100510124914" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Thread safety levels" -->
<!-- id="Prayer.1.3.2.1005101349140.24337_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.1005101137300.3698_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Thread safety levels<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 08:49:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7905.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7903.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7902.php">Sylvain Jeaugey: "Re: [OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7903.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 10 2010, Sylvain Jeaugey wrote:
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That is definitely the correct action.  Unless an application or library 
</span><br>
<span class="quotelev2">&gt;&gt; has been built with thread support, or can guaranteed to be called only 
</span><br>
<span class="quotelev2">&gt;&gt; from a single thread, using threads is catastrophic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I personnaly see that as a bug, but I certainly lack some knowledge on 
</span><br>
<span class="quotelev1">&gt;non-linux OSes.
</span><br>
<p>It's not a bug, except possibly in Linux.  Threading is optional in
<br>
POSIX and not all MPI hosts are Unices, anyway.  It would be
<br>
reasonable for OpenMPI to demand a certain minimum level of threading
<br>
support, given that non-threaded systems are more-or-less dead.
<br>
<p><span class="quotelev1">&gt;From my point of view, any normal library should be 
</span><br>
<span class="quotelev1">&gt;THREAD_SERIALIZED, and thread-safe library should be THREAD_MULTIPLE.
</span><br>
<p>I am not disagreeing, but that's a matter of the system designer's
<br>
choice.
<br>
<p><span class="quotelev1">&gt;I don't see other libraries which claims to be &quot;totally incompatible with 
</span><br>
<span class="quotelev1">&gt;the use of threads&quot;. They may not be thread-safe, in which case the 
</span><br>
<span class="quotelev1">&gt;programmer must ensure locking and memory coherency to use them in 
</span><br>
<span class="quotelev1">&gt;conjunction with threads, but that's about what THREAD_SERIALIZED is about 
</span><br>
<span class="quotelev1">&gt;IMO.
</span><br>
<p>No, that's not what I meant.  There really are systems out there where
<br>
you must compile with a threading option to ensure that threads can be
<br>
supported.  AIX is (or, at least, was) one - and a right pain it was,
<br>
too!  I had to edit the compile scripts to get them to work with IBM's
<br>
own MPI - and I didn't support the MPI+OpenMP mixture, either.
<br>
<p><span class="quotelev2">&gt;&gt; I don't think that's correct.  That would call MPI_Allreduce once for
</span><br>
<span class="quotelev2">&gt;&gt; each thread, in parallel, on the same process - which wouldn't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I think the idea is precisely _not_ to call MPI_Allreduce within parallel 
</span><br>
<span class="quotelev1">&gt;sections, i.e. only have the master thread call MPI.
</span><br>
<p>Then you need the extra code I mentioned, but that doesn't affect
<br>
your main point.  Let's ignore this one.
<br>
<p><span class="quotelev1">&gt;In my understanding of MPI_THREAD_SERIALIZED, the memory coherency was 
</span><br>
<span class="quotelev1">&gt;guaranteed. If not, the programmer has to ensure it.
</span><br>
<p>It can't guarantee it when running under a POSIX-like system; the
<br>
programmer has to ensure it.  There is no one-sided synchronisation
<br>
mechanism in POSIX.
<br>
<p><span class="quotelev2">&gt;&gt; I can't comment on that, though I doubt it's quite that simple.  There's
</span><br>
<span class="quotelev2">&gt;&gt; a big difference between MPI_THREAD_FUNNELED and MPI_THREAD_SERIALIZED
</span><br>
<span class="quotelev2">&gt;&gt; in implementation impact.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I don't see the relationship between THREAD_SERIALIZED/FUNNELED and 
</span><br>
<span class="quotelev1">&gt;OMPI_HAVE_THREAD_SUPPORT. Actually, OMPI_HAVE_THREAD_SUPPORT seems to have 
</span><br>
<span class="quotelev1">&gt;no relationship with how the OS supports threads (that's why I think it is 
</span><br>
<span class="quotelev1">&gt;misleading).
</span><br>
<p>Only someone who knows the history of OpenMPI's configure mechanism
<br>
could answer that.  I can't.
<br>
<p><span class="quotelev1">&gt;But I don't see a big difference between THREAD_SERIALIZED and 
</span><br>
<span class="quotelev1">&gt;THREAD_FUNNELED anyway. Do you have more information on systems where the 
</span><br>
<span class="quotelev1">&gt;caller thread id makes a difference in MPI ?
</span><br>
<p>MPI isn't the issue - it's the underlying facilities.  For example,
<br>
some uses of sockets might fail if they weren't on the same thread
<br>
as the one that opened the socket.  That was a documented feature of
<br>
MVS (now zOS) and I have seen it on several Unices.  POSIX doesn't
<br>
specify this properly, and says several things that add unnecessary
<br>
confusion.  There is also a potential problem with InfiniBand and
<br>
similar transports, but that's tricky to explain.
<br>
<p>I don't know how serious this problem is, today, on OpenMPI's target
<br>
systems, but I know that it's a real problem and truly evil when it
<br>
occurs.  That is, after all, why MPI distinguishes those cases.
<br>
<p><span class="quotelev1">&gt;Just for the record, we (at Bull) patched our MPI library and had no 
</span><br>
<span class="quotelev1">&gt;problem so far with applications using MPI + Threads or MPI + OpenMP, 
</span><br>
<span class="quotelev1">&gt;given that they don't call MPI within parallel sections. But of course, we 
</span><br>
<span class="quotelev1">&gt;only use linux, so your mileage may vary.
</span><br>
<p>That doesn't surprise me.  Linux is usually free from such gotchas.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7905.php">N.M. Maclaren: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>Previous message:</strong> <a href="7903.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
<li><strong>In reply to:</strong> <a href="7902.php">Sylvain Jeaugey: "Re: [OMPI devel] Thread safety levels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7903.php">Kawashima: "Re: [OMPI devel] Thread safety levels"</a>
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
