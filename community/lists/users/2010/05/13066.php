<?
$subject_val = "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 18:06:50 2010" -->
<!-- isoreceived="20100517220650" -->
<!-- sent="Mon, 17 May 2010 16:06:44 -0600" -->
<!-- isosent="20100517220644" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode" -->
<!-- id="AANLkTik1nf-pbtFO5q-8InEAWotjw4X1BWeSWqp06tW8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTim6VjeXEq0cP-8rls48B5MOycIpgAPfNKlG8AJl_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 18:06:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13067.php">Christopher Maestas: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>Previous message:</strong> <a href="13065.php">awwase: "Re: [OMPI users] Enabling IPsec"</a>
<li><strong>In reply to:</strong> <a href="13062.php">Christopher Maestas: "[OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13067.php">Christopher Maestas: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>Reply:</strong> <a href="13067.php">Christopher Maestas: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's a pretty old version of slurm - I don't have access to anything that
<br>
old to test against. You could try running it with --display-allocation
<br>
--display-devel-map to see what ORTE thinks the allocation is and how it
<br>
mapped the procs. It sounds like something may be having a problem there...
<br>
<p><p>On Mon, May 17, 2010 at 11:08 AM, Christopher Maestas
<br>
&lt;cdmaestas_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been having some troubles with OpenMPI 1.4.X and slurm recently.  I
</span><br>
<span class="quotelev1">&gt; seem to be able to run jobs this way ok:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; sh-3.1$ mpirun -np 2 mpi_hello
</span><br>
<span class="quotelev1">&gt; Hello, I am node cut1n7 with rank 0
</span><br>
<span class="quotelev1">&gt; Hello, I am node cut1n8 with rank 1
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However if I try and use the -npernode option I get:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; sh-3.1$ mpirun -npernode 1 mpi_hello
</span><br>
<span class="quotelev1">&gt; [cut1n7:16368] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [cut1n7:16368] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [cut1n7:16368] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [cut1n7:16368] Failing at address: 0x50
</span><br>
<span class="quotelev1">&gt; [cut1n7:16368] [ 0] /lib64/libpthread.so.0 [0x37bda0de80]
</span><br>
<span class="quotelev1">&gt; [cut1n7:16368] [ 1]
</span><br>
<span class="quotelev1">&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_util_encode_pidmap+0xdb)
</span><br>
<span class="quotelev1">&gt; [0x2b73eb84df8b]
</span><br>
<span class="quotelev1">&gt; [cut1n7:16368] [ 2]
</span><br>
<span class="quotelev1">&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x655)
</span><br>
<span class="quotelev1">&gt; [0x2b73eb8592f5]
</span><br>
<span class="quotelev1">&gt; [cut1n7:16368] [ 3]
</span><br>
<span class="quotelev1">&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x10b)
</span><br>
<span class="quotelev1">&gt; [0x2b73eb86031b]
</span><br>
<span class="quotelev1">&gt; [cut1n7:16368] [ 4]
</span><br>
<span class="quotelev1">&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/openmpi/mca_plm_slurm.so
</span><br>
<span class="quotelev1">&gt; [0x2b73ec709ecf]
</span><br>
<span class="quotelev1">&gt; [cut1n7:16368] [ 5] mpirun [0x40335a]
</span><br>
<span class="quotelev1">&gt; [cut1n7:16368] [ 6] mpirun [0x4029f3]
</span><br>
<span class="quotelev1">&gt; [cut1n7:16368] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x37bce1d8b4]
</span><br>
<span class="quotelev1">&gt; [cut1n7:16368] [ 8] mpirun [0x402929]
</span><br>
<span class="quotelev1">&gt; [cut1n7:16368] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is ompi 1.4.2, gcc 4.1.1 and slurm 2.0.9 ... I'm sure it's a rather
</span><br>
<span class="quotelev1">&gt; silly detail on my end, but figure I should start this thread for any
</span><br>
<span class="quotelev1">&gt; insights and feedback I can help provide to resolve this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -cdm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13066/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13067.php">Christopher Maestas: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>Previous message:</strong> <a href="13065.php">awwase: "Re: [OMPI users] Enabling IPsec"</a>
<li><strong>In reply to:</strong> <a href="13062.php">Christopher Maestas: "[OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13067.php">Christopher Maestas: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>Reply:</strong> <a href="13067.php">Christopher Maestas: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
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
