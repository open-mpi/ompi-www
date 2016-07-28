<?
$subject_val = "Re: [OMPI users] Request for help/suggestion";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 23 00:23:39 2013" -->
<!-- isoreceived="20131123052339" -->
<!-- sent="Sat, 23 Nov 2013 10:53:38 +0530" -->
<!-- isosent="20131123052338" -->
<!-- name="Venkat Reddy" -->
<!-- email="reddy281_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Request for help/suggestion" -->
<!-- id="CAGffdZ+unA4+aV0FCNh=wgmVfJbDcGUk1eCubUNaqzDEay+AbQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="65505D3D-50A0-4E0F-B1D1-CBB3B7B815DD_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Venkat Reddy (<em>reddy281_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-23 00:23:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23036.php">Teranishi, Keita: "[OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23034.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>In reply to:</strong> <a href="23027.php">Reuti: "Re: [OMPI users] Request for help/suggestion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23144.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Request for help/suggestion"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23144.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Request for help/suggestion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, Ethernet and infiniband networks which are connecting nodes
<br>
On Nov 22, 2013 11:55 PM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 20.11.2013 um 21:42 schrieb Venkat Reddy:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Team,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am compiled the OpenFoam-1.7.1,openFoam-2.2.1,OpenFoam-2.2.2 versions.
</span><br>
<span class="quotelev2">&gt; &gt; All the versions same problem that some times I am able to run
</span><br>
<span class="quotelev1">&gt; simpleFoam 8,16,32,64,80 cores but some times it will get hang no messages
</span><br>
<span class="quotelev1">&gt; will come.
</span><br>
<span class="quotelev2">&gt; &gt; My observervation is that when I am running successfully the orted
</span><br>
<span class="quotelev1">&gt; process in the node will start as single.(it means 8nodes means 8 orted
</span><br>
<span class="quotelev1">&gt; process it will show)
</span><br>
<span class="quotelev2">&gt; &gt; When I am not able to run,hangup the i verified that the orted processes
</span><br>
<span class="quotelev1">&gt; in the node are more than one in few of the nodes(total it will be &gt;8 for 8
</span><br>
<span class="quotelev1">&gt; nodes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have more than one network interface in each machine with different
</span><br>
<span class="quotelev1">&gt; names?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; compute-0-6: tel      12279     1  0 18:54 ?        00:00:00 orted
</span><br>
<span class="quotelev1">&gt; --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 2
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
</span><br>
<span class="quotelev1">&gt; ;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm
</span><br>
<span class="quotelev2">&gt; &gt; compute-0-6: tel      12280 12279  0 18:54 ?        00:00:00 orted
</span><br>
<span class="quotelev1">&gt; --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 2
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
</span><br>
<span class="quotelev1">&gt; ;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm
</span><br>
<span class="quotelev2">&gt; &gt; compute-0-6: tel      12281 12279  0 18:54 ?        00:00:00 orted
</span><br>
<span class="quotelev1">&gt; --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 2
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
</span><br>
<span class="quotelev1">&gt; ;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm
</span><br>
<span class="quotelev2">&gt; &gt; compute-0-6: tel      12282 12279  0 18:54 ?        00:00:00 orted
</span><br>
<span class="quotelev1">&gt; --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 2
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
</span><br>
<span class="quotelev1">&gt; ;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm
</span><br>
<span class="quotelev2">&gt; &gt; compute-0-6: tel      12283 12279  0 18:54 ?        00:00:00 orted
</span><br>
<span class="quotelev1">&gt; --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 2
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
</span><br>
<span class="quotelev1">&gt; ;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm
</span><br>
<span class="quotelev2">&gt; &gt; compute-0-4: tel      12073     1  0 18:54 ?        00:00:00 orted
</span><br>
<span class="quotelev1">&gt; --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 1
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
</span><br>
<span class="quotelev1">&gt; ;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm
</span><br>
<span class="quotelev2">&gt; &gt; compute-0-4: tel      12074 12073  0 18:54 ?        00:00:00 orted
</span><br>
<span class="quotelev1">&gt; --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 1
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
</span><br>
<span class="quotelev1">&gt; ;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm
</span><br>
<span class="quotelev2">&gt; &gt; compute-0-4: tel      12075 12073  0 18:54 ?        00:00:00 orted
</span><br>
<span class="quotelev1">&gt; --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 1
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
</span><br>
<span class="quotelev1">&gt; ;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm
</span><br>
<span class="quotelev2">&gt; &gt; compute-0-4: tel      12076 12073  0 18:54 ?        00:00:00 orted
</span><br>
<span class="quotelev1">&gt; --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 1
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
</span><br>
<span class="quotelev1">&gt; ;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm
</span><br>
<span class="quotelev2">&gt; &gt; compute-0-4: tel      12077 12073  0 18:54 ?        00:00:00 orted
</span><br>
<span class="quotelev1">&gt; --daemonize -mca ess env -mca orte_ess_jobid 744292352 -mca orte_ess_vpid 1
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_num_procs 3 --hnp-uri 744292352.0;tcp://10.0.10.1:39880
</span><br>
<span class="quotelev1">&gt; ;tcp://162.0.50.111:39880;tcp://192.168.1.125:39880 --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm
</span><br>
<span class="quotelev2">&gt; &gt; -bash-4.1# pdsh -w compute-0-[0-19] ps -ef |grep orte
</span><br>
<span class="quotelev2">&gt; &gt; compute-0-8: tel       6839     1  0 18:57 ?        00:00:00 orted
</span><br>
<span class="quotelev1">&gt; --daemonize -mca ess env -mca orte_ess_jobid 322371584 -mca orte_ess_vpid 2
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_num_procs 3 --hnp-uri 322371584.0;tcp://10.0.10.1:43142
</span><br>
<span class="quotelev1">&gt; ;tcp://162.0.50.111:43142;tcp://192.168.1.125:43142 --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm
</span><br>
<span class="quotelev2">&gt; &gt; compute-0-7: tel       7451     1  0 18:57 ?        00:00:00 orted
</span><br>
<span class="quotelev1">&gt; --daemonize -mca ess env -mca orte_ess_jobid 322371584 -mca orte_ess_vpid 1
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_num_procs 3 --hnp-uri 322371584.0;tcp://10.0.10.1:43142
</span><br>
<span class="quotelev1">&gt; ;tcp://162.0.50.111:43142;tcp://192.168.1.125:43142 --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm
</span><br>
<span class="quotelev2">&gt; &gt; -bash-4.1#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; nodes which are showing more orted process, I am restarted.  But it is
</span><br>
<span class="quotelev1">&gt; not sure after restart it may take or it may not take.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please advoice/help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Venkat
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23035/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23036.php">Teranishi, Keita: "[OMPI users] (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23034.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>In reply to:</strong> <a href="23027.php">Reuti: "Re: [OMPI users] Request for help/suggestion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23144.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Request for help/suggestion"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23144.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Request for help/suggestion"</a>
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
