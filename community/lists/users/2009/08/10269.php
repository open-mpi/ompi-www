<?
$subject_val = "[OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 15:43:08 2009" -->
<!-- isoreceived="20090810194308" -->
<!-- sent="Mon, 10 Aug 2009 12:43:03 -0700" -->
<!-- isosent="20090810194303" -->
<!-- name="Jody Klymak" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="[OMPI users] torque pbs behaviour..." -->
<!-- id="9A73783D-8D77-431C-AD0A-4354636D15C1_at_uvic.ca" -->
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
<strong>Subject:</strong> [OMPI users] torque pbs behaviour...<br>
<strong>From:</strong> Jody Klymak (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-10 15:43:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10270.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10268.php">Dave Love: "Re: [OMPI users] x4100 with IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10270.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10270.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10271.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I've been trying to get torque pbs to work on my OS X 10.5.7 cluster  
<br>
with openMPI (after finding that Xgrid was pretty flaky about  
<br>
connections).  I *think* this is an MPI problem (perhaps via operator  
<br>
error!)
<br>
<p>If I submit openMPI with:
<br>
<p><p>#PBS -l nodes=2:ppn=8
<br>
<p>mpirun MyProg
<br>
<p><p>pbs locks off two of the processors, checked via &quot;pbsnodes -a&quot;, and  
<br>
the job output.  But mpirun runs the whole job on the second of the  
<br>
two processors.
<br>
<p>If I run the same job w/o qsub (i.e. using ssh)
<br>
mpirun -n 16 -host xserve01,xserve02 MyProg
<br>
it runs fine on all the nodes....
<br>
<p>My /var/spool/toque/server_priv/nodes file looks like:
<br>
<p>xserve01.local np=8
<br>
xserve02.local np=8
<br>
<p><p>Any idea what could be going wrong or how to debu this properly? There  
<br>
is nothing suspicious in the server or mom logs.
<br>
<p>Thanks for any help,
<br>
<p>Jody
<br>
<p><p><p><p><p><pre>
--
Jody Klymak
<a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10270.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10268.php">Dave Love: "Re: [OMPI users] x4100 with IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10270.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10270.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10271.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
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
