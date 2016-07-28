<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 13:14:15 2007" -->
<!-- isoreceived="20070714171415" -->
<!-- sent="Sat, 14 Jul 2007 12:13:59 -0500" -->
<!-- isosent="20070714171359" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k" -->
<!-- id="18073.1111.886828.521058_at_basebud.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C494F611-7402-400A-ABA1-5C86F37C8128_at_lanl.gov" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-14 13:13:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1886.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1884.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1882.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1896.php">Paul H. Hargrove: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<p>On 14 July 2007 at 10:47, Brian Barrett wrote:
<br>
| On Jul 14, 2007, at 8:26 AM, Dirk Eddelbuettel wrote:
<br>
| 
<br>
| &gt; Please let us (ie Debian's openmpi maintainers) how else we can  
<br>
| &gt; help.  I am
<br>
| &gt; ccing the porters lists (for hppa, m68k, mips) too to invite them  
<br>
| &gt; to help. I
<br>
| &gt; hope that doesn't get the spam filters going...  I may contact the  
<br>
| &gt; 'arm'
<br>
| &gt; porters once we have a failure; s390 and sparc activity are not as  
<br>
| &gt; big these
<br>
| &gt; days.
<br>
| 
<br>
| Open MPI uses some assembly for things like atomic locks, atomic  
<br>
| compare and swap, memory barriers, and the like.  We currently have  
<br>
| support for:
<br>
| 
<br>
|    * x86 (32 bit)
<br>
|    * x86_64 / amd64 (32 or 64 bit)
<br>
|    * UltraSparc (v8plus and v9* targets)
<br>
|    * IA64
<br>
|    * PowerPC (32 or 64 bit)
<br>
| 
<br>
| We also have code for:
<br>
| 
<br>
|    * Alpha
<br>
|    * MIPS (32 bit NEW ABI &amp; 64 bit)
<br>
| 
<br>
| This support isn't well tested in a while and it sounds like it  
<br>
<p>We'd be glad to help. This has worked well for other project. I think that
<br>
Debian is the quasi-official testbed for xfree.org given all our platforms.
<br>
<p>So we can definitely try to get Alpha, Mips, ... up to speed with suitable
<br>
regression tests.
<br>
<p>| doesn't work for MIPS.  At one time, we supported the sparc v8  
<br>
| target, but that The other platforms (hppa, mipsel (how is this  
<br>
| different than MIPS?), s390, m68k) aren't at all supported by Open  
<br>
| MPI.  If you can get the real error messages, I can help on the MIPS  
<br>
| issue, although it'll have to be a low priority.
<br>
<p>I think mipsel is the lower-endian variant. Something similar now exists for
<br>
arm where there's also armel.  
<br>
<p>Mips support would be nice as there are some HPC platform based on these
<br>
chips.  Maybe someone from the debian-mips team can speak up and take a lead
<br>
here to work with with you.
<br>
<p>| We don't currently have support for a non-assembly code path.  We  
<br>
| originally planned on having one, but the team went away from that  
<br>
| route over time and there's no way to build Open MPI without assembly  
<br>
| support right now.
<br>
<p>Personally, I think that's a fair call given what Open MPI sets out to do.
<br>
Debian 'at large' aims for the 'everything ought to build everywhere' model
<br>
(which has its merits too) so I'll have to see if we get pushback if we
<br>
restric the platforms.  
<br>
<p>So given the list of current failures, hppa and mips/mipsel are the most
<br>
likely candidates for improvement.  Sparc and s390 are fairly dead at Debian
<br>
so not sure if anything will change there.  m68k is close to officially dead
<br>
but a few vocal enthusiast try to keep it on life-support.
<br>
<p>Cheers, Dirk
<br>
<p><pre>
-- 
Hell, there are no rules here - we're trying to accomplish something. 
                                                  -- Thomas A. Edison
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1886.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1884.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1882.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1896.php">Paul H. Hargrove: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
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
