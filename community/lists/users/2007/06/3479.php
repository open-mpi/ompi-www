<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 23:47:28 2007" -->
<!-- isoreceived="20070613034728" -->
<!-- sent="Wed, 13 Jun 2007 11:47:21 +0800" -->
<!-- isosent="20070613034721" -->
<!-- name="lichanjuan04_at_[hidden]" -->
<!-- email="lichanjuan04_at_[hidden]" -->
<!-- subject="[OMPI users] can't run parallel job on cluster" -->
<!-- id="1181706441.3264.39.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> <a href="mailto:lichanjuan04_at_[hidden]?Subject=Re:%20[OMPI%20users]%20can't%20run%20parallel%20job%20on%20cluster"><em>lichanjuan04_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-06-12 23:47:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3480.php">lichanjuan04_at_[hidden]: "[OMPI users] can't run parallel job on cluster"</a>
<li><strong>Previous message:</strong> <a href="3478.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3480.php">lichanjuan04_at_[hidden]: "[OMPI users] can't run parallel job on cluster"</a>
<li><strong>Reply:</strong> <a href="3480.php">lichanjuan04_at_[hidden]: "[OMPI users] can't run parallel job on cluster"</a>
<li><strong>Maybe reply:</strong> <a href="3494.php">Jeff Squyres: "Re: [OMPI users] can't run parallel job on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,all:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I am a first user of openmpi, I have used mpich before.I found there
<br>
are many differenties between them.So I am confused.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I build openmpi on a ps3 using default option,that is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ ./configure --prefiex=
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ make all install
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I modify my .bash_profile file and add openmpi lib and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;executable file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in LD_LIBRARY_PATH and PATH.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I use NFS file system between server and node, I just install
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openmpi on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;server.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I check the mailling list and FAQ, knowing default lancher is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ssh,but I
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sitll add &quot;pls_rsh_agent = ssh&quot; in openmpi-mca-params.conf.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I test the hello_c.c example. when I run:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$mpiexec -host ps3-2 -n 4 ./hello
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;it can run correctly(ps3-2 is hostname of server).I try it on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;each node.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;but when I run:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ mpiexec -hostfile host.txt -n 4 ./hello
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;content of host.txt:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ps3-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ps3-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;there is error message:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bash: orted: command not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base/pls_base_orted_cmds.c at line 275
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pls_rsh_module.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at line 1164
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;errmgr_hnp.c at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;line 90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ps3-1:25154] ERROR: A daemon on node ps3-2 failed to start as
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expected.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ps3-1:25154] ERROR: There may be more information available
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ps3-1:25154] ERROR: the remote shell (see above).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ps3-1:25154] ERROR: The daemon exited unexpectedly with status
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;127.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base/pls_base_orted_cmds.c at line 188
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pls_rsh_module.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at line 1196
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpiexec was unable to cleanly terminate the daemons for this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;job.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Returned value Timeout instead of ORTE_SUCCESS.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I search the same problem in mailing list and FAQ, saying PATH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LD_LIBRARY_PATH are not setted correctly,but I ensure them in my
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;path.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I use openmpi in first time, so hope anybody help me,thanks a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lot!
<br>
<pre>
-- 
Li, Chanjuan                                        Lanzhou University
Distributed &amp; Embedded System Lab              <a href="http://dslab.lzu.edu.cn">http://dslab.lzu.edu.cn</a>
School of Information Science and Engeneering        lichanjuan04_at_[hidden]
Tianshui South Road 222. Lanzhou 730000                      .P.R.China
Tel:+86-931-8912025                                Fax:+86-931-8912022

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3479/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3480.php">lichanjuan04_at_[hidden]: "[OMPI users] can't run parallel job on cluster"</a>
<li><strong>Previous message:</strong> <a href="3478.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3480.php">lichanjuan04_at_[hidden]: "[OMPI users] can't run parallel job on cluster"</a>
<li><strong>Reply:</strong> <a href="3480.php">lichanjuan04_at_[hidden]: "[OMPI users] can't run parallel job on cluster"</a>
<li><strong>Maybe reply:</strong> <a href="3494.php">Jeff Squyres: "Re: [OMPI users] can't run parallel job on cluster"</a>
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
