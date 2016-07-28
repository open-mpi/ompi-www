<?
$subject_val = "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 10 11:18:52 2013" -->
<!-- isoreceived="20130610151852" -->
<!-- sent="Mon, 10 Jun 2013 09:18:37 -0600" -->
<!-- isosent="20130610151837" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t" -->
<!-- id="20130610151837.GA83995_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="547935E2-49BA-4255-879D-40C5A89B14D5_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-10 11:18:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12444.php">George Bosilca: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>Previous message:</strong> <a href="12442.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
<li><strong>In reply to:</strong> <a href="12440.php">George Bosilca: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12444.php">George Bosilca: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>Reply:</strong> <a href="12444.php">George Bosilca: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Jun 08, 2013 at 12:28:02PM +0200, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; All Windows objects that are managed as HANDLES can easily be modified to have static initializer. A clean solution is attached to the question at stackoverflow:
</span><br>
<span class="quotelev1">&gt; <a href="http://stackoverflow.com/questions/3555859/is-it-possible-to-do-static-initialization-of-mutexes-in-windows">http://stackoverflow.com/questions/3555859/is-it-possible-to-do-static-initialization-of-mutexes-in-windows</a>
</span><br>
<p>Not the cleanest solution (and I don't know how handles work) so I held off on proposing adding a static initializer until the windows code was gone.
<br>
<p><span class="quotelev1">&gt; That being said I think having a static initializer for a synchronization object is a dangerous thing. It has many subtleties and too many hidden limitations. As an example they can only be used on the declaration of the object, and can't be safely used for locally static object (they must be global).
</span><br>
<p>I have never seen any indication that a statically initialized mutex is not safe for static objecs. The man page for thread_mutex_init uses the static initializer on a static mutex: <a href="http://linux.die.net/man/3/pthread_mutex_init">http://linux.die.net/man/3/pthread_mutex_init</a>
<br>
<p><span class="quotelev1">&gt; What are the instances in the Open MPI code where such a statically defined mutex need to be used before it has a chance of being correctly initialized?
</span><br>
<p>MPI_T_thread_init may be called from any thread (or multiple threads at the same time). The current code uses atomics to protect the initialization of the mutex. I would prefer to declare the mpit lock like:
<br>
<p>opal_mutex_t mpit_big_lock = OPAL_MUTEX_STATIC_INIT;
<br>
<p>and remove the atomics. It would be much cleaner and should work fine on all currently supported platforms.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12444.php">George Bosilca: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>Previous message:</strong> <a href="12442.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
<li><strong>In reply to:</strong> <a href="12440.php">George Bosilca: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12444.php">George Bosilca: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>Reply:</strong> <a href="12444.php">George Bosilca: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
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
