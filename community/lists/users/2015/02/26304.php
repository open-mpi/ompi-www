<?
$subject_val = "Re: [OMPI users] Segfault in mpi-java";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  7 07:53:41 2015" -->
<!-- isoreceived="20150207125341" -->
<!-- sent="Sat, 7 Feb 2015 12:53:40 +0000" -->
<!-- isosent="20150207125340" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault in mpi-java" -->
<!-- id="3EE60FC7-C827-4FA5-82AB-BCC35A80C557_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="54CEA3E6.4030602_at_dsic.upv.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfault in mpi-java<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-07 07:53:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26305.php">simona bellavista: "[OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>Previous message:</strong> <a href="26303.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="26247.php">Oscar Vega-Gisbert: "Re: [OMPI users] Segfault in mpi-java"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We'll follow up on this github issue.
<br>
<p>Alexander -- thanks for the bug report.  If you'd like to follow the progress of this issue, comment on <a href="https://github.com/open-mpi/ompi/issues/369">https://github.com/open-mpi/ompi/issues/369</a>.
<br>
<p><p><span class="quotelev1">&gt; On Feb 1, 2015, at 5:08 PM, Oscar Vega-Gisbert &lt;ovega_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I created an issue with a simplified example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/issues/369">https://github.com/open-mpi/ompi/issues/369</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Oscar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; El 25/01/15 a las 19:36, Oscar Vega-Gisbert escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I also reproduce this behaviour. But I think this crash is not related with garbage collector. Java is much better than you think.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; May be MPI corrupts the Java runtime heap.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Oscar
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; El 22/01/15 a las 08:07, Gilles Gouaillardet escribi&#243;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alexander,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i was able to reproduce this behaviour.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; basically, bad things happen when the garbage collector is invoked ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i was even able to reproduce some crashes (but that happen at random
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stages) very early in the code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by manually inserting calls to the garbage collector (e.g. System.gc();)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2015/01/19 9:03, Alexander Daryin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using Java MPI bindings and periodically get fatal erros. This is illustrated by the following model Java program.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; import mpi.MPI;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; import mpi.MPIException;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; import mpi.Prequest;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; import mpi.Request;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; import mpi.Status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; import java.nio.ByteBuffer;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; import java.util.Random;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; public class TestJavaMPI {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    private static final int NREQ = 16;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    private static final int BUFFSIZE = 0x2000;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    private static final int NSTEP = 1000000000;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    public static void main(String... args) throws MPIException {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        MPI.Init(args);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        Random random = new Random();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        Prequest[] receiveRequests = new Prequest[NREQ];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        Request[] sendRequests = new Request[NREQ];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        ByteBuffer[] receiveBuffers = new ByteBuffer[NREQ];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        ByteBuffer[] sendBuffers = new ByteBuffer[NREQ];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        for(int i = 0; i &lt; NREQ; i++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            receiveBuffers[i] = MPI.newByteBuffer(BUFFSIZE);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            sendBuffers[i] = MPI.newByteBuffer(BUFFSIZE);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            receiveRequests[i] = MPI.COMM_WORLD.recvInit(receiveBuffers[i], BUFFSIZE, MPI.BYTE, MPI.ANY_SOURCE, MPI.ANY_TAG);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            receiveRequests[i].start();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            sendRequests[i] = MPI.COMM_WORLD.iSend(sendBuffers[i], 0, MPI.BYTE, MPI.PROC_NULL, 0);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        for(int step = 0; step &lt; NSTEP; step++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            if( step % 128 == 0 ) System.out.println(step);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            int index;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            do {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                Status status = Request.testAnyStatus(receiveRequests);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                if( status != null )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; receiveRequests[status.getIndex()].start();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                index = Request.testAny(sendRequests);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            } while( index == MPI.UNDEFINED );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            sendRequests[index].free();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            sendRequests[index] = MPI.COMM_WORLD.iSend(sendBuffers[index], BUFFSIZE, MPI.BYTE,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                    random.nextInt(MPI.COMM_WORLD.getSize()), 0);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        MPI.Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Linux, this produces a segfault after about a million steps. On OS X, instead of segfault it prints the following error message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; java(64053,0x127e4d000) malloc: *** error for object 0x7f80eb828808: incorrect checksum for freed object - object was probably modified after being freed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** set a breakpoint in malloc_error_break to debug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] Signal: Abort trap: 6 (6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] Signal code:  (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] [ 0] 0   libsystem_platform.dylib 0x00007fff86b5ff1a _sigtramp + 26
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] [ 1] 0   ??? 0x0000000000000000 0x0 + 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] [ 2] 0   libsystem_c.dylib 0x00007fff80c7bb73 abort + 129
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] [ 3] 0   libsystem_malloc.dylib 0x00007fff8c26ce06 szone_error + 625
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] [ 4] 0   libsystem_malloc.dylib 0x00007fff8c2645c8 small_free_list_remove_ptr + 154
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] [ 5] 0   libsystem_malloc.dylib 0x00007fff8c2632bf szone_free_definite_size + 1856
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] [ 6] 0   libjvm.dylib 0x000000010e257d89 _ZN2os4freeEPvt + 63
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] [ 7] 0   libjvm.dylib 0x000000010dea2b0a _ZN9ChunkPool12free_all_butEm + 136
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] [ 8] 0   libjvm.dylib 0x000000010e30ab33 _ZN12PeriodicTask14real_time_tickEi + 77
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] [ 9] 0   libjvm.dylib 0x000000010e3372a3 _ZN13WatcherThread3runEv + 267
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] [10] 0   libjvm.dylib 0x000000010e25d87e _ZL10java_startP6Thread + 246
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] [11] 0   libsystem_pthread.dylib 0x00007fff8f1402fc _pthread_body + 131
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] [12] 0   libsystem_pthread.dylib 0x00007fff8f140279 _pthread_body + 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] [13] 0   libsystem_pthread.dylib 0x00007fff8f13e4b1 thread_start + 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mbp:64053] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI version is 1.8.4. Java version is 1.8.0_25-b17.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Alexander Daryin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26215.php">http://www.open-mpi.org/community/lists/users/2015/01/26215.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26230.php">http://www.open-mpi.org/community/lists/users/2015/01/26230.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/users/2015/02/index.php">http://www.open-mpi.org/community/lists/users/2015/02/index.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26305.php">simona bellavista: "[OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>Previous message:</strong> <a href="26303.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="26247.php">Oscar Vega-Gisbert: "Re: [OMPI users] Segfault in mpi-java"</a>
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
