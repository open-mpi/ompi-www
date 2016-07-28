<?
$subject_val = "Re: [OMPI users] Openmpi in Mingw";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 25 10:54:24 2012" -->
<!-- isoreceived="20120125155424" -->
<!-- sent="Wed, 25 Jan 2012 16:54:18 +0100" -->
<!-- isosent="20120125155418" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi in Mingw" -->
<!-- id="4F2025AA.7000607_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E3DD54F2-9CA1-456F-9252-47416F66556C_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi in Mingw<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-25 10:54:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18271.php">Jeff Squyres: "Re: [OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object"</a>
<li><strong>Previous message:</strong> <a href="18269.php">Yevgeny Kliteynik: "Re: [OMPI users] openib btl and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="18260.php">Temesghen Kahsai: "[OMPI users] Openmpi in Mingw"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Are you using 32 bit Windows or 64 bit? Because as far as I know, the 
<br>
build for 64 bit windows with MinGW is not working. Which CMake 
<br>
Generator did you use? Did you run CMake from the MSYS command window?
<br>
<p>Thanks,
<br>
Shiqing
<br>
<p>On 2012-01-24 9:24 PM, Temesghen Kahsai wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having truble compiling openmpi (version 1.5.5rc2r25765 - nightly 
</span><br>
<span class="quotelev1">&gt; built) on Mingw. I am running Windows 7 and the latest version of Mingw.
</span><br>
<span class="quotelev1">&gt; I keep on getting the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In file included from ../../opal/include/opal_config_bottom.h:258:0,
</span><br>
<span class="quotelev1">&gt;                  from ../../opal/include/opal_config.h:2327,
</span><br>
<span class="quotelev1">&gt;                  from asm.c:19:
</span><br>
<span class="quotelev1">&gt; ../../opal/win32/win_compat.h:93:14: error: conflicting types for 
</span><br>
<span class="quotelev1">&gt; 'ssize_t'
</span><br>
<span class="quotelev1">&gt; c:\mingw\bin\../lib/gcc/mingw32/4.6.2/../../../../include/sys/types.h:118:18: 
</span><br>
<span class="quotelev1">&gt; note: previous declaration of 'ssize_t' wa
</span><br>
<span class="quotelev1">&gt; s here
</span><br>
<span class="quotelev1">&gt; In file included from ../../opal/include/opal_config_bottom.h:258:0,
</span><br>
<span class="quotelev1">&gt;                  from ../../opal/include/opal_config.h:2327,
</span><br>
<span class="quotelev1">&gt;                  from asm.c:19:
</span><br>
<span class="quotelev1">&gt; ../../opal/win32/win_compat.h:321:0: warning: &quot;OPAL_HAVE_HWLOC&quot; 
</span><br>
<span class="quotelev1">&gt; redefined [enabled by default]
</span><br>
<span class="quotelev1">&gt; ../../opal/include/opal_config.h:1876:0: note: this is the location of 
</span><br>
<span class="quotelev1">&gt; the previous definition
</span><br>
<span class="quotelev1">&gt; In file included from ../../opal/include/opal_config.h:2327:0,
</span><br>
<span class="quotelev1">&gt;                  from asm.c:19:
</span><br>
<span class="quotelev1">&gt; ../../opal/include/opal_config_bottom.h:559:0: warning: &quot;PF_UNSPEC&quot; 
</span><br>
<span class="quotelev1">&gt; redefined [enabled by default]
</span><br>
<span class="quotelev1">&gt; c:\mingw\bin\../lib/gcc/mingw32/4.6.2/../../../../include/winsock2.h:368:0: 
</span><br>
<span class="quotelev1">&gt; note: this is the location of the previous definition
</span><br>
<span class="quotelev1">&gt; ../../opal/include/opal_config_bottom.h:562:0: warning: &quot;AF_INET6&quot; 
</span><br>
<span class="quotelev1">&gt; redefined [enabled by default]
</span><br>
<span class="quotelev1">&gt; c:\mingw\bin\../lib/gcc/mingw32/4.6.2/../../../../include/winsock2.h:329:0: 
</span><br>
<span class="quotelev1">&gt; note: this is the location of the previous definition
</span><br>
<span class="quotelev1">&gt; ../../opal/include/opal_config_bottom.h:565:0: warning: &quot;PF_INET6&quot; 
</span><br>
<span class="quotelev1">&gt; redefined [enabled by default]
</span><br>
<span class="quotelev1">&gt; c:\mingw\bin\../lib/gcc/mingw32/4.6.2/../../../../include/winsock2.h:392:0: 
</span><br>
<span class="quotelev1">&gt; note: this is the location of the previous definition
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; T
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18271.php">Jeff Squyres: "Re: [OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object"</a>
<li><strong>Previous message:</strong> <a href="18269.php">Yevgeny Kliteynik: "Re: [OMPI users] openib btl and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="18260.php">Temesghen Kahsai: "[OMPI users] Openmpi in Mingw"</a>
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
