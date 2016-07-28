<?
$subject_val = "[OMPI users] MPI process launch  without &quot;MPI_Spawn&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 06:06:28 2007" -->
<!-- isoreceived="20071206110628" -->
<!-- sent="Thu, 6 Dec 2007 12:05:45 +0100 " -->
<!-- isosent="20071206110545" -->
<!-- name="Rozzen.VINCONT_at_[hidden]" -->
<!-- email="Rozzen.VINCONT_at_[hidden]" -->
<!-- subject="[OMPI users] MPI process launch  without &amp;quot;MPI_Spawn&amp;quot;" -->
<!-- id="CA2340EB86378E43976ECBA4001310CA0194145F_at_atlantis.clb.tcfr.thales" -->
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
<strong>Subject:</strong> [OMPI users] MPI process launch  without &quot;MPI_Spawn&quot;<br>
<strong>From:</strong> <a href="mailto:Rozzen.VINCONT_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI%20process%20launch%20%20without%20&amp;amp;quot;MPI_Spawn&amp;amp;quot;"><em>Rozzen.VINCONT_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-12-06 06:05:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4604.php">Jeff Squyres: "Re: [OMPI users] Using mtrace with openmpi segfaults"</a>
<li><strong>Previous message:</strong> <a href="4602.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Working with different MPI flavours, I have encountered limits when using MPI_spawn and threads.
<br>
<p>The limit is that the number of spawns that can be made is limited. Over a given limit the application crashes.
<br>
<p>I am trying to overcome the limitation but launching a new process that will make the spawn 
<br>
in place of the initial mpi process.
<br>
<p>I actually fail to launch the &quot;launching process&quot; when it is a MPI process. If it is a &quot;classic&quot; program
<br>
it works.
<br>
<p>I tried to launch the &quot;launching&quot; process with the &quot;system&quot; call and the &quot;fork-exec&quot; call.
<br>
If the launced program is a non mpi program all works fine. If it is a mpi program
<br>
it fails to run.
<br>
This has been overcome using ssh to run the mpi program but it not satisfactory.
<br>
<p><p>Follows a short example of one of the different tries.
<br>
<p>FYI a try without using MPI_THREAD... has also been made leading to the same results.
<br>
<p>Solution 1:start with &quot;mpiexec  --mca btl_tcp_if_exclude lo,eth1 --hostfile hostfile.txt -n 1 Test&quot;
<br>
**********************************************************************
<br>
----------------------------------------------------------------------
<br>
*first process : solution1.c build :mpicc -g -Wall solution1.c -o Test
<br>
----------------------------------------------------------------------
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;errno.h&gt;
<br>
#include &lt;ctype.h&gt;
<br>
#include &lt;sys/types.h&gt;
<br>
#include &lt;sys/types.h&gt;
<br>
#include &lt;fcntl.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;unistd.h&gt;
<br>
<p>int main(int argc, char *argv[]){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int ThreadLevelWanted=MPI_THREAD_MULTIPLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int ThreadLevelNew=MPI_THREAD_MULTIPLE;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;MPI_Init_thread start\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(MPI_SUCCESS!=MPI_Init_thread( &amp;argc, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;argv, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ThreadLevelWanted, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;ThreadLevelNew )){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;****************************************************\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;**                    ERROR                       **\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;****************************************************\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return -1;         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;system return : %i\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;system(&quot;/usr/bin/mpiexec --mca btl_tcp_if_exclude lo,eth1 --hostfile hostfile.txt -n 1 ExeToStart&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;sleep (100);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; byebye &quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
}
<br>
<p>----------------------------------------------------------------------
<br>
*Second process : ExeToStart.c build :mpicc -g -Wall ExeToStart.c -o ExeToStart
<br>
----------------------------------------------------------------------
<br>
#include &lt;stdio.h&gt;
<br>
int main( int argc, char **argv ) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;hello\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep (20);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;byebye\n&quot;);
<br>
}
<br>
<p>This test program doesn't start the second process;
<br>
<p>If I don't make the &quot;MPI_Init_thread&quot; at the beggining of the first process there is no problem, but I need a MPI environnement for the two processes.
<br>
<p>Thank you for you help.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4604.php">Jeff Squyres: "Re: [OMPI users] Using mtrace with openmpi segfaults"</a>
<li><strong>Previous message:</strong> <a href="4602.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
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
