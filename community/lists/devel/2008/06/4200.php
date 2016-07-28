<?
$subject_val = "[OMPI devel] PML selection logic";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 12:36:53 2008" -->
<!-- isoreceived="20080623163653" -->
<!-- sent="Mon, 23 Jun 2008 10:36:39 -0600" -->
<!-- isosent="20080623163639" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] PML selection logic" -->
<!-- id="C4852D37.DF32%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] PML selection logic<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 12:36:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4201.php">Tim Mattox: "Re: [OMPI devel] ompi_ignore dr pml?"</a>
<li><strong>Previous message:</strong> <a href="4199.php">Jeff Squyres: "[OMPI devel] ompi_ignore dr pml?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4202.php">Aurélien Bouteiller: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Reply:</strong> <a href="4202.php">Aurélien Bouteiller: "Re: [OMPI devel] PML selection logic"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>I've been doing further research into the modex and came across something I
<br>
don't fully understand. It seems we have each process insert into the modex
<br>
the name of the PML module that it selected. Once the modex has exchanged
<br>
that info, it then loops across all procs in the job to check their
<br>
selection, and aborts if any proc picked a different PML module.
<br>
<p>All well and good...assuming that procs actually -can- choose different PML
<br>
modules and hence create an &quot;abort&quot; scenario. However, if I look inside the
<br>
PML's at their selection logic, I find that a proc can ONLY pick a module
<br>
other than ob1 if:
<br>
<p>1. the user specifies the module to use via -mca pml xyz or by using a
<br>
module specific mca param to adjust its priority. In this case, since the
<br>
mca param is propagated, ALL procs have no choice but to pick that same
<br>
module, so that can't cause us to abort (we will have already returned an
<br>
error and aborted if the specified module can't run).
<br>
<p>2. the pml/cm module detects that an MTL module was selected, and that it is
<br>
other than &quot;psm&quot;. In this case, the CM module will be selected because its
<br>
default priority is higher than that of OB1.
<br>
<p>In looking deeper into the MTL selection logic, it appears to me that you
<br>
either have the required capability or you don't. I can see that in some
<br>
environments (e.g., rsh across unmanaged collections of machines), it might
<br>
be possible for someone to launch across a set of machines where some do and
<br>
some don't have the required support. However, in all other cases, this will
<br>
be homogeneous across the system.
<br>
<p>Given this analysis (and someone more familiar with the PML should feel free
<br>
to confirm or correct it), it seems to me that this could be streamlined via
<br>
one or more means:
<br>
<p>1. at the most, we could have rank=0 add the PML module name to the modex,
<br>
and other procs simply check it against their own and return an error if
<br>
they differ. This accomplishes the identical functionality to what we have
<br>
today, but with much less info in the modex.
<br>
<p>2. we could eliminate this info from the modex altogether by requiring the
<br>
user to specify the PML module if they want something other than the default
<br>
OB1. In this case, there can be no confusion over what each proc is to use.
<br>
The CM module will attempt to init the MTL - if it cannot do so, then the
<br>
job will return the correct error and tell the user that CM/MTL support is
<br>
unavailable.
<br>
<p>3. we could again eliminate the info by not inserting it into the modex if
<br>
(a) the default PML module is selected, or (b) the user specified the PML
<br>
module to be used. In the first case, each proc can simply check to see if
<br>
they picked the default - if not, then we can insert the info to indicate
<br>
the difference. Thus, in the &quot;standard&quot; case, no info will be inserted.
<br>
<p>In the second case, we will already get an error if the specified PML module
<br>
could not be used. Hence, the modex check provides no additional info or
<br>
value.
<br>
<p>I understand the motivation to support automation. However, in this case,
<br>
the automation actually doesn't seem to buy us very much, and it isn't
<br>
coming &quot;free&quot;. So perhaps some change in how this is done would be in order?
<br>
<p>Ralph
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4201.php">Tim Mattox: "Re: [OMPI devel] ompi_ignore dr pml?"</a>
<li><strong>Previous message:</strong> <a href="4199.php">Jeff Squyres: "[OMPI devel] ompi_ignore dr pml?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4202.php">Aurélien Bouteiller: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Reply:</strong> <a href="4202.php">Aurélien Bouteiller: "Re: [OMPI devel] PML selection logic"</a>
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
