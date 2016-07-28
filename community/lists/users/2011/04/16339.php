<?
$subject_val = "[OMPI users] RES:  RES:  Error with ARM target";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 07:09:21 2011" -->
<!-- isoreceived="20110425110921" -->
<!-- sent="Mon, 25 Apr 2011 08:09:12 -0300" -->
<!-- isosent="20110425110912" -->
<!-- name="Fernando Dutra Fagundes Macedo" -->
<!-- email="fmacedo_at_[hidden]" -->
<!-- subject="[OMPI users] RES:  RES:  Error with ARM target" -->
<!-- id="87C8AADF9E20C14C811B0AFA1747DA540149805A_at_filipides.ad.ufrgs.br" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7467BF2B-E16B-4C69-AF35-14D919A41623_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] RES:  RES:  Error with ARM target<br>
<strong>From:</strong> Fernando Dutra Fagundes Macedo (<em>fmacedo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-25 07:09:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16340.php">Ralph Castain: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
<li><strong>Previous message:</strong> <a href="16338.php">&#195;&#207;&#207;&#220;&#190;&#252;: "[OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<li><strong>In reply to:</strong> <a href="16337.php">Ralph Castain: "Re: [OMPI users] RES:  Error with ARM target"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16340.php">Ralph Castain: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
<li><strong>Reply:</strong> <a href="16340.php">Ralph Castain: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to cross-compile.
<br>
<p>-----Mensagem original-----
<br>
De: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] Em nome de Ralph Castain
<br>
Enviada em: s&#225;bado, 23 de abril de 2011 17:21
<br>
Para: Open MPI Users
<br>
Assunto: Re: [OMPI users] RES: Error with ARM target
<br>
<p>Don't give it a host argument - unless you are trying to cross-compile, it should figure it out for itself
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16340.php">Ralph Castain: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
<li><strong>Previous message:</strong> <a href="16338.php">&#195;&#207;&#207;&#220;&#190;&#252;: "[OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<li><strong>In reply to:</strong> <a href="16337.php">Ralph Castain: "Re: [OMPI users] RES:  Error with ARM target"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16340.php">Ralph Castain: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
<li><strong>Reply:</strong> <a href="16340.php">Ralph Castain: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
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
