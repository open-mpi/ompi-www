<?
$subject_val = "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 08:58:41 2016" -->
<!-- isoreceived="20160609125841" -->
<!-- sent="Thu, 9 Jun 2016 21:58:38 +0900" -->
<!-- isosent="20160609125838" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows" -->
<!-- id="CAAkFZ5u8x5Hjk6Fjb3rVnKP5AyLGUMowQz+nES69yuVLhB6duw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="95110DC63CB062409084890E698980AD1D83D5C0_at_VAW1PWINFMBXP1.veriskdom.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-09 08:58:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29419.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>Previous message:</strong> <a href="29417.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>In reply to:</strong> <a href="29416.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29420.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>Reply:</strong> <a href="29420.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christopher,
<br>
<p>just to be clear, MPI_Comm_spawn is *not* a basic functionality.
<br>
also, it might work on older windows (xp for example)
<br>
<p>you might want to report thus issue to whoever provided this Open MPI
<br>
pre-compiled library.
<br>
an other option is to use cygwin, it provides a fairly recent Open MPI and
<br>
the maintainer is active.
<br>
<p>other options include Linux (you can even run it in a virtual machine) or
<br>
OS X
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, June 9, 2016, Roth, Christopher &lt;CRoth_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the info, Gilles.
</span><br>
<span class="quotelev1">&gt; Being relatively new to MPI, I was not aware 'sm' did not work with
</span><br>
<span class="quotelev1">&gt; intercommunicators - I had assumed it was an option if the others were not
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running as an admin on this test machine.  When adding the option
</span><br>
<span class="quotelev1">&gt; '-mca btl_tcp_port_min_v4 2000', a higher port number is used, but that
</span><br>
<span class="quotelev1">&gt; does not alter the program behavior at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given that the initial development was on Linux using OpenMpi v1.5, I
</span><br>
<span class="quotelev1">&gt; would like to assume the Windows implementation would have mostly
</span><br>
<span class="quotelev1">&gt; equivalent feature development, and then improved in v1.6.  Apparently that
</span><br>
<span class="quotelev1">&gt; isn't true...
</span><br>
<span class="quotelev1">&gt; This is rather disappointing that a seemingly basic MPI communication
</span><br>
<span class="quotelev1">&gt; functionality is broken like this under Windows, even if it is an older
</span><br>
<span class="quotelev1">&gt; version.
</span><br>
<span class="quotelev1">&gt; Hacking on the Windows OpenMPI code is a rabbit hole that I do not want to
</span><br>
<span class="quotelev1">&gt; go down for numerous reasons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have briefly explored alternate Windows MPI libraries: the Windows
</span><br>
<span class="quotelev1">&gt; version of MPICH (from Microsoft) has not implemented MPI_Comm_Spawn; Intel
</span><br>
<span class="quotelev1">&gt; MPI has a licensing fee.  Do you any other alternatives to suggest?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt;] on behalf
</span><br>
<span class="quotelev1">&gt; of Gilles Gouaillardet [gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;]
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, June 08, 2016 7:58 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Processes unable to communicate when using
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Christopher,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the sm btl does not work with inter communicators and hence disqualifies
</span><br>
<span class="quotelev1">&gt; itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i guess this is what you interpreted as 'partially working'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am surprised you are using a privileged port (260 &lt; 1024), are you
</span><br>
<span class="quotelev1">&gt; running as an admin ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI is no more supported on windows, and the 1.6 series is pretty
</span><br>
<span class="quotelev1">&gt; antique these days...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regardless this, the source code points to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static __inline int opal_get_socket_errno(void) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int ret = WSAGetLastError();
</span><br>
<span class="quotelev1">&gt;     switch (ret) {
</span><br>
<span class="quotelev1">&gt;       case WSAEINTR: return EINTR;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      default: printf(&quot;Feature not implemented: %d %s\n&quot;, __LINE__,
</span><br>
<span class="quotelev1">&gt; __FILE__); return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt;     };
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at first, it is worth printing (ret) if the feature is not implemented.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then you can hack this part and add the missing case
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; recent windows (7) might use a newer one that was not available on older
</span><br>
<span class="quotelev1">&gt; ones (xp)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/9/2016 1:51 AM, Roth, Christopher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, that obvious error message states the basic problem - I was hoping
</span><br>
<span class="quotelev1">&gt; you had noticed a detail in the ompi_info output that would point to a
</span><br>
<span class="quotelev1">&gt; reason for it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Further test runs with the option '-mca btl tcp,self' (excluding 'sm' from
</span><br>
<span class="quotelev1">&gt; the mix) and '-mca btl_base_verbose 100', supply some more information:
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; [sweet1:04556] btl: tcp: attempting to connect() to address 10.3.2.109 on
</span><br>
<span class="quotelev1">&gt; port 260
</span><br>
<span class="quotelev1">&gt; [sweet1:04556] btl: tcp: attempting to connect() to address 10.3.2.109 on
</span><br>
<span class="quotelev1">&gt; port 260
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; The ip address is the host machine's.  The process ID corresponds to the
</span><br>
<span class="quotelev1">&gt; first of the executor programs.  The programs now hang at that point
</span><br>
<span class="quotelev1">&gt; (within the scheduler's MPI_Comm_spawn call and the executors' MPI_Init
</span><br>
<span class="quotelev1">&gt; calls), and and have to be manually killed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yet another test, adding the '-mca mpi_preconnect_mpi 1' (along with the
</span><br>
<span class="quotelev1">&gt; other two added arguments), gives more info:
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; [sweet1:04976] btl: tcp: attempting to connect() to address 10.3.2.109 on
</span><br>
<span class="quotelev1">&gt; port 260
</span><br>
<span class="quotelev1">&gt; [sweet1:04516] btl: tcp: attempting to connect() to address 10.3.2.109 on
</span><br>
<span class="quotelev1">&gt; port 260
</span><br>
<span class="quotelev1">&gt; [sweet1:03824] btl: tcp: attempting to connect() to address 10.3.2.109 on
</span><br>
<span class="quotelev1">&gt; port 260
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sweet1][[17613,2],1][..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp\btl_tcp_endpoint.c:486:..\..\..\openmpi-1.6.2\ompi\mca\btl
</span><br>
<span class="quotelev1">&gt; \tcp\btl_tcp_endpoint.c] received unexpected process identifier
</span><br>
<span class="quotelev1">&gt; [[17613,2],0]
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; function not implemented.  This option is not required, but I had to give
</span><br>
<span class="quotelev1">&gt; it a whirl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All of these test runs have the same behavior when performed with and
</span><br>
<span class="quotelev1">&gt; without the firewall active.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fact that the executor programs don't get past the MPI_Init call when
</span><br>
<span class="quotelev1">&gt; the 'sm' is excluded from btl set , implies that the 'sm' is at least
</span><br>
<span class="quotelev1">&gt; partially working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt;] on behalf
</span><br>
<span class="quotelev1">&gt; of Ralph Castain [rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;]
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
<span class="quotelev1">&gt; On Jun 8, 2016, at 4:30 AM, Roth, Christopher &lt;CRoth_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','CRoth_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What part of this output indicates this non-communicative configuration?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[20141,1],0]) is on host: sweet1
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[20141,2],0]) is on host: sweet1
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: tcp sm self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both procs are on the same host. Since they cannot communicate, it means
</span><br>
<span class="quotelev1">&gt; that (a) the shared memory component (sm) was unable to be used, and (b)
</span><br>
<span class="quotelev1">&gt; the TCP subsystem did not provide a usable address for the two procs to
</span><br>
<span class="quotelev1">&gt; reach each other. The former could mean that there wasn&#226;&#128;&#153;t enough room in
</span><br>
<span class="quotelev1">&gt; the tmp directory, and the latter indicates that the TCP subsystem isn&#226;&#128;&#153;t
</span><br>
<span class="quotelev1">&gt; configured to allow connections from its own local IP address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don&#226;&#128;&#153;t know anything about Windows configuration I&#226;&#128;&#153;m afraid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please recall, this is using the precompiled OpenMpi Windows installation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When the 'verbose' option is added, I see this sequence of output for the
</span><br>
<span class="quotelev1">&gt; scheduler and each of the executor processes:
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: component tcp register function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: component tcp open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: component sm has no register
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: component sm open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: component self has no register
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] mca: base: components_open: component self open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] select: initializing btl component sm
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] select: init of component sm returned success
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [sweet1:06412] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This output appears to show the btl components for TCP, SM and Self are
</span><br>
<span class="quotelev1">&gt; all available, but this is contradicted the error message shown in the
</span><br>
<span class="quotelev1">&gt; initial post  (&quot;At least one pair of MPI processes are unable to reach each
</span><br>
<span class="quotelev1">&gt; other for MPI communications....&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there is some sort of misconfiguration present, do you have a
</span><br>
<span class="quotelev1">&gt; suggestion for correcting the situation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','users-bounces_at_[hidden]');&gt;] on behalf
</span><br>
<span class="quotelev1">&gt; of Ralph Castain [ &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;]
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, June 07, 2016 3:39 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Processes unable to communicate when using
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just looking at this output, it would appear that Windows is configured in
</span><br>
<span class="quotelev1">&gt; a way that prevents the procs from connecting to each other via TCP while
</span><br>
<span class="quotelev1">&gt; on the same node, and shared memory is disqualifying itself - which leaves
</span><br>
<span class="quotelev1">&gt; no way for two procs on the same node to communicate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 7, 2016, at 12:16 PM, Roth, Christopher &lt;
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','CRoth_at_[hidden]');&gt;CRoth_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','CRoth_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have developed a set of C++ MPI programs for performing a series of
</span><br>
<span class="quotelev1">&gt; scientific calculations.  The master 'scheduler' program spawns off sets of
</span><br>
<span class="quotelev1">&gt; parallelized 'executor' programs using the MPI_Comm_spawn routine; these
</span><br>
<span class="quotelev1">&gt; executors communicate back and forth with the scheduler (only small amounts
</span><br>
<span class="quotelev1">&gt; of information) via MPI_Bcast, MPI_Recv and MPI_Send routines (the 'C'
</span><br>
<span class="quotelev1">&gt; library versions).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This software was originally developed on a multi-core Linux machine using
</span><br>
<span class="quotelev1">&gt; OpenMpi v1.5.2, and works extremely well; now I'm attempting to port it to
</span><br>
<span class="quotelev1">&gt; multi-core Windows 7 machine, using Visual Studios 2012 and the precompiled
</span><br>
<span class="quotelev1">&gt; OpenMpi v1.6.2 Windows release.  It all compiles and links properly under
</span><br>
<span class="quotelev1">&gt; VS2012.
</span><br>
<span class="quotelev1">&gt; When attempting to run this software on the Windows machine, the scheduler
</span><br>
<span class="quotelev1">&gt; program is able to spawn off the executor programs as intended, but
</span><br>
<span class="quotelev1">&gt; everything chokes when scheduler sends its initial broadcast.  There is
</span><br>
<span class="quotelev1">&gt; slightly different behavior when launching the scheduler via 'mpirun', or
</span><br>
<span class="quotelev1">&gt; just by itself, as shown in the logs below:
</span><br>
<span class="quotelev1">&gt; (the warning about the 127.0.0.1 address is benign - there is no loopback
</span><br>
<span class="quotelev1">&gt; on Windows)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\Users\cjr\Desktop\mpi_demo&gt;mpirun -np 1 mpi_scheduler.exe
</span><br>
<span class="quotelev1">&gt;  scheduler: MPI_Init
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: An invalid value was given for btl_tcp_if_exclude.  This
</span><br>
<span class="quotelev1">&gt; value will be ignored.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host: sweet1
</span><br>
<span class="quotelev1">&gt;   Value:      127.0.0.1/8
</span><br>
<span class="quotelev1">&gt;   Message:    Did not find interface matching this subnet
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --&gt;MPI_COMM_WORLD size = 1
</span><br>
<span class="quotelev1">&gt; parent: MPI_UNIVERSE_SIZE = 1
</span><br>
<span class="quotelev1">&gt; scheduler: calling MPI_Comm_spawn for 4 instances of 'mpi_executor.exe'
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sweet1][[20141,1],0][..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp\btl_tcp_proc.c:128:..\..\..\openmpi-1.6.2\ompi\mca\btl\tcp
</span><br>
<span class="quotelev1">&gt; \btl_tcp_proc.c] mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[20141,1],0]) is on host: sweet1
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[20141,2],0]) is on host: sweet1
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: tcp sm self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  subtask rank = 1 out of 4
</span><br>
<span class="quotelev1">&gt;  subtask rank = 2 out of 4
</span><br>
<span class="quotelev1">&gt;  subtask rank = 0 out of 4
</span><br>
<span class="quotelev1">&gt;  subtask rank = 3 out of 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; scheduler: MPI_Comm_spawn completed
</span><br>
<span class="quotelev1">&gt;  scheduler broadcasting function string length = 4
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; Proc0 wait for first broadcast
</span><br>
<span class="quotelev1">&gt; Proc1 wait for first broadcast
</span><br>
<span class="quotelev1">&gt; Proc2 wait for first broadcast
</span><br>
<span class="quotelev1">&gt; Proc3 wait for first broadcast
</span><br>
<span class="quotelev1">&gt; [sweet1:6800] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev1">&gt; [sweet1:6800] *** on communicator
</span><br>
<span class="quotelev1">&gt; [sweet1:6800] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [sweet1:6800] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; [sweet1:02412] [[20141,0],0]-[[20141,1],0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev1">&gt; failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [sweet1:02412] 4 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-tcp.txt / invalid if_inexclude
</span><br>
<span class="quotelev1">&gt; [sweet1:02412] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev1">&gt; all help / error messages
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host: sweet1
</span><br>
<span class="quotelev1">&gt; PID:  524
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [sweet1:02412] [[20141,0],0]-[[20141,2],1] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev1">&gt; failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [sweet1:02412] [[20141,0],0]-[[20141,2],0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev1">&gt; failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [sweet1:02412] [[20141,0],0]-[[20141,2],2] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev1">&gt; failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 488 on
</span><br>
<span class="quotelev1">&gt; node sweet1 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [sweet1:02412] 3 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-odls-default.txt / odls-default:could-not-kill
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\Users\cjr\Desktop\mpi_demo&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ====================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\Users\cjr\Desktop\mpi_demo&gt;mpi_scheduler.exe
</span><br>
<span class="quotelev1">&gt;  scheduler: MPI_Init
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: An invalid value was given for btl_tcp_if_exclude.  This
</span><br>
<span class="quotelev1">&gt; value will be ignored.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host: sweet1
</span><br>
<span class="quotelev1">&gt;   Value:      127.0.0.1/8
</span><br>
<span class="quotelev1">&gt;   Message:    Did not find interface matching this subnet
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --&gt;MPI_COMM_WORLD size = 1
</span><br>
<span class="quotelev1">&gt; parent: MPI_UNIVERSE_SIZE = 1
</span><br>
<span class="quotelev1">&gt; scheduler: calling MPI_Comm_spawn for 4 instances of 'mpi_executor.exe'
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt;  executor: MPI_Init
</span><br>
<span class="quotelev1">&gt; [sweet1:04400] 1 more process has sent help message help-mpi-btl-tcp.txt /
</span><br>
<span class="quotelev1">&gt; invalid if_inexclude
</span><br>
<span class="quotelev1">&gt; [sweet1:04400] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev1">&gt; all help / error messages
</span><br>
<span class="quotelev1">&gt;  subtask rank = 2 out of 4
</span><br>
<span class="quotelev1">&gt;  subtask rank = 1 out of 4
</span><br>
<span class="quotelev1">&gt;  subtask rank = 0 out of 4
</span><br>
<span class="quotelev1">&gt;  subtask rank = 3 out of 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; scheduler: MPI_Comm_spawn completed
</span><br>
<span class="quotelev1">&gt;  scheduler broadcasting function string length = 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; child: MPI_UNIVERSE_SIZE = 4
</span><br>
<span class="quotelev1">&gt; Proc0 wait for first broadcast
</span><br>
<span class="quotelev1">&gt; Proc1 wait for first broadcast
</span><br>
<span class="quotelev1">&gt; Proc2 wait for first broadcast
</span><br>
<span class="quotelev1">&gt; Proc3 wait for first broadcast
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sweet1:04400] 3 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-tcp.txt / invalid if_inexclude
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;&lt;***mpi_executor.exe processes are running, but 'hung' while wating for
</span><br>
<span class="quotelev1">&gt; first broadcast***&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;&lt;***manually killed one of the 'mpi_executor.exe' processes; others
</span><br>
<span class="quotelev1">&gt; subsequently exited***&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sweet1:04400] [[22257,0],0]-[[22257,2],3] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev1">&gt; failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host: sweet1
</span><br>
<span class="quotelev1">&gt; PID:  568
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [sweet1:04400] [[22257,0],0]-[[22257,2],0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev1">&gt; failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [sweet1:04400] [[22257,0],0]-[[22257,2],1] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev1">&gt; failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [sweet1:04400] 2 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-odls-default.txt / odls-default:could-not-kill
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\Users\cjr\Desktop\mpi_demo&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The addition of the mpirun option &quot;-mca btl_tcp_if_exclude none&quot;
</span><br>
<span class="quotelev1">&gt; eliminates the benign 127.0.0.1 warning; the option &quot;-mca btl_base_verbose
</span><br>
<span class="quotelev1">&gt; 100&quot; adds output that verifies that the tcp, sm and self btl modules are
</span><br>
<span class="quotelev1">&gt; successfully initialized - nothing else seems to be amiss!
</span><br>
<span class="quotelev1">&gt; I have also tested this with the firewall completely disabled on the
</span><br>
<span class="quotelev1">&gt; Windows machine, with no change in behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been unable to determine what the error codes indicate, and am
</span><br>
<span class="quotelev1">&gt; puzzled why the behavior is different when using the 'mpirun' launcher.
</span><br>
<span class="quotelev1">&gt; I have attached the prototype scheduler and executor program source code
</span><br>
<span class="quotelev1">&gt; files, as well as files containing the Windows installation ompi
</span><br>
<span class="quotelev1">&gt; information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help me figure out what is needed to enable this MPI communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; CJ Roth
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This email is intended solely for the recipient. It may contain
</span><br>
<span class="quotelev1">&gt; privileged, proprietary or confidential information or material. If you are
</span><br>
<span class="quotelev1">&gt; not the intended recipient, please delete this email and any attachments
</span><br>
<span class="quotelev1">&gt; and notify the sender of the error.
</span><br>
<span class="quotelev1">&gt; &lt;mpi_scheduler.cpp&gt;&lt;mpi_executor.cpp&gt;&lt;ompi_info-all.txt&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_btl_info.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription:  &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29395.php">http://www.open-mpi.org/community/lists/users/2016/06/29395.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29395.php">http://www.open-mpi.org/community/lists/users/2016/06/29395.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription:  &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29408.php">http://www.open-mpi.org/community/lists/users/2016/06/29408.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29408.php">http://www.open-mpi.org/community/lists/users/2016/06/29408.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29412.php">http://www.open-mpi.org/community/lists/users/2016/06/29412.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29418/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29419.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>Previous message:</strong> <a href="29417.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>In reply to:</strong> <a href="29416.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29420.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>Reply:</strong> <a href="29420.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
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
