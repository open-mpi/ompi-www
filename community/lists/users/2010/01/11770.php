<?
$subject_val = "[OMPI users] configure script fails - fixed?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 11:23:05 2010" -->
<!-- isoreceived="20100114162305" -->
<!-- sent="Thu, 14 Jan 2010 17:22:55 +0100" -->
<!-- isosent="20100114162255" -->
<!-- name="von Tycowicz, Christoph" -->
<!-- email="Christoph.vonTycowicz_at_[hidden]" -->
<!-- subject="[OMPI users] configure script fails - fixed?" -->
<!-- id="7D9A54E4-3B5A-4221-87F9-81D830894037_at_fu-berlin.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BD7CDAD5-8550-4DA9-B612-93D5E7035AAC_at_fu-berlin.de" -->
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
<strong>Subject:</strong> [OMPI users] configure script fails - fixed?<br>
<strong>From:</strong> von Tycowicz, Christoph (<em>Christoph.vonTycowicz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-14 11:22:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11771.php">Jeff Squyres: "Re: [OMPI users] configure script fails - fixed?"</a>
<li><strong>Previous message:</strong> <a href="11769.php">Joshua Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>In reply to:</strong> <a href="11756.php">von Tycowicz, Christoph: "[OMPI users] configure script fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11771.php">Jeff Squyres: "Re: [OMPI users] configure script fails - fixed?"</a>
<li><strong>Reply:</strong> <a href="11771.php">Jeff Squyres: "Re: [OMPI users] configure script fails - fixed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just compiled the most recent version of the GNU compilers (4.4.2).
<br>
It turned out that running the configure script succeeds providing:
<br>
./configure --prefix=/opt/openmpi F77=/opt/gcc/lib/gcc4.4/bin/gfortran FC=/opt/gcc/lib/gcc4.4/bin/gfortran
<br>
<p>Note that I did not changed the c/c++ compilers - as soon as I changed them to the new /opt/gcc/lib/gcc4.4/bin/gcc the script would declare them as broked, just as it did with gfortran.
<br>
(This is also true if I provide the shipped 4.2.1 version of gcc.)
<br>
<p>So far everything seams to work but i think this solution is rather kludgy.
<br>
<p>Hope this helps fixing this problem.
<br>
<p>Cheers
<br>
Christoph
<br>
<p>Begin forwarded message:
<br>
<p>From: &quot;von Tycowicz, Christoph&quot; &lt;Christoph.vonTycowicz_at_[hidden]&lt;mailto:Christoph.vonTycowicz_at_[hidden]&gt;&gt;
<br>
Date: 14. Januar 2010 01:09:10 MEZ
<br>
To: &quot;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Subject: configure script fails
<br>
<p>Hi,
<br>
<p>when running the configure script it breaks with:
<br>
configure: error: Could not run a simple Fortran 77 program.  Aborting.
<br>
(logs with details attached)
<br>
<p>I don't know how to interpret this error since I already successfully compiled fortran code using these compilers(gcc/gfortran 4.5).
<br>
If would be really grateful for any clues on this.
<br>
<p>best regards
<br>
Christoph
<br>
<p><p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11770/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11770/logs.tar.gz">logs.tar.gz</a>
</ul>
<!-- attachment="logs.tar.gz" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11770/ATT00001..htm">ATT00001..htm</a>
</ul>
<!-- attachment="ATT00001..htm" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11771.php">Jeff Squyres: "Re: [OMPI users] configure script fails - fixed?"</a>
<li><strong>Previous message:</strong> <a href="11769.php">Joshua Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>In reply to:</strong> <a href="11756.php">von Tycowicz, Christoph: "[OMPI users] configure script fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11771.php">Jeff Squyres: "Re: [OMPI users] configure script fails - fixed?"</a>
<li><strong>Reply:</strong> <a href="11771.php">Jeff Squyres: "Re: [OMPI users] configure script fails - fixed?"</a>
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
