<?
$subject_val = "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 13:18:33 2007" -->
<!-- isoreceived="20071212181833" -->
<!-- sent="Wed, 12 Dec 2007 10:18:26 -0800" -->
<!-- isosent="20071212181826" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard" -->
<!-- id="334DD43D-0D71-47CC-8279-3313619476FC_at_apple.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.19.1197478803.27472.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard<br>
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 13:18:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4650.php">Michael: "[OMPI users] Dual ethernet &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4648.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4664.php">Jeff Squyres: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<li><strong>Reply:</strong> <a href="4664.php">Jeff Squyres: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<li><strong>Reply:</strong> <a href="4679.php">Brian Barrett: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>It seems that the problems are partially the compilers fault, maybe  
<br>
the updated compilers didn't catch all the problems filed against the  
<br>
last release? Why else would I need to add the &quot;-no-multibyte-chars&quot;  
<br>
flag for pretty much everything that I build with ICC? Also, its odd  
<br>
that I have to use /lib/cpp when using Intel ICC/ICPC whereas with GCC  
<br>
things just find their way correctly. Again, IFORT and GCC together  
<br>
seem fine. Lastly... not that I use these... but MPICH-2.1 and  
<br>
MPICH-1.2.7 for Myrinet built just fine.
<br>
<p>Here are the output files:
<br>
<p><p><p><p><p>Warner Yuen
<br>
Scientific Computing Consultant
<br>
Apple Computer
<br>
email: wyuen_at_[hidden]
<br>
Tel: 408.718.2859
<br>
Fax: 408.715.0133
<br>
<p><p>On Dec 12, 2007, at 9:00 AM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Wed, 12 Dec 2007 06:50:03 -0500
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problems compiling 1.2.4 using Intel
</span><br>
<span class="quotelev1">&gt; 	Compiler	10.1.006 on Leopard
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;43BB0BCE-E328-4D3E-AE61-84991B27FBE9_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My primary work platform is a MacBook Pro, but I don't specifically
</span><br>
<span class="quotelev1">&gt; develop for OS X, so I don't have any special compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry to ask this because I think the information was sent before, but
</span><br>
<span class="quotelev1">&gt; could you send all the compile/failure information?  <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4649/config.log.tgz">config.log.tgz</a>
</ul>
<!-- attachment="config.log.tgz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4649/configure.output.tgz">configure.output.tgz</a>
</ul>
<!-- attachment="configure.output.tgz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4649/error.log.tgz">error.log.tgz</a>
</ul>
<!-- attachment="error.log.tgz" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4649/05-attachment">attachment</a>
</ul>
<!-- attachment="05-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4650.php">Michael: "[OMPI users] Dual ethernet &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4648.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4664.php">Jeff Squyres: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<li><strong>Reply:</strong> <a href="4664.php">Jeff Squyres: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<li><strong>Reply:</strong> <a href="4679.php">Brian Barrett: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
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
