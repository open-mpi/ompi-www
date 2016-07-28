<?
$subject_val = "[OMPI users] Progress of the asynchronous messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 10:19:14 2008" -->
<!-- isoreceived="20081106151914" -->
<!-- sent="Thu, 6 Nov 2008 15:19:09 +0000 (GMT)" -->
<!-- isosent="20081106151909" -->
<!-- name="vladimir marjanovic" -->
<!-- email="mrdzy_at_[hidden]" -->
<!-- subject="[OMPI users] Progress of the asynchronous messages" -->
<!-- id="558046.34605.qm_at_web24106.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Progress of the asynchronous messages<br>
<strong>From:</strong> vladimir marjanovic (<em>mrdzy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 10:19:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7223.php">Eugene Loh: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="7221.php">Jeff Squyres: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7223.php">Eugene Loh: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Reply:</strong> <a href="7223.php">Eugene Loh: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,

I am new user of Open MPI, I've used MPICH before.

There is performance bug with the following scenario:

proc_B:  MPI_Isend(...,proc_A,..,&amp;request)
                   do{
                  sleep(1);
                  MPI_Test(..,&amp;flag,&amp;request);
                  count++
                }while(!flag);

proc_A: MPI_Recv(...,proc_B);

For message size 8MB,  proc_B calls MPI_Test 88 times. It means that point to point communication costs 88 seconds.
Btw, bandwidth isn't the problem (interconnection network: InfiniBand)

Obviously, there is the problem with progress of the asynchronous messages.

How can I avoid this problem?
Thank you very much.

Vladimir



      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7222/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7223.php">Eugene Loh: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="7221.php">Jeff Squyres: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7223.php">Eugene Loh: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Reply:</strong> <a href="7223.php">Eugene Loh: "Re: [OMPI users] Progress of the asynchronous messages"</a>
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
