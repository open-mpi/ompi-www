<?
$subject_val = "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 10 12:53:43 2013" -->
<!-- isoreceived="20130610165343" -->
<!-- sent="Mon, 10 Jun 2013 18:53:36 +0200" -->
<!-- isosent="20130610165336" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t" -->
<!-- id="31F9EFB9-0534-49E3-80CB-9170D75E534D_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130610151837.GA83995_at_pantheralanlgov.local" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-10 12:53:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12445.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
<li><strong>Previous message:</strong> <a href="12443.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>In reply to:</strong> <a href="12443.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12450.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>Reply:</strong> <a href="12450.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 10, 2013, at 17:18 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Sat, Jun 08, 2013 at 12:28:02PM +0200, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; All Windows objects that are managed as HANDLES can easily be modified to have static initializer. A clean solution is attached to the question at stackoverflow:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://stackoverflow.com/questions/3555859/is-it-possible-to-do-static-initialization-of-mutexes-in-windows">http://stackoverflow.com/questions/3555859/is-it-possible-to-do-static-initialization-of-mutexes-in-windows</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not the cleanest solution (and I don't know how handles work) so I held off on proposing adding a static initializer until the windows code was gone.
</span><br>
<p>Nothing really fancy, a HANDLE is basically an untyped location storage (a void*).
<br>
<p><span class="quotelev2">&gt;&gt; That being said I think having a static initializer for a synchronization object is a dangerous thing. It has many subtleties and too many hidden limitations. As an example they can only be used on the declaration of the object, and can't be safely used for locally static object (they must be global).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have never seen any indication that a statically initialized mutex is not safe for static objecs. The man page for thread_mutex_init uses the static initializer on a static mutex: <a href="http://linux.die.net/man/3/pthread_mutex_init">http://linux.die.net/man/3/pthread_mutex_init</a>
</span><br>
<p>It is thread safe for global static objects, but might not be thread safe for local static objects.
<br>
<p><span class="quotelev2">&gt;&gt; What are the instances in the Open MPI code where such a statically defined mutex need to be used before it has a chance of being correctly initialized?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_T_thread_init may be called from any thread (or multiple threads at the same time). The current code uses atomics to protect the initialization of the mutex. I would prefer to declare the mpit lock like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_mutex_t mpit_big_lock = OPAL_MUTEX_STATIC_INIT;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and remove the atomics. It would be much cleaner and should work fine on all currently supported platforms.
</span><br>
<p>OK, almost a corner-case.
<br>
<p><span class="quotelev1">&gt; how does mutex static initializer works
</span><br>
<p>A more detailed explanation in the &quot;Static Initializers for Mutexes and Condition Variables&quot; part of the <a href="http://pubs.opengroup.org/onlinepubs/009695399/functions/pthread_mutex_init.html">http://pubs.opengroup.org/onlinepubs/009695399/functions/pthread_mutex_init.html</a>
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12445.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
<li><strong>Previous message:</strong> <a href="12443.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>In reply to:</strong> <a href="12443.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12450.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>Reply:</strong> <a href="12450.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
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
