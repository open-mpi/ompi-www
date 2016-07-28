<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 10:12:58 2006" -->
<!-- isoreceived="20060602141258" -->
<!-- sent="Fri, 2 Jun 2006 16:13:11 +0200" -->
<!-- isosent="20060602141311" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Wont run with 1.0.2" -->
<!-- id="200606021613.16007.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4475E33D.4060804_at_reachone.com" -->
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
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 10:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1361.php">Michael Kluskens: "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Previous message:</strong> <a href="1359.php">Michael Kluskens: "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1296.php">Tom Rosmond: "Re: [OMPI users] Wont run with 1.0.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 25 May 2006 19:02, Tom Rosmond wrote:
<br>
<span class="quotelev1">&gt; I didn't do a formal uninstall as you demonstate below, but instead went
</span><br>
<span class="quotelev1">&gt; into the 'prefix' directory and renamed 'bin','lib','etc','include', and
</span><br>
<span class="quotelev1">&gt; 'share'
</span><br>
<p>A full uninstall is of course not needed, but it might be cleaner to simply 
<br>
install in a different location and use something like modules to handle 
<br>
setting up the environment in a suitable manner.
<br>
<p>One thing that you can't skip though is recompiling your applications. 
<br>
Something built against openmpi-x.y is not likely to work with openmpi-x.z.
<br>
<p>Sorry if this just restated the obvious,
<br>
&nbsp;Peter
<br>
<p><span class="quotelev1">&gt; before running the 1.0.2 build and install. That way I didn't blow up my
</span><br>
<span class="quotelev1">&gt; 1.0.1 installation, and it was easy to switch back in case the 1.0.2
</span><br>
<span class="quotelev1">&gt; install
</span><br>
<span class="quotelev1">&gt; didn't work. I was sure this procedure was legitimate, but maybe I missed
</span><br>
<span class="quotelev1">&gt; something? As far as I know all executable, library, and include paths
</span><br>
<span class="quotelev1">&gt; are identical between the two, so what else should I change?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; T. Rosmond
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Kluskens wrote:
</span><br>
<span class="quotelev2">&gt; &gt;One possibility is that you didn't properly uninstall version 1.0.1
</span><br>
<span class="quotelev2">&gt; &gt;before installing version 1.0.2 &amp; 1.0.3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;There was a change with some of the libraries a while back that
</span><br>
<span class="quotelev2">&gt; &gt;caused me a similar problem.  An install of later versions of OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt;do not remove certain libraries from 1.0.1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;You absolutely have to:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;cd openmpi1.0.1
</span><br>
<span class="quotelev2">&gt; &gt;sudo make uninstall
</span><br>
<span class="quotelev2">&gt; &gt;cd ../openmpi1.0.2
</span><br>
<span class="quotelev2">&gt; &gt;sudo make install
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I have had no trouble in the past with PGF90 version 6.1-3 and
</span><br>
<span class="quotelev2">&gt; &gt;OpenMPI 1.1a on a dual Operton 1.4 GHz machine running Debian Linux.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Michael
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On May 24, 2006, at 7:43 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;After using OPENMPI Ver 1.0.1 for several months without trouble,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;last week
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I decided to upgrade to Ver 1.0.2.  My primary motivation was
</span><br>
<span class="quotelev3">&gt; &gt;&gt;curiosity,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;to see if
</span><br>
<span class="quotelev3">&gt; &gt;&gt;there was any performance benefit.  To my surprise, several of my F90
</span><br>
<span class="quotelev3">&gt; &gt;&gt;applications
</span><br>
<span class="quotelev3">&gt; &gt;&gt;refused to run with the newer version.  I also tried Ver 1.0.3a1r10036
</span><br>
<span class="quotelev3">&gt; &gt;&gt;with the same
</span><br>
<span class="quotelev3">&gt; &gt;&gt;result.  In all 3 cases I configured the build identically.  Even that
</span><br>
<span class="quotelev3">&gt; &gt;&gt;old chestnut 'hello.f'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;will not run with the newer versions.  I ran it in the totalview
</span><br>
<span class="quotelev3">&gt; &gt;&gt;debugger and can see
</span><br>
<span class="quotelev3">&gt; &gt;&gt;that it is hanging in the MPI initialization code before it gets to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;F90 application.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am using the Ver 6.1 PGF90 64bit compiler on a Linux Opteron
</span><br>
<span class="quotelev3">&gt; &gt;&gt;workstation with 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;dual core 2.4 GHZ processors.  If you think it it is worthwhile to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;pursue this problem
</span><br>
<span class="quotelev3">&gt; &gt;&gt;further, what could I send you to help troubleshoot the problem?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Meanwhile I have
</span><br>
<span class="quotelev3">&gt; &gt;&gt;gone back to 1.0.1, which works fine on everything.
</span><br>
<p><pre>
-- 
------------------------------------------------------------
  Peter Kjellstr&#246;m               |
  National Supercomputer Centre  |
  Sweden                         | <a href="http://www.nsc.liu.se">http://www.nsc.liu.se</a>

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1360/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1361.php">Michael Kluskens: "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Previous message:</strong> <a href="1359.php">Michael Kluskens: "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1296.php">Tom Rosmond: "Re: [OMPI users] Wont run with 1.0.2"</a>
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
