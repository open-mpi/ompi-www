<?
$subject_val = "Re: [OMPI users] Newbie question?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 15 14:19:23 2012" -->
<!-- isoreceived="20120915181923" -->
<!-- sent="Sat, 15 Sep 2012 14:19:17 -0400" -->
<!-- isosent="20120915181917" -->
<!-- name="John Chludzinski" -->
<!-- email="john.chludzinski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question?" -->
<!-- id="CABftzei-HVYG6GXN0yyT1oYCK4nZXC8Qom5rEX2p1nU6vD5ynQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="614E4D13-E478-4A20-96CE-724EB232F31F_at_open-mpi.org" -->
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
<strong>From:</strong> John Chludzinski (<em>john.chludzinski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-15 14:19:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20220.php">Reuti: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20218.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<li><strong>In reply to:</strong> <a href="20218.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20221.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20221.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
$ which mpiexec
<br>
/usr/lib/openmpi/bin/mpiexec
<br>
<p># mpiexec -n 1 printenv | grep PATH
<br>
PATH=/usr/lib/openmpi/bin/:/usr/lib/ccache:/usr/local/bin:/usr/bin:/bin:/usr/local/sbin:/usr/sbin:/sbin:/home/jski/.local/bin:/home/jski/bin
<br>
MODULEPATH=/usr/share/Modules/modulefiles:/etc/modulefiles
<br>
WINDOWPATH=1
<br>
<p><p><p>On Sat, Sep 15, 2012 at 1:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Couple of things worth checking:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. verify that you executed the &quot;mpiexec&quot; you think you did - a simple
</span><br>
<span class="quotelev1">&gt; &quot;which mpiexec&quot; should suffice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. verify that your environment is correct by &quot;mpiexec -n 1 printenv |
</span><br>
<span class="quotelev1">&gt; grep PATH&quot;. Sometimes the ld_library_path doesn't carry over like you think
</span><br>
<span class="quotelev1">&gt; it should
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 15, 2012, at 10:00 AM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed OpenMPI (I have a simple dual core AMD notebook with Fedora
</span><br>
<span class="quotelev1">&gt; 16) via:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # yum install openmpi
</span><br>
<span class="quotelev1">&gt; # yum install openmpi-devel
</span><br>
<span class="quotelev1">&gt; # mpirun --version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.5.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I added:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ PATH=PATH=/usr/lib/openmpi/bin/:$PATH
</span><br>
<span class="quotelev1">&gt; $ LD_LIBRARY_PATH=/usr/lib/openmpi/lib/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpif90 ex1.f95
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 4 ./a.out
</span><br>
<span class="quotelev1">&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ls -l /usr/lib/openmpi/lib/
</span><br>
<span class="quotelev1">&gt; total 6788
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      25 Sep 15 12:25 libmca_common_sm.so -&gt;
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.so.2.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      25 Sep 14 16:14 libmca_common_sm.so.2 -&gt;
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.so.2.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x. 1 root root    8492 Jan 20  2012 libmca_common_sm.so.2.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_cxx.so -&gt;
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so.1.0.1
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_cxx.so.1 -&gt;
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so.1.0.1
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x. 1 root root   87604 Jan 20  2012 libmpi_cxx.so.1.0.1
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_f77.so -&gt;
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so.1.0.2
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_f77.so.1 -&gt;
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so.1.0.2
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x. 1 root root  179912 Jan 20  2012 libmpi_f77.so.1.0.2
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_f90.so -&gt;
</span><br>
<span class="quotelev1">&gt; libmpi_f90.so.1.1.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_f90.so.1 -&gt;
</span><br>
<span class="quotelev1">&gt; libmpi_f90.so.1.1.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x. 1 root root   10364 Jan 20  2012 libmpi_f90.so.1.1.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      15 Sep 15 12:25 libmpi.so -&gt; libmpi.so.1.0.2
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      15 Sep 14 16:14 libmpi.so.1 -&gt; libmpi.so.1.0.2
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x. 1 root root 1383444 Jan 20  2012 libmpi.so.1.0.2
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      21 Sep 15 12:25 libompitrace.so -&gt;
</span><br>
<span class="quotelev1">&gt; libompitrace.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      21 Sep 14 16:14 libompitrace.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt; libompitrace.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x. 1 root root   13572 Jan 20  2012 libompitrace.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      20 Sep 15 12:25 libopen-pal.so -&gt;
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.3.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      20 Sep 14 16:14 libopen-pal.so.3 -&gt;
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.3.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x. 1 root root  386324 Jan 20  2012 libopen-pal.so.3.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      20 Sep 15 12:25 libopen-rte.so -&gt;
</span><br>
<span class="quotelev1">&gt; libopen-rte.so.3.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      20 Sep 14 16:14 libopen-rte.so.3 -&gt;
</span><br>
<span class="quotelev1">&gt; libopen-rte.so.3.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x. 1 root root  790052 Jan 20  2012 libopen-rte.so.3.0.0
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 root root  301520 Jan 20  2012 libotf.a
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      15 Sep 15 12:25 libotf.so -&gt; libotf.so.0.0.1
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      15 Sep 14 16:14 libotf.so.0 -&gt; libotf.so.0.0.1
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x. 1 root root  206384 Jan 20  2012 libotf.so.0.0.1
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 root root  337970 Jan 20  2012 libvt.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 root root  591070 Jan 20  2012 libvt-hyb.a
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      18 Sep 15 12:25 libvt-hyb.so -&gt;
</span><br>
<span class="quotelev1">&gt; libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      18 Sep 14 16:14 libvt-hyb.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt; libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x. 1 root root  428844 Jan 20  2012 libvt-hyb.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 root root  541004 Jan 20  2012 libvt-mpi.a
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      18 Sep 15 12:25 libvt-mpi.so -&gt;
</span><br>
<span class="quotelev1">&gt; libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      18 Sep 14 16:14 libvt-mpi.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt; libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x. 1 root root  396352 Jan 20  2012 libvt-mpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 root root  372352 Jan 20  2012 libvt-mt.a
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      17 Sep 15 12:25 libvt-mt.so -&gt;
</span><br>
<span class="quotelev1">&gt; libvt-mt.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      17 Sep 14 16:14 libvt-mt.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt; libvt-mt.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x. 1 root root  266104 Jan 20  2012 libvt-mt.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 root root   60390 Jan 20  2012 libvt-pomp.a
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      14 Sep 15 12:25 libvt.so -&gt; libvt.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx. 1 root root      14 Sep 14 16:14 libvt.so.0 -&gt; libvt.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x. 1 root root  242604 Jan 20  2012 libvt.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x. 1 root root  303591 Jan 20  2012 mpi.mod
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x. 2 root root    4096 Sep 14 16:14 openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file (actually, a link) it claims it can't find: libmpi_f90.so.1, is
</span><br>
<span class="quotelev1">&gt; clearly there. And LD_LIBRARY_PATH=/usr/lib/openmpi/lib/.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---John
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20220.php">Reuti: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20218.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<li><strong>In reply to:</strong> <a href="20218.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20221.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20221.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
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
