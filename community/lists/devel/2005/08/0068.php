<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug  3 09:22:29 2005" -->
<!-- isoreceived="20050803142229" -->
<!-- sent="Wed, 3 Aug 2005 09:22:27 -0500" -->
<!-- isosent="20050803142227" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="New MCA param API" -->
<!-- id="43d1326a54ca12c0fe8fb3a86035c291_at_open-mpi.org" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-03 09:22:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0069.php">Jeffrey Squyres: "Fantastic"</a>
<li><strong>Previous message:</strong> <a href="0067.php">Ralph H. Castain: "New simplified registry API's"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The new MCA param API has been committed.  I request that you start 
<br>
converting over your components to use this API as soon as convenient 
<br>
-- for one thing, the [new] ability to pass in a help string describing 
<br>
the parameter is a major benefit to users (and forgetful developers ;-) 
<br>
).
<br>
<p>There are 2 main functions (one for int, one for string -- they're both 
<br>
similar, so I'll just show the int function):
<br>
<p>int mca_base_param_reg_int(const mca_base_component_t *component,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const char *param_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const char *help_msg,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool internal,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool read_only,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int default_value,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *current_value);
<br>
<p>Everything is documented in opal/mca/base/mca_base_param.h (doxygen), 
<br>
but here's the quick version:
<br>
<p>- This function is slightly different in name from the old functions 
<br>
(&quot;reg&quot; vs. &quot;register&quot;); the old functions still exist so that we don't 
<br>
break the code base.  However, I'd like to remove the old ones someday 
<br>
in the not-distant future (and therefore get rid of the 
<br>
similar-but-different function names).
<br>
<p>- You pass in a pointer to the component and the param name.  The 
<br>
framework and component name are derived from the component pointer.
<br>
<p>- It is strongly advised to supply a help string that describes what 
<br>
the parameter is, how it is used, and what its legal values are (don't 
<br>
worry about word wrapping -- just one long string is fine).  This 
<br>
string will be displayed in ompi_info output.
<br>
<p>- You can set the param to be &quot;internal&quot;, meaning that it won't be 
<br>
displayed in ompi_info (by default), and also set it to be &quot;read_only&quot;, 
<br>
meaning that it's considered to be information only and cannot be 
<br>
changed at run time (e.g., a string indicating what version of GM the 
<br>
GM BTL component was linked against).
<br>
<p>- Finally, if you supply a non-NULL pointer for current_value, it will 
<br>
lookup the current value and return it to you.  This prevents you from 
<br>
needing to do a two step register-then-lookup, as we have done in many 
<br>
of the components.
<br>
<p>The string version is essentially the same -- just s/int/string/ in the 
<br>
function name and change the &quot;int&quot; params to &quot;char *&quot;.
<br>
<p>There's also 2 functions for non-component-related parameters (e.g., 
<br>
MPI-layer parameters; they take char*'s for the type name instead of a 
<br>
pointer to the component) -- mca_base_param_reg_{int|string}_name().  
<br>
See mca_base_param.h for details.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0069.php">Jeffrey Squyres: "Fantastic"</a>
<li><strong>Previous message:</strong> <a href="0067.php">Ralph H. Castain: "New simplified registry API's"</a>
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
