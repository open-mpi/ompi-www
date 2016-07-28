<?
$subject_val = "[OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 18:07:06 2014" -->
<!-- isoreceived="20140714220706" -->
<!-- sent="Mon, 14 Jul 2014 16:07:04 -0600" -->
<!-- isosent="20140714220704" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="20140714220704.GL1506_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-14 18:07:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15141.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15139.php">Rolf vandeVaart: "Re: [OMPI devel] Hangs on the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15141.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15141.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Add a library destructor function to OPAL. The new function would
<br>
take care of cleaning up some of OPAL's state (closing frameworks,
<br>
shutting down MCA, etc).
<br>
<p>Why: OPAL can not currently be re-initialized. There are numerous
<br>
problems throughout the project that will make it difficult (but not
<br>
impossible) to get opal in a state where we can allow
<br>
re-initialization. Additionally, there are probably arguments against
<br>
making opal re-initable.
<br>
<p>opal not being re-initializable would not normally be a problem except
<br>
that the following code sequence always crashes:
<br>
<p>MPI_T_Init_thread ();   &lt;-- Calls opal_init_util()
<br>
MPI_T_Finalize ();      &lt;-- Calls opal_finalize_util()
<br>
<p>MPI_Init ();            &lt;-- SEGV
<br>
<p>This happens because MPI_T_Finalize() calls opal_finalize_util() to
<br>
ensure maximum valgrind cleanness. This call causes OPAL to tear down
<br>
OPAL classes (among other things) leading to the SEGV on the next call
<br>
to opal_init()/opal_init_util(). There is an open ticket on this issue:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/4490">https://svn.open-mpi.org/trac/ompi/ticket/4490</a>
<br>
<p>To fix this problem I want to add a destructor function to OPAL. This
<br>
function would take on some of the current functionality of
<br>
opal_finalize_util(). This would solve the above issue without having to
<br>
update OPAL to allow re-initialization.
<br>
<p>For those not familiar with destructor functions. They are always called
<br>
at the end of execution or when the library is closed
<br>
(dl_close). Multiple destructors functions can be defined. Marking a
<br>
function as a destructor is simple:
<br>
<p>void __attribute__((destructor)) foo (void);
<br>
<p><p>When: Setting a timeout for next Friday (July 25).
<br>
<p><p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15140/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15141.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15139.php">Rolf vandeVaart: "Re: [OMPI devel] Hangs on the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15141.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15141.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
