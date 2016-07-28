<?
$subject_val = "Re: [OMPI users] Accessing data member of MPI_File struct";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 07:48:43 2012" -->
<!-- isoreceived="20120830114843" -->
<!-- sent="Thu, 30 Aug 2012 07:48:38 -0400" -->
<!-- isosent="20120830114838" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing data member of MPI_File struct" -->
<!-- id="D307ABF8-D5CD-4014-8812-A498F471ECD4_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAGSPLMm_3dh5WDW2UQoVS3-hKvooJXwPguJ+d9WbxKAqX2__bw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Accessing data member of MPI_File struct<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 07:48:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20065.php">Jeff Squyres: "Re: [OMPI users] fork in Fortran"</a>
<li><strong>Previous message:</strong> <a href="20063.php">sudhirs_at_[hidden]: "[OMPI users] fork in Fortran"</a>
<li><strong>In reply to:</strong> <a href="20060.php">Ammar Ahmad Awan: "[OMPI users] Accessing data member of MPI_File struct"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20078.php">Ammar Ahmad Awan: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<li><strong>Reply:</strong> <a href="20078.php">Ammar Ahmad Awan: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 30, 2012, at 5:05 AM, Ammar Ahmad Awan wrote:
<br>
<p><span class="quotelev1">&gt; int atomicity;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // method 1
</span><br>
<span class="quotelev1">&gt; printf(&quot;atomicity : %d&quot;, MPI_File_get_atomicity(fh,&amp;atomicity));
</span><br>
<p>I think you want:
<br>
<p>int atomicity;
<br>
MPI_File_get_atomicity(fh, &amp;atomicity);
<br>
printf(&quot;atomicity: %d\n&quot;, atomicity);
<br>
<p>MPI_File is an opaque structure; you won't be able to access any of the fields inside of it directly.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20065.php">Jeff Squyres: "Re: [OMPI users] fork in Fortran"</a>
<li><strong>Previous message:</strong> <a href="20063.php">sudhirs_at_[hidden]: "[OMPI users] fork in Fortran"</a>
<li><strong>In reply to:</strong> <a href="20060.php">Ammar Ahmad Awan: "[OMPI users] Accessing data member of MPI_File struct"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20078.php">Ammar Ahmad Awan: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<li><strong>Reply:</strong> <a href="20078.php">Ammar Ahmad Awan: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
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
