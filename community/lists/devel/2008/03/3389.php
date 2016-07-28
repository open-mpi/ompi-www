<?
$subject_val = "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 10:30:25 2008" -->
<!-- isoreceived="20080306153025" -->
<!-- sent="Thu, 6 Mar 2008 10:30:09 -0500" -->
<!-- isosent="20080306153009" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Reduce the number of tests run by make check" -->
<!-- id="3BA5243B-DAC4-4DB8-8BCA-BA728F522A79_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47CD9151.9000401_at_cs.indiana.edu" -->
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
<strong>Date:</strong> 2008-03-06 10:30:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3390.php">Ralph Castain: "Re: [OMPI devel] Orte cleanup"</a>
<li><strong>Previous message:</strong> <a href="3388.php">Gleb Natapov: "Re: [OMPI devel] orte can't launch process"</a>
<li><strong>In reply to:</strong> <a href="3350.php">Tim Prins: "[OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3411.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<li><strong>Reply:</strong> <a href="3411.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim and I talked about this on IM.  We'd like to amend the proposal:
<br>
<p>1. Remove these tests from make check, but leave them in SVN per the  
<br>
original proposal.
<br>
2. File a ticket to make carto selection not fail when no components  
<br>
are found (I filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/1232">https://svn.open-mpi.org/trac/ompi/ticket/1232</a>).
<br>
3. File a ticket to amend &quot;make check&quot; (or similar) with some scripty- 
<br>
foo to do the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- find all components in the build tree
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- sym link them all into a single tree
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- setenv OMPI_MCA_component_path to that tree
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- then run the tests
<br>
This will allow actually testing the components in the build tree  
<br>
(without an OMPI installation)
<br>
<p>Tim and I don't have time to do #3 in the near future -- perhaps  
<br>
someone else can do it.  It will pave the way for future, more  
<br>
comprehensive tests in the tree (since we won't be bound by the &quot;must  
<br>
have OMPI installed&quot; limitation).
<br>
<p><p>On Mar 4, 2008, at 1:13 PM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Reduce the number of tests run by make check
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: Some of the tests will not work properly until Open MPI is
</span><br>
<span class="quotelev1">&gt; installed. Also, many of the tests do not really test anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: See below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: COB Friday March 14
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DESCRIPTION:
</span><br>
<span class="quotelev1">&gt; We have been having many problems with make check over the years.  
</span><br>
<span class="quotelev1">&gt; People
</span><br>
<span class="quotelev1">&gt; tend to change things and not update the tests, which lead to tarball
</span><br>
<span class="quotelev1">&gt; generation failures and nightly test run failures. Furthermore, many  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; the tests test things which have not changed for years.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So with this in mind, I propose only running the following tests when
</span><br>
<span class="quotelev1">&gt; 'make check' is run:
</span><br>
<span class="quotelev1">&gt; asm/atomic_barrier
</span><br>
<span class="quotelev1">&gt; asm/atomic_barrier_noinline
</span><br>
<span class="quotelev1">&gt; asm/atomic_spinlock
</span><br>
<span class="quotelev1">&gt; asm/atomic_spinlock_noinline
</span><br>
<span class="quotelev1">&gt; asm/atomic_math
</span><br>
<span class="quotelev1">&gt; asm/atomic_math_noinline
</span><br>
<span class="quotelev1">&gt; asm/atomic_cmpset
</span><br>
<span class="quotelev1">&gt; asm/atomic_cmpset_noinline
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We we would no longer run the following tests:
</span><br>
<span class="quotelev1">&gt; class/ompi_bitmap_t
</span><br>
<span class="quotelev1">&gt; class/opal_hash_table_t
</span><br>
<span class="quotelev1">&gt; class/opal_list_t
</span><br>
<span class="quotelev1">&gt; class/opal_value_array_t
</span><br>
<span class="quotelev1">&gt; class/opal_pointer_array
</span><br>
<span class="quotelev1">&gt; class/ompi_rb_tree_t
</span><br>
<span class="quotelev1">&gt; memory/opal_memory_basic
</span><br>
<span class="quotelev1">&gt; memory/opal_memory_speed
</span><br>
<span class="quotelev1">&gt; memory/opal_memory_cxx
</span><br>
<span class="quotelev1">&gt; threads/opal_thread
</span><br>
<span class="quotelev1">&gt; threads/opal_condition
</span><br>
<span class="quotelev1">&gt; datatype/ddt_test
</span><br>
<span class="quotelev1">&gt; datatype/checksum
</span><br>
<span class="quotelev1">&gt; datatype/position
</span><br>
<span class="quotelev1">&gt; peruse/mpi_peruse
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These tests would not be deleted from the repository, just made so  
</span><br>
<span class="quotelev1">&gt; they
</span><br>
<span class="quotelev1">&gt; do not run by default.
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
<li><strong>Next message:</strong> <a href="3390.php">Ralph Castain: "Re: [OMPI devel] Orte cleanup"</a>
<li><strong>Previous message:</strong> <a href="3388.php">Gleb Natapov: "Re: [OMPI devel] orte can't launch process"</a>
<li><strong>In reply to:</strong> <a href="3350.php">Tim Prins: "[OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3411.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<li><strong>Reply:</strong> <a href="3411.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
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
