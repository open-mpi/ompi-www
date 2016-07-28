<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 08:54:06 2009" -->
<!-- isoreceived="20091111135406" -->
<!-- sent="Wed, 11 Nov 2009 05:54:00 -0800" -->
<!-- isosent="20091111135400" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330" -->
<!-- id="AB9EE587-549F-4BFC-8600-7F16ED013D46_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200911111038.nABAcQ6K026509_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 08:54:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0356.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>Previous message:</strong> <a href="0354.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1329)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0356.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>Reply:</strong> <a href="0356.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>Reply:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about HWLOC_UNSUPPORTED_SYS?
<br>
<p>On Nov 11, 2009, at 2:38 AM, &lt;bgoglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2009-11-11 05:38:26 EST (Wed, 11 Nov 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 1330
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1330">https://svn.open-mpi.org/trac/hwloc/changeset/1330</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add hwloc_topology_get_support()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This also defines UNSUPPORTED_SYS on not supported systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We should report the supported flags in lstopo -v -
</span><br>
<span class="quotelev1">&gt; but I don't want to modify all linux/tests/*.output now
</span><br>
<span class="quotelev1">&gt; since some flags may change in the near future.
</span><br>
<span class="quotelev1">&gt; So we'll see later.
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/configure.ac    |     1 +
</span><br>
<span class="quotelev1">&gt;    trunk/doc/Makefile.am |     1 +
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc.h |    20 ++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;    trunk/src/topology.c  |    27 +++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;    4 files changed, 49 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/configure.ac  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/configure.ac  2009-11-11 05:38:26 EST (Wed, 11 Nov 2009)
</span><br>
<span class="quotelev1">&gt; @@ -203,6 +203,7 @@
</span><br>
<span class="quotelev1">&gt;      ;;
</span><br>
<span class="quotelev1">&gt;    *)
</span><br>
<span class="quotelev1">&gt;      AC_MSG_RESULT([Unsupported! ($target)])
</span><br>
<span class="quotelev1">&gt; +    AC_DEFINE(UNSUPPORTED_SYS, 1, [Define to 1 on unsupported  
</span><br>
<span class="quotelev1">&gt; systems])
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; AC_MSG_WARN 
</span><br>
<span class="quotelev1">&gt; ([***********************************************************])
</span><br>
<span class="quotelev1">&gt;      AC_MSG_WARN([*** hwloc does not support this system.])
</span><br>
<span class="quotelev1">&gt;      AC_MSG_WARN([*** hwloc will *attempt* to build (but it may not  
</span><br>
<span class="quotelev1">&gt; work).])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/doc/Makefile.am
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/doc/Makefile.am       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/doc/Makefile.am       2009-11-11 05:38:26 EST (Wed, 11 Nov  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -299,6 +299,7 @@
</span><br>
<span class="quotelev1">&gt;         $(DOX_MAN_DIR)/man3/hwloc_topology_export_xml.3 \
</span><br>
<span class="quotelev1">&gt;          $(DOX_MAN_DIR)/man3/hwloc_topology_flags_e.3 \
</span><br>
<span class="quotelev1">&gt;          $(DOX_MAN_DIR)/man3/hwloc_topology_get_depth.3 \
</span><br>
<span class="quotelev1">&gt; +        $(DOX_MAN_DIR)/man3/hwloc_topology_get_support.3 \
</span><br>
<span class="quotelev1">&gt;          $(DOX_MAN_DIR)/man3/ 
</span><br>
<span class="quotelev1">&gt; hwloc_topology_ignore_all_keep_structure.3 \
</span><br>
<span class="quotelev1">&gt;          $(DOX_MAN_DIR)/man3/hwloc_topology_ignore_type.3 \
</span><br>
<span class="quotelev1">&gt;          $(DOX_MAN_DIR)/man3/ 
</span><br>
<span class="quotelev1">&gt; hwloc_topology_ignore_type_keep_structure.3 \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/include/hwloc.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/include/hwloc.h       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/include/hwloc.h       2009-11-11 05:38:26 EST (Wed, 11 Nov  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -360,6 +360,26 @@
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  extern int hwloc_topology_set_xml(hwloc_topology_t __hwloc_restrict  
</span><br>
<span class="quotelev1">&gt; topology, const char * __hwloc_restrict xmlpath);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +/** \brief Flags describing the actual OS support for this topology.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Flags are retrieved with hwloc_topology_get_support().
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +enum hwloc_topology_support_flags_e {
</span><br>
<span class="quotelev1">&gt; +  /* \brief Topology discovery is supported. */
</span><br>
<span class="quotelev1">&gt; +  HWLOC_SUPPORT_DISCOVERY = (1&lt;&lt;0),
</span><br>
<span class="quotelev1">&gt; +  /* \brief Binding a process is supported. */
</span><br>
<span class="quotelev1">&gt; +  HWLOC_SUPPORT_SET_PROC_CPUBIND = (1&lt;&lt;1),
</span><br>
<span class="quotelev1">&gt; +  /* \brief Binding a thread is supported. */
</span><br>
<span class="quotelev1">&gt; +  HWLOC_SUPPORT_SET_THREAD_CPUBIND = (1&lt;&lt;2),
</span><br>
<span class="quotelev1">&gt; +  /* \brief Getting the binding of a process is supported. */
</span><br>
<span class="quotelev1">&gt; +  HWLOC_SUPPORT_GET_PROC_CPUBIND = (1&lt;&lt;3),
</span><br>
<span class="quotelev1">&gt; +  /* \brief Getting the binding of a thread is supported. */
</span><br>
<span class="quotelev1">&gt; +  HWLOC_SUPPORT_GET_THREAD_CPUBIND = (1&lt;&lt;4),
</span><br>
<span class="quotelev1">&gt; +};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/** \brief Retrieve the OR'ed flags of topology support. */
</span><br>
<span class="quotelev1">&gt; +extern int hwloc_topology_get_support(hwloc_topology_t  
</span><br>
<span class="quotelev1">&gt; __hwloc_restrict topology, unsigned long *flags);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /** @} */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/src/topology.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/src/topology.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/src/topology.c        2009-11-11 05:38:26 EST (Wed, 11 Nov  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -1611,3 +1611,30 @@
</span><br>
<span class="quotelev1">&gt;      assert(obj-&gt;type == HWLOC_OBJ_PROC);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +int
</span><br>
<span class="quotelev1">&gt; +hwloc_topology_get_support(struct hwloc_topology * topology,  
</span><br>
<span class="quotelev1">&gt; unsigned long *flagsp)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +  unsigned long flags = 0;
</span><br>
<span class="quotelev1">&gt; +#ifndef UNSUPPORTED_SYS
</span><br>
<span class="quotelev1">&gt; +  flags |= HWLOC_SUPPORT_DISCOVERY;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  /* if not is_thissystem, set_cpubind is fake
</span><br>
<span class="quotelev1">&gt; +   * and get_cpubind returns the whole system cpuset,
</span><br>
<span class="quotelev1">&gt; +   * so don't report that set/get_cpubind as supported
</span><br>
<span class="quotelev1">&gt; +   */
</span><br>
<span class="quotelev1">&gt; +  if (topology-&gt;is_thissystem) {
</span><br>
<span class="quotelev1">&gt; +    if (topology-&gt;set_proc_cpubind)
</span><br>
<span class="quotelev1">&gt; +      flags |= HWLOC_SUPPORT_SET_PROC_CPUBIND;
</span><br>
<span class="quotelev1">&gt; +    if (topology-&gt;set_thread_cpubind)
</span><br>
<span class="quotelev1">&gt; +      flags |= HWLOC_SUPPORT_SET_THREAD_CPUBIND;
</span><br>
<span class="quotelev1">&gt; +    if (topology-&gt;get_proc_cpubind)
</span><br>
<span class="quotelev1">&gt; +      flags |= HWLOC_SUPPORT_GET_PROC_CPUBIND;
</span><br>
<span class="quotelev1">&gt; +    if (topology-&gt;get_thread_cpubind)
</span><br>
<span class="quotelev1">&gt; +      flags |= HWLOC_SUPPORT_GET_THREAD_CPUBIND;
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  *flagsp = flags;
</span><br>
<span class="quotelev1">&gt; +  return 0;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0356.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>Previous message:</strong> <a href="0354.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1329)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0356.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>Reply:</strong> <a href="0356.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
<li><strong>Reply:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1330"</a>
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
