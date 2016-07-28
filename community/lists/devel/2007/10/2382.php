<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct  4 18:56:40 2007" -->
<!-- isoreceived="20071004225640" -->
<!-- sent="Thu, 4 Oct 2007 16:59:01 -0600" -->
<!-- isosent="20071004225901" -->
<!-- name="David Daniel" -->
<!-- email="ddd_at_[hidden]" -->
<!-- subject="[OMPI devel] collective problems" -->
<!-- id="64D5B4B7-4928-49E8-B024-FBA95FDDF354_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> David Daniel (<em>ddd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-04 18:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2383.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2381.php">Jinhui Qin: "[OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2383.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2383.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I have been seeing some nasty behaviour in collectives, particularly  
<br>
bcast and reduce.  Attached is a reproducer (for bcast).
<br>
<p>The code will rapidly slow to a crawl (usually interpreted as a hang  
<br>
in real applications) and sometimes gets killed with sigbus or sigterm.
<br>
<p>I see this with
<br>
<p>&nbsp;&nbsp;&nbsp;openmpi-1.2.3 or openmpi-1.2.4
<br>
&nbsp;&nbsp;&nbsp;ofed 1.2
<br>
&nbsp;&nbsp;&nbsp;linux 2.6.19 + patches
<br>
&nbsp;&nbsp;&nbsp;gcc (GCC) 3.4.5 20051201 (Red Hat 3.4.5-2)
<br>
&nbsp;&nbsp;&nbsp;4 socket, dual core opterons
<br>
<p>run as
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --mca btl self,openib --npernode 1 --np 4 bcast-hang
<br>
<p>To my now uneducated eye it looks as if the root process is rushing  
<br>
ahead and not progressing earlier bcasts.
<br>
<p>Anyone else seeing similar?  Any ideas for workarounds?
<br>
<p>As a point of reference, mvapich2 0.9.8 works fine.
<br>
<p>Thanks, David
<br>
<p><p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2382/bcast-hang.c">bcast-hang.c</a>
</ul>
<!-- attachment="bcast-hang.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2383.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2381.php">Jinhui Qin: "[OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2383.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2383.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
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
