<?
$subject_val = "Re: [OMPI users] Algorithms used in MPI_BCast";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 03:58:58 2012" -->
<!-- isoreceived="20120925075858" -->
<!-- sent="Tue, 25 Sep 2012 07:58:51 +0000" -->
<!-- isosent="20120925075851" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Algorithms used in MPI_BCast" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC90313D16B_at_rz-mbx2.win.rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFamD4VeyhbN+k-pcS5Lu-zyqfiCBb6f2szqbh6fQCvy0tGVkA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-09-25 03:58:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20293.php">Jeff Squyres: "Re: [OMPI users] openmpi failed the hello world test"</a>
<li><strong>Previous message:</strong> <a href="20291.php">Jeff Squyres: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>In reply to:</strong> <a href="20274.php">Pavel Mezentsev: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;
<br>
<p>At the moment I'm building them manually but I am also thinking of a
<br>
measurement framework to do it automatically in the future.
<br>
<p>&nbsp;
<br>
<p>Best regards,
<br>
<p>Hristo
<br>
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Pavel Mezentsev
Sent: Monday, September 24, 2012 3:09 PM
To: Open MPI Users
Subject: Re: [OMPI users] Algorithms used in MPI_BCast
 
Hello,
 
Are you making these rules manually or in some automated way?
 
Regards, Pavel Mezentsev.
2012/9/21 Iliev, Hristo &lt;iliev_at_[hidden]&gt;
Hi,
Open MPI uses several different algorithms depending on which module from
the &quot;coll&quot; framework is selected to perform the logic of the broadcast
operation. The &quot;tuned&quot; module which usually gets selected on cluster
installations uses a heuristic rule, based on the message size and the size
of the communicator, to choose between building a pipeline, binomial tree or
split binary tree. There are also other algorithms that go unused by the
default rule logic, but you can force them with MCA parameters if you'd
like.
The default rules might not be optimal for your hardware. You can reevaluate
each algorithm and create a rule file that you can then give to Open MPI.
That's what I'm doing now on our cluster.
Kind regards,
Hristo
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20292/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20292/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20293.php">Jeff Squyres: "Re: [OMPI users] openmpi failed the hello world test"</a>
<li><strong>Previous message:</strong> <a href="20291.php">Jeff Squyres: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>In reply to:</strong> <a href="20274.php">Pavel Mezentsev: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
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
