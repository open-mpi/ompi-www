<?
$subject_val = "[OMPI users] seg faults with IB and RH ibverbs-1.1.1-9";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 25 17:01:11 2008" -->
<!-- isoreceived="20080825210111" -->
<!-- sent="Mon, 25 Aug 2008 17:01:07 -0400 (EDT)" -->
<!-- isosent="20080825210107" -->
<!-- name="Andrew J Caird" -->
<!-- email="acaird_at_[hidden]" -->
<!-- subject="[OMPI users] seg faults with IB and RH ibverbs-1.1.1-9" -->
<!-- id="10506_1219698071_m7PL17hE020918_Pine.LNX.4.63.0808251431110.32192_at_lancaster.engin.umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] seg faults with IB and RH ibverbs-1.1.1-9<br>
<strong>From:</strong> Andrew J Caird (<em>acaird_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-25 17:01:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6428.php">Åke Sandgren: "[OMPI users] Problem with btl_openib_endpoint_post_rr"</a>
<li><strong>Previous message:</strong> <a href="6426.php">Brian W. Barrett: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6436.php">Andrew J Caird: "Re: [OMPI users] seg faults with IB and RH ibverbs-1.1.1-9"</a>
<li><strong>Reply:</strong> <a href="6436.php">Andrew J Caird: "Re: [OMPI users] seg faults with IB and RH ibverbs-1.1.1-9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>We recently applied the latest RedHat update (/etc/redhat-release says
<br>
&quot;Red Hat Enterprise Linux WS release 4 (Nahant Update 7)&quot;) to our cluster,
<br>
and now codes that use IB seg fault.
<br>
<p>We have tried multiple versions of OpenMPI and PGI and GNU compilers.  We
<br>
have compiled with --memory-manager=none and without that.  None of that
<br>
seems to matter.
<br>
<p>When we copy mca_btl_openib.la and mca_btl_openib.so from a version of
<br>
OpenMPI compiled before the update into $OMPI_HOME/lib/openmpi/,
<br>
everything works fine - no seg faults.  To me this suggests something in
<br>
the relationship between those two files and libibverbs, although I'm at a
<br>
loss as to what that might be.  Note that the old version of libibverbs is 
<br>
gone from the system, but the new version seems to imply it has both 
<br>
IBVerbs 1.0 and 1.1.  That's just an assumption on my part based on 
<br>
looking at &quot;strings /usr/lib64/libibverbs.so.1.0.0  | grep IBVER&quot; and 
<br>
seeing IBVERBS_1.0 and IBVERBS_1.1 in the output.
<br>
<p>The RPMs RedHat provides for ibverbs is libibverbs-1.1.1-9.el4 and the
<br>
openib RPM is openib-1.3-5.el4.
<br>
<p>The fairly uninformative seg fault looks like:
<br>
[me_at_node421 ~]$ mpirun -np 5 ./cpi127
<br>
[node422:28808] *** Process received signal ***
<br>
[node421:29922] *** Process received signal ***
<br>
[node421:29922] Signal: Segmentation fault (11)
<br>
[node421:29922] Signal code: Address not mapped (1)
<br>
[node421:29922] Failing at address: (nil)
<br>
[node422:28808] Signal: Segmentation fault (11)
<br>
[node422:28808] Signal code: Address not mapped (1)
<br>
[node422:28808] Failing at address: (nil)
<br>
[node422:28808] *** End of error message ***
<br>
[node421:29922] *** End of error message ***
<br>
[node421.engin.umich.edu:29917] [0,0,0]-[0,1,2] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
mpirun noticed that job rank 0 with PID 29919 on node node421 exited on signal 15 (Terminated).
<br>
4 additional processes aborted (not shown)
<br>
<p>Running that same code over Ethernet (&quot;-mca btl ^openib&quot;) works fine.
<br>
<p><p>The configure line for OpenMPI looks roughly like:
<br>
&nbsp;&nbsp;&nbsp;./configure --prefix=/home/software/rhel4/openmpi-1.2.7rc5/pgi-7.2 --with-tm=/usr/local/torque --with-openib=/usr CC=pgcc CXX=pgCC FC=pgf90 F77=pgf90
<br>
<p>sometimes I added: --memory-manager=none
<br>
<p>We're running the embedded subnet manager in our Topspin TS120 switch (but
<br>
I don't think that's the problem, since codes with the old libraries do
<br>
work fine).
<br>
<p>Has anyone else seen any oddness with RH Update 7, libibverbs 1.1.1 and
<br>
OpenMPI, or are we looking at the wrong things?
<br>
<p>config.log and ompi_info output are in the attached zip file.
<br>
<p>Unfortunately, it's very possible that it's something local to our
<br>
installation, but if we had confirmation that this works for someone else,
<br>
it would greatly narrow our search space.
<br>
<p>Thanks for any insights.
<br>
<p>--andy
<br>
<p>*****************************************************************************
<br>
**                                                                         **
<br>
** WARNING:  This email contains an attachment of a very suspicious type.  **
<br>
** You are urged NOT to open this attachment unless you are absolutely     **
<br>
** sure it is legitimate.  Opening this attachment may cause irreparable   **
<br>
** damage to your computer and your files.  If you have any questions      **
<br>
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
<br>
**                                                                         **
<br>
** This warning was added by the IU Computer Science Dept. mail scanner.   **
<br>
*****************************************************************************
<br>
<p><p><p>
<br><hr>
<ul>
<li>APPLICATION/ZIP attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6427/ib-segfault-configlog-ompiinfo.zip__size_109027__creation-date_">ib-segfault-configlog-ompiinfo.zip</a>
</ul>
<!-- attachment="ib-segfault-configlog-ompiinfo.zip__size_109027__creation-date_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6428.php">Åke Sandgren: "[OMPI users] Problem with btl_openib_endpoint_post_rr"</a>
<li><strong>Previous message:</strong> <a href="6426.php">Brian W. Barrett: "Re: [OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6436.php">Andrew J Caird: "Re: [OMPI users] seg faults with IB and RH ibverbs-1.1.1-9"</a>
<li><strong>Reply:</strong> <a href="6436.php">Andrew J Caird: "Re: [OMPI users] seg faults with IB and RH ibverbs-1.1.1-9"</a>
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
