<?
$subject_val = "Re: [OMPI users] PG compilers and OpenMPI 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 23 18:00:20 2012" -->
<!-- isoreceived="20120823220020" -->
<!-- sent="Thu, 23 Aug 2012 15:00:12 -0700" -->
<!-- isosent="20120823220012" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PG compilers and OpenMPI 1.6.1" -->
<!-- id="566F0F01-8C91-44BE-A625-2006FAD252B0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5036A44D.2090409_at_byu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] PG compilers and OpenMPI 1.6.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-23 18:00:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19989.php">Reuti: "Re: [OMPI users] pax glitch when building on Tsubame 2.0"</a>
<li><strong>Previous message:</strong> <a href="19987.php">Lloyd Brown: "[OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="19987.php">Lloyd Brown: "[OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19992.php">Jeff Squyres: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Reply:</strong> <a href="19992.php">Jeff Squyres: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just looking at your output, it looks like there is a missing header that PGI requires - I have no idea what that might be. You might do a search for omp_lock_t to see where it is defined and add that head to the vt_wrapper.cc file and see if that fixes the problem
<br>
<p>On Aug 23, 2012, at 2:44 PM, Lloyd Brown &lt;lloyd_brown_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone been able to get OpenMPI 1.6.1 to compile with a recent
</span><br>
<span class="quotelev1">&gt; Portland Group compiler set?  I'm currently trying on RHEL 6.2 with PG
</span><br>
<span class="quotelev1">&gt; compilers v12.5 (2012), and I keep getting errors like the ones below.
</span><br>
<span class="quotelev1">&gt; It could easily be a problem with the compiler code, but since this
</span><br>
<span class="quotelev1">&gt; doesn't happen with OpenMPI 1.6, I'm not sure.  Can anyone provide any
</span><br>
<span class="quotelev1">&gt; insight on what might have changed with respect to that file
</span><br>
<span class="quotelev1">&gt; ('ompi/contrib/vt/vt/tools/vtwrapper/vt_wrapper.cc') between 1.6 and 1.6.1?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Lloyd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error Messages:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_rocks6staging vtwrapper]# pwd
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-1.6.1/ompi/contrib/vt/vt/tools/vtwrapper
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_rocks6staging vtwrapper]# make V=1
</span><br>
<span class="quotelev2">&gt;&gt; source='vt_wrapper.cc' object='vtwrapper-vt_wrapper.o' libtool=no \
</span><br>
<span class="quotelev2">&gt;&gt;        DEPDIR=.deps depmode=none /bin/sh ../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt;        pgcpp -DHAVE_CONFIG_H -I. -I../.. -I../../include -I../../include -I../../util -I../../util  -DINSIDE_OPENMPI  -D_REENTRANT -I/tmp/openmpi-1.6.1/opal/mca/hwloc/hwloc132/hwloc/include   -I/usr/include/infiniband -I/usr/include/infiniband  -DHAVE_FC -DHAVE_MPI -DHAVE_FMPI -DHAVE_THREADS -DHAVE_OMP -fast -c -o vtwrapper-vt_wrapper.o `test -f 'vt_wrapper.cc' || echo './'`vt_wrapper.cc
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 356: error: 
</span><br>
<span class="quotelev2">&gt;&gt;          identifier &quot;omp_lock_t&quot; is undefined
</span><br>
<span class="quotelev2">&gt;&gt;    omp_lock_t _M_lock;
</span><br>
<span class="quotelev2">&gt;&gt;    ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 359: error: 
</span><br>
<span class="quotelev2">&gt;&gt;          identifier &quot;omp_init_lock&quot; is undefined
</span><br>
<span class="quotelev2">&gt;&gt;      omp_init_lock(&amp;_M_lock);
</span><br>
<span class="quotelev2">&gt;&gt;      ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 364: error: 
</span><br>
<span class="quotelev2">&gt;&gt;          identifier &quot;omp_destroy_lock&quot; is undefined
</span><br>
<span class="quotelev2">&gt;&gt;     omp_destroy_lock(&amp;_M_lock);
</span><br>
<span class="quotelev2">&gt;&gt;     ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 369: error: 
</span><br>
<span class="quotelev2">&gt;&gt;          identifier &quot;omp_set_lock&quot; is undefined
</span><br>
<span class="quotelev2">&gt;&gt;     omp_set_lock(&amp;_M_lock);
</span><br>
<span class="quotelev2">&gt;&gt;     ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 375: error: 
</span><br>
<span class="quotelev2">&gt;&gt;          identifier &quot;omp_set_lock&quot; is undefined
</span><br>
<span class="quotelev2">&gt;&gt;     omp_set_lock(&amp;_M_lock);
</span><br>
<span class="quotelev2">&gt;&gt;     ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 380: error: 
</span><br>
<span class="quotelev2">&gt;&gt;          identifier &quot;omp_unset_lock&quot; is undefined
</span><br>
<span class="quotelev2">&gt;&gt;  omp_unset_lock(&amp;_M_lock);
</span><br>
<span class="quotelev2">&gt;&gt;  ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 6 errors detected in the compilation of &quot;vt_wrapper.cc&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [vtwrapper-vt_wrapper.o] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_rocks6staging vtwrapper]# 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lloyd Brown
</span><br>
<span class="quotelev1">&gt; Systems Administrator
</span><br>
<span class="quotelev1">&gt; Fulton Supercomputing Lab
</span><br>
<span class="quotelev1">&gt; Brigham Young University
</span><br>
<span class="quotelev1">&gt; <a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
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
<li><strong>Next message:</strong> <a href="19989.php">Reuti: "Re: [OMPI users] pax glitch when building on Tsubame 2.0"</a>
<li><strong>Previous message:</strong> <a href="19987.php">Lloyd Brown: "[OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="19987.php">Lloyd Brown: "[OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19992.php">Jeff Squyres: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Reply:</strong> <a href="19992.php">Jeff Squyres: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
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
