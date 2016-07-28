<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 07:31:36 2007" -->
<!-- isoreceived="20070727113136" -->
<!-- sent="Fri, 27 Jul 2007 07:31:17 -0400" -->
<!-- isosent="20070727113117" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and Pascal Environment" -->
<!-- id="967E0DCD-7119-4EEE-98EE-C081FA05C9A7_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.63.0707262337170.9238_at_druifje.clustervision.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 07:31:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3778.php">Jeff Squyres: "Re: [OMPI users] Error message when running openmpi on multiple machines"</a>
<li><strong>Previous message:</strong> <a href="3776.php">Brian Barrett: "Re: [OMPI users] Problem building openmpi 1.2.3 on RHEL 5"</a>
<li><strong>In reply to:</strong> <a href="3774.php">Dani&#235;l Mantione: "Re: [OMPI users] Open MPI and Pascal Environment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 26, 2007, at 6:03 PM, Dani&#235;l Mantione wrote:
<br>
<p><span class="quotelev2">&gt;&gt; This may be a naieve question, but why would binary compatibility be
</span><br>
<span class="quotelev2">&gt;&gt; required?  Is mpi.pas a source file or a compiled file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is a source file, containing a Pascal unit. It contains  
</span><br>
<span class="quotelev1">&gt; declarations
</span><br>
<span class="quotelev1">&gt; like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; function mpi_init(var argc:longint;var  
</span><br>
<span class="quotelev1">&gt; argv:PPchar):longint;cdecl;external 'libmpi' name 'MPI_Init';
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, if you change the data structures in the .h file, of course the
</span><br>
<span class="quotelev1">&gt; data structures in the Pascal unit don't automatically change.
</span><br>
<p>Did we [unintentionally] do that?  I'm only aware of things that we  
<br>
*added* to mpi.h (e.g., as more constants became supported over time).
<br>
<p><span class="quotelev2">&gt;&gt; If it's source, what did we do to break it between versions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Free Pascal comes with a .h converter. This isn't perfect (macros  
</span><br>
<span class="quotelev1">&gt; are hard
</span><br>
<span class="quotelev1">&gt; to machine translate into another language), but with some manual
</span><br>
<span class="quotelev1">&gt; assistance, someone can generate a Pascal import for a C library
</span><br>
<span class="quotelev1">&gt; reasonably quickly. It is therefore possible to convert the mpi.h  
</span><br>
<span class="quotelev1">&gt; shipped
</span><br>
<span class="quotelev1">&gt; with OpenMPI.
</span><br>
<p>Gotcha.
<br>
<p><span class="quotelev1">&gt; So, you didn't break a mpi.pas as it doesn't exist, I just made the
</span><br>
<span class="quotelev1">&gt; observation that as it isn't possible to use a program compiled  
</span><br>
<span class="quotelev1">&gt; against
</span><br>
<span class="quotelev1">&gt; openmpi 1.1 on 1.2, and as a Pascal unit would depend on the binary
</span><br>
<span class="quotelev1">&gt; interface remaining compatible, it ain't feasible to publish an  
</span><br>
<span class="quotelev1">&gt; mpi.pas,
</span><br>
<span class="quotelev1">&gt; as it would be outdated in no time.
</span><br>
<p>If it's solely dependent upon mpi.h, I'm not sure that this is the case.
<br>
<p><span class="quotelev1">&gt; However, perhaps we could contribute one and have it shipped with  
</span><br>
<span class="quotelev1">&gt; openmpi?
</span><br>
<span class="quotelev1">&gt; It would at least prevent the confusion which mpi.pas belongs to which
</span><br>
<span class="quotelev1">&gt; openmpi.
</span><br>
<p>The Open MPI Project is always willing to talk to those who wish to  
<br>
contribute code.  :-)  See the &quot;contribute&quot; page on the web site:  
<br>
<a href="http://www.open-mpi.org/community/contribute/">http://www.open-mpi.org/community/contribute/</a>
<br>
<p>I do not know how the rest of the group would feel about including  
<br>
unofficial Pascal bindings in Open MPI, though.
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
<li><strong>Next message:</strong> <a href="3778.php">Jeff Squyres: "Re: [OMPI users] Error message when running openmpi on multiple machines"</a>
<li><strong>Previous message:</strong> <a href="3776.php">Brian Barrett: "Re: [OMPI users] Problem building openmpi 1.2.3 on RHEL 5"</a>
<li><strong>In reply to:</strong> <a href="3774.php">Dani&#235;l Mantione: "Re: [OMPI users] Open MPI and Pascal Environment"</a>
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
