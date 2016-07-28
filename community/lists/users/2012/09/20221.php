<?
$subject_val = "Re: [OMPI users] Newbie question?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 15 14:24:27 2012" -->
<!-- isoreceived="20120915182427" -->
<!-- sent="Sat, 15 Sep 2012 11:24:19 -0700" -->
<!-- isosent="20120915182419" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question?" -->
<!-- id="4D6DB6E5-F3EE-4074-A2FA-EC0511C39777_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CABftzei-HVYG6GXN0yyT1oYCK4nZXC8Qom5rEX2p1nU6vD5ynQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie question?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-15 14:24:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20222.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20220.php">Reuti: "Re: [OMPI users] Newbie question?"</a>
<li><strong>In reply to:</strong> <a href="20219.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20222.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20222.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah - note that there is no LD_LIBRARY_PATH in the environment. That's the problem
<br>
<p>On Sep 15, 2012, at 11:19 AM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; $ which mpiexec
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/bin/mpiexec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # mpiexec -n 1 printenv | grep PATH
</span><br>
<span class="quotelev1">&gt; PATH=/usr/lib/openmpi/bin/:/usr/lib/ccache:/usr/local/bin:/usr/bin:/bin:/usr/local/sbin:/usr/sbin:/sbin:/home/jski/.local/bin:/home/jski/bin
</span><br>
<span class="quotelev1">&gt; MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
</span><br>
<span class="quotelev1">&gt; WINDOWPATH=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Sep 15, 2012 at 1:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Couple of things worth checking:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. verify that you executed the &quot;mpiexec&quot; you think you did - a simple &quot;which mpiexec&quot; should suffice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. verify that your environment is correct by &quot;mpiexec -n 1 printenv | grep PATH&quot;. Sometimes the ld_library_path doesn't carry over like you think it should
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 15, 2012, at 10:00 AM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I installed OpenMPI (I have a simple dual core AMD notebook with Fedora 16) via:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # yum install openmpi
</span><br>
<span class="quotelev2">&gt;&gt; # yum install openmpi-devel
</span><br>
<span class="quotelev2">&gt;&gt; # mpirun --version
</span><br>
<span class="quotelev2">&gt;&gt; mpirun (Open MPI) 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I added: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ PATH=PATH=/usr/lib/openmpi/bin/:$PATH
</span><br>
<span class="quotelev2">&gt;&gt; $ LD_LIBRARY_PATH=/usr/lib/openmpi/lib/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpif90 ex1.f95
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec -n 4 ./a.out 
</span><br>
<span class="quotelev2">&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ls -l /usr/lib/openmpi/lib/
</span><br>
<span class="quotelev2">&gt;&gt; total 6788
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      25 Sep 15 12:25 libmca_common_sm.so -&gt; libmca_common_sm.so.2.0.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      25 Sep 14 16:14 libmca_common_sm.so.2 -&gt; libmca_common_sm.so.2.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x. 1 root root    8492 Jan 20  2012 libmca_common_sm.so.2.0.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_cxx.so -&gt; libmpi_cxx.so.1.0.1
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_cxx.so.1 -&gt; libmpi_cxx.so.1.0.1
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x. 1 root root   87604 Jan 20  2012 libmpi_cxx.so.1.0.1
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_f77.so -&gt; libmpi_f77.so.1.0.2
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_f77.so.1 -&gt; libmpi_f77.so.1.0.2
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x. 1 root root  179912 Jan 20  2012 libmpi_f77.so.1.0.2
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_f90.so -&gt; libmpi_f90.so.1.1.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_f90.so.1 -&gt; libmpi_f90.so.1.1.0
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x. 1 root root   10364 Jan 20  2012 libmpi_f90.so.1.1.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 15 12:25 libmpi.so -&gt; libmpi.so.1.0.2
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 14 16:14 libmpi.so.1 -&gt; libmpi.so.1.0.2
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x. 1 root root 1383444 Jan 20  2012 libmpi.so.1.0.2
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      21 Sep 15 12:25 libompitrace.so -&gt; libompitrace.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      21 Sep 14 16:14 libompitrace.so.0 -&gt; libompitrace.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x. 1 root root   13572 Jan 20  2012 libompitrace.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 15 12:25 libopen-pal.so -&gt; libopen-pal.so.3.0.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 14 16:14 libopen-pal.so.3 -&gt; libopen-pal.so.3.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x. 1 root root  386324 Jan 20  2012 libopen-pal.so.3.0.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 15 12:25 libopen-rte.so -&gt; libopen-rte.so.3.0.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      20 Sep 14 16:14 libopen-rte.so.3 -&gt; libopen-rte.so.3.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x. 1 root root  790052 Jan 20  2012 libopen-rte.so.3.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 root root  301520 Jan 20  2012 libotf.a
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 15 12:25 libotf.so -&gt; libotf.so.0.0.1
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      15 Sep 14 16:14 libotf.so.0 -&gt; libotf.so.0.0.1
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x. 1 root root  206384 Jan 20  2012 libotf.so.0.0.1
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 root root  337970 Jan 20  2012 libvt.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 root root  591070 Jan 20  2012 libvt-hyb.a
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 15 12:25 libvt-hyb.so -&gt; libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 14 16:14 libvt-hyb.so.0 -&gt; libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x. 1 root root  428844 Jan 20  2012 libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 root root  541004 Jan 20  2012 libvt-mpi.a
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 15 12:25 libvt-mpi.so -&gt; libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      18 Sep 14 16:14 libvt-mpi.so.0 -&gt; libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x. 1 root root  396352 Jan 20  2012 libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 root root  372352 Jan 20  2012 libvt-mt.a
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      17 Sep 15 12:25 libvt-mt.so -&gt; libvt-mt.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      17 Sep 14 16:14 libvt-mt.so.0 -&gt; libvt-mt.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x. 1 root root  266104 Jan 20  2012 libvt-mt.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 root root   60390 Jan 20  2012 libvt-pomp.a
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      14 Sep 15 12:25 libvt.so -&gt; libvt.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root      14 Sep 14 16:14 libvt.so.0 -&gt; libvt.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x. 1 root root  242604 Jan 20  2012 libvt.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x. 1 root root  303591 Jan 20  2012 mpi.mod
</span><br>
<span class="quotelev2">&gt;&gt; drwxr-xr-x. 2 root root    4096 Sep 14 16:14 openmpi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The file (actually, a link) it claims it can't find: libmpi_f90.so.1, is clearly there. And LD_LIBRARY_PATH=/usr/lib/openmpi/lib/.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What's the problem?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---John
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20221/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20222.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20220.php">Reuti: "Re: [OMPI users] Newbie question?"</a>
<li><strong>In reply to:</strong> <a href="20219.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20222.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20222.php">John Chludzinski: "Re: [OMPI users] Newbie question?"</a>
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
