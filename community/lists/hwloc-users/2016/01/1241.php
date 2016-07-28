<?
$subject_val = "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 04:14:00 2016" -->
<!-- isoreceived="20160107091400" -->
<!-- sent="Thu, 7 Jan 2016 10:13:56 +0100" -->
<!-- isosent="20160107091356" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED" -->
<!-- id="568E2C54.4070307_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="568E1BC2.3050206_at_ipp.mpg.de" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-07 04:13:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1242.php">David Winslow: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error after upgrading from Centos 6.5 to Centos 7 on Supermicro with AMD Opteron 6344"</a>
<li><strong>Previous message:</strong> <a href="1240.php">Matthias Reich: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<li><strong>In reply to:</strong> <a href="1240.php">Matthias Reich: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, I copied useful information from this thread and some links to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/hwloc/issues/143">https://github.com/open-mpi/hwloc/issues/143</a>
<br>
<p>However, not sure I'll have time to look at this in the near future :/
<br>
<p>Brice
<br>
<p><p><p><p>Le 07/01/2016 09:03, Matthias Reich a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To check whether kstat is able to report the psrset definitions, I
</span><br>
<span class="quotelev1">&gt; defined a set consisting of 2 CPUs (psrset -c 1-2) CPU1 and CPU2. The
</span><br>
<span class="quotelev1">&gt; remaining CPUs (CPU0, CPU2..CPU23) were left undefined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the machine, we can execute the &quot;kstat&quot; command and receive (among
</span><br>
<span class="quotelev1">&gt; 1000s of lines) the following info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module: unix                            instance: 0
</span><br>
<span class="quotelev1">&gt; name:   pset                            class:    misc
</span><br>
<span class="quotelev1">&gt;         avenrun_15min                   70
</span><br>
<span class="quotelev1">&gt;         avenrun_1min                    53
</span><br>
<span class="quotelev1">&gt;         avenrun_5min                    47
</span><br>
<span class="quotelev1">&gt;         crtime                          0
</span><br>
<span class="quotelev1">&gt;         ncpus                           22
</span><br>
<span class="quotelev1">&gt;         runnable                        1146912
</span><br>
<span class="quotelev1">&gt;         snaptime                        80083.491239257
</span><br>
<span class="quotelev1">&gt;         updates                         790784
</span><br>
<span class="quotelev1">&gt;         waiting                         0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module: unix                            instance: 1
</span><br>
<span class="quotelev1">&gt; name:   pset                            class:    misc
</span><br>
<span class="quotelev1">&gt;         avenrun_15min                   0
</span><br>
<span class="quotelev1">&gt;         avenrun_1min                    0
</span><br>
<span class="quotelev1">&gt;         avenrun_5min                    0
</span><br>
<span class="quotelev1">&gt;         crtime                          79983.070416351
</span><br>
<span class="quotelev1">&gt;         ncpus                           2
</span><br>
<span class="quotelev1">&gt;         runnable                        0
</span><br>
<span class="quotelev1">&gt;         snaptime                        80083.595839172
</span><br>
<span class="quotelev1">&gt;         updates                         1005
</span><br>
<span class="quotelev1">&gt;         waiting                         0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is not very comprehensive and doesn't even tell, which CPUs are
</span><br>
<span class="quotelev1">&gt; part of the particular set, but could probably be used to at least warn
</span><br>
<span class="quotelev1">&gt; about the existence of a CPU set and prevent the (not very intuitive)
</span><br>
<span class="quotelev1">&gt; error message and consequent abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, doing the same on the machine without the pset defined, we get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module: unix                            instance: 0
</span><br>
<span class="quotelev1">&gt; name:   pset                            class:    misc
</span><br>
<span class="quotelev1">&gt;         avenrun_15min                   50
</span><br>
<span class="quotelev1">&gt;         avenrun_1min                    38
</span><br>
<span class="quotelev1">&gt;         avenrun_5min                    41
</span><br>
<span class="quotelev1">&gt;         crtime                          0
</span><br>
<span class="quotelev1">&gt;         ncpus                           24
</span><br>
<span class="quotelev1">&gt;         runnable                        1163866
</span><br>
<span class="quotelev1">&gt;         snaptime                        81105.346688035
</span><br>
<span class="quotelev1">&gt;         updates                         801003
</span><br>
<span class="quotelev1">&gt;         waiting                         0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so the (only) processor set encompasses all 24 (virtual) cores. This
</span><br>
<span class="quotelev1">&gt; may be the key to check for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The C-API to check for processor set(s) is available through the
</span><br>
<span class="quotelev1">&gt; libpool library, which allows more resource pool configuration than
</span><br>
<span class="quotelev1">&gt; just processor sets, but can probably act as an abstraction layer for
</span><br>
<span class="quotelev1">&gt; different Solaris flavors...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hello
</span><br>
<span class="quotelev2">&gt;&gt; So processor sets are not taken into account when Solaris reports
</span><br>
<span class="quotelev2">&gt;&gt; topology information in kstat etc.
</span><br>
<span class="quotelev2">&gt;&gt; Do you know if hwloc can query processor sets from the C interface?
</span><br>
<span class="quotelev2">&gt;&gt; If so, we could apply the processor set mask to hwloc object cpusets
</span><br>
<span class="quotelev2">&gt;&gt; during discovery to avoid your error.
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 05/01/2016 10:18, Karl Behler a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There was a processor set defined (command psrset) on this machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Having removed the psrset hwloc-info produces a result without error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-info -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; depth 0:        1 Machine (type #1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  depth 1:       2 NUMANode (type #2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   depth 2:      2 Package (type #3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    depth 3:     12 Core (type #5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     depth 4:    24 PU (type #6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems the concept of defining a psrset is in contradiction to what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc and/or openmpi expects/allows.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 04.01.16 18:16, Karl Behler wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We used to run our MPI application with the SUNWhpc implementation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from Sun/Oracle. (This was derived from openmpi 1.5.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, the Oracle HPC implementation fails for the new Solaris 11.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; platform.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So we downloaded and made openmpi 1.10.1 on this platform from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scratch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All seems fine and a simple test application runs fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, with the real application we are running into a hwloc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So we also downloaded and made the hwloc package 1.11.2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now examining hardware locality we get the following error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-info -v --whole-io
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ****************************************************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * hwloc 1.11.2 has encountered what looks like an error from the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; operating system.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Core (P#0 cpuset 0x00001001) intersects with NUMANode (P#1 cpuset
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x0003c001) without inclusion!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Error occurred in topology.c line 1046
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * The following FAQ entry in the hwloc documentation may help:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *   What should I do when hwloc reports &quot;operating system&quot; warnings?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Otherwise please report this error message to the hwloc user's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mailing list,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * along with any relevant topology information from your platform.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ****************************************************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; depth 0:        1 Machine (type #1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  depth 1:       2 Package (type #3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   depth 2:      2 NUMANode (type #2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    depth 3:     1 Core (type #5)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     depth 4:    24 PU (type #6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since I could not find the mentioned FAQ topic I'm asking the list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for advice.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Our system is an Oracle/ Solaris 11.3 (latest patch level) on an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Intel hardware platform from Sun.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output of uname -a -&gt; SunOS sxaug28 5.11 11.3 i86pc i386 i86pc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output of psrinfo -v -&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Status of virtual processor 0 as of: 01/04/2016 17:10:17
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   on-line since 01/04/2016 14:44:28.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   The i386 processor operates at 1600 MHz,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         and has an i387 compatible floating point processor.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Status of virtual processor 1 as of: 01/04/2016 17:10:17
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   on-line since 01/04/2016 14:45:10.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   The i386 processor operates at 1600 MHz,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         and has an i387 compatible floating point processor.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; . (similar lines removed)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Status of virtual processor 23 as of: 01/04/2016 17:10:17
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   on-line since 01/04/2016 14:45:11.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   The i386 processor operates at 1600 MHz,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         and has an i387 compatible floating point processor.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Following comes the script which was used to make hwloc: (used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiler: Sunstudio 12.4, see config.log as bz2 attachment)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv CFLAGS &quot;-m64 -xtarget=generic -xarch=sse2 -xprefetch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -xprefetch_level=2 -xvector=simd -xdepend=yes -xbuiltin=%all -xO5&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv CXXFLAGS &quot;$CFLAGS&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv FCFLAGS &quot;-m64 -xtarget=generic -xarch=sse2 -xprefetch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -xprefetch_level=2 -xvector=simd -stackvar -xO5&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv FFLAGS &quot;$FCFLAGS&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; setenv PREFIX /usr/openmpi/hwloc-1.11.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=$PREFIX --disable-debug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dmake -j 12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # as root: make install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #        : cp -p config.status $PREFIX/config.status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any advice much appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Karl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Searchable archives:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1236.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1236.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr. Karl Behler   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CODAC &amp; IT services ASDEX Upgrade
</span><br>
<span class="quotelev3">&gt;&gt;&gt; phon +49 89 3299-1351 fax 3299-961351
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1236.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1236.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1240.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1240.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1242.php">David Winslow: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error after upgrading from Centos 6.5 to Centos 7 on Supermicro with AMD Opteron 6344"</a>
<li><strong>Previous message:</strong> <a href="1240.php">Matthias Reich: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<li><strong>In reply to:</strong> <a href="1240.php">Matthias Reich: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
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
