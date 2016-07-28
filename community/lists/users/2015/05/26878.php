<?
$subject_val = "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 06:51:20 2015" -->
<!-- isoreceived="20150518105120" -->
<!-- sent="Mon, 18 May 2015 12:51:04 +0200 (CEST)" -->
<!-- isosent="20150518105104" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons" -->
<!-- id="201505181051.t4IAp47N026182_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] openmpi-1.8.5: ORTE was unable to start daemons" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-18 06:51:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26879.php">Nilo Menezes: "[OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<li><strong>Previous message:</strong> <a href="26877.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Maybe in reply to:</strong> <a href="26871.php">Siegmar Gross: "[OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p><span class="quotelev1">&gt; Could you please give apply the attached patch and try again with and
</span><br>
<span class="quotelev1">&gt; without --prefix ...
</span><br>
<p>Everything works fine with your patch. Thank you very much for your help.
<br>
Even the Java problem, which I reported last Friday in a separate e-mail,
<br>
is solved with your patch. I assume that it originated from the faulty
<br>
environment as well.
<br>
<p><p>tyr small_prog 110 mpiexec --prefix /usr/local/openmpi-1.8.5_64_cc \
<br>
&nbsp;&nbsp;-np 5 --host sunpc1,linpc1,tyr,rs0 init_finalize
<br>
Hello!
<br>
Hello!
<br>
Hello!
<br>
Hello!
<br>
Hello!
<br>
tyr small_prog 111 mpiexec -np 5 --host sunpc1,linpc1,tyr,rs0 init_finalize
<br>
Hello!
<br>
Hello!
<br>
Hello!
<br>
Hello!
<br>
Hello!
<br>
tyr small_prog 112 
<br>
<p><p>Kind regards and once more thank you very much
<br>
<p>Siegmar
<br>
<p><p><p><p><span class="quotelev1">&gt; it seems there was a mistake when the following commit was back ported to
</span><br>
<span class="quotelev1">&gt; the v1.8 branch
</span><br>
<span class="quotelev1">&gt; commit 10ff75e91c3f5dad18ea854fd0ee831b2ea066d7
</span><br>
<span class="quotelev1">&gt; Author: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Fri Apr 17 19:35:34 2015 -0700
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Per request from Andy Rieb, add ability to pass PATH and
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH elements to ssh command
</span><br>
<span class="quotelev1">&gt;      Per request from David Bigagli, add ability to pass ssh args
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Taken from open-mpi/ompi_at_12bfb27161fb2710d9b4327072776ff3333f0afc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, here are the details :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the bug is in orte/mca/plm/rsh/plm_rsh_module.c:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int setup_launch(...)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;      char *lib_base=NULL, *bin_base=NULL;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;      lib_base = opal_basename(opal_install_dirs.libdir);
</span><br>
<span class="quotelev1">&gt;      bin_base = opal_basename(opal_install_dirs.bindir);
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;      if (NULL != prefix_dir) {
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;          asprintf(&amp;bin_base, &quot;%s/%s&quot;, prefix_dir, value);
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; if (NULL != lib_base || NULL != bin_base) {
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;         } else if (ORTE_PLM_RSH_SHELL_TCSH == remote_shell ||
</span><br>
<span class="quotelev1">&gt;                     ORTE_PLM_RSH_SHELL_CSH == remote_shell) {
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;              (void)asprintf (&amp;final_cmd,
</span><br>
<span class="quotelev1">&gt;                              &quot;%s%s%s set path = ( %s $path ) ; &quot;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;                              &quot;setenv LD_LIBRARY_PATH %s ; &quot;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;                              (NULL != bin_base ? bin_base : &quot; &quot;),
</span><br>
<span class="quotelev1">&gt;                              (NULL != lib_base ? lib_base : &quot; &quot;),
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in your case, prefix_dir is NULL, so bin_base is &quot;bin&quot; and lib_base is
</span><br>
<span class="quotelev1">&gt; &quot;lib64&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, May 18, 2015 at 2:01 AM, Siegmar Gross &lt;
</span><br>
<span class="quotelev1">&gt; Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Gilles,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am having some hard time reading the logs on my tablet...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bottom line, did using --prefix  /usr/local/openmpi-1.8.5_64_cc fix all
</span><br>
<span class="quotelev3">&gt; &gt; &gt; your issues ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, it did and the environment is also correct when I use --prefix.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 109 mpiexec --prefix /usr/local/openmpi-1.8.5_64_cc -np 5
</span><br>
<span class="quotelev2">&gt; &gt; --host sunpc1,linpc1,tyr,rs0 init_finalize
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 110 mpiexec -np 5 --host sunpc1,linpc1,tyr,rs0 
</span><br>
<span class="quotelev2">&gt; &gt; init_finalize
</span><br>
<span class="quotelev2">&gt; &gt; ld.so.1: ssh: fatal: relocation error: file /usr/bin/ssh: symbol
</span><br>
<span class="quotelev2">&gt; &gt; SUNWcry_installed: referenced symbol not found
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Without --prefix the following part goes wrong as far as I can see
</span><br>
<span class="quotelev2">&gt; &gt; and I get the wrong environment with &quot;bin&quot; and &quot;lib64&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:03938] [[43332,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev2">&gt; &gt; assigning new daemon [[43332,0],2] to node linpc1
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:03938] [[43332,0],0] plm:base:setup_vm add
</span><br>
<span class="quotelev2">&gt; &gt; new daemon [[43332,0],3]
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:03938] [[43332,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev2">&gt; &gt; assigning new daemon [[43332,0],3] to node rs0
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:03938] [[43332,0],0] plm:rsh: launching vm
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:03938] [[43332,0],0] plm:rsh: local shell: 2
</span><br>
<span class="quotelev2">&gt; &gt; (tcsh)
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:03938] [[43332,0],0] plm:rsh: assuming same
</span><br>
<span class="quotelev2">&gt; &gt; remote shell as local shell
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:03938] [[43332,0],0] plm:rsh: remote shell: 2
</span><br>
<span class="quotelev2">&gt; &gt; (tcsh)
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:03938] [[43332,0],0] plm:rsh: final template
</span><br>
<span class="quotelev2">&gt; &gt; argv:
</span><br>
<span class="quotelev2">&gt; &gt;         /usr/local/bin/ssh &lt;template&gt;     set path = ( bin $path ) ; if (
</span><br>
<span class="quotelev2">&gt; &gt; $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if (
</span><br>
<span class="quotelev2">&gt; &gt; $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH lib64 ; if
</span><br>
<span class="quotelev2">&gt; &gt; ( $?OMPI_have_llp == 1 ) setenv LD_LIBRARY_PATH lib64:$LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev2">&gt; &gt; if ( $?DYLD_LIBRARY_PATH == 1 ) set OMPI_have_dllp
</span><br>
<span class="quotelev2">&gt; &gt; ; if ( $?DYLD_LIBRARY_PATH == 0 ) setenv DYLD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt; lib64 ; if ( $?OMPI_have_dllp == 1 ) setenv DYLD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt; lib64:$DYLD_LIBRARY_PATH ;   orted --hnp-topo-sig
</span><br>
<span class="quotelev2">&gt; &gt; 2N:2S:0L3:0L2:0L1:2C:2H:sun4u -mca ess &quot;env&quot; -mca orte_ess_jobid
</span><br>
<span class="quotelev2">&gt; &gt; &quot;2839805952&quot; -mca orte_ess_vpid &quot;&lt;template&gt;&quot; -mca orte_ess_num_procs &quot;4&quot;
</span><br>
<span class="quotelev2">&gt; &gt; -mca orte_hnp_uri
</span><br>
<span class="quotelev2">&gt; &gt; &quot;2839805952.0;tcp://193.174.24.39:34971&quot; --tree-spawn --mca
</span><br>
<span class="quotelev2">&gt; &gt; plm_base_verbose &quot;100&quot; -mca plm
</span><br>
<span class="quotelev2">&gt; &gt; &quot;rsh&quot;
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:03938] [[43332,0],0] plm:rsh:launch daemon 0
</span><br>
<span class="quotelev2">&gt; &gt; not a child of mine
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:03938] [[43332,0],0] plm:rsh: adding node
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1 to launch list
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you know which file is responsible for the above part?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; if not, can you try to add the --hetero-nodes option to mpiexec ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; just to be sure, can you please confirm your login shell is csh/tcsh on
</span><br>
<span class="quotelev2">&gt; &gt; all
</span><br>
<span class="quotelev3">&gt; &gt; &gt; your boxes ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It is and must be tcsh, because otherwise our environment wouldn't work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26879.php">Nilo Menezes: "[OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<li><strong>Previous message:</strong> <a href="26877.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<li><strong>Maybe in reply to:</strong> <a href="26871.php">Siegmar Gross: "[OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
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
