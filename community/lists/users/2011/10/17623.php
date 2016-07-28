<?
$subject_val = "[OMPI users] Changing plm_rsh_agent system wide";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 26 05:07:18 2011" -->
<!-- isoreceived="20111026090718" -->
<!-- sent="Wed, 26 Oct 2011 11:11:08 +0200" -->
<!-- isosent="20111026091108" -->
<!-- name="Patrick Begou" -->
<!-- email="Patrick.Begou_at_[hidden]" -->
<!-- subject="[OMPI users] Changing plm_rsh_agent system wide" -->
<!-- id="4EA7CEAC.3080800_at_hmg.inpg.fr" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] Changing plm_rsh_agent system wide<br>
<strong>From:</strong> Patrick Begou (<em>Patrick.Begou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-26 05:11:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17624.php">Josh Hursey: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>Previous message:</strong> <a href="17622.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17625.php">Ralph Castain: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>Reply:</strong> <a href="17625.php">Ralph Castain: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I need to change system wide how OpenMPI launch the jobs on the nodes of my cluster.
<br>
<p>Setting:
<br>
export OMPI_MCA_plm_rsh_agent=oarsh
<br>
<p>works fine but I would like this config to be the default with OpenMPI. I've 
<br>
read several threads (discussions, FAQ) about this but none of the provided 
<br>
solutions seams to work.
<br>
<p>I have two files:
<br>
/usr/lib/openmpi/1.4-gcc/etc/openmpi-mca-params.conf
<br>
/usr/lib64/openmpi/1.4-gcc/etc/openmpi-mca-params.conf
<br>
<p>In these files I've set various flavor of the syntax (only one at a time, and 
<br>
the same in each file of course!):
<br>
test 1) plm_rsh_agent = oarsh
<br>
test 2) pls_rsh_agent = oarsh
<br>
test 3) orte_rsh_agent = oarsh
<br>
<p>But each time when I run &quot;ompi_info --param plm rsh&quot; I get:
<br>
MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &quot;ssh : rsh&quot;, data source: 
<br>
default value, synonyms:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pls_rsh_agent)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The command used to launch executables on remote nodes 
<br>
(typically either &quot;ssh&quot; or &quot;rsh&quot;)
<br>
<p>With the exported variable it works fine.
<br>
Any suggestion ?
<br>
<p>The rpm package of my linux Rocks Cluster provides:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI root_at_build-x86-64 Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.4.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r23834
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI release date: Oct 05, 2010
<br>
<p>Thanks
<br>
<p>Patrick
<br>
<p><p><p>&nbsp;&nbsp;--
<br>
===============================================================
<br>
|  Equipe M.O.S.T.         | <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a>          |
<br>
|  Patrick BEGOU           |       ------------               |
<br>
|  LEGI                    | mailto:Patrick.Begou_at_[hidden] |
<br>
|  BP 53 X                 | Tel 04 76 82 51 35               |
<br>
|  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71               |
<br>
===============================================================
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17624.php">Josh Hursey: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>Previous message:</strong> <a href="17622.php">Mouhamad Al-Sayed-Ali: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17625.php">Ralph Castain: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
<li><strong>Reply:</strong> <a href="17625.php">Ralph Castain: "Re: [OMPI users] Changing plm_rsh_agent system wide"</a>
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
