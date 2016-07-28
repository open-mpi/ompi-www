<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 02:07:20 2007" -->
<!-- isoreceived="20070607060720" -->
<!-- sent="Thu, 7 Jun 2007 18:07:16 +1200" -->
<!-- isosent="20070607060716" -->
<!-- name="Code Master" -->
<!-- email="cpp.codemaster_at_[hidden]" -->
<!-- subject="[OMPI users] making all library components static (questions about --enable-mcs-static)" -->
<!-- id="1626092b0706062307y5bf6513fjb0a73cc925af7904_at_mail.gmail.com" -->
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
<strong>From:</strong> Code Master (<em>cpp.codemaster_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 02:07:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3392.php">Jeff Squyres: "Re: [OMPI users] SGE and OFED1.1"</a>
<li><strong>Previous message:</strong> <a href="3390.php">Michael Edwards: "[OMPI users] SGE and OFED1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3393.php">Jeff Squyres: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>Reply:</strong> <a href="3393.php">Jeff Squyres: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wish to compile openmpi-1.2.2 so that it:
<br>
- support MPI_THREAD_MULTIPLE
<br>
- enable profiling (generate gmon.out for each process after my client app
<br>
finish running) to tell apart CPU time of my client program from the MPI
<br>
library
<br>
- static linking for everything (incl client app and all components of
<br>
library openmpi)
<br>
<p>in the documentation, it says that --enable-mcs-static=&lt;CSV list&gt; will
<br>
enable static linking of the modules in the list, however what can I specify
<br>
if I want to statically link *all* mcs modules without knowing the list of
<br>
modules available?
<br>
<p>Also this is the plan for my command used for configuring openmpi:
<br>
<p>./configure CFLAGS=&quot;-g -pg -O3 -static&quot; --prefix=./ --enable-mpi-threads
<br>
--enable-progress-threads --enable-static  --disable-shared
<br>
--enable-mcs-static --with-devel-headers
<br>
<p>Did you see anything wrong with this command?  what else can I modify to
<br>
satisfy the goals listed above?
<br>
<p>Thanks!
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3391/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3392.php">Jeff Squyres: "Re: [OMPI users] SGE and OFED1.1"</a>
<li><strong>Previous message:</strong> <a href="3390.php">Michael Edwards: "[OMPI users] SGE and OFED1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3393.php">Jeff Squyres: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>Reply:</strong> <a href="3393.php">Jeff Squyres: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
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
