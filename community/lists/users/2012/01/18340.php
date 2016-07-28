<?
$subject_val = "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 11:20:34 2012" -->
<!-- isoreceived="20120131162034" -->
<!-- sent="Tue, 31 Jan 2012 16:20:29 +0000" -->
<!-- isosent="20120131162029" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..." -->
<!-- id="762096C11C5A044A9D92961C2E1A7CE8475455F3_at_mbox2.FLAS.CSI.CUNY.EDU" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CACd6u-pzFV2d2AHUwiA6A-kUemrrcMeb+Xq+nGBV2=Syo=BLkw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...<br>
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 11:20:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18341.php">Dave Love: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Previous message:</strong> <a href="18339.php">adrian sabou: "[OMPI users]  OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>In reply to:</strong> <a href="18327.php">G&#246;tz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18352.php">Götz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18352.php">Götz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gotz,
<br>
<p>Sorry, I was in a rush and missed that.
<br>
<p>Here is some further information the compiler options used by me
<br>
for the 1.5.5 build:
<br>
<p>&nbsp;[richard.walsh_at_bob linux]$ pwd
<br>
/share/apps/openmpi-intel/1.5.5/build/opal/mca/memory/linux
<br>
<p>[richard.walsh_at_bob linux]$ make -n malloc.o
<br>
echo &quot;  CC    &quot; malloc.o;depbase=`echo malloc.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;icc -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/hwloc/hwloc122ompi/hwloc/include/private/autogen -I../../../../opal/mca/hwloc/hwloc122ompi/hwloc/include/hwloc/autogen  -DMALLOC_DEBUG=0 -D_GNU_SOURCE=1 -DUSE_TSD_DATA_HACK=1 -DMALLOC_HOOKS=1 -I./sysdeps/pthread  -I./sysdeps/generic -I../../../..   -I/share/apps/openmpi-intel/1.5.5/build/opal/mca/hwloc/hwloc122ompi/hwloc/include   -I/usr/include/infiniband -I/usr/include/infiniband   -DNDEBUG -g -O2 -finline-functions -fno-strict-aliasing -restrict -pthread -I/share/apps/openmpi-intel/1.5.5/build/opal/mca/hwloc/hwloc122ompi/hwloc/include -MT malloc.o -MD -MP -MF $depbase.Tpo -c -o malloc.o malloc.c &amp;&amp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv -f $depbase.Tpo $depbase.Po
<br>
<p>The entry point your code crashed in:
<br>
<p>opal_memory_ptmalloc2_int_malloc
<br>
<p>is renamed to:
<br>
<p>rename.h:#define _int_malloc opal_memory_ptmalloc2_int_malloc
<br>
<p>in the malloc.c routine in 1.5.5.  Perhaps you should lower the optimization
<br>
level to zero and see what you get.
<br>
<p>Sincerely,
<br>
<p>rbw
<br>
<p>Richard Walsh
<br>
Parallel Applications and Systems Manager
<br>
CUNY HPC Center, Staten Island, NY
<br>
W: 718-982-3319
<br>
M: 612-382-4620
<br>
<p>Miracles are delivered to order by great intelligence, or when it is
<br>
absent, through the passage of time and a series of mere chance
<br>
events. -- Max Headroom
<br>
<p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of G&#246;tz Waschk [goetz.waschk_at_[hidden]]
<br>
Sent: Tuesday, January 31, 2012 3:38 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...
<br>
<p>On Mon, Jan 30, 2012 at 5:11 PM, Richard Walsh
<br>
&lt;Richard.Walsh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have not seen this mpirun error with the OpenMPI version I have built
</span><br>
<span class="quotelev1">&gt; with Intel 12.1 and the mpicc fix:
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc1.tar.bz2
</span><br>
<p>Hi,
<br>
<p>I haven't tried that version yet. I was trying to build a
<br>
supplementary package to the openmpi 1.5.3 shipped with RHEL6.2, the
<br>
same source, just built using the Intel compiler.
<br>
<p><span class="quotelev1">&gt; and from the looks of things, I wonder if your problem is related.  The
</span><br>
<span class="quotelev1">&gt; solution in the original case was to conditionally dial-down optimization
</span><br>
<span class="quotelev1">&gt; when using the 12.1 compiler to prevent the compiler itself from crashing
</span><br>
<span class="quotelev1">&gt; during a compile.  What you present is a failure during execution.  Such
</span><br>
<span class="quotelev1">&gt; failures might be due to over zealous optimization, but there seems to be
</span><br>
<span class="quotelev1">&gt; little reason on the face of it to believe that there is a connection between
</span><br>
<span class="quotelev1">&gt; the former and the latter.
</span><br>
<p>Well, the similarity is that it is also a crash in the malloc routine.
<br>
I don't know if my optflags are too high, I have derived them from Red
<br>
Hat's, replacing the options unkown to icc:
<br>
-O2 -g -pipe -Wall -fexceptions -fstack-protector
<br>
--param=ssp-buffer-size=4 -m64 -mtune=pentium4
<br>
<p><span class="quotelev1">&gt; Does this failure occur with all attempts to use 'mpirun' whatever the source?
</span><br>
<span class="quotelev1">&gt; My 'mpicc' problem did.  If this is true and If you believe it is an optimization
</span><br>
<span class="quotelev1">&gt; level issue you could try turning it off in the failing routine and see if that
</span><br>
<span class="quotelev1">&gt; produces a remedy.  I would also try things with the very latest release.
</span><br>
<p>Yes, the mpicc crash happened every time, I could reproduce that.
<br>
<p>I have only tested the most basic code, the cpi.c example. The funny
<br>
thing is, that mpirun -np 8 cpi doesn't always crash, sometimes it
<br>
finishes just fine.
<br>
<p>Regards, G&#246;tz Waschk
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>________________________________
<br>
<p>Change is in the Air - Smoking in Designated Areas Only in effect.&lt;<a href="http://www.csi.cuny.edu/tobaccofree">http://www.csi.cuny.edu/tobaccofree</a>&gt;
<br>
Tobacco-Free Campus as of July 1, 2012.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18341.php">Dave Love: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Previous message:</strong> <a href="18339.php">adrian sabou: "[OMPI users]  OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>In reply to:</strong> <a href="18327.php">G&#246;tz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18352.php">Götz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18352.php">Götz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
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
