<?
$subject_val = "Re: [OMPI users] MPI Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 11:47:35 2012" -->
<!-- isoreceived="20120625154735" -->
<!-- sent="Mon, 25 Jun 2012 08:47:30 -0700 (PDT)" -->
<!-- isosent="20120625154730" -->
<!-- name="Mohamad Ali Rostami" -->
<!-- email="ma.rostami_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Problem" -->
<!-- id="1340639250.23895.YahooMailNeo_at_web125703.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BEE64E30-AB18-40B6-B32E-74E12C1F0EA9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Problem<br>
<strong>From:</strong> Mohamad Ali Rostami (<em>ma.rostami_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-25 11:47:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19661.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19659.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19659.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19661.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19661.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes.

I tried some really simple code like:

use mpi
integer ierr
call mpi_init(ierr)

The problem still exists.

However, I am running the code from some make file and call
the compiler mpif90. Perhaps some special library should be included?

Could the problem be from the hybrid parallelization?

And something else which I am thinking of: Can extra flags for compiler make this happen?

The last question came to my mind because when I try this simple example with mpif90 alone (without make file), it works good.

$(MPIFC) -c $(FFLAGS) $(PFLAGS) $&lt; -o $@



________________________________
 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Monday, June 25, 2012 3:39 PM
Subject: Re: [OMPI users] MPI Problem
 
On Jun 25, 2012, at 4:07 AM, Mohamad Ali Rostami wrote:

&gt; I have an error since a week ago which it makes me crazy. :P
&gt; I have a OpenMP parallelized fortran (f90) program which I am going to parallelize some part of it, using MPI (OpenMPI).
&gt; When I want to compile the code with my new MPI code, I get this problem: 
&gt; &quot;Error: There is no specific subroutine for the generic 'mpi_init'&quot;, while the compilation has no problem
&gt; with the header &quot;use mpi&quot; and even it seems that it does not have any problems with the variables and parameters from
&gt; MPI and the problem is just with subroutines.

This *usually* means that you are calling the subroutine incorrectly (MPI_Init, in this case).&#160; The prototype for MPI_Init is:

subroutine MPI_Init(ierr)
&#160; integer, intent(out) :: ierr
end subroutine MPI_Init

Are you passing a writable integer parameter?

-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19660/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19661.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19659.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19659.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19661.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19661.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
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
