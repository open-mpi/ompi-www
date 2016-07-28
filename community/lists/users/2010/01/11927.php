<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 00:23:45 2010" -->
<!-- isoreceived="20100129052345" -->
<!-- sent="Thu, 28 Jan 2010 21:23:40 -0800 (PST)" -->
<!-- isosent="20100129052340" -->
<!-- name="Tim" -->
<!-- email="timlee126_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="21203.97722.qm_at_web63106.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B6266B4.30404_at_sun.com" -->
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
<strong>Date:</strong> 2010-01-29 00:23:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11928.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11926.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11926.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11928.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11928.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11929.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, complicated_computation() and f() are simplified too much. They do take more inputs. 
<br>
<p>Among the inputs to complicated_computation(), some is passed from the main() to f() by address since it is a big array, some is passed by value, some are created inside f() before the call to complicated_computation(). 
<br>
<p>so actually (although not exactly) the code is like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int main(int argc, char ** argv)   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double *feature = new double[1000];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// compute values of elements of &quot;feature&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some operations  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f(size, feature);           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some operations  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;delete [] feature;       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void f(int size, double *feature)   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vector&lt;double&gt; coeff;      
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// read from a file into elements of coeff        
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MyClass myobj;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double * array =  new double [coeff.size()];           
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; coeff.size(); i++) // need to speed up by MPI.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{        
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array[i] = myobj.complicated_computation(size, coeff[i], feature); // time consuming   
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
<span class="quotelev1">&gt; Date: Thursday, January 28, 2010, 11:40 PM
</span><br>
<span class="quotelev1">&gt; Tim wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks Eugene!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My case, after simplified, is to speed up the
</span><br>
<span class="quotelev1">&gt; time-consuming computation in the loop below by assigning
</span><br>
<span class="quotelev1">&gt; iterations to several nodes in a cluster by MPI. Each
</span><br>
<span class="quotelev1">&gt; iteration of the loop computes each element of an array. The
</span><br>
<span class="quotelev1">&gt; computation of each element is independent of others in the
</span><br>
<span class="quotelev1">&gt; array.
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160; &#160;&#160;&#160;int main(int argc, char
</span><br>
<span class="quotelev1">&gt; ** argv)&#160; &#160; &#160;&#160;&#160;{&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;// some operations&#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;&#160;&#160;f(size);&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160;&#160;&#160;// some
</span><br>
<span class="quotelev1">&gt; operations&#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;return 0;&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;}&#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;void f(int size)&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;{&#160; &#160; &#160;&#160;&#160;// some
</span><br>
<span class="quotelev1">&gt; operations&#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;int i;&#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;&#160;&#160;double * array =&#160; new double
</span><br>
<span class="quotelev1">&gt; [size];&#160; &#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;for (i = 0; i &lt; size; i++) // need to
</span><br>
<span class="quotelev1">&gt; speed up by MPI.
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160;&#160;&#160;{&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;array[i] = complicated_computation(); //
</span><br>
<span class="quotelev1">&gt; time consuming&#160; &#160;&#160;&#160;
</span><br>
<span class="quotelev1">&gt; What are the inputs to complicated_computation()?&#160;
</span><br>
<span class="quotelev1">&gt; Does each process know what the inputs are?&#160; Or, do
</span><br>
<span class="quotelev1">&gt; they need to come from the master process?&#160; Are there
</span><br>
<span class="quotelev1">&gt; many inputs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160;&#160;&#160;}&#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;&#160;&#160;// some operations using all
</span><br>
<span class="quotelev1">&gt; elements in array&#160; &#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;delete [] array;&#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;}
</span><br>
<span class="quotelev2">&gt; &gt;&#160; 
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
<li><strong>Next message:</strong> <a href="11928.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11926.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11926.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11928.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11928.php">Terry Frankcombe: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11929.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
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
