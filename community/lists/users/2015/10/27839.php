<?
$subject_val = "Re: [OMPI users] hostfile without slots";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 18:26:17 2015" -->
<!-- isoreceived="20151007222617" -->
<!-- sent="Wed, 7 Oct 2015 15:26:11 -0700" -->
<!-- isosent="20151007222611" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hostfile without slots" -->
<!-- id="B13746C8-409F-4257-8EDC-245D1C13685E_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="561594CF.3080609_at_ssc-spc.gc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] hostfile without slots<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-07 18:26:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27840.php">tmishima_at_[hidden]: "Re: [OMPI users] hostfile without slots"</a>
<li><strong>Previous message:</strong> <a href="27838.php">John Marshall: "[OMPI users] hostfile without slots"</a>
<li><strong>In reply to:</strong> <a href="27838.php">John Marshall: "[OMPI users] hostfile without slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27840.php">tmishima_at_[hidden]: "Re: [OMPI users] hostfile without slots"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no problem with using numerical host names - we don&#226;&#128;&#153;t care so long as your system can resolve them. The difference you are seeing relates to a change in behavior created during the 1.7 series. If you don&#226;&#128;&#153;t specify the #slots on a host, then we automatically set it to the number of detected cores on that node. Specifying the #slots overrides that detection logic.
<br>
<p><p><span class="quotelev1">&gt; On Oct 7, 2015, at 2:55 PM, John Marshall &lt;John.Marshall_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been running with 1.6.5 for some time and am now trying out 1.8.8 (I'll get to 1.10 soon).
</span><br>
<span class="quotelev1">&gt; I have found a difference in behavior and I'm wondering what is happening.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For special reasons, I have a host file which uses index values as logical names:
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt; These are properly understood by the launcher. With 1.6.5, when I do:
</span><br>
<span class="quotelev1">&gt; mpirun hostname
</span><br>
<span class="quotelev1">&gt; I get 4 lines of output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, when I do the same with 1.8.8 on a 16 cpu machine, I get 64 lines of output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I change my hostfile to:
</span><br>
<span class="quotelev1">&gt; 0 slots=1
</span><br>
<span class="quotelev1">&gt; 1 slots=1
</span><br>
<span class="quotelev1">&gt; 2 slots=1
</span><br>
<span class="quotelev1">&gt; 3 slots=1
</span><br>
<span class="quotelev1">&gt; I get only 4 lines with 1.8.8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you explain why I see the behavior I do, specifically, getting the 64 lines of output? Is the
</span><br>
<span class="quotelev1">&gt; interpretation of the hostfile different between 1.6.5 and 1.8.8? Are logical names without the
</span><br>
<span class="quotelev1">&gt; &quot;slots=1&quot; (now?) treated differently than hostnames?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; John
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27838.php">http://www.open-mpi.org/community/lists/users/2015/10/27838.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27839/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27840.php">tmishima_at_[hidden]: "Re: [OMPI users] hostfile without slots"</a>
<li><strong>Previous message:</strong> <a href="27838.php">John Marshall: "[OMPI users] hostfile without slots"</a>
<li><strong>In reply to:</strong> <a href="27838.php">John Marshall: "[OMPI users] hostfile without slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27840.php">tmishima_at_[hidden]: "Re: [OMPI users] hostfile without slots"</a>
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
