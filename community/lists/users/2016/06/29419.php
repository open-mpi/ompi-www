<?
$subject_val = "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 09:43:25 2016" -->
<!-- isoreceived="20160609134325" -->
<!-- sent="Thu, 9 Jun 2016 13:42:48 +0000" -->
<!-- isosent="20160609134248" -->
<!-- name="Roth, Christopher" -->
<!-- email="CRoth_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows" -->
<!-- id="95110DC63CB062409084890E698980AD1D83D5FB_at_VAW1PWINFMBXP1.veriskdom.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="92FEBD3C-7C19-4164-8617-9B378F8D7B42_at_cisco.com" -->
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
<strong>From:</strong> Roth, Christopher (<em>CRoth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-09 09:42:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29420.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>Previous message:</strong> <a href="29418.php">Gilles Gouaillardet: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>In reply to:</strong> <a href="29417.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29418.php">Gilles Gouaillardet: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff:
<br>
<p>Thanks for the extremely informative reply!
<br>
I can appreciate the reasons for dropping of Windows support.  The reason for wanting a Windows version of this scientific calculation software is to allow the non-programmerish end-users be able to run it 'out of the box' using precompiled Windows executables.
<br>
I do not know much about Cygwin; I'll look into that and see what it can do for my situation.
<br>
Good info to know about 'sm' and why it doesn't play well with MPI_Comm_spawn.
<br>
<p>I had wondered about recoding to _not_ use MPI_Comm_spawn, but (a) this works absolutely fabulously under Linux (both multi-core systems and clusters); and (b) any such changes would require significant changes to the architecture of the programs depending on it.  Given this alternative, the licensing fee for the Intel MPI library may not be an obstacle anymore.
<br>
A Linux VM on a Windows machine could be a possible solution, except that some of the end-users have their Windows boxes locked down tight, for security reasons.
<br>
I also thought the TCP connection issue was odd; I got the same results on both my work and home Windows computers.
<br>
<p><p>________________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Jeff Squyres (jsquyres) [jsquyres_at_[hidden]]
<br>
Sent: Thursday, June 09, 2016 8:56 AM
<br>
To: Open MPI User's List
<br>
Subject: Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows
<br>
<p>I think there were a few not-entirely-correct data points in this thread. Let me clarify a few things:
<br>
<p>1. Yes, Open MPI suspended native Windows support a while back. Native windows support is simply not a popular use case, and therefore we couldn't justify spending the time on it (not the mention the fact that no one in the community had enough Windows development experience to keep a native port alive and well-maintained).
<br>
<p>2. That being said, AFAIK, Open MPI still compiles and runs fine -- albeit with restrictions -- in a Cygwin environment on Windows. This was deemed &quot;good enough&quot; by the Open MPI community (especially given the points from #1). Recent binary versions of Open MPI are available courtesy of the Cygwin project: <a href="https://cygwin.com/cgi-bin2/package-grep.cgi?grep=openmpi">https://cygwin.com/cgi-bin2/package-grep.cgi?grep=openmpi</a>.
<br>
<p>3. &quot;sm&quot; works fine with intercommunicators. What it doesn't do is handle the expansion of its shared memory allocation when new MPI processes are added via the dynamic APIs (e.g., MPI_COMM_SPAWN). We've talked about removing this restriction in &quot;vader&quot; (the next-gen version of the &quot;sm&quot; BTL -- yes, I know, the name is not intuitive at all...), but I don't think that this has been an important enough feature for anyone to spend time on it. As always, patches are welcome. ;-)
<br>
<p>-----
<br>
<p>It's been pointed out, but Open MPI 1.6.5 is pretty ancient (it was released Jun of 2013). Per #2, you might want to try the latest stable release (e.g., via Cygwin binaries).
<br>
<p>There's two other options that may not have been mentioned yet:
<br>
<p>1. Re-code your application to not use the MPI dynamic APIs (e.g., MPI_COMM_SPAWN). I know this is not quite what you want to do, but given all the other restrictions and data points, it might be your least-sucky option.
<br>
<p>2. Run a VM on your Windows machine with some flavor of Linux. That would give you access to a much greater set of Open MPI features (i.e., significantly fewer restrictions).
<br>
<p>As for why your machine cannot connect to itself using its own IP addresses, that's a bit odd. It suggests that you have some kind of blocking software in there somewhere. We probably don't have enough Windows experience here in the community to help with that.
<br>
<p>Hope that helps!
<br>
<p><p><p><span class="quotelev1">&gt; On Jun 9, 2016, at 5:06 AM, Roth, Christopher &lt;CRoth_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the info, Gilles.
</span><br>
<span class="quotelev1">&gt; Being relatively new to MPI, I was not aware 'sm' did not work with intercommunicators - I had assumed it was an option if the others were not available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running as an admin on this test machine. When adding the option '-mca btl_tcp_port_min_v4 2000', a higher port number is used, but that does not alter the program behavior at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given that the initial development was on Linux using OpenMpi v1.5, I would like to assume the Windows implementation would have mostly equivalent feature development, and then improved in v1.6. Apparently that isn't true...
</span><br>
<span class="quotelev1">&gt; This is rather disappointing that a seemingly basic MPI communication functionality is broken like this under Windows, even if it is an older version.
</span><br>
<span class="quotelev1">&gt; Hacking on the Windows OpenMPI code is a rabbit hole that I do not want to go down for numerous reasons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have briefly explored alternate Windows MPI libraries: the Windows version of MPICH (from Microsoft) has not implemented MPI_Comm_Spawn; Intel MPI has a licensing fee. Do you any other alternatives to suggest?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Gilles Gouaillardet [gilles_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 08, 2016 7:58 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Christopher,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the sm btl does not work with inter communicators and hence disqualifies itself.
</span><br>
<span class="quotelev1">&gt; i guess this is what you interpreted as 'partially working'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am surprised you are using a privileged port (260 &lt; 1024), are you running as an admin ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI is no more supported on windows, and the 1.6 series is pretty antique these days...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regardless this, the source code points to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static __inline int opal_get_socket_errno(void) {
</span><br>
<span class="quotelev1">&gt; int ret = WSAGetLastError();
</span><br>
<span class="quotelev1">&gt; switch (ret) {
</span><br>
<span class="quotelev1">&gt; case WSAEINTR: return EINTR;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; default: printf(&quot;Feature not implemented: %d %s\n&quot;, __LINE__, __FILE__); return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at first, it is worth printing (ret) if the feature is not implemented.
</span><br>
<span class="quotelev1">&gt; then you can hack this part and add the missing case
</span><br>
<span class="quotelev1">&gt; recent windows (7) might use a newer one that was not available on older ones (xp)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/9/2016 1:51 AM, Roth, Christopher wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Well, that obvious error message states the basic problem - I was hoping you had noticed a detail in the ompi_info output that would point to a reason for it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Further test runs with the option '-mca btl tcp,self' (excluding 'sm' from the mix) and '-mca btl_base_verbose 100', supply some more information:
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:04556] btl: tcp: attempting to connect() to address 10.3.2.109 on port 260
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:04556] btl: tcp: attempting to connect() to address 10.3.2.109 on port 260
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; The ip address is the host machine's. The process ID corresponds to the first of the executor programs. The programs now hang at that point (within the scheduler's MPI_Comm_spawn call and the executors' MPI_Init calls), and and have to be manually killed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yet another test, adding the '-mca mpi_preconnect_mpi 1' (along with the other two added arguments), gives more info:
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:04976] btl: tcp: attempting to connect() to address 10.3.2.109 on port 260
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:04516] btl: tcp: attempting to connect() to address 10.3.2.109 on port 260
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1:03824] btl: tcp: attempting to connect() to address 10.3.2.109 on port 260
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1][[17613,2],1][..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp\btl_tcp_endpoint.c:486:..\..\..\openmpi-1.6.2\ompi\mca\btl
</span><br>
<span class="quotelev2">&gt;&gt; \tcp\btl_tcp_endpoint.c] received unexpected process identifier [[17613,2],0]
</span><br>
<span class="quotelev2">&gt;&gt; [sweet1][[17613,2],0][..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp\btl_tcp_frag.c:215:..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp
</span><br>
<span class="quotelev2">&gt;&gt; \btl_tcp_frag.c] Feature not implemented: 130 D:/temp/OpenMPI/openmpi-1.6.2/opal/include\opal/opal_socket_errno.h
</span><br>
<span class="quotelev2">&gt;&gt; Feature not implemented: 130 D:/temp/OpenMPI/openmpi-1.6.2/opal/include\opal/opal_socket_errno.h
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_tcp_frag_recv: readv failed: Unknown error (-1)
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; With the 'preconnect' option, it sets up the TCP link for all of the executor processes, but then runs into an actual error, regarding some function not implemented. This option is not required, but I had to give it a whirl.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All of these test runs have the same behavior when performed with and without the firewall active.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The fact that the executor programs don't get past the MPI_Init call when the 'sm' is excluded from btl set , implies that the 'sm' is at least partially working.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 08, 2016 10:47 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 8, 2016, at 4:30 AM, Roth, Christopher &lt;CRoth_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What part of this output indicates this non-communicative configuration?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications. This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes. This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other. This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 ([[20141,1],0]) is on host: sweet1
</span><br>
<span class="quotelev2">&gt;&gt; Process 2 ([[20141,2],0]) is on host: sweet1
</span><br>
<span class="quotelev2">&gt;&gt; BTLs attempted: tcp sm self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; &#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;&#151;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Both procs are on the same host. Since they cannot communicate, it means that (a) the shared memory component (sm) was unable to be used, and (b) the TCP subsystem did not provide a usable address for the two procs to reach each other. The former could mean that there wasn&#146;t enough room in the tmp directory, and the latter indicates that the TCP subsystem isn&#146;t configured to allow connections from its own local IP address.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don&#146;t know anything about Windows configuration I&#146;m afraid.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please recall, this is using the precompiled OpenMpi Windows installation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When the 'verbose' option is added, I see this sequence of output for the scheduler and each of the executor processes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] mca: base: components_open: component tcp register function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] select: initializing btl component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] select: init of component tcp returned success
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] select: initializing btl component sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] select: init of component sm returned success
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] select: initializing btl component self
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sweet1:06412] select: init of component self returned success
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This output appears to show the btl components for TCP, SM and Self are all available, but this is contradicted the error message shown in the initial post (&quot;At least one pair of MPI processes are unable to reach each other for MPI communications....&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If there is some sort of misconfiguration present, do you have a suggestion for correcting the situation?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Tuesday, June 07, 2016 3:39 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just looking at this output, it would appear that Windows is configured in a way that prevents the procs from connecting to each other via TCP while on the same node, and shared memory is disqualifying itself - which leaves no way for two procs on the same node to communicate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 7, 2016, at 12:16 PM, Roth, Christopher &lt;CRoth_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have developed a set of C++ MPI programs for performing a series of scientific calculations. The master 'scheduler' program spawns off sets of parallelized 'executor' programs using the MPI_Comm_spawn routine; these executors communicate back and forth with the scheduler (only small amounts of information) via MPI_Bcast, MPI_Recv and MPI_Send routines (the 'C' library versions).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This software was originally developed on a multi-core Linux machine using OpenMpi v1.5.2, and works extremely well; now I'm attempting to port it to multi-core Windows 7 machine, using Visual Studios 2012 and the precompiled OpenMpi v1.6.2 Windows release. It all compiles and links properly under VS2012.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When attempting to run this software on the Windows machine, the scheduler program is able to spawn off the executor programs as intended, but everything chokes when scheduler sends its initial broadcast. There is slightly different behavior when launching the scheduler via 'mpirun', or just by itself, as shown in the logs below:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (the warning about the 127.0.0.1 address is benign - there is no loopback on Windows)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C:\Users\cjr\Desktop\mpi_demo&gt;mpirun -np 1 mpi_scheduler.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scheduler: MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: An invalid value was given for btl_tcp_if_exclude. This
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; value will be ignored.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Local host: sweet1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Value: 127.0.0.1/8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message: Did not find interface matching this subnet
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --&gt;MPI_COMM_WORLD size = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parent: MPI_UNIVERSE_SIZE = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scheduler: calling MPI_Comm_spawn for 4 instances of 'mpi_executor.exe'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; executor: MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; executor: MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; executor: MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; executor: MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1][[20141,1],0][..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp\btl_tcp_proc.c:128:..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; \btl_tcp_proc.c] mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI communications. This means that no Open MPI device has indicated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that it can be used to communicate between these processes. This is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each other. This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 1 ([[20141,1],0]) is on host: sweet1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 2 ([[20141,2],0]) is on host: sweet1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BTLs attempted: tcp sm self
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subtask rank = 1 out of 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subtask rank = 2 out of 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subtask rank = 0 out of 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subtask rank = 3 out of 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scheduler: MPI_Comm_spawn completed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scheduler broadcasting function string length = 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Proc0 wait for first broadcast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Proc1 wait for first broadcast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Proc2 wait for first broadcast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Proc3 wait for first broadcast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:6800] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:6800] *** on communicator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:6800] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:6800] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:02412] [[20141,0],0]-[[20141,1],0] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:02412] 4 more processes have sent help message help-mpi-btl-tcp.txt / invalid if_inexclude
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:02412] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Host: sweet1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PID: 524
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:02412] [[20141,0],0]-[[20141,2],1] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:02412] [[20141,0],0]-[[20141,2],0] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:02412] [[20141,0],0]-[[20141,2],2] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun has exited due to process rank 0 with PID 488 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node sweet1 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:02412] 3 more processes have sent help message help-odls-default.txt / odls-default:could-not-kill
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C:\Users\cjr\Desktop\mpi_demo&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ====================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C:\Users\cjr\Desktop\mpi_demo&gt;mpi_scheduler.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scheduler: MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: An invalid value was given for btl_tcp_if_exclude. This
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; value will be ignored.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Local host: sweet1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Value: 127.0.0.1/8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message: Did not find interface matching this subnet
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --&gt;MPI_COMM_WORLD size = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parent: MPI_UNIVERSE_SIZE = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scheduler: calling MPI_Comm_spawn for 4 instances of 'mpi_executor.exe'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; executor: MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; executor: MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; executor: MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; executor: MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:04400] 1 more process has sent help message help-mpi-btl-tcp.txt / invalid if_inexclude
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:04400] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subtask rank = 2 out of 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subtask rank = 1 out of 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subtask rank = 0 out of 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subtask rank = 3 out of 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scheduler: MPI_Comm_spawn completed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scheduler broadcasting function string length = 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Proc0 wait for first broadcast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Proc1 wait for first broadcast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Proc2 wait for first broadcast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Proc3 wait for first broadcast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:04400] 3 more processes have sent help message help-mpi-btl-tcp.txt / invalid if_inexclude
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;&lt;&lt;&lt;***mpi_executor.exe processes are running, but 'hung' while wating for first broadcast***&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;&lt;&lt;&lt;***manually killed one of the 'mpi_executor.exe' processes; others subsequently exited***&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:04400] [[22257,0],0]-[[22257,2],3] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Host: sweet1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PID: 568
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:04400] [[22257,0],0]-[[22257,2],0] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:04400] [[22257,0],0]-[[22257,2],1] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sweet1:04400] 2 more processes have sent help message help-odls-default.txt / odls-default:could-not-kill
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C:\Users\cjr\Desktop\mpi_demo&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The addition of the mpirun option &quot;-mca btl_tcp_if_exclude none&quot; eliminates the benign 127.0.0.1 warning; the option &quot;-mca btl_base_verbose 100&quot; adds output that verifies that the tcp, sm and self btl modules are successfully initialized - nothing else seems to be amiss!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have also tested this with the firewall completely disabled on the Windows machine, with no change in behavior.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have been unable to determine what the error codes indicate, and am puzzled why the behavior is different when using the 'mpirun' launcher.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have attached the prototype scheduler and executor program source code files, as well as files containing the Windows installation ompi information.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please help me figure out what is needed to enable this MPI communication.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CJ Roth
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This email is intended solely for the recipient. It may contain privileged, proprietary or confidential information or material. If you are not the intended recipient, please delete this email and any attachments and notify the sender of the error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mpi_scheduler.cpp&gt;&lt;mpi_executor.cpp&gt;&lt;ompi_info-all.txt&gt;&lt;ompi_btl_info.txt&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29395.php">http://www.open-mpi.org/community/lists/users/2016/06/29395.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29408.php">http://www.open-mpi.org/community/lists/users/2016/06/29408.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29412.php">http://www.open-mpi.org/community/lists/users/2016/06/29412.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29416.php">http://www.open-mpi.org/community/lists/users/2016/06/29416.php</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29417.php">http://www.open-mpi.org/community/lists/users/2016/06/29417.php</a>
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29419/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29420.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>Previous message:</strong> <a href="29418.php">Gilles Gouaillardet: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>In reply to:</strong> <a href="29417.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29418.php">Gilles Gouaillardet: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
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
