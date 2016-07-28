<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  3 11:31:26 2006" -->
<!-- isoreceived="20061103163126" -->
<!-- sent="Fri, 3 Nov 2006 11:31:15 -0500" -->
<!-- isosent="20061103163115" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] Fwd: [mtt-results] Nightly MPI Install Failures" -->
<!-- id="A6EFE155-8A3C-4360-92C0-551019A11838_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D2466C90-968E-4748-B1C3-92D00F0A3916_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-03 11:31:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0185.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Previous message:</strong> <a href="0183.php">Jeff Squyres: "[MTT users] Fwd: [mtt-results] Nightly MPI Install Failures"</a>
<li><strong>In reply to:</strong> <a href="0183.php">Jeff Squyres: "[MTT users] Fwd: [mtt-results] Nightly MPI Install Failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0186.php">Jeff Squyres: "Re: [MTT users] Fwd: [mtt-results] Nightly MPI Install Failures"</a>
<li><strong>Reply:</strong> <a href="0186.php">Jeff Squyres: "Re: [MTT users] Fwd: [mtt-results] Nightly MPI Install Failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IU/Thor Short Story:
<br>
---------------------
<br>
The IU/thor tests are borked because of the scheduler. Ignore these  
<br>
results for now.
<br>
<p>IU/Thor Longer Story:
<br>
---------------------
<br>
SLURM is setup to kill any job that's 'idle' for more than N min,  
<br>
where N is kinda small. We are compiling, but SLURM is not looking at  
<br>
the compile but the MTT script which is pretty much doing nothing  
<br>
until the compile complete. Thus SLURM thinks that MTT is 'idle' and  
<br>
kills the allocation :(
<br>
<p>We fixed this on Odin, but our sysadmin needs to make the change to  
<br>
Thor. It is one line in a config file, but getting him to do much is  
<br>
like pulling teeth with telepathy somedays :/
<br>
<p>Ignore thor for now. It should be running alonside Odin in the next  
<br>
day or two.
<br>
<p>-- Josh
<br>
<p>On Nov 3, 2006, at 11:23 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I see some failures from LANL and IU/thor that *look* like the tests
</span><br>
<span class="quotelev1">&gt; were aborted before they completed (e.g., &quot;rm -rf&quot; of the scratch dir
</span><br>
<span class="quotelev1">&gt; while MTT was running).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone from both organizations confirm that these are bogus
</span><br>
<span class="quotelev1">&gt; results?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: mtt-results_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Date: November 3, 2006 9:00:12 AM EST
</span><br>
<span class="quotelev2">&gt;&gt; To: mtt-results_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [mtt-results] Nightly MPI Install Failures
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: MPI Test Tool result submissions &lt;mtt-results_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Query Description
</span><br>
<span class="quotelev2">&gt;&gt; Current Time (GMT)2006-11-03 14:00:11
</span><br>
<span class="quotelev2">&gt;&gt; Date Range (GMT)2006-11-02 14:00:11 through 2006-11-03 14:00:11
</span><br>
<span class="quotelev2">&gt;&gt; successfail
</span><br>
<span class="quotelev2">&gt;&gt; CountBy test case *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Summary of MPI Installs that failed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HardwareOsOs verMpiMpi revClusterCompilerCompiler verMPI Install[i]
</span><br>
<span class="quotelev2">&gt;&gt; PassFail
</span><br>
<span class="quotelev2">&gt;&gt; sun4uSunOSSunOS 5.10Open MPI trunk1.3a1r12408Sun 32-bitsun5.701
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; --enable-shared --enable-mpi-f90 --with-mpi-f90-size=trivial
</span><br>
<span class="quotelev2">&gt;&gt; CC=cc CXX=CC FC=f90 F77=f77
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS=-xarch=v8plusa -xO5 -xmemalign=8s
</span><br>
<span class="quotelev2">&gt;&gt; CXXFLAGS=-xarch=v8plusa -xO5 -xmemalign=8s
</span><br>
<span class="quotelev2">&gt;&gt; FFLAGS=-xarch=v8plusa -xO5 -xmemalign=8s
</span><br>
<span class="quotelev2">&gt;&gt; FCFLAGS=-xarch=v8plusa -xO5 -xmemalign=8s -KPIC
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../opal/libltdl -I../../.. -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -c base/io_base_close.c -KPIC -
</span><br>
<span class="quotelev2">&gt;&gt; DPIC -o base/.libs/io_base_close.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../opal/libltdl -I../../.. -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -c base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_component_list.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_component_list.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../opal/libltdl -I../../.. -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -c base/io_base_delete.c -KPIC
</span><br>
<span class="quotelev2">&gt;&gt; -DPIC -o base/.libs/io_base_delete.o
</span><br>
<span class="quotelev2">&gt;&gt; source=base/io_base_find_available.c object=base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_find_available.lo libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; opal/libltdl -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c -o base/io_base_find_available.lo base/io_base_find_available.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/io_base_open.c object=base/io_base_open.lo libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; opal/libltdl -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c -o base/io_base_open.lo base/io_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/io_base_request.c object=base/io_base_request.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; opal/libltdl -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c -o base/io_base_request.lo base/io_base_request.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/io_base_register_datarep.c object=base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_register_datarep.lo libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; opal/libltdl -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c -o base/io_base_register_datarep.lo base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_register_datarep.c
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../opal/libltdl -I../../.. -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -c base/io_base_request.c -
</span><br>
<span class="quotelev2">&gt;&gt; KPIC -DPIC -o base/.libs/io_base_request.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../opal/libltdl -I../../.. -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -c base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_find_available.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_find_available.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../opal/libltdl -I../../.. -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -c base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_register_datarep.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_register_datarep.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../opal/libltdl -I../../.. -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -c base/io_base_open.c -KPIC -
</span><br>
<span class="quotelev2">&gt;&gt; DPIC -o base/.libs/io_base_open.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=link cc -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; libmca_io.la base/io_base_component_list.lo base/io_base_close.lo
</span><br>
<span class="quotelev2">&gt;&gt; base/io_base_delete.lo base/io_base_file_select.lo base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_find_available.lo base/io_base_open.lo base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_request.lo base/io_base_register_datarep.lo -lsocket -lnsl -
</span><br>
<span class="quotelev2">&gt;&gt; lrt -lm -lthread
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ar cru .libs/libmca_io.a base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_component_list.o base/.libs/io_base_close.o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_delete.o base/.libs/io_base_file_select.o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_find_available.o base/.libs/io_base_open.o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_request.o base/.libs/io_base_register_datarep.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ranlib .libs/libmca_io.a
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating libmca_io.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f libmca_io.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; libmca_io.la libmca_io.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/io
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/mpool
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/mpool
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mpool_base_open.c object=base/mpool_base_open.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_open.lo base/mpool_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mpool_base_close.c object=base/mpool_base_close.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_close.lo base/mpool_base_close.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mpool_base_init.c object=base/mpool_base_init.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_init.lo base/mpool_base_init.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mpool_base_lookup.c object=base/mpool_base_lookup.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_lookup.lo base/mpool_base_lookup.c
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mpool_base_open.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_open.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mpool_base_init.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_init.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mpool_base_lookup.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_lookup.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mpool_base_close.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_close.o
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mpool_base_alloc.c object=base/mpool_base_alloc.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_alloc.lo base/mpool_base_alloc.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mpool_base_mem_cb.c object=base/mpool_base_mem_cb.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_mem_cb.lo base/mpool_base_mem_cb.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mpool_base_tree.c object=base/mpool_base_tree.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_tree.lo base/mpool_base_tree.c
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mpool_base_alloc.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_alloc.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mpool_base_mem_cb.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_mem_cb.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mpool_base_tree.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_tree.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=link cc -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; libmca_mpool.la base/mpool_base_open.lo base/mpool_base_close.lo
</span><br>
<span class="quotelev2">&gt;&gt; base/mpool_base_init.lo base/mpool_base_lookup.lo base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_alloc.lo base/mpool_base_mem_cb.lo base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_tree.lo -lsocket -lnsl -lrt -lm -lthread
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ar cru .libs/libmca_mpool.a base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_open.o base/.libs/mpool_base_close.o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_init.o base/.libs/mpool_base_lookup.o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_alloc.o base/.libs/mpool_base_mem_cb.o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_tree.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ranlib .libs/libmca_mpool.a
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating libmca_mpool.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f libmca_mpool.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; libmca_mpool.la libmca_mpool.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/mpool
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/mtl
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/mtl
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mtl_base_component.c object=base/mtl_base_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mtl_base_component.lo base/mtl_base_component.c
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mtl_base_component.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mtl_base_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=link cc -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; libmca_mtl.la base/mtl_base_component.lo -lsocket -lnsl -lrt -lm -
</span><br>
<span class="quotelev2">&gt;&gt; lthread
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ar cru .libs/libmca_mtl.a base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mtl_base_component.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ranlib .libs/libmca_mtl.a
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating libmca_mtl.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f libmca_mtl.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; libmca_mtl.la libmca_mtl.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/mtl
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/osc
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/osc
</span><br>
<span class="quotelev2">&gt;&gt; source=base/osc_base_close.c object=base/osc_base_close.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; osc_base_close.lo base/osc_base_close.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/osc_base_open.c object=base/osc_base_open.lo  
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; osc_base_open.lo base/osc_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/osc_base_init.c object=base/osc_base_init.lo  
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; osc_base_init.lo base/osc_base_init.c
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/osc_base_close.c -KPIC -DPIC -o base/.libs/ 
</span><br>
<span class="quotelev2">&gt;&gt; osc_base_close.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/osc_base_init.c -KPIC -DPIC -o base/.libs/osc_base_init.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/osc_base_open.c -KPIC -DPIC -o base/.libs/osc_base_open.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=link cc -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; libmca_osc.la base/osc_base_close.lo base/osc_base_open.lo base/
</span><br>
<span class="quotelev2">&gt;&gt; osc_base_init.lo -lsocket -lnsl -lrt -lm -lthread
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ar cru .libs/libmca_osc.a base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; osc_base_close.o base/.libs/osc_base_open.o base/.libs/ 
</span><br>
<span class="quotelev2">&gt;&gt; osc_base_init.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ranlib .libs/libmca_osc.a
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating libmca_osc.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f libmca_osc.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; libmca_osc.la libmca_osc.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/osc
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/pml
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/pml
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `all. Stop.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/pml
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:19:51
</span><br>
<span class="quotelev2">&gt;&gt; &quot;,&quot;&quot;,&quot; font-family:Courier,monospace&quot;)&quot; class=&quot;lgray_ln&quot;&gt;[i]
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.11-7.BProcPerfctr_FC3smpOpen MPI
</span><br>
<span class="quotelev2">&gt;&gt; v1.11.1.3a1r12397lanl_flash_64_v1.1pgipgf90_6.1-3_64-
</span><br>
<span class="quotelev2">&gt;&gt; bit_on_x86_linux01
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; CC=/usr/bin/gcc CXX=/usr/bin/g++ F77=/opt/PGI/pgi_6.1-3/
</span><br>
<span class="quotelev2">&gt;&gt; linux86-64/6.1/bin/pgf90 F90=/opt/PGI/pgi_6.1-3/linux86-64/6.1/bin/
</span><br>
<span class="quotelev2">&gt;&gt; pgf90 FC=/opt/PGI/pgi_6.1-3/linux86-64/6.1/bin/pgf90 --enable-picky
</span><br>
<span class="quotelev2">&gt;&gt; --enable-debug --with-io-romio-flags=--with-file-
</span><br>
<span class="quotelev2">&gt;&gt; system=ufs,nfs,panfs --prefix=/usr/projects/openmpi/opt/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.2rc1-x86_64-pgf90_6.1-3_64-bit_on_Linux --with-gm=/usr
</span><br>
<span class="quotelev2">&gt;&gt; LDFLAGS=-L/usr/lib64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT oob_tcp_peer.lo -MD -MP -MF .deps/oob_tcp_peer.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_peer.c -fPIC -DPIC -o .libs/oob_tcp_peer.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo oob_tcp_ping.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_ping.lo -MD -MP -MF $depbase.Tpo -c -o oob_tcp_ping.lo
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_ping.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT oob_tcp_ping.lo -MD -MP -MF .deps/oob_tcp_ping.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_ping.c -fPIC -DPIC -o .libs/oob_tcp_ping.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo oob_tcp_recv.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_recv.lo -MD -MP -MF $depbase.Tpo -c -o oob_tcp_recv.lo
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_recv.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT oob_tcp_recv.lo -MD -MP -MF .deps/oob_tcp_recv.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_recv.c -fPIC -DPIC -o .libs/oob_tcp_recv.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo oob_tcp_send.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_send.lo -MD -MP -MF $depbase.Tpo -c -o oob_tcp_send.lo
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_send.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT oob_tcp_send.lo -MD -MP -MF .deps/oob_tcp_send.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_send.c -fPIC -DPIC -o .libs/oob_tcp_send.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link /usr/bin/gcc -g3 -
</span><br>
<span class="quotelev2">&gt;&gt; Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -
</span><br>
<span class="quotelev2">&gt;&gt; Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-
</span><br>
<span class="quotelev2">&gt;&gt; declaration -fno-strict-aliasing -pthread -export-dynamic -L/usr/
</span><br>
<span class="quotelev2">&gt;&gt; lib64 -o mca_oob_tcp.la -rpath /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version oob_tcp.lo oob_tcp_addr.lo oob_tcp_msg.lo
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_peer.lo oob_tcp_ping.lo oob_tcp_recv.lo oob_tcp_send.lo /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/liborte.la /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/libopal.la -lnsl -lutil -lm -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -shared .libs/oob_tcp.o .libs/oob_tcp_addr.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_msg.o .libs/oob_tcp_peer.o .libs/oob_tcp_ping.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_recv.o .libs/oob_tcp_send.o -Wl,--rpath -Wl,/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/orte/.libs -Wl,--rpath -Wl,/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs -Wl,--rpath -Wl,/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/install/lib -L/
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs -L/usr/lib64 /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs/liborte.so /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs/libopal.so -lnsl -lutil -lm -lpthread -pthread -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; soname -Wl,mca_oob_tcp.so -o .libs/mca_oob_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt; creating mca_oob_tcp.la
</span><br>
<span class="quotelev2">&gt;&gt; (cd .libs &amp;&amp; rm -f mca_oob_tcp.la &amp;&amp; ln -s ../mca_oob_tcp.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp.la)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/oob/tcp
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/pls/bproc
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/bproc
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_bproc.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc.lo -MD -MP -MF $depbase.Tpo -c -o pls_bproc.lo
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; mkdir .libs
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_bproc.lo -MD -MP -MF .deps/pls_bproc.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc.c -fPIC -DPIC -o .libs/pls_bproc.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_bproc_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_component.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_component.lo pls_bproc_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_bproc_component.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_component.Tpo -c pls_bproc_component.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/pls_bproc_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link /usr/bin/gcc -g3 -
</span><br>
<span class="quotelev2">&gt;&gt; Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -
</span><br>
<span class="quotelev2">&gt;&gt; Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-
</span><br>
<span class="quotelev2">&gt;&gt; declaration -fno-strict-aliasing -pthread -export-dynamic -L/usr/
</span><br>
<span class="quotelev2">&gt;&gt; lib64 -o mca_pls_bproc.la -rpath /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version pls_bproc.lo pls_bproc_component.lo -lbproc /usr/
</span><br>
<span class="quotelev2">&gt;&gt; projects/openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.1.3a1r12397/orte/liborte.la /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/libopal.la -lnsl -lutil -lm -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -shared .libs/pls_bproc.o .libs/pls_bproc_component.o -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib -L/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs -L/usr/lib64 -lbproc /usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/orte/.libs/liborte.so /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs/libopal.so -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; lpthread -pthread -Wl,-soname -Wl,mca_pls_bproc.so -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_bproc.so
</span><br>
<span class="quotelev2">&gt;&gt; creating mca_pls_bproc.la
</span><br>
<span class="quotelev2">&gt;&gt; (cd .libs &amp;&amp; rm -f mca_pls_bproc.la &amp;&amp; ln -s ../mca_pls_bproc.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_bproc.la)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/bproc
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/pls/bproc_orted
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/bproc_orted
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_bproc_orted.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/src/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_bproc_orted.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_orted.lo pls_bproc_orted.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; mkdir .libs
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/src/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_bproc_orted.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_orted.Tpo -c pls_bproc_orted.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_orted.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_bproc_orted_component.lo | sed s|[^/]*$|.deps/
</span><br>
<span class="quotelev2">&gt;&gt; &amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/src/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_bproc_orted_component.lo -MD -MP -MF $depbase.Tpo -
</span><br>
<span class="quotelev2">&gt;&gt; c -o pls_bproc_orted_component.lo pls_bproc_orted_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/src/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_bproc_orted_component.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_orted_component.Tpo -c pls_bproc_orted_component.c -fPIC -
</span><br>
<span class="quotelev2">&gt;&gt; DPIC -o .libs/pls_bproc_orted_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link /usr/bin/gcc -g3 -
</span><br>
<span class="quotelev2">&gt;&gt; Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -
</span><br>
<span class="quotelev2">&gt;&gt; Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-
</span><br>
<span class="quotelev2">&gt;&gt; declaration -fno-strict-aliasing -pthread -export-dynamic -L/usr/
</span><br>
<span class="quotelev2">&gt;&gt; lib64 -o mca_pls_bproc_orted.la -rpath /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/install/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; -module -avoid-version pls_bproc_orted.lo
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_orted_component.lo -lbproc /usr/projects/openmpi/working/
</span><br>
<span class="quotelev2">&gt;&gt; mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/liborte.la /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/libopal.la -lnsl -lutil -lm -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -shared .libs/pls_bproc_orted.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_orted_component.o -Wl,--rpath -Wl,/usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/orte/.libs -Wl,--rpath -Wl,/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs -Wl,--rpath -Wl,/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/install/lib -L/
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs -L/usr/lib64 -lbproc /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs/liborte.so /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs/libopal.so -lnsl -lutil -lm -lpthread -pthread -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; soname -Wl,mca_pls_bproc_orted.so -o .libs/mca_pls_bproc_orted.so
</span><br>
<span class="quotelev2">&gt;&gt; creating mca_pls_bproc_orted.la
</span><br>
<span class="quotelev2">&gt;&gt; (cd .libs &amp;&amp; rm -f mca_pls_bproc_orted.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_bproc_orted.la mca_pls_bproc_orted.la)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/bproc_orted
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/pls/fork
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/fork
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_fork_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_component.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_component.lo pls_fork_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; mkdir .libs
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_fork_component.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_component.Tpo -c pls_fork_component.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_component.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_fork_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_module.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_module.lo pls_fork_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_fork_module.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_module.Tpo -c pls_fork_module.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_module.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link /usr/bin/gcc -g3 -
</span><br>
<span class="quotelev2">&gt;&gt; Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -
</span><br>
<span class="quotelev2">&gt;&gt; Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-
</span><br>
<span class="quotelev2">&gt;&gt; declaration -fno-strict-aliasing -pthread -export-dynamic -L/usr/
</span><br>
<span class="quotelev2">&gt;&gt; lib64 -o mca_pls_fork.la -rpath /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version pls_fork_component.lo pls_fork_module.lo /usr/
</span><br>
<span class="quotelev2">&gt;&gt; projects/openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.1.3a1r12397/orte/liborte.la /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/libopal.la -lnsl -lutil -lm -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -shared .libs/pls_fork_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_module.o -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib -L/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs -L/usr/lib64 /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/orte/.libs/liborte.so /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs/libopal.so -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; lpthread -pthread -Wl,-soname -Wl,mca_pls_fork.so -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_fork.so
</span><br>
<span class="quotelev2">&gt;&gt; creating mca_pls_fork.la
</span><br>
<span class="quotelev2">&gt;&gt; (cd .libs &amp;&amp; rm -f mca_pls_fork.la &amp;&amp; ln -s ../mca_pls_fork.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_fork.la)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/fork
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/pls/rsh
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/rsh
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_rsh_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_component.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_component.lo pls_rsh_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; mkdir .libs
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_rsh_component.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_component.Tpo -c pls_rsh_component.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_component.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_rsh_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_module.lo -MD -MP -MF $depbase.Tpo -c -o pls_rsh_module.lo
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_rsh_module.lo -MD -MP -MF .deps/pls_rsh_module.Tpo
</span><br>
<span class="quotelev2">&gt;&gt; -c pls_rsh_module.c  -fPIC -DPIC -o .libs/pls_rsh_module.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link /usr/bin/gcc -g3 -
</span><br>
<span class="quotelev2">&gt;&gt; Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -
</span><br>
<span class="quotelev2">&gt;&gt; Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-
</span><br>
<span class="quotelev2">&gt;&gt; declaration -fno-strict-aliasing -pthread -export-dynamic -L/usr/
</span><br>
<span class="quotelev2">&gt;&gt; lib64 -o mca_pls_rsh.la -rpath /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version pls_rsh_component.lo pls_rsh_module.lo /usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/orte/liborte.la /usr/projects/openmpi/working/
</span><br>
<span class="quotelev2">&gt;&gt; mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/libopal.la -lnsl -lutil -lm -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -shared .libs/pls_rsh_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_module.o -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib -L/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs -L/usr/lib64 /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/orte/.libs/liborte.so /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs/libopal.so -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; lpthread -pthread -Wl,-soname -Wl,mca_pls_rsh.so -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt; creating mca_pls_rsh.la
</span><br>
<span class="quotelev2">&gt;&gt; (cd .libs &amp;&amp; rm -f mca_pls_rsh.la &amp;&amp; ln -s ../mca_pls_rsh.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_rsh.la)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/rsh
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/pls/slurm
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/orte
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/slurm
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_slurm_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_component.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_component.lo pls_slurm_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; mkdir .libs
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_slurm_component.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_component.Tpo -c pls_slurm_component.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/pls_slurm_component.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_slurm_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_module.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_module.lo pls_slurm_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_slurm_module.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_module.Tpo -c pls_slurm_module.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_module.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link /usr/bin/gcc -g3 -
</span><br>
<span class="quotelev2">&gt;&gt; Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -
</span><br>
<span class="quotelev2">&gt;&gt; Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-
</span><br>
<span class="quotelev2">&gt;&gt; declaration -fno-strict-aliasing -pthread -export-dynamic -L/usr/
</span><br>
<span class="quotelev2">&gt;&gt; lib64 -o mca_pls_slurm.la -rpath /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version pls_slurm_component.lo pls_slurm_module.lo /usr/
</span><br>
<span class="quotelev2">&gt;&gt; projects/openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.1.3a1r12397/orte/liborte.la /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/libopal.la -lnsl -lutil -lm -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -shared .libs/pls_slurm_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_module.o  -Wl,--rpath -Wl,/usr/projects/openmpi/working/
</span><br>
<span class="quotelev2">&gt;&gt; mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib -L/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs -L/usr/lib64 /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/orte/.libs/liborte.so /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs/libopal.so -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; lpthread -pthread -Wl,-soname -Wl,mca_pls_slurm.so -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_slurm.so
</span><br>
<span class="quotelev2">&gt;&gt; creating mca_pls_slurm.la
</span><br>
<span class="quotelev2">&gt;&gt; (cd .libs &amp;&amp; rm -f mca_pls_slurm.la &amp;&amp; ln -s ../mca_pls_slurm.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_slurm.la)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/slurm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; --- make all stderr ---
</span><br>
<span class="quotelev2">&gt;&gt; keyval_lex.c:1667: warning: yy_flex_realloc defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; show_help_lex.c:1609: warning: yy_flex_realloc defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc.c: In function `orte_pls_bproc_check_node_state:
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc.c:690: warning: unused variable `item
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh: line 1: 16202 Terminated ( cd $subdir &amp;&amp; make  
</span><br>
<span class="quotelev2">&gt;&gt; $local_target )
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:09:28
</span><br>
<span class="quotelev2">&gt;&gt; &quot;,&quot;&quot;,&quot; font-family:Courier,monospace&quot;)&quot; class=&quot;lgray_ln&quot;&gt;[i]
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.11-7.BProcPerfctr_FC3smpOpen MPI
</span><br>
<span class="quotelev2">&gt;&gt; v1.21.2a1r12413lanl_flash_64_v1.2pgipgf90_6.1-3_64-bit_on_x86_linux01
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; CC=/usr/bin/gcc CXX=/usr/bin/g++ F77=/opt/PGI/pgi_6.1-3/
</span><br>
<span class="quotelev2">&gt;&gt; linux86-64/6.1/bin/pgf90 F90=/opt/PGI/pgi_6.1-3/linux86-64/6.1/bin/
</span><br>
<span class="quotelev2">&gt;&gt; pgf90 FC=/opt/PGI/pgi_6.1-3/linux86-64/6.1/bin/pgf90 --enable-picky
</span><br>
<span class="quotelev2">&gt;&gt; --enable-debug --with-io-romio-flags=--with-file-
</span><br>
<span class="quotelev2">&gt;&gt; system=ufs,nfs,panfs --prefix=/usr/projects/openmpi/opt/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.2rc1-x86_64-pgf90_6.1-3_64-bit_on_Linux --with-gm=/usr
</span><br>
<span class="quotelev2">&gt;&gt; LDFLAGS=-L/usr/lib64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/bin || mkdir -p -- /usr/
</span><br>
<span class="quotelev2">&gt;&gt; projects/openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/
</span><br>
<span class="quotelev2">&gt;&gt; bin
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../libtool --mode=install /usr/bin/install -c orted /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/bin/orted
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: /usr/bin/install -c .libs/orted /usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/bin/orted
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/share/openmpi || mkdir -p
</span><br>
<span class="quotelev2">&gt;&gt; -- /usr/projects/openmpi/working/mtt/ 
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/share/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 help-orted.txt /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/share/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; help-orted.txt
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/orted
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/orted
</span><br>
<span class="quotelev2">&gt;&gt; Making install in tools/orterun
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/orterun
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/orterun
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/bin || mkdir -p -- /usr/
</span><br>
<span class="quotelev2">&gt;&gt; projects/openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/
</span><br>
<span class="quotelev2">&gt;&gt; bin
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../libtool --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev2">&gt;&gt; orterun /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/bin/orterun
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: /usr/bin/install -c .libs/orterun /usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/bin/ 
</span><br>
<span class="quotelev2">&gt;&gt; orterun
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/share/openmpi || mkdir -p
</span><br>
<span class="quotelev2">&gt;&gt; -- /usr/projects/openmpi/working/mtt/ 
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/share/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 help-orterun.txt /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/share/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; help-orterun.txt
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/man/man1 || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/man/man1
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 ./orterun.1 /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/man/man1/
</span><br>
<span class="quotelev2">&gt;&gt; orterun.1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/orterun
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/orterun
</span><br>
<span class="quotelev2">&gt;&gt; Making install in tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; make install-exec-hook
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; (cd /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/bin; rm -f ortecc; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper ortecc)
</span><br>
<span class="quotelev2">&gt;&gt; (cd /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/bin; rm -f ortec++; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper ortec++)
</span><br>
<span class="quotelev2">&gt;&gt; (cd /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/bin; rm -f orteCC; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper orteCC)
</span><br>
<span class="quotelev2">&gt;&gt; (cd /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/share/openmpi; rm -f
</span><br>
<span class="quotelev2">&gt;&gt; orteCC-wrapper-data.txt; ln -s ortec++-wrapper-data.txt orteCC-
</span><br>
<span class="quotelev2">&gt;&gt; wrapper-data.txt)
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/share/openmpi || mkdir -p
</span><br>
<span class="quotelev2">&gt;&gt; -- /usr/projects/openmpi/working/mtt/ 
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/share/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 ortecc-wrapper-data.txt /usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/share/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/ortecc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 ortec++-wrapper-data.txt /usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/share/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/ortec++-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; make install-data-hook
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; (cd /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/man/man1; rm -f ortecc.1;
</span><br>
<span class="quotelev2">&gt;&gt; ln -s opalcc.1 ortecc.1)
</span><br>
<span class="quotelev2">&gt;&gt; (cd /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/man/man1; rm -f ortec++.1;
</span><br>
<span class="quotelev2">&gt;&gt; ln -s opalcc.1 ortec++.1)
</span><br>
<span class="quotelev2">&gt;&gt; (cd /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/man/man1; rm -f orteCC.1;
</span><br>
<span class="quotelev2">&gt;&gt; ln -s opalcc.1 orteCC.1)
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte
</span><br>
<span class="quotelev2">&gt;&gt; Making install in ompi
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi
</span><br>
<span class="quotelev2">&gt;&gt; Making install in include
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; include
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; include
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Nothing to be done for `install-exec-am.
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 mpif-common.h /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/include/mpif-
</span><br>
<span class="quotelev2">&gt;&gt; common.h
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 mpi.h /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include/mpi.h
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 mpif.h /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include/mpif.h
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 mpif-config.h /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/include/mpif-
</span><br>
<span class="quotelev2">&gt;&gt; config.h
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; include
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; include
</span><br>
<span class="quotelev2">&gt;&gt; Making install in datatype
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; datatype
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; datatype
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Nothing to be done for `install-exec-am.
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; datatype
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; datatype
</span><br>
<span class="quotelev2">&gt;&gt; Making install in debuggers
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; debuggers
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; debuggers
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Nothing to be done for `install-exec-am.
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/lib/openmpi || mkdir -p
</span><br>
<span class="quotelev2">&gt;&gt; -- /usr/projects/openmpi/working/mtt/ 
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev2">&gt;&gt; libompitv.la /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/lib/openmpi/libompitv.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: /usr/bin/install -c .libs/libompitv.so /usr/
</span><br>
<span class="quotelev2">&gt;&gt; projects/openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/
</span><br>
<span class="quotelev2">&gt;&gt; lib/openmpi/libompitv.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: /usr/bin/install -c .libs/libompitv.lai /usr/
</span><br>
<span class="quotelev2">&gt;&gt; projects/openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/
</span><br>
<span class="quotelev2">&gt;&gt; lib/openmpi/libompitv.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: finish: PATH=/opt/PGI/pgi_6.1-3/linux86-64/6.1/bin:/users/
</span><br>
<span class="quotelev2">&gt;&gt; jbarker/subversion_64/bin:/users/jbarker/subversion_32/bin:/users/
</span><br>
<span class="quotelev2">&gt;&gt; jbarker/subversion_64/bin:/users/jbarker/data_collectors/subversion/
</span><br>
<span class="quotelev2">&gt;&gt; subversion-1.2.3/subversion/clients/cmdline:/users/jbarker/
</span><br>
<span class="quotelev2">&gt;&gt; data_collectors/ompi/opt/bin:/usr/projects/shavano/bin:/users/
</span><br>
<span class="quotelev2">&gt;&gt; jbarker/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/lsf/
</span><br>
<span class="quotelev2">&gt;&gt; bin:/usr/X11R6/bin:/sbin ldconfig -n /usr/projects/openmpi/working/
</span><br>
<span class="quotelev2">&gt;&gt; mtt/daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; Libraries have been installed in:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you ever happen to want to link against installed libraries
</span><br>
<span class="quotelev2">&gt;&gt; in a given directory, LIBDIR, you must either use libtool, and
</span><br>
<span class="quotelev2">&gt;&gt; specify the full pathname of the library, or use the `-LLIBDIR
</span><br>
<span class="quotelev2">&gt;&gt; flag during linking and do at least one of the following:
</span><br>
<span class="quotelev2">&gt;&gt; - add LIBDIR to the `LD_LIBRARY_PATH environment variable
</span><br>
<span class="quotelev2">&gt;&gt; during execution
</span><br>
<span class="quotelev2">&gt;&gt; - add LIBDIR to the `LD_RUN_PATH environment variable
</span><br>
<span class="quotelev2">&gt;&gt; during linking
</span><br>
<span class="quotelev2">&gt;&gt; - use the `-Wl,-rpath -Wl,LIBDIR linker flag
</span><br>
<span class="quotelev2">&gt;&gt; - have your system administrator add LIBDIR to `/etc/ld.so.conf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See any operating system documentation about shared libraries for
</span><br>
<span class="quotelev2">&gt;&gt; more information, such as the ld(1) and ld.so(8) manual pages.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; debuggers
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; debuggers
</span><br>
<span class="quotelev2">&gt;&gt; Making install in etc
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh: line 1: 14103 Terminated make $local_target
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; --- make all stderr ---
</span><br>
<span class="quotelev2">&gt;&gt; keyval_lex.c:1673: warning: yy_flex_realloc defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; show_help_lex.c:1610: warning: yy_flex_realloc defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; odls_bproc.c:61: warning: initialization from incompatible pointer
</span><br>
<span class="quotelev2">&gt;&gt; type
</span><br>
<span class="quotelev2">&gt;&gt; ras_bjs.c:97: warning: orte_ras_bjs_node_resolve defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; rds_hostfile_lex.l:44: warning: no previous prototype for
</span><br>
<span class="quotelev2">&gt;&gt; orte_rds_hostfile_wrap
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:39:14
</span><br>
<span class="quotelev2">&gt;&gt; &quot;,&quot;&quot;,&quot; font-family:Courier,monospace&quot;)&quot; class=&quot;lgray_ln&quot;&gt;[i]
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.9-34.0.1.ELsmpOpen MPI trunk1.3a1r12408Cacau @
</span><br>
<span class="quotelev2">&gt;&gt; HLRSintel9.001
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; --enable-picky --enable-debug --with-tm=/opt/pbs CC=icc CXX=icpc
</span><br>
<span class="quotelev2">&gt;&gt; FC=ifort F77=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; ompi_pointer_array ompi_pointer_array.o ../../ompi/libmpi.la ../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/liborte.la ../../opal/libopal.la ../../test/support/
</span><br>
<span class="quotelev2">&gt;&gt; libsupport.a -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/ompi_pointer_array ompi_pointer_array.o -Wl,--
</span><br>
<span class="quotelev2">&gt;&gt; export-dynamic ../../ompi/.libs/libmpi.so /mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs/liborte.so ../../orte/.libs/liborte.so /mscratch/ws/
</span><br>
<span class="quotelev2">&gt;&gt; hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/cacau_icc_warnings/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -pthread ../../opal/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.so -ldl ../../test/support/libsupport.a -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating ompi_pointer_array
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo ompi_rb_tree.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if icc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../../test/
</span><br>
<span class="quotelev2">&gt;&gt; support -I../.. -g -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -MT ompi_rb_tree.o -MD -MP -MF $depbase.Tpo -c -o ompi_rb_tree.o
</span><br>
<span class="quotelev2">&gt;&gt; ompi_rb_tree.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; ompi_rb_tree ompi_rb_tree.o ../../ompi/libmpi.la ../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; liborte.la ../../opal/libopal.la ../../test/support/libsupport.a -
</span><br>
<span class="quotelev2">&gt;&gt; lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/ompi_rb_tree ompi_rb_tree.o -Wl,--export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic ../../ompi/.libs/libmpi.so /mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs/liborte.so ../../orte/.libs/liborte.so /mscratch/ws/
</span><br>
<span class="quotelev2">&gt;&gt; hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/cacau_icc_warnings/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -pthread ../../opal/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.so -ldl ../../test/support/libsupport.a -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating ompi_rb_tree
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/class
</span><br>
<span class="quotelev2">&gt;&gt; make check-TESTS
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/class
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: ompi_bitmap_t: (18 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: ompi_bitmap
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: opal_hash_table_t: (48 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: opal_hash_table
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: opal_list_t: (25 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: opal_list
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: opal_value_array_t: (44 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: opal_value_array
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: ompi_pointer_array: (14 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: ompi_pointer_array
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: ompi_rb_tree_t: (21 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: ompi_rb_tree
</span><br>
<span class="quotelev2">&gt;&gt; ==================
</span><br>
<span class="quotelev2">&gt;&gt; All 6 tests passed
</span><br>
<span class="quotelev2">&gt;&gt; ==================
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/class
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/class
</span><br>
<span class="quotelev2">&gt;&gt; Making check in memory
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; make opal_memory_basic opal_memory_speed opal_memory_cxx
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_memory_basic.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if icc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../.. -g -
</span><br>
<span class="quotelev2">&gt;&gt; finline-functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_basic.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_basic.o opal_memory_basic.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_basic opal_memory_basic.o ../../opal/libopal.la -lnsl -
</span><br>
<span class="quotelev2">&gt;&gt; lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/opal_memory_basic opal_memory_basic.o -Wl,--export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -pthread ../../opal/.libs/libopal.so -ldl -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_memory_speed.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if icc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../.. -g -
</span><br>
<span class="quotelev2">&gt;&gt; finline-functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_speed.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_speed.o opal_memory_speed.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_speed opal_memory_speed.o ../../opal/libopal.la -lnsl -
</span><br>
<span class="quotelev2">&gt;&gt; lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/opal_memory_speed opal_memory_speed.o -Wl,--export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -pthread ../../opal/.libs/libopal.so -ldl -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating opal_memory_speed
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_memory_cxx.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if icpc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../.. -g -
</span><br>
<span class="quotelev2">&gt;&gt; finline-functions -pthread -MT opal_memory_cxx.o -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o opal_memory_cxx.o opal_memory_cxx.cc; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CXX --mode=link icpc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -pthread -export-dynamic -o opal_memory_cxx
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_cxx.o ../../opal/libopal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icpc -g -finline-functions -pthread -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_cxx opal_memory_cxx.o -Wl,--export-dynamic -
</span><br>
<span class="quotelev2">&gt;&gt; pthread ../../opal/.libs/libopal.so -ldl -lnsl -lutil -Wl,-rpath,/
</span><br>
<span class="quotelev2">&gt;&gt; mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-icc-0/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/install/ 
</span><br>
<span class="quotelev2">&gt;&gt; lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating opal_memory_cxx
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; make check-TESTS
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; lt-opal_memory_basic: opal_memory_basic.c:73: alloc_free_test:
</span><br>
<span class="quotelev2">&gt;&gt; Assertion `counter &gt;= 1 failed.
</span><br>
<span class="quotelev2">&gt;&gt; running malloc hooks test
</span><br>
<span class="quotelev2">&gt;&gt; - malloc big buffer
</span><br>
<span class="quotelev2">&gt;&gt; Signal:6 info.si_errno:0(Success) si_code:-6()
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/opal/.libs/libopal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (opal_backtrace_print+0x1b) [0x2a95592853]
</span><br>
<span class="quotelev2">&gt;&gt; [1] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/opal/.libs/libopal.so.0 [0x2a95591667]
</span><br>
<span class="quotelev2">&gt;&gt; [2] func:/lib64/tls/libpthread.so.0 [0x3ab540c3d0]
</span><br>
<span class="quotelev2">&gt;&gt; [3] func:/lib64/tls/libc.so.6(gsignal+0x3d) [0x3ab4b2e4cd]
</span><br>
<span class="quotelev2">&gt;&gt; [4] func:/lib64/tls/libc.so.6(abort+0xfe) [0x3ab4b2fc1e]
</span><br>
<span class="quotelev2">&gt;&gt; [5] func:/lib64/tls/libc.so.6(__assert_fail+0xf1) [0x3ab4b27d71]
</span><br>
<span class="quotelev2">&gt;&gt; [6] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/test/memory/.libs/lt-opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; [0x401d59]
</span><br>
<span class="quotelev2">&gt;&gt; [7] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/test/memory/.libs/lt-opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; (main+0x8a) [0x401ce2]
</span><br>
<span class="quotelev2">&gt;&gt; [8] func:/lib64/tls/libc.so.6(__libc_start_main+0xd4) [0x3ab4b1c4b4]
</span><br>
<span class="quotelev2">&gt;&gt; [9] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/test/memory/.libs/lt-opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; [0x401bca]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; --- make all stderr ---
</span><br>
<span class="quotelev2">&gt;&gt; ltdl.c(156): warning #167: argument of type void * is incompatible
</span><br>
<span class="quotelev2">&gt;&gt; with parameter of type lt_get_vtable *
</span><br>
<span class="quotelev2">&gt;&gt; return loader_init (lt_dlsym (handle, get_vtable), 0);
</span><br>
<span class="quotelev2">&gt;&gt; ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rmgr_proxy.c(372): warning #167: argument of type uint8_t={unsigned
</span><br>
<span class="quotelev2">&gt;&gt; char} ** is incompatible with parameter of type void **
</span><br>
<span class="quotelev2">&gt;&gt; if (ORTE_SUCCESS != (rc = orte_dss.get(&amp;fptr, flow-&gt;value,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_UINT8))) {
</span><br>
<span class="quotelev2">&gt;&gt; ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rmgr_urm.c(315): warning #167: argument of type uint8_t={unsigned
</span><br>
<span class="quotelev2">&gt;&gt; char} ** is incompatible with parameter of type void **
</span><br>
<span class="quotelev2">&gt;&gt; if (ORTE_SUCCESS != (rc = orte_dss.get(&amp;fptr, flow-&gt;value,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_UINT8))) {
</span><br>
<span class="quotelev2">&gt;&gt; ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:18:33
</span><br>
<span class="quotelev2">&gt;&gt; &quot;,&quot;&quot;,&quot; font-family:Courier,monospace&quot;)&quot; class=&quot;lgray_ln&quot;&gt;[i]
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.9-34.0.1.ELsmpOpen MPI v1.21.2a1r12413Cacau @
</span><br>
<span class="quotelev2">&gt;&gt; HLRSintel9.001
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; --enable-picky --enable-debug --with-tm=/opt/pbs CC=icc CXX=icpc
</span><br>
<span class="quotelev2">&gt;&gt; FC=ifort F77=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; ompi_pointer_array ompi_pointer_array.o ../../ompi/libmpi.la ../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/liborte.la ../../opal/libopal.la ../../test/support/
</span><br>
<span class="quotelev2">&gt;&gt; libsupport.a -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/ompi_pointer_array ompi_pointer_array.o -Wl,--
</span><br>
<span class="quotelev2">&gt;&gt; export-dynamic ../../ompi/.libs/libmpi.so /mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs/liborte.so ../../orte/.libs/liborte.so /mscratch/ws/
</span><br>
<span class="quotelev2">&gt;&gt; hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.2/cacau_icc_warnings/1.2a1r12413/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.2a1r12413/opal/.libs/libopal.so -pthread ../../opal/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.so -ldl ../../test/support/libsupport.a -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating ompi_pointer_array
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo ompi_rb_tree.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if icc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../../test/
</span><br>
<span class="quotelev2">&gt;&gt; support -I../.. -g -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -MT ompi_rb_tree.o -MD -MP -MF $depbase.Tpo -c -o ompi_rb_tree.o
</span><br>
<span class="quotelev2">&gt;&gt; ompi_rb_tree.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; ompi_rb_tree ompi_rb_tree.o ../../ompi/libmpi.la ../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; liborte.la ../../opal/libopal.la ../../test/support/libsupport.a -
</span><br>
<span class="quotelev2">&gt;&gt; lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/ompi_rb_tree ompi_rb_tree.o -Wl,--export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic ../../ompi/.libs/libmpi.so /mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs/liborte.so ../../orte/.libs/liborte.so /mscratch/ws/
</span><br>
<span class="quotelev2">&gt;&gt; hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.2/cacau_icc_warnings/1.2a1r12413/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.2a1r12413/opal/.libs/libopal.so -pthread ../../opal/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.so -ldl ../../test/support/libsupport.a -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating ompi_rb_tree
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/class
</span><br>
<span class="quotelev2">&gt;&gt; make check-TESTS
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/class
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: ompi_bitmap_t: (18 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: ompi_bitmap
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: opal_hash_table_t: (48 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: opal_hash_table
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: opal_list_t: (25 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: opal_list
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: opal_value_array_t: (44 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: opal_value_array
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: ompi_pointer_array: (14 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: ompi_pointer_array
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: ompi_rb_tree_t: (21 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: ompi_rb_tree
</span><br>
<span class="quotelev2">&gt;&gt; ==================
</span><br>
<span class="quotelev2">&gt;&gt; All 6 tests passed
</span><br>
<span class="quotelev2">&gt;&gt; ==================
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/class
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/class
</span><br>
<span class="quotelev2">&gt;&gt; Making check in memory
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; make opal_memory_basic opal_memory_speed opal_memory_cxx
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_memory_basic.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if icc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../.. -g -
</span><br>
<span class="quotelev2">&gt;&gt; finline-functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_basic.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_basic.o opal_memory_basic.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_basic opal_memory_basic.o ../../opal/libopal.la -lnsl -
</span><br>
<span class="quotelev2">&gt;&gt; lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/opal_memory_basic opal_memory_basic.o -Wl,--export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -pthread ../../opal/.libs/libopal.so -ldl -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_memory_speed.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if icc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../.. -g -
</span><br>
<span class="quotelev2">&gt;&gt; finline-functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_speed.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_speed.o opal_memory_speed.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_speed opal_memory_speed.o ../../opal/libopal.la -lnsl -
</span><br>
<span class="quotelev2">&gt;&gt; lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/opal_memory_speed opal_memory_speed.o -Wl,--export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -pthread ../../opal/.libs/libopal.so -ldl -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating opal_memory_speed
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_memory_cxx.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if icpc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../.. -g -
</span><br>
<span class="quotelev2">&gt;&gt; finline-functions -pthread -MT opal_memory_cxx.o -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o opal_memory_cxx.o opal_memory_cxx.cc; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CXX --mode=link icpc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -pthread -export-dynamic -o opal_memory_cxx
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_cxx.o ../../opal/libopal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icpc -g -finline-functions -pthread -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_cxx opal_memory_cxx.o -Wl,--export-dynamic -
</span><br>
<span class="quotelev2">&gt;&gt; pthread ../../opal/.libs/libopal.so -ldl -lnsl -lutil -Wl,-rpath,/
</span><br>
<span class="quotelev2">&gt;&gt; mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-icc-0/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating opal_memory_cxx
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; make check-TESTS
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; lt-opal_memory_basic: opal_memory_basic.c:73: alloc_free_test:
</span><br>
<span class="quotelev2">&gt;&gt; Assertion `counter &gt;= 1 failed.
</span><br>
<span class="quotelev2">&gt;&gt; running malloc hooks test
</span><br>
<span class="quotelev2">&gt;&gt; - malloc big buffer
</span><br>
<span class="quotelev2">&gt;&gt; Signal:6 info.si_errno:0(Success) si_code:-6()
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.2a1r12413/opal/.libs/libopal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (opal_backtrace_print+0x1b) [0x2a95592be3]
</span><br>
<span class="quotelev2">&gt;&gt; [1] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.2a1r12413/opal/.libs/libopal.so.0 [0x2a955919f7]
</span><br>
<span class="quotelev2">&gt;&gt; [2] func:/lib64/tls/libpthread.so.0 [0x3ab540c3d0]
</span><br>
<span class="quotelev2">&gt;&gt; [3] func:/lib64/tls/libc.so.6(gsignal+0x3d) [0x3ab4b2e4cd]
</span><br>
<span class="quotelev2">&gt;&gt; [4] func:/lib64/tls/libc.so.6(abort+0xfe) [0x3ab4b2fc1e]
</span><br>
<span class="quotelev2">&gt;&gt; [5] func:/lib64/tls/libc.so.6(__assert_fail+0xf1) [0x3ab4b27d71]
</span><br>
<span class="quotelev2">&gt;&gt; [6] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.2a1r12413/test/memory/.libs/lt-opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; [0x401d59]
</span><br>
<span class="quotelev2">&gt;&gt; [7] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.2a1r12413/test/memory/.libs/lt-opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; (main+0x8a) [0x401ce2]
</span><br>
<span class="quotelev2">&gt;&gt; [8] func:/lib64/tls/libc.so.6(__libc_start_main+0xd4) [0x3ab4b1c4b4]
</span><br>
<span class="quotelev2">&gt;&gt; [9] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.2a1r12413/test/memory/.libs/lt-opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; [0x401bca]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; --- make all stderr ---
</span><br>
<span class="quotelev2">&gt;&gt; ltdl.c(156): warning #167: argument of type void * is incompatible
</span><br>
<span class="quotelev2">&gt;&gt; with parameter of type lt_get_vtable *
</span><br>
<span class="quotelev2">&gt;&gt; return loader_init (lt_dlsym (handle, get_vtable), 0);
</span><br>
<span class="quotelev2">&gt;&gt; ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:14:50
</span><br>
<span class="quotelev2">&gt;&gt; &quot;,&quot;&quot;,&quot; font-family:Courier,monospace&quot;)&quot; class=&quot;lgray_ln&quot;&gt;[i]
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.9-34.ELsmp.perfctrOpen MPI trunk1.3a1r12408IU
</span><br>
<span class="quotelev2">&gt;&gt; - Thor - TESTINGgnu3.4.601
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; FCFLAGS=-m32 FFLAGS=-m32 CFLAGS=-m32 CXXFLAGS=-m32 --with-wrapper-
</span><br>
<span class="quotelev2">&gt;&gt; cflags=-m32 --with-wrapper-cxxflags=-m32 --with-wrapper-fflags=-m32
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-fcflags=-m32
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/pls/rsh/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/pls/slurm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/pls/tm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/pls/xgrid/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/bjs/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/dash_host/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/gridengine/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/loadleveler/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/localhost/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/lsf_bproc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/slurm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/tm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/xgrid/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rds/hostfile/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rds/proxy/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rds/resfile/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rmaps/proxy/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rmaps/round_robin/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rmgr/cnos/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rmgr/proxy/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rmgr/urm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rml/cnos/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rml/oob/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/bproc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/cnos/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/env/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/pipe/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/portals_utcp/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/seed/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/singleton/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/slurm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/smr/bproc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/allocator/basic/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/allocator/bucket/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/bml/r2/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/gm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/mvapi/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/mx/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/openib/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/portals/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/self/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/tcp/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/udapl/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/basic/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/hierarch/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/self/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/tuned/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/common/portals/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/common/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/io/romio/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/gm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/mvapi/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/openib/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/udapl/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mtl/mx/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mtl/portals/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mtl/psm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/osc/pt2pt/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/osc/rdma/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/pml/cm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/pml/dr/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/pml/ob1/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/rcache/rb/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/rcache/vma/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/topo/unity/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/include/opal/install_dirs.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating config/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating contrib/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/etc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/include/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/asm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/event/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/event/compat/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/event/compat/sys/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/util/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/util/keyval/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/mca/base/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/tools/wrappers/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/tools/wrappers/opalcc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/tools/wrappers/opalc++-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/include/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/etc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/console/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orted/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orteprobe/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orterun/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/wrappers/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/wrappers/ortecc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/wrappers/ortec++-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orte-ps/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orte-clean/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/etc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: error: cannot find input file: ompi/etc/Makefile.in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:02:49
</span><br>
<span class="quotelev2">&gt;&gt; &quot;,&quot;&quot;,&quot; font-family:Courier,monospace&quot;)&quot; class=&quot;lgray_ln&quot;&gt;[i]
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.9-34.ELsmp.perfctrOpen MPI trunk1.3a1r12408IU
</span><br>
<span class="quotelev2">&gt;&gt; - Thor - TESTINGgnu3.4.601
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; FCFLAGS=-m32 FFLAGS=-m32 CFLAGS=-m32 CXXFLAGS=-m32 --with-wrapper-
</span><br>
<span class="quotelev2">&gt;&gt; cflags=-m32 --with-wrapper-cxxflags=-m32 --with-wrapper-fflags=-m32
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-fcflags=-m32
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/gpr/
</span><br>
<span class="quotelev2">&gt;&gt; replica
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/gpr/
</span><br>
<span class="quotelev2">&gt;&gt; replica
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/iof/proxy
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/iof/
</span><br>
<span class="quotelev2">&gt;&gt; proxy
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_proxy.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_proxy.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; iof_proxy.lo iof_proxy.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_proxy_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_proxy_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o iof_proxy_component.lo iof_proxy_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_proxy_svc.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_proxy_svc.lo -MD -MP -MF $depbase.Tpo -c -
</span><br>
<span class="quotelev2">&gt;&gt; o iof_proxy_svc.lo iof_proxy_svc.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_proxy_component.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/iof_proxy_component.Tpo -c iof_proxy_component.c -
</span><br>
<span class="quotelev2">&gt;&gt; fPIC -DPIC -o .libs/iof_proxy_component.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_proxy_svc.lo -MD -
</span><br>
<span class="quotelev2">&gt;&gt; MP -MF .deps/iof_proxy_svc.Tpo -c iof_proxy_svc.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/iof_proxy_svc.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_proxy.lo -MD -MP -
</span><br>
<span class="quotelev2">&gt;&gt; MF .deps/iof_proxy.Tpo -c iof_proxy.c -fPIC -DPIC -o .libs/ 
</span><br>
<span class="quotelev2">&gt;&gt; iof_proxy.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_iof_proxy.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_32_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version iof_proxy.lo iof_proxy_component.lo iof_proxy_svc.lo /
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/liborte.la /san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/iof_proxy.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; iof_proxy_component.o .libs/iof_proxy_svc.o -Wl,-rpath -Wl,/san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/.libs -Wl,-rpath -Wl,/san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/install/lib -L/san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/opal/.libs /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_iof_proxy.so -o .libs/mca_iof_proxy.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_iof_proxy.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_iof_proxy.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_iof_proxy.la mca_iof_proxy.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/iof/
</span><br>
<span class="quotelev2">&gt;&gt; proxy
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/iof/svc
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/iof/
</span><br>
<span class="quotelev2">&gt;&gt; svc
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_svc.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_svc.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc.lo iof_svc.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_svc_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_svc_component.lo -MD -MP -MF $depbase.Tpo
</span><br>
<span class="quotelev2">&gt;&gt; -c -o iof_svc_component.lo iof_svc_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_svc_proxy.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_svc_proxy.lo -MD -MP -MF $depbase.Tpo -c -
</span><br>
<span class="quotelev2">&gt;&gt; o iof_svc_proxy.lo iof_svc_proxy.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_svc_pub.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_svc_pub.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc_pub.lo iof_svc_pub.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_svc_sub.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_svc_sub.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc_sub.lo iof_svc_sub.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_svc_component.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/iof_svc_component.Tpo -c iof_svc_component.c -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; -DPIC -o .libs/iof_svc_component.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_svc.lo -MD -MP -
</span><br>
<span class="quotelev2">&gt;&gt; MF .deps/iof_svc.Tpo -c iof_svc.c -fPIC -DPIC -o .libs/iof_svc.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_svc_proxy.lo -MD -
</span><br>
<span class="quotelev2">&gt;&gt; MP -MF .deps/iof_svc_proxy.Tpo -c iof_svc_proxy.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/iof_svc_proxy.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_svc_pub.lo -MD -MP -
</span><br>
<span class="quotelev2">&gt;&gt; MF .deps/iof_svc_pub.Tpo -c iof_svc_pub.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc_pub.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_svc_sub.lo -MD -MP -
</span><br>
<span class="quotelev2">&gt;&gt; MF .deps/iof_svc_sub.Tpo -c iof_svc_sub.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc_sub.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_iof_svc.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_32_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version iof_svc.lo iof_svc_component.lo iof_svc_proxy.lo
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc_pub.lo iof_svc_sub.lo /san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/
</span><br>
<span class="quotelev2">&gt;&gt; liborte.la /san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/iof_svc.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc_component.o .libs/iof_svc_proxy.o .libs/iof_svc_pub.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc_sub.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/.libs -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs -Wl,-rpath -Wl,/
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib -L/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_iof_svc.so -o .libs/mca_iof_svc.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_iof_svc.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_iof_svc.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_iof_svc.la mca_iof_svc.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/iof/
</span><br>
<span class="quotelev2">&gt;&gt; svc
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/ns/proxy
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/ns/
</span><br>
<span class="quotelev2">&gt;&gt; proxy
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo src/ns_proxy.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT src/ns_proxy.lo -MD -MP -MF $depbase.Tpo -c -
</span><br>
<span class="quotelev2">&gt;&gt; o src/ns_proxy.lo src/ns_proxy.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo src/ns_proxy_component.lo | sed s|[^/]*$|.deps/&amp;|;s|
</span><br>
<span class="quotelev2">&gt;&gt; \.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT src/ns_proxy_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o src/ns_proxy_component.lo src/
</span><br>
<span class="quotelev2">&gt;&gt; ns_proxy_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT src/
</span><br>
<span class="quotelev2">&gt;&gt; ns_proxy_component.lo -MD -MP -MF src/.deps/ns_proxy_component.Tpo -
</span><br>
<span class="quotelev2">&gt;&gt; c src/ns_proxy_component.c -fPIC -DPIC -o src/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; ns_proxy_component.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT src/ns_proxy.lo -MD -MP
</span><br>
<span class="quotelev2">&gt;&gt; -MF src/.deps/ns_proxy.Tpo -c src/ns_proxy.c -fPIC -DPIC -o
</span><br>
<span class="quotelev2">&gt;&gt; src/.libs/ns_proxy.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_ns_proxy.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_32_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version src/ns_proxy.lo src/ns_proxy_component.lo /san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/liborte.la /san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared src/.libs/ns_proxy.o src/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; ns_proxy_component.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/install/lib -L/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_ns_proxy.so -o .libs/mca_ns_proxy.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_ns_proxy.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_ns_proxy.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_ns_proxy.la mca_ns_proxy.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/ns/
</span><br>
<span class="quotelev2">&gt;&gt; proxy
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/ns/replica
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/ns/
</span><br>
<span class="quotelev2">&gt;&gt; replica
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo src/ns_replica.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT src/ns_replica.lo -MD -MP -MF $depbase.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; -o src/ns_replica.lo src/ns_replica.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo src/ns_replica_component.lo | sed s|[^/]*$|.deps/&amp;|;s|
</span><br>
<span class="quotelev2">&gt;&gt; \.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT src/ns_replica_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o src/ns_replica_component.lo src/
</span><br>
<span class="quotelev2">&gt;&gt; ns_replica_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT src/ns_replica.lo -MD -
</span><br>
<span class="quotelev2">&gt;&gt; MP -MF src/.deps/ns_replica.Tpo -c src/ns_replica.c -fPIC -DPIC -o
</span><br>
<span class="quotelev2">&gt;&gt; src/.libs/ns_replica.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT src/
</span><br>
<span class="quotelev2">&gt;&gt; ns_replica_component.lo -MD -MP -MF src/.deps/
</span><br>
<span class="quotelev2">&gt;&gt; ns_replica_component.Tpo -c src/ns_replica_component.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o src/.libs/ns_replica_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_ns_replica.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_32_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version src/ns_replica.lo src/ns_replica_component.lo /san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/liborte.la /san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared src/.libs/ns_replica.o src/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; ns_replica_component.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/install/lib -L/san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/opal/.libs /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_ns_replica.so -o .libs/mca_ns_replica.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_ns_replica.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_ns_replica.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_ns_replica.la mca_ns_replica.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/ns/
</span><br>
<span class="quotelev2">&gt;&gt; replica
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/odls/default
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/
</span><br>
<span class="quotelev2">&gt;&gt; odls/default
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo odls_default_component.lo | sed s|[^/]*$|.deps/&amp;|;s|
</span><br>
<span class="quotelev2">&gt;&gt; \.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT odls_default_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o odls_default_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; odls_default_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo odls_default_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT odls_default_module.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o odls_default_module.lo odls_default_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT odls_default_module.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/odls_default_module.Tpo -c odls_default_module.c -
</span><br>
<span class="quotelev2">&gt;&gt; fPIC -DPIC -o .libs/odls_default_module.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; odls_default_component.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; odls_default_component.Tpo -c odls_default_component.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/odls_default_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_odls_default.la -rpath /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/install/lib/openmpi -
</span><br>
<span class="quotelev2">&gt;&gt; module -avoid-version odls_default_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; odls_default_module.lo /san/homedirs/mpiteam/mtt-runs/odin/20061102-
</span><br>
<span class="quotelev2">&gt;&gt; Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/
</span><br>
<span class="quotelev2">&gt;&gt; liborte.la /san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/odls_default_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; odls_default_module.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/install/lib -L/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_odls_default.so -o .libs/mca_odls_default.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_odls_default.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_odls_default.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_odls_default.la mca_odls_default.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/
</span><br>
<span class="quotelev2">&gt;&gt; odls/default
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/oob/tcp
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/oob/
</span><br>
<span class="quotelev2">&gt;&gt; tcp
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `../../../../config/
</span><br>
<span class="quotelev2">&gt;&gt; c_get_alignment.m4, needed by `Makefile.in. Stop.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/oob/
</span><br>
<span class="quotelev2">&gt;&gt; tcp
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:05:01
</span><br>
<span class="quotelev2">&gt;&gt; &quot;,&quot;&quot;,&quot; font-family:Courier,monospace&quot;)&quot; class=&quot;lgray_ln&quot;&gt;[i]
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.9-34.ELsmp.perfctrOpen MPI trunk1.3a1r12408IU
</span><br>
<span class="quotelev2">&gt;&gt; - Thor - TESTINGgnu3.4.601
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; FCFLAGS=-m64 FFLAGS=-m64 CFLAGS=-m64 CXXFLAGS=-m64 --with-wrapper-
</span><br>
<span class="quotelev2">&gt;&gt; cflags=-m64 --with-wrapper-cxxflags=-m64 --with-wrapper-fflags=-m64
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-fcflags=-m64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/bml/r2/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/gm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/mvapi/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/mx/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/openib/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/portals/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/self/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/tcp/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/udapl/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/basic/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/hierarch/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/self/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/tuned/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/common/portals/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/common/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/io/romio/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/gm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/mvapi/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/openib/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/udapl/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mtl/mx/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mtl/portals/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mtl/psm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/osc/pt2pt/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/osc/rdma/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/pml/cm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/pml/dr/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/pml/ob1/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/rcache/rb/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/rcache/vma/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/topo/unity/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/include/opal/install_dirs.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating config/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating contrib/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/etc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/include/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/asm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/event/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/event/compat/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/event/compat/sys/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/util/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/util/keyval/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/mca/base/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/tools/wrappers/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/tools/wrappers/opalcc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/tools/wrappers/opalc++-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/include/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/etc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/console/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orted/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orteprobe/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orterun/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/wrappers/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/wrappers/ortecc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/wrappers/ortec++-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orte-ps/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orte-clean/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/etc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/include/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/include/mpif.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/include/mpif-config.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/datatype/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/debuggers/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/c/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/c/profile/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/cxx/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/f77/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/f77/profile/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/f90/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/f90/fortran_kinds.sh
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/f90/fortran_sizes.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/f90/scripts/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/tools/ompi_info/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/tools/wrappers/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/tools/wrappers/mpicc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/tools/wrappers/mpic++-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/tools/wrappers/mpif77-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/tools/wrappers/mpif90-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/tools/ortetools/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/event/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/asm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/class/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/memory/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/support/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/threads/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/peruse/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/datatype/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/include/opal_config.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/include/orte_config.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/include/ompi_config.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: error: cannot find input file: ompi/include/
</span><br>
<span class="quotelev2">&gt;&gt; ompi_config.h.in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:03:04
</span><br>
<span class="quotelev2">&gt;&gt; &quot;,&quot;&quot;,&quot; font-family:Courier,monospace&quot;)&quot; class=&quot;lgray_ln&quot;&gt;[i]
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.9-34.ELsmp.perfctrOpen MPI trunk1.3a1r12408IU
</span><br>
<span class="quotelev2">&gt;&gt; - Thor - TESTINGgnu3.4.601
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; FCFLAGS=-m64 FFLAGS=-m64 CFLAGS=-m64 CXXFLAGS=-m64 --with-wrapper-
</span><br>
<span class="quotelev2">&gt;&gt; cflags=-m64 --with-wrapper-cxxflags=-m64 --with-wrapper-fflags=-m64
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-fcflags=-m64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo rml_oob_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT rml_oob_component.lo -MD -MP -MF $depbase.Tpo
</span><br>
<span class="quotelev2">&gt;&gt; -c -o rml_oob_component.lo rml_oob_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT rml_oob_component.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/rml_oob_component.Tpo -c rml_oob_component.c -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; -DPIC -o .libs/rml_oob_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_rml_oob.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version rml_oob_component.lo /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/
</span><br>
<span class="quotelev2">&gt;&gt; liborte.la /san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/rml_oob_component.o -Wl,-rpath -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/
</span><br>
<span class="quotelev2">&gt;&gt; parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/orte/.libs -Wl,-rpath -Wl,/
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/opal/.libs -Wl,-rpath -Wl,/san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/install/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/
</span><br>
<span class="quotelev2">&gt;&gt; parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_rml_oob.so -o .libs/mca_rml_oob.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_rml_oob.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_rml_oob.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_rml_oob.la mca_rml_oob.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/rml/
</span><br>
<span class="quotelev2">&gt;&gt; oob
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/sds/env
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; env
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_env_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_env_component.lo -MD -MP -MF $depbase.Tpo
</span><br>
<span class="quotelev2">&gt;&gt; -c -o sds_env_component.lo sds_env_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_env_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_env_module.lo -MD -MP -MF $depbase.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; -o sds_env_module.lo sds_env_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_env_component.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/sds_env_component.Tpo -c sds_env_component.c -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; -DPIC -o .libs/sds_env_component.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_env_module.lo -MD -
</span><br>
<span class="quotelev2">&gt;&gt; MP -MF .deps/sds_env_module.Tpo -c sds_env_module.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/sds_env_module.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_sds_env.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version sds_env_component.lo sds_env_module.lo /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/liborte.la /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/sds_env_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; sds_env_module.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/.libs -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs -Wl,-rpath -Wl,/
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib -L/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_sds_env.so -o .libs/mca_sds_env.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_sds_env.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_sds_env.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_sds_env.la mca_sds_env.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; env
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/sds/seed
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; seed
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_seed_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_seed_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o sds_seed_component.lo sds_seed_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_seed_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_seed_module.lo -MD -MP -MF $depbase.Tpo -
</span><br>
<span class="quotelev2">&gt;&gt; c -o sds_seed_module.lo sds_seed_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_seed_module.lo -MD -
</span><br>
<span class="quotelev2">&gt;&gt; MP -MF .deps/sds_seed_module.Tpo -c sds_seed_module.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/sds_seed_module.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_seed_component.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/sds_seed_component.Tpo -c sds_seed_component.c -
</span><br>
<span class="quotelev2">&gt;&gt; fPIC -DPIC -o .libs/sds_seed_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_sds_seed.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version sds_seed_component.lo sds_seed_module.lo /san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/liborte.la /san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/sds_seed_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; sds_seed_module.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/install/lib -L/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_sds_seed.so -o .libs/mca_sds_seed.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_sds_seed.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_sds_seed.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_sds_seed.la mca_sds_seed.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; seed
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/sds/singleton
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; singleton
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_singleton_component.lo | sed s|[^/]*$|.deps/&amp;|;s|
</span><br>
<span class="quotelev2">&gt;&gt; \.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_singleton_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o sds_singleton_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; sds_singleton_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_singleton_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_singleton_module.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o sds_singleton_module.lo sds_singleton_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_singleton_module.lo
</span><br>
<span class="quotelev2">&gt;&gt; -MD -MP -MF .deps/sds_singleton_module.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; sds_singleton_module.c -fPIC -DPIC -o .libs/sds_singleton_module.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; sds_singleton_component.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; sds_singleton_component.Tpo -c sds_singleton_component.c -fPIC -
</span><br>
<span class="quotelev2">&gt;&gt; DPIC -o .libs/sds_singleton_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_sds_singleton.la -rpath /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/install/lib/openmpi -
</span><br>
<span class="quotelev2">&gt;&gt; module -avoid-version sds_singleton_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; sds_singleton_module.lo /san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/
</span><br>
<span class="quotelev2">&gt;&gt; liborte.la /san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/sds_singleton_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; sds_singleton_module.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/install/lib -L/san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/opal/.libs /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_sds_singleton.so -o .libs/mca_sds_singleton.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_sds_singleton.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_sds_singleton.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_sds_singleton.la mca_sds_singleton.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; singleton
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/sds/pipe
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; pipe
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_pipe_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_pipe_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o sds_pipe_component.lo sds_pipe_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_pipe_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_pipe_module.lo -MD -MP -MF $depbase.Tpo -
</span><br>
<span class="quotelev2">&gt;&gt; c -o sds_pipe_module.lo sds_pipe_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_pipe_module.lo -MD -
</span><br>
<span class="quotelev2">&gt;&gt; MP -MF .deps/sds_pipe_module.Tpo -c sds_pipe_module.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/sds_pipe_module.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_pipe_component.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/sds_pipe_component.Tpo -c sds_pipe_component.c -
</span><br>
<span class="quotelev2">&gt;&gt; fPIC -DPIC -o .libs/sds_pipe_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_sds_pipe.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version sds_pipe_component.lo sds_pipe_module.lo /san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/liborte.la /san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/sds_pipe_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; sds_pipe_module.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/install/lib -L/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_sds_pipe.so -o .libs/mca_sds_pipe.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_sds_pipe.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_sds_pipe.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_sds_pipe.la mca_sds_pipe.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; pipe
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/sds/slurm
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; slurm
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_slurm_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_slurm_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o sds_slurm_component.lo sds_slurm_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_slurm_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_slurm_module.lo -MD -MP -MF $depbase.Tpo -
</span><br>
<span class="quotelev2">&gt;&gt; c -o sds_slurm_module.lo sds_slurm_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_slurm_module.lo -MD
</span><br>
<span class="quotelev2">&gt;&gt; -MP -MF .deps/sds_slurm_module.Tpo -c sds_slurm_module.c -fPIC -
</span><br>
<span class="quotelev2">&gt;&gt; DPIC -o .libs/sds_slurm_module.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_slurm_component.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/sds_slurm_component.Tpo -c sds_slurm_component.c -
</span><br>
<span class="quotelev2">&gt;&gt; fPIC -DPIC -o .libs/sds_slurm_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_sds_slurm.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version sds_slurm_component.lo sds_slurm_module.lo /san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/liborte.la /san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/sds_slurm_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; sds_slurm_module.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/install/lib -L/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_sds_slurm.so -o .libs/mca_sds_slurm.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_sds_slurm.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_sds_slurm.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_sds_slurm.la mca_sds_slurm.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; slurm
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools/console
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/tools/
</span><br>
<span class="quotelev2">&gt;&gt; console
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo orteconsole.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if gcc -DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../ompi/include -I../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT orteconsole.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; orteconsole.o orteconsole.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -m64
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; orteconsole orteconsole.o ../../../orte/liborte.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -o .libs/orteconsole orteconsole.o -Wl,--export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic  ../../../orte/.libs/liborte.so -pthread /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating orteconsole
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/tools/
</span><br>
<span class="quotelev2">&gt;&gt; console
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools/orted
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/tools/
</span><br>
<span class="quotelev2">&gt;&gt; orted
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `../../../config/
</span><br>
<span class="quotelev2">&gt;&gt; c_weak_symbols.m4, needed by `Makefile.in. Stop.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/tools/
</span><br>
<span class="quotelev2">&gt;&gt; orted
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:05:22
</span><br>
<span class="quotelev2">&gt;&gt; &quot;,&quot;&quot;,&quot; font-family:Courier,monospace&quot;)&quot; class=&quot;lgray_ln&quot;&gt;[i]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Details of MPI Installs that failed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HardwareOsOs verMpiMpi revClusterCompilerCompiler verMPI Install[1] 
</span><br>
<span class="quotelev2">&gt;&gt; [i]
</span><br>
<span class="quotelev2">&gt;&gt; PassFail
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sun4uSunOSSunOS 5.10Open MPI trunk1.3a1r12408Sun 32-bitsun5.701[i]
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; --enable-shared --enable-mpi-f90 --with-mpi-f90-size=trivial
</span><br>
<span class="quotelev2">&gt;&gt; CC=cc CXX=CC FC=f90 F77=f77
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS=-xarch=v8plusa -xO5 -xmemalign=8s
</span><br>
<span class="quotelev2">&gt;&gt; CXXFLAGS=-xarch=v8plusa -xO5 -xmemalign=8s
</span><br>
<span class="quotelev2">&gt;&gt; FFLAGS=-xarch=v8plusa -xO5 -xmemalign=8s
</span><br>
<span class="quotelev2">&gt;&gt; FCFLAGS=-xarch=v8plusa -xO5 -xmemalign=8s -KPIC
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../opal/libltdl -I../../.. -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -c base/io_base_close.c -KPIC -
</span><br>
<span class="quotelev2">&gt;&gt; DPIC -o base/.libs/io_base_close.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../opal/libltdl -I../../.. -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -c base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_component_list.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_component_list.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../opal/libltdl -I../../.. -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -c base/io_base_delete.c -KPIC
</span><br>
<span class="quotelev2">&gt;&gt; -DPIC -o base/.libs/io_base_delete.o
</span><br>
<span class="quotelev2">&gt;&gt; source=base/io_base_find_available.c object=base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_find_available.lo libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; opal/libltdl -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c -o base/io_base_find_available.lo base/io_base_find_available.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/io_base_open.c object=base/io_base_open.lo libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; opal/libltdl -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c -o base/io_base_open.lo base/io_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/io_base_request.c object=base/io_base_request.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; opal/libltdl -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c -o base/io_base_request.lo base/io_base_request.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/io_base_register_datarep.c object=base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_register_datarep.lo libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; opal/libltdl -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c -o base/io_base_register_datarep.lo base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_register_datarep.c
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../opal/libltdl -I../../.. -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -c base/io_base_request.c -
</span><br>
<span class="quotelev2">&gt;&gt; KPIC -DPIC -o base/.libs/io_base_request.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../opal/libltdl -I../../.. -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -c base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_find_available.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_find_available.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../opal/libltdl -I../../.. -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -c base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_register_datarep.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_register_datarep.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../opal/libltdl -I../../.. -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -c base/io_base_open.c -KPIC -
</span><br>
<span class="quotelev2">&gt;&gt; DPIC -o base/.libs/io_base_open.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=link cc -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; libmca_io.la base/io_base_component_list.lo base/io_base_close.lo
</span><br>
<span class="quotelev2">&gt;&gt; base/io_base_delete.lo base/io_base_file_select.lo base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_find_available.lo base/io_base_open.lo base/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_request.lo base/io_base_register_datarep.lo -lsocket -lnsl -
</span><br>
<span class="quotelev2">&gt;&gt; lrt -lm -lthread
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ar cru .libs/libmca_io.a base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_component_list.o base/.libs/io_base_close.o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_delete.o base/.libs/io_base_file_select.o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_find_available.o base/.libs/io_base_open.o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; io_base_request.o base/.libs/io_base_register_datarep.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ranlib .libs/libmca_io.a
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating libmca_io.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f libmca_io.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; libmca_io.la libmca_io.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/io
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/mpool
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/mpool
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mpool_base_open.c object=base/mpool_base_open.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_open.lo base/mpool_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mpool_base_close.c object=base/mpool_base_close.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_close.lo base/mpool_base_close.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mpool_base_init.c object=base/mpool_base_init.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_init.lo base/mpool_base_init.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mpool_base_lookup.c object=base/mpool_base_lookup.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_lookup.lo base/mpool_base_lookup.c
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mpool_base_open.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_open.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mpool_base_init.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_init.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mpool_base_lookup.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_lookup.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mpool_base_close.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_close.o
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mpool_base_alloc.c object=base/mpool_base_alloc.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_alloc.lo base/mpool_base_alloc.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mpool_base_mem_cb.c object=base/mpool_base_mem_cb.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_mem_cb.lo base/mpool_base_mem_cb.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mpool_base_tree.c object=base/mpool_base_tree.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_tree.lo base/mpool_base_tree.c
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mpool_base_alloc.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_alloc.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mpool_base_mem_cb.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_mem_cb.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mpool_base_tree.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_tree.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=link cc -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; libmca_mpool.la base/mpool_base_open.lo base/mpool_base_close.lo
</span><br>
<span class="quotelev2">&gt;&gt; base/mpool_base_init.lo base/mpool_base_lookup.lo base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_alloc.lo base/mpool_base_mem_cb.lo base/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_tree.lo -lsocket -lnsl -lrt -lm -lthread
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ar cru .libs/libmca_mpool.a base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_open.o base/.libs/mpool_base_close.o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_init.o base/.libs/mpool_base_lookup.o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_alloc.o base/.libs/mpool_base_mem_cb.o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_tree.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ranlib .libs/libmca_mpool.a
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating libmca_mpool.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f libmca_mpool.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; libmca_mpool.la libmca_mpool.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/mpool
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/mtl
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/mtl
</span><br>
<span class="quotelev2">&gt;&gt; source=base/mtl_base_component.c object=base/mtl_base_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; mtl_base_component.lo base/mtl_base_component.c
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/mtl_base_component.c -KPIC -DPIC -o base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mtl_base_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=link cc -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; libmca_mtl.la base/mtl_base_component.lo -lsocket -lnsl -lrt -lm -
</span><br>
<span class="quotelev2">&gt;&gt; lthread
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ar cru .libs/libmca_mtl.a base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; mtl_base_component.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ranlib .libs/libmca_mtl.a
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating libmca_mtl.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f libmca_mtl.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; libmca_mtl.la libmca_mtl.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/mtl
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/osc
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/osc
</span><br>
<span class="quotelev2">&gt;&gt; source=base/osc_base_close.c object=base/osc_base_close.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; osc_base_close.lo base/osc_base_close.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/osc_base_open.c object=base/osc_base_open.lo  
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; osc_base_open.lo base/osc_base_open.c
</span><br>
<span class="quotelev2">&gt;&gt; source=base/osc_base_init.c object=base/osc_base_init.lo  
</span><br>
<span class="quotelev2">&gt;&gt; libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=compile cc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../ompi/include -I../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -mt -c -o base/
</span><br>
<span class="quotelev2">&gt;&gt; osc_base_init.lo base/osc_base_init.c
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/osc_base_close.c -KPIC -DPIC -o base/.libs/ 
</span><br>
<span class="quotelev2">&gt;&gt; osc_base_close.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/osc_base_init.c -KPIC -DPIC -o base/.libs/osc_base_init.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: cc -DHAVE_CONFIG_H -I. -I. -I../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../orte/include -I../../../ompi/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../.. -DNDEBUG -xarch=v8plusa -xO5 -xmemalign=8s -
</span><br>
<span class="quotelev2">&gt;&gt; mt -c base/osc_base_open.c -KPIC -DPIC -o base/.libs/osc_base_open.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC --mode=link cc -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; xarch=v8plusa -xO5 -xmemalign=8s -mt -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; libmca_osc.la base/osc_base_close.lo base/osc_base_open.lo base/
</span><br>
<span class="quotelev2">&gt;&gt; osc_base_init.lo -lsocket -lnsl -lrt -lm -lthread
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ar cru .libs/libmca_osc.a base/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; osc_base_close.o base/.libs/osc_base_open.o base/.libs/ 
</span><br>
<span class="quotelev2">&gt;&gt; osc_base_init.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ranlib .libs/libmca_osc.a
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating libmca_osc.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f libmca_osc.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; libmca_osc.la libmca_osc.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/osc
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/pml
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/pml
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `all. Stop.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi/mca/pml
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/opt/mtt/sparc/32/trunk/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/solaris_sparc_32/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/ompi
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:19:51
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.11-7.BProcPerfctr_FC3smpOpen MPI
</span><br>
<span class="quotelev2">&gt;&gt; v1.11.1.3a1r12397lanl_flash_64_v1.1pgipgf90_6.1-3_64-
</span><br>
<span class="quotelev2">&gt;&gt; bit_on_x86_linux01[i]
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; CC=/usr/bin/gcc CXX=/usr/bin/g++ F77=/opt/PGI/pgi_6.1-3/
</span><br>
<span class="quotelev2">&gt;&gt; linux86-64/6.1/bin/pgf90 F90=/opt/PGI/pgi_6.1-3/linux86-64/6.1/bin/
</span><br>
<span class="quotelev2">&gt;&gt; pgf90 FC=/opt/PGI/pgi_6.1-3/linux86-64/6.1/bin/pgf90 --enable-picky
</span><br>
<span class="quotelev2">&gt;&gt; --enable-debug --with-io-romio-flags=--with-file-
</span><br>
<span class="quotelev2">&gt;&gt; system=ufs,nfs,panfs --prefix=/usr/projects/openmpi/opt/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.2rc1-x86_64-pgf90_6.1-3_64-bit_on_Linux --with-gm=/usr
</span><br>
<span class="quotelev2">&gt;&gt; LDFLAGS=-L/usr/lib64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT oob_tcp_peer.lo -MD -MP -MF .deps/oob_tcp_peer.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_peer.c -fPIC -DPIC -o .libs/oob_tcp_peer.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo oob_tcp_ping.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_ping.lo -MD -MP -MF $depbase.Tpo -c -o oob_tcp_ping.lo
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_ping.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT oob_tcp_ping.lo -MD -MP -MF .deps/oob_tcp_ping.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_ping.c -fPIC -DPIC -o .libs/oob_tcp_ping.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo oob_tcp_recv.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_recv.lo -MD -MP -MF $depbase.Tpo -c -o oob_tcp_recv.lo
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_recv.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT oob_tcp_recv.lo -MD -MP -MF .deps/oob_tcp_recv.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_recv.c -fPIC -DPIC -o .libs/oob_tcp_recv.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo oob_tcp_send.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_send.lo -MD -MP -MF $depbase.Tpo -c -o oob_tcp_send.lo
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_send.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT oob_tcp_send.lo -MD -MP -MF .deps/oob_tcp_send.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_send.c -fPIC -DPIC -o .libs/oob_tcp_send.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link /usr/bin/gcc -g3 -
</span><br>
<span class="quotelev2">&gt;&gt; Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -
</span><br>
<span class="quotelev2">&gt;&gt; Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-
</span><br>
<span class="quotelev2">&gt;&gt; declaration -fno-strict-aliasing -pthread -export-dynamic -L/usr/
</span><br>
<span class="quotelev2">&gt;&gt; lib64 -o mca_oob_tcp.la -rpath /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version oob_tcp.lo oob_tcp_addr.lo oob_tcp_msg.lo
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_peer.lo oob_tcp_ping.lo oob_tcp_recv.lo oob_tcp_send.lo /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/liborte.la /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/libopal.la -lnsl -lutil -lm -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -shared .libs/oob_tcp.o .libs/oob_tcp_addr.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_msg.o .libs/oob_tcp_peer.o .libs/oob_tcp_ping.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_recv.o .libs/oob_tcp_send.o -Wl,--rpath -Wl,/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/orte/.libs -Wl,--rpath -Wl,/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs -Wl,--rpath -Wl,/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/install/lib -L/
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs -L/usr/lib64 /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs/liborte.so /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs/libopal.so -lnsl -lutil -lm -lpthread -pthread -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; soname -Wl,mca_oob_tcp.so -o .libs/mca_oob_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt; creating mca_oob_tcp.la
</span><br>
<span class="quotelev2">&gt;&gt; (cd .libs &amp;&amp; rm -f mca_oob_tcp.la &amp;&amp; ln -s ../mca_oob_tcp.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp.la)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/oob/tcp
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/pls/bproc
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/bproc
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_bproc.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc.lo -MD -MP -MF $depbase.Tpo -c -o pls_bproc.lo
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; mkdir .libs
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_bproc.lo -MD -MP -MF .deps/pls_bproc.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc.c -fPIC -DPIC -o .libs/pls_bproc.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_bproc_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_component.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_component.lo pls_bproc_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_bproc_component.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_component.Tpo -c pls_bproc_component.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/pls_bproc_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link /usr/bin/gcc -g3 -
</span><br>
<span class="quotelev2">&gt;&gt; Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -
</span><br>
<span class="quotelev2">&gt;&gt; Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-
</span><br>
<span class="quotelev2">&gt;&gt; declaration -fno-strict-aliasing -pthread -export-dynamic -L/usr/
</span><br>
<span class="quotelev2">&gt;&gt; lib64 -o mca_pls_bproc.la -rpath /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version pls_bproc.lo pls_bproc_component.lo -lbproc /usr/
</span><br>
<span class="quotelev2">&gt;&gt; projects/openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.1.3a1r12397/orte/liborte.la /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/libopal.la -lnsl -lutil -lm -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -shared .libs/pls_bproc.o .libs/pls_bproc_component.o -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib -L/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs -L/usr/lib64 -lbproc /usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/orte/.libs/liborte.so /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs/libopal.so -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; lpthread -pthread -Wl,-soname -Wl,mca_pls_bproc.so -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_bproc.so
</span><br>
<span class="quotelev2">&gt;&gt; creating mca_pls_bproc.la
</span><br>
<span class="quotelev2">&gt;&gt; (cd .libs &amp;&amp; rm -f mca_pls_bproc.la &amp;&amp; ln -s ../mca_pls_bproc.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_bproc.la)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/bproc
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/pls/bproc_orted
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/bproc_orted
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_bproc_orted.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/src/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_bproc_orted.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_orted.lo pls_bproc_orted.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; mkdir .libs
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/src/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_bproc_orted.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_orted.Tpo -c pls_bproc_orted.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_orted.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_bproc_orted_component.lo | sed s|[^/]*$|.deps/
</span><br>
<span class="quotelev2">&gt;&gt; &amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/src/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_bproc_orted_component.lo -MD -MP -MF $depbase.Tpo -
</span><br>
<span class="quotelev2">&gt;&gt; c -o pls_bproc_orted_component.lo pls_bproc_orted_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/src/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_bproc_orted_component.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_orted_component.Tpo -c pls_bproc_orted_component.c -fPIC -
</span><br>
<span class="quotelev2">&gt;&gt; DPIC -o .libs/pls_bproc_orted_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link /usr/bin/gcc -g3 -
</span><br>
<span class="quotelev2">&gt;&gt; Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -
</span><br>
<span class="quotelev2">&gt;&gt; Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-
</span><br>
<span class="quotelev2">&gt;&gt; declaration -fno-strict-aliasing -pthread -export-dynamic -L/usr/
</span><br>
<span class="quotelev2">&gt;&gt; lib64 -o mca_pls_bproc_orted.la -rpath /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/install/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; -module -avoid-version pls_bproc_orted.lo
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_orted_component.lo -lbproc /usr/projects/openmpi/working/
</span><br>
<span class="quotelev2">&gt;&gt; mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/liborte.la /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/libopal.la -lnsl -lutil -lm -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -shared .libs/pls_bproc_orted.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc_orted_component.o -Wl,--rpath -Wl,/usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/orte/.libs -Wl,--rpath -Wl,/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs -Wl,--rpath -Wl,/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/install/lib -L/
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs -L/usr/lib64 -lbproc /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs/liborte.so /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs/libopal.so -lnsl -lutil -lm -lpthread -pthread -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; soname -Wl,mca_pls_bproc_orted.so -o .libs/mca_pls_bproc_orted.so
</span><br>
<span class="quotelev2">&gt;&gt; creating mca_pls_bproc_orted.la
</span><br>
<span class="quotelev2">&gt;&gt; (cd .libs &amp;&amp; rm -f mca_pls_bproc_orted.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_bproc_orted.la mca_pls_bproc_orted.la)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/bproc_orted
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/pls/fork
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/fork
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_fork_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_component.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_component.lo pls_fork_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; mkdir .libs
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_fork_component.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_component.Tpo -c pls_fork_component.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_component.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_fork_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_module.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_module.lo pls_fork_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_fork_module.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_module.Tpo -c pls_fork_module.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_module.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link /usr/bin/gcc -g3 -
</span><br>
<span class="quotelev2">&gt;&gt; Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -
</span><br>
<span class="quotelev2">&gt;&gt; Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-
</span><br>
<span class="quotelev2">&gt;&gt; declaration -fno-strict-aliasing -pthread -export-dynamic -L/usr/
</span><br>
<span class="quotelev2">&gt;&gt; lib64 -o mca_pls_fork.la -rpath /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version pls_fork_component.lo pls_fork_module.lo /usr/
</span><br>
<span class="quotelev2">&gt;&gt; projects/openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.1.3a1r12397/orte/liborte.la /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/libopal.la -lnsl -lutil -lm -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -shared .libs/pls_fork_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_fork_module.o -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib -L/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs -L/usr/lib64 /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/orte/.libs/liborte.so /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs/libopal.so -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; lpthread -pthread -Wl,-soname -Wl,mca_pls_fork.so -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_fork.so
</span><br>
<span class="quotelev2">&gt;&gt; creating mca_pls_fork.la
</span><br>
<span class="quotelev2">&gt;&gt; (cd .libs &amp;&amp; rm -f mca_pls_fork.la &amp;&amp; ln -s ../mca_pls_fork.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_fork.la)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/fork
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/pls/rsh
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/rsh
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_rsh_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_component.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_component.lo pls_rsh_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; mkdir .libs
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_rsh_component.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_component.Tpo -c pls_rsh_component.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_component.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_rsh_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_module.lo -MD -MP -MF $depbase.Tpo -c -o pls_rsh_module.lo
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_rsh_module.lo -MD -MP -MF .deps/pls_rsh_module.Tpo
</span><br>
<span class="quotelev2">&gt;&gt; -c pls_rsh_module.c -fPIC -DPIC -o .libs/pls_rsh_module.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link /usr/bin/gcc -g3 -
</span><br>
<span class="quotelev2">&gt;&gt; Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -
</span><br>
<span class="quotelev2">&gt;&gt; Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-
</span><br>
<span class="quotelev2">&gt;&gt; declaration -fno-strict-aliasing -pthread -export-dynamic -L/usr/
</span><br>
<span class="quotelev2">&gt;&gt; lib64 -o mca_pls_rsh.la -rpath /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version pls_rsh_component.lo pls_rsh_module.lo /usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/orte/liborte.la /usr/projects/openmpi/working/
</span><br>
<span class="quotelev2">&gt;&gt; mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/libopal.la -lnsl -lutil -lm -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -shared .libs/pls_rsh_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_module.o -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib -L/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs -L/usr/lib64 /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/orte/.libs/liborte.so /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs/libopal.so -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; lpthread -pthread -Wl,-soname -Wl,mca_pls_rsh.so -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt; creating mca_pls_rsh.la
</span><br>
<span class="quotelev2">&gt;&gt; (cd .libs &amp;&amp; rm -f mca_pls_rsh.la &amp;&amp; ln -s ../mca_pls_rsh.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_rsh.la)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/rsh
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/pls/slurm
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/orte
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/slurm
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_slurm_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_component.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_component.lo pls_slurm_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; mkdir .libs
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_slurm_component.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_component.Tpo -c pls_slurm_component.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/pls_slurm_component.o
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pls_slurm_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_module.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_module.lo pls_slurm_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; ompi/include -I../../../.. -g3 -Wall -Wundef -Wno-long-long -Wsign-
</span><br>
<span class="quotelev2">&gt;&gt; compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -
</span><br>
<span class="quotelev2">&gt;&gt; pedantic -Werror-implicit-function-declaration -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT pls_slurm_module.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_module.Tpo -c pls_slurm_module.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_module.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link /usr/bin/gcc -g3 -
</span><br>
<span class="quotelev2">&gt;&gt; Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -
</span><br>
<span class="quotelev2">&gt;&gt; Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-
</span><br>
<span class="quotelev2">&gt;&gt; declaration -fno-strict-aliasing -pthread -export-dynamic -L/usr/
</span><br>
<span class="quotelev2">&gt;&gt; lib64 -o mca_pls_slurm.la -rpath /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version pls_slurm_component.lo pls_slurm_module.lo /usr/
</span><br>
<span class="quotelev2">&gt;&gt; projects/openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.1.3a1r12397/orte/liborte.la /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/libopal.la -lnsl -lutil -lm -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc -shared .libs/pls_slurm_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; pls_slurm_module.o -Wl,--rpath -Wl,/usr/projects/openmpi/working/
</span><br>
<span class="quotelev2">&gt;&gt; mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; opal/.libs -Wl,--rpath -Wl,/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/install/lib -L/usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs -L/usr/lib64 /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/orte/.libs/liborte.so /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.1_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.1/flash64_pgi_warnings/1.1.3a1r12397/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.3a1r12397/opal/.libs/libopal.so -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; lpthread -pthread -Wl,-soname -Wl,mca_pls_slurm.so -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_slurm.so
</span><br>
<span class="quotelev2">&gt;&gt; creating mca_pls_slurm.la
</span><br>
<span class="quotelev2">&gt;&gt; (cd .libs &amp;&amp; rm -f mca_pls_slurm.la &amp;&amp; ln -s ../mca_pls_slurm.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_slurm.la)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.1_64_110206/installs/ompi-nightly-v1.1/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.1.3a1r12397/source/openmpi-1.1.3a1r12397/
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/pls/slurm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; --- make all stderr ---
</span><br>
<span class="quotelev2">&gt;&gt; keyval_lex.c:1667: warning: yy_flex_realloc defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; show_help_lex.c:1609: warning: yy_flex_realloc defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc.c: In function `orte_pls_bproc_check_node_state:
</span><br>
<span class="quotelev2">&gt;&gt; pls_bproc.c:690: warning: unused variable `item
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh: line 1: 16202 Terminated ( cd $subdir &amp;&amp; make  
</span><br>
<span class="quotelev2">&gt;&gt; $local_target )
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:09:28
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.11-7.BProcPerfctr_FC3smpOpen MPI
</span><br>
<span class="quotelev2">&gt;&gt; v1.21.2a1r12413lanl_flash_64_v1.2pgipgf90_6.1-3_64-
</span><br>
<span class="quotelev2">&gt;&gt; bit_on_x86_linux01[i]
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; CC=/usr/bin/gcc CXX=/usr/bin/g++ F77=/opt/PGI/pgi_6.1-3/
</span><br>
<span class="quotelev2">&gt;&gt; linux86-64/6.1/bin/pgf90 F90=/opt/PGI/pgi_6.1-3/linux86-64/6.1/bin/
</span><br>
<span class="quotelev2">&gt;&gt; pgf90 FC=/opt/PGI/pgi_6.1-3/linux86-64/6.1/bin/pgf90 --enable-picky
</span><br>
<span class="quotelev2">&gt;&gt; --enable-debug --with-io-romio-flags=--with-file-
</span><br>
<span class="quotelev2">&gt;&gt; system=ufs,nfs,panfs --prefix=/usr/projects/openmpi/opt/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.2rc1-x86_64-pgf90_6.1-3_64-bit_on_Linux --with-gm=/usr
</span><br>
<span class="quotelev2">&gt;&gt; LDFLAGS=-L/usr/lib64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/bin || mkdir -p -- /usr/
</span><br>
<span class="quotelev2">&gt;&gt; projects/openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/
</span><br>
<span class="quotelev2">&gt;&gt; bin
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../libtool --mode=install /usr/bin/install -c orted /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/bin/orted
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: /usr/bin/install -c .libs/orted /usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/bin/orted
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/share/openmpi || mkdir -p
</span><br>
<span class="quotelev2">&gt;&gt; -- /usr/projects/openmpi/working/mtt/ 
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/share/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 help-orted.txt /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/share/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; help-orted.txt
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/orted
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/orted
</span><br>
<span class="quotelev2">&gt;&gt; Making install in tools/orterun
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/orterun
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/orterun
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/bin || mkdir -p -- /usr/
</span><br>
<span class="quotelev2">&gt;&gt; projects/openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/
</span><br>
<span class="quotelev2">&gt;&gt; bin
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../libtool --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev2">&gt;&gt; orterun /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/bin/orterun
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: /usr/bin/install -c .libs/orterun /usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/bin/ 
</span><br>
<span class="quotelev2">&gt;&gt; orterun
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/share/openmpi || mkdir -p
</span><br>
<span class="quotelev2">&gt;&gt; -- /usr/projects/openmpi/working/mtt/ 
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/share/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 help-orterun.txt /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/share/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; help-orterun.txt
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/man/man1 || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/man/man1
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 ./orterun.1 /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/man/man1/
</span><br>
<span class="quotelev2">&gt;&gt; orterun.1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/orterun
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/orterun
</span><br>
<span class="quotelev2">&gt;&gt; Making install in tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; make install-exec-hook
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; (cd /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/bin; rm -f ortecc; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper ortecc)
</span><br>
<span class="quotelev2">&gt;&gt; (cd /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/bin; rm -f ortec++; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper ortec++)
</span><br>
<span class="quotelev2">&gt;&gt; (cd /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/bin; rm -f orteCC; ln -s
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper orteCC)
</span><br>
<span class="quotelev2">&gt;&gt; (cd /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/share/openmpi; rm -f
</span><br>
<span class="quotelev2">&gt;&gt; orteCC-wrapper-data.txt; ln -s ortec++-wrapper-data.txt orteCC-
</span><br>
<span class="quotelev2">&gt;&gt; wrapper-data.txt)
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/share/openmpi || mkdir -p
</span><br>
<span class="quotelev2">&gt;&gt; -- /usr/projects/openmpi/working/mtt/ 
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/share/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 ortecc-wrapper-data.txt /usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/share/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/ortecc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 ortec++-wrapper-data.txt /usr/projects/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/share/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/ortec++-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; make install-data-hook
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; (cd /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/man/man1; rm -f ortecc.1;
</span><br>
<span class="quotelev2">&gt;&gt; ln -s opalcc.1 ortecc.1)
</span><br>
<span class="quotelev2">&gt;&gt; (cd /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/man/man1; rm -f ortec++.1;
</span><br>
<span class="quotelev2">&gt;&gt; ln -s opalcc.1 ortec++.1)
</span><br>
<span class="quotelev2">&gt;&gt; (cd /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/man/man1; rm -f orteCC.1;
</span><br>
<span class="quotelev2">&gt;&gt; ln -s opalcc.1 orteCC.1)
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte/
</span><br>
<span class="quotelev2">&gt;&gt; tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/orte
</span><br>
<span class="quotelev2">&gt;&gt; Making install in ompi
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi
</span><br>
<span class="quotelev2">&gt;&gt; Making install in include
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; include
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; include
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Nothing to be done for `install-exec-am.
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 mpif-common.h /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/include/mpif-
</span><br>
<span class="quotelev2">&gt;&gt; common.h
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 mpi.h /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include/mpi.h
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 mpif.h /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include/mpif.h
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install -c -m 644 mpif-config.h /usr/projects/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; working/mtt/daily_builds_myrinet_v1.2_64_110206/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/include/mpif-
</span><br>
<span class="quotelev2">&gt;&gt; config.h
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; include
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; include
</span><br>
<span class="quotelev2">&gt;&gt; Making install in datatype
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; datatype
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; datatype
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Nothing to be done for `install-exec-am.
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; datatype
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; datatype
</span><br>
<span class="quotelev2">&gt;&gt; Making install in debuggers
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; debuggers
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; debuggers
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Nothing to be done for `install-exec-am.
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/lib/openmpi || mkdir -p
</span><br>
<span class="quotelev2">&gt;&gt; -- /usr/projects/openmpi/working/mtt/ 
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev2">&gt;&gt; libompitv.la /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/lib/openmpi/libompitv.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: /usr/bin/install -c .libs/libompitv.so /usr/
</span><br>
<span class="quotelev2">&gt;&gt; projects/openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/
</span><br>
<span class="quotelev2">&gt;&gt; lib/openmpi/libompitv.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: /usr/bin/install -c .libs/libompitv.lai /usr/
</span><br>
<span class="quotelev2">&gt;&gt; projects/openmpi/working/mtt/daily_builds_myrinet_v1.2_64_110206/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.2/flash64_pgi_warnings/1.2a1r12413/install/
</span><br>
<span class="quotelev2">&gt;&gt; lib/openmpi/libompitv.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: finish: PATH=/opt/PGI/pgi_6.1-3/linux86-64/6.1/bin:/users/
</span><br>
<span class="quotelev2">&gt;&gt; jbarker/subversion_64/bin:/users/jbarker/subversion_32/bin:/users/
</span><br>
<span class="quotelev2">&gt;&gt; jbarker/subversion_64/bin:/users/jbarker/data_collectors/subversion/
</span><br>
<span class="quotelev2">&gt;&gt; subversion-1.2.3/subversion/clients/cmdline:/users/jbarker/
</span><br>
<span class="quotelev2">&gt;&gt; data_collectors/ompi/opt/bin:/usr/projects/shavano/bin:/users/
</span><br>
<span class="quotelev2">&gt;&gt; jbarker/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/lsf/
</span><br>
<span class="quotelev2">&gt;&gt; bin:/usr/X11R6/bin:/sbin ldconfig -n /usr/projects/openmpi/working/
</span><br>
<span class="quotelev2">&gt;&gt; mtt/daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; Libraries have been installed in:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you ever happen to want to link against installed libraries
</span><br>
<span class="quotelev2">&gt;&gt; in a given directory, LIBDIR, you must either use libtool, and
</span><br>
<span class="quotelev2">&gt;&gt; specify the full pathname of the library, or use the `-LLIBDIR
</span><br>
<span class="quotelev2">&gt;&gt; flag during linking and do at least one of the following:
</span><br>
<span class="quotelev2">&gt;&gt; - add LIBDIR to the `LD_LIBRARY_PATH environment variable
</span><br>
<span class="quotelev2">&gt;&gt; during execution
</span><br>
<span class="quotelev2">&gt;&gt; - add LIBDIR to the `LD_RUN_PATH environment variable
</span><br>
<span class="quotelev2">&gt;&gt; during linking
</span><br>
<span class="quotelev2">&gt;&gt; - use the `-Wl,-rpath -Wl,LIBDIR linker flag
</span><br>
<span class="quotelev2">&gt;&gt; - have your system administrator add LIBDIR to `/etc/ld.so.conf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See any operating system documentation about shared libraries for
</span><br>
<span class="quotelev2">&gt;&gt; more information, such as the ld(1) and ld.so(8) manual pages.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; test -z /usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include || mkdir -p -- /
</span><br>
<span class="quotelev2">&gt;&gt; usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/install/include
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; debuggers
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi/
</span><br>
<span class="quotelev2">&gt;&gt; debuggers
</span><br>
<span class="quotelev2">&gt;&gt; Making install in etc
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh: line 1: 14103 Terminated make $local_target
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/usr/projects/openmpi/working/mtt/
</span><br>
<span class="quotelev2">&gt;&gt; daily_builds_myrinet_v1.2_64_110206/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; flash64_pgi_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/ompi
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; --- make all stderr ---
</span><br>
<span class="quotelev2">&gt;&gt; keyval_lex.c:1673: warning: yy_flex_realloc defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; show_help_lex.c:1610: warning: yy_flex_realloc defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; odls_bproc.c:61: warning: initialization from incompatible pointer
</span><br>
<span class="quotelev2">&gt;&gt; type
</span><br>
<span class="quotelev2">&gt;&gt; ras_bjs.c:97: warning: orte_ras_bjs_node_resolve defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; rds_hostfile_lex.l:44: warning: no previous prototype for
</span><br>
<span class="quotelev2">&gt;&gt; orte_rds_hostfile_wrap
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:39:14
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.9-34.0.1.ELsmpOpen MPI trunk1.3a1r12408Cacau @
</span><br>
<span class="quotelev2">&gt;&gt; HLRSintel9.001[i]
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; --enable-picky --enable-debug --with-tm=/opt/pbs CC=icc CXX=icpc
</span><br>
<span class="quotelev2">&gt;&gt; FC=ifort F77=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; ompi_pointer_array ompi_pointer_array.o ../../ompi/libmpi.la ../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/liborte.la ../../opal/libopal.la ../../test/support/
</span><br>
<span class="quotelev2">&gt;&gt; libsupport.a -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/ompi_pointer_array ompi_pointer_array.o -Wl,--
</span><br>
<span class="quotelev2">&gt;&gt; export-dynamic ../../ompi/.libs/libmpi.so /mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs/liborte.so ../../orte/.libs/liborte.so /mscratch/ws/
</span><br>
<span class="quotelev2">&gt;&gt; hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/cacau_icc_warnings/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -pthread ../../opal/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.so -ldl ../../test/support/libsupport.a -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating ompi_pointer_array
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo ompi_rb_tree.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if icc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../../test/
</span><br>
<span class="quotelev2">&gt;&gt; support -I../.. -g -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -MT ompi_rb_tree.o -MD -MP -MF $depbase.Tpo -c -o ompi_rb_tree.o
</span><br>
<span class="quotelev2">&gt;&gt; ompi_rb_tree.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; ompi_rb_tree ompi_rb_tree.o ../../ompi/libmpi.la ../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; liborte.la ../../opal/libopal.la ../../test/support/libsupport.a -
</span><br>
<span class="quotelev2">&gt;&gt; lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/ompi_rb_tree ompi_rb_tree.o -Wl,--export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic ../../ompi/.libs/libmpi.so /mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs/liborte.so ../../orte/.libs/liborte.so /mscratch/ws/
</span><br>
<span class="quotelev2">&gt;&gt; hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/cacau_icc_warnings/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -pthread ../../opal/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.so -ldl ../../test/support/libsupport.a -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating ompi_rb_tree
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/class
</span><br>
<span class="quotelev2">&gt;&gt; make check-TESTS
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/class
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: ompi_bitmap_t: (18 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: ompi_bitmap
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: opal_hash_table_t: (48 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: opal_hash_table
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: opal_list_t: (25 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: opal_list
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: opal_value_array_t: (44 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: opal_value_array
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: ompi_pointer_array: (14 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: ompi_pointer_array
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: ompi_rb_tree_t: (21 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: ompi_rb_tree
</span><br>
<span class="quotelev2">&gt;&gt; ==================
</span><br>
<span class="quotelev2">&gt;&gt; All 6 tests passed
</span><br>
<span class="quotelev2">&gt;&gt; ==================
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/class
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/class
</span><br>
<span class="quotelev2">&gt;&gt; Making check in memory
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; make opal_memory_basic opal_memory_speed opal_memory_cxx
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_memory_basic.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if icc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../.. -g -
</span><br>
<span class="quotelev2">&gt;&gt; finline-functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_basic.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_basic.o opal_memory_basic.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_basic opal_memory_basic.o ../../opal/libopal.la -lnsl -
</span><br>
<span class="quotelev2">&gt;&gt; lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/opal_memory_basic opal_memory_basic.o -Wl,--export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -pthread ../../opal/.libs/libopal.so -ldl -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_memory_speed.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if icc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../.. -g -
</span><br>
<span class="quotelev2">&gt;&gt; finline-functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_speed.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_speed.o opal_memory_speed.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_speed opal_memory_speed.o ../../opal/libopal.la -lnsl -
</span><br>
<span class="quotelev2">&gt;&gt; lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/opal_memory_speed opal_memory_speed.o -Wl,--export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -pthread ../../opal/.libs/libopal.so -ldl -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating opal_memory_speed
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_memory_cxx.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if icpc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../.. -g -
</span><br>
<span class="quotelev2">&gt;&gt; finline-functions -pthread -MT opal_memory_cxx.o -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o opal_memory_cxx.o opal_memory_cxx.cc; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CXX --mode=link icpc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -pthread -export-dynamic -o opal_memory_cxx
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_cxx.o ../../opal/libopal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icpc -g -finline-functions -pthread -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_cxx opal_memory_cxx.o -Wl,--export-dynamic -
</span><br>
<span class="quotelev2">&gt;&gt; pthread ../../opal/.libs/libopal.so -ldl -lnsl -lutil -Wl,-rpath,/
</span><br>
<span class="quotelev2">&gt;&gt; mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-icc-0/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/install/ 
</span><br>
<span class="quotelev2">&gt;&gt; lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating opal_memory_cxx
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; make check-TESTS
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.3a1r12408/source/openmpi-1.3a1r12408/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; lt-opal_memory_basic: opal_memory_basic.c:73: alloc_free_test:
</span><br>
<span class="quotelev2">&gt;&gt; Assertion `counter &gt;= 1 failed.
</span><br>
<span class="quotelev2">&gt;&gt; running malloc hooks test
</span><br>
<span class="quotelev2">&gt;&gt; - malloc big buffer
</span><br>
<span class="quotelev2">&gt;&gt; Signal:6 info.si_errno:0(Success) si_code:-6()
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/opal/.libs/libopal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (opal_backtrace_print+0x1b) [0x2a95592853]
</span><br>
<span class="quotelev2">&gt;&gt; [1] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/opal/.libs/libopal.so.0 [0x2a95591667]
</span><br>
<span class="quotelev2">&gt;&gt; [2] func:/lib64/tls/libpthread.so.0 [0x3ab540c3d0]
</span><br>
<span class="quotelev2">&gt;&gt; [3] func:/lib64/tls/libc.so.6(gsignal+0x3d) [0x3ab4b2e4cd]
</span><br>
<span class="quotelev2">&gt;&gt; [4] func:/lib64/tls/libc.so.6(abort+0xfe) [0x3ab4b2fc1e]
</span><br>
<span class="quotelev2">&gt;&gt; [5] func:/lib64/tls/libc.so.6(__assert_fail+0xf1) [0x3ab4b27d71]
</span><br>
<span class="quotelev2">&gt;&gt; [6] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/test/memory/.libs/lt-opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; [0x401d59]
</span><br>
<span class="quotelev2">&gt;&gt; [7] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/test/memory/.libs/lt-opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; (main+0x8a) [0x401ce2]
</span><br>
<span class="quotelev2">&gt;&gt; [8] func:/lib64/tls/libc.so.6(__libc_start_main+0xd4) [0x3ab4b1c4b4]
</span><br>
<span class="quotelev2">&gt;&gt; [9] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-trunk/cacau_icc_warnings/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/test/memory/.libs/lt-opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; [0x401bca]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; --- make all stderr ---
</span><br>
<span class="quotelev2">&gt;&gt; ltdl.c(156): warning #167: argument of type void * is incompatible
</span><br>
<span class="quotelev2">&gt;&gt; with parameter of type lt_get_vtable *
</span><br>
<span class="quotelev2">&gt;&gt; return loader_init (lt_dlsym (handle, get_vtable), 0);
</span><br>
<span class="quotelev2">&gt;&gt; ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rmgr_proxy.c(372): warning #167: argument of type uint8_t={unsigned
</span><br>
<span class="quotelev2">&gt;&gt; char} ** is incompatible with parameter of type void **
</span><br>
<span class="quotelev2">&gt;&gt; if (ORTE_SUCCESS != (rc = orte_dss.get(&amp;fptr, flow-&gt;value,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_UINT8))) {
</span><br>
<span class="quotelev2">&gt;&gt; ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rmgr_urm.c(315): warning #167: argument of type uint8_t={unsigned
</span><br>
<span class="quotelev2">&gt;&gt; char} ** is incompatible with parameter of type void **
</span><br>
<span class="quotelev2">&gt;&gt; if (ORTE_SUCCESS != (rc = orte_dss.get(&amp;fptr, flow-&gt;value,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_UINT8))) {
</span><br>
<span class="quotelev2">&gt;&gt; ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:18:33
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.9-34.0.1.ELsmpOpen MPI v1.21.2a1r12413Cacau @
</span><br>
<span class="quotelev2">&gt;&gt; HLRSintel9.001[i]
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; --enable-picky --enable-debug --with-tm=/opt/pbs CC=icc CXX=icpc
</span><br>
<span class="quotelev2">&gt;&gt; FC=ifort F77=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; ompi_pointer_array ompi_pointer_array.o ../../ompi/libmpi.la ../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/liborte.la ../../opal/libopal.la ../../test/support/
</span><br>
<span class="quotelev2">&gt;&gt; libsupport.a -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/ompi_pointer_array ompi_pointer_array.o -Wl,--
</span><br>
<span class="quotelev2">&gt;&gt; export-dynamic ../../ompi/.libs/libmpi.so /mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs/liborte.so ../../orte/.libs/liborte.so /mscratch/ws/
</span><br>
<span class="quotelev2">&gt;&gt; hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.2/cacau_icc_warnings/1.2a1r12413/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.2a1r12413/opal/.libs/libopal.so -pthread ../../opal/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.so -ldl ../../test/support/libsupport.a -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating ompi_pointer_array
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo ompi_rb_tree.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if icc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../../test/
</span><br>
<span class="quotelev2">&gt;&gt; support -I../.. -g -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -MT ompi_rb_tree.o -MD -MP -MF $depbase.Tpo -c -o ompi_rb_tree.o
</span><br>
<span class="quotelev2">&gt;&gt; ompi_rb_tree.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; ompi_rb_tree ompi_rb_tree.o ../../ompi/libmpi.la ../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; liborte.la ../../opal/libopal.la ../../test/support/libsupport.a -
</span><br>
<span class="quotelev2">&gt;&gt; lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/ompi_rb_tree ompi_rb_tree.o -Wl,--export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic ../../ompi/.libs/libmpi.so /mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs/liborte.so ../../orte/.libs/liborte.so /mscratch/ws/
</span><br>
<span class="quotelev2">&gt;&gt; hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-v1.2/cacau_icc_warnings/1.2a1r12413/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.2a1r12413/opal/.libs/libopal.so -pthread ../../opal/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.so -ldl ../../test/support/libsupport.a -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating ompi_rb_tree
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/class
</span><br>
<span class="quotelev2">&gt;&gt; make check-TESTS
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/class
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: ompi_bitmap_t: (18 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: ompi_bitmap
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: opal_hash_table_t: (48 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: opal_hash_table
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: opal_list_t: (25 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: opal_list
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: opal_value_array_t: (44 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: opal_value_array
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: ompi_pointer_array: (14 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: ompi_pointer_array
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test Passed: ompi_rb_tree_t: (21 tests)
</span><br>
<span class="quotelev2">&gt;&gt; PASS: ompi_rb_tree
</span><br>
<span class="quotelev2">&gt;&gt; ==================
</span><br>
<span class="quotelev2">&gt;&gt; All 6 tests passed
</span><br>
<span class="quotelev2">&gt;&gt; ==================
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/class
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/class
</span><br>
<span class="quotelev2">&gt;&gt; Making check in memory
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; make opal_memory_basic opal_memory_speed opal_memory_cxx
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_memory_basic.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if icc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../.. -g -
</span><br>
<span class="quotelev2">&gt;&gt; finline-functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_basic.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_basic.o opal_memory_basic.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_basic opal_memory_basic.o ../../opal/libopal.la -lnsl -
</span><br>
<span class="quotelev2">&gt;&gt; lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/opal_memory_basic opal_memory_basic.o -Wl,--export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -pthread ../../opal/.libs/libopal.so -ldl -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_memory_speed.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if icc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../.. -g -
</span><br>
<span class="quotelev2">&gt;&gt; finline-functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_speed.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_speed.o opal_memory_speed.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC --mode=link icc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_speed opal_memory_speed.o ../../opal/libopal.la -lnsl -
</span><br>
<span class="quotelev2">&gt;&gt; lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icc -g -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -o .libs/opal_memory_speed opal_memory_speed.o -Wl,--export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -pthread ../../opal/.libs/libopal.so -ldl -lnsl -lutil -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; rpath -Wl,/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating opal_memory_speed
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_memory_cxx.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if icpc -DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../ompi/include -I../../ompi/include -I../.. -g -
</span><br>
<span class="quotelev2">&gt;&gt; finline-functions -pthread -MT opal_memory_cxx.o -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o opal_memory_cxx.o opal_memory_cxx.cc; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CXX --mode=link icpc -g -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -pthread -export-dynamic -o opal_memory_cxx
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_cxx.o ../../opal/libopal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: icpc -g -finline-functions -pthread -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_cxx opal_memory_cxx.o -Wl,--export-dynamic -
</span><br>
<span class="quotelev2">&gt;&gt; pthread ../../opal/.libs/libopal.so -ldl -lnsl -lutil -Wl,-rpath,/
</span><br>
<span class="quotelev2">&gt;&gt; mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-icc-0/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating opal_memory_cxx
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; make check-TESTS
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/mscratch/ws/hpcmtt-mtt-
</span><br>
<span class="quotelev2">&gt;&gt; run-2006-11-03--01-00-00---hlrs-icc-0/installs/ompi-nightly-v1.2/
</span><br>
<span class="quotelev2">&gt;&gt; cacau_icc_warnings/1.2a1r12413/source/openmpi-1.2a1r12413/test/memory
</span><br>
<span class="quotelev2">&gt;&gt; lt-opal_memory_basic: opal_memory_basic.c:73: alloc_free_test:
</span><br>
<span class="quotelev2">&gt;&gt; Assertion `counter &gt;= 1 failed.
</span><br>
<span class="quotelev2">&gt;&gt; running malloc hooks test
</span><br>
<span class="quotelev2">&gt;&gt; - malloc big buffer
</span><br>
<span class="quotelev2">&gt;&gt; Signal:6 info.si_errno:0(Success) si_code:-6()
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.2a1r12413/opal/.libs/libopal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (opal_backtrace_print+0x1b) [0x2a95592be3]
</span><br>
<span class="quotelev2">&gt;&gt; [1] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.2a1r12413/opal/.libs/libopal.so.0 [0x2a955919f7]
</span><br>
<span class="quotelev2">&gt;&gt; [2] func:/lib64/tls/libpthread.so.0 [0x3ab540c3d0]
</span><br>
<span class="quotelev2">&gt;&gt; [3] func:/lib64/tls/libc.so.6(gsignal+0x3d) [0x3ab4b2e4cd]
</span><br>
<span class="quotelev2">&gt;&gt; [4] func:/lib64/tls/libc.so.6(abort+0xfe) [0x3ab4b2fc1e]
</span><br>
<span class="quotelev2">&gt;&gt; [5] func:/lib64/tls/libc.so.6(__assert_fail+0xf1) [0x3ab4b27d71]
</span><br>
<span class="quotelev2">&gt;&gt; [6] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.2a1r12413/test/memory/.libs/lt-opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; [0x401d59]
</span><br>
<span class="quotelev2">&gt;&gt; [7] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.2a1r12413/test/memory/.libs/lt-opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; (main+0x8a) [0x401ce2]
</span><br>
<span class="quotelev2">&gt;&gt; [8] func:/lib64/tls/libc.so.6(__libc_start_main+0xd4) [0x3ab4b1c4b4]
</span><br>
<span class="quotelev2">&gt;&gt; [9] func:/mscratch/ws/hpcmtt-mtt-run-2006-11-03--01-00-00---hlrs-
</span><br>
<span class="quotelev2">&gt;&gt; icc-0/installs/ompi-nightly-v1.2/cacau_icc_warnings/1.2a1r12413/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.2a1r12413/test/memory/.libs/lt-opal_memory_basic
</span><br>
<span class="quotelev2">&gt;&gt; [0x401bca]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; --- make all stderr ---
</span><br>
<span class="quotelev2">&gt;&gt; ltdl.c(156): warning #167: argument of type void * is incompatible
</span><br>
<span class="quotelev2">&gt;&gt; with parameter of type lt_get_vtable *
</span><br>
<span class="quotelev2">&gt;&gt; return loader_init (lt_dlsym (handle, get_vtable), 0);
</span><br>
<span class="quotelev2">&gt;&gt; ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:14:50
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.9-34.ELsmp.perfctrOpen MPI trunk1.3a1r12408IU
</span><br>
<span class="quotelev2">&gt;&gt; - Thor - TESTINGgnu3.4.601[i]
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; FCFLAGS=-m32 FFLAGS=-m32 CFLAGS=-m32 CXXFLAGS=-m32 --with-wrapper-
</span><br>
<span class="quotelev2">&gt;&gt; cflags=-m32 --with-wrapper-cxxflags=-m32 --with-wrapper-fflags=-m32
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-fcflags=-m32
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/pls/rsh/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/pls/slurm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/pls/tm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/pls/xgrid/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/bjs/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/dash_host/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/gridengine/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/loadleveler/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/localhost/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/lsf_bproc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/slurm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/tm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/ras/xgrid/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rds/hostfile/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rds/proxy/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rds/resfile/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rmaps/proxy/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rmaps/round_robin/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rmgr/cnos/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rmgr/proxy/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rmgr/urm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rml/cnos/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/rml/oob/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/bproc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/cnos/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/env/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/pipe/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/portals_utcp/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/seed/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/singleton/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/sds/slurm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/mca/smr/bproc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/allocator/basic/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/allocator/bucket/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/bml/r2/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/gm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/mvapi/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/mx/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/openib/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/portals/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/self/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/tcp/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/udapl/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/basic/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/hierarch/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/self/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/tuned/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/common/portals/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/common/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/io/romio/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/gm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/mvapi/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/openib/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/udapl/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mtl/mx/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mtl/portals/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mtl/psm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/osc/pt2pt/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/osc/rdma/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/pml/cm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/pml/dr/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/pml/ob1/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/rcache/rb/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/rcache/vma/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/topo/unity/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/include/opal/install_dirs.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating config/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating contrib/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/etc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/include/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/asm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/event/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/event/compat/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/event/compat/sys/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/util/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/util/keyval/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/mca/base/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/tools/wrappers/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/tools/wrappers/opalcc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/tools/wrappers/opalc++-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/include/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/etc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/console/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orted/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orteprobe/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orterun/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/wrappers/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/wrappers/ortecc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/wrappers/ortec++-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orte-ps/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orte-clean/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/etc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: error: cannot find input file: ompi/etc/Makefile.in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:02:49
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.9-34.ELsmp.perfctrOpen MPI trunk1.3a1r12408IU
</span><br>
<span class="quotelev2">&gt;&gt; - Thor - TESTINGgnu3.4.601[i]
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; FCFLAGS=-m32 FFLAGS=-m32 CFLAGS=-m32 CXXFLAGS=-m32 --with-wrapper-
</span><br>
<span class="quotelev2">&gt;&gt; cflags=-m32 --with-wrapper-cxxflags=-m32 --with-wrapper-fflags=-m32
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-fcflags=-m32
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/gpr/
</span><br>
<span class="quotelev2">&gt;&gt; replica
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/gpr/
</span><br>
<span class="quotelev2">&gt;&gt; replica
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/iof/proxy
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/iof/
</span><br>
<span class="quotelev2">&gt;&gt; proxy
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_proxy.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_proxy.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; iof_proxy.lo iof_proxy.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_proxy_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_proxy_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o iof_proxy_component.lo iof_proxy_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_proxy_svc.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_proxy_svc.lo -MD -MP -MF $depbase.Tpo -c -
</span><br>
<span class="quotelev2">&gt;&gt; o iof_proxy_svc.lo iof_proxy_svc.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_proxy_component.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/iof_proxy_component.Tpo -c iof_proxy_component.c -
</span><br>
<span class="quotelev2">&gt;&gt; fPIC -DPIC -o .libs/iof_proxy_component.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_proxy_svc.lo -MD -
</span><br>
<span class="quotelev2">&gt;&gt; MP -MF .deps/iof_proxy_svc.Tpo -c iof_proxy_svc.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/iof_proxy_svc.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_proxy.lo -MD -MP -
</span><br>
<span class="quotelev2">&gt;&gt; MF .deps/iof_proxy.Tpo -c iof_proxy.c -fPIC -DPIC -o .libs/ 
</span><br>
<span class="quotelev2">&gt;&gt; iof_proxy.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_iof_proxy.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_32_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version iof_proxy.lo iof_proxy_component.lo iof_proxy_svc.lo /
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/liborte.la /san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/iof_proxy.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; iof_proxy_component.o .libs/iof_proxy_svc.o -Wl,-rpath -Wl,/san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/.libs -Wl,-rpath -Wl,/san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/install/lib -L/san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/opal/.libs /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_iof_proxy.so -o .libs/mca_iof_proxy.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_iof_proxy.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_iof_proxy.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_iof_proxy.la mca_iof_proxy.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/iof/
</span><br>
<span class="quotelev2">&gt;&gt; proxy
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/iof/svc
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/iof/
</span><br>
<span class="quotelev2">&gt;&gt; svc
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_svc.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_svc.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc.lo iof_svc.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_svc_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_svc_component.lo -MD -MP -MF $depbase.Tpo
</span><br>
<span class="quotelev2">&gt;&gt; -c -o iof_svc_component.lo iof_svc_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_svc_proxy.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_svc_proxy.lo -MD -MP -MF $depbase.Tpo -c -
</span><br>
<span class="quotelev2">&gt;&gt; o iof_svc_proxy.lo iof_svc_proxy.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_svc_pub.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_svc_pub.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc_pub.lo iof_svc_pub.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo iof_svc_sub.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT iof_svc_sub.lo -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc_sub.lo iof_svc_sub.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_svc_component.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/iof_svc_component.Tpo -c iof_svc_component.c -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; -DPIC -o .libs/iof_svc_component.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_svc.lo -MD -MP -
</span><br>
<span class="quotelev2">&gt;&gt; MF .deps/iof_svc.Tpo -c iof_svc.c -fPIC -DPIC -o .libs/iof_svc.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_svc_proxy.lo -MD -
</span><br>
<span class="quotelev2">&gt;&gt; MP -MF .deps/iof_svc_proxy.Tpo -c iof_svc_proxy.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/iof_svc_proxy.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_svc_pub.lo -MD -MP -
</span><br>
<span class="quotelev2">&gt;&gt; MF .deps/iof_svc_pub.Tpo -c iof_svc_pub.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc_pub.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT iof_svc_sub.lo -MD -MP -
</span><br>
<span class="quotelev2">&gt;&gt; MF .deps/iof_svc_sub.Tpo -c iof_svc_sub.c -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc_sub.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_iof_svc.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_32_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version iof_svc.lo iof_svc_component.lo iof_svc_proxy.lo
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc_pub.lo iof_svc_sub.lo /san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/
</span><br>
<span class="quotelev2">&gt;&gt; liborte.la /san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/iof_svc.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc_component.o .libs/iof_svc_proxy.o .libs/iof_svc_pub.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; iof_svc_sub.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/.libs -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs -Wl,-rpath -Wl,/
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib -L/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_iof_svc.so -o .libs/mca_iof_svc.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_iof_svc.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_iof_svc.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_iof_svc.la mca_iof_svc.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/iof/
</span><br>
<span class="quotelev2">&gt;&gt; svc
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/ns/proxy
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/ns/
</span><br>
<span class="quotelev2">&gt;&gt; proxy
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo src/ns_proxy.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT src/ns_proxy.lo -MD -MP -MF $depbase.Tpo -c -
</span><br>
<span class="quotelev2">&gt;&gt; o src/ns_proxy.lo src/ns_proxy.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo src/ns_proxy_component.lo | sed s|[^/]*$|.deps/&amp;|;s|
</span><br>
<span class="quotelev2">&gt;&gt; \.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT src/ns_proxy_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o src/ns_proxy_component.lo src/
</span><br>
<span class="quotelev2">&gt;&gt; ns_proxy_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT src/
</span><br>
<span class="quotelev2">&gt;&gt; ns_proxy_component.lo -MD -MP -MF src/.deps/ns_proxy_component.Tpo -
</span><br>
<span class="quotelev2">&gt;&gt; c src/ns_proxy_component.c -fPIC -DPIC -o src/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; ns_proxy_component.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT src/ns_proxy.lo -MD -MP
</span><br>
<span class="quotelev2">&gt;&gt; -MF src/.deps/ns_proxy.Tpo -c src/ns_proxy.c -fPIC -DPIC -o
</span><br>
<span class="quotelev2">&gt;&gt; src/.libs/ns_proxy.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_ns_proxy.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_32_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version src/ns_proxy.lo src/ns_proxy_component.lo /san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/liborte.la /san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared src/.libs/ns_proxy.o src/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; ns_proxy_component.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/install/lib -L/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_ns_proxy.so -o .libs/mca_ns_proxy.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_ns_proxy.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_ns_proxy.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_ns_proxy.la mca_ns_proxy.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/ns/
</span><br>
<span class="quotelev2">&gt;&gt; proxy
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/ns/replica
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/ns/
</span><br>
<span class="quotelev2">&gt;&gt; replica
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo src/ns_replica.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT src/ns_replica.lo -MD -MP -MF $depbase.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; -o src/ns_replica.lo src/ns_replica.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo src/ns_replica_component.lo | sed s|[^/]*$|.deps/&amp;|;s|
</span><br>
<span class="quotelev2">&gt;&gt; \.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT src/ns_replica_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o src/ns_replica_component.lo src/
</span><br>
<span class="quotelev2">&gt;&gt; ns_replica_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT src/ns_replica.lo -MD -
</span><br>
<span class="quotelev2">&gt;&gt; MP -MF src/.deps/ns_replica.Tpo -c src/ns_replica.c -fPIC -DPIC -o
</span><br>
<span class="quotelev2">&gt;&gt; src/.libs/ns_replica.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT src/
</span><br>
<span class="quotelev2">&gt;&gt; ns_replica_component.lo -MD -MP -MF src/.deps/
</span><br>
<span class="quotelev2">&gt;&gt; ns_replica_component.Tpo -c src/ns_replica_component.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o src/.libs/ns_replica_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_ns_replica.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_32_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version src/ns_replica.lo src/ns_replica_component.lo /san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/liborte.la /san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared src/.libs/ns_replica.o src/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; ns_replica_component.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/install/lib -L/san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/opal/.libs /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_ns_replica.so -o .libs/mca_ns_replica.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_ns_replica.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_ns_replica.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_ns_replica.la mca_ns_replica.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/ns/
</span><br>
<span class="quotelev2">&gt;&gt; replica
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/odls/default
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/
</span><br>
<span class="quotelev2">&gt;&gt; odls/default
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo odls_default_component.lo | sed s|[^/]*$|.deps/&amp;|;s|
</span><br>
<span class="quotelev2">&gt;&gt; \.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT odls_default_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o odls_default_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; odls_default_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo odls_default_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m32 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT odls_default_module.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o odls_default_module.lo odls_default_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT odls_default_module.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/odls_default_module.Tpo -c odls_default_module.c -
</span><br>
<span class="quotelev2">&gt;&gt; fPIC -DPIC -o .libs/odls_default_module.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m32 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; odls_default_component.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; odls_default_component.Tpo -c odls_default_component.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/odls_default_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_odls_default.la -rpath /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_32_bit_gcc/1.3a1r12408/install/lib/openmpi -
</span><br>
<span class="quotelev2">&gt;&gt; module -avoid-version odls_default_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; odls_default_module.lo /san/homedirs/mpiteam/mtt-runs/odin/20061102-
</span><br>
<span class="quotelev2">&gt;&gt; Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/
</span><br>
<span class="quotelev2">&gt;&gt; liborte.la /san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/odls_default_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; odls_default_module.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/install/lib -L/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-0/installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-0/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_32_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m32 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_odls_default.so -o .libs/mca_odls_default.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_odls_default.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_odls_default.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_odls_default.la mca_odls_default.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/
</span><br>
<span class="quotelev2">&gt;&gt; odls/default
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/oob/tcp
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/oob/
</span><br>
<span class="quotelev2">&gt;&gt; tcp
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `../../../../config/
</span><br>
<span class="quotelev2">&gt;&gt; c_get_alignment.m4, needed by `Makefile.in. Stop.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/oob/
</span><br>
<span class="quotelev2">&gt;&gt; tcp
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-0/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_32_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:05:01
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.9-34.ELsmp.perfctrOpen MPI trunk1.3a1r12408IU
</span><br>
<span class="quotelev2">&gt;&gt; - Thor - TESTINGgnu3.4.601[i]
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; FCFLAGS=-m64 FFLAGS=-m64 CFLAGS=-m64 CXXFLAGS=-m64 --with-wrapper-
</span><br>
<span class="quotelev2">&gt;&gt; cflags=-m64 --with-wrapper-cxxflags=-m64 --with-wrapper-fflags=-m64
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-fcflags=-m64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/bml/r2/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/gm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/mvapi/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/mx/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/openib/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/portals/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/self/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/tcp/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/btl/udapl/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/basic/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/hierarch/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/self/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/coll/tuned/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/common/portals/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/common/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/io/romio/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/gm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/mvapi/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/openib/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mpool/udapl/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mtl/mx/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mtl/portals/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/mtl/psm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/osc/pt2pt/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/osc/rdma/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/pml/cm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/pml/dr/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/pml/ob1/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/rcache/rb/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/rcache/vma/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mca/topo/unity/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/include/opal/install_dirs.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating config/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating contrib/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/etc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/include/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/asm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/event/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/event/compat/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/event/compat/sys/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/util/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/util/keyval/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/mca/base/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/tools/wrappers/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/tools/wrappers/opalcc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/tools/wrappers/opalc++-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/include/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/etc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/console/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orted/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orteprobe/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orterun/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/wrappers/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/wrappers/ortecc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/wrappers/ortec++-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orte-ps/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/tools/orte-clean/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/etc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/include/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/include/mpif.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/include/mpif-config.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/datatype/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/debuggers/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/c/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/c/profile/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/cxx/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/f77/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/f77/profile/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/f90/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/f90/fortran_kinds.sh
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/f90/fortran_sizes.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/mpi/f90/scripts/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/tools/ompi_info/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/tools/wrappers/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/tools/wrappers/mpicc-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/tools/wrappers/mpic++-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/tools/wrappers/mpif77-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/tools/wrappers/mpif90-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/tools/ortetools/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/event/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/asm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/class/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/memory/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/support/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/threads/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/peruse/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating test/datatype/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating opal/include/opal_config.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating orte/include/orte_config.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: creating ompi/include/ompi_config.h
</span><br>
<span class="quotelev2">&gt;&gt; config.status: error: cannot find input file: ompi/include/
</span><br>
<span class="quotelev2">&gt;&gt; ompi_config.h.in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:03:04
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; x86_64LinuxLinux 2.6.9-34.ELsmp.perfctrOpen MPI trunk1.3a1r12408IU
</span><br>
<span class="quotelev2">&gt;&gt; - Thor - TESTINGgnu3.4.601[i]
</span><br>
<span class="quotelev2">&gt;&gt; Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config args:
</span><br>
<span class="quotelev2">&gt;&gt; FCFLAGS=-m64 FFLAGS=-m64 CFLAGS=-m64 CXXFLAGS=-m64 --with-wrapper-
</span><br>
<span class="quotelev2">&gt;&gt; cflags=-m64 --with-wrapper-cxxflags=-m64 --with-wrapper-fflags=-m64
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-fcflags=-m64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stdout:
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo rml_oob_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT rml_oob_component.lo -MD -MP -MF $depbase.Tpo
</span><br>
<span class="quotelev2">&gt;&gt; -c -o rml_oob_component.lo rml_oob_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT rml_oob_component.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/rml_oob_component.Tpo -c rml_oob_component.c -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; -DPIC -o .libs/rml_oob_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_rml_oob.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version rml_oob_component.lo /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/
</span><br>
<span class="quotelev2">&gt;&gt; liborte.la /san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/rml_oob_component.o -Wl,-rpath -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/
</span><br>
<span class="quotelev2">&gt;&gt; parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/orte/.libs -Wl,-rpath -Wl,/
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/opal/.libs -Wl,-rpath -Wl,/san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/install/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/
</span><br>
<span class="quotelev2">&gt;&gt; parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_rml_oob.so -o .libs/mca_rml_oob.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_rml_oob.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_rml_oob.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_rml_oob.la mca_rml_oob.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/rml/
</span><br>
<span class="quotelev2">&gt;&gt; oob
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/sds/env
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; env
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_env_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_env_component.lo -MD -MP -MF $depbase.Tpo
</span><br>
<span class="quotelev2">&gt;&gt; -c -o sds_env_component.lo sds_env_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_env_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_env_module.lo -MD -MP -MF $depbase.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; -o sds_env_module.lo sds_env_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_env_component.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/sds_env_component.Tpo -c sds_env_component.c -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; -DPIC -o .libs/sds_env_component.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_env_module.lo -MD -
</span><br>
<span class="quotelev2">&gt;&gt; MP -MF .deps/sds_env_module.Tpo -c sds_env_module.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/sds_env_module.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_sds_env.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version sds_env_component.lo sds_env_module.lo /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/liborte.la /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/
</span><br>
<span class="quotelev2">&gt;&gt; libopal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/sds_env_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; sds_env_module.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/.libs -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs -Wl,-rpath -Wl,/
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; install/lib -L/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_sds_env.so -o .libs/mca_sds_env.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_sds_env.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_sds_env.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_sds_env.la mca_sds_env.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; env
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/sds/seed
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; seed
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_seed_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_seed_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o sds_seed_component.lo sds_seed_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_seed_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_seed_module.lo -MD -MP -MF $depbase.Tpo -
</span><br>
<span class="quotelev2">&gt;&gt; c -o sds_seed_module.lo sds_seed_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_seed_module.lo -MD -
</span><br>
<span class="quotelev2">&gt;&gt; MP -MF .deps/sds_seed_module.Tpo -c sds_seed_module.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/sds_seed_module.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_seed_component.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/sds_seed_component.Tpo -c sds_seed_component.c -
</span><br>
<span class="quotelev2">&gt;&gt; fPIC -DPIC -o .libs/sds_seed_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_sds_seed.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version sds_seed_component.lo sds_seed_module.lo /san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/liborte.la /san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/sds_seed_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; sds_seed_module.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/install/lib -L/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_sds_seed.so -o .libs/mca_sds_seed.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_sds_seed.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_sds_seed.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_sds_seed.la mca_sds_seed.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; seed
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/sds/singleton
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; singleton
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_singleton_component.lo | sed s|[^/]*$|.deps/&amp;|;s|
</span><br>
<span class="quotelev2">&gt;&gt; \.lo$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_singleton_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o sds_singleton_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; sds_singleton_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_singleton_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_singleton_module.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o sds_singleton_module.lo sds_singleton_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_singleton_module.lo
</span><br>
<span class="quotelev2">&gt;&gt; -MD -MP -MF .deps/sds_singleton_module.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; sds_singleton_module.c -fPIC -DPIC -o .libs/sds_singleton_module.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev2">&gt;&gt; sds_singleton_component.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; sds_singleton_component.Tpo -c sds_singleton_component.c -fPIC -
</span><br>
<span class="quotelev2">&gt;&gt; DPIC -o .libs/sds_singleton_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_sds_singleton.la -rpath /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/install/lib/openmpi -
</span><br>
<span class="quotelev2">&gt;&gt; module -avoid-version sds_singleton_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; sds_singleton_module.lo /san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/
</span><br>
<span class="quotelev2">&gt;&gt; liborte.la /san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/source/openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/sds_singleton_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; sds_singleton_module.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/install/lib -L/san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/opal/.libs /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/mpiteam/mtt-
</span><br>
<span class="quotelev2">&gt;&gt; runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_sds_singleton.so -o .libs/mca_sds_singleton.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_sds_singleton.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_sds_singleton.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_sds_singleton.la mca_sds_singleton.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; singleton
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/sds/pipe
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; pipe
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_pipe_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_pipe_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o sds_pipe_component.lo sds_pipe_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_pipe_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$|| 
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_pipe_module.lo -MD -MP -MF $depbase.Tpo -
</span><br>
<span class="quotelev2">&gt;&gt; c -o sds_pipe_module.lo sds_pipe_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_pipe_module.lo -MD -
</span><br>
<span class="quotelev2">&gt;&gt; MP -MF .deps/sds_pipe_module.Tpo -c sds_pipe_module.c -fPIC -DPIC -
</span><br>
<span class="quotelev2">&gt;&gt; o .libs/sds_pipe_module.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_pipe_component.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/sds_pipe_component.Tpo -c sds_pipe_component.c -
</span><br>
<span class="quotelev2">&gt;&gt; fPIC -DPIC -o .libs/sds_pipe_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_sds_pipe.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version sds_pipe_component.lo sds_pipe_module.lo /san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/liborte.la /san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/sds_pipe_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; sds_pipe_module.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/install/lib -L/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_sds_pipe.so -o .libs/mca_sds_pipe.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_sds_pipe.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_sds_pipe.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_sds_pipe.la mca_sds_pipe.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; pipe
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/sds/slurm
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; slurm
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_slurm_component.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo
</span><br>
<span class="quotelev2">&gt;&gt; $||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_slurm_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o sds_slurm_component.lo sds_slurm_component.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo sds_slurm_module.lo | sed s|[^/]*$|.deps/&amp;|;s|\.lo$||
</span><br>
<span class="quotelev2">&gt;&gt; `; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I. -I../../../../opal/include -I../../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../../ompi/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -MT sds_slurm_module.lo -MD -MP -MF $depbase.Tpo -
</span><br>
<span class="quotelev2">&gt;&gt; c -o sds_slurm_module.lo sds_slurm_module.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Plo; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_slurm_module.lo -MD
</span><br>
<span class="quotelev2">&gt;&gt; -MP -MF .deps/sds_slurm_module.Tpo -c sds_slurm_module.c -fPIC -
</span><br>
<span class="quotelev2">&gt;&gt; DPIC -o .libs/sds_slurm_module.o
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: gcc -DHAVE_CONFIG_H -I. -I. -I../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../orte/include -I../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../ompi/include -I../../../.. -O3 -DNDEBUG -m64 -finline-
</span><br>
<span class="quotelev2">&gt;&gt; functions -fno-strict-aliasing -pthread -MT sds_slurm_component.lo -
</span><br>
<span class="quotelev2">&gt;&gt; MD -MP -MF .deps/sds_slurm_component.Tpo -c sds_slurm_component.c -
</span><br>
<span class="quotelev2">&gt;&gt; fPIC -DPIC -o .libs/sds_slurm_component.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -finline-functions -fno-strict-aliasing -pthread -export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic -o mca_sds_slurm.la -rpath /san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/install/lib/openmpi -module -
</span><br>
<span class="quotelev2">&gt;&gt; avoid-version sds_slurm_component.lo sds_slurm_module.lo /san/
</span><br>
<span class="quotelev2">&gt;&gt; homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/liborte.la /san/homedirs/mpiteam/
</span><br>
<span class="quotelev2">&gt;&gt; mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/libopal.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -shared .libs/sds_slurm_component.o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; sds_slurm_module.o -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/
</span><br>
<span class="quotelev2">&gt;&gt; odin/20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; orte/.libs -Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/install/lib -L/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/opal/.libs /
</span><br>
<span class="quotelev2">&gt;&gt; san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-
</span><br>
<span class="quotelev2">&gt;&gt; block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/
</span><br>
<span class="quotelev2">&gt;&gt; source/openmpi-1.3a1r12408/orte/.libs/liborte.so /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; m64 -pthread -pthread -pthread -pthread -pthread -Wl,-soname -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,mca_sds_slurm.so -o .libs/mca_sds_slurm.so
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating mca_sds_slurm.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd .libs &amp;&amp; rm -f mca_sds_slurm.la &amp;&amp; ln -s ../
</span><br>
<span class="quotelev2">&gt;&gt; mca_sds_slurm.la mca_sds_slurm.la )
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/mca/sds/
</span><br>
<span class="quotelev2">&gt;&gt; slurm
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools/console
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/tools/
</span><br>
<span class="quotelev2">&gt;&gt; console
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo orteconsole.o | sed s|[^/]*$|.deps/&amp;|;s|\.o$||`; \
</span><br>
<span class="quotelev2">&gt;&gt; if gcc -DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../
</span><br>
<span class="quotelev2">&gt;&gt; orte/include -I../../../ompi/include -I../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../.. -O3 -DNDEBUG -m64 -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -MT orteconsole.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; orteconsole.o orteconsole.c; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f $depbase.Tpo $depbase.Po; else rm -f $depbase.Tpo; exit
</span><br>
<span class="quotelev2">&gt;&gt; 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../libtool --tag=CC --mode=link gcc -O3 -DNDEBUG -m64
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread -export-dynamic -o
</span><br>
<span class="quotelev2">&gt;&gt; orteconsole orteconsole.o ../../../orte/liborte.la -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -O3 -DNDEBUG -m64 -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -pthread -o .libs/orteconsole orteconsole.o -Wl,--export-
</span><br>
<span class="quotelev2">&gt;&gt; dynamic ../../../orte/.libs/liborte.so -pthread /san/homedirs/
</span><br>
<span class="quotelev2">&gt;&gt; mpiteam/mtt-runs/odin/20061102-Testing-JJH4/parallel-block-1/
</span><br>
<span class="quotelev2">&gt;&gt; installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12408/source/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3a1r12408/opal/.libs/libopal.so -ldl -lnsl -lutil -lm -
</span><br>
<span class="quotelev2">&gt;&gt; Wl,-rpath -Wl,/san/homedirs/mpiteam/mtt-runs/odin/20061102-Testing-
</span><br>
<span class="quotelev2">&gt;&gt; JJH4/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/
</span><br>
<span class="quotelev2">&gt;&gt; 1.3a1r12408/install/lib
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: creating orteconsole
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/tools/
</span><br>
<span class="quotelev2">&gt;&gt; console
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools/orted
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/tools/
</span><br>
<span class="quotelev2">&gt;&gt; orted
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `../../../config/
</span><br>
<span class="quotelev2">&gt;&gt; c_weak_symbols.m4, needed by `Makefile.in. Stop.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte/tools/
</span><br>
<span class="quotelev2">&gt;&gt; orted
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/san/homedirs/mpiteam/mtt-runs/odin/
</span><br>
<span class="quotelev2">&gt;&gt; 20061102-Testing-JJH4/parallel-block-1/installs/ompi-nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt; odin_64_bit_gcc/1.3a1r12408/source/openmpi-1.3a1r12408/orte
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stderr:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Env:
</span><br>
<span class="quotelev2">&gt;&gt; N/A
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test duration:
</span><br>
<span class="quotelev2">&gt;&gt; 00:05:22
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bookmarks
</span><br>
<span class="quotelev2">&gt;&gt; Relative date range[Link]
</span><br>
<span class="quotelev2">&gt;&gt; Absolute date range[Link]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MTT submits results to the database on three of its phases. The
</span><br>
<span class="quotelev2">&gt;&gt; column headers above the pass/fail columns map to the following ini
</span><br>
<span class="quotelev2">&gt;&gt; section names:
</span><br>
<span class="quotelev2">&gt;&gt; [1] MPI Install: The configuring and building of the MPI library.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0185.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Previous message:</strong> <a href="0183.php">Jeff Squyres: "[MTT users] Fwd: [mtt-results] Nightly MPI Install Failures"</a>
<li><strong>In reply to:</strong> <a href="0183.php">Jeff Squyres: "[MTT users] Fwd: [mtt-results] Nightly MPI Install Failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0186.php">Jeff Squyres: "Re: [MTT users] Fwd: [mtt-results] Nightly MPI Install Failures"</a>
<li><strong>Reply:</strong> <a href="0186.php">Jeff Squyres: "Re: [MTT users] Fwd: [mtt-results] Nightly MPI Install Failures"</a>
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
