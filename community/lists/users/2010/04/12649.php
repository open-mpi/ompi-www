<?
$subject_val = "Re: [OMPI users] import/export issues on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 04:58:06 2010" -->
<!-- isoreceived="20100416085806" -->
<!-- sent="Fri, 16 Apr 2010 10:59:00 +0200" -->
<!-- isosent="20100416085900" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] import/export issues on Windows" -->
<!-- id="4BC826D4.8050300_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FA35C5CD419A6A499BEA69EF175460AA1EF530_at_amsdc1-s-02348.europe.shell.com" -->
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
<strong>Date:</strong> 2010-04-16 04:59:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12650.php">Jeff Squyres: "Re: [OMPI users] mpi programs"</a>
<li><strong>Previous message:</strong> <a href="12648.php">Mallikarjuna Shastry: "[OMPI users] mpi programs"</a>
<li><strong>In reply to:</strong> <a href="12647.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12685.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Reply:</strong> <a href="12685.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Reply:</strong> <a href="12686.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ben,
<br>
<p><p><span class="quotelev1">&gt; I believe changing OMPI_DECLSPEC to __declspec(dllexport) inside 
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
Yes, as long as there are more functions to export, they have to be 
<br>
defined in that way. I don't see any option for Intel Compiler to manage 
<br>
this automatically.
<br>
<p><span class="quotelev1">&gt; BTW, I also noticed that the Intel compiler has issues with the 
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
In which project did you see those preprocessor definitions? Because for 
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
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; *On Behalf Of *Shiqing Fan
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, April 15, 2010 1:28 PM
</span><br>
<span class="quotelev1">&gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Cc:* Kuppers, Ben SIEP-PTT/SDRM
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] import/export issues on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems Microsoft C++ compiler could recognize what the code wants to 
</span><br>
<span class="quotelev1">&gt; do, while Intel C++ compiler couldn't. I know a solution for this kind 
</span><br>
<span class="quotelev1">&gt; of problem, but it involves some code base changes,  I need some time 
</span><br>
<span class="quotelev1">&gt; to test it. At moment, if you want to use Intel C++ compiler, the 
</span><br>
<span class="quotelev1">&gt; dirty solution is just changing &quot;OMPI_DECLSPEC&quot; in 
</span><br>
<span class="quotelev1">&gt; ompi/mpi/cxx/functions.h to &quot;__declspec(dllexport)&quot;. Or you could 
</span><br>
<span class="quotelev1">&gt; switch to use Microsoft compiler only for this libmpi_cxx project.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2010-4-15 9:52 AM, Ben.Kuppers_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Ben.Kuppers_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I use 1.4.2rc1 I am able build in Visual Studio 2005 (CMake 2.6.4 
</span><br>
<span class="quotelev1">&gt; default settings VS2005 x64)but I get the following warning (among 
</span><br>
<span class="quotelev1">&gt; others):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 11&gt;..\..\..\..\..\ompi\mpi\cxx\intercepts.cc(81) : warning C4273: 
</span><br>
<span class="quotelev1">&gt; 'MPI::InitializeIntercepts' : inconsistent dll linkage
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 11&gt;        E:\source\openmpi-1.4.1\ompi/mpi/cxx/functions.h(64) : see 
</span><br>
<span class="quotelev1">&gt; previous definition of 'InitializeIntercepts'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I convert the Visual Studio projects to use the Intel 10.1 
</span><br>
<span class="quotelev1">&gt; compiler (required for our production environment) this warning 
</span><br>
<span class="quotelev1">&gt; becomes an error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 11&gt;E:\source\openmpi-1.4.2rc1\ompi\mpi\cxx\intercepts.cc(80): error: a 
</span><br>
<span class="quotelev1">&gt; function declared &quot;dllimport&quot; may not be defined
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 11&gt;  MPI::InitializeIntercepts()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This issue seems related to 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/03/12392.php">http://www.open-mpi.org/community/lists/users/2010/03/12392.php</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears to me that you are trying to use a single symbol to import 
</span><br>
<span class="quotelev1">&gt; from the c module and export from cxx module at the same time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan<a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;    Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt; Address:Allmandring 30               email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;     
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12650.php">Jeff Squyres: "Re: [OMPI users] mpi programs"</a>
<li><strong>Previous message:</strong> <a href="12648.php">Mallikarjuna Shastry: "[OMPI users] mpi programs"</a>
<li><strong>In reply to:</strong> <a href="12647.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12685.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Reply:</strong> <a href="12685.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Reply:</strong> <a href="12686.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
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
