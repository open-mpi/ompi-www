<?
$subject_val = "[OMPI users] 1.7 hangs with --preload-binary";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  9 19:30:41 2013" -->
<!-- isoreceived="20130409233041" -->
<!-- sent="Tue, 9 Apr 2013 18:30:35 -0500" -->
<!-- isosent="20130409233035" -->
<!-- name="Thomas Vacek" -->
<!-- email="vacek008_at_[hidden]" -->
<!-- subject="[OMPI users] 1.7 hangs with --preload-binary" -->
<!-- id="CAPAaA558wy94sno1Qu1W4qySp=Lx9EymG5D=TEvRhLHJtsZOkQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] 1.7 hangs with --preload-binary<br>
<strong>From:</strong> Thomas Vacek (<em>vacek008_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-09 19:30:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21697.php">Ralph Castain: "Re: [OMPI users] 1.7 hangs with --preload-binary"</a>
<li><strong>Previous message:</strong> <a href="21695.php">Ed Blosch: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21697.php">Ralph Castain: "Re: [OMPI users] 1.7 hangs with --preload-binary"</a>
<li><strong>Reply:</strong> <a href="21697.php">Ralph Castain: "Re: [OMPI users] 1.7 hangs with --preload-binary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just built 1.7.  If I distribute the binary, it works fine.  If I use the
<br>
--preload-binary option, it prints
<br>
<p>[warn] opal_libevent2019_event_base_loop: reentrant invocation.  Only one
<br>
event_base_loop can run on each event_base at once.
<br>
<p>many times per second.
<br>
<p>I have bit of an odd configuration: The admins in my organization are too
<br>
busy to support us, so the installation is in a home folder rather than in
<br>
the system folders.  That also means no NFS, so it's kind of nice to have
<br>
the binary distributed by the root node.  I configured with
<br>
--disable-dlopen, and use -x PATH -x LD_LIBRARY_PATH in the mpirun
<br>
invocation.  As I said, it works fine if the binary is pre-distributed, but
<br>
the --preload-binary and ---preload-files options both cause this problem.
<br>
&nbsp;This problem occurs with the head node and one slave---I haven't tried
<br>
larger configurations.
<br>
<p>Thanks,
<br>
<p>Tom
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21696/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21697.php">Ralph Castain: "Re: [OMPI users] 1.7 hangs with --preload-binary"</a>
<li><strong>Previous message:</strong> <a href="21695.php">Ed Blosch: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21697.php">Ralph Castain: "Re: [OMPI users] 1.7 hangs with --preload-binary"</a>
<li><strong>Reply:</strong> <a href="21697.php">Ralph Castain: "Re: [OMPI users] 1.7 hangs with --preload-binary"</a>
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
