<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  9 17:45:16 2005" -->
<!-- isoreceived="20051109224516" -->
<!-- sent="Wed, 9 Nov 2005 17:45:15 -0500" -->
<!-- isosent="20051109224515" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime" -->
<!-- id="D1EC5128-D2B0-466D-A452-4912D6F73D81_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="206FFE76-B2BD-4EED-9C90-A74DE2DE6BD9_at_rpi.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-09 17:45:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0299.php">Brent LEBACK: "[O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
<li><strong>Previous message:</strong> <a href="0297.php">Charles Williams: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>In reply to:</strong> <a href="0297.php">Charles Williams: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great!
<br>
<p>We have also committed a whole bunch of subtle datatype fixes for  
<br>
really obscure corner cases (there's still a few more coming).  I  
<br>
*doubt* they will affect you, but just to give you a &quot;fair warning&quot;  
<br>
heads up...
<br>
<p><p>On Nov 9, 2005, at 5:34 PM, Charles Williams wrote:
<br>
<p><span class="quotelev1">&gt; Thanks.  Everything builds OK now.  This was after pulling the  
</span><br>
<span class="quotelev1">&gt; version from yesterday (1.0rc5r8038) and adding your file.  At  
</span><br>
<span class="quotelev1">&gt; least some of the PETSc tests work OK now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Charles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2005, at 3:03 PM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 3
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 8 Nov 2005 15:03:24 -0500
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;5aeaf5bfbd5e9478f3866ec9b21d418b_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alternative, if you don't wait until tomorrow, you can replace your
</span><br>
<span class="quotelev2">&gt;&gt; ompi/f77/profile/prototypes_pmpi.h with this file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://svn.open-mpi.org/svn/ompi/branches/v1.0/ompi/mpi/f77/profile/">http://svn.open-mpi.org/svn/ompi/branches/v1.0/ompi/mpi/f77/profile/</a>
</span><br>
<span class="quotelev2">&gt;&gt; prototypes_pmpi.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You should not need to rerun configure; you should be able to compile
</span><br>
<span class="quotelev2">&gt;&gt; from there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry about that!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charles A. Williams
</span><br>
<span class="quotelev1">&gt; Dept. of Earth &amp; Environmental Sciences
</span><br>
<span class="quotelev1">&gt; Science Center, 2C01B
</span><br>
<span class="quotelev1">&gt; Rensselaer Polytechnic Institute
</span><br>
<span class="quotelev1">&gt; Troy, NY  12180
</span><br>
<span class="quotelev1">&gt; Phone:    (518) 276-3369
</span><br>
<span class="quotelev1">&gt; FAX:        (518) 276-2012
</span><br>
<span class="quotelev1">&gt; e-mail:    willic3_at_[hidden]
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
<li><strong>Next message:</strong> <a href="0299.php">Brent LEBACK: "[O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
<li><strong>Previous message:</strong> <a href="0297.php">Charles Williams: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>In reply to:</strong> <a href="0297.php">Charles Williams: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
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
