<?
$subject_val = "Re: [OMPI users] Firewall settings for MPI communication";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  1 07:46:43 2016" -->
<!-- isoreceived="20160601114643" -->
<!-- sent="Wed, 1 Jun 2016 20:46:41 +0900" -->
<!-- isosent="20160601114641" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Firewall settings for MPI communication" -->
<!-- id="CAAkFZ5t2w79UXeORNm13FXR9V9QTsP=soZPqqB0aeBaR6McwXg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="de9f2b67dfce31488e14d33c1042518b_at_ascssrv" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-01 07:46:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29341.php">Megdich Islem: "Re: [OMPI users] users Digest, Vol 3514, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="29339.php">Ping Wang: "[OMPI users] Firewall settings for MPI communication"</a>
<li><strong>In reply to:</strong> <a href="29339.php">Ping Wang: "[OMPI users] Firewall settings for MPI communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Firewall settings for MPI communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
which network are your VMs using for communications ?
<br>
if this is tcp, then you also have to specify a restricted set of allowed
<br>
ports for the tcp btl
<br>
<p>that would be something like
<br>
mpirun --mca btl_tcp_dynamic_ports 49990-50010 ...
<br>
<p>please double check the Open MPI 1.6.5 parameter and syntax with
<br>
ompi_info --all
<br>
(or check the archives, I think I posted the correct command line a few
<br>
weeks ago)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, June 1, 2016, Ping Wang &lt;ping.wang_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm using Open MPI 1.6.5 to run OpenFOAM in parallel on several VMs on a
</span><br>
<span class="quotelev1">&gt; cloud. mpirun hangs without any error messages. I think this is a firewall
</span><br>
<span class="quotelev1">&gt; issue. Because when I open all the TCP ports(1-65535) in the security group
</span><br>
<span class="quotelev1">&gt; of VMs, mpirun works well. However I was suggested to open as less ports as
</span><br>
<span class="quotelev1">&gt; possible. So I have to limit MPI to run on a range of ports. I opened the
</span><br>
<span class="quotelev1">&gt; port range 49990-50010 for MPI communication. And use command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca oob_tcp_dynamic_ports 49990-50010 -np 4 --hostfile machines
</span><br>
<span class="quotelev1">&gt; simpleFoam &#226;&#128;&#147;parallel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it still hangs. How can I specify a port range that OpenMPI will use?
</span><br>
<span class="quotelev1">&gt; I appreciate any help you can provide.
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
<span class="quotelev1">&gt; [image: ascs_logo_300dpi]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ping Wang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Automotive Simulation Center Stuttgart e.V.*
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
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','ping.wang_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Web: <a href="http://www.asc-s.de">http://www.asc-s.de</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Social Media: [image: facebook]/asc.stuttgart
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.facebook.com/asc.stuttgart">http://www.facebook.com/asc.stuttgart</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *------------------------------------------------------*
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
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29340/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29340/image001.png" alt="image001.png">
<!-- attachment="image001.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29340/image002.gif" alt="image002.gif">
<!-- attachment="image002.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29341.php">Megdich Islem: "Re: [OMPI users] users Digest, Vol 3514, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="29339.php">Ping Wang: "[OMPI users] Firewall settings for MPI communication"</a>
<li><strong>In reply to:</strong> <a href="29339.php">Ping Wang: "[OMPI users] Firewall settings for MPI communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Firewall settings for MPI communication"</a>
<li><strong>Reply:</strong> <a href="29342.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Firewall settings for MPI communication"</a>
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
