<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 25 11:16:31 2007" -->
<!-- isoreceived="20070625151631" -->
<!-- sent="Mon, 25 Jun 2007 17:14:22 +0200" -->
<!-- isosent="20070625151422" -->
<!-- name="Markus Daene" -->
<!-- email="markus.daene_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="200706251714.22514.markus.daene_at_physik.uni-halle.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="467F690B.2080200_at_gmx.net" -->
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
<strong>From:</strong> Markus Daene (<em>markus.daene_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-25 11:14:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1762.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1760.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1754.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1743.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; #!/bin/csh -f
</span><br>
<span class="quotelev1">&gt; #$ -N MPI_Job
</span><br>
<span class="quotelev1">&gt; #$ -pe mpi 4
</span><br>
<span class="quotelev1">&gt; hostname &amp;&amp; ulimit -a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ATM I'm quite confused: cause I want to use the c-shell, but ulimit is
</span><br>
<span class="quotelev1">&gt; just for bash. The c-shell uses limit... hmm.. and SGE uses obviously
</span><br>
<span class="quotelev1">&gt; bash, instead of my request for csh in the first line. But if I just use
</span><br>
<span class="quotelev1">&gt; #!/bin/bash I get the same limits:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -sh-3.00$ cat MPI_Job.o112116
</span><br>
<span class="quotelev1">&gt; node02
</span><br>
<span class="quotelev1">&gt; core file size          (blocks, -c) unlimited
</span><br>
<span class="quotelev1">&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev1">&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev1">&gt; pending signals                 (-i) 1024
</span><br>
<span class="quotelev1">&gt; max locked memory       (kbytes, -l) 32
</span><br>
<span class="quotelev1">&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev1">&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev1">&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev1">&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev1">&gt; stack size              (kbytes, -s) unlimited
</span><br>
<span class="quotelev1">&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev1">&gt; max user processes              (-u) 139264
</span><br>
<span class="quotelev1">&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev1">&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>just one remark:
<br>
for SGE you should specify the shell in you script like
<br>
#$ -S /bin/csh -f
<br>
not with #!.....
<br>
<p>Markus
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1762.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1760.php">Pak Lui: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1754.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1743.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
