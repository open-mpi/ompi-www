<?
$subject_val = "[OMPI users] Error in mx_init message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 10:22:37 2008" -->
<!-- isoreceived="20080618142237" -->
<!-- sent="Wed, 18 Jun 2008 15:22:04 +0100" -->
<!-- isosent="20080618142204" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="[OMPI users] Error in mx_init message" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE801BDF60D_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] Error in mx_init message<br>
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-18 10:22:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5928.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Previous message:</strong> <a href="5926.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5928.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Reply:</strong> <a href="5928.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have OpenMPI-1.2.5 configured with myrinet and infiniband:
<br>
<p>OMPI_MCA_btl=openib,self,sm
<br>
<p>The job runs with the &quot;error&quot; message 
<br>
<p>&quot;Error in mx_init (error MX driver not loaded.)&quot;
<br>
<p>which makes sense in itself as there is no myrinet card on the node.
<br>
<p>Is it correct to assume that the ib interconnect will be used anyway? 
<br>
<p>I saw an old email with a similar query and a comment that this message
<br>
would be removed in a future release, has that happened yet?
<br>
<p>Thanks
<br>
<p>Henk
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5928.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Previous message:</strong> <a href="5926.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5928.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Reply:</strong> <a href="5928.php">George Bosilca: "Re: [OMPI users] Error in mx_init message"</a>
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
