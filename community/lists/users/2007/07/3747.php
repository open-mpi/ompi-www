<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 16:51:46 2007" -->
<!-- isoreceived="20070723205146" -->
<!-- sent="Mon, 23 Jul 2007 15:51:42 -0500" -->
<!-- isosent="20070723205142" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OMPI with dated tools &amp;amp; libs" -->
<!-- id="46A514DE.7050002_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46A4BBEA.4070408_at_uark.edu" -->
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
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 16:51:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3748.php">Jeff Squyres: "Re: [OMPI users] Building OMPI with dated tools &amp; libs"</a>
<li><strong>Previous message:</strong> <a href="3746.php">Jeff Squyres: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>In reply to:</strong> <a href="3738.php">Jeff Pummill: "[OMPI users] Building OMPI with dated tools &amp; libs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3748.php">Jeff Squyres: "Re: [OMPI users] Building OMPI with dated tools &amp; libs"</a>
<li><strong>Reply:</strong> <a href="3748.php">Jeff Squyres: "Re: [OMPI users] Building OMPI with dated tools &amp; libs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...compilation SEEMED to go OK with the following .configure...
<br>
<p>./configure --prefix=/nfsutil/openmpi-1.2.3 
<br>
--with-mvapi=/usr/local/topspin/ CC=icc CXX=icpc F77=ifort FC=ifort 
<br>
CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64
<br>
<p>And the following looks promising...
<br>
<p>./ompi_info | grep mvapi
<br>
MCA btl: mvapi (MCA v1.0, API v1.0.1, Component v1.2.3)
<br>
<p>I have a post-doc that will test some application code in the next day 
<br>
or so. Maybe the old stuff worked just fine!
<br>
<p><p>Jeff F. Pummill
<br>
Senior Linux Cluster Administrator
<br>
University of Arkansas
<br>
Fayetteville, Arkansas 72701
<br>
<p><p><p>Jeff Pummill wrote:
<br>
<span class="quotelev1">&gt; Good morning all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been very impressed so far with OpenMPI on one of our smaller 
</span><br>
<span class="quotelev1">&gt; clusters running Gnu compilers and Gig-E interconnects, so I am 
</span><br>
<span class="quotelev1">&gt; considering a build on our large cluster. The potential problem is that 
</span><br>
<span class="quotelev1">&gt; the compilers are Intel 8.1 versions and the Infiniband is supported by 
</span><br>
<span class="quotelev1">&gt; three year old Topspin (now Cisco) drivers and libraries. Basically, 
</span><br>
<span class="quotelev1">&gt; this is a cluster that runs a very heavy workload using MVAPICH, thus we 
</span><br>
<span class="quotelev1">&gt; have adopted the &quot;if it ain't broke, don't fix it&quot; methodology...thus 
</span><br>
<span class="quotelev1">&gt; all of the drivers, libraries, and compilers are approximately 3 years old.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would it be reasonable to expect OpenMPI 1.2.3 to build and run in such 
</span><br>
<span class="quotelev1">&gt; an environment?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Pummill
</span><br>
<span class="quotelev1">&gt; University of Arkansas
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3747/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3748.php">Jeff Squyres: "Re: [OMPI users] Building OMPI with dated tools &amp; libs"</a>
<li><strong>Previous message:</strong> <a href="3746.php">Jeff Squyres: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>In reply to:</strong> <a href="3738.php">Jeff Pummill: "[OMPI users] Building OMPI with dated tools &amp; libs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3748.php">Jeff Squyres: "Re: [OMPI users] Building OMPI with dated tools &amp; libs"</a>
<li><strong>Reply:</strong> <a href="3748.php">Jeff Squyres: "Re: [OMPI users] Building OMPI with dated tools &amp; libs"</a>
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
