<?
$subject_val = "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 15:35:02 2008" -->
<!-- isoreceived="20081008193502" -->
<!-- sent="Wed, 8 Oct 2008 21:34:57 +0200" -->
<!-- isosent="20081008193457" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5" -->
<!-- id="383ade90810081234l6a53a433o7d16d12b5a16b07d_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="90AF6387-0AA4-4C1F-892B-8A26832668F4_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 15:34:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6908.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Previous message:</strong> <a href="6906.php">Sudhakar Mahalingam: "[OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>In reply to:</strong> <a href="6906.php">Sudhakar Mahalingam: "[OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6913.php">Sudhakar Mahalingam: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 8, 2008 at 21:19, Sudhakar Mahalingam &lt;sudhakar_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I am having a problem about &quot;Open&quot; Macro's number of arguments, when I try
</span><br>
<span class="quotelev1">&gt; to build a C++ code with the openmpi-1.2.7 on my Mac OS 10.5.5 machine. The
</span><br>
<span class="quotelev1">&gt; error message is given below. When I look at the file.h and file_inln.h
</span><br>
<span class="quotelev1">&gt; header files in the cxx folder, I am seeing that the &quot;Open&quot; function indeed
</span><br>
<span class="quotelev1">&gt; takes four arguments but I don't know why there is this error about the
</span><br>
<span class="quotelev1">&gt; number of arguments of 4. Does anyone else seen this type of error before ?.
</span><br>
<p>MPI::File::Open is an inline function, not a macro.  You must have an
<br>
unqualified Open macro defined in this compilation unit.  Maybe in one
<br>
of the headers that were included in your code before hdf5.h.  Does it
<br>
work if you include hdf5.h first?
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6908.php">Ethan Mallove: "Re: [OMPI users] Problem building OpenMPi with SunStudio compilers"</a>
<li><strong>Previous message:</strong> <a href="6906.php">Sudhakar Mahalingam: "[OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>In reply to:</strong> <a href="6906.php">Sudhakar Mahalingam: "[OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6913.php">Sudhakar Mahalingam: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
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
