<?
$subject_val = "[OMPI users] mpirun jobs only one single node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 15 05:56:33 2010" -->
<!-- isoreceived="20100615095633" -->
<!-- sent="Tue, 15 Jun 2010 10:56:08 +0100" -->
<!-- isosent="20100615095608" -->
<!-- name="Govind Songara" -->
<!-- email="govind.songara_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun jobs only one single node" -->
<!-- id="AANLkTimJOhhk7geoMo9-l9gds1mmf307v-xSzx5Fl_sh_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun jobs only one single node<br>
<strong>From:</strong> Govind Songara (<em>govind.songara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-15 05:56:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13328.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>Previous message:</strong> <a href="13326.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13328.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>Reply:</strong> <a href="13328.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have using openmpi build with tm support
<br>
When i run the job requesting for two nodes it run only on single node.
<br>
Here is my script.
<br>
<span class="quotelev1">&gt;cat mpipbs-script.sh
</span><br>
#PBS -N mpipbs-script
<br>
#PBS -q short
<br>
### Number of nodes: resources per node
<br>
### (4 cores/node, so ppn=4 is ALL resources on the node)
<br>
#PBS -l nodes=2:ppn=4
<br>
/opt/openmpi-1.4.2/bin/mpirun /scratch0/gsongara/mpitest/hello
<br>
<p><p>torque config
<br>
set queue short resources_max.nodes = 4
<br>
set queue short resources_default.nodes = 1
<br>
set server resources_default.neednodes = 1
<br>
set server resources_default.nodect = 1
<br>
set server resources_default.nodes = 1
<br>
<p>Can someone please advise if i missing anything here.
<br>
<p>Regards
<br>
Govind
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13327/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13328.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>Previous message:</strong> <a href="13326.php">Jeff Squyres: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13328.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>Reply:</strong> <a href="13328.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
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
