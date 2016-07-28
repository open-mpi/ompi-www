<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 20 15:47:09 2014" -->
<!-- isoreceived="20140520194709" -->
<!-- sent="Tue, 20 May 2014 15:47:07 -0400" -->
<!-- isosent="20140520194707" -->
<!-- name="Tim Mattox" -->
<!-- email="tmattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1" -->
<!-- id="CALwSR2XqOaWUbe-1OqMk5Kr74M7hOEDG=u6Q_8N5RDQQRnFn+g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20140520193418.D05B715F83A_at_tiger.crest.iu.edu" -->
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
<strong>From:</strong> Tim Mattox (<em>tmattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-20 15:47:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14833.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="14831.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4645: Move r31786, 31829, r31830, r31833, r31834, r31835 to v1.8 branch (bml/r2 : fix mca_bml_r2_del_procs()) (was: Move r31786, 31829, r31830 to v1.8 branch (bml/r2 : fix mca_bml_r2_del_procs()))"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14833.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Reply:</strong> <a href="14833.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
I think the strings in the two opal_output() calls should also
<br>
be updated from &quot;open&quot; to &quot;init&quot;:  &quot;mca_pml_ob1_component_init: ...&quot;
<br>
<p><p>On Tue, May 20, 2014 at 3:34 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev1">&gt; Date: 2014-05-20 15:34:18 EDT (Tue, 20 May 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 31838
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31838">https://svn.open-mpi.org/trac/ompi/changeset/31838</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Move the allocator initialization from open to init. This clean
</span><br>
<span class="quotelev1">&gt; a memory leak. Similar changes shuld be applied to all the
</span><br>
<span class="quotelev1">&gt; other PML that are copies of OB1. This patch is related to
</span><br>
<span class="quotelev1">&gt; #4653.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/ob1/pml_ob1_component.c |    32
</span><br>
<span class="quotelev1">&gt; ++++++++++++++++----------------
</span><br>
<span class="quotelev1">&gt;    1 files changed, 16 insertions(+), 16 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_component.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_component.c  Tue May 20 12:32:41 2014
</span><br>
<span class="quotelev1">&gt;      (r31837)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_component.c  2014-05-20 15:34:18 EDT
</span><br>
<span class="quotelev1">&gt; (Tue, 20 May 2014)      (r31838)
</span><br>
<span class="quotelev1">&gt; @@ -217,25 +217,9 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static int mca_pml_ob1_component_open(void)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    mca_allocator_base_component_t* allocator_component;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;      mca_pml_ob1_output = opal_output_open(NULL);
</span><br>
<span class="quotelev1">&gt;      opal_output_set_verbosity(mca_pml_ob1_output, mca_pml_ob1_verbose);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    allocator_component = mca_allocator_component_lookup(
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1.allocator_name );
</span><br>
<span class="quotelev1">&gt; -    if(NULL == allocator_component) {
</span><br>
<span class="quotelev1">&gt; -        opal_output(0, &quot;mca_pml_ob1_component_open: can't find allocator:
</span><br>
<span class="quotelev1">&gt; %s\n&quot;, mca_pml_ob1.allocator_name);
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    mca_pml_ob1.allocator = allocator_component-&gt;allocator_init(true,
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  mca_pml_ob1_seg_alloc,
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  mca_pml_ob1_seg_free, NULL);
</span><br>
<span class="quotelev1">&gt; -    if(NULL == mca_pml_ob1.allocator) {
</span><br>
<span class="quotelev1">&gt; -        opal_output(0, &quot;mca_pml_ob1_component_open: unable to initialize
</span><br>
<span class="quotelev1">&gt; allocator\n&quot;);
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;      mca_pml_ob1.enabled = false;
</span><br>
<span class="quotelev1">&gt;      return mca_base_framework_open(&amp;ompi_bml_base_framework, 0);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -259,6 +243,8 @@
</span><br>
<span class="quotelev1">&gt;                              bool enable_progress_threads,
</span><br>
<span class="quotelev1">&gt;                              bool enable_mpi_threads )
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; +    mca_allocator_base_component_t* allocator_component;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      opal_output_verbose( 10, mca_pml_ob1_output,
</span><br>
<span class="quotelev1">&gt;                           &quot;in ob1, my priority is %d\n&quot;,
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1.priority);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -268,6 +254,20 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      *priority = mca_pml_ob1.priority;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    allocator_component = mca_allocator_component_lookup(
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1.allocator_name );
</span><br>
<span class="quotelev1">&gt; +    if(NULL == allocator_component) {
</span><br>
<span class="quotelev1">&gt; +        opal_output(0, &quot;mca_pml_ob1_component_open: can't find allocator:
</span><br>
<span class="quotelev1">&gt; %s\n&quot;, mca_pml_ob1.allocator_name);
</span><br>
<span class="quotelev1">&gt; +        return NULL;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    mca_pml_ob1.allocator = allocator_component-&gt;allocator_init(true,
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  mca_pml_ob1_seg_alloc,
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  mca_pml_ob1_seg_free, NULL);
</span><br>
<span class="quotelev1">&gt; +    if(NULL == mca_pml_ob1.allocator) {
</span><br>
<span class="quotelev1">&gt; +        opal_output(0, &quot;mca_pml_ob1_component_open: unable to initialize
</span><br>
<span class="quotelev1">&gt; allocator\n&quot;);
</span><br>
<span class="quotelev1">&gt; +        return NULL;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      if(OMPI_SUCCESS != mca_bml_base_init( enable_progress_threads,
</span><br>
<span class="quotelev1">&gt;                                            enable_mpi_threads)) {
</span><br>
<span class="quotelev1">&gt;          return NULL;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - tmattox_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14832/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14833.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="14831.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4645: Move r31786, 31829, r31830, r31833, r31834, r31835 to v1.8 branch (bml/r2 : fix mca_bml_r2_del_procs()) (was: Move r31786, 31829, r31830 to v1.8 branch (bml/r2 : fix mca_bml_r2_del_procs()))"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14833.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Reply:</strong> <a href="14833.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r31838 - trunk/ompi/mca/pml/ob1"</a>
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
