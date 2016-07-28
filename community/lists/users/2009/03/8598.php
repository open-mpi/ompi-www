<?
$subject_val = "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 13:30:22 2009" -->
<!-- isoreceived="20090326173022" -->
<!-- sent="Thu, 26 Mar 2009 11:30:14 -0600" -->
<!-- isosent="20090326173014" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PML add procs failed --&amp;gt; Returned &amp;quot;Unreachable&amp;quot; (-12) instead of &amp;quot;Success&amp;quot; (0)" -->
<!-- id="8927912E-9D11-480D-B949-45AEC7AA9E69_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="adbbb9af0903260959l39b48778ibadffec5ca6397e5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-26 13:30:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8599.php">Gary Draving: "[OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8597.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>In reply to:</strong> <a href="8597.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8606.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 26, 2009, at 10:59 AM, Alessandro Surace wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; what do you mean to create/define a directly interface?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 3 hosts are network connected and ssh pub key enabled. Every  
</span><br>
<span class="quotelev1">&gt; hosts can see the other but they are not all on the same direct  
</span><br>
<span class="quotelev1">&gt; connected network . More in detail:
</span><br>
<span class="quotelev1">&gt; grid01 and grid04 are in the same network
</span><br>
<span class="quotelev1">&gt; grid03 is on different network.
</span><br>
<p>This is the problem. If grid03 is on a different network, then there  
<br>
is no way that an MPI process on that node can directly communicate  
<br>
with one on grid04 or grid01. Grid03 must have a common network  
<br>
interface with each of the machines, though it can be different for  
<br>
each one.
<br>
<p>In other words, grid03 and grid01 -must- have at least one network in  
<br>
common. And grid04 and grid03 must also share at least one network,  
<br>
though it can be different from the one that grid03 and grid01 share.
<br>
<p>Does that help clarify?
<br>
<p>Ralph
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Although this difference the jobs on grid01 and grid03 run properly  
</span><br>
<span class="quotelev1">&gt; like that on grid01 and grid04. But the jobs that include  
</span><br>
<span class="quotelev1">&gt; simultaneously grid03 and grid04 fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alex
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
<li><strong>Next message:</strong> <a href="8599.php">Gary Draving: "[OMPI users] error polling LP CQ with status RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8597.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>In reply to:</strong> <a href="8597.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8606.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
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
