<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 10:34:02 2009" -->
<!-- isoreceived="20090406143402" -->
<!-- sent="Mon, 6 Apr 2009 20:03:57 +0530" -->
<!-- isosent="20090406143357" -->
<!-- name="Ankush Kaul" -->
<!-- email="ankush.rkaul_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="a599d60e0904060733g1976a491x99f84bc978cedd4f_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1E4D18AB-1BA2-421B-84BF-27DF4C62A02E_at_cisco.com" -->
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
<strong>From:</strong> Ankush Kaul (<em>ankush.rkaul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 10:33:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8779.php">Francesco Pietra: "[OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8777.php">Number Cruncher: "Re: [OMPI users] Bogus memcpy or bogus valgrind record"</a>
<li><strong>In reply to:</strong> <a href="8775.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8781.php">John Hearns: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8781.php">John Hearns: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Sir the problem was with the paths of 'bin' and 'lib' folders so i
<br>
used de *mpirun --prefix* command. I want to run a program 'pi' now using
<br>
the cluster, so where do i place de file on de master and the compute nodes?
<br>
<p>Also how do i come to know that the program is using resources of both the
<br>
nodes?
<br>
<p>On Sat, Apr 4, 2009 at 7:05 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It might be best to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Setup a non-root user to run MPI applications
</span><br>
<span class="quotelev1">&gt; 2. Setup SSH keys between the hosts for this non-root user so that you can
</span><br>
<span class="quotelev1">&gt; &quot;ssh &lt;otherhost&gt; uptime&quot; and not be prompted for a password/passphrase
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 4, 2009, at 5:51 AM, Ankush Kaul wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I followed the steps given here to setup up openMPI cluster :
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.ps3cluster.umassd.edu/step3mpi.html">http://www.ps3cluster.umassd.edu/step3mpi.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My cluster consists of two nodes, master(192.168.67.18) and
</span><br>
<span class="quotelev2">&gt;&gt; salve(192.168.45.65), connected directly through a cross cable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After setting up the cluster n configuring the master node, i mounted
</span><br>
<span class="quotelev2">&gt;&gt;  /tmp folder of master node on the slave node(i had some problems with nfs
</span><br>
<span class="quotelev2">&gt;&gt; at first but i worked my way out of it).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then i copied the 'pi.c' program in the /tmp folder and successfully
</span><br>
<span class="quotelev2">&gt;&gt; complied it, giving me a binary file 'pi'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now when i try to run the binary file using the following command
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #mpirun &#150;np 2 ./Pi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; root_at_192.168.45.65's password:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;it asks for the password&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; after entering the password it gives the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash: orted: command not found
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp.cluster:18963] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp.cluster:18963] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp.cluster:18963] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c
</span><br>
<span class="quotelev2">&gt;&gt; at line 90
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp.cluster:18963] ERROR: A daemon on node 192.168.45.65 failed to
</span><br>
<span class="quotelev2">&gt;&gt; start as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp.cluster:18963] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp.cluster:18963] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp.cluster:18963] ERROR: The daemon exited unexpectedly with status
</span><br>
<span class="quotelev2">&gt;&gt; 127.
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp.cluster:18963] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp.cluster:18963] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_module.c at line 1198
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job. Returned
</span><br>
<span class="quotelev2">&gt;&gt; value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am totally lost now, as this is the first time i am working on a cluster
</span><br>
<span class="quotelev2">&gt;&gt; project, and need some help
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt; Ankush
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8778/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8779.php">Francesco Pietra: "[OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8777.php">Number Cruncher: "Re: [OMPI users] Bogus memcpy or bogus valgrind record"</a>
<li><strong>In reply to:</strong> <a href="8775.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8781.php">John Hearns: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8781.php">John Hearns: "Re: [OMPI users] Problem with running openMPI program"</a>
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
