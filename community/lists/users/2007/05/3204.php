<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  7 15:21:40 2007" -->
<!-- isoreceived="20070507192140" -->
<!-- sent="Mon, 7 May 2007 13:21:34 -0600" -->
<!-- isosent="20070507192134" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.2.1 mpicc error" -->
<!-- id="660A948B-7120-43DC-9D42-D9A24E88145B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="463F7A19.7080402_at_hope.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-07 15:21:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3205.php">Luis Kornblueh: "[OMPI users] SIGSEGV in mpiexec"</a>
<li><strong>Previous message:</strong> <a href="3203.php">Paul Van Allsburg: "[OMPI users] openmpi-1.2.1 mpicc error"</a>
<li><strong>In reply to:</strong> <a href="3203.php">Paul Van Allsburg: "[OMPI users] openmpi-1.2.1 mpicc error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was a regression in Open MPI 1.2.1.  We improperly handle the  
<br>
situation where CC has a path in it.  We will have this fixed in Open  
<br>
MPI 1.2.2.  For now, your options are to use Open MPI 1.2 or specify  
<br>
a $CC without a path, such as CC=icc, and make sure $PATH is set  
<br>
properly.
<br>
<p>Brian
<br>
<p>On May 7, 2007, at 1:12 PM, Paul Van Allsburg wrote:
<br>
<p><span class="quotelev1">&gt; I just completed the install of release 1.2.1 and I get an error
</span><br>
<span class="quotelev1">&gt; attempting to compile with mpicc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The install was done with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; source /opt/intel/fce/9.1.045/bin/ifortvars.sh
</span><br>
<span class="quotelev1">&gt; source /opt/intel/cce/9.1.049/bin/iccvars.sh
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi-1.2.1_intel \
</span><br>
<span class="quotelev1">&gt;             --with-tm=/usr/local   \
</span><br>
<span class="quotelev1">&gt;             --enable-static   \
</span><br>
<span class="quotelev1">&gt;             --disable-shared  \
</span><br>
<span class="quotelev1">&gt;             CC=/opt/intel/cce/9.1.049/bin/icc \
</span><br>
<span class="quotelev1">&gt;             CXX=/opt/intel/cce/9.1.049/bin/icpc \
</span><br>
<span class="quotelev1">&gt;             FC=/opt/intel/fce/9.1.045/bin/ifort
</span><br>
<span class="quotelev1">&gt; make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to compile my hello program with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ source /opt/intel/fce/9.1.045/bin/ifortvars.sh
</span><br>
<span class="quotelev1">&gt; $ source /opt/intel/cce/9.1.049/bin/iccvars.sh
</span><br>
<span class="quotelev1">&gt; $ PATH=&quot;/usr/local/openmpi-1.2.1_intel/bin:$PATH&quot;;export PATH
</span><br>
<span class="quotelev1">&gt; $ mpicc hello.c  -o hello  -g
</span><br>
<span class="quotelev1">&gt; ld: dummy: No such file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed 1.2 exactly the same and it works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions? Thanks!
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul Van Allsburg
</span><br>
<span class="quotelev1">&gt; Computational Science &amp; Modeling Facilitator
</span><br>
<span class="quotelev1">&gt; Natural Sciences Division,  Hope College
</span><br>
<span class="quotelev1">&gt; 35 East 12th Street
</span><br>
<span class="quotelev1">&gt; Holland, Michigan 49423
</span><br>
<span class="quotelev1">&gt; 616-395-7292
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
<li><strong>Next message:</strong> <a href="3205.php">Luis Kornblueh: "[OMPI users] SIGSEGV in mpiexec"</a>
<li><strong>Previous message:</strong> <a href="3203.php">Paul Van Allsburg: "[OMPI users] openmpi-1.2.1 mpicc error"</a>
<li><strong>In reply to:</strong> <a href="3203.php">Paul Van Allsburg: "[OMPI users] openmpi-1.2.1 mpicc error"</a>
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
