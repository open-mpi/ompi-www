<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 17:28:56 2016" -->
<!-- isoreceived="20160524212856" -->
<!-- sent="Tue, 24 May 2016 21:28:54 +0000" -->
<!-- isosent="20160524212854" -->
<!-- name="Ryan Novosielski" -->
<!-- email="novosirj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?" -->
<!-- id="79C91F1D-C554-4051-AE16-04846B0C9791_at_rutgers.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="39BF333B-63B8-48AD-AE31-7981683698BD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?<br>
<strong>From:</strong> Ryan Novosielski (<em>novosirj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-24 17:28:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29312.php">Jeff Squyres (jsquyres): "Re: [OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use	mpi_f08&quot; with gfortran 5"</a>
<li><strong>Previous message:</strong> <a href="29310.php">Howard Pritchard: "Re: [OMPI users] problem with exceptions in Java interface"</a>
<li><strong>In reply to:</strong> <a href="29236.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29255.php">Dave Love: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On May 18, 2016, at 6:59 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 18, 2016, at 6:16 PM, Ryan Novosielski &lt;novosirj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;m pretty sure this is no longer relevant (having read Roland&#226;&#128;&#153;s messages about it from a couple of years ago now). Can you please confirm that for me, and then let me know if there is any way that I can silence this old copy of OpenMPI that I need to use with some software that depends on it for some reason? It is causing my users to report it as an issue pretty regularly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The message cites that only 32MB is able to be registered out of a total of 128MB.  That seems low to me.
</span><br>
<p>That&#226;&#128;&#153;s 32768 MiB, 32GB (out of 128GB).
<br>
<p><span class="quotelev1">&gt; Did you look at the FAQ item and see if there are system limits that you should increase?
</span><br>
<p>I did, but again, I&#226;&#128;&#153;ve seen other messages about this that indicate that it&#226;&#128;&#153;s not required, such as this one:
<br>
<p><a href="https://www.open-mpi.org/community/lists/users/2014/08/25090.php">https://www.open-mpi.org/community/lists/users/2014/08/25090.php</a>
<br>
<p>What can happen in these circumstances where you set something that&#226;&#128;&#153;s not required is that you end up finding out down the road that the default has changed appropriately but you&#226;&#128;&#153;re still hard-coding the wrong settings. I&#226;&#128;&#153;d prefer to avoid laying those sorts of traps for myself whenever possible. :)
<br>
<p>I&#226;&#128;&#153;m not as experienced with OpenMPI as I could be; is this not the same issue? I am using the CentOS-supplied Mellanox drivers.
<br>
<p>[novosirj_at_perceval2 profile.d]$ modinfo mlx4_en
<br>
filename:       /lib/modules/3.10.0-229.20.1.el7.x86_64/kernel/drivers/net/ethernet/mellanox/mlx4/mlx4_en.ko
<br>
version:        2.2-1 (Feb 2014)
<br>
license:        Dual BSD/GPL
<br>
description:    Mellanox ConnectX HCA Ethernet driver
<br>
author:         Liran Liss, Yevgeny Petrilin
<br>
rhelversion:    7.1
<br>
srcversion:     DC68737527B57AD77CD3AD6
<br>
depends:        mlx4_core,ptp,vxlan
<br>
intree:         Y
<br>
vermagic:       3.10.0-229.20.1.el7.x86_64 SMP mod_unload modversions
<br>
signer:         CentOS Linux kernel signing key
<br>
sig_key:        38:C3:70:0F:5B:84:90:11:D3:72:15:7D:E5:CD:06:17:C8:15:DE:03
<br>
sig_hashalgo:   sha256
<br>
parm:           udp_rss:Enable RSS for incoming UDP traffic or disabled (0) (uint)
<br>
parm:           pfctx:Priority based Flow Control policy on TX[7:0]. Per priority bit mask (uint)
<br>
parm:           pfcrx:Priority based Flow Control policy on RX[7:0]. Per priority bit mask (uint)
<br>
parm:           inline_thold:Threshold for using inline data (range: 17-104, default: 104) (uint)
<br>
<p><pre>
--
____
|| \\UTGERS,  	 |---------------------------*O*---------------------------
||_// the State	 |         Ryan Novosielski - novosirj_at_[hidden]
|| \\ University | Sr. Technologist - 973/972.0922 (2x0922) ~*~ RBHS Campus
||  \\    of NJ	 | Office of Advanced Research Computing - MSB C630, Newark
   `'
--
____
|| \\UTGERS,  	 |---------------------------*O*---------------------------
||_// the State	 |         Ryan Novosielski - novosirj_at_[hidden]
|| \\ University | Sr. Technologist - 973/972.0922 (2x0922) ~*~ RBHS Campus
||  \\    of NJ	 | Office of Advanced Research Computing - MSB C630, Newark
     `'

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29311/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29312.php">Jeff Squyres (jsquyres): "Re: [OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use	mpi_f08&quot; with gfortran 5"</a>
<li><strong>Previous message:</strong> <a href="29310.php">Howard Pritchard: "Re: [OMPI users] problem with exceptions in Java interface"</a>
<li><strong>In reply to:</strong> <a href="29236.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29255.php">Dave Love: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
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
