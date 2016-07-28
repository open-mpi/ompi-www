<?
$subject_val = "[OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 09:59:41 2009" -->
<!-- isoreceived="20090127145941" -->
<!-- sent="Tue, 27 Jan 2009 15:59:19 +0100" -->
<!-- isosent="20090127145919" -->
<!-- name="Anthony Thevenin" -->
<!-- email="anthony.thevenin_at_[hidden]" -->
<!-- subject="[OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7" -->
<!-- id="497F2147.9050404_at_cerfacs.fr" -->
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
<strong>Subject:</strong> [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7<br>
<strong>From:</strong> Anthony Thevenin (<em>anthony.thevenin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-27 09:59:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7858.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7856.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7859.php">Ralph Castain: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>Reply:</strong> <a href="7859.php">Ralph Castain: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have two C codes :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- master.c : spawns a slave
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- slave.c : spwaned by the master
<br>
<p>If the spawn is include in a do-loop, I can do only 123 spawns before having the folowing errors:
<br>
<p>ORTE_ERROR_LOG: The system limit on number of pipes a process can open was reached in file base/iof_base_setup.c at line 112
<br>
ORTE_ERROR_LOG: The system limit on number of pipes a process can open was reached in file odls_default_module.c at line 203
<br>
<p>This test works perfectly even for a lot of spawns (more than 1000) with Open-MPI 1.2.7.
<br>
<p>You will find the following files attached:
<br>
config.log.tgz
<br>
ompi_info.out.tgz
<br>
ifconfig.out.tgz
<br>
master.c.tgz
<br>
slave.c.tgz
<br>
<p><p>command used to run my application :
<br>
mpirun -n 1 ./master
<br>
<p>COMPILER:
<br>
PGI 7.1
<br>
<p>PATH : 
<br>
/space/thevenin/openmpi-1.3_pgi/bin:/usr/local/tecplot/bin:/usr/local/pgi/linux86-64/7.1/bin:/usr/totalview/bin:/usr/local/matlab71/bin:/usr/bin:/usr/ucb:/usr/sbin:/usr/bsd:/sbin:/bin:/usr/bin/X11:/usr/etc:/usr/local/bin:/usr/bin:/usr/bsd:/sbin:/usr/bin/X11:.
<br>
<p>LD_LIBRARY_PATH:
<br>
/space/thevenin/openmpi-1.3_pgi/lib:/usr/local/lib
<br>
<p><p>If you have any idea of what this occurs, please tell me what to do to 
<br>
make it works.
<br>
Thank you very much
<br>
<p><p>Anthony
<br>
<p><p><p><p>




<br><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7857/config.log.tgz">config.log.tgz</a>
</ul>
<!-- attachment="config.log.tgz" -->
<hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7857/ifconfig.out.tgz">ifconfig.out.tgz</a>
</ul>
<!-- attachment="ifconfig.out.tgz" -->
<hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7857/master.c.tgz">master.c.tgz</a>
</ul>
<!-- attachment="master.c.tgz" -->
<hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7857/ompi_info.out.tgz">ompi_info.out.tgz</a>
</ul>
<!-- attachment="ompi_info.out.tgz" -->
<hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7857/slave.c.tgz">slave.c.tgz</a>
</ul>
<!-- attachment="slave.c.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7858.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7856.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7859.php">Ralph Castain: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>Reply:</strong> <a href="7859.php">Ralph Castain: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
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
