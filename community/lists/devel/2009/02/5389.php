<?
$subject_val = "[OMPI devel] RFC: Rename several OMPI_* names to OPAL_*";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 10 15:55:15 2009" -->
<!-- isoreceived="20090210205515" -->
<!-- sent="Tue, 10 Feb 2009 15:54:11 -0500" -->
<!-- isosent="20090210205411" -->
<!-- name="Greg Koenig" -->
<!-- email="koenig_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Rename several OMPI_* names to OPAL_*" -->
<!-- id="C5B753A4.DE3%koenig_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Rename several OMPI_* names to OPAL_*<br>
<strong>From:</strong> Greg Koenig (<em>koenig_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-10 15:54:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5390.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
<li><strong>Previous message:</strong> <a href="5388.php">N.M. Maclaren: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND /	MPI_RECV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5390.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
<li><strong>Reply:</strong> <a href="5390.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
<li><strong>Reply:</strong> <a href="5392.php">George Bosilca: "Re: [OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
RFC: Rename several OMPI_* names to OPAL_*
<br>
<p>WHAT: Rename several #define values that encode the prefix &quot;OMPI_&quot; to
<br>
instead encode the prefix &quot;OPAL_&quot; throughout the entire Open MPI source code
<br>
tree.  Also, eliminate unnecessary #include lines from source code files
<br>
under the &quot;.../ompi/mca/btl&quot; subtree.
<br>
<p>WHY: (1) These are general source code improvements that update #define
<br>
values to more accurately describe which layer the values belong and remove
<br>
unnecessary dependencies within the source code; (2) These changes will help
<br>
with the effort to move the BTL code into an independent layer.
<br>
<p>WHERE: 1.4 trunk
<br>
<p>WHEN: Negotiable -- see below, but probably near split for 1.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(No earlier than February 19, 2009)
<br>
<p>Timeout: February 19, 2009
<br>
<p>====================================
<br>
<p>The proposed change involves renaming several #define values that encode the
<br>
prefix &quot;OMPI_&quot; to instead encode the prefix &quot;OPAL_&quot; throughout the entire
<br>
Open MPI source code tree.  These names are holdovers from when the three
<br>
existing layers of Open MPI were developed together prior to being split
<br>
apart.  Additionally, the proposed change eliminates a few unnecessary
<br>
#include lines in BTL source code files under the .../ompi/mca/btl subtree.
<br>
<p>Specific modifications are detailed following this message text.  A script
<br>
to carry out these modifications is also attached to this message (gzipped
<br>
to pass unmolested through the ORNL e-mail server).
<br>
<p>We believe these modifications improve the Open MPI source code by renaming
<br>
values such that they correspond to the Open MPI layer to which they most
<br>
closely belong, and that this improvement is itself of benefit to Open MPI.
<br>
These modifications will also aid our ongoing efforts to extract the BTL
<br>
code into a new layer (&quot;ONET&quot;) that can be built with just direct dependence
<br>
on the OPAL layer.
<br>
<p>Although these changes are simple string substitutions, they touch a fair
<br>
amount of code in the Open MPI tree.  Three people have tested these changes
<br>
at our site on various platforms and have not discovered any problems.
<br>
However, we recognize that some members of the community may have
<br>
input/feedback regarding testing and we remain open to suggestions related
<br>
to testing.
<br>
<p>One challenge that has been brought up regarding this RFC is that applying
<br>
patches and/or CMRs to the source code tree after the proposed changes are
<br>
performed will be more difficult.  To that end, the best opportunity to
<br>
apply the modifications proposed in this RFC seems to be in conjunction with
<br>
1.4.  (My understanding from the developer conference call this morning is
<br>
that there are a few other changes waiting for this switch as well.)  We are
<br>
open to suggestions about the best time to apply this RFC to avoid major
<br>
disruptions.
<br>
<p><p>Specific changes follow:
<br>
<p>* From .../configure.ac.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_NEED_C_BOOL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_WEAK_SYMBOLS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_C_HAVE_WEAK_SYMBOLS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_USE_STDBOOL_H
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_SA_RESTART
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_VA_COPY
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_UNDERSCORE_VA_COPY
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_PTRDIFF_TYPE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_ptrdiff_t)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ALIGN_WORD_SIZE_INTEGERS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_WANT_LIBLTDL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, OMPI_ENABLE_DLOPEN_SUPPORT)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_STDC_HEADERS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_SYS_TIME_H
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_LONG_LONG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_SYS_SYNCH_H
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_SIZEOF_BOOL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_SIZEOF_INT
<br>
<p>* From .../config/ompi_check_attributes.m4.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_ALIGNED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__aligned)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_ALWAYS_INLINE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__always_inline)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_COLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__cold)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_CONST
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__const)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_DEPRECATED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__deprecated)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_FORMAT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__format)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_HOT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__hot)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_MALLOC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__malloc)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_MAY_ALIAS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__may_alias)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_NO_INSTRUMENT_FUNCTION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__no_instrument_function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_NONNULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__nonnull)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_NORETURN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__noreturn)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_PACKED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__packed)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_PURE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__pure)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_SENTINEL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__sentinel)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_UNUSED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__unused)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_VISIBILITY
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__visibility)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_WARN_UNUSED_RESULT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__warn_unused_result)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ATTRIBUTE_WEAK_ALIAS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv___attribute__weak_alias)
<br>
<p>* From .../config/ompi_check_ident.m4.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_$1_USE_PRAGMA_IDENT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_pragma_ident_happy)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_$1_USE_IDENT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_ident_happy)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_$1_USE_PRAGMA_COMMENT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_pragma_comment_happy)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_$1_USE_CONST_CHAR_IDENT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_static_const_char_happy)
<br>
<p>* From .../config/ompi_check_pthreads_pids.m4.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_THREADS_HAVE_DIFFERENT_PIDS
<br>
<p>* From .../config/ompi_check_visibility.m4.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_C_HAVE_VISIBILITY
<br>
<p>* From .../config/ompi_config_asm.m4.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ASM_TEXT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv_asm_text)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ASM_GLOBAL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv_asm_global)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ASM_LSYM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv_asm_lsym)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ASM_GSYM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv_asm_gsym)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ASM_LABEL_SUFFIX
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv_asm_latel_suffix)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ASM_ALIGN_LOG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ASM_TYPE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv_asm_type)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ASM_SIZE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_asm_size)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_POWERPC_R_REGISTERS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (also, ompi_cv_asm_powerpc_r_reg)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_C_GCC_INLINE_ASSEMBLY
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_C_DEC_INLINE_ASSEMBLY
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_C_XLC_INLINE_ASSEMBLY
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_WANT_SMP_LOCKS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ASM_SUPPORT_64BIT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ASSEMBLY_FORMAT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ASSEMBLY_ARCH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_ASM_FILE
<br>
<p>* From .../config/ompi_config_threads.m4.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_POSIX_THREADS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_SOLARIS_THREADS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_THREADS_HAVE_DIFFERENT_PIDS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ENABLE_MPI_THREADS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ENABLE_PROGRESS_THREADS
<br>
<p>* From .../config/ompi_functions.m4.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ARCH
<br>
<p>* From .../config/ompi_setup_cc.m4.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_C_HAVE_BUILTIN_EXPECT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_C_HAVE_BUILTIN_PREFETCH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_CC
<br>
<p>* From .../config/ompi_configure_options.m4.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ENABLE_MEM_DEBUG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ENABLE_MEM_PROFILE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ENABLE_DEBUG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_WANT_PRETTY_PRINT_STACKTRACE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ENABLE_PTY_SUPPORT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ENABLE_HETEROGENEOUS_SUPPORT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_WANT_HOME_CONFIG_FILES
<br>
<p>* From .../opal/include/opal_config_bottom.h.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_THREADS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_THREAD_SUPPORT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ALIGNMENT_CHAR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ALIGNMENT_SHORT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ALIGNMENT_INT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_ALIGNMENT_LONG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_PATH_MAX
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_DISABLE_ENABLE_MEM_DEBUG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_DEBUG_ZERO
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* OMPI_HAVE_BROKEN_QSORT
<br>
<p>* Due to changing the values set in the above steps, the .m4 configure macro
<br>
files are now named inappropriately.  Therefore, update the following
<br>
filenames and change the configure scripts to point to the correct new
<br>
names.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* .../config/ompi_check_attributes.m4 to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.../config/opal_check_attributes.m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* .../config/ompi_check_ident.m4 to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.../config/opal_check_ident.m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* .../config/ompi_check_pthread_pids.m4 to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.../config/opal_check_pthread_pids.m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* .../config/ompi_check_visibility.m4 to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.../config/opal_check_visibility.m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* .../config/ompi_config_asm.m4 to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.../config/opal_config_asm.m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* .../config/ompi_config_threads.m4 to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.../config/opal_config_threads.m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* .../config/ompi_functions.m4 to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.../config/opal_functions.m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* .../config/ompi_setup_cc.m4 to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.../config/opal_setup_cc.m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* .../config/ompi_configure_options.m4 to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.../config/opal_configure_options.m4
<br>
<p>* Remove unnecessary #include lines from source code files under the
<br>
.../ompi/mca/btl subtree that are not needed.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* #include &quot;ompi/mca/pml/oml.h&quot;
<br>
<p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5389/koenig-fix1.sh.gz">koenig-fix1.sh.gz</a>
</ul>
<!-- attachment="koenig-fix1.sh.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5390.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
<li><strong>Previous message:</strong> <a href="5388.php">N.M. Maclaren: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND /	MPI_RECV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5390.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
<li><strong>Reply:</strong> <a href="5390.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
<li><strong>Reply:</strong> <a href="5392.php">George Bosilca: "Re: [OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
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
