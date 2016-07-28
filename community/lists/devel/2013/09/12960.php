<?
$subject_val = "Re: [OMPI devel] Problem with multiple identical entries in ~/.openmpi/mca-params.conf";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 18:03:05 2013" -->
<!-- isoreceived="20130920220305" -->
<!-- sent="Fri, 20 Sep 2013 16:03:02 -0600" -->
<!-- isosent="20130920220302" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with multiple identical entries in ~/.openmpi/mca-params.conf" -->
<!-- id="20130920220302.GE59919_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9BD8698E-271B-4FC5-8C2B-2B2167EFC63C_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem with multiple identical entries in ~/.openmpi/mca-params.conf<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 18:03:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12961.php">Jeff Squyres (jsquyres): "[OMPI devel] nightly builds failed"</a>
<li><strong>Previous message:</strong> <a href="12959.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="12957.php">Vallee, Geoffroy R.: "[OMPI devel] Problem with multiple identical entries in ~/.openmpi/mca-params.conf"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will look into this.
<br>
<p>-Nathan
<br>
<p>On Fri, Sep 20, 2013 at 05:49:41PM -0400, Vallee, Geoffroy R. wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found a very unexpected behavior with r29217:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % cat ~/.openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt; #pml_base_verbose=0
</span><br>
<span class="quotelev1">&gt; pml_base_verbose=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % mpicc -o helloworld helloworld.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then if i update the mca-params.conf to have two identical entries, i have segfaults:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % cat ~/.openmpi/mca-params.conf   
</span><br>
<span class="quotelev1">&gt; pml_base_verbose=0
</span><br>
<span class="quotelev1">&gt; pml_base_verbose=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % mpicc -o helloworld helloworld.c 
</span><br>
<span class="quotelev1">&gt; [node0:23157] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node0:23157] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node0:23157] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node0:23157] Failing at address: 0x7f4812770100
</span><br>
<span class="quotelev1">&gt; ^C
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that the compilation hangs. Also note that i have the exact same problem when running an MPI application that was successfully compiled:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % cat ~/.openmpi/mca-params.conf   
</span><br>
<span class="quotelev1">&gt; pml_base_verbose=0
</span><br>
<span class="quotelev1">&gt; #pml_base_verbose=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 ./helloworld
</span><br>
<span class="quotelev1">&gt; Hello, World (node0)
</span><br>
<span class="quotelev1">&gt; Hello, World (node0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 ./helloworld     
</span><br>
<span class="quotelev1">&gt; Hello, World (node0)
</span><br>
<span class="quotelev1">&gt; Hello, World (node0)
</span><br>
<span class="quotelev1">&gt; [node0:23201] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node0:23201] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node0:23201] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node0:23201] Failing at address: 0x7f5a8f632c80
</span><br>
<span class="quotelev1">&gt; [node0:23202] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node0:23202] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node0:23202] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node0:23202] Failing at address: 0x7f1436605650
</span><br>
<span class="quotelev1">&gt; ^C[node0:23199] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node0:23199] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node0:23199] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node0:23199] Failing at address: 0x7f9917dd55f0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem occurs during opal_finalize() and MCA tries to clean up some variables. Sorry i did not have the time to get a full trace.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12961.php">Jeff Squyres (jsquyres): "[OMPI devel] nightly builds failed"</a>
<li><strong>Previous message:</strong> <a href="12959.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="12957.php">Vallee, Geoffroy R.: "[OMPI devel] Problem with multiple identical entries in ~/.openmpi/mca-params.conf"</a>
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
