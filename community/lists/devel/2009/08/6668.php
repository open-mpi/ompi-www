<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 01:01:21 2009" -->
<!-- isoreceived="20090818050121" -->
<!-- sent="Mon, 17 Aug 2009 22:02:02 -0700" -->
<!-- isosent="20090818050202" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="4A8A35CA.3030908_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="967576726.1477701250569403375.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 01:02:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6669.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6667.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6667.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6669.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt;OK, grabbed that (1.4a1r21825). Configured with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;./configure --prefix=$FOO --with-openib --with-tm=/usr/
</span><br>
<span class="quotelev1">&gt;local/torque/latest --enable-static  --enable-shared
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It built &amp; installed OK, but when running a trivial example
</span><br>
<span class="quotelev1">&gt;with it I don't see evidence for that code getting called.
</span><br>
<span class="quotelev1">&gt;Perhaps I'm not passing the correct options ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ mpiexec -bysocket -bind-to-socket -mca odls_base_report_bindings 99 -mca odls_base_verbose 7 ./cpi-1.4
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Ah, you're missing the third secret safety switch that prevents hapless 
<br>
mortals from using this stuff accidentally!  :^)
<br>
<p>I think you need to add
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--mca opal_paffinity_alone 1
<br>
<p>a name that not even Ralph himself likes!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6669.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6667.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6667.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6669.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
