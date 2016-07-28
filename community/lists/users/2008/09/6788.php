<?
$subject_val = "[OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 09:36:24 2008" -->
<!-- isoreceived="20080930133624" -->
<!-- sent="Tue, 30 Sep 2008 15:35:57 +0200" -->
<!-- isosent="20080930133557" -->
<!-- name="Andr&#233; Gaul" -->
<!-- email="gaul_at_[hidden]" -->
<!-- subject="[OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn" -->
<!-- id="48E22B3D.5040603_at_web-yard.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn<br>
<strong>From:</strong> Andr&#233; Gaul (<em>gaul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 09:35:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome"</a>
<li><strong>Previous message:</strong> <a href="6787.php">Roberto Fichera: "[OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6791.php">Jeff Squyres: "Re: [OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6791.php">Jeff Squyres: "Re: [OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey all!
<br>
<p>Last week I observed a strange behaviour of Open MPI when using
<br>
MPI_Comm_spawn() to create new MPI processes: The child processes are
<br>
started but after the childs call to MPI_Init() no output to stdout gets
<br>
redirected to the stdout of the parent/mpirun process. Before the call
<br>
to MPI_Init() the childs stdout is redirected correctly.
<br>
<p>I tried this with several MPI versions on different architectures (1.2.7
<br>
on Debian i686, 1.2.2 on SuSe 10.3x86_64) and wrote some dummy code to
<br>
demonstrate the behaviour:
<br>
<p><p>/* parent.c */
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char **argv) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[parent] now spawn\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm everyone;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_spawn(&quot;./child&quot;, MPI_ARGV_NULL, 1, MPI_INFO_NULL, 0,
<br>
MPI_COMM_SELF, &amp;everyone, MPI_ERRCODES_IGNORE);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[parent] finished spawning\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//see child.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>/* child.c */
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char **argv) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* stdout does not get redirected!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (even sometimes (!) without the while (1); loop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* in parent.c)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[child] initialized MPI\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Output is:
<br>
% mpicc -o parent parent.c &amp;&amp; mpicc -o child child.c &amp;&amp; mpirun ./parent
<br>
[parent] now spawn
<br>
[parent] finished spawning
<br>
<p>Without the while(1); loop in parent.c the output sometimes (!) remains
<br>
the same as above and sometimes is:
<br>
% mpicc -o parent parent.c &amp;&amp; mpicc -o child child.c &amp;&amp; mpirun ./parent
<br>
[parent] now spawn
<br>
[parent] finished spawning
<br>
[child] initialized MPI
<br>
<p>The child process definitely runs past the MPI_Init() call in every
<br>
situation described here, so I think the problem has to be the stdout
<br>
redirection.
<br>
<p>A similar (or the same?) bug is reported here:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1120">https://svn.open-mpi.org/trac/ompi/ticket/1120</a> . And as rhc states in
<br>
the comment it is not working on remote nodes either. I don't know which
<br>
release should have fixed the bug and that's why I can't say if it's a
<br>
known or a new problem. Perhaps someone of the developers could take a
<br>
look at it.
<br>
<p><p>Thanks!!
<br>
<p>bye,
<br>
Andr&#233; Gaul
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome"</a>
<li><strong>Previous message:</strong> <a href="6787.php">Roberto Fichera: "[OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6791.php">Jeff Squyres: "Re: [OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6791.php">Jeff Squyres: "Re: [OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn"</a>
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
