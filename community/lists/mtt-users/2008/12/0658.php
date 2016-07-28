<?
$subject_val = "[MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 08:35:04 2008" -->
<!-- isoreceived="20081217133504" -->
<!-- sent="Wed, 17 Dec 2008 08:35:00 -0500" -->
<!-- isosent="20081217133500" -->
<!-- name="John Fink" -->
<!-- email="john.fink_at_[hidden]" -->
<!-- subject="[MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?" -->
<!-- id="502896f40812170535l4591bf88ga5d9269756f38f7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?<br>
<strong>From:</strong> John Fink (<em>john.fink_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-17 08:35:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0659.php">Jeff Squyres: "Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/11/0657.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0659.php">Jeff Squyres: "Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>Reply:</strong> <a href="0659.php">Jeff Squyres: "Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello OpenMPI folks,
<br>
<p>I've got a large pool of Macs running Leopard that are all on an xgrid.
<br>
However, I can't seem to use the mpirun that comes with Leopard with the
<br>
xgrid.  I've got my grid and password environment variables set up okay on
<br>
my controller, all the xgrid command line commands work (displaying grid
<br>
IDs, things like that) but mpirun only wants to run things on the local
<br>
host.
<br>
<p>I'm extremely new to OpenMPI and only slightly less new to Macs so there's
<br>
probably something very obvious that I'm missing, but I'm trying what's
<br>
detailed on this page:
<br>
<a href="http://www.macresearch.org/runing_mpi_job_through_xgrid">http://www.macresearch.org/runing_mpi_job_through_xgrid</a> (the /bin/hostname
<br>
example).  Here's my output:
<br>
<p>as-0003-l:~ locadmin$ mpirun -n 8 /bin/hostname
<br>
as-0003-l.lib.mcmaster.ca
<br>
as-0003-l.lib.mcmaster.ca
<br>
as-0003-l.lib.mcmaster.ca
<br>
as-0003-l.lib.mcmaster.ca
<br>
as-0003-l.lib.mcmaster.ca
<br>
as-0003-l.lib.mcmaster.ca
<br>
as-0003-l.lib.mcmaster.ca
<br>
as-0003-l.lib.mcmaster.ca
<br>
<p><p><p>Issuing the same command with -nolocal yields the following:
<br>
<p>as-0003-l:~ locadmin$ mpirun --nolocal -n 8 /bin/hostname
<br>
--------------------------------------------------------------------------
<br>
There are no available nodes allocated to this job. This could be because
<br>
no nodes were found or all the available nodes were already used.
<br>
<p>Note that since the -nolocal option was given no processes can be
<br>
launched on the local node.
<br>
--------------------------------------------------------------------------
<br>
[as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG: Temporarily out of
<br>
resource in file
<br>
/SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/base/rmaps_base_support_fns.c
<br>
at line 168
<br>
[as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG: Temporarily out of
<br>
resource in file
<br>
/SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/round_robin/rmaps_rr.c
<br>
at line 402
<br>
[as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG: Temporarily out of
<br>
resource in file
<br>
/SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmaps/base/rmaps_base_map_job.c
<br>
at line 210
<br>
[as-0003-l.lib.mcmaster.ca:82776] [0,0,0] ORTE_ERROR_LOG: Temporarily out of
<br>
resource in file
<br>
/SourceCache/openmpi/openmpi-5/openmpi/orte/mca/rmgr/urm/rmgr_urm.c at line
<br>
372
<br>
[as-0003-l.lib.mcmaster.ca:82776] mpirun: spawn failed with errno=-3
<br>
<p><p>Thanks very much for any help you can provide!
<br>
<p>jf
<br>
<p><pre>
-- 
<a href="http://libgrunt.blogspot.com">http://libgrunt.blogspot.com</a> -- library culture and technology.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0658/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0659.php">Jeff Squyres: "Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2008/11/0657.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #258: Compare non-contiguous date ranges"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0659.php">Jeff Squyres: "Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
<li><strong>Reply:</strong> <a href="0659.php">Jeff Squyres: "Re: [MTT users] Is the stock MPI that comes with OSX leopard broken with xgrid?"</a>
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
