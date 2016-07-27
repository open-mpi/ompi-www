<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 06:57:49 2009" -->
<!-- isoreceived="20091008105749" -->
<!-- sent="Thu, 8 Oct 2009 06:57:43 -0400" -->
<!-- isosent="20091008105743" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119" -->
<!-- id="EA178C84-9567-4BD9-B93B-402621F004AE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200910080927.n989RmJQ008102_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-08 06:57:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0157.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
<li><strong>Previous message:</strong> <a href="0155.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1117)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0157.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
<li><strong>Reply:</strong> <a href="0157.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this what you had in mind?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/changeset/1120">https://svn.open-mpi.org/trac/hwloc/changeset/1120</a>
<br>
<p><p>On Oct 8, 2009, at 5:27 AM, &lt;bgoglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2009-10-08 05:27:48 EDT (Thu, 08 Oct 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 1119
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1119">https://svn.open-mpi.org/trac/hwloc/changeset/1119</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix some doxygen comments
</span><br>
<span class="quotelev1">&gt; Fix the suffix of the attribute structures
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We should remove hwloc.doxy from the list of files in the
</span><br>
<span class="quotelev1">&gt; documentation and we should not generate a manpage for it
</span><br>
<span class="quotelev1">&gt; (both are empty), but I didn't find how to do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Update README
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/README          |     8 ++++----
</span><br>
<span class="quotelev1">&gt;    trunk/doc/Makefile.am |     8 ++++----
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc.h |    14 +++++++-------
</span><br>
<span class="quotelev1">&gt;    3 files changed, 15 insertions(+), 15 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/README
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
<span class="quotelev1">&gt; --- trunk/README        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/README        2009-10-08 05:27:48 EDT (Thu, 08 Oct 2009)
</span><br>
<span class="quotelev1">&gt; @@ -286,13 +286,13 @@
</span><br>
<span class="quotelev1">&gt;  Because of functional and ideological overlap, these two code bases  
</span><br>
<span class="quotelev1">&gt; and ideas
</span><br>
<span class="quotelev1">&gt;  were merged and released under the name &quot;hwloc&quot; as an Open MPI sub- 
</span><br>
<span class="quotelev1">&gt; project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -PLPA was initially developed by the Open MPI development team as a  
</span><br>
<span class="quotelev1">&gt; sub-project.
</span><br>
<span class="quotelev1">&gt;  libtopology was initially developed by the INRIA Runtime Team- 
</span><br>
<span class="quotelev1">&gt; Project (http://
</span><br>
<span class="quotelev1">&gt;  runtime.bordeaux.inria.fr/) (headed by Raymond Namyst (http://
</span><br>
<span class="quotelev1">&gt; -dept-info.labri.fr/~namyst/)). Both are now deprecated in favor of  
</span><br>
<span class="quotelev1">&gt; the hwloc
</span><br>
<span class="quotelev1">&gt; -Open MPI sub-project.
</span><br>
<span class="quotelev1">&gt; +dept-info.labri.fr/~namyst/)). PLPA was initially developed by the  
</span><br>
<span class="quotelev1">&gt; Open MPI
</span><br>
<span class="quotelev1">&gt; +development team as a sub-project. Both are now deprecated in favor  
</span><br>
<span class="quotelev1">&gt; of hwloc,
</span><br>
<span class="quotelev1">&gt; +which is distributed as an Open MPI sub-project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Generated on Wed Oct 7 17:25:25 2009 for Hardware Locality (hwloc)  
</span><br>
<span class="quotelev1">&gt; by  doxygen
</span><br>
<span class="quotelev1">&gt; +Generated on Thu Oct 8 11:07:01 2009 for Hardware Locality (hwloc)  
</span><br>
<span class="quotelev1">&gt; by  doxygen
</span><br>
<span class="quotelev1">&gt;  1.6.1
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
<span class="quotelev1">&gt; +++ trunk/doc/Makefile.am       2009-10-08 05:27:48 EDT (Thu, 08 Oct  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -242,10 +242,10 @@
</span><br>
<span class="quotelev1">&gt;          $(DOX_MAN_DIR)/man3/hwloc_get_type_or_below_depth.3 \
</span><br>
<span class="quotelev1">&gt;          $(DOX_MAN_DIR)/man3/hwloc_obj.3 \
</span><br>
<span class="quotelev1">&gt;          $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u.3 \
</span><br>
<span class="quotelev1">&gt; -        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_cache_attr_u.3 \
</span><br>
<span class="quotelev1">&gt; -        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_machine_attr_u.3 \
</span><br>
<span class="quotelev1">&gt; -        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_memory_attr_u.3 \
</span><br>
<span class="quotelev1">&gt; -        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_misc_attr_u.3 \
</span><br>
<span class="quotelev1">&gt; +        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_cache_attr_s.3 \
</span><br>
<span class="quotelev1">&gt; +        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_machine_attr_s.3 \
</span><br>
<span class="quotelev1">&gt; +        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_memory_attr_s.3 \
</span><br>
<span class="quotelev1">&gt; +        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_misc_attr_s.3 \
</span><br>
<span class="quotelev1">&gt;          $(DOX_MAN_DIR)/man3/hwloc_obj_cpuset_snprintf.3 \
</span><br>
<span class="quotelev1">&gt;          $(DOX_MAN_DIR)/man3/hwloc_obj_is_in_subtree.3 \
</span><br>
<span class="quotelev1">&gt;          $(DOX_MAN_DIR)/man3/hwloc_obj_snprintf.3 \
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
<span class="quotelev1">&gt; +++ trunk/include/hwloc.h       2009-10-08 05:27:48 EDT (Thu, 08 Oct  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -161,27 +161,27 @@
</span><br>
<span class="quotelev1">&gt;  /** \brief Object type-specific Attributes */
</span><br>
<span class="quotelev1">&gt;  union hwloc_obj_attr_u {
</span><br>
<span class="quotelev1">&gt;    /** \brief Cache-specific Object Attributes */
</span><br>
<span class="quotelev1">&gt; -  struct hwloc_cache_attr_u {
</span><br>
<span class="quotelev1">&gt; +  struct hwloc_cache_attr_s {
</span><br>
<span class="quotelev1">&gt;      unsigned long memory_kB;             /**&lt; \brief Size of cache */
</span><br>
<span class="quotelev1">&gt;      unsigned depth;                      /**&lt; \brief Depth of cache  
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;    } cache;
</span><br>
<span class="quotelev1">&gt;    /** \brief Node-specific Object Attributes */
</span><br>
<span class="quotelev1">&gt; -  struct hwloc_memory_attr_u {
</span><br>
<span class="quotelev1">&gt; +  struct hwloc_memory_attr_s {
</span><br>
<span class="quotelev1">&gt;      unsigned long memory_kB;             /**&lt; \brief Size of memory  
</span><br>
<span class="quotelev1">&gt; node */
</span><br>
<span class="quotelev1">&gt;      unsigned long huge_page_free;        /**&lt; \brief Number of  
</span><br>
<span class="quotelev1">&gt; available huge pages */
</span><br>
<span class="quotelev1">&gt;    } node;
</span><br>
<span class="quotelev1">&gt; -  /**&lt; \brief Machine-specific Object Attributes */
</span><br>
<span class="quotelev1">&gt; -  struct hwloc_machine_attr_u {
</span><br>
<span class="quotelev1">&gt; +  /** \brief Machine-specific Object Attributes */
</span><br>
<span class="quotelev1">&gt; +  struct hwloc_machine_attr_s {
</span><br>
<span class="quotelev1">&gt;      char *dmi_board_vendor;              /**&lt; \brief DMI board  
</span><br>
<span class="quotelev1">&gt; vendor name */
</span><br>
<span class="quotelev1">&gt;      char *dmi_board_name;                /**&lt; \brief DMI board  
</span><br>
<span class="quotelev1">&gt; model name */
</span><br>
<span class="quotelev1">&gt;      unsigned long memory_kB;             /**&lt; \brief Size of memory  
</span><br>
<span class="quotelev1">&gt; node */
</span><br>
<span class="quotelev1">&gt;      unsigned long huge_page_free;        /**&lt; \brief Number of  
</span><br>
<span class="quotelev1">&gt; available huge pages */
</span><br>
<span class="quotelev1">&gt;      unsigned long huge_page_size_kB;     /**&lt; \brief Size of huge  
</span><br>
<span class="quotelev1">&gt; pages */
</span><br>
<span class="quotelev1">&gt;    } machine;
</span><br>
<span class="quotelev1">&gt; -  /**&lt; \brief System-specific Object Attributes */
</span><br>
<span class="quotelev1">&gt; -  struct hwloc_machine_attr_u system;
</span><br>
<span class="quotelev1">&gt; +  /** \brief System-specific Object Attributes */
</span><br>
<span class="quotelev1">&gt; +  struct hwloc_machine_attr_s system;
</span><br>
<span class="quotelev1">&gt;    /** \brief Misc-specific Object Attributes */
</span><br>
<span class="quotelev1">&gt; -  struct hwloc_misc_attr_u {
</span><br>
<span class="quotelev1">&gt; +  struct hwloc_misc_attr_s {
</span><br>
<span class="quotelev1">&gt;      unsigned depth;                      /**&lt; \brief Depth of misc  
</span><br>
<span class="quotelev1">&gt; object */
</span><br>
<span class="quotelev1">&gt;    } misc;
</span><br>
<span class="quotelev1">&gt;  };
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
<li><strong>Next message:</strong> <a href="0157.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
<li><strong>Previous message:</strong> <a href="0155.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1117)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0157.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
<li><strong>Reply:</strong> <a href="0157.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
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
