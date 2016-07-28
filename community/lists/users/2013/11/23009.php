<?
$subject_val = "[OMPI users] Request for help/suggestion";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 20 15:42:45 2013" -->
<!-- isoreceived="20131120204245" -->
<!-- sent="Thu, 21 Nov 2013 02:12:44 +0530" -->
<!-- isosent="20131120204244" -->
<!-- name="Venkat Reddy" -->
<!-- email="reddy281_at_[hidden]" -->
<!-- subject="[OMPI users] Request for help/suggestion" -->
<!-- id="CAGffdZJJJB6gFEkq-WMBnRr4UTeVQeqOGvYzp_59657xg-errg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Request for help/suggestion<br>
<strong>From:</strong> Venkat Reddy (<em>reddy281_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-20 15:42:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23010.php">Dominique Orban: "[OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="23008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23027.php">Reuti: "Re: [OMPI users] Request for help/suggestion"</a>
<li><strong>Reply:</strong> <a href="23027.php">Reuti: "Re: [OMPI users] Request for help/suggestion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Team,
<br>
<p>I am compiled the OpenFoam-1.7.1,openFoam-2.2.1,OpenFoam-2.2.2 versions.
<br>
All the versions same problem that some times I am able to run simpleFoam
<br>
8,16,32,64,80 cores but some times it will get hang no messages will come.
<br>
My observervation is that when I am running successfully the orted process
<br>
in the node will start as single.(it means 8nodes means 8 orted process it
<br>
will show)
<br>
When I am not able to run,hangup the i verified that the orted processes in
<br>
the node are more than one in few of the nodes(total it will be &gt;8 for 8
<br>
nodes)
<br>
<p>compute-0-6: tel      12279     1  0 18:54 ?        00:00:00 orted
<br>
--daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 2
<br>
-mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
<br>
;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
<br>
compute-0-6: tel      12280 12279  0 18:54 ?        00:00:00 orted
<br>
--daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 2
<br>
-mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
<br>
;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
<br>
compute-0-6: tel      12281 12279  0 18:54 ?        00:00:00 orted
<br>
--daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 2
<br>
-mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
<br>
;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
<br>
compute-0-6: tel      12282 12279  0 18:54 ?        00:00:00 orted
<br>
--daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 2
<br>
-mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
<br>
;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
<br>
compute-0-6: tel      12283 12279  0 18:54 ?        00:00:00 orted
<br>
--daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 2
<br>
-mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
<br>
;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
<br>
compute-0-4: tel      12073     1  0 18:54 ?        00:00:00 orted
<br>
--daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 1
<br>
-mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
<br>
;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
<br>
compute-0-4: tel      12074 12073  0 18:54 ?        00:00:00 orted
<br>
--daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 1
<br>
-mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
<br>
;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
<br>
compute-0-4: tel      12075 12073  0 18:54 ?        00:00:00 orted
<br>
--daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 1
<br>
-mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
<br>
;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
<br>
compute-0-4: tel      12076 12073  0 18:54 ?        00:00:00 orted
<br>
--daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 1
<br>
-mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
<br>
;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
<br>
compute-0-4: tel      12077 12073  0 18:54 ?        00:00:00 orted
<br>
--daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 1
<br>
-mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
<br>
;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
<br>
-bash-4.1# pdsh -w compute-0-[0-19] ps -ef |grep orte
<br>
compute-0-8: tel       6839     1  0 18:57 ?        00:00:00 orted
<br>
--daemonize -mca ess env -mca orte_ess_jobid 322371584 -mca orte_ess_vpid 2
<br>
-mca orte_ess_num_procs 3 --hnp-uri 322371584.0;tcp://10.0.10.1:43142
<br>
;tcp://162.0.50.111:43142;tcp://192.168.1.125:43142 --mca btl openib,self,sm
<br>
compute-0-7: tel       7451     1  0 18:57 ?        00:00:00 orted
<br>
--daemonize -mca ess env -mca orte_ess_jobid 322371584 -mca orte_ess_vpid 1
<br>
-mca orte_ess_num_procs 3 --hnp-uri 322371584.0;tcp://10.0.10.1:43142
<br>
;tcp://162.0.50.111:43142;tcp://192.168.1.125:43142 --mca btl openib,self,sm
<br>
-bash-4.1#
<br>
<p>nodes which are showing more orted process, I am restarted.  But it is not
<br>
sure after restart it may take or it may not take.
<br>
<p><p>Please advoice/help.
<br>
<p>Thanks.
<br>
<p>Venkat
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23009/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23010.php">Dominique Orban: "[OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="23008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23027.php">Reuti: "Re: [OMPI users] Request for help/suggestion"</a>
<li><strong>Reply:</strong> <a href="23027.php">Reuti: "Re: [OMPI users] Request for help/suggestion"</a>
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
