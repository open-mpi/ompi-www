<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 17:03:48 2007" -->
<!-- isoreceived="20070723210348" -->
<!-- sent="Mon, 23 Jul 2007 17:03:23 -0400" -->
<!-- isosent="20070723210323" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OMPI with dated tools &amp;amp; libs" -->
<!-- id="3148DAEE-BE4E-48BF-918A-D5289C43BBD5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46A514DE.7050002_at_uark.edu" -->
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
<strong>Date:</strong> 2007-07-23 17:03:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3749.php">Bert Wesarg: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>Previous message:</strong> <a href="3747.php">Jeff Pummill: "Re: [OMPI users] Building OMPI with dated tools &amp; libs"</a>
<li><strong>In reply to:</strong> <a href="3747.php">Jeff Pummill: "Re: [OMPI users] Building OMPI with dated tools &amp; libs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It *should* work.  We stopped developing for the Cisco (mVAPI) stack  
<br>
a while ago, but as far as we know, it still works fine.  See:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#vapi-support">http://www.open-mpi.org/faq/?category=openfabrics#vapi-support</a>
<br>
<p>That being said, your approach of &quot;it ain't broke, don't fix it&quot; is  
<br>
certainly quite reasonable.
<br>
<p><p>On Jul 23, 2007, at 4:51 PM, Jeff Pummill wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...compilation SEEMED to go OK with the following .configure...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/nfsutil/openmpi-1.2.3 --with-mvapi=/usr/local/ 
</span><br>
<span class="quotelev1">&gt; topspin/ CC=icc CXX=icpc F77=ifort FC=ifort CFLAGS=-m64 CXXFLAGS=- 
</span><br>
<span class="quotelev1">&gt; m64 FFLAGS=-m64 FCFLAGS=-m64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the following looks promising...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./ompi_info | grep mvapi
</span><br>
<span class="quotelev1">&gt; MCA btl: mvapi (MCA v1.0, API v1.0.1, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a post-doc that will test some application code in the next  
</span><br>
<span class="quotelev1">&gt; day or so. Maybe the old stuff worked just fine!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff F. Pummill
</span><br>
<span class="quotelev1">&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev1">&gt; University of Arkansas
</span><br>
<span class="quotelev1">&gt; Fayetteville, Arkansas 72701
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Pummill wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Good morning all, I have been very impressed so far with OpenMPI  
</span><br>
<span class="quotelev2">&gt;&gt; on one of our smaller clusters running Gnu compilers and Gig-E  
</span><br>
<span class="quotelev2">&gt;&gt; interconnects, so I am  considering a build on our large cluster.  
</span><br>
<span class="quotelev2">&gt;&gt; The potential problem is that the compilers are Intel 8.1 versions  
</span><br>
<span class="quotelev2">&gt;&gt; and the Infiniband is supported by three year old Topspin (now  
</span><br>
<span class="quotelev2">&gt;&gt; Cisco) drivers and libraries. Basically, this is a cluster that  
</span><br>
<span class="quotelev2">&gt;&gt; runs a very heavy workload using MVAPICH, thus we have adopted the  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;if it ain't broke, don't fix it&quot; methodology...thus all of the  
</span><br>
<span class="quotelev2">&gt;&gt; drivers, libraries, and compilers are approximately 3 years old.  
</span><br>
<span class="quotelev2">&gt;&gt; Would it be reasonable to expect OpenMPI 1.2.3 to build and run in  
</span><br>
<span class="quotelev2">&gt;&gt; such an environment?  Thanks! Jeff Pummill University of Arkansas  
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ users mailing list  
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3749.php">Bert Wesarg: "Re: [OMPI users] MPI_HOME"</a>
<li><strong>Previous message:</strong> <a href="3747.php">Jeff Pummill: "Re: [OMPI users] Building OMPI with dated tools &amp; libs"</a>
<li><strong>In reply to:</strong> <a href="3747.php">Jeff Pummill: "Re: [OMPI users] Building OMPI with dated tools &amp; libs"</a>
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
