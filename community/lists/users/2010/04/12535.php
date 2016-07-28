<?
$subject_val = "Re: [OMPI users] Best way to reduce 3D array";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  5 15:20:26 2010" -->
<!-- isoreceived="20100405192026" -->
<!-- sent="Mon, 5 Apr 2010 20:20:16 +0100 (WEST)" -->
<!-- isosent="20100405192016" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to reduce 3D array" -->
<!-- id="alpine.DEB.2.00.1004052015590.18892_at_localhost" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="20100405190909.GZ17191_at_mcs.anl.gov" -->
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
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-05 15:20:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12536.php">Prentice Bisbal: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12534.php">Rob Latham: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>In reply to:</strong> <a href="12534.php">Rob Latham: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12581.php">Cole, Derek E: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Reply:</strong> <a href="12581.php">Cole, Derek E: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 5 Apr 2010, Rob Latham wrote:
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
<p>don't they all have to hit the same Barrier? I think that will ensure 
<br>
order in this business... or am I being blind to something?
<br>
<p>I will agree, though, this is not the best solution to do it. I use this 
<br>
kind of arrangment when I'm desperate to do some prinf kind of debugging 
<br>
and want it ordered by process. Never had a problem with it.
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
<li><strong>Next message:</strong> <a href="12536.php">Prentice Bisbal: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12534.php">Rob Latham: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>In reply to:</strong> <a href="12534.php">Rob Latham: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12581.php">Cole, Derek E: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Reply:</strong> <a href="12581.php">Cole, Derek E: "Re: [OMPI users] Best way to reduce 3D array"</a>
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
