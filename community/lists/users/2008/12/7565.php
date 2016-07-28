<?
$subject_val = "[OMPI users] MPI Error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 18:34:21 2008" -->
<!-- isoreceived="20081219233421" -->
<!-- sent="Sat, 20 Dec 2008 12:34:17 +1300" -->
<!-- isosent="20081219233417" -->
<!-- name="Asad Ali" -->
<!-- email="asad06_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Error" -->
<!-- id="28d120cc0812191534q542806c2ndc1b29cee7eb7b8c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI Error<br>
<strong>From:</strong> Asad Ali (<em>asad06_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-19 18:34:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7566.php">Jeff Squyres: "Re: [OMPI users] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="7564.php">Jeff Squyres: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7566.php">Jeff Squyres: "Re: [OMPI users] MPI Error"</a>
<li><strong>Reply:</strong> <a href="7566.php">Jeff Squyres: "Re: [OMPI users] MPI Error"</a>
<li><strong>Reply:</strong> <a href="7567.php">Asad Ali: "Re: [OMPI users] MPI Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Everybody,
<br>
<p>I am running a code in parallel fashion using Open MPI. The code
<br>
compiles successfully but when I
<br>
run the output executable file I get the following error.
<br>
<p>Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0xc491f018
<br>
[0] func:/usr/lib/openmpi/libopal.so.0 [0x46efd6]
<br>
[1] func:[0x110440]
<br>
[2] func:/usr/lib/openmpi/libopal.so.0(_int_malloc+0x241) [0x471d41]
<br>
[3] func:/usr/lib/openmpi/libopal.so.0(malloc+0x88) [0x474928]
<br>
[4] func:./lisa09EMRIT-P(generateresiduals+0x5d) [0x805456d]
<br>
[5] func:./lisa09EMRIT-P(metropolis+0x172) [0x8054992]
<br>
[6] func:./lisa09EMRIT-P(main+0x37b) [0x805662b]
<br>
[7] func:/lib/libc.so.6(__libc_start_main+0xe0) [0x2aef70]
<br>
[8] func:./lisa09EMRIT-P [0x804af21]
<br>
*** End of error message ***
<br>
<p>Could you please tell me whats the problem here?
<br>
<p>Thanking you in advance.
<br>
<p>Regards,
<br>
<p>Asad
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7565/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7566.php">Jeff Squyres: "Re: [OMPI users] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="7564.php">Jeff Squyres: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7566.php">Jeff Squyres: "Re: [OMPI users] MPI Error"</a>
<li><strong>Reply:</strong> <a href="7566.php">Jeff Squyres: "Re: [OMPI users] MPI Error"</a>
<li><strong>Reply:</strong> <a href="7567.php">Asad Ali: "Re: [OMPI users] MPI Error"</a>
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
