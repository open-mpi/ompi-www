<?
$subject_val = "Re: [OMPI users] Change In Behavior Running on Multiple Nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 17 10:45:03 2013" -->
<!-- isoreceived="20130417144503" -->
<!-- sent="Wed, 17 Apr 2013 07:44:55 -0700" -->
<!-- isosent="20130417144455" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Change In Behavior Running on Multiple Nodes" -->
<!-- id="AF1C3647-C0E6-4436-9ACC-B39D90A17072_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="9ED9893299233A48A5E9E7FEB7A423292180BF_at_cppxch05.pwrutc.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Change In Behavior Running on Multiple Nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-17 10:44:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21746.php">Welder, Wallace T         PWR: "Re: [OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<li><strong>Previous message:</strong> <a href="21744.php">Welder, Wallace T         PWR: "[OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<li><strong>In reply to:</strong> <a href="21744.php">Welder, Wallace T         PWR: "[OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21746.php">Welder, Wallace T         PWR: "Re: [OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...yes, I see what you mean. Try using &quot;-default-hostfile mpimachines&quot; instead of -hostfiles. I think that's the problem - at least, it fixed it for me.
<br>
<p><p>On Apr 17, 2013, at 7:08 AM, &quot;Welder, Wallace T         PWR&quot; &lt;Wallace.Welder_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I&#146;ve recently tried running OpenMPI v1.6.4 on multiple nodes and have noticed a change in behavior that I don&#146;t understand.  In OpenMPI version 1.4.x, 1.5.x and 1.6.1, I could run a job spanning two nodes as shown below.  The procedure results in 8 processes running on the first node and 8 on the second node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun &#150;hostfile mpimachines &#150;n 1 host.exe : -n 15 node.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where the file mpimachines looks  like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node1 slots=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node2 slots=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In OpenMPI v1.6.2 and v1.6.4 (haven&#146;t tried v1.6.3) when I try to run the same way, all the processes start on node1 and none start on node2.  I&#146;ve noticed there are now runtime flags -bynode and &#150;byslot, but  I haven&#146;t had any success with those.  I&#146;ve also tried changing the mpimachines file to look like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node1 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node2 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I tried this, I got a runtime error saying there were not enough slots in the system to satisfy the 15 slots that were requested by the application node.exe.  I think there is a hint in here about my problem, but I haven&#146;t been able to figure out what it is yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone let me know how the process has changed with these newer versions of OpenMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wallace
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21745/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21746.php">Welder, Wallace T         PWR: "Re: [OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<li><strong>Previous message:</strong> <a href="21744.php">Welder, Wallace T         PWR: "[OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<li><strong>In reply to:</strong> <a href="21744.php">Welder, Wallace T         PWR: "[OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21746.php">Welder, Wallace T         PWR: "Re: [OMPI users] Change In Behavior Running on Multiple Nodes"</a>
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
