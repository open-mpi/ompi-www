<?
$subject_val = "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 24 08:23:15 2014" -->
<!-- isoreceived="20140524122315" -->
<!-- sent="Sat, 24 May 2014 12:23:14 +0000" -->
<!-- isosent="20140524122314" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to run Open MPI over TCP (Ethernet)" -->
<!-- id="AF9E11FF-9A17-4F2A-8647-F7D0EB29DCC5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANFHntAdCfhVqCDNZGR2STLsEZ7dKNuehJRHz8StidU4bG27gQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to run Open MPI over TCP (Ethernet)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-24 08:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24476.php">Jeff Squyres (jsquyres): "Re: [OMPI users] can't preload binary to remote machine"</a>
<li><strong>Previous message:</strong> <a href="24474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>In reply to:</strong> <a href="24452.php">Bibrak Qamar: "[OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24503.php">Bibrak Qamar: "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Reply:</strong> <a href="24503.php">Bibrak Qamar: "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am sorry for the delay in replying; this week got a bit crazy on me.
<br>
<p>I'm guessing that Open MPI is striping across both your eth0 and ib0 interfaces.
<br>
<p>You can limit which interfaces it uses with the btl_tcp_if_include MCA param.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;# Just use eth0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl tcp,sm,self --mca btl_tcp_if_include eth0 ...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;# Just use ib0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl tcp,sm,self --mca btl_tcp_if_include ib0 ...
<br>
<p>Note that IPoIB is nowhere near as efficient as native verbs, so you won't get nearly as good performance as you do with OMPI's openib transport.
<br>
<p>Note, too, that I specifically included &quot;--mca btl tcp,sm,self&quot; in the above examples to force the use of the TCP MPI transport.  Otherwise, OMPI may well automatically choose the native IB (openib) transport.  I see you mentioned this in your first mail, too, but I am listing it here just to be specific/pedantic.
<br>
<p><p><p>On May 22, 2014, at 3:30 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am facing problem in running Open MPI using TCP (on 1G Ethernet). In practice the bandwidth must not exceed 1000 Mbps but for some data points (for point-to-point ping pong) it exceeds this limit. I checked with MPICH it works as desired. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Following is the command I issue to run my program on TCP. Am I missing something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-3.2$ mpirun -np 2  -machinefile machines -N 1 --mca btl tcp,self ./bandwidth.ompi 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The following command line options and corresponding MCA parameter have
</span><br>
<span class="quotelev1">&gt; been deprecated and replaced as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Command line options:
</span><br>
<span class="quotelev1">&gt;     Deprecated:  --npernode, -npernode
</span><br>
<span class="quotelev1">&gt;     Replacement: --map-by ppr:N:node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Equivalent MCA parameter:
</span><br>
<span class="quotelev1">&gt;     Deprecated:  rmaps_base_n_pernode, rmaps_ppr_n_pernode
</span><br>
<span class="quotelev1">&gt;     Replacement: rmaps_base_mapping_policy=ppr:N:node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The deprecated forms *will* disappear in a future version of Open MPI.
</span><br>
<span class="quotelev1">&gt; Please update to the new syntax.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Hello, world.  I am 1 on compute-0-16.local
</span><br>
<span class="quotelev1">&gt; Hello, world.  I am 0 on compute-0-15.local
</span><br>
<span class="quotelev1">&gt; 1    25.66    0.30
</span><br>
<span class="quotelev1">&gt; 2    25.54    0.60
</span><br>
<span class="quotelev1">&gt; 4    25.34    1.20
</span><br>
<span class="quotelev1">&gt; 8    25.27    2.42
</span><br>
<span class="quotelev1">&gt; 16    25.24    4.84
</span><br>
<span class="quotelev1">&gt; 32    25.49    9.58
</span><br>
<span class="quotelev1">&gt; 64    26.44    18.47
</span><br>
<span class="quotelev1">&gt; 128    26.85    36.37
</span><br>
<span class="quotelev1">&gt; 256    29.43    66.37
</span><br>
<span class="quotelev1">&gt; 512    36.02    108.44
</span><br>
<span class="quotelev1">&gt; 1024    42.03    185.86
</span><br>
<span class="quotelev1">&gt; 2048    194.30    80.42
</span><br>
<span class="quotelev1">&gt; 4096    255.21    122.45
</span><br>
<span class="quotelev1">&gt; 8192    258.85    241.45
</span><br>
<span class="quotelev1">&gt; 16384    307.96    405.90
</span><br>
<span class="quotelev1">&gt; 32768    422.78    591.32
</span><br>
<span class="quotelev1">&gt; 65536    790.11    632.83
</span><br>
<span class="quotelev1">&gt; 131072    1054.08    948.70
</span><br>
<span class="quotelev1">&gt; 262144    1618.20    1235.94
</span><br>
<span class="quotelev1">&gt; 524288    3126.65    1279.33
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Bibrak
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24476.php">Jeff Squyres (jsquyres): "Re: [OMPI users] can't preload binary to remote machine"</a>
<li><strong>Previous message:</strong> <a href="24474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>In reply to:</strong> <a href="24452.php">Bibrak Qamar: "[OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24503.php">Bibrak Qamar: "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Reply:</strong> <a href="24503.php">Bibrak Qamar: "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
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
