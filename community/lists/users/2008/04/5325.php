<?
$subject_val = "[OMPI users] Problem with sending vectors";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  6 14:14:55 2008" -->
<!-- isoreceived="20080406181455" -->
<!-- sent="Sun, 6 Apr 2008 14:14:39 -0400 (EDT)" -->
<!-- isosent="20080406181439" -->
<!-- name="Albert Babinskas" -->
<!-- email="babinsk3_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with sending vectors" -->
<!-- id="212149977.8209861207505679772.JavaMail.root_at_zcs.TCNJ.EDU" -->
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
<strong>Subject:</strong> [OMPI users] Problem with sending vectors<br>
<strong>From:</strong> Albert Babinskas (<em>babinsk3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-06 14:14:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5326.php">brian janus: "Re: [OMPI users] Introduce myself."</a>
<li><strong>Previous message:</strong> <a href="5324.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Introduce myself."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5331.php">Andreas Schäfer: "Re: [OMPI users] Problem with sending vectors"</a>
<li><strong>Reply:</strong> <a href="5331.php">Andreas Schäfer: "Re: [OMPI users] Problem with sending vectors"</a>
<li><strong>Reply:</strong> <a href="5333.php">Albert Babinskas: "[OMPI users] Fwd: Problem with sending vectors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I want to send vectors of myclass between nodes. But myclass has 
<br>
arrays inside of it. So i defined Datatype mpi_arrays to define the
<br>
arrays in myclass and then i defined another Datatype for vectors.
<br>
When i send vectors between nodes i get this error:
<br>
<p>[localhost:31457] *** Process received signal ***
<br>
[localhost:31457] Signal: Segmentation fault (11)
<br>
[localhost:31457] Signal code:  (128)
<br>
[localhost:31457] Failing at address: (nil)
<br>
[localhost:31457] [ 0] /lib/tls/libpthread.so.0 [0x84ba90]
<br>
[localhost:31457] [ 1] a.out(_ZSt13__destroy_auxIP3BoxEvT_S2_12__false_type+0x19) [0x805a4f9]
<br>
[localhost:31457] [ 2] a.out(_ZSt8_DestroyIP3BoxEvT_S2_+0x1a) [0x8059650]
<br>
[localhost:31457] [ 3] a.out(_ZNSt6vectorI3BoxSaIS0_EED1Ev+0x1a) [0x80588d2]
<br>
[localhost:31457] [ 4] a.out(_Z13GenerateBoxesv+0xe01) [0x8056055]
<br>
[localhost:31457] [ 5] a.out(main+0x38) [0x8056d08]
<br>
[localhost:31457] [ 6] /lib/tls/libc.so.6(__libc_start_main+0xd3) [0x13cde3]
<br>
[localhost:31457] [ 7] a.out(__gxx_personality_v0+0x81) [0x8054fa9]
<br>
[localhost:31457] *** End of error message ***
<br>
<p>I am a confused about what am i doing wrong and how to fix errors. 
<br>
It shows that i receive the vector, but then it crashes. 
<br>
The way i define arrays is by using contiguous, and vectors also
<br>
using contiguous.
<br>
<p>Thank you for talking a look.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5326.php">brian janus: "Re: [OMPI users] Introduce myself."</a>
<li><strong>Previous message:</strong> <a href="5324.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Introduce myself."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5331.php">Andreas Schäfer: "Re: [OMPI users] Problem with sending vectors"</a>
<li><strong>Reply:</strong> <a href="5331.php">Andreas Schäfer: "Re: [OMPI users] Problem with sending vectors"</a>
<li><strong>Reply:</strong> <a href="5333.php">Albert Babinskas: "[OMPI users] Fwd: Problem with sending vectors"</a>
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
