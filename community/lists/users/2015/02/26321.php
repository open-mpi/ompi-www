<?
$subject_val = "[OMPI users] Fail to lock/unlock a shared memory window iteratively";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 17:11:01 2015" -->
<!-- isoreceived="20150212221101" -->
<!-- sent="Thu, 12 Feb 2015 23:10:59 +0100 (CET)" -->
<!-- isosent="20150212221059" -->
<!-- name="Thibaud Kloczko" -->
<!-- email="thibaud.kloczko_at_[hidden]" -->
<!-- subject="[OMPI users] Fail to lock/unlock a shared memory window iteratively" -->
<!-- id="1559523397.54366936.1423779059715.JavaMail.zimbra_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="360709697.54362032.1423778185225.JavaMail.zimbra_at_inria.fr" -->
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
<strong>Subject:</strong> [OMPI users] Fail to lock/unlock a shared memory window iteratively<br>
<strong>From:</strong> Thibaud Kloczko (<em>thibaud.kloczko_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-12 17:10:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26322.php">Oscar Vega-Gisbert: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="26320.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26323.php">Nathan Hjelm: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>Reply:</strong> <a href="26323.php">Nathan Hjelm: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all, 
<br>
<p>Here is my problem (see attached file for more details). 
<br>
<p>I create a window using MPI_Win_allocate_share d. 
<br>
The rank 0 is then in charge to fill iteratively the shared buffers using the MPI_Put function. 
<br>
<p>At each iteration, I use also MPI_Lock and MPI_Unlock function as follows: 
<br>
<p>MPI_Win_lock(MPI_LOCK_EXCLUSIVE, rank, MPI_MODE_NOCHECK, win); 
<br>
MPI_Put(&amp;i, buffer_size, MPI_BYTE, rank, position, buffer_size, MPI_BYTE, win); 
<br>
MPI_Win_unlock(wid, win); 
<br>
<p>Surprisingly, at the second iteration, I get the following error: 
<br>
<p>Open MPI v1.8.4, package: Open MPI Distribution, ident: 1.8.4, repo rev: v1.8.3-330-g0344f04, Dec 19, 2014 
<br>
<p>*** An error occurred in MPI_Win_lock 
<br>
*** reported by process [140394923687937,140393890971648] 
<br>
*** on win 
<br>
*** MPI_ERR_RMA_SYNC: error executing rma sync 
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this win will now abort, 
<br>
*** and potentially your MPI job) 
<br>
<p>I observed the same behaviour when allocating the window using MPI_Win_allocate function. 
<br>
<p>On the other hand, everything works well with MPI_Win_Create . 
<br>
<p>Am I wrong somewhere, any idea would be great :-) ! 
<br>
<p>Cheers, 
<br>
<p>Thibaud Kloczko. 
<br>
<p>------------------------------------------------- 
<br>
Ing&#233;nieur d'Exp&#233;rimentation et de D&#233;veloppement 
<br>
Inria CRISAM 
<br>
2004, route des lucioles 
<br>
06902 Sophia Antipolis 
<br>
+33 4 92 38 50 03 
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26321/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26321/main.cpp">main.cpp</a>
</ul>
<!-- attachment="main.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26322.php">Oscar Vega-Gisbert: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="26320.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26323.php">Nathan Hjelm: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>Reply:</strong> <a href="26323.php">Nathan Hjelm: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
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
