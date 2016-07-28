<?
$subject_val = "[OMPI devel] [RFC] Reduce the number of tests run by make check";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 13:13:37 2008" -->
<!-- isoreceived="20080304181337" -->
<!-- sent="Tue, 04 Mar 2008 13:13:37 -0500" -->
<!-- isosent="20080304181337" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] Reduce the number of tests run by make check" -->
<!-- id="47CD9151.9000401_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] [RFC] Reduce the number of tests run by make check<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 13:13:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3351.php">Ralph Campbell: "[OMPI devel] suggested patch for mca-btl-openib-hca-params.ini"</a>
<li><strong>Previous message:</strong> <a href="3349.php">Jeff Squyres: "[OMPI devel] new plpa"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3389.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<li><strong>Reply:</strong> <a href="3389.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Reduce the number of tests run by make check
<br>
<p>WHY: Some of the tests will not work properly until Open MPI is 
<br>
installed. Also, many of the tests do not really test anything.
<br>
<p>WHERE: See below.
<br>
<p>TIMEOUT: COB Friday March 14
<br>
<p>DESCRIPTION:
<br>
We have been having many problems with make check over the years. People 
<br>
tend to change things and not update the tests, which lead to tarball 
<br>
generation failures and nightly test run failures. Furthermore, many of 
<br>
the tests test things which have not changed for years.
<br>
<p>So with this in mind, I propose only running the following tests when 
<br>
'make check' is run:
<br>
asm/atomic_barrier
<br>
asm/atomic_barrier_noinline
<br>
asm/atomic_spinlock
<br>
asm/atomic_spinlock_noinline
<br>
asm/atomic_math
<br>
asm/atomic_math_noinline
<br>
asm/atomic_cmpset
<br>
asm/atomic_cmpset_noinline
<br>
<p>We we would no longer run the following tests:
<br>
class/ompi_bitmap_t
<br>
class/opal_hash_table_t
<br>
class/opal_list_t
<br>
class/opal_value_array_t
<br>
class/opal_pointer_array
<br>
class/ompi_rb_tree_t
<br>
memory/opal_memory_basic
<br>
memory/opal_memory_speed
<br>
memory/opal_memory_cxx
<br>
threads/opal_thread
<br>
threads/opal_condition
<br>
datatype/ddt_test
<br>
datatype/checksum
<br>
datatype/position
<br>
peruse/mpi_peruse
<br>
<p>These tests would not be deleted from the repository, just made so they 
<br>
do not run by default.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3351.php">Ralph Campbell: "[OMPI devel] suggested patch for mca-btl-openib-hca-params.ini"</a>
<li><strong>Previous message:</strong> <a href="3349.php">Jeff Squyres: "[OMPI devel] new plpa"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3389.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<li><strong>Reply:</strong> <a href="3389.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
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
