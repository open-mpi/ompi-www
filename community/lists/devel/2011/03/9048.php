<?
$subject_val = "Re: [OMPI devel] [Fwd:  multi-threaded test]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 13:23:44 2011" -->
<!-- isoreceived="20110310182344" -->
<!-- sent="10 Mar 2011 18:23:40 +0000" -->
<!-- isosent="20110310182340" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Fwd:  multi-threaded test]" -->
<!-- id="Prayer.1.3.3.1103101823400.21273_at_hermes-1.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D78FAFE.6030701_at_oracle.com" -->
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
<strong>Date:</strong> 2011-03-10 13:23:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9049.php">Eugene Loh: "[OMPI devel] turning on progress threads"</a>
<li><strong>Previous message:</strong> <a href="9047.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>In reply to:</strong> <a href="9045.php">Eugene Loh: "[OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 10 2011, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt;    Any comments on this?  We wanted to clean up MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt;support in the trunk and port these changes back to 1.5.x, but it's
</span><br>
<span class="quotelev1">&gt;unclear to me what our expectations should be about any
</span><br>
<span class="quotelev1">&gt;MPI_THREAD_MULTIPLE test succeeding.  How do we assess (test) our
</span><br>
<span class="quotelev1">&gt;changes?  Or, should we just hardwire thread support to be off, as we
</span><br>
<span class="quotelev1">&gt;have done with progress threads?
</span><br>
<p>Please, Please, PLEASE do the latter - at least for MPI_THREAD_SERIALIZED
<br>
and MPI_THREAD_MULTIPLE!
<br>
<p>There is NO chance that it will ever be reliable and portable while POSIX
<br>
threads are in the state they are in.  Even reaching MPI_THREAD_FUNNELED
<br>
requires FAR more complexity than most experienced programmers expect.
<br>
The Microsoft specifications I have found are no better.  For example,
<br>
here are a few issues that I have seen:
<br>
<p>Most functions are defined to be 'thread-safe' - which is useless without
<br>
a specification of what that means.  To take a simple example, consider
<br>
scanf versus ungetc versus lseek ....
<br>
<p>There are no facilities for synchronising non-memory actions, from I/O
<br>
to signals.  POSIX requests read and write to be atomic, but does not
<br>
specify it, and it gets extremely hairy to know what that means with a
<br>
TCP transfer actually in progress.
<br>
<p>Signals are particularly hairy, because I have seen one thread handle
<br>
and clear a signal, synchronise with another, which then was told that
<br>
the same signal was waiting by sigpending (only to have it disappear
<br>
when it was masked back on). 
<br>
<p>And so it goes ....
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9049.php">Eugene Loh: "[OMPI devel] turning on progress threads"</a>
<li><strong>Previous message:</strong> <a href="9047.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>In reply to:</strong> <a href="9045.php">Eugene Loh: "[OMPI devel] [Fwd:  multi-threaded test]"</a>
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
