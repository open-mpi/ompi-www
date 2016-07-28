<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 21 10:00:37 2007" -->
<!-- isoreceived="20070521140037" -->
<!-- sent="Mon, 21 May 2007 10:00:41 -0400" -->
<!-- isosent="20070521140041" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gridengine integration problems" -->
<!-- id="4651A609.1030802_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5711d990705202355k24884c33mac92a1a1632600bc_at_mail.gmail.com" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-21 10:00:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3306.php">Tom Clune: "[OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>Previous message:</strong> <a href="3304.php">G&#246;tz Waschk: "[OMPI users] Gridengine integration problems"</a>
<li><strong>In reply to:</strong> <a href="3304.php">G&#246;tz Waschk: "[OMPI users] Gridengine integration problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3308.php">Götz Waschk: "Re: [OMPI users] Gridengine integration problems"</a>
<li><strong>Reply:</strong> <a href="3308.php">Götz Waschk: "Re: [OMPI users] Gridengine integration problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi G&#246;tz,
<br>
<p>I have tried using SSH instead of rsh before but I didn't use with the 
<br>
kerberos auth. I can see you've tried to run qrsh -inherit via ssh 
<br>
already before the mpirun line and verify the connection works.
<br>
<p>I believe the &quot;Permission denied, please try again.&quot; message is coming 
<br>
from ssh daemon (sshd) on geminide2 and 7 that are preventing the 
<br>
connections from geminide8, which in turns they cause orted not able to 
<br>
launch on those 2 nodes.
<br>
<p>Can you enable debug for sshd (with either -d or -ddd) on the SGE 
<br>
cluster config with qconf -mconf, to see why the sshd sometimes blocking 
<br>
ssh connection? You may get tons of outputs but it should show you the 
<br>
reason why the permission is denied. It could be the setting in 
<br>
sshd_config or something else we don't know about yet.
<br>
<p>G&#246;tz Waschk wrote:
<br>
<span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have trouble with the Gridengine integration of openmpi. When I run
</span><br>
<span class="quotelev1">&gt; a job with only 4 processes, it runs fine. With more processes, mpirun
</span><br>
<span class="quotelev1">&gt; sometimes fails to connect to the remote nodes, the qrsh calls fail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll attach a job script and the error output. As you can see from the
</span><br>
<span class="quotelev1">&gt; 'for' loop, I can connect to all nodes just fine, it is the qrsh
</span><br>
<span class="quotelev1">&gt; executed by mpirun that fails. Qrsh was configured to run ssh with
</span><br>
<span class="quotelev1">&gt; kerberos authentification (ssh -tt -o GSSAPIDelegateCredentials=no).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My versions are openmpi 1.2.2, SGE 6.0u9, RHEL5. Any idea where the
</span><br>
<span class="quotelev1">&gt; problem could be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards, G&#246;tz Waschk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3306.php">Tom Clune: "[OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>Previous message:</strong> <a href="3304.php">G&#246;tz Waschk: "[OMPI users] Gridengine integration problems"</a>
<li><strong>In reply to:</strong> <a href="3304.php">G&#246;tz Waschk: "[OMPI users] Gridengine integration problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3308.php">Götz Waschk: "Re: [OMPI users] Gridengine integration problems"</a>
<li><strong>Reply:</strong> <a href="3308.php">Götz Waschk: "Re: [OMPI users] Gridengine integration problems"</a>
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
