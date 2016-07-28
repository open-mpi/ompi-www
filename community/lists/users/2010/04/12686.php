<?
$subject_val = "Re: [OMPI users] import/export issues on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 05:00:30 2010" -->
<!-- isoreceived="20100419090030" -->
<!-- sent="Mon, 19 Apr 2010 11:00:14 +0200" -->
<!-- isosent="20100419090014" -->
<!-- name="Ben.Kuppers_at_[hidden]" -->
<!-- email="Ben.Kuppers_at_[hidden]" -->
<!-- subject="Re: [OMPI users] import/export issues on Windows" -->
<!-- id="FA35C5CD419A6A499BEA69EF175460AA1EF6EA_at_amsdc1-s-02348.europe.shell.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BC826D4.8050300_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] import/export issues on Windows<br>
<strong>From:</strong> <a href="mailto:Ben.Kuppers_at_[hidden]?Subject=Re:%20[OMPI%20users]%20import/export%20issues%20on%20Windows"><em>Ben.Kuppers_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-04-19 05:00:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12687.php">Terry Dontje: "Re: [OMPI users] users Digest, Vol 1546, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="12685.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>In reply to:</strong> <a href="12649.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12722.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Reply:</strong> <a href="12722.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shiqing,
<br>
<p>&nbsp;
<br>
<p>I am having more import/export issues once I start using the openmpi
<br>
binaries that I built with the Microsoft compiler. I get unresolved
<br>
symbol errors for MPI::Comm::Comm and for MPI::Datatype::Free when I
<br>
link our own program. The C functions MPI_Comm_create and MPI_Type_free
<br>
are exported but the C++ equivalents apparently are not. Our source code
<br>
builds and runs without issues with the Linux version of openmpi.
<br>
<p>&nbsp;
<br>
<p>Do you have any suggestions?
<br>
<p>&nbsp;
<br>
<p>-Ben
<br>
<p>&nbsp;
<br>
<p>From: Shiqing Fan [mailto:fan_at_[hidden]] 
<br>
Sent: Friday, April 16, 2010 10:59 AM
<br>
To: Open MPI Users
<br>
Cc: Kuppers, Ben SIEP-PTT/SDRM
<br>
Subject: Re: [OMPI users] import/export issues on Windows
<br>
<p>&nbsp;
<br>
<p>Hi Ben,
<br>
<p><p><p><p><p>I believe changing OMPI_DECLSPEC to __declspec(dllexport) inside
<br>
functions.h will allow the cxx module to build (and export the function)
<br>
but will break any client using (and thus trying to import) it.
<br>
OMPI_DECLSPEC should only be defined as __declspec(dllexport) while
<br>
compiling the cxx module (say when libmpi_cxx_EXPORTS is defined).
<br>
<p>Yes, as long as there are more functions to export, they have to be
<br>
defined in that way. I don't see any option for Intel Compiler to manage
<br>
this automatically.
<br>
<p><p><p><p>BTW, I also noticed that the Intel compiler has issues with the
<br>
preprocessor definitions for ompi_info &quot;OMPI_CONFIGURE_DATE=\&quot;03:18 PM
<br>
Wed 04/14/2010 \&quot;&quot; and
<br>
<p>&quot;OMPI_BUILD_DATE=\&quot;03:18 PM Wed 04/14/2010 \&quot;&quot;. The quotes around the
<br>
definitions throw it off completely. Is that something that CMake does
<br>
or do you instruct CMake to do this? Both the Intel and Microsoft
<br>
compiler work correctly without them.
<br>
<p>In which project did you see those preprocessor definitions? Because for
<br>
me, I don't see them. Actually, they are not used as preprocessors in
<br>
the whole solution, but they are only some cached variables in CMake.
<br>
Could you please try to do a clean configuration with CMake, and see if
<br>
they still exists? 
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p><p><p><p>Thanks,
<br>
<p>Ben
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12686/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12687.php">Terry Dontje: "Re: [OMPI users] users Digest, Vol 1546, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="12685.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>In reply to:</strong> <a href="12649.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12722.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Reply:</strong> <a href="12722.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
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
