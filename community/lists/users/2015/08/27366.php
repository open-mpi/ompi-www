<?
$subject_val = "[OMPI users] having an issue with paralleling jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  1 15:22:34 2015" -->
<!-- isoreceived="20150801192234" -->
<!-- sent="Sun, 2 Aug 2015 00:52:23 +0530" -->
<!-- isosent="20150801192223" -->
<!-- name="abhisek Mondal" -->
<!-- email="abhisek.mndl_at_[hidden]" -->
<!-- subject="[OMPI users] having an issue with paralleling jobs" -->
<!-- id="CA+DemH9d6mGg2AVUw-bOPRdhZo66xAe9pvx6EmphN_dzeB2utQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] having an issue with paralleling jobs<br>
<strong>From:</strong> abhisek Mondal (<em>abhisek.mndl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-01 15:22:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27367.php">Ralph Castain: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27365.php">Ralph Castain: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27367.php">Ralph Castain: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Reply:</strong> <a href="27367.php">Ralph Castain: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm working on an openmpi enabled cluster. I'm trying to run a job with 2
<br>
different nodes and 16 processors per nodes.
<br>
Using this command:
<br>
<p>*mpirun -np 32 --hostfile myhostfile -loadbalance exe*
<br>
<p>The contents of myhostfile:
<br>
<p>*cx0937 slots=16    *
<br>
*cx0934 slots=16*
<br>
<p><p>But the job is getting terminated each time before job allocation happens
<br>
as per desired way.
<br>
<p>So, it'll very nice if I get some suggestions regarding the facts I'm
<br>
missing.
<br>
<p>Thank you
<br>
<p><pre>
-- 
Abhisek Mondal
*Research Fellow*
*Structural Biology and Bioinformatics*
*Indian Institute of Chemical Biology*
*Kolkata 700032*
*INDIA*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27366/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27367.php">Ralph Castain: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27365.php">Ralph Castain: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27367.php">Ralph Castain: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Reply:</strong> <a href="27367.php">Ralph Castain: "Re: [OMPI users] having an issue with paralleling jobs"</a>
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
