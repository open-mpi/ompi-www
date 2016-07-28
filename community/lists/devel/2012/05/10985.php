<?
$subject_val = "Re: [OMPI devel] 1.6rc3 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 09:52:09 2012" -->
<!-- isoreceived="20120509135209" -->
<!-- sent="Wed, 9 May 2012 15:52:03 +0200" -->
<!-- isosent="20120509135203" -->
<!-- name="Ludovic.Hablot_at_[hidden]" -->
<!-- email="Ludovic.Hablot_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6rc3 is out" -->
<!-- id="OF4ECE5174.DE127CDC-ONC12579F9.004C2D50-C12579F9.004C2D56_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ABFC530D-DF84-40B7-933C-2FC5A6B8D7FF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6rc3 is out<br>
<strong>From:</strong> <a href="mailto:Ludovic.Hablot_at_[hidden]?Subject=Re:%20[OMPI%20devel]%201.6rc3%20is%20out"><em>Ludovic.Hablot_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-05-09 09:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10986.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>Previous message:</strong> <a href="10984.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>In reply to:</strong> <a href="10983.php">Jeff Squyres: "[OMPI devel] 1.6rc3 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10988.php">Jeff Squyres: "[OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Reply:</strong> <a href="10988.php">Jeff Squyres: "[OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>About changeset 26385:&#160;ompi/mca/btl/openib/btl_openib_component.c
<br>
<p>I might be wrong but I think that the speed we put in&#160;openib_btl-&gt;super.btl_bandwidth is the speed of one link. It will be multiply by the number of links (*4, ib_port_attr-&gt;active_width) to obtain the correct speed.
<br>
<p>Thus, the correct speed should be 8000 and not 32000. I joined a potential patch if I'm right.
<br>
<p>Tell me if I misunderstood.
<br>
<p>Regards,
<br>
<p>Ludovic
<br>
<p>-----devel-bounces_at_[hidden] a &#233;crit : -----
<br>
A : Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
De : Jeff Squyres 
<br>
Envoy&#233; par : devel-bounces_at_[hidden]
<br>
Date : 09/05/2012 12:09
<br>
Objet : [OMPI devel] 1.6rc3 is out
<br>
<p>1.6rc3 represents one trivial change over rc2; it is expected to be the last rc. &#160;It's in the usual location:
<br>
<p>&#160;&#160; &#160;<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
<br>
<p>The change is:
<br>
<p>- Added support for FDR InfiniBand detection
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10985/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10985/OpenMPI_FDR.patch">OpenMPI_FDR.patch</a>
</ul>
<!-- attachment="OpenMPI_FDR.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10986.php">Ralph Castain: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>Previous message:</strong> <a href="10984.php">Josh Hursey: "Re: [OMPI devel] RFC: Update libevent"</a>
<li><strong>In reply to:</strong> <a href="10983.php">Jeff Squyres: "[OMPI devel] 1.6rc3 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10988.php">Jeff Squyres: "[OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
<li><strong>Reply:</strong> <a href="10988.php">Jeff Squyres: "[OMPI devel] FDR: bad patch?  (was:  1.6rc3 is out)"</a>
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
