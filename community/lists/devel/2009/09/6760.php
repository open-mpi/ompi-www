<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 03:05:47 2009" -->
<!-- isoreceived="20090904070547" -->
<!-- sent="Fri, 4 Sep 2009 10:05:41 +0300" -->
<!-- isosent="20090904070541" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="8429E171-4226-487C-8F4C-35C3F65C969D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 03:05:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6761.php">Sylvain Jeaugey: "[OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>Previous message:</strong> <a href="6759.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Graham, Richard L.: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6762.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6762.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6763.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6764.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 3, 2009, at 12:23 PM, Nadia Derbey wrote:
<br>
<p><span class="quotelev1">&gt; What: Define a way for the system administrator to prevent users from
</span><br>
<span class="quotelev1">&gt;       overwriting the default system-wide MCA parameters settings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>In general, I think this is great stuff.  I have a few nit picks.
<br>
<p>(BTW: you might want to run contrib/hg/build-hgignore.pl in your svn 
<br>
+hg tree to generate a proper .hgignore file...?)
<br>
<p>I'm currently unable to build the hg tree -- it gets a version with a  
<br>
newline in it which causes badness in the Makefile.  For example:
<br>
<p>------
<br>
*** Checking versions
<br>
checking for SVN version... done
<br>
checking Open MPI version... 1.4a1hgf11244ed72b5
<br>
up to changeset c4b117c5439b
<br>
checking Open MPI release date... Unreleased developer copy
<br>
checking Open MPI Subversion repository version... hgf11244ed72b5
<br>
up to changeset c4b117c5439b
<br>
checking for SVN version... done
<br>
...etc.
<br>
------
<br>
<p>Do you see this, or do you get a single-line version number?
<br>
<p><span class="quotelev1">&gt; When openmpi-priv-mca-params.conf is parsed, any parameter listed in
</span><br>
<span class="quotelev1">&gt; that file is moved from the mca_base_param_file_values list to a new
</span><br>
<span class="quotelev1">&gt; parallel list (mca_base_priv_param_file_values). The parameter remains
</span><br>
<span class="quotelev1">&gt; &quot;hidden&quot; in that new list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I haven't looked at the code deeply, so forgive me if I'm parsing this  
<br>
wrong: is the code actually reading the file into one list and then  
<br>
moving the values to another list?  If so, that seems a little  
<br>
hackish.  Can't it just read directly to the target list?
<br>
<p><span class="quotelev1">&gt; The lookup order has been changed: the new
</span><br>
<span class="quotelev1">&gt; mca_base_priv_param_file_values list is the very 1st one to be  
</span><br>
<span class="quotelev1">&gt; scanned:
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
<span class="quotelev1">&gt;
</span><br>
<p>This seems a little funky, too.  Isn't a privileged param actually  
<br>
read only (in an abstract sense)?  Meaning: you can't change priv  
<br>
param values, so they're &quot;read only&quot;.  &quot;Priv&quot; feels more like a  
<br>
&quot;source&quot; attribute, doesn't it...?  I.e., it's a read-only param, and  
<br>
the source of the attribute is the special priv file.
<br>
<p><span class="quotelev1">&gt; 3. A new option has been added to ompi_info(1): --privileged
</span><br>
<span class="quotelev1">&gt; it outputs only the list of parameters that have been defined as
</span><br>
<span class="quotelev1">&gt; system-wide-only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This also feels a bit weird -- I took a quick look through the --priv  
<br>
handling in ompi_info and it seems there's a bunch of corner cases.   
<br>
Can you describe what happens and what corner cases occur with --priv?
<br>
<p><span class="quotelev1">&gt; TODO list:
</span><br>
<span class="quotelev1">&gt; . Make this feature configurable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Per my prior post, I think that if we make this configurable, it has  
<br>
to be a configure script option (not a run-time mca parameter).
<br>
<p><span class="quotelev1">&gt; . Output a warning message as described in the ticket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That would be nice.
<br>
<p><span class="quotelev1">&gt; Possible extension to this functionality:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This new functionality can be extended in the future in the following
</span><br>
<span class="quotelev1">&gt; way: allow the administrator to specify boundaries within which an MCA
</span><br>
<span class="quotelev1">&gt; parameter is allowed to be changed by a higher priority setting. This
</span><br>
<span class="quotelev1">&gt; means that the administrator should declare min and max values (or  
</span><br>
<span class="quotelev1">&gt; even
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
<span class="quotelev1">&gt;    2. declared in openmpi-priv-mca-params.conf with its allowed  
</span><br>
<span class="quotelev1">&gt; boundaries
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
<p><p>Agreed.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6761.php">Sylvain Jeaugey: "[OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>Previous message:</strong> <a href="6759.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Graham, Richard L.: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6762.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6762.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6763.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6764.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
