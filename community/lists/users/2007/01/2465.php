<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 16 09:37:31 2007" -->
<!-- isoreceived="20070116143731" -->
<!-- sent="Tue, 16 Jan 2007 07:37:14 -0700" -->
<!-- isosent="20070116143714" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on HPUX?" -->
<!-- id="2B1017FB-9290-4F7F-BF7B-E3688C090A18_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6C9AEC3D-C30D-4247-878E-9BCFF9B64CC6_at_cisco.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-16 09:37:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2466.php">Brian W. Barrett: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
<li><strong>Previous message:</strong> <a href="2464.php">Marcelo Maia Garcia: "[OMPI users] OpenMPI 1.2b2 and SGE"</a>
<li><strong>In reply to:</strong> <a href="2462.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on HPUX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2467.php">Peter Kjellstrom: "Re: [OMPI users] OpenMPI on HPUX?"</a>
<li><strong>Reply:</strong> <a href="2467.php">Peter Kjellstrom: "Re: [OMPI users] OpenMPI on HPUX?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI will not run on PA-RISC processors.  There are some  
<br>
functions in Open MPI that must be implemented in assembly.   
<br>
Presently, these are only supported for:
<br>
<p>&nbsp;&nbsp;&nbsp;* Alpha (32 or 64 bit, beta support)
<br>
&nbsp;&nbsp;&nbsp;* IA-32
<br>
&nbsp;&nbsp;&nbsp;* IA-64
<br>
&nbsp;&nbsp;&nbsp;* MIPS (n32 or 64 bit APIs only, beta support)
<br>
&nbsp;&nbsp;&nbsp;* Opteron / EM64T
<br>
&nbsp;&nbsp;&nbsp;* PowerPC (32 or 64 bit)
<br>
&nbsp;&nbsp;&nbsp;* UltraSparc (32 or 64 bit)
<br>
&nbsp;&nbsp;&nbsp;* Windows (beta support)
<br>
<p>Any other architectures are not supported and will not work.
<br>
<p>Brian
<br>
<p>On Jan 15, 2007, at 10:22 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I'm unaware of anyone ever testing on HP-UX.  So I don't know how
</span><br>
<span class="quotelev1">&gt; well it will do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI only has a few very-system-specific features, and there is a
</span><br>
<span class="quotelev1">&gt; pretty comprehensive &quot;configure&quot; script that may be able to figure
</span><br>
<span class="quotelev1">&gt; out all the HP-UX-isms, but I am guessing that there's going to be a
</span><br>
<span class="quotelev1">&gt; small number of &quot;gotchas&quot; along the way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 15, 2007, at 11:12 AM, Nader Ahmadi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am planning to install OpenMPI on a HPUX system. Does anyone has
</span><br>
<span class="quotelev2">&gt;&gt; any experience using
</span><br>
<span class="quotelev2">&gt;&gt; OMPI on HPUX?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do appreciate any comments.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nader,
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2466.php">Brian W. Barrett: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
<li><strong>Previous message:</strong> <a href="2464.php">Marcelo Maia Garcia: "[OMPI users] OpenMPI 1.2b2 and SGE"</a>
<li><strong>In reply to:</strong> <a href="2462.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on HPUX?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2467.php">Peter Kjellstrom: "Re: [OMPI users] OpenMPI on HPUX?"</a>
<li><strong>Reply:</strong> <a href="2467.php">Peter Kjellstrom: "Re: [OMPI users] OpenMPI on HPUX?"</a>
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
