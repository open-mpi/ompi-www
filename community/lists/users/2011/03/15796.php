<?
$subject_val = "[OMPI users] Error in executing NAS Benchmarks";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  4 14:26:28 2011" -->
<!-- isoreceived="20110304192628" -->
<!-- sent="Fri, 4 Mar 2011 13:26:23 -0600" -->
<!-- isosent="20110304192623" -->
<!-- name="vaibhav dutt" -->
<!-- email="vaibhavsupersaiyan9_at_[hidden]" -->
<!-- subject="[OMPI users] Error in executing NAS Benchmarks" -->
<!-- id="AANLkTikMR3qfO9PSXQAmi9d_XXnGeA20VS3FyPLTv5kn_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Error in executing NAS Benchmarks<br>
<strong>From:</strong> vaibhav dutt (<em>vaibhavsupersaiyan9_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-04 14:26:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15797.php">Jeff Squyres: "Re: [OMPI users] Error in executing NAS Benchmarks"</a>
<li><strong>Previous message:</strong> <a href="15795.php">Youri LACAN-BARTLEY: "[OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15797.php">Jeff Squyres: "Re: [OMPI users] Error in executing NAS Benchmarks"</a>
<li><strong>Reply:</strong> <a href="15797.php">Jeff Squyres: "Re: [OMPI users] Error in executing NAS Benchmarks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>I am trying to execute NAS benchmark across 2 Nodes, each having 4 cores.
<br>
The execution works fine on a single node, but when I try to execute the
<br>
benchmark across 2 Nodes, I
<br>
get an error like:
<br>
<p>mpiexec -machinefile hostfile.txt -n 8 ./ep.A.8
<br>
bash: orted: command not found
<br>
------------------------------
<br>
--------------------------------------------
<br>
A daemon (pid 22973) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpiexec: clean termination accomplished
<br>
<p><p>Can anybody please suggest the reason for this.
<br>
<p>Thanks,
<br>
Vaibhav
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15796/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15797.php">Jeff Squyres: "Re: [OMPI users] Error in executing NAS Benchmarks"</a>
<li><strong>Previous message:</strong> <a href="15795.php">Youri LACAN-BARTLEY: "[OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15797.php">Jeff Squyres: "Re: [OMPI users] Error in executing NAS Benchmarks"</a>
<li><strong>Reply:</strong> <a href="15797.php">Jeff Squyres: "Re: [OMPI users] Error in executing NAS Benchmarks"</a>
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
