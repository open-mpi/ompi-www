<?
$subject_val = "Re: [OMPI users] Can't run with more than two nodes in the hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 06:08:43 2014" -->
<!-- isoreceived="20140715100843" -->
<!-- sent="Tue, 15 Jul 2014 12:08:42 +0200" -->
<!-- isosent="20140715100842" -->
<!-- name="Ricardo Fern&#195;&#161;ndez-Perea" -->
<!-- email="rfernandezperea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't run with more than two nodes in the hostfile" -->
<!-- id="CAKW9TZogL+3WARuOr5_c+oWpBXR-5Pz9MF7NRz53F++5ppxgew_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="04A27190-9F4A-41BD-A784-09BCFB4866F7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't run with more than two nodes in the hostfile<br>
<strong>From:</strong> Ricardo Fern&#195;&#161;ndez-Perea (<em>rfernandezperea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 06:08:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24770.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>Previous message:</strong> <a href="24768.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>In reply to:</strong> <a href="24768.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24770.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>Reply:</strong> <a href="24770.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have try if another mpi process is running in the node already the
<br>
process run
<br>
<p>$ricardo$ /opt/openmpi/bin/mpirun  --mca plm_rsh_no_tree_spawn 1 -mca
<br>
plm_base_verbose 10 -host nexus16 ompi_info
<br>
[nexus10.nlroc:27397] mca: base: components_register: registering plm
<br>
components
<br>
[nexus10.nlroc:27397] mca: base: components_register: found loaded
<br>
component isolated
<br>
[nexus10.nlroc:27397] mca: base: components_register: component isolated
<br>
has no register or open function
<br>
[nexus10.nlroc:27397] mca: base: components_register: found loaded
<br>
component rsh
<br>
[nexus10.nlroc:27397] mca: base: components_register: component rsh
<br>
register function successful
<br>
[nexus10.nlroc:27397] mca: base: components_register: found loaded
<br>
component slurm
<br>
[nexus10.nlroc:27397] mca: base: components_register: component slurm
<br>
register function successful
<br>
[nexus10.nlroc:27397] mca: base: components_open: opening plm components
<br>
[nexus10.nlroc:27397] mca: base: components_open: found loaded component
<br>
isolated
<br>
[nexus10.nlroc:27397] mca: base: components_open: component isolated open
<br>
function successful
<br>
[nexus10.nlroc:27397] mca: base: components_open: found loaded component rsh
<br>
[nexus10.nlroc:27397] mca: base: components_open: component rsh open
<br>
function successful
<br>
[nexus10.nlroc:27397] mca: base: components_open: found loaded component
<br>
slurm
<br>
[nexus10.nlroc:27397] mca: base: components_open: component slurm open
<br>
function successful
<br>
[nexus10.nlroc:27397] mca:base:select: Auto-selecting plm components
<br>
[nexus10.nlroc:27397] mca:base:select:(  plm) Querying component [isolated]
<br>
[nexus10.nlroc:27397] mca:base:select:(  plm) Query of component [isolated]
<br>
set priority to 0
<br>
[nexus10.nlroc:27397] mca:base:select:(  plm) Querying component [rsh]
<br>
[nexus10.nlroc:27397] mca:base:select:(  plm) Query of component [rsh] set
<br>
priority to 10
<br>
[nexus10.nlroc:27397] mca:base:select:(  plm) Querying component [slurm]
<br>
[nexus10.nlroc:27397] mca:base:select:(  plm) Skipping component [slurm].
<br>
Query failed to return a module
<br>
[nexus10.nlroc:27397] mca:base:select:(  plm) Selected component [rsh]
<br>
[nexus10.nlroc:27397] mca: base: close: component isolated closed
<br>
[nexus10.nlroc:27397] mca: base: close: unloading component isolated
<br>
[nexus10.nlroc:27397] mca: base: close: component slurm closed
<br>
[nexus10.nlroc:27397] mca: base: close: unloading component slurm
<br>
[nexus10.nlroc:27397] [[52326,0],0] plm:base:receive update proc state
<br>
command from [[52326,0],1]
<br>
[nexus10.nlroc:27397] [[52326,0],0] plm:base:receive got update_proc_state
<br>
for job [52326,1]
<br>
[nexus16.nlroc:59687] mca: base: components_register: registering plm
<br>
components
<br>
[nexus16.nlroc:59687] mca: base: components_register: found loaded
<br>
component isolated
<br>
[nexus16.nlroc:59687] mca: base: components_register: component isolated
<br>
has no register or open function
<br>
[nexus16.nlroc:59687] mca: base: components_register: found loaded
<br>
component rsh
<br>
[nexus16.nlroc:59687] mca: base: components_register: component rsh
<br>
register function successful
<br>
[nexus16.nlroc:59687] mca: base: components_register: found loaded
<br>
component slurm
<br>
[nexus16.nlroc:59687] mca: base: components_register: component slurm
<br>
register function successful
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI XXXX_at_nexus10.nlroc Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.8.1
<br>
&nbsp;&nbsp;Open MPI repo revision: r31483
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Apr 22, 2014
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.8.1
<br>
&#226;&#128;&#166;
<br>
<p>but if the compute node has not a mpi process running in it it already
<br>
hangs as
<br>
<p>/opt/openmpi/bin/mpirun  --mca plm_rsh_no_tree_spawn 1 -mca
<br>
plm_base_verbose 10 -host nexus17 ompi_info
<br>
[nexus10.nlroc:27438] mca: base: components_register: registering plm
<br>
components
<br>
[nexus10.nlroc:27438] mca: base: components_register: found loaded
<br>
component isolated
<br>
[nexus10.nlroc:27438] mca: base: components_register: component isolated
<br>
has no register or open function
<br>
[nexus10.nlroc:27438] mca: base: components_register: found loaded
<br>
component rsh
<br>
[nexus10.nlroc:27438] mca: base: components_register: component rsh
<br>
register function successful
<br>
[nexus10.nlroc:27438] mca: base: components_register: found loaded
<br>
component slurm
<br>
[nexus10.nlroc:27438] mca: base: components_register: component slurm
<br>
register function successful
<br>
[nexus10.nlroc:27438] mca: base: components_open: opening plm components
<br>
[nexus10.nlroc:27438] mca: base: components_open: found loaded component
<br>
isolated
<br>
[nexus10.nlroc:27438] mca: base: components_open: component isolated open
<br>
function successful
<br>
[nexus10.nlroc:27438] mca: base: components_open: found loaded component rsh
<br>
[nexus10.nlroc:27438] mca: base: components_open: component rsh open
<br>
function successful
<br>
[nexus10.nlroc:27438] mca: base: components_open: found loaded component
<br>
slurm
<br>
[nexus10.nlroc:27438] mca: base: components_open: component slurm open
<br>
function successful
<br>
[nexus10.nlroc:27438] mca:base:select: Auto-selecting plm components
<br>
[nexus10.nlroc:27438] mca:base:select:(  plm) Querying component [isolated]
<br>
[nexus10.nlroc:27438] mca:base:select:(  plm) Query of component [isolated]
<br>
set priority to 0
<br>
[nexus10.nlroc:27438] mca:base:select:(  plm) Querying component [rsh]
<br>
[nexus10.nlroc:27438] mca:base:select:(  plm) Query of component [rsh] set
<br>
priority to 10
<br>
[nexus10.nlroc:27438] mca:base:select:(  plm) Querying component [slurm]
<br>
[nexus10.nlroc:27438] mca:base:select:(  plm) Skipping component [slurm].
<br>
Query failed to return a module
<br>
[nexus10.nlroc:27438] mca:base:select:(  plm) Selected component [rsh]
<br>
[nexus10.nlroc:27438] mca: base: close: component isolated closed
<br>
[nexus10.nlroc:27438] mca: base: close: unloading component isolated
<br>
[nexus10.nlroc:27438] mca: base: close: component slurm closed
<br>
[nexus10.nlroc:27438] mca: base: close: unloading component slurm
<br>
<p>and  it stop there
<br>
<p><p><p><p>On Mon, Jul 14, 2014 at 8:56 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...no, it worked just fine for me. It sounds like something else is
</span><br>
<span class="quotelev1">&gt; going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try configuring OMPI with --enable-debug, and then add -mca
</span><br>
<span class="quotelev1">&gt; plm_base_verbose 10 to get a better sense of what is going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 14, 2014, at 10:27 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I confess I haven't tested no_tree_spawn in ages, so it is quite possible
</span><br>
<span class="quotelev1">&gt; it has suffered bit rot. I can try to take a look at it in a bit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 14, 2014, at 10:13 AM, Ricardo Fern&#195;&#161;ndez-Perea &lt;
</span><br>
<span class="quotelev1">&gt; rfernandezperea_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for the fast answer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While that resolve my problem with cross ssh authentication   a command as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun  --mca mtl mx --mca pml cm --mca
</span><br>
<span class="quotelev1">&gt; plm_rsh_no_tree_spawn 1 -hostfile hostfile ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; just hung with no output and although there is a ssh connexion no orte
</span><br>
<span class="quotelev1">&gt; program is initiated in the destination nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and while
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun  -host host18 ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; works
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun  --mca plm_rsh_no_tree_spawn 1 -host host18
</span><br>
<span class="quotelev1">&gt; ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hangs, is there some condition in the use of this parameter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yours truly
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ricardo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 14, 2014 at 6:35 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; During the 1.7 series and for all follow-on series, OMPI changed to a
</span><br>
<span class="quotelev2">&gt;&gt; mode where it launches a daemon on all allocated nodes at the startup of
</span><br>
<span class="quotelev2">&gt;&gt; mpirun. This allows us to determine the hardware topology of the nodes and
</span><br>
<span class="quotelev2">&gt;&gt; take that into account when mapping. You can override that behavior by
</span><br>
<span class="quotelev2">&gt;&gt; either adding --novm to your cmd line (which will impact your
</span><br>
<span class="quotelev2">&gt;&gt; mapping/binding options), or by specifying the hosts to use by editing your
</span><br>
<span class="quotelev2">&gt;&gt; hostfile, or adding --host host1,host2 to your cmd line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The rsh launcher defaults to a tree-based pattern, thus requiring that we
</span><br>
<span class="quotelev2">&gt;&gt; be able to ssh from one compute node to another. You can change that to a
</span><br>
<span class="quotelev2">&gt;&gt; less scalable direct mode by adding
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --mca plm_rsh_no_tree_spawn 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to the cmd line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 14, 2014, at 9:21 AM, Ricardo Fern&#195;&#161;ndez-Perea &lt;
</span><br>
<span class="quotelev2">&gt;&gt; rfernandezperea_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm trying to update to openMPI 1.8.1 thru ssh  and Myrinet
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; running a command as
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /opt/openmpi/bin/mpirun --verbose --mca mtl mx --mca pml cm  -hostfile
</span><br>
<span class="quotelev2">&gt;&gt; hostfile -np 16
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; when the hostfile contain only two nodes as
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; host1 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt;&gt; &gt; host2 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; it runs perfectly but when the hostfile has a third node as
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; host1 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt;&gt; &gt; host2 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt;&gt; &gt; host3 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; it try to establish an ssh connection between  the running hosts1 and
</span><br>
<span class="quotelev2">&gt;&gt; host3 that should not run any process  that fails hanging the process
</span><br>
<span class="quotelev2">&gt;&gt; without signaling.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; my ompi_info is as follow
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 Package: Open MPI XXX Distribution
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 Open MPI: 1.8.1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Open MPI repo revision: r31483
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Open MPI release date: Apr 22, 2014
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 Open RTE: 1.8.1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Open RTE repo revision: r31483
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Open RTE release date: Apr 22, 2014
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                     OPAL: 1.8.1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       OPAL repo revision: r31483
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        OPAL release date: Apr 22, 2014
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                  MPI API: 3.0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             Ident string: 1.8.1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                   Prefix: /opt/openmpi
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  Configured architecture: x86_64-apple-darwin9.8.0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;           Configure host: XXXX
</span><br>
<span class="quotelev3">&gt;&gt; &gt;            Configured by: XXXX
</span><br>
<span class="quotelev3">&gt;&gt; &gt;            Configured on: Thu Jun 12 10:37:33 CEST 2014
</span><br>
<span class="quotelev3">&gt;&gt; &gt;           Configure host: XXXX
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 Built by: XXXX
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 Built on: Thu Jun 12 11:13:16 CEST 2014
</span><br>
<span class="quotelev3">&gt;&gt; &gt;               Built host: XXXX
</span><br>
<span class="quotelev3">&gt;&gt; &gt;               C bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             C++ bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;              Fort mpif.h: yes (single underscore)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             Fort use mpi: yes (full: ignore TKR)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         Fort use mpi_f08: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  Fort mpi_f08 compliance: The mpi_f08 module is available, but due to
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                           limitations in the ifort compiler, does not
</span><br>
<span class="quotelev2">&gt;&gt; support
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                           the following: array subsections, direct
</span><br>
<span class="quotelev2">&gt;&gt; passthru
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                           (where possible) to underlying Open MPI's C
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                           functionality
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt;            Java bindings: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Wrapper compiler rpath: unnecessary
</span><br>
<span class="quotelev3">&gt;&gt; &gt;               C compiler: icc
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      C compiler absolute: /opt/intel/Compiler/11.1/080/bin/intel64/icc
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   C compiler family name: INTEL
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       C compiler version: 1110.20091130
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             C++ compiler: icpc
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    C++ compiler absolute: /opt/intel/Compiler/11.1/080/bin/intel64/icpc
</span><br>
<span class="quotelev3">&gt;&gt; &gt;            Fort compiler: ifort
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Fort compiler abs: /opt/intel/Compiler/11.1/080/bin/intel64/ifort
</span><br>
<span class="quotelev3">&gt;&gt; &gt;          Fort ignore TKR: yes (!DEC$ ATTRIBUTES NO_ARG_CHECK ::)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Fort 08 assumed shape: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       Fort optional args: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       Fort BIND(C) (all): yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       Fort ISO_C_BINDING: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  Fort SUBROUTINE BIND(C): yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Fort TYPE,BIND(C): yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  Fort T,BIND(C,name=&quot;a&quot;): yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             Fort PRIVATE: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;           Fort PROTECTED: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;            Fort ABSTRACT: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        Fort ASYNCHRONOUS: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;           Fort PROCEDURE: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  Fort f08 using wrappers: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;              C profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;            C++ profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Fort mpif.h profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Fort use mpi profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Fort use mpi_f08 prof: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;           C++ exceptions: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support:
</span><br>
<span class="quotelev2">&gt;&gt; yes,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                           OMPI progress: no, ORTE progress: yes, Event
</span><br>
<span class="quotelev2">&gt;&gt; lib:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                           yes)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;            Sparse Groups: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Internal debug support: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   MPI interface warnings: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt;          libltdl support: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Heterogeneous support: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt;          MPI I/O support: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Host topology support: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;           MPI extensions:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    C/R Enabled Debugging: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      VampirTrace support: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24764.php">http://www.open-mpi.org/community/lists/users/2014/07/24764.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24765.php">http://www.open-mpi.org/community/lists/users/2014/07/24765.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24766.php">http://www.open-mpi.org/community/lists/users/2014/07/24766.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24768.php">http://www.open-mpi.org/community/lists/users/2014/07/24768.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24769/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24770.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>Previous message:</strong> <a href="24768.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>In reply to:</strong> <a href="24768.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24770.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
<li><strong>Reply:</strong> <a href="24770.php">Ralph Castain: "Re: [OMPI users] Can't run with more than two nodes in the hostfile"</a>
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
