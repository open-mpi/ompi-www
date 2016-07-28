<?
$subject_val = "[OMPI users] Segmentation fault with fresh compilation of 1.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 12 06:17:07 2013" -->
<!-- isoreceived="20130912101707" -->
<!-- sent="Thu, 12 Sep 2013 11:17:07 +0100" -->
<!-- isosent="20130912101707" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault with fresh compilation of 1.7.2" -->
<!-- id="CAHCaCkKY5faaVuTE-oUMWfSEU4fHS=TyiCHmOpJ-0pPkC3zhJw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault with fresh compilation of 1.7.2<br>
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-12 06:17:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22647.php">Francesco Simula: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>Previous message:</strong> <a href="22645.php">Matthieu Brucher: "[OMPI users] Typo on the FAQ page"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22658.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22658.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I compiled OpenMPI on a RHEL6 box with LSF support, but when I run
<br>
sonthing, it crashes. Also orte-info crashes:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI mbrucher_at_[hidden] Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.7.2
<br>
&nbsp;&nbsp;Open RTE repo revision: r28673
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Jun 26, 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.7.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: r28673
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Jun 26, 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.7.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /xxx/mbrucher/openmpi
<br>
&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: xxx.xxx.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: mbrucher
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Thu Sep 12 10:22:06 BST 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: xxx.xxx.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: mbrucher
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Thu Sep 12 10:24:59 BST 2013
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: xxx.xxx.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;C compiler family name: GNU
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler version: 4.4.6
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
orterun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Symbol vis. support: yes
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: no (checkpoint thread: no)
<br>
[abgengcluster:45509] *** Process received signal ***
<br>
[abgengcluster:45509] Signal: Segmentation fault (11)
<br>
[abgengcluster:45509] Signal code: Address not mapped (1)
<br>
[abgengcluster:45509] Failing at address: 0xf8
<br>
[abgengcluster:45509] [ 0] /lib64/libpthread.so.0() [0x3ffc00f4a0]
<br>
[abgengcluster:45509] [ 1]
<br>
/xxx/mbrucher/openmpi/lib/libopen-pal.so.5(opal_libevent2019_event_priority_set+0x6f)
<br>
[0x2aae84a736ef]
<br>
[abgengcluster:45509] [ 2]
<br>
/xxx/mbrucher/openmpi/lib/libopen-rte.so.5(orte_iof_base_open+0x31c)
<br>
[0x2aae847edfbc]
<br>
[abgengcluster:45509] [ 3] orte-info(orte_info_open_components+0x71f) [0x406b8f]
<br>
[abgengcluster:45509] [ 4] orte-info(main+0x93d) [0x40450d]
<br>
[abgengcluster:45509] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd)
<br>
[0x3ffb81ecdd]
<br>
[abgengcluster:45509] [ 6] orte-info() [0x403b09]
<br>
[abgengcluster:45509] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
<p>Is there something that I missed?
<br>
<p>Cheers,
<br>
<p>Matthieu
<br>
<pre>
-- 
Information System Engineer, Ph.D.
Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22647.php">Francesco Simula: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>Previous message:</strong> <a href="22645.php">Matthieu Brucher: "[OMPI users] Typo on the FAQ page"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22658.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22658.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
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
