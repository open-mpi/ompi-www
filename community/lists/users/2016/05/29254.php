<?
$subject_val = "Re: [OMPI users] Building vs packaging";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 06:23:46 2016" -->
<!-- isoreceived="20160520102346" -->
<!-- sent="Fri, 20 May 2016 11:23:44 +0100" -->
<!-- isosent="20160520102344" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building vs packaging" -->
<!-- id="878tz52fkf.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="7a2eca7f-e0f8-72a7-3309-87d758ef7d85_at_letai.org.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building vs packaging<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-20 06:23:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29255.php">Dave Love: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>Previous message:</strong> <a href="29253.php">tmishima_at_[hidden]: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in	--map-by"</a>
<li><strong>In reply to:</strong> <a href="29238.php">dani: "Re: [OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dani &lt;dani_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; I don't know about .deb packages, but at least in the rpms there is a
</span><br>
<span class="quotelev1">&gt; post install scriptlet that re-runs ldconfig to ensure the new libs
</span><br>
<span class="quotelev1">&gt; are in the ldconfig cache.
</span><br>
<p>MPI packages following the Fedora guidelines don't do that (and rpmlint
<br>
complains bitterly as a consequence).  They rely on LD_LIBRARY_PATH via
<br>
environment modules, for better or worse:
<br>
<p>&nbsp;&nbsp;$ mock --shell 'rpm -q openmpi; rpm -q --scripts openmpi' 2&gt;/dev/null
<br>
&nbsp;&nbsp;openmpi-1.8.1-1.el6.x86_64
<br>
&nbsp;&nbsp;$ 
<br>
<p>[Using mock for a vanilla environment.]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29255.php">Dave Love: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>Previous message:</strong> <a href="29253.php">tmishima_at_[hidden]: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in	--map-by"</a>
<li><strong>In reply to:</strong> <a href="29238.php">dani: "Re: [OMPI users] Building vs packaging"</a>
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
