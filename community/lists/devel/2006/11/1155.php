<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  1 18:55:14 2006" -->
<!-- isoreceived="20061101235514" -->
<!-- sent="Wed, 1 Nov 2006 18:54:42 -0500" -->
<!-- isosent="20061101235442" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI between amd64 and x86" -->
<!-- id="C63206E8-5B17-4CE4-983C-2E40C65E9765_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061101232056.GZ27827_at_drcomp.erfurt.thur.de" -->
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
<strong>Date:</strong> 2006-11-01 18:54:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1156.php">Greg Watson: "[OMPI devel] Request for 1.2 build"</a>
<li><strong>Previous message:</strong> <a href="1154.php">Adrian Knoth: "[OMPI devel] MPI between amd64 and x86"</a>
<li><strong>In reply to:</strong> <a href="1154.php">Adrian Knoth: "[OMPI devel] MPI between amd64 and x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1160.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Reply:</strong> <a href="1160.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this question was already raised few weeks ago. The problem  
<br>
come from the BTL headers where the fields do not have the same  
<br>
alignment inside. The original question was asked by Nysal Jan on an  
<br>
email with the subject &quot;SEGV in EM64T &lt;--&gt; PPC64 communication&quot; on  
<br>
Oct. 11 2006. Unfortunately, we still have the same problem.
<br>
<p>Can you check that your problem is similar ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 1, 2006, at 6:20 PM, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm currently testing the new IPv6 code in a lot of
</span><br>
<span class="quotelev1">&gt; different setups.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's doing fine with Linux and Solaris, both on x86.
</span><br>
<span class="quotelev1">&gt; There are also no problems between multiple amd64s,
</span><br>
<span class="quotelev1">&gt; but I wasn't able to communicate between x86 and amd64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The oob connection is up, but the BTL hangs. gdb (remote) shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0xb7d3bac9 in sigprocmask () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0xb7eb956c in opal_evsignal_recalc ()
</span><br>
<span class="quotelev1">&gt;    from /home/racl/adi/ompi/trunk/Linux-i686/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #2  0xb7eba033 in poll_dispatch ()
</span><br>
<span class="quotelev1">&gt;    from /home/racl/adi/ompi/trunk/Linux-i686/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #3  0xb7eb8d5d in opal_event_loop ()
</span><br>
<span class="quotelev1">&gt;    from /home/racl/adi/ompi/trunk/Linux-i686/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #4  0xb7eb2f58 in opal_progress ()
</span><br>
<span class="quotelev1">&gt;    from /home/racl/adi/ompi/trunk/Linux-i686/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #5  0xb7c72505 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev1">&gt;    from /home/racl/adi/ompi/trunk/Linux-i686//lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #6  0xb7fa8c10 in PMPI_Recv ()
</span><br>
<span class="quotelev1">&gt;    from /home/racl/adi/ompi/trunk/Linux-i686/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #7  0x080488cd in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the local gdb:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00002aaaab4b4d99 in __libc_sigaction () from /lib/ 
</span><br>
<span class="quotelev1">&gt; libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x00002aaaaaee4c26 in opal_evsignal_recalc ()
</span><br>
<span class="quotelev1">&gt;    from /home/adi//trunk/Linux-x86_64/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x00002aaaaaee44b1 in opal_event_loop ()
</span><br>
<span class="quotelev1">&gt;    from /home/adi//trunk/Linux-x86_64/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00002aaaaaedfc10 in opal_progress ()
</span><br>
<span class="quotelev1">&gt;    from /home/adi//trunk/Linux-x86_64/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00002aaaad6a0c8c in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev1">&gt;    from /home/adi/trunk/Linux-x86_64//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #5  0x00002aaaaac429f9 in PMPI_Recv ()
</span><br>
<span class="quotelev1">&gt;    from /home/adi//trunk/Linux-x86_64/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000400b39 in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ompi-1.1.2-release also shows this problem, so I'm not
</span><br>
<span class="quotelev1">&gt; sure if it's my fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've added some debug output to my ringtest (see below) and
</span><br>
<span class="quotelev1">&gt; got the following result:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1: waiting for message
</span><br>
<span class="quotelev1">&gt; 0: sending message (0) to 1
</span><br>
<span class="quotelev1">&gt; 0: sent message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int rank;
</span><br>
<span class="quotelev1">&gt;     int size;
</span><br>
<span class="quotelev1">&gt;     int message = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (!rank) {
</span><br>
<span class="quotelev1">&gt;         printf(&quot;%i: sending message (%i) to %i\n&quot;, rank, message, 1);
</span><br>
<span class="quotelev1">&gt;         MPI_Send(&amp;message, 1, MPI_INT, 1, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;%i: sent message\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;         MPI_Recv(&amp;message, 1, MPI_INT, size-1, 0, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;                 MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;%i: got message (%i) from %i\n&quot;, rank, message,  
</span><br>
<span class="quotelev1">&gt; size-1);
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         printf(&quot;%i: waiting for message\n&quot;);
</span><br>
<span class="quotelev1">&gt;         MPI_Recv(&amp;message, 1, MPI_INT, MPI_ANY_SOURCE, MPI_ANY_TAG,
</span><br>
<span class="quotelev1">&gt;                 MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;         message += 1;
</span><br>
<span class="quotelev1">&gt;         MPI_Send(&amp;message, 1, MPI_INT, (rank+1)%size, 0,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;%i: got message (%i) from %i, sending to %i\n&quot;,  
</span><br>
<span class="quotelev1">&gt; rank, message,
</span><br>
<span class="quotelev1">&gt;                rank-1, (rank+1)%size);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not very particular, but as seen in the gdb output and also
</span><br>
<span class="quotelev1">&gt; from the debug lines, both processes are waiting in PMPI_Recv(),
</span><br>
<span class="quotelev1">&gt; expecting a message to arrive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a known problem? What's wrong? Usercode? ompi?
</span><br>
<span class="quotelev1">&gt; As far as I can see (tcpdump and strace), all tcp connections
</span><br>
<span class="quotelev1">&gt; are up, so the message might got stuck between rank0 and rank1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Windows not found - Abort/Retry/Smile
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1156.php">Greg Watson: "[OMPI devel] Request for 1.2 build"</a>
<li><strong>Previous message:</strong> <a href="1154.php">Adrian Knoth: "[OMPI devel] MPI between amd64 and x86"</a>
<li><strong>In reply to:</strong> <a href="1154.php">Adrian Knoth: "[OMPI devel] MPI between amd64 and x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1160.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
<li><strong>Reply:</strong> <a href="1160.php">Nysal Jan: "Re: [OMPI devel] MPI between amd64 and x86"</a>
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
