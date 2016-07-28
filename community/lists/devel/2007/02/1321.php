<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 28 14:27:16 2007" -->
<!-- isoreceived="20070228192716" -->
<!-- sent="Wed, 28 Feb 2007 14:27:10 -0500" -->
<!-- isosent="20070228192710" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841" -->
<!-- id="ea86ce220702281127t211ac08ah208e9a76dbf60ef0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200702281251.l1SCpuod016157_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-28 14:27:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1322.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841"</a>
<li><strong>Previous message:</strong> <a href="1320.php">Brian Barrett: "Re: [OMPI devel] comment on wiki/PrintfCodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1322.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841"</a>
<li><strong>Reply:</strong> <a href="1322.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This breaks the build on my x86 OS X laptop with the following error:
<br>
.....lots of output....then...
<br>
/usr/bin/ld: multiple definitions of symbol _ompi_mtl_base_selected_component
<br>
.libs/pml_cm_component.o definition of
<br>
_ompi_mtl_base_selected_component in section (__DATA,__common)
<br>
/Users/tmattox/FOSS/OMPI/ompi-tmp/timattox-sm-coll/ompi/.libs/libmpi.dylib(single
<br>
module) definition of _ompi_mtl_base_selected_component
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [mca_pml_cm.la] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>If I revert r13841, it compiles as normal.
<br>
<p>On 2/28/07, hpcstork_at_[hidden] &lt;hpcstork_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: hpcstork
</span><br>
<span class="quotelev1">&gt; Date: 2007-02-28 07:51:55 EST (Wed, 28 Feb 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 13841
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/mtl/base/base.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/cm/pml_cm_component.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; - proper export symbols that are required by other components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mtl/base/base.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mtl/base/base.h      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mtl/base/base.h      2007-02-28 07:51:55 EST (Wed, 28 Feb 2007)
</span><br>
<span class="quotelev1">&gt; @@ -33,6 +33,8 @@
</span><br>
<span class="quotelev1">&gt;  extern &quot;C&quot; {
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +OMPI_DECLSPEC mca_mtl_base_component_t* ompi_mtl_base_selected_component;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  OMPI_DECLSPEC int ompi_mtl_base_open(void);
</span><br>
<span class="quotelev1">&gt;  OMPI_DECLSPEC int ompi_mtl_base_select(bool enable_progress_threads,
</span><br>
<span class="quotelev1">&gt;                                         bool enable_mpi_threads);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/cm/pml_cm_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/cm/pml_cm_component.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/cm/pml_cm_component.c    2007-02-28 07:51:55 EST (Wed, 28 Feb 2007)
</span><br>
<span class="quotelev1">&gt; @@ -27,7 +27,6 @@
</span><br>
<span class="quotelev1">&gt;  static mca_pml_base_module_t* mca_pml_cm_component_init( int* priority,
</span><br>
<span class="quotelev1">&gt;                              bool enable_progress_threads, bool enable_mpi_threads);
</span><br>
<span class="quotelev1">&gt;  static int mca_pml_cm_component_fini(void);
</span><br>
<span class="quotelev1">&gt; -extern mca_mtl_base_component_t* ompi_mtl_base_selected_component;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mca_pml_base_component_1_0_0_t mca_pml_cm_component = {
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1322.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841"</a>
<li><strong>Previous message:</strong> <a href="1320.php">Brian Barrett: "Re: [OMPI devel] comment on wiki/PrintfCodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1322.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841"</a>
<li><strong>Reply:</strong> <a href="1322.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841"</a>
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
