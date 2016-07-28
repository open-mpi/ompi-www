<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 11:39:02 2007" -->
<!-- isoreceived="20070306163902" -->
<!-- sent="Tue, 6 Mar 2007 11:34:55 -0500" -->
<!-- isosent="20070306163455" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays" -->
<!-- id="C45D7252-B87B-419A-8FA1-22D4E1113ED5_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45EC4F20.3060906_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 11:34:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1346.php">George Bosilca: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: replace the classes array with a linked list"</a>
<li><strong>Previous message:</strong> <a href="1344.php">Jeff Squyres: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple	MPI_thread_init()"</a>
<li><strong>In reply to:</strong> <a href="1329.php">Bert Wesarg: "[OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1347.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<li><strong>Reply:</strong> <a href="1347.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bert,
<br>
<p>Thanks for this patch. I apply it in the trunk as revision r13939.  
<br>
Thanks again.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 5, 2007, at 12:10 PM, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; This saves some memory for the constructors and destructors arrays  
</span><br>
<span class="quotelev1">&gt; of a
</span><br>
<span class="quotelev1">&gt; class by counting the constructors and destructors while we are  
</span><br>
<span class="quotelev1">&gt; counting
</span><br>
<span class="quotelev1">&gt; the cls_depth. And the reversion of the constructor array can now  
</span><br>
<span class="quotelev1">&gt; be done
</span><br>
<span class="quotelev1">&gt; without an extra loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patch is only compile tested.
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
<span class="quotelev1">&gt; Index: opal/class/opal_object.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/class/opal_object.c	(revision 13923)
</span><br>
<span class="quotelev1">&gt; +++ opal/class/opal_object.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -71,7 +71,9 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      opal_class_t *c;
</span><br>
<span class="quotelev1">&gt;      opal_construct_t* cls_construct_array;
</span><br>
<span class="quotelev1">&gt; -    opal_destruct_t* cls_destruct_array;
</span><br>
<span class="quotelev1">&gt; +    opal_destruct_t* cls_destruct_array;
</span><br>
<span class="quotelev1">&gt; +    int cls_construct_array_count;
</span><br>
<span class="quotelev1">&gt; +    int cls_destruct_array_count;
</span><br>
<span class="quotelev1">&gt;      int i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      assert(cls);
</span><br>
<span class="quotelev1">&gt; @@ -95,33 +97,51 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt;       * First calculate depth of class hierarchy
</span><br>
<span class="quotelev1">&gt; +     * And the number of constructors and destructors
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      cls-&gt;cls_depth = 0;
</span><br>
<span class="quotelev1">&gt; +    cls_construct_array_count = 0;
</span><br>
<span class="quotelev1">&gt; +    cls_destruct_array_count  = 0;
</span><br>
<span class="quotelev1">&gt;      for (c = cls; c; c = c-&gt;cls_parent) {
</span><br>
<span class="quotelev1">&gt; -        cls-&gt;cls_depth += 1;
</span><br>
<span class="quotelev1">&gt; +        if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev1">&gt; +            cls_construct_array_count++;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev1">&gt; +            cls_destruct_array_count++;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        cls-&gt;cls_depth++;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt;       * Allocate arrays for hierarchy of constructors and destructors
</span><br>
<span class="quotelev1">&gt; +     * plus for each a NULL-sentinel
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      cls-&gt;cls_construct_array =
</span><br>
<span class="quotelev1">&gt; -        (void (**)(opal_object_t*))malloc((cls-&gt;cls_depth + 1)*
</span><br>
<span class="quotelev1">&gt; -                                          sizeof(opal_construct_t)  
</span><br>
<span class="quotelev1">&gt; * 2 );
</span><br>
<span class="quotelev1">&gt; +        (void (**)(opal_object_t*))malloc 
</span><br>
<span class="quotelev1">&gt; ((cls_construct_array_count +
</span><br>
<span class="quotelev1">&gt; +                                            
</span><br>
<span class="quotelev1">&gt; cls_destruct_array_count + 2) *
</span><br>
<span class="quotelev1">&gt; +                                          sizeof(opal_construct_t) );
</span><br>
<span class="quotelev1">&gt;      if (NULL == cls-&gt;cls_construct_array) {
</span><br>
<span class="quotelev1">&gt;          perror(&quot;Out of memory&quot;);
</span><br>
<span class="quotelev1">&gt;          exit(-1);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    cls-&gt;cls_destruct_array = cls-&gt;cls_construct_array + cls- 
</span><br>
<span class="quotelev2">&gt; &gt;cls_depth + 1;
</span><br>
<span class="quotelev1">&gt; -    cls_construct_array = cls-&gt;cls_construct_array;
</span><br>
<span class="quotelev1">&gt; -    cls_destruct_array  = cls-&gt;cls_destruct_array;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +    cls-&gt;cls_destruct_array =
</span><br>
<span class="quotelev1">&gt; +        cls-&gt;cls_construct_array + cls_construct_array_count + 1;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /*
</span><br>
<span class="quotelev1">&gt; +     * The constructor array is reversed, so start at the end
</span><br>
<span class="quotelev1">&gt; +     */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    cls_construct_array = cls-&gt;cls_construct_array +  
</span><br>
<span class="quotelev1">&gt; cls_construct_array_count;
</span><br>
<span class="quotelev1">&gt; +    cls_destruct_array  = cls-&gt;cls_destruct_array;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      c = cls;
</span><br>
<span class="quotelev1">&gt; +    *cls_construct_array = NULL;  /* end marker for the  
</span><br>
<span class="quotelev1">&gt; constructors */
</span><br>
<span class="quotelev1">&gt;      for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
</span><br>
<span class="quotelev1">&gt;          if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev1">&gt; +            --cls_construct_array;
</span><br>
<span class="quotelev1">&gt;              *cls_construct_array = c-&gt;cls_construct;
</span><br>
<span class="quotelev1">&gt; -            cls_construct_array++;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev1">&gt;              *cls_destruct_array = c-&gt;cls_destruct;
</span><br>
<span class="quotelev1">&gt; @@ -129,16 +149,7 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          c = c-&gt;cls_parent;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    *cls_construct_array = NULL;  /* end marker for the  
</span><br>
<span class="quotelev1">&gt; constructors */
</span><br>
<span class="quotelev1">&gt;      *cls_destruct_array = NULL;  /* end marker for the destructors */
</span><br>
<span class="quotelev1">&gt; -    /* Now we have to invert the constructors */
</span><br>
<span class="quotelev1">&gt; -    for( i = 0, --cls_construct_array;
</span><br>
<span class="quotelev1">&gt; -         cls_construct_array &gt; (cls-&gt;cls_construct_array + i);
</span><br>
<span class="quotelev1">&gt; -         i++, cls_construct_array-- ) {
</span><br>
<span class="quotelev1">&gt; -        opal_construct_t temp_construct = *cls_construct_array;
</span><br>
<span class="quotelev1">&gt; -        *cls_construct_array = cls-&gt;cls_construct_array[i];
</span><br>
<span class="quotelev1">&gt; -        cls-&gt;cls_construct_array[i] = temp_construct;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      cls-&gt;cls_initialized = 1;
</span><br>
<span class="quotelev1">&gt;      save_class(cls);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1346.php">George Bosilca: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: replace the classes array with a linked list"</a>
<li><strong>Previous message:</strong> <a href="1344.php">Jeff Squyres: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple	MPI_thread_init()"</a>
<li><strong>In reply to:</strong> <a href="1329.php">Bert Wesarg: "[OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1347.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<li><strong>Reply:</strong> <a href="1347.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
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
