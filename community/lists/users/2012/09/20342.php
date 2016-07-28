<?
$subject_val = "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 27 11:04:22 2012" -->
<!-- isoreceived="20120927150422" -->
<!-- sent="Thu, 27 Sep 2012 08:04:17 -0700" -->
<!-- isosent="20120927150417" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362" -->
<!-- id="CAMD57ofKbCTPtfPvEKc-phP0vwy4a4av3k0H-JKKj6T-G0DO+A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201209270558.q8R5wR4m013773_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-27 11:04:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20343.php">Ralph Castain: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>Previous message:</strong> <a href="20341.php">Ake Sandgren: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>In reply to:</strong> <a href="20339.php">Siegmar Gross: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20364.php">Jeff Squyres: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20364.php">Jeff Squyres: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Sep 26, 2012 at 10:58 PM, Siegmar Gross &lt;
<br>
Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the command works without linpc4 or with -mca btl ^sctp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Excellent!
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -np 4 -host rs0,sunpc4,linpc4 environ_mpi | &amp; more
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sunpc4.informatik.hs-fulda.de][[6074,1],2][../
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr hello_1 162 mpiexec -np 4 -host rs0,sunpc4 environ_mpi | &amp; more
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now 3 slave tasks are sending their environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr hello_1 163 mpiexec -mca btl ^sctp -np 4 -host rs0,sunpc4,linpc4 \
</span><br>
<span class="quotelev1">&gt;   environ_mpi | &amp; more
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now 3 slave tasks are sending their environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Later I try to build some older tarballs from the trunk so that I can
</span><br>
<span class="quotelev1">&gt; find out which one broke my binding commands. Is it possible to get
</span><br>
<span class="quotelev1">&gt; openmpi-1.9a1r27348.tar.bz2 and openmpi-1.9a1r27354.tar.bz2 so that I
</span><br>
<span class="quotelev1">&gt; can try with every sixth tarball starting from openmpi-1.9a1r27342.tar.bz2
</span><br>
<span class="quotelev1">&gt; and then continue with the next interval?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We don't generally keep old tarballs of the trunk around. Your best bet is
<br>
to just do an svn checkout of whatever revision level you want to try and
<br>
build from that - only difference is that you need to do an &quot;./autogen.pl&quot;
<br>
before you can run the configure cmd, and that requires you to have
<br>
autoconf, automake, and libtool on your machine (which you probably already
<br>
do).
<br>
<p>I would take bigger steps initially. It apparently works for you in the 1.6
<br>
series,  which is a continuation of the 1.5 series. Looking at the version
<br>
timeline, the 1.5 series branched from the trunk in Jan 2010, so we have
<br>
2.5 years to cover and a version range that starts around r22500. Quite a
<br>
lot of changes!
<br>
<p>I would suggest starting at r22500 and trying every 1000 revisions
<br>
initially. Remember that not every single revision will build and work
<br>
correctly - this is the developer's trunk and it is occasionally broken for
<br>
a short while - but shifting a little bit when that happens should solve
<br>
the problem.
<br>
<p>The most likely points will be where either the hwloc code was updated, or
<br>
the launch code. The former occurs fairly rarely - you might be able to
<br>
detect if that's a problem by simply testing the various hwloc releases as
<br>
we just absorb them as they come. There are only a few of them over that
<br>
time period so that might be a lot faster. See if hwloc can correctly read
<br>
your topology and bind processes - if not, then OMPI won't be able to
<br>
either.
<br>
<p>The launch code changes usually come in big chunks, followed by minor
<br>
patches and then long periods of quiet. So a coarse sampling pattern should
<br>
pickup the problem.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hmmm...well, this is indeed confusing. I see the following in your
</span><br>
<span class="quotelev1">&gt; attached
</span><br>
<span class="quotelev2">&gt; &gt; output:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; [sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; ][[4083,1],2][../../../../../openmpi-1.9a1r27362/o
</span><br>
<span class="quotelev1">&gt; mpi/mca/btl/sctp/btl_sctp_proc.c:143:mca_btl_sctp_proc_create]
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; ][[4083,1],3][../../../../../openmpi-1.9a1r27362/ompi
</span><br>
<span class="quotelev1">&gt; /mca/btl/sctp/btl_sctp_proc.c:143:mca_btl_sctp_proc_create]
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; ][[4083,1],3][../../../../../openmpi-1.9a1r27362/ompi
</span><br>
<span class="quotelev1">&gt; /mca/btl/sctp/btl_sctp_proc.c:143:mca_btl_sctp_proc_create]
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; ][[4083,1],3][../../../../../openmpi-1.9a1r27362/ompi
</span><br>
<span class="quotelev1">&gt; /mca/btl/sctp/btl_sctp_proc.c:143:mca_btl_sctp_proc_create]
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This implies that at least some of the processes started and got all the
</span><br>
<span class="quotelev2">&gt; &gt; way into MPI_Init. You should probably exclude the sctp BTL as it's not
</span><br>
<span class="quotelev2">&gt; &gt; necessarily working - just add -mca btl ^sctp to the cmd line.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does this work if you leave linpc out of it? I'm wondering if this is the
</span><br>
<span class="quotelev2">&gt; &gt; heterogeneous problem again. Are you sure that the /usr/local... OMPI
</span><br>
<span class="quotelev2">&gt; &gt; library on that machine is the Linux x86_64 version, and not the Solaris
</span><br>
<span class="quotelev2">&gt; &gt; one (e.g., if /usr/local was NFS mounted)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Sep 26, 2012 at 7:30 AM, Siegmar Gross &lt;
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I'm on the road the rest of this week, but can look at this when I
</span><br>
<span class="quotelev1">&gt; return
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; next week. It looks like something unrelated to the Java bindings
</span><br>
<span class="quotelev1">&gt; failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; properly initialize - at a guess, I'd suspect that you are missing
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; LD_LIBRARY_PATH setting so none of the OMPI libs were found.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Perhaps the output of my environment program is helpful in that case.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I attached my environment.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpiexec -np 4 -host linpc4,sunpc4,rs0 environ_mpi \
</span><br>
<span class="quotelev4">&gt; &gt; &gt;   &gt;&amp; env_linpc_sunpc_sparc.txt
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you very much for your help in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Kind regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Siegmar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Wed, Sep 26, 2012 at 5:42 AM, Siegmar Gross &lt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; yesterday I installed openmpi-1.9a1r27362 on Solaris and Linux and
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I have a problem with mpiJava on Linux (openSUSE-Linux 12.1,
</span><br>
<span class="quotelev1">&gt; x86_64).
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; linpc4 mpi_classfiles 104 javac HelloMainWithoutMPI.java
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; linpc4 mpi_classfiles 105 mpijavac HelloMainWithBarrier.java
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; linpc4 mpi_classfiles 106 mpijavac -showme
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /usr/local/jdk1.7.0_07-64/bin/javac \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   -cp ...:.:/usr/local/openmpi-1.9_64_cc/lib64/mpi.jar
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; It works with Java without MPI.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; linpc4 mpi_classfiles 107 mpiexec java -cp $HOME/mpi_classfiles \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   HelloMainWithoutMPI
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Hello from linpc4.informatik.hs-fulda.de/193.174.26.225
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; It breaks with Java and MPI.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; linpc4 mpi_classfiles 108 mpiexec java -cp $HOME/mpi_classfiles \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   HelloMainWithBarrier
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; It looks like opal_init failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; likely to abort.  There are many reasons that a parallel process
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; environment problems.  This failure appears to be an internal
</span><br>
<span class="quotelev1">&gt; failure;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; here's some additional information (which may only be relevant to
</span><br>
<span class="quotelev1">&gt; an
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   mca_base_open failed
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; likely to abort.  There are many reasons that a parallel process
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; environment problems.  This failure appears to be an internal
</span><br>
<span class="quotelev1">&gt; failure;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; here's some additional information (which may only be relevant to
</span><br>
<span class="quotelev1">&gt; an
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   opal_init failed
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --&gt; Returned value Out of resource (-2) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; It looks like MPI_INIT failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; likely to abort.  There are many reasons that a parallel process
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; environment
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; problems.  This failure appears to be an internal failure; here's
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; developer):
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now
</span><br>
<span class="quotelev3">&gt; &gt; &gt; abort,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [linpc4:15332] Local abort before MPI_INIT completed successfully;
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; able to
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; aggregate error messages, and not able to guarantee that all other
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; processes were
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; killed!
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; a non-zero exit code.. Per user-direction, the job has been
</span><br>
<span class="quotelev1">&gt; aborted.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; mpiexec detected that one or more processes exited with non-zero
</span><br>
<span class="quotelev3">&gt; &gt; &gt; status,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; thus
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; causing
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Process name: [[58875,1],0]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I configured with the following command.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ../openmpi-1.9a1r27362/configure
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/local/openmpi-1.9_64_cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --libdir=/usr/local/openmpi-1.9_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --with-jdk-bindir=/usr/local/jdk1.7.0_07-64/bin \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --with-jdk-headers=/usr/local/jdk1.7.0_07-64/include \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   JAVA_HOME=/usr/local/jdk1.7.0_07-64 \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   LDFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   OBJC_INCLUDE_PATH=&quot;&quot; OPENMPI_HOME=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --enable-opal-multi-threads \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --with-threads=posix \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --without-verbs \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --without-udapl \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --with-wrapper-cflags=-m64 \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   --enable-debug \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; It works fine on Solaris machines as long as the hosts belong to
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; same kind (Sparc or x86_64).
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; tyr mpi_classfiles 194 mpiexec -host sunpc0,sunpc1,sunpc4 \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Process 1 of 3 running on sunpc1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Process 2 of 3 running on sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Process 0 of 3 running on sunpc0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; sunpc4 fd1026 107 mpiexec -host tyr,rs0,rs1 \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Process 1 of 3 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Process 2 of 3 running on rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Process 0 of 3 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; It breaks if the hosts belong to both kinds of machines.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; sunpc4 fd1026 106 mpiexec -host tyr,rs0,sunpc1 \
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [rs0.informatik.hs-fulda.de:7718] *** An error occurred in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Comm_dup
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [rs0.informatik.hs-fulda.de:7718] *** reported by process
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [565116929,1]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [rs0.informatik.hs-fulda.de:7718] *** on communicator
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [rs0.informatik.hs-fulda.de:7718] *** MPI_ERR_INTERN: internal
</span><br>
<span class="quotelev1">&gt; error
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [rs0.informatik.hs-fulda.de:7718] *** MPI_ERRORS_ARE_FATAL
</span><br>
<span class="quotelev1">&gt; (processes
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [rs0.informatik.hs-fulda.de:7718] ***    and potentially your MPI
</span><br>
<span class="quotelev1">&gt; job)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [sunpc4.informatik.hs-fulda.de:07900] 1 more process has sent help
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [sunpc4.informatik.hs-fulda.de:07900] Set MCA parameter
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Please let me know if I can provide anything else to track these
</span><br>
<span class="quotelev3">&gt; &gt; &gt; errors.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Kind regards
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Siegmar
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; [sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; ][[4083,1],2][../../../../../openmpi-1.9a1r27362/o
</span><br>
<span class="quotelev1">&gt; mpi/mca/btl/sctp/btl_sctp_proc.c:143:mca_btl_sctp_proc_create]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; ][[4083,1],3][../../../../../openmpi-1.9a1r27362/ompi
</span><br>
<span class="quotelev1">&gt; /mca/btl/sctp/btl_sctp_proc.c:143:mca_btl_sctp_proc_create]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; ][[4083,1],3][../../../../../openmpi-1.9a1r27362/ompi
</span><br>
<span class="quotelev1">&gt; /mca/btl/sctp/btl_sctp_proc.c:143:mca_btl_sctp_proc_create]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; ][[4083,1],3][../../../../../openmpi-1.9a1r27362/ompi
</span><br>
<span class="quotelev1">&gt; /mca/btl/sctp/btl_sctp_proc.c:143:mca_btl_sctp_proc_create]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mca_base_modex_recv: failed with return value=-13
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Now 3 slave tasks are sending their environment.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Environment from task 1:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message type:        3
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   msg length:          3911 characters
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     hostname:          linpc4
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     operating system:  Linux
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     release:           3.1.9-1.4-desktop
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     processor:         x86_64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     PATH
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/eclipse-3.6.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/NetBeans-4.0/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/jdk1.7.0_07-64/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/apache-ant-1.6.2/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/icc-9.1/idb/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/icc-9.1/cc/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/icc-9.1/fc/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/gcc-4.7.1/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /opt/solstudio12.3/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/ssl/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/pgsql/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/X11R6/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/teTeX-1.0.7/bin/i586-pc-linux-gnu
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/bluej-2.1.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/openmpi-1.9_64_cc/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /home/fd1026/Linux/x86_64/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        .
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/sbin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     LD_LIBRARY_PATH_32
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/jdk1.7.0_07-64/jre/lib/i386
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/gcc-4.7.1/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /usr/local/gcc-4.7.1/libexec/gcc/x86_64-unknown-linux-gnu/4.7.1/32
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /usr/local/gcc-4.7.1/lib/gcc/x86_64-unknown-linux-gnu/4.7.1/32
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/ssl/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/X11R6/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/openmpi-1.9_64_cc/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /home/fd1026/Linux/x86_64/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     LD_LIBRARY_PATH_64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/jdk1.7.0_07-64/jre/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/gcc-4.7.1/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /usr/local/gcc-4.7.1/libexec/gcc/x86_64-unknown-linux-gnu/4.7.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /usr/local/gcc-4.7.1/lib/gcc/x86_64-unknown-linux-gnu/4.7.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/ssl/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/X11R6/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/openmpi-1.9_64_cc/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /home/fd1026/Linux/x86_64/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/jdk1.7.0_07-64/jre/lib/i386
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/gcc-4.7.1/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /usr/local/gcc-4.7.1/libexec/gcc/x86_64-unknown-linux-gnu/4.7.1/32
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /usr/local/gcc-4.7.1/lib/gcc/x86_64-unknown-linux-gnu/4.7.1/32
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/ssl/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/X11R6/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/openmpi-1.9_64_cc/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/jdk1.7.0_07-64/jre/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/gcc-4.7.1/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /usr/local/gcc-4.7.1/libexec/gcc/x86_64-unknown-linux-gnu/4.7.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /usr/local/gcc-4.7.1/lib/gcc/x86_64-unknown-linux-gnu/4.7.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/ssl/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/X11R6/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/openmpi-1.9_64_cc/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /home/fd1026/Linux/x86_64/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     CLASSPATH
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/junit4.10
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/junit4.10/junit-4.10.jar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  //usr/local/jdk1.7.0_07-64/j3d/lib/ext/j3dcore.jar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  //usr/local/jdk1.7.0_07-64/j3d/lib/ext/j3dutils.jar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  //usr/local/jdk1.7.0_07-64/j3d/lib/ext/vecmath.jar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/javacc-5.0/javacc.jar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        .
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Environment from task 2:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message type:        3
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   msg length:          4196 characters
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     hostname:          sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     operating system:  SunOS
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     release:           5.10
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     processor:         i86pc
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     PATH
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/eclipse-3.6.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/NetBeans-4.0/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/jdk1.7.0_07/bin/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/apache-ant-1.6.2/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/gcc-4.7.1/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /opt/solstudio12.3/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/ssl/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/pgsql/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/openwin/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/dt/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ccs/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/sfw/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /opt/sfw/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ucb
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib/lp/postscript
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/teTeX-1.0.7/bin/i386-pc-solaris2.10
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/bluej-2.1.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/openmpi-1.9_64_cc/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /home/fd1026/SunOS/x86_64/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        .
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/sbin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     LD_LIBRARY_PATH_32
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/jdk1.7.0_07/jre/lib/i386
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/gcc-4.7.1/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /usr/local/gcc-4.7.1/lib/gcc/i386-pc-solaris2.10/4.7.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/ssl/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/oracle
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/pgsql/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/openwin/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/openwin/server/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/dt/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/X11R6/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ccs/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/sfw/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /opt/sfw/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ucblib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/openmpi-1.9_64_cc/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /home/fd1026/SunOS/x86_64/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     LD_LIBRARY_PATH_64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/jdk1.7.0_07/jre/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/gcc-4.7.1/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /usr/local/gcc-4.7.1/lib/gcc/i386-pc-solaris2.10/4.7.1/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/ssl/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/openwin/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/openwin/server/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/dt/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/X11R6/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ccs/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/sfw/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /opt/sfw/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ucblib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/openmpi-1.9_64_cc/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /home/fd1026/SunOS/x86_64/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/jdk1.7.0_07/jre/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/gcc-4.7.1/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /usr/local/gcc-4.7.1/lib/gcc/i386-pc-solaris2.10/4.7.1/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/ssl/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/openwin/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/openwin/server/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/dt/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/X11R6/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ccs/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/sfw/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /opt/sfw/lib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ucblib/amd64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/openmpi-1.9_64_cc/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /home/fd1026/SunOS/x86_64/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     CLASSPATH
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/junit4.10
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/junit4.10/junit-4.10.jar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        //usr/local/jdk1.7.0_07/j3d/lib/ext/j3dcore.jar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        //usr/local/jdk1.7.0_07/j3d/lib/ext/j3dutils.jar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        //usr/local/jdk1.7.0_07/j3d/lib/ext/vecmath.jar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/javacc-5.0/javacc.jar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        .
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Environment from task 3:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message type:        3
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   msg length:          4394 characters
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     hostname:          rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     operating system:  SunOS
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     release:           5.10
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     processor:         sun4u
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     PATH
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/eclipse-3.6.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/NetBeans-4.0/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/jdk1.7.0_07/bin/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/apache-ant-1.6.2/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/gcc-4.7.1/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /opt/solstudio12.3/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/ssl/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/pgsql/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/openwin/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/dt/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ccs/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/sfw/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /opt/sfw/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ucb
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/xpg4/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/teTeX-1.0.7/bin/sparc-sun-solaris2.10
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/bluej-2.1.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/openmpi-1.9_64_cc/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /home/fd1026/SunOS/sparc/bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        .
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/sbin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     LD_LIBRARY_PATH_32
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/jdk1.7.0_07/jre/lib/sparc
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/gcc-4.7.1/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /usr/local/gcc-4.7.1/lib/gcc/sparc-sun-solaris2.10/4.7.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/ssl/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/oracle
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/pgsql/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/openwin/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/dt/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/X11R6/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ccs/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/sfw/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /opt/sfw/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ucblib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/openmpi-1.9_64_cc/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /home/fd1026/SunOS/sparc/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     LD_LIBRARY_PATH_64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/jdk1.7.0_07/jre/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/gcc-4.7.1/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /usr/local/gcc-4.7.1/lib/gcc/sparc-sun-solaris2.10/4.7.1/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/ssl/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/oracle/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/pgsql/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/openwin/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/dt/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/X11R6/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ccs/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/sfw/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /opt/sfw/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ucblib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/openmpi-1.9_64_cc/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /home/fd1026/SunOS/sparc/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/jdk1.7.0_07/jre/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/gcc-4.7.1/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  /usr/local/gcc-4.7.1/lib/gcc/sparc-sun-solaris2.10/4.7.1/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/ssl/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/oracle/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/pgsql/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/openwin/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/dt/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/X11R6/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ccs/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/sfw/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /opt/sfw/lib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/ucblib/sparcv9
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/openmpi-1.9_64_cc/lib64
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /home/fd1026/SunOS/sparc/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     CLASSPATH
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/junit4.10
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/junit4.10/junit-4.10.jar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        //usr/local/jdk1.7.0_07/j3d/lib/ext/j3dcore.jar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        //usr/local/jdk1.7.0_07/j3d/lib/ext/j3dutils.jar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        //usr/local/jdk1.7.0_07/j3d/lib/ext/vecmath.jar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        /usr/local/javacc-5.0/javacc.jar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        .
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20342/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20343.php">Ralph Castain: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>Previous message:</strong> <a href="20341.php">Ake Sandgren: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>In reply to:</strong> <a href="20339.php">Siegmar Gross: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20364.php">Jeff Squyres: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20364.php">Jeff Squyres: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
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
