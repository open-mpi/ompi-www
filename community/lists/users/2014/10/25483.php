<?
$subject_val = "[OMPI users] Open MPI was unable to obtain the username";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 00:04:10 2014" -->
<!-- isoreceived="20141010040410" -->
<!-- sent="Fri, 10 Oct 2014 00:04:42 -0400" -->
<!-- isosent="20141010040442" -->
<!-- name="Gary Jackson" -->
<!-- email="garyj_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI was unable to obtain the username" -->
<!-- id="54375ADA.301_at_cs.umd.edu" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI was unable to obtain the username<br>
<strong>From:</strong> Gary Jackson (<em>garyj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-10 00:04:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25484.php">Gary Jackson: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
<li><strong>Previous message:</strong> <a href="25482.php">Oscar Vega-Gisbert: "Re: [OMPI users] Derived data in Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25484.php">Gary Jackson: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
<li><strong>Reply:</strong> <a href="25484.php">Gary Jackson: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd like to run MPI on a node to which I have access via HTCondor, but I 
<br>
don't actually have an entry in the passwd file or LDAP. When I invoke 
<br>
mpirun, I get the following error:
<br>
<p>--------------------------------------------------------------------------
<br>
Open MPI was unable to obtain the username in order to create a path
<br>
for its required temporary directories.  This type of error is usually
<br>
caused by a transient failure of network-based authentication services
<br>
(e.g., LDAP or NIS failure due to network congestion), but can also be
<br>
an indication of system misconfiguration.
<br>
<p>Please consult your system administrator about these issues and try
<br>
again.
<br>
--------------------------------------------------------------------------
<br>
<p>Is there any set of flags I can use to get OpenMPI to overlook the lack 
<br>
of an actual username? I'd hoped that the --tmpdir flag would do what I 
<br>
need. However, using the --tmpdir flag causes mpirun to complain that 
<br>
the flag is unrecognized and exit.
<br>
<p>Unfortunately, &quot;get a real account on that node&quot; is not an option.
<br>
<p><pre>
-- 
Gary
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25484.php">Gary Jackson: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
<li><strong>Previous message:</strong> <a href="25482.php">Oscar Vega-Gisbert: "Re: [OMPI users] Derived data in Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25484.php">Gary Jackson: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
<li><strong>Reply:</strong> <a href="25484.php">Gary Jackson: "Re: [OMPI users] Open MPI was unable to obtain the username"</a>
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
