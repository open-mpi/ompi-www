<?
$subject_val = "Re: [OMPI users] Request for help/suggestion";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 22 13:25:27 2013" -->
<!-- isoreceived="20131122182527" -->
<!-- sent="Fri, 22 Nov 2013 19:25:17 +0100" -->
<!-- isosent="20131122182517" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Request for help/suggestion" -->
<!-- id="65505D3D-50A0-4E0F-B1D1-CBB3B7B815DD_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGffdZJJJB6gFEkq-WMBnRr4UTeVQeqOGvYzp_59657xg-errg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Request for help/suggestion<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-22 13:25:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23028.php">Jason Gans: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="23026.php">Lloyd Brown: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="23009.php">Venkat Reddy: "[OMPI users] Request for help/suggestion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23035.php">Venkat Reddy: "Re: [OMPI users] Request for help/suggestion"</a>
<li><strong>Reply:</strong> <a href="23035.php">Venkat Reddy: "Re: [OMPI users] Request for help/suggestion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 20.11.2013 um 21:42 schrieb Venkat Reddy:
<br>
<p><span class="quotelev1">&gt; Hi Team,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am compiled the OpenFoam-1.7.1,openFoam-2.2.1,OpenFoam-2.2.2 versions.
</span><br>
<span class="quotelev1">&gt; All the versions same problem that some times I am able to run simpleFoam 8,16,32,64,80 cores but some times it will get hang no messages will come.
</span><br>
<span class="quotelev1">&gt; My observervation is that when I am running successfully the orted process in the node will start as single.(it means 8nodes means 8 orted process it will show)
</span><br>
<span class="quotelev1">&gt; When I am not able to run,hangup the i verified that the orted processes in the node are more than one in few of the nodes(total it will be &gt;8 for 8 nodes)
</span><br>
<p>Do you have more than one network interface in each machine with different names?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; compute-0-6: tel      12279     1  0 18:54 ?        00:00:00 orted --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
</span><br>
<span class="quotelev1">&gt; compute-0-6: tel      12280 12279  0 18:54 ?        00:00:00 orted --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
</span><br>
<span class="quotelev1">&gt; compute-0-6: tel      12281 12279  0 18:54 ?        00:00:00 orted --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
</span><br>
<span class="quotelev1">&gt; compute-0-6: tel      12282 12279  0 18:54 ?        00:00:00 orted --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
</span><br>
<span class="quotelev1">&gt; compute-0-6: tel      12283 12279  0 18:54 ?        00:00:00 orted --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
</span><br>
<span class="quotelev1">&gt; compute-0-4: tel      12073     1  0 18:54 ?        00:00:00 orted --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
</span><br>
<span class="quotelev1">&gt; compute-0-4: tel      12074 12073  0 18:54 ?        00:00:00 orted --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
</span><br>
<span class="quotelev1">&gt; compute-0-4: tel      12075 12073  0 18:54 ?        00:00:00 orted --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
</span><br>
<span class="quotelev1">&gt; compute-0-4: tel      12076 12073  0 18:54 ?        00:00:00 orted --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
</span><br>
<span class="quotelev1">&gt; compute-0-4: tel      12077 12073  0 18:54 ?        00:00:00 orted --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl openib,self,sm
</span><br>
<span class="quotelev1">&gt; -bash-4.1# pdsh -w compute-0-[0-19] ps -ef |grep orte
</span><br>
<span class="quotelev1">&gt; compute-0-8: tel       6839     1  0 18:57 ?        00:00:00 orted --daemonize -mca ess env -mca orte_ess_jobid 322371584 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 3 --hnp-uri 322371584.0;tcp://10.0.10.1:43142;tcp://162.0.50.111:43142;tcp://192.168.1.125:43142 --mca btl openib,self,sm
</span><br>
<span class="quotelev1">&gt; compute-0-7: tel       7451     1  0 18:57 ?        00:00:00 orted --daemonize -mca ess env -mca orte_ess_jobid 322371584 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri 322371584.0;tcp://10.0.10.1:43142;tcp://162.0.50.111:43142;tcp://192.168.1.125:43142 --mca btl openib,self,sm
</span><br>
<span class="quotelev1">&gt; -bash-4.1#
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; nodes which are showing more orted process, I am restarted.  But it is not sure after restart it may take or it may not take.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Please advoice/help.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Venkat  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23028.php">Jason Gans: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="23026.php">Lloyd Brown: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="23009.php">Venkat Reddy: "[OMPI users] Request for help/suggestion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23035.php">Venkat Reddy: "Re: [OMPI users] Request for help/suggestion"</a>
<li><strong>Reply:</strong> <a href="23035.php">Venkat Reddy: "Re: [OMPI users] Request for help/suggestion"</a>
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
