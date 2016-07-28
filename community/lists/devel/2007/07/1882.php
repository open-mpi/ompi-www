<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 12:48:18 2007" -->
<!-- isoreceived="20070714164818" -->
<!-- sent="Sat, 14 Jul 2007 10:47:52 -0600" -->
<!-- isosent="20070714164752" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k" -->
<!-- id="C494F611-7402-400A-ABA1-5C86F37C8128_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18072.56590.326202.513472_at_basebud.nulle.part" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-14 12:47:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1883.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1881.php">Dirk Eddelbuettel: "[OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1881.php">Dirk Eddelbuettel: "[OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1885.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1885.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1896.php">Paul H. Hargrove: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2007, at 8:26 AM, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt; Please let us (ie Debian's openmpi maintainers) how else we can  
</span><br>
<span class="quotelev1">&gt; help.  I am
</span><br>
<span class="quotelev1">&gt; ccing the porters lists (for hppa, m68k, mips) too to invite them  
</span><br>
<span class="quotelev1">&gt; to help. I
</span><br>
<span class="quotelev1">&gt; hope that doesn't get the spam filters going...  I may contact the  
</span><br>
<span class="quotelev1">&gt; 'arm'
</span><br>
<span class="quotelev1">&gt; porters once we have a failure; s390 and sparc activity are not as  
</span><br>
<span class="quotelev1">&gt; big these
</span><br>
<span class="quotelev1">&gt; days.
</span><br>
<p>Open MPI uses some assembly for things like atomic locks, atomic  
<br>
compare and swap, memory barriers, and the like.  We currently have  
<br>
support for:
<br>
<p>&nbsp;&nbsp;&nbsp;* x86 (32 bit)
<br>
&nbsp;&nbsp;&nbsp;* x86_64 / amd64 (32 or 64 bit)
<br>
&nbsp;&nbsp;&nbsp;* UltraSparc (v8plus and v9* targets)
<br>
&nbsp;&nbsp;&nbsp;* IA64
<br>
&nbsp;&nbsp;&nbsp;* PowerPC (32 or 64 bit)
<br>
<p>We also have code for:
<br>
<p>&nbsp;&nbsp;&nbsp;* Alpha
<br>
&nbsp;&nbsp;&nbsp;* MIPS (32 bit NEW ABI &amp; 64 bit)
<br>
<p>This support isn't well tested in a while and it sounds like it  
<br>
doesn't work for MIPS.  At one time, we supported the sparc v8  
<br>
target, but that The other platforms (hppa, mipsel (how is this  
<br>
different than MIPS?), s390, m68k) aren't at all supported by Open  
<br>
MPI.  If you can get the real error messages, I can help on the MIPS  
<br>
issue, although it'll have to be a low priority.
<br>
<p>We don't currently have support for a non-assembly code path.  We  
<br>
originally planned on having one, but the team went away from that  
<br>
route over time and there's no way to build Open MPI without assembly  
<br>
support right now.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian W. Barrett
   Networking Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1883.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1881.php">Dirk Eddelbuettel: "[OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1881.php">Dirk Eddelbuettel: "[OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1885.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1885.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1896.php">Paul H. Hargrove: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
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
