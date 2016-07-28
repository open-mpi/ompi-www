<?
$subject_val = "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  1 10:44:03 2008" -->
<!-- isoreceived="20080501144403" -->
<!-- sent="Thu, 1 May 2008 17:43:52 +0300" -->
<!-- isosent="20080501144352" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message." -->
<!-- id="453d39990805010743o7dea5daex25f40ed4255a8d19_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990805010741j2a4d733bn3e98ff076394e469_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message.<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-01 10:43:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3791.php">Jeff Squyres: "Re: [OMPI devel] forgetting to run ./autogen.sh should not be fatal"</a>
<li><strong>Previous message:</strong> <a href="3789.php">Jeff Squyres: "[OMPI devel] merging cpc3 -&gt; trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3783.php">Mukesh K Srivastava: "[OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3837.php">Jeff Squyres: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Reply:</strong> <a href="3837.php">Jeff Squyres: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/1/08, Mukesh K Srivastava &lt;srimks11_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for responding. To correct more - would like to know few things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) I did modify make_mpich makefile present in IMB-3.1/src folder giving
</span><br>
<span class="quotelev1">&gt; the path for openmpi. Here I am using same mpirun as built from
</span><br>
<span class="quotelev1">&gt; openmpi(v-1.2.5) also did mention in PATH &amp; LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) What is the command on console to run any new additional file with MPI
</span><br>
<span class="quotelev1">&gt; API contents call. Do I need to add in Makefile.base of IMB-3.1/src folder
</span><br>
<span class="quotelev1">&gt; or mentioning in console as a command it takes care alongwith &quot;$mpirun
</span><br>
<span class="quotelev1">&gt; IMB-MPI1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (c) Does IMB-3.1 need INB(Infiniband) or TCP support to complete it's
</span><br>
<span class="quotelev1">&gt; Benchmark routine call, means do I need to configure and build OpnMPI with
</span><br>
<span class="quotelev1">&gt; Infiniband stack too?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>IMB is a set of benchmarks that can be run between 1 and more machines
<br>
it calls for MPI API that does all the communication
<br>
MPI decides how to run ( IB or TCP or shared memory ) according to
<br>
priorities and all possible ways to be connected to another host.
<br>
<p>you can make your own benchmark or test program, compile it with mpicc and
<br>
run
<br>
ex:
<br>
#mpicc -o hello_world hello_world.c
<br>
#mpirun -np 2 -H host1,host2 ./hello_world
<br>
<p><p>#cat hello_world.c
<br>
/*
<br>
* Hewlett-Packard Co., High Performance Systems Division
<br>
*
<br>
* Function: - example: simple &quot;hello world&quot;
<br>
*
<br>
* $Revision: 1.1.2.1 $
<br>
*/
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>main(argc, argv)
<br>
<p>int argc;
<br>
char *argv[];
<br>
<p>{
<br>
int rank, size, len;
<br>
char name[MPI_MAX_PROCESSOR_NAME];
<br>
int to_wait = 0, sleep_diff = 0, max_limit = 0;
<br>
double sleep_start = 0.0, sleep_now = 0.0;
<br>
<p>MPI_Init(&amp;argc, &amp;argv);
<br>
MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>MPI_Get_processor_name(name, &amp;len);
<br>
<p>if (argc &gt; 1)
<br>
{
<br>
to_wait = atoi(argv[1]);
<br>
}
<br>
<p>//busy loop for debuging needs
<br>
if (to_wait)
<br>
{
<br>
sleep_start=MPI_Wtime();
<br>
while(1)
<br>
{
<br>
max_limit++;
<br>
if(max_limit &gt; 100000000)
<br>
{
<br>
fprintf(stdout,&quot;-------- exit loop, to_wait: %d, \n&quot;, to_wait);
<br>
break;
<br>
}
<br>
<p>sleep_now = MPI_Wtime();
<br>
sleep_diff = (int)(sleep_now - sleep_start);
<br>
if(sleep_diff &gt;= to_wait)
<br>
{
<br>
break;
<br>
}
<br>
}
<br>
}
<br>
<p>if (rank == 0) //only the first will print this message
<br>
{
<br>
printf (&quot;Hello world! I'm %d of %d on %s\n&quot;, rank, size, name);
<br>
}
<br>
<p>MPI_Finalize();
<br>
exit(0);
<br>
}
<br>
<p><p><p><p><p><p>(d) I don't see any README in IMB-3.1 or anu user-guide which tells how to
<br>
<span class="quotelev1">&gt; execute rather it simply tells about each 17 benchmark and flags to be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/30/08, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 4/30/08, Mukesh K Srivastava &lt;srimks11_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am using IMB-3.1, an Intel MPI Benchmark tool with OpenMPI(v-1.2.5).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In /IMB-3.1/src/make_mpich file, I had only given the decalartion for
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_HOME, which takes care for CC, OPTFLAGS &amp; CLINKER. Building IMB_MPI1,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; IMP-EXT &amp; IMB-IO happens succesfully.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I get proper results of IMB Benchmark with command &quot;-np 1&quot; as mpirun
</span><br>
<span class="quotelev3">&gt; &gt; &gt; IMB-MPI1, but for &quot;-np 2&quot;, I get below errors -
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [mukesh_at_n161 src]$ mpirun -np 2 IMB-MPI1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] Failing at address: (nil)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [ 0] /lib64/tls/libpthread.so.0 [0x399e80c4f0]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [ 1]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so [0x2a9830f8b4]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [ 2]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so [0x2a983109e3]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [ 3]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0xbc)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a9830fc50]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [ 4]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x4b)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a97fce447]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [ 5]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/libopen-pal.so.0(opal_progress+0xbc)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a958fc343]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [ 6]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_wait+0x22)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a962e9e22]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [ 7]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_recv+0x677)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a962f1aab]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [ 8]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/libopen-rte.so.0(mca_oob_recv_packed+0x46)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a9579d243]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [ 9]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_gpr_proxy.so(orte_gpr_proxy_put+0x2f3)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a96508c8f]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [10]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/libopen-rte.so.0(orte_smr_base_set_proc_state+0x425)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a957c391d]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [11]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/libmpi.so.0(ompi_mpi_init+0xa1e)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a9559f042]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [12]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/libmpi.so.0(PMPI_Init_thread+0xcb)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a955e1c5b]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [13] IMB-MPI1(main+0x33) [0x403543]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [14] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x399e11c3fb]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] [15] IMB-MPI1 [0x40347a]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13390] *** End of error message ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] Failing at address: (nil)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [ 0] /lib64/tls/libpthread.so.0 [0x399e80c4f0]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [ 1]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so [0x2a9830f8b4]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [ 2]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so [0x2a983109e3]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [ 3]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0xbc)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a9830fc50]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [ 4]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x4b)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a97fce447]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [ 5]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/libopen-pal.so.0(opal_progress+0xbc)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a958fc343]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [ 6]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_wait+0x22)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a962e9e22]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [ 7]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_recv+0x677)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a962f1aab]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [ 8]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/libopen-rte.so.0(mca_oob_recv_packed+0x46)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a9579d243]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [ 9] /home/mukesh/openmpi/prefix/lib/libopen-rte.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a9579e910]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [10]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/libopen-rte.so.0(mca_oob_xcast+0x140)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a9579d824]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [11]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/libmpi.so.0(ompi_mpi_init+0xaf1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a9559f115]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [12]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/mukesh/openmpi/prefix/lib/libmpi.so.0(PMPI_Init_thread+0xcb)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x2a955e1c5b]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [13] IMB-MPI1(main+0x33) [0x403543]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [14] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0x399e11c3fb]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] [15] IMB-MPI1 [0x40347a]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n161:13391] *** End of error message ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Query#1: Any clue for above?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It worked for me.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. maybe mpirun belongs to another MPI.
</span><br>
<span class="quotelev2">&gt; &gt; 2. try to define hosts ( -H host1,host2 )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Query#2:  How can I include seperate exe file and have the IMB for it,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; e.g, writing a hello.c with MPI elementary API calls, compiling with mpicc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and performing IMB for the same exe.?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; you have all the sorces
</span><br>
<span class="quotelev2">&gt; &gt; maybe in IMB's README you can find something
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Lenny
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; BR
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3790/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3791.php">Jeff Squyres: "Re: [OMPI devel] forgetting to run ./autogen.sh should not be fatal"</a>
<li><strong>Previous message:</strong> <a href="3789.php">Jeff Squyres: "[OMPI devel] merging cpc3 -&gt; trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3783.php">Mukesh K Srivastava: "[OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3837.php">Jeff Squyres: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Reply:</strong> <a href="3837.php">Jeff Squyres: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
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
