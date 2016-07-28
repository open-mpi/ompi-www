<?
$subject_val = "Re: [OMPI users] &quot;Value out of bounds in file&quot; error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 07:47:17 2011" -->
<!-- isoreceived="20110413114717" -->
<!-- sent="Wed, 13 Apr 2011 17:17:12 +0530" -->
<!-- isosent="20110413114712" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Value out of bounds in file&amp;quot; error" -->
<!-- id="BANLkTik52Hf5BaBv5AqX_DcxzsMZbQh=0Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTimOX6p_auAdUBct7pV+wpjdD+rAjA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Value out of bounds in file&quot; error<br>
<strong>From:</strong> hi (<em>hiralsmaillist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 07:47:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16213.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Previous message:</strong> <a href="16211.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>In reply to:</strong> <a href="16211.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rainer,
<br>
<p>When executing &quot;mpirun blacs_hello_example.exe&quot; (reference:
<br>
<a href="http://www.netlib.org/blacs/BLACS/Examples.html#HELLO">http://www.netlib.org/blacs/BLACS/Examples.html#HELLO</a>), I am now getting
<br>
folloing error...
<br>
<p>&lt;&lt;&lt;&lt;&lt;&lt;
<br>
C:\blacs_examples&gt;mpirun blacs_hello_example.exe
<br>
forrtl: severe (157): Program Exception - access violation
<br>
Image              PC        Routine            Line        Source
<br>
libmpid.dll        63472DC5  Unknown               Unknown  Unknown
<br>
libmpid.dll        63472C31  Unknown               Unknown  Unknown
<br>
blacs_ex01.exe     0040418A  Unknown               Unknown  Unknown
<br>
blacs_ex01.exe     00401034  Unknown               Unknown  Unknown
<br>
blacs_ex01.exe     00401F53  Unknown               Unknown  Unknown
<br>
blacs_ex01.exe     0040182A  Unknown               Unknown  Unknown
<br>
kernel32.dll       75E23677  Unknown               Unknown  Unknown
<br>
ntdll.dll          77049F02  Unknown               Unknown  Unknown
<br>
ntdll.dll          77049ED5  Unknown               Unknown  Unknown
<br>
[vibgyor:08548] [[27683,0],0]-[[27683,1],0] mca_oob_tcp_msg_recv: readv
<br>
failed: Unknown error (10054)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 480 on
<br>
node vibgyor exiting improperly. There are two reasons this could occur:
<br>
1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<p>Any idea on this???
<br>
<p>Thank you.
<br>
-Hiral
<br>
On Wed, Apr 13, 2011 at 11:45 AM, hi &lt;hiralsmaillist_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Rainer,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for acknowledgment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; You may want to port/compile BLACS from netlib yourselve, see here:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://icl.cs.utk.edu/lapack-for-windows/VisualStudio_install.html">http://icl.cs.utk.edu/lapack-for-windows/VisualStudio_install.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With that I am seeing compilation errors as reported in...
</span><br>
<span class="quotelev1">&gt; <a href="http://icl.cs.utk.edu/lapack-forum/viewtopic.php?f=12&amp;t=2354">http://icl.cs.utk.edu/lapack-forum/viewtopic.php?f=12&amp;t=2354</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please comment on this, if you any idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; -Hiral
</span><br>
<span class="quotelev1">&gt;   On Wed, Apr 13, 2011 at 1:37 AM, Rainer Keller &lt;keller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hiral,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Monday 11 April 2011 15:04:19 hi wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is it the case that I am combining mkl_intelmpi with locally built
</span><br>
<span class="quotelev2">&gt;&gt; openmpi
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and hence this problem???
</span><br>
<span class="quotelev2">&gt;&gt; Yes, as You mention yourselve here ,-]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Files (x86)\Intel\Compiler\11.1\065\mkl/ia32/lib&quot; mkl_blacs_intelmpi.lib
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mkl_core.lib mkl_core_dll.lib /LIBPATH:&quot;C:/Program Files
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MKL includes the BLACS interface -- however, MKL is built against
</span><br>
<span class="quotelev2">&gt;&gt; Intel-MPI:
</span><br>
<span class="quotelev2">&gt;&gt; under Linux-based MKL, there exist the static libraries
</span><br>
<span class="quotelev2">&gt;&gt; libmkl_blacs_intelmpi_*lp64.a, libmkl_blacs_sgimpt_*lp64.a and
</span><br>
<span class="quotelev2">&gt;&gt; libmkl_blacs_openmpi_*lp64.a.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The corresponding libraries do not exist under your windows installation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You may want to port/compile BLACS from netlib yourselve, see here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://icl.cs.utk.edu/lapack-for-windows/VisualStudio_install.html">http://icl.cs.utk.edu/lapack-for-windows/VisualStudio_install.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope this helps?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Rainer
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  Dr.-Ing. Rainer Keller  <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
</span><br>
<span class="quotelev2">&gt;&gt;  HLRS                         Tel: ++49 (0)711-685 6 5858
</span><br>
<span class="quotelev2">&gt;&gt;  Nobelstrasse 19                 Fax: ++49 (0)711-685 6 5832
</span><br>
<span class="quotelev2">&gt;&gt;  70550 Stuttgart                    email: keller_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  Germany                             AIM/Skype:rusraink
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16212/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16213.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "Re: [OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>Previous message:</strong> <a href="16211.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>In reply to:</strong> <a href="16211.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
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
