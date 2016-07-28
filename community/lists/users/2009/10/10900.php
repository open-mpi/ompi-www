<?
$subject_val = "Re: [OMPI users] Making RPM from source that respects --prefix";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 07:46:48 2009" -->
<!-- isoreceived="20091008114648" -->
<!-- sent="Thu, 8 Oct 2009 07:46:42 -0400" -->
<!-- isosent="20091008114642" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Making RPM from source that respects --prefix" -->
<!-- id="AC3C5140-19CE-4D55-801C-FE9F6571D986_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="509086.98555.qm_at_web57610.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Making RPM from source that respects --prefix<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-08 07:46:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10901.php">Greg Fischer: "[OMPI users] strange performance fluctuations and problems with mpif90-vt"</a>
<li><strong>Previous message:</strong> <a href="10899.php">Hakime Seddik: "[OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
<li><strong>In reply to:</strong> <a href="10895.php">Bill Johnstone: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 7, 2009, at 9:36 PM, Bill Johnstone wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for your responses.  Based on the information you both  
</span><br>
<span class="quotelev1">&gt; provided, I was able to get buildrpm to make the OMPI RPM the way I  
</span><br>
<span class="quotelev1">&gt; wanted.  I ended up having to define _prefix , _mandir , and  
</span><br>
<span class="quotelev1">&gt; _infodir .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ah, yes -- _mandir and _infodir.  Sorry; I should have mentioned  
<br>
those, but I always forget that some distros don't automatically put  
<br>
those dirs under _prefix.  Sigh.
<br>
<p><span class="quotelev1">&gt; Additionally, I found I had to use --define &quot;shell_scripts_basename  
</span><br>
<span class="quotelev1">&gt; mpivars&quot; because without that, when I tried to use mpi-selector, mpi- 
</span><br>
<span class="quotelev1">&gt; selector did not find the installation since it specifically seems  
</span><br>
<span class="quotelev1">&gt; to look for the shell scripts as mpivars.{sh,csh} rather than  
</span><br>
<span class="quotelev1">&gt; mpivars-1.3.3.{sh,csh} as the .spec file builds.  I think the .spec  
</span><br>
<span class="quotelev1">&gt; file should be changed to match what mpi-selector expects.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The intent of putting the version string at the end of the shell  
<br>
script names was to allow them to co-exist with other Open MPI  
<br>
installs in the same tree.  In hindsight, that seems a little silly,  
<br>
because the scripts are installed in bindir -- where you can clearly  
<br>
only have 1 Open MPI installed at a time.  I'll fix.
<br>
<p><span class="quotelev1">&gt; Jeff, it might also be really useful to have a .spec build option to  
</span><br>
<span class="quotelev1">&gt; allow the RPM to register itself as the system default.  I hand- 
</span><br>
<span class="quotelev1">&gt; modified the .spec file to do this.  Please let me know if I should  
</span><br>
<span class="quotelev1">&gt; register a feature request somewhere more formally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sure, that sounds reasonable.  What --define option did you add for  
<br>
it?  Something like --define &quot;mpi_selector_default 1&quot; that causes -- 
<br>
system to be added to the mpi-selector command lines in %post and  
<br>
%preun?
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
<li><strong>Next message:</strong> <a href="10901.php">Greg Fischer: "[OMPI users] strange performance fluctuations and problems with mpif90-vt"</a>
<li><strong>Previous message:</strong> <a href="10899.php">Hakime Seddik: "[OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
<li><strong>In reply to:</strong> <a href="10895.php">Bill Johnstone: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
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
