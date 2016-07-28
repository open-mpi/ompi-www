<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 02:49:38 2007" -->
<!-- isoreceived="20071023064938" -->
<!-- sent="Tue, 23 Oct 2007 08:49:32 +0200 (CEST)" -->
<!-- isosent="20071023064932" -->
<!-- name="Dani&#235;l Mantione" -->
<!-- email="daniel.mantione_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pascal Interface for OpenMPI" -->
<!-- id="Pine.LNX.4.63.0710230841260.9461_at_druifje.clustervision.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F5CC2D89-EC4A-40AD-9E52-04AC89992B74_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-23 02:49:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4275.php">Berit Hinnemann: "Re: [OMPI users] SLURM vs. Torque?"</a>
<li><strong>Previous message:</strong> <a href="4273.php">Don Kerr: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>In reply to:</strong> <a href="4268.php">Jeff Squyres: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 22 Oct 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 22, 2007, at 6:44 PM, Lourival Mendes wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Hy everybody, I'm interested in use the MPI on the Pascal
</span><br>
<span class="quotelev2">&gt; &gt; environment. I tryed the MPICH2 list but no success. On the Free
</span><br>
<span class="quotelev2">&gt; &gt; Pascal Compiler list, Dani&#235;l invited me to subscribe this list and
</span><br>
<span class="quotelev2">&gt; &gt; open a discussion on the interface of OpenMPI for Pascal.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Probably as Dani&#235;l knows there is almost no reference on the MPI
</span><br>
<span class="quotelev2">&gt; &gt; for Pascal interface, only some very few tryes, one of them in
</span><br>
<span class="quotelev2">&gt; &gt; Russian.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I would like to know if there is someone working on the interface
</span><br>
<span class="quotelev2">&gt; &gt; of OpenMPI for Pascal?
</span><br>
<p>Yes, I am :) You can find a preliminary Pascal interface for OpenMPI here:
<br>
<p><a href="http://www.freepascal.org/~daniel/mpi.pas">http://www.freepascal.org/~daniel/mpi.pas</a>
<br>
<p>... and a small demo program:
<br>
<p><a href="http://www.freepascal.org/~daniel/hello_mpi.pas">http://www.freepascal.org/~daniel/hello_mpi.pas</a>
<br>
<p><span class="quotelev1"> &gt; There was a mail or two about it a while ago; you might want to dig  
</span><br>
<span class="quotelev1">&gt; through the OMPI list archives.  The short version is that none of  
</span><br>
<span class="quotelev1">&gt; the current Open MPI members have a desire to add Pascal bindings to  
</span><br>
<span class="quotelev1">&gt; MPI.  It also might be somewhat of an uphill battle to convince the  
</span><br>
<span class="quotelev1">&gt; old-school MPI'ers to include a Pascal interface in Open MPI, even if  
</span><br>
<span class="quotelev1">&gt; it was developed by a 3rd party and contributed to the project.
</span><br>
<p>Hmmm... I still would like to contribute by unit when it is done :)
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; However, that should not deter you from pursuing a Pascal interface  
</span><br>
<span class="quotelev1">&gt; if you want one.  Traditionally, extensions to MPI have been  
</span><br>
<span class="quotelev1">&gt; implemented in an MPI-neutral fashion and released into the wild as  
</span><br>
<span class="quotelev1">&gt; 3rd party libraries (such as the C++ bindings for MPI several years  
</span><br>
<span class="quotelev1">&gt; ago).  The Pascal bindings likely don't need to know anything about  
</span><br>
<span class="quotelev1">&gt; the internals of an MPI implementation -- they can just call the C  
</span><br>
<span class="quotelev1">&gt; bindings.  So it's possible/likely that you would write up a Pascal  
</span><br>
<span class="quotelev1">&gt; interface that would work with both Open MPI and MPICH (and any other  
</span><br>
<span class="quotelev1">&gt; MPI's out there).
</span><br>
<p>Just like two different MPI implementations cannot share a mpi.h, they 
<br>
cannot share a Pascal interface unit. In C++ the compiler can simply parse 
<br>
the mpi.h, because C++ is a superset of C. You could perhaps use of a lot 
<br>
of $ifdef.
<br>
<p>Dani&#235;l
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4275.php">Berit Hinnemann: "Re: [OMPI users] SLURM vs. Torque?"</a>
<li><strong>Previous message:</strong> <a href="4273.php">Don Kerr: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>In reply to:</strong> <a href="4268.php">Jeff Squyres: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
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
