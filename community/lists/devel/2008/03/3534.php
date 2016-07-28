<?
$subject_val = "[OMPI devel] trunk segfault";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 26 10:34:58 2008" -->
<!-- isoreceived="20080326143458" -->
<!-- sent="Wed, 26 Mar 2008 16:34:51 +0200" -->
<!-- isosent="20080326143451" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk segfault" -->
<!-- id="453d39990803260734xb8d1d64i162d01c3859059ab_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] trunk segfault<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-26 10:34:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3535.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<li><strong>Previous message:</strong> <a href="3533.php">Ralph H Castain: "Re: [OMPI devel] Debug output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3548.php">Jeff Squyres: "Re: [OMPI devel] trunk segfault"</a>
<li><strong>Reply:</strong> <a href="3548.php">Jeff Squyres: "Re: [OMPI devel] trunk segfault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, all
<br>
<p>I compiled and builded source from trunk
<br>
and it causes segfault
<br>
<p>/home/USERS/lenny/OMPI_ORTE_NEW/bin/mpirun -np 1 -H witch17
<br>
/home/USERS/lenny/TESTS/ORTE/mpi_p01_NEW -t lt
<br>
<p>--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
&nbsp;&nbsp;mca_mpi_register_params() failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
[witch17:01220] *** Process received signal ***
<br>
[witch17:01220] Signal: Segmentation fault (11)
<br>
[witch17:01220] Signal code:  (128)
<br>
[witch17:01220] Failing at address: (nil)
<br>
[witch17:01220] [ 0] /lib64/libpthread.so.0 [0x2aadf7072c10]
<br>
[witch17:01220] [ 1]
<br>
/home/USERS/lenny/OMPI_ORTE_NEW/lib/libopen-pal.so.0(free+0x56)
<br>
[0x2aadf6acb6d6]
<br>
[witch17:01220] [ 2]
<br>
/home/USERS/lenny/OMPI_ORTE_NEW/lib/libopen-pal.so.0(opal_argv_free+0x25)
<br>
[0x2aadf6ab9635]
<br>
[witch17:01220] [ 3] /home/USERS/lenny/OMPI_ORTE_NEW/lib/libmpi.so.0
<br>
[0x2aadf67f4206]
<br>
[witch17:01220] [ 4]
<br>
/home/USERS/lenny/OMPI_ORTE_NEW/lib/libmpi.so.0(MPI_Init+0xf0)
<br>
[0x2aadf68117c0]
<br>
[witch17:01220] [ 5] /home/USERS/lenny/TESTS/ORTE/mpi_p01_NEW(main+0xef)
<br>
[0x40109f]
<br>
[witch17:01220] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x2aadf7199154]
<br>
[witch17:01220] [ 7] /home/USERS/lenny/TESTS/ORTE/mpi_p01_NEW [0x400ee9]
<br>
[witch17:01220] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 1220 on node witch17 exited on
<br>
signal 11 (Segmentation fault).
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3534/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3535.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17956"</a>
<li><strong>Previous message:</strong> <a href="3533.php">Ralph H Castain: "Re: [OMPI devel] Debug output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3548.php">Jeff Squyres: "Re: [OMPI devel] trunk segfault"</a>
<li><strong>Reply:</strong> <a href="3548.php">Jeff Squyres: "Re: [OMPI devel] trunk segfault"</a>
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
