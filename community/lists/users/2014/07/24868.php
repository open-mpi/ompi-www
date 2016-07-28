<?
$subject_val = "[OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 02:00:27 2014" -->
<!-- isoreceived="20140725060027" -->
<!-- sent="Fri, 25 Jul 2014 07:59:21 +0200 (CEST)" -->
<!-- isosent="20140725055921" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2" -->
<!-- id="201407250559.s6P5xLsD029088_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 01:59:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24869.php">Siegmar Gross: "[OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="24867.php">Gus Correa: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24872.php">Nathan Hjelm: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<li><strong>Reply:</strong> <a href="24872.php">Nathan Hjelm: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<li><strong>Maybe reply:</strong> <a href="24883.php">Siegmar Gross: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to track down the error which I reported for
<br>
my small program (running on Solaris 10 Sparc).
<br>
<p>tyr hello_1 121 mpiexec -np 2 a.out 
<br>
Process 1 of 2 running on tyr.informatik.hs-fulda.de
<br>
Process 0 of 2 running on tyr.informatik.hs-fulda.de
<br>
Now 1 slave tasks are sending greetings.
<br>
ld.so.1: a.out: fatal: relocation error:
<br>
&nbsp;&nbsp;file /usr/local/openmpi-1.8.2_64_cc/lib64/openmpi/mca_pml_ob1.so:
<br>
&nbsp;&nbsp;symbol alloca: referenced symbol not found
<br>
...
<br>
<p><p>&quot;alloca&quot; is available.
<br>
<p>tyr hello_1 122 more x.c 
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;alloca.h&gt;
<br>
<p>int main (void)
<br>
{
<br>
&nbsp;&nbsp;int *alloca_buffer;
<br>
&nbsp;&nbsp;alloca_buffer = (int *) alloca (sizeof (int));
<br>
&nbsp;&nbsp;*alloca_buffer = 1234;
<br>
&nbsp;&nbsp;printf (&quot;value: %d\n&quot;, *alloca_buffer);
<br>
&nbsp;&nbsp;return EXIT_SUCCESS;
<br>
}
<br>
tyr hello_1 123 cc x.c 
<br>
tyr hello_1 124 a.out
<br>
value: 1234
<br>
tyr hello_1 125 
<br>
<p><p>I get the following output if I run my original program in &quot;dbx&quot;.
<br>
<p>...
<br>
RTC: Running program...
<br>
Write to unallocated (wua) on thread 1:
<br>
Attempting to write 1 byte at address 0xffffffff79f04000
<br>
t_at_1 (l_at_1) stopped in _readdir at 0xffffffff56574da0
<br>
0xffffffff56574da0: _readdir+0x0064:    call     
<br>
_PROCEDURE_LINKAGE_TABLE_+0x2380 [PLT] ! 0xffffffff56742a80
<br>
Current function is find_dyn_components
<br>
&nbsp;&nbsp;397                       if (0 != lt_dlforeachfile(dir, save_filename, NULL)) 
<br>
{
<br>
(dbx) 
<br>
<p><p>Hopefully the above output helps to fix the error. Can I provide
<br>
anything else? Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24869.php">Siegmar Gross: "[OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="24867.php">Gus Correa: "Re: [OMPI users] configure fails to detect missing libcrypto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24872.php">Nathan Hjelm: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<li><strong>Reply:</strong> <a href="24872.php">Nathan Hjelm: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<li><strong>Maybe reply:</strong> <a href="24883.php">Siegmar Gross: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
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
