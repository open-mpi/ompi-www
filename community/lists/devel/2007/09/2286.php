<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  5 11:41:38 2007" -->
<!-- isoreceived="20070905154138" -->
<!-- sent="Wed, 5 Sep 2007 18:41:31 +0300" -->
<!-- isosent="20070905154131" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_atomic_lifo is not really atomic." -->
<!-- id="20070905154131.GE3410_at_minantech.com" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2007-09-05 11:41:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2287.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2285.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;opal_atomic_lifo implementation suffers from ABA problem.
<br>
Here is the code for opal_atomic_lifo_pop:
<br>
<p>1     do {
<br>
2         item = lifo-&gt;opal_lifo_head;
<br>
3         if( opal_atomic_cmpset_ptr( &amp;(lifo-&gt;opal_lifo_head),
<br>
4                                     item,
<br>
5                                     (void*)item-&gt;opal_list_next ) )
<br>
6             break;
<br>
7         /* Do some kind of pause to release the bus */
<br>
8     } while( 1 );
<br>
9     if( item == &amp;(lifo-&gt;opal_lifo_ghost) ) return NULL;
<br>
10    item-&gt;opal_list_next = NULL;
<br>
11    return item;
<br>
<p>If the following happens:
<br>
<p>&nbsp;&nbsp;&nbsp;Thread1:                                           Thread2:
<br>
1 executes 2
<br>
2                                                   executes 1-11 and acquire item
<br>
3 enters 3 but preempted before cmpxchg
<br>
&nbsp;&nbsp;NOTE: the third parameter passed to cmpset is
<br>
&nbsp;&nbsp;NULL because item is in use by thread2
<br>
4                                                   executes lifo_push(item)
<br>
5 successfully executes cmpxchg since the old
<br>
&nbsp;&nbsp;value is equal to current value (ABA problem)
<br>
&nbsp;&nbsp;but places NULL into lifo-&gt;opal_lifo_head!
<br>
<p>Included patch seems to be fixing this problem, but I am not really sure
<br>
if this is the right whay to solve this kind of problems.
<br>
<p><p>diff --git a/opal/class/opal_atomic_lifo.h b/opal/class/opal_atomic_lifo.h
<br>
index caf35b1..4e8148c 100644
<br>
--- a/opal/class/opal_atomic_lifo.h
<br>
+++ b/opal/class/opal_atomic_lifo.h
<br>
@@ -71,8 +71,10 @@ static inline opal_list_item_t* opal_atomic_lifo_push( opal_atomic_lifo_t* lifo,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item-&gt;opal_list_next = lifo-&gt;opal_lifo_head;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( opal_atomic_cmpset_ptr( &amp;(lifo-&gt;opal_lifo_head),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void*)item-&gt;opal_list_next,
<br>
-                                    item ) )
<br>
+                                    item ) ) {
<br>
+            opal_atomic_cmpset_32((volatile int32_t*)&amp;item-&gt;item_free, 1, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (opal_list_item_t*)item-&gt;opal_list_next;
<br>
+        }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* DO some kind of pause to release the bus */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} while( 1 );
<br>
&nbsp;#else
<br>
@@ -89,14 +91,17 @@ static inline opal_list_item_t* opal_atomic_lifo_pop( opal_atomic_lifo_t* lifo )
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_item_t* item;
<br>
&nbsp;#if OMPI_HAVE_THREAD_SUPPORT
<br>
-    do {
<br>
-        item = lifo-&gt;opal_lifo_head;
<br>
+    while((item = lifo-&gt;opal_lifo_head) != &amp;(lifo-&gt;opal_lifo_ghost))
<br>
+    {
<br>
+        if(!opal_atomic_cmpset_32((volatile int32_t*)&amp;item-&gt;item_free, 0, 1))
<br>
+            continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( opal_atomic_cmpset_ptr( &amp;(lifo-&gt;opal_lifo_head),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void*)item-&gt;opal_list_next ) )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
+        opal_atomic_cmpset_32((volatile int32_t*)&amp;item-&gt;item_free, 1, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Do some kind of pause to release the bus */
<br>
-    } while( 1 );
<br>
+    } 
<br>
&nbsp;#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item = lifo-&gt;opal_lifo_head;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lifo-&gt;opal_lifo_head = (opal_list_item_t*)item-&gt;opal_list_next;
<br>
diff --git a/opal/class/opal_list.c b/opal/class/opal_list.c
<br>
index c8a5568..715715e 100644
<br>
--- a/opal/class/opal_list.c
<br>
+++ b/opal/class/opal_list.c
<br>
@@ -55,6 +55,7 @@ OBJ_CLASS_INSTANCE(
<br>
&nbsp;static void opal_list_item_construct(opal_list_item_t *item)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item-&gt;opal_list_next = item-&gt;opal_list_prev = NULL;
<br>
+    item-&gt;item_free = 1;
<br>
&nbsp;#if OMPI_ENABLE_DEBUG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item-&gt;opal_list_item_refcount = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item-&gt;opal_list_item_belong_to = NULL;
<br>
diff --git a/opal/class/opal_list.h b/opal/class/opal_list.h
<br>
index 83fa57b..3a45f4e 100644
<br>
--- a/opal/class/opal_list.h
<br>
+++ b/opal/class/opal_list.h
<br>
@@ -102,6 +102,7 @@ struct opal_list_item_t
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/**&lt; Pointer to next list item */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;volatile struct opal_list_item_t *opal_list_prev;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/**&lt; Pointer to previous list item */
<br>
+    int32_t item_free;
<br>
&nbsp;
<br>
&nbsp;#if OMPI_ENABLE_DEBUG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Atomic reference count for debugging */
<br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2287.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2285.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
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
