<?
$subject_val = "[OMPI users] Error: Entry Point Not Found";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 10:54:44 2011" -->
<!-- isoreceived="20110519145444" -->
<!-- sent="Thu, 19 May 2011 07:54:37 -0700 (PDT)" -->
<!-- isosent="20110519145437" -->
<!-- name="Zhangping Wei" -->
<!-- email="zhangping_wei_at_[hidden]" -->
<!-- subject="[OMPI users] Error: Entry Point Not Found" -->
<!-- id="644498.38669.qm_at_web111805.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Error: Entry Point Not Found<br>
<strong>From:</strong> Zhangping Wei (<em>zhangping_wei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 10:54:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16575.php">Paul van der Walt: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>Previous message:</strong> <a href="16573.php">Samuel K. Gutierrez: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16575.php">Paul van der Walt: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>Reply:</strong> <a href="16575.php">Paul van der Walt: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>Maybe reply:</strong> <a href="16578.php">Zhangping Wei: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>Reply:</strong> <a href="16581.php">Jeff Squyres: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,

I tried to configure open MPI on a Win XP sp2 64 bit system, but I met an error 
&#226;&#128;&#153;entry point not found&#226;&#128;&#153; when I run the executable file, I really hope you can 
give me some help. I list what I did when I run my program in the following 
parts;

1, I downloaded the OpenMPI_v1.5.3-2_win64.exe and installed it successfully;

2, I added the &#226;&#128;&#152;C:\Program Files (x86)\OpenMPI_v1.5.3-x64\bin&#226;&#128;&#153; into the paths of 
user variables and system variables under environmental variables page of my 
computer properties;

3, I used the VS 2005 and Intel visual Fortran10.1 to compile my code under win 
x64 (in fact I tried to do it under win 32, I found a lot of unsolved external 
links), and I generated the executable file correctly;

4, I use command window to run it in this way: &#226;&#128;&#152;mpirun &#226;&#128;&#147;n 4  **.exe &#226;&#128;&#152;,then I met 
the error: &#226;&#128;&#152;entry point not found: the procedure entry point inet_pton could not 
be located in the dynamic link library WS2_32.dll&#226;&#128;&#153;

I really appreciate any advice from you.

Have a good day,

Zhangping Wei 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16574/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16575.php">Paul van der Walt: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>Previous message:</strong> <a href="16573.php">Samuel K. Gutierrez: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16575.php">Paul van der Walt: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>Reply:</strong> <a href="16575.php">Paul van der Walt: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>Maybe reply:</strong> <a href="16578.php">Zhangping Wei: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>Reply:</strong> <a href="16581.php">Jeff Squyres: "Re: [OMPI users] Error: Entry Point Not Found"</a>
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
