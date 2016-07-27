<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 07:41:39 2009" -->
<!-- isoreceived="20091008114139" -->
<!-- sent="Thu, 08 Oct 2009 13:40:22 +0200" -->
<!-- isosent="20091008114022" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119" -->
<!-- id="4ACDCFA6.3050609_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EA178C84-9567-4BD9-B93B-402621F004AE_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-08 07:40:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0158.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
<li><strong>Previous message:</strong> <a href="0156.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
<li><strong>In reply to:</strong> <a href="0156.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0158.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
<li><strong>Reply:</strong> <a href="0158.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Is this what you had in mind?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1120">https://svn.open-mpi.org/trac/hwloc/changeset/1120</a>
</span><br>
<p>No, this removes sections 1 &quot;hwloc&quot; and 2 &quot;glossary&quot; (pages 10-22 of the
<br>
PDF). These are generated from the doxy file. But the doxy file is also
<br>
considered as a source/header file, causing a manpage and a file section
<br>
to be created in the PDF as well. We want the former but not the latter.
<br>
We had both but your commit removed both :)
<br>
<p>Brice
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 8, 2009, at 5:27 AM, &lt;bgoglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bgoglin
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2009-10-08 05:27:48 EDT (Thu, 08 Oct 2009)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 1119
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1119">https://svn.open-mpi.org/trac/hwloc/changeset/1119</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Fix some doxygen comments
</span><br>
<span class="quotelev2">&gt;&gt; Fix the suffix of the attribute structures
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We should remove hwloc.doxy from the list of files in the
</span><br>
<span class="quotelev2">&gt;&gt; documentation and we should not generate a manpage for it
</span><br>
<span class="quotelev2">&gt;&gt; (both are empty), but I didn't find how to do that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Update README
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/README          |     8 ++++----
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/doc/Makefile.am |     8 ++++----
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/include/hwloc.h |    14 +++++++-------
</span><br>
<span class="quotelev2">&gt;&gt;    3 files changed, 15 insertions(+), 15 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/README
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/README        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/README        2009-10-08 05:27:48 EDT (Thu, 08 Oct 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -286,13 +286,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;  Because of functional and ideological overlap, these two code bases
</span><br>
<span class="quotelev2">&gt;&gt; and ideas
</span><br>
<span class="quotelev2">&gt;&gt;  were merged and released under the name &quot;hwloc&quot; as an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; sub-project.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -PLPA was initially developed by the Open MPI development team as a
</span><br>
<span class="quotelev2">&gt;&gt; sub-project.
</span><br>
<span class="quotelev2">&gt;&gt;  libtopology was initially developed by the INRIA Runtime
</span><br>
<span class="quotelev2">&gt;&gt; Team-Project (http://
</span><br>
<span class="quotelev2">&gt;&gt;  runtime.bordeaux.inria.fr/) (headed by Raymond Namyst (http://
</span><br>
<span class="quotelev2">&gt;&gt; -dept-info.labri.fr/~namyst/)). Both are now deprecated in favor of
</span><br>
<span class="quotelev2">&gt;&gt; the hwloc
</span><br>
<span class="quotelev2">&gt;&gt; -Open MPI sub-project.
</span><br>
<span class="quotelev2">&gt;&gt; +dept-info.labri.fr/~namyst/)). PLPA was initially developed by the
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; +development team as a sub-project. Both are now deprecated in favor
</span><br>
<span class="quotelev2">&gt;&gt; of hwloc,
</span><br>
<span class="quotelev2">&gt;&gt; +which is distributed as an Open MPI sub-project.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  -------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Generated on Wed Oct 7 17:25:25 2009 for Hardware Locality (hwloc)
</span><br>
<span class="quotelev2">&gt;&gt; by  doxygen
</span><br>
<span class="quotelev2">&gt;&gt; +Generated on Thu Oct 8 11:07:01 2009 for Hardware Locality (hwloc)
</span><br>
<span class="quotelev2">&gt;&gt; by  doxygen
</span><br>
<span class="quotelev2">&gt;&gt;  1.6.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/doc/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/doc/Makefile.am       (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/doc/Makefile.am       2009-10-08 05:27:48 EDT (Thu, 08 Oct
</span><br>
<span class="quotelev2">&gt;&gt; 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -242,10 +242,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;          $(DOX_MAN_DIR)/man3/hwloc_get_type_or_below_depth.3 \
</span><br>
<span class="quotelev2">&gt;&gt;          $(DOX_MAN_DIR)/man3/hwloc_obj.3 \
</span><br>
<span class="quotelev2">&gt;&gt;          $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u.3 \
</span><br>
<span class="quotelev2">&gt;&gt; -        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_cache_attr_u.3 \
</span><br>
<span class="quotelev2">&gt;&gt; -        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_machine_attr_u.3 \
</span><br>
<span class="quotelev2">&gt;&gt; -        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_memory_attr_u.3 \
</span><br>
<span class="quotelev2">&gt;&gt; -        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_misc_attr_u.3 \
</span><br>
<span class="quotelev2">&gt;&gt; +        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_cache_attr_s.3 \
</span><br>
<span class="quotelev2">&gt;&gt; +        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_machine_attr_s.3 \
</span><br>
<span class="quotelev2">&gt;&gt; +        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_memory_attr_s.3 \
</span><br>
<span class="quotelev2">&gt;&gt; +        $(DOX_MAN_DIR)/man3/hwloc_obj_attr_u_hwloc_misc_attr_s.3 \
</span><br>
<span class="quotelev2">&gt;&gt;          $(DOX_MAN_DIR)/man3/hwloc_obj_cpuset_snprintf.3 \
</span><br>
<span class="quotelev2">&gt;&gt;          $(DOX_MAN_DIR)/man3/hwloc_obj_is_in_subtree.3 \
</span><br>
<span class="quotelev2">&gt;&gt;          $(DOX_MAN_DIR)/man3/hwloc_obj_snprintf.3 \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/include/hwloc.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/include/hwloc.h       (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/include/hwloc.h       2009-10-08 05:27:48 EDT (Thu, 08 Oct
</span><br>
<span class="quotelev2">&gt;&gt; 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -161,27 +161,27 @@
</span><br>
<span class="quotelev2">&gt;&gt;  /** \brief Object type-specific Attributes */
</span><br>
<span class="quotelev2">&gt;&gt;  union hwloc_obj_attr_u {
</span><br>
<span class="quotelev2">&gt;&gt;    /** \brief Cache-specific Object Attributes */
</span><br>
<span class="quotelev2">&gt;&gt; -  struct hwloc_cache_attr_u {
</span><br>
<span class="quotelev2">&gt;&gt; +  struct hwloc_cache_attr_s {
</span><br>
<span class="quotelev2">&gt;&gt;      unsigned long memory_kB;             /**&lt; \brief Size of cache */
</span><br>
<span class="quotelev2">&gt;&gt;      unsigned depth;                      /**&lt; \brief Depth of cache */
</span><br>
<span class="quotelev2">&gt;&gt;    } cache;
</span><br>
<span class="quotelev2">&gt;&gt;    /** \brief Node-specific Object Attributes */
</span><br>
<span class="quotelev2">&gt;&gt; -  struct hwloc_memory_attr_u {
</span><br>
<span class="quotelev2">&gt;&gt; +  struct hwloc_memory_attr_s {
</span><br>
<span class="quotelev2">&gt;&gt;      unsigned long memory_kB;             /**&lt; \brief Size of memory
</span><br>
<span class="quotelev2">&gt;&gt; node */
</span><br>
<span class="quotelev2">&gt;&gt;      unsigned long huge_page_free;        /**&lt; \brief Number of
</span><br>
<span class="quotelev2">&gt;&gt; available huge pages */
</span><br>
<span class="quotelev2">&gt;&gt;    } node;
</span><br>
<span class="quotelev2">&gt;&gt; -  /**&lt; \brief Machine-specific Object Attributes */
</span><br>
<span class="quotelev2">&gt;&gt; -  struct hwloc_machine_attr_u {
</span><br>
<span class="quotelev2">&gt;&gt; +  /** \brief Machine-specific Object Attributes */
</span><br>
<span class="quotelev2">&gt;&gt; +  struct hwloc_machine_attr_s {
</span><br>
<span class="quotelev2">&gt;&gt;      char *dmi_board_vendor;              /**&lt; \brief DMI board
</span><br>
<span class="quotelev2">&gt;&gt; vendor name */
</span><br>
<span class="quotelev2">&gt;&gt;      char *dmi_board_name;                /**&lt; \brief DMI board model
</span><br>
<span class="quotelev2">&gt;&gt; name */
</span><br>
<span class="quotelev2">&gt;&gt;      unsigned long memory_kB;             /**&lt; \brief Size of memory
</span><br>
<span class="quotelev2">&gt;&gt; node */
</span><br>
<span class="quotelev2">&gt;&gt;      unsigned long huge_page_free;        /**&lt; \brief Number of
</span><br>
<span class="quotelev2">&gt;&gt; available huge pages */
</span><br>
<span class="quotelev2">&gt;&gt;      unsigned long huge_page_size_kB;     /**&lt; \brief Size of huge
</span><br>
<span class="quotelev2">&gt;&gt; pages */
</span><br>
<span class="quotelev2">&gt;&gt;    } machine;
</span><br>
<span class="quotelev2">&gt;&gt; -  /**&lt; \brief System-specific Object Attributes */
</span><br>
<span class="quotelev2">&gt;&gt; -  struct hwloc_machine_attr_u system;
</span><br>
<span class="quotelev2">&gt;&gt; +  /** \brief System-specific Object Attributes */
</span><br>
<span class="quotelev2">&gt;&gt; +  struct hwloc_machine_attr_s system;
</span><br>
<span class="quotelev2">&gt;&gt;    /** \brief Misc-specific Object Attributes */
</span><br>
<span class="quotelev2">&gt;&gt; -  struct hwloc_misc_attr_u {
</span><br>
<span class="quotelev2">&gt;&gt; +  struct hwloc_misc_attr_s {
</span><br>
<span class="quotelev2">&gt;&gt;      unsigned depth;                      /**&lt; \brief Depth of misc
</span><br>
<span class="quotelev2">&gt;&gt; object */
</span><br>
<span class="quotelev2">&gt;&gt;    } misc;
</span><br>
<span class="quotelev2">&gt;&gt;  };
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0158.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
<li><strong>Previous message:</strong> <a href="0156.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
<li><strong>In reply to:</strong> <a href="0156.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0158.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
<li><strong>Reply:</strong> <a href="0158.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1119"</a>
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
