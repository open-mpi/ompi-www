<?
$subject_val = "Re: [OMPI users] Open MPI and multiple Torque versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 11:26:53 2014" -->
<!-- isoreceived="20140127162653" -->
<!-- sent="Mon, 27 Jan 2014 11:26:52 -0500" -->
<!-- isosent="20140127162652" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and multiple Torque versions" -->
<!-- id="52E688CC.2060709_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="964594274.605073.1390828449502.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI and multiple Torque versions<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 11:26:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23478.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Previous message:</strong> <a href="23476.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Specific use case - very very new to MPI"</a>
<li><strong>In reply to:</strong> <a href="23466.php">Christoph Niethammer: "[OMPI users] Open MPI and multiple Torque versions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/27/2014 08:14 AM, Christoph Niethammer wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am maintaining several Open MPI installations from the 1.6 and 1.7 series and different compilers.
</span><br>
<span class="quotelev1">&gt; Open MPI is build with torque support and shared and static bindings.
</span><br>
<span class="quotelev1">&gt; Different Torque installations are present and managed via the modules environment.
</span><br>
<span class="quotelev1">&gt; Would it be possible to switch the torque version by modification of PATH and LD_LIBRARY_PATH or will I have to face problems in this case?
</span><br>
<span class="quotelev1">&gt; Grepping through the Open MPI installations for torque used during installation gave me some hits in binaries like mpirun or the static libs.
</span><br>
<span class="quotelev1">&gt; I would appreciate any hints.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>Hi Christoph
<br>
<p>We (and a lot of people out there) keep several OpenMPI (OMPI)
<br>
builds from different OMPI versions and using different compilers.
<br>
We also build them with Torque support.
<br>
<p>As you noticed, the main issue is to keep a clean environment setup,
<br>
because mixing those versions up at compilation time and/or run time
<br>
is likely/sure to cause trouble.
<br>
<p>A very effective way to switch environment variables is to use the
<br>
&quot;Environment Modules&quot; package, which we do use here:
<br>
<p><a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>
<br>
<p>You can find it as RPM or equivalent package in most Linux distributions.
<br>
<p>However, this takes some administrative work, as you need to write
<br>
a &quot;module file&quot; (in a dialect of Tcl/Tk) for each compiler,
<br>
each OMPI build, etc.
<br>
Some compilers (PGI, Intel) even provide some template environment
<br>
modules in their distribution.
<br>
I think using environment modules pays off if you have
<br>
many different environments to deal with, many users, etc.
<br>
<p>If your cluster is small, or if you can setup the environment for
<br>
each user, this could be done by setting up consistent PATH and
<br>
LD_LIBRARY_PATH for your OMPI installations (and for the respective
<br>
compilers) for each user in their initialization files (.bashrc, 
<br>
.tcshrc, etc).  This is less flexible, and more error-prone,
<br>
as it requires editing the
<br>
intialization files every time you want to change the environment,
<br>
but also works.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23478.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>Previous message:</strong> <a href="23476.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Specific use case - very very new to MPI"</a>
<li><strong>In reply to:</strong> <a href="23466.php">Christoph Niethammer: "[OMPI users] Open MPI and multiple Torque versions"</a>
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
