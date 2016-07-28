<?
$subject_val = "[OMPI users] win: cmake: release+debug";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 17:24:56 2010" -->
<!-- isoreceived="20101201222456" -->
<!-- sent="Wed, 1 Dec 2010 22:25:04 -0000" -->
<!-- isosent="20101201222504" -->
<!-- name="Hicham Mouline" -->
<!-- email="hicham_at_[hidden]" -->
<!-- subject="[OMPI users] win: cmake: release+debug" -->
<!-- id="005a01cb91a6$9aa081c0$cfe18540$_at_org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] win: cmake: release+debug<br>
<strong>From:</strong> Hicham Mouline (<em>hicham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 17:25:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14973.php">„€ •’‹: "[OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<li><strong>Previous message:</strong> <a href="14971.php">Hicham Mouline: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14974.php">Shiqing Fan: "Re: [OMPI users] win: cmake: release+debug"</a>
<li><strong>Reply:</strong> <a href="14974.php">Shiqing Fan: "Re: [OMPI users] win: cmake: release+debug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Following the instructions from Readme.windows, I've used cmake and 4 build
<br>
directories to generate release and debug win32 and x64 builds. When it came
<br>
to install, I wondered: there are 4 directories involved, bin, lib, share
<br>
and include.
<br>
<p>Are include and share identical across the 4 configurations. If so, it'd be
<br>
good to have a cmake way to share those directories somewhere. As the debug
<br>
libraries have a d added to their names, they could also coexist in the same
<br>
lib directory as the release libs.
<br>
<p>on a win64 box, I could see:
<br>
\Program Files\openmpi\bin and bin\debug: 64bit release and debug mpic++ and
<br>
co (though I don't see the benefit of debug mpic++)
<br>
\Program Files\openmpi\lib: debug and release 64bit libs
<br>
\Program Files\openmpi\include: common? include 
<br>
\Program Files\openmpi\share: common? share
<br>
\Program Files(x86)\openmpi: same as above but for 32bit
<br>
<p>on a win32box, 
<br>
\Program Files(x86)\openmpi: same as above but _only_ for 32bit
<br>
<p>Is it doable easily like this already?
<br>
<p>rds,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14973.php">„€ •’‹: "[OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<li><strong>Previous message:</strong> <a href="14971.php">Hicham Mouline: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14974.php">Shiqing Fan: "Re: [OMPI users] win: cmake: release+debug"</a>
<li><strong>Reply:</strong> <a href="14974.php">Shiqing Fan: "Re: [OMPI users] win: cmake: release+debug"</a>
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
