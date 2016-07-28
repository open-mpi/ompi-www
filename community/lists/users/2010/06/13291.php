<?
$subject_val = "[OMPI users] port_name information between Linux and Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 17:21:49 2010" -->
<!-- isoreceived="20100609212149" -->
<!-- sent="Thu, 10 Jun 2010 01:21:44 +0400" -->
<!-- isosent="20100609212144" -->
<!-- name="awwase" -->
<!-- email="awwase_at_[hidden]" -->
<!-- subject="[OMPI users] port_name information between Linux and Windows" -->
<!-- id="AANLkTim9JwxWrSIWuVfARenzkdRgcjSjx9lkZdrlx0Hc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] port_name information between Linux and Windows<br>
<strong>From:</strong> awwase (<em>awwase_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 17:21:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13292.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Previous message:</strong> <a href="13290.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I setup a client application in a Linux machine and server application in a
<br>
Windows machine. In the server side, the function* MPI_Open_port* will
<br>
generate the following port_name:
<br>
<p>tag=0 port=2001 description=awwase-Laptop ifname=192.168.1.4
<br>
<p>Now I have to to pass this information into the function
<br>
*MPI_Comm_connect*in the client side. When I compile and run the
<br>
client application in a Linux
<br>
machine with the given information, the application crashes and says
<br>
&quot;MPI_Comm_connect: invalid argument: Invalid argument (rank 0,
<br>
MPI_COMM_WORLD)&quot;. But when I run it in a Windows machine, it works fine.
<br>
Moreover, when I compile and run the server application in a Linux machine,
<br>
the port_name will looks like:
<br>
<p>0.2.0:2000
<br>
<p>Is it possible to make a connection between Windows machine and Linux
<br>
machine? How I can translate the port_name between Linux machine and Windows
<br>
machine?
<br>
Thank you in advance.
<br>
<p>Regards,
<br>
<p>Eisa Al Shamsi
<br>
awwase_at_[hidden]
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13291/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13292.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Previous message:</strong> <a href="13290.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
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
