<?
$subject_val = "Re: [OMPI users] Change In Behavior Running on Multiple Nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 17 11:01:55 2013" -->
<!-- isoreceived="20130417150155" -->
<!-- sent="Wed, 17 Apr 2013 08:00:40 -0700" -->
<!-- isosent="20130417150040" -->
<!-- name="Welder, Wallace T         PWR" -->
<!-- email="Wallace.Welder_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Change In Behavior Running on Multiple Nodes" -->
<!-- id="9ED9893299233A48A5E9E7FEB7A423292180D8_at_cppxch05.pwrutc.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="[OMPI users] Change In Behavior Running on Multiple Nodes" -->
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
<strong>From:</strong> Welder, Wallace T         PWR (<em>Wallace.Welder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-17 11:00:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21747.php">George Bosilca: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>Previous message:</strong> <a href="21745.php">Ralph Castain: "Re: [OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="21744.php">Welder, Wallace T         PWR: "[OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!  That worked.
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, April 17, 2013 7:45 AM
<br>
To: Open MPI Users
<br>
Subject: [External] Re: [OMPI users] Change In Behavior Running on Multiple Nodes
<br>
<p>&nbsp;
<br>
<p>Hmmm...yes, I see what you mean. Try using &quot;-default-hostfile mpimachines&quot; instead of -hostfiles. I think that's the problem - at least, it fixed it for me.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>On Apr 17, 2013, at 7:08 AM, &quot;Welder, Wallace T         PWR&quot; &lt;Wallace.Welder_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p>I&#146;ve recently tried running OpenMPI v1.6.4 on multiple nodes and have noticed a change in behavior that I don&#146;t understand.  In OpenMPI version 1.4.x, 1.5.x and 1.6.1, I could run a job spanning two nodes as shown below.  The procedure results in 8 processes running on the first node and 8 on the second node.
<br>
<p>mpirun &#150;hostfile mpimachines &#150;n 1 host.exe : -n 15 node.exe
<br>
<p>&nbsp;
<br>
<p>where the file mpimachines looks  like:
<br>
<p>node1 slots=8
<br>
<p>node2 slots=8
<br>
<p>In OpenMPI v1.6.2 and v1.6.4 (haven&#146;t tried v1.6.3) when I try to run the same way, all the processes start on node1 and none start on node2.  I&#146;ve noticed there are now runtime flags -bynode and &#150;byslot, but  I haven&#146;t had any success with those.  I&#146;ve also tried changing the mpimachines file to look like:
<br>
<p>node1 slots=8 max-slots=8
<br>
<p>node2 slots=8 max-slots=8
<br>
<p>When I tried this, I got a runtime error saying there were not enough slots in the system to satisfy the 15 slots that were requested by the application node.exe.  I think there is a hint in here about my problem, but I haven&#146;t been able to figure out what it is yet.
<br>
<p>Can anyone let me know how the process has changed with these newer versions of OpenMPI?
<br>
<p>Thanks,
<br>
<p>Wallace
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21746/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21747.php">George Bosilca: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>Previous message:</strong> <a href="21745.php">Ralph Castain: "Re: [OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="21744.php">Welder, Wallace T         PWR: "[OMPI users] Change In Behavior Running on Multiple Nodes"</a>
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
