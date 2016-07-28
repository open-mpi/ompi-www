<?
$subject_val = "Re: [OMPI users] RES:  RES:  Error with ARM target";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 09:46:17 2011" -->
<!-- isoreceived="20110425134617" -->
<!-- sent="Mon, 25 Apr 2011 07:46:07 -0600" -->
<!-- isosent="20110425134607" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RES:  RES:  Error with ARM target" -->
<!-- id="50E08AFB-21A3-404C-B4B8-E2FE704E3410_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="87C8AADF9E20C14C811B0AFA1747DA540149805A_at_filipides.ad.ufrgs.br" -->
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
<strong>Subject:</strong> Re: [OMPI users] RES:  RES:  Error with ARM target<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-25 09:46:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16341.php">Barrett, Brian W: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
<li><strong>Previous message:</strong> <a href="16339.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  RES:  Error with ARM target"</a>
<li><strong>In reply to:</strong> <a href="16339.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  RES:  Error with ARM target"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16341.php">Barrett, Brian W: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
<li><strong>Reply:</strong> <a href="16341.php">Barrett, Brian W: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you've reversed the role of host and target then. &quot;host&quot; is the machine type you are compiling on, and &quot;target&quot; is the machine you are compiling for.
<br>
<p>There used to be a wiki page on cross-compiling OMPI, but I couldn't locate it this morning - I'm sure it's still there, but it is hard to find. Try searching the OMPI web site for info.
<br>
<p><p>On Apr 25, 2011, at 5:09 AM, Fernando Dutra Fagundes Macedo wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to cross-compile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Mensagem original-----
</span><br>
<span class="quotelev1">&gt; De: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] Em nome de Ralph Castain
</span><br>
<span class="quotelev1">&gt; Enviada em: s&#225;bado, 23 de abril de 2011 17:21
</span><br>
<span class="quotelev1">&gt; Para: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Assunto: Re: [OMPI users] RES: Error with ARM target
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't give it a host argument - unless you are trying to cross-compile, it should figure it out for itself
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2011, at 1:25 PM, Fernando Dutra Fagundes Macedo wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Correcting:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried 1.5.2 and 1.5.3.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Mensagem original-----
</span><br>
<span class="quotelev2">&gt;&gt; De: users-bounces_at_[hidden] em nome de Fernando Dutra Fagundes Macedo
</span><br>
<span class="quotelev2">&gt;&gt; Enviada: s&#225;b 23/4/2011 16:16
</span><br>
<span class="quotelev2">&gt;&gt; Para: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Assunto: [OMPI users] Error with ARM target
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to use Open MPI on a Friendly ARM board, but I can't compile it to ARM target. I'm trying to configure the package this way:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure -host=&quot;arm&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What can I do to make it work?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More information:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Error: &quot;configure: error: No atomic primitives available for arm-unknown-none&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Version: 1.4.2 and 1.4.3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Fernando Macedo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;winmail.dat&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="16341.php">Barrett, Brian W: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
<li><strong>Previous message:</strong> <a href="16339.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  RES:  Error with ARM target"</a>
<li><strong>In reply to:</strong> <a href="16339.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  RES:  Error with ARM target"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16341.php">Barrett, Brian W: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
<li><strong>Reply:</strong> <a href="16341.php">Barrett, Brian W: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
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
