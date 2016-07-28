<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 18:14:09 2014" -->
<!-- isoreceived="20140515221409" -->
<!-- sent="Thu, 15 May 2014 19:14:06 -0300" -->
<!-- isosent="20140515221406" -->
<!-- name="Fabricio Cannini" -->
<!-- email="fcannini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="53753C2E.2020404_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5DAC1338-1DBE-4C7A-B427-09566CED3D9A_at_open-mpi.org" -->
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
<strong>From:</strong> Fabricio Cannini (<em>fcannini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 18:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24402.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24400.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24400.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24402.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24402.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Em 15-05-2014 18:40, Ralph Castain escreveu:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 15, 2014, at 2:34 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Em 15-05-2014 07:29, Jeff Squyres (jsquyres) escreveu:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think Ralph's email summed it up pretty well -- we unfortunately have (at least) two distinct groups of people who install OMPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a) those who know exactly what they want and don't want anything else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b) those who don't know exactly what they want and prefer to have everything installed, and have OMPI auto-select at run time exactly what to use based on the system on which it's running
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We've traditionally catered to the b) crowd, and made some not-very-easy-to-use capabilities for the a) crowd (i.e., you can manually disable each plugin you don't want to build via configure, but the syntax is fairly laborious).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph and I talked about the possibility of something analogous to &quot;make menuconfig&quot; for Linux kernels, where you get a menu-like system (UI TBD) to pick exactly what options you want/don't want.  That will output a text config file that can be fed to configure, something along the lines of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ./configure --only-build-exactly-this-stuff=file-output-from-menuconfig
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This idea is *very* rough; I anticipate that it will change quite a bit over time, and it'll take us a bit of time to design and implement it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please allow me to chip in my $0.02 and suggest to not reinvent the wheel, but instead consider to migrate the build system to cmake :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LOL - that would require a massive rewrite that I don't think any of us are wiling to undertake! Besides, we looked at cmake before, and the negatives outweighed the benefits from our perspective at that time - not sure we'd change that opinion today.
</span><br>
<p>Alright, but now I'm curious as to why you decided against it.
<br>
Could please elaborate on it a bit ?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24402.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24400.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24400.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24402.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24402.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
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
