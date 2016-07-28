<?
$subject_val = "[OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  4 05:51:18 2009" -->
<!-- isoreceived="20090404095118" -->
<!-- sent="Sat, 4 Apr 2009 15:21:13 +0530" -->
<!-- isosent="20090404095113" -->
<!-- name="Ankush Kaul" -->
<!-- email="ankush.rkaul_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with running openMPI program" -->
<!-- id="a599d60e0904040251v42a7bca9odc171b519aa5c04f_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Ankush Kaul (<em>ankush.rkaul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-04 05:51:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8774.php">Ankush Kaul: "[OMPI users] Problem with insatlling OpenMPI on compute node"</a>
<li><strong>Previous message:</strong> <a href="8772.php">doriankrause: "Re: [OMPI users] looking for serial implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8775.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8775.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I followed the steps given here to setup up openMPI cluster :
<br>
<a href="http://www.ps3cluster.umassd.edu/step3mpi.html">http://www.ps3cluster.umassd.edu/step3mpi.html</a>
<br>
My cluster consists of two nodes, master(192.168.67.18) and
<br>
salve(192.168.45.65), connected directly through a cross cable.
<br>
<p>After setting up the cluster n configuring the master node, i mounted  /tmp
<br>
folder of master node on the slave node(i had some problems with nfs at
<br>
first but i worked my way out of it).
<br>
<p>Then i copied the 'pi.c' program in the /tmp folder
<br>
and successfully complied it, giving me a binary file 'pi'.
<br>
<p>Now when i try to run the binary file using the following command
<br>
<p>#mpirun &#150;np 2 ./Pi
<br>
*
<br>
*
<br>
root_at_192.168.45.65's password:
<br>
&lt;it asks for the password&gt;
<br>
<p>after entering the password it gives the following error:
<br>
<p>*bash: orted: command not found*
<br>
*[ccomp.cluster:18963] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 275*
<br>
*[ccomp.cluster:18963] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1166*
<br>
*[ccomp.cluster:18963] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c
<br>
at line 90*
<br>
*[ccomp.cluster:18963] ERROR: A daemon on node 192.168.45.65 failed to start
<br>
as expected.*
<br>
*[ccomp.cluster:18963] ERROR: There may be more information available from*
<br>
*[ccomp.cluster:18963] ERROR: the remote shell (see above).*
<br>
*[ccomp.cluster:18963] ERROR: The daemon exited unexpectedly with status
<br>
127.*
<br>
*[ccomp.cluster:18963] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 188*
<br>
*[ccomp.cluster:18963] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1198*
<br>
*--------------------------------------------------------------------------*
<br>
*mpirun was unable to cleanly terminate the daemons for this job. Returned
<br>
value Timeout instead of ORTE_SUCCESS.*
<br>
*--------------------------------------------------------------------------*
<br>
*
<br>
*
<br>
I am totally lost now, as this is the first time i am working on a cluster
<br>
project, and need some help
<br>
<p>Thank you
<br>
Ankush
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8773/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8774.php">Ankush Kaul: "[OMPI users] Problem with insatlling OpenMPI on compute node"</a>
<li><strong>Previous message:</strong> <a href="8772.php">doriankrause: "Re: [OMPI users] looking for serial implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8775.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8775.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
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
