<?
$subject_val = "[OMPI devel] Fwd: Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 11:27:39 2010" -->
<!-- isoreceived="20100901152739" -->
<!-- sent="Wed, 1 Sep 2010 09:27:34 -0600" -->
<!-- isosent="20100901152734" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers" -->
<!-- id="E4DC1EB1-C027-487D-A6A4-CEEBF0052C57_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A0BFD1B1-80DC-4A8A-8043-9C6F27584B66_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers<br>
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 11:27:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8440.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Previous message:</strong> <a href="8438.php">Scott Atchley: "Re: [OMPI devel] 1/4/3rc1 over MX"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8306.php">David Gunter: "[OMPI devel] Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried the same build with the 1.4.3rc1 release and hit the same error.
<br>
<p>-david
<br>
<p><pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
Begin forwarded message:
&gt; From: David Gunter &lt;dog_at_[hidden]&gt;
&gt; Date: August 20, 2010 2:20:40 PM MDT
&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
&gt; Subject: Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers
&gt; 
&gt; I configure using --prefix and --with-platform=/contrib/platform/lanl/tlcc/debug-panasas
&gt; 
&gt; This works for every compiler except Intel. The &quot;make&quot; phase terminates with
&gt; 
&gt; libtool: link: /opt/Intel/cce/10.0.023/bin/icpc -I/opt/panfs/include -shared-intel -g -finline-functions -fexceptions -pthread -fexceptions -o .libs/ompi_info components.o ompi_info.o output.o param.o version.o  ../../../ompi/.libs/libmpi.so -lrdmacm -libverbs /usr/projects/hpctools/dog/openmpi-build/openmpi-1.4.2/orte/.libs/libopen-rte.so /usr/projects/hpctools/dog/openmpi-build/openmpi-1.4.2/opal/.libs/libopen-pal.so -lnuma -ldl -lnsl -lutil -pthread -Wl,-rpath,/usr/projects/packages/openmpi/tlcc/openmpi-1.4.2-intel-debug/lib
&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `__invalid_size_argument_for_IOC'
&gt; make[2]: *** [ompi_info] Error 1
&gt; make[2]: Leaving directory `/usr/projects/hpctools/dog/openmpi-build/openmpi-1.4.2/ompi/tools/ompi_info'
&gt; make[1]: *** [all-recursive] Error 1
&gt; make[1]: Leaving directory `/usr/projects/hpctools/dog/openmpi-build/openmpi-1.4.2/ompi'
&gt; make: *** [all-recursive] Error 1
&gt; 
&gt; The actual problem is in the system include files, namely /usr/include/asm-generic/ioctl.h and is well described here:
&gt; 
&gt; <a href="https://bugzilla.redhat.com/show_bug.cgi?id=473947">https://bugzilla.redhat.com/show_bug.cgi?id=473947</a>
&gt; 
&gt; The &quot;ugly&quot; fix recommended in the write-up works for the simple reproducer code given but has anyone figured out how to apply such a fix to the OMPI code?
&gt; 
&gt; Thanks,
&gt; david
&gt; 
&gt; --
&gt; David Gunter
&gt; HPC-3: Infrastructure Team
&gt; Los Alamos National Laboratory
&gt; 
&gt; 
&gt; 
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8440.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Previous message:</strong> <a href="8438.php">Scott Atchley: "Re: [OMPI devel] 1/4/3rc1 over MX"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8306.php">David Gunter: "[OMPI devel] Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers"</a>
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
