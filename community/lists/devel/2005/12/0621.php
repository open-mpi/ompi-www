<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 16 06:12:05 2005" -->
<!-- isoreceived="20051216111205" -->
<!-- sent="Fri, 16 Dec 2005 06:11:57 -0500" -->
<!-- isosent="20051216111157" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Fwd: [PATCH] Update ompi to new OpenIB libibverbs API" -->
<!-- id="485E4CD5-DE45-4C9B-936D-F62A1FBF4514_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="adau0dakkkl.fsf_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-16 06:11:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0622.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="0620.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI -- here's a patch for Open IB from Roland.  Tim/Galen -- can you  
<br>
guys review and commit?
<br>
<p>Thanks!
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Roland Dreier &lt;rdreier_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: December 15, 2005 6:27:22 PM EST
</span><br>
<span class="quotelev1">&gt; To: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;, devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [PATCH] Update ompi to new OpenIB libibverbs API
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The libibverbs code in OpenIB svn (which will be 1.0-rc5 shortly) has
</span><br>
<span class="quotelev1">&gt; changed the interface for getting a list of the IB devices that are
</span><br>
<span class="quotelev1">&gt; available.  The following patch makes Open MPI work with both the old
</span><br>
<span class="quotelev1">&gt; and new interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the breakage but we were really forced into this change for
</span><br>
<span class="quotelev1">&gt; thread-safety and hotplug handling reasons.  I consider the libibverbs
</span><br>
<span class="quotelev1">&gt; API semi-frozen now -- there should only be additions that don't
</span><br>
<span class="quotelev1">&gt; affect consumers before the release of libibverbs 1.0 with a stable
</span><br>
<span class="quotelev1">&gt; API.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Signed-off-by: Roland Dreier &lt;rolandd_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/btl_openib_component.c	(revision 8520)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/btl_openib_component.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -304,6 +304,7 @@ mca_btl_base_module_t** mca_btl_openib_c
</span><br>
<span class="quotelev1">&gt;      num_devs = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#ifndef OMPI_MCA_BTL_OPENIB_HAVE_DEVICE_LIST
</span><br>
<span class="quotelev1">&gt;      /* Determine the number of hca's available on the host */
</span><br>
<span class="quotelev1">&gt;      dev_list = ibv_get_devices();
</span><br>
<span class="quotelev1">&gt;      if (NULL == dev_list) {
</span><br>
<span class="quotelev1">&gt; @@ -316,6 +317,9 @@ mca_btl_base_module_t** mca_btl_openib_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      dlist_for_each_data(dev_list, ib_dev, struct ibv_device)
</span><br>
<span class="quotelev1">&gt;          num_devs++;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +    ib_devs = ibv_get_device_list(&amp;num_devs);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if(0 == num_devs) {
</span><br>
<span class="quotelev1">&gt;          mca_btl_base_error_no_nics(&quot;OpenIB&quot;, &quot;HCA&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -324,6 +328,7 @@ mca_btl_base_module_t** mca_btl_openib_c
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#ifndef OMPI_MCA_BTL_OPENIB_HAVE_DEVICE_LIST
</span><br>
<span class="quotelev1">&gt;      /* Allocate space for the ib devices */
</span><br>
<span class="quotelev1">&gt;      ib_devs = (struct ibv_device**) malloc(num_devs * sizeof 
</span><br>
<span class="quotelev1">&gt; (struct ibv_dev*));
</span><br>
<span class="quotelev1">&gt;          if(NULL == ib_devs) {
</span><br>
<span class="quotelev1">&gt; @@ -336,7 +341,7 @@ mca_btl_base_module_t** mca_btl_openib_c
</span><br>
<span class="quotelev1">&gt;      i = 0;
</span><br>
<span class="quotelev1">&gt;      dlist_for_each_data(dev_list, ib_dev, struct ibv_device)
</span><br>
<span class="quotelev1">&gt;          ib_devs[i++] =  ib_dev;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /** We must loop through all the hca id's, get there handles and
</span><br>
<span class="quotelev1">&gt;          for each hca we query the number of ports on the hca and  
</span><br>
<span class="quotelev1">&gt; set up
</span><br>
<span class="quotelev1">&gt; @@ -447,7 +452,11 @@ mca_btl_base_module_t** mca_btl_openib_c
</span><br>
<span class="quotelev1">&gt;          OBJ_CONSTRUCT(&amp;openib_btl-&gt;recv_free_max, ompi_free_list_t);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if(mca_btl_openib_module_init(openib_btl) != OMPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt; +#ifdef OMPI_MCA_BTL_OPENIB_HAVE_DEVICE_LIST
</span><br>
<span class="quotelev1">&gt; +	    ibv_free_device_list(ib_devs);
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;              free(ib_devs);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;              return NULL;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -540,7 +549,11 @@ mca_btl_base_module_t** mca_btl_openib_c
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_modex_send();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      *num_btl_modules = mca_btl_openib_component.ib_num_btls;
</span><br>
<span class="quotelev1">&gt; +#ifdef OMPI_MCA_BTL_OPENIB_HAVE_DEVICE_LIST
</span><br>
<span class="quotelev1">&gt; +    ibv_free_device_list(ib_devs);
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;      free(ib_devs);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;      return btls;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: config/ompi_check_openib.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/ompi_check_openib.m4	(revision 8520)
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_check_openib.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -122,6 +122,13 @@ AC_DEFUN([OMPI_CHECK_OPENIB],[
</span><br>
<span class="quotelev1">&gt;                         [$ompi_check_openib_have_srq],
</span><br>
<span class="quotelev1">&gt;  		       [Whether install of OpenIB includes shared receive queue  
</span><br>
<span class="quotelev1">&gt; support])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    AC_CHECK_FUNCS([ibv_get_device_list],
</span><br>
<span class="quotelev1">&gt; +                   [ompi_check_openib_have_device_list=1],
</span><br>
<span class="quotelev1">&gt; +                   [ompi_check_openib_have_device_list=0])
</span><br>
<span class="quotelev1">&gt; +    AC_DEFINE_UNQUOTED([OMPI_MCA_]m4_translit([$1], [a-z], [A-Z]) 
</span><br>
<span class="quotelev1">&gt; [_HAVE_DEVICE_LIST],
</span><br>
<span class="quotelev1">&gt; +                       [$ompi_check_openib_have_device_list],
</span><br>
<span class="quotelev1">&gt; +		       [Whether install of OpenIB includes ibv_get_device_list  
</span><br>
<span class="quotelev1">&gt; API])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      CPPFLAGS=&quot;$ompi_check_openib_$1_save_CPPFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;      LDFLAGS=&quot;$ompi_check_openib_$1_save_LDFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;      LIBS=&quot;$ompi_check_openib_$1_save_LIBS&quot;
</span><br>
<p><p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0622.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="0620.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
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
