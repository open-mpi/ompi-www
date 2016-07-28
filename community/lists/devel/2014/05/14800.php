<?
$subject_val = "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 11:03:55 2014" -->
<!-- isoreceived="20140514150355" -->
<!-- sent="Thu, 15 May 2014 00:03:53 +0900" -->
<!-- isosent="20140514150353" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)" -->
<!-- id="CAAkFZ5sK5j1R9WmNSjookhZ0wRG4y4BjHCgc-UdSLXr55W6-1w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI devel] about btl/scif thread cancellation (#4616 / r31738)" -->
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
<strong>Subject:</strong> Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 11:03:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14801.php">George Bosilca: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14799.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Maybe in reply to:</strong> <a href="14786.php">Gilles Gouaillardet: "[OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14804.php">Nathan Hjelm: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Reply:</strong> <a href="14804.php">Nathan Hjelm: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p><span class="quotelev1">&gt; Looks like this is a scif bug. From the documentation:
</span><br>
<p>and from the source code, scif_poll(...) simply calls poll(...)
<br>
<p>at least in MPSS 2.1
<br>
<p><span class="quotelev1">&gt; Since that is not the case I will look through the documentation and see
</span><br>
<p>if there is a way other than pthread_cancel.
<br>
<p><p>what about :
<br>
<p>- use a global variable (a boolean called &quot;close_requested&quot;)
<br>
<p>- update the scif thread so it checks close_requested after each scif_poll,
<br>
<p>and exits if true
<br>
<p>- when closing btl/scif :
<br>
<p>&nbsp;* set close_requested to true
<br>
<p>&nbsp;* scif_connect to myself
<br>
<p>&nbsp;* close this connection
<br>
<p>&nbsp;* pthread_join(...)
<br>
<p><p>that's a bit heavyweight, but it does the job
<br>
<p>( and we keep an infinite timeout for scif_poll() so overhead at runtime is
<br>
null)
<br>
<p><p>i can test this approach from tomorrow if needed
<br>
<p><p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14800/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14801.php">George Bosilca: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14799.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Maybe in reply to:</strong> <a href="14786.php">Gilles Gouaillardet: "[OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14804.php">Nathan Hjelm: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Reply:</strong> <a href="14804.php">Nathan Hjelm: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
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
