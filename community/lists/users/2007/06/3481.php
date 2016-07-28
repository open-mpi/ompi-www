<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 00:38:48 2007" -->
<!-- isoreceived="20070613043848" -->
<!-- sent="Tue, 12 Jun 2007 21:38:47 -0700" -->
<!-- isosent="20070613043847" -->
<!-- name="Julian Cummings" -->
<!-- email="cummings_at_[hidden]" -->
<!-- subject="[OMPI users] C++ error: static object marked for destruction more than once" -->
<!-- id="005a01c7ad74$bb8d26f0$6401a8c0_at_JULES" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Julian Cummings (<em>cummings_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 00:38:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3482.php">Adrian Knoth: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3480.php">lichanjuan04_at_[hidden]: "[OMPI users] can't run parallel job on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3484.php">Brock Palen: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Reply:</strong> <a href="3484.php">Brock Palen: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Reply:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>This is a follow up to a message originally posted by Andrew J Caird on
<br>
2006-08-16.  No one ever replied to Andrew's message, and I am experiencing
<br>
exactly the same problem with a more recent version of OpenMPI (1.2.1) and
<br>
the PGI compiler (7.0).  Essentially, the problem is that if you link an MPI
<br>
application against the mpi_cxx library, at run time you will get a failure
<br>
with each process giving the following message:
<br>
<p>C++ runtime abort: internal error: static object marked for destruction more
<br>
than once
<br>
<p>If your MPI application does not utilize the MPI C++ bindings, you can link
<br>
without this library and the runtime errors will go away.  
<br>
<p>Since this problem was reported long ago and no one ever replied to the
<br>
report, I would assume that this is a bug either in the mpi_cxx library or
<br>
in the way it is built under the PGI compiler.  I could not figure out how
<br>
to submit a bug report to the open-mpi bug tracking system, so I hope that
<br>
this message to the users list will suffice.  I am attaching my ompi_info
<br>
--all output to this message.  I am running on a Myrinet-based Linux
<br>
cluster, but the particulars are not relevant for this problem.  You can
<br>
replicate the problem with any trivial MPI application code, such as the
<br>
standard &quot;hello&quot; program using the standard C interface.  I am attaching my
<br>
hello.c source code.  Compile with &quot;mpicxx -o hello hello.c&quot; and run with
<br>
&quot;mpirun -np 1 ./hello&quot;.  The runtime error disappears if you compile with
<br>
&quot;mpicc -o hello hello.c&quot; to avoid linking against the mpi_cxx library.
<br>
<p>Please let me know if there is any fix available for this problem.
<br>
<p>Regards, Julian C.
<br>
<p>

<br><p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3481/ompi_info.txt.gz">ompi_info.txt.gz</a>
</ul>
<!-- attachment="ompi_info.txt.gz" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3481/hello.c">hello.c</a>
</ul>
<!-- attachment="hello.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3482.php">Adrian Knoth: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3480.php">lichanjuan04_at_[hidden]: "[OMPI users] can't run parallel job on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3484.php">Brock Palen: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Reply:</strong> <a href="3484.php">Brock Palen: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Reply:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
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
