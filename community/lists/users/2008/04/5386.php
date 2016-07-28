<?
$subject_val = "Re: [OMPI users] Troubles with MPI-IO Test and Torque/PVFS";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 13 08:27:22 2008" -->
<!-- isoreceived="20080413122722" -->
<!-- sent="Sun, 13 Apr 2008 08:27:11 -0400" -->
<!-- isosent="20080413122711" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Troubles with MPI-IO Test and Torque/PVFS" -->
<!-- id="3C248ABC-B770-4326-98CA-177D6B4D1FFF_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="dd4eed670804101229o10b35904ge3bba17a1ac938f8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Troubles with MPI-IO Test and Torque/PVFS<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-13 08:27:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5387.php">Åke Sandgren: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<li><strong>Previous message:</strong> <a href="5385.php">Jeff Squyres: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>In reply to:</strong> <a href="5371.php">Davi Vercillo C. Garcia: "[OMPI users] Troubles with MPI-IO Test and Torque/PVFS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like you're seg faulting when calling some flavor printf  
<br>
(perhaps vsnprintf?) in the make_error_messages() function.
<br>
<p>You might want to double check the read_write_file() function to see  
<br>
exactly what kind of error it is encountering such that it is calling  
<br>
report_errs().
<br>
<p><p>On Apr 10, 2008, at 3:29 PM, Davi Vercillo C. Garcia wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a Cluster with Torque and PVFS. I'm trying to test my
</span><br>
<span class="quotelev1">&gt; environment with MPI-IO Test but some segfault are occurring.
</span><br>
<span class="quotelev1">&gt; Does anyone know what is happening ? The error output is below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rank 1 Host campogrande03.dcc.ufrj.br WARNING ERROR 1207853304: 1 bad
</span><br>
<span class="quotelev1">&gt; bytes at file offset 0.  Expected (null), received (null)
</span><br>
<span class="quotelev1">&gt; Rank 2 Host campogrande02.dcc.ufrj.br WARNING ERROR 1207853304: 1 bad
</span><br>
<span class="quotelev1">&gt; bytes at file offset 0.  Expected (null), received (null)
</span><br>
<span class="quotelev1">&gt; [campogrande01:10646] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; Rank 0 Host campogrande04.dcc.ufrj.br WARNING ERROR 1207853304: 1 bad
</span><br>
<span class="quotelev1">&gt; bytes at file offset 0.  Expected (null), received (null)
</span><br>
<span class="quotelev1">&gt; Rank 0 Host campogrande04.dcc.ufrj.br WARNING ERROR 1207853304: 65537
</span><br>
<span class="quotelev1">&gt; bad bytes at file offset 0.  Expected (null), received (null)
</span><br>
<span class="quotelev1">&gt; [campogrande04:05192] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [campogrande04:05192] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [campogrande04:05192] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [campogrande04:05192] Failing at address: 0x10000
</span><br>
<span class="quotelev1">&gt; Rank 1 Host campogrande03.dcc.ufrj.br WARNING ERROR 1207853304: 65537
</span><br>
<span class="quotelev1">&gt; bad bytes at file offset 0.  Expected (null), received (null)
</span><br>
<span class="quotelev1">&gt; [campogrande03:05377] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [campogrande03:05377] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [campogrande03:05377] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [campogrande03:05377] Failing at address: 0x10000
</span><br>
<span class="quotelev1">&gt; [campogrande03:05377] [ 0] [0xffffe440]
</span><br>
<span class="quotelev1">&gt; [campogrande03:05377] [ 1]
</span><br>
<span class="quotelev1">&gt; /lib/tls/i686/cmov/libc.so.6(vsnprintf+0xb4) [0xb7d5fef4]
</span><br>
<span class="quotelev1">&gt; [campogrande03:05377] [ 2] mpiIO_test(make_error_messages+0xcf)  
</span><br>
<span class="quotelev1">&gt; [0x80502e4]
</span><br>
<span class="quotelev1">&gt; [campogrande03:05377] [ 3] mpiIO_test(warning_msg+0x8c) [0x8050569]
</span><br>
<span class="quotelev1">&gt; [campogrande03:05377] [ 4] mpiIO_test(report_errs+0xe2) [0x804d413]
</span><br>
<span class="quotelev1">&gt; [campogrande03:05377] [ 5] mpiIO_test(read_write_file+0x594)  
</span><br>
<span class="quotelev1">&gt; [0x804d9c2]
</span><br>
<span class="quotelev1">&gt; [campogrande03:05377] [ 6] mpiIO_test(main+0x1d0) [0x804aa14]
</span><br>
<span class="quotelev1">&gt; [campogrande03:05377] [ 7]
</span><br>
<span class="quotelev1">&gt; /lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe0) [0xb7d15050]
</span><br>
<span class="quotelev1">&gt; [campogrande03:05377] [ 8] mpiIO_test [0x804a7e1]
</span><br>
<span class="quotelev1">&gt; [campogrande03:05377] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Rank 2 Host campogrande02.dcc.ufrj.br WARNING ERROR 1207853304: 65537
</span><br>
<span class="quotelev1">&gt; bad bytes at file offset 0.  Expected (null), received (null)
</span><br>
<span class="quotelev1">&gt; [campogrande02:05187] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [campogrande02:05187] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [campogrande02:05187] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [campogrande02:05187] Failing at address: 0x10000
</span><br>
<span class="quotelev1">&gt; [campogrande01:10646] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [campogrande01:10646] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [campogrande01:10646] Failing at address: 0x1a0000
</span><br>
<span class="quotelev1">&gt; [campogrande02:05187] [ 0] [0xffffe440]
</span><br>
<span class="quotelev1">&gt; [campogrande02:05187] [ 1]
</span><br>
<span class="quotelev1">&gt; /lib/tls/i686/cmov/libc.so.6(vsnprintf+0xb4) [0xb7d5fef4]
</span><br>
<span class="quotelev1">&gt; [campogrande02:05187] [ 2] mpiIO_test(make_error_messages+0xcf)  
</span><br>
<span class="quotelev1">&gt; [0x80502e4]
</span><br>
<span class="quotelev1">&gt; [campogrande02:05187] [ 3] mpiIO_test(warning_msg+0x8c) [0x8050569]
</span><br>
<span class="quotelev1">&gt; [campogrande02:05187] [ 4] mpiIO_test(report_errs+0xe2) [0x804d413]
</span><br>
<span class="quotelev1">&gt; [campogrande02:05187] [ 5] mpiIO_test(read_write_file+0x594)  
</span><br>
<span class="quotelev1">&gt; [0x804d9c2]
</span><br>
<span class="quotelev1">&gt; [campogrande02:05187] [ 6] mpiIO_test(main+0x1d0) [0x804aa14]
</span><br>
<span class="quotelev1">&gt; [campogrande02:05187] [ 7]
</span><br>
<span class="quotelev1">&gt; /lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe0) [0xb7d15050]
</span><br>
<span class="quotelev1">&gt; [campogrande02:05187] [ 8] mpiIO_test [0x804a7e1]
</span><br>
<span class="quotelev1">&gt; [campogrande02:05187] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [campogrande04:05192] [ 0] [0xffffe440]
</span><br>
<span class="quotelev1">&gt; [campogrande04:05192] [ 1]
</span><br>
<span class="quotelev1">&gt; /lib/tls/i686/cmov/libc.so.6(vsnprintf+0xb4) [0xb7d5fef4]
</span><br>
<span class="quotelev1">&gt; [campogrande04:05192] [ 2] mpiIO_test(make_error_messages+0xcf)  
</span><br>
<span class="quotelev1">&gt; [0x80502e4]
</span><br>
<span class="quotelev1">&gt; [campogrande04:05192] [ 3] mpiIO_test(warning_msg+0x8c) [0x8050569]
</span><br>
<span class="quotelev1">&gt; [campogrande04:05192] [ 4] mpiIO_test(report_errs+0xe2) [0x804d413]
</span><br>
<span class="quotelev1">&gt; [campogrande04:05192] [ 5] mpiIO_test(read_write_file+0x594)  
</span><br>
<span class="quotelev1">&gt; [0x804d9c2]
</span><br>
<span class="quotelev1">&gt; [campogrande04:05192] [ 6] mpiIO_test(main+0x1d0) [0x804aa14]
</span><br>
<span class="quotelev1">&gt; [campogrande04:05192] [ 7]
</span><br>
<span class="quotelev1">&gt; /lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe0) [0xb7d15050]
</span><br>
<span class="quotelev1">&gt; [campogrande04:05192] [ 8] mpiIO_test [0x804a7e1]
</span><br>
<span class="quotelev1">&gt; [campogrande04:05192] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [campogrande01:10646] [ 0] [0xffffe440]
</span><br>
<span class="quotelev1">&gt; [campogrande01:10646] [ 1]
</span><br>
<span class="quotelev1">&gt; /lib/tls/i686/cmov/libc.so.6(vsnprintf+0xb4) [0xb7d5fef4]
</span><br>
<span class="quotelev1">&gt; [campogrande01:10646] [ 2] mpiIO_test(make_error_messages+0xcf)  
</span><br>
<span class="quotelev1">&gt; [0x80502e4]
</span><br>
<span class="quotelev1">&gt; [campogrande01:10646] [ 3] mpiIO_test(warning_msg+0x8c) [0x8050569]
</span><br>
<span class="quotelev1">&gt; [campogrande01:10646] [ 4] mpiIO_test(report_errs+0xe2) [0x804d413]
</span><br>
<span class="quotelev1">&gt; [campogrande01:10646] [ 5] mpiIO_test(read_write_file+0x594)  
</span><br>
<span class="quotelev1">&gt; [0x804d9c2]
</span><br>
<span class="quotelev1">&gt; [campogrande01:10646] [ 6] mpiIO_test(main+0x1d0) [0x804aa14]
</span><br>
<span class="quotelev1">&gt; [campogrande01:10646] [ 7]
</span><br>
<span class="quotelev1">&gt; /lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe0) [0xb7d15050]
</span><br>
<span class="quotelev1">&gt; [campogrande01:10646] [ 8] mpiIO_test [0x804a7e1]
</span><br>
<span class="quotelev1">&gt; [campogrande01:10646] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that job rank 0 with PID 5192 on node campogrande04
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Davi Vercillo Carneiro Garcia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Universidade Federal do Rio de Janeiro
</span><br>
<span class="quotelev1">&gt; Departamento de Ci&#234;ncia da Computa&#231;&#227;o
</span><br>
<span class="quotelev1">&gt; DCC-IM/UFRJ - <a href="http://www.dcc.ufrj.br">http://www.dcc.ufrj.br</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Good things come to those who... wait.&quot; - Debian Project
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;A computer is like air conditioning: it becomes useless when you open
</span><br>
<span class="quotelev1">&gt; windows.&quot; - Linus Torvalds
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;H&#225; duas coisas infinitas, o universo e a burrice humana. E eu estou
</span><br>
<span class="quotelev1">&gt; em d&#250;vida quanto o primeiro.&quot; - Albert Einstein
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5387.php">Åke Sandgren: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<li><strong>Previous message:</strong> <a href="5385.php">Jeff Squyres: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>In reply to:</strong> <a href="5371.php">Davi Vercillo C. Garcia: "[OMPI users] Troubles with MPI-IO Test and Torque/PVFS"</a>
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
