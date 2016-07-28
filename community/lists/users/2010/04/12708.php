<?
$subject_val = "Re: [OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 andbeyond";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 04:16:38 2010" -->
<!-- isoreceived="20100420081638" -->
<!-- sent="Tue, 20 Apr 2010 10:16:22 +0200" -->
<!-- isosent="20100420081622" -->
<!-- name="E.T.A.vanderWeide_at_[hidden]" -->
<!-- email="E.T.A.vanderWeide_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 andbeyond" -->
<!-- id="850A61E88A87D54E832F7C171A0BB8894FBDE1_at_ctwex4.ctw.utwente.nl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="60706699905766529454333157851306475306-Webmail_at_me.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 andbeyond<br>
<strong>From:</strong> <a href="mailto:E.T.A.vanderWeide_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Incorrect%20results%20with%20MPI-IO%20with%20OpenMPI%20v1.3.0%20andbeyond"><em>E.T.A.vanderWeide_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-04-20 04:16:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12709.php">Changsheng Jiang: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>Previous message:</strong> <a href="12707.php">jody: "Re: [OMPI users] Error on sending argv"</a>
<li><strong>In reply to:</strong> <a href="12703.php">Samuel Collis: "[OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 and beyond"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Scott,
<br>
<p>I find the same behavior for the test program I posted a couple of days ago. It works fine in combination with OpenMPI v1.2, but it produces incorrect results for v1.3 and v1.4. I also agree with your suggestion that something is wrong with the offsets, because for my test program both processor 0 and 1 read the same data, while processor 1 should read the data stored after the data read by processor 0.
<br>
<p>Regards,
<br>
<p>Edwin van der Weide
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] on behalf of Samuel Collis
<br>
Sent: Mon 4/19/2010 10:06 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 andbeyond
<br>
&nbsp;
<br>
Hi all, 
<br>
<p>Around a year ago, I posted the attached note regarding apparent incorrect file output results when using OpenMPI &gt;= 1.3.0.  I was requested that I generate a small, self contained bit of code that demonstrates the issue.  I have attached that code to this posting (mpiio.cpp). 
<br>
<p>You can build this with: 
<br>
<p>&nbsp;&nbsp;mpicxx mpiio.cpp -o mpiio 
<br>
<p>And I execute with the command: 
<br>
<p>sh-3.2$ mpiexec -n 1 ~/dgm/src/mpiio; od -e mpi.out 
<br>
0000000   0.000000000000000e+00   1.000000000000000e+00 
<br>
0000020   2.000000000000000e+00   3.000000000000000e+00 
<br>
0000040   4.000000000000000e+00   5.000000000000000e+00 
<br>
0000060   6.000000000000000e+00   7.000000000000000e+00 
<br>
0000100   8.000000000000000e+00   9.000000000000000e+00 
<br>
0000120   1.000000000000000e+01   1.100000000000000e+01 
<br>
0000140   1.200000000000000e+01   1.300000000000000e+01 
<br>
0000160   1.400000000000000e+01   1.500000000000000e+01 
<br>
0000200   1.600000000000000e+01   1.700000000000000e+01 
<br>
0000220   1.800000000000000e+01   1.900000000000000e+01 
<br>
0000240   2.000000000000000e+01   2.100000000000000e+01 
<br>
0000260   2.200000000000000e+01   2.300000000000000e+01 
<br>
0000300 
<br>
<p>sh-3.2$ mpiexec -n 2 ~/dgm/src/mpiio; od -e mpi.out 
<br>
0000000   1.200000000000000e+01   1.300000000000000e+01 
<br>
0000020   1.400000000000000e+01   1.500000000000000e+01 
<br>
0000040   1.600000000000000e+01   1.700000000000000e+01 
<br>
0000060   1.800000000000000e+01   1.900000000000000e+01 
<br>
0000100   2.000000000000000e+01   2.100000000000000e+01 
<br>
0000120   2.200000000000000e+01   2.300000000000000e+01 
<br>
0000140   1.200000000000000e+01   1.300000000000000e+01 
<br>
0000160   1.400000000000000e+01   1.500000000000000e+01 
<br>
0000200   1.600000000000000e+01   1.700000000000000e+01 
<br>
0000220   1.800000000000000e+01   1.900000000000000e+01 
<br>
0000240   2.000000000000000e+01   2.100000000000000e+01 
<br>
0000260   2.200000000000000e+01   2.300000000000000e+01 
<br>
0000300 
<br>
<p>Note that the program should write out doubles 0-23 and on one processor this is 
<br>
true.  However, for n=2, it incorrectly writes rank 2's information overtop 
<br>
of rank 1's stuff. 
<br>
<p>For larger problems it sometimes also drops information -- i.e. One rank 
<br>
doesn't even write data at all.  I suspect that the problems are closely 
<br>
related.  So see this behavior, use 100 elements (instead of the default 2) 
<br>
<p>mpiexec -n 4 ~/dgm/src/mpiio 100; ls -l mpi.out 
<br>
-rw-r----- 1 user user 2400 Apr 19 12:19 mpi.out 
<br>
<p>mpiexec -n 1 ~/dgm/src/mpiio 100; ls -l mpi.out 
<br>
-rw-r----- 1 user user 9600 Apr 19 12:19 mpi.out 
<br>
<p>Note how the -n 4 file is too small. 
<br>
<p>Note that with OpenMPI 1.2.7, I have verified that we get the correct 
<br>
results: 
<br>
<p>$ mpiexec -n 1 mpiio; od -e mpi.out 
<br>
0000000     0.000000000000000e+00    1.000000000000000e+00 
<br>
0000020     2.000000000000000e+00    3.000000000000000e+00 
<br>
0000040     4.000000000000000e+00    5.000000000000000e+00 
<br>
0000060     6.000000000000000e+00    7.000000000000000e+00 
<br>
0000100     8.000000000000000e+00    9.000000000000000e+00 
<br>
0000120     1.000000000000000e+01    1.100000000000000e+01 
<br>
0000140     1.200000000000000e+01    1.300000000000000e+01 
<br>
0000160     1.400000000000000e+01    1.500000000000000e+01 
<br>
0000200     1.600000000000000e+01    1.700000000000000e+01 
<br>
0000220     1.800000000000000e+01    1.900000000000000e+01 
<br>
0000240     2.000000000000000e+01    2.100000000000000e+01 
<br>
0000260     2.200000000000000e+01    2.300000000000000e+01 
<br>
0000300 
<br>
<p>$ mpiexec -n 2 mpiio; od -e mpi.out 
<br>
0000000     0.000000000000000e+00    1.000000000000000e+00 
<br>
0000020     2.000000000000000e+00    3.000000000000000e+00 
<br>
0000040     4.000000000000000e+00    5.000000000000000e+00 
<br>
0000060     6.000000000000000e+00    7.000000000000000e+00 
<br>
0000100     8.000000000000000e+00    9.000000000000000e+00 
<br>
0000120     1.000000000000000e+01    1.100000000000000e+01 
<br>
0000140     1.200000000000000e+01    1.300000000000000e+01 
<br>
0000160     1.400000000000000e+01    1.500000000000000e+01 
<br>
0000200     1.600000000000000e+01    1.700000000000000e+01 
<br>
0000220     1.800000000000000e+01    1.900000000000000e+01 
<br>
0000240     2.000000000000000e+01    2.100000000000000e+01 
<br>
0000260     2.200000000000000e+01    2.300000000000000e+01 
<br>
0000300 
<br>
<p>Finally, just to prove that it is OpenMPI related, I build the latest MPICH2 
<br>
with the results: 
<br>
<p>$ ~/local/mpich2/bin/mpiexec -n 1 mpiio-mpich2; od -e mpi.out 
<br>
0000000     0.000000000000000e+00    1.000000000000000e+00 
<br>
0000020     2.000000000000000e+00    3.000000000000000e+00 
<br>
0000040     4.000000000000000e+00    5.000000000000000e+00 
<br>
0000060     6.000000000000000e+00    7.000000000000000e+00 
<br>
0000100     8.000000000000000e+00    9.000000000000000e+00 
<br>
0000120     1.000000000000000e+01    1.100000000000000e+01 
<br>
0000140     1.200000000000000e+01    1.300000000000000e+01 
<br>
0000160     1.400000000000000e+01    1.500000000000000e+01 
<br>
0000200     1.600000000000000e+01    1.700000000000000e+01 
<br>
0000220     1.800000000000000e+01    1.900000000000000e+01 
<br>
0000240     2.000000000000000e+01    2.100000000000000e+01 
<br>
0000260     2.200000000000000e+01    2.300000000000000e+01 
<br>
0000300 
<br>
<p>$ ~/local/mpich2/bin/mpiexec -n 2 mpiio-mpich2; od -e mpi.out 
<br>
0000000     0.000000000000000e+00    1.000000000000000e+00 
<br>
0000020     2.000000000000000e+00    3.000000000000000e+00 
<br>
0000040     4.000000000000000e+00    5.000000000000000e+00 
<br>
0000060     6.000000000000000e+00    7.000000000000000e+00 
<br>
0000100     8.000000000000000e+00    9.000000000000000e+00 
<br>
0000120     1.000000000000000e+01    1.100000000000000e+01 
<br>
0000140     1.200000000000000e+01    1.300000000000000e+01 
<br>
0000160     1.400000000000000e+01    1.500000000000000e+01 
<br>
0000200     1.600000000000000e+01    1.700000000000000e+01 
<br>
0000220     1.800000000000000e+01    1.900000000000000e+01 
<br>
0000240     2.000000000000000e+01    2.100000000000000e+01 
<br>
0000260     2.200000000000000e+01    2.300000000000000e+01 
<br>
0000300 
<br>
<p>Clearly something is wrong (perhaps with file pointer/offsets).  Hope that this helps, 
<br>
<p>Scott 
<br>
<p><p><p>Subject: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1 
<br>
From: Scott Collis (sscollis_at_[hidden]) 
<br>
Date: 2009-04-06 14:16:18 
<br>
<p>I have been a user of MPI-IO for 4+ years and have a code that has run 
<br>
<p>correctly with MPICH, MPICH2, and OpenMPI 1.2.* 
<br>
<p>I recently upgraded to OpenMPI 1.3.1 and immediately noticed that my 
<br>
MPI-IO generated output files are corrupted. I have not yet had a 
<br>
chance to debug this in detail, but it appears that 
<br>
MPI_File_write_all() commands are not placing information correctly on 
<br>
their file_view when running with more than 1 processor (everything is 
<br>
okay with -np 1). 
<br>
<p>Note that I have observed the same incorrect behavior on both Linux 
<br>
and OS-X. I have also gone back and made sure that the same code 
<br>
works with MPICH, MPICH2, and OpenMPI 1.2.* so I'm fairly confident 
<br>
that something has been changed or broken as of OpenMPI 1.3.*. Just 
<br>
today, I checked out the SVN repository version of OpenMPI and built 
<br>
and tested my code with that and the results are incorrect just as for 
<br>
the 1.3.1 tarball. 
<br>
<p>While I plan to continue to debug this and will try to put together a 
<br>
small test that demonstrates the issue, I thought that I would first 
<br>
send out this message to see if this might trigger a thought within 
<br>
the OpenMPI development team as to where this issue might be. 
<br>
<p>Please let me know if you have any ideas as I would very much 
<br>
appreciate it! 
<br>
<p>Thanks in advance, 
<br>
<p>Scott 
<br>
<p><pre>
-- 
Scott Collis 
sscollis_at_[hidden] 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12709.php">Changsheng Jiang: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>Previous message:</strong> <a href="12707.php">jody: "Re: [OMPI users] Error on sending argv"</a>
<li><strong>In reply to:</strong> <a href="12703.php">Samuel Collis: "[OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 and beyond"</a>
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
