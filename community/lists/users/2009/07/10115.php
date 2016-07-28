<?
$subject_val = "Re: [OMPI users] Installation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 03:03:53 2009" -->
<!-- isoreceived="20090728070353" -->
<!-- sent="Tue, 28 Jul 2009 17:03:44 +1000" -->
<!-- isosent="20090728070344" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installation problems" -->
<!-- id="1248764624.5784.94.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="3A48D334-2806-445A-8CC1-4614043AF563_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Installation problems<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-28 03:03:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10116.php">Dominik Táborský: "[OMPI users] init failing"</a>
<li><strong>Previous message:</strong> <a href="10114.php">Jacob Balthazor: "Re: [OMPI users] Installation problems"</a>
<li><strong>In reply to:</strong> <a href="10114.php">Jacob Balthazor: "Re: [OMPI users] Installation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10113.php">Alexey Sokolov: "Re: [OMPI users] Installation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2009-07-27 at 23:56 -0700, Jacob Balthazor wrote:
<br>
<span class="quotelev1">&gt; I ran the command, how would you interpret these results to create a  
</span><br>
<span class="quotelev1">&gt; path for my include?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [beowulf1_at_localhost ~]$ whereis libmpi.so
</span><br>
<span class="quotelev1">&gt; libmpi:
</span><br>
<span class="quotelev1">&gt; [beowulf1_at_localhost ~]$
</span><br>
<p>I'd interpret it as you've got things stashed in strange places (whereis
<br>
looks in a well-defined set of places).  On my machine:
<br>
&nbsp;whereis libmpi.so
<br>
libmpi: /usr/local/lib/libmpi.la /usr/local/lib/libmpi.so
<br>
<p>Try: find / -name 'libmpi*'
<br>
<p>Or work out how to convince yum to show you all installed files from
<br>
that package.  In apt-based systems this is easy.  I'd be surprised if
<br>
it's not in yum.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10116.php">Dominik Táborský: "[OMPI users] init failing"</a>
<li><strong>Previous message:</strong> <a href="10114.php">Jacob Balthazor: "Re: [OMPI users] Installation problems"</a>
<li><strong>In reply to:</strong> <a href="10114.php">Jacob Balthazor: "Re: [OMPI users] Installation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10113.php">Alexey Sokolov: "Re: [OMPI users] Installation problems"</a>
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
