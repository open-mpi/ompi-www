<?
$subject_val = "Re: [OMPI users] RPM build errors when creating multiple rpms";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 20:27:13 2008" -->
<!-- isoreceived="20080326002713" -->
<!-- sent="Tue, 25 Mar 2008 20:27:02 -0400" -->
<!-- isosent="20080326002702" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RPM build errors when creating multiple rpms" -->
<!-- id="5B519EA1-6B03-455E-9C9B-1B85D8FD0998_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1205867734.21502.70.camel_at_livia" -->
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
<strong>Date:</strong> 2008-03-25 20:27:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5274.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Previous message:</strong> <a href="5272.php">Jeff Squyres: "Re: [OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings"</a>
<li><strong>In reply to:</strong> <a href="5238.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying; I got caught up in other things...
<br>
<p>On Mar 18, 2008, at 3:15 PM, Christopher Irving wrote:
<br>
<span class="quotelev1">&gt; Okay, I'm no longer sure to which spec file you're referring.
</span><br>
<p>I was referring to the one on the SVN trunk:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/contrib/dist/linux/openmpi.spec">https://svn.open-mpi.org/trac/ompi/browser/trunk/contrib/dist/linux/openmpi.spec</a>
<br>
<p><span class="quotelev1">&gt; For
</span><br>
<span class="quotelev1">&gt; clarity, I'm now using the spec file you pointed me to in your  
</span><br>
<span class="quotelev1">&gt; original
</span><br>
<span class="quotelev1">&gt; reply, from revision 17372.  With this file I no longer get any errors
</span><br>
<span class="quotelev1">&gt; when I run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rpmbuild -bb --define 'build_all_in_one_rpm 0' --define
</span><br>
<span class="quotelev1">&gt; 'configure_options \
</span><br>
<span class="quotelev1">&gt; --with-mip-f90-size=medium --with-tm=/usr/local/lib64' openmpi.spec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is great for me since this is how I want to build my rpms.
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; However
</span><br>
<span class="quotelev1">&gt; if I use the following command line with the new spec file I get the
</span><br>
<span class="quotelev1">&gt; above installed (but unpackaged) errors which is fine for me but bad  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; anyone who wants to install in /opt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rpmbuild -bb      --define 'install_in_opt 1' \
</span><br>
<span class="quotelev1">&gt; --define 'build_all_in_one_rpm 0' --define 'configure_options \
</span><br>
<span class="quotelev1">&gt; --with-mip-f90-size=medium --with-tm=/usr/local/lib64' openmpi.spec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, if you removed line 651 and 653 from the new spec file it works  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; both cases.  You wont get the files listed twice error because  
</span><br>
<span class="quotelev1">&gt; although
</span><br>
<span class="quotelev1">&gt; you have the statement  %dir %{_prefix} on line 649 you never have a
</span><br>
<span class="quotelev1">&gt; line with just %{_prefix}.  So the _prefix directory itself gets
</span><br>
<span class="quotelev1">&gt; included but not all files underneath it.  You've handled that by
</span><br>
<span class="quotelev1">&gt; explicitly including all files and sub directories on lines 672-681  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; in the runtime.file.
</span><br>
<p>Ah, I see now.  Thanks!
<br>
<p>I'll make this change, but pending the other replies on this thread...
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
<li><strong>Next message:</strong> <a href="5274.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Previous message:</strong> <a href="5272.php">Jeff Squyres: "Re: [OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings"</a>
<li><strong>In reply to:</strong> <a href="5238.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
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
