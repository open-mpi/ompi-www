<?
$subject_val = "Re: [OMPI users] btl_tcp_if_exclude param";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 13 09:08:55 2010" -->
<!-- isoreceived="20100413130855" -->
<!-- sent="Tue, 13 Apr 2010 09:08:48 -0400" -->
<!-- isosent="20100413130848" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_tcp_if_exclude param" -->
<!-- id="91D8D58C-407A-468C-A69C-8071C09E8A5E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="k2o3a37617f1004130603r5a59566lab4814afddb9cca2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_tcp_if_exclude param<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-13 09:08:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12620.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Previous message:</strong> <a href="12618.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>In reply to:</strong> <a href="12618.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12620.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Reply:</strong> <a href="12620.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 13, 2010, at 9:03 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; ompi_info --param btl tcp
</span><br>
<p>Ah ha... this is revealing:
<br>
<p><span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &quot;^tcp&quot;, data source: file
</span><br>
<span class="quotelev1">&gt;                           [/cineca/prod/opt/compilers/openmpi/1.3.3/intel--11.1--binary/etc/openmpi-mca-params.conf])
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the btl framework (&lt;none&gt; means use all components that can be found)
</span><br>
<p>It seems you have a config file /cineca/prod/opt/compilers/openmpi/1.3.3/intel--11.1--binary/etc/openmpi-mca-params.conf that is excluding the TCP BTL from being used.
<br>
<p>This config file will even prevent the TCP BTL from being shown in ompi_info -- remember that ompi_info shows *current* values of MCA parameters.  So you might want to do something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ompi_info --mca btl &quot;&quot; --param btl tcp
<br>
<p>That would override the &quot;btl&quot; MCA parameter in your config file, allow the BTL TCP to be loaded by ompi_info, and therefore show you all the BTL TCP params.
<br>
<p>Make sense?
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="12620.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Previous message:</strong> <a href="12618.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>In reply to:</strong> <a href="12618.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12620.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Reply:</strong> <a href="12620.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
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
