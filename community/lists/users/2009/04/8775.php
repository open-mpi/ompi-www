<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  4 09:35:25 2009" -->
<!-- isoreceived="20090404133525" -->
<!-- sent="Sat, 4 Apr 2009 09:35:16 -0400" -->
<!-- isosent="20090404133516" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="1E4D18AB-1BA2-421B-84BF-27DF4C62A02E_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="a599d60e0904040251v42a7bca9odc171b519aa5c04f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-04 09:35:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8776.php">Jeff Squyres: "Re: [OMPI users] Problem with insatlling OpenMPI on compute node"</a>
<li><strong>Previous message:</strong> <a href="8774.php">Ankush Kaul: "[OMPI users] Problem with insatlling OpenMPI on compute node"</a>
<li><strong>In reply to:</strong> <a href="8773.php">Ankush Kaul: "[OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8778.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8778.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It might be best to:
<br>
<p>1. Setup a non-root user to run MPI applications
<br>
2. Setup SSH keys between the hosts for this non-root user so that you  
<br>
can &quot;ssh &lt;otherhost&gt; uptime&quot; and not be prompted for a password/ 
<br>
passphrase
<br>
<p>This should help.
<br>
<p><p>On Apr 4, 2009, at 5:51 AM, Ankush Kaul wrote:
<br>
<p><span class="quotelev1">&gt; I followed the steps given here to setup up openMPI cluster : <a href="http://www.ps3cluster.umassd.edu/step3mpi.html">http://www.ps3cluster.umassd.edu/step3mpi.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My cluster consists of two nodes, master(192.168.67.18) and  
</span><br>
<span class="quotelev1">&gt; salve(192.168.45.65), connected directly through a cross cable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After setting up the cluster n configuring the master node, i  
</span><br>
<span class="quotelev1">&gt; mounted  /tmp folder of master node on the slave node(i had some  
</span><br>
<span class="quotelev1">&gt; problems with nfs at first but i worked my way out of it).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then i copied the 'pi.c' program in the /tmp folder and successfully  
</span><br>
<span class="quotelev1">&gt; complied it, giving me a binary file 'pi'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now when i try to run the binary file using the following command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #mpirun &#150;np 2 ./Pi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; root_at_192.168.45.65's password:
</span><br>
<span class="quotelev1">&gt; &lt;it asks for the password&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after entering the password it gives the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; [ccomp.cluster:18963] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/ 
</span><br>
<span class="quotelev1">&gt; pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [ccomp.cluster:18963] [0,0,0] ORTE_ERROR_LOG: Timeout in file  
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev1">&gt; [ccomp.cluster:18963] [0,0,0] ORTE_ERROR_LOG: Timeout in file  
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt; [ccomp.cluster:18963] ERROR: A daemon on node 192.168.45.65 failed  
</span><br>
<span class="quotelev1">&gt; to start as expected.
</span><br>
<span class="quotelev1">&gt; [ccomp.cluster:18963] ERROR: There may be more information available  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; [ccomp.cluster:18963] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [ccomp.cluster:18963] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev1">&gt; status 127.
</span><br>
<span class="quotelev1">&gt; [ccomp.cluster:18963] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/ 
</span><br>
<span class="quotelev1">&gt; pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [ccomp.cluster:18963] [0,0,0] ORTE_ERROR_LOG: Timeout in file  
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1198
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job.  
</span><br>
<span class="quotelev1">&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am totally lost now, as this is the first time i am working on a  
</span><br>
<span class="quotelev1">&gt; cluster project, and need some help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Ankush
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8776.php">Jeff Squyres: "Re: [OMPI users] Problem with insatlling OpenMPI on compute node"</a>
<li><strong>Previous message:</strong> <a href="8774.php">Ankush Kaul: "[OMPI users] Problem with insatlling OpenMPI on compute node"</a>
<li><strong>In reply to:</strong> <a href="8773.php">Ankush Kaul: "[OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8778.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8778.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
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
