<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 28 15:27:37 2007" -->
<!-- isoreceived="20070228202737" -->
<!-- sent="Wed, 28 Feb 2007 15:27:29 -0500" -->
<!-- isosent="20070228202729" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841" -->
<!-- id="ea86ce220702281227t3f170eady2249707b3c487174_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ea86ce220702281127t211ac08ah208e9a76dbf60ef0_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-02-28 15:27:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/03/1323.php">Josh Hursey: "[OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1321.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841"</a>
<li><strong>In reply to:</strong> <a href="1321.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI - I fixed it in r13853 by adding a missing &quot;extern&quot; keyword.
<br>
<p>On 2/28/07, Tim Mattox &lt;timattox_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; This breaks the build on my x86 OS X laptop with the following error:
</span><br>
<span class="quotelev1">&gt; .....lots of output....then...
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: multiple definitions of symbol _ompi_mtl_base_selected_component
</span><br>
<span class="quotelev1">&gt; .libs/pml_cm_component.o definition of
</span><br>
<span class="quotelev1">&gt; _ompi_mtl_base_selected_component in section (__DATA,__common)
</span><br>
<span class="quotelev1">&gt; /Users/tmattox/FOSS/OMPI/ompi-tmp/timattox-sm-coll/ompi/.libs/libmpi.dylib(single
</span><br>
<span class="quotelev1">&gt; module) definition of _ompi_mtl_base_selected_component
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mca_pml_cm.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I revert r13841, it compiles as normal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/28/07, hpcstork_at_[hidden] &lt;hpcstork_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: hpcstork
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2007-02-28 07:51:55 EST (Wed, 28 Feb 2007)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 13841
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified:
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/mtl/base/base.h
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/mca/pml/cm/pml_cm_component.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; - proper export symbols that are required by other components.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/mtl/base/base.h
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/mtl/base/base.h      (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/mtl/base/base.h      2007-02-28 07:51:55 EST (Wed, 28 Feb 2007)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -33,6 +33,8 @@
</span><br>
<span class="quotelev2">&gt; &gt;  extern &quot;C&quot; {
</span><br>
<span class="quotelev2">&gt; &gt;  #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +OMPI_DECLSPEC mca_mtl_base_component_t* ompi_mtl_base_selected_component;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;  OMPI_DECLSPEC int ompi_mtl_base_open(void);
</span><br>
<span class="quotelev2">&gt; &gt;  OMPI_DECLSPEC int ompi_mtl_base_select(bool enable_progress_threads,
</span><br>
<span class="quotelev2">&gt; &gt;                                         bool enable_mpi_threads);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/pml/cm/pml_cm_component.c
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/pml/cm/pml_cm_component.c    (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/pml/cm/pml_cm_component.c    2007-02-28 07:51:55 EST (Wed, 28 Feb 2007)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -27,7 +27,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;  static mca_pml_base_module_t* mca_pml_cm_component_init( int* priority,
</span><br>
<span class="quotelev2">&gt; &gt;                              bool enable_progress_threads, bool enable_mpi_threads);
</span><br>
<span class="quotelev2">&gt; &gt;  static int mca_pml_cm_component_fini(void);
</span><br>
<span class="quotelev2">&gt; &gt; -extern mca_mtl_base_component_t* ompi_mtl_base_selected_component;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  mca_pml_base_component_1_0_0_t mca_pml_cm_component = {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/03/1323.php">Josh Hursey: "[OMPI devel] Aggregate MCA Parameter Sets"</a>
<li><strong>Previous message:</strong> <a href="1321.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841"</a>
<li><strong>In reply to:</strong> <a href="1321.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r13841"</a>
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
