<?
$subject_val = "Re: [OMPI users] import/export issues on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 21 05:28:44 2010" -->
<!-- isoreceived="20100421092844" -->
<!-- sent="Wed, 21 Apr 2010 11:29:49 +0200" -->
<!-- isosent="20100421092949" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] import/export issues on Windows" -->
<!-- id="4BCEC58D.9000404_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FA35C5CD419A6A499BEA69EF175460AA1EF6EA_at_amsdc1-s-02348.europe.shell.com" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-21 05:29:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12723.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Previous message:</strong> <a href="12721.php">Baowei Liu: "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>In reply to:</strong> <a href="12686.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12723.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Reply:</strong> <a href="12723.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ben,
<br>
<p>Sorry for response late.
<br>
<p>The preprocessor problem is solved now, I don't know why Intel compiler 
<br>
doesn't accept such kind of definitions. But if you use the latest 
<br>
trunk, it should work.
<br>
<p>I'm working on the import/export problem, and trying to fix it with a 
<br>
better mechanism. I'll let you know when it's ready.
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p>On 2010-4-19 11:00 AM, Ben.Kuppers_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having more import/export issues once I start using the openmpi 
</span><br>
<span class="quotelev1">&gt; binaries that I built with the Microsoft compiler. I get unresolved 
</span><br>
<span class="quotelev1">&gt; symbol errors for MPI::Comm::Comm and for MPI::Datatype::Free when I 
</span><br>
<span class="quotelev1">&gt; link our own program. The C functions MPI_Comm_create and 
</span><br>
<span class="quotelev1">&gt; MPI_Type_free are exported but the C++ equivalents apparently are not. 
</span><br>
<span class="quotelev1">&gt; Our source code builds and runs without issues with the Linux version 
</span><br>
<span class="quotelev1">&gt; of openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Friday, April 16, 2010 10:59 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Cc:* Kuppers, Ben SIEP-PTT/SDRM
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] import/export issues on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ben,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe changing OMPI_DECLSPEC to __declspec(dllexport) inside 
</span><br>
<span class="quotelev1">&gt; functions.h will allow the cxx module to build (and export the 
</span><br>
<span class="quotelev1">&gt; function) but will break any client using (and thus trying to import) 
</span><br>
<span class="quotelev1">&gt; it. OMPI_DECLSPEC should only be defined as __declspec(dllexport) 
</span><br>
<span class="quotelev1">&gt; while compiling the cxx module (say when libmpi_cxx_EXPORTS is defined).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, as long as there are more functions to export, they have to be 
</span><br>
<span class="quotelev1">&gt; defined in that way. I don't see any option for Intel Compiler to 
</span><br>
<span class="quotelev1">&gt; manage this automatically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, I also noticed that the Intel compiler has issues with the 
</span><br>
<span class="quotelev1">&gt; preprocessor definitions for ompi_info &quot;OMPI_CONFIGURE_DATE=\&quot;03:18 PM 
</span><br>
<span class="quotelev1">&gt; Wed 04/14/2010 \&quot;&quot; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;OMPI_BUILD_DATE=\&quot;03:18 PM Wed 04/14/2010 \&quot;&quot;. The quotes around the 
</span><br>
<span class="quotelev1">&gt; definitions throw it off completely. Is that something that CMake does 
</span><br>
<span class="quotelev1">&gt; or do you instruct CMake to do this? Both the Intel and Microsoft 
</span><br>
<span class="quotelev1">&gt; compiler work correctly without them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In which project did you see those preprocessor definitions? Because 
</span><br>
<span class="quotelev1">&gt; for me, I don't see them. Actually, they are not used as preprocessors 
</span><br>
<span class="quotelev1">&gt; in the whole solution, but they are only some cached variables in 
</span><br>
<span class="quotelev1">&gt; CMake. Could you please try to do a clean configuration with CMake, 
</span><br>
<span class="quotelev1">&gt; and see if they still exists?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12722/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12723.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Previous message:</strong> <a href="12721.php">Baowei Liu: "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>In reply to:</strong> <a href="12686.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12723.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Reply:</strong> <a href="12723.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
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
