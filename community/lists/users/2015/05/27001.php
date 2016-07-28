<?
$subject_val = "Re: [OMPI users] mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 30 09:24:09 2015" -->
<!-- isoreceived="20150530132409" -->
<!-- sent="Sat, 30 May 2015 06:24:04 -0700" -->
<!-- isosent="20150530132404" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun" -->
<!-- id="DA2CD840-248C-41A6-AF95-944174DD62F5_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55695396.7060601_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-30 09:24:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27002.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="27000.php">Alexander Droste: "[OMPI users] MPI-Checker - Static Analyzer"</a>
<li><strong>In reply to:</strong> <a href="26996.php">Marco Atzeri: "Re: [OMPI users] mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26991.php">Walt Brainerd: "Re: [OMPI users] mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: the master might be much faster, if the interfaces are the issue, as you could then add &#226;&#128;&#156;&#226;&#128;&#148;mca oob ^tcp&#226;&#128;&#157; to the cmd line and eliminate some of that selection time.
<br>
<p><p><span class="quotelev1">&gt; On May 29, 2015, at 11:07 PM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5/29/2015 9:53 PM, Walt Brainerd wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It behaved this way with the Cygwin version (very recent update)
</span><br>
<span class="quotelev2">&gt;&gt; and with 1.8.5 that I built from source.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, May 29, 2015 at 12:35 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    I assume you mean on cygwin? Or is this an older version that
</span><br>
<span class="quotelev2">&gt;&gt;    supported native Windows?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; On May 29, 2015, at 12:34 PM, Walt Brainerd
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;walt.brainerd_at_[hidden] &lt;mailto:walt.brainerd_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; On Windows, mpirun appears to take about 5 seconds
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; to start. I can't try it on Linux. Intel takes no time to
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; start executing its version.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Is this expected?
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would say yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ time mpirun -n 2 ./hello_c.exe
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2, (Open MPI v1.8.5, package: Open MPI .., ident: 1.8.5, repo rev: v1.8.4-333-g039fb11, May 05, 2015, 127)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2, (Open MPI v1.8.5, package: Open MPI .., ident: 1.8.5, repo rev: v1.8.4-333-g039fb11, May 05, 2015, 127)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; real    0m2.636s
</span><br>
<span class="quotelev1">&gt; user    0m1.012s
</span><br>
<span class="quotelev1">&gt; sys     0m2.119s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I presume is wasting some time enumerating and rejecting the
</span><br>
<span class="quotelev1">&gt; available interfaces.
</span><br>
<span class="quotelev1">&gt; On windows they have unusual names
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./interface-64.exe
</span><br>
<span class="quotelev1">&gt; Interfaces (count = 10):
</span><br>
<span class="quotelev1">&gt;        {EC2ABB5C-42A8-431D-A133-8F4BE0F309AF}
</span><br>
<span class="quotelev1">&gt;        {9213DBB8-80C6-4316-AA7A-EBF8AD7661E1}
</span><br>
<span class="quotelev1">&gt;        {8D78D8D9-CFF0-4C4A-AFC3-72CB0E275588}
</span><br>
<span class="quotelev1">&gt;        {2449A164-BE1A-4393-8168-2A3EDC9AA6F0}
</span><br>
<span class="quotelev1">&gt;        {97191531-3960-4C35-8D79-1851EF7EE9E0}
</span><br>
<span class="quotelev1">&gt;        {6F8DABED-A5FE-4E8D-8BA1-02763080D9DC}
</span><br>
<span class="quotelev1">&gt;        {2A3E9C71-E553-44D0-ABE3-327EB89C3863}
</span><br>
<span class="quotelev1">&gt;        {9F4F7FD2-5E44-4796-ABE0-0785CF76C11E}
</span><br>
<span class="quotelev1">&gt;        {C4069E93-6662-44BF-B363-5175A04681D5}
</span><br>
<span class="quotelev1">&gt;        {846EE342-7039-11DE-9D20-806E6F6E6963}
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26996.php">http://www.open-mpi.org/community/lists/users/2015/05/26996.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27002.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="27000.php">Alexander Droste: "[OMPI users] MPI-Checker - Static Analyzer"</a>
<li><strong>In reply to:</strong> <a href="26996.php">Marco Atzeri: "Re: [OMPI users] mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26991.php">Walt Brainerd: "Re: [OMPI users] mpirun"</a>
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
