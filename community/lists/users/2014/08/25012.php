<?
$subject_val = "[OMPI users] how MPI_Get can work with multiple memory regions attached to a window via MPI_Win_attach";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 04:43:56 2014" -->
<!-- isoreceived="20140814084356" -->
<!-- sent="Thu, 14 Aug 2014 14:13:55 +0530" -->
<!-- isosent="20140814084355" -->
<!-- name="madhurima madhunapanthula" -->
<!-- email="erankimadhu_at_[hidden]" -->
<!-- subject="[OMPI users] how MPI_Get can work with multiple memory regions attached to a window via MPI_Win_attach" -->
<!-- id="CAFqWg=QQ3fnR8dz1p-LS8Rs+1xtzLHGZbKPzWah0cNa6Hnn_bg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] how MPI_Get can work with multiple memory regions attached to a window via MPI_Win_attach<br>
<strong>From:</strong> madhurima madhunapanthula (<em>erankimadhu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 04:43:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25013.php">Christoph Niethammer: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Previous message:</strong> <a href="25011.php">Mike Dubman: "Re: [OMPI users] mpi+openshmem hybrid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi,
<br>
<p>In <a href="http://www.mpich.org/static/docs/v3.1/www3/MPI_Win_attach.html">http://www.mpich.org/static/docs/v3.1/www3/MPI_Win_attach.html</a>,  for MPI
<br>
3,  The API MPI_Win_attach is supported :
<br>
<p><p><p><p><p>int MPI_Win_attach(MPI_Win win, void *base, MPI_Aint size)
<br>
<p><p><p>It allows multiple (but non-overlapping) memory regions to be attached to
<br>
the same window, after the window is created. Therefore, I should be able
<br>
to have multiple such &#226;&#128;&#156;attach&#226;&#128;&#157; calls for the same window, with different
<br>
&#226;&#128;&#156;base&#226;&#128;&#157; address to be specified in each attach call.
<br>
<p>If that is the case, when I issue the MPI_Get, how can I specify which
<br>
&#226;&#128;&#156;base address&#226;&#128;&#157; on the window is what I need to fetch the data?  As MPI_get
<br>
has the window handle to be one of the input parameters, but not&#226;&#128;&#156;base
<br>
address&#226;&#128;&#157;.  The base address should be resolved by the target process from
<br>
the registered window handle.
<br>
<p>So my question is: how can  MPI_Get  handle the situation where multiple
<br>
memory regions are attached to the same window?
<br>
<p>Thank you!
<br>
<p><p><pre>
-- 
Lokah samasta sukhinobhavanthu
Thanks,
Madhurima
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25012/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25013.php">Christoph Niethammer: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Previous message:</strong> <a href="25011.php">Mike Dubman: "Re: [OMPI users] mpi+openshmem hybrid"</a>
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
