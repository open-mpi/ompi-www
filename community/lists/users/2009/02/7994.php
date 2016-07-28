<?
$subject_val = "[OMPI users] MPI_Reduce hangs in multi-node configuration";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  8 19:47:05 2009" -->
<!-- isoreceived="20090209004705" -->
<!-- sent="Sun, 8 Feb 2009 19:46:58 -0500" -->
<!-- isosent="20090209004658" -->
<!-- name="Brian Blank" -->
<!-- email="brianblank_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Reduce hangs in multi-node configuration" -->
<!-- id="b10b717f0902081646g496edb65wc23613b5468cc1e9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Reduce hangs in multi-node configuration<br>
<strong>From:</strong> Brian Blank (<em>brianblank_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-08 19:46:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7995.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Previous message:</strong> <a href="7993.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to run a small &quot;proof of concept&quot; program using OpenMPI 1.3.  I
<br>
am using Solaris 8 with Sparc processors across 2 nodes.  It appears that
<br>
the MPI_Reduce function is hanging.  If I run the same program with only 4
<br>
instances on 1 node , or 2 instances on 2 nodes, it works fine.  The problem
<br>
is visible with 4 instances on 2 nodes.
<br>
First, I had some issues while compiling OpenMPI.  I did resolve my
<br>
compile-time issues, so I would like to share with you my fixes.  I believe
<br>
that my compile-time issues are related to running an older version of
<br>
Solaris, and probably not due to any major issue in OpenMPI.  These fixes
<br>
are not related to my problem, but thought you might need to see this in
<br>
case it provides insight onto what my problem is.
<br>
<p>1) ./opal/mca/paffinity/solaris/paffinity_solaris_module.c
<br>
_SC_CPUID_MAX was undefined.  I made the following change to 2 locations in
<br>
the source:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cpuid_max = 7; /* sysconf(_SC_CPUID_MAX); */  /* Running on 8 CPU nodes
<br>
*/
<br>
<p>2) ./ompi/contrib/vt/vt/vtlib/vt_iowrap.c
<br>
vfscan was undefined.  I had to comment out the following code (it appears
<br>
that fscanf() was not required anyway):
<br>
<p>a)         /* #include &lt;stdint.h&gt; */
<br>
b)        /*      VT_IOWRAP_INIT_FUNC(fscanf); */
<br>
c)  I commented out the entire fscanf() function
<br>
<p><p>Now, I seem to be stuck on a run-time issue.  I wrote a program (located in
<br>
the attached bz2 file) called sieve.c which calculates prime numbers using
<br>
the sieve algorithm (copied the code from somewhere).  When I run the
<br>
program on a local node only with 4 threads it works fine.  If I run the
<br>
program with 2 threads on 2 nodes, it also works fine.  If I run the program
<br>
with 4 threads on 2 nodes, it hangs.  I made the following observations:
<br>
<p>1) It is definitely hanging during the call to MPI_Reduce().
<br>
<p>2) Some instances do exit MPI_Reduce(), while other instances enter but
<br>
never exit this function.
<br>
<p>3) If I added the following code right before calling MPI_Reduce(), the
<br>
problem went away.  It appears that by delaying the destination instance of
<br>
the reduce operation from making the call, it seems to work.  However, I do
<br>
realize this is a kludge and that it is no guarantee that it will work all
<br>
the time.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!id) sleep(1);
<br>
<p>4) If I changed the MPI_Reduce() to an MPI_Allreduce(), the sieve program
<br>
also works with 4 instances across 2 nodes.
<br>
<p>I did search your archives, and found someone else with a similar issue, but
<br>
I didn't see any response.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2008/07/6157.php">http://www.open-mpi.org/community/lists/users/2008/07/6157.php</a>
<br>
<p>My PATH includes:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/home/username/mpi/openmpi-1.3.local/bin
<br>
<p>My LD_LIBRARY_PATH includes:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/home/username/mpi/openmpi-1.3.local/lib
<br>
<p>I used the following in my configure parameters:
<br>
./configure --prefix=/home/username/mpi/openmpi-1.3.local --disable-mpi-f77
<br>
--disable-mpi-f90 CFLAGS=-xarch=v8plus CXXFLAGS=-xarch=v8plus
<br>
<p>I compiled the program with:
<br>
mpicc -g -o sieve sieve.c
<br>
<p>I ran the program with:
<br>
mpirun -np 4 -H node1,node2 sieve 100
<br>
<p><p>Please let me know if you need any additional information.  And thanks in
<br>
advance for any help you can provide.
<br>
<p>Thanks,
<br>
Brian
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7994/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7994/attachments.tar.bz2">attachments.tar.bz2</a>
</ul>
<!-- attachment="attachments.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7995.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Previous message:</strong> <a href="7993.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
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
