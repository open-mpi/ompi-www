<?
$subject_val = "Re: [OMPI users] Best way to reduce 3D array";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 11:31:01 2010" -->
<!-- isoreceived="20100407153101" -->
<!-- sent="Wed, 07 Apr 2010 11:30:40 -0400" -->
<!-- isosent="20100407153040" -->
<!-- name="Cole, Derek E" -->
<!-- email="derek.e.cole_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to reduce 3D array" -->
<!-- id="063591A1FD6A8143ACC2CA38F4C1B5EF8707C294_at_HVXMSPA.us.lmco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.1004052015590.18892_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] Best way to reduce 3D array<br>
<strong>From:</strong> Cole, Derek E (<em>derek.e.cole_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-07 11:30:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12582.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12580.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>In reply to:</strong> <a href="12535.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12584.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Reply:</strong> <a href="12584.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the ideas. I did finally end up getting this working by sending back to the master process. It's quite ugly, and added a good bit of MPI to the code, but it works for now, and I will revisit this later. I am not sure what the file system is, I think it is XFS, but I don't know much about why this has an effect on the output - just the way files can be opened at once or something? 
<br>
<p>I did have to end up using an MPI Data type, because this 3D domain was strided nicely in X, but not the other dimensions. The domain is larger in Z, so I wanted to order my loops such that Z is the innermost. This helped cut down some of the MPI overhead. It would have been nice to avoid this, but I could not think of the way to do it, and still have all of the computes working on the largest section of data possible.
<br>
<p>Derek
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ricardo Reis
<br>
Sent: Monday, April 05, 2010 3:20 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Best way to reduce 3D array
<br>
<p>On Mon, 5 Apr 2010, Rob Latham wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Mar 30, 2010 at 11:51:39PM +0100, Ricardo Reis wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  If using the master/slace IO model, would it be better to cicle 
</span><br>
<span class="quotelev2">&gt;&gt; through all the process and each one would write it's part of the 
</span><br>
<span class="quotelev2">&gt;&gt; array into the file. This file would be open in &quot;stream&quot; mode...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  do p=0,nprocs-1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if(my_rank.eq.i)then
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      openfile (append mode)
</span><br>
<span class="quotelev2">&gt;&gt;      write_to_file
</span><br>
<span class="quotelev2">&gt;&gt;      closefile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_Barrier(world,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  enddo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that there's no guarantee of the order here, though. Nothing 
</span><br>
<span class="quotelev1">&gt; prevents rank 30 from hitting that loop before rank 2 does.  To ensure
</span><br>
<p>don't they all have to hit the same Barrier? I think that will ensure order in this business... or am I being blind to something?
<br>
<p>I will agree, though, this is not the best solution to do it. I use this kind of arrangment when I'm desperate to do some prinf kind of debugging and want it ordered by process. Never had a problem with it.
<br>
<p>I mean, I assume there is some sort of sync before the do cycle starts.
<br>
<p><p>&nbsp;&nbsp;cheers!
<br>
<p>&nbsp;&nbsp;Ricardo Reis
<br>
<p>&nbsp;&nbsp;'Non Serviam'
<br>
<p>&nbsp;&nbsp;PhD candidate @ Lasef
<br>
&nbsp;&nbsp;Computational Fluid Dynamics, High Performance Computing, Turbulence
<br>
&nbsp;&nbsp;<a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
<br>
<p>&nbsp;&nbsp;Cultural Instigator @ R&#225;dio Zero
<br>
&nbsp;&nbsp;<a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
<br>
<p>&nbsp;&nbsp;Keep them Flying! Ajude a/help Aero F&#233;nix!
<br>
<p>&nbsp;&nbsp;<a href="http://www.aeronauta.com/aero.fenix">http://www.aeronauta.com/aero.fenix</a>
<br>
<p>&nbsp;&nbsp;<a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; sent with alpine 2.00 &gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12582.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12580.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>In reply to:</strong> <a href="12535.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12584.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Reply:</strong> <a href="12584.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
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
