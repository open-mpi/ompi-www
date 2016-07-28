<?
$subject_val = "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 12:58:35 2014" -->
<!-- isoreceived="20140606165835" -->
<!-- sent="Fri, 6 Jun 2014 16:58:31 +0000" -->
<!-- isosent="20140606165831" -->
<!-- name="Sasso, John (GE Power &amp; Water, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC3FE97E28_at_ALPMBAPA12.e2k.ad.ge.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AA2AA449-4B73-4946-B75B-85D58B3AF4B5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI<br>
<strong>From:</strong> Sasso, John (GE Power &amp; Water, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 12:58:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24571.php">Reuti: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24569.php">Ralph Castain: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>In reply to:</strong> <a href="24568.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24571.php">Reuti: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>Reply:</strong> <a href="24571.php">Reuti: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, so at the least, how can I get the node and slots/node info that is passed from PBS?
<br>
<p>I ask because I'm trying to troubleshoot a problem w/ PBS and the build of OpenMPI 1.6 I noted.  If I submit a 24-process simple job through PBS using a script which has:
<br>
<p>/usr/local/openmpi/bin/orterun -n 24 --hostfile /home/sasso/TEST/hosts.file --mca orte_rsh_agent rsh --mca btl openib,tcp,self --mca orte_base_help_aggregate 0 -x PATH -x LD_LIBRARY_PATH /home/sasso/TEST/simplempihello.exe
<br>
<p><p>And the hostfile /home/sasso/TEST/hosts.file contains 24 entries (the first 16 being host node0001 and the last 8 being node0002), it appears that 24 MPI tasks try to start on node0001 instead of getting distributed as 16 on node0001 and 8 on node0002.   Hence, I am curious what is being passed by PBS.
<br>
<p>--john
<br>
<p><p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Friday, June 06, 2014 12:31 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI
<br>
<p>We currently only get the node and slots/node info from PBS - we don't get any task placement info at all. We then use the mpirun cmd options and built-in mappers to map the tasks to the nodes.
<br>
<p>I suppose we could do more integration in that regard, but haven't really seen a reason to do so - the OMPI mappers are generally more flexible than anything in the schedulers.
<br>
<p><p>On Jun 6, 2014, at 9:08 AM, Sasso, John (GE Power &amp; Water, Non-GE) &lt;John1.Sasso_at_[hidden]&lt;mailto:John1.Sasso_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>For the PBS scheduler and using a build of OpenMPI 1.6 built against PBS include files + libs, is there a way to determine (perhaps via some debugging flags passed to mpirun) what job placement parameters are passed from the PBS scheduler to OpenMPI?  In particular, I am talking about task placement info such as nodes to place on, etc.   Thanks!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--john
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24570/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24571.php">Reuti: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24569.php">Ralph Castain: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>In reply to:</strong> <a href="24568.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24571.php">Reuti: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>Reply:</strong> <a href="24571.php">Reuti: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
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
