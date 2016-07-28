<?
$subject_val = "[OMPI users] How to run OpenMPI C code under Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 22 17:04:16 2015" -->
<!-- isoreceived="20151122220416" -->
<!-- sent="Sun, 22 Nov 2015 15:04:12 -0700" -->
<!-- isosent="20151122220412" -->
<!-- name="Philip Bitar" -->
<!-- email="pr_at_[hidden]" -->
<!-- subject="[OMPI users] How to run OpenMPI C code under Windows 7" -->
<!-- id="20151122150412.1c953d03de16b6167e9703e6814645d8.0674b95200.wbe_at_email01.secureserver.net" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] How to run OpenMPI C code under Windows 7<br>
<strong>From:</strong> Philip Bitar (<em>pr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-22 17:04:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28092.php">Marco Atzeri: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>Previous message:</strong> <a href="28090.php">Ralph Castain: "[OMPI users] PMIx Birds-of-a-Feather meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28092.php">Marco Atzeri: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>Reply:</strong> <a href="28092.php">Marco Atzeri: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>Reply:</strong> <a href="28093.php">Tim Prince: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="28094.php">Philip Bitar: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<body><span style="font-family:Verdana; color:#000000; font-size:10pt;"><div><b>How&nbsp;to&nbsp;run&nbsp;OpenMPI C code under&nbsp;Windows 7</b></div><div><br></div><div>I'm trying to get OpenMPI C code to run under Windows 7 any way that I can. Evidently there is no current support for running OpenMPI directly under Windows 7, so I installed Cygwin. Is there a better way to run OpenMPI C code under Windows 7?</div><div><br></div><div>Under Cygwin, I installed a GCC C compiler, which works.</div><div><br></div><div>I also installed an OpenMPI package. Here is a link to a list of the files in the Cygwin OpenMPI package:</div><div><br></div><div><a target="_blank" href="https://cygwin.com/cgi-bin2/package-cat.cgi?file=x86%2Flibopenmpi%2Flibopenmpi-1.8.6-1&amp;grep=openmpi">https://cygwin.com/cgi-bin2/package-cat.cgi?file=x86%2Flibopenmpi%2Flibopenmpi-1.8.6-1&amp;grep=openmpi</a></div><div><br></div><div>My PATH variable is as follows:</div><div><br></div><div>/usr/local/bin:/usr/bin</div><div><br></div><div>mpicc will compile, but it won't link. It can't find the following:</div><div><br></div><div>-lmpi</div><div>-lopen-rte</div><div>-lopen-pal<br></div><div><br></div><div>The test program includes stdio.h and is nothing more than printf hello world. I can compile and run it using the GCC C compiler.<br></div><div><br></div><div>Presumably I need to update the PATH variable so that the link step will find the missing components. Are those components file names or info contained in some other files? Can I verify that the needed files have been installed?<br></div><div><br></div><div>I would also be pleased to obtain a link to material that explains the OpenMPI system, in general, and the OpenMPI C functions, in particular, so that I can write C programs to use the OpenMPI system.<br></div><div><br></div><div>I looked for this kind of info on the web, but I haven't found it yet. Maybe it's on the OpenMPI site, and I missed it.</div><div><br></div><div>Thanks for your help!</div><div><br></div><div>Philip Bitar<br></div><div><div id="GD__CURSOR"></div></div></span></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28092.php">Marco Atzeri: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>Previous message:</strong> <a href="28090.php">Ralph Castain: "[OMPI users] PMIx Birds-of-a-Feather meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28092.php">Marco Atzeri: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>Reply:</strong> <a href="28092.php">Marco Atzeri: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>Reply:</strong> <a href="28093.php">Tim Prince: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>Maybe reply:</strong> <a href="28094.php">Philip Bitar: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
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
