<?
$subject_val = "Re: [OMPI users] rpmbuild defining opt install path";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 26 16:25:17 2012" -->
<!-- isoreceived="20120626202517" -->
<!-- sent="Tue, 26 Jun 2012 14:24:56 -0600" -->
<!-- isosent="20120626202456" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rpmbuild defining opt install path" -->
<!-- id="4FEA1A98.4090503_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FEA0233.8000708_at_byu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] rpmbuild defining opt install path<br>
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-26 16:24:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19674.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19672.php">Lloyd Brown: "[OMPI users] rpmbuild defining opt install path"</a>
<li><strong>In reply to:</strong> <a href="19672.php">Lloyd Brown: "[OMPI users] rpmbuild defining opt install path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19684.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Reply:</strong> <a href="19684.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something else interesting that I just discovered.  If I do this, I have
<br>
the problem:
<br>
<p>rpmbuild --rebuild &lt;various options&gt; -bb path/to/openmpi-1.6-2.src.rpm
<br>
<p>However, if I do an &quot;rpm -i path/to/openmpi-1.6-2.src.rpm&quot;, and then do
<br>
very-similar rpmbuild syntax, it puts everything where I want it:
<br>
<p>rpmbuild &lt;various options&gt; -bb path/to/openmpi-1.6.spec
<br>
<p>In this case, the &quot;&lt;various options&gt;&quot; are all exactly the same.  Clearly
<br>
there's something I'm missing about the RPM build process.
<br>
<p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 06/26/2012 12:40 PM, Lloyd Brown wrote:
<br>
<span class="quotelev1">&gt; Is there an easy way with the .spec file and the rpmbuild command, for
</span><br>
<span class="quotelev1">&gt; me to override the path the OpenMPI RPM installs into, in /opt?
</span><br>
<span class="quotelev1">&gt; Basically, I'm already doing something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rpmbuild --rebuild --define 'install_in_opt 1' --define '_name
</span><br>
<span class="quotelev1">&gt; fsl_openmpi_intel' --define 'name fsl_openmpi_intel' ... -bb
</span><br>
<span class="quotelev1">&gt; openmpi-1.6-2.src.rpm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For some reason, though, while most of it ends up in
</span><br>
<span class="quotelev1">&gt; &quot;/opt/fsl_openmpi_intel/1.6&quot;, as I intend, a few files still get put
</span><br>
<span class="quotelev1">&gt; into &quot;/opt/openmpi/1.6/etc&quot;, and I'm not sure what else I can do to put
</span><br>
<span class="quotelev1">&gt; it where I want:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # rpm -q -l -p /root/rpmbuild/RPMS/x86_64/fsl_openmpi_intel-1.6-2.x86_64.rpm
</span><br>
<span class="quotelev2">&gt;&gt; /opt/fsl_openmpi_intel
</span><br>
<span class="quotelev2">&gt;&gt; /opt/fsl_openmpi_intel/1.6
</span><br>
<span class="quotelev2">&gt;&gt; /opt/fsl_openmpi_intel/1.6/bin
</span><br>
<span class="quotelev2">&gt;&gt; /opt/fsl_openmpi_intel/1.6/bin/mpiCC
</span><br>
<span class="quotelev2">&gt;&gt; /opt/fsl_openmpi_intel/1.6/bin/mpiCC-vt
</span><br>
<span class="quotelev2">&gt;&gt; /opt/fsl_openmpi_intel/1.6/bin/mpic++
</span><br>
<span class="quotelev2">&gt;&gt; /opt/fsl_openmpi_intel/1.6/bin/mpic++-vt
</span><br>
<span class="quotelev2">&gt;&gt; /opt/fsl_openmpi_intel/1.6/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; /opt/fsl_openmpi_intel/1.6/share/vtsetup-data.dtd
</span><br>
<span class="quotelev2">&gt;&gt; /opt/fsl_openmpi_intel/1.6/share/vtsetup-data.xml
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/1.6/etc
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/1.6/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/1.6/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/1.6/etc/openmpi-totalview.tcl
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/1.6/etc/vt-java-default-filter.spec
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/1.6/etc/vtsetup-config.dtd
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/1.6/etc/vtsetup-config.xml
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I realize it might not be a good idea in general to override &quot;name&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;_name&quot; like this, so if there's an easier way, I'd be happy to do it.
</span><br>
<span class="quotelev1">&gt; I just haven't found anything yet, and haven't yet found the place in
</span><br>
<span class="quotelev1">&gt; the spec file where it's being set to &quot;/opt/openmpi&quot; again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We're probably going to end up with at least 3 versions of v1.6 (gcc
</span><br>
<span class="quotelev1">&gt; compilers, intel compilers, pgi compilers) and possibly a few of a
</span><br>
<span class="quotelev1">&gt; previous version, so putting everything in /opt/openmpi/VERSION, is a
</span><br>
<span class="quotelev1">&gt; little problematic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19674.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19672.php">Lloyd Brown: "[OMPI users] rpmbuild defining opt install path"</a>
<li><strong>In reply to:</strong> <a href="19672.php">Lloyd Brown: "[OMPI users] rpmbuild defining opt install path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19684.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>Reply:</strong> <a href="19684.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
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
