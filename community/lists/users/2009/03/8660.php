<?
$subject_val = "Re: [OMPI users] 'orte_ess_base_select failed'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 21:17:40 2009" -->
<!-- isoreceived="20090331011740" -->
<!-- sent="Mon, 30 Mar 2009 21:17:34 -0400" -->
<!-- isosent="20090331011734" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 'orte_ess_base_select failed'" -->
<!-- id="A77B82B6-9E1D-429F-8F16-403ADF6FFD4A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49CD5343.8070300_at_comcast.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] 'orte_ess_base_select failed'<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 21:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8661.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Previous message:</strong> <a href="8659.php">Jeff Squyres: "Re: [OMPI users] error polling LP CQ with status RETRYEXCEEDED	ERROR"</a>
<li><strong>In reply to:</strong> <a href="8624.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8663.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Reply:</strong> <a href="8663.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should not be invoking orted manually -- getting errors when you  
<br>
invoke orted manually is probably to be expected.
<br>
<p>Can you answer the questions from my original mail?  Thanks.
<br>
<p><p>On Mar 27, 2009, at 6:29 PM, Russell McQueeney wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hmm -- puzzling -- the error file you sent shows the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; bash: /opt/openmpi/orted: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But that shouldn't happen; according to your config.log, you  
</span><br>
<span class="quotelev1">&gt; installed
</span><br>
<span class="quotelev2">&gt; &gt; with a prefix of /opt/openmpi, so Open MPI should be looking for  
</span><br>
<span class="quotelev1">&gt; orted
</span><br>
<span class="quotelev2">&gt; &gt; in /opt/openmpi/bin/orted.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You said that the command was
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; command = mpirun --hostfile hostfile -np 2 echo `uname -a`
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there any chance that you ran with mpirun's absolute filename,  
</span><br>
<span class="quotelev1">&gt; such
</span><br>
<span class="quotelev2">&gt; &gt; as:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/bin/mpirun --hostfile hostfile -np 2 echo `uname -a`
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Or do you have any aliases involved?  I can't imagine how you're
</span><br>
<span class="quotelev2">&gt; &gt; getting that error message -- Open MPI should never use a full path
</span><br>
<span class="quotelev2">&gt; &gt; name for orted unless you specified --prefix on the mpirun command
</span><br>
<span class="quotelev2">&gt; &gt; line (which you didn't), or youused a full path name for mpirun  
</span><br>
<span class="quotelev1">&gt; (which
</span><br>
<span class="quotelev2">&gt; &gt; it looks like you didn't, and even if you did use
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/bin/mpirun, it should use that path to look for
</span><br>
<span class="quotelev2">&gt; &gt; /opt/openmpi/bin/orted on the other node).  Otherwise, Open MPI  
</span><br>
<span class="quotelev1">&gt; relies
</span><br>
<span class="quotelev2">&gt; &gt; on the PATH set in your shell startup files on remote nodes to find
</span><br>
<span class="quotelev2">&gt; &gt; the orted.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is very odd -- can you look at the exact command that is being
</span><br>
<span class="quotelev2">&gt; &gt; executed on the remote node?
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8661.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Previous message:</strong> <a href="8659.php">Jeff Squyres: "Re: [OMPI users] error polling LP CQ with status RETRYEXCEEDED	ERROR"</a>
<li><strong>In reply to:</strong> <a href="8624.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8663.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Reply:</strong> <a href="8663.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
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
