<?
$subject_val = "Re: [OMPI devel] error while compiling openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 06:20:11 2016" -->
<!-- isoreceived="20160226112011" -->
<!-- sent="Fri, 26 Feb 2016 16:50:08 +0530" -->
<!-- isosent="20160226112008" -->
<!-- name="Monika Hemnani" -->
<!-- email="hemnanimt1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] error while compiling openmpi" -->
<!-- id="CA+LkxsJ1X7R47+1=tiDJoN25msp5dS_+65Az-a4TrdKZMLcDzg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56D00282.1060806_at_rist.or.jp" -->
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
<strong>From:</strong> Monika Hemnani (<em>hemnanimt1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-26 06:20:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18634.php">Ralph Castain: "[OMPI devel] Confused topic for developer's meeting"</a>
<li><strong>Previous message:</strong> <a href="18632.php">Gilles Gouaillardet: "Re: [OMPI devel] error while compiling openmpi"</a>
<li><strong>In reply to:</strong> <a href="18632.php">Gilles Gouaillardet: "Re: [OMPI devel] error while compiling openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] error while compiling openmpi"</a>
<li><strong>Reply:</strong> <a href="18639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] error while compiling openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I'm using a cross-compiler. I have a software Xilinx SDK, installed on
<br>
Windows(on x86 processor). The microblaze gcc compiler compiles the code
<br>
for the OS xilkernel(on Microblaze processor).
<br>
<p>I compiled the code you gave me. It got compiled.
<br>
<p><p>On Fri, Feb 26, 2016 at 1:15 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Monika,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://www.open-mpi.org/community/help/">https://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to run Open mpi on Microblaze(soft core processor), with
</span><br>
<span class="quotelev1">&gt; operating system xilkernel(OS from xilinx).
</span><br>
<span class="quotelev1">&gt; I'm getting errors in the file:  opal_object.h .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This is the part of the code where I'm getting errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; typedef struct opal_object_t opal_object_t;                 //line 1
</span><br>
<span class="quotelev1">&gt; typedef struct opal_class_t opal_class_t;                   //line 2
</span><br>
<span class="quotelev1">&gt; typedef void (*opal_construct_t) (opal_object_t *);         //line 3
</span><br>
<span class="quotelev1">&gt; typedef void (*opal_destruct_t) (opal_object_t *);          //line 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; struct opal_class_t {
</span><br>
<span class="quotelev1">&gt; const char *cls_name;                /**&lt; symbolic name for class */opal_class_t *cls_parent;            /**&lt; parent class descriptor */         //line 5
</span><br>
<span class="quotelev1">&gt; opal_construct_t cls_construct;      /**&lt; class constructor */
</span><br>
<span class="quotelev1">&gt; opal_destruct_t cls_destruct;        /**&lt; class destructor */
</span><br>
<span class="quotelev1">&gt; int cls_initialized;                /**&lt; is class initialized */
</span><br>
<span class="quotelev1">&gt; int cls_depth;                      /**&lt; depth of class hierarchy tree */
</span><br>
<span class="quotelev1">&gt; opal_construct_t *cls_construct_array;   /**&lt; array of parent class constructors */
</span><br>
<span class="quotelev1">&gt; opal_destruct_t *cls_destruct_array;     /**&lt; array of parent class destructors */
</span><br>
<span class="quotelev1">&gt; size_t cls_sizeof;                       /**&lt; size of an object instance */
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; struct opal_object_t {
</span><br>
<span class="quotelev1">&gt; #if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt; /** Magic ID -- want this to be the very first item in the
</span><br>
<span class="quotelev1">&gt; struct's memory */
</span><br>
<span class="quotelev1">&gt; uint64_t obj_magic_id;
</span><br>
<span class="quotelev1">&gt; #endifopal_class_t *obj_class;                     /**&lt; class descriptor */           //line6
</span><br>
<span class="quotelev1">&gt; volatile int32_t obj_reference_count;           /**&lt; reference count */
</span><br>
<span class="quotelev1">&gt; #if OMPI_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt; const char* cls_init_file_name; /**&lt; In debug mode store the file where the object get contructed */
</span><br>
<span class="quotelev1">&gt; int cls_init_lineno; /**&lt; In debug mode store the line number where the object get contructed */
</span><br>
<span class="quotelev1">&gt; #endif /* OMPI_ENABLE_DEBUG */
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The errors are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; line 1: storage class specified for parameter 'opal_object_t'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; line 2: storage class specified for parameter 'opal_class_t'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; line 3 and 4: expected declaration specifiers or '...' before
</span><br>
<span class="quotelev1">&gt; 'opal_object_t'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; line 5 and 6: expected specifier-qualifier-list before 'opal_class_t'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The compiler used is microblaze gcc 4.6.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How to remove these errors? Is there any other way to make these
</span><br>
<span class="quotelev1">&gt; definitions, so that compiler won't give it as an error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18631.php">http://www.open-mpi.org/community/lists/devel/2016/02/18631.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18632.php">http://www.open-mpi.org/community/lists/devel/2016/02/18632.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18633/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18634.php">Ralph Castain: "[OMPI devel] Confused topic for developer's meeting"</a>
<li><strong>Previous message:</strong> <a href="18632.php">Gilles Gouaillardet: "Re: [OMPI devel] error while compiling openmpi"</a>
<li><strong>In reply to:</strong> <a href="18632.php">Gilles Gouaillardet: "Re: [OMPI devel] error while compiling openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] error while compiling openmpi"</a>
<li><strong>Reply:</strong> <a href="18639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] error while compiling openmpi"</a>
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
