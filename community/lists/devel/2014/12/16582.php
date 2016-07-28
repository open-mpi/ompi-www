<?
$subject_val = "[OMPI devel] [1.8.4rc3+patches] Solaris status summary";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 23:24:51 2014" -->
<!-- isoreceived="20141213042451" -->
<!-- sent="Fri, 12 Dec 2014 20:24:48 -0800" -->
<!-- isosent="20141213042448" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.8.4rc3+patches] Solaris status summary" -->
<!-- id="CAAvDA17fxqgp6MkRDL+CQcjHgS7xPtcnO9hrx8XjZbyAr-eRCA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [1.8.4rc3+patches] Solaris status summary<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 23:24:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16583.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Previous message:</strong> <a href="16581.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It appears that with Ralph's oob_tcp patches (paul.diff) everything is now
<br>
OK on Solaris-11/x86-64.
<br>
<p>On Solaris-10/SPARC I needed to fix guess_strlen() (or change &quot;%u&quot; to &quot;%d&quot;
<br>
to avoid the issue) or else I didn't get very far at all (SEGV in orterun).
<br>
However, with that issue resolved things are still not &quot;golden&quot;.
<br>
<p>I have applied the oob_tcp patches and rebuilt on the Solaris-10/SPARC
<br>
system.
<br>
I had hoped it would fix an interrupted select warning I'd seen.
<br>
However, it is still there along with the loopback-if warning and one about
<br>
a failed accept().
<br>
Output is below.
<br>
<p>-Paul
<br>
<p>$ mpirun -mca btl sm,self -np 2 examples/ring_c
<br>
--------------------------------------------------------------------------
<br>
WARNING: No loopback interface was found. This can cause problems
<br>
when we spawn processes as they are likely to be unable to connect
<br>
back to their host daemon. Sadly, it may take awhile for the connect
<br>
attempt to fail, so you may experience a significant hang time.
<br>
<p>You may wish to ctrl-c out of your job and activate loopback support
<br>
on at least one interface before trying again.
<br>
<p>--------------------------------------------------------------------------
<br>
select: Interrupted system call
<br>
--------------------------------------------------------------------------
<br>
WARNING: No loopback interface was found. This can cause problems
<br>
when we spawn processes as they are likely to be unable to connect
<br>
back to their host daemon. Sadly, it may take awhile for the connect
<br>
attempt to fail, so you may experience a significant hang time.
<br>
<p>You may wish to ctrl-c out of your job and activate loopback support
<br>
on at least one interface before trying again.
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: No loopback interface was found. This can cause problems
<br>
when we spawn processes as they are likely to be unable to connect
<br>
back to their host daemon. Sadly, it may take awhile for the connect
<br>
attempt to fail, so you may experience a significant hang time.
<br>
<p>You may wish to ctrl-c out of your job and activate loopback support
<br>
on at least one interface before trying again.
<br>
<p>--------------------------------------------------------------------------
<br>
[xxx.xxx.xxx.xxx:09934] mca_oob_tcp_accept: accept() failed: Resource
<br>
temporarily unavailable (11).
<br>
Process 0 sending 10 to 1, tag 201 (2 processes in ring)
<br>
Process 0 sent to 1
<br>
Process 0 decremented value: 9
<br>
Process 0 decremented value: 8
<br>
Process 0 decremented value: 7
<br>
Process 0 decremented value: 6
<br>
Process 0 decremented value: 5
<br>
Process 0 decremented value: 4
<br>
Process 0 decremented value: 3
<br>
Process 0 decremented value: 2
<br>
Process 0 decremented value: 1
<br>
Process 0 decremented value: 0
<br>
Process 0 exiting
<br>
Process 1 exiting
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16582/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16583.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Previous message:</strong> <a href="16581.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<!-- nextthread="start" -->
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
