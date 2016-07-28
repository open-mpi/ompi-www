<?
$subject_val = "Re: [OMPI users] MPI_File_Read_all and large file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  2 12:21:05 2011" -->
<!-- isoreceived="20110302172105" -->
<!-- sent="Wed, 2 Mar 2011 17:20:58 +0000 (WET)" -->
<!-- isosent="20110302172058" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_Read_all and large file" -->
<!-- id="alpine.DEB.2.00.1103021720150.3530_at_localhost" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="AANLkTima-YSyo6TMCPn_C1mWSQfwpPakF+MHmieo4P_=_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_File_Read_all and large file<br>
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-02 12:20:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15783.php">Massimo Cafaro: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>Previous message:</strong> <a href="15781.php">Gabriele Fatigati: "[OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>In reply to:</strong> <a href="15781.php">Gabriele Fatigati: "[OMPI users] MPI_File_Read_all and large file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15786.php">Gus Correa: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>Reply:</strong> <a href="15786.php">Gus Correa: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2 Mar 2011, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI users and developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i'm using OpenMPI 1.4.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is about MPI_FIle_Real_all routine and files larger than 4 GB.
</span><br>
<span class="quotelev1">&gt; Is this routine able to manage this case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using the routine with 6 GB file the routine fails, retrieving an allocation
</span><br>
<span class="quotelev1">&gt; error. Investigating more in depth with Totalview, the problem appears in a
</span><br>
<span class="quotelev1">&gt; line 188 of ompi/mca/io/romio/romio/adio/ad_nfs/ad_nfs_read.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Type_size(fd-&gt;filetype, &amp;filetype_size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here there is an explicit cast to int that can causes the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Someone can help me?
</span><br>
<p>the file size per process must be lower than 4Gb
<br>
<p>There was a discussion a short time ago about this...
<br>
<p>best,
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
<p>&nbsp;&nbsp;<a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
<br>
<p>&nbsp;&nbsp;contacts:  gtalk: kyriusan_at_[hidden]  skype: kyriusan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15783.php">Massimo Cafaro: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>Previous message:</strong> <a href="15781.php">Gabriele Fatigati: "[OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>In reply to:</strong> <a href="15781.php">Gabriele Fatigati: "[OMPI users] MPI_File_Read_all and large file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15786.php">Gus Correa: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>Reply:</strong> <a href="15786.php">Gus Correa: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
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
