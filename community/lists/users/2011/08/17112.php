<?
$subject_val = "[OMPI users] How to add nodes while running job";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 27 08:59:37 2011" -->
<!-- isoreceived="20110827125937" -->
<!-- sent="Sat, 27 Aug 2011 09:58:53 -0300" -->
<!-- isosent="20110827125853" -->
<!-- name="Rafael Braga" -->
<!-- email="rafaeltelematica_at_[hidden]" -->
<!-- subject="[OMPI users] How to add nodes while running job" -->
<!-- id="CAC3D6aY+Fbb2G7GMuuih1E-QyAmofkb7x=nNWYbXyx2L_5Coyg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How to add nodes while running job<br>
<strong>From:</strong> Rafael Braga (<em>rafaeltelematica_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-27 08:58:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17113.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Previous message:</strong> <a href="17111.php">Ralph Castain: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17113.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Reply:</strong> <a href="17113.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would like to know how to add nodes during a job execution.
<br>
Now my hostfile has the node 10.0.0.23 that is off,
<br>
I would start this node during the execution so that the job can use it
<br>
When I run the command:
<br>
<p>mpirun -np 2 -hostfile /tmp/hosts application
<br>
<p>the following message appears:
<br>
<p>ssh: connect to host 10.0.0.23 port 22: No route to host
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 10773) died unexpectedly with status 255 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>thanks a lot,
<br>
<p><pre>
-- 
Rafael Braga &lt;<a href="http://www.linkedin.com/myprofile?trk=hb_tab_pro">http://www.linkedin.com/myprofile?trk=hb_tab_pro</a>&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17112/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17113.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Previous message:</strong> <a href="17111.php">Ralph Castain: "Re: [OMPI users] Related to project ideas in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17113.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
<li><strong>Reply:</strong> <a href="17113.php">Ralph Castain: "Re: [OMPI users] How to add nodes while running job"</a>
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
