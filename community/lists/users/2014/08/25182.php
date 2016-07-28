<?
$subject_val = "[OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 15:21:03 2014" -->
<!-- isoreceived="20140828192103" -->
<!-- sent="Thu, 28 Aug 2014 15:20:42 -0400" -->
<!-- isosent="20140828192042" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="[OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs" -->
<!-- id="CAFb48S89rckb5VWVKE9fEOu02Amxtdi+oGxnxo5NtymCh8-+QQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-28 15:20:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25183.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Previous message:</strong> <a href="25181.php">McGrattan, Kevin B. Dr.: "[OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25184.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25184.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI List,
<br>
<p>I recently encountered an odd bug with Open MPI 1.8.1 and GCC 4.9.1 on our
<br>
cluster (reported on this list), and decided to try it with 1.8.2. However,
<br>
we seem to be having an issue with Open MPI 1.8.2 and SLURM. Even weirder,
<br>
Open MPI 1.8.2rc4 doesn't show the bug. And the bug is: I get no stdout
<br>
with Open MPI 1.8.2. That is, HelloWorld doesn't work.
<br>
<p>To wit, our sysadmin has two tarballs:
<br>
<p>(1441) $ sha1sum openmpi-1.8.2rc4.tar.bz2
<br>
7e7496913c949451f546f22a1a159df25f8bb683  openmpi-1.8.2rc4.tar.bz2
<br>
(1442) $ sha1sum openmpi-1.8.2.tar.gz
<br>
cf2b1e45575896f63367406c6c50574699d8b2e1  openmpi-1.8.2.tar.gz
<br>
<p>I then build each with a script in the method our sysadmin usually does:
<br>
<p>#!/bin/sh
<br>
<span class="quotelev1">&gt; set -x
</span><br>
<span class="quotelev1">&gt; export PREFIX=/discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=${LD_LIBRARY_PATH}:/usr/nlocal/slurm/2.6.3/lib64
</span><br>
<span class="quotelev1">&gt; build() {
</span><br>
<span class="quotelev1">&gt;   echo `pwd`
</span><br>
<span class="quotelev1">&gt;   ./configure --with-slurm --disable-wrapper-rpath --enable-shared
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=btl-usnic \
</span><br>
<span class="quotelev1">&gt;       CC=gcc CXX=g++ F77=gfortran FC=gfortran \
</span><br>
<span class="quotelev1">&gt;       CFLAGS=&quot;-mtune=generic -fPIC -m64&quot; CXXFLAGS=&quot;-mtune=generic -fPIC
</span><br>
<span class="quotelev1">&gt; -m64&quot; FFLAGS=&quot;-mtune=generic -fPIC -m64&quot; \
</span><br>
<span class="quotelev1">&gt;       F77FLAGS=&quot;-mtune=generic -fPIC -m64&quot; FCFLAGS=&quot;-mtune=generic -fPIC
</span><br>
<span class="quotelev1">&gt; -m64&quot; F90FLAGS=&quot;-mtune=generic -fPIC -m64&quot; \
</span><br>
<span class="quotelev1">&gt;       LDFLAGS=&quot;-L/usr/nlocal/slurm/2.6.3/lib64&quot;
</span><br>
<span class="quotelev1">&gt; CPPFLAGS=&quot;-I/usr/nlocal/slurm/2.6.3/include&quot; LIBS=&quot;-lpciaccess&quot; \
</span><br>
<span class="quotelev1">&gt;      --prefix=${PREFIX} 2&gt;&amp;1 | tee configure.1.8.2.log
</span><br>
<span class="quotelev1">&gt;   make 2&gt;&amp;1 | tee make.1.8.2.log
</span><br>
<span class="quotelev1">&gt;   make check 2&gt;&amp;1 | tee makecheck.1.8.2.log
</span><br>
<span class="quotelev1">&gt;   make install 2&gt;&amp;1 | tee makeinstall.1.8.2.log
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; echo &quot;calling build&quot;
</span><br>
<span class="quotelev1">&gt; build
</span><br>
<span class="quotelev1">&gt; echo &quot;exiting&quot;
</span><br>
<p><p>The only difference between the two is '1.8.2' or '1.8.2rc4' in the PREFIX
<br>
and log file tees.  Now, let us test. First, I grab some nodes with slurm:
<br>
<p>$ salloc --nodes=6 --ntasks-per-node=16 --constraint=sand --time=09:00:00
<br>
<span class="quotelev1">&gt; --account=g0620 --mail-type=BEGIN
</span><br>
<p><p>Once I get my nodes, I run with 1.8.2rc4:
<br>
<p>(1142) $
<br>
<span class="quotelev1">&gt; /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpifort -o
</span><br>
<span class="quotelev1">&gt; helloWorld.182rc4.x helloWorld.F90
</span><br>
<span class="quotelev1">&gt; (1143) $
</span><br>
<span class="quotelev1">&gt; /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpirun -np 8
</span><br>
<span class="quotelev1">&gt; ./helloWorld.182rc4.x
</span><br>
<span class="quotelev1">&gt; Process    0 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt; Process    5 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt; Process    3 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt; Process    7 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt; Process    1 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt; Process    2 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt; Process    4 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt; Process    6 of    8 is on borg01w044
</span><br>
<p><p>Now 1.8.2:
<br>
<p>(1144) $
<br>
<span class="quotelev1">&gt; /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2/bin/mpifort -o
</span><br>
<span class="quotelev1">&gt; helloWorld.182.x helloWorld.F90
</span><br>
<span class="quotelev1">&gt; (1145) $
</span><br>
<span class="quotelev1">&gt; /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2/bin/mpirun -np 8
</span><br>
<span class="quotelev1">&gt; ./helloWorld.182.x
</span><br>
<span class="quotelev1">&gt; (1146) $
</span><br>
<p><p>No output at all. But, if I take the helloWorld.x from 1.8.2 and run it
<br>
with 1.8.2rc4's mpirun:
<br>
<p>(1146) $
<br>
<span class="quotelev1">&gt; /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpirun -np 8
</span><br>
<span class="quotelev1">&gt; ./helloWorld.182.x
</span><br>
<span class="quotelev1">&gt; Process    5 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt; Process    7 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt; Process    2 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt; Process    4 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt; Process    1 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt; Process    3 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt; Process    6 of    8 is on borg01w044
</span><br>
<span class="quotelev1">&gt; Process    0 of    8 is on borg01w044
</span><br>
<p><p>So...any idea what is happening here? There did seem to be a few SLURM
<br>
related changes between the two tarballs involving /dev/null but it's a bit
<br>
above me to decipher.
<br>
<p>You can find the ompi_info, build, make, config, etc logs at these links
<br>
(they are ~300kB which is over the mailing list limit according to the Open
<br>
MPI web page):
<br>
<p><a href="https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2rc4-Output.tar.bz2">https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2rc4-Output.tar.bz2</a>
<br>
<a href="https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2-Output.tar.bz2">https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2-Output.tar.bz2</a>
<br>
<p>Thank you for any help and please let me know if you need more information,
<br>
Matt
<br>
<p><pre>
-- 
&quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
 get is one trick: rational thinking. But when you're good and crazy,
 oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25182/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25183.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Previous message:</strong> <a href="25181.php">McGrattan, Kevin B. Dr.: "[OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25184.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25184.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
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
