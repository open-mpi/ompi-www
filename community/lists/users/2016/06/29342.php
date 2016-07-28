<?
$subject_val = "Re: [OMPI users] Firewall settings for MPI communication";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  1 09:02:33 2016" -->
<!-- isoreceived="20160601130233" -->
<!-- sent="Wed, 1 Jun 2016 13:02:22 +0000" -->
<!-- isosent="20160601130222" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Firewall settings for MPI communication" -->
<!-- id="AE97B273-C16B-4BC3-BC30-924D2569717D_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5t2w79UXeORNm13FXR9V9QTsP=soZPqqB0aeBaR6McwXg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Firewall settings for MPI communication<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-01 09:02:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29343.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3514, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="29341.php">Megdich Islem: "Re: [OMPI users] users Digest, Vol 3514, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="29340.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29349.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29349.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In addition, you might want to consider upgrading to Open MPI v1.10.x (v1.6.x is fairly ancient).
<br>

<br>
<span class="quotelev1">&gt; On Jun 1, 2016, at 7:46 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which network are your VMs using for communications ?
</span><br>
<span class="quotelev1">&gt; if this is tcp, then you also have to specify a restricted set of allowed ports for the tcp btl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that would be something like
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_dynamic_ports 49990-50010 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; please double check the Open MPI 1.6.5 parameter and syntax with
</span><br>
<span class="quotelev1">&gt; ompi_info --all
</span><br>
<span class="quotelev1">&gt; (or check the archives, I think I posted the correct command line a few weeks ago)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wednesday, June 1, 2016, Ping Wang &lt;ping.wang_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I'm using Open MPI 1.6.5 to run OpenFOAM in parallel on several VMs on a cloud. mpirun hangs without any error messages. I think this is a firewall issue. Because when I open all the TCP ports(1-65535) in the security group of VMs, mpirun works well. However I was suggested to open as less ports as possible. So I have to limit MPI to run on a range of ports. I opened the port range 49990-50010 for MPI communication. And use command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --mca oob_tcp_dynamic_ports 49990-50010 -np 4 --hostfile machines simpleFoam &#226;&#128;&#147;parallel. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it still hangs. How can I specify a port range that OpenMPI will use? I appreciate any help you can provide.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ping Wang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;image001.png&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ping Wang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Automotive Simulation Center Stuttgart e.V.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nobelstra&#195;&#159;e 15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; D-70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Telefon: +49 711 699659-14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fax: +49 711 699659-29
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; E-Mail: ping.wang_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Web: <a href="http://www.asc-s.de">http://www.asc-s.de</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Social Media: &lt;image002.gif&gt;/asc.stuttgart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29340.php">http://www.open-mpi.org/community/lists/users/2016/06/29340.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29343.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3514, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="29341.php">Megdich Islem: "Re: [OMPI users] users Digest, Vol 3514, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="29340.php">Gilles Gouaillardet: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29349.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29349.php">Ping Wang: "Re: [OMPI users] Firewall settings for MPI communication"</a>
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
