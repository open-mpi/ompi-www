<?
$subject_val = "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 15 02:19:14 2007" -->
<!-- isoreceived="20071215071914" -->
<!-- sent="Sat, 15 Dec 2007 00:19:07 -0700" -->
<!-- isosent="20071215071907" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard" -->
<!-- id="2B0A6971-9460-4EB2-A267-11D23DF57C65_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="334DD43D-0D71-47CC-8279-3313619476FC_at_apple.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-15 02:19:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4680.php">Bruno Coutinho: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="4678.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
<li><strong>In reply to:</strong> <a href="4649.php">Warner Yuen: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I finally had a chance to look at this (since the same things are  
<br>
happening with LAM as well).  The base issue is that Intel's compiler  
<br>
is completely borked.  I can't fathom how a company could release a  
<br>
product that fundamentally broken.  That's all good, except that  
<br>
recent versions of Autoconf expect that the compiler at least kind of  
<br>
works without special CFLAGS for some of its tests (like does the  
<br>
compiler understand -g or does -E invoke the preprocessor) -- not an  
<br>
unreasonable assumption.  Configure is getting those answers wrong  
<br>
because that's suddenly not true.  It makes a wrong choice about  
<br>
requiring some Autoconf compatibility scripts to build, which don't  
<br>
work on OS X (probably because they aren't usually needed, so not well  
<br>
tested)
<br>
<p>A hackish fix is to set CC to &quot;icc -no-multibyte-chars&quot; and CXX to  
<br>
&quot;icpc -no-multibyte-chars&quot; instead of setting the -no-multibyte- 
<br>
chars.  With those parameters, I was able to successfully build Open  
<br>
MPI (and applications against Open MPI).  Hopefully Intel can fix  
<br>
their compilers before this causes too many more issues.  How you ship  
<br>
an (expensive!) compiler that just flat out doesn't work is beyond me.
<br>
<p>Brian
<br>
<p>On Dec 12, 2007, at 11:18 AM, Warner Yuen wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that the problems are partially the compilers fault, maybe  
</span><br>
<span class="quotelev1">&gt; the updated compilers didn't catch all the problems filed against  
</span><br>
<span class="quotelev1">&gt; the last release? Why else would I need to add the &quot;-no-multibyte- 
</span><br>
<span class="quotelev1">&gt; chars&quot; flag for pretty much everything that I build with ICC? Also,  
</span><br>
<span class="quotelev1">&gt; its odd that I have to use /lib/cpp when using Intel ICC/ICPC  
</span><br>
<span class="quotelev1">&gt; whereas with GCC things just find their way correctly. Again, IFORT  
</span><br>
<span class="quotelev1">&gt; and GCC together seem fine. Lastly... not that I use these... but  
</span><br>
<span class="quotelev1">&gt; MPICH-2.1 and MPICH-1.2.7 for Myrinet built just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are the output files:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.log.tgz&gt;&lt;configure.output.tgz&gt;&lt;error.log.tgz&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warner Yuen
</span><br>
<span class="quotelev1">&gt; Scientific Computing Consultant
</span><br>
<span class="quotelev1">&gt; Apple Computer
</span><br>
<span class="quotelev1">&gt; email: wyuen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Tel: 408.718.2859
</span><br>
<span class="quotelev1">&gt; Fax: 408.715.0133
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2007, at 9:00 AM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 12 Dec 2007 06:50:03 -0500
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Problems compiling 1.2.4 using Intel
</span><br>
<span class="quotelev2">&gt;&gt; 	Compiler	10.1.006 on Leopard
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;43BB0BCE-E328-4D3E-AE61-84991B27FBE9_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My primary work platform is a MacBook Pro, but I don't specifically
</span><br>
<span class="quotelev2">&gt;&gt; develop for OS X, so I don't have any special compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry to ask this because I think the information was sent before,  
</span><br>
<span class="quotelev2">&gt;&gt; but
</span><br>
<span class="quotelev2">&gt;&gt; could you send all the compile/failure information?  <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4680.php">Bruno Coutinho: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="4678.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
<li><strong>In reply to:</strong> <a href="4649.php">Warner Yuen: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
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
