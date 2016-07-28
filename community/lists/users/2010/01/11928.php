<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 00:36:39 2010" -->
<!-- isoreceived="20100129053639" -->
<!-- sent="Fri, 29 Jan 2010 16:36:28 +1100" -->
<!-- isosent="20100129053628" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="1264743388.5851.160.camel_at_rscpc28.anu.edu.au" -->
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
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-29 00:36:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11929.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11927.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11927.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11929.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In rank 0 main broadcast feature to all processes.
<br>
In f calculate a slice of array based on rank, then either send/recv
<br>
back to rank 0 or maybe gather.
<br>
Only rank 0 does everything else.  (Other ranks must call f after
<br>
recv'ing feature.)
<br>
<p><p>On Thu, 2010-01-28 at 21:23 -0800, Tim wrote:
<br>
<span class="quotelev1">&gt; Sorry, complicated_computation() and f() are simplified too much. They do take more inputs. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Among the inputs to complicated_computation(), some is passed from the main() to f() by address since it is a big array, some is passed by value, some are created inside f() before the call to complicated_computation(). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so actually (although not exactly) the code is like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      int main(int argc, char ** argv)   
</span><br>
<span class="quotelev1">&gt;      {   
</span><br>
<span class="quotelev1">&gt;       int size;
</span><br>
<span class="quotelev1">&gt;       double *feature = new double[1000];
</span><br>
<span class="quotelev1">&gt;      // compute values of elements of &quot;feature&quot;
</span><br>
<span class="quotelev1">&gt;      // some operations  
</span><br>
<span class="quotelev1">&gt;      f(size, feature);           
</span><br>
<span class="quotelev1">&gt;      // some operations  
</span><br>
<span class="quotelev1">&gt;      delete [] feature;       
</span><br>
<span class="quotelev1">&gt;      return 0;   
</span><br>
<span class="quotelev1">&gt;      }   
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;      void f(int size, double *feature)   
</span><br>
<span class="quotelev1">&gt;      {           
</span><br>
<span class="quotelev1">&gt;      vector&lt;double&gt; coeff;      
</span><br>
<span class="quotelev1">&gt;      // read from a file into elements of coeff        
</span><br>
<span class="quotelev1">&gt;      MyClass myobj;
</span><br>
<span class="quotelev1">&gt;      double * array =  new double [coeff.size()];           
</span><br>
<span class="quotelev1">&gt;      for (int i = 0; i &lt; coeff.size(); i++) // need to speed up by MPI.
</span><br>
<span class="quotelev1">&gt;      {        
</span><br>
<span class="quotelev1">&gt;      array[i] = myobj.complicated_computation(size, coeff[i], feature); // time consuming   
</span><br>
<span class="quotelev1">&gt;      }           
</span><br>
<span class="quotelev1">&gt;      // some operations using all elements in array         
</span><br>
<span class="quotelev1">&gt;      delete [] array;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- On Thu, 1/28/10, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] speed up this problem by MPI
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thursday, January 28, 2010, 11:40 PM
</span><br>
<span class="quotelev2">&gt; &gt; Tim wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks Eugene!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My case, after simplified, is to speed up the
</span><br>
<span class="quotelev2">&gt; &gt; time-consuming computation in the loop below by assigning
</span><br>
<span class="quotelev2">&gt; &gt; iterations to several nodes in a cluster by MPI. Each
</span><br>
<span class="quotelev2">&gt; &gt; iteration of the loop computes each element of an array. The
</span><br>
<span class="quotelev2">&gt; &gt; computation of each element is independent of others in the
</span><br>
<span class="quotelev2">&gt; &gt; array.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       int main(int argc, char
</span><br>
<span class="quotelev2">&gt; &gt; ** argv)       {   
</span><br>
<span class="quotelev2">&gt; &gt;    // some operations     
</span><br>
<span class="quotelev2">&gt; &gt;          f(size);   
</span><br>
<span class="quotelev2">&gt; &gt;            // some
</span><br>
<span class="quotelev2">&gt; &gt; operations         
</span><br>
<span class="quotelev2">&gt; &gt;    return 0;   
</span><br>
<span class="quotelev2">&gt; &gt;    }         
</span><br>
<span class="quotelev2">&gt; &gt;    void f(int size)   
</span><br>
<span class="quotelev2">&gt; &gt;    {       // some
</span><br>
<span class="quotelev2">&gt; &gt; operations         
</span><br>
<span class="quotelev2">&gt; &gt;    int i;         
</span><br>
<span class="quotelev2">&gt; &gt;      double * array =  new double
</span><br>
<span class="quotelev2">&gt; &gt; [size];           
</span><br>
<span class="quotelev2">&gt; &gt;    for (i = 0; i &lt; size; i++) // need to
</span><br>
<span class="quotelev2">&gt; &gt; speed up by MPI.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     {   
</span><br>
<span class="quotelev2">&gt; &gt;    array[i] = complicated_computation(); //
</span><br>
<span class="quotelev2">&gt; &gt; time consuming     
</span><br>
<span class="quotelev2">&gt; &gt; What are the inputs to complicated_computation()? 
</span><br>
<span class="quotelev2">&gt; &gt; Does each process know what the inputs are?  Or, do
</span><br>
<span class="quotelev2">&gt; &gt; they need to come from the master process?  Are there
</span><br>
<span class="quotelev2">&gt; &gt; many inputs?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     }       
</span><br>
<span class="quotelev2">&gt; &gt;        // some operations using all
</span><br>
<span class="quotelev2">&gt; &gt; elements in array           
</span><br>
<span class="quotelev2">&gt; &gt;    delete [] array; 
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11929.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11927.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11927.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11929.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
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
