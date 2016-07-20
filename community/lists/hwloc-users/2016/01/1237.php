<?
$subject_val = "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 04:42:43 2016" -->
<!-- isoreceived="20160105094243" -->
<!-- sent="Tue, 5 Jan 2016 10:42:41 +0100" -->
<!-- isosent="20160105094241" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED" -->
<!-- id="568B9011.4010802_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="568B8A73.9010700_at_ipp.mpg.de" -->
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
<strong>Date:</strong> 2016-01-05 04:42:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1238.php">David Winslow: "[hwloc-users] hwloc error after upgrading from Centos 6.5 to Centos 7 on Supermicro with AMD Opteron 6344"</a>
<li><strong>Previous message:</strong> <a href="1236.php">Karl Behler: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<li><strong>In reply to:</strong> <a href="1236.php">Karl Behler: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1240.php">Matthias Reich: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
So processor sets are not taken into account when Solaris reports
<br>
topology information in kstat etc.
<br>
Do you know if hwloc can query processor sets from the C interface?
<br>
If so, we could apply the processor set mask to hwloc object cpusets
<br>
during discovery to avoid your error.
<br>
Brice
<br>
<p><p><p><p>Le 05/01/2016 10:18, Karl Behler a &#233;crit :
<br>
<span class="quotelev1">&gt; There was a processor set defined (command psrset) on this machine.
</span><br>
<span class="quotelev1">&gt; Having removed the psrset hwloc-info produces a result without error
</span><br>
<span class="quotelev1">&gt; messages:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc-info -v
</span><br>
<span class="quotelev1">&gt; depth 0:        1 Machine (type #1)
</span><br>
<span class="quotelev1">&gt;  depth 1:       2 NUMANode (type #2)
</span><br>
<span class="quotelev1">&gt;   depth 2:      2 Package (type #3)
</span><br>
<span class="quotelev1">&gt;    depth 3:     12 Core (type #5)
</span><br>
<span class="quotelev1">&gt;     depth 4:    24 PU (type #6)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems the concept of defining a psrset is in contradiction to what
</span><br>
<span class="quotelev1">&gt; hwloc and/or openmpi expects/allows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04.01.16 18:16, Karl Behler wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We used to run our MPI application with the SUNWhpc implementation
</span><br>
<span class="quotelev2">&gt;&gt; from Sun/Oracle. (This was derived from openmpi 1.5.)
</span><br>
<span class="quotelev2">&gt;&gt; However, the Oracle HPC implementation fails for the new Solaris 11.3
</span><br>
<span class="quotelev2">&gt;&gt; platform.
</span><br>
<span class="quotelev2">&gt;&gt; So we downloaded and made openmpi 1.10.1 on this platform from scratch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All seems fine and a simple test application runs fine.
</span><br>
<span class="quotelev2">&gt;&gt; However, with the real application we are running into a hwloc problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So we also downloaded and made the hwloc package 1.11.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now examining hardware locality we get the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-info -v --whole-io
</span><br>
<span class="quotelev2">&gt;&gt; ****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * hwloc 1.11.2 has encountered what looks like an error from the
</span><br>
<span class="quotelev2">&gt;&gt; operating system.
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * Core (P#0 cpuset 0x00001001) intersects with NUMANode (P#1 cpuset
</span><br>
<span class="quotelev2">&gt;&gt; 0x0003c001) without inclusion!
</span><br>
<span class="quotelev2">&gt;&gt; * Error occurred in topology.c line 1046
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * The following FAQ entry in the hwloc documentation may help:
</span><br>
<span class="quotelev2">&gt;&gt; *   What should I do when hwloc reports &quot;operating system&quot; warnings?
</span><br>
<span class="quotelev2">&gt;&gt; * Otherwise please report this error message to the hwloc user's
</span><br>
<span class="quotelev2">&gt;&gt; mailing list,
</span><br>
<span class="quotelev2">&gt;&gt; * along with any relevant topology information from your platform.
</span><br>
<span class="quotelev2">&gt;&gt; ****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; depth 0:        1 Machine (type #1)
</span><br>
<span class="quotelev2">&gt;&gt;  depth 1:       2 Package (type #3)
</span><br>
<span class="quotelev2">&gt;&gt;   depth 2:      2 NUMANode (type #2)
</span><br>
<span class="quotelev2">&gt;&gt;    depth 3:     1 Core (type #5)
</span><br>
<span class="quotelev2">&gt;&gt;     depth 4:    24 PU (type #6)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since I could not find the mentioned FAQ topic I'm asking the list
</span><br>
<span class="quotelev2">&gt;&gt; for advice.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our system is an Oracle/ Solaris 11.3 (latest patch level) on an
</span><br>
<span class="quotelev2">&gt;&gt; Intel hardware platform from Sun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; output of uname -a -&gt; SunOS sxaug28 5.11 11.3 i86pc i386 i86pc
</span><br>
<span class="quotelev2">&gt;&gt; output of psrinfo -v -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Status of virtual processor 0 as of: 01/04/2016 17:10:17
</span><br>
<span class="quotelev2">&gt;&gt;   on-line since 01/04/2016 14:44:28.
</span><br>
<span class="quotelev2">&gt;&gt;   The i386 processor operates at 1600 MHz,
</span><br>
<span class="quotelev2">&gt;&gt;         and has an i387 compatible floating point processor.
</span><br>
<span class="quotelev2">&gt;&gt; Status of virtual processor 1 as of: 01/04/2016 17:10:17
</span><br>
<span class="quotelev2">&gt;&gt;   on-line since 01/04/2016 14:45:10.
</span><br>
<span class="quotelev2">&gt;&gt;   The i386 processor operates at 1600 MHz,
</span><br>
<span class="quotelev2">&gt;&gt;         and has an i387 compatible floating point processor.
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; . (similar lines removed)
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; Status of virtual processor 23 as of: 01/04/2016 17:10:17
</span><br>
<span class="quotelev2">&gt;&gt;   on-line since 01/04/2016 14:45:11.
</span><br>
<span class="quotelev2">&gt;&gt;   The i386 processor operates at 1600 MHz,
</span><br>
<span class="quotelev2">&gt;&gt;         and has an i387 compatible floating point processor.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Following comes the script which was used to make hwloc: (used
</span><br>
<span class="quotelev2">&gt;&gt; compiler: Sunstudio 12.4, see config.log as bz2 attachment)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; setenv CFLAGS &quot;-m64 -xtarget=generic -xarch=sse2 -xprefetch
</span><br>
<span class="quotelev2">&gt;&gt; -xprefetch_level=2 -xvector=simd -xdepend=yes -xbuiltin=%all -xO5&quot;
</span><br>
<span class="quotelev2">&gt;&gt; setenv CXXFLAGS &quot;$CFLAGS&quot;
</span><br>
<span class="quotelev2">&gt;&gt; setenv FCFLAGS &quot;-m64 -xtarget=generic -xarch=sse2 -xprefetch
</span><br>
<span class="quotelev2">&gt;&gt; -xprefetch_level=2 -xvector=simd -stackvar -xO5&quot;
</span><br>
<span class="quotelev2">&gt;&gt; setenv FFLAGS &quot;$FCFLAGS&quot;
</span><br>
<span class="quotelev2">&gt;&gt; setenv PREFIX /usr/openmpi/hwloc-1.11.2
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=$PREFIX --disable-debug
</span><br>
<span class="quotelev2">&gt;&gt; dmake -j 12
</span><br>
<span class="quotelev2">&gt;&gt; # as root: make install
</span><br>
<span class="quotelev2">&gt;&gt; #        : cp -p config.status $PREFIX/config.status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any advice much appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Karl
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
<span class="quotelev2">&gt;&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1236.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1236.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dr. Karl Behler	
</span><br>
<span class="quotelev1">&gt; CODAC &amp; IT services ASDEX Upgrade
</span><br>
<span class="quotelev1">&gt; phon +49 89 3299-1351 fax 3299-961351
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1236.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/01/1236.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1237/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1238.php">David Winslow: "[hwloc-users] hwloc error after upgrading from Centos 6.5 to Centos 7 on Supermicro with AMD Opteron 6344"</a>
<li><strong>Previous message:</strong> <a href="1236.php">Karl Behler: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<li><strong>In reply to:</strong> <a href="1236.php">Karl Behler: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1240.php">Matthias Reich: "Re: [hwloc-users] error from the operating system - Solaris 11.3 - SOLVED"</a>
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
