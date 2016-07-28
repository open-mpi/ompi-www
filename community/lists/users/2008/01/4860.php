<?
$subject_val = "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only ..";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 00:55:01 2008" -->
<!-- isoreceived="20080122055501" -->
<!-- sent="Tue, 22 Jan 2008 06:54:56 +0100" -->
<!-- isosent="20080122055456" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .." -->
<!-- id="1200981296.6076.2.camel_at_fkpc167.phc.chalmers.se" -->
<!-- inreplyto="479583B0.9070207_at_its.monash.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only ..<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-22 00:54:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4861.php">Brock Palen: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Previous message:</strong> <a href="4859.php">Graham Jenkins: "[OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>In reply to:</strong> <a href="4859.php">Graham Jenkins: "[OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4861.php">Brock Palen: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Reply:</strong> <a href="4861.php">Brock Palen: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I have noticed that when a process is waiting for communication
<br>
from another process the reported CPU usage remains around 100%.  Is
<br>
that what you mean?  I haven't explored whether these processes give way
<br>
to other active processes under the linux scheduler, nor whether I
<br>
should expect anything different.  This has been with 1.2.3 and 1.2.4.
<br>
<p><p><p>On Tue, 2008-01-22 at 16:48 +1100, Graham Jenkins wrote:
<br>
<span class="quotelev1">&gt; We've observed an excessive use of CPU system resources with OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.2.4 using TCP connections only on our SL5 x86_64 Cluster. Typically,
</span><br>
<span class="quotelev1">&gt; for a simple Canonical Ring Program, we're seeing between 30 and 70%
</span><br>
<span class="quotelev1">&gt; system usage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anybody else noticed this sort of behaviour?
</span><br>
<span class="quotelev1">&gt; And does anybody have some suggestions for resolving the issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Present values we have are:
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ompi_info --param btl tcp |grep MCA
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;eth0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;lo&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;30720&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_flags&quot; (current value: &quot;122&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_warn_component_unused&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4861.php">Brock Palen: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Previous message:</strong> <a href="4859.php">Graham Jenkins: "[OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>In reply to:</strong> <a href="4859.php">Graham Jenkins: "[OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4861.php">Brock Palen: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Reply:</strong> <a href="4861.php">Brock Palen: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
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
