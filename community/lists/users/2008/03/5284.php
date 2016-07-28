<?
$subject_val = "Re: [OMPI users] RPM build errors when creating multiple rpms";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 07:41:41 2008" -->
<!-- isoreceived="20080331114141" -->
<!-- sent="Mon, 31 Mar 2008 07:41:32 -0400" -->
<!-- isosent="20080331114132" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RPM build errors when creating multiple rpms" -->
<!-- id="7D3C7F8C-20CB-4652-B478-513ABB5AFD6C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1206540350.28391.32.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RPM build errors when creating multiple rpms<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 07:41:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5285.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Previous message:</strong> <a href="5283.php">Matt Hughes: "Re: [OMPI users] Spawn problem"</a>
<li><strong>In reply to:</strong> <a href="5276.php">Ashley Pittman: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5273.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 26, 2008, at 10:05 AM, Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The community Open MPI projects distributes SRPMs which, when built,
</span><br>
<span class="quotelev2">&gt;&gt; do not install into /opt by default -- you have to request it
</span><br>
<span class="quotelev2">&gt;&gt; specifically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Out of interest how does open-mpi handle the mpir_dll_name symbol in  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; library, it's supposed to contain the location of the debugger library
</span><br>
<span class="quotelev1">&gt; and therefore does not play well with relocating RPMs or installed
</span><br>
<span class="quotelev1">&gt; library's other to the place they were built for.
</span><br>
<p><p>Today, it does not -- the location has to be compile-time  
<br>
initialized.  So if you move the library+plugin somewhere else, the  
<br>
Etnus scheme to find the DLL currently cannot handle it.
<br>
<p>We have proposed a new scheme to Etnus and Allinea that allows a bit  
<br>
more flexibility to find the DLLs at run-time; both have agreed to the  
<br>
idea in principle.  We will include this support in Open MPI v1.3; I  
<br>
don't know when/if the debuggers will support it.  I believe that the  
<br>
ball is currently in my court; Etnus asked me some questions to which  
<br>
I have not yet replied... doh...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5285.php">Joao Vicente Lima: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Previous message:</strong> <a href="5283.php">Matt Hughes: "Re: [OMPI users] Spawn problem"</a>
<li><strong>In reply to:</strong> <a href="5276.php">Ashley Pittman: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5273.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
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
