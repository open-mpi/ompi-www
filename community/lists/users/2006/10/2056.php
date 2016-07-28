<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 26 15:52:19 2006" -->
<!-- isoreceived="20061026195219" -->
<!-- sent="Thu, 26 Oct 2006 13:52:05 -0600" -->
<!-- isosent="20061026195205" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford.groups_at_[hidden]" -->
<!-- subject="[OMPI users] Fault Tolerance &amp;amp; Behavior" -->
<!-- id="op.th1n43kvzidtg1_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford.groups_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-26 15:52:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2057.php">Daniel Vollmer: "[OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="2055.php">Karl Dockendorf: "[OMPI users] OMPI performance vs. LAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2058.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2058.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've recently had the chance to see how Open MPI (as well as other MPIs)  
<br>
behave in the case of network failure.
<br>
<p>I've looked at what happens when a node has its network connection  
<br>
disconnected in the middle of a job, with Ethernet, Myrinet (GM), and  
<br>
InfiniBand (OpenIB).
<br>
<p>With Ethernet and Myrinet, the job more or less pauses until the cable is  
<br>
re-connected.  (I imagine timeouts still apply, but I wasn't patient  
<br>
enough to wait for them)
<br>
<p>With InfiniBand, the job pauses and Open MPI throws a few error messages.   
<br>
After the cable is plugged back in (and the SM catches up), the job  
<br>
remains where it was when it was paused.  I'd guess that part of this is  
<br>
that the timeout is much shorter with IB than with Myri or Ethernet, and  
<br>
that when I unplug the IB cable, it times out fairly quickly (and then  
<br>
Open MPI throws its error messages).
<br>
<p>At any rate, the thought occurs (and it may just be my ignorance of MPI):   
<br>
After a network connection times out (as was apparently the case with IB),  
<br>
is the job salvageable?  If the jobs are not salvageable, why didn't Open  
<br>
MPI abort the job (and clean up the running processes on the nodes)?
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2057.php">Daniel Vollmer: "[OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="2055.php">Karl Dockendorf: "[OMPI users] OMPI performance vs. LAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2058.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2058.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
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
