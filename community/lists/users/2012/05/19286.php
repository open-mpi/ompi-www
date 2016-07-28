<?
$subject_val = "Re: [OMPI users] MPI-IO puzzlement";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 15 16:13:22 2012" -->
<!-- isoreceived="20120515201322" -->
<!-- sent="Tue, 15 May 2012 21:13:16 +0100 (WEST)" -->
<!-- isosent="20120515201316" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO puzzlement" -->
<!-- id="alpine.DEB.2.00.1205152009190.18531_at_serodio" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1F0D5560-8EB3-4A74-A67B-17A72AA693F0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-IO puzzlement<br>
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-15 16:13:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19287.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19285.php">Jeff Squyres: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>In reply to:</strong> <a href="19281.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19287.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19287.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 15 May 2012, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 15, 2012, at 2:19 PM, Ricardo Reis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; INTEGER(kind=MPI_OFFSET_KIND) :: offset
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_OFFSET_KIND is insuficient to represent my offset...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it not a 64 bit integer for your compiler?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm still interested in the answer to this question.
</span><br>
<p>printing the result of
<br>
<p>bit_size(offset)
<br>
<p>does give the value of 64
<br>
<p>I reckon I had an error in my debug code, I was truncating the output 
<br>
format, that explains why I'm chasing a gambuzino with this point.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; There *is* a bug in OMPI at the moment that we're casting the result back down to 32 bits.  I can give you a patch for that, if you'd like to try it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll get it from svn and try it out. On another note, me thinks with a derived_data type I nail two with one stroke. This problem and the limitation of 2GB per core when writing files...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should be able to get just a patch that you can apply to your v1.6 tarball here (the trunk patch was different because some filenames have changed between the v1.6 branch and the trunk):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/3095/fortran-file-int-cast-fix.diff">https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/3095/fortran-file-int-cast-fix.diff</a>
</span><br>
<p>hmmm... I downloaded the tarball of 1.6, cd to the openmpi-1.6 directory 
<br>
and tried to apply the patch with
<br>
<p>patch &lt; /home/rreis/fortran-file-int-cast-fix.diff
<br>
<p>but the result was
<br>
<p>rreis_at_galego: /opt/build/openmpi-1.6
<br>
5044.0 $ patch -p1 &lt; /home/rreis/fortran-file-int-cast-fix.diff
<br>
patching file mpi/f77/file_get_view_f.c
<br>
Hunk #1 FAILED at 9.
<br>
Hunk #2 FAILED at 71.
<br>
2 out of 2 hunks FAILED -- saving rejects to file 
<br>
mpi/f77/file_get_view_f.c.rej
<br>
patching file mpi/f77/file_get_position_f.c
<br>
Hunk #1 FAILED at 9.
<br>
Hunk #2 FAILED at 65.
<br>
2 out of 2 hunks FAILED -- saving rejects to file 
<br>
mpi/f77/file_get_position_f.c.rej
<br>
patching file mpi/f77/file_get_size_f.c
<br>
Hunk #1 FAILED at 9.
<br>
Hunk #2 FAILED at 65.
<br>
2 out of 2 hunks FAILED -- saving rejects to file 
<br>
mpi/f77/file_get_size_f.c.rej
<br>
<p>so I'm probably doing something wrong here?
<br>
<p><p><p>&nbsp;&nbsp;Ricardo Reis
<br>
<p>&nbsp;&nbsp;'Non Serviam'
<br>
<p>&nbsp;&nbsp;PhD/MSc Mechanical Engineering | Lic. Aerospace Engineering
<br>
<p>&nbsp;&nbsp;Computational Fluid Dynamics, High Performance Computing, Turbulence
<br>
&nbsp;&nbsp;<a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
<br>
<p>&nbsp;&nbsp;Cultural Instigator @ R&#225;dio Zero
<br>
&nbsp;&nbsp;<a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
<br>
<p>&nbsp;&nbsp;<a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
<br>
<p>&nbsp;&nbsp;contacts:  gtalk: kyriusan_at_[hidden]  skype: kyriusan
<br>
<p>&nbsp;&nbsp;Institutional Address:
<br>
<p>&nbsp;&nbsp;Ricardo J.N. dos Reis
<br>
&nbsp;&nbsp;IDMEC, Instituto Superior T&#233;cnico, Technical University of Lisbon
<br>
&nbsp;&nbsp;Av. Rovisco Pais
<br>
&nbsp;&nbsp;1049-001 Lisboa
<br>
&nbsp;&nbsp;Portugal
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- email sent with alpine 2.00 -
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19287.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19285.php">Jeff Squyres: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>In reply to:</strong> <a href="19281.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19287.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19287.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
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
