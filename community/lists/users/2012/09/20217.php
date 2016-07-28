<?
$subject_val = "[OMPI users] Newbie question?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 15 13:01:05 2012" -->
<!-- isoreceived="20120915170105" -->
<!-- sent="Sat, 15 Sep 2012 13:00:59 -0400" -->
<!-- isosent="20120915170059" -->
<!-- name="John Chludzinski" -->
<!-- email="john.chludzinski_at_[hidden]" -->
<!-- subject="[OMPI users] Newbie question?" -->
<!-- id="CABftzejUYzpRUF3BznXm-UwDmjRuZxePnjJqMRy2dioz7sP3iA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Newbie question?<br>
<strong>From:</strong> John Chludzinski (<em>john.chludzinski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-15 13:00:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20218.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20216.php">Ralph Castain: "Re: [OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20218.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20218.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20220.php">Reuti: "Re: [OMPI users] Newbie question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I installed OpenMPI (I have a simple dual core AMD notebook with Fedora 16)
<br>
via:
<br>
<p># yum install openmpi
<br>
# yum install openmpi-devel
<br>
# mpirun --version
<br>
mpirun (Open MPI) 1.5.4
<br>
<p>I added:
<br>
<p>$ PATH=PATH=/usr/lib/openmpi/bin/:$PATH
<br>
$ LD_LIBRARY_PATH=/usr/lib/openmpi/lib/
<br>
<p>Then:
<br>
<p>$ mpif90 ex1.f95
<br>
$ mpiexec -n 4 ./a.out
<br>
./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
./a.out: error while loading shared libraries: libmpi_f90.so.1: cannot open
<br>
shared object file: No such file or directory
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
<p>ls -l /usr/lib/openmpi/lib/
<br>
total 6788
<br>
lrwxrwxrwx. 1 root root      25 Sep 15 12:25 libmca_common_sm.so -&gt;
<br>
libmca_common_sm.so.2.0.0
<br>
lrwxrwxrwx. 1 root root      25 Sep 14 16:14 libmca_common_sm.so.2 -&gt;
<br>
libmca_common_sm.so.2.0.0
<br>
-rwxr-xr-x. 1 root root    8492 Jan 20  2012 libmca_common_sm.so.2.0.0
<br>
lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_cxx.so -&gt;
<br>
libmpi_cxx.so.1.0.1
<br>
lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_cxx.so.1 -&gt;
<br>
libmpi_cxx.so.1.0.1
<br>
-rwxr-xr-x. 1 root root   87604 Jan 20  2012 libmpi_cxx.so.1.0.1
<br>
lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_f77.so -&gt;
<br>
libmpi_f77.so.1.0.2
<br>
lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_f77.so.1 -&gt;
<br>
libmpi_f77.so.1.0.2
<br>
-rwxr-xr-x. 1 root root  179912 Jan 20  2012 libmpi_f77.so.1.0.2
<br>
lrwxrwxrwx. 1 root root      19 Sep 15 12:25 libmpi_f90.so -&gt;
<br>
libmpi_f90.so.1.1.0
<br>
lrwxrwxrwx. 1 root root      19 Sep 14 16:14 libmpi_f90.so.1 -&gt;
<br>
libmpi_f90.so.1.1.0
<br>
-rwxr-xr-x. 1 root root   10364 Jan 20  2012 libmpi_f90.so.1.1.0
<br>
lrwxrwxrwx. 1 root root      15 Sep 15 12:25 libmpi.so -&gt; libmpi.so.1.0.2
<br>
lrwxrwxrwx. 1 root root      15 Sep 14 16:14 libmpi.so.1 -&gt; libmpi.so.1.0.2
<br>
-rwxr-xr-x. 1 root root 1383444 Jan 20  2012 libmpi.so.1.0.2
<br>
lrwxrwxrwx. 1 root root      21 Sep 15 12:25 libompitrace.so -&gt;
<br>
libompitrace.so.0.0.0
<br>
lrwxrwxrwx. 1 root root      21 Sep 14 16:14 libompitrace.so.0 -&gt;
<br>
libompitrace.so.0.0.0
<br>
-rwxr-xr-x. 1 root root   13572 Jan 20  2012 libompitrace.so.0.0.0
<br>
lrwxrwxrwx. 1 root root      20 Sep 15 12:25 libopen-pal.so -&gt;
<br>
libopen-pal.so.3.0.0
<br>
lrwxrwxrwx. 1 root root      20 Sep 14 16:14 libopen-pal.so.3 -&gt;
<br>
libopen-pal.so.3.0.0
<br>
-rwxr-xr-x. 1 root root  386324 Jan 20  2012 libopen-pal.so.3.0.0
<br>
lrwxrwxrwx. 1 root root      20 Sep 15 12:25 libopen-rte.so -&gt;
<br>
libopen-rte.so.3.0.0
<br>
lrwxrwxrwx. 1 root root      20 Sep 14 16:14 libopen-rte.so.3 -&gt;
<br>
libopen-rte.so.3.0.0
<br>
-rwxr-xr-x. 1 root root  790052 Jan 20  2012 libopen-rte.so.3.0.0
<br>
-rw-r--r--. 1 root root  301520 Jan 20  2012 libotf.a
<br>
lrwxrwxrwx. 1 root root      15 Sep 15 12:25 libotf.so -&gt; libotf.so.0.0.1
<br>
lrwxrwxrwx. 1 root root      15 Sep 14 16:14 libotf.so.0 -&gt; libotf.so.0.0.1
<br>
-rwxr-xr-x. 1 root root  206384 Jan 20  2012 libotf.so.0.0.1
<br>
-rw-r--r--. 1 root root  337970 Jan 20  2012 libvt.a
<br>
-rw-r--r--. 1 root root  591070 Jan 20  2012 libvt-hyb.a
<br>
lrwxrwxrwx. 1 root root      18 Sep 15 12:25 libvt-hyb.so -&gt;
<br>
libvt-hyb.so.0.0.0
<br>
lrwxrwxrwx. 1 root root      18 Sep 14 16:14 libvt-hyb.so.0 -&gt;
<br>
libvt-hyb.so.0.0.0
<br>
-rwxr-xr-x. 1 root root  428844 Jan 20  2012 libvt-hyb.so.0.0.0
<br>
-rw-r--r--. 1 root root  541004 Jan 20  2012 libvt-mpi.a
<br>
lrwxrwxrwx. 1 root root      18 Sep 15 12:25 libvt-mpi.so -&gt;
<br>
libvt-mpi.so.0.0.0
<br>
lrwxrwxrwx. 1 root root      18 Sep 14 16:14 libvt-mpi.so.0 -&gt;
<br>
libvt-mpi.so.0.0.0
<br>
-rwxr-xr-x. 1 root root  396352 Jan 20  2012 libvt-mpi.so.0.0.0
<br>
-rw-r--r--. 1 root root  372352 Jan 20  2012 libvt-mt.a
<br>
lrwxrwxrwx. 1 root root      17 Sep 15 12:25 libvt-mt.so -&gt;
<br>
libvt-mt.so.0.0.0
<br>
lrwxrwxrwx. 1 root root      17 Sep 14 16:14 libvt-mt.so.0 -&gt;
<br>
libvt-mt.so.0.0.0
<br>
-rwxr-xr-x. 1 root root  266104 Jan 20  2012 libvt-mt.so.0.0.0
<br>
-rw-r--r--. 1 root root   60390 Jan 20  2012 libvt-pomp.a
<br>
lrwxrwxrwx. 1 root root      14 Sep 15 12:25 libvt.so -&gt; libvt.so.0.0.0
<br>
lrwxrwxrwx. 1 root root      14 Sep 14 16:14 libvt.so.0 -&gt; libvt.so.0.0.0
<br>
-rwxr-xr-x. 1 root root  242604 Jan 20  2012 libvt.so.0.0.0
<br>
-rwxr-xr-x. 1 root root  303591 Jan 20  2012 mpi.mod
<br>
drwxr-xr-x. 2 root root    4096 Sep 14 16:14 openmpi
<br>
<p><p>The file (actually, a link) it claims it can't find: libmpi_f90.so.1, is
<br>
clearly there. And LD_LIBRARY_PATH=/usr/lib/openmpi/lib/.
<br>
<p>What's the problem?
<br>
<p>---John
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20217/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20218.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Previous message:</strong> <a href="20216.php">Ralph Castain: "Re: [OMPI users] problem with openmpi-1.7a1r27338 on Solaris 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20218.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20218.php">Ralph Castain: "Re: [OMPI users] Newbie question?"</a>
<li><strong>Reply:</strong> <a href="20220.php">Reuti: "Re: [OMPI users] Newbie question?"</a>
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
