<?
$subject_val = "Re: [OMPI users] rpmbuild defining opt install path";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 13:13:06 2012" -->
<!-- isoreceived="20120627171306" -->
<!-- sent="Wed, 27 Jun 2012 13:13:01 -0400" -->
<!-- isosent="20120627171301" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rpmbuild defining opt install path" -->
<!-- id="BB1C5668-4412-408B-80AB-2899C5013132_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FEA1A98.4090503_at_byu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 13:13:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19685.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19683.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>In reply to:</strong> <a href="19673.php">Lloyd Brown: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19683.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  I'm not sure why --rebuild is different than not--rebuild.  I'm not an RPM expert, though...
<br>
<p>On Jun 26, 2012, at 4:24 PM, Lloyd Brown wrote:
<br>
<p><span class="quotelev1">&gt; Something else interesting that I just discovered.  If I do this, I have
</span><br>
<span class="quotelev1">&gt; the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rpmbuild --rebuild &lt;various options&gt; -bb path/to/openmpi-1.6-2.src.rpm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, if I do an &quot;rpm -i path/to/openmpi-1.6-2.src.rpm&quot;, and then do
</span><br>
<span class="quotelev1">&gt; very-similar rpmbuild syntax, it puts everything where I want it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rpmbuild &lt;various options&gt; -bb path/to/openmpi-1.6.spec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case, the &quot;&lt;various options&gt;&quot; are all exactly the same.  Clearly
</span><br>
<span class="quotelev1">&gt; there's something I'm missing about the RPM build process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lloyd Brown
</span><br>
<span class="quotelev1">&gt; Systems Administrator
</span><br>
<span class="quotelev1">&gt; Fulton Supercomputing Lab
</span><br>
<span class="quotelev1">&gt; Brigham Young University
</span><br>
<span class="quotelev1">&gt; <a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 06/26/2012 12:40 PM, Lloyd Brown wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Is there an easy way with the .spec file and the rpmbuild command, for
</span><br>
<span class="quotelev2">&gt;&gt; me to override the path the OpenMPI RPM installs into, in /opt?
</span><br>
<span class="quotelev2">&gt;&gt; Basically, I'm already doing something like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; rpmbuild --rebuild --define 'install_in_opt 1' --define '_name
</span><br>
<span class="quotelev2">&gt;&gt; fsl_openmpi_intel' --define 'name fsl_openmpi_intel' ... -bb
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.6-2.src.rpm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For some reason, though, while most of it ends up in
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/opt/fsl_openmpi_intel/1.6&quot;, as I intend, a few files still get put
</span><br>
<span class="quotelev2">&gt;&gt; into &quot;/opt/openmpi/1.6/etc&quot;, and I'm not sure what else I can do to put
</span><br>
<span class="quotelev2">&gt;&gt; it where I want:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # rpm -q -l -p /root/rpmbuild/RPMS/x86_64/fsl_openmpi_intel-1.6-2.x86_64.rpm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/fsl_openmpi_intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/fsl_openmpi_intel/1.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/fsl_openmpi_intel/1.6/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/fsl_openmpi_intel/1.6/bin/mpiCC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/fsl_openmpi_intel/1.6/bin/mpiCC-vt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/fsl_openmpi_intel/1.6/bin/mpic++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/fsl_openmpi_intel/1.6/bin/mpic++-vt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/fsl_openmpi_intel/1.6/bin/mpicc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/fsl_openmpi_intel/1.6/share/vtsetup-data.dtd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/fsl_openmpi_intel/1.6/share/vtsetup-data.xml
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/1.6/etc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/1.6/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/1.6/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/1.6/etc/openmpi-totalview.tcl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/1.6/etc/vt-java-default-filter.spec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/1.6/etc/vtsetup-config.dtd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/1.6/etc/vtsetup-config.xml
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I realize it might not be a good idea in general to override &quot;name&quot; and
</span><br>
<span class="quotelev2">&gt;&gt; &quot;_name&quot; like this, so if there's an easier way, I'd be happy to do it.
</span><br>
<span class="quotelev2">&gt;&gt; I just haven't found anything yet, and haven't yet found the place in
</span><br>
<span class="quotelev2">&gt;&gt; the spec file where it's being set to &quot;/opt/openmpi&quot; again.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We're probably going to end up with at least 3 versions of v1.6 (gcc
</span><br>
<span class="quotelev2">&gt;&gt; compilers, intel compilers, pgi compilers) and possibly a few of a
</span><br>
<span class="quotelev2">&gt;&gt; previous version, so putting everything in /opt/openmpi/VERSION, is a
</span><br>
<span class="quotelev2">&gt;&gt; little problematic.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19685.php">Jeff Squyres: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19683.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>In reply to:</strong> <a href="19673.php">Lloyd Brown: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19683.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
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
