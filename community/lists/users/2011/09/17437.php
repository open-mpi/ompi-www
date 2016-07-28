<?
$subject_val = "[OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 26 15:19:45 2011" -->
<!-- isoreceived="20110926191945" -->
<!-- sent="Mon, 26 Sep 2011 15:19:21 -0400" -->
<!-- isosent="20110926191921" -->
<!-- name="Rocky Dunlap" -->
<!-- email="rocky_at_[hidden]" -->
<!-- subject="[OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable" -->
<!-- id="CAK-w0DenK3p1_gkEL86rRzO7EzExPwHjTADAahcpru0fwEjmgg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable<br>
<strong>From:</strong> Rocky Dunlap (<em>rocky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-26 15:19:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17438.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17436.php">Yevgeny Kliteynik: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17475.php">Matthias Jurenz: "Re: [OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable"</a>
<li><strong>Maybe reply:</strong> <a href="17475.php">Matthias Jurenz: "Re: [OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
According to the VampirTrace documentation, it is possible to create a
<br>
symbol list file in advance and set the name of the file in the
<br>
environment variable VT_GNU_NMFILE.  For example, you might do this:
<br>
<p>$ nm hello &gt; hello.nm
<br>
$ export VT_GNU_NMFILE=&quot;hello.nm&quot;
<br>
<p>I have set up a symbol file list as above (with full path name of
<br>
course) but when I run my VT instrumented program (via mpirun) it
<br>
appears to ignore the VT_GNU_NMFILE environment variable and run &quot;nm&quot;
<br>
automatically on startup (the default behavior).  This can be a time
<br>
consuming process, so I would prefer to use the pre-created symbol
<br>
list file.
<br>
<p>Can anyone confirm if the VT_GNU_NMFILE environment variable is
<br>
supported with the OpenMPI integration?
<br>
<p>Thanks,
<br>
Rocky
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17438.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17436.php">Yevgeny Kliteynik: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17475.php">Matthias Jurenz: "Re: [OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable"</a>
<li><strong>Maybe reply:</strong> <a href="17475.php">Matthias Jurenz: "Re: [OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable"</a>
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
