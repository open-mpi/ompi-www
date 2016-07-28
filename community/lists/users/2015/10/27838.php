<?
$subject_val = "[OMPI users] hostfile without slots";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 17:52:16 2015" -->
<!-- isoreceived="20151007215216" -->
<!-- sent="Wed, 07 Oct 2015 17:55:27 -0400" -->
<!-- isosent="20151007215527" -->
<!-- name="John Marshall" -->
<!-- email="John.Marshall_at_[hidden]" -->
<!-- subject="[OMPI users] hostfile without slots" -->
<!-- id="561594CF.3080609_at_ssc-spc.gc.ca" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] hostfile without slots<br>
<strong>From:</strong> John Marshall (<em>John.Marshall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-07 17:55:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27839.php">Ralph Castain: "Re: [OMPI users] hostfile without slots"</a>
<li><strong>Previous message:</strong> <a href="27837.php">Tom Rosmond: "[OMPI users] Problem with multi-dimensional index arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27839.php">Ralph Castain: "Re: [OMPI users] hostfile without slots"</a>
<li><strong>Reply:</strong> <a href="27839.php">Ralph Castain: "Re: [OMPI users] hostfile without slots"</a>
<li><strong>Reply:</strong> <a href="27840.php">tmishima_at_[hidden]: "Re: [OMPI users] hostfile without slots"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've been running with 1.6.5 for some time and am now trying out 1.8.8 (I'll get to 1.10 soon).
<br>
I have found a difference in behavior and I'm wondering what is happening.
<br>
<p>For special reasons, I have a host file which uses index values as logical names:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;3
<br>
<p>These are properly understood by the launcher. With 1.6.5, when I do:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun hostname
<br>
<p>I get 4 lines of output.
<br>
<p>However, when I do the same with 1.8.8 on a 16 cpu machine, I get 64 lines of output.
<br>
<p>If I change my hostfile to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;0 slots=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1 slots=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2 slots=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;3 slots=1
<br>
<p>I get only 4 lines with 1.8.8.
<br>
<p>Can you explain why I see the behavior I do, specifically, getting the 64 lines of output? Is the
<br>
interpretation of the hostfile different between 1.6.5 and 1.8.8? Are logical names without the
<br>
&quot;slots=1&quot; (now?) treated differently than hostnames?
<br>
<p>Thanks,
<br>
John
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27838/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27839.php">Ralph Castain: "Re: [OMPI users] hostfile without slots"</a>
<li><strong>Previous message:</strong> <a href="27837.php">Tom Rosmond: "[OMPI users] Problem with multi-dimensional index arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27839.php">Ralph Castain: "Re: [OMPI users] hostfile without slots"</a>
<li><strong>Reply:</strong> <a href="27839.php">Ralph Castain: "Re: [OMPI users] hostfile without slots"</a>
<li><strong>Reply:</strong> <a href="27840.php">tmishima_at_[hidden]: "Re: [OMPI users] hostfile without slots"</a>
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
