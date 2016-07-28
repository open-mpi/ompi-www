<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 17:13:47 2013" -->
<!-- isoreceived="20130204221347" -->
<!-- sent="Mon, 4 Feb 2013 17:13:42 -0500" -->
<!-- isosent="20130204221342" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class" -->
<!-- id="CAMJJpkXi=3W-9esNMv9SfrdJOc1h0WmOJKNDohFKY-3C53q2bA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130204194257.AD3BD15FB70_at_tiger.crest.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-04 17:13:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12106.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class"</a>
<li><strong>Reply:</strong> <a href="12106.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>There are valid reasons why we decided not to add such macros.
<br>
<p>Adding elements to a list do not increase the element ref count.
<br>
Similarly, removing an element from a list does not decrease its
<br>
refcount either. Thus, there is no obvious link between the refcount
<br>
of the elements in a list and the list itself. As a result, we can not
<br>
make the assumption that decreasing the refcount by one is correct,
<br>
and this even when we plan to get rid of one of our lists.
<br>
<p>In addition, the list can contain elements that have been
<br>
OBJ_CONSTRUCT in which case this macro will lead to unexpected
<br>
behaviors.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Mon, Feb 4, 2013 at 2:42 PM,  &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2013-02-04 14:42:57 EST (Mon, 04 Feb 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 28029
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/28029">https://svn.open-mpi.org/trac/ompi/changeset/28029</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; The opal_list_t destructor doesn't release the items on the list prior to destructing or releasing it. Provide two convenience macros for doing so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/opal/class/opal_list.h |    26 ++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;    1 files changed, 26 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/class/opal_list.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/class/opal_list.h        Mon Feb  4 12:36:55 2013        (r28028)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/class/opal_list.h        2013-02-04 14:42:57 EST (Mon, 04 Feb 2013)      (r28029)
</span><br>
<span class="quotelev1">&gt; @@ -160,6 +160,32 @@
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  typedef struct opal_list_t opal_list_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +/** Cleanly destruct a list
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * The opal_list_t destructor doesn't release the items on the
</span><br>
<span class="quotelev1">&gt; + * list - so provide two convenience macros that do so and then
</span><br>
<span class="quotelev1">&gt; + * destruct/release the list object itself
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * @param[in] list List to destruct or release
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +#define OPAL_LIST_DESTRUCT(list)                                \
</span><br>
<span class="quotelev1">&gt; +    do {                                                        \
</span><br>
<span class="quotelev1">&gt; +        opal_list_item_t *it;                                   \
</span><br>
<span class="quotelev1">&gt; +        while (NULL != (it = opal_list_remove_first(list))) {   \
</span><br>
<span class="quotelev1">&gt; +            OBJ_RELEASE(it);                                    \
</span><br>
<span class="quotelev1">&gt; +        }                                                       \
</span><br>
<span class="quotelev1">&gt; +        OBJ_DESTRUCT(list);                                     \
</span><br>
<span class="quotelev1">&gt; +    } while(0);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#define OPAL_LIST_RELEASE(list)                                 \
</span><br>
<span class="quotelev1">&gt; +    do {                                                        \
</span><br>
<span class="quotelev1">&gt; +        opal_list_item_t *it;                                   \
</span><br>
<span class="quotelev1">&gt; +        while (NULL != (it = opal_list_remove_first(list))) {   \
</span><br>
<span class="quotelev1">&gt; +            OBJ_RELEASE(it);                                    \
</span><br>
<span class="quotelev1">&gt; +        }                                                       \
</span><br>
<span class="quotelev1">&gt; +        OBJ_RELEASE(list);                                      \
</span><br>
<span class="quotelev1">&gt; +    } while(0);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt;   * Loop over a list.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="12103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12106.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class"</a>
<li><strong>Reply:</strong> <a href="12106.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class"</a>
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
