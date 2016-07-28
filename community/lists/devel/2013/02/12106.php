<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 20:50:31 2013" -->
<!-- isoreceived="20130205015031" -->
<!-- sent="Tue, 5 Feb 2013 01:50:26 +0000" -->
<!-- isosent="20130205015026" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC658B_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkXi=3W-9esNMv9SfrdJOc1h0WmOJKNDohFKY-3C53q2bA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-04 20:50:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12107.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the point is that there are many cases throughout the OMPI code base where we do exactly the things listed in these macros.
<br>
<p>You certainly don't have to use them, but they can save a little effort when you them.
<br>
<p><p>On Feb 4, 2013, at 2:13 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are valid reasons why we decided not to add such macros.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding elements to a list do not increase the element ref count.
</span><br>
<span class="quotelev1">&gt; Similarly, removing an element from a list does not decrease its
</span><br>
<span class="quotelev1">&gt; refcount either. Thus, there is no obvious link between the refcount
</span><br>
<span class="quotelev1">&gt; of the elements in a list and the list itself. As a result, we can not
</span><br>
<span class="quotelev1">&gt; make the assumption that decreasing the refcount by one is correct,
</span><br>
<span class="quotelev1">&gt; and this even when we plan to get rid of one of our lists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition, the list can contain elements that have been
</span><br>
<span class="quotelev1">&gt; OBJ_CONSTRUCT in which case this macro will lead to unexpected
</span><br>
<span class="quotelev1">&gt; behaviors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 4, 2013 at 2:42 PM,  &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2013-02-04 14:42:57 EST (Mon, 04 Feb 2013)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 28029
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/28029">https://svn.open-mpi.org/trac/ompi/changeset/28029</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; The opal_list_t destructor doesn't release the items on the list prior to destructing or releasing it. Provide two convenience macros for doing so.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/opal/class/opal_list.h |    26 ++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 26 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/opal/class/opal_list.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/opal/class/opal_list.h        Mon Feb  4 12:36:55 2013        (r28028)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/opal/class/opal_list.h        2013-02-04 14:42:57 EST (Mon, 04 Feb 2013)      (r28029)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -160,6 +160,32 @@
</span><br>
<span class="quotelev2">&gt;&gt;  */
</span><br>
<span class="quotelev2">&gt;&gt; typedef struct opal_list_t opal_list_t;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +/** Cleanly destruct a list
</span><br>
<span class="quotelev2">&gt;&gt; + *
</span><br>
<span class="quotelev2">&gt;&gt; + * The opal_list_t destructor doesn't release the items on the
</span><br>
<span class="quotelev2">&gt;&gt; + * list - so provide two convenience macros that do so and then
</span><br>
<span class="quotelev2">&gt;&gt; + * destruct/release the list object itself
</span><br>
<span class="quotelev2">&gt;&gt; + *
</span><br>
<span class="quotelev2">&gt;&gt; + * @param[in] list List to destruct or release
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +#define OPAL_LIST_DESTRUCT(list)                                \
</span><br>
<span class="quotelev2">&gt;&gt; +    do {                                                        \
</span><br>
<span class="quotelev2">&gt;&gt; +        opal_list_item_t *it;                                   \
</span><br>
<span class="quotelev2">&gt;&gt; +        while (NULL != (it = opal_list_remove_first(list))) {   \
</span><br>
<span class="quotelev2">&gt;&gt; +            OBJ_RELEASE(it);                                    \
</span><br>
<span class="quotelev2">&gt;&gt; +        }                                                       \
</span><br>
<span class="quotelev2">&gt;&gt; +        OBJ_DESTRUCT(list);                                     \
</span><br>
<span class="quotelev2">&gt;&gt; +    } while(0);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#define OPAL_LIST_RELEASE(list)                                 \
</span><br>
<span class="quotelev2">&gt;&gt; +    do {                                                        \
</span><br>
<span class="quotelev2">&gt;&gt; +        opal_list_item_t *it;                                   \
</span><br>
<span class="quotelev2">&gt;&gt; +        while (NULL != (it = opal_list_remove_first(list))) {   \
</span><br>
<span class="quotelev2">&gt;&gt; +            OBJ_RELEASE(it);                                    \
</span><br>
<span class="quotelev2">&gt;&gt; +        }                                                       \
</span><br>
<span class="quotelev2">&gt;&gt; +        OBJ_RELEASE(list);                                      \
</span><br>
<span class="quotelev2">&gt;&gt; +    } while(0);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /**
</span><br>
<span class="quotelev2">&gt;&gt;  * Loop over a list.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="12107.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class"</a>
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
