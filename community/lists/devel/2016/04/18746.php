<?
$subject_val = "[OMPI devel] IP address to verb interface mapping";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 23:24:53 2016" -->
<!-- isoreceived="20160408032453" -->
<!-- sent="Thu, 7 Apr 2016 23:24:52 -0400" -->
<!-- isosent="20160408032452" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI devel] IP address to verb interface mapping" -->
<!-- id="CAHXxYDgiaf9x_-x5ZMaP2K=SMm2J-6a-1zahXKma=9_KuOHNQw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] IP address to verb interface mapping<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-07 23:24:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18747.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Previous message:</strong> <a href="18745.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3792-g92290b9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18747.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Reply:</strong> <a href="18747.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>(Newbie warning! Sorry :-(  )
<br>
<p>Let's say my cluster has 7 nodes, connected via IP-over-Ethernet for
<br>
control traffic and some kind of raw verbs (or anything else such as SRIO)
<br>
interface for data transfer. Let's say my host file chooses 4 out of the 7
<br>
nodes for an MPI job, based on the IP address, which are assigned to the
<br>
Ethernet interfaces.
<br>
<p>My question is: where in the code does this mapping between
<br>
IP-to-whatever_interface_is_used_for_MPI_Send/Recv is determined, such as
<br>
only those chosen nodes receive traffic over the verbs interface?
<br>
<p>Thanks in advance
<br>
Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18746/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18747.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Previous message:</strong> <a href="18745.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3792-g92290b9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18747.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
<li><strong>Reply:</strong> <a href="18747.php">Gilles Gouaillardet: "Re: [OMPI devel] IP address to verb interface mapping"</a>
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
