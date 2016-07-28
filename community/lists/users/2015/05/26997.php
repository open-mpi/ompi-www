<?
$subject_val = "Re: [OMPI users] How can I discover valid values for MCA parameters?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 30 06:30:08 2015" -->
<!-- isoreceived="20150530103008" -->
<!-- sent="Sat, 30 May 2015 10:29:56 +0000" -->
<!-- isosent="20150530102956" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How can I discover valid values for MCA parameters?" -->
<!-- id="86574870-B873-4400-9A74-1DE498557D2F_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CCD20A1_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How can I discover valid values for MCA parameters?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-30 06:29:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26998.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26996.php">Marco Atzeri: "Re: [OMPI users] mpirun"</a>
<li><strong>In reply to:</strong> <a href="26983.php">Blosch, Edwin L: "[OMPI users] How can I discover valid values for MCA parameters?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 29, 2015, at 12:05 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ve tried ompi_info --param &lt;framework&gt; all      but no matter what string I give for framework, I get no output at all.
</span><br>

<br>
Keep in mind that starting sometime in the v1.7 series, ompi_info grew another command line option: --level.
<br>

<br>
Short version: if you just want to see all MCA params, use the &quot;--all&quot; or &quot;--level 9&quot; CLI options to ompi_info.  E.g., &quot;ompi_info --all&quot;.  I wrote a blog entry about this a while ago: <a href="http://blogs.cisco.com/performance/open-mpi-and-the-mpi-3-mpi_t-interface">http://blogs.cisco.com/performance/open-mpi-and-the-mpi-3-mpi_t-interface</a>
<br>

<br>
More detail:
<br>

<br>
All MCA parameters now have a &quot;level&quot; associated with them, ranging from 1 to 9.  The levels correspond to the MPI_T system that was added in MPI-3.0.  The levels are:
<br>

<br>
1. End user, basic
<br>
2. End user, detailed
<br>
3. End user, advanced
<br>
4. Application tuner, basic
<br>
5. Application tuner, detailed
<br>
6. Application tuner, advanced
<br>
7. MPI developer, basic
<br>
8. MPI developer, detailed
<br>
9. MPI developer, advanced
<br>

<br>
ompi_info now defaults to only showing level 1 parameters by default.
<br>

<br>
We changed to this policy because of the (justified) complaint from Open MPI users that ompi_info provided waaaaay too much information for the common user: it really created a sense of information overload, and made it incredibly difficult to find what you were actually looking for.  Here's the wiki page where we outlined guidance for Open MPI developers as to what level they should assign to their MCA params:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/wiki/MCAParamLevels">https://github.com/open-mpi/ompi/wiki/MCAParamLevels</a>
<br>

<br>
In short: level 1 params are what you need for *correctness* (e.g., selecting which network interface(s) to use).  That's what all users will need -- so show that by default.  Everything else beyond that is extra -- so it's ok to ask users to supply --all or --level X on the ompi_info command line.
<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26998.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26996.php">Marco Atzeri: "Re: [OMPI users] mpirun"</a>
<li><strong>In reply to:</strong> <a href="26983.php">Blosch, Edwin L: "[OMPI users] How can I discover valid values for MCA parameters?"</a>
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
