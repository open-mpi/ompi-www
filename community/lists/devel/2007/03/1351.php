<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 16:52:13 2007" -->
<!-- isoreceived="20070306215213" -->
<!-- sent="Tue, 6 Mar 2007 16:47:48 -0500" -->
<!-- isosent="20070306214748" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system" -->
<!-- id="07A203D9-E4FA-4469-BF89-5E8C90F89F1F_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45EDA344.10005_at_informatik.uni-halle.de" -->
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
<strong>Date:</strong> 2007-03-06 16:47:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1352.php">Bert Wesarg: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
<li><strong>Previous message:</strong> <a href="1350.php">Bert Wesarg: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
<li><strong>In reply to:</strong> <a href="1348.php">Bert Wesarg: "[OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1352.php">Bert Wesarg: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
<li><strong>Reply:</strong> <a href="1352.php">Bert Wesarg: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bert,
<br>
<p>Reordering the members in the opal_class structure can be discussed.  
<br>
In general, we don't focus on improving anything that's outside the  
<br>
critical path (such as the class sub-system). Even if all Open MPI  
<br>
objects are derived from this class, it is definitively not  
<br>
performance aware, and making it so don't give us any benefit.  
<br>
Moreover, it will make the code more difficult to read/understand and  
<br>
maintain.
<br>
<p>There are already some features similar with umem in Open MPI.  
<br>
Activate the memory debugging to get all debug features. Use the free  
<br>
list to get the alignment. We have a more powerful approach, as we  
<br>
can align not only on the whole structure, but on a particular item.  
<br>
These features are already in the trunk. Moreover, if any layer  
<br>
inside Open MPI need aligned memory, then it should allocate the  
<br>
objects by itself and call OBJ_CONSTRUCT instead of OBJ_NEW.
<br>
<p>I'm reluctant to include these 2 patches into the Open MPI trunk. At  
<br>
least not until it is proven that there is any benefit (mostly  
<br>
performance). However, if someone else from the community think they  
<br>
are fine/required, then it might happens that they will get included.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 6, 2007, at 12:22 PM, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this gives the option to use the umem cache feature from the libumem 
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt; for the opal object system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is full backward compatible to the old system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the patch exists of more changes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1) reorder opal_class_t, in the hope that vital members fit in the  
</span><br>
<span class="quotelev1">&gt; first
</span><br>
<span class="quotelev1">&gt;     cache line
</span><br>
<span class="quotelev1">&gt; (2) a per class lock for initialization
</span><br>
<span class="quotelev1">&gt; (3) the global class list is now a linked list embeded in the  
</span><br>
<span class="quotelev1">&gt; opal_class_t
</span><br>
<span class="quotelev1">&gt;     (this can be reduced to a stack/single linked list)
</span><br>
<span class="quotelev1">&gt; (4) new contructors/destructors for the one time cache initialization
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To complile with this new feature you must configure open-mpi with
</span><br>
<span class="quotelev1">&gt; &quot;-DUSE_UMEM&quot; in your CFLAGS, and all other needed build flags to  
</span><br>
<span class="quotelev1">&gt; find the
</span><br>
<span class="quotelev1">&gt; header and library of lubumem (LDFLAGS, LIBS).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To full use the object caching of libumem you can use the new macro
</span><br>
<span class="quotelev1">&gt; OBJ_CLASS_INSTANCE_CACHE() which have arguments for the cache
</span><br>
<span class="quotelev1">&gt; contructors/destructors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the followup mail, I convert the opal_free_list_t and
</span><br>
<span class="quotelev1">&gt; orte_pointer_array_t to use the cache for the initialization of the
</span><br>
<span class="quotelev1">&gt; opal_mutex_t and opal_condition_t members.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have just compiled it with and without USE_UMEM but no benchmarking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments welcome.
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
<span class="quotelev1">&gt; PS: I know that you are busy with the OMPI 1.2 release, I just want to
</span><br>
<span class="quotelev1">&gt; send it out, befor I forget it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] solaris: built-in
</span><br>
<span class="quotelev1">&gt;     other:   <a href="http://sourceforge.net/projects/umem">http://sourceforge.net/projects/umem</a>
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  opal/class/opal_object.c |  210 ++++++++++++++++++++++++++++++ 
</span><br>
<span class="quotelev1">&gt; +----------------
</span><br>
<span class="quotelev1">&gt;  opal/class/opal_object.h |  201 +++++++++++++++++++++++++++++++++++ 
</span><br>
<span class="quotelev1">&gt; +++++----
</span><br>
<span class="quotelev1">&gt;  2 files changed, 324 insertions(+), 87 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --quilt old/opal/class/opal_object.h new/opal/class/opal_object.h
</span><br>
<span class="quotelev1">&gt; --- old/opal/class/opal_object.h
</span><br>
<span class="quotelev1">&gt; +++ new/opal/class/opal_object.h
</span><br>
<span class="quotelev1">&gt; @@ -122,10 +122,17 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #if OMPI_HAVE_THREAD_SUPPORT
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/sys/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt;  #endif  /* OMPI_HAVE_THREAD_SUPPORT */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#ifdef USE_UMEM
</span><br>
<span class="quotelev1">&gt; +# include &lt;umem.h&gt;
</span><br>
<span class="quotelev1">&gt; +# ifndef UMEM_CACHE_NAMELEN
</span><br>
<span class="quotelev1">&gt; +#  define UMEM_CACHE_NAMELEN 31
</span><br>
<span class="quotelev1">&gt; +# endif
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  #if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt;  /* Any kind of unique ID should do the job */
</span><br>
<span class="quotelev1">&gt;  #define OPAL_OBJ_MAGIC_ID ((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL)
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -144,21 +151,36 @@ typedef void (*opal_destruct_t) (opal_ob
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * There should be a single instance of this descriptor for each  
</span><br>
<span class="quotelev1">&gt; class
</span><br>
<span class="quotelev1">&gt;   * definition.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  struct opal_class_t {
</span><br>
<span class="quotelev1">&gt; -    const char *cls_name;           /**&lt; symbolic name for class */
</span><br>
<span class="quotelev1">&gt; -    opal_class_t *cls_parent;       /**&lt; parent class descriptor */
</span><br>
<span class="quotelev1">&gt; -    opal_construct_t cls_construct; /**&lt; class constructor */
</span><br>
<span class="quotelev1">&gt; -    opal_destruct_t cls_destruct;   /**&lt; class destructor */
</span><br>
<span class="quotelev1">&gt; -    int cls_initialized;            /**&lt; is class initialized */
</span><br>
<span class="quotelev1">&gt; -    int cls_depth;                  /**&lt; depth of class hierarchy  
</span><br>
<span class="quotelev1">&gt; tree */
</span><br>
<span class="quotelev1">&gt; +#ifdef USE_UMEM
</span><br>
<span class="quotelev1">&gt; +    umem_cache_t     *cls_cache;    /**&lt; object cache */
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +    size_t           cls_sizeof;    /**&lt; size of an object  
</span><br>
<span class="quotelev1">&gt; instance */
</span><br>
<span class="quotelev1">&gt; +    opal_construct_t *cls_cache_construct_array;
</span><br>
<span class="quotelev1">&gt; +                            /**&lt; array of parent class cache  
</span><br>
<span class="quotelev1">&gt; constructors */
</span><br>
<span class="quotelev1">&gt;      opal_construct_t *cls_construct_array;
</span><br>
<span class="quotelev1">&gt;                                      /**&lt; array of parent class  
</span><br>
<span class="quotelev1">&gt; constructors */
</span><br>
<span class="quotelev1">&gt; -    opal_destruct_t *cls_destruct_array;
</span><br>
<span class="quotelev1">&gt; +    opal_destruct_t  *cls_destruct_array;
</span><br>
<span class="quotelev1">&gt;                                      /**&lt; array of parent class  
</span><br>
<span class="quotelev1">&gt; destructors */
</span><br>
<span class="quotelev1">&gt; -    size_t cls_sizeof;              /**&lt; size of an object  
</span><br>
<span class="quotelev1">&gt; instance */
</span><br>
<span class="quotelev1">&gt; +    opal_destruct_t  *cls_cache_destruct_array;
</span><br>
<span class="quotelev1">&gt; +                            /**&lt; array of parent class cache  
</span><br>
<span class="quotelev1">&gt; destructors */
</span><br>
<span class="quotelev1">&gt; +    int cls_initialized;            /**&lt; is class initialized */
</span><br>
<span class="quotelev1">&gt; +    int cls_depth;                  /**&lt; depth of class hierarchy  
</span><br>
<span class="quotelev1">&gt; tree */
</span><br>
<span class="quotelev1">&gt; +    const char       *cls_name;     /**&lt; symbolic name for class */
</span><br>
<span class="quotelev1">&gt; +    opal_class_t     *cls_parent;   /**&lt; parent class descriptor */
</span><br>
<span class="quotelev1">&gt; +    opal_construct_t cls_construct; /**&lt; class constructor */
</span><br>
<span class="quotelev1">&gt; +    opal_destruct_t  cls_destruct;  /**&lt; class destructor */
</span><br>
<span class="quotelev1">&gt; +    opal_construct_t cls_cache_construct;
</span><br>
<span class="quotelev1">&gt; +                                    /**&lt; class object cache  
</span><br>
<span class="quotelev1">&gt; constructor */
</span><br>
<span class="quotelev1">&gt; +    opal_destruct_t  cls_cache_destruct;
</span><br>
<span class="quotelev1">&gt; +                                    /**&lt; class cache destructor */
</span><br>
<span class="quotelev1">&gt; +    opal_atomic_lock_t cls_init_lock;
</span><br>
<span class="quotelev1">&gt; +                                    /**&lt; class init mutex */
</span><br>
<span class="quotelev1">&gt; +    opal_class_t    *cls_next, *cls_prev;
</span><br>
<span class="quotelev1">&gt; +                                    /**&lt; linked list of all  
</span><br>
<span class="quotelev1">&gt; classes */
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt;   * For static initializations of OBJects.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt; @@ -198,30 +220,97 @@ struct opal_object_t {
</span><br>
<span class="quotelev1">&gt;   * @param NAME          Name of class
</span><br>
<span class="quotelev1">&gt;   * @return              Pointer to class descriptor
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  #define OBJ_CLASS(NAME)     (&amp;(NAME ## _class))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt;   * Static initializer for a class descriptor
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * @param NAME          Name of class
</span><br>
<span class="quotelev1">&gt;   * @param PARENT        Name of parent class
</span><br>
<span class="quotelev1">&gt;   * @param CONSTRUCTOR   Pointer to constructor
</span><br>
<span class="quotelev1">&gt;   * @param DESTRUCTOR    Pointer to destructor
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Put this in NAME.c
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; +#ifdef USE_UMEM
</span><br>
<span class="quotelev1">&gt;  #define OBJ_CLASS_INSTANCE(NAME, PARENT, CONSTRUCTOR,  
</span><br>
<span class="quotelev1">&gt; DESTRUCTOR)       \
</span><br>
<span class="quotelev1">&gt;      opal_class_t NAME ## _class =  
</span><br>
<span class="quotelev1">&gt; {                                     \
</span><br>
<span class="quotelev1">&gt; +         
</span><br>
<span class="quotelev1">&gt; NULL,                                                           \
</span><br>
<span class="quotelev1">&gt; +        sizeof 
</span><br>
<span class="quotelev1">&gt; (NAME),                                                   \
</span><br>
<span class="quotelev1">&gt; +        NULL, NULL, NULL,  
</span><br>
<span class="quotelev1">&gt; NULL,                                         \
</span><br>
<span class="quotelev1">&gt; +        0,  
</span><br>
<span class="quotelev1">&gt; 0,                                                           \
</span><br>
<span class="quotelev1">&gt; +        #  
</span><br>
<span class="quotelev1">&gt; NAME,                                                         \
</span><br>
<span class="quotelev1">&gt; +        OBJ_CLASS 
</span><br>
<span class="quotelev1">&gt; (PARENT),                                              \
</span><br>
<span class="quotelev1">&gt; +        (opal_construct_t)  
</span><br>
<span class="quotelev1">&gt; CONSTRUCTOR,                                 \
</span><br>
<span class="quotelev1">&gt; +        (opal_destruct_t)  
</span><br>
<span class="quotelev1">&gt; DESTRUCTOR,                                   \
</span><br>
<span class="quotelev1">&gt; +        (opal_construct_t)  
</span><br>
<span class="quotelev1">&gt; NULL,                                        \
</span><br>
<span class="quotelev1">&gt; +        (opal_destruct_t)  
</span><br>
<span class="quotelev1">&gt; NULL,                                         \
</span><br>
<span class="quotelev1">&gt; +         
</span><br>
<span class="quotelev1">&gt; { { OPAL_ATOMIC_UNLOCKED } },                                   \
</span><br>
<span class="quotelev1">&gt; +        OBJ_CLASS(NAME), OBJ_CLASS 
</span><br>
<span class="quotelev1">&gt; (NAME)                                \
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +#define OBJ_CLASS_INSTANCE(NAME, PARENT, CONSTRUCTOR,  
</span><br>
<span class="quotelev1">&gt; DESTRUCTOR)       \
</span><br>
<span class="quotelev1">&gt; +    opal_class_t NAME ## _class =  
</span><br>
<span class="quotelev1">&gt; {                                     \
</span><br>
<span class="quotelev1">&gt; +        sizeof 
</span><br>
<span class="quotelev1">&gt; (NAME),                                                   \
</span><br>
<span class="quotelev1">&gt; +        NULL, NULL, NULL,  
</span><br>
<span class="quotelev1">&gt; NULL,                                         \
</span><br>
<span class="quotelev1">&gt; +        0,  
</span><br>
<span class="quotelev1">&gt; 0,                                                           \
</span><br>
<span class="quotelev1">&gt; +        #  
</span><br>
<span class="quotelev1">&gt; NAME,                                                         \
</span><br>
<span class="quotelev1">&gt; +        OBJ_CLASS 
</span><br>
<span class="quotelev1">&gt; (PARENT),                                              \
</span><br>
<span class="quotelev1">&gt; +        (opal_construct_t)  
</span><br>
<span class="quotelev1">&gt; CONSTRUCTOR,                                 \
</span><br>
<span class="quotelev1">&gt; +        (opal_destruct_t)  
</span><br>
<span class="quotelev1">&gt; DESTRUCTOR,                                   \
</span><br>
<span class="quotelev1">&gt; +        (opal_construct_t)  
</span><br>
<span class="quotelev1">&gt; NULL,                                        \
</span><br>
<span class="quotelev1">&gt; +        (opal_destruct_t)  
</span><br>
<span class="quotelev1">&gt; NULL,                                         \
</span><br>
<span class="quotelev1">&gt; +         
</span><br>
<span class="quotelev1">&gt; { { OPAL_ATOMIC_UNLOCKED } },                                   \
</span><br>
<span class="quotelev1">&gt; +        OBJ_CLASS(NAME), OBJ_CLASS 
</span><br>
<span class="quotelev1">&gt; (NAME)                                \
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * Static initializer for a class descriptor with cache ctor/dtor
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * @param NAME              Name of class
</span><br>
<span class="quotelev1">&gt; + * @param PARENT            Name of parent class
</span><br>
<span class="quotelev1">&gt; + * @param CONSTRUCTOR       Pointer to constructor
</span><br>
<span class="quotelev1">&gt; + * @param DESTRUCTOR        Pointer to destructor
</span><br>
<span class="quotelev1">&gt; + * @param CACHE_CONSTRUCTOR Pointer to cache constructor
</span><br>
<span class="quotelev1">&gt; + * @param CACHE_DESTRUCTOR  Pointer to cache destructor
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Put this in NAME.c
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +#ifdef USE_UMEM
</span><br>
<span class="quotelev1">&gt; +#define OBJ_CLASS_INSTANCE_CACHE(NAME, PARENT, CONSTRUCTOR,  
</span><br>
<span class="quotelev1">&gt; DESTRUCTOR, CACHE_CONSTRUCTOR, CACHE_DESTRUCTOR) \
</span><br>
<span class="quotelev1">&gt; +    opal_class_t NAME ## _class =  
</span><br>
<span class="quotelev1">&gt; {                                     \
</span><br>
<span class="quotelev1">&gt; +         
</span><br>
<span class="quotelev1">&gt; NULL,                                                           \
</span><br>
<span class="quotelev1">&gt; +        sizeof 
</span><br>
<span class="quotelev1">&gt; (NAME),                                                   \
</span><br>
<span class="quotelev1">&gt; +        NULL, NULL, NULL,  
</span><br>
<span class="quotelev1">&gt; NULL,                                         \
</span><br>
<span class="quotelev1">&gt; +        0,  
</span><br>
<span class="quotelev1">&gt; 0,                                                           \
</span><br>
<span class="quotelev1">&gt;          #  
</span><br>
<span class="quotelev1">&gt; NAME,                                                         \
</span><br>
<span class="quotelev1">&gt;          OBJ_CLASS 
</span><br>
<span class="quotelev1">&gt; (PARENT),                                              \
</span><br>
<span class="quotelev1">&gt;          (opal_construct_t)  
</span><br>
<span class="quotelev1">&gt; CONSTRUCTOR,                                 \
</span><br>
<span class="quotelev1">&gt;          (opal_destruct_t)  
</span><br>
<span class="quotelev1">&gt; DESTRUCTOR,                                   \
</span><br>
<span class="quotelev1">&gt; -        0, 0, NULL,  
</span><br>
<span class="quotelev1">&gt; NULL,                                               \
</span><br>
<span class="quotelev1">&gt; -        sizeof 
</span><br>
<span class="quotelev1">&gt; (NAME)                                                    \
</span><br>
<span class="quotelev1">&gt; +        (opal_construct_t)  
</span><br>
<span class="quotelev1">&gt; CACHE_CONSTRUCTOR,                           \
</span><br>
<span class="quotelev1">&gt; +        (opal_destruct_t)  
</span><br>
<span class="quotelev1">&gt; CACHE_DESTRUCTOR,                             \
</span><br>
<span class="quotelev1">&gt; +         
</span><br>
<span class="quotelev1">&gt; { { OPAL_ATOMIC_UNLOCKED } },                                   \
</span><br>
<span class="quotelev1">&gt; +        OBJ_CLASS(NAME), OBJ_CLASS 
</span><br>
<span class="quotelev1">&gt; (NAME)                                \
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +#define OBJ_CLASS_INSTANCE_CACHE(NAME, PARENT, CONSTRUCTOR,  
</span><br>
<span class="quotelev1">&gt; DESTRUCTOR, CACHE_CONSTRUCTOR, CACHE_DESTRUCTOR) \
</span><br>
<span class="quotelev1">&gt; +    opal_class_t NAME ## _class =  
</span><br>
<span class="quotelev1">&gt; {                                     \
</span><br>
<span class="quotelev1">&gt; +        sizeof 
</span><br>
<span class="quotelev1">&gt; (NAME),                                                   \
</span><br>
<span class="quotelev1">&gt; +        NULL, NULL, NULL,  
</span><br>
<span class="quotelev1">&gt; NULL,                                         \
</span><br>
<span class="quotelev1">&gt; +        0,  
</span><br>
<span class="quotelev1">&gt; 0,                                                           \
</span><br>
<span class="quotelev1">&gt; +        #  
</span><br>
<span class="quotelev1">&gt; NAME,                                                         \
</span><br>
<span class="quotelev1">&gt; +        OBJ_CLASS 
</span><br>
<span class="quotelev1">&gt; (PARENT),                                              \
</span><br>
<span class="quotelev1">&gt; +        (opal_construct_t)  
</span><br>
<span class="quotelev1">&gt; CONSTRUCTOR,                                 \
</span><br>
<span class="quotelev1">&gt; +        (opal_destruct_t)  
</span><br>
<span class="quotelev1">&gt; DESTRUCTOR,                                   \
</span><br>
<span class="quotelev1">&gt; +        (opal_construct_t)  
</span><br>
<span class="quotelev1">&gt; CACHE_CONSTRUCTOR,                           \
</span><br>
<span class="quotelev1">&gt; +        (opal_destruct_t)  
</span><br>
<span class="quotelev1">&gt; CACHE_DESTRUCTOR,                             \
</span><br>
<span class="quotelev1">&gt; +         
</span><br>
<span class="quotelev1">&gt; { { OPAL_ATOMIC_UNLOCKED } },                                   \
</span><br>
<span class="quotelev1">&gt; +        OBJ_CLASS(NAME), OBJ_CLASS 
</span><br>
<span class="quotelev1">&gt; (NAME)                                \
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt;   * Declaration for class descriptor
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt; @@ -308,28 +397,25 @@ static inline opal_object_t *opal_obj_ne
</span><br>
<span class="quotelev1">&gt;      do  
</span><br>
<span class="quotelev1">&gt; {                                                                \
</span><br>
<span class="quotelev1">&gt;          assert(NULL != ((opal_object_t *) (object))- 
</span><br>
<span class="quotelev2">&gt; &gt;obj_class);        \
</span><br>
<span class="quotelev1">&gt;          assert(OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (object))- 
</span><br>
<span class="quotelev2">&gt; &gt;obj_magic_id); \
</span><br>
<span class="quotelev1">&gt;          if (0 == opal_obj_update((opal_object_t *) (object), -1))  
</span><br>
<span class="quotelev1">&gt; {     \
</span><br>
<span class="quotelev1">&gt;              OBJ_SET_MAGIC_ID((object),  
</span><br>
<span class="quotelev1">&gt; 0);                              \
</span><br>
<span class="quotelev1">&gt; -            opal_obj_run_destructors((opal_object_t *)  
</span><br>
<span class="quotelev1">&gt; (object));       \
</span><br>
<span class="quotelev1">&gt; -            OBJ_REMEMBER_FILE_AND_LINENO( object, __FILE__,  
</span><br>
<span class="quotelev1">&gt; __LINE__ ); \
</span><br>
<span class="quotelev1">&gt; -            free 
</span><br>
<span class="quotelev1">&gt; (object);                                               \
</span><br>
<span class="quotelev1">&gt; +            opal_object_release_internal((opal_object_t *)  
</span><br>
<span class="quotelev1">&gt; (object),    \
</span><br>
<span class="quotelev1">&gt; +                                         __FILE__,  
</span><br>
<span class="quotelev1">&gt; __LINE__);           \
</span><br>
<span class="quotelev1">&gt;              object =  
</span><br>
<span class="quotelev1">&gt; NULL;                                              \
</span><br>
<span class="quotelev1">&gt;          }                                                             
</span><br>
<span class="quotelev1">&gt;    \
</span><br>
<span class="quotelev1">&gt;      } while (0)
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt;  #define OBJ_RELEASE 
</span><br>
<span class="quotelev1">&gt; (object)                                             \
</span><br>
<span class="quotelev1">&gt;      do  
</span><br>
<span class="quotelev1">&gt; {                                                                \
</span><br>
<span class="quotelev1">&gt;          if (0 == opal_obj_update((opal_object_t *) (object), -1))  
</span><br>
<span class="quotelev1">&gt; {     \
</span><br>
<span class="quotelev1">&gt; -            opal_obj_run_destructors((opal_object_t *)  
</span><br>
<span class="quotelev1">&gt; (object));       \
</span><br>
<span class="quotelev1">&gt; -            free 
</span><br>
<span class="quotelev1">&gt; (object);                                               \
</span><br>
<span class="quotelev1">&gt; +            opal_object_release_internal((opal_object_t *)  
</span><br>
<span class="quotelev1">&gt; (object));   \
</span><br>
<span class="quotelev1">&gt;              object =  
</span><br>
<span class="quotelev1">&gt; NULL;                                              \
</span><br>
<span class="quotelev1">&gt;          }                                                             
</span><br>
<span class="quotelev1">&gt;    \
</span><br>
<span class="quotelev1">&gt;      } while (0)
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt;   * Construct (initialize) objects that are not dynamically allocated.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * @param object        Pointer to the object
</span><br>
<span class="quotelev1">&gt;   * @param type          The object type
</span><br>
<span class="quotelev1">&gt; @@ -346,10 +432,11 @@ do {
</span><br>
<span class="quotelev1">&gt;      if (0 == (type)-&gt;cls_initialized) {                             \
</span><br>
<span class="quotelev1">&gt;          opal_class_initialize((type));                              \
</span><br>
<span class="quotelev1">&gt;      }                                                               \
</span><br>
<span class="quotelev1">&gt;      ((opal_object_t *) (object))-&gt;obj_class = (type);               \
</span><br>
<span class="quotelev1">&gt;      ((opal_object_t *) (object))-&gt;obj_reference_count = 1;          \
</span><br>
<span class="quotelev1">&gt; +    opal_obj_run_cache_constructors((opal_object_t *) (object));    \
</span><br>
<span class="quotelev1">&gt;      opal_obj_run_constructors((opal_object_t *) (object));          \
</span><br>
<span class="quotelev1">&gt;      OBJ_REMEMBER_FILE_AND_LINENO( object, __FILE__, __LINE__ ); \
</span><br>
<span class="quotelev1">&gt;  } while (0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -361,16 +448,18 @@ do {
</span><br>
<span class="quotelev1">&gt;  #if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt;  #define OBJ_DESTRUCT(object)                                    \
</span><br>
<span class="quotelev1">&gt;  do {                                                            \
</span><br>
<span class="quotelev1">&gt;      assert(OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (object))- 
</span><br>
<span class="quotelev2">&gt; &gt;obj_magic_id); \
</span><br>
<span class="quotelev1">&gt;      OBJ_SET_MAGIC_ID((object), 0);                              \
</span><br>
<span class="quotelev1">&gt; +    opal_obj_run_cache_destructors((opal_object_t *) (object)); \
</span><br>
<span class="quotelev1">&gt;      opal_obj_run_destructors((opal_object_t *) (object));       \
</span><br>
<span class="quotelev1">&gt;      OBJ_REMEMBER_FILE_AND_LINENO( object, __FILE__, __LINE__ ); \
</span><br>
<span class="quotelev1">&gt;  } while (0)
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt;  #define OBJ_DESTRUCT(object)                                    \
</span><br>
<span class="quotelev1">&gt;  do {                                                            \
</span><br>
<span class="quotelev1">&gt; +    opal_obj_run_cache_destructors((opal_object_t *) (object)); \
</span><br>
<span class="quotelev1">&gt;      opal_obj_run_destructors((opal_object_t *) (object));       \
</span><br>
<span class="quotelev1">&gt;      OBJ_REMEMBER_FILE_AND_LINENO( object, __FILE__, __LINE__ ); \
</span><br>
<span class="quotelev1">&gt;  } while (0)
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -400,10 +489,11 @@ OPAL_DECLSPEC void opal_class_initialize
</span><br>
<span class="quotelev1">&gt;   * upon process termination.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  OPAL_DECLSPEC int opal_class_finalize(void);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  END_C_DECLS
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt;   * Run the hierarchy of class constructors for this object, in a
</span><br>
<span class="quotelev1">&gt;   * parent-first order.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Do not use this function directly: use OBJ_CONSTRUCT() instead.
</span><br>
<span class="quotelev1">&gt; @@ -449,10 +539,58 @@ static inline void opal_obj_run_destruct
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt; + * Run the hierarchy of class cache constructors for this object,  
</span><br>
<span class="quotelev1">&gt; in a
</span><br>
<span class="quotelev1">&gt; + * parent-first order.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Do not use this function directly: use OBJ_CONSTRUCT() instead.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * WARNING: This implementation relies on a hardwired maximum  
</span><br>
<span class="quotelev1">&gt; depth of
</span><br>
<span class="quotelev1">&gt; + * the inheritance tree!!!
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Hardwired for fairly shallow inheritance trees
</span><br>
<span class="quotelev1">&gt; + * @param size          Pointer to the object.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +static inline void opal_obj_run_cache_constructors(opal_object_t *  
</span><br>
<span class="quotelev1">&gt; object)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    opal_construct_t* cls_cache_construct;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    assert(NULL != object-&gt;obj_class);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    cls_cache_construct = object-&gt;obj_class- 
</span><br>
<span class="quotelev2">&gt; &gt;cls_cache_construct_array;
</span><br>
<span class="quotelev1">&gt; +    while( NULL != *cls_cache_construct ) {
</span><br>
<span class="quotelev1">&gt; +        (*cls_cache_construct)(object);
</span><br>
<span class="quotelev1">&gt; +        cls_cache_construct++;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * Run the hierarchy of class destructors for this object, in a
</span><br>
<span class="quotelev1">&gt; + * parent-last order.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Do not use this function directly: use OBJ_DESTRUCT() instead.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * @param size          Pointer to the object.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +static inline void opal_obj_run_cache_destructors(opal_object_t *  
</span><br>
<span class="quotelev1">&gt; object)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    opal_destruct_t* cls_cache_destruct;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    assert(NULL != object-&gt;obj_class);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    cls_cache_destruct = object-&gt;obj_class-&gt;cls_cache_destruct_array;
</span><br>
<span class="quotelev1">&gt; +    while( NULL != *cls_cache_destruct ) {
</span><br>
<span class="quotelev1">&gt; +        (*cls_cache_destruct)(object);
</span><br>
<span class="quotelev1">&gt; +        cls_cache_destruct++;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt;   * Create new object: dynamically allocate storage and run the class
</span><br>
<span class="quotelev1">&gt;   * constructor.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Do not use this function directly: use OBJ_NEW() instead.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt; @@ -461,25 +599,50 @@ static inline void opal_obj_run_destruct
</span><br>
<span class="quotelev1">&gt;   * @return              Pointer to the object
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  static inline opal_object_t *opal_obj_new(opal_class_t * cls)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      opal_object_t *object;
</span><br>
<span class="quotelev1">&gt; -    assert(cls-&gt;cls_sizeof &gt;= sizeof(opal_object_t));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    object = (opal_object_t *) malloc(cls-&gt;cls_sizeof);
</span><br>
<span class="quotelev1">&gt;      if (0 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev1">&gt;          opal_class_initialize(cls);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#ifdef USE_UMEM
</span><br>
<span class="quotelev1">&gt; +    object = (opal_object_t *) umem_cache_alloc(cls-&gt;cls_cache,  
</span><br>
<span class="quotelev1">&gt; UMEM_NOFAIL);
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +    object = (opal_object_t *) malloc(cls-&gt;cls_sizeof);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      if (NULL != object) {
</span><br>
<span class="quotelev1">&gt; +#ifndef USE_UMEM
</span><br>
<span class="quotelev1">&gt;          object-&gt;obj_class = cls;
</span><br>
<span class="quotelev1">&gt;          object-&gt;obj_reference_count = 1;
</span><br>
<span class="quotelev1">&gt; +        opal_obj_run_cache_constructors(object);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;          opal_obj_run_constructors(object);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      return object;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +static inline void opal_object_release_internal(opal_object_t *object
</span><br>
<span class="quotelev1">&gt; +#if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt; +                                       , const char *file, int line
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +                                      )
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    opal_obj_run_destructors(object);
</span><br>
<span class="quotelev1">&gt; +    OBJ_REMEMBER_FILE_AND_LINENO(object, file, line);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#ifdef USE_UMEM
</span><br>
<span class="quotelev1">&gt; +    umem_cache_free(object-&gt;obj_class-&gt;cls_cache, object);
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +    opal_obj_run_cache_destructors(object);
</span><br>
<span class="quotelev1">&gt; +    free(object);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt;   * Atomically update the object's reference count by some increment.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * This function should not be used directly: it is called via the
</span><br>
<span class="quotelev1">&gt;   * macros OBJ_RETAIN and OBJ_RELEASE
</span><br>
<span class="quotelev1">&gt; diff --quilt old/opal/class/opal_object.c new/opal/class/opal_object.c
</span><br>
<span class="quotelev1">&gt; --- old/opal/class/opal_object.c
</span><br>
<span class="quotelev1">&gt; +++ new/opal/class/opal_object.c
</span><br>
<span class="quotelev1">&gt; @@ -34,178 +34,252 @@
</span><br>
<span class="quotelev1">&gt;   * Instantiation of class descriptor for the base class.  This is
</span><br>
<span class="quotelev1">&gt;   * special, since be mark it as already initialized, with no parent
</span><br>
<span class="quotelev1">&gt;   * and no constructor or destructor.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  opal_class_t opal_object_t_class = {
</span><br>
<span class="quotelev1">&gt; +#ifdef USE_UMEM
</span><br>
<span class="quotelev1">&gt; +    NULL,                 /* object cache */
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +    sizeof(opal_object_t),/* size of the opal object */
</span><br>
<span class="quotelev1">&gt; +    NULL,                 /* array of cache constructors */
</span><br>
<span class="quotelev1">&gt; +    NULL,                 /* array of constructors */
</span><br>
<span class="quotelev1">&gt; +    NULL,                 /* array of destructors */
</span><br>
<span class="quotelev1">&gt; +    NULL,                 /* array of cache destructors */
</span><br>
<span class="quotelev1">&gt; +    1,                    /* initialized  -- this class is  
</span><br>
<span class="quotelev1">&gt; preinitialized */
</span><br>
<span class="quotelev1">&gt; +    0,                    /* class hierarchy depth */
</span><br>
<span class="quotelev1">&gt;      &quot;opal_object_t&quot;,      /* name */
</span><br>
<span class="quotelev1">&gt;      NULL,                 /* parent class */
</span><br>
<span class="quotelev1">&gt;      NULL,                 /* constructor */
</span><br>
<span class="quotelev1">&gt;      NULL,                 /* destructor */
</span><br>
<span class="quotelev1">&gt; -    1,                    /* initialized  -- this class is  
</span><br>
<span class="quotelev1">&gt; preinitialized */
</span><br>
<span class="quotelev1">&gt; -    0,                    /* class hierarchy depth */
</span><br>
<span class="quotelev1">&gt; -    NULL,                 /* array of constructors */
</span><br>
<span class="quotelev1">&gt; -    NULL,                 /* array of destructors */
</span><br>
<span class="quotelev1">&gt; -    sizeof(opal_object_t) /* size of the opal object */
</span><br>
<span class="quotelev1">&gt; +    NULL,                 /* cache constructor */
</span><br>
<span class="quotelev1">&gt; +    NULL,                 /* cache destructor */
</span><br>
<span class="quotelev1">&gt; +    { { OPAL_ATOMIC_UNLOCKED } }, /* init lock */
</span><br>
<span class="quotelev1">&gt; +    &amp;opal_object_t_class,
</span><br>
<span class="quotelev1">&gt; +    &amp;opal_object_t_class
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /*
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; +#ifdef USE_UMEM
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static int
</span><br>
<span class="quotelev1">&gt; +run_cache_constructors_umem(void *buf, void *private, int flags)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    opal_object_t *object = (opal_object_t *)buf;
</span><br>
<span class="quotelev1">&gt; +    opal_class_t  *cls    = (opal_class_t  *)private;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    object-&gt;obj_class = cls;
</span><br>
<span class="quotelev1">&gt; +    object-&gt;obj_reference_count = 1;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    opal_obj_run_cache_constructors(object);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static void
</span><br>
<span class="quotelev1">&gt; +run_cache_destructors_umem(void *buf, void *private)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    opal_object_t *object = (opal_object_t *)buf;
</span><br>
<span class="quotelev1">&gt; +    opal_class_t  *cls    = (opal_class_t  *)private;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    assert(object-&gt;obj_class == cls);
</span><br>
<span class="quotelev1">&gt; +    assert(object-&gt;obj_reference_count == 0);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    opal_obj_run_cache_destructors(object);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * Lazy initialization of class descriptor.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  void opal_class_initialize(opal_class_t *cls)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      opal_class_t *c;
</span><br>
<span class="quotelev1">&gt; -    opal_construct_t* cls_construct_array;
</span><br>
<span class="quotelev1">&gt; -    opal_destruct_t* cls_destruct_array;
</span><br>
<span class="quotelev1">&gt; +    opal_construct_t *cls_construct_array;
</span><br>
<span class="quotelev1">&gt; +    opal_destruct_t  *cls_destruct_array;
</span><br>
<span class="quotelev1">&gt; +    opal_construct_t *cls_cache_construct_array;
</span><br>
<span class="quotelev1">&gt; +    opal_destruct_t  *cls_cache_destruct_array;
</span><br>
<span class="quotelev1">&gt;      int cls_construct_array_count;
</span><br>
<span class="quotelev1">&gt;      int cls_destruct_array_count;
</span><br>
<span class="quotelev1">&gt; +    int cls_cache_construct_array_count;
</span><br>
<span class="quotelev1">&gt; +    int cls_cache_destruct_array_count;
</span><br>
<span class="quotelev1">&gt;      int i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      assert(cls);
</span><br>
<span class="quotelev1">&gt; +    assert(cls-&gt;cls_sizeof &gt;= sizeof(opal_object_t));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Check to see if any other thread got in here and initialized
</span><br>
<span class="quotelev1">&gt;         this class before we got a chance to */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (1 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev1">&gt;          return;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    opal_atomic_lock(&amp;class_lock);
</span><br>
<span class="quotelev1">&gt; +    opal_atomic_lock(&amp;cls-&gt;cls_init_lock);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* If another thread initializing this same class came in at
</span><br>
<span class="quotelev1">&gt;         roughly the same time, it may have gotten the lock and
</span><br>
<span class="quotelev1">&gt;         initialized.  So check again. */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (1 == cls-&gt;cls_initialized) {
</span><br>
<span class="quotelev1">&gt; -        opal_atomic_unlock(&amp;class_lock);
</span><br>
<span class="quotelev1">&gt; +        opal_atomic_unlock(&amp;cls-&gt;cls_init_lock);
</span><br>
<span class="quotelev1">&gt;          return;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt;       * First calculate depth of class hierarchy
</span><br>
<span class="quotelev1">&gt;       * And the number of constructors and destructors
</span><br>
<span class="quotelev1">&gt; +     * And the number of cache constructors and cache destructors
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      cls-&gt;cls_depth = 0;
</span><br>
<span class="quotelev1">&gt; -    cls_construct_array_count = 0;
</span><br>
<span class="quotelev1">&gt; -    cls_destruct_array_count  = 0;
</span><br>
<span class="quotelev1">&gt; +    cls_construct_array_count       = 0;
</span><br>
<span class="quotelev1">&gt; +    cls_destruct_array_count        = 0;
</span><br>
<span class="quotelev1">&gt; +    cls_cache_construct_array_count = 0;
</span><br>
<span class="quotelev1">&gt; +    cls_cache_destruct_array_count  = 0;
</span><br>
<span class="quotelev1">&gt;      for (c = cls; c; c = c-&gt;cls_parent) {
</span><br>
<span class="quotelev1">&gt; -        if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev1">&gt; -            cls_construct_array_count++;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; -        if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev1">&gt; -            cls_destruct_array_count++;
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +        cls_construct_array_count       += !!(NULL != c- 
</span><br>
<span class="quotelev2">&gt; &gt;cls_construct);
</span><br>
<span class="quotelev1">&gt; +        cls_destruct_array_count        += !!(NULL != c- 
</span><br>
<span class="quotelev2">&gt; &gt;cls_destruct);
</span><br>
<span class="quotelev1">&gt; +        cls_cache_construct_array_count += !!(NULL != c- 
</span><br>
<span class="quotelev2">&gt; &gt;cls_cache_construct);
</span><br>
<span class="quotelev1">&gt; +        cls_cache_destruct_array_count  += !!(NULL != c- 
</span><br>
<span class="quotelev2">&gt; &gt;cls_cache_destruct);
</span><br>
<span class="quotelev1">&gt;          cls-&gt;cls_depth++;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt;       * Allocate arrays for hierarchy of constructors and destructors
</span><br>
<span class="quotelev1">&gt;       * plus for each a NULL-sentinel
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    cls-&gt;cls_construct_array =
</span><br>
<span class="quotelev1">&gt; -        (void (**)(opal_object_t*))malloc 
</span><br>
<span class="quotelev1">&gt; ((cls_construct_array_count +
</span><br>
<span class="quotelev1">&gt; -                                            
</span><br>
<span class="quotelev1">&gt; cls_destruct_array_count + 2) *
</span><br>
<span class="quotelev1">&gt; -                                          sizeof(opal_construct_t) );
</span><br>
<span class="quotelev1">&gt; -    if (NULL == cls-&gt;cls_construct_array) {
</span><br>
<span class="quotelev1">&gt; +    cls-&gt;cls_cache_construct_array =
</span><br>
<span class="quotelev1">&gt; +        (void (**)(opal_object_t*))malloc 
</span><br>
<span class="quotelev1">&gt; ((cls_cache_construct_array_count +
</span><br>
<span class="quotelev1">&gt; +                                            
</span><br>
<span class="quotelev1">&gt; cls_construct_array_count +
</span><br>
<span class="quotelev1">&gt; +                                           cls_destruct_array_count +
</span><br>
<span class="quotelev1">&gt; +                                            
</span><br>
<span class="quotelev1">&gt; cls_cache_destruct_array_count + 4
</span><br>
<span class="quotelev1">&gt; +                                          ) * sizeof 
</span><br>
<span class="quotelev1">&gt; (opal_construct_t));
</span><br>
<span class="quotelev1">&gt; +    if (NULL == cls-&gt;cls_cache_construct_array) {
</span><br>
<span class="quotelev1">&gt;          perror(&quot;Out of memory&quot;);
</span><br>
<span class="quotelev1">&gt;          exit(-1);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    cls-&gt;cls_construct_array =
</span><br>
<span class="quotelev1">&gt; +        cls-&gt;cls_cache_construct_array +  
</span><br>
<span class="quotelev1">&gt; cls_cache_construct_array_count + 1;
</span><br>
<span class="quotelev1">&gt;      cls-&gt;cls_destruct_array =
</span><br>
<span class="quotelev1">&gt; -        cls-&gt;cls_construct_array + cls_construct_array_count + 1;
</span><br>
<span class="quotelev1">&gt; +        cls-&gt;cls_cache_construct_array +  
</span><br>
<span class="quotelev1">&gt; cls_cache_construct_array_count +
</span><br>
<span class="quotelev1">&gt; +                                         cls_construct_array_count  
</span><br>
<span class="quotelev1">&gt; + 2;
</span><br>
<span class="quotelev1">&gt; +    cls-&gt;cls_cache_destruct_array =
</span><br>
<span class="quotelev1">&gt; +        cls-&gt;cls_cache_construct_array +  
</span><br>
<span class="quotelev1">&gt; cls_cache_construct_array_count +
</span><br>
<span class="quotelev1">&gt; +                                         cls_construct_array_count +
</span><br>
<span class="quotelev1">&gt; +                                         cls_destruct_array_count  
</span><br>
<span class="quotelev1">&gt; + 3;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt; -     * The constructor array is reversed, so start at the end
</span><br>
<span class="quotelev1">&gt; +     * The (cache) constructor array is reversed, so start at the end
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    cls_construct_array = cls-&gt;cls_construct_array +  
</span><br>
<span class="quotelev1">&gt; cls_construct_array_count;
</span><br>
<span class="quotelev1">&gt; -    cls_destruct_array  = cls-&gt;cls_destruct_array;
</span><br>
<span class="quotelev1">&gt; +    cls_cache_construct_array =
</span><br>
<span class="quotelev1">&gt; +        cls-&gt;cls_cache_construct_array +  
</span><br>
<span class="quotelev1">&gt; cls_cache_construct_array_count;
</span><br>
<span class="quotelev1">&gt; +    cls_construct_array       =
</span><br>
<span class="quotelev1">&gt; +        cls-&gt;cls_construct_array + cls_construct_array_count;
</span><br>
<span class="quotelev1">&gt; +    cls_destruct_array        = cls-&gt;cls_destruct_array;
</span><br>
<span class="quotelev1">&gt; +    cls_cache_destruct_array  = cls-&gt;cls_cache_destruct_array;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      c = cls;
</span><br>
<span class="quotelev1">&gt; -    *cls_construct_array = NULL;  /* end marker for the  
</span><br>
<span class="quotelev1">&gt; constructors */
</span><br>
<span class="quotelev1">&gt; +    *cls_cache_construct_array = NULL; /* end marker for the  
</span><br>
<span class="quotelev1">&gt; constructors */
</span><br>
<span class="quotelev1">&gt; +    *cls_construct_array = NULL;       /* end marker for the  
</span><br>
<span class="quotelev1">&gt; constructors */
</span><br>
<span class="quotelev1">&gt;      for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
</span><br>
<span class="quotelev1">&gt;          if( NULL != c-&gt;cls_construct ) {
</span><br>
<span class="quotelev1">&gt;              --cls_construct_array;
</span><br>
<span class="quotelev1">&gt;              *cls_construct_array = c-&gt;cls_construct;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          if( NULL != c-&gt;cls_destruct ) {
</span><br>
<span class="quotelev1">&gt;              *cls_destruct_array = c-&gt;cls_destruct;
</span><br>
<span class="quotelev1">&gt;              cls_destruct_array++;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; +        if( NULL != c-&gt;cls_cache_construct ) {
</span><br>
<span class="quotelev1">&gt; +            --cls_cache_construct_array;
</span><br>
<span class="quotelev1">&gt; +            *cls_cache_construct_array = c-&gt;cls_cache_construct;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        if( NULL != c-&gt;cls_cache_destruct ) {
</span><br>
<span class="quotelev1">&gt; +            *cls_cache_destruct_array = c-&gt;cls_cache_destruct;
</span><br>
<span class="quotelev1">&gt; +            cls_cache_destruct_array++;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt;          c = c-&gt;cls_parent;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    *cls_destruct_array = NULL;  /* end marker for the destructors */
</span><br>
<span class="quotelev1">&gt; +    *cls_destruct_array = NULL;       /* end marker for the  
</span><br>
<span class="quotelev1">&gt; destructors */
</span><br>
<span class="quotelev1">&gt; +    *cls_cache_destruct_array = NULL; /* end marker for the  
</span><br>
<span class="quotelev1">&gt; destructors */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#ifdef USE_UMEM
</span><br>
<span class="quotelev1">&gt; +    cls-&gt;cls_cache = umem_cache_create(
</span><br>
<span class="quotelev1">&gt; +        (char *)cls-&gt;cls_name, cls-&gt;cls_sizeof, 0,
</span><br>
<span class="quotelev1">&gt; +        run_cache_constructors_umem,
</span><br>
<span class="quotelev1">&gt; +        run_cache_destructors_umem,
</span><br>
<span class="quotelev1">&gt; +        NULL, cls, NULL, 0
</span><br>
<span class="quotelev1">&gt; +    );
</span><br>
<span class="quotelev1">&gt; +    if (NULL == cls-&gt;cls_cache) {
</span><br>
<span class="quotelev1">&gt; +        perror(&quot;Out of memory&quot;);
</span><br>
<span class="quotelev1">&gt; +        exit(-1);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      cls-&gt;cls_initialized = 1;
</span><br>
<span class="quotelev1">&gt; +    opal_atomic_lock(&amp;cls-&gt;cls_init_lock);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      save_class(cls);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* All done */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    opal_atomic_unlock(&amp;class_lock);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * Note that this is finalize for *all* classes.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  int opal_class_finalize(void)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    int i;
</span><br>
<span class="quotelev1">&gt; +    opal_class_t *cls, *cnext;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; -        free(classes);
</span><br>
<span class="quotelev1">&gt; -        classes = NULL;
</span><br>
<span class="quotelev1">&gt; -        num_classes = 0;
</span><br>
<span class="quotelev1">&gt; -        max_classes = 0;
</span><br>
<span class="quotelev1">&gt; +    opal_atomic_lock(&amp;class_lock);
</span><br>
<span class="quotelev1">&gt; +    for (cls = opal_object_t_class.cls_next, cnext = cls-&gt;cls_next;
</span><br>
<span class="quotelev1">&gt; +         cls != &amp;opal_object_t_class;
</span><br>
<span class="quotelev1">&gt; +         cls = cnext, cnext = cls-&gt;cls_next) {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        opal_atomic_lock(&amp;cls-&gt;cls_init_lock);
</span><br>
<span class="quotelev1">&gt; +        free(cls-&gt;cls_construct_array);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#ifdef USE_UMEM
</span><br>
<span class="quotelev1">&gt; +        umem_cache_destroy(cls-&gt;cls_cache);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /*
</span><br>
<span class="quotelev1">&gt; +         * Remove class from class list, this is safe, because of  
</span><br>
<span class="quotelev1">&gt; the safe list
</span><br>
<span class="quotelev1">&gt; +         * traversal
</span><br>
<span class="quotelev1">&gt; +         */
</span><br>
<span class="quotelev1">&gt; +        cls-&gt;cls_prev-&gt;cls_next = cls-&gt;cls_next;
</span><br>
<span class="quotelev1">&gt; +        cls-&gt;cls_next-&gt;cls_prev = cls-&gt;cls_prev;
</span><br>
<span class="quotelev1">&gt; +        cls-&gt;cls_prev = cls-&gt;cls_next = NULL;
</span><br>
<span class="quotelev1">&gt; +        cls-&gt;cls_initialized = 0;
</span><br>
<span class="quotelev1">&gt; +        opal_atomic_unlock(&amp;cls-&gt;cls_init_lock);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; +    opal_class_t *cnext, *cprev;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    classes[num_classes] = cls-&gt;cls_construct_array;
</span><br>
<span class="quotelev1">&gt; -    ++num_classes;
</span><br>
<span class="quotelev1">&gt; -}
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
<span class="quotelev1">&gt; +    opal_atomic_lock(&amp;class_lock);
</span><br>
<span class="quotelev1">&gt; +    cls-&gt;cls_next = cnext = &amp;opal_object_t_class;
</span><br>
<span class="quotelev1">&gt; +    cls-&gt;cls_prev = cprev = opal_object_t_class.cls_prev;
</span><br>
<span class="quotelev1">&gt; +    cnext-&gt;cls_prev = cls;
</span><br>
<span class="quotelev1">&gt; +    cprev-&gt;cls_next = cls;
</span><br>
<span class="quotelev1">&gt; +    opal_atomic_unlock(&amp;class_lock);
</span><br>
<span class="quotelev1">&gt;  }
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
<li><strong>Next message:</strong> <a href="1352.php">Bert Wesarg: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
<li><strong>Previous message:</strong> <a href="1350.php">Bert Wesarg: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
<li><strong>In reply to:</strong> <a href="1348.php">Bert Wesarg: "[OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1352.php">Bert Wesarg: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
<li><strong>Reply:</strong> <a href="1352.php">Bert Wesarg: "Re: [OMPI devel] [RFC][PATCH] option to use libumem for opal object system"</a>
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
