<?
$subject_val = "[OMPI users] Question on using rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 17:04:00 2011" -->
<!-- isoreceived="20110912210400" -->
<!-- sent="Mon, 12 Sep 2011 15:03:48 -0600" -->
<!-- isosent="20110912210348" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Question on using rsh" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275E2E6171_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Question on using rsh<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 17:03:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17237.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Previous message:</strong> <a href="17235.php">Riku: "[OMPI users] OpenMPI 1.5.4 with VS2008 and example code fails at orte_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17240.php">Ralph Castain: "Re: [OMPI users] Question on using rsh"</a>
<li><strong>Reply:</strong> <a href="17240.php">Ralph Castain: "Re: [OMPI users] Question on using rsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a hello world program that runs without prompting for password with plm_rsh_agent but not with orte_rsh_agent, I mean it runs but only after prompting for a password:
<br>
<p>&lt;path&gt;/bin/mpirun --machinefile mpihosts.dat -np 16 -mca plm_rsh_agent /usr/bin/rsh ./test_setup
<br>
<p>Hello from process            2
<br>
Hello from process            5
<br>
Hello from process           12
<br>
Hello from process            6
<br>
Hello from process            0
<br>
Hello from process            4
<br>
Hello from process            3
<br>
Hello from process            7
<br>
Hello from process           14
<br>
Hello from process            8
<br>
Hello from process            1
<br>
Hello from process            9
<br>
Hello from process           10
<br>
Hello from process           11
<br>
Hello from process           13
<br>
Hello from process           15
<br>
<p>&lt;path&gt;bin/mpirun --machinefile mpihosts.dat -np 16 -mca orte_rsh_agent /usr/bin/rsh./test_setup
<br>
bloscel_at_f8312's password:
<br>
<p>I didn't notice anything about this in the FAQ except that orte_rsh_agent is newer than plm_rsh_agent.  Did I miss some critical piece of information?  Why do these options behave differently?
<br>
<p>Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17236/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17237.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Previous message:</strong> <a href="17235.php">Riku: "[OMPI users] OpenMPI 1.5.4 with VS2008 and example code fails at orte_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17240.php">Ralph Castain: "Re: [OMPI users] Question on using rsh"</a>
<li><strong>Reply:</strong> <a href="17240.php">Ralph Castain: "Re: [OMPI users] Question on using rsh"</a>
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
