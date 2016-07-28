<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 09:40:29 2010" -->
<!-- isoreceived="20100129144029" -->
<!-- sent="Fri, 29 Jan 2010 06:40:24 -0800 (PST)" -->
<!-- isosent="20100129144024" -->
<!-- name="Tim" -->
<!-- email="timlee126_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="713155.58243.qm_at_web63102.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B627710.2070002_at_sun.com" -->
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
<strong>Date:</strong> 2010-01-29 09:40:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11937.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11935.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<li><strong>In reply to:</strong> <a href="11929.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11937.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11937.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>How to send/recieve and broadcast objects of self-defined class and of std::vector? 
<br>
<p>How to deal with serialization problems?
<br>
<p>BTW: I would like to find some official documentation of OpenMP, but there seems none?
<br>
<p>--- On Fri, 1/29/10, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] speed up this problem by MPI
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Friday, January 29, 2010, 12:50 AM
</span><br>
<span class="quotelev1">&gt; Tim wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Sorry, complicated_computation() and f() are
</span><br>
<span class="quotelev1">&gt; simplified too much. They do take more inputs. 
</span><br>
<span class="quotelev2">&gt; &gt; Among the inputs to complicated_computation(), some is
</span><br>
<span class="quotelev1">&gt; passed from the main() to f() by address since it is a big
</span><br>
<span class="quotelev1">&gt; array, some is passed by value, some are created inside f()
</span><br>
<span class="quotelev1">&gt; before the call to complicated_computation(). 
</span><br>
<span class="quotelev2">&gt; &gt; so actually (although not exactly) the code is like:
</span><br>
<span class="quotelev2">&gt; &gt;&#160; 
</span><br>
<span class="quotelev1">&gt; I think I'm agreeing with Terry.&#160; But, to add more
</span><br>
<span class="quotelev1">&gt; detail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160;&#160;&#160;int main(int argc, char **
</span><br>
<span class="quotelev1">&gt; argv)&#160; &#160; &#160;&#160;&#160;{&#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; int size;
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160; &#160; double *feature = new
</span><br>
<span class="quotelev1">&gt; double[1000];
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160;&#160;&#160;// compute values of elements
</span><br>
<span class="quotelev1">&gt; of &quot;feature&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160;&#160;&#160;// some operations
</span><br>
<span class="quotelev2">&gt; &gt;&#160; 
</span><br>
<span class="quotelev1">&gt; The array &quot;feature&quot; can be computed by the master and then
</span><br>
<span class="quotelev1">&gt; broadcast, or it could be computed redundantly by each
</span><br>
<span class="quotelev1">&gt; process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160;&#160;&#160;f(size, feature);&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160;&#160;&#160;// some
</span><br>
<span class="quotelev1">&gt; operations&#160; &#160; &#160; delete [] feature;&#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;&#160;&#160;return 0;&#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;&#160;&#160;}&#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;void f(int size, double *feature)&#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;&#160;&#160;{&#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;&#160;&#160;vector&lt;double&gt; coeff;&#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; // read from a file into
</span><br>
<span class="quotelev1">&gt; elements of coeff
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; Similarly, coeff can be read in by the master and then
</span><br>
<span class="quotelev1">&gt; broadcast, or it could be read redundantly by each process,
</span><br>
<span class="quotelev1">&gt; or each process could read only the portion that it will
</span><br>
<span class="quotelev1">&gt; need.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160;&#160;&#160;MyClass myobj;
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160;&#160;&#160;double * array =&#160; new
</span><br>
<span class="quotelev1">&gt; double [coeff.size()];&#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;&#160;&#160;for (int i = 0; i &lt;
</span><br>
<span class="quotelev1">&gt; coeff.size(); i++) // need to speed up by MPI.
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160;&#160;&#160;{&#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; array[i] = myobj.complicated_computation(size,
</span><br>
<span class="quotelev1">&gt; coeff[i], feature); // time consuming&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;}
</span><br>
<span class="quotelev2">&gt; &gt;&#160; 
</span><br>
<span class="quotelev1">&gt; Each process loops only over the iterations that correspond
</span><br>
<span class="quotelev1">&gt; to its rank.&#160; Then, the master gathers all results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160;&#160;&#160;// some operations using all
</span><br>
<span class="quotelev1">&gt; elements in array&#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;delete [] array;
</span><br>
<span class="quotelev2">&gt; &gt;&#160; &#160;&#160;&#160;}
</span><br>
<span class="quotelev2">&gt; &gt;&#160; 
</span><br>
<span class="quotelev1">&gt; Once the slaves have finished their computations and sent
</span><br>
<span class="quotelev1">&gt; their results to the master, they may exit.&#160; The slaves
</span><br>
<span class="quotelev1">&gt; will be launched at the same time as the master, but
</span><br>
<span class="quotelev1">&gt; presumably have less to do than the master does before the
</span><br>
<span class="quotelev1">&gt; &quot;parallel loop&quot; starts.&#160; If you don't want slaves
</span><br>
<span class="quotelev1">&gt; consuming excessive CPU time while they wait for the master,
</span><br>
<span class="quotelev1">&gt; fix that problem later once you have the basic code
</span><br>
<span class="quotelev1">&gt; working.
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
<li><strong>Next message:</strong> <a href="11937.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11935.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<li><strong>In reply to:</strong> <a href="11929.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11937.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11937.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
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
