<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 01:32:29 2009" -->
<!-- isoreceived="20090904053229" -->
<!-- sent="Fri, 04 Sep 2009 07:26:39 +0200" -->
<!-- isosent="20090904052639" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="1252041999.2636.179.camel_at_frecb000730.frec.bull.fr" -->
<!-- inreplyto="C6C5C984.3B9EB%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 01:26:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6759.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6757.php">Jeff Squyres: "Re: [OMPI devel] more bug/comments for current trunk"</a>
<li><strong>In reply to:</strong> <a href="6751.php">Graham, Richard L.: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6759.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6759.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-09-03 at 19:29 -0400, Graham, Richard L. wrote:
<br>
<span class="quotelev1">&gt; What happens if $sysconfdir/openmpi-priv-mca-params.conf is missing ?
</span><br>
<p>If it is missing, everything works as today: any parameter declared in
<br>
$sysconfdir/openmpi-mca-params.conf is considered as system-wide and can
<br>
be overwritten as usual.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can the file name ( openmpi-priv-mca-params.conf ) also be configurable ?
</span><br>
<p>No, it isn't, presently, but this can be changed if needed.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/3/09 5:23 AM, &quot;Nadia Derbey&quot; &lt;Nadia.Derbey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What: Define a way for the system administrator to prevent users from
</span><br>
<span class="quotelev1">&gt;       overwriting the default system-wide MCA parameters settings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: Letting the user completely free of changing any MCA parameter
</span><br>
<span class="quotelev1">&gt;      that has been defined on a system-wide basis may sometimes be
</span><br>
<span class="quotelev1">&gt;      undesirable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where: code can be found at
</span><br>
<span class="quotelev1">&gt; <a href="http://derbeyn&#64;bitbucket.org/derbeyn/opal-ro-mca-params/">http://derbeyn&#64;bitbucket.org/derbeyn/opal-ro-mca-params/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Description:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Letting the user completely free of changing any parameter that has been
</span><br>
<span class="quotelev1">&gt; defined on a system-wide basis may sometimes be undesirable. For
</span><br>
<span class="quotelev1">&gt; example, on a node with multiple TCP interfaces, the system
</span><br>
<span class="quotelev1">&gt; administrator may for some reason want to restrict MPI applications to a
</span><br>
<span class="quotelev1">&gt; fixed subset of these TCP interfaces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Today, there is no way for the system administrator to prevent users
</span><br>
<span class="quotelev1">&gt; from overwriting the default system-wide settings: even if he has
</span><br>
<span class="quotelev1">&gt; excluded eth0 from the interfaces usable by an MPI application, he
</span><br>
<span class="quotelev1">&gt; cannot prevent any user from explicitly using that excluded interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The purpose of this feature is to provide a new &quot;system-wide-only&quot;
</span><br>
<span class="quotelev1">&gt; property for the MCA parameters, specifying that their system-wide
</span><br>
<span class="quotelev1">&gt; value, if it has been defined, can never be overridden. This implies
</span><br>
<span class="quotelev1">&gt; changing the existing parameters setting rules.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Implementation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It should be noted that this feature is already described in
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/75">https://svn.open-mpi.org/trac/ompi/ticket/75</a> as follows:
</span><br>
<span class="quotelev1">&gt; &quot;another MCA parameter file that has &quot;privileged&quot; MCA parameters. This
</span><br>
<span class="quotelev1">&gt; file is hard-coded in the code base (based on $prefix, likely
</span><br>
<span class="quotelev1">&gt; &quot;$sysconfdir/openmpi-priv-mca-params.conf&quot;, or somesuch). Any parameters
</span><br>
<span class="quotelev1">&gt; set in this file will be treated specially and cannot be overridden.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But we chose another way to implement this feature: the file
</span><br>
<span class="quotelev1">&gt; $sysconfdir/openmpi-mca-params.conf is kept with all the parameters
</span><br>
<span class="quotelev1">&gt; settings (even those that are considered as system-wide-only).
</span><br>
<span class="quotelev1">&gt; And the new file $sysconfdir/openmpi-priv-mca-params.conf is introduced
</span><br>
<span class="quotelev1">&gt; to contain only the list of the &quot;privileged&quot; parameters (not their value).
</span><br>
<span class="quotelev1">&gt; Doing it that way makes it easier to change the status of the MCA
</span><br>
<span class="quotelev1">&gt; parameters: moving them from privileged to non privileged is only a
</span><br>
<span class="quotelev1">&gt; matter of removing the new file, which preserves compatibility.
</span><br>
<span class="quotelev1">&gt; While with the solution proposed in the ticket, we have to merge both files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configuration files are parsed in the following order:
</span><br>
<span class="quotelev1">&gt; 1. $sysconfdir/openmpi-mca-params.conf.
</span><br>
<span class="quotelev1">&gt; 2. $sysconfdir/openmpi-priv-mca-params.conf
</span><br>
<span class="quotelev1">&gt; 3. $HOME/.openmpi/mca-param.conf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When openmpi-priv-mca-params.conf is parsed, any parameter listed in
</span><br>
<span class="quotelev1">&gt; that file is moved from the mca_base_param_file_values list to a new
</span><br>
<span class="quotelev1">&gt; parallel list (mca_base_priv_param_file_values). The parameter remains
</span><br>
<span class="quotelev1">&gt; &quot;hidden&quot; in that new list.
</span><br>
<span class="quotelev1">&gt; The lookup order has been changed: the new
</span><br>
<span class="quotelev1">&gt; mca_base_priv_param_file_values list is the very 1st one to be scanned:
</span><br>
<span class="quotelev1">&gt; this is how we ensure that the &quot;privileged&quot; parameters are never
</span><br>
<span class="quotelev1">&gt; overwritten once defined on a system-wide basis.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other external changes:
</span><br>
<span class="quotelev1">&gt; 1. The man page for mpirun(1) has been changed.
</span><br>
<span class="quotelev1">&gt; 2. The ompi_info(1) output has been changed to reflect the status of
</span><br>
<span class="quotelev1">&gt; these &quot;privileged&quot; parameters. The status field can now be one of
</span><br>
<span class="quotelev1">&gt; &quot;read-only&quot;, &quot;writable&quot; or &quot;privileged&quot;.
</span><br>
<span class="quotelev1">&gt; 3. A new option has been added to ompi_info(1): --privileged
</span><br>
<span class="quotelev1">&gt; it outputs only the list of parameters that have been defined as
</span><br>
<span class="quotelev1">&gt; system-wide-only.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TODO list:
</span><br>
<span class="quotelev1">&gt; . Make this feature configurable.
</span><br>
<span class="quotelev1">&gt; . Output a warning message as described in the ticket.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Possible extension to this functionality:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This new functionality can be extended in the future in the following
</span><br>
<span class="quotelev1">&gt; way: allow the administrator to specify boundaries within which an MCA
</span><br>
<span class="quotelev1">&gt; parameter is allowed to be changed by a higher priority setting. This
</span><br>
<span class="quotelev1">&gt; means that the administrator should declare min and max values (or even
</span><br>
<span class="quotelev1">&gt; a set of discrete values) for any such parameter. Then, any higher
</span><br>
<span class="quotelev1">&gt; priority setting will be done only if the new value belongs to the
</span><br>
<span class="quotelev1">&gt; declared set.
</span><br>
<span class="quotelev1">&gt; In other word, each MCA parameter can be
</span><br>
<span class="quotelev1">&gt;    1. set to a given value in openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt;    2. declared in openmpi-priv-mca-params.conf with its allowed boundaries
</span><br>
<span class="quotelev1">&gt; Then, if the user calls mpirun with that MCA parameter set in his
</span><br>
<span class="quotelev1">&gt; private mca-params.conf file, or in an AMCA file, or in an environment
</span><br>
<span class="quotelev1">&gt; variable, or on the command line, the new value will override the
</span><br>
<span class="quotelev1">&gt; system-wide value only if it is within the declared boundaries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This could be thought of as a future development.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6759.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6757.php">Jeff Squyres: "Re: [OMPI devel] more bug/comments for current trunk"</a>
<li><strong>In reply to:</strong> <a href="6751.php">Graham, Richard L.: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6759.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6759.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
