<?
$subject_val = "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 13:40:20 2008" -->
<!-- isoreceived="20081110184020" -->
<!-- sent="Mon, 10 Nov 2008 13:40:12 -0500" -->
<!-- isosent="20081110184012" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?" -->
<!-- id="9F42FE93-4D57-4186-926C-5A4BD2A1D43F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="826747.92320.qm_at_web56604.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 13:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7258.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>Previous message:</strong> <a href="7256.php">Ray Muno: "[OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7254.php">Oleg V. Zhylin: "[OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7262.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7262.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 10, 2008, at 8:27 AM, Oleg V. Zhylin wrote:
<br>
<p><span class="quotelev1">&gt;  I would like to to build OpenMPI from openmpi-1.2.8-1.src.rpm. I've  
</span><br>
<span class="quotelev1">&gt; tried plain rpmbuild  and rpmbuild ... --define  
</span><br>
<span class="quotelev1">&gt; 'build_all_in_one_rpm 1' but resulting rpm doesn't conain any *.a  
</span><br>
<span class="quotelev1">&gt; libraries.
</span><br>
<p>Right -- OMPI builds shared libraries by default.
<br>
<p><span class="quotelev1">&gt;  I think this is a problem because I've straced mpif90 and  
</span><br>
<span class="quotelev1">&gt; discovered that ld invoked from gfortran only looks for libmpi_f90.a  
</span><br>
<span class="quotelev1">&gt; in response to -lmpi_f90 inroduced by mpif90.
</span><br>
<p><p>Really?  That's odd -- our mpif90 simply links against -lmpi_f90, not  
<br>
specifically .a or .so.  You can run &quot;mpif90 --showme&quot; to see the  
<br>
command that our wrapper *would* execute.  You can also tweak the  
<br>
flags that OMPI passes to the wrapper compilers; see this FAQ entry:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0</a>
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
<li><strong>Next message:</strong> <a href="7258.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>Previous message:</strong> <a href="7256.php">Ray Muno: "[OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7254.php">Oleg V. Zhylin: "[OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7262.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7262.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
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
