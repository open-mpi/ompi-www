<?
$subject_val = "[OMPI users] rpmbuild defining opt install path";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 26 14:41:23 2012" -->
<!-- isoreceived="20120626184123" -->
<!-- sent="Tue, 26 Jun 2012 12:40:51 -0600" -->
<!-- isosent="20120626184051" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="[OMPI users] rpmbuild defining opt install path" -->
<!-- id="4FEA0233.8000708_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] rpmbuild defining opt install path<br>
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-26 14:40:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19673.php">Lloyd Brown: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Previous message:</strong> <a href="19671.php">Dr AD: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19673.php">Lloyd Brown: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Reply:</strong> <a href="19673.php">Lloyd Brown: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Reply:</strong> <a href="19683.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there an easy way with the .spec file and the rpmbuild command, for
<br>
me to override the path the OpenMPI RPM installs into, in /opt?
<br>
Basically, I'm already doing something like this:
<br>
<p>rpmbuild --rebuild --define 'install_in_opt 1' --define '_name
<br>
fsl_openmpi_intel' --define 'name fsl_openmpi_intel' ... -bb
<br>
openmpi-1.6-2.src.rpm
<br>
<p>For some reason, though, while most of it ends up in
<br>
&quot;/opt/fsl_openmpi_intel/1.6&quot;, as I intend, a few files still get put
<br>
into &quot;/opt/openmpi/1.6/etc&quot;, and I'm not sure what else I can do to put
<br>
it where I want:
<br>
<p><span class="quotelev1">&gt; # rpm -q -l -p /root/rpmbuild/RPMS/x86_64/fsl_openmpi_intel-1.6-2.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; /opt/fsl_openmpi_intel
</span><br>
<span class="quotelev1">&gt; /opt/fsl_openmpi_intel/1.6
</span><br>
<span class="quotelev1">&gt; /opt/fsl_openmpi_intel/1.6/bin
</span><br>
<span class="quotelev1">&gt; /opt/fsl_openmpi_intel/1.6/bin/mpiCC
</span><br>
<span class="quotelev1">&gt; /opt/fsl_openmpi_intel/1.6/bin/mpiCC-vt
</span><br>
<span class="quotelev1">&gt; /opt/fsl_openmpi_intel/1.6/bin/mpic++
</span><br>
<span class="quotelev1">&gt; /opt/fsl_openmpi_intel/1.6/bin/mpic++-vt
</span><br>
<span class="quotelev1">&gt; /opt/fsl_openmpi_intel/1.6/bin/mpicc
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; /opt/fsl_openmpi_intel/1.6/share/vtsetup-data.dtd
</span><br>
<span class="quotelev1">&gt; /opt/fsl_openmpi_intel/1.6/share/vtsetup-data.xml
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.6/etc
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.6/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.6/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.6/etc/openmpi-totalview.tcl
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.6/etc/vt-java-default-filter.spec
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.6/etc/vtsetup-config.dtd
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.6/etc/vtsetup-config.xml
</span><br>
<p>I realize it might not be a good idea in general to override &quot;name&quot; and
<br>
&quot;_name&quot; like this, so if there's an easier way, I'd be happy to do it.
<br>
I just haven't found anything yet, and haven't yet found the place in
<br>
the spec file where it's being set to &quot;/opt/openmpi&quot; again.
<br>
<p>We're probably going to end up with at least 3 versions of v1.6 (gcc
<br>
compilers, intel compilers, pgi compilers) and possibly a few of a
<br>
previous version, so putting everything in /opt/openmpi/VERSION, is a
<br>
little problematic.
<br>
<p>Thanks,
<br>
<pre>
-- 
Lloyd Brown
Systems Administrator
Fulton Supercomputing Lab
Brigham Young University
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19673.php">Lloyd Brown: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Previous message:</strong> <a href="19671.php">Dr AD: "Re: [OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19673.php">Lloyd Brown: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Reply:</strong> <a href="19673.php">Lloyd Brown: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Reply:</strong> <a href="19683.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
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
