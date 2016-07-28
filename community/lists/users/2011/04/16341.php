<?
$subject_val = "Re: [OMPI users] RES:  RES:  Error with ARM target";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 09:53:46 2011" -->
<!-- isoreceived="20110425135346" -->
<!-- sent="Mon, 25 Apr 2011 13:53:14 +0000" -->
<!-- isosent="20110425135314" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RES:  RES:  Error with ARM target" -->
<!-- id="C9DAD830.3BA9%bwbarre_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50E08AFB-21A3-404C-B4B8-E2FE704E3410_at_open-mpi.org" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-25 09:53:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16342.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  RES:  RES:  Error with ARM target"</a>
<li><strong>Previous message:</strong> <a href="16340.php">Ralph Castain: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
<li><strong>In reply to:</strong> <a href="16340.php">Ralph Castain: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16342.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  RES:  RES:  Error with ARM target"</a>
<li><strong>Reply:</strong> <a href="16342.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  RES:  RES:  Error with ARM target"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
--host is the correct option, but the host string &quot;arm&quot; is not valid; it
<br>
needs to be a proper triple, something like &quot;x86_64-unknown-linux-gnu&quot;.
<br>
Either way, ARM was not a supported platform in the 1.4.x release; the
<br>
earliest version of Open MPI to support the ARM platform was 1.5.2.
<br>
<p>Brian
<br>
<p>On 4/25/11 7:46 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I think you've reversed the role of host and target then. &quot;host&quot; is the
</span><br>
<span class="quotelev1">&gt;machine type you are compiling on, and &quot;target&quot; is the machine you are
</span><br>
<span class="quotelev1">&gt;compiling for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;There used to be a wiki page on cross-compiling OMPI, but I couldn't
</span><br>
<span class="quotelev1">&gt;locate it this morning - I'm sure it's still there, but it is hard to
</span><br>
<span class="quotelev1">&gt;find. Try searching the OMPI web site for info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Apr 25, 2011, at 5:09 AM, Fernando Dutra Fagundes Macedo wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to cross-compile.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Mensagem original-----
</span><br>
<span class="quotelev2">&gt;&gt; De: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] Em
</span><br>
<span class="quotelev2">&gt;&gt;nome de Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Enviada em: s&#225;bado, 23 de abril de 2011 17:21
</span><br>
<span class="quotelev2">&gt;&gt; Para: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Assunto: Re: [OMPI users] RES: Error with ARM target
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Don't give it a host argument - unless you are trying to cross-compile,
</span><br>
<span class="quotelev2">&gt;&gt;it should figure it out for itself
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 23, 2011, at 1:25 PM, Fernando Dutra Fagundes Macedo wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Correcting:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried 1.5.2 and 1.5.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Mensagem original-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; De: users-bounces_at_[hidden] em nome de Fernando Dutra Fagundes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Macedo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Enviada: s&#225;b 23/4/2011 16:16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Para: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assunto: [OMPI users] Error with ARM target
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to use Open MPI on a Friendly ARM board, but I can't
</span><br>
<span class="quotelev3">&gt;&gt;&gt;compile it to ARM target. I'm trying to configure the package this way:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure -host=&quot;arm&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What can I do to make it work?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More information:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error: &quot;configure: error: No atomic primitives available for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;arm-unknown-none&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Version: 1.4.2 and 1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fernando Macedo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;winmail.dat&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16342.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  RES:  RES:  Error with ARM target"</a>
<li><strong>Previous message:</strong> <a href="16340.php">Ralph Castain: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
<li><strong>In reply to:</strong> <a href="16340.php">Ralph Castain: "Re: [OMPI users] RES:  RES:  Error with ARM target"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16342.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  RES:  RES:  Error with ARM target"</a>
<li><strong>Reply:</strong> <a href="16342.php">Fernando Dutra Fagundes Macedo: "[OMPI users] RES:  RES:  RES:  Error with ARM target"</a>
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
