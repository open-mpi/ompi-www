<?
$subject_val = "Re: [OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 10:28:18 2008" -->
<!-- isoreceived="20080930142818" -->
<!-- sent="Tue, 30 Sep 2008 10:28:11 -0400" -->
<!-- isosent="20080930142811" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn" -->
<!-- id="2611D28B-9DD2-4F98-8404-1C5BF5F453EA_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48E22B3D.5040603_at_web-yard.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 10:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6792.php">Jeff Squyres: "Re: [OMPI users] TCP BTL in different subnets?"</a>
<li><strong>Previous message:</strong> <a href="6790.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6788.php">Andr&#233; Gaul: "[OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe that this issue has been fixed for the upcoming v1.3 series;  
<br>
it will not be fixed in the v1.2 series (we made extensive overhauls  
<br>
to the underlying run-time system for v1.3 which would be  
<br>
extraordinarily difficult to port back to the v1.2 series).
<br>
<p><p>On Sep 30, 2008, at 9:35 AM, Andr&#233; Gaul wrote:
<br>
<p><span class="quotelev1">&gt; Hey all!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Last week I observed a strange behaviour of Open MPI when using
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn() to create new MPI processes: The child processes are
</span><br>
<span class="quotelev1">&gt; started but after the childs call to MPI_Init() no output to stdout  
</span><br>
<span class="quotelev1">&gt; gets
</span><br>
<span class="quotelev1">&gt; redirected to the stdout of the parent/mpirun process. Before the call
</span><br>
<span class="quotelev1">&gt; to MPI_Init() the childs stdout is redirected correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried this with several MPI versions on different architectures  
</span><br>
<span class="quotelev1">&gt; (1.2.7
</span><br>
<span class="quotelev1">&gt; on Debian i686, 1.2.2 on SuSe 10.3x86_64) and wrote some dummy code to
</span><br>
<span class="quotelev1">&gt; demonstrate the behaviour:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* parent.c */
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;[parent] now spawn\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm everyone;
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_spawn(&quot;./child&quot;, MPI_ARGV_NULL, 1, MPI_INFO_NULL, 0,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_SELF, &amp;everyone, MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;[parent] finished spawning\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	//see child.c
</span><br>
<span class="quotelev1">&gt; 	while (1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* child.c */
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	/* stdout does not get redirected!
</span><br>
<span class="quotelev1">&gt; 	 * (even sometimes (!) without the while (1); loop
</span><br>
<span class="quotelev1">&gt; 	 * in parent.c)
</span><br>
<span class="quotelev1">&gt; 	 */
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;[child] initialized MPI\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Output is:
</span><br>
<span class="quotelev1">&gt; % mpicc -o parent parent.c &amp;&amp; mpicc -o child child.c &amp;&amp; mpirun ./ 
</span><br>
<span class="quotelev1">&gt; parent
</span><br>
<span class="quotelev1">&gt; [parent] now spawn
</span><br>
<span class="quotelev1">&gt; [parent] finished spawning
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without the while(1); loop in parent.c the output sometimes (!)  
</span><br>
<span class="quotelev1">&gt; remains
</span><br>
<span class="quotelev1">&gt; the same as above and sometimes is:
</span><br>
<span class="quotelev1">&gt; % mpicc -o parent parent.c &amp;&amp; mpicc -o child child.c &amp;&amp; mpirun ./ 
</span><br>
<span class="quotelev1">&gt; parent
</span><br>
<span class="quotelev1">&gt; [parent] now spawn
</span><br>
<span class="quotelev1">&gt; [parent] finished spawning
</span><br>
<span class="quotelev1">&gt; [child] initialized MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The child process definitely runs past the MPI_Init() call in every
</span><br>
<span class="quotelev1">&gt; situation described here, so I think the problem has to be the stdout
</span><br>
<span class="quotelev1">&gt; redirection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A similar (or the same?) bug is reported here:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1120">https://svn.open-mpi.org/trac/ompi/ticket/1120</a> . And as rhc states in
</span><br>
<span class="quotelev1">&gt; the comment it is not working on remote nodes either. I don't know  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; release should have fixed the bug and that's why I can't say if it's a
</span><br>
<span class="quotelev1">&gt; known or a new problem. Perhaps someone of the developers could take a
</span><br>
<span class="quotelev1">&gt; look at it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bye,
</span><br>
<span class="quotelev1">&gt; Andr&#233; Gaul
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6792.php">Jeff Squyres: "Re: [OMPI users] TCP BTL in different subnets?"</a>
<li><strong>Previous message:</strong> <a href="6790.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6788.php">Andr&#233; Gaul: "[OMPI users] possible bug: child stdout not redirected after MPI_Comm_spawn"</a>
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
