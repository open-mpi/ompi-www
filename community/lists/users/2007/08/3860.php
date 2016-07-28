<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 15 06:48:57 2007" -->
<!-- isoreceived="20070815104857" -->
<!-- sent="Wed, 15 Aug 2007 18:48:53 +0800" -->
<!-- isosent="20070815104853" -->
<!-- name="Isaac Huang" -->
<!-- email="iclaymore_at_[hidden]" -->
<!-- subject="[OMPI users] locations of processes spawned by MPI_Comm_spawn" -->
<!-- id="d2bbffd00708150348t47ea32f0h2af7ad92178fbb48_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Isaac Huang (<em>iclaymore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-15 06:48:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3861.php">Andrew Friedley: "[OMPI users] redirecting stdin"</a>
<li><strong>Previous message:</strong> <a href="3859.php">Jeff Squyres: "Re: [OMPI users] MPI_AllReduce design for shared-memory."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I've observed the following things about locations of spawned
<br>
processes by running a simple program, please correct me if anything
<br>
is wrong:
<br>
<p>1. the default policy seems to be byslot, and specifying bynode in
<br>
mpirun command line can change that.
<br>
<p>2. the order of hosts in the hostfile is used, and the order specified
<br>
in the MPI_Info(&quot;host&quot;) ignored.
<br>
<p>3. when the policy is byslot, slots occupied by parent processes seem
<br>
to be ignored.
<br>
<p>I.e. locations of spawned processes are determined in the same way as
<br>
their parents.
<br>
<p>Thanks,
<br>
Isaac
<br>
<p><pre>
-- 
Regards, Isaac
()  ascii ribbon campaign - against html e-mail
/\                        - against microsoft attachments
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3861.php">Andrew Friedley: "[OMPI users] redirecting stdin"</a>
<li><strong>Previous message:</strong> <a href="3859.php">Jeff Squyres: "Re: [OMPI users] MPI_AllReduce design for shared-memory."</a>
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
