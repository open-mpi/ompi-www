<?
$subject_val = "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 11 12:25:22 2013" -->
<!-- isoreceived="20130611162522" -->
<!-- sent="Tue, 11 Jun 2013 09:25:14 -0700" -->
<!-- isosent="20130611162514" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t" -->
<!-- id="71DB6A28-DFC8-402A-9564-E8F41E141C63_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130611161609.GE83995_at_pantheralanlgov.local" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-11 12:25:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12454.php">Nathan Hjelm: "[OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>Previous message:</strong> <a href="12452.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>In reply to:</strong> <a href="12452.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 11, 2013, at 9:16 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Jun 11, 2013 at 09:13:01AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 11, 2013, at 9:09 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Jun 10, 2013 at 06:53:36PM +0200, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 10, 2013, at 17:18 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sat, Jun 08, 2013 at 12:28:02PM +0200, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; All Windows objects that are managed as HANDLES can easily be modified to have static initializer. A clean solution is attached to the question at stackoverflow:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://stackoverflow.com/questions/3555859/is-it-possible-to-do-static-initialization-of-mutexes-in-windows">http://stackoverflow.com/questions/3555859/is-it-possible-to-do-static-initialization-of-mutexes-in-windows</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Not the cleanest solution (and I don't know how handles work) so I held off on proposing adding a static initializer until the windows code was gone.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nothing really fancy, a HANDLE is basically an untyped location storage (a void*).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; That being said I think having a static initializer for a synchronization object is a dangerous thing. It has many subtleties and too many hidden limitations. As an example they can only be used on the declaration of the object, and can't be safely used for locally static object (they must be global).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have never seen any indication that a statically initialized mutex is not safe for static objecs. The man page for thread_mutex_init uses the static initializer on a static mutex: <a href="http://linux.die.net/man/3/pthread_mutex_init">http://linux.die.net/man/3/pthread_mutex_init</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It is thread safe for global static objects, but might not be thread safe for local static objects.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What are the instances in the Open MPI code where such a statically defined mutex need to be used before it has a chance of being correctly initialized?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_T_thread_init may be called from any thread (or multiple threads at the same time). The current code uses atomics to protect the initialization of the mutex. I would prefer to declare the mpit lock like:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_mutex_t mpit_big_lock = OPAL_MUTEX_STATIC_INIT;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and remove the atomics. It would be much cleaner and should work fine on all currently supported platforms.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OK, almost a corner-case.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; how does mutex static initializer works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A more detailed explanation in the &quot;Static Initializers for Mutexes and Condition Variables&quot; part of the <a href="http://pubs.opengroup.org/onlinepubs/009695399/functions/pthread_mutex_init.html">http://pubs.opengroup.org/onlinepubs/009695399/functions/pthread_mutex_init.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interesting. We could add a caveat to the definition describing where static initialization might not be optimal. Either that or we could implement a opal_once to do the initialization in this case. I would have to look into the solaris thread case to see if a once function is possible there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We don't support solaris threads any more - haven't for quite some time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If that is the case would there be any objection to the removal of the solaris thread code from opal_mutex?
</span><br>
<p>Don't see why - even when Sun was still active, they agreed to standardize on pthreads as their compilers progressed to that point
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
<li><strong>Next message:</strong> <a href="12454.php">Nathan Hjelm: "[OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>Previous message:</strong> <a href="12452.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>In reply to:</strong> <a href="12452.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
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
