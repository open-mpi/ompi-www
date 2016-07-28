<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 25 17:55:32 2006" -->
<!-- isoreceived="20060425215532" -->
<!-- sent="Tue, 25 Apr 2006 17:55:22 -0400" -->
<!-- isosent="20060425215522" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] f90 module files compile a lot faster" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF7093CB_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] f90 module files compile a lot faster" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-25 17:55:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1145.php">Brian Barrett: "Re: [OMPI users] config error"</a>
<li><strong>Previous message:</strong> <a href="1143.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Maybe in reply to:</strong> <a href="1134.php">Michael Kluskens: "[OMPI users] f90 module files compile a lot faster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, April 25, 2006 3:38 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] f90 module files compile a lot faster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Minor suggestion, change the first sentence to read:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - The Fortran 90 MPI bindings can now be built in one of four sizes  
</span><br>
<span class="quotelev1">&gt; using --with-mpi-f90-size=SIZE.
</span><br>
<p>Done.  Although I describe the --configure options later in the README.
<br>
<p><span class="quotelev1">&gt; Also, Open MPI 1.2 changes the --with-mpi-param-check default from  
</span><br>
<span class="quotelev1">&gt; always to runtime according to my comparison of the 1.1 README and  
</span><br>
<span class="quotelev1">&gt; 1.2 configure --help; however, the 1.2 README disagrees with the 1.2  
</span><br>
<span class="quotelev1">&gt; configure --help (betting the latter is more correct, maybe).
</span><br>
<p>I think that this is a mistake in the --help output; Brian is
<br>
investigating (we typically don't commit changes to configure during the
<br>
US business day so that we don't force people to re-autogen during the
<br>
middle of the day).
<br>
<p>The default has always been &quot;runtime&quot;, regardless of what the README
<br>
says.  I've updated the README to say the Right Things:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/svn/ompi/branches/v1.1/README">http://svn.open-mpi.org/svn/ompi/branches/v1.1/README</a>
<br>
<p>Thanks for all the nit-picking -- keep 'em coming!
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1145.php">Brian Barrett: "Re: [OMPI users] config error"</a>
<li><strong>Previous message:</strong> <a href="1143.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Maybe in reply to:</strong> <a href="1134.php">Michael Kluskens: "[OMPI users] f90 module files compile a lot faster"</a>
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
