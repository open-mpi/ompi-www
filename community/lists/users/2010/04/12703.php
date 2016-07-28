<?
$subject_val = "[OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 and beyond";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 16:06:18 2010" -->
<!-- isoreceived="20100419200618" -->
<!-- sent="Mon, 19 Apr 2010 14:06:05 -0600" -->
<!-- isosent="20100419200605" -->
<!-- name="Samuel Collis" -->
<!-- email="sscollis_at_[hidden]" -->
<!-- subject="[OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 and beyond" -->
<!-- id="60706699905766529454333157851306475306-Webmail_at_me.com" -->
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
<strong>Subject:</strong> [OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 and beyond<br>
<strong>From:</strong> Samuel Collis (<em>sscollis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 16:06:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12704.php">Ralph Castain: "Re: [OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque"</a>
<li><strong>Previous message:</strong> <a href="12702.php">Martin Siegert: "[OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12708.php">E.T.A.vanderWeide_at_[hidden]: "Re: [OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 andbeyond"</a>
<li><strong>Reply:</strong> <a href="12708.php">E.T.A.vanderWeide_at_[hidden]: "Re: [OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 andbeyond"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12703/mpiio.cpp">mpiio.cpp</a>
</ul>
<!-- attachment="mpiio.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12704.php">Ralph Castain: "Re: [OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque"</a>
<li><strong>Previous message:</strong> <a href="12702.php">Martin Siegert: "[OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12708.php">E.T.A.vanderWeide_at_[hidden]: "Re: [OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 andbeyond"</a>
<li><strong>Reply:</strong> <a href="12708.php">E.T.A.vanderWeide_at_[hidden]: "Re: [OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 andbeyond"</a>
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
