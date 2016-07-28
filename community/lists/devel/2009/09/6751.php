<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 19:29:19 2009" -->
<!-- isoreceived="20090903232919" -->
<!-- sent="Thu, 03 Sep 2009 19:29:08 -0400" -->
<!-- isosent="20090903232908" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="C6C5C984.3B9EB%rlgraham_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1251969839.2636.161.camel_at_frecb000730.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters<br>
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-03 19:29:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6752.php">Chris Samuel: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Previous message:</strong> <a href="6750.php">David Robertson: "[OMPI devel] suffix flag problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6758.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6758.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Maybe reply:</strong> <a href="6760.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Maybe reply:</strong> <a href="6794.php">Chris Samuel: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What happens if $sysconfdir/openmpi-priv-mca-params.conf is missing ?
<br>
<p>Can the file name ( openmpi-priv-mca-params.conf ) also be configurable ?
<br>
<p>Rich
<br>
<p><p>On 9/3/09 5:23 AM, &quot;Nadia Derbey&quot; &lt;Nadia.Derbey_at_[hidden]&gt; wrote:
<br>
<p><p><p>What: Define a way for the system administrator to prevent users from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;overwriting the default system-wide MCA parameters settings.
<br>
<p>Why: Letting the user completely free of changing any MCA parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that has been defined on a system-wide basis may sometimes be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;undesirable.
<br>
<p>Where: code can be found at
<br>
<a href="http://derbeyn&#64;bitbucket.org/derbeyn/opal-ro-mca-params/">http://derbeyn&#64;bitbucket.org/derbeyn/opal-ro-mca-params/</a>
<br>
<p>-------------------------------------------------------------------
<br>
<p>Description:
<br>
<p><p>Letting the user completely free of changing any parameter that has been
<br>
defined on a system-wide basis may sometimes be undesirable. For
<br>
example, on a node with multiple TCP interfaces, the system
<br>
administrator may for some reason want to restrict MPI applications to a
<br>
fixed subset of these TCP interfaces.
<br>
<p>Today, there is no way for the system administrator to prevent users
<br>
from overwriting the default system-wide settings: even if he has
<br>
excluded eth0 from the interfaces usable by an MPI application, he
<br>
cannot prevent any user from explicitly using that excluded interface.
<br>
<p>The purpose of this feature is to provide a new &quot;system-wide-only&quot;
<br>
property for the MCA parameters, specifying that their system-wide
<br>
value, if it has been defined, can never be overridden. This implies
<br>
changing the existing parameters setting rules.
<br>
<p><p>Implementation:
<br>
<p>It should be noted that this feature is already described in
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/75">https://svn.open-mpi.org/trac/ompi/ticket/75</a> as follows:
<br>
&quot;another MCA parameter file that has &quot;privileged&quot; MCA parameters. This
<br>
file is hard-coded in the code base (based on $prefix, likely
<br>
&quot;$sysconfdir/openmpi-priv-mca-params.conf&quot;, or somesuch). Any parameters
<br>
set in this file will be treated specially and cannot be overridden.&quot;
<br>
<p>But we chose another way to implement this feature: the file
<br>
$sysconfdir/openmpi-mca-params.conf is kept with all the parameters
<br>
settings (even those that are considered as system-wide-only).
<br>
And the new file $sysconfdir/openmpi-priv-mca-params.conf is introduced
<br>
to contain only the list of the &quot;privileged&quot; parameters (not their value).
<br>
Doing it that way makes it easier to change the status of the MCA
<br>
parameters: moving them from privileged to non privileged is only a
<br>
matter of removing the new file, which preserves compatibility.
<br>
While with the solution proposed in the ticket, we have to merge both files.
<br>
<p>The configuration files are parsed in the following order:
<br>
1. $sysconfdir/openmpi-mca-params.conf.
<br>
2. $sysconfdir/openmpi-priv-mca-params.conf
<br>
3. $HOME/.openmpi/mca-param.conf
<br>
<p>When openmpi-priv-mca-params.conf is parsed, any parameter listed in
<br>
that file is moved from the mca_base_param_file_values list to a new
<br>
parallel list (mca_base_priv_param_file_values). The parameter remains
<br>
&quot;hidden&quot; in that new list.
<br>
The lookup order has been changed: the new
<br>
mca_base_priv_param_file_values list is the very 1st one to be scanned:
<br>
this is how we ensure that the &quot;privileged&quot; parameters are never
<br>
overwritten once defined on a system-wide basis.
<br>
<p>Other external changes:
<br>
1. The man page for mpirun(1) has been changed.
<br>
2. The ompi_info(1) output has been changed to reflect the status of
<br>
these &quot;privileged&quot; parameters. The status field can now be one of
<br>
&quot;read-only&quot;, &quot;writable&quot; or &quot;privileged&quot;.
<br>
3. A new option has been added to ompi_info(1): --privileged
<br>
it outputs only the list of parameters that have been defined as
<br>
system-wide-only.
<br>
<p><p>TODO list:
<br>
. Make this feature configurable.
<br>
. Output a warning message as described in the ticket.
<br>
<p><p>Possible extension to this functionality:
<br>
<p>This new functionality can be extended in the future in the following
<br>
way: allow the administrator to specify boundaries within which an MCA
<br>
parameter is allowed to be changed by a higher priority setting. This
<br>
means that the administrator should declare min and max values (or even
<br>
a set of discrete values) for any such parameter. Then, any higher
<br>
priority setting will be done only if the new value belongs to the
<br>
declared set.
<br>
In other word, each MCA parameter can be
<br>
&nbsp;&nbsp;&nbsp;1. set to a given value in openmpi-mca-params.conf
<br>
&nbsp;&nbsp;&nbsp;2. declared in openmpi-priv-mca-params.conf with its allowed boundaries
<br>
Then, if the user calls mpirun with that MCA parameter set in his
<br>
private mca-params.conf file, or in an AMCA file, or in an environment
<br>
variable, or on the command line, the new value will override the
<br>
system-wide value only if it is within the declared boundaries.
<br>
<p>This could be thought of as a future development.
<br>
<p><pre>
--
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6752.php">Chris Samuel: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>Previous message:</strong> <a href="6750.php">David Robertson: "[OMPI devel] suffix flag problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6758.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6758.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Maybe reply:</strong> <a href="6760.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Maybe reply:</strong> <a href="6794.php">Chris Samuel: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
