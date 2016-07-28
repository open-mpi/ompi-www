<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn and shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 03:26:31 2015" -->
<!-- isoreceived="20150514072631" -->
<!-- sent="Thu, 14 May 2015 09:26:30 +0200" -->
<!-- isosent="20150514072630" -->
<!-- name="Radoslaw Martyniszyn" -->
<!-- email="radoslaw.martyniszyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn and shared memory" -->
<!-- id="CANzY0kaGZWE6wrrEi3za1FuRd7RZNN+CuJ=uvBi=3aT8HR4sfA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55544AC2.1060807_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn and shared memory<br>
<strong>From:</strong> Radoslaw Martyniszyn (<em>radoslaw.martyniszyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-14 03:26:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26868.php">J Martin Rushton: "Re: [OMPI users] OpenMPI on Windows without Cygwin"</a>
<li><strong>Previous message:</strong> <a href="26866.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Comm_spawn and shared memory"</a>
<li><strong>In reply to:</strong> <a href="26866.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Comm_spawn and shared memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
Thanks for your answer.
<br>
BR,
<br>
Radek
<br>
<p>On Thu, May 14, 2015 at 9:12 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  This is a known limitation of the sm btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, the vader btl (available in Open MPI 1.8) has the same limitation,
</span><br>
<span class="quotelev1">&gt; thought i heard there are some works in progress to get rid of this
</span><br>
<span class="quotelev1">&gt; limitation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/14/2015 3:52 PM, Radoslaw Martyniszyn wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Dear developers of Open MPI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I've created two applications: parent and child. Parent spawns children
</span><br>
<span class="quotelev1">&gt; using MPI_Comm_spawn. I would like to use shared memory when they
</span><br>
<span class="quotelev1">&gt; communicate. However, applications do not start when I try using sm. Please
</span><br>
<span class="quotelev1">&gt; comment on that issue. If this feature is not supported, are there any
</span><br>
<span class="quotelev1">&gt; plans to add support? Also, are there any examples showing MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt; and shared memory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using Open MPI 1.6.5 on Ubuntu. Both applications are run locally on
</span><br>
<span class="quotelev1">&gt; the same host.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // Works fine
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl self,tcp ./parent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // Application terminates
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl self,sm ./parent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below are code snippets:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; parent.cc:
</span><br>
<span class="quotelev1">&gt; #include &lt;string&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;   MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   std::string lProgram = &quot;./child&quot;;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm lIntercomm;
</span><br>
<span class="quotelev1">&gt;   int lRv;
</span><br>
<span class="quotelev1">&gt;   lRv = MPI_Comm_spawn( const_cast&lt; char* &gt;(lProgram.c_str()),
</span><br>
<span class="quotelev1">&gt; MPI_ARGV_NULL, 3,
</span><br>
<span class="quotelev1">&gt;                        MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;lIntercomm,
</span><br>
<span class="quotelev1">&gt;                        MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if ( MPI_SUCCESS == lRv) {
</span><br>
<span class="quotelev1">&gt;       std::cout &lt;&lt; &quot;SPAWN SUCCESS&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;       sleep(10);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   else {
</span><br>
<span class="quotelev1">&gt;       std::cout &lt;&lt; &quot;SPAWN ERROR &quot; &lt;&lt; lRv &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  child.cc:
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;   // Initialize the MPI environment
</span><br>
<span class="quotelev1">&gt;   MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   std::cout &lt;&lt; &quot;CHILD&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;   sleep(10);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  makefile (note, there are tabs not spaces preceding each target):
</span><br>
<span class="quotelev1">&gt;  EXECS=child parent
</span><br>
<span class="quotelev1">&gt; MPICC?=mpic++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; all: ${EXECS}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; child: child.cc
</span><br>
<span class="quotelev1">&gt;     ${MPICC} -o child child.cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; parent: parent.cc
</span><br>
<span class="quotelev1">&gt;     ${MPICC} -o parent parent.cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; clean:
</span><br>
<span class="quotelev1">&gt;     rm -f ${EXECS}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Greetings to all of you,
</span><br>
<span class="quotelev1">&gt;  Radek Martyniszyn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26865.php">http://www.open-mpi.org/community/lists/users/2015/05/26865.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26866.php">http://www.open-mpi.org/community/lists/users/2015/05/26866.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26867/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26868.php">J Martin Rushton: "Re: [OMPI users] OpenMPI on Windows without Cygwin"</a>
<li><strong>Previous message:</strong> <a href="26866.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Comm_spawn and shared memory"</a>
<li><strong>In reply to:</strong> <a href="26866.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Comm_spawn and shared memory"</a>
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
