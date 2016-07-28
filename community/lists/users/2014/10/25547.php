<?
$subject_val = "Re: [OMPI users] New ib locked pages behavior?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 20:38:47 2014" -->
<!-- isoreceived="20141022003847" -->
<!-- sent="Tue, 21 Oct 2014 20:38:38 -0400" -->
<!-- isosent="20141022003838" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New ib locked pages behavior?" -->
<!-- id="5446FC8E.4070403_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5446F705.80702_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] New ib locked pages behavior?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-21 20:38:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25548.php">Vinson Leung: "[OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25546.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>In reply to:</strong> <a href="25546.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25551.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25551.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bill
<br>
<p>I have 2.6.X CentOS stock kernel.
<br>
I set both parameters.
<br>
It works.
<br>
<p>Maybe the parameter names may changed in 3.X kernels?
<br>
(Which is really bad ...)
<br>
You could check if there is more information in:
<br>
/sys/module/mlx4_core/parameters/
<br>
<p>There seems to be a thread on the list about this (but apparently
<br>
no solution):
<br>
<a href="http://www.open-mpi.org/community/lists/users/2013/02/21430.php">http://www.open-mpi.org/community/lists/users/2013/02/21430.php</a>
<br>
<p>Maybe Mellanox has more information about this?
<br>
<p>Gus Correa
<br>
<p>On 10/21/2014 08:15 PM, Bill Broadley wrote:
<br>
<span class="quotelev1">&gt; On 10/21/2014 04:18 PM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Bill
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe you're missing these settings in /etc/modprobe.d/mlx4_core.conf ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, that helped.  Although:
</span><br>
<span class="quotelev1">&gt; /lib/modules/3.13.0-36-generic/kernel/drivers/net/ethernet/mellanox/mlx4$
</span><br>
<span class="quotelev1">&gt; modinfo mlx4_core | grep &quot;^parm&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lists some promising looking parameters:
</span><br>
<span class="quotelev1">&gt; parm:           log_mtts_per_seg:Log2 number of MTT entries per segment (1-7) (int)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The FAQ recommends log_num_mtt or num_mtt and NOT log_mtts_per_seg, sadly:
</span><br>
<span class="quotelev1">&gt; $ modinfo mlx4_core | grep &quot;^parm&quot; | grep mtt
</span><br>
<span class="quotelev1">&gt; parm:           log_mtts_per_seg:Log2 number of MTT entries per segment (1-7) (int)
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like the best I can do is bump log_mtts_per_seg.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried:
</span><br>
<span class="quotelev1">&gt; $ cat /etc/modprobe.d/mlx4_core.conf
</span><br>
<span class="quotelev1">&gt; options mlx4_core log_num_mtt=24
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But:
</span><br>
<span class="quotelev1">&gt; [    6.691959] mlx4_core: unknown parameter 'log_num_mtt' ignored
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ended up with:
</span><br>
<span class="quotelev1">&gt; options mlx4_core log_mtts_per_seg=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm hoping that doubles the registerable memory, although I did see a
</span><br>
<span class="quotelev1">&gt; recommendation to raise it to double the system ram (in this case 64GB ram/128GB
</span><br>
<span class="quotelev1">&gt; locakable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe an update to the FAQ is needed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25548.php">Vinson Leung: "[OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25546.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>In reply to:</strong> <a href="25546.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25551.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25551.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
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
