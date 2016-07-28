<?
$subject_val = "[OMPI users] Segfault in mpi-java";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 18 19:03:43 2015" -->
<!-- isoreceived="20150119000343" -->
<!-- sent="Mon, 19 Jan 2015 03:03:39 +0300" -->
<!-- isosent="20150119000339" -->
<!-- name="Alexander Daryin" -->
<!-- email="a.daryin_at_[hidden]" -->
<!-- subject="[OMPI users] Segfault in mpi-java" -->
<!-- id="477E919D-EABD-4474-80B8-BE5271798341_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Segfault in mpi-java<br>
<strong>From:</strong> Alexander Daryin (<em>a.daryin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-18 19:03:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26216.php">Jonathan Eckstein: "[OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>Previous message:</strong> <a href="26214.php">Gustavo Correa: "Re: [OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26230.php">Gilles Gouaillardet: "Re: [OMPI users] Segfault in mpi-java"</a>
<li><strong>Reply:</strong> <a href="26230.php">Gilles Gouaillardet: "Re: [OMPI users] Segfault in mpi-java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I am using Java MPI bindings and periodically get fatal erros. This is illustrated by the following model Java program.
<br>
<p>import mpi.MPI;
<br>
import mpi.MPIException;
<br>
import mpi.Prequest;
<br>
import mpi.Request;
<br>
import mpi.Status;
<br>
<p>import java.nio.ByteBuffer;
<br>
import java.util.Random;
<br>
<p>public class TestJavaMPI {
<br>
<p>&nbsp;&nbsp;&nbsp;private static final int NREQ = 16;
<br>
&nbsp;&nbsp;&nbsp;private static final int BUFFSIZE = 0x2000;
<br>
&nbsp;&nbsp;&nbsp;private static final int NSTEP = 1000000000;
<br>
<p>&nbsp;&nbsp;&nbsp;public static void main(String... args) throws MPIException {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.Init(args);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Random random = new Random();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prequest[] receiveRequests = new Prequest[NREQ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Request[] sendRequests = new Request[NREQ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ByteBuffer[] receiveBuffers = new ByteBuffer[NREQ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ByteBuffer[] sendBuffers = new ByteBuffer[NREQ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; NREQ; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;receiveBuffers[i] = MPI.newByteBuffer(BUFFSIZE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sendBuffers[i] = MPI.newByteBuffer(BUFFSIZE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;receiveRequests[i] = MPI.COMM_WORLD.recvInit(receiveBuffers[i], BUFFSIZE, MPI.BYTE, MPI.ANY_SOURCE, MPI.ANY_TAG);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;receiveRequests[i].start();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sendRequests[i] = MPI.COMM_WORLD.iSend(sendBuffers[i], 0, MPI.BYTE, MPI.PROC_NULL, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int step = 0; step &lt; NSTEP; step++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( step % 128 == 0 ) System.out.println(step);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int index;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status status = Request.testAnyStatus(receiveRequests);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( status != null )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;receiveRequests[status.getIndex()].start();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;index = Request.testAny(sendRequests);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} while( index == MPI.UNDEFINED );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sendRequests[index].free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sendRequests[index] = MPI.COMM_WORLD.iSend(sendBuffers[index], BUFFSIZE, MPI.BYTE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;random.nextInt(MPI.COMM_WORLD.getSize()), 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.Finalize();
<br>
&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>On Linux, this produces a segfault after about a million steps. On OS X, instead of segfault it prints the following error message
<br>
<p>java(64053,0x127e4d000) malloc: *** error for object 0x7f80eb828808: incorrect checksum for freed object - object was probably modified after being freed.
<br>
*** set a breakpoint in malloc_error_break to debug
<br>
[mbp:64053] *** Process received signal ***
<br>
[mbp:64053] Signal: Abort trap: 6 (6)
<br>
[mbp:64053] Signal code:  (0)
<br>
[mbp:64053] [ 0] 0   libsystem_platform.dylib            0x00007fff86b5ff1a _sigtramp + 26
<br>
[mbp:64053] [ 1] 0   ???                                 0x0000000000000000 0x0 + 0
<br>
[mbp:64053] [ 2] 0   libsystem_c.dylib                   0x00007fff80c7bb73 abort + 129
<br>
[mbp:64053] [ 3] 0   libsystem_malloc.dylib              0x00007fff8c26ce06 szone_error + 625
<br>
[mbp:64053] [ 4] 0   libsystem_malloc.dylib              0x00007fff8c2645c8 small_free_list_remove_ptr + 154
<br>
[mbp:64053] [ 5] 0   libsystem_malloc.dylib              0x00007fff8c2632bf szone_free_definite_size + 1856
<br>
[mbp:64053] [ 6] 0   libjvm.dylib                        0x000000010e257d89 _ZN2os4freeEPvt + 63
<br>
[mbp:64053] [ 7] 0   libjvm.dylib                        0x000000010dea2b0a _ZN9ChunkPool12free_all_butEm + 136
<br>
[mbp:64053] [ 8] 0   libjvm.dylib                        0x000000010e30ab33 _ZN12PeriodicTask14real_time_tickEi + 77
<br>
[mbp:64053] [ 9] 0   libjvm.dylib                        0x000000010e3372a3 _ZN13WatcherThread3runEv + 267
<br>
[mbp:64053] [10] 0   libjvm.dylib                        0x000000010e25d87e _ZL10java_startP6Thread + 246
<br>
[mbp:64053] [11] 0   libsystem_pthread.dylib             0x00007fff8f1402fc _pthread_body + 131
<br>
[mbp:64053] [12] 0   libsystem_pthread.dylib             0x00007fff8f140279 _pthread_body + 0
<br>
[mbp:64053] [13] 0   libsystem_pthread.dylib             0x00007fff8f13e4b1 thread_start + 13
<br>
[mbp:64053] *** End of error message ***
<br>
<p>OpenMPI version is 1.8.4. Java version is 1.8.0_25-b17.
<br>
<p>Best regards,
<br>
Alexander Daryin<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26216.php">Jonathan Eckstein: "[OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>Previous message:</strong> <a href="26214.php">Gustavo Correa: "Re: [OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26230.php">Gilles Gouaillardet: "Re: [OMPI users] Segfault in mpi-java"</a>
<li><strong>Reply:</strong> <a href="26230.php">Gilles Gouaillardet: "Re: [OMPI users] Segfault in mpi-java"</a>
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
