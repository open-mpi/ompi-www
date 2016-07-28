<?
$subject_val = "Re: [OMPI users] error durgin execution";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 13:11:18 2009" -->
<!-- isoreceived="20090915171118" -->
<!-- sent="Tue, 15 Sep 2009 13:11:08 -0400" -->
<!-- isosent="20090915171108" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error durgin execution" -->
<!-- id="2F6D3AFB-EFA4-480B-AC7E-E2A49ABC1530_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4182F23D-44A6-4157-86CD-E93847D38FC8_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error durgin execution<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-15 13:11:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10656.php">Jonathan Dursi: "[OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 + gcc4.4?"</a>
<li><strong>Previous message:</strong> <a href="10654.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>In reply to:</strong> <a href="10631.php">Luis Vitorio Cargnini: "[OMPI users] error durgin execution"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It could mean that you have firewalls up between your hosts.
<br>
<p>Are TCP connections allowed between random ports between node11 and  
<br>
node28?
<br>
<p><p>On Sep 12, 2009, at 10:18 AM, Luis Vitorio Cargnini wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Please someone could help me with this error:
</span><br>
<span class="quotelev1">&gt; [node11][0,1,7][/SourceCache/openmpi/openmpi-5/openmpi/ompi/mca/btl/
</span><br>
<span class="quotelev1">&gt; tcp/btl_tcp_frag.c:202:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv:
</span><br>
<span class="quotelev1">&gt; readv failed with errno=54
</span><br>
<span class="quotelev1">&gt; [node28][0,1,22][/SourceCache/openmpi/openmpi-5/openmpi/ompi/mca/btl/
</span><br>
<span class="quotelev1">&gt; tcp/btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=61
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea of what this can be ? and how to solve it ? and how to avoid
</span><br>
<span class="quotelev1">&gt; this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;PGP.sig&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10656.php">Jonathan Dursi: "[OMPI users] Random-ish hangs using btl sm with OpenMPI 1.3.2 + gcc4.4?"</a>
<li><strong>Previous message:</strong> <a href="10654.php">Dominik T&#225;borsk&#253;: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>In reply to:</strong> <a href="10631.php">Luis Vitorio Cargnini: "[OMPI users] error durgin execution"</a>
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
