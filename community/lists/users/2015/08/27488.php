<?
$subject_val = "Re: [OMPI users] default number of slots in openmpi 1.8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 12:31:09 2015" -->
<!-- isoreceived="20150825163109" -->
<!-- sent="Tue, 25 Aug 2015 09:31:01 -0700" -->
<!-- isosent="20150825163101" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] default number of slots in openmpi 1.8" -->
<!-- id="FE8CEF51-D437-4E69-B7F0-AD5BB85FFE6B_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55DC7384.2000407_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] default number of slots in openmpi 1.8<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 12:31:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27489.php">Yong Qin: "[OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Previous message:</strong> <a href="27487.php">Nicolas Niclausse: "[OMPI users] default number of slots in openmpi 1.8"</a>
<li><strong>In reply to:</strong> <a href="27487.php">Nicolas Niclausse: "[OMPI users] default number of slots in openmpi 1.8"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you don&#226;&#128;&#153;t specify a slot count, then we will automatically detect the #cores on the machine and set the slot count to that number.
<br>
<p>You can add &#226;&#128;&#148;map-by node to your cmd line and that will give you the prior behavior as we&#226;&#128;&#153;ll round-robin one proc on each node at a time
<br>
<p><p><span class="quotelev1">&gt; On Aug 25, 2015, at 6:54 AM, Nicolas Niclausse &lt;nicolas.niclausse_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to use openmpi 1.8.8 on a cluster managed by OAR, however i have
</span><br>
<span class="quotelev1">&gt; some troubles with the default slots number.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have reserved one core on two nodes (each has 12 cores):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # cat $OAR_NODEFILE
</span><br>
<span class="quotelev1">&gt; nef097.inria.fr
</span><br>
<span class="quotelev1">&gt; nef098.inria.fr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --mca plm_rsh_agent oarsh -hostfile $OAR_NODEFILE ./NPmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; runs only on the first node:
</span><br>
<span class="quotelev1">&gt; 0: nef097
</span><br>
<span class="quotelev1">&gt; 1: nef097
</span><br>
<span class="quotelev1">&gt; Now starting the main loop
</span><br>
<span class="quotelev1">&gt;  0:       1 bytes      7 times --&gt;      0.00 Mbps in   12571.35 usec
</span><br>
<span class="quotelev1">&gt; [skip]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If i use a nodefile like this, it works:
</span><br>
<span class="quotelev1">&gt; nef097.inria.fr slots=1
</span><br>
<span class="quotelev1">&gt; nef098.inria.fr slots=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The doc says however that the default value is 1, and openmpi 1.6.4 works
</span><br>
<span class="quotelev1">&gt; fine (the OS is Centos 7, btw)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am i missing something ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Nicolas NICLAUSSE                          Service DREAM
</span><br>
<span class="quotelev1">&gt; INRIA Sophia Antipolis                     <a href="http://www-sop.inria.fr/">http://www-sop.inria.fr/</a>
</span><br>
<span class="quotelev1">&gt; 2004 route des lucioles - BP 93            Tel: (33/0) 4 92 38 76 93
</span><br>
<span class="quotelev1">&gt; 06902  SOPHIA-ANTIPOLIS cedex (France)     Fax: (33/0) 4 92 38 76 02
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27487.php">http://www.open-mpi.org/community/lists/users/2015/08/27487.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27489.php">Yong Qin: "[OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Previous message:</strong> <a href="27487.php">Nicolas Niclausse: "[OMPI users] default number of slots in openmpi 1.8"</a>
<li><strong>In reply to:</strong> <a href="27487.php">Nicolas Niclausse: "[OMPI users] default number of slots in openmpi 1.8"</a>
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
