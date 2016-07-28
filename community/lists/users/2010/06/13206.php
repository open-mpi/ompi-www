<?
$subject_val = "Re: [OMPI users] 1.4.2 build problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 10:14:28 2010" -->
<!-- isoreceived="20100602141428" -->
<!-- sent="Wed, 02 Jun 2010 08:14:22 -0600" -->
<!-- isosent="20100602141422" -->
<!-- name="John Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.4.2 build problem" -->
<!-- id="4C06673E.1070505_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D84A84A-0D55-4885-BE7C-C94C97251D7D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.4.2 build problem<br>
<strong>From:</strong> John Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 10:14:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13207.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13205.php">Jeff Squyres: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>In reply to:</strong> <a href="13202.php">Jeff Squyres: "Re: [OMPI users] 1.4.2 build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13649.php">Jeff Squyres: "Re: [OMPI users] 1.4.2 build problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13649.php">Jeff Squyres: "Re: [OMPI users] 1.4.2 build problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/2/10 7:33 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 1, 2010, at 5:27 PM, John R. Cary wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; After patching, I get:
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; ...meaning that you have applied the patch that you sent yesterday?
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>Yes.
<br>
<span class="quotelev1">&gt; I applied the &quot;fix the spaces after \ characters&quot; patch to the trunk and release branches.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>Thx.  I am still working from 1.4.2 tarball.
<br>
<p><span class="quotelev1">&gt; But as for why you're getting errors, Ralph asked yesterday how you configured Open MPI.  What you're doing to the Makefile's *shouldn't* be necessary.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>Sorry, I missed Ralph's question.  I am doing the following configure with
<br>
the following system and gcc.
<br>
<p>iter.cary$ head -1 configure.out; uname -a; gcc --version
<br>
/scr_iter/cary/facetspkgs/builds/openmpi/configure 
<br>
--prefix=/usr/local/contrib/openmpi-1.4.2-nodl CC='gcc' CXX='g++' 
<br>
FC='gfortran' F77='gfortran' --enable-static --with-pic --disable-dlopen 
<br>
--enable-contrib-no-build=vt 
<br>
--with-wrapper-ldflags=-Wl,-rpath,/usr/local/contrib/openmpi-1.4.2-nodl/lib  
<br>
--with-valgrind=/usr/local/contrib/valgrind
<br>
Linux iter.txcorp.com 2.6.29.4-167.fc11.x86_64 #1 SMP Wed May 27 
<br>
17:27:08 EDT 2009 x86_64 x86_64 x86_64 GNU/Linux
<br>
gcc (GCC) 4.4.0 20090506 (Red Hat 4.4.0-4)
<br>
<p>I did discover that my previous configure had a wrong value for the
<br>
--with-wrapper-ldflags argument.  Now all works.
<br>
<p>It seems that the rpath arg is something that bites me over and again.
<br>
What are your thoughts about making this automatic?
<br>
<p>Thx.....John Cary
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13207.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13205.php">Jeff Squyres: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>In reply to:</strong> <a href="13202.php">Jeff Squyres: "Re: [OMPI users] 1.4.2 build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13649.php">Jeff Squyres: "Re: [OMPI users] 1.4.2 build problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13649.php">Jeff Squyres: "Re: [OMPI users] 1.4.2 build problem"</a>
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
