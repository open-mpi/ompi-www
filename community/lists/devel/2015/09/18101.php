<?
$subject_val = "Re: [OMPI devel] PMIX vs Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 23 20:45:11 2015" -->
<!-- isoreceived="20150924004511" -->
<!-- sent="Thu, 24 Sep 2015 09:45:02 +0900" -->
<!-- isosent="20150924004502" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PMIX vs Solaris" -->
<!-- id="5603478E.6020204_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA17bq_h=rGPeV39ELOK5owrnC4VxVSC+fpgPf2UYPmUQSQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PMIX vs Solaris<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-23 20:45:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18102.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Previous message:</strong> <a href="18100.php">Ralph Castain: "[OMPI devel] Debugging core files on Mac"</a>
<li><strong>In reply to:</strong> <a href="18093.php">Paul Hargrove: "Re: [OMPI devel] PMIX vs Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18102.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Reply:</strong> <a href="18102.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>the root cause is
<br>
getsockopt(..., SOL_SOCKET, SO_RCVTIMEO,...)
<br>
fails with errno ENOPROTOOPT on solaris 11.2
<br>
<p>the attached patch is a proof of concept and works for me :
<br>
/* if ENOPROTOOPT, do not try to set and restore SO_RCVTIMEO */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 9/21/2015 2:16 PM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just as you say:
</span><br>
<span class="quotelev1">&gt; The first 64s pause was before the hwloc error message appeared.
</span><br>
<span class="quotelev1">&gt; The second was after the second server_setup_fork appears, and before 
</span><br>
<span class="quotelev1">&gt; whatever line came after that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if stdio buffering my be &quot;distorting&quot; the placement of 
</span><br>
<span class="quotelev1">&gt; the pause relative to the lines of output.
</span><br>
<span class="quotelev1">&gt; However, prior to your patch the entire failed mpirun was around 1s.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No allocation.
</span><br>
<span class="quotelev1">&gt; No resource manager.
</span><br>
<span class="quotelev1">&gt; Just a single workstation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Sep 20, 2015 at 9:32 PM, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ?? Just so this old fossilized brain gets this right: you are
</span><br>
<span class="quotelev1">&gt;     saying there was a 64s pause before the hwloc error appeared, and
</span><br>
<span class="quotelev1">&gt;     then another 64s pause after the second server_setup_fork message
</span><br>
<span class="quotelev1">&gt;     appeared?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If that&#146;s true, then I&#146;m chasing the wrong problem - it sounds
</span><br>
<span class="quotelev1">&gt;     like something is messed up in the mpirun startup. Did you have
</span><br>
<span class="quotelev1">&gt;     more than one node in the allocation by chance? I&#146;m wondering if
</span><br>
<span class="quotelev1">&gt;     we are getting held up by something in the daemon launch/callback
</span><br>
<span class="quotelev1">&gt;     area.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Sep 20, 2015, at 4:08 PM, Paul Hargrove &lt;phhargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Still failing with that patch, but with the addition of a fairly
</span><br>
<span class="quotelev2">&gt;&gt;     long pause (64s) before the first error message appears, and
</span><br>
<span class="quotelev2">&gt;&gt;     again after the second &quot;server setup_fork&quot; (64s again)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     New output is attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Sun, Sep 20, 2015 at 2:15 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Argh - found a typo in the output line. Could you please try
</span><br>
<span class="quotelev2">&gt;&gt;         the attached patch and do it again? This might fix it, but if
</span><br>
<span class="quotelev2">&gt;&gt;         not it will provide me with some idea of the returned error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks
</span><br>
<span class="quotelev2">&gt;&gt;         Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On Sep 20, 2015, at 12:40 PM, Paul Hargrove
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Yes, it is definitely at 10.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Another attempt is attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On Sun, Sep 20, 2015 at 8:19 AM, Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Paul - can you please confirm that you gave mpirun a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             level of 10 for the pmix_base_verbose param? This output
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             isn&#146;t what I would have expected from that level - it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             looks more like the verbosity was set to 5, and so the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             error number isn&#146;t printed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             On Sep 20, 2015, at 3:42 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Paul,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             I do not remember it like that ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             at that time, the issue in ompi was that the global
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             errno was uses instead of the per thread errno.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             though the man pages tells -mt should be used fir
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             multithreaded apps, you tried -D_REENTRANT on all your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             platforms, and it was enough to get the expected result.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             I just wanted to check pmix1xx (sub)configure did
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             correctly pass the -D_REENTRANT flag, and it does. so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             this is very likely a new and unrelated error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             On Sunday, September 20, 2015, Paul Hargrove
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Gilles,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Yes every $CC invocation in opal/mca/pmix/pmix1xx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 includes &quot;-D_REENTRANT&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 However, they don't include &quot;-mt&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 I believe we concluded (when we had problems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 previously) that &quot;-mt&quot; was the proper flag (at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 compile and link) for multi-threaded with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Studio compilers.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 On Sat, Sep 19, 2015 at 11:29 PM, Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Gouaillardet&lt;gilles.gouaillardet_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Paul,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Can you please double check pmix1xx is compiled
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     with -D_REENTRANT ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     We ran into similar issues in the past, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     they only occurred with Solaris
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     On Sunday, September 20, 2015, Paul Hargrove
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         The output from the requested run is attached.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         On Sat, Sep 19, 2015 at 9:46 PM, Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Castain&lt;rhc_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             Ah, okay - that makes more sense. I&#146;ll
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             have to let Brice see if he can figure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             out how to silence the hwloc error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             message as I can&#146;t find where it came
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             from. The other errors are real and are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             the reason why the job was terminated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             The problem is that we are trying to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             establish a communication between the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             app and the daemon via unix domain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             socket, and we failed to do so. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             error tells me that we were able to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             create and connect to the socket, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             failed when the daemon tried to do a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             blocking send to the app.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             Can you rerun it with -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             pmix_base_verbose 10? It will tell us
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             the value of the error number that was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             returned
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             On Sep 19, 2015, at 9:37 PM, Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             No it did not run.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             The complete output (which I really
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             should have included in the first
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             place) is below.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             -Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             $ mpirun -mca btl sm,self -np 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             examples/ring_c'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Error opening /devices/pci_at_0,0:reg:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Permission denied
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             [pcp-d-3:26054] PMIX ERROR: ERROR in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             /export/home/phargrov/OMPI/openmpi-master-solaris11-x64-ss12u3/openmpi-dev-2559-g567c9e3/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             at line 181
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             [pcp-d-3:26053] PMIX ERROR:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             UNREACHABLE in file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             /export/home/phargrov/OMPI/openmpi-master-solaris11-x64-ss12u3/openmpi-dev-2559-g567c9e3/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_listener.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             at line 463
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             It looks like MPI_INIT failed for some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             likely to abort. There are many
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             fail during MPI_INIT; some of which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             are due to configuration or environment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             problems. This failure appears to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             an internal failure; here's some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             additional information (which may only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             developer):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             ompi_mpi_init: ompi_rte_init failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             --&gt; Returned &quot;(null)&quot; (-43) instead of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             *** MPI_ERRORS_ARE_FATAL (processes in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             this communicator will now abort,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             [pcp-d-3:26054] Local abort before
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             MPI_INIT completed completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             successfully, but am not able to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             aggregate error messages, and not able
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             to guarantee that all other processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             were killed!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Primary job  terminated normally, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             1 process returned
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             a non-zero exit code.. Per
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             mpirun detected that one or more
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             thus causing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             the job to be terminated. The first
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             process to do so was:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Process name: [[11371,1],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Exit code:    1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             On Sat, Sep 19, 2015 at 8:50 PM, Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Castain&lt;rhc_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 Paul, can you clarify something
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 for me? The error in this case
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 indicates that the client wasn&#146;t
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 able to reach the daemon - this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 should have resulted in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 termination of the job. Did the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 job actually run?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                 On Sep 18, 2015, at 2:50 AM,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                 wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                 I'm on travel right now, but it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                 should be an easy fix when I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                 return. Sorry for the annoyance
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                 On Thu, Sep 17, 2015 at 11:13 PM,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                 Paul
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                 Hargrove&lt;phhargrove_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     Any suggestion how I (as a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     non-root user) can avoid
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     seeing this hwloc error
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     message on every run?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     -Paul
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     On Thu, Sep 17, 2015 at 11:00
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     PM, Gilles
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     Gouaillardet&lt;gilles_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                         Paul,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                         IIRC, the &quot;Permission
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                         denied&quot; is coming from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                         hwloc that cannot collect
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                         all the info it would like.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                         Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                         Gilles
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                         On 9/18/2015 2:34 PM,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                         Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Tried tonight's master
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         tarball on Solaris 11.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         on x86-64 with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Studio Compilers
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                          (default ILP32 output)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         and saw the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         result
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         $ mpirun -mca btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         sm,self -np 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         examples/ring_c'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Error opening
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         /devices/pci_at_0,0:reg:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Permission denied
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         [pcp-d-4:00492] PMIX
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         ERROR: ERROR in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         /export/home/phargrov/OMPI/openmpi-master-solaris11-x86-ss12u3/openmpi-dev-2559-g567c9e3/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         at line 181
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         [pcp-d-4:00491] PMIX
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         ERROR: UNREACHABLE in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         /export/home/phargrov/OMPI/openmpi-master-solaris11-x86-ss12u3/openmpi-dev-2559-g567c9e3/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_listener.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         at line 463
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         I don't know if the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Permission denied error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         is related to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         subsequent PMIX errors,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         but any message that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         says &quot;UNREACHABLE&quot; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         clearly worth reporting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Paul H. Hargrove
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Computer Languages &amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Systems Software (CLaSS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Computer Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Department          
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Tel:+1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Lawrence Berkeley
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Fax:+1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                         Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2015/09/18074.php">http://www.open-mpi.org/community/lists/devel/2015/09/18074.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                         devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                         devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                         Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                         Link to this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                         post:<a href="http://www.open-mpi.org/community/lists/devel/2015/09/18075.php">http://www.open-mpi.org/community/lists/devel/2015/09/18075.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     Paul H. Hargrove
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     Computer Languages &amp; Systems
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     Computer Science Department  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                             Tel:+1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     Lawrence Berkeley National
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     Fax:+1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     Link to this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                     post:<a href="http://www.open-mpi.org/community/lists/devel/2015/09/18076.php">http://www.open-mpi.org/community/lists/devel/2015/09/18076.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 Link to this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 post:<a href="http://www.open-mpi.org/community/lists/devel/2015/09/18078.php">http://www.open-mpi.org/community/lists/devel/2015/09/18078.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Paul H. Hargrove PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Computer Languages &amp; Systems Software
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Computer Science Department          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Tel:+1-510-495-2352
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Lawrence Berkeley National Laboratory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Fax:+1-510-486-6900
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Link to this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             post:<a href="http://www.open-mpi.org/community/lists/devel/2015/09/18080.php">http://www.open-mpi.org/community/lists/devel/2015/09/18080.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             Link to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                             post:<a href="http://www.open-mpi.org/community/lists/devel/2015/09/18081.php">http://www.open-mpi.org/community/lists/devel/2015/09/18081.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Paul H. Hargrove PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Computer Languages &amp; Systems Software
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         (CLaSS) Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Computer Science Department          
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Tel:+1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Lawrence Berkeley National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Fax:+1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Link to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     post:<a href="http://www.open-mpi.org/community/lists/devel/2015/09/18083.php">http://www.open-mpi.org/community/lists/devel/2015/09/18083.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Paul H. Hargrove PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Computer Science Department           Tel:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Lawrence Berkeley National Laboratory Fax:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Link to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             post:<a href="http://www.open-mpi.org/community/lists/devel/2015/09/18085.php">http://www.open-mpi.org/community/lists/devel/2015/09/18085.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18086.php">http://www.open-mpi.org/community/lists/devel/2015/09/18086.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Computer Science Department               Tel:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Lawrence Berkeley National Laboratory Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;typescript&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18087.php">http://www.open-mpi.org/community/lists/devel/2015/09/18087.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18088.php">http://www.open-mpi.org/community/lists/devel/2015/09/18088.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt;     Computer Science Department           Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;typescript&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18089.php">http://www.open-mpi.org/community/lists/devel/2015/09/18089.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18092.php">http://www.open-mpi.org/community/lists/devel/2015/09/18092.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18093.php">http://www.open-mpi.org/community/lists/devel/2015/09/18093.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18101/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18101/pmix_client.diff">pmix_client.diff</a>
</ul>
<!-- attachment="pmix_client.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18102.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Previous message:</strong> <a href="18100.php">Ralph Castain: "[OMPI devel] Debugging core files on Mac"</a>
<li><strong>In reply to:</strong> <a href="18093.php">Paul Hargrove: "Re: [OMPI devel] PMIX vs Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18102.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Reply:</strong> <a href="18102.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
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
