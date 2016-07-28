<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 04:52:46 2007" -->
<!-- isoreceived="20070306095246" -->
<!-- sent="Tue, 6 Mar 2007 11:52:39 +0200" -->
<!-- isosent="20070306095239" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization" -->
<!-- id="20070306095239.GB24777_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45ED3815.8070605_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 04:52:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1336.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Previous message:</strong> <a href="1334.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>In reply to:</strong> <a href="1334.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1336.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Reply:</strong> <a href="1336.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 06, 2007 at 10:44:53AM +0100, Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Mar 06, 2007 at 10:10:44AM +0100, Bert Wesarg wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fix the double-check locking[1] by defining the cls_initialized member to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; volatile.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Greetings
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Bert Wesarg
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [1]: <a href="http://en.wikipedia.org/wiki/Double-checked_locking">http://en.wikipedia.org/wiki/Double-checked_locking</a>
</span><br>
<span class="quotelev2">&gt; &gt; Can you explain how the Java example from this page applies to the code
</span><br>
<span class="quotelev2">&gt; &gt; in Open MPI? cls_initialized is set only after class is fully
</span><br>
<span class="quotelev2">&gt; &gt; initialized and usable.
</span><br>
<span class="quotelev1">&gt; Sure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in opal_object.c:opal_class_initialize():
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (1 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev1">&gt;         return;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     opal_atomic_lock(&amp;class_lock);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* If another thread initializing this same class came in at
</span><br>
<span class="quotelev1">&gt;        roughly the same time, it may have gotten the lock and
</span><br>
<span class="quotelev1">&gt;        initialized.  So check again. */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (1 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev1">&gt;         opal_atomic_unlock(&amp;class_lock);
</span><br>
<span class="quotelev1">&gt;         return;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the compiler can optimize the second if check away, without being declared
</span><br>
<span class="quotelev1">&gt; as volatile.
</span><br>
If it does this after opal_atomic_lock() (which is explicit memory
<br>
barrier) then it is broken.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  opal/class/opal_object.h |    2 +-
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  1 files changed, 1 insertion(+), 1 deletion(-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; diff --quilt old/opal/class/opal_object.h new/opal/class/opal_object.h
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- old/opal/class/opal_object.h
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ new/opal/class/opal_object.h
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -148,11 +148,11 @@ typedef void (*opal_destruct_t) (opal_ob
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  struct opal_class_t {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      const char *cls_name;           /**&lt; symbolic name for class */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      opal_class_t *cls_parent;       /**&lt; parent class descriptor */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      opal_construct_t cls_construct; /**&lt; class constructor */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      opal_destruct_t cls_destruct;   /**&lt; class destructor */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -    int cls_initialized;            /**&lt; is class initialized */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    volatile int cls_initialized;   /**&lt; is class initialized */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      int cls_depth;                  /**&lt; depth of class hierarchy tree */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      opal_construct_t *cls_construct_array;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                      /**&lt; array of parent class constructors */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      opal_destruct_t *cls_destruct_array;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                      /**&lt; array of parent class destructors */
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1336.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Previous message:</strong> <a href="1334.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>In reply to:</strong> <a href="1334.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1336.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Reply:</strong> <a href="1336.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
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
