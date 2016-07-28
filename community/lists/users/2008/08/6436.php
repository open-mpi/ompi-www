<?
$subject_val = "Re: [OMPI users] seg faults with IB and RH ibverbs-1.1.1-9";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 10:49:01 2008" -->
<!-- isoreceived="20080827144901" -->
<!-- sent="Wed, 27 Aug 2008 10:48:57 -0400 (EDT)" -->
<!-- isosent="20080827144857" -->
<!-- name="Andrew J Caird" -->
<!-- email="acaird_at_[hidden]" -->
<!-- subject="Re: [OMPI users] seg faults with IB and RH ibverbs-1.1.1-9" -->
<!-- id="Pine.LNX.4.63.0808271048190.32192_at_lancaster.engin.umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="10506_1219698071_m7PL17hE020918_Pine.LNX.4.63.0808251431110.32192_at_lancaster.engin.umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] seg faults with IB and RH ibverbs-1.1.1-9<br>
<strong>From:</strong> Andrew J Caird (<em>acaird_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-27 10:48:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6437.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Previous message:</strong> <a href="6435.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>In reply to:</strong> <a href="6427.php">Andrew J Caird: "[OMPI users] seg faults with IB and RH ibverbs-1.1.1-9"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I mentioned it might be, it was a local issue.
<br>
<p>The lesson is that one should be very careful about OFED versions and 
<br>
cleanliness. :)
<br>
<p>--andy
<br>
<p>On Mon, 25 Aug 2008, Andrew J Caird wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We recently applied the latest RedHat update (/etc/redhat-release says
</span><br>
<span class="quotelev1">&gt; &quot;Red Hat Enterprise Linux WS release 4 (Nahant Update 7)&quot;) to our cluster,
</span><br>
<span class="quotelev1">&gt; and now codes that use IB seg fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have tried multiple versions of OpenMPI and PGI and GNU compilers.  We
</span><br>
<span class="quotelev1">&gt; have compiled with --memory-manager=none and without that.  None of that
</span><br>
<span class="quotelev1">&gt; seems to matter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we copy mca_btl_openib.la and mca_btl_openib.so from a version of
</span><br>
<span class="quotelev1">&gt; OpenMPI compiled before the update into $OMPI_HOME/lib/openmpi/,
</span><br>
<span class="quotelev1">&gt; everything works fine - no seg faults.  To me this suggests something in
</span><br>
<span class="quotelev1">&gt; the relationship between those two files and libibverbs, although I'm at a
</span><br>
<span class="quotelev1">&gt; loss as to what that might be.  Note that the old version of libibverbs is
</span><br>
<span class="quotelev1">&gt; gone from the system, but the new version seems to imply it has both
</span><br>
<span class="quotelev1">&gt; IBVerbs 1.0 and 1.1.  That's just an assumption on my part based on
</span><br>
<span class="quotelev1">&gt; looking at &quot;strings /usr/lib64/libibverbs.so.1.0.0  | grep IBVER&quot; and
</span><br>
<span class="quotelev1">&gt; seeing IBVERBS_1.0 and IBVERBS_1.1 in the output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The RPMs RedHat provides for ibverbs is libibverbs-1.1.1-9.el4 and the
</span><br>
<span class="quotelev1">&gt; openib RPM is openib-1.3-5.el4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fairly uninformative seg fault looks like:
</span><br>
<span class="quotelev1">&gt; [me_at_node421 ~]$ mpirun -np 5 ./cpi127
</span><br>
<span class="quotelev1">&gt; [node422:28808] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node421:29922] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node421:29922] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node421:29922] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node421:29922] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [node422:28808] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node422:28808] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node422:28808] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [node422:28808] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [node421:29922] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [node421.engin.umich.edu:29917] [0,0,0]-[0,1,2] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 29919 on node node421 exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 4 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running that same code over Ethernet (&quot;-mca btl ^openib&quot;) works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure line for OpenMPI looks roughly like:
</span><br>
<span class="quotelev1">&gt;   ./configure --prefix=/home/software/rhel4/openmpi-1.2.7rc5/pgi-7.2 --with-tm=/usr/local/torque --with-openib=/usr CC=pgcc CXX=pgCC FC=pgf90 F77=pgf90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sometimes I added: --memory-manager=none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're running the embedded subnet manager in our Topspin TS120 switch (but
</span><br>
<span class="quotelev1">&gt; I don't think that's the problem, since codes with the old libraries do
</span><br>
<span class="quotelev1">&gt; work fine).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone else seen any oddness with RH Update 7, libibverbs 1.1.1 and
</span><br>
<span class="quotelev1">&gt; OpenMPI, or are we looking at the wrong things?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; config.log and ompi_info output are in the attached zip file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, it's very possible that it's something local to our
</span><br>
<span class="quotelev1">&gt; installation, but if we had confirmation that this works for someone else,
</span><br>
<span class="quotelev1">&gt; it would greatly narrow our search space.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any insights.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --andy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very suspicious type.  **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are absolutely     **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable   **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any questions      **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.   **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
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
<li><strong>Next message:</strong> <a href="6437.php">Richard Treumann: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>Previous message:</strong> <a href="6435.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<li><strong>In reply to:</strong> <a href="6427.php">Andrew J Caird: "[OMPI users] seg faults with IB and RH ibverbs-1.1.1-9"</a>
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
