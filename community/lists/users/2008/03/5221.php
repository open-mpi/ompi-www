<?
$subject_val = "[OMPI users] SIGSEGV error.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 22:14:46 2008" -->
<!-- isoreceived="20080318021446" -->
<!-- sent="18 Mar 2008 02:16:51 -0000" -->
<!-- isosent="20080318021651" -->
<!-- name="balaji srinivas" -->
<!-- email="balajisrinivas86_at_[hidden]" -->
<!-- subject="[OMPI users] SIGSEGV error." -->
<!-- id="20080318021651.28249.qmail_at_f4mail-235-135.rediffmail.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] SIGSEGV error.<br>
<strong>From:</strong> balaji srinivas (<em>balajisrinivas86_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-17 22:16:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5222.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Previous message:</strong> <a href="5220.php">Giovani Faccin: "[OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5224.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV error."</a>
<li><strong>Reply:</strong> <a href="5224.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV error."</a>
<li><strong>Reply:</strong> <a href="5225.php">Giovani Faccin: "Re: [OMPI users] SIGSEGV error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;
hi all,
 I am new to MPI. The outline of my code is

if(r==0)
function1()
else if(r==1)
function2()

where r is the rank and functions are included in the .h files. There are no compilation errors. I get the SIGSEGV error while running.
Pls help. how to solve this?

2) how to find the execution time of a mpi program. in C we have
clock_t start=clock() at the beginning and

((double)clock() - start) / CLOCKS_PER_SEC) at the end.

Thanks in advance.

regards,
balaji.
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5221/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5222.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Previous message:</strong> <a href="5220.php">Giovani Faccin: "[OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5224.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV error."</a>
<li><strong>Reply:</strong> <a href="5224.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV error."</a>
<li><strong>Reply:</strong> <a href="5225.php">Giovani Faccin: "Re: [OMPI users] SIGSEGV error."</a>
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
