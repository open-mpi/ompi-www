<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 20 16:11:50 2014" -->
<!-- isoreceived="20140520201150" -->
<!-- sent="Tue, 20 May 2014 13:11:49 -0700" -->
<!-- isosent="20140520201149" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1" -->
<!-- id="CAMJJpkX5pkyQfgmxa80+D+EwA6e7458+SU2OTfsuQiHD4rrkWQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALwSR2XqOaWUbe-1OqMk5Kr74M7hOEDG=u6Q_8N5RDQQRnFn+g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-20 16:11:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14834.php">Rolf vandeVaart: "[OMPI devel] RFC: [UPDATE] Add some basic CUDA-aware support to reductions"</a>
<li><strong>Previous message:</strong> <a href="14832.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>In reply to:</strong> <a href="14832.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for noticing. It is now fixed and scheduled attached to the CMR.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Tue, May 20, 2014 at 12:47 PM, Tim Mattox &lt;tmattox_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; I think the strings in the two opal_output() calls should also
</span><br>
<span class="quotelev1">&gt; be updated from &quot;open&quot; to &quot;init&quot;:  &quot;mca_pml_ob1_component_init: ...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 20, 2014 at 3:34 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2014-05-20 15:34:18 EDT (Tue, 20 May 2014)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 31838
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31838">https://svn.open-mpi.org/trac/ompi/changeset/31838</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Move the allocator initialization from open to init. This clean
</span><br>
<span class="quotelev2">&gt;&gt; a memory leak. Similar changes shuld be applied to all the
</span><br>
<span class="quotelev2">&gt;&gt; other PML that are copies of OB1. This patch is related to
</span><br>
<span class="quotelev2">&gt;&gt; #4653.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/pml/ob1/pml_ob1_component.c |    32
</span><br>
<span class="quotelev2">&gt;&gt; ++++++++++++++++----------------
</span><br>
<span class="quotelev2">&gt;&gt;    1 files changed, 16 insertions(+), 16 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_component.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_component.c  Tue May 20 12:32:41 2014
</span><br>
<span class="quotelev2">&gt;&gt; (r31837)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_component.c  2014-05-20 15:34:18 EDT
</span><br>
<span class="quotelev2">&gt;&gt; (Tue, 20 May 2014)      (r31838)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -217,25 +217,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  static int mca_pml_ob1_component_open(void)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; -    mca_allocator_base_component_t* allocator_component;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;      mca_pml_ob1_output = opal_output_open(NULL);
</span><br>
<span class="quotelev2">&gt;&gt;      opal_output_set_verbosity(mca_pml_ob1_output, mca_pml_ob1_verbose);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    allocator_component = mca_allocator_component_lookup(
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1.allocator_name );
</span><br>
<span class="quotelev2">&gt;&gt; -    if(NULL == allocator_component) {
</span><br>
<span class="quotelev2">&gt;&gt; -        opal_output(0, &quot;mca_pml_ob1_component_open: can't find allocator:
</span><br>
<span class="quotelev2">&gt;&gt; %s\n&quot;, mca_pml_ob1.allocator_name);
</span><br>
<span class="quotelev2">&gt;&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    mca_pml_ob1.allocator = allocator_component-&gt;allocator_init(true,
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_seg_alloc,
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_seg_free, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; -    if(NULL == mca_pml_ob1.allocator) {
</span><br>
<span class="quotelev2">&gt;&gt; -        opal_output(0, &quot;mca_pml_ob1_component_open: unable to initialize
</span><br>
<span class="quotelev2">&gt;&gt; allocator\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;      mca_pml_ob1.enabled = false;
</span><br>
<span class="quotelev2">&gt;&gt;      return mca_base_framework_open(&amp;ompi_bml_base_framework, 0);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -259,6 +243,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;                              bool enable_progress_threads,
</span><br>
<span class="quotelev2">&gt;&gt;                              bool enable_mpi_threads )
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; +    mca_allocator_base_component_t* allocator_component;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;      opal_output_verbose( 10, mca_pml_ob1_output,
</span><br>
<span class="quotelev2">&gt;&gt;                           &quot;in ob1, my priority is %d\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1.priority);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -268,6 +254,20 @@
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;      *priority = mca_pml_ob1.priority;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    allocator_component = mca_allocator_component_lookup(
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1.allocator_name );
</span><br>
<span class="quotelev2">&gt;&gt; +    if(NULL == allocator_component) {
</span><br>
<span class="quotelev2">&gt;&gt; +        opal_output(0, &quot;mca_pml_ob1_component_open: can't find allocator:
</span><br>
<span class="quotelev2">&gt;&gt; %s\n&quot;, mca_pml_ob1.allocator_name);
</span><br>
<span class="quotelev2">&gt;&gt; +        return NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    mca_pml_ob1.allocator = allocator_component-&gt;allocator_init(true,
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_seg_alloc,
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_seg_free, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +    if(NULL == mca_pml_ob1.allocator) {
</span><br>
<span class="quotelev2">&gt;&gt; +        opal_output(0, &quot;mca_pml_ob1_component_open: unable to initialize
</span><br>
<span class="quotelev2">&gt;&gt; allocator\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +        return NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;      if(OMPI_SUCCESS != mca_bml_base_init( enable_progress_threads,
</span><br>
<span class="quotelev2">&gt;&gt;                                            enable_mpi_threads)) {
</span><br>
<span class="quotelev2">&gt;&gt;          return NULL;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - tmattox_at_[hidden]
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14832.php">http://www.open-mpi.org/community/lists/devel/2014/05/14832.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14834.php">Rolf vandeVaart: "[OMPI devel] RFC: [UPDATE] Add some basic CUDA-aware support to reductions"</a>
<li><strong>Previous message:</strong> <a href="14832.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>In reply to:</strong> <a href="14832.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1"</a>
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
