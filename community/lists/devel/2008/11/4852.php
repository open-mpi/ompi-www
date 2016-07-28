<?
$subject_val = "[OMPI devel] Progress of the asynchronous messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 13:00:18 2008" -->
<!-- isoreceived="20081106180018" -->
<!-- sent="Thu, 6 Nov 2008 18:00:06 +0000 (GMT)" -->
<!-- isosent="20081106180006" -->
<!-- name="vladimir marjanovic" -->
<!-- email="mrdzy_at_[hidden]" -->
<!-- subject="[OMPI devel] Progress of the asynchronous messages" -->
<!-- id="770344.67353.qm_at_web24103.mail.ird.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Progress of the asynchronous messages<br>
<strong>From:</strong> vladimir marjanovic (<em>mrdzy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 13:00:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4853.php">Brian W. Barrett: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Previous message:</strong> <a href="4851.php">Jeff Squyres: "[OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4858.php">Jeff Squyres: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
<li><strong>Reply:</strong> <a href="4858.php">Jeff Squyres: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am new user of Open MPI, I've used MPICH before.
I've tried on the user list but they couldn't help me.

There is performance bug with the following scenario:

proc_B:  MPI_Isend(...,proc_A,..,&amp;request)
                do{
                  sleep(1);
                  MPI_Test(..,&amp;flag,&amp;request);
                  count++
                }while(!flag);

proc_A: MPI_Recv(...,proc_B);

For message size 8MB,  proc_B calls MPI_Test 88 times. It means that
point to point communication costs 88 seconds.
Btw, bandwidth isn't the problem (interconnection network: InfiniBand)

Obviously, there is the problem with progress of the asynchronous
messages.  In order to overlap communication and computation I don't want to use
MPI_Wait.  Probably, the message is being decomposed into chucks and the
size of chuck is probably defined by environment variable.

 How can I advance the message more aggressively or can I control size of chunk?
Thank you very much

Vladimir


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4852/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4853.php">Brian W. Barrett: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Previous message:</strong> <a href="4851.php">Jeff Squyres: "[OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4858.php">Jeff Squyres: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
<li><strong>Reply:</strong> <a href="4858.php">Jeff Squyres: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
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
