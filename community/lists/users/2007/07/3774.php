<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 18:03:42 2007" -->
<!-- isoreceived="20070726220342" -->
<!-- sent="Fri, 27 Jul 2007 00:03:38 +0200 (CEST)" -->
<!-- isosent="20070726220338" -->
<!-- name="Dani&#235;l Mantione" -->
<!-- email="daniel.mantione_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and Pascal Environment" -->
<!-- id="Pine.LNX.4.63.0707262337170.9238_at_druifje.clustervision.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A040C86D-7EEA-49E7-8A97-2CD896B475F4_at_cisco.com" -->
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
<strong>From:</strong> Dani&#235;l Mantione (<em>daniel.mantione_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-26 18:03:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3775.php">Mathew Binkley: "[OMPI users] Problem building openmpi 1.2.3 on RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="3773.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Pascal Environment"</a>
<li><strong>In reply to:</strong> <a href="3773.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Pascal Environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3777.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Pascal Environment"</a>
<li><strong>Reply:</strong> <a href="3777.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Pascal Environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 26 Jul 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 26, 2007, at 3:18 PM, Dani&#235;l Mantione wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Problematic is the very poor job the openmpi team does at binary  
</span><br>
<span class="quotelev2">&gt; &gt; backwards
</span><br>
<span class="quotelev2">&gt; &gt; compatibility, applications broke between 1.0 and 1.1, and again  
</span><br>
<span class="quotelev2">&gt; &gt; between
</span><br>
<span class="quotelev2">&gt; &gt; 1.1 and 1.2. With such breakage, it is next to impossible to  
</span><br>
<span class="quotelev2">&gt; &gt; maintain an
</span><br>
<span class="quotelev2">&gt; &gt; mpi.pas.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be a naieve question, but why would binary compatibility be  
</span><br>
<span class="quotelev1">&gt; required?  Is mpi.pas a source file or a compiled file?
</span><br>
<p>It is a source file, containing a Pascal unit. It contains declarations 
<br>
like:
<br>
<p>function mpi_init(var argc:longint;var argv:PPchar):longint;cdecl;external 'libmpi' name 'MPI_Init';
<br>
<p>Now, if you change the data structures in the .h file, of course the 
<br>
data structures in the Pascal unit don't automatically change.
<br>
<p><span class="quotelev1">&gt; If it's source, what did we do to break it between versions?
</span><br>
<p>Free Pascal comes with a .h converter. This isn't perfect (macros are hard 
<br>
to machine translate into another language), but with some manual 
<br>
assistance, someone can generate a Pascal import for a C library 
<br>
reasonably quickly. It is therefore possible to convert the mpi.h shipped 
<br>
with OpenMPI.
<br>
<p>So, you didn't break a mpi.pas as it doesn't exist, I just made the 
<br>
observation that as it isn't possible to use a program compiled against 
<br>
openmpi 1.1 on 1.2, and as a Pascal unit would depend on the binary 
<br>
interface remaining compatible, it ain't feasible to publish an mpi.pas, 
<br>
as it would be outdated in no time.
<br>
<p>However, perhaps we could contribute one and have it shipped with openmpi? 
<br>
It would at least prevent the confusion which mpi.pas belongs to which 
<br>
openmpi.
<br>
<p>Dani&#235;l Mantione
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3775.php">Mathew Binkley: "[OMPI users] Problem building openmpi 1.2.3 on RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="3773.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Pascal Environment"</a>
<li><strong>In reply to:</strong> <a href="3773.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Pascal Environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3777.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Pascal Environment"</a>
<li><strong>Reply:</strong> <a href="3777.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Pascal Environment"</a>
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
