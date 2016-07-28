<?
$subject_val = "[OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 20 01:34:55 2013" -->
<!-- isoreceived="20131120063455" -->
<!-- sent="Wed, 20 Nov 2013 07:28:05 +0100 (CET)" -->
<!-- isosent="20131120062805" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris" -->
<!-- id="201311200628.rAK6S5Ch002447_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-20 01:28:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="23006.php">Siegmar Gross: "Re: [OMPI users] MPI Java bindings compile errors and missingdatatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris"</a>
<li><strong>Reply:</strong> <a href="23008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-1.9a1r29719 on Solaris 10 Sparc with
<br>
Sun C 5.12. I get a bus error when I run ompi_info with option &quot;-a&quot;.
<br>
<p>tyr fd1026 106 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r29719
<br>
<p>tyr fd1026 107 ompi_info -a | grep MPI:
<br>
[tyr:02431] *** Process received signal ***
<br>
[tyr:02431] Signal: Bus Error (10)
<br>
[tyr:02431] Signal code: Invalid address alignment (1)
<br>
[tyr:02431] Failing at address: ffffffff7d3c5ac1
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_back
<br>
trace_print+0x14
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x17f268
<br>
/lib/sparcv9/libc.so.1:0xd8c28
<br>
/lib/sparcv9/libc.so.1:0xcc79c
<br>
/lib/sparcv9/libc.so.1:0xcc9a8
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x134b9c 
<br>
[ Signal 2099923552 (?)]
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:mca_base_
<br>
var_dump+0x1b0
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x89828
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_info
<br>
_show_mca_params+0xb4
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_info
<br>
_do_params+0x364
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/ompi_info:main+0x628
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/ompi_info:_start+0x12c
<br>
[tyr:02431] *** End of error message ***
<br>
Bus error 
<br>
tyr fd1026 108 
<br>
<p>I would be grateful if somebody can solve the problem. Thank you very
<br>
much in advance for any help. Please let me know if I can provide any
<br>
additional information.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="23006.php">Siegmar Gross: "Re: [OMPI users] MPI Java bindings compile errors and missingdatatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris"</a>
<li><strong>Reply:</strong> <a href="23008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bus Error in openmpi-1.9a1r29719 on Solaris"</a>
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
