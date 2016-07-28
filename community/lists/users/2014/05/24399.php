<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 17:41:13 2014" -->
<!-- isoreceived="20140515214113" -->
<!-- sent="Thu, 15 May 2014 15:41:11 -0600" -->
<!-- isosent="20140515214111" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="20140515214111.GI25411_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="537532DC.7040905_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about scheduler support<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 17:41:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24400.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24398.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24397.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24400.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 15, 2014 at 06:34:20PM -0300, Fabricio Cannini wrote:
<br>
<span class="quotelev1">&gt; Em 15-05-2014 07:29, Jeff Squyres (jsquyres) escreveu:
</span><br>
<span class="quotelev2">&gt; &gt;I think Ralph's email summed it up pretty well -- we unfortunately have (at least) two distinct groups of people who install OMPI:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;a) those who know exactly what they want and don't want anything else
</span><br>
<span class="quotelev2">&gt; &gt;b) those who don't know exactly what they want and prefer to have everything installed, and have OMPI auto-select at run time exactly what to use based on the system on which it's running
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;We've traditionally catered to the b) crowd, and made some not-very-easy-to-use capabilities for the a) crowd (i.e., you can manually disable each plugin you don't want to build via configure, but the syntax is fairly laborious).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Ralph and I talked about the possibility of something analogous to &quot;make menuconfig&quot; for Linux kernels, where you get a menu-like system (UI TBD) to pick exactly what options you want/don't want.  That will output a text config file that can be fed to configure, something along the lines of
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   ./configure --only-build-exactly-this-stuff=file-output-from-menuconfig
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;This idea is *very* rough; I anticipate that it will change quite a bit over time, and it'll take us a bit of time to design and implement it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please allow me to chip in my $0.02 and suggest to not reinvent the wheel,
</span><br>
<span class="quotelev1">&gt; but instead consider to migrate the build system to cmake :
</span><br>
<p>Umm, no.
<br>
<p>IMHO, CMake has its own set of issues. So, its likely not going to happen.
<br>
<p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24399/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24400.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24398.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24397.php">Fabricio Cannini: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24400.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
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
