<?
$subject_val = "[OMPI users] MPI_Comm_spawn and shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 02:52:56 2015" -->
<!-- isoreceived="20150514065256" -->
<!-- sent="Thu, 14 May 2015 08:52:53 +0200" -->
<!-- isosent="20150514065253" -->
<!-- name="Radoslaw Martyniszyn" -->
<!-- email="radoslaw.martyniszyn_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_spawn and shared memory" -->
<!-- id="CANzY0kaHE2-_OA_N87-kVSv1KiTOzoopSx33bsCZMc=aUV0-JA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_spawn and shared memory<br>
<strong>From:</strong> Radoslaw Martyniszyn (<em>radoslaw.martyniszyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-14 02:52:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26866.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Comm_spawn and shared memory"</a>
<li><strong>Previous message:</strong> <a href="26864.php">Damien: "Re: [OMPI users] OpenMPI on Windows without Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26866.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Comm_spawn and shared memory"</a>
<li><strong>Reply:</strong> <a href="26866.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Comm_spawn and shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear developers of Open MPI,
<br>
<p>I've created two applications: parent and child. Parent spawns children
<br>
using MPI_Comm_spawn. I would like to use shared memory when they
<br>
communicate. However, applications do not start when I try using sm. Please
<br>
comment on that issue. If this feature is not supported, are there any
<br>
plans to add support? Also, are there any examples showing MPI_Comm_spawn
<br>
and shared memory?
<br>
<p>I am using Open MPI 1.6.5 on Ubuntu. Both applications are run locally on
<br>
the same host.
<br>
<p>// Works fine
<br>
mpirun --mca btl self,tcp ./parent
<br>
<p>// Application terminates
<br>
mpirun --mca btl self,sm ./parent
<br>
<p>&quot;At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.&quot;
<br>
<p>Below are code snippets:
<br>
<p>parent.cc:
<br>
#include &lt;string&gt;
<br>
#include &lt;unistd.h&gt;
<br>
<p>int main(int argc, char** argv) {
<br>
&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
<p>&nbsp;&nbsp;std::string lProgram = &quot;./child&quot;;
<br>
&nbsp;&nbsp;MPI_Comm lIntercomm;
<br>
&nbsp;&nbsp;int lRv;
<br>
&nbsp;&nbsp;lRv = MPI_Comm_spawn( const_cast&lt; char* &gt;(lProgram.c_str()),
<br>
MPI_ARGV_NULL, 3,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;lIntercomm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_ERRCODES_IGNORE);
<br>
<p>&nbsp;&nbsp;if ( MPI_SUCCESS == lRv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;SPAWN SUCCESS&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(10);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;SPAWN ERROR &quot; &lt;&lt; lRv &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>child.cc:
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
#include &lt;unistd.h&gt;
<br>
<p>int main(int argc, char** argv) {
<br>
&nbsp;&nbsp;// Initialize the MPI environment
<br>
&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
<p>&nbsp;&nbsp;std::cout &lt;&lt; &quot;CHILD&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;sleep(10);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>makefile (note, there are tabs not spaces preceding each target):
<br>
EXECS=child parent
<br>
MPICC?=mpic++
<br>
<p>all: ${EXECS}
<br>
<p>child: child.cc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;${MPICC} -o child child.cc
<br>
<p>parent: parent.cc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;${MPICC} -o parent parent.cc
<br>
<p>clean:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rm -f ${EXECS}
<br>
<p><p>Greetings to all of you,
<br>
Radek Martyniszyn
<br>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26865/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26865/child.cc">child.cc</a>
</ul>
<!-- attachment="child.cc" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26865/makefile">makefile</a>
</ul>
<!-- attachment="makefile" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26865/parent.cc">parent.cc</a>
</ul>
<!-- attachment="parent.cc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26866.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Comm_spawn and shared memory"</a>
<li><strong>Previous message:</strong> <a href="26864.php">Damien: "Re: [OMPI users] OpenMPI on Windows without Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26866.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Comm_spawn and shared memory"</a>
<li><strong>Reply:</strong> <a href="26866.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Comm_spawn and shared memory"</a>
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
