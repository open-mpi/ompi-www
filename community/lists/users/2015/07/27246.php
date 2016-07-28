<?
$subject_val = "[OMPI users] ompi_info in 1.8.x";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 10:10:52 2015" -->
<!-- isoreceived="20150702141052" -->
<!-- sent="Thu, 2 Jul 2015 14:10:48 +0000" -->
<!-- isosent="20150702141048" -->
<!-- name="Tom Coles" -->
<!-- email="tcoles_at_[hidden]" -->
<!-- subject="[OMPI users] ompi_info in 1.8.x" -->
<!-- id="C02BC8C11F3E684DBAC6ECF9180BABF2B44F1909_at_OC11EXPO30.exchange.mit.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] ompi_info in 1.8.x<br>
<strong>From:</strong> Tom Coles (<em>tcoles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-02 10:10:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Previous message:</strong> <a href="27245.php">Saliya Ekanayake: "[OMPI users] Binding width affects allgatherv performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Reply:</strong> <a href="27247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Maybe reply:</strong> <a href="27248.php">Tom Coles: "Re: [OMPI users] ompi_info in 1.8.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I run:
<br>
ompi_info --param btl all
<br>
with OpenMPI 1.8.x, it returns only btl_tcp_if_include and btl_tcp_if_exclude. However, if I run it in 1.6.x, it returns a long list of btl parameters. These parameters are still shown in 1.8.x if I run:
<br>
ompi_info --all
<br>
But obviously this is less convenient when I am only interested in btl parameters.
<br>
<p>I'm not sure if this is a bug with the first command I gave above or if something has changed that I'm not aware of.
<br>
<p>I run RHEL 5.11 and have tried compiling with various GCC versions, including 4.4.7 (from RedHat's yum repository), 4.8.2, 4.9.1, and 5.1.
<br>
<p>Thanks for any help/advice.
<br>
<p>Tom Coles 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Previous message:</strong> <a href="27245.php">Saliya Ekanayake: "[OMPI users] Binding width affects allgatherv performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Reply:</strong> <a href="27247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Maybe reply:</strong> <a href="27248.php">Tom Coles: "Re: [OMPI users] ompi_info in 1.8.x"</a>
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
