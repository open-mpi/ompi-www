<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov 25 13:27:21 2006" -->
<!-- isoreceived="20061125182721" -->
<!-- sent="Sat, 25 Nov 2006 18:27:05 +0000 (GMT)" -->
<!-- isosent="20061125182705" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem building openmpi-1.2b1r12657" -->
<!-- id="Pine.GSO.4.53.0611251826140.18974_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.53.0611251753240.18974_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>Date:</strong> 2006-11-25 13:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2228.php">bremner_at_[hidden]: "[OMPI users] Myrinet/GM can't find any NICs"</a>
<li><strong>Previous message:</strong> <a href="2226.php">Lydia Heck: "[OMPI users] problem building openmpi-1.2b1r12657"</a>
<li><strong>In reply to:</strong> <a href="2226.php">Lydia Heck: "[OMPI users] problem building openmpi-1.2b1r12657"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My apologies ....
<br>
This was a red herring. It turned out that I had filled the disk.
<br>
It so happened that the same error was repeated several time, even after
<br>
reconfiguring.
<br>
<p>Lydia
<br>
<p>On Sat, 25 Nov 2006, Lydia Heck wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configuration of openmpi-1.2b1r12657 goes fine.
</span><br>
<span class="quotelev1">&gt; When I try to build I get  somewhere are into the buid the following
</span><br>
<span class="quotelev1">&gt; error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DEPDIR=.deps depmode=none /bin/bash ../../../../config/depcomp \
</span><br>
<span class="quotelev1">&gt; /bin/bash ../../../../libtool --tag=CC --mode=compile
</span><br>
<span class="quotelev1">&gt; /opt/studio11/SUNWspro/bin/cc -DHAVE_CONFIG_H -I. -I. -I.
</span><br>
<span class="quotelev1">&gt; ./../../../opal/include -I../../../../orte/include -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include   -I..
</span><br>
<span class="quotelev1">&gt; /../../..    -DNDEBUG -g -O -xtarget=opteron -xarch=amd64 -mt -c -o
</span><br>
<span class="quotelev1">&gt; common_sm_mmap.lo common_sm_mmap.c
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /opt/studio11/SUNWspro/bin/cc -DHAVE_CONFIG_H -I. -I.
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/include -I../../../
</span><br>
<span class="quotelev1">&gt; ../orte/include -I../../../../ompi/include -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../.. -DNDEBUG -g -O -xtarget=opt
</span><br>
<span class="quotelev1">&gt; eron -xarch=amd64 -mt -c common_sm_mmap.c  -KPIC -DPIC -o .libs/common_sm_mmap.o
</span><br>
<span class="quotelev1">&gt; Assembler: common_sm_mmap.c
</span><br>
<span class="quotelev1">&gt;         &quot;/tmp/IAAztaqgp&quot;, line 11799 : Trouble closing elf file
</span><br>
<span class="quotelev1">&gt; cc: ube failed for common_sm_mmap.c
</span><br>
<span class="quotelev1">&gt; gmake[2]: *** [common_sm_mmap.lo] Error 1
</span><br>
<span class="quotelev1">&gt; gmake[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/hpcconsole-1/SOFTWARE/openmpi-1.2b1r12657/ompi/mca/common/sm'
</span><br>
<span class="quotelev1">&gt; gmake[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; gmake[1]: Leaving directory `/hpcconsole-1/SOFTWARE/openmpi-1.2b1r12657/ompi'
</span><br>
<span class="quotelev1">&gt; gmake: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that this is in development, but the openmpi-1.2b1
</span><br>
<span class="quotelev1">&gt; fails to run one our major codes. So I hoped that with the more
</span><br>
<span class="quotelev1">&gt; recent version I would be more successful
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lydia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L  Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University of Durham
</span><br>
<span class="quotelev1">&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; South Road
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev1">&gt; United Kingdom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2228.php">bremner_at_[hidden]: "[OMPI users] Myrinet/GM can't find any NICs"</a>
<li><strong>Previous message:</strong> <a href="2226.php">Lydia Heck: "[OMPI users] problem building openmpi-1.2b1r12657"</a>
<li><strong>In reply to:</strong> <a href="2226.php">Lydia Heck: "[OMPI users] problem building openmpi-1.2b1r12657"</a>
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
