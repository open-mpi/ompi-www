<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Oct 14 17:08:52 2007" -->
<!-- isoreceived="20071014210852" -->
<!-- sent="Sun, 14 Oct 2007 23:08:45 +0200 (IST)" -->
<!-- isosent="20071014210845" -->
<!-- name="David Erukhimovich" -->
<!-- email="daviderukh_at_[hidden]" -->
<!-- subject="[OMPI devel] Trying to get total procs num in odls framework" -->
<!-- id="Pine.LNX.4.64.0710142255120.2175_at_pita.cs.huji.ac.il" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> David Erukhimovich (<em>daviderukh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-14 17:08:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2442.php">Jeff Squyres: "[OMPI devel] RM approval for #1153"</a>
<li><strong>Previous message:</strong> <a href="2440.php">Richard Graham: "[OMPI devel] FW: [mpi-21] SC'07 MPI Forum organization meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2471.php">David Erukhimovich: "Re: [OMPI devel] Trying to get total procs num in odls framework"</a>
<li><strong>Maybe reply:</strong> <a href="2471.php">David Erukhimovich: "Re: [OMPI devel] Trying to get total procs num in odls framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I have 2 questions:
<br>
1. I am trying to get the total number of requested processes for the job 
<br>
in' hostfile' component in rds. I took the job object that was given as a 
<br>
parameter, extracted the application objects and checked how many procs 
<br>
each application has. The result in every run was 0. As I understand, this 
<br>
variable is updated before the rds part. So what am I doing wrong?
<br>
<p>2. I've discovered an undocumented framework - odls. I've created a new 
<br>
component for it. The problem is that there is no way to switch between 
<br>
the default component and mine (--mca odls &lt;my component&gt; doesn't work). 
<br>
Is there a way to switch between odls components (I saw bprocs there and 
<br>
I guess it is used)?
<br>
<p>Thank you,
<br>
--David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2442.php">Jeff Squyres: "[OMPI devel] RM approval for #1153"</a>
<li><strong>Previous message:</strong> <a href="2440.php">Richard Graham: "[OMPI devel] FW: [mpi-21] SC'07 MPI Forum organization meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2471.php">David Erukhimovich: "Re: [OMPI devel] Trying to get total procs num in odls framework"</a>
<li><strong>Maybe reply:</strong> <a href="2471.php">David Erukhimovich: "Re: [OMPI devel] Trying to get total procs num in odls framework"</a>
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
