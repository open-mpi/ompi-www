<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 00:48:25 2010" -->
<!-- isoreceived="20100129054825" -->
<!-- sent="Thu, 28 Jan 2010 21:50:08 -0800" -->
<!-- isosent="20100129055008" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="4B627710.2070002_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="21203.97722.qm_at_web63106.mail.re1.yahoo.com" -->
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
<strong>Date:</strong> 2010-01-29 00:50:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11930.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="11928.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11927.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11936.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11936.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim wrote:
<br>
<p><span class="quotelev1">&gt;Sorry, complicated_computation() and f() are simplified too much. They do take more inputs. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Among the inputs to complicated_computation(), some is passed from the main() to f() by address since it is a big array, some is passed by value, some are created inside f() before the call to complicated_computation(). 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;so actually (although not exactly) the code is like:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I think I'm agreeing with Terry.  But, to add more detail:
<br>
<p><span class="quotelev1">&gt;     int main(int argc, char ** argv)   
</span><br>
<span class="quotelev1">&gt;     {   
</span><br>
<span class="quotelev1">&gt;      int size;
</span><br>
<span class="quotelev1">&gt;      double *feature = new double[1000];
</span><br>
<span class="quotelev1">&gt;     // compute values of elements of &quot;feature&quot;
</span><br>
<span class="quotelev1">&gt;     // some operations
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
The array &quot;feature&quot; can be computed by the master and then broadcast, or 
<br>
it could be computed redundantly by each process.
<br>
<p><span class="quotelev1">&gt;     f(size, feature);           
</span><br>
<span class="quotelev1">&gt;     // some operations  
</span><br>
<span class="quotelev1">&gt;     delete [] feature;       
</span><br>
<span class="quotelev1">&gt;     return 0;   
</span><br>
<span class="quotelev1">&gt;     }   
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;     void f(int size, double *feature)   
</span><br>
<span class="quotelev1">&gt;     {           
</span><br>
<span class="quotelev1">&gt;     vector&lt;double&gt; coeff;      
</span><br>
<span class="quotelev1">&gt;     // read from a file into elements of coeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
Similarly, coeff can be read in by the master and then broadcast, or it 
<br>
could be read redundantly by each process, or each process could read 
<br>
only the portion that it will need.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MyClass myobj;
</span><br>
<span class="quotelev1">&gt;     double * array =  new double [coeff.size()];           
</span><br>
<span class="quotelev1">&gt;     for (int i = 0; i &lt; coeff.size(); i++) // need to speed up by MPI.
</span><br>
<span class="quotelev1">&gt;     {        
</span><br>
<span class="quotelev1">&gt;     array[i] = myobj.complicated_computation(size, coeff[i], feature); // time consuming   
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Each process loops only over the iterations that correspond to its 
<br>
rank.  Then, the master gathers all results.
<br>
<p><span class="quotelev1">&gt;     // some operations using all elements in array         
</span><br>
<span class="quotelev1">&gt;     delete [] array;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Once the slaves have finished their computations and sent their results 
<br>
to the master, they may exit.  The slaves will be launched at the same 
<br>
time as the master, but presumably have less to do than the master does 
<br>
before the &quot;parallel loop&quot; starts.  If you don't want slaves consuming 
<br>
excessive CPU time while they wait for the master, fix that problem 
<br>
later once you have the basic code working.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11930.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="11928.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11927.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11936.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11936.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
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
