<?
$subject_val = "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 16:42:33 2014" -->
<!-- isoreceived="20140709204233" -->
<!-- sent="Wed, 09 Jul 2014 22:42:28 +0200" -->
<!-- isosent="20140709204228" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler" -->
<!-- id="53BDA934.9050203_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAbhqc4OU=WS=2ADmcHTU1U7+DYiSbNjZUfomzyVLeqGXuJLQA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-09 16:42:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1042.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Previous message:</strong> <a href="1040.php">Nick Papior Andersen: "[hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>In reply to:</strong> <a href="1040.php">Nick Papior Andersen: "[hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1042.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Reply:</strong> <a href="1042.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>A quick look in Open MPI source code seems to say that it's manipulating
<br>
XML topologies in these lines.
<br>
<p>Please go into your hwloc-1.9 build directory, and run &quot;tests/xmlbuffer&quot;
<br>
(you will may have to build it with run &quot;make xmlbuffer -C tests&quot;).
<br>
<p>If it works, try running &quot;make check&quot;.
<br>
<p>Also, can you check whether hwloc is using libxml2 or not? (just check
<br>
whether topology-xml-libxml.lo is built under src, or look for
<br>
libxml2.so in &quot;ldd libhwloc.so&quot;).
<br>
<p>thanks
<br>
Brice
<br>
<p><p><p>Le 09/07/2014 14:06, Nick Papior Andersen a &#233;crit :
<br>
<span class="quotelev1">&gt; Dear users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this is some kind of bug, but I would like to post here to
</span><br>
<span class="quotelev1">&gt; hear if this is true.
</span><br>
<span class="quotelev1">&gt; I have only tested this using the fortran compiler and fortran version
</span><br>
<span class="quotelev1">&gt; of openmpi/hwloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My setup:
</span><br>
<span class="quotelev1">&gt; intel compiler:
</span><br>
<span class="quotelev1">&gt;   composer_xe_2013.3.163
</span><br>
<span class="quotelev1">&gt; ifort --version:
</span><br>
<span class="quotelev1">&gt;   13.1.1 20130313
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am compiling using these flags:
</span><br>
<span class="quotelev1">&gt; icc/ifort -m64 -fPIC -O2 -xHost -prec-div -prec-sqrt -opt-prefetch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My test code is very basic (compiled using mpif90 -o hw hw.f90):
</span><br>
<span class="quotelev1">&gt; ##### hw.f90
</span><br>
<span class="quotelev1">&gt; program hello_world
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; integer :: rank, size, ierror, tag, status(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call MPI_INIT(ierror)
</span><br>
<span class="quotelev1">&gt; call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierror)
</span><br>
<span class="quotelev1">&gt; call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierror)
</span><br>
<span class="quotelev1">&gt; print*, 'node', rank, ' of ',size
</span><br>
<span class="quotelev1">&gt; call MPI_FINALIZE(ierror)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program hello_world
</span><br>
<span class="quotelev1">&gt; ##### hw.f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled these versions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A) hwloc-1.8.1 and openmpi-1.6.5
</span><br>
<span class="quotelev1">&gt; B) hwloc-1.9 and openmpi-1.6.5
</span><br>
<span class="quotelev1">&gt; C) hwloc-1.8.1 and openmpi-1.8
</span><br>
<span class="quotelev1">&gt; D) hwloc-1.9 and openmpi-1.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Besides the --prefix flag I did this:
</span><br>
<span class="quotelev1">&gt; For all compilations of hwloc I compiled using these configure settings:
</span><br>
<span class="quotelev1">&gt; --disable-{libnuma,opencl,cuda,nvml,gv} --enable-static
</span><br>
<span class="quotelev1">&gt; For all compilations of openmpi I compiled using these configure settings:
</span><br>
<span class="quotelev1">&gt; --with-hwloc=&lt;placement of equivalent hwloc installation&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A and C both terminate perfectly. No errors.
</span><br>
<span class="quotelev1">&gt; B and D both terminate with errors. I have attached the error message
</span><br>
<span class="quotelev1">&gt; for both instances.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems related to this:
</span><br>
<span class="quotelev1">&gt;   ../../orte/util/nidmap.c at line 106
</span><br>
<span class="quotelev1">&gt; which does something with a hwloc topography.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also tried option D with the GNU compiler: 
</span><br>
<span class="quotelev1">&gt; gfortran/gcc --version
</span><br>
<span class="quotelev1">&gt;   4.7.2-5
</span><br>
<span class="quotelev1">&gt; In this case I don't get any errors. Hence my suspicion lies entirely
</span><br>
<span class="quotelev1">&gt; on intel compiler and hwloc-1.9. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note, I can run some of the utilities installed by hwloc without
</span><br>
<span class="quotelev1">&gt; problems. However, I am in no way experienced in debugging hwloc so I
</span><br>
<span class="quotelev1">&gt; might be doing something wrong here?
</span><br>
<span class="quotelev1">&gt; Also, I am not sure whether this is related to openmpi or hwloc,
</span><br>
<span class="quotelev1">&gt; however, as I only found the error dependent on the hwloc version I
</span><br>
<span class="quotelev1">&gt; suspected this might be the correct place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please advice me if you need additional information.
</span><br>
<span class="quotelev1">&gt; PS: I could not find anything on the bug-tracker.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
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
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/07/index.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/07/index.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1041/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1042.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Previous message:</strong> <a href="1040.php">Nick Papior Andersen: "[hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>In reply to:</strong> <a href="1040.php">Nick Papior Andersen: "[hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1042.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Reply:</strong> <a href="1042.php">Nick Papior Andersen: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
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
