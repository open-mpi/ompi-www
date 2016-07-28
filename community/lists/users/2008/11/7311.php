<?
$subject_val = "[OMPI users] avoid usage of ssh on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 07:27:27 2008" -->
<!-- isoreceived="20081114122727" -->
<!-- sent="Fri, 14 Nov 2008 13:27:16 +0100" -->
<!-- isosent="20081114122716" -->
<!-- name="Sun, Yongqi (E F ES EN 72)" -->
<!-- email="yongqi.sun_at_[hidden]" -->
<!-- subject="[OMPI users] avoid usage of ssh on local machine" -->
<!-- id="EF9AA6DFC03E4D45A3BFE35E162D8AAD6AF103_at_DEERLS7E8A.ww007.siemens.net" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] avoid usage of ssh on local machine<br>
<strong>From:</strong> Sun, Yongqi (E F ES EN 72) (<em>yongqi.sun_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-14 07:27:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7312.php">Geraldo Veiga: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>Previous message:</strong> <a href="7310.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7314.php">Ralph Castain: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Reply:</strong> <a href="7314.php">Ralph Castain: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have two questions about ssh and details follow.
<br>
<p>Questions:
<br>
<p>Is there any way to prevent the usage of ssh on my local desktop and
<br>
launch locally by default? (The FAQ page writes &quot;Also note that if using
<br>
a launcher that uses a hostfile and no hostfile is specified, all
<br>
processes are launched on the local host.&quot; Unfortunately, this is not
<br>
the case for me. )
<br>
<p>If ssh/rsh has to be used, can I redirect the host to local machine? (I
<br>
have tried to add &quot;192.168.160.1&quot; to /etc/hosts, but nothing changed.) I
<br>
want to use OpenMPI in Eclipse, where &quot;--hostfile&quot; option cannot be
<br>
added to mpirun.
<br>
<p>Details:
<br>
<p>I'm using OpenMPI 1.2.8 on my Linux desktop (two quad-core AMD Opteron
<br>
2354). Although I always launch mpirun only on the local machine, ssh is
<br>
used by the default case. For example,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;shell% cd [openmpi-1.2.8]/examples
<br>
<p>The code can be compiled (so IMHO the PATH and LD_LIBRARY_PATH are
<br>
correct)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;shell% mpicc -o hello_c hello_c.c
<br>
<p>But when lauched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;shell% mpirun -np 2 hello_c
<br>
<p>There are runtime errors:
<br>
<p>ssh: connect to host 192.168.160.1 port 22: No route to host
<br>
[W71c-140644:14261] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[W71c-140644:14261] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1158
<br>
[W71c-140644:14261] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c
<br>
at line 90
<br>
[W71c-140644:14261] ERROR: A daemon on node 192.168.160.1 failed to
<br>
start as expected.
<br>
[W71c-140644:14261] ERROR: There may be more information available from
<br>
[W71c-140644:14261] ERROR: the remote shell (see above).
<br>
[W71c-140644:14261] ERROR: The daemon exited unexpectedly with status
<br>
255.
<br>
[W71c-140644:14261] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 188
<br>
[W71c-140644:14261] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1190
<br>
------------------------------------------------------------------------
<br>
<pre>
--
mpirun was unable to cleanly terminate the daemons for this job.
Returned value Timeout instead of ORTE_SUCCESS.
------------------------------------------------------------------------
--
 &lt;&lt;ompi-output.tar.gz&gt;&gt; 
However, I'm lauching on my local desktop, where no &quot;192.168.160.1&quot;
exists. I have to specify a hostfile to make it working as expected
    shell% mpirun -np 2 --hostfile myhostfile hello_c
Where the &quot;myhostfile&quot; contains my local machine &quot;W71C-140644&quot;
Best wishes
 
Sun, Yongqi

</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7311/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7312.php">Geraldo Veiga: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<li><strong>Previous message:</strong> <a href="7310.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7314.php">Ralph Castain: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Reply:</strong> <a href="7314.php">Ralph Castain: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
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
