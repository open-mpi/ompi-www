<?
$subject_val = "Re: [OMPI users] Algorithms used in MPI_BCast";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 21 04:25:50 2012" -->
<!-- isoreceived="20120921082550" -->
<!-- sent="Fri, 21 Sep 2012 08:25:44 +0000" -->
<!-- isosent="20120921082544" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Algorithms used in MPI_BCast" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC9031383D9_at_rz-mbx2.win.rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="74FBF747-3291-4F17-BB61-74D108354A87_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Algorithms used in MPI_BCast<br>
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-21 04:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20257.php">devendra rai: "[OMPI users] A question on MPI_Probe"</a>
<li><strong>Previous message:</strong> <a href="20255.php">George Bosilca: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>In reply to:</strong> <a href="20254.php">Mohammed El Mehdi DIOURI: "[OMPI users] Algorithms used in MPI_BCast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20274.php">Pavel Mezentsev: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Reply:</strong> <a href="20274.php">Pavel Mezentsev: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Open MPI uses several different algorithms depending on which module from
<br>
the &quot;coll&quot; framework is selected to perform the logic of the broadcast
<br>
operation. The &quot;tuned&quot; module which usually gets selected on cluster
<br>
installations uses a heuristic rule, based on the message size and the size
<br>
of the communicator, to choose between building a pipeline, binomial tree or
<br>
split binary tree. There are also other algorithms that go unused by the
<br>
default rule logic, but you can force them with MCA parameters if you'd
<br>
like.
<br>
<p>The default rules might not be optimal for your hardware. You can reevaluate
<br>
each algorithm and create a rule file that you can then give to Open MPI.
<br>
That's what I'm doing now on our cluster.
<br>
<p>Kind regards,
<br>
Hristo
<br>
<pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
&gt; On Behalf Of Mohammed El Mehdi DIOURI
&gt; Sent: Friday, September 21, 2012 2:13 AM
&gt; To: users_at_[hidden]
&gt; Cc: Mohammed El Mehdi DIOURI
&gt; Subject: [OMPI users] Algorithms used in MPI_BCast
&gt; 
&gt; Hi,
&gt; 
&gt; I would like to know what are the algorithms used in MPI_BCast() in the
&gt; OpenMPI implementation.
&gt; 
&gt; For example, in MPICH2, depending on the number of processes and the size
&gt; of data to broadcast, the broadcasting algorithm used can be different : a
&gt; binomial tree if the message is short or MPI_Scatter followed by
&gt; MPI_AllGather if the message to broadcast is long.
&gt; 
&gt; Is it the same for OpenMPI ?
&gt; It doesn't seem to be the case since the broadcasting time is different
when I
&gt; use OpenMPI or MPICH2.
&gt; 
&gt; Thanks for your help,
&gt; 
&gt; Mehdi.
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20256/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20257.php">devendra rai: "[OMPI users] A question on MPI_Probe"</a>
<li><strong>Previous message:</strong> <a href="20255.php">George Bosilca: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>In reply to:</strong> <a href="20254.php">Mohammed El Mehdi DIOURI: "[OMPI users] Algorithms used in MPI_BCast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20274.php">Pavel Mezentsev: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Reply:</strong> <a href="20274.php">Pavel Mezentsev: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
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
