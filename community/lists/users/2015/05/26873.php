<?
$subject_val = "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 08:34:36 2015" -->
<!-- isoreceived="20150515123436" -->
<!-- sent="Fri, 15 May 2015 21:34:34 +0900" -->
<!-- isosent="20150515123434" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons" -->
<!-- id="CAAkFZ5s4rumcYHWc7oEf-3H7xfvPTDthhzFvTVmCO1Wvt0UHwg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201505151157.t4FBvDW2029722_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-15 08:34:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] About POSIX APIs used on openMPI"</a>
<li><strong>Previous message:</strong> <a href="26872.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<li><strong>In reply to:</strong> <a href="26871.php">Siegmar Gross: "[OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26876.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p>can you run
<br>
LD_LIBRARY_PATH= LD_LIBRARY_PATH64= /usr/bin/ssh
<br>
on all your boxes ?
<br>
<p>the root cause could be you try to run ssh on box A with the env of box B
<br>
<p>can you also run with the -output-tag (or -tag-output) so we can figure out
<br>
on which box ssh is failing
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, May 15, 2015, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I successfully installed openmpi-1.8.5 on my machines (Solaris 10
</span><br>
<span class="quotelev1">&gt; Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with
</span><br>
<span class="quotelev1">&gt; gcc-4.9.2 and Sun C 5.13. I get the same error for both compilers,
</span><br>
<span class="quotelev1">&gt; if I use the following command and no errors if I change the order
</span><br>
<span class="quotelev1">&gt; of the first two machines. I also get no errors if I use
</span><br>
<span class="quotelev1">&gt; openmpi-dev-1708-g8497a6a for an arbitrary order of the machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr hello_1 109 which mpicc
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.8.5_64_cc/bin/mpicc
</span><br>
<span class="quotelev1">&gt; tyr hello_1 110 mpiexec -np 5 -host sunpc1,linpc1,tyr,rs0 hello_1_mpi
</span><br>
<span class="quotelev1">&gt; ld.so.1: ssh: fatal: relocation error: file /usr/bin/ssh: symbol
</span><br>
<span class="quotelev1">&gt; SUNWcry_installed: referenced symbol not found
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * the inability to write startup files into /tmp
</span><br>
<span class="quotelev1">&gt; (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;   Please check with your sys admin to determine the correct location to
</span><br>
<span class="quotelev1">&gt; use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev1">&gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;   and network routing requirements).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now the program hangs and &quot;top&quot; shows that &quot;orterun&quot; is very busy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    PID USERNAME THR PR NCE  SIZE   RES STATE   TIME FLTS    CPU COMMAND
</span><br>
<span class="quotelev1">&gt;  29550 fd1026     2  0   0 14.5M 8576K cpu01   1:06    0 47.72% orterun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr hello_1 116 mpiexec -np 5 -host linpc1,sunpc1,tyr,rs0 hello_1_mpi
</span><br>
<span class="quotelev1">&gt; Process 2 of 5 running on sunpc1
</span><br>
<span class="quotelev1">&gt; Process 4 of 5 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 3 of 5 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 1 of 5 running on linpc1
</span><br>
<span class="quotelev1">&gt; Process 0 of 5 running on linpc1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything works fine with openmpi-dev-1708-g8497a6a.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr hello_1 120 which mpicc
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9.0_64_gcc/bin/mpicc
</span><br>
<span class="quotelev1">&gt; tyr hello_1 121 mpiexec -np 5 -host sunpc1,linpc1,tyr,rs0 hello_1_mpi
</span><br>
<span class="quotelev1">&gt; Process 2 of 5 running on linpc1
</span><br>
<span class="quotelev1">&gt; Process 0 of 5 running on sunpc1
</span><br>
<span class="quotelev1">&gt; Process 1 of 5 running on sunpc1
</span><br>
<span class="quotelev1">&gt; Process 4 of 5 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 3 of 5 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas what's going wrong? I would be grateful if somebody can
</span><br>
<span class="quotelev1">&gt; fix the problem. Thank you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26871.php">http://www.open-mpi.org/community/lists/users/2015/05/26871.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26873/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] About POSIX APIs used on openMPI"</a>
<li><strong>Previous message:</strong> <a href="26872.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.8.5: Java UnsupportedClassVersionError for Solaris"</a>
<li><strong>In reply to:</strong> <a href="26871.php">Siegmar Gross: "[OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26876.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
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
