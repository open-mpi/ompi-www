<?
$subject_val = "Re: [OMPI users] OpenMPI at windows";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 27 17:47:27 2012" -->
<!-- isoreceived="20120227224727" -->
<!-- sent="Mon, 27 Feb 2012 23:47:17 +0100" -->
<!-- isosent="20120227224717" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI at windows" -->
<!-- id="4F4C07F5.6070108_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAEW4+YwDKue=9txauqQqF3Xse8dz1evHQX++uZWLM_5v5mrf6w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI at windows<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-27 17:47:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18567.php">Syed Ahsan Ali: "[OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Previous message:</strong> <a href="18565.php">Paul Kapinos: "[OMPI users] Problem running over IB with huge data set"</a>
<li><strong>In reply to:</strong> <a href="18557.php">Tal Regev: "[OMPI users] OpenMPI at windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tal,
<br>
<p>The released Windows binaries are built only for Microsoft VS compilers.
<br>
<p>If you want to use gcc and g++, you have to build Open MPI by yourself 
<br>
using CMake.  Just select &quot;MSYS Makefiles&quot; as the generator, you can 
<br>
build binaries under MinGW. Please note that, this is only supported for 
<br>
32bit MinGW, and there may be run-time problems, as it is still 
<br>
experimental.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2012-02-26 7:33 AM, Tal Regev wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I am using windows 7 64 bit,
</span><br>
<span class="quotelev1">&gt; and i want to compile with mpicc and mpic++.
</span><br>
<span class="quotelev1">&gt; i download OpenMPI_v1.5.4-1_win32.exe 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.4-1_win32.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.4-1_win32.exe</a>&gt;
</span><br>
<span class="quotelev1">&gt; and when i compile with it, it say i need lc.exe.
</span><br>
<span class="quotelev1">&gt; there is a way to config mpicc and mpic++ to use customize compiler?
</span><br>
<span class="quotelev1">&gt; I want that mpicc.exe will use mingw gcc -&gt; gcc.exe
</span><br>
<span class="quotelev1">&gt; and mpic++ will use mingw g++ -&gt; g++.exe.
</span><br>
<span class="quotelev1">&gt; can you help me what I need to do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thx Tal.
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
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18566/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18567.php">Syed Ahsan Ali: "[OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Previous message:</strong> <a href="18565.php">Paul Kapinos: "[OMPI users] Problem running over IB with huge data set"</a>
<li><strong>In reply to:</strong> <a href="18557.php">Tal Regev: "[OMPI users] OpenMPI at windows"</a>
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
