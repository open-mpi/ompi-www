<?
$subject_val = "[OMPI users] deprecated MCA parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 05:24:14 2012" -->
<!-- isoreceived="20120828092414" -->
<!-- sent="Tue, 28 Aug 2012 11:24:10 +0200" -->
<!-- isosent="20120828092410" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] deprecated MCA parameter" -->
<!-- id="CAKbzMGd137PQ4jp4gg23_34xw2BrN0gYww7-htA_eJFkuvK7zQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] deprecated MCA parameter<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 05:24:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20030.php">清风: "[OMPI users] problem with installing open mpi with intelcompiler11.1.07 on ubuntu"</a>
<li><strong>Previous message:</strong> <a href="20028.php">&#199;&#229;&#183;&#231;: "[OMPI users] &#215;&#170;&#183;&#162;&#163;&#186;lwkmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20032.php">Ralph Castain: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>Reply:</strong> <a href="20032.php">Ralph Castain: "Re: [OMPI users] deprecated MCA parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>In order to open a xterm for each of my processes i use the MCA
<br>
parameter 'plm_rsh_agent'
<br>
like this:
<br>
&nbsp;&nbsp;mpirun -np 5 -hostfile allhosts    -mca plm_base_verbose 1 -mca
<br>
plm_rsh_agent &quot;ssh -Y&quot;  --leave-session-attached xterm  -hold -e
<br>
./MPIProg
<br>
<p>Without the option ' -mca plm_rsh_agent &quot;ssh -Y&quot;' i can't open windows
<br>
from the remote:
<br>
<p>jody_at_boss /mnt/data1/neander $  mpirun -np 5 -hostfile allhosts
<br>
-mca plm_base_verbose 1   --leave-session-attached xterm -hold -e
<br>
./MPIStruct
<br>
xterm: Xt error: Can't open display:
<br>
xterm: DISPLAY is not set
<br>
xterm: Xt error: Can't open display:
<br>
xterm: DISPLAY is not set
<br>
xterm: Xt error: Can't open display:
<br>
xterm: DISPLAY is not set
<br>
xterm: Xt error: Can't open display:
<br>
xterm: DISPLAY is not set
<br>
xterm: Xt error: Can't open display:
<br>
xterm: DISPLAY is not set
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
<p>Is there some replacement for this parameter,
<br>
or how else can i get mpi to use&quot; ssh -Y for&quot; its connections?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20030.php">清风: "[OMPI users] problem with installing open mpi with intelcompiler11.1.07 on ubuntu"</a>
<li><strong>Previous message:</strong> <a href="20028.php">&#199;&#229;&#183;&#231;: "[OMPI users] &#215;&#170;&#183;&#162;&#163;&#186;lwkmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20032.php">Ralph Castain: "Re: [OMPI users] deprecated MCA parameter"</a>
<li><strong>Reply:</strong> <a href="20032.php">Ralph Castain: "Re: [OMPI users] deprecated MCA parameter"</a>
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
