<?
$subject_val = "[OMPI users] PG compilers and OpenMPI 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 23 17:45:00 2012" -->
<!-- isoreceived="20120823214500" -->
<!-- sent="Thu, 23 Aug 2012 15:44:45 -0600" -->
<!-- isosent="20120823214445" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="[OMPI users] PG compilers and OpenMPI 1.6.1" -->
<!-- id="5036A44D.2090409_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] PG compilers and OpenMPI 1.6.1<br>
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-23 17:44:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19988.php">Ralph Castain: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="19986.php">Andreas Sch&#228;fer: "[OMPI users] pax glitch when building on Tsubame 2.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19988.php">Ralph Castain: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Reply:</strong> <a href="19988.php">Ralph Castain: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has anyone been able to get OpenMPI 1.6.1 to compile with a recent
<br>
Portland Group compiler set?  I'm currently trying on RHEL 6.2 with PG
<br>
compilers v12.5 (2012), and I keep getting errors like the ones below.
<br>
It could easily be a problem with the compiler code, but since this
<br>
doesn't happen with OpenMPI 1.6, I'm not sure.  Can anyone provide any
<br>
insight on what might have changed with respect to that file
<br>
('ompi/contrib/vt/vt/tools/vtwrapper/vt_wrapper.cc') between 1.6 and 1.6.1?
<br>
<p>Thanks,
<br>
Lloyd
<br>
<p><p>Error Messages:
<br>
<p><span class="quotelev1">&gt; [root_at_rocks6staging vtwrapper]# pwd
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-1.6.1/ompi/contrib/vt/vt/tools/vtwrapper
</span><br>
<span class="quotelev1">&gt; [root_at_rocks6staging vtwrapper]# make V=1
</span><br>
<span class="quotelev1">&gt; source='vt_wrapper.cc' object='vtwrapper-vt_wrapper.o' libtool=no \
</span><br>
<span class="quotelev1">&gt;         DEPDIR=.deps depmode=none /bin/sh ../../config/depcomp \
</span><br>
<span class="quotelev1">&gt;         pgcpp -DHAVE_CONFIG_H -I. -I../.. -I../../include -I../../include -I../../util -I../../util  -DINSIDE_OPENMPI  -D_REENTRANT -I/tmp/openmpi-1.6.1/opal/mca/hwloc/hwloc132/hwloc/include   -I/usr/include/infiniband -I/usr/include/infiniband  -DHAVE_FC -DHAVE_MPI -DHAVE_FMPI -DHAVE_THREADS -DHAVE_OMP -fast -c -o vtwrapper-vt_wrapper.o `test -f 'vt_wrapper.cc' || echo './'`vt_wrapper.cc
</span><br>
<span class="quotelev1">&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 356: error: 
</span><br>
<span class="quotelev1">&gt;           identifier &quot;omp_lock_t&quot; is undefined
</span><br>
<span class="quotelev1">&gt;     omp_lock_t _M_lock;
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 359: error: 
</span><br>
<span class="quotelev1">&gt;           identifier &quot;omp_init_lock&quot; is undefined
</span><br>
<span class="quotelev1">&gt;       omp_init_lock(&amp;_M_lock);
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 364: error: 
</span><br>
<span class="quotelev1">&gt;           identifier &quot;omp_destroy_lock&quot; is undefined
</span><br>
<span class="quotelev1">&gt;      omp_destroy_lock(&amp;_M_lock);
</span><br>
<span class="quotelev1">&gt;      ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 369: error: 
</span><br>
<span class="quotelev1">&gt;           identifier &quot;omp_set_lock&quot; is undefined
</span><br>
<span class="quotelev1">&gt;      omp_set_lock(&amp;_M_lock);
</span><br>
<span class="quotelev1">&gt;      ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 375: error: 
</span><br>
<span class="quotelev1">&gt;           identifier &quot;omp_set_lock&quot; is undefined
</span><br>
<span class="quotelev1">&gt;      omp_set_lock(&amp;_M_lock);
</span><br>
<span class="quotelev1">&gt;      ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 380: error: 
</span><br>
<span class="quotelev1">&gt;           identifier &quot;omp_unset_lock&quot; is undefined
</span><br>
<span class="quotelev1">&gt;   omp_unset_lock(&amp;_M_lock);
</span><br>
<span class="quotelev1">&gt;   ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6 errors detected in the compilation of &quot;vt_wrapper.cc&quot;.
</span><br>
<span class="quotelev1">&gt; make: *** [vtwrapper-vt_wrapper.o] Error 2
</span><br>
<span class="quotelev1">&gt; [root_at_rocks6staging vtwrapper]# 
</span><br>
<p><p><p><pre>
-- 
Lloyd Brown
Systems Administrator
Fulton Supercomputing Lab
Brigham Young University
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19988.php">Ralph Castain: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="19986.php">Andreas Sch&#228;fer: "[OMPI users] pax glitch when building on Tsubame 2.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19988.php">Ralph Castain: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Reply:</strong> <a href="19988.php">Ralph Castain: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
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
