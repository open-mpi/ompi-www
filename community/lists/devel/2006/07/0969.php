<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 13 02:59:42 2006" -->
<!-- isoreceived="20060713065942" -->
<!-- sent="Thu, 13 Jul 2006 03:01:33 -0400 (Eastern Daylight Time)" -->
<!-- isosent="20060713070133" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Forever running mpirun" -->
<!-- id="Pine.WNT.4.64.0607130249540.2824_at_bosilca" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-13 03:01:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0970.php">Josh Aune: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<li><strong>Previous message:</strong> <a href="0968.php">Brian Barrett: "Re: [OMPI devel] Problem compiling openmpi 1.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found a simple and quick way to bring mpirun in a deadlock state. It 
<br>
work everytime you do it. In fact it look like the mpirun do not realize 
<br>
that all the others are gone and he's left alone.
<br>
<p>Step 1: start a 2 processes mpirun (use an application that take some 
<br>
time such as NetPIPE).
<br>
<p>A simple lsof -p &lt;mpirun pid&gt; shows all the file descriptors used. One can 
<br>
notice the LISTEN socket as well as all the iof sockets.
<br>
<p>orterun 26611 bosilca    3u  IPv4 0x04843590      0t0      TCP *:49511 
<br>
(LISTEN)
<br>
orterun 26611 bosilca    4u  IPv4 0x04841b20      0t0      TCP 
<br>
applebasket.cs.utk.edu:49511-&gt;applebasket.cs.utk.edu:49513 (ESTABLISHED)
<br>
orterun 26611 bosilca    5u  IPv4 0x03068cc0      0t0      TCP 
<br>
applebasket.cs.utk.edu:49511-&gt;applebasket.cs.utk.edu:49517 (ESTABLISHED)
<br>
orterun 26611 bosilca    6u  IPv4 0x03067b20      0t0      TCP 
<br>
applebasket.cs.utk.edu:49511-&gt;applebasket.cs.utk.edu:49519 (ESTABLISHED)
<br>
<p>Step 2: Kill one of the 2 processes started at step 1.
<br>
<p>Step 3: Wait forever ...
<br>
<p>A quick ps show that the processes as well as their orted dissapeared. 
<br>
Only the mpirun is left. Another lsof on the mpirun process shows that all 
<br>
sockets have been closed with the exception of the LISTEN one.
<br>
<p>orterun 26611 bosilca    3u  IPv4 0x04843590      0t0      TCP *:49511 
<br>
(LISTEN)
<br>
<p>The stack of the mpirun look like this:
<br>
<p>#0  opal_event_loop (flags=1) at 
<br>
../../../ompi-trunk/opal/event/event.c:495
<br>
#1  0x003755c4 in opal_progress () at 
<br>
../../ompi-trunk/opal/runtime/opal_progress.c:259
<br>
#2  0x00003830 in opal_condition_wait (c=0xa8e8, m=0xa8a8) at 
<br>
../../../../ompi-trunk/opal/threads/condition.h:81
<br>
#3  0x0000322c in orterun (argc=10, argv=0xbffff3b8) at 
<br>
../../../../ompi-trunk/orte/tools/orterun/orterun.c:447
<br>
#4  0x000029a4 in main (argc=10, argv=0xbffff3b8) at 
<br>
../../../../ompi-trunk/orte/tools/orterun/main.c:13
<br>
<p>I checked the FDSET on the mpirun process and it look correct. Only stdin 
<br>
and the LISTEN socket were inside.
<br>
<p>&nbsp;&nbsp;&nbsp;Hope this help,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0970.php">Josh Aune: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<li><strong>Previous message:</strong> <a href="0968.php">Brian Barrett: "Re: [OMPI devel] Problem compiling openmpi 1.1"</a>
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
