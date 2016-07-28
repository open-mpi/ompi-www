<?
$subject_val = "Re: [OMPI devel] error while compiling openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 28 12:40:37 2016" -->
<!-- isoreceived="20160228174037" -->
<!-- sent="Sun, 28 Feb 2016 17:40:31 +0000" -->
<!-- isosent="20160228174031" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] error while compiling openmpi" -->
<!-- id="630B61E4-7F0B-4FB2-8AA1-A0531EDEF904_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+LkxsJ1X7R47+1=tiDJoN25msp5dS_+65Az-a4TrdKZMLcDzg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] error while compiling openmpi<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-28 12:40:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18640.php">Ralph Castain: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>Previous message:</strong> <a href="18638.php">Gilles Gouaillardet: "Re: [OMPI devel] Confused topic for developer's meeting"</a>
<li><strong>In reply to:</strong> <a href="18633.php">Monika Hemnani: "Re: [OMPI devel] error while compiling openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see anything wrong with the C code in question.
<br>
<p>As Gilles requested, can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org/community/help/">https://www.open-mpi.org/community/help/</a>
<br>
<p><p><span class="quotelev1">&gt; On Feb 26, 2016, at 6:20 AM, Monika Hemnani &lt;hemnanimt1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I'm using a cross-compiler. I have a software Xilinx SDK, installed on Windows(on x86 processor). The microblaze gcc compiler compiles the code for the OS xilkernel(on Microblaze processor).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compiled the code you gave me. It got compiled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 26, 2016 at 1:15 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Monika,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/help/">https://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btw, are you using a cross-compiler ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can you try to compile this simple program :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; typedef struct xxx xxx;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct xxx {
</span><br>
<span class="quotelev1">&gt;     int i;
</span><br>
<span class="quotelev1">&gt;     xxx *p;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void yyy(xxx *x) {
</span><br>
<span class="quotelev1">&gt;     x-&gt;i = 0;
</span><br>
<span class="quotelev1">&gt;     x-&gt;p = x;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/26/2016 4:34 PM, Monika Hemnani wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to run Open mpi on Microblaze(soft core processor), with operating system xilkernel(OS from xilinx). 
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting errors in the file:  opal_object.h .
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  This is the part of the code where I'm getting errors.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; typedef struct opal_object_t opal_object_t;                 //line 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; typedef struct opal_class_t opal_class_t;                   
</span><br>
<span class="quotelev2">&gt;&gt; //line 2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; typedef void (*opal_construct_t) (opal_object_t *);         
</span><br>
<span class="quotelev2">&gt;&gt; //line 3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; typedef void (*opal_destruct_t) (opal_object_t *);          
</span><br>
<span class="quotelev2">&gt;&gt; //line 4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; struct opal_class_t {
</span><br>
<span class="quotelev2">&gt;&gt; const char *cls_name;                /**&lt; symbolic name for class */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; opal_class_t *cls_parent;            /**&lt; parent class descriptor */         //line 5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; opal_construct_t cls_construct;      /**&lt; class constructor */
</span><br>
<span class="quotelev2">&gt;&gt; opal_destruct_t cls_destruct;        /**&lt; class destructor */
</span><br>
<span class="quotelev2">&gt;&gt; int cls_initialized;                /**&lt; is class initialized */
</span><br>
<span class="quotelev2">&gt;&gt; int cls_depth;                      /**&lt; depth of class hierarchy tree */
</span><br>
<span class="quotelev2">&gt;&gt; opal_construct_t *cls_construct_array;   /**&lt; array of parent class constructors */
</span><br>
<span class="quotelev2">&gt;&gt; opal_destruct_t *cls_destruct_array;     /**&lt; array of parent class destructors */
</span><br>
<span class="quotelev2">&gt;&gt; size_t cls_sizeof;                       /**&lt; size of an object instance */
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; struct opal_object_t {
</span><br>
<span class="quotelev2">&gt;&gt; #if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev2">&gt;&gt; /** Magic ID -- want this to be the very first item in the
</span><br>
<span class="quotelev2">&gt;&gt; struct's memory */
</span><br>
<span class="quotelev2">&gt;&gt; uint64_t obj_magic_id;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; opal_class_t *obj_class;                     /**&lt; class descriptor */           //line6
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; volatile int32_t obj_reference_count;           /**&lt; reference count */
</span><br>
<span class="quotelev2">&gt;&gt; #if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev2">&gt;&gt; const char* cls_init_file_name; /**&lt; In debug mode store the file where the object get contructed */
</span><br>
<span class="quotelev2">&gt;&gt; int cls_init_lineno; /**&lt; In debug mode store the line number where the object get contructed */
</span><br>
<span class="quotelev2">&gt;&gt; #endif /* OMPI_ENABLE_DEBUG */
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The errors are:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; line 1: storage class specified for parameter 'opal_object_t'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; line 2: storage class specified for parameter 'opal_class_t'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; line 3 and 4: expected declaration specifiers or '...' before 'opal_object_t'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; line 5 and 6: expected specifier-qualifier-list before 'opal_class_t'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The compiler used is microblaze gcc 4.6.2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; How to remove these errors? Is there any other way to make these definitions, so that compiler won't give it as an error?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18631.php">http://www.open-mpi.org/community/lists/devel/2016/02/18631.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18632.php">http://www.open-mpi.org/community/lists/devel/2016/02/18632.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18633.php">http://www.open-mpi.org/community/lists/devel/2016/02/18633.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18640.php">Ralph Castain: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<li><strong>Previous message:</strong> <a href="18638.php">Gilles Gouaillardet: "Re: [OMPI devel] Confused topic for developer's meeting"</a>
<li><strong>In reply to:</strong> <a href="18633.php">Monika Hemnani: "Re: [OMPI devel] error while compiling openmpi"</a>
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
