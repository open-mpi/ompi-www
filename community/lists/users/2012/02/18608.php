<?
$subject_val = "Re: [OMPI users] archlinux segmentation fault error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 13:08:26 2012" -->
<!-- isoreceived="20120229180826" -->
<!-- sent="Wed, 29 Feb 2012 13:08:22 -0500" -->
<!-- isosent="20120229180822" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] archlinux segmentation fault error" -->
<!-- id="C34F6826-0D90-4A48-8D72-21D59F4B2CFB_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAM3GVM6-cxARvZNVZ18j_4Sc+2jeHHK0erszZsQX=BHmnGf-7Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] archlinux segmentation fault error<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 13:08:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18609.php">Eric Chamberland: "[OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<li><strong>Previous message:</strong> <a href="18607.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="18597.php">Stefano Dal Pont: "[OMPI users] archlinux segmentation fault error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 29, 2012, at 9:39 AM, Stefano Dal Pont wrote:
<br>
<p><span class="quotelev1">&gt; I'm a newbie with openMPI so the problem it's probably me :)
</span><br>
<span class="quotelev1">&gt; Im using a Fortran 90 code developed under Ubuntu 10.04. I've recently installed the same code on my Archlinux machine but I have some issues concerning openMPI. 
</span><br>
<span class="quotelev1">&gt; A simple example-code works fine on both machine while the &quot;big&quot; code gives a segmentation fault error on Archlinux. 
</span><br>
<span class="quotelev1">&gt; On Ubuntu gcc 4.3 is used while on Arch gcc version is 4.6. Is there a way to make openmpi use gcc 4.3? 
</span><br>
<p><p>This is a local configuration issue, not really an Open MPI issue.
<br>
<p>Open MPI will compile itself with whichever compiler you tell it to; if you have both gcc 4.3 and 4.6 installed correctly on your machine, you can probably configure Open MPI with:
<br>
<p>./configure CC=/path/to/gcc4.3/bin/gcc CXX=/path/to/gcc4.3/bin/g++ \
<br>
&nbsp;&nbsp;&nbsp;F77=/path/to/gcc4.3/bin/gfortran FC=/path/to/gcc4.3/bin/gfortran ...
<br>
<p>Make sense?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18609.php">Eric Chamberland: "[OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<li><strong>Previous message:</strong> <a href="18607.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="18597.php">Stefano Dal Pont: "[OMPI users] archlinux segmentation fault error"</a>
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
