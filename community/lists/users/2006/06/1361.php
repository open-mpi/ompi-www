<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 10:59:18 2006" -->
<!-- isoreceived="20060602145918" -->
<!-- sent="Fri, 2 Jun 2006 10:59:04 -0400" -->
<!-- isosent="20060602145904" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions" -->
<!-- id="91027819-A1CC-40BE-A162-CC69129F13DF_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="488D7167-107E-45C1-AACD-46C2FC79F5EA_at_umich.edu" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 10:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1362.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Previous message:</strong> <a href="1360.php">Peter Kjellstr&#246;m: "Re: [OMPI users] Wont run with 1.0.2"</a>
<li><strong>In reply to:</strong> <a href="1348.php">Brock Palen: "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-f90-size=SIZE
<br>
<p>specifies the size of the Fortran 90 interface module that is  
<br>
created.  In Fortran 90 the compiler can validate all your calls only  
<br>
if it has information of the functions/subroutines that you are  
<br>
calling.  This is done via a module with interfaces in OpenMPI and  
<br>
almost every program anyone writes--if there is another way I don't  
<br>
know about it yet.
<br>
<p>Problem with MPI is that almost every call involves routines that can  
<br>
accept a range of arguments in certain locations.
<br>
<p>MPI_INIT is trivial
<br>
<p>MPI_SEND is not.  The first argument has dozens of possible types:  
<br>
character, logical, integer, real, complex, which each can be  
<br>
different sizes and also can be a scalar or an array with dimension 1  
<br>
through 7.  How many is that, lots.
<br>
<p>And MPI_SEND is an easy case.
<br>
<p>OpenMPI gives you four choices:
<br>
<p>trivial -- MPI-2 F90-specific functions only
<br>
<p>small -- trivial + all MPI functions without choice buffers
<br>
<p>medium -- small + all MPI functions with one choice buffer  (MPI_SEND  
<br>
for example)
<br>
<p>large -- medium + all MPI functions with 2 choice buffers, but only  
<br>
when both buffers are the same type and same dimension (as currently  
<br>
implemented).  (MPI_GATHER for example) -- apparently new to 1.1  
<br>
alphas and will be delayed to 1.2
<br>
<p>Clear?
<br>
<p>What I discovered is that the two choice buffers are only half useful  
<br>
as currently implemented, since in half of the cases the buffers are  
<br>
likely to be of different dimensions.
<br>
<p>Then you have the special parameters, such as MPI_ANY_SOURCE,  
<br>
MPI_ANY_TAG, MPI_STATUS_IGNORE and the biggest scary monster of all  
<br>
MPI_IN_PLACE (declared double complex for reasons I don't understand  
<br>
yet, but for good reason I'm certain, offhand I'd guess the number of  
<br>
bytes the C routines expect in those locations).
<br>
<p>Michael
<br>
<p><p>On Jun 1, 2006, at 4:41 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; What are these &quot;small&quot; and &quot;large&quot;  modules?  What would they provide?
</span><br>
<span class="quotelev1">&gt; Brock
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 1, 2006, at 4:30 PM, Jeff Squyres ((jsquyres)) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You're right again.  Thanks for keeping us honest!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We clearly did not think through all the issues for the &quot;large&quot; F90
</span><br>
<span class="quotelev2">&gt;&gt; interface; I've opened ticket #55 for the issue.  I'm inclined to  
</span><br>
<span class="quotelev2">&gt;&gt; take
</span><br>
<span class="quotelev2">&gt;&gt; the same approach as for the other issues you discovered -- disable
</span><br>
<span class="quotelev2">&gt;&gt; &quot;large&quot; for v1.1 and push the fixes to v1.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/55">https://svn.open-mpi.org/trac/ompi/ticket/55</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Tuesday, May 30, 2006 3:40 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] MPI_GATHER: missing f90 interfaces for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mixed dimensions
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking at limitations of the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --with-mpi-f90-size=SIZE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            specify the types of functions in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran 90 MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            module, where size is one of:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trivial (MPI-2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            F90-specific functions only), small
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (trivial + all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            MPI functions without choice buffers),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; medium (small
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            + all MPI functions with one choice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffer), large
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            (medium + all MPI functions with 2 choice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                            but only when both buffers are the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same type)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not sure what &quot;same type&quot; was intended to mean here, if same type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than reasonable, but if same type and dimension (and as implemented)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then I can't see where any generic installation, i.e. more than one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user, could use --with-mpi-f90-size=large.  If fact I found one case
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where a bunch of the generated interfaces are a waste of space and a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; really bad idea as far as I can tell.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1362.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Previous message:</strong> <a href="1360.php">Peter Kjellstr&#246;m: "Re: [OMPI users] Wont run with 1.0.2"</a>
<li><strong>In reply to:</strong> <a href="1348.php">Brock Palen: "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
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
