<?
$subject_val = "Re: [OMPI users] mpiexec hangs - new install";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 24 19:31:22 2010" -->
<!-- isoreceived="20100724233122" -->
<!-- sent="Sat, 24 Jul 2010 17:31:12 -0600" -->
<!-- isosent="20100724233112" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiexec hangs - new install" -->
<!-- id="3F821FB2-9CFB-4571-9B73-7542B8714FC4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="op.vgddadnm75arni_at_t61.site" -->
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
<strong>Date:</strong> 2010-07-24 19:31:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13772.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Previous message:</strong> <a href="13770.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>In reply to:</strong> <a href="13770.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13772.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Reply:</strong> <a href="13772.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Reply:</strong> <a href="13773.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 24, 2010, at 4:40 PM, James wrote:
<br>
<p><span class="quotelev1">&gt; OK, that's the problem.  I turned the firewall off on both machines, and
</span><br>
<span class="quotelev1">&gt; it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the question: how do I fix it?  I searched through the archives, and
</span><br>
<span class="quotelev1">&gt; found that it seems to be a pretty common problem.  Unfortunately, I didn't
</span><br>
<span class="quotelev1">&gt; see a solution that I could understand.  (I'm not a sysadmin, just a person
</span><br>
<span class="quotelev1">&gt; trying to do some programming.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a couple of machines on a local net, with IP addresses in the
</span><br>
<span class="quotelev1">&gt; 192.168.10.1xx range.  There's a router at 192.168.10.1, which is connected
</span><br>
<span class="quotelev1">&gt; to the internet via a cable mode.  So how do I set up my system so my
</span><br>
<span class="quotelev1">&gt; local machines can do whatever talking between themselves that's needed by
</span><br>
<span class="quotelev1">&gt; OpenMPI, while still having a firewall between my system and the outside
</span><br>
<span class="quotelev1">&gt; world?
</span><br>
<p>Most routers provide their own internal-to-external firewall - you might check its setup and see. If it does, then you don't need to also have one on your individual machines.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; James
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: Hate to kvetch, but wouldn't it save a lot of wasted time if basic
</span><br>
<span class="quotelev1">&gt; problems like this were addressed in the FAQ?
</span><br>
<p>Yes, it probably should be. However, a simple search for &quot;firewall&quot; on the user mailing list provides lots of info on how to deal with this issue.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, 23 Jul 2010 14:17:48 -0700, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Check for a firewall blocking tcp communications - that's the most common issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 23, 2010, at 3:05 PM, James wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to get OpenMPI running on my home network.  This has two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines, t61 and quad, both running SuSE 11. I'm using the &quot;hello_c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program from the examples as a test.  It will run fine on each machine,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using whatever number or processes I specify.  However, when I try to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run on multiple machines, it hangs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I start from t61 with the command &quot;mpiexec -host t61,quad -np 2 hello&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then I see that command when I do a ps -ax on t61.   On quad I see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;orted --daemonize (long parameter string)&quot;.  Both of them seem to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; silently waiting on some event, but I've no idea what.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both machines are running OpenMPI 1.4.2 (compiled from same tar file),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed in /opt/openmpi.  The executables are in the same user/path
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on each machine (/home/me/src/openmpi/examples), and path,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH, and so on all seem the same.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; James
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS: Also, may I suggest putting something in the FAQ pointing out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that the environment vars need to be set in .tcshrc, not .login?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It would have saved me several hours.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="13772.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Previous message:</strong> <a href="13770.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>In reply to:</strong> <a href="13770.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13772.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Reply:</strong> <a href="13772.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Reply:</strong> <a href="13773.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
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
