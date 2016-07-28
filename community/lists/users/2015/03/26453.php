<?
$subject_val = "Re: [OMPI users] mpirun crashes randomly on prolonged run of	calculation on Amber 10";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 09:04:50 2015" -->
<!-- isoreceived="20150311130450" -->
<!-- sent="Wed, 11 Mar 2015 13:04:48 +0000" -->
<!-- isosent="20150311130448" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun crashes randomly on prolonged run of	calculation on Amber 10" -->
<!-- id="EFD68692-20E5-4A77-A4EC-FDC9D6B316CB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="375123970.3393918.1426052187511.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun crashes randomly on prolonged run of	calculation on Amber 10<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-11 09:04:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26454.php">Saliya Ekanayake: "[OMPI users] Process Binding Warning"</a>
<li><strong>Previous message:</strong> <a href="26452.php">Joshua Ladd: "Re: [OMPI users] disappearance of the memory registration error in 1.8.x?"</a>
<li><strong>In reply to:</strong> <a href="26451.php">Saad Raza: "[OMPI users] mpirun crashes randomly on prolonged run of calculation on Amber 10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two quick observations:
<br>
<p>1. Open MPI 1.6.2 is pretty old, and it's not the last release in the 1.6.x series.  If you can, update to Open MPI 1.6.5, which has lots of bug fixes over 1.6.2.  Even better, upgrade to Open MPI 1.8.4 (i.e., the latest stable release), which has oodles of bug fixes and optimizations over the 1.6 series.
<br>
<p>2. The error message notes that the job was killed by signal 1.  Signal 1 (i.e., &quot;HUP&quot;) is *usually* either the product of a bug in the application or some kind of external entity (e.g., a resource scheduler that determines that your job has run too long, so it kills it).
<br>
<p><p><p><span class="quotelev1">&gt; On Mar 11, 2015, at 1:36 AM, Saad Raza &lt;saadr_128_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not know whether I should ask this on openmpi forum or Amber forum but mpirun seems to crash randomly when they are subjected to long calculation. I have build openmpi from openmpi-1.6.2. I have used the following commands for configuring and installation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/lib64/mpi/gcc/openmpi --exec-prefix=/usr/lib64/mpi/gcc/openmpi
</span><br>
<span class="quotelev1">&gt; make all install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some calculations run completely fine but some of them crash randomly with the following type of error. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 3 with PID 5028 on node drsikandarserver exited on signal 1 (Hangup).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using nohup before the mpirun command. The general structure of the command is 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nohup mpirun -np 8 sander.MPI ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Saad Raza
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26451.php">http://www.open-mpi.org/community/lists/users/2015/03/26451.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26454.php">Saliya Ekanayake: "[OMPI users] Process Binding Warning"</a>
<li><strong>Previous message:</strong> <a href="26452.php">Joshua Ladd: "Re: [OMPI users] disappearance of the memory registration error in 1.8.x?"</a>
<li><strong>In reply to:</strong> <a href="26451.php">Saad Raza: "[OMPI users] mpirun crashes randomly on prolonged run of calculation on Amber 10"</a>
<!-- nextthread="start" -->
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
