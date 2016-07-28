<?
$subject_val = "[OMPI devel] Problem with multiple identical entries in ~/.openmpi/mca-params.conf";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 17:49:43 2013" -->
<!-- isoreceived="20130920214943" -->
<!-- sent="Fri, 20 Sep 2013 17:49:41 -0400" -->
<!-- isosent="20130920214941" -->
<!-- name="Vallee, Geoffroy R." -->
<!-- email="valleegr_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem with multiple identical entries in ~/.openmpi/mca-params.conf" -->
<!-- id="9BD8698E-271B-4FC5-8C2B-2B2167EFC63C_at_ornl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Problem with multiple identical entries in ~/.openmpi/mca-params.conf<br>
<strong>From:</strong> Vallee, Geoffroy R. (<em>valleegr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 17:49:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12958.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="12956.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12960.php">Nathan Hjelm: "Re: [OMPI devel] Problem with multiple identical entries in ~/.openmpi/mca-params.conf"</a>
<li><strong>Reply:</strong> <a href="12960.php">Nathan Hjelm: "Re: [OMPI devel] Problem with multiple identical entries in ~/.openmpi/mca-params.conf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I found a very unexpected behavior with r29217:
<br>
<p>% cat ~/.openmpi/mca-params.conf
<br>
#pml_base_verbose=0
<br>
pml_base_verbose=0
<br>
<p>% mpicc -o helloworld helloworld.c
<br>
<p>Then if i update the mca-params.conf to have two identical entries, i have segfaults:
<br>
<p>% cat ~/.openmpi/mca-params.conf   
<br>
pml_base_verbose=0
<br>
pml_base_verbose=0
<br>
<p>% mpicc -o helloworld helloworld.c 
<br>
[node0:23157] *** Process received signal ***
<br>
[node0:23157] Signal: Segmentation fault (11)
<br>
[node0:23157] Signal code: Address not mapped (1)
<br>
[node0:23157] Failing at address: 0x7f4812770100
<br>
^C
<br>
<p>Note that the compilation hangs. Also note that i have the exact same problem when running an MPI application that was successfully compiled:
<br>
<p>% cat ~/.openmpi/mca-params.conf   
<br>
pml_base_verbose=0
<br>
#pml_base_verbose=0
<br>
<p>% mpirun -np 2 ./helloworld
<br>
Hello, World (node0)
<br>
Hello, World (node0)
<br>
<p>% mpirun -np 2 ./helloworld     
<br>
Hello, World (node0)
<br>
Hello, World (node0)
<br>
[node0:23201] *** Process received signal ***
<br>
[node0:23201] Signal: Segmentation fault (11)
<br>
[node0:23201] Signal code: Address not mapped (1)
<br>
[node0:23201] Failing at address: 0x7f5a8f632c80
<br>
[node0:23202] *** Process received signal ***
<br>
[node0:23202] Signal: Segmentation fault (11)
<br>
[node0:23202] Signal code: Address not mapped (1)
<br>
[node0:23202] Failing at address: 0x7f1436605650
<br>
^C[node0:23199] *** Process received signal ***
<br>
[node0:23199] Signal: Segmentation fault (11)
<br>
[node0:23199] Signal code: Address not mapped (1)
<br>
[node0:23199] Failing at address: 0x7f9917dd55f0
<br>
<p>The problem occurs during opal_finalize() and MCA tries to clean up some variables. Sorry i did not have the time to get a full trace.
<br>
<p>Best regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12958.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="12956.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12960.php">Nathan Hjelm: "Re: [OMPI devel] Problem with multiple identical entries in ~/.openmpi/mca-params.conf"</a>
<li><strong>Reply:</strong> <a href="12960.php">Nathan Hjelm: "Re: [OMPI devel] Problem with multiple identical entries in ~/.openmpi/mca-params.conf"</a>
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
