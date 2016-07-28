<?
$subject_val = "Re: [OMPI users] RPM build errors when creating multiple rpms";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 20:56:21 2008" -->
<!-- isoreceived="20080326005621" -->
<!-- sent="Tue, 25 Mar 2008 20:56:11 -0400" -->
<!-- isosent="20080326005611" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RPM build errors when creating multiple rpms" -->
<!-- id="78CE61AB-DC44-4B58-A457-0C929AE774ED_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080319174817.GB8468_at_lbl.gov" -->
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
<strong>Date:</strong> 2008-03-25 20:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5275.php">powernetfreak_at_[hidden]: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>Previous message:</strong> <a href="5273.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5243.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5276.php">Ashley Pittman: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5276.php">Ashley Pittman: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 19, 2008, at 1:48 PM, Michael Jennings wrote:
<br>
<span class="quotelev1">&gt; On Tuesday, 18 March 2008, at 18:18:36 (-0700),
</span><br>
<span class="quotelev1">&gt; Christopher Irving wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well you're half correct.  You're thinking that _prefix is always
</span><br>
<span class="quotelev2">&gt;&gt; defined as /usr.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, actually I'm not. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But in the case were install_in_opt is defined they have redefined
</span><br>
<span class="quotelev2">&gt;&gt; _prefix to be /opt/%{name}/%{version} in which case it is fine for
</span><br>
<span class="quotelev2">&gt;&gt; one of the openmpi rpms to claim that directory with a %dir
</span><br>
<span class="quotelev2">&gt;&gt; directive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Except that you should never do that.  First off, RPMs should never
</span><br>
<span class="quotelev1">&gt; install in /opt by default.
</span><br>
<p>The community Open MPI projects distributes SRPMs which, when built,  
<br>
do not install into /opt by default -- you have to request it  
<br>
specifically.
<br>
<p><span class="quotelev1">&gt; Secondly, the correct way to support
</span><br>
<span class="quotelev1">&gt; installing in /opt is to list the necessary prefixes in the RPM
</span><br>
<span class="quotelev1">&gt; headers so that the --prefix option (or the --relocate option) may be
</span><br>
<span class="quotelev1">&gt; used at install time.
</span><br>
<p>Well, we sorta do this, but not entirely.  :-\  Perhaps I could use  
<br>
some of your advice; I am *not* an RPM expert...
<br>
<p>The overriding theme to the specfile is that Open MPI installs a *LOT*  
<br>
of files (the SVN trunk currently installs 640 files).  The exact list  
<br>
of files also changes over time; I did not want to have to list them  
<br>
in the specfile because they would pretty much be guaranteed to get  
<br>
out of sync with the real set of files that is installed.
<br>
<p>Right now, the specfile treats it differently if we are building &quot;one  
<br>
big RPM&quot; or multiple sub-RPMs.  In the one big RPM case:
<br>
<p>-----
<br>
%files
<br>
%defattr(-, root, root, -)
<br>
%{_prefix}
<br>
# If the sysconfdir is not under the prefix, then list it explicitly.
<br>
%if !%{sysconfdir_in_prefix}
<br>
%{_sysconfdir}
<br>
%endif
<br>
# If %{instal_in_opt}, then we're instaling OMPI to
<br>
# /opt/openmpi/&lt;version&gt;.  But be sure to also explicitly mention
<br>
# /opt/openmpi so that it can be removed by RPM when everything under
<br>
# there is also removed.
<br>
%if %{install_in_opt}
<br>
%dir /opt/%{name}
<br>
%endif
<br>
# If we're installing the modulefile, get that, too
<br>
%if %{install_modulefile}
<br>
%{modulefile_path}
<br>
%endif
<br>
# If we're installing the shell scripts, get those, too
<br>
%if %{install_shell_scripts}
<br>
%{shell_scripts_path}/%{shell_scripts_basename}.sh
<br>
%{shell_scripts_path}/%{shell_scripts_basename}.csh
<br>
%endif
<br>
%doc README INSTALL LICENSE
<br>
-----
<br>
<p>Let's discuss each of these in particular...
<br>
<p>1. We are explicitly listing %{_prefix}, which is what you are  
<br>
suggesting that we should *not* do.  Instead, should I build a file of  
<br>
of filenames (e.g., via a big &quot;find&quot; in %install) and list %files -f  
<br>
&lt;whatever&gt;?
<br>
<p>2. I explicitly list sysconfdir when it's not in the prefix on the  
<br>
argument that it may be in a different tree, and therefore may need to  
<br>
be created (or deleted when there's nothing left in it).
<br>
<p>3. Similar arugment for /opt/{%name} -- it will likely need to be  
<br>
created, and it should be removed when the RPM is installed.
<br>
<p>4. Explicitly list the modulefile; who knows where it will be.
<br>
<p>5. Similar argument for %{shell_scripts_path}.
<br>
<p>Here's what we do in the build-multiple-RPMs case -- let's do the  
<br>
runtime sub RPM first:
<br>
<p>-----
<br>
%files runtime -f runtime.files
<br>
%defattr(-, root, root, -)
<br>
%dir %{_prefix}
<br>
# If the sysconfdir is not under the prefix, then list it explicitly.
<br>
%if !%{sysconfdir_in_prefix}
<br>
%{_sysconfdir}
<br>
%endif
<br>
# If %{instal_in_opt}, then we're instaling OMPI to
<br>
# /opt/openmpi/&lt;version&gt;.  But be sure to also explicitly mention
<br>
# /opt/openmpi so that it can be removed by RPM when everything under
<br>
# there is also removed.  Also list /opt/openmpi/&lt;version&gt;/share so
<br>
# that it can be removed as well.
<br>
%if %{install_in_opt}
<br>
%dir /opt/%{name}
<br>
%dir /opt/%{name}/%{version}/share
<br>
%endif
<br>
# If we're installing the modulefile, get that, too
<br>
%if %{install_modulefile}
<br>
%{modulefile_path}
<br>
%endif
<br>
# If we're installing the shell scripts, get those, too
<br>
%if %{install_shell_scripts}
<br>
%{shell_scripts_path}/%{shell_scripts_basename}.sh
<br>
%{shell_scripts_path}/%{shell_scripts_basename}.csh
<br>
%endif
<br>
%dir %{_bindir}
<br>
%dir %{_libdir}
<br>
%dir %{_libdir}/openmpi
<br>
%doc README INSTALL LICENSE
<br>
%{_pkgdatadir}
<br>
%{_bindir}/mpirun
<br>
%{_bindir}/mpiexec
<br>
%{_bindir}/ompi_info
<br>
%{_bindir}/orterun
<br>
%{_bindir}/orted
<br>
-----
<br>
<p>1. Much the same as the all-in-one RPM, but we have a runtime.files  
<br>
file that lists all OMPI *.so files in it.  However, there are many  
<br>
more files than just the *.so files, so we keep going.
<br>
<p>2. I *%dir* %{_prefix} here, assuming that it won't be /usr.  However,  
<br>
I can see how that might not be true.  It's listed because I wanted it  
<br>
removed if OMPI was the last set of files in that tree to be removed.
<br>
<p>3. Christopher has good points about the %if block about sysconfdir; I  
<br>
think he's right -- the %if block doesn't need to be there  
<br>
(particularly because I used %dir).
<br>
<p>4. Similar rationale to the all-in-one for /opt/%{name}, modulefile,  
<br>
and shell scripts.
<br>
<p>5. Add the %dir's for bin, lib, and lib/openmpi so that they'll be  
<br>
removed when this RPM is uninstalled.
<br>
<p>6. List pkgdatadir and specific executables in the bindir.
<br>
<p>Now for the devel sub-RPM:
<br>
<p>-----
<br>
%files devel -f devel.files
<br>
%defattr(-, root, root, -)
<br>
%{_includedir}
<br>
%{_bindir}/mpicc
<br>
%{_bindir}/mpiCC
<br>
%{_bindir}/mpic++
<br>
%{_bindir}/mpicxx
<br>
%{_bindir}/mpif77
<br>
%{_bindir}/mpif90
<br>
%{_bindir}/opal_wrapper
<br>
-----
<br>
<p>Just list the wrapper compilers and the includedir.
<br>
<p>Finally, the docs sub RPM:
<br>
<p>-----
<br>
# Note that we list the mandir specifically here, because we want all
<br>
# files found in that tree, because rpmbuild may have compressed them
<br>
# (e.g., foo.1.gz or foo.1.bz2) -- and we therefore don't know the
<br>
# exact filenames.
<br>
%files docs
<br>
%defattr(-, root, root, -)
<br>
%{_mandir}
<br>
------
<br>
<p>Just list the top man dir and get everything in it.
<br>
<p>I suspect you might hate much of this because we *do* list directories  
<br>
in many places, for two reasons:
<br>
<p>- so they'll be removed when the OMPI RPM(s) is(are) uninstalled
<br>
- so we don't have to list every single file
<br>
<p>If this is wholly wrong, please feel free to tell me (and suggest a  
<br>
better way); I'd rather have a standards-conformant RPM.
<br>
<p>Thanks!
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
<li><strong>Next message:</strong> <a href="5275.php">powernetfreak_at_[hidden]: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>Previous message:</strong> <a href="5273.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5243.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5276.php">Ashley Pittman: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5276.php">Ashley Pittman: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
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
