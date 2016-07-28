<?
$subject_val = "[OMPI users] Problems with shared libraries while launching jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 15:18:46 2012" -->
<!-- isoreceived="20121214201846" -->
<!-- sent="Fri, 14 Dec 2012 20:17:39 +0000" -->
<!-- isosent="20121214201739" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with shared libraries while launching jobs" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F1A2342_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Problems with shared libraries while launching jobs<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-14 15:17:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20953.php">Ralph Castain: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<li><strong>Previous message:</strong> <a href="20951.php">Ralph Castain: "Re: [OMPI users] questions to some open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20953.php">Ralph Castain: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<li><strong>Reply:</strong> <a href="20953.php">Ralph Castain: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<li><strong>Reply:</strong> <a href="20962.php">Jeff Squyres: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having a weird problem launching cases with OpenMPI 1.4.3.  It is most likely a problem with a particular node of our cluster, as the jobs will run fine on some submissions, but not other submissions.  It seems to depend on the node list.  I just am having trouble diagnosing which node, and what is the nature of the problem it has.
<br>
<p>One or perhaps more of the orted are indicating they cannot find an Intel Math library.  The error is:
<br>
/release/cfd/openmpi-intel/bin/orted: error while loading shared libraries: libimf.so: cannot open shared object file: No such file or directory
<br>
<p>I've checked the environment just before launching mpirun, and LD_LIBRARY_PATH includes the necessary component to point to where the Intel shared libraries are located.  Furthermore, my mpirun command line says to export the LD_LIBRARY_PATH variable:
<br>
Executing ['/release/cfd/openmpi-intel/bin/mpirun', '--machinefile /var/spool/PBS/aux/20761.maruhpc4-mgt', '-np 160', '-x LD_LIBRARY_PATH', '-x MPI_ENVIRONMENT=1', '/tmp/fv420761.maruhpc4-mgt/falconv4_openmpi_jsgl', '-v', '-cycles', '10000', '-ri', 'restart.1', '-ro', '/tmp/fv420761.maruhpc4-mgt/restart.1']
<br>
<p>My shell-initialization script (.bashrc) does not overwrite LD_LIBRARY_PATH.  OpenMPI is built explicitly --without-torque and should be using ssh to launch the orted.
<br>
<p>What options can I add to get more debugging of problems launching orted?
<br>
<p>Thanks,
<br>
<p>Ed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20952/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20953.php">Ralph Castain: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<li><strong>Previous message:</strong> <a href="20951.php">Ralph Castain: "Re: [OMPI users] questions to some open problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20953.php">Ralph Castain: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<li><strong>Reply:</strong> <a href="20953.php">Ralph Castain: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<li><strong>Reply:</strong> <a href="20962.php">Jeff Squyres: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
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
