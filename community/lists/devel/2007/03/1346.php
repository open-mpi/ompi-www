<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 11:42:02 2007" -->
<!-- isoreceived="20070306164202" -->
<!-- sent="Tue, 6 Mar 2007 11:37:51 -0500" -->
<!-- isosent="20070306163751" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] opal/class/opal_object.c: replace the classes array with a linked list" -->
<!-- id="8EAD70C5-4822-4BE1-8BB1-B7F8FBD5AF45_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45EC544C.3080804_at_informatik.uni-halle.de" -->
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
<strong>Date:</strong> 2007-03-06 11:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1347.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<li><strong>Previous message:</strong> <a href="1345.php">George Bosilca: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<li><strong>In reply to:</strong> <a href="1330.php">Bert Wesarg: "[OMPI devel] [PATCH] opal/class/opal_object.c: replace the classes array with a linked list"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bert,
<br>
<p>Your previous patch saves some memory while the current one use some  
<br>
more. I prefer to keep the array, as it's not only out of any  
<br>
critical path but it's not performance related. An array can do the  
<br>
job without any problems and use less memory than the linked list.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 5, 2007, at 12:33 PM, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; This replaces the classes array (which holds all ctor/dtor arrays)  
</span><br>
<span class="quotelev1">&gt; with a
</span><br>
<span class="quotelev1">&gt; linked list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This patch is compile tested only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt; Bert Wesarg
</span><br>
<span class="quotelev1">&gt; Index: opal/class/opal_object.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/class/opal_object.c	(revision 13923)
</span><br>
<span class="quotelev1">&gt; +++ opal/class/opal_object.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -51,17 +51,12 @@
</span><br>
<span class="quotelev1">&gt;   * Local variables
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  static opal_atomic_lock_t class_lock = { { OPAL_ATOMIC_UNLOCKED } };
</span><br>
<span class="quotelev1">&gt; -static void** classes = NULL;
</span><br>
<span class="quotelev1">&gt; -static int num_classes = 0;
</span><br>
<span class="quotelev1">&gt; -static int max_classes = 0;
</span><br>
<span class="quotelev1">&gt; -static const int increment = 10;
</span><br>
<span class="quotelev1">&gt; +static void *classes;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * Local functions
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  static void save_class(opal_class_t *cls);
</span><br>
<span class="quotelev1">&gt; -static void expand_array(void);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt; @@ -72,6 +67,7 @@
</span><br>
<span class="quotelev1">&gt;      opal_class_t *c;
</span><br>
<span class="quotelev1">&gt;      opal_construct_t* cls_construct_array;
</span><br>
<span class="quotelev1">&gt;      opal_destruct_t* cls_destruct_array;
</span><br>
<span class="quotelev1">&gt; +    void *base_pointer;
</span><br>
<span class="quotelev1">&gt;      int i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      assert(cls);
</span><br>
<span class="quotelev1">&gt; @@ -104,15 +100,18 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt;       * Allocate arrays for hierarchy of constructors and destructors
</span><br>
<span class="quotelev1">&gt; +     * Plus one void pointer for the classes list
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    cls-&gt;cls_construct_array =
</span><br>
<span class="quotelev1">&gt; -        (void (**)(opal_object_t*))malloc((cls-&gt;cls_depth + 1)*
</span><br>
<span class="quotelev1">&gt; -                                          sizeof(opal_construct_t)  
</span><br>
<span class="quotelev1">&gt; * 2 );
</span><br>
<span class="quotelev1">&gt; -    if (NULL == cls-&gt;cls_construct_array) {
</span><br>
<span class="quotelev1">&gt; +    base_pointer = malloc((cls-&gt;cls_depth + 1) * sizeof 
</span><br>
<span class="quotelev1">&gt; (opal_construct_t) * 2 +
</span><br>
<span class="quotelev1">&gt; +                          sizeof(void *));
</span><br>
<span class="quotelev1">&gt; +    if (NULL == base_pointer) {
</span><br>
<span class="quotelev1">&gt;          perror(&quot;Out of memory&quot;);
</span><br>
<span class="quotelev1">&gt;          exit(-1);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    /* The arrays begin behind the void pointer */
</span><br>
<span class="quotelev1">&gt; +    cls-&gt;cls_destruct_array =
</span><br>
<span class="quotelev1">&gt; +        (void (**)(opal_object_t*))((char *)base_pointer + sizeof 
</span><br>
<span class="quotelev1">&gt; (void *));
</span><br>
<span class="quotelev1">&gt;      cls-&gt;cls_destruct_array = cls-&gt;cls_construct_array + cls- 
</span><br>
<span class="quotelev2">&gt; &gt;cls_depth + 1;
</span><br>
<span class="quotelev1">&gt;      cls_construct_array = cls-&gt;cls_construct_array;
</span><br>
<span class="quotelev1">&gt;      cls_destruct_array  = cls-&gt;cls_destruct_array;
</span><br>
<span class="quotelev1">&gt; @@ -154,18 +153,10 @@
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  int opal_class_finalize(void)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    int i;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (NULL != classes) {
</span><br>
<span class="quotelev1">&gt; -        for (i = 0; i &lt; num_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; -            if (NULL != classes[i]) {
</span><br>
<span class="quotelev1">&gt; -                free(classes[i]);
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +    while (NULL != classes) {
</span><br>
<span class="quotelev1">&gt; +        void *next = *(void **)classes;
</span><br>
<span class="quotelev1">&gt;          free(classes);
</span><br>
<span class="quotelev1">&gt; -        classes = NULL;
</span><br>
<span class="quotelev1">&gt; -        num_classes = 0;
</span><br>
<span class="quotelev1">&gt; -        max_classes = 0;
</span><br>
<span class="quotelev1">&gt; +        classes = next;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; @@ -174,27 +165,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static void save_class(opal_class_t *cls)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    if (num_classes &gt;= max_classes) {
</span><br>
<span class="quotelev1">&gt; -        expand_array();
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    classes[num_classes] = cls-&gt;cls_construct_array;
</span><br>
<span class="quotelev1">&gt; -    ++num_classes;
</span><br>
<span class="quotelev1">&gt; +    void *base_pointer = (char *)cls-&gt;cls_construct_array - sizeof 
</span><br>
<span class="quotelev1">&gt; (void *);
</span><br>
<span class="quotelev1">&gt; +    *(void **)base_pointer = classes;
</span><br>
<span class="quotelev1">&gt; +    classes = base_pointer;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -static void expand_array(void)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int i;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    max_classes += increment;
</span><br>
<span class="quotelev1">&gt; -    classes = (void**)realloc(classes, sizeof(void *) * max_classes);
</span><br>
<span class="quotelev1">&gt; -    if (NULL == classes) {
</span><br>
<span class="quotelev1">&gt; -        perror(&quot;class malloc failed&quot;);
</span><br>
<span class="quotelev1">&gt; -        exit(-1);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    for (i = num_classes; i &lt; max_classes; ++i) {
</span><br>
<span class="quotelev1">&gt; -        classes[i] = NULL;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
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
<li><strong>Next message:</strong> <a href="1347.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<li><strong>Previous message:</strong> <a href="1345.php">George Bosilca: "Re: [OMPI devel] [PATCH] opal/class/opal_object.c: save some memory for the ctor/dtor arrays"</a>
<li><strong>In reply to:</strong> <a href="1330.php">Bert Wesarg: "[OMPI devel] [PATCH] opal/class/opal_object.c: replace the classes array with a linked list"</a>
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
