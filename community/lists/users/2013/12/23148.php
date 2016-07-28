<?
$subject_val = "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 08:24:02 2013" -->
<!-- isoreceived="20131204132402" -->
<!-- sent="Wed, 4 Dec 2013 13:23:55 +0000" -->
<!-- isosent="20131204132355" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)" -->
<!-- id="28D02FFD-364A-458D-95F6-1AF2DCB21ACC_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="7A6F23F5-C349-489F-A858-B55937B4E5C8_at_fmglobal.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 08:23:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23149.php">Siegmar Gross: "[OMPI users] Bus error with openmpi-1.7.4a1r29784 and openmpi-1.9a1r29790"</a>
<li><strong>Previous message:</strong> <a href="23147.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23146.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23162.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23162.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 4, 2013, at 7:25 AM, &quot;Meredith, Karl&quot; &lt;karl.meredith_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Before turning off my firewall, I have these rules
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ )sudo ipfw list
</span><br>
<span class="quotelev1">&gt; Password:
</span><br>
<span class="quotelev1">&gt; 05000 allow ip from any to any via lo*
</span><br>
<p>This is an interesting rule.  Perhaps you can try:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca oob_tcp_if_include lo0 ...
<br>
<p>Which would force OMPI to use the loopback interface for TCP connections (it's normally excluded, because it's not viable for off-node communications).  This would only be useful for single-node runs, of course.
<br>
<p><span class="quotelev1">&gt; Our local IT expert believes that this problem is related to this bug from way back in openmpi 1.2.3, but it seems like the patch was never implemented:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/05/3344.php">http://www.open-mpi.org/community/lists/users/2007/05/3344.php</a>
</span><br>
<p>No, I don't believe that's the issue.  Here's why:
<br>
<p>- OMPI currently ignores loopback interfaces by default.  This is done because the norm is to have multi-server runs, and loopback interfaces are not useful for such runs.  Put differently: OMPI defaults to using external IP interfaces.
<br>
<p>- However, all your external IP interfaces are firewalled.  So when OMPI tries to make a loopback connection on the external IP interfaces, it's blocked.  Kaboom.  But this makes it easy to understand why when you disable the firewall, it works.
<br>
<p>- That bug report you cited (good research, BTW!) is because we had a problem in parsing the oob_tcp_if_include MCA parameter way back in the 1.2.x series, which has since been fixed.  The user was trying to explicitly tell OMPI &quot;use the lo0 interface&quot; (i.e., override the default of *not* using the lo0 interface), and the bug prevented that from working.  That bug has long since been fixed: you can override OMPI's default of not using lo0.  You should then be able to run without disabling your firewall (that's what the mpirun syntax I cited above above is doing).
<br>
<p>- As noted above, using lo0 for multi-server runs is a bad idea; it won't work (OMPI may get confused and think that it can use 127.0.0.0/8 to contact multiple servers, because by the netmask, it hypothetically can).  But you can do it for runs limited to your local laptop with no problem.
<br>
<p>- The real solution, as Ralph implied is to stop using external IP interfaces for single-server control messages (we talked about this off-list).  Let me explain this statement a bit...  OMPI has 2 main channels for communication: a) control messages and b) MPI traffic.  MPI traffic is already smart enough to use shared memory for single-server MPI traffic and some form of network for off-server MPI traffic.  The control message plane doesn't currently make that distinction -- it uses IP interfaces for *all* traffic (and defaults to not using loopback interfaces), regardless of destination.  So the real solution is to make the control message plane a little smarter: put a named unix domain socket in the filesystem on the local server and let local control messages use that (instead of external IP addresses).  FWIW, this is what LAM/MPI used to do; we just never adopted that into Open MPI (LAM/MPI was one of Open MPI's predecessors).
<br>
<p>This feature may take a little time to implement, and may or may not make it into the v1.7.x series.  But you should be able to use the oob_tcp_if_include MCA param in the meantime (see the FAQ for different ways to set MCA params; you can stick it in an environment variable or file instead of manually including it on the mpirun command line all the time, if that's more convenient).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23149.php">Siegmar Gross: "[OMPI users] Bus error with openmpi-1.7.4a1r29784 and openmpi-1.9a1r29790"</a>
<li><strong>Previous message:</strong> <a href="23147.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23146.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23162.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23162.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
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
