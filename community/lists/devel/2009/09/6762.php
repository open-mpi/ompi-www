<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 07:35:59 2009" -->
<!-- isoreceived="20090904113559" -->
<!-- sent="Fri, 04 Sep 2009 13:30:07 +0200" -->
<!-- isosent="20090904113007" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="1252063807.2636.263.camel_at_frecb000730.frec.bull.fr" -->
<!-- inreplyto="8429E171-4226-487C-8F4C-35C3F65C969D_at_cisco.com" -->
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
<strong>Date:</strong> 2009-09-04 07:30:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6763.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6761.php">Sylvain Jeaugey: "[OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>In reply to:</strong> <a href="6760.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6763.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2009-09-04 at 10:05 +0300, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 3, 2009, at 12:23 PM, Nadia Derbey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What: Define a way for the system administrator to prevent users from
</span><br>
<span class="quotelev2">&gt; &gt;       overwriting the default system-wide MCA parameters settings.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In general, I think this is great stuff.  I have a few nit picks.
</span><br>
<p>Thanks for having a look at it!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (BTW: you might want to run contrib/hg/build-hgignore.pl in your svn 
</span><br>
<span class="quotelev1">&gt; +hg tree to generate a proper .hgignore file...?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm currently unable to build the hg tree -- it gets a version with a  
</span><br>
<span class="quotelev1">&gt; newline in it which causes badness in the Makefile.  For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; *** Checking versions
</span><br>
<span class="quotelev1">&gt; checking for SVN version... done
</span><br>
<span class="quotelev1">&gt; checking Open MPI version... 1.4a1hgf11244ed72b5
</span><br>
<span class="quotelev1">&gt; up to changeset c4b117c5439b
</span><br>
<span class="quotelev1">&gt; checking Open MPI release date... Unreleased developer copy
</span><br>
<span class="quotelev1">&gt; checking Open MPI Subversion repository version... hgf11244ed72b5
</span><br>
<span class="quotelev1">&gt; up to changeset c4b117c5439b
</span><br>
<span class="quotelev1">&gt; checking for SVN version... done
</span><br>
<span class="quotelev1">&gt; ...etc.
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<p>??? May be something went wrong with my mqueues for the last changeset
<br>
(I recognize the qnew message in the version...).
<br>
<p>Until I fix that, the solution would be to revert back to changeset
<br>
db3595643dd2 (the very last changeset is not important at all).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you see this, or do you get a single-line version number?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When openmpi-priv-mca-params.conf is parsed, any parameter listed in
</span><br>
<span class="quotelev2">&gt; &gt; that file is moved from the mca_base_param_file_values list to a new
</span><br>
<span class="quotelev2">&gt; &gt; parallel list (mca_base_priv_param_file_values). The parameter remains
</span><br>
<span class="quotelev2">&gt; &gt; &quot;hidden&quot; in that new list.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't looked at the code deeply, so forgive me if I'm parsing this  
</span><br>
<span class="quotelev1">&gt; wrong: is the code actually reading the file into one list and then  
</span><br>
<span class="quotelev1">&gt; moving the values to another list?  If so, that seems a little  
</span><br>
<span class="quotelev1">&gt; hackish.  Can't it just read directly to the target list?
</span><br>
<p>We could read directly to target list if we had 2 files giving settings
<br>
(as described in ticket 75):
<br>
one for the &quot;classical&quot; system-wide parameters
<br>
one for for the &quot;privileged&quot;, system-wide parameters.
<br>
<p>But the solution I'm proposing is different: we have one file for the
<br>
settings, and one file that lists the parameters names that should not
<br>
be changed once they have been set:
<br>
<p>1) openmpi-mca-params.conf is the one we all know.
<br>
It contains the system-wide mca parameters settings.
<br>
<p>ex:
<br>
notifier_threshold_severity = notice
<br>
<p>2) openmpi-priv-mca-params.conf. This file contains the list of mca
<br>
parameters that cannot be changed once they have been set in
<br>
openmpi-mca-params.conf (only the parameter name is in that file, not
<br>
its setting).
<br>
<p>ex:
<br>
notifier_threshold_severity
<br>
<p><p>openmpi-mca-params.conf is parsed first. The list
<br>
mca_base_param_file_values is populated with all the parameters set in
<br>
that file.
<br>
Then openmpi-priv-mca-params.conf is parsed. This file, as described
<br>
earlier, only contains the list of those parameters that if set in
<br>
openmpi-mca-params.conf, shouldn't be changed. So, any parameter listed
<br>
in openmpi-priv-mca-params.conf is moved from mca_base_param_file_values
<br>
to a newly defined list (mca_base_priv_param_file_values).
<br>
Then the remaining files are parsed as usual.
<br>
As explained below, the lookup order is changed to ensure that
<br>
mca_base_priv_param_file_values is the very first list to be scanned: if
<br>
a parameter is found there, we are done.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The lookup order has been changed: the new
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_priv_param_file_values list is the very 1st one to be  
</span><br>
<span class="quotelev2">&gt; &gt; scanned:
</span><br>
<span class="quotelev2">&gt; &gt; this is how we ensure that the &quot;privileged&quot; parameters are never
</span><br>
<span class="quotelev2">&gt; &gt; overwritten once defined on a system-wide basis.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Other external changes:
</span><br>
<span class="quotelev2">&gt; &gt; 1. The man page for mpirun(1) has been changed.
</span><br>
<span class="quotelev2">&gt; &gt; 2. The ompi_info(1) output has been changed to reflect the status of
</span><br>
<span class="quotelev2">&gt; &gt; these &quot;privileged&quot; parameters. The status field can now be one of
</span><br>
<span class="quotelev2">&gt; &gt; &quot;read-only&quot;, &quot;writable&quot; or &quot;privileged&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems a little funky, too.  Isn't a privileged param actually  
</span><br>
<span class="quotelev1">&gt; read only (in an abstract sense)?  Meaning: you can't change priv  
</span><br>
<span class="quotelev1">&gt; param values, so they're &quot;read only&quot;.  &quot;Priv&quot; feels more like a  
</span><br>
<span class="quotelev1">&gt; &quot;source&quot; attribute, doesn't it...?  I.e., it's a read-only param, and  
</span><br>
<span class="quotelev1">&gt; the source of the attribute is the special priv file.
</span><br>
<p>It's true that I first thought of that read-only status, but I haven't
<br>
kept the idea: from an open mpi pov, read-only is an &quot;immutable&quot; status:
<br>
it is hard coded, and a variable that is read-only cannot easily become
<br>
rightable. So an mpi user who does an ompi_info and sees that a
<br>
parameter is read-only knows that he will never have a chance to change
<br>
it.
<br>
While these &quot;privileged&quot; params have a different status: they are
<br>
read-only while listed in the openmpi-priv-mca-params.conf, but they can
<br>
become writable if removed from that file.
<br>
<p>So, instead of read-only, why not &quot;system-wide-only&quot;?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 3. A new option has been added to ompi_info(1): --privileged
</span><br>
<span class="quotelev2">&gt; &gt; it outputs only the list of parameters that have been defined as
</span><br>
<span class="quotelev2">&gt; &gt; system-wide-only.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This also feels a bit weird -- I took a quick look through the --priv  
</span><br>
<span class="quotelev1">&gt; handling in ompi_info and it seems there's a bunch of corner cases.   
</span><br>
<span class="quotelev1">&gt; Can you describe what happens and what corner cases occur with --priv?
</span><br>
<p>Don't if I'm answering your question:
<br>
<p>Let's take the example above (notifier_threshold_severity decalred as
<br>
privileged, with a value = notice):
<br>
<p>$ ompi_info --param btl sm --privileged
<br>
should not output anything, since we don't have any priv parameter in
<br>
btl/sm
<br>
<p>$ ompi_info --param notifier twitter --privileged --parsable
<br>
mca:notifier:base:param:notifier_threshold_severity:value:notice
<br>
mca:notifier:base:param:notifier_threshold_severity:data_source:file: /home_nfs/derbeyn/DISTS/openmpi-default/etc/openmpi-mca-params.conf
<br>
mca:notifier:base:param:notifier_threshold_severity:status:privileged
<br>
mca:notifier:base:param:notifier_threshold_severity:help:Report all
<br>
events at or above this severity [default: critical]
<br>
mca:notifier:base:param:notifier_threshold_severity:deprecated:no
<br>
<p>Here notifier_threshold_severity is output since it belongs to the
<br>
notifier framework, but is not related to any component.
<br>
<p>$ ompi_info --param notifier all --privileged --parsable
<br>
<p>should have the same output as the previous command for the same reason
<br>
<p>$ ompi_info -a --privileged --parsable
<br>
<p>Still same as above since we are asking for all the parameters
<br>
<p><p>Well, after writing all this, I had a look at the code and discovered
<br>
what might look as an unhandled corner cases: --privileged not combined
<br>
with one of --all or --param: in that case, the &quot;--privileged&quot; option
<br>
has the same effect as ompi_info without any option.
<br>
ex: &quot;ompi_info --path bindir --privileged&quot; acts as &quot;ompi_info&quot;
<br>
May be a syntax error should be output in such a case?
<br>
<p>I'll look at this more carefully.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; TODO list:
</span><br>
<span class="quotelev2">&gt; &gt; . Make this feature configurable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per my prior post, I think that if we make this configurable, it has  
</span><br>
<span class="quotelev1">&gt; to be a configure script option (not a run-time mca parameter).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; . Output a warning message as described in the ticket.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That would be nice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Possible extension to this functionality:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This new functionality can be extended in the future in the following
</span><br>
<span class="quotelev2">&gt; &gt; way: allow the administrator to specify boundaries within which an MCA
</span><br>
<span class="quotelev2">&gt; &gt; parameter is allowed to be changed by a higher priority setting. This
</span><br>
<span class="quotelev2">&gt; &gt; means that the administrator should declare min and max values (or  
</span><br>
<span class="quotelev2">&gt; &gt; even
</span><br>
<span class="quotelev2">&gt; &gt; a set of discrete values) for any such parameter. Then, any higher
</span><br>
<span class="quotelev2">&gt; &gt; priority setting will be done only if the new value belongs to the
</span><br>
<span class="quotelev2">&gt; &gt; declared set.
</span><br>
<span class="quotelev2">&gt; &gt; In other word, each MCA parameter can be
</span><br>
<span class="quotelev2">&gt; &gt;    1. set to a given value in openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt; &gt;    2. declared in openmpi-priv-mca-params.conf with its allowed  
</span><br>
<span class="quotelev2">&gt; &gt; boundaries
</span><br>
<span class="quotelev2">&gt; &gt; Then, if the user calls mpirun with that MCA parameter set in his
</span><br>
<span class="quotelev2">&gt; &gt; private mca-params.conf file, or in an AMCA file, or in an environment
</span><br>
<span class="quotelev2">&gt; &gt; variable, or on the command line, the new value will override the
</span><br>
<span class="quotelev2">&gt; &gt; system-wide value only if it is within the declared boundaries.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This could be thought of as a future development.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agreed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li><strong>Next message:</strong> <a href="6763.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6761.php">Sylvain Jeaugey: "[OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>In reply to:</strong> <a href="6760.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6763.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
