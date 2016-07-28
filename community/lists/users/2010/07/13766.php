<?
$subject_val = "Re: [OMPI users] mpiexec hangs - new install";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 23 17:17:57 2010" -->
<!-- isoreceived="20100723211757" -->
<!-- sent="Fri, 23 Jul 2010 15:17:48 -0600" -->
<!-- isosent="20100723211748" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiexec hangs - new install" -->
<!-- id="64D2C054-AA58-407D-926F-A4A782872066_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="op.vgbd7sat75arni_at_t61.site" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-23 17:17:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13767.php">Tim Prince: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Previous message:</strong> <a href="13765.php">James: "[OMPI users] mpiexec hangs - new install"</a>
<li><strong>In reply to:</strong> <a href="13765.php">James: "[OMPI users] mpiexec hangs - new install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13769.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Reply:</strong> <a href="13769.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Reply:</strong> <a href="13770.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check for a firewall blocking tcp communications - that's the most common issue.
<br>
<p>On Jul 23, 2010, at 3:05 PM, James wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to get OpenMPI running on my home network.  This has two
</span><br>
<span class="quotelev1">&gt; machines, t61 and quad, both running SuSE 11. I'm using the &quot;hello_c&quot;
</span><br>
<span class="quotelev1">&gt; program from the examples as a test.  It will run fine on each machine,
</span><br>
<span class="quotelev1">&gt; using whatever number or processes I specify.  However, when I try to
</span><br>
<span class="quotelev1">&gt; run on multiple machines, it hangs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I start from t61 with the command &quot;mpiexec -host t61,quad -np 2 hello&quot;
</span><br>
<span class="quotelev1">&gt; then I see that command when I do a ps -ax on t61.   On quad I see
</span><br>
<span class="quotelev1">&gt; &quot;orted --daemonize (long parameter string)&quot;.  Both of them seem to be
</span><br>
<span class="quotelev1">&gt; silently waiting on some event, but I've no idea what.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both machines are running OpenMPI 1.4.2 (compiled from same tar file),
</span><br>
<span class="quotelev1">&gt; installed in /opt/openmpi.  The executables are in the same user/path
</span><br>
<span class="quotelev1">&gt; on each machine (/home/me/src/openmpi/examples), and path,
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH, and so on all seem the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; James
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: Also, may I suggest putting something in the FAQ pointing out
</span><br>
<span class="quotelev1">&gt; that the environment vars need to be set in .tcshrc, not .login?
</span><br>
<span class="quotelev1">&gt; It would have saved me several hours.
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
<li><strong>Next message:</strong> <a href="13767.php">Tim Prince: "Re: [OMPI users] Help on the big picture.."</a>
<li><strong>Previous message:</strong> <a href="13765.php">James: "[OMPI users] mpiexec hangs - new install"</a>
<li><strong>In reply to:</strong> <a href="13765.php">James: "[OMPI users] mpiexec hangs - new install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13769.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Reply:</strong> <a href="13769.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Reply:</strong> <a href="13770.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
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
