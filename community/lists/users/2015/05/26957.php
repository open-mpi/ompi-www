<?
$subject_val = "Re: [OMPI users] Openmpi compilation errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 13:01:31 2015" -->
<!-- isoreceived="20150527170131" -->
<!-- sent="Wed, 27 May 2015 17:01:29 +0000" -->
<!-- isosent="20150527170129" -->
<!-- name="Bruno Queiros" -->
<!-- email="bqueiros_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi compilation errors" -->
<!-- id="CAOnd8MBXDkxqGUwcENoWaE3RYa0fcCNK3D+aVUXKzJ8CYXtSEA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5565F384.8060002_at_lanl.gov" -->
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
<strong>From:</strong> Bruno Queiros (<em>bqueiros_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-27 13:01:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26958.php">David Shrader: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26956.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>In reply to:</strong> <a href="26955.php">David Shrader: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26958.php">David Shrader: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26958.php">David Shrader: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David
<br>
<p>Do you mean if Portland Fortran compiler works? Like pgf90 hello.f ?
<br>
<p>Bruno
<br>
<p><p>Em qua, 27 de mai de 2015 &#195;&#160;s 17:40, David Shrader &lt;dshrader_at_[hidden]&gt;
<br>
escreveu:
<br>
<p><span class="quotelev1">&gt;  Looking at the config.log, I see this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pgi-cc-lin64: LICENSE MANAGER PROBLEM: No such feature exists.
</span><br>
<span class="quotelev1">&gt; Feature:       pgi-cc-lin64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like there is a problem with the PGI license. Does it work with a
</span><br>
<span class="quotelev1">&gt; regular file (e.g., hello_world)? If it does, how do you get it to work
</span><br>
<span class="quotelev1">&gt; (env variables, license file, etc.)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/27/2015 10:25 AM, Bruno Queiros wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I'm trying to compile openmpi-1.8.5 with portland fortran 10.4 64bits on
</span><br>
<span class="quotelev1">&gt; a CentOS7 64bits.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This is the output i get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure CC=pgcc CXX=pgCC FC=pgf90 F77=pgf77 F90=pgf90
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/openmpi-1.8.5_pgf90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; == Configuring Open MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  *** Startup tests
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
<span class="quotelev1">&gt;  The config.log goes as an attachment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26954.php">http://www.open-mpi.org/community/lists/users/2015/05/26954.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Shrader
</span><br>
<span class="quotelev1">&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev1">&gt; Los Alamos National Lab
</span><br>
<span class="quotelev1">&gt; Email: dshrader &lt;at&gt; lanl.gov
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26955.php">http://www.open-mpi.org/community/lists/users/2015/05/26955.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26957/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26958.php">David Shrader: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26956.php">Heerdt, Lanze M.: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>In reply to:</strong> <a href="26955.php">David Shrader: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26958.php">David Shrader: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26958.php">David Shrader: "Re: [OMPI users] Openmpi compilation errors"</a>
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
