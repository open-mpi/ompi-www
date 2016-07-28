<?
$subject_val = "Re: [OMPI users] Problem with private variables in modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 18:12:24 2010" -->
<!-- isoreceived="20100310231224" -->
<!-- sent="Thu, 11 Mar 2010 10:12:13 +1100" -->
<!-- isosent="20100310231213" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with private variables in modules" -->
<!-- id="1268262734.8375.27.camel_at_rscpc28.anu.edu.au" -->
<!-- charset="utf-8" -->
<!-- inreplyto="473502DFF1A2F249B970842E22D9823B01A5065F9F4A_at_MAILCCR.arl.psu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with private variables in modules<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 18:12:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12308.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12306.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12303.php">Justin Watson: "[OMPI users] Problem with private variables in modules"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Justin
<br>
<p>I think you are confusing OpenMP and OpenMPI.
<br>
<p>You sound like you're using OpenMP.  This mailing list is for OpenMPI, a
<br>
specific implementation of MPI.  OpenMP and MPI, while having some
<br>
overlapping aims, are completely separate.
<br>
<p>I suggest you post your query to an OpenMP mailing list.
<br>
<p>Ciao
<br>
Terry
<br>
<p><p>On Wed, 2010-03-10 at 13:56 -0500, Justin Watson wrote:
<br>
<span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 I have  come across a situation where I am trying to
</span><br>
<span class="quotelev1">&gt; make private variables that passed to subroutines using modules.  Here
</span><br>
<span class="quotelev1">&gt; is the situation, The main program calls two different routines.
</span><br>
<span class="quotelev1">&gt; These routines are functionally different but utilize the same
</span><br>
<span class="quotelev1">&gt; variable names for some global data which are contained in a module
</span><br>
<span class="quotelev1">&gt; (this was done to make the passing of the data easy to various levels
</span><br>
<span class="quotelev1">&gt; of subroutines it is not needed outside the subroutine chain).  I am
</span><br>
<span class="quotelev1">&gt; using workshare constructs to run each of these routines on its own
</span><br>
<span class="quotelev1">&gt; thread.  I would  like to make the data in the module private to that
</span><br>
<span class="quotelev1">&gt; thread.  When I set the variable to private it still behaves as if it
</span><br>
<span class="quotelev1">&gt; were shared.  If I pass the variable to the routines via an argument
</span><br>
<span class="quotelev1">&gt; list everything is fine (this will cause me to re-write a bunch of
</span><br>
<span class="quotelev1">&gt; code).  The question is &#226;&#128;&#166; shouldn&#226;&#128;&#153;t this work within the context of a
</span><br>
<span class="quotelev1">&gt; module as well?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 I have been getting different result using different
</span><br>
<span class="quotelev1">&gt; compilers.  I have tried Lahey and Intel and they both show signs of
</span><br>
<span class="quotelev1">&gt; not handling this properly.  I have attach a small test problem that
</span><br>
<span class="quotelev1">&gt; mimics what I am doing in the large code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Justin K. Watson
</span><br>
<span class="quotelev1">&gt; Email: jkw104_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Research Assistant
</span><br>
<span class="quotelev1">&gt; Phone: (814) 863-6754
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Computational Methods Development Department
</span><br>
<span class="quotelev1">&gt; Fax: (814) 865-3287
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Applied Research Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Pennsylvania State University
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.O. Box 30
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; State College, Pa 16804-0030
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
<li><strong>Next message:</strong> <a href="12308.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12306.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12303.php">Justin Watson: "[OMPI users] Problem with private variables in modules"</a>
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
