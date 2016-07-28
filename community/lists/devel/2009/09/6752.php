<?
$subject_val = "Re: [OMPI devel] suffix flag problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 20:49:35 2009" -->
<!-- isoreceived="20090904004935" -->
<!-- sent="Fri, 4 Sep 2009 10:49:23 +1000 (EST)" -->
<!-- isosent="20090904004923" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] suffix flag problems" -->
<!-- id="1608388221.2352901252025363392.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4AA01113.4010602_at_marine.rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] suffix flag problems<br>
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-03 20:49:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6753.php">Jeff Squyres: "Re: [OMPI devel] Failed datatype test"</a>
<li><strong>Previous message:</strong> <a href="6751.php">Graham, Richard L.: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6750.php">David Robertson: "[OMPI devel] suffix flag problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6754.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;David Robertson&quot; &lt;robertson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<p>Hiya,
<br>
<p><span class="quotelev1">&gt; We use both the PGI and Intel compilers over an
</span><br>
<span class="quotelev1">&gt; Infiniband cluster and I was trying to find a way
</span><br>
<span class="quotelev1">&gt; to have both orteruns in the path (in separate
</span><br>
<span class="quotelev1">&gt; directories) at the same time.
</span><br>
<p>Not a solution, but what we do here is to arrange our
<br>
installs into separate locations thus:
<br>
<p>/usr/local/openmpi-gcc/$version
<br>
/usr/local/openmpi-intel/$version
<br>
/usr/local/openmpi-pgi/$version
<br>
<p>and then use Modules (modules.sf.net) to let users easily
<br>
select which they want to use, so to load the default OMPI
<br>
for the Intel compilers they do:
<br>
<p>module load openmpi-intel
<br>
<p>We use symlinks for the module files to a generic one which
<br>
uses some lrange and split in tcl to derive the application
<br>
and compiler from the name of the module and loads the
<br>
compiler module if it's not already been loaded.
<br>
<p>Users load a &quot;vpac&quot; module from their profile/cshrc at
<br>
login time and that pulls in our suggested defaults for
<br>
that cluster.
<br>
<p>Makes life a lot easier for our users (and us!).
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
Christopher Samuel - (03) 9925 4751 - Systems Manager
 The Victorian Partnership for Advanced Computing
 P.O. Box 201, Carlton South, VIC 3053, Australia
VPAC is a not-for-profit Registered Research Agency
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6753.php">Jeff Squyres: "Re: [OMPI devel] Failed datatype test"</a>
<li><strong>Previous message:</strong> <a href="6751.php">Graham, Richard L.: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6750.php">David Robertson: "[OMPI devel] suffix flag problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6754.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
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
