<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 20:48:23 2010" -->
<!-- isoreceived="20100129014823" -->
<!-- sent="Thu, 28 Jan 2010 17:48:18 -0800 (PST)" -->
<!-- isosent="20100129014818" -->
<!-- name="Tim" -->
<!-- email="timlee126_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="802826.63046.qm_at_web63108.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B623A7D.2030705_at_sun.com" -->
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
<strong>From:</strong> Tim (<em>timlee126_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 20:48:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11925.php">Gus Correa: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11923.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11921.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11926.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11926.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Eugene!
<br>
<p>My case, after simplified, is to speed up the time-consuming computation in the loop below by assigning iterations to several nodes in a cluster by MPI. Each iteration of the loop computes each element of an array. The computation of each element is independent of others in the array.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int main(int argc, char ** argv)   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some operations           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f(size);           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some operations         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void f(int size)   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some operations         
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double * array =  new double [size];           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; size; i++) // need to speed up by MPI.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array[i] = complicated_computation(); // time consuming    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some operations using all elements in array           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;delete [] array; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>--- On Thu, 1/28/10, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] speed up this problem by MPI
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thursday, January 28, 2010, 8:31 PM
</span><br>
<span class="quotelev1">&gt; Tim wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, Eugene.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I admit I am not that smart to understand well how to
</span><br>
<span class="quotelev1">&gt; use MPI, but I did read some basic materials about it and
</span><br>
<span class="quotelev1">&gt; understand how some simple problems are solved by MPI. 
</span><br>
<span class="quotelev2">&gt; &gt; But dealing with an array in my case, I am not certain
</span><br>
<span class="quotelev1">&gt; about how to apply MPI to it. Are you saying to use send and
</span><br>
<span class="quotelev1">&gt; recieve to transfer the value computed for each element from
</span><br>
<span class="quotelev1">&gt; child process to parent process?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; You can, but typically that would entail too much
</span><br>
<span class="quotelev1">&gt; communication overhead for each element.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Do you allocate a copy of the array for each process?
</span><br>
<span class="quotelev2">&gt; &gt;&#160; 
</span><br>
<span class="quotelev1">&gt; You can, but typically that would entail excessive memory
</span><br>
<span class="quotelev1">&gt; consumption.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Typically, one allocates only a portion of the array on
</span><br>
<span class="quotelev1">&gt; each process.&#160; E.g., if the array has 10,000 elements
</span><br>
<span class="quotelev1">&gt; and you have four processes, the first gets the first 2,500
</span><br>
<span class="quotelev1">&gt; elements, the second the next 2,500, and so on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Also I only need the loop that computes every element
</span><br>
<span class="quotelev1">&gt; of the array to be parallelized.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; If you only need the initial computation of array elements
</span><br>
<span class="quotelev1">&gt; to be parallelized, perhaps any of the above strategies
</span><br>
<span class="quotelev1">&gt; could work.&#160; It depends on how expensive the
</span><br>
<span class="quotelev1">&gt; computation of each element is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Someone said that the parallel part begins with
</span><br>
<span class="quotelev1">&gt; MPI_Init and ends with MPI_Finilize,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; Well, usually all processes are launched in parallel.&#160;
</span><br>
<span class="quotelev1">&gt; So, the parallel begins &quot;immediately.&quot;&#160; Inter-process
</span><br>
<span class="quotelev1">&gt; communications using MPI, however, must take place between
</span><br>
<span class="quotelev1">&gt; the MPI_Init and MPI_Finalize calls.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and one can do any serial computations before and/or
</span><br>
<span class="quotelev1">&gt; after these calls. But I have wrote some MPI programs, and
</span><br>
<span class="quotelev1">&gt; found that the parallel part is not restricted between
</span><br>
<span class="quotelev1">&gt; MPI_Init and MPI_Finilize, but instead the whole program. If
</span><br>
<span class="quotelev1">&gt; the rest part of the code has to be wrapped for process with
</span><br>
<span class="quotelev1">&gt; ID 0, I have little idea about how to apply that to my case
</span><br>
<span class="quotelev1">&gt; since the rest part would be the parts before and after the
</span><br>
<span class="quotelev1">&gt; loop in the function and the whole in main().
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; I don't understand your case very clearly.&#160; I will
</span><br>
<span class="quotelev1">&gt; take a guess.&#160; You could have all processes start and
</span><br>
<span class="quotelev1">&gt; call MPI_Init.&#160; Then, slave processes can go to sleep,
</span><br>
<span class="quotelev1">&gt; waking occasionally to check if the master has sent a signal
</span><br>
<span class="quotelev1">&gt; to begin computation.&#160; The master does what it has to
</span><br>
<span class="quotelev1">&gt; do and then sends wake signals.&#160; Each slave computes
</span><br>
<span class="quotelev1">&gt; its portion and sends that portion back to the master.&#160;
</span><br>
<span class="quotelev1">&gt; Each slave exits.&#160; The master gathers all the pieces
</span><br>
<span class="quotelev1">&gt; and resumes its computation.&#160; Does that sound right?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11925.php">Gus Correa: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11923.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11921.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11926.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11926.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
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
