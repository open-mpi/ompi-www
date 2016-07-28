<?
$subject_val = "[OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 01:50:54 2007" -->
<!-- isoreceived="20071205065054" -->
<!-- sent="Wed, 5 Dec 2007 01:50:48 -0500" -->
<!-- isosent="20071205065048" -->
<!-- name="Brian Dobbins" -->
<!-- email="bdobbins_at_[hidden]" -->
<!-- subject="[OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)" -->
<!-- id="2b5e0c120712042250j35c708cfve5095b809ce9399d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)<br>
<strong>From:</strong> Brian Dobbins (<em>bdobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 01:50:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4594.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Previous message:</strong> <a href="4592.php">Jeff Squyres: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4594.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Reply:</strong> <a href="4594.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Reply:</strong> <a href="4598.php">Josh Hursey: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>&nbsp;&nbsp;I seem to have encountered an error while trying to run an MPMD executable
<br>
through Open MPI's '-app' option, and I'm wondering if anyone else has seen
<br>
this or can verify this?
<br>
<p>Backing up to a simple example, running a &quot;hello world&quot; executable (hwc.exe)
<br>
works fine when run as:  (using an interactive PBS session with -l
<br>
nodes=2:ppn=4)
<br>
&nbsp;mpiexec -v -d  -machinefile $PBS_NODEFILE -mca oob_tcp_if_exclude eth0 -mca
<br>
pls_rsh_agent ssh -np 8 ./hwc.exe
<br>
<p>But when I run what should be the same thing via an '--app' file (or implied
<br>
command line) liks the following fails:
<br>
&nbsp;mpiexec -v -d  -machinefile $PBS_NODEFILE -mca oob_tcp_if_exclude eth0 -mca
<br>
pls_rsh_agent ssh  -np 6 ./hwc.exe : -np 2 ./hwc.exe
<br>
<p>&nbsp;&nbsp;My understanding is that these are equivalent, no?  But the latter example
<br>
fails with multiple &quot;Software caused connection abort (103)&quot; errors, such as
<br>
the following:
<br>
[xxx:13978] [0,0,2]-[0,0,0] mca_oob_tcp_peer_try_connect: connect to
<br>
xx.x.2.81:34103 failed: Software caused connection abort (103)
<br>
<p>&nbsp;&nbsp;Any thoughts?  I haven't dug around the source yet since this could be a
<br>
weird problem with the system I'm using.  For the record, this is with
<br>
OpenMPI 1.2.4 compiled with PGI 7.1-2.
<br>
<p>&nbsp;&nbsp;As an aside, the '-app' syntax DOES work fine when all copies are running
<br>
on the same node.. for example, having requested 4 CPUs per node, if I run
<br>
&quot;-np 2 ./hwc.exe : -np 2 ./hwc.exe&quot;, it works fine.  And I did also try
<br>
duplicating the mca parameters after the colon since I figured they might
<br>
not propagate, thus perhaps it was trying to use the wrong interface, but
<br>
that didn't help either.
<br>
<p>&nbsp;&nbsp;Thanks very much,
<br>
&nbsp;&nbsp;- Brian
<br>
<p><p>Brian Dobbins
<br>
Yale University HPC
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4593/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4594.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Previous message:</strong> <a href="4592.php">Jeff Squyres: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4594.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Reply:</strong> <a href="4594.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Reply:</strong> <a href="4598.php">Josh Hursey: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
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
