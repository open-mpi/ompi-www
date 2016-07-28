<?
$subject_val = "[OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 01:19:33 2009" -->
<!-- isoreceived="20090629051933" -->
<!-- sent="Mon, 29 Jun 2009 10:49:28 +0530" -->
<!-- isosent="20090629051928" -->
<!-- name="vipin kumar" -->
<!-- email="vipinkumar41_at_[hidden]" -->
<!-- subject="[OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple" -->
<!-- id="fa4af8200906282219t11451maaa6bf59a73ea8e5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple<br>
<strong>From:</strong> vipin kumar (<em>vipinkumar41_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-29 01:19:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9752.php">jody: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Previous message:</strong> <a href="9750.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9792.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9792.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>&nbsp;I am trying to spawn dynamically processes in remote as well as local
<br>
machine using MPI::Intracomm::Spawn_multiple. I am using MPI::Info object to
<br>
tell where to launch processes using &quot;host&quot; key and &quot;&lt;ip_address&gt;&quot; as its
<br>
value but but I am getting the error
<br>
<p>--------------------------------------------------------------------------
<br>
There are no allocated resources for the application
<br>
&nbsp;&nbsp;slaveprocess
<br>
that match the requested mapping:
<br>
<p><p>Verify that you have mapped the allocated resources properly using the
<br>
--host or --hostfile specification.
<br>
--------------------------------------------------------------------------
<br>
<p>I tried with &quot;&lt;hostname&gt;&quot; too.
<br>
but its not working.
<br>
<p>It works fine if I give the value &quot;localhost&quot; to &quot;host:&quot; key. It launches
<br>
successfully processes in local machine.
<br>
<p>any help will be greatly appreciated.
<br>
<p>Regards,
<br>
<pre>
-- 
Vipin K.
Research Engineer,
C-Dot, Bangalore, India
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9751/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9752.php">jody: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Previous message:</strong> <a href="9750.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9792.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9792.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
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
