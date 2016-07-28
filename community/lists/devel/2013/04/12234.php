<?
$subject_val = "Re: [OMPI devel] issue with openmpi and visual studio 2010";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 13:27:38 2013" -->
<!-- isoreceived="20130404172738" -->
<!-- sent="Thu, 4 Apr 2013 10:27:31 -0700" -->
<!-- isosent="20130404172731" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] issue with openmpi and visual studio 2010" -->
<!-- id="8C376D33-57EE-4C09-946A-F8F5FAF0F407_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="519DC26FE4C14A46AA92A26E24A1EF67C21DE0_at_UIBETPEXV1.ias.unrpnet.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] issue with openmpi and visual studio 2010<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-04 13:27:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12235.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="12233.php">Julia.Dudascik.Contractor_at_[hidden]: "[OMPI devel] issue with openmpi and visual studio 2010"</a>
<li><strong>In reply to:</strong> <a href="12233.php">Julia.Dudascik.Contractor_at_[hidden]: "[OMPI devel] issue with openmpi and visual studio 2010"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ick - I'm afraid our Windows person has left for greener pastures, so we have no real Windows support any more. :-(
<br>
<p>However, the cygwin folks have released an OMPI package now - you might give that a try.
<br>
<p>On Apr 4, 2013, at 10:23 AM, Julia.Dudascik.Contractor_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I downloaded a precompiled version of 64-bit openmpi 1.6.2. I then include and link with the libraries and header files for my C++ application in Visual Studio 2010 64-bit. When I run my C++ code in Visual Studio 2010, I set up my MPI_Comm and MPI_Info without a problem. But when I call MPI_File_open, I get back an error code of 16 MPI_ERR_OTHER.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Could you tell me why I cannot open an existing file with MPI? I do not run with mpirun, I am running the code with visual studio. It prints out that it created the process and gives it a rank. I just cannot open a file. Please help me.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Julia
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12234/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12235.php">Ralph Castain: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition	of ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="12233.php">Julia.Dudascik.Contractor_at_[hidden]: "[OMPI devel] issue with openmpi and visual studio 2010"</a>
<li><strong>In reply to:</strong> <a href="12233.php">Julia.Dudascik.Contractor_at_[hidden]: "[OMPI devel] issue with openmpi and visual studio 2010"</a>
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
