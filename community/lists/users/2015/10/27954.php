<?
$subject_val = "Re: [OMPI users] MPI_Wait stalls";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 22:24:42 2015" -->
<!-- isoreceived="20151030022442" -->
<!-- sent="Fri, 30 Oct 2015 11:24:34 +0900" -->
<!-- isosent="20151030022434" -->
<!-- name="ABE Hiroshi" -->
<!-- email="habe36_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Wait stalls" -->
<!-- id="A5545951-F6B3-4EC7-8ED3-638C03F3EF16_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="E3AF7009-2870-4D21-B877-5D0440A632A8_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Wait stalls<br>
<strong>From:</strong> ABE Hiroshi (<em>habe36_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-29 22:24:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27955.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27953.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27929.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27977.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27977.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I tried &quot;mpic++&#226;&#128;&#157; to make wxWidgets library and it doesn&#226;&#128;&#153;t change anything.
<br>
<p>I found the openmpi-1.10.0 on my Mac: OSX 10.9.5 with Apple Clang 6.0 always fails to MPI_Finalize even with a very simple program (bottom of this mail).
<br>
<p>[Venus:60708] [ 4] Assertion failed: (OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (&amp;fl-&gt;fl_allocations))-&gt;obj_magic_id), function opal_free_list_destruct, file ../../opal/class/opal_free_list.c, line 70.
<br>
[Venus:60709] *** Process received signal ***
<br>
[Venus:60709] Signal: Abort trap: 6 (6)
<br>
[Venus:60709] Signal code:  (0)
<br>
[Venus:60709] [ 0] 0   libsystem_platform.dylib            0x00007fff8e0445aa _sigtramp + 26
<br>
[Venus:60709] [ 1] 0   ???                                 0x0000000000000000 0x0 + 0
<br>
[Venus:60709] [ 2] 0   libsystem_c.dylib                   0x00007fff9496db1a abort + 125
<br>
[Venus:60709] [ 3] 0   libsystem_c.dylib                   0x00007fff949379bf basename + 0
<br>
[Venus:60709] [ 4] 0   libopen-pal.13.dylib                0x000000010c0a9213 opal_free_list_destruct + 515
<br>
[Venus:60709] [ 5] 0   mca_osc_rdma.so                     0x000000010c542ad5 component_finalize + 101
<br>
[Venus:60709] [ 6] 0   libopen-pal.13.dylib                0x000000010f265213 opal_free_list_destruct + 515
<br>
[Venus:60708] [ 5] 0   mca_osc_rdma.so                     0x000000010f6fead5 component_finalize + 101
<br>
[Venus:60708] [ 6] 0   libmpi.12.dylib                     0x000000010bdecf8a ompi_osc_base_finalize + 74
<br>
[Venus:60709] [ 7] 0   libmpi.12.dylib                     0x000000010efaaf8a ompi_osc_base_finalize + 74
<br>
[Venus:60708] [ 7] 0   libmpi.12.dylib                     0x000000010bc7e57a ompi_mpi_finalize + 2746
<br>
[Venus:60709] [ 8] 0   libmpi.12.dylib                     0x000000010bcbb56d MPI_Finalize + 125
<br>
<p>Regarding my code I mentioned in my original mail, the behaviour is very weird. MPI_Isend is called from the different named function, it works.
<br>
And I wrote a sample program to try to reproduce my problem but it works fine,  except the problem of MPI_Finalize.
<br>
<p>So I decided to make gcc-5.2 and make openmpi on it, which seems to be a recommendation of the FINK project.
<br>
<p>2015/10/28 8:29&#227;&#128;&#129;ABE Hiroshi &lt;habe36_at_[hidden]&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
<br>
<p><span class="quotelev1">&gt; Dear Nathan and all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your information. I tried it in this morning, it seems to get the same result. I will try another option. Thank you for the key to go in.
</span><br>
<span class="quotelev1">&gt; And I found a statement in the FAQ ragarding PETSc which says you should use OpenMPI wrapper compiler. I use wxWidgets library and try to compile with the wrapper.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015/10/27 23:56&#227;&#128;&#129;Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have seen hangs when the tcp component is in use. If you are running
</span><br>
<span class="quotelev2">&gt;&gt; on a single machine running with mpirun -mca btl self,vader.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Oct 26, 2015 at 09:17:20PM -0600, ABE Hiroshi wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Dear All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I have a multithread-ed program and as a next step it is reconstructing to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI program. The code is to be MPI / Multithread hybrid one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  The code proceeds MPI-routines as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  1. Send data by MPI_Isend with exlusive tag numbers to the other node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  This is done in ONE master thread.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  2. Receive the sent data by MPI_Irecv in several threads (usually the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  as the number of CPU core) and do their jobs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  There is one main thread (main process) and one master thread and several
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  working threads in the code. MPI_Isend is called in the master thread.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Irecv is called in the working threads.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  My problem is MPI_Wait stalls after calling MPI_Isend. MPI_Wait is called
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  just after MPI_Isend.  Several time the routines get through, but after
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  sending several data MPI_Wait stalls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Using Xcode debugger, the loop with c-&gt;c_signaled at line 70 of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  opal_conidition_wait (opal/threads/condition.h) never escape.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I guess I would make something wrong. I would like to know how to find the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I would be obliged if you'd point the solution or the next direction to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  investigated for debugging.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  My Environment : OSX 10.9.5, Apple LLVM 6.0 (LLVM 3.5svn), OpenMPI 1.10.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  The thread is wxThread from wxWidgets Library (3.0.2) which is a wrapper
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  of pthread.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OpenMPI is configure-ed : --enable-mpi-thread-multiple --enable-debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-event-debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Please find the detail (config.log and ompi_info -all) attached in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thank you very much in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Sincerely,
</span><br>
<p>ABE Hiroshi
<br>
&nbsp;from Tokorozawa, JAPAN
<br>
<p><p>#include &lt;iostream&gt;
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>#define bufdim        128
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char buffer[bufdim];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char id_str[32];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//  mpi :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Init(argc,argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int tag;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size=MPI::COMM_WORLD.Get_size();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank=MPI::COMM_WORLD.Get_rank();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tag=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (rank==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d: we have %d processors\n&quot;,rank,size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i=1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for ( ;i&lt;size; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(buffer,&quot;hello  %d! &quot;,i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Send(buffer,bufdim,MPI::CHAR,i,tag);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i=1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for ( ;i&lt;size; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Recv(buffer,bufdim,MPI::CHAR,i,tag,status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d: %s\n&quot;,rank,buffer);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Recv(buffer,bufdim,MPI::CHAR,0,tag,status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(id_str,&quot;processor %d &quot;,rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strncat(buffer,id_str,bufdim-1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strncat(buffer,&quot;reporting for duty\n&quot;,bufdim-1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Send(buffer,bufdim,MPI::CHAR,0,tag);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27955.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27953.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27929.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27977.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27977.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Wait stalls"</a>
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
