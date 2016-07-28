<?
$subject_val = "[OMPI users] OpenMPI-1.10.0 bind-to core error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 11:17:26 2015" -->
<!-- isoreceived="20150915151726" -->
<!-- sent="Tue, 15 Sep 2015 17:17:18 +0200" -->
<!-- isosent="20150915151718" -->
<!-- name="Patrick Begou" -->
<!-- email="Patrick.Begou_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI-1.10.0 bind-to core error" -->
<!-- id="55F8367E.1050608_at_legi.grenoble-inp.fr" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI-1.10.0 bind-to core error<br>
<strong>From:</strong> Patrick Begou (<em>Patrick.Begou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-15 11:17:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27576.php">marcin.krotkiewski: "[OMPI users] runtime MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="27574.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27579.php">Matt Thompson: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27579.php">Matt Thompson: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm runing OpenMPI 1.10.0 built with Intel 2015 compilers on a Bullx System.
<br>
I've some troubles with the bind-to core option when using cpuset.
<br>
If the cpuset is less than all the cores of a cpu (ex: 4 cores allowed on a 8 
<br>
cores cpus) OpenMPI 1.10.0 allows to overload these cores  until the maximum 
<br>
number of cores of the cpu.
<br>
With this config and because the cpuset only allows 4 cores, I can reach 2 
<br>
processes/core if I use:
<br>
<p>mpirun -np 8 --bind-to core my_application
<br>
<p>OpenMPI 1.7.3 doesn't show the problem with the same situation:
<br>
mpirun -np 8 --bind-to-core my_application
<br>
returns:
<br>
/A request was made to bind to that would result in binding more//
<br>
//processes than cpus on a resource/
<br>
and that's okay of course.
<br>
<p><p>Is there a way to avoid this oveloading with OpenMPI 1.10.0 ?
<br>
<p>Thanks
<br>
<p>Patrick
<br>
<p><pre>
-- 
===================================================================
|  Equipe M.O.S.T.         |                                      |
|  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] |
|  LEGI                    |                                      |
|  BP 53 X                 | Tel 04 76 82 51 35                   |
|  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
===================================================================
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27575/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27576.php">marcin.krotkiewski: "[OMPI users] runtime MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="27574.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27579.php">Matt Thompson: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27579.php">Matt Thompson: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
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
