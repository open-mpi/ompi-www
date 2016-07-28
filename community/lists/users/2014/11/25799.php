<?
$subject_val = "Re: [OMPI users] How OMPI picks ethernet interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 07:19:53 2014" -->
<!-- isoreceived="20141113121953" -->
<!-- sent="Thu, 13 Nov 2014 13:19:40 +0100" -->
<!-- isosent="20141113121940" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How OMPI picks ethernet interfaces" -->
<!-- id="B3F1556C-DFC0-4E80-9701-28B2D6A5189B_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54641087.4040402_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How OMPI picks ethernet interfaces<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-13 07:19:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25800.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25798.php">Reuti: "Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25784.php">Gus Correa: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25804.php">Gus Correa: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25804.php">Gus Correa: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus,
<br>
<p>Am 13.11.2014 um 02:59 schrieb Gus Correa:
<br>
<p><span class="quotelev1">&gt; On 11/12/2014 05:45 PM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 12.11.2014 um 17:27 schrieb Reuti:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 11.11.2014 um 02:25 schrieb Ralph Castain:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Another thing you can do is (a) ensure you built with &#151;enable-debug,
</span><br>
<span class="quotelev2">&gt;&gt; and then (b) run it with -mca oob_base_verbose 100
</span><br>
<span class="quotelev2">&gt;&gt; (without the tcp_if_include option) so we can watch
</span><br>
<span class="quotelev2">&gt;&gt; the connection handshake and see what it is doing.
</span><br>
<span class="quotelev2">&gt;&gt; The &#151;hetero-nodes will have not affect here and can be ignored.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Done. It really tries to connect to the outside
</span><br>
<span class="quotelev2">&gt;&gt; interface of the headnode. But being there a firewall or not:
</span><br>
<span class="quotelev2">&gt;&gt; the nodes have no clue how to reach 137.248.0.0 -
</span><br>
<span class="quotelev2">&gt;&gt; they have no gateway to this network at all.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have to revert this.
</span><br>
<span class="quotelev2">&gt;&gt; They think that there is a gateway although it isn't.
</span><br>
<span class="quotelev2">&gt;&gt; When I remove the entry by hand for the gateway in the
</span><br>
<span class="quotelev2">&gt;&gt; routing table it starts up instantly too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; While I can do this on my own cluster I still have the
</span><br>
<span class="quotelev2">&gt;&gt; 30 seconds delay on a cluster where I'm not root,
</span><br>
<span class="quotelev2">&gt;&gt; while this can be because of the firewall there.
</span><br>
<span class="quotelev2">&gt;&gt; The gateway on this cluster is indeed going
</span><br>
<span class="quotelev2">&gt;&gt; to the outside world.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Personally I find this behavior a little bit too aggressive
</span><br>
<span class="quotelev2">&gt;&gt; to use all interfaces. If you don't check this carefully
</span><br>
<span class="quotelev2">&gt;&gt; beforehand and start a long running application one might
</span><br>
<span class="quotelev2">&gt;&gt; even not notice the delay during the startup.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You could use the mca parameter file
</span><br>
<span class="quotelev1">&gt; (say, $prefix/etc/openmpi-mca-params.conf) to configure cluster-wide
</span><br>
<span class="quotelev1">&gt; the oob (and btl) interfaces to be used.
</span><br>
<span class="quotelev1">&gt; The users can still override your choices if they want.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just put a line like this in openmpi-mca-params.conf :
</span><br>
<span class="quotelev1">&gt; oob_tcp_if_include=192.168.154.0/26
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (and similar for btl_tcp_if_include, btl_openib_if_include).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Get a full list from &quot;ompi_info --all --all |grep if_include&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See these FAQ:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compute nodes tend to be multi-homed, so what criterion would OMPI use
</span><br>
<span class="quotelev1">&gt; to select one interface among many,
</span><br>
<p>My compute nodes are having two interfaces: one for MPI (and the low ssh/SGE traffic to start processes somewhere) and one for NFS to transfer files from/to the file server. So: Open MPI may use both interfaces without telling me anything about it? How will it split the traffic? 50%/50%? When there is a heavy file transfer on the NFS interface: might it hurt Open MPI's communication or will it balance the usage on-the-fly?
<br>
<p>When I prepare a machinefile with the name of the interfaces (or get the names from SGE's PE_HOSTFILE) it should use just this (except native IB), and not looking around for other paths to the other machine(s) (IMO). Therefore different interfaces have different names in my setup. &quot;node01&quot; is just eth0 and different from &quot;node01-nfs&quot; for eth1.
<br>
<p><p><span class="quotelev1">&gt; not knowing beforehand what exists in a particular computer?
</span><br>
<span class="quotelev1">&gt; There would be a risk to make a bad choice.
</span><br>
<span class="quotelev1">&gt; The current approach gives you everything, and you
</span><br>
<span class="quotelev1">&gt; pick/select/restrict what you want to fit your needs,
</span><br>
<span class="quotelev1">&gt; with mca parameters (which can be set in several
</span><br>
<span class="quotelev1">&gt; ways and with various scopes).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think this bad.
</span><br>
<span class="quotelev1">&gt; However, I am biased about this.
</span><br>
<span class="quotelev1">&gt; I like and use the openmpi-mca-params.conf file
</span><br>
<span class="quotelev1">&gt; to setup sensible defaults.
</span><br>
<span class="quotelev1">&gt; At least I think they are sensible. :)
</span><br>
<p>I see that this can be prepared for all users this way. Whenever they use my installed version it will work - maybe I have to investigate on some other clusters where I'm not root what to enter there, but it can be done for sure.
<br>
<p>BUT: it may be a rare situation that a group for quantum chemistry is having a sysadmin on their own taking care of the clusters and the well behaving operation of the installed software, being it applications or libraries. Often any PhD student in other groups will get a side project: please install software XY for the group. They are chemists and want to get the software running - they are no experts of Open MPI*. They don't care for a tight integration or using the correct interfaces as long as the application delivers the results in the end. For example: ORCA**. It's necessary for the users of the software to install a shared library of Open MPI in a specific version. I see in the ORCA*** forum that many struggle with it to compile a shared library version of Open MPI and have access to it during execution, i.e. how to set LD_LIBRARY_PATH that it's known on the slaves. The cluster admins are in another department and refuse to make any special arrangements for a single group sometimes. And as ORCA calls `mpiexec` several times during one job, the delay could occur several times.
<br>
<p>On some other clusters that we have access to, the admins prepare Open MPI installations accessible by `modules`. But often not for the required combination of Open MPI and compiler type and version which is needed. If a software vendor suggests to use compiler X in version Y it's the best to follow that approach as it will generate less issues which might need to be investigated - i.e. numerical variations as different compilers optimize in a different way. Hence you end up to compile the necessary Open MPI on your own again and set again sensible defaults as you lay out above.
<br>
<p>Continued in 2nd email...
<br>
<p>-- Reuti
<br>
<p>*) Sure, there are exceptions and experts too - I don't intend to offend anyone by this statement. But I speak for the groups of QC I have had contact to in the last couple of years.
<br>
<p>**) <a href="http://www.cec.mpg.de/forum/portal.php">http://www.cec.mpg.de/forum/portal.php</a>
<br>
<p>***) The current ORCA needs 1.6.5, but it may change in one point in the future.
<br>
<p><p><p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It tries so independent from the internal or external name of the headnode
</span><br>
<span class="quotelev1">&gt; given in the machinefile - I hit ^C then.
</span><br>
<span class="quotelev1">&gt; I attached the output of Open MPI 1.8.1 for this setup too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;openmpi1.8.3.txt&gt;&lt;openmpi1.8.1.txt&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25777.php">http://www.open-mpi.org/community/lists/users/2014/11/25777.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25781.php">http://www.open-mpi.org/community/lists/users/2014/11/25781.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25784.php">http://www.open-mpi.org/community/lists/users/2014/11/25784.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25800.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25798.php">Reuti: "Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25784.php">Gus Correa: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25804.php">Gus Correa: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25804.php">Gus Correa: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
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
