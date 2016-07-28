<?
$subject_val = "Re: [OMPI users] RPM build errors when creating multiple rpms";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 08:32:21 2008" -->
<!-- isoreceived="20080318123221" -->
<!-- sent="Tue, 18 Mar 2008 08:32:13 -0400" -->
<!-- isosent="20080318123213" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RPM build errors when creating multiple rpms" -->
<!-- id="6471B95D-6AB0-4994-860C-FCDB93EBC3D9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1205778863.21502.22.camel_at_livia" -->
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
<strong>Subject:</strong> Re: [OMPI users] RPM build errors when creating multiple rpms<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 08:32:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5231.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>Previous message:</strong> <a href="5229.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>In reply to:</strong> <a href="5212.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5238.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5238.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 17, 2008, at 2:34 PM, Christopher Irving wrote:
<br>
<p><span class="quotelev1">&gt; Well that fixed the errors for the case prefix=/usr but after  
</span><br>
<span class="quotelev1">&gt; looking at
</span><br>
<span class="quotelev1">&gt; the spec file I suspected it would cause a problem if you used the
</span><br>
<span class="quotelev1">&gt; install_in_opt option.  So I tried it and got the following errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    RPM build errors:
</span><br>
<span class="quotelev1">&gt;    Installed (but unpackaged) file(s) found:
</span><br>
<span class="quotelev1">&gt;   /opt/openmpi/1.2.5/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt;   /opt/openmpi/1.2.5/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt;   /opt/openmpi/1.2.5/etc/openmpi-totalview.tcl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just don't think the inclusion of  _sysconfdir needs to be wrapped  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; a condition statement.  It needs to be included in either case,
</span><br>
<span class="quotelev1">&gt; installing to /opt or to /usr, and will already be correctly defined  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; both.  So in the new spec file if you get rid of line 651 - %if !
</span><br>
<span class="quotelev1">&gt; %{sysconfdir_in_prefix} - and the closing endif on 653 it will work  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; both cases.
</span><br>
<p>Hmm.  I'm having problems getting that to fail (even with a 1.2.5  
<br>
tarball and install_in_opt=1).  That %if is there because I was  
<br>
running into errors when rpm would complain that some files were  
<br>
listed twice (e.g., under %{prefix} and %{sysconfdir}).
<br>
<p>I must not be understanding exactly what you're running if I can't  
<br>
reproduce the problem.  Can you specify your exact rpmbuild command?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5231.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>Previous message:</strong> <a href="5229.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>In reply to:</strong> <a href="5212.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5238.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5238.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
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
