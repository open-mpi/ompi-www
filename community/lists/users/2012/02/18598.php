<?
$subject_val = "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 09:43:17 2012" -->
<!-- isoreceived="20120229144317" -->
<!-- sent="Wed, 29 Feb 2012 09:43:25 -0500" -->
<!-- isosent="20120229144325" -->
<!-- name="Yiguang Yan" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes" -->
<!-- id="4F4DF33D.8641.163D2C42_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] orted daemon no found! --- environment not passed to slave nodes" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes<br>
<strong>From:</strong> Yiguang Yan (<em>yanyg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 09:43:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18599.php">Pinero, Pedro_jose: "[OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Previous message:</strong> <a href="18597.php">Stefano Dal Pont: "[OMPI users] archlinux segmentation fault error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18614.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18614.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks.
<br>
<p>I tried as what you suggested. Here are the output:
<br>
<p><span class="quotelev3">&gt;&gt;&gt;
</span><br>
yiguang_at_gulftown testdmp]$ ./test.bash
<br>
[gulftown:25052] mca: base: components_open: Looking for plm 
<br>
components
<br>
[gulftown:25052] mca: base: components_open: opening plm 
<br>
components
<br>
[gulftown:25052] mca: base: components_open: found loaded 
<br>
component rsh
<br>
[gulftown:25052] mca: base: components_open: component rsh 
<br>
has no register function
<br>
[gulftown:25052] mca: base: components_open: component rsh 
<br>
open function successful
<br>
[gulftown:25052] mca: base: components_open: found loaded 
<br>
component slurm
<br>
[gulftown:25052] mca: base: components_open: component slurm 
<br>
has no register function
<br>
[gulftown:25052] mca: base: components_open: component slurm 
<br>
open function successful
<br>
[gulftown:25052] mca: base: components_open: found loaded 
<br>
component tm
<br>
[gulftown:25052] mca: base: components_open: component tm 
<br>
has no register function
<br>
[gulftown:25052] mca: base: components_open: component tm 
<br>
open function successful
<br>
[gulftown:25052] mca:base:select: Auto-selecting plm components
<br>
[gulftown:25052] mca:base:select:(  plm) Querying component [rsh]
<br>
[gulftown:25052] mca:base:select:(  plm) Query of component [rsh] 
<br>
set priority to 10
<br>
[gulftown:25052] mca:base:select:(  plm) Querying component 
<br>
[slurm]
<br>
[gulftown:25052] mca:base:select:(  plm) Skipping component 
<br>
[slurm]. Query failed to return a module
<br>
[gulftown:25052] mca:base:select:(  plm) Querying component [tm]
<br>
[gulftown:25052] mca:base:select:(  plm) Skipping component [tm]. 
<br>
Query failed to return a module
<br>
[gulftown:25052] mca:base:select:(  plm) Selected component [rsh]
<br>
[gulftown:25052] mca: base: close: component slurm closed
<br>
[gulftown:25052] mca: base: close: unloading component slurm
<br>
[gulftown:25052] mca: base: close: component tm closed
<br>
[gulftown:25052] mca: base: close: unloading component tm
<br>
bash: orted: command not found
<br>
bash: orted: command not found
<br>
bash: orted: command not found
<br>
&lt;&lt;&lt;
<br>
<p><p>The following is the content of test.bash:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
yiguang_at_gulftown testdmp]$ ./test.bash
<br>
#!/bin/sh -f
<br>
#nohup
<br>
#
<br>
# &gt;-----------------------------------------------------------------------------------
<br>
--------&lt;
<br>
adinahome=/usr/adina/system8.8dmp
<br>
mpirunfile=$adinahome/bin/mpirun
<br>
#
<br>
# Set envars for mpirun and orted
<br>
#
<br>
export PATH=$adinahome/bin:$adinahome/tools:$PATH
<br>
export LD_LIBRARY_PATH=$adinahome/lib:$LD_LIBRARY_PATH
<br>
#
<br>
#
<br>
# run DMP problem
<br>
#
<br>
mcaprefix=&quot;--prefix $adinahome&quot;
<br>
mcarshagent=&quot;--mca plm_rsh_agent rsh:ssh&quot;
<br>
mcatmpdir=&quot;--mca orte_tmpdir_base /tmp&quot;
<br>
mcaopenibmsg=&quot;--mca btl_openib_warn_default_gid_prefix 0&quot;
<br>
mcaenvars=&quot;-x PATH -x LD_LIBRARY_PATH&quot;
<br>
mcabtlconn=&quot;--mca btl openib,sm,self&quot;
<br>
mcaplmbase=&quot;--mca plm_base_verbose 100&quot;
<br>
<p>mcaparams=&quot;$mcaprefix $mcaenvars $mcarshagent 
<br>
$mcaopenibmsg $mcabtlconn $mcatmpdir $mcaplmbase&quot;
<br>
<p>$mpirunfile $mcaparams --app addmpw-hostname
<br>
&lt;&lt;&lt;
<br>
<p>While the content of addmpw-hostname is:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
-n 1 -host gulftown hostname
<br>
-n 1 -host ibnode001 hostname
<br>
-n 1 -host ibnode002 hostname
<br>
-n 1 -host ibnode003 thostname
<br>
&lt;&lt;&lt;
<br>
<p>After this, I also tried to specify the orted through:
<br>
<p>--mca orte_launch_agent $adinahome/bin/orted
<br>
<p>then, orted could be found on slave nodes, but now the shared libs 
<br>
in $adinahome/lib are not on the LD_LIBRARY_PATH.
<br>
<p>Any comments?
<br>
<p>Thanks,
<br>
Yiguang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18599.php">Pinero, Pedro_jose: "[OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Previous message:</strong> <a href="18597.php">Stefano Dal Pont: "[OMPI users] archlinux segmentation fault error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18614.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18614.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes"</a>
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
