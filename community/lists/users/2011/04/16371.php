<?
$subject_val = "Re: [OMPI users] btl_openib_cpc_include rdmacm questions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 08:07:09 2011" -->
<!-- isoreceived="20110428120709" -->
<!-- sent="Thu, 28 Apr 2011 08:07:03 -0400" -->
<!-- isosent="20110428120703" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_cpc_include rdmacm questions" -->
<!-- id="DFD9E196-B173-4152-827C-885D72479E3F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6625D45A-2696-4905-BF36-56296559036E_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_cpc_include rdmacm questions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-28 08:07:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Previous message:</strong> <a href="16370.php">Jeff Squyres: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>In reply to:</strong> <a href="16348.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16381.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="16381.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 27, 2011, at 10:02 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Argh, our messed up environment with three generations on infiniband bit us,
</span><br>
<span class="quotelev1">&gt; Setting openib_cpc_include to rdmacm causes ib to not be used on our old DDR ib on some of our hosts.  Note that jobs will never run across our old DDR ib and our new QDR stuff where rdmacm does work.
</span><br>
<p>Hmm -- odd.  I use RDMACM on some old DDR (and SDR!) IB hardware and it seems to work fine.
<br>
<p>Do you have any indication as to why OMPI is refusing to use rdmacm on your older hardware, other than &quot;No OF connection schemes reported...&quot;?  Try running with --mca btl_base_verbose 100 (beware: it will be a truckload of output).  Make sure that you have rdmacm support available on those machines, both in OMPI and in OFED/the OS.
<br>
<p><span class="quotelev1">&gt; I am doing some testing with:
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_btl_openib_cpc_include=rdmacm,oob,xoob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I want to know is there a way to tell mpirun to 'dump all resolved mca settings'  Or something similar. 
</span><br>
<p>I'm not quite sure what you're asking here -- do you want to override MCA params on specific hosts?
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
<li><strong>Next message:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Previous message:</strong> <a href="16370.php">Jeff Squyres: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>In reply to:</strong> <a href="16348.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16381.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="16381.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
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
