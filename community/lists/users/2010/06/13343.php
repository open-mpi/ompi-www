<?
$subject_val = "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 18 11:39:00 2010" -->
<!-- isoreceived="20100618153900" -->
<!-- sent="Fri, 18 Jun 2010 08:38:55 -0700" -->
<!-- isosent="20100618153855" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager." -->
<!-- id="4D348FB8-33F7-4EB3-8976-DB963C02EAAF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C1B8E82.307_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-18 11:38:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13344.php">David Turner: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>Previous message:</strong> <a href="13342.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13342.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13215.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the confusion; I was asking George which one wins.  I'm not active in the MX portion of the OMPI code base, so I don't know which one is better / should be used.
<br>
<p><p>On Jun 18, 2010, at 8:19 AM, guillaume ranquet wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sorry for the very long delay, I didn't understood you waited an answer
</span><br>
<span class="quotelev1">&gt; from my side on this. (the debate seemed to be between maintainers)
</span><br>
<span class="quotelev1">&gt; do not hesitate to bug me if I'm not answering after some days.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to answer shortly:
</span><br>
<span class="quotelev1">&gt; - -yes I've tested the patch submited on this thread by Scott and it
</span><br>
<span class="quotelev1">&gt; solved my issues.
</span><br>
<span class="quotelev1">&gt; - -no, I havent tested the patch submited by George, I can have a quick
</span><br>
<span class="quotelev1">&gt; try if needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as of &quot;which one wins&quot;, I'm quite sure you have more clues than me on
</span><br>
<span class="quotelev1">&gt; the subjet :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 06/07/2010 09:49 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; George --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Scott's patch was different than the one you applied.  Apparently, his fixes this user's problem (I don't know if Guillaume tested yours).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Which one wins?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 3, 2010, at 9:49 AM, Scott Atchley wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 3, 2010, at 8:54 AM, guillaume ranquet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; granquet_at_bordeplage-15 ~ $ mpirun --mca btl mx,openib,sm,self --mca pml
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ^cm --mca mpi_leave_pinned 0 ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [bordeplage-15.bordeaux.grid5000.fr:02707] Error in mx_init (error No MX
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; device entry in /dev.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello world from process 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it works :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff, you may want to change this message to opal_output_verbose(). It is in $OMPI/ompi/mca/common/common_mx.c.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ok. I think that OMPI is trying to open the MX MTL first. It fails at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mx_init() (the first error message) but it had already created some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpool resources. It then tries to open the MX BTL and it skips the MX
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initialization and returns SUCCESS. The MX BTL then tries to call
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mx_get_info() which fails and prints the second message.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Try the attached patch. It tries to clean up if mx_init() fails and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; does not return SUCCESS on subsequent attempts to initialize MX.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Scott
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried your patch and it seems to correct the issue:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configured with:  --prefix=$HOME/openmpi-1.4.2-nomx-bin/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - --with-openib=/usr --with-mx=/usr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ ~/openmpi-1.4.2-nomx-bin/bin/mpirun ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [bordeplage-15.bordeaux.grid5000.fr:22406] Error in mx_init (error No MX
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; device entry in /dev.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello world from process 0 of 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Excellent.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't hesitate if you need further testing :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for all your assistance!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do you plan on applying this patch on next release? (1.4.3?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff, I leave this up to you and George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scott
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v2.0.15 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iQEcBAEBAgAGBQJMG46CAAoJEEzIl7PMEAli+2MH/19oFkY+JM1l/1hfRIKVrSl4
</span><br>
<span class="quotelev1">&gt; +tzpWuPdrRFBODqKrZz6TTvZTBqCHar0M6FLPVTr3wvTRVMgEbdlBwr6u7GUBdVP
</span><br>
<span class="quotelev1">&gt; 3XJw25jFUKkaAOM8PbDI7V3FMZ6oyF7Xxefo2EBCRvp9lVeop6Y0c01fXz9LS6F+
</span><br>
<span class="quotelev1">&gt; SYn8mi5bmn58GKd8xKLvK2zgGDwdw5CRQRdWGPOfHVo4hcosvv0d55RhpDs1/U1C
</span><br>
<span class="quotelev1">&gt; YRabXwCM0ZU251bYLwhZCjVPZZMfrQBy8oEc1DBiHOXPnc1c25GBwMxL5WPRkR+b
</span><br>
<span class="quotelev1">&gt; xXHM2PECDACLZYKAtb/CZh94DXWxTbsMKxM9N37zf48avgKyqQYJdkwrUSlDsxc=
</span><br>
<span class="quotelev1">&gt; =zGo1
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13344.php">David Turner: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>Previous message:</strong> <a href="13342.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13342.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13215.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
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
