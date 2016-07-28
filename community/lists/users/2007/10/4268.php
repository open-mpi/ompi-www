<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 22 20:13:53 2007" -->
<!-- isoreceived="20071023001353" -->
<!-- sent="Mon, 22 Oct 2007 20:08:10 -0400" -->
<!-- isosent="20071023000810" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pascal Interface for OpenMPI" -->
<!-- id="F5CC2D89-EC4A-40AD-9E52-04AC89992B74_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2855721b0710221544r2af922akfd19e25d26e8ef68_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-10-22 20:08:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4269.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Previous message:</strong> <a href="4267.php">Lourival Mendes: "[OMPI users] Pascal Interface for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="4267.php">Lourival Mendes: "[OMPI users] Pascal Interface for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4272.php">Lourival Mendes: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4272.php">Lourival Mendes: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4274.php">Daniël Mantione: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 22, 2007, at 6:44 PM, Lourival Mendes wrote:
<br>
<p><span class="quotelev1">&gt;    Hy everybody, I'm interested in use the MPI on the Pascal
</span><br>
<span class="quotelev1">&gt; environment. I tryed the MPICH2 list but no success. On the Free
</span><br>
<span class="quotelev1">&gt; Pascal Compiler list, Dani&#235;l invited me to subscribe this list and
</span><br>
<span class="quotelev1">&gt; open a discussion on the interface of OpenMPI for Pascal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Probably as Dani&#235;l knows there is almost no reference on the MPI
</span><br>
<span class="quotelev1">&gt; for Pascal interface, only some very few tryes, one of them in
</span><br>
<span class="quotelev1">&gt; Russian.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I would like to know if there is someone working on the interface
</span><br>
<span class="quotelev1">&gt; of OpenMPI for Pascal?
</span><br>
<p>There was a mail or two about it a while ago; you might want to dig  
<br>
through the OMPI list archives.  The short version is that none of  
<br>
the current Open MPI members have a desire to add Pascal bindings to  
<br>
MPI.  It also might be somewhat of an uphill battle to convince the  
<br>
old-school MPI'ers to include a Pascal interface in Open MPI, even if  
<br>
it was developed by a 3rd party and contributed to the project.
<br>
<p>However, that should not deter you from pursuing a Pascal interface  
<br>
if you want one.  Traditionally, extensions to MPI have been  
<br>
implemented in an MPI-neutral fashion and released into the wild as  
<br>
3rd party libraries (such as the C++ bindings for MPI several years  
<br>
ago).  The Pascal bindings likely don't need to know anything about  
<br>
the internals of an MPI implementation -- they can just call the C  
<br>
bindings.  So it's possible/likely that you would write up a Pascal  
<br>
interface that would work with both Open MPI and MPICH (and any other  
<br>
MPI's out there).
<br>
<p>As I typed out the above, I have a dim recollection of the Pascal  
<br>
interface needing to obtain the values of the C constants during its  
<br>
setup/compilation phase (note that these values are going to be  
<br>
different between different MPI implementations).  You have a few  
<br>
options here; you could write a parser for mpi.h to extract the  
<br>
values you need (e.g., in perl or somesuch) or write a short C  
<br>
program to extract them and printf the values that you capture into a  
<br>
Pascal header file or something (I'm not sure if you need the literal  
<br>
or symbolic values -- I remember very little of Pascal).  Either way,  
<br>
with a little diligence and creativity, it could probably be done.
<br>
<p><span class="quotelev1">&gt;    Also I'm putting a very newbie question: What is the main
</span><br>
<span class="quotelev1">&gt; difference between the OpenMPI and MPICH ?
</span><br>
<p>Short version: we're different projects implementing the same API  
<br>
standard.
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
<li><strong>Next message:</strong> <a href="4269.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Previous message:</strong> <a href="4267.php">Lourival Mendes: "[OMPI users] Pascal Interface for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="4267.php">Lourival Mendes: "[OMPI users] Pascal Interface for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4272.php">Lourival Mendes: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4272.php">Lourival Mendes: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4274.php">Daniël Mantione: "Re: [OMPI users] Pascal Interface for OpenMPI"</a>
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
