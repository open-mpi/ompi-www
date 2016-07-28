<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 21 17:55:29 2006" -->
<!-- isoreceived="20060921215529" -->
<!-- sent="Thu, 21 Sep 2006 22:55:19 +0100 (BST)" -->
<!-- isosent="20060921215519" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sed: command garbled:" -->
<!-- id="Pine.GSO.4.53.0609212254440.3628_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.53.0609212220490.3628_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>Date:</strong> 2006-09-21 17:55:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1888.php">Nuno Sucena Almeida: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="1886.php">Lydia Heck: "[OMPI users] sed: command garbled:"</a>
<li><strong>In reply to:</strong> <a href="1886.php">Lydia Heck: "[OMPI users] sed: command garbled:"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My apologies I forgot to attach the config.log file.
<br>
<p><p>On Thu, 21 Sep 2006, Lydia Heck wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to build openmpi-1.1.2 for Solaris x86/64 with the studio11
</span><br>
<span class="quotelev1">&gt; compilers and including the mx drivers. I have gone past some hurdles.
</span><br>
<span class="quotelev1">&gt; However when the configure script nears its end where Makefiles are prepared
</span><br>
<span class="quotelev1">&gt; I get error messages of the form:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/osc/rdma/Makefile
</span><br>
<span class="quotelev1">&gt; sed: command garbled: s,@OMPI_CXX_ABSOLUTE@,/opt/studio11/SUNWspro/bin/CC
</span><br>
<span class="quotelev1">&gt; sed: command garbled: s,@OMPI_F90_ABSOLUTE@,/opt/studio11/SUNWspro/bin/f95
</span><br>
<span class="quotelev1">&gt; sed: command garbled: s,@OMPI_CC_ABSOLUTE@,/opt/studio11/SUNWspro/bin/cc
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/pml/cm/Makefile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is with the system's sed command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried to use the
</span><br>
<span class="quotelev1">&gt; gnu sed command and get instead
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sed: file ./confstatlmaOTV/subs-3.sed line 31: unterminated `s' command
</span><br>
<span class="quotelev1">&gt; sed: file ./confstatlmaOTV/subs-4.sed line 4: unterminated `s' command
</span><br>
<span class="quotelev1">&gt; config.status: creating orte/Makefile
</span><br>
<span class="quotelev1">&gt; sed: file ./confstatlmaOTV/subs-4.sed line 4: unterminated `s' command
</span><br>
<span class="quotelev1">&gt; sed: file ./confstatlmaOTV/subs-3.sed line 31: unterminated `s' command
</span><br>
<span class="quotelev1">&gt; config.status: creating orte/include/Makefile
</span><br>
<span class="quotelev1">&gt; sed: file ./confstatlmaOTV/subs-3.sed line 31: unterminated `s' command
</span><br>
<span class="quotelev1">&gt; sed: file ./confstatlmaOTV/subs-4.sed line 4: unterminated `s' command
</span><br>
<span class="quotelev1">&gt; config.status: creating orte/etc/Makefile
</span><br>
<span class="quotelev1">&gt; sed: file ./confstatlmaOTV/subs-3.sed line 31: unterminated `s' command
</span><br>
<span class="quotelev1">&gt; sed: file ./confstatlmaOTV/subs-4.sed line 4: unterminated `s' command
</span><br>
<span class="quotelev1">&gt; config.status: creating orte/tools/orted/Makefile
</span><br>
<span class="quotelev1">&gt; sed: file ./confstatlmaOTV/subs-3.sed line 31: unterminated `s' command
</span><br>
<span class="quotelev1">&gt; sed: file ./confstatlmaOTV/subs-4.sed line 4: unterminated `s' command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anything I do overlook?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lydia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>

<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1887/openmpi-config.log.gz">config.log of attempted configuration</a>
</ul>
<!-- attachment="openmpi-config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1888.php">Nuno Sucena Almeida: "Re: [OMPI users] linux alpha ev6 openmpi 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="1886.php">Lydia Heck: "[OMPI users] sed: command garbled:"</a>
<li><strong>In reply to:</strong> <a href="1886.php">Lydia Heck: "[OMPI users] sed: command garbled:"</a>
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
