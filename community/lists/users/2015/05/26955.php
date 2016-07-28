<?
$subject_val = "Re: [OMPI users] Openmpi compilation errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 12:40:38 2015" -->
<!-- isoreceived="20150527164038" -->
<!-- sent="Wed, 27 May 2015 10:40:36 -0600" -->
<!-- isosent="20150527164036" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi compilation errors" -->
<!-- id="5565F384.8060002_at_lanl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAOnd8MDKXSRVAOmw9rOkYvyz_tb3XtR+YiG0z5rgbqQaD6thRQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi compilation errors<br>
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-27 12:40:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26956.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Previous message:</strong> <a href="26954.php">Bruno Queiros: "[OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26954.php">Bruno Queiros: "[OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26957.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26957.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking at the config.log, I see this:
<br>
<p>pgi-cc-lin64: LICENSE MANAGER PROBLEM: No such feature exists.
<br>
Feature:       pgi-cc-lin64
<br>
<p>It looks like there is a problem with the PGI license. Does it work with 
<br>
a regular file (e.g., hello_world)? If it does, how do you get it to 
<br>
work (env variables, license file, etc.)?
<br>
<p>Thanks,
<br>
David
<br>
<p>On 05/27/2015 10:25 AM, Bruno Queiros wrote:
<br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to compile openmpi-1.8.5 with portland fortran 10.4 64bits 
</span><br>
<span class="quotelev1">&gt; on a CentOS7 64bits.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the output i get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=pgcc CXX=pgCC FC=pgf90 F77=pgf77 F90=pgf90 
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/openmpi-1.8.5_pgf90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; == Configuring Open MPI
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Startup tests
</span><br>
<span class="quotelev1">&gt; checking build system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; checking host system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; checking target system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; checking for gcc... pgcc
</span><br>
<span class="quotelev1">&gt; checking whether the C compiler works... no
</span><br>
<span class="quotelev1">&gt; configure: error: in `/root/TransferArea/openmpi-1.8.5':
</span><br>
<span class="quotelev1">&gt; configure: error: C compiler cannot create executables
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The config.log goes as an attachment
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26954.php">http://www.open-mpi.org/community/lists/users/2015/05/26954.php</a>
</span><br>
<p><pre>
-- 
David Shrader
HPC-3 High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26955/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26956.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Previous message:</strong> <a href="26954.php">Bruno Queiros: "[OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26954.php">Bruno Queiros: "[OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26957.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26957.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
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
