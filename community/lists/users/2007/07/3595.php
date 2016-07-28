<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul  6 12:06:01 2007" -->
<!-- isoreceived="20070706160601" -->
<!-- sent="Fri, 6 Jul 2007 12:05:56 -0400" -->
<!-- isosent="20070706160556" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.3 spec file" -->
<!-- id="2453e2900707060905r29e92e9xf43bb7a3a46429c1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2453e2900707051716j26d09ed1wd22755cf2eb51817_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-06 12:05:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3596.php">Neville Clark: "[OMPI users] Can I run MPI and non MPI programs together"</a>
<li><strong>Previous message:</strong> <a href="3594.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>In reply to:</strong> <a href="3589.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3607.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Reply:</strong> <a href="3607.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eureka! I managed to get it working despite the incorrect _initial_
<br>
./configure invocation. For those interested, here are my compilation
<br>
options:
<br>
# cat ompi_build.sh
<br>
#!/bin/sh
<br>
<p>rpmbuild --rebuild  -D &quot;configure_options \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix=%{_prefix} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-openib=/usr/include/infiniband \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-openib-libdir=/usr/lib64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--sysconfdir=%{_prefix}/etc&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-D &quot;install_in_opt 1&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-D &quot;_name openmpi_vendor&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-D &quot;_defaultdocdir %{_prefix}/share&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-D &quot;mflags all&quot; openmpi-1.2.3-1.src.rpm
<br>
<p>Thanks for looking :)
<br>
Alex.
<br>
<p><p>On 7/5/07, Alex Tumanov &lt;atumanov_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Actually, tried compiling the RPM again, and at the very top, noticed
</span><br>
<span class="quotelev1">&gt; that the ./configure is called with --sysconfdir set to /opt/openmpi
</span><br>
<span class="quotelev1">&gt; instead of the new name provided. All other parameters are correct!
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --build=x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev1">&gt; --host=x86_64-redhat-linux-gnu --target=x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev1">&gt; --program-prefix= --prefix=/opt/openmpi_mine/1.2.3
</span><br>
<span class="quotelev1">&gt; --exec-prefix=/opt/openmpi_mine/1.2.3
</span><br>
<span class="quotelev1">&gt; --bindir=/opt/openmpi_mine/1.2.3/bin
</span><br>
<span class="quotelev1">&gt; --sbindir=/opt/openmpi_mine/1.2.3/sbin
</span><br>
<span class="quotelev1">&gt; --sysconfdir=/opt/openmpi/1.2.3/etc
</span><br>
<span class="quotelev1">&gt; --datadir=/opt/openmpi_mine/1.2.3/share
</span><br>
<span class="quotelev1">&gt; --includedir=/opt/openmpi_mine/1.2.3/include
</span><br>
<span class="quotelev1">&gt; --libdir=/opt/openmpi_mine/1.2.3/lib
</span><br>
<span class="quotelev1">&gt; --libexecdir=/opt/openmpi_mine/1.2.3/libexec --localstatedir=/var
</span><br>
<span class="quotelev1">&gt; --sharedstatedir=/opt/openmpi_mine/1.2.3/com
</span><br>
<span class="quotelev1">&gt; --mandir=/opt/openmpi_mine/1.2.3/man --infodir=/usr/share/info
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/openmpi_mine/1.2.3 --with-openib=/usr/include/infiniband
</span><br>
<span class="quotelev1">&gt; --with-openib-libdir=/usr/lib64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3596.php">Neville Clark: "[OMPI users] Can I run MPI and non MPI programs together"</a>
<li><strong>Previous message:</strong> <a href="3594.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>In reply to:</strong> <a href="3589.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3607.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Reply:</strong> <a href="3607.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
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
