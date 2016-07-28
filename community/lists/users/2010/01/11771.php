<?
$subject_val = "Re: [OMPI users] configure script fails - fixed?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 11:36:35 2010" -->
<!-- isoreceived="20100114163635" -->
<!-- sent="Thu, 14 Jan 2010 11:36:29 -0500" -->
<!-- isosent="20100114163629" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure script fails - fixed?" -->
<!-- id="7A27118F-CAB7-4507-9DF2-4F6CA260E508_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7D9A54E4-3B5A-4221-87F9-81D830894037_at_fu-berlin.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure script fails - fixed?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-14 11:36:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11772.php">Aleksej Saushev: "[OMPI users] More NetBSD fixes"</a>
<li><strong>Previous message:</strong> <a href="11770.php">von Tycowicz, Christoph: "[OMPI users] configure script fails - fixed?"</a>
<li><strong>In reply to:</strong> <a href="11770.php">von Tycowicz, Christoph: "[OMPI users] configure script fails - fixed?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 14, 2010, at 11:22 AM, von Tycowicz, Christoph wrote:
<br>
<p><span class="quotelev1">&gt; I just compiled the most recent version of the GNU compilers (4.4.2).
</span><br>
<span class="quotelev1">&gt; It turned out that running the configure script succeeds providing:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi F77=/opt/gcc/lib/gcc4.4/bin/gfortran FC=/opt/gcc/lib/gcc4.4/bin/gfortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that I did not changed the c/c++ compilers - as soon as I changed them to the new /opt/gcc/lib/gcc4.4/bin/gcc the script would declare them as broked, just as it did with gfortran.
</span><br>
<span class="quotelev1">&gt; (This is also true if I provide the shipped 4.2.1 version of gcc.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So far everything seams to work but i think this solution is rather kludgy.
</span><br>
<p>I'm not sure what to tell you -- OMPI's configure script was simply trying to compile a trivial Fortran program just to verify that the compiler works (we had so many users with borked Fortran compilers that we put this test in configure).  Here's the detailed part from config.log:
<br>
<p>-----
<br>
configure:35493: checking if Fortran 77 compiler works
<br>
configure:35553: gfortran -o conftest   conftest.f  &gt;&amp;5
<br>
Undefined symbols:
<br>
&nbsp;&nbsp;&quot;__gfortran_set_options&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in cccpfkqB.o
<br>
ld: symbol(s) not found
<br>
collect2: ld returned 1 exit status
<br>
configure:35557: $? = 1
<br>
configure: program exited with status 1
<br>
configure: failed program was:
<br>
|       program main
<br>
| 
<br>
|       end
<br>
configure:35590: result: no
<br>
configure:35604: error: Could not run a simple Fortran 77 program.  Aborting.
<br>
-----
<br>
<p>That is, the contents of conftest.f were
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program main
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p>And trying to compile that with your previous gfortran didn't work (see the linker error above).  I'm not sure why your other programs compiled fine, but something caused OMPI's configure script to fail compiling/linking this trivial Fortran program.  That was the cause of the problem.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11772.php">Aleksej Saushev: "[OMPI users] More NetBSD fixes"</a>
<li><strong>Previous message:</strong> <a href="11770.php">von Tycowicz, Christoph: "[OMPI users] configure script fails - fixed?"</a>
<li><strong>In reply to:</strong> <a href="11770.php">von Tycowicz, Christoph: "[OMPI users] configure script fails - fixed?"</a>
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
