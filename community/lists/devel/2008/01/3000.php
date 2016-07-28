<?
$subject_val = "[OMPI devel] dropping a pls module into an Open MPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 14:17:22 2008" -->
<!-- isoreceived="20080118191722" -->
<!-- sent="Fri, 18 Jan 2008 11:17:16 -0800" -->
<!-- isosent="20080118191716" -->
<!-- name="Dean Dauger, Ph. D." -->
<!-- email="d_at_[hidden]" -->
<!-- subject="[OMPI devel] dropping a pls module into an Open MPI build" -->
<!-- id="D919A4C4-3A95-45FD-A13E-6109A05739DA_at_daugerresearch.com" -->
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
<strong>Subject:</strong> [OMPI devel] dropping a pls module into an Open MPI build<br>
<strong>From:</strong> Dean Dauger, Ph. D. (<em>d_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 14:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3001.php">Daniel G. Hyams: "[OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>Previous message:</strong> <a href="2999.php">Jeff Squyres: "Re: [OMPI devel] open ib btl and xrc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3007.php">Jeff Squyres: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Reply:</strong> <a href="3007.php">Jeff Squyres: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Maybe reply:</strong> <a href="3014.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Reply:</strong> <a href="3018.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Maybe reply:</strong> <a href="3028.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Maybe reply:</strong> <a href="3032.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm developing an mca_pls module, intending to drop it into a  
<br>
preexisting Open MPI build (in its lib/openmpi directory) and have  
<br>
orterun pick it up, but orterun kept crashing on me even though it  
<br>
correctly calls my module.  To help isolate the issue I separately  
<br>
recompiled the mca_pls_rsh module from a given Open MPI source  
<br>
checkout and dropping that didn't work either.   Any pointers?
<br>
<p>To give an idea of what's going on here's an example attempt to run  
<br>
on two local processors:
<br>
<p>dauger$ orterun -mca pls rsh -mca pls_base_verbose 10 --debug-devel -- 
<br>
np 2 --host localhost &quot;/Users/dauger/Documents/ompi-trunk/pingpong&quot;
<br>
[Rotarran-X-5.local:04475] connect_uni: connection not allowed
<br>
[Rotarran-X-5.local:04475] mca: base: components_open: Looking for  
<br>
pls components
<br>
[Rotarran-X-5.local:04475] mca: base: components_open: distilling pls  
<br>
components
<br>
[Rotarran-X-5.local:04475] mca: base: components_open: including pls  
<br>
components
<br>
[Rotarran-X-5.local:04475] mca: base: components_open:   rsh --&gt;  
<br>
included
<br>
[Rotarran-X-5.local:04475] mca: base: components_open: opening pls  
<br>
components
<br>
[Rotarran-X-5.local:04475] mca: base: components_open: found loaded  
<br>
component rsh
<br>
[Rotarran-X-5.local:04475] mca: base: components_open: component rsh  
<br>
open function successful
<br>
[Rotarran-X-5.local:04475] orte:base:select: querying component rsh
<br>
[Rotarran-X-5.local:04475] [0,0,0] setting up session dir with
<br>
[Rotarran-X-5.local:04475] 	universe default-universe-4475
<br>
[Rotarran-X-5.local:04475] 	user dauger
<br>
[Rotarran-X-5.local:04475] 	host Rotarran-X-5.local
<br>
[Rotarran-X-5.local:04475] 	jobid 0
<br>
[Rotarran-X-5.local:04475] 	procid 0
<br>
[Rotarran-X-5.local:04475] procdir: /var/folders/oE/oENz6Cd 
<br>
+FTCWQbRGkntLLU+++TI/-Tmp-//openmpi-sessions-dauger_at_Rotarran- 
<br>
X-5.local_0/default-universe-4475/0/0
<br>
[Rotarran-X-5.local:04475] jobdir: /var/folders/oE/oENz6Cd 
<br>
+FTCWQbRGkntLLU+++TI/-Tmp-//openmpi-sessions-dauger_at_Rotarran- 
<br>
X-5.local_0/default-universe-4475/0
<br>
[Rotarran-X-5.local:04475] unidir: /var/folders/oE/oENz6Cd 
<br>
+FTCWQbRGkntLLU+++TI/-Tmp-//openmpi-sessions-dauger_at_Rotarran- 
<br>
X-5.local_0/default-universe-4475
<br>
[Rotarran-X-5.local:04475] top: openmpi-sessions-dauger_at_Rotarran- 
<br>
X-5.local_0
<br>
[Rotarran-X-5.local:04475] tmp: /var/folders/oE/oENz6Cd+FTCWQbRGkntLLU 
<br>
+++TI/-Tmp-/
<br>
[Rotarran-X-5.local:04475] [0,0,0] contact_file /var/folders/oE/ 
<br>
oENz6Cd+FTCWQbRGkntLLU+++TI/-Tmp-//openmpi-sessions-dauger_at_Rotarran- 
<br>
X-5.local_0/default-universe-4475/universe-setup.txt
<br>
[Rotarran-X-5.local:04475] [0,0,0] wrote setup file
<br>
[Rotarran-X-5:04475] *** Process received signal ***
<br>
[Rotarran-X-5:04475] Signal: Bus error (10)
<br>
[Rotarran-X-5:04475] Signal code:  (2)
<br>
[Rotarran-X-5:04475] Failing at address: 0x0
<br>
[ 1] [0xbffff828, 0x00000000] (-P-)
<br>
[ 2] (orterun + 0x457) [0xbffff8b8, 0x00001d07]
<br>
[ 3] (main + 0x18) [0xbffff8d8, 0x000018ae]
<br>
[ 4] (start + 0x36) [0xbffff8fc, 0x0000186a]
<br>
[ 5] [0x00000000, 0x0000000d] (FP-)
<br>
[Rotarran-X-5:04475] *** End of error message ***
<br>
Bus error
<br>
<p>pingpong was compiled with the existing Open MPI, and it runs with  
<br>
the built-in rsh module, but not when I replace the pls_rsh module  
<br>
with a recompiled one.  When I add printf's in the pls_rsh module in  
<br>
its _open and _init, I can show each of its subroutines return  
<br>
without problem, but _launch is not yet called.  I'm running Mac OS X  
<br>
10.5.1, which ships with Open MPI at /usr, on a MacBook Pro with an  
<br>
Intel Core Duo.  (&quot;Rotarran X.5&quot; is the name of the computer.)  I  
<br>
first attempted the 1.3.0 source code via svn, then went back to the  
<br>
1.2.3 source code from Open MPI, but both gave the above bus error.   
<br>
Then I went to Apple's copy of Open MPI 1.2.3 at opensource.apple.com  
<br>
guessing Apple changed things, but that still doesn't work.  I've  
<br>
tried their take on ./configure options too to no avail.  Other than  
<br>
debugging orterun, what else can I try?
<br>
<p>Thanks in advance,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Dean
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3001.php">Daniel G. Hyams: "[OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>Previous message:</strong> <a href="2999.php">Jeff Squyres: "Re: [OMPI devel] open ib btl and xrc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3007.php">Jeff Squyres: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Reply:</strong> <a href="3007.php">Jeff Squyres: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Maybe reply:</strong> <a href="3014.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Reply:</strong> <a href="3018.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Maybe reply:</strong> <a href="3028.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Maybe reply:</strong> <a href="3032.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
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
