<?
$subject_val = "Re: [OMPI users] Error on sending argv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 02:43:16 2010" -->
<!-- isoreceived="20100420064316" -->
<!-- sent="Tue, 20 Apr 2010 08:43:10 +0200" -->
<!-- isosent="20100420064310" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error on sending argv" -->
<!-- id="m2l9b0da5ce1004192343zaf218f24hb7bee4d31fbdaa76_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4bcc8551.cb3cdc0a.3eb6.ffffac8d_at_mx.google.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error on sending argv<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 02:43:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12708.php">E.T.A.vanderWeide_at_[hidden]: "Re: [OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 andbeyond"</a>
<li><strong>Previous message:</strong> <a href="12706.php">long thai: "[OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>In reply to:</strong> <a href="12701.php">Andrew Wiles: "[OMPI users] Error on sending argv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
You should remove the &quot;&amp;&quot; for the first parameters of your MPI_Send
<br>
and MPI_Recv:
<br>
<p>MPI_Send(text, strlen(text) + 1, MPI_CHAR, 1, 0, MPI_COMM_WORLD);
<br>
<p>MPI_Recv(buffer, 128, MPI_CHAR, MPI_ANY_SOURCE, MPI_ANY_TAG,
<br>
MPI_COMM_WORLD, &amp;status);
<br>
<p>In C/C++ the name of an array is a pointer to the start of the array
<br>
(however, i can't exactly explain
<br>
why it worked with the hard-coded string))
<br>
<p>Jody
<br>
<p><p>On Mon, Apr 19, 2010 at 6:31 PM, Andrew Wiles &lt;awiles.tv_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi all Open MPI users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I write a simple MPI program to send a text message to another process. The
</span><br>
<span class="quotelev1">&gt; code is below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (test.c)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; int dest, noProcesses, processId;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; char* buffer;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; char* text = &quot;ABCDEF&quot;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; MPI_Comm_size(MPI_COMM_WORLD, &amp;noProcesses);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; MPI_Comm_rank(MPI_COMM_WORLD, &amp;processId);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; buffer = (char*) malloc(256 * sizeof(char));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; if (processId == 0) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; &#160; fprintf(stdout, &quot;Master: sending %s to %d\n&quot;, text, 1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; &#160; MPI_Send((void *)&amp;text, strlen(text) + 1, MPI_CHAR, 1, 0,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; } else {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; &#160; MPI_Recv(&amp;buffer, 128, MPI_CHAR, MPI_ANY_SOURCE, MPI_ANY_TAG,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; &#160; fprintf(stdout, &quot;Slave: received %s from %d\n&quot;, buffer,
</span><br>
<span class="quotelev1">&gt; status.MPI_SOURCE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; return 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After compiling and executing it I get the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_cluster Desktop]# mpicc -o test test.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_cluster Desktop]# mpirun -np 2 test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Master: sending ABCDEF to 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Slave: received ABCDEF from 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the source code above, I replace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; char* text = &quot;ABCDEF&quot;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; by
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; char* text = argv[1];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then compile and execute it again with the following commands:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_cluster Desktop]# mpicc -o test test.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_cluster Desktop]# mpirun -np 2 test ABCDEF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I get the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Master: sending ABCDEF to 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster:03917] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster:03917] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster:03917] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster:03917] Failing at address: 0xbfa445a2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster:03917] [ 0] [0x959440]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster:03917] [ 1] /lib/libc.so.6(_IO_fprintf+0x22) [0x76be02]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster:03917] [ 2] test(main+0x143) [0x80488b7]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster:03917] [ 3] /lib/libc.so.6(__libc_start_main+0xdc) [0x73be8c]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster:03917] [ 4] test [0x80486c1]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster:03917] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 3917 on node cluster.hpc.org
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m very confused because the only difference between the two source codes
</span><br>
<span class="quotelev1">&gt; is the difference between
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; char* text = &quot;ABCDEF&quot;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; char* text = argv[1];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can any one help me why the results are so different? How can I send argv[i]
</span><br>
<span class="quotelev1">&gt; to another process?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12708.php">E.T.A.vanderWeide_at_[hidden]: "Re: [OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 andbeyond"</a>
<li><strong>Previous message:</strong> <a href="12706.php">long thai: "[OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>In reply to:</strong> <a href="12701.php">Andrew Wiles: "[OMPI users] Error on sending argv"</a>
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
