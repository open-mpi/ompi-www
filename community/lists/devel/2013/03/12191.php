<?
$subject_val = "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  8 05:55:35 2013" -->
<!-- isoreceived="20130308105535" -->
<!-- sent="Fri, 8 Mar 2013 10:55:30 +0000" -->
<!-- isosent="20130308105530" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F93359_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C7BE963E-43A9-4946-965D-A581C4AA0A14_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects	don't get destroyed<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-08 05:55:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12192.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12190.php">Ralph Castain: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12189.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12192.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12192.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 7, 2013, at 7:37 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; An example will be a memory region without a predefined size, that I manipulate as opal_list_item_t. This fragment gets allocated when it's size is know, then gets OBJ_CONSTRUCT'ed and then used. The reference count is playing its role, when nobody is using the object anymore, it will be automatically released. With the change you propose such usage will be prohibited. 
</span><br>
<p>Ah, ok -- are you saying to do the following:
<br>
<p>myobj = malloc(...);
<br>
OBJ_CONSTRUCT(myobj, ...);
<br>
<p>?
<br>
<p>If so, yes, I agree, #1 would disallow that [valid] use case.  And we wouldn't want to disallow that.  
<br>
<p>But that's ok; #2 is the important one -- #1 just seemed like a good compliment to what was already there that we figured we'd do at the same time.  But we didn't know if there were other valid use cases that #1 would violate, which is why we RFC'ed/asked.
<br>
<p><span class="quotelev1">&gt; PS: The second patch (ref count == 1 in OBJ_DESTRUCT) is trivial but reasonable.
</span><br>
<p>Yeah -- unfortunately, while the patch to add that assert() is trivial, it's finding lots of ref counting bugs in the MPI layer, so I don't want to commit it yet.  :-)  I'll come back with more info after I've sorted through them...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12192.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12190.php">Ralph Castain: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>In reply to:</strong> <a href="12189.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12192.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Reply:</strong> <a href="12192.php">George Bosilca: "Re: [OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
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
