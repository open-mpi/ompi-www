<?
$subject_val = "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 14:48:50 2011" -->
<!-- isoreceived="20110708184850" -->
<!-- sent="Fri, 8 Jul 2011 11:48:42 -0700" -->
<!-- isosent="20110708184842" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="20110708184842.GA83006_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="087DDAA3-6062-4901-8F41-D0725B45256A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-08 14:48:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16865.php">Ralph Castain: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Previous message:</strong> <a href="16863.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16863.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16866.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jul 08, 2011 at 02:19:27PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 8, 2011, at 1:31 PM, Steve Kargl wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It seems that openmpi-1.4.4 compiled code is trying to use the
</span><br>
<span class="quotelev2">&gt; &gt; wrong nic.  My /etc/hosts file has
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 10.208.78.111           hpc.apl.washington.edu hpc
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.10            node10.cimu.org node10 n10 master
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.11            node11.cimu.org node11 n11
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.12            node12.cimu.org node12 n12
</span><br>
<span class="quotelev2">&gt; &gt; ... down to ...
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.21            node21.cimu.org node21 n21
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Note, node10 and hpc are the same system (2 different NICs). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't confuse the machinefile with the NICs that OMPI will try
</span><br>
<span class="quotelev1">&gt; to use.  The machinefile is only hosts on which OMPI will launch.
</span><br>
<span class="quotelev1">&gt; Specifically: the machinefile does not influence which NICs OMPI
</span><br>
<span class="quotelev1">&gt; will use for MPI communications.
</span><br>
<p>Ah, okay.  I did not realize that a machinefile did not
<br>
limit OMPI to a set of IP address.
<br>
<p><span class="quotelev2">&gt; &gt; hpc:kargl[268] cat mf_ompi_1
</span><br>
<span class="quotelev2">&gt; &gt; node10.cimu.org slots=1
</span><br>
<span class="quotelev2">&gt; &gt; node16.cimu.org slots=1
</span><br>
<span class="quotelev2">&gt; &gt; hpc:kargl[267] /usr/local/openmpi-1.4.4/bin/mpiexec -machinefile mf_ompi_1 ./z
</span><br>
<span class="quotelev2">&gt; &gt; 0: hpc.apl.washington.edu
</span><br>
<span class="quotelev2">&gt; &gt; 1: node16.cimu.org
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What function is netmpi.c using to get the hostname that
</span><br>
<span class="quotelev1">&gt; is printed?  It might be using MPI_Get_processor_name()
</span><br>
<span class="quotelev1">&gt; or gethostname() -- both of which may return whatever hostname(1) returns.  
</span><br>
<p>After reading the code, this appears to have misled me.  The
<br>
code uses MPI_Get_processor_name().
<br>
<p><span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00000003c0bedb9c in kevent () from /lib/libc.so.7
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x000000000052d648 in kq_dispatch ()
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x000000000052c6c3 in opal_event_base_loop ()
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00000000005260cb in opal_progress ()
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x0000000000491d1c in mca_pml_ob1_send ()
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x000000000043c753 in PMPI_Send ()
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x000000000041a112 in Sync (p=0x7fffffffd4d0) at netmpi.c:573
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x000000000041a3cf in DetermineLatencyReps (p=0x3) at netmpi.c:593
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x000000000041a4fe in TestLatency (p=0x3) at netmpi.c:630
</span><br>
<span class="quotelev2">&gt; &gt; #9  0x000000000041a958 in main (argc=1, argv=0x7fffffffd6a0) at netmpi.c:213
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) quit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The easiest way to fix this is likely to use the btl_tcp_if_include
</span><br>
<span class="quotelev1">&gt; or btl_tcp_if_exclude MCA parameters -- i.e., tell OMPI exactly which
</span><br>
<span class="quotelev1">&gt; interfaces to use:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<p>Thanks for the pointer.  I'll try this solution later.
<br>
<p><span class="quotelev1">&gt; Hypothetically, however, OMPI should be able to determine that
</span><br>
<span class="quotelev1">&gt; 192.168.0.x is not reachable from the 10.x network (assuming
</span><br>
<span class="quotelev1">&gt; your netmasks are set right), and automatically not use the
</span><br>
<span class="quotelev1">&gt; 10.x network to reach any of the non-node10 machines.
</span><br>
<p>The assumption is correct.  192.x is independent of 10.x.
<br>
<p><span class="quotelev1">&gt; It's curious that this is not happening; I wonder if this
</span><br>
<span class="quotelev1">&gt; is some kind of quirk of OMPI's reachability algorithms
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>)
</span><br>
<span class="quotelev1">&gt;  on FreeBSD...?
</span><br>
<p>I just rebuilt 1.4.4rc2 with '-O -g' to get debugging symbols
<br>
into openmpi's libraries and executables.  Is there any
<br>
particulare function(s) that I should inspect?
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16865.php">Ralph Castain: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>Previous message:</strong> <a href="16863.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16863.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16866.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
