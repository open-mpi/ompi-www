<?
$subject_val = "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 17:55:53 2010" -->
<!-- isoreceived="20100107225553" -->
<!-- sent="Thu, 7 Jan 2010 17:55:48 -0500" -->
<!-- isosent="20100107225548" -->
<!-- name="Tim Miller" -->
<!-- email="btamiller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3" -->
<!-- id="3cc760c91001071455i7f0a5e95tadb4a31b36b0ca30_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="07DC8294-F38F-44F0-901B-2EB767E011EC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3<br>
<strong>From:</strong> Tim Miller (<em>btamiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-07 17:55:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11717.php">Dennis Schridde: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<li><strong>Previous message:</strong> <a href="11715.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="11708.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oddly, it wouldn't work even with the CPPFLAGS set (I tried setting CFLAGS
<br>
too just to be sure). I'm thinking it must be gremlins of some sort :-).
<br>
Meanwhile, I've bitten the bullet and upgraded myself to PGI 10.0-1 and
<br>
things seem to be compiling happily now for 1.4.1rc1.
<br>
<p>Thanks for all of the suggestions!
<br>
<p>Tim
<br>
<p>On Thu, Jan 7, 2010 at 8:11 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Here's the comment I put in OMPI's configure script with regards to the
</span><br>
<span class="quotelev1">&gt; offsetof problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # This macro checks to ensure that the compiler properly supports
</span><br>
<span class="quotelev1">&gt; # offsetof().  The PGI compilers had a problem with this macro in some
</span><br>
<span class="quotelev1">&gt; # versions of their compiler on some platforms (e.g., 9.0-1 on
</span><br>
<span class="quotelev1">&gt; # x86_64).  The workaround is to use -DNO_PGI_OFFSET in these cases.
</span><br>
<span class="quotelev1">&gt; # A bug report was submitted to PGI support in late June 2009; the
</span><br>
<span class="quotelev1">&gt; # problem was apparently a trivial typo in one of their header files
</span><br>
<span class="quotelev1">&gt; # and should be fixed in subsequent releases (e.g., 9.0-2?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know the exact version of PGI 9.0-x where it was fixed, but I'm
</span><br>
<span class="quotelev1">&gt; pretty sure it *was* fixed at some point.  Regardless, the workaround (add
</span><br>
<span class="quotelev1">&gt; -DNO_PGI_OFFSET to CPPFLAGS) should make it work for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 7, 2010, at 6:17 AM, Ake Sandgren wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 2010-01-07 at 11:57 +0100, Peter Kjellstrom wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Wednesday 06 January 2010, Tim Miller wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi All,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I am trying to compile OpenMPI 1.4 with PGI 9.0-3 and am getting the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; following error in configure:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; checking for functional offsetof macro... no
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; configure: WARNING: Your compiler does not support offsetof macro
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; configure: error: Configure: Cannot continue
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I have searched around and found that this error occurs because of a
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; problem in the configure scripts when PGI 10 is used, but I'm using
</span><br>
<span class="quotelev1">&gt; 9.0-3
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; which should not have the configure script issue. Here is the output
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; pgcc -V:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; pgcc 9.0-3 64-bit target on x86-64 Linux -tp k8-64e
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Copyright 2000-2009, STMicroelectronics, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I'm not sure what's wrong here as other people have reported being
</span><br>
<span class="quotelev1">&gt; able to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; build OpenMPI with PGI 9. Does anyone have any ideas?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Maybe a late enough PGI-9 behaves like PGI-10. You could try the
</span><br>
<span class="quotelev1">&gt; 1.4.1-rc1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; which should work with PGI-10 and see if it fixes your problems too.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Our PGI 9.0-3 doesn't have any problems building openmpi 1.3.3 or 1.4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev2">&gt; &gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev2">&gt; &gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Staff Scientist, Laboratory of Computational Biology NHLBI/NIH
5635 Fishers Lane Rm. T903
Rockville, MD 20852
301-402-0618
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11716/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11717.php">Dennis Schridde: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<li><strong>Previous message:</strong> <a href="11715.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="11708.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
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
