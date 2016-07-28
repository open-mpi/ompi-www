<?
$subject_val = "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 02:20:25 2014" -->
<!-- isoreceived="20140528062025" -->
<!-- sent="Tue, 27 May 2014 23:20:05 -0700" -->
<!-- isosent="20140528062005" -->
<!-- name="Bibrak Qamar" -->
<!-- email="bibrakc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to run Open MPI over TCP (Ethernet)" -->
<!-- id="CANFHntDSzU1NewL2CdF4RgmRORVnjiEp3v5d1FVc-cCE+VJW7Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AF9E11FF-9A17-4F2A-8647-F7D0EB29DCC5_at_cisco.com" -->
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
<strong>From:</strong> Bibrak Qamar (<em>bibrakc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 02:20:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24504.php">Filippo Spiga: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="24502.php">Mike Dubman: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>In reply to:</strong> <a href="24475.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff,
<br>
<p>Thanks for the information and helping me out. I too delayed replying, I
<br>
wanted to test this but the cluster here is down. I will check it and let
<br>
you know in case it doesn't work.
<br>
<p>Thanks
<br>
Bibrak Qamar
<br>
<p><p><p>On Sat, May 24, 2014 at 5:23 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; I am sorry for the delay in replying; this week got a bit crazy on me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing that Open MPI is striping across both your eth0 and ib0
</span><br>
<span class="quotelev1">&gt; interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can limit which interfaces it uses with the btl_tcp_if_include MCA
</span><br>
<span class="quotelev1">&gt; param.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     # Just use eth0
</span><br>
<span class="quotelev1">&gt;     mpirun --mca btl tcp,sm,self --mca btl_tcp_if_include eth0 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     # Just use ib0
</span><br>
<span class="quotelev1">&gt;     mpirun --mca btl tcp,sm,self --mca btl_tcp_if_include ib0 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that IPoIB is nowhere near as efficient as native verbs, so you won't
</span><br>
<span class="quotelev1">&gt; get nearly as good performance as you do with OMPI's openib transport.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note, too, that I specifically included &quot;--mca btl tcp,sm,self&quot; in the
</span><br>
<span class="quotelev1">&gt; above examples to force the use of the TCP MPI transport.  Otherwise, OMPI
</span><br>
<span class="quotelev1">&gt; may well automatically choose the native IB (openib) transport.  I see you
</span><br>
<span class="quotelev1">&gt; mentioned this in your first mail, too, but I am listing it here just to be
</span><br>
<span class="quotelev1">&gt; specific/pedantic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 22, 2014, at 3:30 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am facing problem in running Open MPI using TCP (on 1G Ethernet). In
</span><br>
<span class="quotelev1">&gt; practice the bandwidth must not exceed 1000 Mbps but for some data points
</span><br>
<span class="quotelev1">&gt; (for point-to-point ping pong) it exceeds this limit. I checked with MPICH
</span><br>
<span class="quotelev1">&gt; it works as desired.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Following is the command I issue to run my program on TCP. Am I missing
</span><br>
<span class="quotelev1">&gt; something?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -bash-3.2$ mpirun -np 2  -machinefile machines -N 1 --mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; ./bandwidth.ompi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; The following command line options and corresponding MCA parameter have
</span><br>
<span class="quotelev2">&gt; &gt; been deprecated and replaced as follows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Command line options:
</span><br>
<span class="quotelev2">&gt; &gt;     Deprecated:  --npernode, -npernode
</span><br>
<span class="quotelev2">&gt; &gt;     Replacement: --map-by ppr:N:node
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Equivalent MCA parameter:
</span><br>
<span class="quotelev2">&gt; &gt;     Deprecated:  rmaps_base_n_pernode, rmaps_ppr_n_pernode
</span><br>
<span class="quotelev2">&gt; &gt;     Replacement: rmaps_base_mapping_policy=ppr:N:node
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The deprecated forms *will* disappear in a future version of Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt; Please update to the new syntax.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world.  I am 1 on compute-0-16.local
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world.  I am 0 on compute-0-15.local
</span><br>
<span class="quotelev2">&gt; &gt; 1    25.66    0.30
</span><br>
<span class="quotelev2">&gt; &gt; 2    25.54    0.60
</span><br>
<span class="quotelev2">&gt; &gt; 4    25.34    1.20
</span><br>
<span class="quotelev2">&gt; &gt; 8    25.27    2.42
</span><br>
<span class="quotelev2">&gt; &gt; 16    25.24    4.84
</span><br>
<span class="quotelev2">&gt; &gt; 32    25.49    9.58
</span><br>
<span class="quotelev2">&gt; &gt; 64    26.44    18.47
</span><br>
<span class="quotelev2">&gt; &gt; 128    26.85    36.37
</span><br>
<span class="quotelev2">&gt; &gt; 256    29.43    66.37
</span><br>
<span class="quotelev2">&gt; &gt; 512    36.02    108.44
</span><br>
<span class="quotelev2">&gt; &gt; 1024    42.03    185.86
</span><br>
<span class="quotelev2">&gt; &gt; 2048    194.30    80.42
</span><br>
<span class="quotelev2">&gt; &gt; 4096    255.21    122.45
</span><br>
<span class="quotelev2">&gt; &gt; 8192    258.85    241.45
</span><br>
<span class="quotelev2">&gt; &gt; 16384    307.96    405.90
</span><br>
<span class="quotelev2">&gt; &gt; 32768    422.78    591.32
</span><br>
<span class="quotelev2">&gt; &gt; 65536    790.11    632.83
</span><br>
<span class="quotelev2">&gt; &gt; 131072    1054.08    948.70
</span><br>
<span class="quotelev2">&gt; &gt; 262144    1618.20    1235.94
</span><br>
<span class="quotelev2">&gt; &gt; 524288    3126.65    1279.33
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Bibrak
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24503/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24504.php">Filippo Spiga: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="24502.php">Mike Dubman: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>In reply to:</strong> <a href="24475.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<!-- nextthread="start" -->
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
