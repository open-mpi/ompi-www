<?
$subject_val = "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  3 08:53:41 2010" -->
<!-- isoreceived="20100603125341" -->
<!-- sent="Thu, 03 Jun 2010 14:54:25 +0200" -->
<!-- isosent="20100603125425" -->
<!-- name="guillaume ranquet" -->
<!-- email="guillaume.ranquet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager." -->
<!-- id="4C07A601.8080304_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FFF7BB1C-D714-448F-8B58-60E5ADACB78F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager.<br>
<strong>From:</strong> guillaume ranquet (<em>guillaume.ranquet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-03 08:54:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13219.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13217.php">Cristobal Navarro: "[OMPI users] Question about tree generation (in parallel)"</a>
<li><strong>In reply to:</strong> <a href="13213.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13219.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13219.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 06/02/2010 07:51 PM, Jeff Squyres wrote:
<br>
<span class="quotelev2">&gt;&gt;From your prior mails:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - there's no segv when ptmalloc is disabled at run-time via the env var
</span><br>
<span class="quotelev1">&gt; - there's no segv when MX is completed disabled (both BTL and MTL)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What happens if you run with only MX?  I *assume* that works with no segv...?
</span><br>
<p>this has been tried I think?
<br>
on a node with only MX, and no IB hardware, everything runs fine.
<br>
<p><span class="quotelev1">&gt; It might be interesting to see what happens if you run with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl mx,openib,sm,self --mca pml ^cm --mca mpi_leave_pinned 0 ...yourapp...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This should run with both verbs and MX, and the memory manager is in place at run-time, but it isn't being used to track memory.  That's slightly different than having the memory manager in place at run-time *and* using it to track memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>granquet_at_bordeplage-15 ~ $ mpirun --mca btl mx,openib,sm,self --mca pml
<br>
^cm --mca mpi_leave_pinned 0 ~/bwlat/mpi_helloworld
<br>
[bordeplage-15.bordeaux.grid5000.fr:02707] Error in mx_init (error No MX
<br>
device entry in /dev.)
<br>
Hello world from process 0 of 1
<br>
<p>it works :)
<br>
<p><span class="quotelev2">&gt;&gt; the goal is to run the same version everywhere on every nodes (for the
</span><br>
<span class="quotelev2">&gt;&gt; sake of simplicity).
</span><br>
<span class="quotelev2">&gt;&gt; the current plans were targeting 1.4.1.
</span><br>
<span class="quotelev2">&gt;&gt; I don't think our users would mind upgrading to 1.4.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, it *is* the same version on all nodes -- you're just running with different MCA parameter values.  Also FWIW, the sysadmin can hide these MCA params in a system-level file so that users don't have to deal with them, if that works for you.  See:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>thank you for the pointer, setting the mca in openmpi-mca-params.conf
<br>
would do the trick.
<br>
<p><p>On 06/02/2010 08:12 PM, Scott Atchley wrote:
<br>
<span class="quotelev1">&gt; On Jun 2, 2010, at 1:31 PM, guillaume ranquet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; granquet_at_bordeplage-9 ~/openmpi-1.4.2 $ ~/openmpi-1.4.2-bin/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; - --mca btl openib,sm,self --mca pml ^cm ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from process 0 of 1
</span><br>
<span class="quotelev2">&gt;&gt; granquet_at_bordeplage-9 ~/openmpi-1.4.2 $
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can tell it works :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok. I think that OMPI is trying to open the MX MTL first. It fails at
</span><br>
mx_init() (the first error message) but it had already created some
<br>
mpool resources. It then tries to open the MX BTL and it skips the MX
<br>
initialization and returns SUCCESS. The MX BTL then tries to call
<br>
mx_get_info() which fails and prints the second message.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try the attached patch. It tries to clean up if mx_init() fails and
</span><br>
does not return SUCCESS on subsequent attempts to initialize MX.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I tried your patch and it seems to correct the issue:
<br>
<p>configured with:  --prefix=$HOME/openmpi-1.4.2-nomx-bin/
<br>
- --with-openib=/usr --with-mx=/usr
<br>
<p>$ ~/openmpi-1.4.2-nomx-bin/bin/mpirun ~/bwlat/mpi_helloworld
<br>
[bordeplage-15.bordeaux.grid5000.fr:22406] Error in mx_init (error No MX
<br>
device entry in /dev.)
<br>
Hello world from process 0 of 1
<br>
<p>don't hesitate if you need further testing :)
<br>
<p>do you plan on applying this patch on next release? (1.4.3?)
<br>
-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v2.0.15 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iQEcBAEBAgAGBQJMB6YAAAoJEEzIl7PMEAliiB4H/RrZwjALxXGAQ9H6EqPuPBJy
<br>
z5VWInUbT4kCCgsQPpd2G8oJjnskM+HTgyvwHIdjyaVtGft6aZexM+Vqf1CxGnLB
<br>
TXBopYSQbHf7S20KcENMRT+7Miel+bZ1lvm0vBasdw3FBnOK2Io9uaAYx702u61P
<br>
5DUztK/ujFgzwW9AyxuF2AZOsgLQhevo6hz0JrtgPGNVruAU+AT1HFLZAB+wiK7n
<br>
xejREXuULASJsqDoRu9JxCFqAJJpOXzmGCgjePUDX/lQQxfeS+o2L7NoJ82G6CCF
<br>
0SN9uoKhD0TV6MfL6fvzvzqhLz0JPlY6FqPAeWxSJGmHfj97pIFaqSYgq8a7J+I=
<br>
=3pXJ
<br>
-----END PGP SIGNATURE-----
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13218/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13219.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13217.php">Cristobal Navarro: "[OMPI users] Question about tree generation (in parallel)"</a>
<li><strong>In reply to:</strong> <a href="13213.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13219.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13219.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
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
