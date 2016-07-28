<?
$subject_val = "[OMPI users] How to test it";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 11:18:42 2010" -->
<!-- isoreceived="20100105161842" -->
<!-- sent="Tue, 5 Jan 2010 14:18:18 -0200" -->
<!-- isosent="20100105161818" -->
<!-- name="Leonardo Machado Moreira" -->
<!-- email="lm.moreira_at_[hidden]" -->
<!-- subject="[OMPI users] How to test it" -->
<!-- id="4788ffe71001050818s15d0eeb2ja27e06f8d44c1529_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How to test it<br>
<strong>From:</strong> Leonardo Machado Moreira (<em>lm.moreira_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-05 11:18:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11693.php">Louis Rossi: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11691.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11696.php">Jeff Squyres: "Re: [OMPI users] How to test it"</a>
<li><strong>Reply:</strong> <a href="11696.php">Jeff Squyres: "Re: [OMPI users] How to test it"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I have created a cluster with openmpi this way.
<br>
<p>1 - Configured SSH with authorized_keys from the server to the nodes.
<br>
2 - In */etc/openmpi-default-hostfile\ I have typed the IP of every nodes
<br>
and the server.
<br>
3 - Afterward I have created a Java application of two threads just to type
<br>
a text on the console and runned it by
<br>
*
<br>
*mpirun -1 *java javaprogram
<br>
or
<br>
*mpirun -2 *java javaprogram
<br>
It is on the ps -aux of the server but the nodes are still stoped.
<br>
<p>How can I know that my mpi is working
<br>
<p>Thanks a lot
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11692/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11693.php">Louis Rossi: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11691.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11696.php">Jeff Squyres: "Re: [OMPI users] How to test it"</a>
<li><strong>Reply:</strong> <a href="11696.php">Jeff Squyres: "Re: [OMPI users] How to test it"</a>
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
