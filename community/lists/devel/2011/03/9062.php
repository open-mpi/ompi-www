<?
$subject_val = "Re: [OMPI devel] [Fwd:  multi-threaded test]";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 12 03:52:02 2011" -->
<!-- isoreceived="20110312085202" -->
<!-- sent="12 Mar 2011 08:51:56 +0000" -->
<!-- isosent="20110312085156" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Fwd:  multi-threaded test]" -->
<!-- id="Prayer.1.3.3.1103120851560.22784_at_hermes-1.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48D1CCA9-97E3-4739-A40E-CE44A12CDF91_at_eecs.utk.edu" -->
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
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-12 03:51:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9063.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Previous message:</strong> <a href="9061.php">Ken Lloyd: "Re: [OMPI devel] 1.5.3rc1 has been posted"</a>
<li><strong>In reply to:</strong> <a href="9059.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9063.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9063.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 12 2011, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Removing thread support is _NOT_ an option 
</span><br>
<span class="quotelev1">&gt; (<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Hybrid">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Hybrid</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unlike the usual claims on this mailing list, MPI_THREAD_MULTIPLE had 
</span><br>
<span class="quotelev1">&gt; been fully supported for several BTLs in Open MPI 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.springerlink.com/content/lmh1144p51317313/">http://www.springerlink.com/content/lmh1144p51317313/</a>). The long term 
</span><br>
<span class="quotelev1">&gt; goal is to go back to at least the same level of support, and not to 
</span><br>
<span class="quotelev1">&gt; totally annihilate the efforts put into this in the past.
</span><br>
<p>You have clearly misunderstood what I was posting, and I am not
<br>
sure that you understand the problem I am describing.  The problem is
<br>
NOT whether OpenMPI can claim to support it, or even make it work
<br>
most of the time - that's almost trivial.  I will attempt to clarify,
<br>
and then will not continue unless there is something new.
<br>
<p>The problems have NOTHING WHATSOEVER to do with the transfer library
<br>
layer, which is which I said that threads used behind the scene are
<br>
not a problem.
<br>
<p>The killer is that the languages and system specifications do not make
<br>
it possible to implement such things reliably, let alone portably to
<br>
almost all conforming systems.  And the issues do NOT normally arise in
<br>
what the OpenMPI code does, but in what the USER code does that
<br>
interacts with what the OpenMPI code does or does not do.
<br>
<p><p>Take that damn signal handling fiasco, and assume that threat T in
<br>
process P does something that triggers an asynchronous signal.  To my
<br>
certain knowledge, that may be delivered to T, another thread T1 in P,
<br>
all threads in P, P itself, or a group of processes including P, and
<br>
there are essentially no facilities to control this or even to find out
<br>
which has happened.  When one thread 'handles' that signal, it may clear
<br>
the signal from all or some of the other threads and processes that have
<br>
it pending - but there are NO facilities to enforce synchronisation, and
<br>
the normal memory synchronisation primitives don't do it!
<br>
<p>So you have an INSOLUBLE race condition, which will have the usual effect
<br>
of showing up as a very low probability, non-repeatable misbehaviour.
<br>
<p>Another one I have seen, that is equally unspecified and unreliable, is
<br>
kernel scheduling.  There is no way for one thread to say 'run thread T1
<br>
next' - all it can do is to fiddle priorities, and no system that I know
<br>
of implements those in the way the specification indicates.  I have seen
<br>
a thread T waiting on an event to be caused by thread T1, but have had
<br>
no way to get T1 to actually run, for any one of several complicated
<br>
reasons.   This can happen to processes, too, but there are at least
<br>
SOME tools to get out of the hole!
<br>
<p>And then there are the old, old issues with file descriptor ownership.
<br>
Under MVS, you could read and write a file from any task (thread), but
<br>
only extend the file or close it from the thread that opened it, and
<br>
occasionally writing needed extension.  Oops.  Well, I have seen that
<br>
one on Unix sockets, too.  But it probably isn't extant, until you start
<br>
considering programs that use setuid/setgid/setsid/etc. - yes, they
<br>
affect all threads, in theory, but how are they synchronised?
<br>
<p>And so it goes.  There are DOZENS of other gotchas, many of which I have
<br>
seen arise on real systems.  And, no, they are NOT bugs, because the
<br>
standards don't say what should happen.
<br>
<p><p>This area is a complete mess, which is why all experienced software
<br>
engineers batten down the hatches, switch on maximum paranoia mode, and
<br>
use the most cautious approach that they can get away with.  And, even
<br>
then, they don't trust anything and insert lots of internal checking
<br>
to try to detect when something unexpected has happened, and their
<br>
environment has gone pear-shaped.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9063.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Previous message:</strong> <a href="9061.php">Ken Lloyd: "Re: [OMPI devel] 1.5.3rc1 has been posted"</a>
<li><strong>In reply to:</strong> <a href="9059.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9063.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9063.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
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
