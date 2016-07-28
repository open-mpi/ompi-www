<?
$subject_val = "Re: [OMPI users] mpiexec hangs - new install";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 24 18:40:31 2010" -->
<!-- isoreceived="20100724224031" -->
<!-- sent="Sat, 24 Jul 2010 15:40:44 -0700" -->
<!-- isosent="20100724224044" -->
<!-- name="James" -->
<!-- email="jamesqf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiexec hangs - new install" -->
<!-- id="op.vgbhczxw75arni_at_t61.site" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="64D2C054-AA58-407D-926F-A4A782872066_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpiexec hangs - new install<br>
<strong>From:</strong> James (<em>jamesqf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-24 18:40:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13770.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Previous message:</strong> <a href="13768.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>In reply to:</strong> <a href="13766.php">Ralph Castain: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13770.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think that could be the problem.  I can ssh between machines,
<br>
have a coulple of common directories shared with NFS, etc.  And OpenMPI
<br>
runs (or starts, anyway) under ssh, doesn't it?
<br>
<p>James
<br>
<p><p>On Fri, 23 Jul 2010 14:17:48 -0700, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Check for a firewall blocking tcp communications - that's the most  
</span><br>
<span class="quotelev1">&gt; common issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 23, 2010, at 3:05 PM, James wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to get OpenMPI running on my home network.  This has two
</span><br>
<span class="quotelev2">&gt;&gt; machines, t61 and quad, both running SuSE 11. I'm using the &quot;hello_c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; program from the examples as a test.  It will run fine on each machine,
</span><br>
<span class="quotelev2">&gt;&gt; using whatever number or processes I specify.  However, when I try to
</span><br>
<span class="quotelev2">&gt;&gt; run on multiple machines, it hangs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I start from t61 with the command &quot;mpiexec -host t61,quad -np 2  
</span><br>
<span class="quotelev2">&gt;&gt; hello&quot;
</span><br>
<span class="quotelev2">&gt;&gt; then I see that command when I do a ps -ax on t61.   On quad I see
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orted --daemonize (long parameter string)&quot;.  Both of them seem to be
</span><br>
<span class="quotelev2">&gt;&gt; silently waiting on some event, but I've no idea what.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Both machines are running OpenMPI 1.4.2 (compiled from same tar file),
</span><br>
<span class="quotelev2">&gt;&gt; installed in /opt/openmpi.  The executables are in the same user/path
</span><br>
<span class="quotelev2">&gt;&gt; on each machine (/home/me/src/openmpi/examples), and path,
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH, and so on all seem the same.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; James
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS: Also, may I suggest putting something in the FAQ pointing out
</span><br>
<span class="quotelev2">&gt;&gt; that the environment vars need to be set in .tcshrc, not .login?
</span><br>
<span class="quotelev2">&gt;&gt; It would have saved me several hours.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13770.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Previous message:</strong> <a href="13768.php">Cristobal Navarro: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>In reply to:</strong> <a href="13766.php">Ralph Castain: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13770.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
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
