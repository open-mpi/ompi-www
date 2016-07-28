<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 23:38:38 2010" -->
<!-- isoreceived="20100129043838" -->
<!-- sent="Thu, 28 Jan 2010 20:40:20 -0800" -->
<!-- isosent="20100129044020" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="4B6266B4.30404_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="802826.63046.qm_at_web63108.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] speed up this problem by MPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 23:40:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11927.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11925.php">Gus Correa: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11924.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11927.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11927.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim wrote:
<br>
<p><span class="quotelev1">&gt;Thanks Eugene!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;My case, after simplified, is to speed up the time-consuming computation in the loop below by assigning iterations to several nodes in a cluster by MPI. Each iteration of the loop computes each element of an array. The computation of each element is independent of others in the array.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;     int main(int argc, char ** argv)   
</span><br>
<span class="quotelev1">&gt;     {   
</span><br>
<span class="quotelev1">&gt;     // some operations           
</span><br>
<span class="quotelev1">&gt;     f(size);           
</span><br>
<span class="quotelev1">&gt;     // some operations         
</span><br>
<span class="quotelev1">&gt;     return 0;   
</span><br>
<span class="quotelev1">&gt;     }   
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     void f(int size)   
</span><br>
<span class="quotelev1">&gt;     {   
</span><br>
<span class="quotelev1">&gt;     // some operations         
</span><br>
<span class="quotelev1">&gt;     int i;           
</span><br>
<span class="quotelev1">&gt;     double * array =  new double [size];           
</span><br>
<span class="quotelev1">&gt;     for (i = 0; i &lt; size; i++) // need to speed up by MPI.
</span><br>
<span class="quotelev1">&gt;     {   
</span><br>
<span class="quotelev1">&gt;     array[i] = complicated_computation(); // time consuming    
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
What are the inputs to complicated_computation()?  Does each process 
<br>
know what the inputs are?  Or, do they need to come from the master 
<br>
process?  Are there many inputs?
<br>
<p><span class="quotelev1">&gt;     }           
</span><br>
<span class="quotelev1">&gt;     // some operations using all elements in array           
</span><br>
<span class="quotelev1">&gt;     delete [] array; 
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11927.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11925.php">Gus Correa: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11924.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11927.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11927.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
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
