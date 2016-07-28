<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 23:59:05 2007" -->
<!-- isoreceived="20070613035905" -->
<!-- sent="Wed, 13 Jun 2007 11:58:59 +0800" -->
<!-- isosent="20070613035859" -->
<!-- name="lichanjuan04_at_[hidden]" -->
<!-- email="lichanjuan04_at_[hidden]" -->
<!-- subject="[OMPI users] can't run parallel job on cluster" -->
<!-- id="1181707139.4125.6.camel_at_localhost.localdomain" -->
<!-- inreplyto="1181706441.3264.39.camel_at_localhost.localdomain" -->
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
<strong>Date:</strong> 2007-06-12 23:58:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3481.php">Julian Cummings: "[OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Previous message:</strong> <a href="3479.php">lichanjuan04_at_[hidden]: "[OMPI users] can't run parallel job on cluster"</a>
<li><strong>In reply to:</strong> <a href="3479.php">lichanjuan04_at_[hidden]: "[OMPI users] can't run parallel job on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3494.php">Jeff Squyres: "Re: [OMPI users] can't run parallel job on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2007-06-13 at 11:47 +0800, lichanjuan04_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; hi,all:
</span><br>
<span class="quotelev1">&gt;     I am a first user of openmpi, I have used mpich before.I found there
</span><br>
<span class="quotelev1">&gt; are many differenties between them.So I am confused.
</span><br>
<span class="quotelev1">&gt;         I build openmpi on a ps3 using default option,that is
</span><br>
<span class="quotelev1">&gt;           $ ./configure --prefiex=
</span><br>
<span class="quotelev1">&gt;           $ make all install
</span><br>
<span class="quotelev1">&gt;         I modify my .bash_profile file and add openmpi lib and
</span><br>
<span class="quotelev1">&gt;         executable file
</span><br>
<span class="quotelev1">&gt;         in LD_LIBRARY_PATH and PATH.
</span><br>
<span class="quotelev1">&gt;         I use NFS file system between server and node, I just install
</span><br>
<span class="quotelev1">&gt;         openmpi on
</span><br>
<span class="quotelev1">&gt;         server.
</span><br>
<span class="quotelev1">&gt;         I check the mailling list and FAQ, knowing default lancher is
</span><br>
<span class="quotelev1">&gt;         ssh,but I
</span><br>
<span class="quotelev1">&gt;         sitll add &quot;pls_rsh_agent = ssh&quot; in openmpi-mca-params.conf.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         I test the hello_c.c example. when I run:
</span><br>
<span class="quotelev1">&gt;                 $mpiexec -host ps3-2 -n 4 ./hello
</span><br>
<span class="quotelev1">&gt;         it can run correctly(ps3-2 is hostname of server).I try it on
</span><br>
<span class="quotelev1">&gt;         each node.
</span><br>
<span class="quotelev1">&gt;         but when I run:
</span><br>
<span class="quotelev1">&gt;                 $ mpiexec -hostfile host.txt -n 4 ./hello
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         content of host.txt:
</span><br>
<span class="quotelev1">&gt;         ps3-1
</span><br>
<span class="quotelev1">&gt;         ps3-2
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         there is error message:
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         bash: orted: command not found
</span><br>
<span class="quotelev1">&gt;         [ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt;         base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt;         [ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt;         pls_rsh_module.c
</span><br>
<span class="quotelev1">&gt;         at line 1164
</span><br>
<span class="quotelev1">&gt;         [ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt;         errmgr_hnp.c at
</span><br>
<span class="quotelev1">&gt;         line 90
</span><br>
<span class="quotelev1">&gt;         [ps3-1:25154] ERROR: A daemon on node ps3-2 failed to start as
</span><br>
<span class="quotelev1">&gt;         expected.
</span><br>
<span class="quotelev1">&gt;         [ps3-1:25154] ERROR: There may be more information available
</span><br>
<span class="quotelev1">&gt;         from
</span><br>
<span class="quotelev1">&gt;         [ps3-1:25154] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt;         [ps3-1:25154] ERROR: The daemon exited unexpectedly with status
</span><br>
<span class="quotelev1">&gt;         127.
</span><br>
<span class="quotelev1">&gt;         [ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt;         base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt;         [ps3-1:25154] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt;         pls_rsh_module.c
</span><br>
<span class="quotelev1">&gt;         at line 1196
</span><br>
<span class="quotelev1">&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         mpiexec was unable to cleanly terminate the daemons for this
</span><br>
<span class="quotelev1">&gt;         job.
</span><br>
<span class="quotelev1">&gt;         Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         I search the same problem in mailing list and FAQ, saying PATH
</span><br>
<span class="quotelev1">&gt;         and
</span><br>
<span class="quotelev1">&gt;         LD_LIBRARY_PATH are not setted correctly,but I ensure them in my
</span><br>
<span class="quotelev1">&gt;         path.
</span><br>
<span class="quotelev1">&gt;         I use openmpi in first time, so hope anybody help me,thanks a
</span><br>
<span class="quotelev1">&gt;         lot!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
sorry, I forget some information. I use openmpi1.2, I try to run the
<br>
command on remote host such as ,run command on ps3-1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ mpiexec -host ps3-2 -n 2 ./a.out
<br>
there appear same error message.I think there is something wrong with
<br>
rsh/ssh,but I don't where to modify or some file I missed. 
<br>
if someone met same problem,please tell me the solution. I will be
<br>
grateful. thanks very much!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Li chanjuan
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3480/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3481.php">Julian Cummings: "[OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Previous message:</strong> <a href="3479.php">lichanjuan04_at_[hidden]: "[OMPI users] can't run parallel job on cluster"</a>
<li><strong>In reply to:</strong> <a href="3479.php">lichanjuan04_at_[hidden]: "[OMPI users] can't run parallel job on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3494.php">Jeff Squyres: "Re: [OMPI users] can't run parallel job on cluster"</a>
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
