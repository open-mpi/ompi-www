<?
$subject_val = "Re: [OMPI users] usNIC point-to-point messaging module";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 13:57:16 2014" -->
<!-- isoreceived="20140402175716" -->
<!-- sent="Wed, 2 Apr 2014 18:57:12 +0100" -->
<!-- isosent="20140402175712" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] usNIC point-to-point messaging module" -->
<!-- id="87A49D6B-B1D4-4133-BC31-18654415A224_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E82C67CE-046D-4AF4-8BF2-2A7BC3EA90F6_at_cisco.com" -->
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
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-02 13:57:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24030.php">Dave Goodell (dgoodell): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Previous message:</strong> <a href="24028.php">Fabricio Cannini: "Re: [OMPI users] Issue with QLogic IBA7322 QDR InfiniBand HCA"</a>
<li><strong>In reply to:</strong> <a href="24027.php">Dave Goodell (dgoodell): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24030.php">Dave Goodell (dgoodell): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Reply:</strong> <a href="24030.php">Dave Goodell (dgoodell): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Dave,
<br>
<p>your suggestion worked, the file was there ar delete the directory and rebuild everything solved the issue. I still do not understand why this keeps appearing...
<br>
<p>srun: cluster configuration lacks support for cpu binding
<br>
<p>Any clue?
<br>
<p>F
<br>
<p><p>On Apr 1, 2014, at 9:08 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 1, 2014, at 12:13 PM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Ralph, Dear Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've just recompiled the latest Open MPI 1.8. I added &quot;--enable-mca-no-build=btl-usnic&quot; to configure but the message still appear. Here the output of &quot;--mca btl_base_verbose 100&quot; (trunked immediately after the application starts)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff's on vacation, so I'll see if I can help here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try deleting all the files in &quot;$PREFIX/lib/openmpi/&quot;, where &quot;$PREFIX&quot; is the value you passed to configure with &quot;--prefix=&quot;.  If you did not pass a value, then it is &quot;/usr/local&quot;.  Then reinstall (with &quot;make install&quot; in the OMPI build tree).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I think is happening is that you still have an &quot;mca_btl_usnic.so&quot; file leftover from the last time you installed OMPI (before passing &quot;--enable-mca-no-build=btl-usnic&quot;).  So OMPI is using this shared library and you get exactly the same problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
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
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
&#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24030.php">Dave Goodell (dgoodell): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Previous message:</strong> <a href="24028.php">Fabricio Cannini: "Re: [OMPI users] Issue with QLogic IBA7322 QDR InfiniBand HCA"</a>
<li><strong>In reply to:</strong> <a href="24027.php">Dave Goodell (dgoodell): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24030.php">Dave Goodell (dgoodell): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Reply:</strong> <a href="24030.php">Dave Goodell (dgoodell): "Re: [OMPI users] usNIC point-to-point messaging module"</a>
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
