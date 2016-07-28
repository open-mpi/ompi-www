<?
$subject_val = "[OMPI users] Segmentation fault - Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 08:51:16 2009" -->
<!-- isoreceived="20090706125116" -->
<!-- sent="Mon, 6 Jul 2009 13:50:52 +0100" -->
<!-- isosent="20090706125052" -->
<!-- name="Catalin David" -->
<!-- email="catalindavid2003_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault - Address not mapped" -->
<!-- id="d62c43c00907060550g68e0f168pd0387859be919a08_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault - Address not mapped<br>
<strong>From:</strong> Catalin David (<em>catalindavid2003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 08:50:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9836.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="9834.php">Manuel Holtgrewe: "[OMPI users] Parallel I/O Usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9837.php">Dorian Krause: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9837.php">Dorian Krause: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have recently started working on a project using OpenMPI. Basically,
<br>
I have been given some c++ code, a cluster to play with and a deadline
<br>
in order to make the c++ code run faster. The cluster was a bit
<br>
crowded, so I started working on my laptop (g++ 4.3.3 -- Ubuntu repos,
<br>
OpenMPI 1.3.2 -- compiled with no options ) and after one week I
<br>
actually had something that was running on my computer, therefore
<br>
decided to move to the cluster. Since the cluster is very old and it
<br>
was using g++ 3.2 and an old version of OpenMPI, I decided to install
<br>
both of them from source in my home folder (g++ 4.4, OpenMPI 1.3.2).
<br>
The issue is that when I run the program (after being compiled
<br>
flawless on the machine), I get these error messages:
<br>
<p>[denali:30134] *** Process received signal ***
<br>
[denali:30134] Signal: Segmentation fault (11)
<br>
[denali:30134] Signal code: Address not mapped (1)
<br>
[denali:30134] Failing at address: 0x18
<br>
<p>(more in the attached file -- mpirun -np 4 ray-trace)
<br>
<p>All this morning, I have gone through the mailing lists, found people
<br>
experiencing my problems, but their solution did not work for me. By
<br>
using simple debugging (cout), I was able to determine where the error
<br>
comes from:
<br>
<p>//Initialize step
<br>
MPI_Init(&amp;argc,&amp;argv);
<br>
//Here it breaks!!! Memory allocation issue!
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;pool);
<br>
std::cout&lt;&lt;&quot;I'm here&quot;&lt;&lt;std::endl; //this statement is never reached
<br>
MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
<br>
<p>When trying to debug via gdb, the problem seems to be:
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
0xb7524772 in ompi_comm_invalid (comm=Could not find the frame base
<br>
for &quot;ompi_comm_invalid&quot;.) at communicator.h:261
<br>
261	communicator.h: No such file or directory.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in communicator.h
<br>
<p>which might indicate a problem with paths. For now, my LD_LIBRARY_PATH
<br>
is set to &quot;/users/cluster/cdavid/local/lib/&quot; (the local folder in my
<br>
home folder emulates the directory structure of the / folder).
<br>
<p>Moreover, I wanted to see if the installation is actually ok and I
<br>
tried running this program:
<br>
<p><a href="http://en.wikipedia.org/wiki/Message_Passing_Interface#Example_program">http://en.wikipedia.org/wiki/Message_Passing_Interface#Example_program</a>
<br>
<p>with exactly the same results; the code breaks when the memory address
<br>
of variable pool is referenced.
<br>
<p><p>So, if you have any ideas or you think I might have missed something,
<br>
please let me know.
<br>
<p><p><p>Thanks,
<br>
<p>Catalin
<br>
<p><pre>
-- 
******************************
Catalin David
B.Sc. Computer Science 2010
Jacobs University Bremen
Phone: +49-(0)1577-49-38-667
College Ring 4, #343
Bremen, 28759
Germany
******************************

</pre>
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9835/stdout.log">stdout.log</a>
</ul>
<!-- attachment="stdout.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9836.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="9834.php">Manuel Holtgrewe: "[OMPI users] Parallel I/O Usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9837.php">Dorian Krause: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9837.php">Dorian Krause: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
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
