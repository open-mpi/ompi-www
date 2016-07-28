<?
$subject_val = "Re: [OMPI users] PG compilers and OpenMPI 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 23 18:49:05 2012" -->
<!-- isoreceived="20120823224905" -->
<!-- sent="Thu, 23 Aug 2012 16:48:43 -0600" -->
<!-- isosent="20120823224843" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PG compilers and OpenMPI 1.6.1" -->
<!-- id="5036B34B.9050606_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3CC44AFF-5549-49D9-9133-3CD6764417D0_at_cisco.com" -->
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
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-23 18:48:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19994.php">Jim Kusznir: "[OMPI users] My MPI build is broke, don't know why/how"</a>
<li><strong>Previous message:</strong> <a href="19992.php">Jeff Squyres: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="19992.php">Jeff Squyres: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19996.php">Jeff Squyres (jsquyres): "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Reply:</strong> <a href="19996.php">Jeff Squyres (jsquyres): "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay.  Sounds good.  I'll watch that bug.
<br>
<p>For my own sanity check, &quot;vt&quot; means VampirTrace stuff, right?  In our
<br>
environment, I don't think it'll be a problem to disable VampirTrace
<br>
temporarily.  More people here use the Intel and GNU compiled versions
<br>
anyway, both of which compile just fine with 1.6.1.
<br>
<p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 08/23/2012 04:43 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; This was reported earlier today:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/3251">https://svn.open-mpi.org/trac/ompi/ticket/3251</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've alerted the VT guys to have a look.  For a workaround, you can --disable-vt.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 23, 2012, at 6:00 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just looking at your output, it looks like there is a missing header that PGI requires - I have no idea what that might be. You might do a search for omp_lock_t to see where it is defined and add that head to the vt_wrapper.cc file and see if that fixes the problem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 23, 2012, at 2:44 PM, Lloyd Brown &lt;lloyd_brown_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone been able to get OpenMPI 1.6.1 to compile with a recent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Portland Group compiler set?  I'm currently trying on RHEL 6.2 with PG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers v12.5 (2012), and I keep getting errors like the ones below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It could easily be a problem with the compiler code, but since this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't happen with OpenMPI 1.6, I'm not sure.  Can anyone provide any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; insight on what might have changed with respect to that file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ('ompi/contrib/vt/vt/tools/vtwrapper/vt_wrapper.cc') between 1.6 and 1.6.1?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lloyd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error Messages:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_rocks6staging vtwrapper]# pwd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /tmp/openmpi-1.6.1/ompi/contrib/vt/vt/tools/vtwrapper
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_rocks6staging vtwrapper]# make V=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; source='vt_wrapper.cc' object='vtwrapper-vt_wrapper.o' libtool=no \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       DEPDIR=.deps depmode=none /bin/sh ../../config/depcomp \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       pgcpp -DHAVE_CONFIG_H -I. -I../.. -I../../include -I../../include -I../../util -I../../util  -DINSIDE_OPENMPI  -D_REENTRANT -I/tmp/openmpi-1.6.1/opal/mca/hwloc/hwloc132/hwloc/include   -I/usr/include/infiniband -I/usr/include/infiniband  -DHAVE_FC -DHAVE_MPI -DHAVE_FMPI -DHAVE_THREADS -DHAVE_OMP -fast -c -o vtwrapper-vt_wrapper.o `test -f 'vt_wrapper.cc' || echo './'`vt_wrapper.cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 356: error: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         identifier &quot;omp_lock_t&quot; is undefined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   omp_lock_t _M_lock;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 359: error: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         identifier &quot;omp_init_lock&quot; is undefined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     omp_init_lock(&amp;_M_lock);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 364: error: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         identifier &quot;omp_destroy_lock&quot; is undefined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    omp_destroy_lock(&amp;_M_lock);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 369: error: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         identifier &quot;omp_set_lock&quot; is undefined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    omp_set_lock(&amp;_M_lock);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 375: error: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         identifier &quot;omp_set_lock&quot; is undefined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    omp_set_lock(&amp;_M_lock);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;/opt/pgi/linux86-64/12.5/include/CC/stl/_threads.h&quot;, line 380: error: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         identifier &quot;omp_unset_lock&quot; is undefined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; omp_unset_lock(&amp;_M_lock);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6 errors detected in the compilation of &quot;vt_wrapper.cc&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [vtwrapper-vt_wrapper.o] Error 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_rocks6staging vtwrapper]# 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lloyd Brown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Systems Administrator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fulton Supercomputing Lab
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brigham Young University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19994.php">Jim Kusznir: "[OMPI users] My MPI build is broke, don't know why/how"</a>
<li><strong>Previous message:</strong> <a href="19992.php">Jeff Squyres: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="19992.php">Jeff Squyres: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19996.php">Jeff Squyres (jsquyres): "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Reply:</strong> <a href="19996.php">Jeff Squyres (jsquyres): "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
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
