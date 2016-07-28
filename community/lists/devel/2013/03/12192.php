<?
$subject_val = "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  8 06:56:11 2013" -->
<!-- isoreceived="20130308115611" -->
<!-- sent="Fri, 8 Mar 2013 12:56:04 +0100" -->
<!-- isosent="20130308115604" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed" -->
<!-- id="78E2EE7B-EEBD-4178-A9AA-2BE64CE7AFAB_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F93359_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-08 06:56:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12193.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 8, 2013, at 11:55 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 7, 2013, at 7:37 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; An example will be a memory region without a predefined size, that I manipulate as opal_list_item_t. This fragment gets allocated when it's size is know, then gets OBJ_CONSTRUCT'ed and then used. The reference count is playing its role, when nobody is using the object anymore, it will be automatically released. With the change you propose such usage will be prohibited. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, ok -- are you saying to do the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; myobj = malloc(...);
</span><br>
<span class="quotelev1">&gt; OBJ_CONSTRUCT(myobj, ...);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, yes, I agree, #1 would disallow that [valid] use case.  And we wouldn't want to disallow that.
</span><br>
<p>Yes, this is what I do. As I explained in my previous email, I do't have other choice, as I don't know the size of the object before-hand (preventing the usage of OBJ_NEW). I thought about a new version of OBJ_NEW with an argument (which will be the size of memory to allocate), but I discarded it as an overkill.
<br>
<p><span class="quotelev1">&gt; But that's ok; #2 is the important one -- #1 just seemed like a good compliment to what was already there that we figured we'd do at the same time.  But we didn't know if there were other valid use cases that #1 would violate, which is why we RFC'ed/asked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS: The second patch (ref count == 1 in OBJ_DESTRUCT) is trivial but reasonable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah -- unfortunately, while the patch to add that assert() is trivial, it's finding lots of ref counting bugs in the MPI layer, so I don't want to commit it yet.  :-)  I'll come back with more info after I've sorted through them&#133;
</span><br>
<p>Correctly used, OBJ_NEW / OBJ_CONSTRUCT / OBJ_DESTRUCT, are not a bad set of macros. When an object is not needed and known not to be refereed anymore, it can safely be OBJ_DESTRUCT despite the fact that its reference count is not 1. Otherwise, in all BTLs we will have to put all fragments back in the right place, remove them from all lists, before calling the destructor. In other words, no collection class in Open MPI will work correctly, especially not the one we use the most often the ompi_free_list.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12193.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed"</a>
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
