<?
$subject_val = "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 05:08:53 2009" -->
<!-- isoreceived="20090225100853" -->
<!-- sent="Wed, 25 Feb 2009 15:38:34 +0530" -->
<!-- isosent="20090225100834" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer" -->
<!-- id="1235556514.6647.4.camel_at_jnysal" -->
<!-- inreplyto="84713330-4FF7-4A38-989C-5F046B9DF978_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer<br>
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-25 05:08:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8195.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
<li><strong>Previous message:</strong> <a href="8193.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
<li><strong>In reply to:</strong> <a href="8186.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8551.php">Olaf Lenz: "[OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when	usingVampirServer)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-02-24 at 13:30 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; - Get Python to give you the possibility of opening dependent  
</span><br>
<span class="quotelev1">&gt; libraries in the global scope.  This may be somewhat controversial;  
</span><br>
<span class="quotelev1">&gt; there are good reasons to open plugins in private scopes.  But I have  
</span><br>
<span class="quotelev1">&gt; to imagine that OMPI is not the only python extension out there that  
</span><br>
<span class="quotelev1">&gt; wants to open plugins of its own; other such projects should be  
</span><br>
<span class="quotelev1">&gt; running into similar issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Can you check if the following works:
<br>
import dl
<br>
import sys
<br>
flags = sys.getdlopenflags()
<br>
sys.setdlopenflags(flags | dl.RTLD_GLOBAL)
<br>
import minimpi
<br>
<p><p>--Nysal
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8195.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
<li><strong>Previous message:</strong> <a href="8193.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
<li><strong>In reply to:</strong> <a href="8186.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8551.php">Olaf Lenz: "[OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when	usingVampirServer)"</a>
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
