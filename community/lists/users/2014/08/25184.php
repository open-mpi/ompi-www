<?
$subject_val = "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 19:18:11 2014" -->
<!-- isoreceived="20140828231811" -->
<!-- sent="Thu, 28 Aug 2014 16:17:27 -0700" -->
<!-- isosent="20140828231727" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs" -->
<!-- id="A6930B68-441B-40B4-9965-222F1E3105CB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFb48S89rckb5VWVKE9fEOu02Amxtdi+oGxnxo5NtymCh8-+QQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-28 19:17:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25185.php">Timur Ismagilov: "[OMPI users] open shmem optimization"</a>
<li><strong>Previous message:</strong> <a href="25183.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>In reply to:</strong> <a href="25182.php">Matt Thompson: "[OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25187.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25187.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm unaware of any changes to the Slurm integration between rc4 and final release. It sounds like this might be something else going on - try adding &quot;--leave-session-attached --debug-daemons&quot; to your 1.8.2 command line and let's see if any errors get reported.
<br>
<p><p>On Aug 28, 2014, at 12:20 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI List,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I recently encountered an odd bug with Open MPI 1.8.1 and GCC 4.9.1 on our cluster (reported on this list), and decided to try it with 1.8.2. However, we seem to be having an issue with Open MPI 1.8.2 and SLURM. Even weirder, Open MPI 1.8.2rc4 doesn't show the bug. And the bug is: I get no stdout with Open MPI 1.8.2. That is, HelloWorld doesn't work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To wit, our sysadmin has two tarballs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1441) $ sha1sum openmpi-1.8.2rc4.tar.bz2
</span><br>
<span class="quotelev1">&gt; 7e7496913c949451f546f22a1a159df25f8bb683  openmpi-1.8.2rc4.tar.bz2
</span><br>
<span class="quotelev1">&gt; (1442) $ sha1sum openmpi-1.8.2.tar.gz
</span><br>
<span class="quotelev1">&gt; cf2b1e45575896f63367406c6c50574699d8b2e1  openmpi-1.8.2.tar.gz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I then build each with a script in the method our sysadmin usually does:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/sh 
</span><br>
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
<span class="quotelev1">&gt;   ./configure --with-slurm --disable-wrapper-rpath --enable-shared --enable-mca-no-build=btl-usnic \
</span><br>
<span class="quotelev1">&gt;       CC=gcc CXX=g++ F77=gfortran FC=gfortran \
</span><br>
<span class="quotelev1">&gt;       CFLAGS=&quot;-mtune=generic -fPIC -m64&quot; CXXFLAGS=&quot;-mtune=generic -fPIC -m64&quot; FFLAGS=&quot;-mtune=generic -fPIC -m64&quot; \
</span><br>
<span class="quotelev1">&gt;       F77FLAGS=&quot;-mtune=generic -fPIC -m64&quot; FCFLAGS=&quot;-mtune=generic -fPIC -m64&quot; F90FLAGS=&quot;-mtune=generic -fPIC -m64&quot; \
</span><br>
<span class="quotelev1">&gt;       LDFLAGS=&quot;-L/usr/nlocal/slurm/2.6.3/lib64&quot; CPPFLAGS=&quot;-I/usr/nlocal/slurm/2.6.3/include&quot; LIBS=&quot;-lpciaccess&quot; \
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only difference between the two is '1.8.2' or '1.8.2rc4' in the PREFIX and log file tees.  Now, let us test. First, I grab some nodes with slurm:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ salloc --nodes=6 --ntasks-per-node=16 --constraint=sand --time=09:00:00 --account=g0620 --mail-type=BEGIN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once I get my nodes, I run with 1.8.2rc4:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1142) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpifort -o helloWorld.182rc4.x helloWorld.F90
</span><br>
<span class="quotelev1">&gt; (1143) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpirun -np 8 ./helloWorld.182rc4.x
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now 1.8.2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1144) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2/bin/mpifort -o helloWorld.182.x helloWorld.F90
</span><br>
<span class="quotelev1">&gt; (1145) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2/bin/mpirun -np 8 ./helloWorld.182.x
</span><br>
<span class="quotelev1">&gt; (1146) $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No output at all. But, if I take the helloWorld.x from 1.8.2 and run it with 1.8.2rc4's mpirun:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1146) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpirun -np 8 ./helloWorld.182.x
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So...any idea what is happening here? There did seem to be a few SLURM related changes between the two tarballs involving /dev/null but it's a bit above me to decipher.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can find the ompi_info, build, make, config, etc logs at these links (they are ~300kB which is over the mailing list limit according to the Open MPI web page):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2rc4-Output.tar.bz2">https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2rc4-Output.tar.bz2</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2-Output.tar.bz2">https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2-Output.tar.bz2</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for any help and please let me know if you need more information,
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
</span><br>
<span class="quotelev1">&gt;  get is one trick: rational thinking. But when you're good and crazy, 
</span><br>
<span class="quotelev1">&gt;  oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25182.php">http://www.open-mpi.org/community/lists/users/2014/08/25182.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25184/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25185.php">Timur Ismagilov: "[OMPI users] open shmem optimization"</a>
<li><strong>Previous message:</strong> <a href="25183.php">Ralph Castain: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>In reply to:</strong> <a href="25182.php">Matt Thompson: "[OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25187.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25187.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
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
