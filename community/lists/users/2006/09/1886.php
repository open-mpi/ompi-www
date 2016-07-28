<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 21 17:42:55 2006" -->
<!-- isoreceived="20060921214255" -->
<!-- sent="Thu, 21 Sep 2006 22:42:40 +0100 (BST)" -->
<!-- isosent="20060921214240" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="[OMPI users] sed: command garbled:" -->
<!-- id="Pine.GSO.4.53.0609212220490.3628_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-21 17:42:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1887.php">Lydia Heck: "Re: [OMPI users] sed: command garbled:"</a>
<li><strong>Previous message:</strong> <a href="1885.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS Tester installation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1887.php">Lydia Heck: "Re: [OMPI users] sed: command garbled:"</a>
<li><strong>Reply:</strong> <a href="1887.php">Lydia Heck: "Re: [OMPI users] sed: command garbled:"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to build openmpi-1.1.2 for Solaris x86/64 with the studio11
<br>
compilers and including the mx drivers. I have gone past some hurdles.
<br>
However when the configure script nears its end where Makefiles are prepared
<br>
I get error messages of the form:
<br>
<p>config.status: creating ompi/mca/osc/rdma/Makefile
<br>
sed: command garbled: s,@OMPI_CXX_ABSOLUTE@,/opt/studio11/SUNWspro/bin/CC
<br>
sed: command garbled: s,@OMPI_F90_ABSOLUTE@,/opt/studio11/SUNWspro/bin/f95
<br>
sed: command garbled: s,@OMPI_CC_ABSOLUTE@,/opt/studio11/SUNWspro/bin/cc
<br>
config.status: creating ompi/mca/pml/cm/Makefile
<br>
<p><p>This is with the system's sed command.
<br>
<p>I have tried to use the
<br>
gnu sed command and get instead
<br>
<p><p>sed: file ./confstatlmaOTV/subs-3.sed line 31: unterminated `s' command
<br>
sed: file ./confstatlmaOTV/subs-4.sed line 4: unterminated `s' command
<br>
config.status: creating orte/Makefile
<br>
sed: file ./confstatlmaOTV/subs-4.sed line 4: unterminated `s' command
<br>
sed: file ./confstatlmaOTV/subs-3.sed line 31: unterminated `s' command
<br>
config.status: creating orte/include/Makefile
<br>
sed: file ./confstatlmaOTV/subs-3.sed line 31: unterminated `s' command
<br>
sed: file ./confstatlmaOTV/subs-4.sed line 4: unterminated `s' command
<br>
config.status: creating orte/etc/Makefile
<br>
sed: file ./confstatlmaOTV/subs-3.sed line 31: unterminated `s' command
<br>
sed: file ./confstatlmaOTV/subs-4.sed line 4: unterminated `s' command
<br>
config.status: creating orte/tools/orted/Makefile
<br>
sed: file ./confstatlmaOTV/subs-3.sed line 31: unterminated `s' command
<br>
sed: file ./confstatlmaOTV/subs-4.sed line 4: unterminated `s' command
<br>
<p><p><p>Is there anything I do overlook?
<br>
<p>Lydia
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1887.php">Lydia Heck: "Re: [OMPI users] sed: command garbled:"</a>
<li><strong>Previous message:</strong> <a href="1885.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS Tester installation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1887.php">Lydia Heck: "Re: [OMPI users] sed: command garbled:"</a>
<li><strong>Reply:</strong> <a href="1887.php">Lydia Heck: "Re: [OMPI users] sed: command garbled:"</a>
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
