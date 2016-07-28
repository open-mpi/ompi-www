<?
$subject_val = "Re: [OMPI users] mpirun command gives ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 19 08:15:29 2012" -->
<!-- isoreceived="20120719121529" -->
<!-- sent="Thu, 19 Jul 2012 12:15:23 +0000" -->
<!-- isosent="20120719121523" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun command gives ERROR" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC9030E06C0_at_rz-mbx2.win.rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1342697690.33274.YahooMailNeo_at_web192203.mail.sg3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun command gives ERROR<br>
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-19 08:15:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19798.php">christophe petit: "[OMPI users] issue with 2 connected computers"</a>
<li><strong>Previous message:</strong> <a href="19796.php">Constantinos Makassikis: "Re: [OMPI users] mpirun command gives ERROR"</a>
<li><strong>In reply to:</strong> <a href="19795.php">Abhra Paul: "[OMPI users] mpirun command gives ERROR"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>You should consult the CPMD manual on how to run the program in parallel -
<br>
this doesn't look like a problem in Open MPI. The error comes from MPI_ABORT
<br>
being called by rank 0. As rank 0 process is the one that reads all the
<br>
input data and prepares the computation I would say that the most probable
<br>
reason for the crash is inconsistency in the program input. It could be that
<br>
some of the parameters specified there are not compatible with running the
<br>
program with 4 processes. It can also happen (at least with some DFT codes)
<br>
if you try to continue a previous simulation that was performed on different
<br>
number of processes. Quantum Espresso also uses similar technique to abort
<br>
but at least it prints a cryptic error message before the crash :)
<br>
<p>&nbsp;
<br>
<p>Hope that helps!
<br>
<p>&nbsp;
<br>
<p>Kind regards,
<br>
<p>Hristo
<br>
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Abhra Paul
Sent: Thursday, July 19, 2012 1:35 PM
To: users_at_[hidden]
Subject: [OMPI users] mpirun command gives ERROR
 
Respected developers and users
 
I am trying to run a parallel program CPMD with the command &quot;
/usr/local/bin/mpirun -np 4 ./cpmd.x 1-h2-wave.inp &gt; 1-h2-wave.out &amp;&quot; , it 
is giving the following error:
============================================================================
==========================
 
[testcpmd_at_slater CPMD_3_15_3]$ /usr/local/bin/mpirun -np 4 ./cpmd.x
1-h2-wave.inp &gt; 1-h2-wave.out &amp;
[1] 1769
[testcpmd_at_slater CPMD_3_15_3]$
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD 
with errorcode 999.
NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------
--------------------------------------------------------------------------
mpirun has exited due to process rank 0 with PID 1770 on
node slater.rcamos.iacs exiting improperly. There are two reasons this could
occur:
1. this process did not call &quot;init&quot; before exiting, but others in
the job did. This can cause a job to hang indefinitely while it waits
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
then ALL processes must call &quot;init&quot; prior to termination.
2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
exiting or it will be considered an &quot;abnormal termination&quot;
This may have caused other processes in the application to be
terminated by signals sent by mpirun (as reported here).
--------------------------------------------------------------------------
[1]+  Exit 231                /usr/local/bin/mpirun -np 4 ./cpmd.x
1-h2-wave.inp &gt; 1-h2-wave.out
============================================================================
==========================
I am unable to find out the reason of that error. Please help. My Open-MPI
version is 1.6.
 
With regards
Abhra Paul
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19797/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19797/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19798.php">christophe petit: "[OMPI users] issue with 2 connected computers"</a>
<li><strong>Previous message:</strong> <a href="19796.php">Constantinos Makassikis: "Re: [OMPI users] mpirun command gives ERROR"</a>
<li><strong>In reply to:</strong> <a href="19795.php">Abhra Paul: "[OMPI users] mpirun command gives ERROR"</a>
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
