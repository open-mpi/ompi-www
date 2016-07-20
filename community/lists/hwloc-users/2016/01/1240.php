<?
$subject_val = "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 03:03:22 2016" -->
<!-- isoreceived="20160107080322" -->
<!-- sent="Thu, 07 Jan 2016 09:03:14 +0100" -->
<!-- isosent="20160107080314" -->
<!-- name="Matthias Reich" -->
<!-- email="matthias.reich_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED" -->
<!-- id="568E1BC2.3050206_at_ipp.mpg.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="568BB889.9020908_at_ipp.mpg.de" -->
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
<strong>Subject:</strong> Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED<br>
<strong>From:</strong> Matthias Reich (<em>matthias.reich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-07 03:03:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1241.php">Brice Goglin: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<li><strong>Previous message:</strong> <a href="1239.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error after upgrading from Centos 6.5 to Centos 7 on Supermicro with AMD Opteron 6344"</a>
<li><strong>Maybe in reply to:</strong> <a href="1236.php">Karl Behler: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1241.php">Brice Goglin: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<li><strong>Reply:</strong> <a href="1241.php">Brice Goglin: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>To check whether kstat is able to report the psrset definitions, I
<br>
defined a set consisting of 2 CPUs (psrset -c 1-2) CPU1 and CPU2. The
<br>
remaining CPUs (CPU0, CPU2..CPU23) were left undefined.
<br>
<p>On the machine, we can execute the &quot;kstat&quot; command and receive (among
<br>
1000s of lines) the following info:
<br>
<p>module: unix                            instance: 0
<br>
name:   pset                            class:    misc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;avenrun_15min                   70
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;avenrun_1min                    53
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;avenrun_5min                    47
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crtime                          0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ncpus                           22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;runnable                        1146912
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;snaptime                        80083.491239257
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;updates                         790784
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;waiting                         0
<br>
<p><p>module: unix                            instance: 1
<br>
name:   pset                            class:    misc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;avenrun_15min                   0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;avenrun_1min                    0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;avenrun_5min                    0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crtime                          79983.070416351
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ncpus                           2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;runnable                        0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;snaptime                        80083.595839172
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;updates                         1005
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;waiting                         0
<br>
<p>which is not very comprehensive and doesn't even tell, which CPUs are
<br>
part of the particular set, but could probably be used to at least warn
<br>
about the existence of a CPU set and prevent the (not very intuitive)
<br>
error message and consequent abort.
<br>
<p>However, doing the same on the machine without the pset defined, we get:
<br>
<p>module: unix                            instance: 0
<br>
name:   pset                            class:    misc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;avenrun_15min                   50
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;avenrun_1min                    38
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;avenrun_5min                    41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crtime                          0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ncpus                           24
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;runnable                        1163866
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;snaptime                        81105.346688035
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;updates                         801003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;waiting                         0
<br>
<p>so the (only) processor set encompasses all 24 (virtual) cores. This may 
<br>
be the key to check for.
<br>
<p>The C-API to check for processor set(s) is available through the libpool 
<br>
library, which allows more resource pool configuration than just 
<br>
processor sets, but can probably act as an abstraction layer for
<br>
different Solaris flavors...
<br>
<p>Matthias
<br>
<p><span class="quotelev1">&gt;  Hello
</span><br>
<span class="quotelev1">&gt; So processor sets are not taken into account when Solaris reports
</span><br>
<span class="quotelev1">&gt; topology information in kstat etc.
</span><br>
<span class="quotelev1">&gt; Do you know if hwloc can query processor sets from the C interface?
</span><br>
<span class="quotelev1">&gt; If so, we could apply the processor set mask to hwloc object cpusets
</span><br>
<span class="quotelev1">&gt; during discovery to avoid your error.
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 05/01/2016 10:18, Karl Behler a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; There was a processor set defined (command psrset) on this machine.
</span><br>
<span class="quotelev2">&gt;&gt; Having removed the psrset hwloc-info produces a result without error
</span><br>
<span class="quotelev2">&gt;&gt; messages:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-info -v
</span><br>
<span class="quotelev2">&gt;&gt; depth 0:        1 Machine (type #1)
</span><br>
<span class="quotelev2">&gt;&gt;  depth 1:       2 NUMANode (type #2)
</span><br>
<span class="quotelev2">&gt;&gt;   depth 2:      2 Package (type #3)
</span><br>
<span class="quotelev2">&gt;&gt;    depth 3:     12 Core (type #5)
</span><br>
<span class="quotelev2">&gt;&gt;     depth 4:    24 PU (type #6)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems the concept of defining a psrset is in contradiction to what
</span><br>
<span class="quotelev2">&gt;&gt; hwloc and/or openmpi expects/allows.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 04.01.16 18:16, Karl Behler wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We used to run our MPI application with the SUNWhpc implementation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from Sun/Oracle. (This was derived from openmpi 1.5.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, the Oracle HPC implementation fails for the new Solaris 11.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; platform.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So we downloaded and made openmpi 1.10.1 on this platform from scratch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All seems fine and a simple test application runs fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, with the real application we are running into a hwloc problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So we also downloaded and made the hwloc package 1.11.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now examining hardware locality we get the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-info -v --whole-io
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ****************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * hwloc 1.11.2 has encountered what looks like an error from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operating system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Core (P#0 cpuset 0x00001001) intersects with NUMANode (P#1 cpuset
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x0003c001) without inclusion!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Error occurred in topology.c line 1046
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * The following FAQ entry in the hwloc documentation may help:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *   What should I do when hwloc reports &quot;operating system&quot; warnings?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Otherwise please report this error message to the hwloc user's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mailing list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * along with any relevant topology information from your platform.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ****************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; depth 0:        1 Machine (type #1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  depth 1:       2 Package (type #3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   depth 2:      2 NUMANode (type #2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    depth 3:     1 Core (type #5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     depth 4:    24 PU (type #6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since I could not find the mentioned FAQ topic I'm asking the list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for advice.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our system is an Oracle/ Solaris 11.3 (latest patch level) on an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel hardware platform from Sun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output of uname -a -&gt; SunOS sxaug28 5.11 11.3 i86pc i386 i86pc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output of psrinfo -v -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Status of virtual processor 0 as of: 01/04/2016 17:10:17
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   on-line since 01/04/2016 14:44:28.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   The i386 processor operates at 1600 MHz,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         and has an i387 compatible floating point processor.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Status of virtual processor 1 as of: 01/04/2016 17:10:17
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   on-line since 01/04/2016 14:45:10.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   The i386 processor operates at 1600 MHz,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         and has an i387 compatible floating point processor.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; . (similar lines removed)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Status of virtual processor 23 as of: 01/04/2016 17:10:17
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   on-line since 01/04/2016 14:45:11.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   The i386 processor operates at 1600 MHz,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         and has an i387 compatible floating point processor.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Following comes the script which was used to make hwloc: (used
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler: Sunstudio 12.4, see config.log as bz2 attachment)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv CFLAGS &quot;-m64 -xtarget=generic -xarch=sse2 -xprefetch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -xprefetch_level=2 -xvector=simd -xdepend=yes -xbuiltin=%all -xO5&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv CXXFLAGS &quot;$CFLAGS&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv FCFLAGS &quot;-m64 -xtarget=generic -xarch=sse2 -xprefetch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -xprefetch_level=2 -xvector=simd -stackvar -xO5&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv FFLAGS &quot;$FCFLAGS&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv PREFIX /usr/openmpi/hwloc-1.11.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=$PREFIX --disable-debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dmake -j 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # as root: make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #        : cp -p config.status $PREFIX/config.status
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any advice much appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Karl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1236.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1236.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Karl Behler	
</span><br>
<span class="quotelev2">&gt;&gt; CODAC &amp; IT services ASDEX Upgrade
</span><br>
<span class="quotelev2">&gt;&gt; phon +49 89 3299-1351 fax 3299-961351
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1236.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1236.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1241.php">Brice Goglin: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<li><strong>Previous message:</strong> <a href="1239.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error after upgrading from Centos 6.5 to Centos 7 on Supermicro with AMD Opteron 6344"</a>
<li><strong>Maybe in reply to:</strong> <a href="1236.php">Karl Behler: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1241.php">Brice Goglin: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<li><strong>Reply:</strong> <a href="1241.php">Brice Goglin: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
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
