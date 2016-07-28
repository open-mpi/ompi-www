<?
$subject_val = "Re: [OMPI devel] [Fwd:  multi-threaded test]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 14 21:58:26 2011" -->
<!-- isoreceived="20110315015826" -->
<!-- sent="Mon, 14 Mar 2011 21:58:19 -0400" -->
<!-- isosent="20110315015819" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Fwd:  multi-threaded test]" -->
<!-- id="F55A5CEF-4E87-4ABE-B83D-DA8D9202898C_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Prayer.1.3.3.1103120851560.22784_at_hermes-1.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Fwd:  multi-threaded test]<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-14 21:58:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9064.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Previous message:</strong> <a href="9062.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>In reply to:</strong> <a href="9062.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9064.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9064.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 12, 2011, at 03:51 , N.M. Maclaren wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 12 2011, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Removing thread support is _NOT_ an option (<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Hybrid">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Hybrid</a>).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unlike the usual claims on this mailing list, MPI_THREAD_MULTIPLE had been fully supported for several BTLs in Open MPI (<a href="http://www.springerlink.com/content/lmh1144p51317313/">http://www.springerlink.com/content/lmh1144p51317313/</a>). The long term goal is to go back to at least the same level of support, and not to totally annihilate the efforts put into this in the past.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You have clearly misunderstood what I was posting, and I am not
</span><br>
<span class="quotelev1">&gt; sure that you understand the problem I am describing.  The problem is
</span><br>
<span class="quotelev1">&gt; NOT whether OpenMPI can claim to support it, or even make it work
</span><br>
<span class="quotelev1">&gt; most of the time - that's almost trivial.  I will attempt to clarify,
</span><br>
<span class="quotelev1">&gt; and then will not continue unless there is something new.
</span><br>
<span class="quotelev1">&gt; The problems have NOTHING WHATSOEVER to do with the transfer library
</span><br>
<span class="quotelev1">&gt; layer, which is which I said that threads used behind the scene are
</span><br>
<span class="quotelev1">&gt; not a problem.
</span><br>
<p>Nobody challenged your statements about threading or about the correctness of the POSIX standard. However, such concerns are better voiced on forums related to that specific subject, where they have a chance to be taken into account by people who understand them.
<br>
<p>This particular topic was about MPI level threading support, more specifically about the threading support Open MPI would like to provide. In this limited context, people interested in using thread and MPI together are well aware about the limitations imposed on their application, as well as the pitfalls they have to avoid. Moreover, with the new endpoint proposal (the one I was pointing on my previous email), the threads will become first-class citizen in MPI.
<br>
<p>&nbsp;george.
<br>
<p><span class="quotelev1">&gt; The killer is that the languages and system specifications do not make
</span><br>
<span class="quotelev1">&gt; it possible to implement such things reliably, let alone portably to
</span><br>
<span class="quotelev1">&gt; almost all conforming systems.  And the issues do NOT normally arise in
</span><br>
<span class="quotelev1">&gt; what the OpenMPI code does, but in what the USER code does that
</span><br>
<span class="quotelev1">&gt; interacts with what the OpenMPI code does or does not do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Take that damn signal handling fiasco, and assume that threat T in
</span><br>
<span class="quotelev1">&gt; process P does something that triggers an asynchronous signal.  To my
</span><br>
<span class="quotelev1">&gt; certain knowledge, that may be delivered to T, another thread T1 in P,
</span><br>
<span class="quotelev1">&gt; all threads in P, P itself, or a group of processes including P, and
</span><br>
<span class="quotelev1">&gt; there are essentially no facilities to control this or even to find out
</span><br>
<span class="quotelev1">&gt; which has happened.  When one thread 'handles' that signal, it may clear
</span><br>
<span class="quotelev1">&gt; the signal from all or some of the other threads and processes that have
</span><br>
<span class="quotelev1">&gt; it pending - but there are NO facilities to enforce synchronisation, and
</span><br>
<span class="quotelev1">&gt; the normal memory synchronisation primitives don't do it!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So you have an INSOLUBLE race condition, which will have the usual effect
</span><br>
<span class="quotelev1">&gt; of showing up as a very low probability, non-repeatable misbehaviour.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another one I have seen, that is equally unspecified and unreliable, is
</span><br>
<span class="quotelev1">&gt; kernel scheduling.  There is no way for one thread to say 'run thread T1
</span><br>
<span class="quotelev1">&gt; next' - all it can do is to fiddle priorities, and no system that I know
</span><br>
<span class="quotelev1">&gt; of implements those in the way the specification indicates.  I have seen
</span><br>
<span class="quotelev1">&gt; a thread T waiting on an event to be caused by thread T1, but have had
</span><br>
<span class="quotelev1">&gt; no way to get T1 to actually run, for any one of several complicated
</span><br>
<span class="quotelev1">&gt; reasons.   This can happen to processes, too, but there are at least
</span><br>
<span class="quotelev1">&gt; SOME tools to get out of the hole!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And then there are the old, old issues with file descriptor ownership.
</span><br>
<span class="quotelev1">&gt; Under MVS, you could read and write a file from any task (thread), but
</span><br>
<span class="quotelev1">&gt; only extend the file or close it from the thread that opened it, and
</span><br>
<span class="quotelev1">&gt; occasionally writing needed extension.  Oops.  Well, I have seen that
</span><br>
<span class="quotelev1">&gt; one on Unix sockets, too.  But it probably isn't extant, until you start
</span><br>
<span class="quotelev1">&gt; considering programs that use setuid/setgid/setsid/etc. - yes, they
</span><br>
<span class="quotelev1">&gt; affect all threads, in theory, but how are they synchronised?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And so it goes.  There are DOZENS of other gotchas, many of which I have
</span><br>
<span class="quotelev1">&gt; seen arise on real systems.  And, no, they are NOT bugs, because the
</span><br>
<span class="quotelev1">&gt; standards don't say what should happen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This area is a complete mess, which is why all experienced software
</span><br>
<span class="quotelev1">&gt; engineers batten down the hatches, switch on maximum paranoia mode, and
</span><br>
<span class="quotelev1">&gt; use the most cautious approach that they can get away with.  And, even
</span><br>
<span class="quotelev1">&gt; then, they don't trust anything and insert lots of internal checking
</span><br>
<span class="quotelev1">&gt; to try to detect when something unexpected has happened, and their
</span><br>
<span class="quotelev1">&gt; environment has gone pear-shaped.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nick Maclaren.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&quot;I disapprove of what you say, but I will defend to the death your right to say it&quot;
<br>
&nbsp;&nbsp;-- Evelyn Beatrice Hall
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9064.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Previous message:</strong> <a href="9062.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>In reply to:</strong> <a href="9062.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9064.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9064.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
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
