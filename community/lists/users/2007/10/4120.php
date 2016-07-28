<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 15:40:51 2007" -->
<!-- isoreceived="20071001194051" -->
<!-- sent="Mon, 1 Oct 2007 16:40:46 -0300" -->
<!-- isosent="20071001194046" -->
<!-- name="Joao Vicente Lima" -->
<!-- email="jvflimabak_at_[hidden]" -->
<!-- subject="[OMPI users] init_thread + spawn error" -->
<!-- id="98e4c1720710011240h7ae3b6afk25ddadd2abfd08e2_at_mail.gmail.com" -->
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
<strong>From:</strong> Joao Vicente Lima (<em>jvflimabak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-01 15:40:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4121.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4119.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4124.php">Tim Prins: "Re: [OMPI users] init_thread + spawn error"</a>
<li><strong>Reply:</strong> <a href="4124.php">Tim Prins: "Re: [OMPI users] init_thread + spawn error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all!
<br>
I'm getting a error on call MPI_Init_thread and MPI_Comm_spawn.
<br>
am I mistaking something?
<br>
the attachments contains my ompi_info and source ...
<br>
<p>thank!
<br>
Joao
<br>
<p>....
<br>
&nbsp;&nbsp;char *arg[]= {&quot;spawn1&quot;, (char *)0};
<br>
<p>&nbsp;&nbsp;MPI_Init_thread (&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);
<br>
&nbsp;&nbsp;MPI_Comm_spawn (&quot;./spawn_slave&quot;, arg, 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;slave,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_ERRCODES_IGNORE);
<br>
.....
<br>
<p>and the error:
<br>
<p>opal_mutex_lock(): Resource deadlock avoided
<br>
[c8:13335] *** Process received signal ***
<br>
[c8:13335] Signal: Aborted (6)
<br>
[c8:13335] Signal code:  (-6)
<br>
[c8:13335] [ 0] [0xb7fbf440]
<br>
[c8:13335] [ 1] /lib/libc.so.6(abort+0x101) [0xb7abd5b1]
<br>
[c8:13335] [ 2] /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0 [0xb7e2933c]
<br>
[c8:13335] [ 3] /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0 [0xb7e2923a]
<br>
[c8:13335] [ 4] /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0 [0xb7e292e3]
<br>
[c8:13335] [ 5] /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0 [0xb7e29fa7]
<br>
[c8:13335] [ 6] /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0 [0xb7e29eda]
<br>
[c8:13335] [ 7] /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0 [0xb7e2adec]
<br>
[c8:13335] [ 8] /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0(ompi_proc_unpack+
<br>
0x181) [0xb7e2b142]
<br>
[c8:13335] [ 9] /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0(ompi_comm_connect
<br>
_accept+0x57c) [0xb7e0fb70]
<br>
[c8:13335] [10] /usr/local/openmpi/openmpi-svn/lib/libmpi.so.0(PMPI_Comm_spawn+0
<br>
x395) [0xb7e5e285]
<br>
[c8:13335] [11] ./spawn(main+0x7f) [0x80486ef]
<br>
[c8:13335] [12] /lib/libc.so.6(__libc_start_main+0xdc) [0xb7aa7ebc]
<br>
[c8:13335] [13] ./spawn [0x80485e1]
<br>
[c8:13335] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 13335 on
<br>
node c8 calling &quot;abort&quot;. This will have caused other processes
<br>
in the application to be terminated by signals sent by mpirun
<br>
(as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4120/spawn.c">spawn.c</a>
</ul>
<!-- attachment="spawn.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4120/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4121.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4119.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4124.php">Tim Prins: "Re: [OMPI users] init_thread + spawn error"</a>
<li><strong>Reply:</strong> <a href="4124.php">Tim Prins: "Re: [OMPI users] init_thread + spawn error"</a>
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
