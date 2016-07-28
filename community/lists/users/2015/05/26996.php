<?
$subject_val = "Re: [OMPI users] mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 30 02:07:55 2015" -->
<!-- isoreceived="20150530060755" -->
<!-- sent="Sat, 30 May 2015 08:07:18 +0200" -->
<!-- isosent="20150530060718" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun" -->
<!-- id="55695396.7060601_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAPsJ1NY==VT1OnpYEfNBPAhToZ=HMKhtOqNxEcpTFt98gmiT-A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-30 02:07:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26997.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How can I discover valid values for MCA parameters?"</a>
<li><strong>Previous message:</strong> <a href="26995.php">Tim Prince: "Re: [OMPI users] mpirun"</a>
<li><strong>In reply to:</strong> <a href="26990.php">Walt Brainerd: "Re: [OMPI users] mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27001.php">Ralph Castain: "Re: [OMPI users] mpirun"</a>
<li><strong>Reply:</strong> <a href="27001.php">Ralph Castain: "Re: [OMPI users] mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/29/2015 9:53 PM, Walt Brainerd wrote:
<br>
<span class="quotelev1">&gt; It behaved this way with the Cygwin version (very recent update)
</span><br>
<span class="quotelev1">&gt; and with 1.8.5 that I built from source.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 29, 2015 at 12:35 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I assume you mean on cygwin? Or is this an older version that
</span><br>
<span class="quotelev1">&gt;     supported native Windows?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;      &gt; On May 29, 2015, at 12:34 PM, Walt Brainerd
</span><br>
<span class="quotelev1">&gt;     &lt;walt.brainerd_at_[hidden] &lt;mailto:walt.brainerd_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; On Windows, mpirun appears to take about 5 seconds
</span><br>
<span class="quotelev2">&gt;      &gt; to start. I can't try it on Linux. Intel takes no time to
</span><br>
<span class="quotelev2">&gt;      &gt; start executing its version.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Is this expected?
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<p>I would say yes
<br>
<p>$ time mpirun -n 2 ./hello_c.exe
<br>
Hello, world, I am 0 of 2, (Open MPI v1.8.5, package: Open MPI .., 
<br>
ident: 1.8.5, repo rev: v1.8.4-333-g039fb11, May 05, 2015, 127)
<br>
Hello, world, I am 1 of 2, (Open MPI v1.8.5, package: Open MPI .., 
<br>
ident: 1.8.5, repo rev: v1.8.4-333-g039fb11, May 05, 2015, 127)
<br>
<p>real    0m2.636s
<br>
user    0m1.012s
<br>
sys     0m2.119s
<br>
<p>I presume is wasting some time enumerating and rejecting the
<br>
available interfaces.
<br>
On windows they have unusual names
<br>
<p>$ ./interface-64.exe
<br>
Interfaces (count = 10):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{EC2ABB5C-42A8-431D-A133-8F4BE0F309AF}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{9213DBB8-80C6-4316-AA7A-EBF8AD7661E1}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{8D78D8D9-CFF0-4C4A-AFC3-72CB0E275588}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{2449A164-BE1A-4393-8168-2A3EDC9AA6F0}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{97191531-3960-4C35-8D79-1851EF7EE9E0}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{6F8DABED-A5FE-4E8D-8BA1-02763080D9DC}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{2A3E9C71-E553-44D0-ABE3-327EB89C3863}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{9F4F7FD2-5E44-4796-ABE0-0785CF76C11E}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{C4069E93-6662-44BF-B363-5175A04681D5}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{846EE342-7039-11DE-9D20-806E6F6E6963}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26997.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How can I discover valid values for MCA parameters?"</a>
<li><strong>Previous message:</strong> <a href="26995.php">Tim Prince: "Re: [OMPI users] mpirun"</a>
<li><strong>In reply to:</strong> <a href="26990.php">Walt Brainerd: "Re: [OMPI users] mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27001.php">Ralph Castain: "Re: [OMPI users] mpirun"</a>
<li><strong>Reply:</strong> <a href="27001.php">Ralph Castain: "Re: [OMPI users] mpirun"</a>
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
