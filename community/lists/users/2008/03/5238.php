<?
$subject_val = "Re: [OMPI users] RPM build errors when creating multiple rpms";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 15:17:29 2008" -->
<!-- isoreceived="20080318191729" -->
<!-- sent="Tue, 18 Mar 2008 12:15:34 -0700" -->
<!-- isosent="20080318191534" -->
<!-- name="Christopher Irving" -->
<!-- email="cirving_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RPM build errors when creating multiple rpms" -->
<!-- id="1205867734.21502.70.camel_at_livia" -->
<!-- inreplyto="6471B95D-6AB0-4994-860C-FCDB93EBC3D9_at_cisco.com" -->
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
<strong>From:</strong> Christopher Irving (<em>cirving_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 15:15:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5239.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Previous message:</strong> <a href="5237.php">Andreas Sch&#228;fer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>In reply to:</strong> <a href="5230.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5239.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5239.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5273.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2008-03-18 at 08:32 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 17, 2008, at 2:34 PM, Christopher Irving wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Well that fixed the errors for the case prefix=/usr but after  
</span><br>
<span class="quotelev2">&gt; &gt; looking at
</span><br>
<span class="quotelev2">&gt; &gt; the spec file I suspected it would cause a problem if you used the
</span><br>
<span class="quotelev2">&gt; &gt; install_in_opt option.  So I tried it and got the following errors:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    RPM build errors:
</span><br>
<span class="quotelev2">&gt; &gt;    Installed (but unpackaged) file(s) found:
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi/1.2.5/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi/1.2.5/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/openmpi/1.2.5/etc/openmpi-totalview.tcl
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I just don't think the inclusion of  _sysconfdir needs to be wrapped  
</span><br>
<span class="quotelev2">&gt; &gt; in
</span><br>
<span class="quotelev2">&gt; &gt; a condition statement.  It needs to be included in either case,
</span><br>
<span class="quotelev2">&gt; &gt; installing to /opt or to /usr, and will already be correctly defined  
</span><br>
<span class="quotelev2">&gt; &gt; for
</span><br>
<span class="quotelev2">&gt; &gt; both.  So in the new spec file if you get rid of line 651 - %if !
</span><br>
<span class="quotelev2">&gt; &gt; %{sysconfdir_in_prefix} - and the closing endif on 653 it will work  
</span><br>
<span class="quotelev2">&gt; &gt; for
</span><br>
<span class="quotelev2">&gt; &gt; both cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm.  I'm having problems getting that to fail (even with a 1.2.5  
</span><br>
<span class="quotelev1">&gt; tarball and install_in_opt=1).  That %if is there because I was  
</span><br>
<span class="quotelev1">&gt; running into errors when rpm would complain that some files were  
</span><br>
<span class="quotelev1">&gt; listed twice (e.g., under %{prefix} and %{sysconfdir}).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I must not be understanding exactly what you're running if I can't  
</span><br>
<span class="quotelev1">&gt; reproduce the problem.  Can you specify your exact rpmbuild command?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Okay, I'm no longer sure to which spec file you're referring.  For
<br>
clarity, I'm now using the spec file you pointed me to in your original
<br>
reply, from revision 17372.  With this file I no longer get any errors
<br>
when I run:
<br>
<p>rpmbuild -bb --define 'build_all_in_one_rpm 0' --define
<br>
'configure_options \
<br>
--with-mip-f90-size=medium --with-tm=/usr/local/lib64' openmpi.spec
<br>
<p>This is great for me since this is how I want to build my rpms.  However
<br>
if I use the following command line with the new spec file I get the
<br>
above installed (but unpackaged) errors which is fine for me but bad for
<br>
anyone who wants to install in /opt.  
<br>
<p>rpmbuild -bb      --define 'install_in_opt 1' \          
<br>
--define 'build_all_in_one_rpm 0' --define 'configure_options \
<br>
--with-mip-f90-size=medium --with-tm=/usr/local/lib64' openmpi.spec
<br>
<p>Now, if you removed line 651 and 653 from the new spec file it works for
<br>
both cases.  You wont get the files listed twice error because although
<br>
you have the statement  %dir %{_prefix} on line 649 you never have a
<br>
line with just %{_prefix}.  So the _prefix directory itself gets
<br>
included but not all files underneath it.  You've handled that by
<br>
explicitly including all files and sub directories on lines 672-681 and
<br>
in the runtime.file.      
<br>
<p>Going back to the original spec file, the one that came with the source
<br>
RPM, the problems where kind of reversed.  Building with the
<br>
'install_in_opt 1' option worked just fine but when it wasn't set you
<br>
got the files listed twice error as I described in my original message.
<br>
<p>-Christopher
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5239.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Previous message:</strong> <a href="5237.php">Andreas Sch&#228;fer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>In reply to:</strong> <a href="5230.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5239.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5239.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5273.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
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
