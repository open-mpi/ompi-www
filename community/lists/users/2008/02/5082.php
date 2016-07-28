<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 11:01:17 2008" -->
<!-- isoreceived="20080227160117" -->
<!-- sent="Wed, 27 Feb 2008 10:01:06 -0600 (CST)" -->
<!-- isosent="20080227160106" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather" -->
<!-- id="Pine.LNX.4.64.0802270957370.32381_at_marvin.we-be-smart.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="938A0851-845D-43B1-B72F-5D12A1B9F66F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-27 11:01:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5083.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5081.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<li><strong>In reply to:</strong> <a href="5080.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5083.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5083.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5086.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5092.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I played with this to fix some things in ORTE at one point, and it's a 
<br>
very dangerous slope -- you're essentially guaranteeing you have a 
<br>
deadlock case.  Now instead of running off the stack, you'll deadlock. 
<br>
The issue is that we call opal_progress to wait for something to happen 
<br>
deep in the bowels of Open MPI.  If you just don't call opal_progres, 
<br>
well, now that state change will never occur and you're really screwed. 
<br>
Instead of a quick error, you get infinite spin -- definitely a worse 
<br>
situations.
<br>
<p>The only solution to this problem is to suck it up and audit all the code 
<br>
to eliminate calls to opal_progress() in situations where infinite 
<br>
recursion can result.  It's going to be long and painful, but there's no 
<br>
quick fix (IMHO).
<br>
<p>Brian
<br>
<p>On Wed, 27 Feb 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Gleb / George --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there an easy way for us to put a cap on max recusion down in
</span><br>
<span class="quotelev1">&gt; opal_progress?  Just put in a counter in opal_progress() such that if
</span><br>
<span class="quotelev1">&gt; it exceeds some max value, return success without doing anything (if
</span><br>
<span class="quotelev1">&gt; opal_progress_event_flag indicates that nothing *needs* to be done)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This wouldn't *guarantee* that we cap recursion (because we sometimes
</span><br>
<span class="quotelev1">&gt; need progress before returning), but it might help for the cases that
</span><br>
<span class="quotelev1">&gt; are described in this mail (we're eagerly progressing when we don't
</span><br>
<span class="quotelev1">&gt; necessarily need to)...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 22, 2008, at 9:48 AM, John Markus Bj&#248;rndalen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ran into a bug when running a few microbenchmarks for OpenMPI. I had
</span><br>
<span class="quotelev2">&gt;&gt; thrown in Reduce and Gather for sanity checking, but OpenMPI crashed
</span><br>
<span class="quotelev2">&gt;&gt; when running those operations. Usually, this would happen when I
</span><br>
<span class="quotelev2">&gt;&gt; reached
</span><br>
<span class="quotelev2">&gt;&gt; around 12-16 nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My current crash-test code looks like this (I've removed a few lines
</span><br>
<span class="quotelev2">&gt;&gt; that were commented out):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------- snip-------------
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    int rank, size, count = 1;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if (argc &gt; 1)
</span><br>
<span class="quotelev2">&gt;&gt;    count = atoi(argv[1]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    int n, i;
</span><br>
<span class="quotelev2">&gt;&gt;    // Just make sure we have plenty of buffer for any operation
</span><br>
<span class="quotelev2">&gt;&gt;    int *sbuf = malloc(sizeof(int) * 2 * count);
</span><br>
<span class="quotelev2">&gt;&gt;    int *rbuf = malloc(sizeof(int) * 2 * count);
</span><br>
<span class="quotelev2">&gt;&gt;    assert(sbuf);
</span><br>
<span class="quotelev2">&gt;&gt;    assert(rbuf);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    for (n = 1; n &lt;= 10000; n += 100) {
</span><br>
<span class="quotelev2">&gt;&gt;        printf(&quot;N = %d\n&quot;, n);
</span><br>
<span class="quotelev2">&gt;&gt;        fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;        for (i = 0; i &lt; n; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;            MPI_Reduce(sbuf, rbuf, count, MPI_INT, MPI_SUM, 0,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;        printf(&quot; -- DONE\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;        fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;    return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; ----------- snip-------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can usually trigger a crash with count=1, and n=1000 using 16+
</span><br>
<span class="quotelev2">&gt;&gt; nodes,
</span><br>
<span class="quotelev2">&gt;&gt; but I can also trigger it with  44 nodes and larger packets (around
</span><br>
<span class="quotelev2">&gt;&gt; 32k
</span><br>
<span class="quotelev2">&gt;&gt; ints I think). I can also crash it on a single host using 19
</span><br>
<span class="quotelev2">&gt;&gt; processes,
</span><br>
<span class="quotelev2">&gt;&gt; but then it usually doesn't crash until I reach somewhere between
</span><br>
<span class="quotelev2">&gt;&gt; 1200-3000 iterations. Gather seems to have the same problems as
</span><br>
<span class="quotelev2">&gt;&gt; Reduce.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output from running gdb on the coredump looks like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------- snip-------------
</span><br>
<span class="quotelev2">&gt;&gt; Using host libthread_db library &quot;/lib/tls/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Core was generated by `./ompi-crash2'.
</span><br>
<span class="quotelev2">&gt;&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00434184 in sysconf () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00434184 in sysconf () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0xb7e78b59 in _int_malloc () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #2  0xb7e799ce in malloc () from /home/johnm/local/ompi/lib/libopen-
</span><br>
<span class="quotelev2">&gt;&gt; pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #3  0xb7f04852 in ompi_free_list_grow () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #4  0xb7d74e70 in mca_btl_tcp_endpoint_recv_handler () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt; #5  0xb7e62b44 in opal_event_base_loop () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #6  0xb7e62cff in opal_event_loop () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #7  0xb7e5d284 in opal_progress () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #8  0xb7d74f08 in mca_btl_tcp_endpoint_recv_handler () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt; #9  0xb7e62b44 in opal_event_base_loop () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #10 0xb7e62cff in opal_event_loop () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #11 0xb7e5d284 in opal_progress () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #12 0xb7d74f08 in mca_btl_tcp_endpoint_recv_handler () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt; #13 0xb7e62b44 in opal_event_base_loop () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #14 0xb7e62cff in opal_event_loop () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ... and then continues until...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #1356848 0xb7e5d284 in opal_progress () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #1356849 0xb7d8f389 in mca_pml_ob1_recv_frag_match () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #1356850 0xb7d74a7d in mca_btl_tcp_endpoint_recv_handler () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt; #1356851 0xb7e62b44 in opal_event_base_loop () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #1356852 0xb7e62cff in opal_event_loop () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #1356853 0xb7e5d284 in opal_progress () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #1356854 0xb7d8f389 in mca_pml_ob1_recv_frag_match () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #1356855 0xb7d74a7d in mca_btl_tcp_endpoint_recv_handler () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt; #1356856 0xb7e62b44 in opal_event_base_loop () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #1356857 0xb7e62cff in opal_event_loop () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #1356858 0xb7e5d284 in opal_progress () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #1356859 0xb7d8f389 in mca_pml_ob1_recv_frag_match () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #1356860 0xb7d74a7d in mca_btl_tcp_endpoint_recv_handler () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt; #1356861 0xb7e62b44 in opal_event_base_loop () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #1356862 0xb7e62cff in opal_event_loop () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #1356863 0xb7e5d284 in opal_progress () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #1356864 0xb7d8cb69 in mca_pml_ob1_recv () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #1356865 0xb7d5bb1c in ompi_coll_tuned_reduce_intra_basic_linear ()
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt; #1356866 0xb7d55913 in ompi_coll_tuned_reduce_intra_dec_fixed () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt; #1356867 0xb7f3db6c in PMPI_Reduce () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/johnm/local/ompi/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #1356868 0x0804899e in main (argc=1, argv=0xbfba8a84) at ompi-
</span><br>
<span class="quotelev2">&gt;&gt; crash2.c:58
</span><br>
<span class="quotelev2">&gt;&gt; ----------- snip-------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I poked around in the code, and it looks like the culprit might be in
</span><br>
<span class="quotelev2">&gt;&gt; the macros that try to allocate fragments in
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_recv_frag_match: MCA_PML_OB1_RECV_FRAG_ALLOC and
</span><br>
<span class="quotelev2">&gt;&gt; MCA_PML_OB1_RECV_FRAG_INIT use OMPI_FREE_LIST_WAIT, which again can
</span><br>
<span class="quotelev2">&gt;&gt; end
</span><br>
<span class="quotelev2">&gt;&gt; up calling opal_condition_wait(). opal_condition_wait() calls
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress() to &quot;block&quot;, which looks like it leads to infinite
</span><br>
<span class="quotelev2">&gt;&gt; recursion in this case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess the problem is a race condition when one node is hammered with
</span><br>
<span class="quotelev2">&gt;&gt; incoming packets.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The stack trace contains about 1.35 million lines, so I won't include
</span><br>
<span class="quotelev2">&gt;&gt; all of it here, but here's some statistics to verify that not much
</span><br>
<span class="quotelev2">&gt;&gt; else
</span><br>
<span class="quotelev2">&gt;&gt; is happening in that stack (I can make the full trace available if
</span><br>
<span class="quotelev2">&gt;&gt; anybody needs it):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------- snip-------------
</span><br>
<span class="quotelev2">&gt;&gt; Number of callframes:  1356870
</span><br>
<span class="quotelev2">&gt;&gt; Called function statistics (how often in stackdump):
</span><br>
<span class="quotelev2">&gt;&gt;  PMPI_Reduce                                        1
</span><br>
<span class="quotelev2">&gt;&gt;  _int_malloc                                        1
</span><br>
<span class="quotelev2">&gt;&gt;  main                                               1
</span><br>
<span class="quotelev2">&gt;&gt;  malloc                                             1
</span><br>
<span class="quotelev2">&gt;&gt;  mca_btl_tcp_endpoint_recv_handler             339197
</span><br>
<span class="quotelev2">&gt;&gt;  mca_pml_ob1_recv                                   1
</span><br>
<span class="quotelev2">&gt;&gt;  mca_pml_ob1_recv_frag_match                       72
</span><br>
<span class="quotelev2">&gt;&gt;  ompi_coll_tuned_reduce_intra_basic_linear           1
</span><br>
<span class="quotelev2">&gt;&gt;  ompi_coll_tuned_reduce_intra_dec_fixed             1
</span><br>
<span class="quotelev2">&gt;&gt;  ompi_free_list_grow                                1
</span><br>
<span class="quotelev2">&gt;&gt;  opal_event_base_loop                          339197
</span><br>
<span class="quotelev2">&gt;&gt;  opal_event_loop                               339197
</span><br>
<span class="quotelev2">&gt;&gt;  opal_progress                                 339197
</span><br>
<span class="quotelev2">&gt;&gt;  sysconf                                            2
</span><br>
<span class="quotelev2">&gt;&gt; Address statistics (how often in stackdump), plus functions with
</span><br>
<span class="quotelev2">&gt;&gt; that addr
</span><br>
<span class="quotelev2">&gt;&gt; (sanity check):
</span><br>
<span class="quotelev2">&gt;&gt;  0x00434184                                         2 set(['sysconf'])
</span><br>
<span class="quotelev2">&gt;&gt;  0x0804899e                                         1 set(['main'])
</span><br>
<span class="quotelev2">&gt;&gt;  0xb7d55913                                         1
</span><br>
<span class="quotelev2">&gt;&gt; set(['ompi_coll_tuned_reduce_intra_dec_fixed'])
</span><br>
<span class="quotelev2">&gt;&gt;  0xb7d5bb1c                                         1
</span><br>
<span class="quotelev2">&gt;&gt; set(['ompi_coll_tuned_reduce_intra_basic_linear'])
</span><br>
<span class="quotelev2">&gt;&gt;  0xb7d74a7d                                        72
</span><br>
<span class="quotelev2">&gt;&gt; set(['mca_btl_tcp_endpoint_recv_handler'])
</span><br>
<span class="quotelev2">&gt;&gt;  0xb7d74e70                                         1
</span><br>
<span class="quotelev2">&gt;&gt; set(['mca_btl_tcp_endpoint_recv_handler'])
</span><br>
<span class="quotelev2">&gt;&gt;  0xb7d74f08                                    339124
</span><br>
<span class="quotelev2">&gt;&gt; set(['mca_btl_tcp_endpoint_recv_handler'])
</span><br>
<span class="quotelev2">&gt;&gt;  0xb7d8cb69                                         1
</span><br>
<span class="quotelev2">&gt;&gt; set(['mca_pml_ob1_recv'])
</span><br>
<span class="quotelev2">&gt;&gt;  0xb7d8f389                                        72
</span><br>
<span class="quotelev2">&gt;&gt; set(['mca_pml_ob1_recv_frag_match'])
</span><br>
<span class="quotelev2">&gt;&gt;  0xb7e5d284                                    339197
</span><br>
<span class="quotelev2">&gt;&gt; set(['opal_progress'])
</span><br>
<span class="quotelev2">&gt;&gt;  0xb7e62b44                                    339197
</span><br>
<span class="quotelev2">&gt;&gt; set(['opal_event_base_loop'])
</span><br>
<span class="quotelev2">&gt;&gt;  0xb7e62cff                                    339197
</span><br>
<span class="quotelev2">&gt;&gt; set(['opal_event_loop'])
</span><br>
<span class="quotelev2">&gt;&gt;  0xb7e78b59                                         1
</span><br>
<span class="quotelev2">&gt;&gt; set(['_int_malloc'])
</span><br>
<span class="quotelev2">&gt;&gt;  0xb7e799ce                                         1 set(['malloc'])
</span><br>
<span class="quotelev2">&gt;&gt;  0xb7f04852                                         1
</span><br>
<span class="quotelev2">&gt;&gt; set(['ompi_free_list_grow'])
</span><br>
<span class="quotelev2">&gt;&gt;  0xb7f3db6c                                         1
</span><br>
<span class="quotelev2">&gt;&gt; set(['PMPI_Reduce'])
</span><br>
<span class="quotelev2">&gt;&gt; ----------- snip-------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't have any suggestions for a fix though, since this is the first
</span><br>
<span class="quotelev2">&gt;&gt; time I've looked into the OpenMPI code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Btw. In case it makes a difference for triggering the bug: I'm running
</span><br>
<span class="quotelev2">&gt;&gt; this on a cluster with 1 frontend and 44 nodes. The cluster runs Rocks
</span><br>
<span class="quotelev2">&gt;&gt; 4.1, and each of the nodes are 3.2GHz P4 Prescott machines with 2GB
</span><br>
<span class="quotelev2">&gt;&gt; RAM,
</span><br>
<span class="quotelev2">&gt;&gt; connected with gigabit Ethernet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; // John Markus Bj&#248;rndalen
</span><br>
<span class="quotelev2">&gt;&gt; // <a href="http://www.cs.uit.no/~johnm/">http://www.cs.uit.no/~johnm/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5083.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5081.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<li><strong>In reply to:</strong> <a href="5080.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5083.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5083.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5086.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>Reply:</strong> <a href="5092.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
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
