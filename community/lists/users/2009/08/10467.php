<?
$subject_val = "Re: [OMPI users] mca_pml_ob1_send blocks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 14:21:19 2009" -->
<!-- isoreceived="20090824182119" -->
<!-- sent="Mon, 24 Aug 2009 11:20:05 -0700" -->
<!-- isosent="20090824182005" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_pml_ob1_send blocks" -->
<!-- id="4A92D9D5.7010508_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4A92D974.7030706_at_bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca_pml_ob1_send blocks<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 14:20:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10468.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Previous message:</strong> <a href="10466.php">Shaun Jackman: "[OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10466.php">Shaun Jackman: "[OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10481.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I neglected to include some pertinent information:
<br>
I'm using Open MPI 1.3.2. Here's a backtrace:
<br>
<p>#0  0x0000002a95e6890c in epoll_wait () from /lib64/tls/libc.so.6
<br>
#1  0x0000002a9623a39c in epoll_dispatch ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /home/sjackman/arch/xhost/lib/libopen-pal.so.0
<br>
#2  0x0000002a96238f10 in opal_event_base_loop ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /home/sjackman/arch/xhost/lib/libopen-pal.so.0
<br>
#3  0x0000002a9622dfb0 in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /home/sjackman/arch/xhost/lib/libopen-pal.so.0
<br>
#4  0x0000002a989502c5 in mca_pml_ob1_send ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /home/sjackman/arch/xhost/lib/openmpi/mca_pml_ob1.so
<br>
#5  0x0000002a956c56f1 in PMPI_Send ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /home/sjackman/arch/xhost/lib/libmpi.so.0
<br>
<p>Frames #0-#3 do return and loop. Frame #4 never returns.
<br>
<p>Cheers,
<br>
Shaun
<br>
<p>Shaun Jackman wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm seeing MPI_Send block in mca_pml_ob1_send. The packet is shorter 
</span><br>
<span class="quotelev1">&gt; than the eager transmit limit for shared memory (3300 bytes &lt; 4096 
</span><br>
<span class="quotelev1">&gt; bytes). I'm trying to determine if MPI_Send is blocking due to a 
</span><br>
<span class="quotelev1">&gt; deadlock. Will MPI_Send block even when sending a packet eagerly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Shaun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10468.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Previous message:</strong> <a href="10466.php">Shaun Jackman: "[OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10466.php">Shaun Jackman: "[OMPI users] mca_pml_ob1_send blocks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10481.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
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
