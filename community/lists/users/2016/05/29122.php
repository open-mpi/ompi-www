<?
$subject_val = "[OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 12:10:08 2016" -->
<!-- isoreceived="20160506161008" -->
<!-- sent="Fri, 6 May 2016 18:09:53 +0200" -->
<!-- isosent="20160506160953" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C" -->
<!-- id="89012b48-a55f-d5ae-8b02-88246b9e5d4f_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 12:09:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29123.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C"</a>
<li><strong>Previous message:</strong> <a href="29121.php">Joshua Ladd: "Re: [OMPI users] SLOAVx alltoallv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29123.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C"</a>
<li><strong>Reply:</strong> <a href="29123.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to build openmpi-dev-4010-g6c9d65c on my
<br>
machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
<br>
Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. I was
<br>
successful on most machines, but I got the following error
<br>
on my Linux machine for the Sun C compiler.
<br>
<p>tyr openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 123 tail -7 log.make.Linux.x86_64.64_cc
<br>
&quot;../../../../../openmpi-dev-4010-g6c9d65c/opal/mca/reachable/netlink/reachable_netlink_utils_common.c&quot;, line 322: warning: extern inline function 
<br>
&quot;nl_object_priv&quot; not defined in translation unit
<br>
cc: Fatal error in /opt/sun/solarisstudio12.4/lib/compilers/acomp : Signal number = 11
<br>
make[2]: *** [reachable_netlink_utils_common.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc/opal/mca/reachable/netlink'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc/opal'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-dev-4010-g6c9d65c-Linux.x86_64.64_cc 124
<br>
<p><p>I would be grateful, if somebody can fix the problem.
<br>
Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29123.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C"</a>
<li><strong>Previous message:</strong> <a href="29121.php">Joshua Ladd: "Re: [OMPI users] SLOAVx alltoallv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29123.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C"</a>
<li><strong>Reply:</strong> <a href="29123.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C"</a>
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
