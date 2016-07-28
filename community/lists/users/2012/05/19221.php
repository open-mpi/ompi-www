<?
$subject_val = "Re: [OMPI users] problem in installation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  8 07:51:00 2012" -->
<!-- isoreceived="20120508115100" -->
<!-- sent="Tue, 8 May 2012 07:50:55 -0400" -->
<!-- isosent="20120508115055" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem in installation" -->
<!-- id="31C9410B-FDC4-45AF-8AE0-3D223A06F04A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANkG+wnHOo8aVHVDcXWKoAVDH78De5Yj5u6_7HcYuSgAbkjnaA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem in installation<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-08 07:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19222.php">Rolf vandeVaart: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<li><strong>Previous message:</strong> <a href="19220.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
<li><strong>In reply to:</strong> <a href="19220.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 8, 2012, at 7:39 AM, ahmed lasheen wrote:
<br>
<p><span class="quotelev1">&gt; I am using pgi10.0.0 and it works with nonMPI application well.
</span><br>
<p>I think if you try complex non-MPI applications, you may run into issues.  I say this based on seeing lines like this in your logs:
<br>
<p>-----
<br>
PGC-W-0221-Redefinition of symbol CPU_SET (/opt/pgi/linux86-64/10.0/include/sched.h: 20)
<br>
PGC-W-0221-Redefinition of symbol PF_INET6 (/usr/include/bits/socket.h: 86)
<br>
PGC-S-0040-Illegal use of symbol, __INT_LEAST8_TYPE__ (/usr/lib/gcc/x86_64-redhat-linux/4.6.3/include/stdint-gcc.h: 60)
<br>
PGC-W-0156-Type not specified, 'int' assumed (/usr/lib/gcc/x86_64-redhat-linux/4.6.3/include/stdint-gcc.h: 60)
<br>
-----
<br>
<p>These are all errors from the compiler itself -- the headers that came with the PGI compiler seem to be conflicting with your system-based headers.
<br>
<p><span class="quotelev1">&gt; I will upgrade pgi and I will tell you the result.
</span><br>
<p>Good luck.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19222.php">Rolf vandeVaart: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<li><strong>Previous message:</strong> <a href="19220.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
<li><strong>In reply to:</strong> <a href="19220.php">ahmed lasheen: "Re: [OMPI users] problem in installation"</a>
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
