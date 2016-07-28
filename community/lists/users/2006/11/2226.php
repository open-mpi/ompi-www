<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov 25 12:58:26 2006" -->
<!-- isoreceived="20061125175826" -->
<!-- sent="Sat, 25 Nov 2006 17:58:07 +0000 (GMT)" -->
<!-- isosent="20061125175807" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="[OMPI users] problem building openmpi-1.2b1r12657" -->
<!-- id="Pine.GSO.4.53.0611251753240.18974_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>Date:</strong> 2006-11-25 12:58:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2227.php">Lydia Heck: "Re: [OMPI users] problem building openmpi-1.2b1r12657"</a>
<li><strong>Previous message:</strong> <a href="2225.php">shaposh_at_[hidden]: "[OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2227.php">Lydia Heck: "Re: [OMPI users] problem building openmpi-1.2b1r12657"</a>
<li><strong>Reply:</strong> <a href="2227.php">Lydia Heck: "Re: [OMPI users] problem building openmpi-1.2b1r12657"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The configuration of openmpi-1.2b1r12657 goes fine.
<br>
When I try to build I get  somewhere are into the buid the following
<br>
error message.
<br>
<p><p>DEPDIR=.deps depmode=none /bin/bash ../../../../config/depcomp \
<br>
/bin/bash ../../../../libtool --tag=CC --mode=compile
<br>
/opt/studio11/SUNWspro/bin/cc -DHAVE_CONFIG_H -I. -I. -I.
<br>
./../../../opal/include -I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../ompi/include   -I..
<br>
/../../..    -DNDEBUG -g -O -xtarget=opteron -xarch=amd64 -mt -c -o
<br>
common_sm_mmap.lo common_sm_mmap.c
<br>
libtool: compile:  /opt/studio11/SUNWspro/bin/cc -DHAVE_CONFIG_H -I. -I.
<br>
-I../../../../opal/include -I../../../
<br>
../orte/include -I../../../../ompi/include -I../../../../ompi/include
<br>
-I../../../.. -DNDEBUG -g -O -xtarget=opt
<br>
eron -xarch=amd64 -mt -c common_sm_mmap.c  -KPIC -DPIC -o .libs/common_sm_mmap.o
<br>
Assembler: common_sm_mmap.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;/tmp/IAAztaqgp&quot;, line 11799 : Trouble closing elf file
<br>
cc: ube failed for common_sm_mmap.c
<br>
gmake[2]: *** [common_sm_mmap.lo] Error 1
<br>
gmake[2]: Leaving directory
<br>
`/hpcconsole-1/SOFTWARE/openmpi-1.2b1r12657/ompi/mca/common/sm'
<br>
gmake[1]: *** [all-recursive] Error 1
<br>
gmake[1]: Leaving directory `/hpcconsole-1/SOFTWARE/openmpi-1.2b1r12657/ompi'
<br>
gmake: *** [all-recursive] Error 1
<br>
<p><p>I know that this is in development, but the openmpi-1.2b1
<br>
fails to run one our major codes. So I hoped that with the more
<br>
recent version I would be more successful
<br>
<p>Lydia
<br>
<p><p>------------------------------------------
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
<li><strong>Next message:</strong> <a href="2227.php">Lydia Heck: "Re: [OMPI users] problem building openmpi-1.2b1r12657"</a>
<li><strong>Previous message:</strong> <a href="2225.php">shaposh_at_[hidden]: "[OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2227.php">Lydia Heck: "Re: [OMPI users] problem building openmpi-1.2b1r12657"</a>
<li><strong>Reply:</strong> <a href="2227.php">Lydia Heck: "Re: [OMPI users] problem building openmpi-1.2b1r12657"</a>
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
