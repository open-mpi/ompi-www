<?
$subject_val = "Re: [OMPI users] win: cmake: release+debug";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 05:16:58 2010" -->
<!-- isoreceived="20101202101658" -->
<!-- sent="Thu, 02 Dec 2010 11:19:06 +0100" -->
<!-- isosent="20101202101906" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] win: cmake: release+debug" -->
<!-- id="4CF7729A.4080306_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="005a01cb91a6$9aa081c0$cfe18540$_at_org" -->
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
<strong>Subject:</strong> Re: [OMPI users] win: cmake: release+debug<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 05:19:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14975.php">Shiqing Fan: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<li><strong>Previous message:</strong> <a href="14973.php">&#227;&#219;&#202;&#165;&#213;&#220;: "[OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<li><strong>In reply to:</strong> <a href="14972.php">Hicham Mouline: "[OMPI users] win: cmake: release+debug"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Hicham,
<br>
<p>Yes, all the stuff you expected are already in trunk, all type of build 
<br>
share the same bin, include, lib and share. you can check out and have a 
<br>
test.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 2010-12-1 11:25 PM, Hicham Mouline wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Following the instructions from Readme.windows, I've used cmake and 4 build
</span><br>
<span class="quotelev1">&gt; directories to generate release and debug win32 and x64 builds. When it came
</span><br>
<span class="quotelev1">&gt; to install, I wondered: there are 4 directories involved, bin, lib, share
</span><br>
<span class="quotelev1">&gt; and include.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are include and share identical across the 4 configurations. If so, it'd be
</span><br>
<span class="quotelev1">&gt; good to have a cmake way to share those directories somewhere. As the debug
</span><br>
<span class="quotelev1">&gt; libraries have a d added to their names, they could also coexist in the same
</span><br>
<span class="quotelev1">&gt; lib directory as the release libs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on a win64 box, I could see:
</span><br>
<span class="quotelev1">&gt; \Program Files\openmpi\bin and bin\debug: 64bit release and debug mpic++ and
</span><br>
<span class="quotelev1">&gt; co (though I don't see the benefit of debug mpic++)
</span><br>
<span class="quotelev1">&gt; \Program Files\openmpi\lib: debug and release 64bit libs
</span><br>
<span class="quotelev1">&gt; \Program Files\openmpi\include: common? include
</span><br>
<span class="quotelev1">&gt; \Program Files\openmpi\share: common? share
</span><br>
<span class="quotelev1">&gt; \Program Files(x86)\openmpi: same as above but for 32bit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on a win32box,
</span><br>
<span class="quotelev1">&gt; \Program Files(x86)\openmpi: same as above but _only_ for 32bit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it doable easily like this already?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rds,
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
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14975.php">Shiqing Fan: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<li><strong>Previous message:</strong> <a href="14973.php">&#227;&#219;&#202;&#165;&#213;&#220;: "[OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<li><strong>In reply to:</strong> <a href="14972.php">Hicham Mouline: "[OMPI users] win: cmake: release+debug"</a>
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
