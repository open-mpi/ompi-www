<?
$subject_val = "[OMPI users] Error on sending argv";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 12:31:19 2010" -->
<!-- isoreceived="20100419163119" -->
<!-- sent="Mon, 19 Apr 2010 23:31:02 +0700" -->
<!-- isosent="20100419163102" -->
<!-- name="Andrew Wiles" -->
<!-- email="awiles.tv_at_[hidden]" -->
<!-- subject="[OMPI users] Error on sending argv" -->
<!-- id="4bcc8551.cb3cdc0a.3eb6.ffffac8d_at_mx.google.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Error on sending argv<br>
<strong>From:</strong> Andrew Wiles (<em>awiles.tv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 12:31:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12702.php">Martin Siegert: "[OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque"</a>
<li><strong>Previous message:</strong> <a href="12700.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12707.php">jody: "Re: [OMPI users] Error on sending argv"</a>
<li><strong>Reply:</strong> <a href="12707.php">jody: "Re: [OMPI users] Error on sending argv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all Open MPI users,
<br>
<p>I write a simple MPI program to send a text message to another process. The
<br>
code is below.
<br>
<p>(test.c)
<br>
<p>#include &quot;mpi.h&quot;
<br>
<p>#include &lt;stdio.h&gt;
<br>
<p>#include &lt;stdlib.h&gt;
<br>
<p>#include &lt;string.h&gt;
<br>
<p>&nbsp;
<br>
<p>int main(int argc, char* argv[]) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int dest, noProcesses, processId;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;char* buffer;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;char* text = &quot;ABCDEF&quot;;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;noProcesses);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;processId);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;buffer = (char*) malloc(256 * sizeof(char));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (processId == 0) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout, &quot;Master: sending %s to %d\n&quot;, text, 1);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send((void *)&amp;text, strlen(text) + 1, MPI_CHAR, 1, 0,
<br>
MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;buffer, 128, MPI_CHAR, MPI_ANY_SOURCE, MPI_ANY_TAG,
<br>
MPI_COMM_WORLD, &amp;status);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout, &quot;Slave: received %s from %d\n&quot;, buffer,
<br>
status.MPI_SOURCE);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>}
<br>
<p>After compiling and executing it I get the following output:
<br>
<p>[root_at_cluster Desktop]# mpicc -o test test.c
<br>
<p>[root_at_cluster Desktop]# mpirun -np 2 test
<br>
<p>Master: sending ABCDEF to 1
<br>
<p>Slave: received ABCDEF from 0
<br>
<p>&nbsp;
<br>
<p>In the source code above, I replace
<br>
<p>char* text = &quot;ABCDEF&quot;;
<br>
<p>by
<br>
<p>char* text = argv[1];
<br>
<p>then compile and execute it again with the following commands:
<br>
<p>[root_at_cluster Desktop]# mpicc -o test test.c
<br>
<p>[root_at_cluster Desktop]# mpirun -np 2 test ABCDEF
<br>
<p>Then I get the following output:
<br>
<p>Master: sending ABCDEF to 1
<br>
<p>[cluster:03917] *** Process received signal ***
<br>
<p>[cluster:03917] Signal: Segmentation fault (11)
<br>
<p>[cluster:03917] Signal code: Address not mapped (1)
<br>
<p>[cluster:03917] Failing at address: 0xbfa445a2
<br>
<p>[cluster:03917] [ 0] [0x959440]
<br>
<p>[cluster:03917] [ 1] /lib/libc.so.6(_IO_fprintf+0x22) [0x76be02]
<br>
<p>[cluster:03917] [ 2] test(main+0x143) [0x80488b7]
<br>
<p>[cluster:03917] [ 3] /lib/libc.so.6(__libc_start_main+0xdc) [0x73be8c]
<br>
<p>[cluster:03917] [ 4] test [0x80486c1]
<br>
<p>[cluster:03917] *** End of error message ***
<br>
<p>--------------------------------------------------------------------------
<br>
<p>mpirun noticed that process rank 1 with PID 3917 on node cluster.hpc.org
<br>
exited on signal 11 (Segmentation fault).
<br>
<p>--------------------------------------------------------------------------
<br>
<p>I'm very confused because the only difference between the two source codes
<br>
is the difference between
<br>
<p>char* text = &quot;ABCDEF&quot;;
<br>
<p>and
<br>
<p>char* text = argv[1];
<br>
<p>Can any one help me why the results are so different? How can I send argv[i]
<br>
to another process?
<br>
<p>Thank you very much!
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12701/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12702.php">Martin Siegert: "[OMPI users] --enable-mpi-threads and --with-tm=/usr/local/torque"</a>
<li><strong>Previous message:</strong> <a href="12700.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12707.php">jody: "Re: [OMPI users] Error on sending argv"</a>
<li><strong>Reply:</strong> <a href="12707.php">jody: "Re: [OMPI users] Error on sending argv"</a>
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
