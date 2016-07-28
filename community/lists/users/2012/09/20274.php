<?
$subject_val = "Re: [OMPI users] Algorithms used in MPI_BCast";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 24 09:09:08 2012" -->
<!-- isoreceived="20120924130908" -->
<!-- sent="Mon, 24 Sep 2012 17:09:04 +0400" -->
<!-- isosent="20120924130904" -->
<!-- name="Pavel Mezentsev" -->
<!-- email="pavel.mezentsev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Algorithms used in MPI_BCast" -->
<!-- id="CAFamD4VeyhbN+k-pcS5Lu-zyqfiCBb6f2szqbh6fQCvy0tGVkA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FDAA43115FAF4A4F88865097FC2C3CC9031383D9_at_rz-mbx2.win.rz.rwth-aachen.de" -->
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
<strong>From:</strong> Pavel Mezentsev (<em>pavel.mezentsev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-24 09:09:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20275.php">Ralph Castain: "Re: [OMPI users] 64-bit mpiJava in a heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="20273.php">marco atzeri: "Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
<li><strong>In reply to:</strong> <a href="20256.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20292.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Reply:</strong> <a href="20292.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Are you making these rules manually or in some automated way?
<br>
<p>Regards, Pavel Mezentsev.
<br>
<p>2012/9/21 Iliev, Hristo &lt;iliev_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI uses several different algorithms depending on which module from
</span><br>
<span class="quotelev1">&gt; the &quot;coll&quot; framework is selected to perform the logic of the broadcast
</span><br>
<span class="quotelev1">&gt; operation. The &quot;tuned&quot; module which usually gets selected on cluster
</span><br>
<span class="quotelev1">&gt; installations uses a heuristic rule, based on the message size and the size
</span><br>
<span class="quotelev1">&gt; of the communicator, to choose between building a pipeline, binomial tree
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; split binary tree. There are also other algorithms that go unused by the
</span><br>
<span class="quotelev1">&gt; default rule logic, but you can force them with MCA parameters if you'd
</span><br>
<span class="quotelev1">&gt; like.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The default rules might not be optimal for your hardware. You can
</span><br>
<span class="quotelev1">&gt; reevaluate
</span><br>
<span class="quotelev1">&gt; each algorithm and create a rule file that you can then give to Open MPI.
</span><br>
<span class="quotelev1">&gt; That's what I'm doing now on our cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Hristo
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt; On Behalf Of Mohammed El Mehdi DIOURI
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Friday, September 21, 2012 2:13 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Cc: Mohammed El Mehdi DIOURI
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI users] Algorithms used in MPI_BCast
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would like to know what are the algorithms used in MPI_BCast() in the
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI implementation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For example, in MPICH2, depending on the number of processes and the size
</span><br>
<span class="quotelev2">&gt; &gt; of data to broadcast, the broadcasting algorithm used can be different :
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev2">&gt; &gt; binomial tree if the message is short or MPI_Scatter followed by
</span><br>
<span class="quotelev2">&gt; &gt; MPI_AllGather if the message to broadcast is long.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it the same for OpenMPI ?
</span><br>
<span class="quotelev2">&gt; &gt; It doesn't seem to be the case since the broadcasting time is different
</span><br>
<span class="quotelev1">&gt; when I
</span><br>
<span class="quotelev2">&gt; &gt; use OpenMPI or MPICH2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your help,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mehdi.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20274/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20275.php">Ralph Castain: "Re: [OMPI users] 64-bit mpiJava in a heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="20273.php">marco atzeri: "Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
<li><strong>In reply to:</strong> <a href="20256.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20292.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Reply:</strong> <a href="20292.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
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
