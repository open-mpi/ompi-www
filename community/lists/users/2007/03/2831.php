<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 19 02:38:17 2007" -->
<!-- isoreceived="20070319063817" -->
<!-- sent="Mon, 19 Mar 2007 01:59:06 -0400" -->
<!-- isosent="20070319055906" -->
<!-- name="David Burns" -->
<!-- email="3db14_at_[hidden]" -->
<!-- subject="Re: [OMPI users] remote execution problem" -->
<!-- id="45FE26AA.9050709_at_qlink.queensu.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="36042.130.15.29.85.1174279446.squirrel_at_qlink.queensu.ca" -->
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
<strong>From:</strong> David Burns (<em>3db14_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-19 01:59:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2832.php">Götz Waschk: "[OMPI users] Build problem with the pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="2830.php">3db14_at_[hidden]: "[OMPI users] remote execution problem"</a>
<li><strong>In reply to:</strong> <a href="2830.php">3db14_at_[hidden]: "[OMPI users] remote execution problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2837.php">Tim Prins: "Re: [OMPI users] remote execution problem"</a>
<li><strong>Reply:</strong> <a href="2837.php">Tim Prins: "Re: [OMPI users] remote execution problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I neglected to mention that the test is currently running on 100 Mbps 
<br>
ethernet. I have also tested the setup using a simple &quot;hello world my 
<br>
rank is_&quot; program and get the same hanging problem.
<br>
<p><p>3db14_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; If anyone could help me out with this I would greatly appreciate it. I
</span><br>
<span class="quotelev1">&gt; have already read through the entire FAQ and havent seen anyone with a
</span><br>
<span class="quotelev1">&gt; similar problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have successfully tested and run the ompi application I've coded locally
</span><br>
<span class="quotelev1">&gt; on both computers talisker2 and talisker4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --host localhost fdtd : -np 2 --host localhost rnode
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when attempting to execute processes remotely, eg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --host localhost fdtd : -np 2 --host talisker4 rnode
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nothing happens. The shell just sits there, nothing prints (despite
</span><br>
<span class="quotelev1">&gt; stdouts), and does not return until I kill it. I have set up ssh with
</span><br>
<span class="quotelev1">&gt; rsa-authentication, no passphrase. The paths are all set; I have tried
</span><br>
<span class="quotelev1">&gt; purposefully missetting them and the error is reported and returns as
</span><br>
<span class="quotelev1">&gt; expected (so it isnt that).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More info about the system- fedora core 5, (Open MPI) 1.1.4. config.log
</span><br>
<span class="quotelev1">&gt; and ompi_info outputs attached. Any help or ideas of where to go next
</span><br>
<span class="quotelev1">&gt; would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; David
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No virus found in this incoming message.
</span><br>
<span class="quotelev1">&gt; Checked by AVG Free Edition.
</span><br>
<span class="quotelev1">&gt; Version: 7.5.446 / Virus Database: 268.18.13/725 - Release Date: 17/03/2007 12:33 PM
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2832.php">Götz Waschk: "[OMPI users] Build problem with the pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="2830.php">3db14_at_[hidden]: "[OMPI users] remote execution problem"</a>
<li><strong>In reply to:</strong> <a href="2830.php">3db14_at_[hidden]: "[OMPI users] remote execution problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2837.php">Tim Prins: "Re: [OMPI users] remote execution problem"</a>
<li><strong>Reply:</strong> <a href="2837.php">Tim Prins: "Re: [OMPI users] remote execution problem"</a>
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
