<?
$subject_val = "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only ..";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 10:03:40 2008" -->
<!-- isoreceived="20080122150340" -->
<!-- sent="Tue, 22 Jan 2008 10:02:32 -0500" -->
<!-- isosent="20080122150232" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .." -->
<!-- id="119F8B9A-9C62-4423-86F2-23C11A431063_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1200981296.6076.2.camel_at_fkpc167.phc.chalmers.se" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-22 10:02:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4862.php">Brock Palen: "[OMPI users] problems with flash"</a>
<li><strong>Previous message:</strong> <a href="4860.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>In reply to:</strong> <a href="4860.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4864.php">Pignot Geoffroy: "Re: [OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See this FAQ:
<br>
<p><a href="http://icl.cs.utk.edu/open-mpi/faq/?category=running#oversubscribing">http://icl.cs.utk.edu/open-mpi/faq/?category=running#oversubscribing</a>
<br>
<p>OMPI by default assumes that each process has its own cpu, thus  
<br>
aggressively looks for data to receive.  I think there is a way to  
<br>
yield the processor if you want, but I think what your seeing is  
<br>
behavior you want.
<br>
If your application is spending allot of time waiting to receive data  
<br>
it might be unbalanced, check out opt (<a href="http://www.allinea.com/">http://www.allinea.com/</a> 
<br>
index.php?page=74) works with OMPI, lets you see what your process  
<br>
are doing,  I think Tau (<a href="http://www.cs.uoregon.edu/research/tau/users/">http://www.cs.uoregon.edu/research/tau/users/</a> 
<br>
samrai.php) would be a free alternative but i do not know if it works  
<br>
with OMPI.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Jan 22, 2008, at 12:54 AM, Terry Frankcombe wrote:
<br>
<p><span class="quotelev1">&gt; Well, I have noticed that when a process is waiting for communication
</span><br>
<span class="quotelev1">&gt; from another process the reported CPU usage remains around 100%.  Is
</span><br>
<span class="quotelev1">&gt; that what you mean?  I haven't explored whether these processes  
</span><br>
<span class="quotelev1">&gt; give way
</span><br>
<span class="quotelev1">&gt; to other active processes under the linux scheduler, nor whether I
</span><br>
<span class="quotelev1">&gt; should expect anything different.  This has been with 1.2.3 and 1.2.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 2008-01-22 at 16:48 +1100, Graham Jenkins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We've observed an excessive use of CPU system resources with OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.4 using TCP connections only on our SL5 x86_64 Cluster.  
</span><br>
<span class="quotelev2">&gt;&gt; Typically,
</span><br>
<span class="quotelev2">&gt;&gt; for a simple Canonical Ring Program, we're seeing between 30 and 70%
</span><br>
<span class="quotelev2">&gt;&gt; system usage.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has anybody else noticed this sort of behaviour?
</span><br>
<span class="quotelev2">&gt;&gt; And does anybody have some suggestions for resolving the issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Present values we have are:
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --param btl tcp |grep MCA
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_base_debug&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;eth0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;lo&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;32&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;30720&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_flags&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;122&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_priority&quot; (current  
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_base_warn_component_unused&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4862.php">Brock Palen: "[OMPI users] problems with flash"</a>
<li><strong>Previous message:</strong> <a href="4860.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>In reply to:</strong> <a href="4860.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4864.php">Pignot Geoffroy: "Re: [OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .."</a>
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
