<?
$subject_val = "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 17 13:13:59 2010" -->
<!-- isoreceived="20101117181359" -->
<!-- sent="Wed, 17 Nov 2010 13:13:48 -0500" -->
<!-- isosent="20101117181348" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)" -->
<!-- id="4CE41B5C.8030906_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.1011171522520.3436_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-17 13:13:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14817.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14815.php">Grzegorz Maj: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14812.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ricardo Reis wrote:
<br>
<span class="quotelev1">&gt; On Wed, 17 Nov 2010, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For what is worth, the MPI addresses (a.k.a. pointers)
</span><br>
<span class="quotelev2">&gt;&gt; in the Fortran bindings are integers, of standard size 4 bytes, IIRR.
</span><br>
<span class="quotelev2">&gt;&gt; Take a look at mpif.h, mpi.h and their cousins to make sure.
</span><br>
<span class="quotelev2">&gt;&gt; Unlike the Fortran FFTW &quot;plans&quot;, you don't declare MPI addresses as big
</span><br>
<span class="quotelev2">&gt;&gt; as you want, MPI chooses their size when it is built, right?
</span><br>
<span class="quotelev2">&gt;&gt; As Pascal pointed out, 4-byte integers would flip sign at around 2GB,
</span><br>
<span class="quotelev2">&gt;&gt; and even unsigned integers won't go beyond 4GB.
</span><br>
<span class="quotelev2">&gt;&gt; Would this be part of the problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yes, I think is the most probable explanation. I've solved it by using 
</span><br>
<span class="quotelev1">&gt; several processes to write the file (after all I just didn't want to 
</span><br>
<span class="quotelev1">&gt; program a bunch of checkups required for spanning several processes for 
</span><br>
<span class="quotelev1">&gt; such a simple thing...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I guess all the OpenMPI pros and developers are busy now
</span><br>
<span class="quotelev2">&gt;&gt; in Bourbon Street, New Orleans, I mean, at Supercomputer 2010.
</span><br>
<span class="quotelev2">&gt;&gt; Hard to catch their attention right now,
</span><br>
<span class="quotelev2">&gt;&gt; but eventually somebody will clarify this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; oh, just a small grain of sand... doesn't seems worth to stop the full 
</span><br>
<span class="quotelev1">&gt; machine for it...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; many thanks all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Ricardo Reis
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  'Non Serviam'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  PhD candidate @ Lasef
</span><br>
<span class="quotelev1">&gt;  Computational Fluid Dynamics, High Performance Computing, Turbulence
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Cultural Instigator @ R&#225;dio Zero
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Keep them Flying! Ajude a/help Aero F&#233;nix!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.aeronauta.com/aero.fenix">http://www.aeronauta.com/aero.fenix</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  contacts:  gtalk: kyriusan_at_[hidden]  skype: kyriusan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                            &lt; sent with alpine 2.00 &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p>Caro Ricardo
<br>
<p>Pascal hit the nail on the head.
<br>
Counting with (4-byte) integers seems to be an MPI thing,
<br>
written in stone standard perhaps.
<br>
<p>In any case, here is an old thread, discussing a related problem,
<br>
namely the number of items (count) in MPI_Send/Recv messages,
<br>
which is again an integer, hence has the same 2GB limitation:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/02/8100.php">http://www.open-mpi.org/community/lists/users/2009/02/8100.php</a>
<br>
<p>Note that Jeff's workaround suggestion was to declare
<br>
a user defined MPI type (or perhaps a hierarchy of types),
<br>
then concatenate as much data as needed in a message.
<br>
<p>Granted that my knowledge of mpi-io is nil,
<br>
I wonder if an approach like this would allow you to get
<br>
around the count limit of mpi-io functions,
<br>
which sounds no different from the count limit
<br>
of other MPI functions.
<br>
<p>Say, you could use MPI_TYPE_CONTIGUOUS or MPI_TYPE_VECTOR,
<br>
to aggregate big chunks of data (but still smaller than 2GB),
<br>
then write a modest number of these chunks/types to the file, I suppose.
<br>
<p>Abrac,o,
<br>
Gus
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14817.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14815.php">Grzegorz Maj: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14812.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
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
