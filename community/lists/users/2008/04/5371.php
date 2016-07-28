<?
$subject_val = "[OMPI users] Troubles with MPI-IO Test and Torque/PVFS";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 15:29:47 2008" -->
<!-- isoreceived="20080410192947" -->
<!-- sent="Thu, 10 Apr 2008 16:29:38 -0300" -->
<!-- isosent="20080410192938" -->
<!-- name="Davi Vercillo C. Garcia" -->
<!-- email="davivercillo_at_[hidden]" -->
<!-- subject="[OMPI users] Troubles with MPI-IO Test and Torque/PVFS" -->
<!-- id="dd4eed670804101229o10b35904ge3bba17a1ac938f8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Troubles with MPI-IO Test and Torque/PVFS<br>
<strong>From:</strong> Davi Vercillo C. Garcia (<em>davivercillo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-10 15:29:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5372.php">clarkmpi_at_[hidden]: "[OMPI users] i386 with x64"</a>
<li><strong>Previous message:</strong> <a href="5370.php">Danesh Daroui: "Re: [OMPI users] submitted job stops"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5386.php">Jeff Squyres: "Re: [OMPI users] Troubles with MPI-IO Test and Torque/PVFS"</a>
<li><strong>Reply:</strong> <a href="5386.php">Jeff Squyres: "Re: [OMPI users] Troubles with MPI-IO Test and Torque/PVFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have a Cluster with Torque and PVFS. I'm trying to test my
<br>
environment with MPI-IO Test but some segfault are occurring.
<br>
Does anyone know what is happening ? The error output is below:
<br>
<p>Rank 1 Host campogrande03.dcc.ufrj.br WARNING ERROR 1207853304: 1 bad
<br>
bytes at file offset 0.  Expected (null), received (null)
<br>
Rank 2 Host campogrande02.dcc.ufrj.br WARNING ERROR 1207853304: 1 bad
<br>
bytes at file offset 0.  Expected (null), received (null)
<br>
[campogrande01:10646] *** Process received signal ***
<br>
Rank 0 Host campogrande04.dcc.ufrj.br WARNING ERROR 1207853304: 1 bad
<br>
bytes at file offset 0.  Expected (null), received (null)
<br>
Rank 0 Host campogrande04.dcc.ufrj.br WARNING ERROR 1207853304: 65537
<br>
bad bytes at file offset 0.  Expected (null), received (null)
<br>
[campogrande04:05192] *** Process received signal ***
<br>
[campogrande04:05192] Signal: Segmentation fault (11)
<br>
[campogrande04:05192] Signal code: Address not mapped (1)
<br>
[campogrande04:05192] Failing at address: 0x10000
<br>
Rank 1 Host campogrande03.dcc.ufrj.br WARNING ERROR 1207853304: 65537
<br>
bad bytes at file offset 0.  Expected (null), received (null)
<br>
[campogrande03:05377] *** Process received signal ***
<br>
[campogrande03:05377] Signal: Segmentation fault (11)
<br>
[campogrande03:05377] Signal code: Address not mapped (1)
<br>
[campogrande03:05377] Failing at address: 0x10000
<br>
[campogrande03:05377] [ 0] [0xffffe440]
<br>
[campogrande03:05377] [ 1]
<br>
/lib/tls/i686/cmov/libc.so.6(vsnprintf+0xb4) [0xb7d5fef4]
<br>
[campogrande03:05377] [ 2] mpiIO_test(make_error_messages+0xcf) [0x80502e4]
<br>
[campogrande03:05377] [ 3] mpiIO_test(warning_msg+0x8c) [0x8050569]
<br>
[campogrande03:05377] [ 4] mpiIO_test(report_errs+0xe2) [0x804d413]
<br>
[campogrande03:05377] [ 5] mpiIO_test(read_write_file+0x594) [0x804d9c2]
<br>
[campogrande03:05377] [ 6] mpiIO_test(main+0x1d0) [0x804aa14]
<br>
[campogrande03:05377] [ 7]
<br>
/lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe0) [0xb7d15050]
<br>
[campogrande03:05377] [ 8] mpiIO_test [0x804a7e1]
<br>
[campogrande03:05377] *** End of error message ***
<br>
Rank 2 Host campogrande02.dcc.ufrj.br WARNING ERROR 1207853304: 65537
<br>
bad bytes at file offset 0.  Expected (null), received (null)
<br>
[campogrande02:05187] *** Process received signal ***
<br>
[campogrande02:05187] Signal: Segmentation fault (11)
<br>
[campogrande02:05187] Signal code: Address not mapped (1)
<br>
[campogrande02:05187] Failing at address: 0x10000
<br>
[campogrande01:10646] Signal: Segmentation fault (11)
<br>
[campogrande01:10646] Signal code: Address not mapped (1)
<br>
[campogrande01:10646] Failing at address: 0x1a0000
<br>
[campogrande02:05187] [ 0] [0xffffe440]
<br>
[campogrande02:05187] [ 1]
<br>
/lib/tls/i686/cmov/libc.so.6(vsnprintf+0xb4) [0xb7d5fef4]
<br>
[campogrande02:05187] [ 2] mpiIO_test(make_error_messages+0xcf) [0x80502e4]
<br>
[campogrande02:05187] [ 3] mpiIO_test(warning_msg+0x8c) [0x8050569]
<br>
[campogrande02:05187] [ 4] mpiIO_test(report_errs+0xe2) [0x804d413]
<br>
[campogrande02:05187] [ 5] mpiIO_test(read_write_file+0x594) [0x804d9c2]
<br>
[campogrande02:05187] [ 6] mpiIO_test(main+0x1d0) [0x804aa14]
<br>
[campogrande02:05187] [ 7]
<br>
/lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe0) [0xb7d15050]
<br>
[campogrande02:05187] [ 8] mpiIO_test [0x804a7e1]
<br>
[campogrande02:05187] *** End of error message ***
<br>
[campogrande04:05192] [ 0] [0xffffe440]
<br>
[campogrande04:05192] [ 1]
<br>
/lib/tls/i686/cmov/libc.so.6(vsnprintf+0xb4) [0xb7d5fef4]
<br>
[campogrande04:05192] [ 2] mpiIO_test(make_error_messages+0xcf) [0x80502e4]
<br>
[campogrande04:05192] [ 3] mpiIO_test(warning_msg+0x8c) [0x8050569]
<br>
[campogrande04:05192] [ 4] mpiIO_test(report_errs+0xe2) [0x804d413]
<br>
[campogrande04:05192] [ 5] mpiIO_test(read_write_file+0x594) [0x804d9c2]
<br>
[campogrande04:05192] [ 6] mpiIO_test(main+0x1d0) [0x804aa14]
<br>
[campogrande04:05192] [ 7]
<br>
/lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe0) [0xb7d15050]
<br>
[campogrande04:05192] [ 8] mpiIO_test [0x804a7e1]
<br>
[campogrande04:05192] *** End of error message ***
<br>
[campogrande01:10646] [ 0] [0xffffe440]
<br>
[campogrande01:10646] [ 1]
<br>
/lib/tls/i686/cmov/libc.so.6(vsnprintf+0xb4) [0xb7d5fef4]
<br>
[campogrande01:10646] [ 2] mpiIO_test(make_error_messages+0xcf) [0x80502e4]
<br>
[campogrande01:10646] [ 3] mpiIO_test(warning_msg+0x8c) [0x8050569]
<br>
[campogrande01:10646] [ 4] mpiIO_test(report_errs+0xe2) [0x804d413]
<br>
[campogrande01:10646] [ 5] mpiIO_test(read_write_file+0x594) [0x804d9c2]
<br>
[campogrande01:10646] [ 6] mpiIO_test(main+0x1d0) [0x804aa14]
<br>
[campogrande01:10646] [ 7]
<br>
/lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe0) [0xb7d15050]
<br>
[campogrande01:10646] [ 8] mpiIO_test [0x804a7e1]
<br>
[campogrande01:10646] *** End of error message ***
<br>
mpiexec noticed that job rank 0 with PID 5192 on node campogrande04
<br>
exited on signal 11 (Segmentation fault).
<br>
<p><pre>
-- 
Davi Vercillo Carneiro Garcia
Universidade Federal do Rio de Janeiro
Departamento de Ci&#234;ncia da Computa&#231;&#227;o
DCC-IM/UFRJ - <a href="http://www.dcc.ufrj.br">http://www.dcc.ufrj.br</a>
&quot;Good things come to those who... wait.&quot; - Debian Project
&quot;A computer is like air conditioning: it becomes useless when you open
windows.&quot; - Linus Torvalds
&quot;H&#225; duas coisas infinitas, o universo e a burrice humana. E eu estou
em d&#250;vida quanto o primeiro.&quot; - Albert Einstein
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5372.php">clarkmpi_at_[hidden]: "[OMPI users] i386 with x64"</a>
<li><strong>Previous message:</strong> <a href="5370.php">Danesh Daroui: "Re: [OMPI users] submitted job stops"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5386.php">Jeff Squyres: "Re: [OMPI users] Troubles with MPI-IO Test and Torque/PVFS"</a>
<li><strong>Reply:</strong> <a href="5386.php">Jeff Squyres: "Re: [OMPI users] Troubles with MPI-IO Test and Torque/PVFS"</a>
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
