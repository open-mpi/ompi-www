<?
$subject_val = "Re: [OMPI users] Help: Program Terminated";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 00:28:35 2008" -->
<!-- isoreceived="20080530042835" -->
<!-- sent="Fri, 30 May 2008 12:28:26 +0800" -->
<!-- isosent="20080530042826" -->
<!-- name="Lee Amy" -->
<!-- email="openlinuxsource_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: Program Terminated" -->
<!-- id="289665360805292128k1d8fb0abq9bcad2ea19b19f78_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080529145908.GA1980_at_hex.inf-ra.uni-jena.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: Program Terminated<br>
<strong>From:</strong> Lee Amy (<em>openlinuxsource_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-30 00:28:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5764.php">Leonardo Fialho: "Re: [OMPI users] Process size"</a>
<li><strong>Previous message:</strong> <a href="5762.php">Bruno Coutinho: "[OMPI users] specifying hosts in mpi_spawn()"</a>
<li><strong>In reply to:</strong> <a href="5750.php">Andreas Sch&#228;fer: "Re: [OMPI users] Help: Program Terminated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5765.php">Andreas Schäfer: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>Reply:</strong> <a href="5765.php">Andreas Schäfer: "Re: [OMPI users] Help: Program Terminated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2008/5/29 Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi Amy,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 16:10 Thu 29 May     , Lee Amy wrote:
</span><br>
<span class="quotelev2">&gt; &gt; MicroTar parallel version was terminated after 463 minutes with following
</span><br>
<span class="quotelev2">&gt; &gt; error messages:
</span><br>
<span class="quotelev2">&gt; &gt; ================================================
</span><br>
<span class="quotelev2">&gt; &gt; [gnode5:31982] [ 0] /lib64/tls/libpthread.so.0 [0x345460c430]
</span><br>
<span class="quotelev2">&gt; &gt; [gnode5:31982] [ 1] microtar(LocateNuclei+0x137) [0x403037]
</span><br>
<span class="quotelev2">&gt; &gt; [gnode5:31982] [ 2] microtar(main+0x4ac) [0x40431c]
</span><br>
<span class="quotelev2">&gt; &gt; [gnode5:31982] [ 3] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev2">&gt; &gt; [0x3453b1c3fb]
</span><br>
<span class="quotelev2">&gt; &gt; [gnode5:31982] [ 4] microtar [0x402e6a]
</span><br>
<span class="quotelev2">&gt; &gt; [gnode5:31982] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that job rank 0 with PID 18710 on node gnode1 exited on
</span><br>
<span class="quotelev2">&gt; &gt; signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt; &gt; 19 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt; &gt; ================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if I'm not mistaken, signal 15 is SIGTERM, which is sent to processes
</span><br>
<span class="quotelev1">&gt; to terminate them. To me this sounds like your application is
</span><br>
<span class="quotelev1">&gt; terminated from an external instance, maybe because your job exceeded
</span><br>
<span class="quotelev1">&gt; the wall clock time limit of your scheduling system. Does the job
</span><br>
<span class="quotelev1">&gt; repeatedly fail at the same time? Do shorter jobs finish successfully?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just my 0.02 Euros (-8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev1">&gt; I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (\___/)
</span><br>
<span class="quotelev1">&gt; (+'.'+)
</span><br>
<span class="quotelev1">&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev1">&gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev1">&gt; signature to help him gain world domination!
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
<span class="quotelev1">&gt;
</span><br>
Thank you very much. If I do a shorter job it seems run well. And the job
<br>
dosen't repeatedly fail at the same time, but it will fail at this error
<br>
messages. Anyway, I'm not using a scheduling system. So any suggestions?
<br>
<p>Thank you again.
<br>
<p>Regards,
<br>
<p>Amy
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5763/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5764.php">Leonardo Fialho: "Re: [OMPI users] Process size"</a>
<li><strong>Previous message:</strong> <a href="5762.php">Bruno Coutinho: "[OMPI users] specifying hosts in mpi_spawn()"</a>
<li><strong>In reply to:</strong> <a href="5750.php">Andreas Sch&#228;fer: "Re: [OMPI users] Help: Program Terminated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5765.php">Andreas Schäfer: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>Reply:</strong> <a href="5765.php">Andreas Schäfer: "Re: [OMPI users] Help: Program Terminated"</a>
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
