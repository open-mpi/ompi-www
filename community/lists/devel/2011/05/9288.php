<?
$subject_val = "Re: [OMPI devel] 1.4.4rc2 is up";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 16:23:44 2011" -->
<!-- isoreceived="20110524202344" -->
<!-- sent="Tue, 24 May 2011 13:23:39 -0700" -->
<!-- isosent="20110524202339" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4rc2 is up" -->
<!-- id="7755A09E-CD75-41F0-ABA1-F6C5055B2D98_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CB6264CC-7C21-486E-9FF9-C0C6E8159B17_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.4rc2 is up<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-24 16:23:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9289.php">sai sudheesh: "[OMPI devel] I added you as a friend on Quepasa.com"</a>
<li><strong>Previous message:</strong> <a href="9287.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9249.php">Jeff Squyres: "[OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see in ompi/mca/btl/openib/btl_openib/connect/ 
<br>
btl_openib_connect_oob.c and .../btl_openib_connect_xoob.c what looks  
<br>
like assignments of the form
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;path_mtu = MIN( device_mtu, remote_mtu );
<br>
<p>In ompi/mca/btl/openib/btl_openib/connect/ 
<br>
btl_openib_connect_oob.c(289) it looks correct:
<br>
<p><span class="quotelev1">&gt;         enum ibv_mtu mtu = (openib_btl-&gt;device-&gt;mtu &lt; endpoint- 
</span><br>
<span class="quotelev2">&gt; &gt;rem_info.rem_mtu) ?
</span><br>
<span class="quotelev1">&gt;             openib_btl-&gt;device-&gt;mtu : endpoint-&gt;rem_info.rem_mtu;
</span><br>
<p><p>However, in ompi/mca/btl/openib/btl_openib/connect/ 
<br>
btl_openib_connect_xoob.c(462 and 563), it looks suspicious (different  
<br>
remote_mtu's):
<br>
<p><span class="quotelev1">&gt;     attr.path_mtu = (openib_btl-&gt;device-&gt;mtu &lt; endpoint- 
</span><br>
<span class="quotelev2">&gt; &gt;rem_info.rem_mtu) ?
</span><br>
<span class="quotelev1">&gt;         openib_btl-&gt;device-&gt;mtu : rem_info-&gt;rem_mtu;
</span><br>
<p><p>Can someone verify that the code in ompi/mca/btl/openib/btl_openib/ 
<br>
connect/btl_openib_connect_xoob.c is correct?
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 5 May 2011, at 7:15 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Fixed the ROMIO attribute problem properly this time -- it's in the  
</span><br>
<span class="quotelev1">&gt; usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9288/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9289.php">sai sudheesh: "[OMPI devel] I added you as a friend on Quepasa.com"</a>
<li><strong>Previous message:</strong> <a href="9287.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9249.php">Jeff Squyres: "[OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
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
