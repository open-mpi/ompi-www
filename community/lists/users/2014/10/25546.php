<?
$subject_val = "Re: [OMPI users] New ib locked pages behavior?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 20:15:07 2014" -->
<!-- isoreceived="20141022001507" -->
<!-- sent="Tue, 21 Oct 2014 17:15:01 -0700" -->
<!-- isosent="20141022001501" -->
<!-- name="Bill Broadley" -->
<!-- email="bill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New ib locked pages behavior?" -->
<!-- id="5446F705.80702_at_cse.ucdavis.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5446E9BE.6000002_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Bill Broadley (<em>bill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-21 20:15:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25547.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Previous message:</strong> <a href="25545.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>In reply to:</strong> <a href="25545.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25547.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25547.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/21/2014 04:18 PM, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Bill
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe you're missing these settings in /etc/modprobe.d/mlx4_core.conf ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
</span><br>
<p>Ah, that helped.  Although:
<br>
/lib/modules/3.13.0-36-generic/kernel/drivers/net/ethernet/mellanox/mlx4$
<br>
modinfo mlx4_core | grep &quot;^parm&quot;
<br>
<p>Lists some promising looking parameters:
<br>
parm:           log_mtts_per_seg:Log2 number of MTT entries per segment (1-7) (int)
<br>
<p>The FAQ recommends log_num_mtt or num_mtt and NOT log_mtts_per_seg, sadly:
<br>
$ modinfo mlx4_core | grep &quot;^parm&quot; | grep mtt
<br>
parm:           log_mtts_per_seg:Log2 number of MTT entries per segment (1-7) (int)
<br>
$
<br>
<p>Looks like the best I can do is bump log_mtts_per_seg.
<br>
<p>I tried:
<br>
$ cat /etc/modprobe.d/mlx4_core.conf
<br>
options mlx4_core log_num_mtt=24
<br>
$
<br>
<p>But:
<br>
[    6.691959] mlx4_core: unknown parameter 'log_num_mtt' ignored
<br>
<p>I ended up with:
<br>
options mlx4_core log_mtts_per_seg=2
<br>
<p>I'm hoping that doubles the registerable memory, although I did see a
<br>
recommendation to raise it to double the system ram (in this case 64GB ram/128GB
<br>
locakable.
<br>
<p>Maybe an update to the FAQ is needed?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25547.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Previous message:</strong> <a href="25545.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>In reply to:</strong> <a href="25545.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25547.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25547.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
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
