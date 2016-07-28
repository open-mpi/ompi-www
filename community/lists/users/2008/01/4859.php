<?
$subject_val = "[OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only ..";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 00:48:39 2008" -->
<!-- isoreceived="20080122054839" -->
<!-- sent="Tue, 22 Jan 2008 16:48:32 +1100" -->
<!-- isosent="20080122054832" -->
<!-- name="Graham Jenkins" -->
<!-- email="Graham.Jenkins_at_[hidden]" -->
<!-- subject="[OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .." -->
<!-- id="479583B0.9070207_at_its.monash.edu.au" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only ..<br>
<strong>From:</strong> Graham Jenkins (<em>Graham.Jenkins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-22 00:48:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4860.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Previous message:</strong> <a href="4858.php">Roland Albrecht: "Re: [OMPI users] Communications Problems when application distributed over, different nodes (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4860.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Reply:</strong> <a href="4860.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Maybe reply:</strong> <a href="4864.php">Pignot Geoffroy: "Re: [OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've observed an excessive use of CPU system resources with OpenMPI
<br>
1.2.4 using TCP connections only on our SL5 x86_64 Cluster. Typically,
<br>
for a simple Canonical Ring Program, we're seeing between 30 and 70%
<br>
system usage.
<br>
<p>Has anybody else noticed this sort of behaviour?
<br>
And does anybody have some suggestions for resolving the issue?
<br>
<p>Present values we have are:
<br>
<pre>
--
ompi_info --param btl tcp |grep MCA
                 MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
                 MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
                 MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;)
                 MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value:
&quot;eth0&quot;)
                 MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value:
&quot;lo&quot;)
                 MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current
value: &quot;8&quot;)
                 MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current
value: &quot;-1&quot;)
                 MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current
value: &quot;32&quot;)
                 MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value:
&quot;131072&quot;)
                 MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value:
&quot;131072&quot;)
                 MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current
value: &quot;30720&quot;)
                 MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current
value: &quot;0&quot;)
                 MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current
value: &quot;65536&quot;)
                 MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current
value: &quot;65536&quot;)
                 MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current
value: &quot;131072&quot;)
                 MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current
value: &quot;131072&quot;)
                 MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current
value: &quot;2147483647&quot;)
                 MCA btl: parameter &quot;btl_tcp_flags&quot; (current value: &quot;122&quot;)
                 MCA btl: parameter &quot;btl_tcp_priority&quot; (current value: &quot;0&quot;)
                 MCA btl: parameter &quot;btl_base_warn_component_unused&quot;
(current value: &quot;1&quot;)
-- 
Graham Jenkins
Senior Software Specialist, eResearch
Monash University
Email: Graham.Jenkins_at_[hidden]
Tel:   +613 9905-5942 (office)   +614 4850-2491 (mobile)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4860.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Previous message:</strong> <a href="4858.php">Roland Albrecht: "Re: [OMPI users] Communications Problems when application distributed over, different nodes (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4860.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Reply:</strong> <a href="4860.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Maybe reply:</strong> <a href="4864.php">Pignot Geoffroy: "Re: [OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .."</a>
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
