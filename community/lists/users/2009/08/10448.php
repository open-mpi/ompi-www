<?
$subject_val = "Re: [OMPI users] problem with installing openmp 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 20 16:32:03 2009" -->
<!-- isoreceived="20090820203203" -->
<!-- sent="Thu, 20 Aug 2009 16:31:58 -0400" -->
<!-- isosent="20090820203158" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with installing openmp 1.3" -->
<!-- id="1EAABD42-C58C-45DE-9F60-5907DFB1F391_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="12351.20003.qm_at_web28313.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with installing openmp 1.3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-20 16:31:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10449.php">Paul Romano: "[OMPI users] MPI_ACCUMULATE with derived datatype"</a>
<li><strong>Previous message:</strong> <a href="10447.php">Jean Potsam: "[OMPI users] problem with installing openmp 1.3"</a>
<li><strong>In reply to:</strong> <a href="10447.php">Jean Potsam: "[OMPI users] problem with installing openmp 1.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 20, 2009, at 3:37 PM, Jean Potsam wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;              I tried to install openmpi 1.3 in my home directory on  
</span><br>
<span class="quotelev1">&gt; one of the nodes of our cluster. I have adminsitrative rights and is  
</span><br>
<span class="quotelev1">&gt; installing as a superuser. The configure phase is fine. The make all  
</span><br>
<span class="quotelev1">&gt; install part give me the following problems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #######################################
</span><br>
<span class="quotelev1">&gt; test -z &quot;/home/jean/openmpi/share/openmpi&quot; || /bin/mkdir -p &quot;/home/ 
</span><br>
<span class="quotelev1">&gt; jean/openmpi/share/openmpi&quot;
</span><br>
<span class="quotelev1">&gt;  /usr/bin/install -c -m 644 'base/help-orte-odls-base.txt' '/home/ 
</span><br>
<span class="quotelev1">&gt; jean/openmpi/share/openmpi/help-orte-odls-base.txt'
</span><br>
<span class="quotelev1">&gt; /usr/bin/install: accessing `/home/jean/openmpi/share/openmpi/help- 
</span><br>
<span class="quotelev1">&gt; orte-odls-base.txt': Transport endpoint is not connected
</span><br>
<p>It looks like you're having a problem with your filesystem.
<br>
<p>Are you about to write this file (/home/jean/openmpi/share/openmpi/ 
<br>
help-orte-odls-base.txt) and also read the source file  
<br>
($your_install_dir/orte/mca/odls/base/help-orte-odls-base.txt)?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10449.php">Paul Romano: "[OMPI users] MPI_ACCUMULATE with derived datatype"</a>
<li><strong>Previous message:</strong> <a href="10447.php">Jean Potsam: "[OMPI users] problem with installing openmp 1.3"</a>
<li><strong>In reply to:</strong> <a href="10447.php">Jean Potsam: "[OMPI users] problem with installing openmp 1.3"</a>
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
