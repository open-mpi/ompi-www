<?
$subject_val = "[OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 04:01:08 2015" -->
<!-- isoreceived="20150908080108" -->
<!-- sent="Tue, 8 Sep 2015 10:00:19 +0200" -->
<!-- isosent="20150908080019" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings" -->
<!-- id="55EE9593.2080602_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-08 04:00:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27543.php">Siegmar Gross: "[OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Previous message:</strong> <a href="27541.php">Dhanashree N P: "[OMPI users] As one MPI process executes MPI_Barrier(), other processes hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27547.php">Ralph Castain: "Re: [OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings"</a>
<li><strong>Reply:</strong> <a href="27547.php">Ralph Castain: "Re: [OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I have built openmpi-v2.x-dev-325-g8ae44ea on my
<br>
machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
<br>
Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. Perhaps
<br>
somebody is interested in some warnings that I got on my Linux
<br>
box with both compilers.
<br>
<p><p>GNU compiler:
<br>
-------------
<br>
...
<br>
make[2]: Entering directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-325-g8ae44ea-Linux.x86_64.64_gcc'
<br>
make  install-exec-hook
<br>
make[3]: Entering directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-325-g8ae44ea-Linux.x86_64.64_gcc'
<br>
WARNING!  Common symbols found:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyval_lex.o: 0000000000000004 C opal_util_keyval_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyval_lex.o: 0000000000000008 C opal_util_keyval_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000004 C opal_show_help_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000008 C opal_show_help_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000004 C orte_rmaps_rank_file_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000004 C orte_util_hostfile_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_2complex
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_2double_complex
<br>
[...]
<br>
skipping remaining symbols. To see all symbols, run:
<br>
&nbsp;&nbsp;&nbsp;../openmpi-v2.x-dev-325-g8ae44ea/config/find_common_syms 
<br>
--top_builddir=. --top_srcdir=../openmpi-v2.x-dev-325-g8ae44ea --objext=o
<br>
make[3]: [install-exec-hook] Error 1 (ignored)
<br>
make[3]: Leaving directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-325-g8ae44ea-Linux.x86_64.64_gcc'
<br>
...
<br>
<p><p>Sun compiler:
<br>
-------------
<br>
<p>...
<br>
make[2]: Entering directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-325-g8ae44ea-Linux.x86_64.64_cc'
<br>
make  install-exec-hook
<br>
make[3]: Entering directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-325-g8ae44ea-Linux.x86_64.64_cc'
<br>
WARNING!  Common symbols found:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyval_lex.o: 0000000000000004 C opal_util_keyval_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyval_lex.o: 0000000000000008 C opal_util_keyval_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000004 C opal_show_help_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000008 C opal_show_help_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000004 C orte_rmaps_rank_file_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000004 C orte_util_hostfile_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shmem_ShMem.o: 0000000000000010 C shmem_java
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shmem_ShMem.o: 00000000000001f8 C shmem_java_buffers
<br>
make[3]: [install-exec-hook] Error 1 (ignored)
<br>
make[3]: Leaving directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-325-g8ae44ea-Linux.x86_64.64_cc'
<br>
...
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27542/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27543.php">Siegmar Gross: "[OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Previous message:</strong> <a href="27541.php">Dhanashree N P: "[OMPI users] As one MPI process executes MPI_Barrier(), other processes hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27547.php">Ralph Castain: "Re: [OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings"</a>
<li><strong>Reply:</strong> <a href="27547.php">Ralph Castain: "Re: [OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings"</a>
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
