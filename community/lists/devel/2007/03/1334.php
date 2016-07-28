<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 04:47:18 2007" -->
<!-- isoreceived="20070306094718" -->
<!-- sent="Tue, 06 Mar 2007 10:44:53 +0100" -->
<!-- isosent="20070306094453" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization" -->
<!-- id="45ED3815.8070605_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070306093703.GA24777_at_minantech.com" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 04:44:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1335.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Previous message:</strong> <a href="1333.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>In reply to:</strong> <a href="1333.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1335.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Reply:</strong> <a href="1335.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Tue, Mar 06, 2007 at 10:10:44AM +0100, Bert Wesarg wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Fix the double-check locking[1] by defining the cls_initialized member to
</span><br>
<span class="quotelev2">&gt;&gt; volatile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bert Wesarg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [1]: <a href="http://en.wikipedia.org/wiki/Double-checked_locking">http://en.wikipedia.org/wiki/Double-checked_locking</a>
</span><br>
<span class="quotelev1">&gt; Can you explain how the Java example from this page applies to the code
</span><br>
<span class="quotelev1">&gt; in Open MPI? cls_initialized is set only after class is fully
</span><br>
<span class="quotelev1">&gt; initialized and usable.
</span><br>
Sure:
<br>
<p>in opal_object.c:opal_class_initialize():
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;if (1 == cls-&gt;cls_initialized) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_atomic_lock(&amp;class_lock);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* If another thread initializing this same class came in at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;roughly the same time, it may have gotten the lock and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;initialized.  So check again. */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (1 == cls-&gt;cls_initialized) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_atomic_unlock(&amp;class_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>the compiler can optimize the second if check away, without being declared
<br>
as volatile.
<br>
<p>Bert
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  opal/class/opal_object.h |    2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 1 insertion(+), 1 deletion(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff --quilt old/opal/class/opal_object.h new/opal/class/opal_object.h
</span><br>
<span class="quotelev2">&gt;&gt; --- old/opal/class/opal_object.h
</span><br>
<span class="quotelev2">&gt;&gt; +++ new/opal/class/opal_object.h
</span><br>
<span class="quotelev2">&gt;&gt; @@ -148,11 +148,11 @@ typedef void (*opal_destruct_t) (opal_ob
</span><br>
<span class="quotelev2">&gt;&gt;  struct opal_class_t {
</span><br>
<span class="quotelev2">&gt;&gt;      const char *cls_name;           /**&lt; symbolic name for class */
</span><br>
<span class="quotelev2">&gt;&gt;      opal_class_t *cls_parent;       /**&lt; parent class descriptor */
</span><br>
<span class="quotelev2">&gt;&gt;      opal_construct_t cls_construct; /**&lt; class constructor */
</span><br>
<span class="quotelev2">&gt;&gt;      opal_destruct_t cls_destruct;   /**&lt; class destructor */
</span><br>
<span class="quotelev2">&gt;&gt; -    int cls_initialized;            /**&lt; is class initialized */
</span><br>
<span class="quotelev2">&gt;&gt; +    volatile int cls_initialized;   /**&lt; is class initialized */
</span><br>
<span class="quotelev2">&gt;&gt;      int cls_depth;                  /**&lt; depth of class hierarchy tree */
</span><br>
<span class="quotelev2">&gt;&gt;      opal_construct_t *cls_construct_array;
</span><br>
<span class="quotelev2">&gt;&gt;                                      /**&lt; array of parent class constructors */
</span><br>
<span class="quotelev2">&gt;&gt;      opal_destruct_t *cls_destruct_array;
</span><br>
<span class="quotelev2">&gt;&gt;                                      /**&lt; array of parent class destructors */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
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
<li><strong>Next message:</strong> <a href="1335.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Previous message:</strong> <a href="1333.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>In reply to:</strong> <a href="1333.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1335.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Reply:</strong> <a href="1335.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
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
