<?
$subject_val = "Re: [OMPI users] usNIC point-to-point messaging module";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 16:08:13 2014" -->
<!-- isoreceived="20140401200813" -->
<!-- sent="Tue, 1 Apr 2014 20:08:10 +0000" -->
<!-- isosent="20140401200810" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] usNIC point-to-point messaging module" -->
<!-- id="E82C67CE-046D-4AF4-8BF2-2A7BC3EA90F6_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F760F545-E86F-4B37-8846-9DDEF4D61C44_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] usNIC point-to-point messaging module<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-01 16:08:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24028.php">Fabricio Cannini: "Re: [OMPI users] Issue with QLogic IBA7322 QDR InfiniBand HCA"</a>
<li><strong>Previous message:</strong> <a href="24026.php">Filippo Spiga: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>In reply to:</strong> <a href="24026.php">Filippo Spiga: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24029.php">Filippo Spiga: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Reply:</strong> <a href="24029.php">Filippo Spiga: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 1, 2014, at 12:13 PM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Ralph, Dear Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've just recompiled the latest Open MPI 1.8. I added &quot;--enable-mca-no-build=btl-usnic&quot; to configure but the message still appear. Here the output of &quot;--mca btl_base_verbose 100&quot; (trunked immediately after the application starts)
</span><br>
<p>Jeff's on vacation, so I'll see if I can help here.
<br>
<p>Try deleting all the files in &quot;$PREFIX/lib/openmpi/&quot;, where &quot;$PREFIX&quot; is the value you passed to configure with &quot;--prefix=&quot;.  If you did not pass a value, then it is &quot;/usr/local&quot;.  Then reinstall (with &quot;make install&quot; in the OMPI build tree).
<br>
<p>What I think is happening is that you still have an &quot;mca_btl_usnic.so&quot; file leftover from the last time you installed OMPI (before passing &quot;--enable-mca-no-build=btl-usnic&quot;).  So OMPI is using this shared library and you get exactly the same problem.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24028.php">Fabricio Cannini: "Re: [OMPI users] Issue with QLogic IBA7322 QDR InfiniBand HCA"</a>
<li><strong>Previous message:</strong> <a href="24026.php">Filippo Spiga: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>In reply to:</strong> <a href="24026.php">Filippo Spiga: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24029.php">Filippo Spiga: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Reply:</strong> <a href="24029.php">Filippo Spiga: "Re: [OMPI users] usNIC point-to-point messaging module"</a>
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
