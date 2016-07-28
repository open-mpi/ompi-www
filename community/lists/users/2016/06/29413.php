<?
$subject_val = "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 19:58:38 2016" -->
<!-- isoreceived="20160608235838" -->
<!-- sent="Thu, 9 Jun 2016 08:58:24 +0900" -->
<!-- isosent="20160608235824" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows" -->
<!-- id="b3b412c1-b055-567c-9d61-0d70230e1a8b_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="95110DC63CB062409084890E698980AD1D83D4C9_at_VAW1PWINFMBXP1.veriskdom.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-08 19:58:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29414.php">Jiri Kraus: "Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice"</a>
<li><strong>Previous message:</strong> <a href="29412.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when	using	MPI_Comm_spawn on Windows"</a>
<li><strong>In reply to:</strong> <a href="29412.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when	using	MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29416.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>Reply:</strong> <a href="29416.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christopher,
<br>
<p><p>the sm btl does not work with inter communicators and hence disqualifies 
<br>
itself.
<br>
<p>i guess this is what you interpreted as 'partially working'
<br>
<p><p>i am surprised you are using a privileged port (260 &lt; 1024), are you 
<br>
running as an admin ?
<br>
<p><p>Open MPI is no more supported on windows, and the 1.6 series is pretty 
<br>
antique these days...
<br>
<p><p>regardless this, the source code points to
<br>
<p><p>static __inline int opal_get_socket_errno(void) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ret = WSAGetLastError();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (ret) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case WSAEINTR: return EINTR;
<br>
...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default: printf(&quot;Feature not implemented: %d %s\n&quot;, __LINE__, 
<br>
__FILE__); return OPAL_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;};
<br>
}
<br>
<p><p>at first, it is worth printing (ret) if the feature is not implemented.
<br>
<p>then you can hack this part and add the missing case
<br>
<p>recent windows (7) might use a newer one that was not available on older 
<br>
ones (xp)
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p><p><p>On 6/9/2016 1:51 AM, Roth, Christopher wrote:
<br>
<span class="quotelev1">&gt; Well, that obvious error message states the basic problem - I was 
</span><br>
<span class="quotelev1">&gt; hoping you had noticed a detail in the ompi_info output that would 
</span><br>
<span class="quotelev1">&gt; point to a reason for it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Further test runs with the option '-mca btl tcp,self' (excluding 'sm' 
</span><br>
<span class="quotelev1">&gt; from the mix) and '-mca btl_base_verbose 100', supply some more 
</span><br>
<span class="quotelev1">&gt; information:
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; [sweet1:04556] btl: tcp: attempting to connect() to address 10.3.2.109 
</span><br>
<span class="quotelev1">&gt; on port 260
</span><br>
<span class="quotelev1">&gt; [sweet1:04556] btl: tcp: attempting to connect() to address 10.3.2.109 
</span><br>
<span class="quotelev1">&gt; on port 260
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; The ip address is the host machine's.  The process ID corresponds to 
</span><br>
<span class="quotelev1">&gt; the first of the executor programs.  The programs now hang at that 
</span><br>
<span class="quotelev1">&gt; point (within the scheduler's MPI_Comm_spawn call and the executors' 
</span><br>
<span class="quotelev1">&gt; MPI_Init calls), and and have to be manually killed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yet another test, adding the '-mca mpi_preconnect_mpi 1' (along with 
</span><br>
<span class="quotelev1">&gt; the other two added arguments), gives more info:
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; [sweet1:04976] btl: tcp: attempting to connect() to address 10.3.2.109 
</span><br>
<span class="quotelev1">&gt; on port 260
</span><br>
<span class="quotelev1">&gt; [sweet1:04516] btl: tcp: attempting to connect() to address 10.3.2.109 
</span><br>
<span class="quotelev1">&gt; on port 260
</span><br>
<span class="quotelev1">&gt; [sweet1:03824] btl: tcp: attempting to connect() to address 10.3.2.109 
</span><br>
<span class="quotelev1">&gt; on port 260
</span><br>
<span class="quotelev1">&gt; [sweet1][[17613,2],1][..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp\btl_tcp_endpoint.c:486:..\..\..\openmpi-1.6.2\ompi\mca\btl
</span><br>
<span class="quotelev1">&gt; \tcp\btl_tcp_endpoint.c] received unexpected process identifier 
</span><br>
<span class="quotelev1">&gt; [[17613,2],0]
</span><br>
<span class="quotelev1">&gt; [sweet1][[17613,2],0][..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp\btl_tcp_frag.c:215:..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp
</span><br>
<span class="quotelev1">&gt; \btl_tcp_frag.c] Feature not implemented: 130 
</span><br>
<span class="quotelev1">&gt; D:/temp/OpenMPI/openmpi-1.6.2/opal/include\opal/opal_socket_errno.h
</span><br>
<span class="quotelev1">&gt; Feature not implemented: 130 
</span><br>
<span class="quotelev1">&gt; D:/temp/OpenMPI/openmpi-1.6.2/opal/include\opal/opal_socket_errno.h
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Unknown error (-1)
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; With the 'preconnect' option, it sets up the TCP link for all of the 
</span><br>
<span class="quotelev1">&gt; executor processes, but then runs into an actual error, regarding some 
</span><br>
<span class="quotelev1">&gt; function not implemented.  This option is not required, but I had to 
</span><br>
<span class="quotelev1">&gt; give it a whirl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All of these test runs have the same behavior when performed with and 
</span><br>
<span class="quotelev1">&gt; without the firewall active.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fact that the executor programs don't get past the MPI_Init call 
</span><br>
<span class="quotelev1">&gt; when the 'sm' is excluded from btl set , implies that the 'sm' is at 
</span><br>
<span class="quotelev1">&gt; least partially working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain 
</span><br>
<span class="quotelev1">&gt; [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, June 08, 2016 10:47 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Processes unable to communicate when using 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 8, 2016, at 4:30 AM, Roth, Christopher &lt;CRoth_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:CRoth_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What part of this output indicates this non-communicative configuration?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes. This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 1 ([[20141,1],0]) is on host: sweet1
</span><br>
<span class="quotelev1">&gt; Process 2 ([[20141,2],0]) is on host: sweet1
</span><br>
<span class="quotelev1">&gt; BTLs attempted: tcp sm self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; &#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both procs are on the same host. Since they cannot communicate, it 
</span><br>
<span class="quotelev1">&gt; means that (a) the shared memory component (sm) was unable to be used, 
</span><br>
<span class="quotelev1">&gt; and (b) the TCP subsystem did not provide a usable address for the two 
</span><br>
<span class="quotelev1">&gt; procs to reach each other. The former could mean that there wasn&#146;t 
</span><br>
<span class="quotelev1">&gt; enough room in the tmp directory, and the latter indicates that the 
</span><br>
<span class="quotelev1">&gt; TCP subsystem isn&#146;t configured to allow connections from its own local 
</span><br>
<span class="quotelev1">&gt; IP address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don&#146;t know anything about Windows configuration I&#146;m afraid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please recall, this is using the precompiled OpenMpi Windows installation
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When the 'verbose' option is added, I see this sequence of output for 
</span><br>
<span class="quotelev2">&gt;&gt; the scheduler and each of the executor processes:
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] mca: base: components_open: component tcp register 
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] mca: base: components_open: component tcp open 
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] mca: base: components_open: component sm has no 
</span><br>
<span class="quotelev2">&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] mca: base: components_open: component sm open function 
</span><br>
<span class="quotelev2">&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] mca: base: components_open: component self has no 
</span><br>
<span class="quotelev2">&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] mca: base: components_open: component self open 
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] select: initializing btl component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] select: init of component tcp returned success
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] select: initializing btl component sm
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] select: init of component sm returned success
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:06412] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; -------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This output appears to show the btl components for TCP, SM and Self 
</span><br>
<span class="quotelev2">&gt;&gt; are all available, but this is contradicted the error message shown 
</span><br>
<span class="quotelev2">&gt;&gt; in the initial post  (&quot;At least one pair of MPI processes are unable 
</span><br>
<span class="quotelev2">&gt;&gt; to reach each other for MPI communications....&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If there is some sort of misconfiguration present, do you have a 
</span><br>
<span class="quotelev2">&gt;&gt; suggestion for correcting the situation?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *From:*users [users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain 
</span><br>
<span class="quotelev2">&gt;&gt; [rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;]
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:*Tuesday, June 07, 2016 3:39 PM
</span><br>
<span class="quotelev2">&gt;&gt; *To:*Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:*Re: [OMPI users] Processes unable to communicate when using 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn on Windows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just looking at this output, it would appear that Windows is 
</span><br>
<span class="quotelev2">&gt;&gt; configured in a way that prevents the procs from connecting to each 
</span><br>
<span class="quotelev2">&gt;&gt; other via TCP while on the same node, and shared memory is 
</span><br>
<span class="quotelev2">&gt;&gt; disqualifying itself - which leaves no way for two procs on the same 
</span><br>
<span class="quotelev2">&gt;&gt; node to communicate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 7, 2016, at 12:16 PM, Roth, Christopher &lt;CRoth_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:CRoth_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have developed a set of C++ MPI programs for performing a series 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of scientific calculations.  The master 'scheduler' program spawns 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; off sets of parallelized 'executor' programs using the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_spawn routine; these executors communicate back and forth 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the scheduler (only small amounts of information) via 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Bcast, MPI_Recv and MPI_Send routines (the 'C' library versions).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This software was originally developed on a multi-core Linux machine 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using OpenMpi v1.5.2, and works extremely well; now I'm attempting 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to port it to multi-core Windows 7 machine, using Visual Studios 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2012 and the precompiled OpenMpi v1.6.2 Windows release.  It all 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiles and links properly under VS2012.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When attempting to run this software on the Windows machine, the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scheduler program is able to spawn off the executor programs as 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intended, but everything chokes when scheduler sends its initial 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; broadcast.  There is slightly different behavior when launching the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scheduler via 'mpirun', or just by itself, as shown in the logs below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (the warning about the 127.0.0.1 address is benign - there is no 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loopback on Windows)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Users\cjr\Desktop\mpi_demo&gt;mpirun -np 1 mpi_scheduler.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  scheduler: MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: An invalid value was given for btl_tcp_if_exclude.  This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value will be ignored.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local host: sweet1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Value:      127.0.0.1/8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Message:    Did not find interface matching this subnet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt;MPI_COMM_WORLD size = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_UNIVERSE_SIZE = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scheduler: calling MPI_Comm_spawn for 4 instances of 'mpi_executor.exe'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1][[20141,1],0][..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp\btl_tcp_proc.c:128:..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \btl_tcp_proc.c] mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Process 1 ([[20141,1],0]) is on host: sweet1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Process 2 ([[20141,2],0]) is on host: sweet1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   BTLs attempted: tcp sm self
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  subtask rank = 1 out of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  subtask rank = 2 out of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  subtask rank = 0 out of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  subtask rank = 3 out of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scheduler: MPI_Comm_spawn completed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  scheduler broadcasting function string length = 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Proc0 wait for first broadcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Proc1 wait for first broadcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Proc2 wait for first broadcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Proc3 wait for first broadcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:6800] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:6800] *** on communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:6800] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:6800] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:02412] [[20141,0],0]-[[20141,1],0] mca_oob_tcp_msg_recv: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readv failed: Unknown error (108)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:02412] 4 more processes have sent help message 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help-mpi-btl-tcp.txt / invalid if_inexclude
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:02412] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sweet1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PID:  524
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:02412] [[20141,0],0]-[[20141,2],1] mca_oob_tcp_msg_recv: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readv failed: Unknown error (108)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:02412] [[20141,0],0]-[[20141,2],0] mca_oob_tcp_msg_recv: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readv failed: Unknown error (108)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:02412] [[20141,0],0]-[[20141,2],2] mca_oob_tcp_msg_recv: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readv failed: Unknown error (108)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun has exited due to process rank 0 with PID 488 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node sweet1 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:02412] 3 more processes have sent help message 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help-odls-default.txt / odls-default:could-not-kill
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Users\cjr\Desktop\mpi_demo&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Users\cjr\Desktop\mpi_demo&gt;mpi_scheduler.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  scheduler: MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: An invalid value was given for btl_tcp_if_exclude.  This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value will be ignored.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local host: sweet1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Value:      127.0.0.1/8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Message:    Did not find interface matching this subnet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt;MPI_COMM_WORLD size = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent: MPI_UNIVERSE_SIZE = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scheduler: calling MPI_Comm_spawn for 4 instances of 'mpi_executor.exe'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  executor: MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:04400] 1 more process has sent help message 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help-mpi-btl-tcp.txt / invalid if_inexclude
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:04400] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  subtask rank = 2 out of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  subtask rank = 1 out of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  subtask rank = 0 out of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  subtask rank = 3 out of 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scheduler: MPI_Comm_spawn completed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  scheduler broadcasting function string length = 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Proc0 wait for first broadcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Proc1 wait for first broadcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Proc2 wait for first broadcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Proc3 wait for first broadcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:04400] 3 more processes have sent help message 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help-mpi-btl-tcp.txt / invalid if_inexclude
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;&lt;&lt;&lt;***mpi_executor.exe processes are running, but 'hung' while 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wating for first broadcast***&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;&lt;&lt;&lt;***manually killed one of the 'mpi_executor.exe' processes; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; others subsequently exited***&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:04400] [[22257,0],0]-[[22257,2],3] mca_oob_tcp_msg_recv: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readv failed: Unknown error (108)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host: sweet1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PID:  568
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:04400] [[22257,0],0]-[[22257,2],0] mca_oob_tcp_msg_recv: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readv failed: Unknown error (108)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:04400] [[22257,0],0]-[[22257,2],1] mca_oob_tcp_msg_recv: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readv failed: Unknown error (108)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:04400] 2 more processes have sent help message 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help-odls-default.txt / odls-default:could-not-kill
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C:\Users\cjr\Desktop\mpi_demo&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The addition of the mpirun option &quot;-mca btl_tcp_if_exclude none&quot; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eliminates the benign 127.0.0.1 warning; the option &quot;-mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_base_verbose 100&quot; adds output that verifies that the tcp, sm and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; self btl modules are successfully initialized - nothing else seems 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be amiss!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have also tested this with the firewall completely disabled on the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Windows machine, with no change in behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have been unable to determine what the error codes indicate, and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; am puzzled why the behavior is different when using the 'mpirun' 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launcher.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have attached the prototype scheduler and executor program source 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code files, as well as files containing the Windows installation 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please help me figure out what is needed to enable this MPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CJ Roth
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This email is intended solely for the recipient. It may contain 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; privileged, proprietary or confidential information or material. If 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you are not the intended recipient, please delete this email and any 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attachments and notify the sender of the error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mpi_scheduler.cpp&gt;&lt;mpi_executor.cpp&gt;&lt;ompi_info-all.txt&gt;&lt;ompi_btl_info.txt&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2016/06/29395.php">http://www.open-mpi.org/community/lists/users/2016/06/29395.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this 
</span><br>
<span class="quotelev2">&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2016/06/29408.php">http://www.open-mpi.org/community/lists/users/2016/06/29408.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29412.php">http://www.open-mpi.org/community/lists/users/2016/06/29412.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29413/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29414.php">Jiri Kraus: "Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice"</a>
<li><strong>Previous message:</strong> <a href="29412.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when	using	MPI_Comm_spawn on Windows"</a>
<li><strong>In reply to:</strong> <a href="29412.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when	using	MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29416.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>Reply:</strong> <a href="29416.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
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
