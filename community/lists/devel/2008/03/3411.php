<?
$subject_val = "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  9 18:16:12 2008" -->
<!-- isoreceived="20080309221612" -->
<!-- sent="Sun, 9 Mar 2008 17:16:04 -0500" -->
<!-- isosent="20080309221604" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Reduce the number of tests run by make check" -->
<!-- id="0375D5B1-7EEA-45DA-AEF9-C1F4A41EDB52_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3BA5243B-DAC4-4DB8-8BCA-BA728F522A79_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Reduce the number of tests run by make check<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-09 18:16:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3412.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3410.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3389.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I realize that Tim's original timeout was next Friday, but the problen  
<br>
was preventing nightly trunk tarballs from being created.
<br>
<p>So I committed <a href="https://svn.open-mpi.org/trac/ompi/changeset/17796">https://svn.open-mpi.org/trac/ompi/changeset/17796</a> to  
<br>
disabling running a bunch of tests during &quot;make check&quot; (although they  
<br>
are still built).  Some of them can be re-enabled once the carto issue  
<br>
is fixed (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1232">https://svn.open-mpi.org/trac/ompi/ticket/1232</a>).
<br>
<p><p><p>On Mar 6, 2008, at 9:30 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Tim and I talked about this on IM.  We'd like to amend the proposal:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Remove these tests from make check, but leave them in SVN per the
</span><br>
<span class="quotelev1">&gt; original proposal.
</span><br>
<span class="quotelev1">&gt; 2. File a ticket to make carto selection not fail when no components
</span><br>
<span class="quotelev1">&gt; are found (I filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/1232">https://svn.open-mpi.org/trac/ompi/ticket/1232</a>).
</span><br>
<span class="quotelev1">&gt; 3. File a ticket to amend &quot;make check&quot; (or similar) with some scripty-
</span><br>
<span class="quotelev1">&gt; foo to do the following:
</span><br>
<span class="quotelev1">&gt;     - find all components in the build tree
</span><br>
<span class="quotelev1">&gt;     - sym link them all into a single tree
</span><br>
<span class="quotelev1">&gt;     - setenv OMPI_MCA_component_path to that tree
</span><br>
<span class="quotelev1">&gt;     - then run the tests
</span><br>
<span class="quotelev1">&gt; This will allow actually testing the components in the build tree
</span><br>
<span class="quotelev1">&gt; (without an OMPI installation)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim and I don't have time to do #3 in the near future -- perhaps
</span><br>
<span class="quotelev1">&gt; someone else can do it.  It will pave the way for future, more
</span><br>
<span class="quotelev1">&gt; comprehensive tests in the tree (since we won't be bound by the &quot;must
</span><br>
<span class="quotelev1">&gt; have OMPI installed&quot; limitation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 4, 2008, at 1:13 PM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Reduce the number of tests run by make check
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: Some of the tests will not work properly until Open MPI is
</span><br>
<span class="quotelev2">&gt;&gt; installed. Also, many of the tests do not really test anything.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: See below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: COB Friday March 14
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DESCRIPTION:
</span><br>
<span class="quotelev2">&gt;&gt; We have been having many problems with make check over the years.
</span><br>
<span class="quotelev2">&gt;&gt; People
</span><br>
<span class="quotelev2">&gt;&gt; tend to change things and not update the tests, which lead to tarball
</span><br>
<span class="quotelev2">&gt;&gt; generation failures and nightly test run failures. Furthermore, many
</span><br>
<span class="quotelev2">&gt;&gt; of
</span><br>
<span class="quotelev2">&gt;&gt; the tests test things which have not changed for years.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So with this in mind, I propose only running the following tests when
</span><br>
<span class="quotelev2">&gt;&gt; 'make check' is run:
</span><br>
<span class="quotelev2">&gt;&gt; asm/atomic_barrier
</span><br>
<span class="quotelev2">&gt;&gt; asm/atomic_barrier_noinline
</span><br>
<span class="quotelev2">&gt;&gt; asm/atomic_spinlock
</span><br>
<span class="quotelev2">&gt;&gt; asm/atomic_spinlock_noinline
</span><br>
<span class="quotelev2">&gt;&gt; asm/atomic_math
</span><br>
<span class="quotelev2">&gt;&gt; asm/atomic_math_noinline
</span><br>
<span class="quotelev2">&gt;&gt; asm/atomic_cmpset
</span><br>
<span class="quotelev2">&gt;&gt; asm/atomic_cmpset_noinline
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We we would no longer run the following tests:
</span><br>
<span class="quotelev2">&gt;&gt; class/ompi_bitmap_t
</span><br>
<span class="quotelev2">&gt;&gt; class/opal_hash_table_t
</span><br>
<span class="quotelev2">&gt;&gt; class/opal_list_t
</span><br>
<span class="quotelev2">&gt;&gt; class/opal_value_array_t
</span><br>
<span class="quotelev2">&gt;&gt; class/opal_pointer_array
</span><br>
<span class="quotelev2">&gt;&gt; class/ompi_rb_tree_t
</span><br>
<span class="quotelev2">&gt;&gt; memory/opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; memory/opal_memory_speed
</span><br>
<span class="quotelev2">&gt;&gt; memory/opal_memory_cxx
</span><br>
<span class="quotelev2">&gt;&gt; threads/opal_thread
</span><br>
<span class="quotelev2">&gt;&gt; threads/opal_condition
</span><br>
<span class="quotelev2">&gt;&gt; datatype/ddt_test
</span><br>
<span class="quotelev2">&gt;&gt; datatype/checksum
</span><br>
<span class="quotelev2">&gt;&gt; datatype/position
</span><br>
<span class="quotelev2">&gt;&gt; peruse/mpi_peruse
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These tests would not be deleted from the repository, just made so
</span><br>
<span class="quotelev2">&gt;&gt; they
</span><br>
<span class="quotelev2">&gt;&gt; do not run by default.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3412.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3410.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3389.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
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
