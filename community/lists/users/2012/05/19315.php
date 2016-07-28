<?
$subject_val = "Re: [OMPI users] MPI_SCAN";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 20 20:21:48 2012" -->
<!-- isoreceived="20120521002148" -->
<!-- sent="Sun, 20 May 2012 20:21:50 -0400" -->
<!-- isosent="20120521002150" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_SCAN" -->
<!-- id="B816204D-C4E7-493A-BF1F-8397C885C5CF_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFAE9jgC41SdWZ+FZnZ61O059UoJ0t_6AEj-fzNjC6Wz51bEdw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_SCAN<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-20 20:21:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19316.php">Jeff Squyres: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>Previous message:</strong> <a href="19314.php">Reuti: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>In reply to:</strong> <a href="19313.php">Rohan Deshpande: "Re: [OMPI users] MPI_SCAN"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2012, at 1:36 PM, Rohan Deshpande wrote:
<br>
<p><span class="quotelev1">&gt; I am not understanding how MPI_Reduce would be useful. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Say I have 3 processes and each process has array [1,2,3,4] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When each process calculates the prefix sum using cuda each process will have array as [1,3,6,10]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so if I use MPI_Reduce to gather results it returns me sum as 30. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but the original array is [1,2,3,4,1,2,3,4,1,2,3,4] and the prefix sum of this array should be
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1,3,6,10,11,13,16,20,21,23,26,30]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is my understanding wrong somewhere?
</span><br>
<p>If that is the operation you are looking for, then MPI_Scan is sufficient.
<br>
<p>Your original email was somewhat cryptic; the phrase &quot;When each task returns its result (which would be array) master task needs to combine all the results to get the final result.&quot; led me to believe that you might just need MPI_Reduce, instead.
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
<li><strong>Next message:</strong> <a href="19316.php">Jeff Squyres: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>Previous message:</strong> <a href="19314.php">Reuti: "Re: [OMPI users] Cannot compile code with gfortran + OpenMPI when OpenMPI was built with latest intl compilers"</a>
<li><strong>In reply to:</strong> <a href="19313.php">Rohan Deshpande: "Re: [OMPI users] MPI_SCAN"</a>
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
