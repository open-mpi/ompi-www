<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 12:23:32 2007" -->
<!-- isoreceived="20070710162332" -->
<!-- sent="Tue, 10 Jul 2007 12:23:28 -0400" -->
<!-- isosent="20070710162328" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.3 spec file" -->
<!-- id="2453e2900707100923q18b49255m65295a2375b52471_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7E3CC538-6BDB-4530-A0E7-B561A2AC9D6C_at_cisco.com" -->
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
<strong>From:</strong> Alex Tumanov (<em>atumanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 12:23:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3618.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Previous message:</strong> <a href="3616.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3607.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3620.php">Glenn Carver: "[OMPI users] Connection to HNP lost"</a>
<li><strong>Reply:</strong> <a href="3620.php">Glenn Carver: "[OMPI users] Connection to HNP lost"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/9/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jul 6, 2007, at 12:05 PM, Alex Tumanov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Eureka! I managed to get it working despite the incorrect _initial_
</span><br>
<span class="quotelev2">&gt; &gt; ./configure invocation. For those interested, here are my compilation
</span><br>
<span class="quotelev2">&gt; &gt; options:
</span><br>
<span class="quotelev2">&gt; &gt; # cat ompi_build.sh
</span><br>
<span class="quotelev2">&gt; &gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; rpmbuild --rebuild  -D &quot;configure_options \
</span><br>
<span class="quotelev2">&gt; &gt;                         --prefix=%{_prefix} \
</span><br>
<span class="quotelev2">&gt; &gt;                         --with-openib=/usr/include/infiniband \
</span><br>
<span class="quotelev2">&gt; &gt;                         --with-openib-libdir=/usr/lib64 \
</span><br>
<span class="quotelev2">&gt; &gt;                         --sysconfdir=%{_prefix}/etc&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;                     -D &quot;install_in_opt 1&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;                     -D &quot;_name openmpi_vendor&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;                     -D &quot;_defaultdocdir %{_prefix}/share&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;                     -D &quot;mflags all&quot; openmpi-1.2.3-1.src.rpm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that where the docdir is supposed to be these days?  Shouldn't it
</span><br>
<span class="quotelev1">&gt; actually be $prefix/share/doc/$name-$version?  When I didn't override
</span><br>
<span class="quotelev1">&gt; the docdir but did use install_in_opt, I got the following in the
</span><br>
<span class="quotelev1">&gt; resulting RPM:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /opt/openmpi/1.3a1r15304/share/openmpi/mpif90-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt;      /usr/share/doc/openmpi-1.3a1r15304/INSTALL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I'm thinking that the doc files (LICENSE and friends) should be in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /opt/openmpi/1.3a1r15304/share/openmpi-1.3a1r15304/INSTALL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which actually seems kinda weird, since there's an /opt/openmpi/
</span><br>
<span class="quotelev1">&gt; 1.3a1r15304/share/openmpi/ directory.
</span><br>
<p>Yes, I agree that the result is a little bit awkward-looking, but my
<br>
rationale is when someone wants to have the RPM install in opt,
<br>
chances are, they want _everything_ to go in opt to make sure parts of
<br>
the RPM don't &quot;pollute&quot; anything outside of /opt. So, whatever the
<br>
docdir path is is of lesser importance, I think, than just having it
<br>
somewhere under opt when install_in_opt is requested. IMHO, the ideal
<br>
placement would be for all those files currently going under
<br>
/opt/openmpi/share (including LICENSE &amp; friends and help &amp; wrapper txt
<br>
files) to be placed under common subdirectory, whatever it might be
<br>
called (I would be fine with either %{_prefix}/share/%{_name} or
<br>
%{_prefix}/share/%{_name}-%{_version} ).
<br>
<p>Thanks,
<br>
Alex.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3618.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Previous message:</strong> <a href="3616.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3607.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3620.php">Glenn Carver: "[OMPI users] Connection to HNP lost"</a>
<li><strong>Reply:</strong> <a href="3620.php">Glenn Carver: "[OMPI users] Connection to HNP lost"</a>
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
