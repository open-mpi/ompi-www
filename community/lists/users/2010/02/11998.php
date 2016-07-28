<?
$subject_val = "Re: [OMPI users] MPI_Comm_dup hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 00:35:12 2010" -->
<!-- isoreceived="20100204053512" -->
<!-- sent="Thu, 04 Feb 2010 00:35:03 -0500" -->
<!-- isosent="20100204053503" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_dup hangs" -->
<!-- id="4B6A5C87.8070809_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B69C788.3050105_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_dup hangs<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 00:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11999.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="11997.php">Dorian Krause: "[OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>In reply to:</strong> <a href="11995.php">Prentice Bisbal: "[OMPI users] MPI_Comm_dup hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nevermind... I figured this one out on my own. I was calling foo() from
<br>
inside an if (rank == 0) block. Since MPI_Comm_dup is a collective
<br>
operation, it was waiting for all the other nodes to also call
<br>
MPI_Comm_dup. Oops.
<br>
<p><pre>
--
Prentice
Prentice Bisbal wrote:
&gt; I have a problem with MPI_Comm_dup. When I call it in a function, it
&gt; causes my application to hang. Are they any common causes for a problem
&gt; like this? I'm using OpenMPI 1.2.8. Are there any known bugs that could
&gt; be causing this?
&gt; 
&gt; My program seems to hang when it gets to MPI_Comm_dup. Here's an example
&gt; of how I'm using it.
&gt; 
&gt; #include &quot;foo.h&quot;
&gt; 
&gt; /* MPI variables */
&gt; int my_rank;
&gt; int num_proc;
&gt; MPI_Comm euclid_comm;
&gt; 
&gt; void foo(long *arg1, long *arg2, MPI_Comm old_comm);
&gt; 
&gt; int main (int argc, char** argv) {
&gt; 
&gt;   /* get options */
&gt; 
&gt;   MPI_Init(&amp;argc, &amp;argv);
&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;num_proc);
&gt; 
&gt;  /* read in some data, yadda, yadda yadda */
&gt; 
&gt;  foo(&amp;arg1, &amp;arg2, MPI_COMM_WORLD);
&gt; 
&gt;  / *print results from foo */
&gt; 
&gt;  MPI_Finalize();
&gt; 
&gt; }
&gt; 
&gt; void foo(long *arg1, long *arg2, MPI_Comm old_comm)
&gt; {
&gt;   MPI_Comm foo_comm;
&gt;   int foo_my_rank;
&gt;   int foo_num_proc;
&gt; 
&gt;   MPI_Comm_dup(old_comm, &amp;foo_comm);
&gt;   MPI_Comm_rank(foo_comm, &amp;foo_my_rank);
&gt;   MPI_Comm_size(foo_comm, &amp;foo_num_proc);
&gt; 
&gt;   /* do stuff */
&gt; 
&gt; }
&gt; 
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11999.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="11997.php">Dorian Krause: "[OMPI users] Progress in MPI_Win_unlock"</a>
<li><strong>In reply to:</strong> <a href="11995.php">Prentice Bisbal: "[OMPI users] MPI_Comm_dup hangs"</a>
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
