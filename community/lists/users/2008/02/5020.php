<?
$subject_val = "[OMPI users] trouble building";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 21:59:46 2008" -->
<!-- isoreceived="20080212025946" -->
<!-- sent="Mon, 11 Feb 2008 18:59:38 -0800 (PST)" -->
<!-- isosent="20080212025938" -->
<!-- name="Anze Slosar" -->
<!-- email="anze_at_[hidden]" -->
<!-- subject="[OMPI users] trouble building" -->
<!-- id="alpine.DEB.0.9999.0802111856430.13604_at_krasner" -->
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
<strong>Subject:</strong> [OMPI users] trouble building<br>
<strong>From:</strong> Anze Slosar (<em>anze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-11 21:59:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5021.php">Jeff Squyres: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<li><strong>Previous message:</strong> <a href="5019.php">Brian W. Barrett: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5022.php">Jeff Squyres: "Re: [OMPI users] trouble building"</a>
<li><strong>Reply:</strong> <a href="5022.php">Jeff Squyres: "Re: [OMPI users] trouble building"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI,
<br>
<p>I checked FAQ very carefully twice, googled extensivelly and cannot find 
<br>
the error I am trying to reproduce. It is a vanilla linux system with 
<br>
ifort compile so it really should work.
<br>
<p>I configure with
<br>
F77=ifort FC=ifort FFLAGS=-O FCFLAGS=-O ./configure 
<br>
--prefix=/home/slosar/local/ --enable-static
<br>
<p>which works fine, no errors reported. Then on make it tells me:
<br>
<p>make[3]: Entering directory 
<br>
`/group/cosmos/slosar/openmpi-1.2.4/opal/libltdl'
<br>
make[3]: *** No rule to make target `lt__strl/home/slosar/util.lo', needed 
<br>
by `libltdlc.la'.  Stop.
<br>
<p>This looks essentially like a makefile problem, or am I missing something?
<br>
<p>Any help much appreciated.
<br>
Best,
<br>
<p>a
<br>
<p>phone: +1 (510) 495 2488, mobile: +1 (510) 289 9395, fax: +1 (510) 486 7149
<br>
<p>-- &quot;Laugh and the world laughs with you. Smile and they wonder what you are
<br>
up to.&quot;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5021.php">Jeff Squyres: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<li><strong>Previous message:</strong> <a href="5019.php">Brian W. Barrett: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5022.php">Jeff Squyres: "Re: [OMPI users] trouble building"</a>
<li><strong>Reply:</strong> <a href="5022.php">Jeff Squyres: "Re: [OMPI users] trouble building"</a>
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
