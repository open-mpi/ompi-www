<?
$subject_val = "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 17:31:19 2014" -->
<!-- isoreceived="20140709213119" -->
<!-- sent="Wed, 9 Jul 2014 21:30:57 +0000" -->
<!-- isosent="20140709213057" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler" -->
<!-- id="CAAbhqc4KPyFpDC13pN2F+rVQJPpQsT8+_VpeBwiCWS8fEmNXsw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53BDA934.9050203_at_inria.fr" -->
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
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-09 17:30:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1043.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Previous message:</strong> <a href="1041.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>In reply to:</strong> <a href="1041.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1043.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Reply:</strong> <a href="1043.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Brice
<br>
<p>Here are my findings (apologies for not doing make check on before-hand!)
<br>
<p>2014-07-09 20:42 GMT+00:00 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A quick look in Open MPI source code seems to say that it's manipulating
</span><br>
<span class="quotelev1">&gt; XML topologies in these lines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please go into your hwloc-1.9 build directory, and run &quot;tests/xmlbuffer&quot;
</span><br>
<span class="quotelev1">&gt; (you will may have to build it with run &quot;make xmlbuffer -C tests&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
This errors out with a segmentation fault. I tried recompiling with -g
<br>
-traceback, to no avail, nothing shows up other than:
<br>
using default import and export
<br>
exported to buffer 0x1240c40 length 40817
<br>
Segmentation fault
<br>
which is right before the &quot;re-exported&quot; statement. ulimit is not
<br>
ridiculously low.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it works, try running &quot;make check&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
This does not work, it fails on these tests:
<br>
FAIL: test-hwloc-annotate.sh
<br>
FAIL: test-hwloc-assembler.sh
<br>
FAIL: test-hwloc-calc.sh
<br>
FAIL: test-hwloc-compress-dir.sh
<br>
FAIL: test-hwloc-diffpatch.sh
<br>
<p>I have attached a tar.gz containing: test-hwloc-{annotate,assembler,...}.*
<br>
if that could help.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, can you check whether hwloc is using libxml2 or not? (just check
</span><br>
<span class="quotelev1">&gt; whether topology-xml-libxml.lo is built under src, or look for libxml2.so
</span><br>
<span class="quotelev1">&gt; in &quot;ldd libhwloc.so&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
This is linked correctly. topology-xml-libxml.lo is located in said folder.
<br>
And if I use ldd I get &quot;=&gt; /usr/lib/libxml2.so.2&quot;.
<br>
I have attached my config.log if that has any interest?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tested the same things you mentioned here for the 1.8.1 version, in that
</span><br>
case it only fails these:
<br>
FAIL: test-hwloc-annotate.sh
<br>
FAIL: test-hwloc-calc.sh
<br>
I have not attached anything for the 1.8.1 version. Say the word and you
<br>
will get that :)
<br>
xmlbuffer in 1.8.1 runs fine, and libxml is also located there.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 09/07/2014 14:06, Nick Papior Andersen a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Dear users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I think this is some kind of bug, but I would like to post here to hear
</span><br>
<span class="quotelev1">&gt; if this is true.
</span><br>
<span class="quotelev1">&gt; I have only tested this using the fortran compiler and fortran version of
</span><br>
<span class="quotelev1">&gt; openmpi/hwloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  My setup:
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
<span class="quotelev1">&gt;  I am compiling using these flags:
</span><br>
<span class="quotelev1">&gt; icc/ifort -m64 -fPIC -O2 -xHost -prec-div -prec-sqrt -opt-prefetch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  My test code is very basic (compiled using mpif90 -o hw hw.f90):
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
<span class="quotelev1">&gt;  ##### hw.f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I compiled these versions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  A) hwloc-1.8.1 and openmpi-1.6.5
</span><br>
<span class="quotelev1">&gt; B) hwloc-1.9 and openmpi-1.6.5
</span><br>
<span class="quotelev1">&gt;  C) hwloc-1.8.1 and openmpi-1.8
</span><br>
<span class="quotelev1">&gt; D) hwloc-1.9 and openmpi-1.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Besides the --prefix flag I did this:
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
<span class="quotelev1">&gt;  A and C both terminate perfectly. No errors.
</span><br>
<span class="quotelev1">&gt; B and D both terminate with errors. I have attached the error message for
</span><br>
<span class="quotelev1">&gt; both instances.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  It seems related to this:
</span><br>
<span class="quotelev1">&gt;   ../../orte/util/nidmap.c at line 106
</span><br>
<span class="quotelev1">&gt; which does something with a hwloc topography.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have also tried option D with the GNU compiler:
</span><br>
<span class="quotelev1">&gt; gfortran/gcc --version
</span><br>
<span class="quotelev1">&gt;   4.7.2-5
</span><br>
<span class="quotelev1">&gt; In this case I don't get any errors. Hence my suspicion lies entirely on
</span><br>
<span class="quotelev1">&gt; intel compiler and hwloc-1.9. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Note, I can run some of the utilities installed by hwloc without
</span><br>
<span class="quotelev1">&gt; problems. However, I am in no way experienced in debugging hwloc so I might
</span><br>
<span class="quotelev1">&gt; be doing something wrong here?
</span><br>
<span class="quotelev1">&gt; Also, I am not sure whether this is related to openmpi or hwloc, however,
</span><br>
<span class="quotelev1">&gt; as I only found the error dependent on the hwloc version I suspected this
</span><br>
<span class="quotelev1">&gt; might be the correct place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Please advice me if you need additional information.
</span><br>
<span class="quotelev1">&gt; PS: I could not find anything on the bug-tracker.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Kind regards Nick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing listhwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/07/index.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/07/index.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Kind regards Nick


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1042/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1042/test-hwloc.tar.gz">test-hwloc.tar.gz</a>
</ul>
<!-- attachment="test-hwloc.tar.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1042/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1043.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Previous message:</strong> <a href="1041.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>In reply to:</strong> <a href="1041.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1043.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Reply:</strong> <a href="1043.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
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
