<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  1 18:21:02 2006" -->
<!-- isoreceived="20061101232102" -->
<!-- sent="Thu, 2 Nov 2006 00:20:56 +0100" -->
<!-- isosent="20061101232056" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI between amd64 and x86" -->
<!-- id="20061101232056.GZ27827_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-01 18:20:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1155.php">George Bosilca: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/10/1153.php">Galen M. Shipman: "Re: [OMPI devel] [openib-general] psm.h not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1155.php">George Bosilca: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Reply:</strong> <a href="1155.php">George Bosilca: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm currently testing the new IPv6 code in a lot of
<br>
different setups.
<br>
<p>It's doing fine with Linux and Solaris, both on x86.
<br>
There are also no problems between multiple amd64s,
<br>
but I wasn't able to communicate between x86 and amd64.
<br>
<p>The oob connection is up, but the BTL hangs. gdb (remote) shows:
<br>
<p>#0  0xb7d3bac9 in sigprocmask () from /lib/tls/libc.so.6
<br>
#1  0xb7eb956c in opal_evsignal_recalc ()
<br>
&nbsp;&nbsp;&nbsp;from /home/racl/adi/ompi/trunk/Linux-i686/lib/libopal.so.0
<br>
#2  0xb7eba033 in poll_dispatch ()
<br>
&nbsp;&nbsp;&nbsp;from /home/racl/adi/ompi/trunk/Linux-i686/lib/libopal.so.0
<br>
#3  0xb7eb8d5d in opal_event_loop ()
<br>
&nbsp;&nbsp;&nbsp;from /home/racl/adi/ompi/trunk/Linux-i686/lib/libopal.so.0
<br>
#4  0xb7eb2f58 in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /home/racl/adi/ompi/trunk/Linux-i686/lib/libopal.so.0
<br>
#5  0xb7c72505 in mca_pml_ob1_recv ()
<br>
&nbsp;&nbsp;&nbsp;from /home/racl/adi/ompi/trunk/Linux-i686//lib/openmpi/mca_pml_ob1.so
<br>
#6  0xb7fa8c10 in PMPI_Recv ()
<br>
&nbsp;&nbsp;&nbsp;from /home/racl/adi/ompi/trunk/Linux-i686/lib/libmpi.so.0
<br>
#7  0x080488cd in main ()
<br>
<p><p>and the local gdb:
<br>
<p>#0  0x00002aaaab4b4d99 in __libc_sigaction () from /lib/libpthread.so.0
<br>
#1  0x00002aaaaaee4c26 in opal_evsignal_recalc ()
<br>
&nbsp;&nbsp;&nbsp;from /home/adi//trunk/Linux-x86_64/lib/libopal.so.0
<br>
#2  0x00002aaaaaee44b1 in opal_event_loop ()
<br>
&nbsp;&nbsp;&nbsp;from /home/adi//trunk/Linux-x86_64/lib/libopal.so.0
<br>
#3  0x00002aaaaaedfc10 in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;from /home/adi//trunk/Linux-x86_64/lib/libopal.so.0
<br>
#4  0x00002aaaad6a0c8c in mca_pml_ob1_recv ()
<br>
&nbsp;&nbsp;&nbsp;from /home/adi/trunk/Linux-x86_64//lib/openmpi/mca_pml_ob1.so
<br>
#5  0x00002aaaaac429f9 in PMPI_Recv ()
<br>
&nbsp;&nbsp;&nbsp;from /home/adi//trunk/Linux-x86_64/lib/libmpi.so.0
<br>
#6  0x0000000000400b39 in main ()
<br>
<p><p>The ompi-1.1.2-release also shows this problem, so I'm not
<br>
sure if it's my fault.
<br>
<p>I've added some debug output to my ringtest (see below) and
<br>
got the following result:
<br>
<p>1: waiting for message
<br>
0: sending message (0) to 1
<br>
0: sent message
<br>
<p>Here's the code:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int message = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (!rank) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%i: sending message (%i) to %i\n&quot;, rank, message, 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;message, 1, MPI_INT, 1, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%i: sent message\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;message, 1, MPI_INT, size-1, 0, MPI_COMM_WORLD, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%i: got message (%i) from %i\n&quot;, rank, message, size-1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%i: waiting for message\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;message, 1, MPI_INT, MPI_ANY_SOURCE, MPI_ANY_TAG,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;message += 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;message, 1, MPI_INT, (rank+1)%size, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%i: got message (%i) from %i, sending to %i\n&quot;, rank, message, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank-1, (rank+1)%size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Not very particular, but as seen in the gdb output and also
<br>
from the debug lines, both processes are waiting in PMPI_Recv(),
<br>
expecting a message to arrive.
<br>
<p>Is this a known problem? What's wrong? Usercode? ompi?
<br>
As far as I can see (tcpdump and strace), all tcp connections
<br>
are up, so the message might got stuck between rank0 and rank1.
<br>
<p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Windows not found - Abort/Retry/Smile
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1155.php">George Bosilca: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/10/1153.php">Galen M. Shipman: "Re: [OMPI devel] [openib-general] psm.h not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1155.php">George Bosilca: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Reply:</strong> <a href="1155.php">George Bosilca: "Re: [OMPI devel] MPI between amd64 and x86"</a>
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
