<?
$subject_val = "Re: [OMPI users] avoid usage of ssh on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 12:07:14 2008" -->
<!-- isoreceived="20081114170714" -->
<!-- sent="Fri, 14 Nov 2008 10:07:04 -0700" -->
<!-- isosent="20081114170704" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] avoid usage of ssh on local machine" -->
<!-- id="1DFF3CFE-EDCD-43EE-B6A6-769BCFD6AE5E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EF9AA6DFC03E4D45A3BFE35E162D8AAD6AF103_at_DEERLS7E8A.ww007.siemens.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] avoid usage of ssh on local machine<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-14 12:07:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7315.php">Jeff Squyres: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>Previous message:</strong> <a href="7313.php">Jeff Squyres: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>In reply to:</strong> <a href="7311.php">Sun, Yongqi (E F ES EN 72): "[OMPI users] avoid usage of ssh on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7320.php">Sun, Yongqi (E F ES EN 72): "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Reply:</strong> <a href="7320.php">Sun, Yongqi (E F ES EN 72): "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>OMPI doesn't use ssh by default to launch a daemon local to mpirun -  
<br>
instead, we locally fork/exec the orted.
<br>
<p>The problem here is that OMPI doesn't realize that you are launching  
<br>
on the local machine. This is usually caused by confusion when IP  
<br>
resolving the hostname returned by gethostname vs. the IP address on  
<br>
your machine.
<br>
<p>Take a look at ifconfig and see what addresses are on your machine. Do  
<br>
any of them match the IP address OMPI is trying to launch to?
<br>
<p>Ralph
<br>
<p><p>On Nov 14, 2008, at 5:27 AM, Sun, Yongqi (E F ES EN 72) wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have two questions about ssh and details follow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any way to prevent the usage of ssh on my local desktop and
</span><br>
<span class="quotelev1">&gt; launch locally by default? (The FAQ page writes &quot;Also note that if  
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt; a launcher that uses a hostfile and no hostfile is specified, all
</span><br>
<span class="quotelev1">&gt; processes are launched on the local host.&quot; Unfortunately, this is not
</span><br>
<span class="quotelev1">&gt; the case for me. )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If ssh/rsh has to be used, can I redirect the host to local machine?  
</span><br>
<span class="quotelev1">&gt; (I
</span><br>
<span class="quotelev1">&gt; have tried to add &quot;192.168.160.1&quot; to /etc/hosts, but nothing  
</span><br>
<span class="quotelev1">&gt; changed.) I
</span><br>
<span class="quotelev1">&gt; want to use OpenMPI in Eclipse, where &quot;--hostfile&quot; option cannot be
</span><br>
<span class="quotelev1">&gt; added to mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.2.8 on my Linux desktop (two quad-core AMD Opteron
</span><br>
<span class="quotelev1">&gt; 2354). Although I always launch mpirun only on the local machine,  
</span><br>
<span class="quotelev1">&gt; ssh is
</span><br>
<span class="quotelev1">&gt; used by the default case. For example,
</span><br>
<span class="quotelev1">&gt;    shell% cd [openmpi-1.2.8]/examples
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code can be compiled (so IMHO the PATH and LD_LIBRARY_PATH are
</span><br>
<span class="quotelev1">&gt; correct)
</span><br>
<span class="quotelev1">&gt;    shell% mpicc -o hello_c hello_c.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when lauched
</span><br>
<span class="quotelev1">&gt;    shell% mpirun -np 2 hello_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are runtime errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh: connect to host 192.168.160.1 port 22: No route to host
</span><br>
<span class="quotelev1">&gt; [W71c-140644:14261] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [W71c-140644:14261] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1158
</span><br>
<span class="quotelev1">&gt; [W71c-140644:14261] [0,0,0] ORTE_ERROR_LOG: Timeout in file  
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c
</span><br>
<span class="quotelev1">&gt; at line 90
</span><br>
<span class="quotelev1">&gt; [W71c-140644:14261] ERROR: A daemon on node 192.168.160.1 failed to
</span><br>
<span class="quotelev1">&gt; start as expected.
</span><br>
<span class="quotelev1">&gt; [W71c-140644:14261] ERROR: There may be more information available  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; [W71c-140644:14261] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [W71c-140644:14261] ERROR: The daemon exited unexpectedly with status
</span><br>
<span class="quotelev1">&gt; 255.
</span><br>
<span class="quotelev1">&gt; [W71c-140644:14261] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [W71c-140644:14261] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1190
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev1">&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &lt;&lt;ompi-output.tar.gz&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I'm lauching on my local desktop, where no &quot;192.168.160.1&quot;
</span><br>
<span class="quotelev1">&gt; exists. I have to specify a hostfile to make it working as expected
</span><br>
<span class="quotelev1">&gt;    shell% mpirun -np 2 --hostfile myhostfile hello_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where the &quot;myhostfile&quot; contains my local machine &quot;W71C-140644&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best wishes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sun, Yongqi
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.gz&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="7315.php">Jeff Squyres: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>Previous message:</strong> <a href="7313.php">Jeff Squyres: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>In reply to:</strong> <a href="7311.php">Sun, Yongqi (E F ES EN 72): "[OMPI users] avoid usage of ssh on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7320.php">Sun, Yongqi (E F ES EN 72): "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Reply:</strong> <a href="7320.php">Sun, Yongqi (E F ES EN 72): "Re: [OMPI users] avoid usage of ssh on local machine"</a>
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
