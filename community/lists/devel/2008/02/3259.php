<?
$subject_val = "[OMPI devel] t_win failures if openib btl is not loaded";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 18 10:53:54 2008" -->
<!-- isoreceived="20080218155354" -->
<!-- sent="Mon, 18 Feb 2008 10:53:50 -0500" -->
<!-- isosent="20080218155350" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] t_win failures if openib btl is not loaded" -->
<!-- id="47B9AA0E.3000009_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] t_win failures if openib btl is not loaded<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-18 10:53:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3260.php">Jeff Squyres: "[OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3258.php">George Bosilca: "Re: [OMPI devel] FORTRAN_LOGICAL warnings on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3404.php">Jeff Squyres: "Re: [OMPI devel] t_win failures if openib btl is not loaded"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3404.php">Jeff Squyres: "Re: [OMPI devel] t_win failures if openib btl is not loaded"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>This is a bit strange, so I thought I'd ping the group before digging 
<br>
any further.
<br>
<p>The onesided test 't_win' is failing for us (specifically the 
<br>
'FENCE_EPOCH' part). It is only failing when we are NOT using openib.
<br>
<p>But here is where it gets strange. The test is run twice: once where the 
<br>
window memory is allocated using MPI_Alloc_mem, and once where it is 
<br>
allocated using malloc. When we use MPI_Alloc_mem, it fails. Using 
<br>
malloc, it works just fine all the time.
<br>
<p>That is, I do
<br>
&quot;mpirun -np 1 -mca btl &lt;btls&gt; ./t_win&quot; and get:
<br>
<p>btls        | Using MPI_Alloc_mem | using malloc
<br>
------------+---------------------+---------------
<br>
self        |   Fail              |   Pass
<br>
openib,self |   Pass              |   Pass
<br>
sm,self     |   Fail              |   Pass
<br>
tcp,self    |   Fail              |   Pass
<br>
<p>But we are only using one proc, so the only transport ever used should 
<br>
be 'self'. So this makes me think something is going on with the mpool 
<br>
or related part of the code.
<br>
<p>Any ideas as to what is going on here?
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3260.php">Jeff Squyres: "[OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3258.php">George Bosilca: "Re: [OMPI devel] FORTRAN_LOGICAL warnings on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3404.php">Jeff Squyres: "Re: [OMPI devel] t_win failures if openib btl is not loaded"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/03/3404.php">Jeff Squyres: "Re: [OMPI devel] t_win failures if openib btl is not loaded"</a>
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
