<?
$subject_val = "[OMPI users] Newbie question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 10 20:09:32 2011" -->
<!-- isoreceived="20110111010932" -->
<!-- sent="Mon, 10 Jan 2011 17:04:41 -0800" -->
<!-- isosent="20110111010441" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="[OMPI users] Newbie question" -->
<!-- id="C950ECA9.DB74%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Newbie question<br>
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-10 20:04:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15333.php">pooja varshneya: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="15331.php">Michael Di Domenico: "Re: [OMPI users] CQ errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15333.php">pooja varshneya: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="15333.php">pooja varshneya: "Re: [OMPI users] Newbie question"</a>
<li><strong>Maybe reply:</strong> <a href="15335.php">Siegmar Gross: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="15338.php">Jeff Squyres: "Re: [OMPI users] Newbie question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am an mpi newbie.  My open MPI is v 1.4.3, which I compiled
<br>
on a linux machine.
<br>
<p>I am using a language called R, which has an mpi interface/package.
<br>
It appears that it is happy, on the surface, with the open MPI I installed.
<br>
<p>There is an R function called mpi.spawn.Rslaves().  An argument to
<br>
this function is nslaves.  I can issue, for example,
<br>
&nbsp;&nbsp;mpi.spawn.Rslaves( nslaves=20 )
<br>
And it spawns 20 slave processes.  The trouble is that it is all on the
<br>
same node as that of the master.  I want, instead, these 20 (or more)
<br>
slaves spawned on other machines on the network.
<br>
<p>It so happens the mpi.spawn.Rslaves() has an extra argument called
<br>
hosts.  Here&#146;s the definition of hosts from the api document: &#147;NULL or
<br>
LAM node numbers to specify where R slaves to be spawned.&#148;  I have
<br>
no idea what LAM node is, but there  is a funciton called lamhosts().
<br>
which returns a bit verbose message:
<br>
<p>&nbsp;&nbsp;It seems that there is no lamd running on the host compute-0-0.local.
<br>
<p>&nbsp;&nbsp;This indicates that the LAM/MPI runtime environment is not operating.
<br>
&nbsp;&nbsp;The LAM/MPI runtime environment is necessary for the &quot;lamnodes&quot; command.
<br>
<p>&nbsp;&nbsp;Please run the &quot;lamboot&quot; command the start the LAM/MPI runtime
<br>
&nbsp;&nbsp;environment.  See the LAM/MPI documentation for how to invoke
<br>
&nbsp;&nbsp;&quot;lamboot&quot; across multiple machines.
<br>
<p>Here&#146;s my question.  Is there such command as lamboot in open MPI 1.4.3?
<br>
Or am I using a wrong mpi software?  In a FAQ I read that there are other
<br>
MPI software (FT-mpi, LA-mpi, LAM-mpi), but I had notion that open MPI
<br>
is to have functionalities of all.  Is this a wrong impression?
<br>
<p>Thank you for your help.
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden]
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15332/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15333.php">pooja varshneya: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="15331.php">Michael Di Domenico: "Re: [OMPI users] CQ errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15333.php">pooja varshneya: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="15333.php">pooja varshneya: "Re: [OMPI users] Newbie question"</a>
<li><strong>Maybe reply:</strong> <a href="15335.php">Siegmar Gross: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="15338.php">Jeff Squyres: "Re: [OMPI users] Newbie question"</a>
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
