<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun  4 10:56:30 2007" -->
<!-- isoreceived="20070604145630" -->
<!-- sent="Mon, 4 Jun 2007 10:56:20 -0400" -->
<!-- isosent="20070604145620" -->
<!-- name="Aaron Thompson" -->
<!-- email="aaron.p.thompson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4 -- solved" -->
<!-- id="0B0949B0-5C0C-4BDC-B8AF-AC1854CE3BDD_at_vanderbilt.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F2E19C85-F650-46C0-BCC8-294312B639A7_at_ccr.jussieu.fr" -->
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
<strong>From:</strong> Aaron Thompson (<em>aaron.p.thompson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-04 10:56:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3363.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Previous message:</strong> <a href="3361.php">Allan, Mark \(UK Filton\): "[OMPI users] Timing communication"</a>
<li><strong>In reply to:</strong> <a href="3359.php">Christian Simon: "Re: [OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dr. Simon,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My gfortran version was more recent than the official one at the GNU  
<br>
website.  I tried it with 4.3, and that gave me that error.  However,  
<br>
I just tried it with the stable version 4.2, which is the latest at  
<br>
the GNU website, and it worked!  I think what happened is that it  
<br>
compiled with CC pointing to Apple's installed cc version 4.0.1, but  
<br>
with F90 pointing gfortran 4.3 that I installed.  This time I forced  
<br>
it to use GCC 4.2 the whole way through and it worked.  Thank you for  
<br>
pointing me in the right direction.
<br>
<p>So for anyone else who may come across this, if you get an error like
<br>
Fatal Error: Reading module mpi at line 3562 column 2: Expected integer
<br>
it may mean that you've used a different version of cc than gfortran  
<br>
when configuring OpenMPI.
<br>
<p>The configure script ought to warn about this!
<br>
<p>Aaron Thompson
<br>
Vanderbilt University
<br>
aaron.p.thompson_at_[hidden]
<br>
<p><p><p>On Jun 3, 2007, at 5:39 PM, Christian Simon wrote:
<br>
<p><span class="quotelev1">&gt; Dear Aaron,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's what I did in detail.
</span><br>
<span class="quotelev2">&gt;&gt; I downloaded gfortran 4.3 from <a href="http://hpc.sourceforge.net/">http://hpc.sourceforge.net/</a> and that
</span><br>
<span class="quotelev2">&gt;&gt; installed fine.  Simple programs compile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is your gfortran older or more recent than the official
</span><br>
<span class="quotelev1">&gt; one on <a href="http://gcc.gnu.org/fortran/">http://gcc.gnu.org/fortran/</a> ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr. Christian SIMON, Maitre de Conferences
</span><br>
<span class="quotelev1">&gt; Laboratoire LI2C-UMR7612                Bat. F74, piece 757
</span><br>
<span class="quotelev1">&gt; Universite Pierre et Marie Curie        Tel:+33.1.44.27.32.65
</span><br>
<span class="quotelev1">&gt; Case 51                                 Fax:+33.1.44.27.32.28
</span><br>
<span class="quotelev1">&gt; 4 Place Jussieu
</span><br>
<span class="quotelev1">&gt; 75252 Paris Cedex 05
</span><br>
<span class="quotelev1">&gt; France/Europe
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
<li><strong>Next message:</strong> <a href="3363.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Previous message:</strong> <a href="3361.php">Allan, Mark \(UK Filton\): "[OMPI users] Timing communication"</a>
<li><strong>In reply to:</strong> <a href="3359.php">Christian Simon: "Re: [OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4"</a>
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
