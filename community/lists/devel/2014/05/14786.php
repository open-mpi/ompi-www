<?
$subject_val = "[OMPI devel] about btl/scif thread cancellation (#4616 / r31738)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 22:17:48 2014" -->
<!-- isoreceived="20140514021748" -->
<!-- sent="Wed, 14 May 2014 11:18:05 +0900" -->
<!-- isosent="20140514021805" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] about btl/scif thread cancellation (#4616 / r31738)" -->
<!-- id="5372D25D.4010603_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-13 22:18:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14787.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14785.php">Nathan Hjelm: "[OMPI devel] opal_free_list_t annoyance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14787.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Reply:</strong> <a href="14787.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Reply:</strong> <a href="14797.php">Nathan Hjelm: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Maybe reply:</strong> <a href="14800.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Reply:</strong> <a href="14803.php">George Bosilca: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>i would like to comment on r31738 :
<br>
<p><span class="quotelev1">&gt; There is no reason to cancel the listening thread. It should die
</span><br>
<span class="quotelev1">&gt; automatically when the file descriptor is closed.
</span><br>
i could not agree more
<br>
<span class="quotelev1">&gt; It is sufficient to just wait for the thread to exit with pthread join.
</span><br>
unfortunatly, at least in my test environment (an outdated MPSS 2.1) it
<br>
is *not* :-(
<br>
<p>this is what i described in #4615
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/4615">https://svn.open-mpi.org/trac/ompi/ticket/4615</a>
<br>
in which i attached scif_hang.c that evidences that (at least in my
<br>
environment)
<br>
scif_poll(...) does *not* return after scif_close(...) is closed, and
<br>
hence the scif pthread never ends.
<br>
<p>this is likely a bug in MPSS and it might have been fixed in earlier
<br>
release.
<br>
<p>Nathan, could you try scif_hang in your environment and report the MPSS
<br>
version you are running ?
<br>
<p><p>bottom line, and once again, in my test environment, pthread_join (...)
<br>
without pthread_cancel(...)
<br>
might cause a hang when the btl/scif module is released.
<br>
<p><p>assuming the bug is in old MPSS and has been fixed in recent releases,
<br>
what is the OpenMPI policy ?
<br>
a) test the MPSS version and call pthread_cancel() or do *not* call
<br>
pthread_join if buggy MPSS is detected ?
<br>
b) display an error/warning if a buggy MPSS is detected ?
<br>
c) do not call pthread_join at all ? /* SIGSEGV might occur with older
<br>
MPSS, it is in MPI_Finalize() so impact is limited */
<br>
d) do nothing, let the btl/scif module hang, this is *not* an OpenMPI
<br>
problem after all ?
<br>
e) something else ?
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14787.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14785.php">Nathan Hjelm: "[OMPI devel] opal_free_list_t annoyance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14787.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Reply:</strong> <a href="14787.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Reply:</strong> <a href="14797.php">Nathan Hjelm: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Maybe reply:</strong> <a href="14800.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Reply:</strong> <a href="14803.php">George Bosilca: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
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
