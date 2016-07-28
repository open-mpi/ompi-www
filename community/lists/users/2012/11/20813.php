<?
$subject_val = "[OMPI users] OpenMPI 1.6.3 and Memory Issues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 17:21:45 2012" -->
<!-- isoreceived="20121129222145" -->
<!-- sent="Thu, 29 Nov 2012 14:21:39 -0800" -->
<!-- isosent="20121129222139" -->
<!-- name="Joseph Farran" -->
<!-- email="jfarran_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.6.3 and Memory Issues" -->
<!-- id="50B7DFF3.4040403_at_uci.edu" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.6.3 and Memory Issues<br>
<strong>From:</strong> Joseph Farran (<em>jfarran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-29 17:21:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20814.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Previous message:</strong> <a href="20812.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20814.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Reply:</strong> <a href="20814.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All.
<br>
<p>In compiling a simple Hello world with OpenMPI 1.6.3 and mpirun the hello program, I am getting:
<br>
<p>$ ulimit -l unlimited
<br>
$ mpirun -np 2 hello
<br>
--------------------------------------------------------------------------
<br>
WARNING: It appears that your OpenFabrics subsystem is configured to only
<br>
allow registering part of your physical memory.  This can cause MPI jobs to
<br>
run with erratic performance, hang, and/or crash.
<br>
<p>This may be caused by your OpenFabrics vendor limiting the amount of
<br>
physical memory that can be registered.  You should investigate the
<br>
relevant Linux kernel module parameters that control how much physical
<br>
memory can be registered, and increase them to allow registering all
<br>
physical memory on your machine.
<br>
<p>See this Open MPI FAQ item for more information on these Linux kernel module
<br>
parameters:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>&nbsp;&nbsp;&nbsp;Local host:              hpc
<br>
&nbsp;&nbsp;&nbsp;Registerable memory:     4096 MiB
<br>
&nbsp;&nbsp;&nbsp;Total memory:            258470 MiB
<br>
<p>Your MPI job will continue, but may be behave poorly and/or hang.
<br>
--------------------------------------------------------------------------
<br>
Hello World.   I am the Master Node (hpc) with Rank 0.
<br>
Hello World.   I am compute Node (hpc) with Rank 1
<br>
[hpc:08261] 1 more process has sent help message help-mpi-btl-openib.txt / reg mem limit low
<br>
[hpc:08261] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<p><p>I have my limits setup with:
<br>
cat /etc/security/limits.conf
<br>
* soft memlock unlimited
<br>
* hard memlock unlimited
<br>
<p>What am I missing?
<br>
<p>OS is CentOS 6.3.
<br>
<p>Joseph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20814.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Previous message:</strong> <a href="20812.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20814.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Reply:</strong> <a href="20814.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
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
