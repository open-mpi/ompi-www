<?
$subject_val = "Re: [OMPI users] OpenMPI job initializing problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 22:58:51 2014" -->
<!-- isoreceived="20140321025851" -->
<!-- sent="Thu, 20 Mar 2014 20:59:03 -0600" -->
<!-- isosent="20140321025903" -->
<!-- name="Beichuan Yan" -->
<!-- email="beichuan.yan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job initializing problem" -->
<!-- id="D67303F39678724DA65819E042CB369892A84D83C9_at_EXC2.ad.colorado.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D67303F39678724DA65819E042CB369892A84D83A2_at_EXC2.ad.colorado.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI job initializing problem<br>
<strong>From:</strong> Beichuan Yan (<em>beichuan.yan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-20 22:59:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23908.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23906.php">tmishima_at_[hidden]: "[OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>In reply to:</strong> <a href="23904.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23897.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is an example of my data measured in seconds:
<br>
<p>communication overhead = commuT + migraT + print,
<br>
compuT is computational cost,
<br>
totalT = compuT + communication overhead,
<br>
overhead% denotes percentage of communication overhead
<br>
<p>intelmpi (walltime=00:03:51)
<br>
iter         [commuT          migraT              printT]              compuT            totalT          overhead%
<br>
3999   4.945993e-03   2.689362e-04   1.440048e-04   1.689100e-02   2.224994e-02   2.343795e+01
<br>
5999   4.938126e-03   1.451969e-04   2.689362e-04   1.663089e-02   2.198315e-02   2.312373e+01
<br>
7999   4.904985e-03   1.490116e-04   1.451969e-04   1.678491e-02   2.198410e-02   2.298933e+01
<br>
9999   4.915953e-03   1.380444e-04   1.490116e-04   1.687193e-02   2.207494e-02   2.289473e+01
<br>
<p>openmpi (walltime=00:04:32)
<br>
iter          [commuT          migraT             printT]              compuT              totalT         overhead%
<br>
3999   3.574133e-03   1.139641e-04   1.089573e-04   1.598001e-02   1.977706e-02   1.864836e+01
<br>
5999   3.574848e-03   1.189709e-04   1.139641e-04   1.599526e-02   1.980305e-02   1.865278e+01
<br>
7999   3.571033e-03   1.168251e-04   1.189709e-04   1.601100e-02   1.981783e-02   1.860879e+01
<br>
9999   3.587008e-03   1.258850e-04   1.168251e-04   1.596618e-02   1.979589e-02   1.875587e+01
<br>
<p>It can be seen that Open MPI is faster in both communication and computation measured by MPI_Wtime calls, but the wall time reported by PBS pro is larger.
<br>
<p>Beichuan
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Beichuan Yan
<br>
Sent: Thursday, March 20, 2014 15:15
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI job initializing problem
<br>
<p>As for the performance, my 4-node (64-processes) 3-hour job indicates Intel MPI and OpenMPI have close benchmarks. Intel MPI takes 2:53 while Open MPI takes 3:10.
<br>
<p>It is interesting that all my MPI_Wtime calls show OpenMPI is faster (up to twice or even more) than Intel MPI in communication for a single loop, but in overall wall time Open MPI is 10% slower for like 500K loops. The computing times are nearly the same. This is a little confusing.
<br>
<p>I may set up and run a new test.
<br>
<p>Beichuan
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Thursday, March 20, 2014 11:15
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI job initializing problem
<br>
<p>On Mar 20, 2014, at 12:48 PM, Beichuan Yan &lt;beichuan.yan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 2. <a href="http://www.open-mpi.org/community/lists/users/2011/11/17684.php">http://www.open-mpi.org/community/lists/users/2011/11/17684.php</a>
</span><br>
<span class="quotelev1">&gt; In the upcoming OMPI v1.7, we revamped the shared memory setup code such that it'll actually use /dev/shm properly, or use some other mechanism other than a mmap file backed in a real filesystem. So the issue goes away.
</span><br>
<p>Woo hoo!
<br>
<p><span class="quotelev1">&gt; my comment: up to OMPI v1.7.4, this shmem issue is still there. However, it is resolved in OMPI v1.7.5rc5. This is surprising.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, OMPI v1.7.5rc5 works well for multi-processes-on-one-node (shmem) mode on Spirit. There is no need to tune TCP or IB parameters to use it. My code just runs well:
</span><br>
<p>Great!
<br>
<p><span class="quotelev1">&gt; My test data takes 20 minutes to run with OMPI v1.7.4, but needs less than 1 minute with OMPI v1.7.5rc5. I don't know what the magic is. I am wondering when OMPI v1.7.5 final will be released.
</span><br>
<p>Wow -- that sounds like a fundamental difference there.  Could be something to do with the NFS tmp directory...?  I could see how that could cause oodles of unnecessary network traffic.
<br>
<p>1.7.5 should be released ...immanently...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23908.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23906.php">tmishima_at_[hidden]: "[OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>In reply to:</strong> <a href="23904.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23897.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
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
