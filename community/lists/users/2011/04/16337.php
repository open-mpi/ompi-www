<?
$subject_val = "Re: [OMPI users] RES:  Error with ARM target";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 23 16:20:59 2011" -->
<!-- isoreceived="20110423202059" -->
<!-- sent="Sat, 23 Apr 2011 14:20:50 -0600" -->
<!-- isosent="20110423202050" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RES:  Error with ARM target" -->
<!-- id="7467BF2B-E16B-4C69-AF35-14D919A41623_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="87C8AADF9E20C14C811B0AFA1747DA54300DAF_at_filipides.ad.ufrgs.br" -->
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
<strong>Subject:</strong> Re: [OMPI users] RES:  Error with ARM target<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-23 16:20:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16338.php">цооэ╬Э: "[OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<li><strong>Previous message:</strong> <a href="16336.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  Error with ARM target"</a>
<li><strong>In reply to:</strong> <a href="16336.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  Error with ARM target"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16339.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  RES:  Error with ARM target"</a>
<li><strong>Reply:</strong> <a href="16339.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  RES:  Error with ARM target"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't give it a host argument - unless you are trying to cross-compile, it should figure it out for itself
<br>
<p><p>On Apr 23, 2011, at 1:25 PM, Fernando Dutra Fagundes Macedo wrote:
<br>
<p><span class="quotelev1">&gt; Correcting:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried 1.5.2 and 1.5.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Mensagem original-----
</span><br>
<span class="quotelev1">&gt; De: users-bounces_at_[hidden] em nome de Fernando Dutra Fagundes Macedo
</span><br>
<span class="quotelev1">&gt; Enviada: s&#225;b 23/4/2011 16:16
</span><br>
<span class="quotelev1">&gt; Para: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Assunto: [OMPI users] Error with ARM target
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to use Open MPI on a Friendly ARM board, but I can't compile it to ARM target. I'm trying to configure the package this way:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure -host=&quot;arm&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What can I do to make it work?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More information:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error: &quot;configure: error: No atomic primitives available for arm-unknown-none&quot;
</span><br>
<span class="quotelev1">&gt; Version: 1.4.2 and 1.4.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Fernando Macedo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;winmail.dat&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16338.php">цооэ╬Э: "[OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<li><strong>Previous message:</strong> <a href="16336.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  Error with ARM target"</a>
<li><strong>In reply to:</strong> <a href="16336.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  Error with ARM target"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16339.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  RES:  Error with ARM target"</a>
<li><strong>Reply:</strong> <a href="16339.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  RES:  Error with ARM target"</a>
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
