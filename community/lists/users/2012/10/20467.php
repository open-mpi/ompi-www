<?
$subject_val = "Re: [OMPI users] windows + threads";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 10:10:38 2012" -->
<!-- isoreceived="20121011141038" -->
<!-- sent="Thu, 11 Oct 2012 14:10:31 +0000" -->
<!-- isosent="20121011141031" -->
<!-- name="Biddiscombe, John A." -->
<!-- email="biddisco_at_[hidden]" -->
<!-- subject="Re: [OMPI users] windows + threads" -->
<!-- id="50320452A334BD42A5EC72BAD2145099080C7A9E_at_MBX10.d.ethz.ch" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50320452A334BD42A5EC72BAD2145099080C7077_at_MBX10.d.ethz.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] windows + threads<br>
<strong>From:</strong> Biddiscombe, John A. (<em>biddisco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-11 10:10:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20468.php">Christian Krause: "[OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="20466.php">Siegmar Gross: "[OMPI users] question to scattering an object in openmpi-1.9a1r27380"</a>
<li><strong>In reply to:</strong> <a href="20464.php">Biddiscombe, John A.: "[OMPI users] windows + threads"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to follow up my earlier post, checking out master and building that gives me the same lock up in ompi_info
<br>
<p><span class="quotelev1">&gt;      ompi_info.exe!opal_atomic_lifo_push(opal_atomic_lifo_t * lifo, opal_list_item_t * item) Line 73 C
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info.exe!ompi_free_list_grow(ompi_free_list_t * flist, unsigned __int64 num_elements) Line 257       C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info.exe!ompi_rb_tree_init(ompi_rb_tree_t * tree, int (void *, void *) * comp) Line 77     C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info.exe!mca_mpool_base_tree_init() Line 88       C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info.exe!mca_mpool_base_open() Line 86     C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info.exe!ompi_info_register_components(opal_pointer_array_t * mca_types, opal_pointer_array_t * component_map) Line 264    C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info.exe!main(int argc, char * * argv) Line 158   C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info.exe!__tmainCRTStartup() Line 536      C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info.exe!mainCRTStartup() Line 377  C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kernel32.dll!000007feac87167e()   Unknown
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ntdll.dll!000007feae4cc3f1()      Unknown
<br>
<p>at the line below with the * at the start. Well actually I guess it's sitting in a spin lock. Should I continue playing or is master unstable?
<br>
<p>Thanks
<br>
JB
<br>
<p>/* Add one element to the LIFO. We will return the last head of the list
<br>
* to allow the upper level to detect if this element is the first one in the
<br>
* list (if the list was empty before this operation).
<br>
*/
<br>
static inline opal_list_item_t* opal_atomic_lifo_push( opal_atomic_lifo_t* lifo,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_item_t* item )
<br>
{
<br>
#if OPAL_ENABLE_MULTI_THREADS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do {
<br>
*       item-&gt;opal_list_next = lifo-&gt;opal_lifo_head;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_atomic_wmb();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( opal_atomic_cmpset_ptr( &amp;(lifo-&gt;opal_lifo_head),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void*)item-&gt;opal_list_next,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item ) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_atomic_cmpset_32((volatile int32_t*)&amp;item-&gt;item_free, 1, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (opal_list_item_t*)item-&gt;opal_list_next;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* DO some kind of pause to release the bus */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} while( 1 );
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;item-&gt;opal_list_next = lifo-&gt;opal_lifo_head;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lifo-&gt;opal_lifo_head = item;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return (opal_list_item_t*)item-&gt;opal_list_next;
<br>
#endif  /* OPAL_ENABLE_MULTI_THREADS */
<br>
}
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20467/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20468.php">Christian Krause: "[OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="20466.php">Siegmar Gross: "[OMPI users] question to scattering an object in openmpi-1.9a1r27380"</a>
<li><strong>In reply to:</strong> <a href="20464.php">Biddiscombe, John A.: "[OMPI users] windows + threads"</a>
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
