<?
$subject_val = "Re: [OMPI users] recompiling 1.3.1 with intels";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 12:39:48 2009" -->
<!-- isoreceived="20090408163948" -->
<!-- sent="Wed, 8 Apr 2009 18:39:43 +0200" -->
<!-- isosent="20090408163943" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] recompiling 1.3.1 with intels" -->
<!-- id="b87c422a0904080939k2d33325dh1c8b9b267ed095e8_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49DCCC6A.1090509_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] recompiling 1.3.1 with intels<br>
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-08 12:39:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8844.php">Jeff Squyres: "Re: [OMPI users] MPI can not open file?"</a>
<li><strong>Previous message:</strong> <a href="8842.php">Alessandro Surace: "Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8841.php">Gus Correa: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 8, 2009 at 6:10 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Francesco, list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Jeff suggested, the problem is not likely to be on the
</span><br>
<span class="quotelev1">&gt; Intel compilers or on OpenMPI.
</span><br>
<span class="quotelev1">&gt; I would guess it is the way information is being passed to the Amber
</span><br>
<span class="quotelev1">&gt; configuration script that may be the cause.
</span><br>
<span class="quotelev1">&gt; I am not familiar to Amber (we don't do computational Chemistry here),
</span><br>
<span class="quotelev1">&gt; so it is hard to tell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe if you send some information on how you configure Amber
</span><br>
<span class="quotelev1">&gt; A) Amber's configure command line,
</span><br>
<span class="quotelev1">&gt; B) output of Amber's configure --help , and
</span><br>
<span class="quotelev1">&gt; C) the error messages Amber returned, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, have you tried the Amber mailing list (if it exists)?
</span><br>
<span class="quotelev1">&gt; They should know more about Amber than we do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two things that I found weird about your Amber configuration
</span><br>
<span class="quotelev1">&gt; command (on an old posting) were:
</span><br>
<span class="quotelev1">&gt; 1) that you didn't tell it where
</span><br>
<span class="quotelev1">&gt; your openmpi was installed (no path), and
</span><br>
<span class="quotelev1">&gt; 2) that you gave it the Intel compiler name (ifort),
</span><br>
<span class="quotelev1">&gt; whereas I would guess the OpenMPI wrapper
</span><br>
<span class="quotelev1">&gt; (mpif90 or mpif90, maybe with a full path)
</span><br>
<span class="quotelev1">&gt; would be perhaps a better choice.
</span><br>
<span class="quotelev1">&gt; Ifort doesn't know anything about your OpenMPI
</span><br>
<span class="quotelev1">&gt; libraries and include files, whereas the OpenMPI
</span><br>
<span class="quotelev1">&gt; mpif90/mpif77 know everything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS - As for Intel compilers, I would stick to release 10.
</span><br>
<span class="quotelev1">&gt; I tried to install release 11 two weeks ago.
</span><br>
<span class="quotelev1">&gt; They changed something in the installation script that
</span><br>
<span class="quotelev1">&gt; broke the installation procedure,
</span><br>
<span class="quotelev1">&gt; would not allow me to choose the install directory,
</span><br>
<span class="quotelev1">&gt; modified their directory structure names, etc.
</span><br>
<span class="quotelev1">&gt; The net result was that I couldn't install, lest test it.
</span><br>
<p>Hi Gus:
<br>
All above are sound and precious suggestions. I took force from your
<br>
mail. Although the flag &quot;-openmpi&quot;  and &quot;ifort&quot; for the compiler
<br>
worked nicely with me at the time of amd64 etch, I'll try the full
<br>
paths and the names you suggest.
<br>
<p>As to intel 11, I made a deb package with program &quot;alien&quot;. Did not
<br>
install. A fixing is required. There is a young smart colleague in
<br>
Australia who is modifying his script to fix the deb package (if you
<br>
are interested at all in deb packages, I'll keep you informed; his
<br>
script for versions 9 and 10 worked nicely).
<br>
<p>I am getting very strange results, such as files that are not found
<br>
(while they are where expected and the env variables are correct in
<br>
the cheat between the message passing interface and amber. One thing:
<br>
I have noticed on several occasions that if the situation is not
<br>
perfectly correct from the unix point of view, debian refused to do.
<br>
It has recently occurred with DOT2, who was used with Mac unix, but
<br>
debian found incorrect stuff (the installation code was corrected by
<br>
very kind DOT2 people and a paper is now on the web on the ACS
<br>
journals.
<br>
<p>I'll try to reorganize the situation and when the problems are clear
<br>
may be I'll ask again advice here with the information you suggested.
<br>
<p>thanks
<br>
francesco
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 8, 2009, at 5:08 AM, Francesco Pietra wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I was unable to compile the parallel code Amber10 with openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.3.1 (fully tested) and intel compilers and mkl version 10 on debian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; amd64 lenny, I'll try with the intels version 11. If it does not work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in my hands, I'll move to gnu compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Question: to recompile openmpi 1.3.1. on intels 11 should I first do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything on openmpi which was compiled with intels 10?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I test Intel v10 compilers frequently; they work fine with Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as we know, Intel v11 compilers work fine with Open MPI as well.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8844.php">Jeff Squyres: "Re: [OMPI users] MPI can not open file?"</a>
<li><strong>Previous message:</strong> <a href="8842.php">Alessandro Surace: "Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8841.php">Gus Correa: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
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
