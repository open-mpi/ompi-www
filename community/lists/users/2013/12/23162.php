<?
$subject_val = "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  6 12:44:45 2013" -->
<!-- isoreceived="20131206174445" -->
<!-- sent="Fri, 6 Dec 2013 12:44:43 -0500" -->
<!-- isosent="20131206174443" -->
<!-- name="Meredith, Karl" -->
<!-- email="karl.meredith_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)" -->
<!-- id="7791A0FD-FF7C-4F0E-9424-097A9740E005_at_fmglobal.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="28D02FFD-364A-458D-95F6-1AF2DCB21ACC_at_cisco.com" -->
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
<strong>From:</strong> Meredith, Karl (<em>karl.meredith_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-06 12:44:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23163.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23161.php">Bruno Coutinho: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23148.php">Jeff Squyres (jsquyres): "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So, I tried out the flag that you mentioned would force the use of loopback interface.  It worked without error or stalling:
<br>
<p>$ )mpirun --mca oob_tcp_if_include lo0 -np 2 ./hello_cxx
<br>
Hello, world!  I am 0 of 2(Open MPI v1.7.3, package: Open MPI macports_at_[hidden] Distribution, ident: 1.7.3, Oct 17, 2013, 117)
<br>
Hello, world!  I am 1 of 2(Open MPI v1.7.3, package: Open MPI macports_at_[hidden] Distribution, ident: 1.7.3, Oct 17, 2013, 117)
<br>
<p>Thanks for all your help!
<br>
<p>Karl
<br>
<p><p><p>On Dec 4, 2013, at 8:23 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 4, 2013, at 7:25 AM, &quot;Meredith, Karl&quot; &lt;karl.meredith_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Before turning off my firewall, I have these rules
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ )sudo ipfw list
</span><br>
<span class="quotelev2">&gt;&gt; Password:
</span><br>
<span class="quotelev2">&gt;&gt; 05000 allow ip from any to any via lo*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an interesting rule.  Perhaps you can try:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpirun --mca oob_tcp_if_include lo0 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which would force OMPI to use the loopback interface for TCP connections (it's normally excluded, because it's not viable for off-node communications).  This would only be useful for single-node runs, of course.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Our local IT expert believes that this problem is related to this bug from way back in openmpi 1.2.3, but it seems like the patch was never implemented:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/05/3344.php">http://www.open-mpi.org/community/lists/users/2007/05/3344.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, I don't believe that's the issue.  Here's why:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - OMPI currently ignores loopback interfaces by default.  This is done because the norm is to have multi-server runs, and loopback interfaces are not useful for such runs.  Put differently: OMPI defaults to using external IP interfaces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - However, all your external IP interfaces are firewalled.  So when OMPI tries to make a loopback connection on the external IP interfaces, it's blocked.  Kaboom.  But this makes it easy to understand why when you disable the firewall, it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - That bug report you cited (good research, BTW!) is because we had a problem in parsing the oob_tcp_if_include MCA parameter way back in the 1.2.x series, which has since been fixed.  The user was trying to explicitly tell OMPI &quot;use the lo0 interface&quot; (i.e., override the default of *not* using the lo0 interface), and the bug prevented that from working.  That bug has long since been fixed: you can override OMPI's default of not using lo0.  You should then be able to run without disabling your firewall (that's what the mpirun syntax I cited above above is doing).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - As noted above, using lo0 for multi-server runs is a bad idea; it won't work (OMPI may get confused and think that it can use 127.0.0.0/8 to contact multiple servers, because by the netmask, it hypothetically can).  But you can do it for runs limited to your local laptop with no problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - The real solution, as Ralph implied is to stop using external IP interfaces for single-server control messages (we talked about this off-list).  Let me explain this statement a bit...  OMPI has 2 main channels for communication: a) control messages and b) MPI traffic.  MPI traffic is already smart enough to use shared memory for single-server MPI traffic and some form of network for off-server MPI traffic.  The control message plane doesn't currently make that distinction -- it uses IP interfaces for *all* traffic (and defaults to not using loopback interfaces), regardless of destination.  So the real solution is to make the control message plane a little smarter: put a named unix domain socket in the filesystem on the local server and let local control messages use that (instead of external IP addresses).  FWIW, this is what LAM/MPI used to do; we just never adopted that into Open MPI (LAM/MPI was one of Open MPI's predecessors).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This feature may take a little time to implement, and may or may not make it into the v1.7.x series.  But you should be able to use the oob_tcp_if_include MCA param in the meantime (see the FAQ for different ways to set MCA params; you can stick it in an environment variable or file instead of manually including it on the mpirun command line all the time, if that's more convenient).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="23163.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23161.php">Bruno Coutinho: "Re: [OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23148.php">Jeff Squyres (jsquyres): "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
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
