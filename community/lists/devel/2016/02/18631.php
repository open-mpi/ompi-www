<?
$subject_val = "[OMPI devel] error while compiling openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 02:34:39 2016" -->
<!-- isoreceived="20160226073439" -->
<!-- sent="Fri, 26 Feb 2016 13:04:37 +0530" -->
<!-- isosent="20160226073437" -->
<!-- name="Monika Hemnani" -->
<!-- email="hemnanimt1_at_[hidden]" -->
<!-- subject="[OMPI devel] error while compiling openmpi" -->
<!-- id="CA+LkxsKaNhsXv5MGaF3yB-_Aqcbeb3neKWge6HA9NuY2kMTZNQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] error while compiling openmpi<br>
<strong>From:</strong> Monika Hemnani (<em>hemnanimt1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-26 02:34:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18632.php">Gilles Gouaillardet: "Re: [OMPI devel] error while compiling openmpi"</a>
<li><strong>Previous message:</strong> <a href="18630.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18632.php">Gilles Gouaillardet: "Re: [OMPI devel] error while compiling openmpi"</a>
<li><strong>Reply:</strong> <a href="18632.php">Gilles Gouaillardet: "Re: [OMPI devel] error while compiling openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to run Open mpi on Microblaze(soft core processor), with
<br>
operating system xilkernel(OS from xilinx).
<br>
I'm getting errors in the file:  opal_object.h .
<br>
<p><p>&nbsp;This is the part of the code where I'm getting errors.
<br>
<p>typedef struct opal_object_t opal_object_t;                 //line 1
<br>
typedef struct opal_class_t opal_class_t;                   //line 2
<br>
typedef void (*opal_construct_t) (opal_object_t *);         //line 3
<br>
typedef void (*opal_destruct_t) (opal_object_t *);          //line 4
<br>
<p><p>struct opal_class_t {
<br>
const char *cls_name;                /**&lt; symbolic name for class
<br>
*/opal_class_t *cls_parent;            /**&lt; parent class descriptor */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//line 5
<br>
opal_construct_t cls_construct;      /**&lt; class constructor */
<br>
opal_destruct_t cls_destruct;        /**&lt; class destructor */
<br>
int cls_initialized;                /**&lt; is class initialized */
<br>
int cls_depth;                      /**&lt; depth of class hierarchy tree */
<br>
opal_construct_t *cls_construct_array;   /**&lt; array of parent class
<br>
constructors */
<br>
opal_destruct_t *cls_destruct_array;     /**&lt; array of parent class
<br>
destructors */
<br>
size_t cls_sizeof;                       /**&lt; size of an object instance */
<br>
};
<br>
<p>struct opal_object_t {
<br>
#if OMPI_ENABLE_DEBUG
<br>
/** Magic ID -- want this to be the very first item in the
<br>
struct's memory */
<br>
uint64_t obj_magic_id;
<br>
#endifopal_class_t *obj_class;                     /**&lt; class
<br>
descriptor */           //line6
<br>
volatile int32_t obj_reference_count;           /**&lt; reference count */
<br>
#if OMPI_ENABLE_DEBUG
<br>
const char* cls_init_file_name; /**&lt; In debug mode store the file
<br>
where the object get contructed */
<br>
int cls_init_lineno; /**&lt; In debug mode store the line number where
<br>
the object get contructed */
<br>
#endif /* OMPI_ENABLE_DEBUG */
<br>
};
<br>
<p><p><p>The errors are:
<br>
<p>line 1: storage class specified for parameter 'opal_object_t'
<br>
<p>line 2: storage class specified for parameter 'opal_class_t'
<br>
<p>line 3 and 4: expected declaration specifiers or '...' before
<br>
'opal_object_t'
<br>
<p>line 5 and 6: expected specifier-qualifier-list before 'opal_class_t'
<br>
<p><p><p><p>The compiler used is microblaze gcc 4.6.2
<br>
<p><p><p>How to remove these errors? Is there any other way to make these
<br>
definitions, so that compiler won't give it as an error?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18631/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18632.php">Gilles Gouaillardet: "Re: [OMPI devel] error while compiling openmpi"</a>
<li><strong>Previous message:</strong> <a href="18630.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18632.php">Gilles Gouaillardet: "Re: [OMPI devel] error while compiling openmpi"</a>
<li><strong>Reply:</strong> <a href="18632.php">Gilles Gouaillardet: "Re: [OMPI devel] error while compiling openmpi"</a>
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
