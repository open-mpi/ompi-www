<?
$subject_val = "Re: [OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 09:36:19 2015" -->
<!-- isoreceived="20150908133619" -->
<!-- sent="Tue, 8 Sep 2015 06:36:16 -0700" -->
<!-- isosent="20150908133616" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings" -->
<!-- id="2B51CDA0-9843-42DF-9BEC-0894E0357FF0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55EE9593.2080602_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-08 09:36:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27548.php">Ralph Castain: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Previous message:</strong> <a href="27546.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>In reply to:</strong> <a href="27542.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar
<br>
<p>Those are harmless and can be ignored - just reminders to us that we have some low-priority cleanup to do
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; On Sep 8, 2015, at 1:00 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yesterday I have built openmpi-v2.x-dev-325-g8ae44ea on my
</span><br>
<span class="quotelev1">&gt; machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
</span><br>
<span class="quotelev1">&gt; Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. Perhaps
</span><br>
<span class="quotelev1">&gt; somebody is interested in some warnings that I got on my Linux
</span><br>
<span class="quotelev1">&gt; box with both compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GNU compiler:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-325-g8ae44ea-Linux.x86_64.64_gcc'
</span><br>
<span class="quotelev1">&gt; make  install-exec-hook
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-325-g8ae44ea-Linux.x86_64.64_gcc'
</span><br>
<span class="quotelev1">&gt; WARNING!  Common symbols found:
</span><br>
<span class="quotelev1">&gt;             keyval_lex.o: 0000000000000004 C opal_util_keyval_yyleng
</span><br>
<span class="quotelev1">&gt;             keyval_lex.o: 0000000000000008 C opal_util_keyval_yytext
</span><br>
<span class="quotelev1">&gt;          show_help_lex.o: 0000000000000004 C opal_show_help_yyleng
</span><br>
<span class="quotelev1">&gt;          show_help_lex.o: 0000000000000008 C opal_show_help_yytext
</span><br>
<span class="quotelev1">&gt;    rmaps_rank_file_lex.o: 0000000000000004 C orte_rmaps_rank_file_leng
</span><br>
<span class="quotelev1">&gt;    rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
</span><br>
<span class="quotelev1">&gt;           hostfile_lex.o: 0000000000000004 C orte_util_hostfile_leng
</span><br>
<span class="quotelev1">&gt;           hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
</span><br>
<span class="quotelev1">&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_2complex
</span><br>
<span class="quotelev1">&gt;          mpi-f08-types.o: 0000000000000004 C ompi_f08_mpi_2double_complex
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; skipping remaining symbols. To see all symbols, run:
</span><br>
<span class="quotelev1">&gt;  ../openmpi-v2.x-dev-325-g8ae44ea/config/find_common_syms --top_builddir=. --top_srcdir=../openmpi-v2.x-dev-325-g8ae44ea --objext=o
</span><br>
<span class="quotelev1">&gt; make[3]: [install-exec-hook] Error 1 (ignored)
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-325-g8ae44ea-Linux.x86_64.64_gcc'
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sun compiler:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-325-g8ae44ea-Linux.x86_64.64_cc'
</span><br>
<span class="quotelev1">&gt; make  install-exec-hook
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-325-g8ae44ea-Linux.x86_64.64_cc'
</span><br>
<span class="quotelev1">&gt; WARNING!  Common symbols found:
</span><br>
<span class="quotelev1">&gt;             keyval_lex.o: 0000000000000004 C opal_util_keyval_yyleng
</span><br>
<span class="quotelev1">&gt;             keyval_lex.o: 0000000000000008 C opal_util_keyval_yytext
</span><br>
<span class="quotelev1">&gt;          show_help_lex.o: 0000000000000004 C opal_show_help_yyleng
</span><br>
<span class="quotelev1">&gt;          show_help_lex.o: 0000000000000008 C opal_show_help_yytext
</span><br>
<span class="quotelev1">&gt;    rmaps_rank_file_lex.o: 0000000000000004 C orte_rmaps_rank_file_leng
</span><br>
<span class="quotelev1">&gt;    rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
</span><br>
<span class="quotelev1">&gt;           hostfile_lex.o: 0000000000000004 C orte_util_hostfile_leng
</span><br>
<span class="quotelev1">&gt;           hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
</span><br>
<span class="quotelev1">&gt;            shmem_ShMem.o: 0000000000000010 C shmem_java
</span><br>
<span class="quotelev1">&gt;            shmem_ShMem.o: 00000000000001f8 C shmem_java_buffers
</span><br>
<span class="quotelev1">&gt; make[3]: [install-exec-hook] Error 1 (ignored)
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-325-g8ae44ea-Linux.x86_64.64_cc'
</span><br>
<span class="quotelev1">&gt; ...
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27542.php">http://www.open-mpi.org/community/lists/users/2015/09/27542.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27548.php">Ralph Castain: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Previous message:</strong> <a href="27546.php">Siegmar Gross: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>In reply to:</strong> <a href="27542.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings"</a>
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
