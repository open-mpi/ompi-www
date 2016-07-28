<?
$subject_val = "Re: [OMPI users] Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 12:52:57 2010" -->
<!-- isoreceived="20100816165257" -->
<!-- sent="Mon, 16 Aug 2010 09:54:18 -0700" -->
<!-- isosent="20100816165418" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Abort" -->
<!-- id="341B428F-0325-4DE9-96F7-513938CE4B16_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1281975929.6786.1.camel_at_ronispc.chem.mcgill.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Abort<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-16 12:54:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14043.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14041.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>In reply to:</strong> <a href="14040.php">David Ronis: "Re: [OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14045.php">David Ronis: "Re: [OMPI users] Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I'm unable to replicate your behavior.  This is with Open MPI 1.4.2 on RHEL5:
<br>
<p><pre>
----
[9:52] svbu-mpi:~/mpi % cat abort.c
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;mpi.h&gt;
int main(int argc, char **argv)
{
    int rank;
    MPI_Init(&amp;argc, &amp;argv);
    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
    if (0 == rank) {
        abort();
    }
    printf(&quot;Rank %d sleeping...\n&quot;, rank);
    sleep(600);
    printf(&quot;Rank %d finalizing...\n&quot;, rank);
    MPI_Finalize();
    return 0;
}
[9:52] svbu-mpi:~/mpi % mpicc abort.c -o abort
[9:52] svbu-mpi:~/mpi % ls -l core*
ls: No match.
[9:52] svbu-mpi:~/mpi % mpirun -np 4 --bynode --host svbu-mpi055,svbu-mpi056 ./abort
Rank 1 sleeping...
[svbu-mpi055:03991] *** Process received signal ***
[svbu-mpi055:03991] Signal: Aborted (6)
[svbu-mpi055:03991] Signal code:  (-6)
[svbu-mpi055:03991] [ 0] /lib64/libpthread.so.0 [0x2b45caac87c0]
[svbu-mpi055:03991] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x2b45cad05265]
[svbu-mpi055:03991] [ 2] /lib64/libc.so.6(abort+0x110) [0x2b45cad06d10]
[svbu-mpi055:03991] [ 3] ./abort(main+0x36) [0x4008ee]
[svbu-mpi055:03991] [ 4] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b45cacf2994]
[svbu-mpi055:03991] [ 5] ./abort [0x400809]
[svbu-mpi055:03991] *** End of error message ***
Rank 3 sleeping...
Rank 2 sleeping...
--------------------------------------------------------------------------
mpirun noticed that process rank 0 with PID 3991 on node svbu-mpi055 exited on signal 6 (Aborted).
--------------------------------------------------------------------------
[9:52] svbu-mpi:~/mpi % ls -l core*
-rw------- 1 jsquyres eng5 26009600 Aug 16 09:52 core.abort-1281977540-3991
[9:52] svbu-mpi:~/mpi % file core.abort-1281977540-3991 
core.abort-1281977540-3991: ELF 64-bit LSB core file AMD x86-64, version 1 (SYSV), SVR4-style, from 'abort'
[9:52] svbu-mpi:~/mpi % 
-----
You can see that all processes die immediately, and I get a corefile from the process that called abort().
On Aug 16, 2010, at 9:25 AM, David Ronis wrote:
&gt; I've tried both--as you said, MPI_Abort doesn't drop a core file, but
&gt; does kill off the entire MPI job.   abort() drops core when I'm running
&gt; on 1 processor, but not in a multiprocessor run.  In addition, a node
&gt; calling abort() doesn't lead to the entire run being killed off.
&gt; 
&gt; David
&gt; O
&gt; n Mon, 2010-08-16 at 08:51 -0700, Jeff Squyres wrote:
&gt;&gt; On Aug 13, 2010, at 12:53 PM, David Ronis wrote:
&gt;&gt; 
&gt;&gt;&gt; I'm using mpirun and the nodes are all on the same machin (a 8 cpu box
&gt;&gt;&gt; with an intel i7).  coresize is unlimited:
&gt;&gt;&gt; 
&gt;&gt;&gt; ulimit -a
&gt;&gt;&gt; core file size          (blocks, -c) unlimited
&gt;&gt; 
&gt;&gt; That looks good.
&gt;&gt; 
&gt;&gt; In reviewing the email thread, it's not entirely clear: are you calling abort() or MPI_Abort()?  MPI_Abort() won't drop a core file.  abort() should.
&gt;&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14043.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14041.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>In reply to:</strong> <a href="14040.php">David Ronis: "Re: [OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14045.php">David Ronis: "Re: [OMPI users] Abort"</a>
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
