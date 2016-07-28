<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb 10 13:07:52 2007" -->
<!-- isoreceived="20070210180752" -->
<!-- sent="Sat, 10 Feb 2007 18:07:31 +0000 (GMT)" -->
<!-- isosent="20070210180731" -->
<!-- name="Vadivelan Ranjith" -->
<!-- email="achillesvelan_at_[hidden]" -->
<!-- subject="[OMPI users] Error using MPI_WAITALL" -->
<!-- id="915775.48479.qm_at_web7610.mail.in.yahoo.com" -->
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
<strong>From:</strong> Vadivelan Ranjith (<em>achillesvelan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-10 13:07:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2664.php">Jeff Squyres: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Previous message:</strong> <a href="2662.php">Jeff Squyres: "Re: [OMPI users] Fwd: MPI 2.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2665.php">Jeff Squyres: "Re: [OMPI users] Error using MPI_WAITALL"</a>
<li><strong>Reply:</strong> <a href="2665.php">Jeff Squyres: "Re: [OMPI users] Error using MPI_WAITALL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I am using mpich2-1.0.3 to compiling our code. Our code is calling MPI_WAITALL. We ran the case in intel-Dual core without any problem and solution was fine. I tried to ran the code in intel quad-core. Compilation using mpif90 is fine. I started running the executable file, i got the following error.
<br>
-----------------------------------------------------------------------------------------------------------------------
<br>
Fatal error in MPI_Waitall: Invalid MPI_Request, error stack:
<br>
MPI_Waitall(241): MPI_Waitall(count=250, req_array=0x23e52e0, status_array=0x7fbfffe3a0) failed
<br>
MPI_Waitall(109): Invalid MPI_Request
<br>
-----------------------------------------------------------------------------------------------------------------------
<br>
<p>So i removed all the lines where MPI-WAITALL is using. Again i compiled to code using mpif90(mpich) and ran it. Now its running without any problem. Can you please explain me what is happen here.
<br>
&nbsp;
<br>
Thanks
<br>
Velan
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
&nbsp;Here&#146;s a new way to find what you're looking for - Yahoo! Answers 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2663/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2664.php">Jeff Squyres: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Previous message:</strong> <a href="2662.php">Jeff Squyres: "Re: [OMPI users] Fwd: MPI 2.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2665.php">Jeff Squyres: "Re: [OMPI users] Error using MPI_WAITALL"</a>
<li><strong>Reply:</strong> <a href="2665.php">Jeff Squyres: "Re: [OMPI users] Error using MPI_WAITALL"</a>
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
