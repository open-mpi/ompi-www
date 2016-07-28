<?
$subject_val = "[OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 13:54:00 2014" -->
<!-- isoreceived="20140327175400" -->
<!-- sent="Thu, 27 Mar 2014 17:53:57 +0000" -->
<!-- isosent="20140327175357" -->
<!-- name="Sasso, John (GE Power &amp; Water, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="[OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC3FE48C08_at_ALPMBAPA12.e2k.ad.ge.com" -->
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
<strong>Subject:</strong> [OMPI users] Mapping ranks to hosts (from MPI error messages)<br>
<strong>From:</strong> Sasso, John (GE Power &amp; Water, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 13:53:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23991.php">Joe Landman: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23989.php">Gus Correa: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23991.php">Joe Landman: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="23991.php">Joe Landman: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="23992.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When a piece of software built against OpenMPI fails, I will see an error referring to the rank of the MPI task which incurred the failure.  For example:
<br>
<p>MPI_ABORT was invoked on rank 1236 in communicator MPI_COMM_WORLD
<br>
with errorcode 1.
<br>
<p>Unfortunately, I do not have access to the software code, just the installation directory tree for OpenMPI.  My question is:  Is there a flag that can be passed to mpirun, or an environment variable set, which would reveal the mapping of ranks to the hosts they are on?
<br>
<p>I do understand that one could have multiple MPI ranks running on the same host, but finding a way to determine which rank ran on what host would go a long way in help troubleshooting problems which may be central to the host.  Thanks!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--john
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23990/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23991.php">Joe Landman: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23989.php">Gus Correa: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23991.php">Joe Landman: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="23991.php">Joe Landman: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="23992.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
