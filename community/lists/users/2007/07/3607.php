<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 11:54:08 2007" -->
<!-- isoreceived="20070709155408" -->
<!-- sent="Mon, 9 Jul 2007 11:54:00 -0400" -->
<!-- isosent="20070709155400" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.3 spec file" -->
<!-- id="7E3CC538-6BDB-4530-A0E7-B561A2AC9D6C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2453e2900707060905r29e92e9xf43bb7a3a46429c1_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-09 11:54:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3608.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Previous message:</strong> <a href="3606.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>In reply to:</strong> <a href="3595.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3617.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Reply:</strong> <a href="3617.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 6, 2007, at 12:05 PM, Alex Tumanov wrote:
<br>
<p><span class="quotelev1">&gt; Eureka! I managed to get it working despite the incorrect _initial_
</span><br>
<span class="quotelev1">&gt; ./configure invocation. For those interested, here are my compilation
</span><br>
<span class="quotelev1">&gt; options:
</span><br>
<span class="quotelev1">&gt; # cat ompi_build.sh
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rpmbuild --rebuild  -D &quot;configure_options \
</span><br>
<span class="quotelev1">&gt;                         --prefix=%{_prefix} \
</span><br>
<span class="quotelev1">&gt;                         --with-openib=/usr/include/infiniband \
</span><br>
<span class="quotelev1">&gt;                         --with-openib-libdir=/usr/lib64 \
</span><br>
<span class="quotelev1">&gt;                         --sysconfdir=%{_prefix}/etc&quot; \
</span><br>
<span class="quotelev1">&gt;                     -D &quot;install_in_opt 1&quot; \
</span><br>
<span class="quotelev1">&gt;                     -D &quot;_name openmpi_vendor&quot; \
</span><br>
<span class="quotelev1">&gt;                     -D &quot;_defaultdocdir %{_prefix}/share&quot; \
</span><br>
<span class="quotelev1">&gt;                     -D &quot;mflags all&quot; openmpi-1.2.3-1.src.rpm
</span><br>
<p>Is that where the docdir is supposed to be these days?  Shouldn't it  
<br>
actually be $prefix/share/doc/$name-$version?  When I didn't override  
<br>
the docdir but did use install_in_opt, I got the following in the  
<br>
resulting RPM:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/openmpi/1.3a1r15304/share/openmpi/mpif90-wrapper-data.txt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/share/doc/openmpi-1.3a1r15304/INSTALL
<br>
<p>So I'm thinking that the doc files (LICENSE and friends) should be in
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/openmpi/1.3a1r15304/share/openmpi-1.3a1r15304/INSTALL
<br>
<p>Which actually seems kinda weird, since there's an /opt/openmpi/ 
<br>
1.3a1r15304/share/openmpi/ directory.
<br>
<p>I know there were changes to conventional thinking about where docdir  
<br>
should be these days, but I couldn't find any specific references to  
<br>
it in the FHS (<a href="http://www.pathname.com/fhs/pub/fhs-2.3.html">http://www.pathname.com/fhs/pub/fhs-2.3.html</a>), for  
<br>
example.
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
<li><strong>Next message:</strong> <a href="3608.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Previous message:</strong> <a href="3606.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>In reply to:</strong> <a href="3595.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3617.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Reply:</strong> <a href="3617.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
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
