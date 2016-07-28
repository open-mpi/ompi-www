<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 04:37:13 2007" -->
<!-- isoreceived="20070306093713" -->
<!-- sent="Tue, 6 Mar 2007 11:37:04 +0200" -->
<!-- isosent="20070306093704" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization" -->
<!-- id="20070306093703.GA24777_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45ED3014.7050604_at_informatik.uni-halle.de" -->
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
<strong>Date:</strong> 2007-03-06 04:37:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1334.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Previous message:</strong> <a href="1332.php">Bert Wesarg: "[OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>In reply to:</strong> <a href="1332.php">Bert Wesarg: "[OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1334.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Reply:</strong> <a href="1334.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 06, 2007 at 10:10:44AM +0100, Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt; Fix the double-check locking[1] by defining the cls_initialized member to
</span><br>
<span class="quotelev1">&gt; volatile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bert Wesarg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1]: <a href="http://en.wikipedia.org/wiki/Double-checked_locking">http://en.wikipedia.org/wiki/Double-checked_locking</a>
</span><br>
Can you explain how the Java example from this page applies to the code
<br>
in Open MPI? cls_initialized is set only after class is fully
<br>
initialized and usable.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  opal/class/opal_object.h |    2 +-
</span><br>
<span class="quotelev1">&gt;  1 files changed, 1 insertion(+), 1 deletion(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --quilt old/opal/class/opal_object.h new/opal/class/opal_object.h
</span><br>
<span class="quotelev1">&gt; --- old/opal/class/opal_object.h
</span><br>
<span class="quotelev1">&gt; +++ new/opal/class/opal_object.h
</span><br>
<span class="quotelev1">&gt; @@ -148,11 +148,11 @@ typedef void (*opal_destruct_t) (opal_ob
</span><br>
<span class="quotelev1">&gt;  struct opal_class_t {
</span><br>
<span class="quotelev1">&gt;      const char *cls_name;           /**&lt; symbolic name for class */
</span><br>
<span class="quotelev1">&gt;      opal_class_t *cls_parent;       /**&lt; parent class descriptor */
</span><br>
<span class="quotelev1">&gt;      opal_construct_t cls_construct; /**&lt; class constructor */
</span><br>
<span class="quotelev1">&gt;      opal_destruct_t cls_destruct;   /**&lt; class destructor */
</span><br>
<span class="quotelev1">&gt; -    int cls_initialized;            /**&lt; is class initialized */
</span><br>
<span class="quotelev1">&gt; +    volatile int cls_initialized;   /**&lt; is class initialized */
</span><br>
<span class="quotelev1">&gt;      int cls_depth;                  /**&lt; depth of class hierarchy tree */
</span><br>
<span class="quotelev1">&gt;      opal_construct_t *cls_construct_array;
</span><br>
<span class="quotelev1">&gt;                                      /**&lt; array of parent class constructors */
</span><br>
<span class="quotelev1">&gt;      opal_destruct_t *cls_destruct_array;
</span><br>
<span class="quotelev1">&gt;                                      /**&lt; array of parent class destructors */
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="1334.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Previous message:</strong> <a href="1332.php">Bert Wesarg: "[OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>In reply to:</strong> <a href="1332.php">Bert Wesarg: "[OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1334.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Reply:</strong> <a href="1334.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
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
