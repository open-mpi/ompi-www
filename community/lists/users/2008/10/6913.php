<?
$subject_val = "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 18:09:56 2008" -->
<!-- isoreceived="20081008220956" -->
<!-- sent="Wed, 8 Oct 2008 16:09:51 -0600" -->
<!-- isosent="20081008220951" -->
<!-- name="Sudhakar Mahalingam" -->
<!-- email="sudhakar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5" -->
<!-- id="00691128-6750-4FCB-8F7A-1366284D8047_at_txcorp.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5" -->
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
<strong>From:</strong> Sudhakar Mahalingam (<em>sudhakar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 18:09:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6914.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6912.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="6906.php">Sudhakar Mahalingam: "[OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jed,
<br>
<p>You are correct. I found an &quot;Open&quot; macro defined in our another header  
<br>
file which was included before the mpi header files (Actually this  
<br>
order was working fine with the mpich-1.2.7 but both openmpi-1.2.7 and  
<br>
MPICH-2 complained and threw errors to me). Now when I change the  
<br>
order of inclusion (i.e., first mpi and then my other header file),  
<br>
the code compiles and builds fine.
<br>
<p>Thanks,
<br>
<p>Sudhakar
<br>
<p><p><p>On Wed, Oct 8, 2008 at 21:19, Sudhakar Mahalingam  
<br>
&lt;sudhakar_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1"> &gt; I am having a problem about &quot;Open&quot; Macro's number of arguments,  
</span><br>
when I try
<br>
<span class="quotelev1"> &gt; to build a C++ code with the openmpi-1.2.7 on my Mac OS 10.5.5  
</span><br>
machine. The
<br>
<span class="quotelev1"> &gt; error message is given below. When I look at the file.h and  
</span><br>
file_inln.h
<br>
<span class="quotelev1"> &gt; header files in the cxx folder, I am seeing that the &quot;Open&quot;  
</span><br>
function indeed
<br>
<span class="quotelev1"> &gt; takes four arguments but I don't know why there is this error about  
</span><br>
the
<br>
<span class="quotelev1"> &gt; number of arguments of 4. Does anyone else seen this type of error  
</span><br>
before ?.
<br>
<p>MPI::File::Open is an inline function, not a macro. You must have an
<br>
unqualified Open macro defined in this compilation unit. Maybe in one
<br>
of the headers that were included in your code before hdf5.h. Does it
<br>
work if you include hdf5.h first?
<br>
<p>Jed 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6913/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6914.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6912.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="6906.php">Sudhakar Mahalingam: "[OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
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
