<?
$subject_val = "Re: [OMPI users] MPI_File_Read_all and large file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  2 15:15:33 2011" -->
<!-- isoreceived="20110302201533" -->
<!-- sent="Wed, 02 Mar 2011 15:15:24 -0500" -->
<!-- isosent="20110302201524" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_Read_all and large file" -->
<!-- id="4D6EA55C.8020304_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.1103021720150.3530_at_localhost" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-02 15:15:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15787.php">Michael Shuey: "Re: [OMPI users] RDMACM Differences"</a>
<li><strong>Previous message:</strong> <a href="15785.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15782.php">Ricardo Reis: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15783.php">Massimo Cafaro: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ricardo Reis wrote:
<br>
<span class="quotelev1">&gt; On Wed, 2 Mar 2011, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI users and developers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i'm using OpenMPI 1.4.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My question is about MPI_FIle_Real_all routine and files larger than 4 
</span><br>
<span class="quotelev2">&gt;&gt; GB.
</span><br>
<span class="quotelev2">&gt;&gt; Is this routine able to manage this case?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using the routine with 6 GB file the routine fails, retrieving an 
</span><br>
<span class="quotelev2">&gt;&gt; allocation
</span><br>
<span class="quotelev2">&gt;&gt; error. Investigating more in depth with Totalview, the problem appears 
</span><br>
<span class="quotelev2">&gt;&gt; in a
</span><br>
<span class="quotelev2">&gt;&gt; line 188 of ompi/mca/io/romio/romio/adio/ad_nfs/ad_nfs_read.c:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Type_size(fd-&gt;filetype, &amp;filetype_size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here there is an explicit cast to int that can causes the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Someone can help me?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the file size per process must be lower than 4Gb
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There was a discussion a short time ago about this...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; best,
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
<span class="quotelev1">&gt;  <a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  contacts:  gtalk: kyriusan_at_[hidden]  skype: kyriusan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hello Gabrielle
<br>
<p>This thread may help:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/11/14792.php">http://www.open-mpi.org/community/lists/users/2010/11/14792.php</a>
<br>
<p>As Ricardo and Massimo pointed out,
<br>
the issue may be the 2GB limitation of (MPI) integers.
<br>
There is a workaround suggested on one of the thread's messages,
<br>
whereby you use MPI types to reduce the count number
<br>
in the message buffer.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15787.php">Michael Shuey: "Re: [OMPI users] RDMACM Differences"</a>
<li><strong>Previous message:</strong> <a href="15785.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15782.php">Ricardo Reis: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15783.php">Massimo Cafaro: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
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
